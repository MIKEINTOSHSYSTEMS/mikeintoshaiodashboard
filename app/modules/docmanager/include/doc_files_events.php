<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_doc_files  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeDelete"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["AfterMassDelete"]=true;

		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeShowList"]=true;


		$this->events["CustomAdd"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeShowEdit"]=true;


		$this->events["GetTablePermissions"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		if(postvalue("delete_file_version")){
	DB::Delete("doc_files_versions". array("id"=>postvalue("delete_file_version")));
	die();
}
if(postvalue("a") == "checkdublicate"){
	if(postvalue("link")!=""){
		foreach($_SESSION["dublArray"] as $dubl){
			foreach($_SESSION["pending_files"] as $i=>$pending){
				if($dubl["name"] == $pending["name"]){
					switch(postvalue("link")){
						case "cancel":
							unlink($pending["name"]);
							unset($_SESSION["pending_files"][$i]);
							break;
						case "replace":
							$p = strrpos($pending["name"],"/");
							$fname = substr($pending["name"],0,$p)."/".$dubl["usrName"];
							docman_rename($pending["name"],$fname);
							$rs = DB::Select("doc_files", array("file_type"=>'file'));
							while($data = $rs->fetchAssoc()){
								$fArray = my_json_decode($data["file"]);
								$fileArray = $fArray[0];
								if($fileArray["name"] == $fname){
									$fileArray["size"] = $dubl["size"];
									$id = $data["id"];
									$fileArray["name"] = str_replace("\\","\\\\",$fileArray["name"]);
									$fileArray["name"] = str_replace("/","\/",$fileArray["name"]);
									$fileArray["type"] = str_replace("/","\/",$fileArray["type"]);
									DB::Exec("update doc_files set file='".my_json_encode(array($fileArray))."' where id=".$id);
									break;
								}
							}

							$contents = myfile_get_contents($fname);
							$ext = CheckImageExtension($dubl["name"]);
							if(strtolower($ext) == ".bmp" || strtolower($ext) == ".gif" || strtolower($ext) == ".jpeg" || strtolower($ext) == ".jpg" || strtolower($ext) == ".png"){
								$thumb = CreateThumbnail($contents, "70", $ext);
								$p = strrpos($fname,"/");
								$filename = str_replace(substr($fname,$p), "/th_".substr($fname,$p+1),$fname);
								unlink($filename);
								runner_save_file($filename, $thumb);
							}


							unset($_SESSION["pending_files"][$i]);
							break;
						case "newname":
							$p = strrpos($pending["name"],"/");
							$fname = substr($pending["name"],0,$p)."/".$dubl["newName"];
							docman_rename($pending["name"],$fname);
							$_SESSION["pending_files"][$i]["usrName"] = $dubl["newName"];
							$_SESSION["pending_files"][$i]["name"] = $fname;
							break;
					}
				}
			}
		}
		

		unset($_SESSION["dublArray"][0]);
		$tmparr = array();
		foreach($_SESSION["dublArray"] as $val)
			$tmparr[] = $val;
		$_SESSION["dublArray"] = $tmparr;
	}

	$dublArray = array();
	foreach($_SESSION["dublArray"] as $i=>$file){
			echo my_json_encode($file);
			die();
	}
	echo "";
	die();
}

if(postvalue("a")=="getversions" && postvalue("id")){
	global $cLoginTable, $cUserNameField,$locale_info;
	$icon = "<svg width='2.5em' height='2.5em' viewBox='0 0 16 16' class='bi bi-three-dots-vertical icon_version' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'></path>/svg>";
	$cnt = DBLookup("select count(".addFieldWrappers("id").") as cnt from ".addTableWrappers("doc_files_versions")." where ".addFieldWrappers("docid")."=".postvalue("id"));
	$rs = DB::Select("doc_files", array("id"=>postvalue("id")));
	$data = $rs->fetchAssoc();
	$fileArray = my_json_decode($data["file"]);
	$name=$fileArray[0]["usrName"]; 
	$showname = $name;
	if(strlen($name)>35)
		$showname = substr($name,0,22)."...".substr($name,strlen($name)-10);
	$arr = explode(" ",$data["created"]);
	$arrD = explode("-", $arr[0]);
	$arrT = explode(":", $arr[1]);
	$dtime = array_merge($arrD, $arrT);
	DB::SetConnection(DB::ConnectionByTable($cLoginTable));
	$user = DBLookup("select ".addFieldWrappers($cUserNameField)." from ".AddTableWrappers($cLoginTable)." where ".addFieldWrappers("id")."=".$data["ownerid"]);
	DB::SetConnection(DB::DefaultConnection());
	if(strtoupper(substr($name,-3)) == "PDF")
		$file = "<input id='popup_hidden".$data["id"]."' type=hidden value='pdf.js/web/viewer.html?file=".rawurlencode($name)."&table=doc_files&field=file&pageType=list&key1=".$data["id"]."'>";
	else
		$file = "<input id='popup_hidden".$data["id"]."' type=hidden value='doc_files_list.php?file=".rawurlencode($name)."&table=doc_files&field=file&pageType=list&key1=".$data["id"]."'>";
	$content = "<tr><td class='td_version'><b>".GetCustomLabel("current_version")."</b>&nbsp;&nbsp;&nbsp;".$showname."</td><td width='50px' rowspan=2 class='td_version' popup='yes' current='yes' id='popup_action".$data["id"]."'>".$icon."</td></tr>";
	$content.= "<tr><td class='td_version'>".str_format_datetime($dtime)."&nbsp;&nbsp;&nbsp;".$user.$file."</td></tr>";

	$rs = DB::Query("select * from ".AddTableWrappers("doc_files_versions")." where ".addFieldWrappers("docid")."=".postvalue("id")." order by ".addFieldWrappers("created")." desc");
	while($data = $rs->fetchAssoc()){	
		$arr = explode(" ",$data["created"]);
		$arrD = explode("-", $arr[0]);
		$arrT = explode(":", $arr[1]);
		$dtime = array_merge($arrD, $arrT);
		DB::SetConnection(DB::ConnectionByTable($cLoginTable));
		$user = DBLookup("select ".addFieldWrappers($cUserNameField)." from ".AddTableWrappers($cLoginTable)." where ".addFieldWrappers("id")."=".$data["ownerid"]);
		DB::SetConnection(DB::DefaultConnection());
		$fileArray = my_json_decode($data["file"]);
		$name=$fileArray[0]["usrName"]; 
		$showname = $name;
		if(strlen($name)>35)
			$showname = substr($name,0,22)."...".substr($name,strlen($name)-10);

		if(strtoupper(substr($name,-3)) == "PDF")
			$file = "<input id='popup_hidden".$data["id"]."' type=hidden value='pdf.js/web/viewer.html?file=".rawurlencode($name)."&table=doc_files_versions&field=file&pageType=list&key1=".$data["id"]."'>";
		else
			$file = "<input id='popup_hidden".$data["id"]."' type=hidden value='doc_files_list.php?file=".rawurlencode($name)."&table=doc_files_versions&field=file&pageType=list&key1=".$data["id"]."'>";

		$content.= "<tr><td class='td_version td_version_up'><b>".GetCustomLabel("version")." ".$cnt."</b>&nbsp;&nbsp;&nbsp;".$showname."</td><td width='50px' rowspan=2 class='td_version td_version_up' popup='yes' id='popup_action".$data["id"]."'>".$icon."</td></tr>";
		$content.= "<tr><td class='td_version'>".str_format_datetime($dtime)."&nbsp;&nbsp;&nbsp;".$user.$file."</td></tr>";
		$cnt--;
	}
	$content.= "<tr><td colspan=2 align=right class='td_version_close td_version_up'><input type='button' class='btn btn-default' onclick='$(\"versionslist\").hide()' value='Close'></td></tr>";
	$content = "<table>".$content."</table>";
	echo $content;
	die();
}
if(postvalue("a")=="logout"){
	header("Location: login.php");
	die();
}

if(postvalue("file")){
	$id = postvalue("key1");
	if(postvalue("table") =="doc_files"){
		$list=DB::Select("doc_files", array("id"=>$id));
		$curitem = $list->fetchAssoc();
		$downloads = 1;
		if($curitem["downloads"])
			$downloads = $curitem["downloads"] + 1;
		DB::Update("doc_files", array("downloads"=>$downloads), array("id"=>$id));
	}
	header("Location:mfhandler.php?file=".rawurlencode(postvalue("file"))."&table=".rawurlencode(postvalue("table"))."&field=file&pageType=list&key1=".postvalue("key1"));
	die();
}

if(postvalue("a") == "sendfile"){
	$to = postvalue("to");
	$subj = postvalue("subj");
	$body = postvalue("body");
	$hash = postvalue("hash");
	$rs = DB::Select("doc_files", array("hash"=>$hash));
	if($data = $rs->fetchAssoc()){
		$fileArray = my_json_decode($data["file"]);
		$file = $fileArray[0]["name"];
		$fname = $fileArray[0]["usrName"];
		if(!isAbsolutePath($file))
			$file = getabspath($file);
		$attachments =  array(array('path' => $file, 'name' => $fname, 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;
		$ret=runner_mail(array('to' => $to, 'subject' => $subj, 'body' => $body." ", 'attachments' => $attachments));
		$_SESSION["message"] = GetCustomLabel("file_sent");
		$_SESSION["message"] = str_replace("%user%", $to, $_SESSION["message"]);
		$_SESSION["message_style"] = "alert-info";
		if(!$ret["mailed"])
			echo $ret["message"];
	}
	else
		echo "No files found";
	die();
}

$_SESSION["deletedFiles"]=0;
unset($_SESSION["pending_files"]);
unset($_SESSION["dublArray"]);
global $strTableName;

$searchStarted = true;
if($_GET["qs"] == "" || $_GET["a"] == "showall")
	$searchStarted = false;
if( $searchStarted && strlen($_SESSION[$strTableName."_advsearch"]) )
{
	 $searchClauseObj = SearchClause::UnserializeObject($_SESSION[$strTableName."_advsearch"]);
	 $searchStarted = $searchClauseObj->isSearchFunctionalityActivated();
}
$_SESSION["searching"] = $searchStarted;

if (postvalue("hash") && getFileNameFromURL()=="doc_files_list.php"){
	$id = DBLookup("select ".addFieldWrappers("id")." from ".AddTableWrappers("doc_files")." where ".addFieldWrappers("hash")."='".postvalue("hash")."'");
	$_SESSION["mkdirForFiles"] = $_SESSION["show_upload_path"]."/".GoodFieldName(Security::getUserName()).getFullPathToFolder($id);
}
else{
//if(postvalue("folder")=="0" || !isset($_SESSION["mkdirForFiles"]))
	$_SESSION["mkdirForFiles"] = $_SESSION["show_upload_path"]."/".GoodFieldName(Security::getUserName());
}
;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, $pageObject)
{

		//Security::getUserName()!="Guest" &&

if($deleted_values["ownerid"]==$_SESSION["user_id"] || $_SESSION["user_type"]=="admin" || $deleted_values["share_ro"]!="Read only")
{
	$isCatStr = DBLookup("select ".addFieldWrappers("isStructure")." from ".AddTableWrappers("doc_settings"));
	if($deleted_values["file_type"]=="folder"){
		if($isCatStr){
			$delpath = $_SESSION["show_upload_path"]."/".GoodFieldName(Security::getUserName()).getFullPathToFolder($deleted_values["id"]);
			docman_rmdir(getabspath($delpath));
		}
	}
	else{
		$fileArray = my_json_decode($deleted_values["file"]);
		$filename = $fileArray[0]["name"];
		unlink($filename);
		if($deleted_values["thumb"]){
			$p = strrpos($filename,"/");
			$filename = str_replace(substr($filename,$p), "/th_".substr($filename,$p+1),$filename);
			unlink($filename);
		}
	}
	delRecursive($deleted_values['id']);
	//return true;
}
//else
//	return false;


;
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, $pageObject)
{

		$c=$_SESSION["deletedFiles"];
$_SESSION["message"] = GetCustomLabel("were_deleted");
$_SESSION["message"] = str_replace("%count%", $c, $_SESSION["message"]);
if(Security::getUserName()=="Guest" || Security::getUserName()==""){
	header("Location: doc_files_list.php?hash=".$_SESSION["hash_for_delete"]);
	die();
}
;
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After group of records deleted
function AfterMassDelete($records_deleted, $pageObject)
{

		$c=$_SESSION["deletedFiles"];
$_SESSION["message"] = GetCustomLabel("were_deleted");
$_SESSION["message"] = str_replace("%count%", $c, $_SESSION["message"]);
if(Security::getUserName()=="Guest" || Security::getUserName()==""){
	header("Location: doc_files_list.php?hash=".$_SESSION["hash_for_delete"]);
	die();
}

if($_SESSION["searchDelete"]){
	if($_SESSION["countRecord"]-$_SESSION["deletedFiles"]==0)
		header("Location: doc_files_list.php?folder=0&a=showall");
	else
		header("Location: doc_files_list.php".$_SESSION["searchDelete"]);
	die();
}


;
} // function AfterMassDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		if(Security::getUserName()=="Guest" || $_SESSION["user_type"]!="admin" && $data["ownerid"]!=$_SESSION["user_id"])
{
	$perm = GetUserPermissions("doc_files");
	if($data["share_ro"] == "Read only" || strpos($perm, "E")===false){
		$record["inlineeditlink_attrs"] = "style='display:none'";
	}
}
// && $data["file_type"]=="file"
if((postvalue("qs") || postvalue("q"))){
	$res = getSearchPath($data["parent_folder_id"]);
	$record["search_path"] = $res;
}

$_SESSION["countRecord"]++;
;
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddCSSFile("css/dropzone.css");
$pageObject->AddJSFile("dropzone.js");
$pageObject->AddJSFile("docman_scripts.js", "dropzone.js");


$pageObject->hideItem("custom_button");
$pageObject->hideItem("custom_button1");
//$xt->assign("searchform_block", Security::getUserName()!="Guest");
//$xt->assign("searchPanelTopButtons",Security::getUserName()!="Guest");
//$xt->assign("container_recordcontrols_1",Security::getUserName()!="Guest");
//$xt->assign("container_recordcontrols",true);
//$xt->assign("asearch_link",Security::getUserName()!="Guest");
//$xt->assign("export_link", false);
//$xt->assign("menu_block",Security::getUserName()!="Guest");

//$xt->assign("item_custom_button", "style='display:none'");
//$xt->assign("item_custom_button1", "style='display:none'");

if(Security::getUserName()=="Guest"){
	$xt->assign("searchform_text", false);
	$xt->assign("searchform_showall", false);
	$xt->assign("searchform_search", false);
	$xt->assign("item_custom_button2", "style='display:none'");
	$xt->assign("item_custom_button3", "style='display:none'");
	$xt->assign("item_menu", "style='display:none'");
	$xt->assign("item_list_options", "style='display:none'");
	$xt->assign("left_block", false);
}



if(postvalue("qs") || postvalue("q"))
	$xt->assign("container_breadcrumbs",false);
	
$perm = GetUserPermissions("doc_files");

if(Security::getUserName()=="Guest")
	$xt->assign("home_link","#");

if(strpos($perm, "D")!==false && Security::getUserName() != "Guest" || $_SESSION["user_type"]=="admin")
	$xt->assign("deleteselected_link",true);
else
	$xt->assign("deleteselected_link",false);

$xt->assign("item_custom_button2", "");
$xt->assign("item_custom_button3", "");

$_SESSION["style_dropzone"] = "";
if(Security::getUserName()=="Guest" || strpos($perm, "A")===false || postvalue("qs") || postvalue("q"))
	$_SESSION["style_dropzone"] = "style='display:none'";


if($_GET["qs"] != "" || $_SESSION["searching"]){
	$xt->assign("item_custom_button2", "style='display:none'");
	$xt->assign("item_custom_button3", "style='display:none'");
}
if($_GET["q"] != ""){
	$xt->assign("item_custom_button2", "style='display:none'");
	$xt->assign("item_custom_button3", "style='display:none'");
}

if($_SESSION["user_type"] == "admin")
	$xt->assign("back_to_menu", true);	

if (strlen($_SESSION["message"])>0) {
		$xt->assign("message_hiddenattr","style='text-align:center'");
		if(!$_SESSION["message_style"])
				$_SESSION["message_style"]="alert-info";
		$xt->assign("message_class",$_SESSION["message_style"]);
		$xt->assign("message_block", true);	
		$xt->assign("message", $_SESSION["message"]);	
		$_SESSION["message"]="";
}
else
{
//	if(Security::getUserName()!="Guest" && (strpos($perm, "A")!==false || strpos($perm, "E")!==false))
//		$xt->assign("message","<span id='fileBrowserMessage'>Use the <a id='fileBrowserLink' href='#'>file browser</a> to add files.</span>");
//	else
		if(!postvalue("qs") && !postvalue("q"))
				$xt->assign("message_block",false);
}

if (postvalue("hash") && getFileNameFromURL()=="doc_files_list.php" && $_SESSION["user_type"]!="admin"){
	$rs = CustomQuery("select * from ".AddTableWrappers("doc_files")." where ".addFieldWrappers("hash")."='". postvalue("hash") ."'");
	$data = db_fetch_array($rs);
	if(Security::getUserName()=="Guest"){
		$xt->assign("item_custom_button2", "style='display:none'");
		$xt->assign("item_custom_button3", "style='display:none'");
		if($data["share_type"]!=3){
				header("Location: login.php");
				die();
			}
	}
	if($data["share_needDate"] && Security::getUserName()!=$data["ownerid"]){
		$strDate = str_replace("00:00:00","",$data["share_date"]);
		if(strtotime($strDate." 23:59:59") - strtotime(now())<0){
			header("Location: login.php");
			die();
		}
	}
/*	$_SESSION["upload_path"] = DBLookup("select ".addFieldWrappers("upload_path")." from ".AddTableWrappers("doc_settings"));
	$_SESSION["show_upload_path"] = $_SESSION["upload_path"];
	if(!isAbsolutePath($_SESSION["upload_path"]))
			$_SESSION["upload_path"] = getabspath($_SESSION["upload_path"]);*/
 //&& Security::getUserName() == "Guest"
	if($data["share_ro"] == "Read only"){
			$xt->assign("item_custom_button2", "style='display:none'");
			$xt->assign("item_custom_button3", "style='display:none'");
			$xt->assign("deleteselected_link",false);
	}
	else{
			$xt->assign("item_custom_button2", "");
			$xt->assign("item_custom_button3", "");
			$xt->assign("deleteselected_link",true);
			if($data["file_type"] == "folder")
				$xt->assign("style_dropzone","style='display:\"\"'");
			else{
				$xt->assign("item_custom_button2", "style='display:none'");
				$xt->assign("item_custom_button3", "style='display:none'");
			}
	}
}

if($_SESSION["user_type"]!="admin" && Security::getUserName() != "Guest"){
	$str = "select * from ".AddTableWrappers("doc_files")." where ".addFieldWrappers("id")."=".$_SESSION["current_folder"]." and ".addFieldWrappers("ownerid")."<>".$_SESSION["user_id"];
	$rs = CustomQuery($str);
	if($data = db_fetch_array($rs)){
		if($data["share_ro"] == "Read only"){
				$xt->assign("item_custom_button2", "style='display:none'");
				$xt->assign("item_custom_button3", "style='display:none'");
				$xt->assign("deleteselected_link",false);
		}
	}
}


;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Custom add
function CustomAdd(&$values, &$keys, &$error, $inline, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

return false;
;
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		if($oldvalues["file_type"] == "file"){
	$arr = my_json_decode($oldvalues["file"]);
	$arr[0]["usrName"]=$values["name"];
	$values["file"] = my_json_encode($arr);
}
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		if ($values['file_type']=='file') {
	$xt->assign("description_fieldblock",false);
}
;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Get Table Permissions
function GetTablePermissions($permissions)
{

		//if (Security::getUserName()=="Guest")
//	$permissions="SD";

return $permissions;

;
} // function GetTablePermissions

		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>