<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_hd_messages  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;


		$this->events["BeforeShowList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowAdd"]=true;


		$this->events["AfterAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeDelete"]=true;


		$this->events["BeforeProcessRowList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		if($data["statusid"] && $pageObject->pageName !== "list_customer" ){
	$color = DBLookup("select ".AddFieldWrappers("statuscolor")." from ".AddTableWrappers("hd_status")." where ".AddFieldWrappers("id")."=".$data["statusid"]);
	$record["css"]="background:".$color;
}
if($data["directionid"]==3){
	$pageObject->hideItem("to_label",$recordId);
	$pageObject->hideItem("to_email",$recordId);
	$pageObject->hideItem("to_name",$recordId);
}
$row["rowattrs"] = $row["rowattrs"]." directionid=".$data["directionid"];
;
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$pageObject->hideItem("enter_reply");
$masterInfo = $_SESSION["ticketData"];

$username = Security::getUserName();
$userdata = Security::getUserData($username);
if( ($masterInfo["clientid"] !== $userdata[$_SESSION["user_keyfield_for_query"]]) && $userdata["usertype"] === "customer") {
	HeaderRedirect("hd_tickets","list","f=(folderid~equals~1)");
	exit();
}

$_SESSION["master_statusid"] = $masterInfo["statusid"];
$pageObject->setProxyValue("master_statusid",$masterInfo["statusid"]);
$statusid = $masterInfo["statusid"];
$color = DBLookup("select ".AddFieldWrappers("statuscolor")." from ".AddTableWrappers("hd_status")." where ".AddFieldWrappers("id")."=".$statusid);
$pageObject->setProxyValue("mastercolor",$color);

$pageObject->hideItem("ctrl_reply");
$pageObject->hideItem("inline_save_all");
$pageObject->hideItem("inline_cancel_all");


if($userdata["usertype"]!=="user")
	$pageObject->hideItem("close_tickets");
else{
	$hideItems = array("change_status","change_priority","change_assigned","move_to_folder","delete","delete_message","add_note");
	foreach($hideItems as $hideItem) $pageObject->hideItem($hideItem);
}
$pageObject->setProxyValue("usertype",$userdata["usertype"]);
if($userdata["usertype"] === "customer"){
	$hideItems = array("change_status","change_priority","change_assigned","move_to_folder","delete","close_tickets","add_note","show_cc_bcc","More_button");
	foreach($hideItems as $hideItem) $pageObject->hideItem($hideItem);

}
$pageObject->hideItem("quicktemplates");
$pageObject->hideItem("show_cc_bcc");
$_SESSION["suggested_solutions"] = array();
if($masterInfo["clientid"]){
	DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
	$starter_name_rs = DB::Select($_SESSION["user_table_for_query"], array($_SESSION["user_keyfield_for_query"] => $masterInfo["clientid"]) );
	$starter_name = $starter_name_rs->fetchAssoc();
	$pageObject->setProxyValue("starter_name",$starter_name[GetUserNameField()]);
	DB::SetConnection(DB::DefaultConnection());
}


if($_SESSION["Knowledge_Base_Integration"] && $userdata["usertype"]!=="customer"){
	$min_word_length = 3;
	$avoid = array('the','to','i','am','is','are','he','she','a','an','and','here','there','can','could','were','has','have','had','been','welcome','of','home','&nbsp;','&ldquo;','words','into','this','there');
	$str_clean = $text = preg_replace("/[^\s\d\w]/", "", $_SESSION["all_messages_text"]);
	$str_arr = explode(' ', $str_clean);
	$clean_arr = array();
	foreach($str_arr as $word)
	{
		if(strlen($word) > $min_word_length)
		{
     $word_lower = strtolower($word);
     if(!in_array($word_lower, $avoid)) {
       $clean_arr[] = $word_lower;
     }
		}
	}
	$clean_arr = array_unique($clean_arr);
	$articles_rs = DB::Select("kbarticles");
	$articles = array();
	while($article = $articles_rs->fetchAssoc()){
		$worlds_array = explode(" ",$article["keyworlds"]);
		$word_matches_count = count(array_intersect($clean_arr,$worlds_array));
		if($word_matches_count > 0){
			$article["word_matches"] = $word_matches_count;
			$articles[] = $article;
		}
}
	usort($articles,'sortKBArticles');
	unset($_SESSION["all_messages_text"]);
	$_SESSION["suggested_solutions"] = array_slice($articles,0,5);
}
else{
	unset($_SESSION["suggested_solutions"]);
	$pageObject->hideItem("Add_to_KnowledgeBase");
}


