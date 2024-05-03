<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_sgb_comments  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;


		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeProcessRowList"]=true;

		$this->events["BeforeMoveNextList"]=true;


		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;




	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$style = "sgb_comments_list sgb";
$pageObject->AddCSSFile("styles/sgb.css");
if(Security::isLoggedIn()){
	$style.= " login ".Security::getUserGroup();
}
if($pageObject->pageName === "list_admin"){
	$style.=" sgb_admin";
}
$xt->assign("stylename",$style);


$pageObject->setProxyValue("usertype",Security::getUserGroup());
if(postvalue("commentid")!=false)
	$pageObject->setProxyValue("commentid",postvalue("commentid"));
	
$xt->assign("crumb_home_link",GetTableLink("sgb_suggestions","list"));
$breadcrumb = array();
$breadcrumb[0] = array("crumb_attrs" => 'href="'.GetTableLink("sgb_suggestions","list").'"' ,"crumb_title_link"=>true, "crumb_title"=> "Board");
$breadcrumb[1] = array("crumb_attrs" => "", "crumb_title_span" => true,"crumb_title" => $_SESSION["smaster"]["title"]);
$xt->assign_loopsection("crumb", $breadcrumb);
;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList($pageObject)
{

		
//edit date
$master_rs = DB::Select("sgb_suggestions",array("id" => postvalue("masterkey1")));
$_SESSION["smaster"] = $master_rs->fetchAssoc();
if($_SESSION["smaster"]["status"] === "merged") 
{
	unset($_SESSION["smaster"]);
	HeaderRedirect("sgb_suggestions","list");
	exit();
}
if(postvalue("updateVoite")!=false && postvalue("masterkey1")!=false){
	/*check by user id*/
	//$is_user_voited_rs = DB::Select("sgb_votes",array("user_id" => $_SESSION["uid"],"s_id" => postvalue("masterkey1")));
	/*check by ip*/
	$is_user_voited_rs = DB::Select("sgb_votes",array("ip" => $_SERVER["REMOTE_ADDR"],"s_id" => postvalue("masterkey1")));
	$is_user_voited = $is_user_voited_rs->fetchAssoc();

	$vote = 1;
	if(!$is_user_voited){
		//add user voite info
		if(is_null($_SESSION["uid"]))
			$user_id = 0;
		DB::Insert("sgb_votes",array("s_id" => postvalue("masterkey1"),"ip" => $_SERVER["REMOTE_ADDR"]));
		DB::Update("sgb_suggestions",array("upvoted_date" => time()),array("id" => postvalue("masterkey1")) );
	}
	else{
		DB::Delete("sgb_votes",array("ip" => $_SERVER["REMOTE_ADDR"],"s_id" => postvalue("masterkey1")));
		$vote = -1;
	}
	DB::Update("sgb_suggestions",array("vote" => intval($_SESSION["smaster"]["vote"])+$vote),array("id" => postvalue("masterkey1")) );
	echo $vote;
	exit();
}
$_SESSION["record_count"] = 0;
$_SESSION["comment_count"] = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments")." where ".AddFieldWrappers("s_id")."=".postvalue("masterkey1"));
//unset($_SESSION[ $pageObject->sessionPrefix . "_orderby" ]);
//$_SESSION[ $pageObject->sessionPrefix . "_orderby" ] = array( "orderby" => "acreated_date", "sortby" => "acreated_date" );

if(Security::getUserGroup()==="admin"){
	if(postvalue("mark_status") !=false){
		DB::Update("sgb_suggestions",array("status" => postvalue("mark_status")),array("id" => $_SESSION["smaster"]["id"]));
		if(postvalue("mark_status") === "deleted")
			DB::Update("sgb_suggestions",array("deleted_date" => time()),array("id" => $_SESSION["smaster"]["id"] ));
		//notify_by_emails
		$emails_rs = DB::Select("sgb_notify",array("s_id"=>$_SESSION["smaster"]["id"]));
		while($email = $emails_rs->fetchAssoc() ){
			$subject = "Status of Suggestion '".$_SESSION["smaster"]["title"]."' was updated on '".postvalue("label")."'";
			$slink = projectUrl().GetTableLink("sgb_comments","list")."?masterkey1=".$_SESSION["smaster"]["id"]."&mastertable=sgb_suggestions";
			$body = "Status of Suggestion <a href='".$slink."'>'".$_SESSION["smaster"]["title"]."'</a> was updated on '".postvalue("label")."'";
			runner_mail( array('to' => $email["email"], 'subject' => $subject, 'htmlbody' => $body) );
		}
		echo str_replace("%status%",postvalue("label"),GetCustomLabel("status_marked"));
		exit();
	}
	if(postvalue("mark_category") !=false){
		DB::Update("sgb_suggestions",array("categoryid" => postvalue("mark_category")),array("id" => $_SESSION["smaster"]["id"]));
		echo str_replace("%category%",postvalue("label"),GetCustomLabel("category_marked"));
		exit();
	}
	if(postvalue("updateStatus")!=false){
		DB::Update("sgb_comments",array("status" => postvalue("updateStatus")),array("id" => postvalue("commentid") ));
		if(postvalue("updateStatus") === "spam" || postvalue("updateStatus") === "deleted")
			DB::Update("sgb_comments",array("deleted_date" => time()),array("id" => postvalue("commentid") ));
		exit();
	}

}



;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
if(!Security::isLoggedIn()){
	if(!isset($_COOKIE["sgb_gsid"])){
		$sgb_gsid = time();
		runner_setcookie("sgb_gsid", $sgb_gsid, time() + 5 * 365 * 86400, "", "", false, false);
		runner_setcookie("sgb_name", $values["name"], time() + 5 * 365 * 86400, "", "", false, false);
		runner_setcookie("sgb_email", $values["email"], time() + 5 * 365 * 86400, "", "", false, false);
	}
	else{
		$sgb_gsid = $_COOKIE["sgb_gsid"];
	}
}
$ts = time();
$values["created_date"] = getYMDdate($ts) . " " . getHISdate($ts);

if(Security::getUserGroup() === "admin") {
	$values["status"] = "approved";
	$values["user_id"] = $_SESSION["uid"];
}
else {
	$values["status"] = "awaiting_moderation";
	$values["user_id"] = $sgb_gsid;
}
$values["ip"] = $_SERVER["REMOTE_ADDR"];
return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, $pageObject)
{

		
return true;
;
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		if($_SESSION["record_count"]>0){
	$pageObject->hideItem("sgb_comments_countheader", $recordId); 
}
$_SESSION["record_count"]++;


if(($data["status"] === "approved" && Security::getUserGroup() !== "admin") || intval($data["merged_info"])){
	$pageObject->hideItem("sgb_comments_moderate_panel", $recordId); 
}

$row["rowattrs"] = $row["rowattrs"]." data-id='".$data["id"]."'";

;
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, $pageObject)
{

		$strOrderBy = "ORDER BY created_date asc";
;
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		$xt->assign("stylename","sgb_suggestions_add sgb_comment_edit sgb");
$pageObject->AddCSSFile("styles/sgb.css");
;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddCSSFile("styles/sgb.css");
$pageObject->setProxyValue("usergroup",Security::getUserGroup());

;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		
if(Security::getUserGroup() === "admin"){
	$values["name"] = $_SESSION["udata"][GetDisplayNameField()];
	$values["email"] = $_SESSION["udata"][GetEmailField()];
}
if(!Security::isLoggedIn()){
	if(isset($_COOKIE["sgb_gsid"])){
		$values["name"] = $_COOKIE["sgb_name"];
		$values["email"] = $_COOKIE["sgb_email"];
	}

}
;
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>