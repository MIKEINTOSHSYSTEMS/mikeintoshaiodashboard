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



		$this->events["BeforeShowUserinfo"]=true;


//	onscreen events
		$this->events["All_Topics"] = true;
		$this->events["results_message"] = true;
		$this->events["reply_count_records"] = true;
		$this->events["Subscribe"] = true;
		$this->events["forumsubscribers_snippet"] = true;
		$this->events["topic_subscribe"] = true;
		$this->events["User_Name"] = true;
		$this->events["alert_notify"] = true;
		$this->events["skins"] = true;
		$this->events["Subscriptions_categories_snippet"] = true;
		$this->events["filter_by_category_snippet"] = true;
		$this->events["forumsubscribers_dash_categories_list"] = true;
		$this->events["profile_edit_cancel_link_snippet"] = true;
		$this->events["profile_edit_link"] = true;
		$this->events["users_online"] = true;
		$this->events["user_online_count"] = true;
		$this->events["sedmailNotifyLog"] = true;
		$this->events["keywords_label"] = true;
		$this->events["mobile_created_search_sort"] = true;
		$this->events["rbutton"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$login_date = localdatetime2db( runner_date_format("m-d-y H:i:s") );
updateUserData(array("last_login" => $login_date));


$_SESSION["colorscheme"] = "blue";
if($data["scheme"])
	$_SESSION["colorscheme"] = $data["scheme"];
else
	$_SESSION["colorscheme"] = $_COOKIE["colorscheme"];

$_SESSION["user_id"]= $_SESSION["forumudata"]["userid"];

$_SESSION["User_Type"]=$_SESSION["forumudata"]["usertype"];

;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowUserinfo(&$xt, &$templatefile, $values, $pageObject)
{

		
init_forum($pageObject, $xt, true);
$xt->assign("stylename","userprofile");

;
} // function BeforeShowUserinfo


//	onscreen events
	function event_All_Topics(&$params)
	{
	echo "<A class='all-topics' href='".GetTableLink("forumtopics","list")."'>All topics</A>";

	;
}
	function event_results_message(&$params)
	{
	echo "<div data-cellid='left_c1'>".$_SESSION["results_message"]."</div>";
	;
}
	function event_reply_count_records(&$params)
	{
	// Put your code here.
if($_SESSION["rcount"]>1)
	echo $_SESSION["reply_count"];
	;
}
	function event_Subscribe(&$params)
	{
	// Put your code here.
echo $_SESSION["subscribe"];
	;
}
	function event_forumsubscribers_snippet(&$params)
	{
	echo $_SESSION["subscribelist"];
	;
}
	function event_topic_subscribe(&$params)
	{
	echo "<span id='submessage' style='color:blue'></span>";
	;
}
	function event_User_Name(&$params)
	{
	global $cUserNameField;
$userData = Security::currentUserData();
if($_SESSION["user_id"]) {
echo "<span class='top_username'>".$userData[$cUserNameField]."</span>";
}
else{
	echo $_SESSION[$cUserNameField];
}
	;
}
	function event_alert_notify(&$params)
	{
	
if(Security::isLoggedIn()){
	$sub_topics = array();
	$count_notify = 0;
	$userData = Security::currentUserData();
	$uid = $_SESSION["forumudata"]["userid"];
	$categorySubRs = DB::Select("forumcategorysubscribers",array("userid" => $uid)); 
	while($categorySub = $categorySubRs->fetchAssoc()){
		
		$dc = new DsCommand();
		$conditions = array();
		$conditions[] = DataCondition::FieldIs( "categoryid", dsopEQUAL, $categorySub["categoryid"] );
		$conditions[] = DataCondition::FieldIs( "created", dsopMORE, $_SESSION["forumudata"]["last_login"] );
		$dc->filter = DataCondition::_And( $conditions );
		$datasource = getDbTableDataSource("forumtopics",DB::CurrentConnectionId());
		$rs = $datasource->getSingle( $dc ); 
		$st = $rs->fetchAssoc();
		if($st){
			$st["subtype"] = "category";
			$sub_topics[] = $st;
			$count_notify++;
		}

	}

	$topicSubRs = DB::Select("forumsubscribers",array("userid" => $uid)); 
	while($topicSub = $topicSubRs->fetchAssoc()){
		
		$dc = new DsCommand();
		$conditions = array();
		$conditions[] = DataCondition::FieldIs( "id", dsopEQUAL, $topicSub["topicid"] );
		$conditions[] = DataCondition::FieldIs( "activity", dsopMORE,$_SESSION["forumudata"]["last_login"] );
		$dc->filter = DataCondition::_And( $conditions );
		$datasource = getDbTableDataSource("forumtopics",DB::CurrentConnectionId());
		$rs = $datasource->getSingle( $dc ); 
		
		$st = $rs->fetchAssoc();
		if($st){
			$st["subtype"] = "topic";
			$sub_topics[] = $st;
			$count_notify++;
		}

	}
	if($count_notify > 0){
		echo "<div class='dropdown'>";
		echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
		echo "<span class='glyphicon glyphicon-bell' id='span_alert_notify'></span>";
		$bc = "#f39c12";
		if(strpos($_SESSION["colorscheme"],"yellow")>-1)
			$bc = "red";
		echo "<span style='color:white; position:relative;font-size:9px;top:-10px;left:-12px;background-color:".$bc.";padding:1px 5px'>".$count_notify."</span>";
		echo "</a>";
		echo "<ul class='dropdown-menu' style='margin-top:10px'>";
		foreach($sub_topics as $st){

			$category = "";
			if($st["subtype"] === "category"){
				$categoryname = DBLookup( DB::PrepareSQL("select name from forumcategories where id=:1",$st["categoryid"]) );
				$category = " (".$categoryname.")";
			}
			echo "<li ><a role='menuitem' href='forumreplies_list.php?mastertable=forumtopics&masterkey1=".$st["topicid"]."&orderby=acreated' style='font-size:12px'>".$st["topic"].$category."</a></li>";
		}
			

		//categories
	
  echo "</ul></div>";
	}
	else{
		echo "<div class='empty_alert_notify'></div>";
	}
}
else{
	echo "<div class='empty_alert_notify'></div>";
}

	;
}
	function event_skins(&$params)
	{
	
		echo "<div class='dropdown'>";
		echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
		echo "<span class='glyphicon glyphicon-eye-open' id='span_skins'></span>";
		echo "<span class='caret'></span>";
		echo "</a>";
		echo "<ul class='dropdown-menu' style='margin-top:10px;min-width:100px;background: lightgray;'>";

			echo "<li ><a role='menuitem' color='blue' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #367fa9'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #367fa9'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("blue")."</p></li>";

			echo "<li ><a role='menuitem' color='white' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #fefefe'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #fefefe'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("white")."</p></li>";

			echo "<li ><a role='menuitem' color='purple' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #555299 '></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #555299 '></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("purple")."</p></li>";

			echo "<li ><a role='menuitem' color='green' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #008d4c'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #008d4c'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("green")."</p></li>";

			echo "<li ><a role='menuitem' color='red' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #d33724'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #d33724'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("red")."</p></li>";

			echo "<li ><a role='menuitem' color='yellow' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #f39c12'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #f39c12'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("orange")."</p></li>";
//------------------------
			echo "<li ><a role='menuitem' color='blue_light' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #367fa9'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #367fa9'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("blue_light")."</p></li>";

			echo "<li ><a role='menuitem' color='white_light' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #fefefe'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #fefefe'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("white_light")."</p></li>";

			echo "<li ><a role='menuitem' color='purple_light' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #555299 '></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #555299 '></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("purple_light")."</p></li>";

			echo "<li ><a role='menuitem' color='green_light' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #008d4c'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #008d4c'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("green_light")."</p></li>";

			echo "<li ><a role='menuitem' color='red_light' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #d33724'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #d33724'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("red_light")."</p></li>";

			echo "<li ><a role='menuitem' color='yellow_light' style='font-size:12px' class='skin_hover'>";
			echo "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #f39c12'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 7px;background: #f39c12'></span>";
			echo "</div><div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc'></span>";
			echo "<span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7'></span></div>";
			echo "</a><p align=center style='color:black'>".GetCustomLabel("orange_light")."</p></li>";

  echo "</ul></div>";

	;
}
	function event_Subscriptions_categories_snippet(&$params)
	{
	echo "<h4>Categories</h4>";
echo "<table class='table r-grid table-bordered table-striped r-flexgrid rnr-b-grid rnr-gridtable'>";
foreach($_SESSION["sub_categories"] as $id => $sub_category){
	echo "<tr><td><a href='".GetTableLink("forumtopics",PAGE_LIST)."?q=(categoryid~equals~".$id.")'><b>".$sub_category."</b></a></td><td><a class='unsub_category' href='".GetTableLink("forumsubscribers",PAGE_LIST)."?categoryunsub=".$id."'>".GetCustomLabel("unsubscribe")."</a></td></tr>";
}
echo "</table>";
	;
}
	function event_filter_by_category_snippet(&$params)
	{
	$rs = DB::Select("forumcategories");
echo "<select class='forumcategories_select'>";
echo "<option value='".GetTableLink("forumtopics",PAGE_LIST)."'>all categories</option>";
while($category = $rs->fetchAssoc() ){
	$selected = "";
	if( $_SESSION["forum_category_name"] === $category["name"] ) $selected = "selected";
	echo "<option value='".GetTableLink("forumtopics",PAGE_LIST)."?category=".$category["name"]."' ".$selected." >".$category["name"]."</option>";
}
echo "</select>";
	;
}
	function event_forumsubscribers_dash_categories_list(&$params)
	{
	echo "<h4>Categories</h4>";
echo "<table class='table r-grid table-bordered table-striped r-flexgrid rnr-b-grid rnr-gridtable'>";
foreach($_SESSION["sub_categories"] as $id => $sub_category){
	echo "<tr><td><b>".$sub_category."</b></td></tr>";
}
echo "</table>";
	;
}
	function event_profile_edit_cancel_link_snippet(&$params)
	{
	echo "<a class='btn btn-default' href=".GetTableLink(Security::getLoginTable(),PAGE_VIEW).">Cancel</a>";
	;
}
	function event_profile_edit_link(&$params)
	{
	echo "<a class='btn btn-default' href=".GetTableLink(Security::getLoginTable(),PAGE_EDIT).">Edit</a>";
	;
}
	function event_users_online(&$params)
	{
	global $cDisplayNameField;
$admin_option_show_active_users = DBLookup("select ".AddFieldWrappers("show_active_users")." from ".AddTableWrappers("forumsettings"));
if($admin_option_show_active_users){
	//cur time - 15 min
	$active_time = time() - (15 * 60); 
	$active_time_format = date("Y-m-d H:i:s",$active_time);

	$sql = DB::PrepareSQL("select * from ".AddTableWrappers("forumusers_data")." where ".AddFieldWrappers("last_activity").">=':1'",$active_time_format);
	$user_list_rs = DB::Query( $sql );
	$user_online = array();
	$count = 0;
	while( ($user = $user_list_rs->fetchAssoc()) && $count < 5 ){
		$udata = getLoginTData($user["username"]);
		$count++;
		$user_online[] = "<a href='forumusers_view.php?editid1=".$udata[$_SESSION["loginKeyField"]]."'>".$udata[$cDisplayNameField]."</a>";
	}
	if(count($user_online) > 0) {
		echo "<b>".GetCustomLabel("active_users").":&nbsp;</b> ".implode(", ",$user_online);
	}


}
	;
}
	function event_user_online_count(&$params)
	{
	$admin_option_show_active_users = DBLookup("select show_active_users from forumsettings");
if($admin_option_show_active_users){
		//cur time - 15 min
	$active_time = time() - (15 * 60); 
	$active_time_format = date("Y-m-d H:i:s",$active_time);

	$users_online = DBLookup( DB::PrepareSQL("select count(*) from ".AddTableWrappers("forumusers_data")." where ".AddFieldWrappers("last_activity").">=':1'",$active_time_format) );


	echo $users_online." ".GetCustomLabel("active_user_online");
}

	;
}
	function event_sedmailNotifyLog(&$params)
	{
	echo "<div class='alert alert-warning'>Do not close this page yet</div>";
echo "<div class='alert alert-success' style='display:none;'>All notifications were sent. <a style='color:blue !important;' href=".GetTableLink("forumtopics","list").">Click to continue</a> </div>";
echo "<div class='alert alert-light'>";
echo "<div class='start'  style='display:inline;'></div>";
$totalNotification = intval(postvalue("totalsteps"))*50;
echo "<div class='row' style='display:inline;'>Total notifications: ".$totalNotification."</div>";
echo "<div class='row' style='display:inline;'>Notifications sent: <span class='current_step'>0</span></div>";
echo "</div>";
	;
}
	function event_keywords_label(&$params)
	{
	echo "<label class='control-label r-search-label'>Keywords</label>";
	;
}
	function event_mobile_created_search_sort(&$params)
	{
	echo "<div class='mobile_sort'><span class='label'>Sorting by created</span><select class='form-control'><option value='dcreated'>Desc</option><option value='acreated'>Asc</option></select></div>";
	;
}
	function event_rbutton(&$params)
	{
	// Put your code here.
$s = "";
if($_SESSION["rcount"]==0)
	$s = "style='display:none;'";
echo "<a type='button' class='btn btn-primary' ".$s." href='#' id='reply'>Reply</a>";

	;
}




}
?>