if( $userdata["usertype"]==="customer" ){
	$pageObject->hideItem("quicktemplates");
}

$breadcrumbs =  $xt->getVar("crumb");
$breadcrumbs = $breadcrumbs["data"];
$breadcrumbs[0]["crumb_title"] = "Tickets";
$breadcrumbs[0]["crumb_attrs"] = 'href="'.GetTableLink('hd_tickets','list').'?f=(folderid~equals~'.$masterInfo["folderid"].')"';
$breadcrumbs[1]["crumb_title"] = $masterInfo["subject"];
$xt->assign_loopsection("crumb", $breadcrumbs);


$stylename = "hd_messages_list ".$_SESSION["current_user_type"];

if( is_null($masterInfo["assignedid"]) ) $stylename.=" empty_assignedid";

$xt->assign("stylename",$stylename);

if( postvalue("with_open_reply") !=false){
	$pageObject->setProxyValue("with_open_reply",1);
}
$mid = DBLookup("select ".AddFieldWrappers("id")." from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("directionid")."=1 and ".AddFieldWrappers("ticketid")."=".$_SESSION["ticketid"]." order by ".AddFieldWrappers("id")." desc");
$pageObject->setProxyValue("mid",$mid);

$pageObject->setProxyValue("who_is_online",DBLookup("select who_is_online from hd_settings"));
$pageObject->AddJSFile("todolist.js");
$todoList_rs = DB::Select("hd_todolist",array("ticketid" => $masterInfo["id"] ));
$todoList = array();
while($tl = $todoList_rs->fetchAssoc() ){
	$todoList[] = $tl;
}
$pageObject->setProxyValue("todolist",$todoList);





;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		if ($_SESSION["current_user_type"] === "customer") {
    if (postvalue("new_ticket") == false) {
				if (postvalue("reply_id")!=false)
					$rst = DB::Query("select * from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("id")."=" . postvalue("reply_id"));
				else
					$rst = DB::Query("select * from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("ticketid")."=" . $_SESSION["ticketid"] . " order by ".AddFieldWrappers("created")." desc");
    $datat = $rst->fetchAssoc();
    $values["to_email"] = $datat["from_email"];
        $values["subject"] = $datat["subject"];
        if (postvalue("add_note") != "true") {
            if (strlen($values["subject"]) > 9) {
                if (substr($values["subject"], -10, 4) != "DSS-")
                    $values["subject"] .= " DSS-" . strtoupper(generatePassword(6));
            } else
                $values["subject"] .= " DSS-" . strtoupper(generatePassword(6));
        }
    }
}

$pageType = $pageObject->pageName;
$created = date("Y-m-d H:i:s");
$fromEmail = DBLookup("select ".AddFieldWrappers("fromEmail")." from ".AddTableWrappers("hd_settings"));
$fromName = DBLookup("select ".AddFieldWrappers("fromName")." from ".AddTableWrappers("hd_settings"));
$udata = Security::getUserData(Security::getUserName());
$userEmail = $udata[GetUserNameField()];
$userName = $udata[GetDisplayNameField()];
$values["body"] = str_replace("\r\n","<br>",$values["body"]);
$clientid = $udata[$_SESSION["user_keyfield_for_query"]];



if(($_SESSION["current_user_type"] === "admin" || postvalue("reply_id")!=false) && postvalue("add_note")!="true"){


// send message or reply
	$email = $values["to_email"];
	$msg = $values["body"];
	if(!$msg)
		$msg = " ";
	$subject = $values["subject"];


	$attachments = array();
	$filesArray = my_json_decode($values["attachment"]);
	foreach($filesArray as $file)
		 $attachments[] = array('path' => getabspath($file["name"]), 'usrName' => $file["name"], 'type' => $file["type"]);

	if($fromEmail)
		$emailparams = array('to' => $email, 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$fromEmail, 'attachments' => $attachments);
	else
		$emailparams = array('to' => $email, 'subject' => $subject, 'htmlbody' => $msg, 'attachments' => $attachments);

		if( isset($values["cc"]) && $values["cc"] !=="" ) $emailparams["cc"] = $values["cc"];
		if( isset($values["bcc"]) && $values["bcc"] !=="" ) $emailparams["bcc"] = $values["bcc"];
		$ret=runner_mail($emailparams);
		$ret["mailed"] = true;

	if(!$ret["mailed"]){
		$message = $ret["message"];
		return false;
	}
	else{
		$data["created"] = $created;
		$data["subject"] = $values["subject"];
		$data["statusid"] = $_SESSION["current_user_type"] === "customer"?1:3;
		$data["priorityid"] = 3;
		$data["categoryid"] = $values["categoryid"];
		$data["directionid"] = $_SESSION["current_user_type"] === "customer"?1:2;
		$values["directionid"] = $data["directionid"];
		$data["ticketemail"] = $values["to_email"];

		if(!postvalue("reply_id")){
			$data["clientid"] = $clientid;
			$data["folderid"] = postvalue("folder_id");
			$data["updated"] = date("Y-m-d H:i:s");  
			DB::Insert("hd_tickets", $data);
			$ticketid = DB::LastId();
		}
		else{
			$rsmess = DB::Query("select * from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("id")."=".postvalue("reply_id"));
			$datamess = $rsmess->fetchAssoc();
			$keyvalues["id"] = $datamess["ticketid"];
			$data["statusid"] = $_SESSION["current_user_type"] === "customer"?1:3;
			if(postvalue("master_statusid") !=false) $data["statusid"] = postvalue("master_statusid");
			unset($data["ticketemail"]);
			DB::Update("hd_tickets", $data, $keyvalues);
			$ticketid = $datamess["ticketid"];
			if(is_null($ticketid)) $ticketid = $_SESSION["ticketid"];
		}

		$values["directionid"] = $data["directionid"];
		$values["statusid"] = $_SESSION["current_user_type"] === "customer"?1:3;
		$values["ticketid"] = $ticketid;
		$values["from_name"] = $fromName;
		$values["from_email"] = $fromEmail;
		$values["created"] = $created;
		$values["maildate"] = $created;

		return true;
	}
}
elseif(postvalue("add_note") == "true"){
	$data["created"] = $created;
	$data["subject"] = $values["subject"];
	$data["statusid"] = 1;
	$data["categoryid"] = $values["categoryid"];
	$data["directionid"] = 3;
	$data["ticketemail"] = $values["to_email"];
	$keyvalues["id"] = $_SESSION["ticketid"];
	DB::Update("hd_tickets", $data, $keyvalues);

	$values["directionid"] = 3;
	$values["statusid"] = 1;
	$values["to_email"] = $fromEmail;
	$values["to_name"] = $fromName;
	$values["ticketid"] = $_SESSION["ticketid"];
	$values["created"] = $created;
	$values["maildate"] = $created;

	return true;
}
else{
// new ticket 
	$data["created"] = $created;
	$data["subject"] = $values["subject"];
	$data["priorityid"] = 3;
	$data["folderid"] = $_SESSION["FolderID"]?$_SESSION["FolderID"]:1;
	$data["categoryid"] = $values["categoryid"];
	$data["directionid"] = 1;
	$data["ticketemail"] = $_SESSION["current_user_email"];
	$data["statusid"] = 1;
	$data["clientid"] = $clientid;
	$data["updated"] = date("Y-m-d H:i:s"); 
	DB::Insert("hd_tickets", $data);
	$ticketid = DB::LastId();

	$values["directionid"] = 1;
	$values["statusid"] = 1;
	$values["to_email"] = $fromEmail;
	$values["to_name"] = $fromName;
	$values["ticketid"] = $ticketid;
	$values["created"] = $created;
	$values["maildate"] = $created;
	return true;
}


;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		if( postvalue("new_ticket") !=false ) $pageObject->setProxyValue("new_ticket",1);
if( postvalue("folder_id") !=false ) $pageObject->setProxyValue("folder_id",postvalue("folder_id"));
$pageObject->setProxyValue("addnote","false");
if(postvalue("add_note")=="true"){
	$pageObject->setProxyValue("addnote","true");
}
$pageObject->hideItem("from_email");
if($_SESSION["current_user_type"] === "customer"){
	$pageObject->hideItem("to_email");
}







;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$pageObject->setProxyValue("isAdded","true");
$pageObject->stopPRG = true;	
if($values["directionid"] !=3 ){
	DB::Exec( DB::PrepareSQL("update ".AddTableWrappers("hd_tickets")." set ".AddFieldWrappers("updated")." = ':1' where ".AddFieldWrappers("id")."=:2",date("Y-m-d H:i:s"),$values["ticketid"]) );
}
if($values["statusid"] == 3 && $values["directionid"] == 2 ){
	//11 - awaiting for response
	DB::Exec( DB::PrepareSQL("update ".AddTableWrappers("hd_tickets")." set ".AddFieldWrappers("client_status")." = :1 where ".AddFieldWrappers("id")."=:2",6,$values["ticketid"]) );
}
if($values["statusid"] == 1 && $values["directionid"] == 1 ){
	//12 - open
	DB::Exec( DB::PrepareSQL("update ".AddTableWrappers("hd_tickets")." set ".AddFieldWrappers("client_status")." = :1 where ".AddFieldWrappers("id")."=:2",7,$values["ticketid"]) );
}

$userData = Security::currentUserData();	
DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
$sql = DB::PrepareSQL("update ".AddTableWrappers($_SESSION["user_table_for_query"])." set ".AddTableWrappers("repling_in")."='' where ".AddFieldWrappers($_SESSION["user_keyfield_for_query"])."=:1",$userData[$_SESSION["user_keyfield_for_query"]]);
DB::Exec($sql);
DB::SetConnection(DB::DefaultConnection());

if( postvalue("new_ticket") !=false){
	$folder_id  = postvalue("folder_id") !=false?postvalue("folder_id"):1;
	HeaderRedirect("hd_tickets","list",$_SESSION["current_user_type"] !=="customer"?"f=(folderid~equals~".$folder_id.")":"");
	exit();

}



;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		
if(postvalue("editType")){
	if(postvalue("reply_id") && postvalue("reply_id")!=-1)
		$rst = DB::Query("select * from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("id")."=".postvalue("reply_id"));
	else
		$rst = DB::Query("select * from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("ticketid")."=".$values["ticketid"]." order by ".AddFieldWrappers("created")." desc");
	$datat = $rst->fetchAssoc();
	$values["subject"] = $datat["subject"];
	if(postvalue("add_note") != "true"){
		if(strlen($values["subject"])>9){
			if(substr($values["subject"],-10,4) != "DSS-")
				$values["subject"].=" DSS-".strtoupper(generatePassword(6));
		}
		else
			$values["subject"].=" DSS-".strtoupper(generatePassword(6));
	}
	$values["to_email"] = $datat["from_email"];
	$is_tsupport_creater = in_array($_SESSION["ticket_creater"]["usertype"],array("user","admin"));
	$user = Security::currentUserData();
	$creater_reply = $_SESSION["ticket_creater"][$_SESSION["user_keyfield_for_query"]] == $user[$_SESSION["user_keyfield_for_query"]];
	if( $is_tsupport_creater && $creater_reply){
		$values["to_email"] = $_SESSION["ticketData"]["ticketemail"];
	}
	if(postvalue("add_note") != "true"){
		//$values["body"] = str_replace("<br>","\r\n","".$datat["body"]);
		$search = array ("'<script[^>]*?>.*?</script>'si",
							  "'<[\/\!]*?[^<>]*?>'si",           
							  "'([\r\n])[\s]+'",                 
							  "'&(quot|#34);'i",                 
							  "'&(amp|#38);'i",
							  "'&(lt|#60);'i",
							  "'&(gt|#62);'i",
							  "'&(nbsp|#160);'i",
							  "'&(iexcl|#161);'i",
							  "'&(cent|#162);'i",
							  "'&(pound|#163);'i",
							  "'&(copy|#169);'i",
							  "'&#(\d+);'e");                    
		 
		$replace = array ("",
								"",
								"\\1",
								"\"",
								"&",
								"<",
								">",
								" ",
								chr(161),
								chr(162),
								chr(163),
								chr(169),
								"chr(\\1)");
		 
		//$values["body"] = preg_replace($search, $replace, $datat["body"]);
		/*$body = "";
		$isTag = false;
		for($i=0;$i<strlen($values["body"]);$i++){
			$v = substr($values["body"],$i,1);
			if($v == "<")
				$isTag = true;
			if(!$isTag)
				$body.= $v;
			if($v == ">" && $isTag)
				$isTag = false;
		}
		$values["body"] = html_special_decode($body);
		$values["body"] = str_replace("&nbsp;"," ",$values["body"]);*/
	}
}
if($_SESSION["current_user_type"] !== "customer" && postvalue("reply_id") != false) {
    $ticket =  $pageObject->getMasterRecord();
    $udata = Security::currentUserData();
    $values["body"] = DBLookup("select ".AddFieldWrappers("body")." from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("id")."=".postvalue("reply_id"));
    $values["body"] = "> ".str_replace("<br>","\n> ",$values["body"]);
    $template_name = "Reply";
    $template_body = DBLookup("select ".AddFieldWrappers("template")." from ".AddTableWrappers("hd_mailtemplates")." where ".AddFieldWrappers("user_id")."=" . $udata[$_SESSION["user_keyfield_for_query"]] . " and ".AddFieldWrappers("type")."='" . $template_name . "'");
    if ( !empty($template_body) ) {
        $parts = array();
        $parts['%fromEmail%'] = $udata[GetUserNameField()];
        $parts['%fromName%'] = $udata[GetDisplayNameField()];
        $parts['%TextBody%'] = $values["body"];

		DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
		$to_name_rs = DB::Select($_SESSION["user_table_for_query"], array($_SESSION["user_keyfield_for_query"] => $ticket["clientid"]) ); 
		$to_name = $to_name_rs->fetchAssoc();

        $parts["%toName%"] = $to_name[GetUserNameField()]; 
		DB::SetConnection(DB::DefaultConnection());

		if ($_SESSION["Knowledge_Base_Integration"] && isset($_SESSION["suggested_solutions"])) {
            $parts["%KBase%"] = "\n\nSuggested solutions:";
            foreach ($_SESSION["suggested_solutions"] as $solution) {
                $parts["%KBase%"] .= "<a href='" . GetTableLink('kbarticles', 'view', "editid1=" . $solution["ArticleID"]) . "'>" . $solution["Title"] . "</a>";
            }
        } else {
            $parts["%KBase%"] = "";
        }
        $values["body"] = str_replace(array('%fromEmail%', '%fromName%', '%TextBody%', '%toName%', '%KBase%'), $parts, $template_body);
		$search = array ("'<script[^>]*?>.*?</script>'si",
							  "'<[\/\!]*?[^<>]*?>'si",           
							  "'([\r\n])[\s]+'",                 
							  "'&(quot|#34);'i",                 
							  "'&(amp|#38);'i",
							  "'&(lt|#60);'i",
							  "'&(gt|#62);'i",
							  "'&(nbsp|#160);'i",
							  "'&(iexcl|#161);'i",
							  "'&(cent|#162);'i",
							  "'&(pound|#163);'i",
							  "'&(copy|#169);'i",
							  "'&#(\d+);'e");                    
		 
		$replace = array ("",
								"",
								"\\1",
								"\"",
								"&",
								"<",
								">",
								" ",
								chr(161),
								chr(162),
								chr(163),
								chr(169),
								"chr(\\1)");
		$values["body"] = html_special_decode($values["body"]);
		$values["body"] = str_replace("&nbsp;"," ",$values["body"]);
    }


}

;
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList($pageObject)
{

		
$tiketDataRs = DB::Select("hd_tickets",array("id" => postvalue("masterkey1")));
$_SESSION["ticketData"] = $tiketDataRs->fetchAssoc();
$_SESSION["ticketid"] = postvalue("masterkey1");

DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
$ticket_createrRs = DB::Select($_SESSION["user_table_for_query"],array($_SESSION["user_keyfield_for_query"] => $_SESSION["ticketData"]["clientid"] ));
$_SESSION["ticket_creater"] = $ticket_createrRs->fetchAssoc();
DB::SetConnection(DB::DefaultConnection());

if(postvalue("todoItem")!=false){
	DB::Insert("hd_todolist",array("ticketid" => postvalue("ticketid"),"completed" => 0, "task" => postvalue("todoItem")));
	echo DB::LastId();
	die();
}
if(postvalue("updateTodo")!=false){
	DB::Update("hd_todolist",array("completed" => postvalue("status") ),array("id" => postvalue("updateTodo") ));
	die();
}
if(postvalue("deleteTodo")!=false){
	DB::Delete("hd_todolist",array("id" => postvalue("deleteTodo") ));
	die();
}

if(postvalue("quicktemplate")!=false){
	echo DBLookup("select ".AddFieldWrappers("template_content")." from ".AddTableWrappers("hd_quicktemplates")." where ".AddFieldWrappers("name")." = '".postvalue("quicktemplate")."'");
	die();
}
if(postvalue("a") == "deleterec"){
	DB::Exec("update ".AddTableWrappers("hd_messages")." set ".AddFieldWrappers("ticketid")."=0 and ".AddFieldWrappers("directionid")."=0 where id=".postvalue("eid"));
	die();
}
if(postvalue("a") == "resend"){
	$rs = DB::Query("select * from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("id")."=".postvalue("eid"));
	$values = $rs->fetchAssoc();
	$fromEmail = DBLookup("select ".AddFieldWrappers("fromEmail")." from ".AddTableWrappers("hd_settings"));
	$email = $values["to_email"];
	$msg = $values["body"];
	if(!$msg)
		$msg = " ";
	$subject = $values["subject"];
	
	$attachments = array();
	$filesArray = my_json_decode($values["attachment"]);
	foreach($filesArray as $file)
		 $attachments[] = array('path' => getabspath($file["name"]), 'usrName' => $file["name"], 'type' => $file["type"]);
	if($fromEmail)
		$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$fromEmail, 'attachments' => $attachments));
	else
		$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'attachments' => $attachments));
	if(!$ret["mailed"])
		echo $ret["message"];
	die();
}
//for  Suggested Solutions
$_SESSION["all_messages_text"] = "";


$_SESSION["ticket_caption"] = "<span class='ticket_caption'><h3>#".$_SESSION["ticketData"]["id"]." ".$_SESSION["ticketData"]["subject"]."</h3></span>";



;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, $pageObject)
{

		DB::Exec("update ".AddTableWrappers("hd_messages")." set ".AddFieldWrappers("ticketid")."=0 and ".AddFieldWrappers("directionid")."=0 where ".AddFieldWrappers("id")."=".$deleted_values["id"]);

return false;
;
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, $pageObject)
{

		
$_SESSION["all_messages_text"].=" ".$data["body"];
return true;
;
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>