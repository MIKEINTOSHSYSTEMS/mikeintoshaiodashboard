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
		$this->events["BeforeRegister"]=true;

		$this->events["AfterSuccessfulRegistration"]=true;

		$this->events["ModifyMenuItem"]=true;


		$this->events["BeforeProcessMenu"]=true;

		$this->events["BeforeEditUserinfo"]=true;

		$this->events["BeforeShowUserinfo"]=true;

		$this->events["AfterEditUserinfo"]=true;

		$this->events["BeforeProcessUserinfo"]=true;


		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events
		$this->events["hd_folders_snippet"] = true;
		$this->events["_2tochie"] = true;
		$this->events["empty_text"] = true;
		$this->events["email_settings_header"] = true;
		$this->events["pupup_menus"] = true;
		$this->events["popup_menu_record"] = true;
		$this->events["hd_messages_quicktemplates"] = true;
		$this->events["hd_tickets_context_menu"] = true;
		$this->events["main_snippet"] = true;
		$this->events["____"] = true;
		$this->events["img_bullet"] = true;
		$this->events["suggested_solutions"] = true;
		$this->events["hd_messages_snippet"] = true;
		$this->events["ticket_h2"] = true;
		$this->events["folder_list"] = true;
		$this->events["back_to_tickets"] = true;
		$this->events["login_header"] = true;
		$this->events["_global__snippet"] = true;
		$this->events["online_users"] = true;
		$this->events["users_view_ticket"] = true;
		$this->events["action_info"] = true;

		$this->events["GetTablePermissions"]["hd_tickets"] = true;


		}

