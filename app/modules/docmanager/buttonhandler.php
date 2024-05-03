<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='Save')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Save($params);
}
if($buttId=='Cancel')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Cancel($params);
}
if($buttId=='Add_files')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Add_files($params);
}
if($buttId=='Create_folder')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Create_folder($params);
}
if($buttId=='Download')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Download($params);
}





// create table and non table handlers
function buttonHandler_Save($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $dal;
$tblDocs = $dal->Table("doc_files");
$tblVers = $dal->Table("doc_files_versions");
if(!$_SESSION["current_folder"])
	$_SESSION["current_folder"] = "0";

if(!is_dir($_SESSION["upload_path"])){
	$_SESSION["message"] = GetCustomLabel("upload_path_exist");
	$_SESSION["message"] = str_replace("%upload_path%",$_SESSION["show_upload_path"],$_SESSION["message"]);
	$_SESSION["message_style"] = "alert-danger";
}
else{
	if( is_array($_SESSION["pending_files"]) ) 
	{
		foreach($_SESSION["pending_files"] as $file)
		{
			$isCatStr = DBLookup("select ".addFieldWrappers("isStructure")." from ".AddTableWrappers("doc_settings"));
			if($isCatStr){
				$p = strrpos($file["name"],"_");
				$p2 = strrpos($file["usrName"],".");
				$oldName = substr($file["usrName"],0,$p2);
				$oldName = $oldName.substr($file["name"],$p);
				$newFName = $file["usrName"];
				$newPath = str_replace($oldName,$newFName,$file["name"]);
				docman_rename($file["name"],$newPath);
				$file["usrName"] = $newFName;
				$file["name"] = $newPath;
			}

			if(!file_exists($file["name"])){
					$_SESSION["message"] = GetCustomLabel("files_added");
					$_SESSION["message_style"] = "alert-danger";
					break;
			}

			$contents = myfile_get_contents($file["name"]);
			$ext = CheckImageExtension($file["usrName"]);
			$thumbfile = "";
			if(strtolower($ext) == ".bmp" || strtolower($ext) == ".gif" || strtolower($ext) == ".jpeg" || strtolower($ext) == ".jpg" || strtolower($ext) == ".png"){
				$thumb = CreateThumbnail($contents, "70", $ext);
				$p = strrpos($file['name'],"/");
				$filename = str_replace(substr($file['name'],$p), "/th_".substr($file['name'],$p+1),$file['name']);
				runner_save_file($filename, $thumb);
				$thumbfile = "th_".substr($file['name'],$p+1);
			}
			$tblDocs->Value["parent_folder_id"]=$_SESSION["current_folder"];
			$tblDocs->Value["file_type"]="file";
			$tblDocs->Value["file"]=my_json_encode(array($file));
			if($thumbfile)
				$tblDocs->Value["thumb"]=$thumbfile;
			$tblDocs->Value["hash"]=generatePassword(HASH_LENGTH);
			$tblDocs->Value["name"]=$file["usrName"];
			$tblDocs->Value["ownerid"]=$_SESSION["user_id"];
			$tblDocs->Value["created"]=now();
			
			$folderSQL = "select * from ".AddTableWrappers("doc_files")." where ".addFieldWrappers("id")." = ".$_SESSION["current_folder"];
			$folderRs = CustomQuery($folderSQL);
			if($folderData = db_fetch_array($folderRs)){
					$tblDocs->Value["share_ro"] = $folderData["share_ro"];
					$tblDocs->Value["share_type"] = $folderData["share_type"];
					$tblDocs->Value["share_users"] = $folderData["share_users"];
			}

			$isCatStr = DBLookup("select ".addFieldWrappers("isStructure")." from ".AddTableWrappers("doc_settings"));
			$isVersions = DBLookup("select ".addFieldWrappers("isVersions")." from ".AddTableWrappers("doc_settings"));
			if(!$isCatStr && $isVersions){
				$rsfind = DB::Select("doc_files", array("name"=>$file["usrName"],"parent_folder_id"=>$_SESSION["current_folder"]));
				if($datafind = $rsfind->fetchAssoc()){
					$tblVers->Value["docid"] = $datafind["id"];
					$tblVers->Value["file"] = $datafind["file"];
					$tblVers->Value["ownerid"] = $_SESSION["user_id"];
					$tblVers->Value["created"] = $datafind["created"];
					$tblVers->Add();
					$tblDocs->Param["id"] = $datafind["id"];
					$tblDocs->Update();
				}
				else
					$tblDocs->Add();
			}
			else
				$tblDocs->Add();
				
		}
		if(!$_SESSION["message"]){
			$c = count($_SESSION["pending_files"]);
			$_SESSION["message"] = GetCustomLabel("were_deleted");
			$_SESSION["message"] = str_replace("%count%", $c, $_SESSION["message"]);
			$_SESSION["message_style"] = "alert-info";
		}
	}
}

unset($_SESSION["pending_files"]);
unset($_SESSION["dublArray"]);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Cancel($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// delete upload files
deletePendingFiles($_SESSION["pending_files"]);

// clear session variable
unset($_SESSION["pending_files"]);
unset($_SESSION["dublArray"]);;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Add_files($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Create_folder($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Download($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	unset($_SESSION["zipfiles"]);
$_SESSION["zipfiles"]=array();
while ($record = $button->getNextSelectedRecord()) {
	$_SESSION["zipfiles"][]=array("file_type"=>$record["file_type"], "file"=>$record["file"], "id"=>$record["id"], "name"=>$record["name"]);
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
?>