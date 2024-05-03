<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeRegister"]=true;

		$this->events["AfterSuccessfulRegistration"]=true;



//	onscreen events
		$this->events["doc_files_breadcrumb"] = true;
		$this->events["doc_files_list_path"] = true;
		$this->events["doc_files_dropzone"] = true;
		$this->events["doc_files_selectall"] = true;
		$this->events["popup_snippet"] = true;
		$this->events["header"] = true;

		$this->events["GetTablePermissions"]["doc_files"] = true;


		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["current_folder"]=0;
unset($_SESSION["path"]);
unset($_SESSION["path_folder"]);
unset($_SESSION["path_file"]);
if (Security::getUserName()!="Guest") {
	$_SESSION["GroupID"] = $data["usertype"];
	$_SESSION["user_id"] = $data["id"];
	$_SESSION["user_type"] = $data["usertype"];
	$_SESSION["full_name"]=$data["name"];
	$_SESSION["upload_path"] = DBLookup("select ".addFieldWrappers("upload_path")." from ".AddTableWrappers("doc_settings"));
	$_SESSION["show_upload_path"] = $_SESSION["upload_path"];
	$_SESSION["hash"] = "";
	$tables_data["doc_files"]["file"]["Absolute"] = true;
	if(!isAbsolutePath($_SESSION["upload_path"]))
		$_SESSION["upload_path"] = getabspath($_SESSION["upload_path"]);
}


;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$message, $pageObject)
{

		
$userdata["usertype"] = "user";
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, $pageObject)
{

		global $cLoginTable, $cUserNameField;
DB::SetConnection(DB::ConnectionByTable($cLoginTable));
$rs = DB::Query("select * from ".AddTableWrappers($cLoginTable)." where ".addFieldWrappers($cUserNameField)."='".$userdata["email"]."'");
DB::SetConnection(DB::DefaultConnection());
$data = db_fetch_array($rs);
$id=$data["id"];

$str = "select * from ".addFieldWrappers("doc_files")." where ".addFieldWrappers("share_type")."=2";
$rs = CustomQuery($str);
while($data = db_fetch_array($rs)){
	$users = $data["share_users"].",".$id;
	CustomQuery("update ".addFieldWrappers("doc_files")." set ".addFieldWrappers("share_users")."='".$users."' where ".addFieldWrappers("id")."=".$data["id"]);
	if($data["share_startPoint"]){
		$stPoint = $data["share_startPoint"].",".$id;
		CustomQuery("update ".addFieldWrappers("doc_files")." set ".addFieldWrappers("share_startPoint")."='".$stPoint."' where ".addFieldWrappers("id")."=".$data["id"]);
	}
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_doc_files_breadcrumb(&$params)
	{
	if ($_GET["qs"]=="") {
	$str = getBreadcrumbsByID($_SESSION["current_folder"]);
	if (postvalue("hash") && getFileNameFromURL()=="doc_files_list.php" && Security::getUserName()=="Guest"){
		$_SESSION["hash_for_delete"] = postvalue("hash");
		$rs = CustomQuery("select * from ".AddTableWrappers("doc_files")." where ".addFieldWrappers("hash")."='". postvalue("hash") ."'");
		$data = db_fetch_array($rs);
		if($data["file_type"]=="file")
			$str="";
	}
		if (strlen($str)>0) {
			echo "<div class='docman-breadcrumbs'>";
			echo $str;
			echo "</div>";
	}
}
	;
}
	function event_doc_files_list_path(&$params)
	{
	echo "{$search_path}";
	;
}
	function event_doc_files_dropzone(&$params)
	{
	// Put your code here.
echo '<DIV id="visible_dropzone" '.$_SESSION["style_dropzone"].'><div id="docman-dropzone"><div id="dropzone">'.
				'<div class="fallback">'.
					'<div id="tempUploadFileName"></div>'.
					'<form encType="multipart/form-data" method="post">'.
						'<input name="file" type="file"></input>'.
					'<form>'.
				'</div>'.
		'</div></div></div>';
	;
}
	function event_doc_files_selectall(&$params)
	{
	echo "<SPAN class='docman-select-span'><INPUT class='docman-checkbox-css chooseAll1' type='checkbox' {$checkboxheader_attrs}>".
                    "<LABEL class='docman-select-check'>".
                      "&nbsp;&nbsp;&nbsp;".GetCustomLabel("select_all").
                    "</LABEL>".
                  "</SPAN>";
	;
}
	function event_popup_snippet(&$params)
	{
	$replace = "<svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-check-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>  <path fill-rule='evenodd' d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z'/></svg>";
$skip = "<svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-arrow-counterclockwise' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>  <path fill-rule='evenodd' d='M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z'/>  <path d='M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z'/></svg>";
$newname = "<svg width='1.5em' height='1.5em' viewBox='0 0 16 16' class='bi bi-files' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>  <path fill-rule='evenodd' d='M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z'/>  <path d='M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z'/></svg>";
echo "<div id='versionslist' class='versionslist'></div>";
echo "<div id='versionsaction' class='versionsaction'>";
echo "<div class='div_popup_action' id='div_download_click'></div>";
echo "<div class='div_popup_action' id='div_delete_click' style='padding-top:5px;'></div>";
echo "</div>";
echo "<div id='renamefile' class='renamefile'>";
echo "<div align=center width=100%><b>".GetCustomLabel("dest_file_exist")."</b></div>";
echo "<div  align=center width=100% id='popupfname' class='div_popup_filename'></div>";
echo "<div class='div_popup_action'><a href='javascript:void(0);' id='popupreplace' class='a_popup_style'><span>".$replace."</span><span class='span_popup_text'>".GetCustomLabel("dest_replace_file")."</span></a></div>";
echo "<div class='div_popup_action'><a href='javascript:void(0);' id='popupskip' class='a_popup_style'><span>".$skip."</span><span class='span_popup_text'>".GetCustomLabel("skip_file")."</span></a></div>";
echo "<div class='div_popup_action'><a href='javascript:void(0);' id='popupnewname' class='a_popup_style'><span>".$newname."</span><span class='span_popup_text'>".GetCustomLabel("save_as")." <span id='popupnewfname'></span></span></a></div>";
echo "<div class='div_popup_close'><input type='button' class='btn btn-default' onclick='$(\"renamefile\").hide()' value='".GetCustomLabel("close")."'></div>";
echo "</div>";
	;
}
	function event_header(&$params)
	{
	echo '<div class="alert alert-info" style="text-align:center;background-color:#fffefb;margin-bottom:0px;padding: 5px;">'.GetCustomLabel("login_header").'</div>';
	;
}




	function GetTablePermissions($permissions, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "doc_files")
		{
			//if (Security::getUserName()=="Guest")
//	$permissions="SD";

return $permissions;
;
		}
		return $permissions;
	}
}
?>