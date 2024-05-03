<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_forumreplies  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowAdd"]=true;


		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeShowEdit"]=true;



		$this->events["BeforeProcessRowList"]=true;

		$this->events["BeforeEdit"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		include_once "include/Parsedown.php";


$_SESSION["subscribetopic"] = "";

if(postvalue("sub")=="sub"){
	$rs = DB::Select("forumsubscribers",array("topicid" => postvalue("topic"),"userid" => $_SESSION["user_id"]));
//".runner_date_format("Y-m-d H:i:s")."'
	if(!($data = $rs->fetchAssoc())){

$currentDateTimeForDb = localdatetime2db( runner_date_format("m-d-y H:i:s") );
		DB::Insert("forumsubscribers",array("topicid" => postvalue("topic_id"),"userid" => $_SESSION["user_id"],"lastemail" => $currentDateTimeForDb));
		echo "sub";
	}
	exit();
}
if(postvalue("sub")=="unsub"){
	DB::Delete("forumsubscribers",array("topicid" => postvalue("topic_id"),"userid" => $_SESSION["user_id"] ));
	echo "unsub";
	exit();
}
if(postvalue("sub")=="unsubcat"){
	$forumtopic = $pageObject->getMasterRecord();
	$userData = Security::currentUserData();
	DB::Delete("forumcategorysubscribers",array("userid" => $userData[$_SESSION["loginKeyField"]],"categoryid" =>$forumtopic["categoryid"] ));
	// get forum topics
	$rs_topics = DB::Select("forumtopics",array("categoryid" => $forumtopic["categoryid"]));
	while($topic_id = $rs_topics->fetchAssoc()){
				DB::Delete("forumsubscribers",array("topicid" => $topic_id["id"],"userid" => $userData[$_SESSION["loginKeyField"]]));

	}

	echo "<span style='color:blue'>".GetCustomLabel("list_of_subscriptions_updated")."</span>";
	exit();
}


if (($_SESSION["forumreplies_masterkey1"]=="" || postvalue("masterkey1")=="") && postvalue("a")!="delete") {
	header("Location: ".GetTableLink("forumtopics","list"));
	exit();
}

Labels::setBreadcrumbsLabelTempl("forumreplies", "Replies", "forumtopics");
;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		


$cur_user = Security::currentUserData();
if($_SESSION["User_Type"] === "user"){
	$pageObject->hideItem("grid_checkbox");
}

$topic_master = $pageObject->getMasterRecord();
if($_SESSION["User_Type"] !== "admin" || $topic_master["solved"] === "0"){
	$pageObject->hideItem("mark_is_not_solved");
}

//solved button for topic creater or admin
if( ( $_SESSION["User_Type"] !== "admin" && $topic_master["startedby"] !== $cur_user["id"] ) || $topic_master["solved"] === "1"){
	$pageObject->hideItem("Mark_as_Solved");
	$pageObject->hideItem("Mark_as_Solved1");
}
//$xt->assign("message", "No forumreplies yet");
$xt->assign("stylename", "forumreplies_list");
if($topic_master["solved"] === "1"){
	$topic_master["topic"] = "[SOLVED] ".$topic_master["topic"];
		$xt->assign("stylename","forumreplies_list solved");
}
$category = DBLookup( DB::PrepareSQL("select name from forumcategories where id=:1",$topic_master["categoryid"]) );
$breadcrumb[0] = array("crumb_attrs"=> 'href="'.GetTableLink("forumtopics","list").'?q=(categoryid~contains~'.$category.')"' ,"crumb_title_link"=> true, "crumb_title"=> $category);
$breadcrumb[1] = array("crumb_attrs" => "", "crumb_title_span"=> true,"crumb_title" => $topic_master["topic"]);

$xt->assign_loopsection("crumb", $breadcrumb);

if ($_SESSION["forumreplies_masterkey1"]!="") {
		$sql = DB::PrepareSQL("update ".AddTableWrappers("forumtopics")." set ".AddFieldWrappers("views")."=".AddFieldWrappers("views")."+1 where ".AddFieldWrappers("id")."=:1",$_SESSION["forumreplies_masterkey1"]);
		CustomQuery($sql);
}
//$xt->assign("backtomasterlink_attrs", "href='".GetTableLink("forumtopics","list")."'");

$rs = DB::Query( DB::PrepareSQL("select count(*) as ".AddFieldWrappers("cnt")." from ".AddTableWrappers("forumreplies")." where ".AddFieldWrappers("topicid")."=:1",$_SESSION["forumreplies_masterkey1"]) );
$data = $rs->fetchAssoc();
if($data["cnt"]>1)
	$_SESSION["reply_count"] = "<b>".$data["cnt"]."</b> replies";
if($data["cnt"]==0)
	$pageObject->setProxyValue("reply_count",0);
$_SESSION["rcount"] = $data["cnt"];

$_SESSION["subscribe"] = "";

if(!Security::isGuest()){
	$userData = Security::currentUserData();
	$forumtopic = $pageObject->getMasterRecord();
	$sql = DB::PrepareSQL("select count(*) from forumcategorysubscribers where userid=':1' and categoryid=:2",$_SESSION["forumudata"]["userid"],$forumtopic["categoryid"]);
	$is_subcribe_on_category = DBLookup($sql);
	$category_name = DBLookup( DB::PrepareSQL("select name from forumcategories where id=".$forumtopic["categoryid"]) );
	$sql = "select count(*) as ".AddFieldWrappers("cnt")." from ".AddTableWrappers("forumsubscribers")." where ".AddFieldWrappers("userid")."='".$_SESSION["forumudata"]["userid"]."' and ".AddFieldWrappers("topicid")."=".$_SESSION["forumreplies_masterkey1"];
	$rs = DB::Query($sql);
	$data = $rs->fetchAssoc();
	$topic = $pageObject->getMasterRecord();
	if($data["cnt"]==0)
		$_SESSION["subscribe"] = "<a class='btn btn-default' data-topic='".$topic["id"]."' href='#' a='sub' id='a_subscribe'>Subscribe</a>";
	else {
				$_SESSION["subscribe"] = "<a class='btn btn-default' data-topic='".$topic["id"]."' href='#' a='unsub' id='a_subscribe'>Unsubscribe</a>";
		}
		
}
else{
$pageObject->hideItem("rbutton");
}
$rs = DB::Select("forumtopics",array("id" => $_SESSION["forumreplies_masterkey1"]));

$ownreid=0;
if($data = $rs->fetchAssoc())
	$ownreid = $data["startedby"];


init_forum($pageObject, $xt, false);
$pageObject->hideItem("locked_topic");
if( Security::isLoggedIn() ){
	$is_locked = isTopicLocked($topic["id"]);
	if($is_locked){
		$pageObject->showItem("locked_topic");
		if( $_SESSION["User_Type"] !== "admin" ){
			$pageObject->hideItem("inline_add");
			$pageObject->hideItem("grid_inline_edit");
			$pageObject->hideItem("snippet_reply");

			$pageObject->hideItem("Mark_as_Solved");
			$pageObject->hideItem("Mark_as_Solved2");
		}
	}
}

if( $_SESSION["forumtopics_qs"] )
	$pageObject->setProxyValue( "forumtopics_qs", $_SESSION["forumtopics_qs"] );



;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$values["created"]=runner_date_format("Y-m-d H:i:s");
$values["userid"]=$_SESSION["forumudata"]["userid"];
$cur_user = Security::currentUserData();
if( Security::isLoggedIn() && $_SESSION["User_Type"] !== "admin" ){
	$options_rs  = DB::Select("forumsettings");
		//autolock
	$options = $options_rs->fetchAssoc();
	if( $options["autolock_after"] > 0 ){
		$days = $options["autolock_after"];
		$topic = $pageObject->getMasterRecord();
		$last_activity = DBLookup( DB::PrepareSQL("select max(".AddFieldWrappers("created").") from ".AddTableWrappers("forumreplies")." where topicid=:1",$topic["id"]) ) ;
		if( is_null($last_activity) ){
			$last_activity = $topic["created"];
		}
		$last_activity_timestamp = strtotime($last_activity);

		if( $last_activity_timestamp <= strtotime("-".$days." day")){
			return false;
		}
	}
}

$txt = $values["reply"];
$p1 = strpos($txt,"[quote");
if($p1 > -1){
	$p2 = strpos($txt,"[/quote]");
	if($p2>-1){
		$p3 = strpos($txt,"]",$p1);
		$repldata = substr($txt,$p1+6,$p3-$p1-7);
		$repldata = str_replace("user=","",$repldata);
		$d1 = strpos($txt," date=",$p1);
		if($d1){
			$strdate = substr($txt,$d1+6,$p3-$d1-6);
			$repldata = str_replace(" date=",", on ".date("d F Y",strtotime($strdate)).", said:",$repldata);
		}
		
		$quote = substr($txt,$p3+1,$p2-$p3-1);
		$quote = "<div class='r-grid quote'><div class='quote_header'><b>".$repldata."</b></div><div class='quote_text'>".$quote."</div></div>";
		
		$values["reply"] = $quote.substr($txt,$p2+8);
	}
}
$topic = $pageObject->getMasterRecord();
$values["topicid"] = $topic["id"];
if ($topic) {
		$sql = DB::PrepareSQL("update ".AddTableWrappers("forumtopics")." set ".AddFieldWrappers("activity")."=':1' where ".AddFieldWrappers("id")."=:2",runner_date_format("Y-m-d H:i:s"),$topic["id"]);
		DB::Exec($sql);
}
return true;

;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		//send notify
/*$loginTable = Security::getLoginTable();
$displayNameField = GetDisplayNameField();
$userNameField*/
$forumsubscribers_rs = DB::Select("forumsubscribers",array("topicid" => $values["topicid"]));

while($subdata = $forumsubscribers_rs->fetchAssoc()){
	sendMailAfterReply($subdata,$values);
}

;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		$pageObject->addCSSFile("editor/simplemde.min.css");
$pageObject->addJSFile("editor/simplemde.min.js");
$pageObject->addJSFile("editor/marked.js");

;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		
$record["checkbox"] = $record["edit_link"];

if(!$record["checkbox"])
	$record["checkbox_attrs"] = "style='display:none'";

;
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		$pageObject->addCSSFile("editor/simplemde.min.css");
$pageObject->addJSFile("editor/simplemde.min.js");
$pageObject->addJSFile("editor/marked.js");

;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, $pageObject)
{

		$Parsedown = new Parsedown();
$data["reply"] = htmlspecialchars_decode($Parsedown->text($data["reply"]));
$soForumtopics = SearchClause::getSearchObject( "forumtopics" );
$words = $soForumtopics->getSearchToHighlight("topic") ;
$data["reply"] = getValueHighlighted($data["reply"],$words);
$data["reply"]=str_replace("\n\r","<br>",$data["reply"]);
$data["reply"]=str_replace("\n","<br>",$data["reply"]);
$data["reply"]=str_replace("<pre><code>","<code>",$data["reply"]);
$data["reply"]=str_replace("</code></pre>","</code>",$data["reply"]);
return true;
;
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		$cur_user = Security::currentUserData();
if( Security::isLoggedIn() && $_SESSION["User_Type"] !== "admin" ){
	$options_rs  = DB::Select("forumsettings");
		//autolock
	$options = $options_rs->fetchAssoc();
	if( $options["autolock_after"] > 0 ){
		$days = $options["autolock_after"];
		$topic = $pageObject->getMasterRecord();
		$last_activity = DBLookup( DB::PrepareSQL("select max(".AddFieldWrappers("created").") from ".AddTableWrappers("forumreplies")." where topicid=:1",$topic["id"]) ) ;
		if( is_null($last_activity) ){
			$last_activity = $topic["created"];
		}
		$last_activity_timestamp = strtotime($last_activity);

		if( $last_activity_timestamp <= strtotime("-".$days." day")){
			return false;
		}
	}
	//date("Y-m-d H:i:s");
}
return true;
;
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>