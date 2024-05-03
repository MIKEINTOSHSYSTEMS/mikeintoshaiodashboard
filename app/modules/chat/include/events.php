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

		$this->events["ModifyMenuItem"]=true;


//	onscreen events
		$this->events["chats_history"] = true;
		$this->events["chat_users"] = true;
		$this->events["chat_notification"] = true;
		$this->events["chat_write_message"] = true;
		$this->events["create_chat"] = true;
		$this->events["Current_Username"] = true;
		$this->events["chat_history_search_control"] = true;
		$this->events["search_result"] = true;
		$this->events["find_users"] = true;
		$this->events["group_menu"] = true;
		$this->events["chat_history_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		if(Security::dynamicPermissions()){
	if($menuItem->getTable() == 'chat_settings' && !Security::isAdmin())
		return false;
}
return true;
;
} // function ModifyMenuItem

		
		
		
		
		
		

//	onscreen events
	function event_chats_history(&$params)
	{
	//$msg = getMessage(0,"true");
echo "<div id='chat_messages'></div>";

	;
}
	function event_chat_users(&$params)
	{
	$out = getMenu();

echo "<div class=channel_header>";
echo "<span class='caret_down_mess'><svg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='currentColor' class='bi bi-caret-down-fill' viewBox='0 0 16 16'>
  <path d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/>
</svg></span>";
echo "<span class='caret_up_mess'><svg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='currentColor' class='bi bi-caret-right-fill' viewBox='0 0 16 16'>
  <path d='m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
</svg></span>";
echo " Direct messages</div>";
echo "<div id=chat_usermenu>".$out."</div>";
	;
}
	function event_chat_notification(&$params)
	{
	echo "<link REL='stylesheet' href='notification.css' type='text/css'>";
global $loginKeyFields;
$userdata = Security::currentUserData();
$rs = DB::Query("select count(".addFieldWrappers("id").") as cnt from ".addTableWrappers("chat_history")." where ".addFieldWrappers("targetid")."='".$userdata[$loginKeyFields[0]]."' and ".addFieldWrappers("isread")."=0");
$data = $rs->fetchAssoc();
if($data["cnt"]>0)
	echo "<a href='".GetTableLink("chat_history","add")."' id='chat_notification'><span class='glyphicon glyphicon-bell chart_alert' ><span id='noticnt' class='noticnt'>".$data["cnt"]."</span></span></a>";
else
	echo "<a href='".GetTableLink("chat_history","add")."' id='chat_notification' class='notification'><span class='glyphicon glyphicon-bell chart_alert' ><span id='noticnt' class='noticnt'></span></span></a>";
	;
}
	function event_chat_write_message(&$params)
	{
	// Put your code here.
$actions = "<div class='actions'>";
$actions.= "<div class='action_row' id='act_edit'>".GetCustomLabel("edit_message")."</div>";
$actions.= "<div class='action_row' id='act_delete'>".GetCustomLabel("delete_message")."</div>";
$actions.= "</div>";
echo "<textarea type='text' class='form-control' class='input_message' rows=2 id='write_text'></textarea>";
echo $actions;

$actions = "<div class='group_actions_admin'>";
$actions.= "<div class='action_row' id='rename_chat'>".GetCustomLabel("manage_chat")."</div>";
$actions.= "<div class='action_row' id='delete_chat'>".GetCustomLabel("delete_chat")."</div>";
$actions.= "</div>";
echo $actions;

$actions = "<div class='group_actions_user'>";
$actions.= "<div class='action_row' id='leave_chat'>".GetCustomLabel("leave_chat")."</div>";
$actions.= "</div>";
echo $actions;

	;
}
	function event_create_chat(&$params)
	{
	echo "<link REL='stylesheet' href='custom_users.css' type='text/css'>";
global $loginKeyFields;
$userdata = Security::currentUserData();
if($userdata[$loginKeyFields[0]] != postvalue("editid1")){
	echo "<a type='button' class='btn btn-default' href='".GetTableLink("chat_history","add","userid=".postvalue("editid1"))."' typeid='ib'>Create Chat</a>";
	$rs = DB::Select("chat_users", array("userid"=>postvalue("editid1")));
	if($data = $rs->fetchAssoc()){
		if(strtotime(date("Y-m-d H:i:s")) - strtotime($data["lastaccess"]) > 60)
			echo "<span style='display:inline-block' id='userIsOnline_".postvalue("editid1")."' class='ind_state offline2'>&nbsp;</span>";
		else
			echo "<span style='display:inline-block' id='userIsOnline_".postvalue("editid1")."' class='ind_state online'>&nbsp;</span>";
	}
	else
		echo "<span style='display:inline-block' id='userIsOnline_".postvalue("editid1")."' class='ind_state offline2'>&nbsp;</span>";
}
	;
}
	function event_Current_Username(&$params)
	{
	
echo getHeader();
	;
}
	function event_chat_history_search_control(&$params)
	{
	// Put your code here.
echo "<div class='input-group'>
			<input type='search' class='form-control' id='search_input_tmp' autocomplete='off' placeholder='".GetCustomLabel("search_id")."' size='25'>
			<span class='input-group-btn'>
				<button class='btn btn-default' style='display: none;' id='search_showall' title='".GetCustomLabel("showall_id")."'>
					<span class='glyphicon glyphicon-remove'></span>
				</button>
				<button id='search_button' title='".GetCustomLabel("search_id")."' class='btn btn-primary'>
					<span class='glyphicon glyphicon-search'></span>
				</button>
			</span>
		</div>";
	;
}
	function event_search_result(&$params)
	{
	// Put your code here.
echo "<div id='search_result'></div>";
	;
}
	function event_find_users(&$params)
	{
	$result="";
$result.="<div class='finduserblock'>";
$result.="<div class='finduserresults' id='finduserresults'></div>";
$result.= "<div class='input-group'>
			<input type='search' class='form-control' id='finduserinput' autocomplete='off' placeholder='".GetCustomLabel("find_chat")."'>
			<span class='input-group-btn'>
				<button class='btn btn-default' style='display: none;' id='finduserclear' title='".GetCustomLabel("showall_id")."'>
					<span class='glyphicon glyphicon-remove'></span>
				</button>
				<button id='findusersearch' title='".GetCustomLabel("find_user")."' class='btn btn-primary'>
					<span class='glyphicon glyphicon-search'></span>
				</button>
			</span>
		</div>";
$result.= "</div>";
$result.= "<div class='div_search_suggest'>";
$result.= "</div>";

$isFindUser = DBLookup("select ".addFieldWrappers("findusers")." from ".addTableWrappers("chat_settings"));
if($isFindUser)
	echo $result;
	;
}
	function event_group_menu(&$params)
	{
	$out = getGroupMenu();
$menu = "<div class='group_block'>";
$menu.= "<table width=100%>";
$menu.= "<tr><td class='channel_header'>";
$menu.= "<span class='caret_down_group'><svg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='currentColor' class='bi bi-caret-down-fill' viewBox='0 0 16 16'>
  <path d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/>
</svg></span>";
$menu.= "<span class='caret_up_group'><svg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='currentColor' class='bi bi-caret-right-fill' viewBox='0 0 16 16'>
  <path d='m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
</svg></span>";
$menu.=" Group chats</td></tr>";
$menu.= "</table>";
$menu.="<div id=chat_groupmenu>".$out."</div>";
$menu.="<div class='addGroupChat'><a id='addChannel' href='javascript:void(0);' onclick='Add_Channel();'>+ Create new</a></div>";
$menu.="</div>";
echo $menu;
	;
}
	function event_chat_history_snippet(&$params)
	{
	echo "<div id='audio_record' style='display:none'></div>";

	;
}




}
?>