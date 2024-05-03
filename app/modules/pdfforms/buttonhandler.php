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


if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}
if($buttId=='Fill_PDF')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Fill_PDF($params);
}

if( $eventId == 'editing_sql_query' && "pdf_forms" == $table )
{
	require_once("include/pdf_forms_variables.php");
	$cipherer = new RunnerCipherer("pdf_forms");
	fieldEventHandler_editing_sql_query( $params );
}




// create table and non table handlers
function buttonHandler_New_Button($params)
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
	$_SESSION["testsql"]=$params["testsql"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Fill_PDF($params)
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
	if(!$_SESSION["pdftkpath"]){
	$result["filename"] = "";
	$result["error"] = "Path to pdftk.exe is not set";
}
else{
	$sqlrs = DB::Query($params["sqlquery"]);
	$sqldata = $sqlrs->fetchAssoc();

	foreach($_SESSION["mupload_".$params["stamp"]] as $key=>$arrvalue){
		$filearr = $arrvalue["file"];
	}

	$fname = $filearr["name"];
	$name = str_replace(".pdf","",$filearr["usrName"]);
	$resname = str_replace($name,$name."_out",$fname);
	

	global $cman;
	$sqlField = array();
	$conn = $cman->byTable( "pdf_forms" );
	$sqlField = $conn->getFieldsList($params["sqlquery"]);

	$fdf = "%FDF-1.2
	1 0 obj<</FDF<< /Fields[";

	$rs = DB::Select("pdf_formfields", array("formid"=>$params["id"]));
	while($data = $rs->fetchAssoc()){
		if($data["fieldsql"]){
			$val = $sqldata[$data["fieldsql"]];
			$ftype = 0;
			if(count($sqlField)){
				foreach($sqlField as $f){
					if($f["fieldname"] == $data["fieldsql"]){	
						if(IsDateFieldType($f["type"])){
							$val = format_shortdate(db2time($val));
						}
						else if(IsDateTimeFieldType($f["type"])){
							$val = str_format_datetime(db2time($val));
						}
					}
				}
			}
			if($data["cboxon"] && $data["cboxoff"]){
				$val = $data["cboxoff"];
				if($sqldata[$data["fieldsql"]])
					$val = $data["cboxon"];
			}
			$fdf.= "<</T(".trim($data["fieldform"]).")/V(".trim($val).")>>";
		}
	}
	$fdf.= "
		] >> >>
	endobj
	trailer
	<</Root 1 0 R>>
	%%EOF";

	runner_save_file(getabspath('files/fdf'.$params["id"].'.fdf'), $fdf);
	exec("\"".$_SESSION["pdftkpath"]."\" \"".getabspath($fname)."\" fill_form \"".getabspath("files/fdf".$params["id"]).".fdf\" output \"".getabspath($resname)."\" flatten");
	$rname["name"] = $resname;
	$p = strrpos($resname,"_");
	$rname["usrName"] = substr($resname,0,$p).".pdf";
	$p = strrpos($rname["usrName"],"/");
	$rname["usrName"] = substr($rname["usrName"],$p+1);
	$rname["size"] = filesize($resname);
	$rname["type"] = "application/pdf";
	$rname["searchStr"] = $rname["usrName"].",!:sStrEnd";
	DB::Update("pdf_forms", array("pdffile"=>"[".my_json_encode($rname)."]"), array("id"=>$params["id"]));

	$resname = "<a href='mfhandler.php?file=".$rname["usrName"]."&amp;table=pdf_forms&amp;field=pdffile&amp;pageType=edit&amp;page=edit&amp;key1=".$params["id"]."'>
		<img style='vertical-align: middle;' src='images/icons/pdf.png'>
	</a>
	<a dir='LTR' href='mfhandler.php?file=".$rname["usrName"]."&amp;table=pdf_forms&amp;field=pdffile&amp;pageType=edit&amp;page=edit&amp;key1=".$params["id"]."'>".$rname["usrName"]."</a>";
	unlink(getabspath('files/fdf'.$params["id"].'.fdf'));
	$result["filename"] = $resname;
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
function fieldEventHandler_editing_sql_query( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	$result["fields"] = "";
$id = $params["id"];
DB::Delete("pdf_sqlfields",array("formid"=>$id));
global $cman;
$conn = $cman->byTable( "pdf_forms" );
$data = $conn->querySilent($params["value"]);
if($data){
	$numf = $data->numFields();
	for($i=0;$i<$numf;$i++){
		$arrFields[] = $data->fieldName($i);
		DB::Insert("pdf_sqlfields", array("formid"=>$id, "sqlfield"=>$data->fieldName($i)));
	}
	$result["fields"] = my_json_encode($arrFields);
}
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>