//	handlers

		
		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$message, $pageObject)
{

		$userdata["usertype"] = "customer";

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, $pageObject)
{

		$udata = Security::getUserData($userdata[GetUserNameField()]);
$hd_messages = AddTableWrappers("hd_messages");
$hd_tickets = AddTableWrappers("hd_tickets");


$rs = DB::Query("select * from ".$hd_messages.
" left join ".$hd_tickets." on ".$hd_tickets.
".".AddFieldWrappers("id")."=".$hd_messages.".".AddFieldWrappers("ticketid")." where (".$hd_tickets.".".AddFieldWrappers("clientid")."='' or ".
$hd_tickets.".".AddFieldWrappers("clientid")."=0 or ".$hd_tickets.".".AddFieldWrappers("clientid")." is null) and ".$hd_tickets."."
.AddFieldWrappers("clientid").">0 and ".$hd_messages.".".AddFieldWrappers("from_email")."='".$userdata[GetUserNameField()]."'");
while($data = $rs->fetchAssoc())
	DB::Exec("update ".AddTableWrappers("hd_tickets")." set ".AddFieldWrappers("clientid")."=".$udata[$_SESSION["user_keyfield_for_query"]]." where ".AddFieldWrappers("id")."=".$data["ticketid"]);


DB::Insert("hd_mailtemplates",array("user_id" => $udata[$_SESSION["user_keyfield_for_query"]],"type" => "Reply"));
;
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		if( !$_SESSION["Knowledge_Base_Integration"] && $menuItem->title === "Knowledge Base" ) return false;


return true;
;
} // function ModifyMenuItem

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		if( $_SESSION["current_user_type"] === "admin" || $_SESSION["current_user_type"] === "user"){
	HeaderRedirect("hd_tickets","list","f=(folderid~equals~1)");
}
else{
	HeaderRedirect("hd_tickets","list");
}
die();
;
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before userinfo updated
function BeforeEditUserinfo(&$values, $where, &$oldvalues, &$message, $pageObject)
{

		$values[GetUserNameField()] =  $values[$_SESSION["user_keyfield_for_query"]];
unset($values[$_SESSION["user_keyfield_for_query"]]);


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeEditUserinfo

		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowUserinfo(&$xt, &$templatefile, $values, $pageObject)
{

		$pageObject->hideItem("usernamefield");
;
} // function BeforeShowUserinfo


		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After userinfo updated
function AfterEditUserinfo(&$values, $where, &$oldvalues, $pageObject)
{

		if($oldvalues[GetUserNameField()] !== $values[GetUserNameField()]) {
	Security::logout();
	Security::loginAs($values[GetUserNameField()],false);
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterEditUserinfo

		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Userinfo: Before process
function BeforeProcessUserinfo($pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessUserinfo

		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["current_user_type"] = $data["usertype"];
$_SESSION["current_user_email"] = $data[GetEmailField()];
if($_SESSION["current_user_type"]==="user") $_SESSION["current_user_type"] = "admin";
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_hd_folders_snippet(&$params)
	{
	// Put your code here.
echo "<b>".GetCustomLabel("total_tickets")."</b>";
	;
}
	function event__2tochie(&$params)
	{
	// Put your code here.
echo "<b>:</b>";
	;
}
	function event_empty_text(&$params)
	{
	// Put your code here.
echo "&nbsp;";
	;
}
	function event_email_settings_header(&$params)
	{
	// Put your code here.
echo "Email settings";
	;
}
	function event_pupup_menus(&$params)
	{
	$statuses = array();
$rs = DB::Query("select * from ".AddTableWrappers("hd_status")." where ".AddFieldWrappers("id")." not in(6,7) order by ".AddFieldWrappers("id"));
while($data = $rs->fetchAssoc()) {
	$statuses[$data["id"]] = $data;
	$statuses[$data["id"]]["checked"] = true;

}
if(isset($_SESSION["fs_checkbox"])){
	$fstatus_arr = explode(",",$_SESSION["fs_checkbox"]);
	foreach($statuses as $id=>$status) 
		if( !in_array($id,$fstatus_arr) ) $statuses[$id]["checked"] = false;
}


echo "<div id='popup_status_filter' class='popupmenu'>";
foreach($statuses as $data){
	$checked = $data["checked"]?"checked=checked":"";
	echo "<div class='subpopupmenu2' style='background-color:".$data["statuscolor"].";'><input type='checkbox' class='fs_checkbox' value='".$data["id"]."' ".$checked.">&nbsp;&nbsp;".$data["statusname"]."</div>";
}

echo "<div class='subpopupmenu2 select_filter'><a onclick='javascript: filter_by_status();'>Select filter</a></div>";
echo "</div>";

echo "<div id='popup_status' class='popupmenu'>";
foreach($statuses as $data)
	echo "<div class='subpopupmenu' style='background-color:".$data["statuscolor"].";' fieldname='statusid' id=".$data["id"].">&nbsp;&nbsp;".$data["statusname"]."</div>";
echo "</div>";

echo "<div id='popup_priority' class='popupmenu'>";
$rs = DB::Query("select * from ".AddTableWrappers("hd_priorities")." order by ".AddFieldWrappers("id"));
while($data = $rs->fetchAssoc())
	echo "<div class='subpopupmenu popup_hover' fieldname='priorityid' id=".$data["id"].">&nbsp;&nbsp;".$data["priorityname"]."</div>";
echo "</div>";

echo "<div id='popup_assign' class='popupmenu'>";
echo "<div class='subpopupmenu popup_hover' fieldname='assignedid' id=null>&nbsp;&nbsp;None</div>";

DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
$rs = DB::Query("select * from ".AddTableWrappers($_SESSION["user_table_for_query"])." where ".AddFieldWrappers("usertype")." in('admin','user') order by ".AddFieldWrappers(GetDisplayNameField()));
DB::SetConnection(DB::DefaultConnection());

while($data = $rs->fetchAssoc())
	echo "<div class='subpopupmenu popup_hover' fieldname='assignedid' id=".$data[$_SESSION["user_keyfield_for_query"]]."><span width=20px></span>&nbsp;&nbsp;".$data[GetDisplayNameField()]."</div>";
echo "</div>";

$folders = array();
echo "<div id='popup_folder' class='popupmenu'>";
$rs = DB::Query("select * from hd_folders order by id");
while($data = $rs->fetchAssoc()){
	$folders[] = $data;
	echo "<div class='subpopupmenu popup_hover' fieldname='folderid' id=".$data["id"].">&nbsp;&nbsp;".$data["foldername"]."</div>";
}
echo "</div>";

echo "<div id='popup_go_to_folder' class='popupmenu'>";

foreach($folders as $folder){
	if( !is_null($_SESSION["FolderID"]) && $_SESSION["FolderID"] == $folder["id"] ) continue;
	echo "<div class='popup_hover subpopupmenu2' fieldname='folderid' id=".$data["id"].">&nbsp;&nbsp;<a href='".GetTableLink("hd_tickets","list")."?f=(folderid~equals~".$folder["id"].")'>".$folder["foldername"]."</a></div>";
}
echo "</div>";

	;
}
	function event_popup_menu_record(&$params)
	{
	$rsm = DB::Query("select * from ".AddTableWrappers("hd_tickets")." where ".AddFieldWrappers("id")."=".$_SESSION["ticketid"]);
$datam = $rsm->fetchAssoc();

echo "<div id='popup_status' class='popupmenu'>";
$rs = DB::Query("select * from ".AddTableWrappers("hd_status")." where ".AddFieldWrappers("id")." not in(6,7) order by ".AddFieldWrappers("id"));
while($data = $rs->fetchAssoc()){
	$s = "&nbsp;";
	if($data["id"] == $datam["statusid"])
		$s = "*";
	echo "<div class='subpopupmenu' style='background-color:".$data["statuscolor"].";' fieldname='statusid' id=".$data["id"]."><span width=20px>".$s."</span><span>&nbsp;&nbsp;".$data["statusname"]."</span></div>";
}
echo "</div>";

echo "<div id='popup_priority' class='popupmenu'>";
$rs = DB::Query("select * from ".AddTableWrappers("hd_priorities")." order by ".AddFieldWrappers("id"));
while($data = $rs->fetchAssoc()){
	$s = "&nbsp;";
	if($data["id"] == $datam["priopityid"])
		$s = "*";
	echo "<div class='subpopupmenu popup_hover' fieldname='priorityid' id=".$data["id"]."><span width=20px>".$s."</span><span>&nbsp;&nbsp;".$data["priorityname"]."</span></div>";
}
echo "</div>";

echo "<div id='popup_assign' class='popupmenu'>";
$s = "&nbsp;";
if(!$datam["assignedid"])
	$s = "*";
echo "<div class='subpopupmenu popup_hover' fieldname='assignedid' id=null><span width=20px>".$s."</span><span>&nbsp;&nbsp;None</div></span>";
$rs = DB::Query("select * from ".AddTableWrappers("hd_users")." order by ".AddFieldWrappers("id"));
while($data = $rs->fetchAssoc()){
	$s = "&nbsp;";
	if($data[$_SESSION["user_keyfield_for_query"]] == $datam["assignedid"])
		$s = "*";
	echo "<div class='subpopupmenu popup_hover' fieldname='assignedid' id=".$data["id"]."><span width=20px>".$s."</span><span>&nbsp;&nbsp;".$data[GetDisplayNameField()]."</span></div>";
}
echo "</div>";

echo "<div id='popup_folder' class='popupmenu'>";
$rs = DB::Query("select * from ".AddTableWrappers("hd_folders")." order by ".AddFieldWrappers("id"));
while($data = $rs->fetchAssoc()){
	$s = "&nbsp;";
	if($data["id"] == $datam["folderid"])
		$s = "*";
	echo "<div class='subpopupmenu popup_hover' fieldname='folderid' reload_to_url='true' id=".$data["id"]."><span width=20px>".$s."</span><span>&nbsp;&nbsp;".$data["foldername"]."</span></span></div>";
}
echo "</div>";
	;
}
	function event_hd_messages_quicktemplates(&$params)
	{
	if($_SESSION["current_user_type"] !== "customer"){
	$qt = DB::Select("hd_quicktemplates");
	echo "<span data-itemtype='grid_field' for='quicktemplates_select' class='col-form-label'><a href='' class='add_quicktemplate'>Add new</a></span>";
	echo "<select data-itemtype='grid_field' name='quicktemplates_select' class='form-control quicktemplates_select'>";
	echo "<option>Select quick template</option>";
	while($template = $qt->fetchAssoc()){
		echo "<option value='".$template["name"]."'>".$template["title"]." (".$template["name"].")</option>";
	}
	echo "</select>";

	echo "<span data-itemtype='grid_field' class='col-form-label'>Select status:</span>";
	$st = DB::Query("select * from ".AddTableWrappers("hd_status")." where ".AddFieldWrappers("id")." not in(11,12) order by ".AddFieldWrappers("id"));
	echo "<select data-itemtype='grid_field' class='form-control status_select'>";
	while($status = $st->fetchAssoc()){
		$selected = ($_SESSION["master_statusid"] === $status["id"])?"selected":"";
		echo "<option value='".$status["id"]."' ".$selected.">".$status["statusname"]."</option>";
	}
	echo "</select>";
}

	;
}
	function event_hd_tickets_context_menu(&$params)
	{
	$user = Security::currentUserData();
if( $user["usertype"] === "admin" || $user["usertype"] === "user" ){
	$status_rs = DB::Select("hd_status");
	$status_list = "<div class='status_list statusid hide_list show_menu'>";
	while($status = $status_rs->fetchAssoc()){
		$status_list.= "<span class='context_menu_action' data-url='".GetTableLink( 'hd_tickets','list' )."?a=change_field&field=statusid&fieldvalue=".$status["id"]."' statusid='".$status["id"]."' style='background:".$status["statuscolor"].";'>".$status["statusname"]."</span>";
	}
	$status_list.= "</div>";

	DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
	$assign_rs = DB::Query("select * from ".AddTableWrappers($_SESSION["user_table_for_query"])." where ".AddFieldWrappers("usertype")."='admin' or ".AddFieldWrappers("usertype")."='user' order by ".AddFieldWrappers(GetDisplayNameField()));
	DB::SetConnection(DB::DefaultConnection());

	$assign_list = "<div class='assign_list assignedid hide_list'>";
	while($assign = $assign_rs->fetchAssoc()){
		$assign_list.= "<span class='context_menu_action' data-url='".GetTableLink( 'hd_tickets','list' )."?a=change_field&field=assignedid&fieldvalue=".$assign[$_SESSION["user_keyfield_for_query"]]."' assignedid='".$assign[$_SESSION["user_keyfield_for_query"]]."'>".$assign[GetDisplayNameField()]."</span>";
	}
	$assign_list.= "</div>";

	$folder_rs = DB::Select("hd_folders");
	$folder_list = "<div class='folder_list folderid hide_list'>";
	while($folder = $folder_rs->fetchAssoc()){
		$folder_list.="<span class='context_menu_action' data-url='".GetTableLink( 'hd_tickets','list' )."?a=change_field&field=folderid&fieldvalue=".$folder["id"]."' folderid='".$folder["id"]."'>".$folder["foldername"]."</span>";
	}
	$folder_list.= "</div>";

	$priorities_rs = DB::Select("hd_priorities");
	$priorities_list = "<div class='priorities_list priorityid hide_list'>";
	while($priorities = $priorities_rs->fetchAssoc()){
		$priorities_list.="<span class='context_menu_action' data-url='".GetTableLink( 'hd_tickets','list' )."?a=change_field&field=priorityid&fieldvalue=".$priorities["id"]."' priorityid='".$priorities["id"]."'>".$priorities["priorityname"]."</span>";
	}
	$priorities_list.="</div>";

	echo "<table class='context_menu' data-ticketid='' style='display:none;'>";
	echo "<tr><td class='context_icon'><i class='fa fa-gg-circle' aria-hidden='true'></i></td><td>Change Status".$status_list."</td></tr>";
	echo "<tr><td class='context_icon'><i class='fa fa-user-plus' aria-hidden='true'></i></td><td>Assign".$assign_list."</td></tr>";
	echo "<tr class='context_menu_action delete' data-url='".GetTableLink( 'hd_tickets','list' )."?a=delete_ticket'><td class='context_icon'><i class='fa fa-times' aria-hidden='true'></i></td><td>Delete</td></tr>";
	echo "<tr><td class='context_icon'><i class='fa fa-exclamation' aria-hidden='true'></i></td><td>Change Priority".$priorities_list."</td></tr>";
	echo "<tr><td class='context_icon'><i class='fa fa-folder-open' aria-hidden='true'></i></td><td>Move to Folder".$folder_list."</td></tr>";
	echo "<tr class='filter'><td class='context_icon'><i class='fa fa-filter' aria-hidden='true'></i></td><td>Filter</td></tr>";
	echo "</table>";


	//short_info_popup
	echo "<div class='short_info_popup'>";
	echo "<table>";
	echo "<tr><td><span class='fullname'></span><span class='created'></span><span class='view_link top_link'><a href=''>".GetCustomLabel("view")."</a></span></td></tr>"; 
	echo "<tr><td class='message' colspan=></td></tr>"; 
	echo "<tr><td><span class='view_link bottom_link'><a href=''>View</a><a class='with_open_reply' href='' >".GetCustomLabel("reply")."</a></span></td>";
	echo "</table>";
	echo "</div>";

	
	
}







	;
}
	function event_main_snippet(&$params)
	{
	// Put your code here.
echo "<a href='main_list.php'>Knowledge Base</a>";
	;
}
	function event_____(&$params)
	{
	// Put your code here.
echo "&nbsp;<b>></b>&nbsp;";
	;
}
	function event_img_bullet(&$params)
	{
	// Put your code here.
echo "<img src='images/kbbullet.gif'>";
	;
}
	function event_suggested_solutions(&$params)
	{
	if(isset($_SESSION["suggested_solutions"]) && count($_SESSION["suggested_solutions"]) > 0){
	echo "<table class='suggested_solutions'>";
	echo "<tr class='navbar-default navbar'><td>".GetCustomLabel("suggested_solutions")."</td></tr>";
	echo "<tr class='head_tr'><td>ID</td><td>".GetCustomLabel("article")."</td><td>".GetCustomLabel("views")."</td></tr>";
	foreach($_SESSION["suggested_solutions"] as $solution){
		echo "<tr class='solution_line'><td><span class='datasolution'>".$solution["Solution"]."</span><span class='id'>".$solution["ArticleID"]."</span><span class='add_to_reply_span'><a data-id='".$solution["ArticleID"]."' class='add_to_reply' href='#'>".GetCustomLabel("add_to_reply")."</a></span></td>";
		echo "<td><span class='link'><a href='".GetTableLink('kbarticles','view',"editid1=".$solution["ArticleID"])."'>".$solution["Title"]."</a></span><span class='problem'>".$solution["Problem"]."</span></td><td>".$solution["Views"]."</td></tr>";
	}
	echo "</table>";
}

	;
}
	function event_hd_messages_snippet(&$params)
	{
	if($_SESSION["current_user_type"] !== "customer"){
	echo "<label class='nobold'>".GetCustomLabel("show_cc")."</label><input class='show_hide_checkbox' field='cc' type='checkbox' ><label class='nobold'>".GetCustomLabel("show_bcc")."</label><input class='show_hide_checkbox' field='bcc' type='checkbox'>";
}
	;
}
	function event_ticket_h2(&$params)
	{
	echo $_SESSION["ticket_caption"];
	;
}
	function event_folder_list(&$params)
	{
	$folder_rs = DB::Select("hd_folders");
$folder_list = "<div class='folder_select_wrapper'><span class='folder_label'>Go to folder:</span><select class='form-control'>";
while($folder = $folder_rs->fetchAssoc()){
		$folder_list.="<option data-url='".GetTableLink( 'hd_tickets','list' )."?f=(folderid~equals~".$folder["id"].")' value=".$folder["id"].">".$folder["foldername"]."</option>";
		//$folder_list.="<span class='context_menu_action' data-url='".GetTableLink( 'hd_tickets','list' )."?a=change_field&field=folderid&fieldvalue=".$folder["id"]."' folderid='".$folder["id"]."'>".$folder["foldername"]."</span>";
}
$folder_list.= "</select></div>";
echo $folder_list;
	;
}
	function event_back_to_tickets(&$params)
	{
	// Put your code here.
echo "<a class='back_to_tickets' href='".GetTableLink("hd_tickets","list")."'>Back to tickets</a>";
if($_SESSION["current_user_type"] === "customer" && $data["statusid"] !== "5") 
	echo "<a class='btn btn-default close_ticket_btn' href='#'>Close ticket</a>";
	;
}
	function event_login_header(&$params)
	{
	echo "<div class='alert alert-info loginheader'>Use <b>admin@test.com/admin</b> to login
</div>";
	;
}
	function event__global__snippet(&$params)
	{
	// Put your code here.
echo "Your message";
	;
}
	function event_online_users(&$params)
	{
	echo "<div class='user_online_block' style='display:none;'><div class='alert alert-warning'>User(s) online(<span class='count'></span>):<span class='users_list'></span></div></div>"; 


	;
}
	function event_users_view_ticket(&$params)
	{
	echo "<div class='user_online_block' style='display:none;'><div class='alert alert-warning'>User(s) viewing:<span class='users_list'></span></div></div>"; 
	;
}
	function event_action_info(&$params)
	{
	echo "";
	;
}




	function GetTablePermissions($permissions, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "hd_tickets")
		{
			
if( $_SESSION["current_user_type"] === "admin" ){
	$permissions.="M";
}
return $permissions;;
		}
		return $permissions;
	}
}
?>