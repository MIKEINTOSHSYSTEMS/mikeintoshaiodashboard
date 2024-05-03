<?php
include_once "Parsedown.php";
function init_forum($pageObject, $xt, $menu){
    global $cLoginTable, $cUserNameField,$cDisplayNameField,$cUserpicField;
    if(!$_SESSION["colorscheme"])
        $_SESSION["colorscheme"]="blue";
    $userData = Security::currentUserData();
    $_SESSION["username"] = "";
    if($_SESSION["user_id"]){
        $rs = DB::Select($cLoginTable,array($_SESSION["loginKeyField"] => $userData[$_SESSION["loginKeyField"]] ));
        $data = $rs->fetchAssoc();
        $profileData = getUserData($userData[$_SESSION["loginKeyField"]]);
        if(is_null( $profileData["image"] ) ) {
            $value = "<div class='user-circle-top'><span class='user-initials'>".substr(strtoupper($userData[$cUserNameField]),0,1)."</span></div>";

            
        } else {
            $value = "<img height='40px' class='avatar-top' src='avatars/".$profileData["image"]."'>";
        }
        $_SESSION["username"] = $data[$cDisplayNameField];
        $xt->assign("username",$value);
    }
    if($pageObject->querySQL){
        $w = "topic";
        if(!$menu)
            $w = "record";
        $rs = DB::Query("select count(*) as cnt from (".$pageObject->querySQL.") as c");
        $data = $rs->fetchAssoc();
        if (postvalue("qs")!="" && postvalue("qs")!=null) {
            $_SESSION["results_message"] = "<span style='padding-left:10px'>".$data["cnt"]." ".$w."(s) for <b>\"".postvalue("qs")."\"</b></span>";
        } else {
            $_SESSION["results_message"] = "<span style='padding-left:10px'>".$data["cnt"]." ".$w."(s) found</span>";
        }
    }
    $pageObject->hideItem("menu-icons");
    $pageObject->AddCSSFile( "include/skins/skin_".$_SESSION["colorscheme"].".css" );
    $pageObject->AddCSSFile( "include/styles/forum.css" );
    $pageObject->AddJSFile( "include/forum_functions.js" );
}

function saveAvatar($uploadFolder,$file_path){
    switch (strtolower(substr(strrchr($file_path, '.'), 1))) {
        case 'jpg':
        case 'jpeg':
            $img = @imagecreatefromjpeg(getabspath($uploadFolder.$file_path));
            break;
        case 'gif':
            $img = @imagecreatefromgif(getabspath($uploadFolder.$file_path));
            break;
        case 'png':
            $img = @imagecreatefrompng(getabspath($uploadFolder.$file_path));
            break;
        default:
            return;
    }
    $arrimg = getimagesize(getabspath($uploadFolder.$file_path));
    $size = $arrimg[0];
    if($arrimg[0]>$arrimg[1])
        $size = $arrimg[1];
    $offsetX = ($arrimg[0] - $size)/2;
    $offsetY = ($arrimg[1] - $size)/2;
    
    $im1=imagecreatetruecolor($size,$size);
    imagecopyresampled($im1,$img,0,0,$offsetX,$offsetY,$size,$size,$size,$size);
    
    switch (strtolower(substr(strrchr($file_path, '.'), 1))) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($im1,getabspath($uploadFolder.$file_path),75);
            break;
        case 'gif':
            imagegif($im1,getabspath($uploadFolder.$file_path));
            break;
        case 'png':
            imagepng($im1,getabspath($uploadFolder.$file_path));
            break;
        default:
            return;
    }
    imagedestroy($img);
    imagedestroy($im1);
}
function sendMailAfterReply($subdata,$values) {
    global $cDisplayNameField,$cEmailField;
    $displayNameField = GetDisplayNameField();
    DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
    $toUserRs = DB::Select(Security::getLoginTable(),array($_SESSION["loginKeyField"] => $subdata["userid"] ));
    $toUser = $toUserRs->fetchAssoc();
    $autorUserRs = DB::Select(Security::getLoginTable(),array($_SESSION["loginKeyField"] => $values["userid"] )); 
	$autorUser = $autorUserRs->fetchAssoc();
    DB::SetConnection(DB::DefaultConnection());

	$last_day = time() - (24 * 60 * 60); 
	if(strtotime($subdata["lastemail"]) > $last_day) return;


	$topicRs = DB::Select("forumtopics",array("id" => $values["topicid"]));
	$topic = $topicRs->fetchAssoc();
	$subject=GetCustomLabel("notification_subject");
	$msg = str_replace("{displayname}",$toUser["displayname"],GetCustomLabel("notification_appeal"))."!<br>";
	$msg.= GetCustomLabel("notification_new_topic")."<br><br>";
	$msg.= "<span style='font-size:22px'><b>".$topic["topic"]."</b></span><br>";
	$msg.= "<span style='font-size:18px'>".prepareText($topic["question"])."</span><br><br>"; 
	$msg.= "<span style='text-decoration:underline'>".str_replace("{author}",$autorUser[$displayNameField],GetCustomLabel("notification_reply_from"))."</span><br><pre>".prepareText($values["reply"])."</pre><br>";

	$notification_message = str_replace(array("{a}","{/a}"),array("<a href='".projectUrl().GetTableLink("forumreplies","list","")."?mastertable=forumtopics&masterkey1=".$values["topicid"]."'>","</a>"),GetCustomLabel("notification_go") );
	$msg.= $notification_message." ";
	$msg.= "<a href='".projectUrl().GetTableLink("forumtopics","list","")."?sub=unsub&topicid=".$values["topicid"]."&userid=".$subdata["userid"]."'>".GetCustomLabel("notification_unsubscribe")."</a>";

	if($toUser[$cEmailField]){
			$ret=runner_mail(array('to' => $toUser[$cEmailField], 'subject' => $subject, 'htmlbody' => $msg));
	}
	DB::Exec( DB::PrepareSQL("update forumsubscribers set lastemail=':1' where id=:2",date("Y-m-d H:i:s"),$subdata["id"]) );
}
function sendMailAfterNewTopic($subdata,$values){
    global $cDisplayNameField,$cEmailField;
    $displayNameField = GetDisplayNameField();
    DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
    $toUserRs = DB::Select(Security::getLoginTable(),array($_SESSION["loginKeyField"] => $subdata["userid"] ));
    $toUser = $toUserRs->fetchAssoc();
    DB::SetConnection(DB::DefaultConnection());
	$last_day = time() - (24 * 60 * 60); 
	if(strtotime($subdata["lastemail"]) > $last_day) return;
	$userData = Security::currentUserData();
	$subject=GetCustomLabel("notification_subject");
	$msg = str_replace("{displayname}",$toUser[$displayNameField],GetCustomLabel("notification_appeal"))."!<br>";
	$category = DBLookup( DB::PrepareSQL("select name from forumcategories where id=:1",$values["categoryid"]) );
	$msg.= str_replace("{category}",$category,GetCustomLabel("notification_new_category"))." <br><br>";
	$msg.= "<span style='font-size:22px'><b>".$values["topic"]."</b></span><br>";
	$msg.= "<span style='font-size:18px'>".prepareText($values["question"])."</span><br><br>";
	$msg.= "<span style='text-decoration:underline'>".str_replace("{displayname}",$userData[$displayNameField],GetCustomLabel("notification_created_from"))."</span></pre><br>";
	$notification_message = str_replace(array("{a}","{/a}"),array("<a href='".projectUrl()."".GetTableLink("forumreplies","list","")."?mastertable=forumtopics&masterkey1=".$values["id"]."'>","</a>"),GetCustomLabel("notification_go") );
	$msg.= $notification_message;
	$msg.= " <a href='".projectUrl()."".GetTableLink("forumsubscribers","list","")."?categoryunsub=".$values["categoryid"]."&userid=".$subdata["userid"]."'>".GetCustomLabel("notification_unsubscribe_category")."</a>";
	if($toUser[$cEmailField]){

			$ret=runner_mail(array('to' => $toUser[$cEmailField], 'subject' => $subject, 'htmlbody' => $msg));
	}
	DB::Exec( DB::PrepareSQL("update forumcategorysubscribers set lastemail=':1' where id=:2",date("Y-m-d H:i:s"),$subdata["id"]) );
}
function sendMailsAfterNewTopicByStep($step,$topic_id){
    $sendcount = 0;
    global $cLoginTable,$cDisplayNameField, $cUserNameField;
    $values_rs = DB::Select("forumtopics",array("id"=>$topic_id))->fetchAssoc();
    $values = $values_rs->fetchAssoc();
    $categorySubRs = DB::Select("forumcategorysubscribers",array("categoryid" => $values["categoryid"]));
    while($categorySub = $categorySubRs->fetchAssoc()){
        sendMailAfterNewTopic($categorySub,$values);
        $sendcount++;
    }
    return $sendcount;
}

function prepareText($text) {
    $Parsedown = new Parsedown();
    $text = htmlspecialchars_decode($Parsedown->text($text));
    $text=str_replace("\n\r","<br>",$text);
    $text=str_replace("\n","<br>",$text);
    $text=str_replace("<pre><code>","<code>",$text);
    $text=str_replace("</code></pre>","</code>",$text);
    return $text;
}
function isTopicLocked($id){
    $topicRs = DB::Select("forumtopics",array("id" => $id ));
    $topic = $topicRs->fetchAssoc();

    if($topic["locked"] === "hand_lock" )
        return true;
    if($topic["locked"] === "hand_unlock" )
        return false;

    if($topic["locked"] == null || $topic["locked"] === "autoLock"){
        $options_rs  = DB::Select("forumsettings");
        //autolock
        $options = $options_rs->fetchAssoc();
        if( $options["autolock_after"] > 0){
            $days =$options["autolock_after"];
    
            $last_activity = DBLookup( DB::PrepareSQL("select max(created) from forumreplies where topicid=:1",$id) ) ;
            if( is_null($last_activity) ){
                $last_activity = $topic["created"];
            }
            $last_activity_timestamp = strtotime($last_activity);
    
            if( $last_activity_timestamp <= strtotime("-".$days." day")){
                return true;
            }
        }

    }
    return false;

}
function getSearchFieldsvalues($table,$valuefield,$searchvalue){
    $values = explode(",",$searchvalue);
    foreach($values as &$value){
        $value = lookupSearchvalue($table,$valuefield,$value);
    }
    return $values;
}

function lookupSearchvalue($table,$valuefield,$value){
    $ret_value = array();
    $ret_value["islookup"] = is_numeric($value);
    $ret_value["lookup_value"] = is_numeric($value)?$value:null;
    $ret_value["display_value"] = is_numeric($value)?DBLookup(DB::PrepareSql("select ".$valuefield." from ".$table." where id=:1",$value) ):$value;
    return $ret_value;
}
function getValueHighlighted($value, $highlightData) 
{	
    if(!$highlightData)
        return $value;
    $searchWordsPattern = getSearchWordPattern($highlightData['searchWords'], false);
    $pattern = '/('.$searchWordsPattern.')/i';

    if( !haveTheSameSpChReference($pattern, $value) )
        return preg_replace($pattern, addHighlightingSpan('$1'), $value);

    return highlightValueWithSpecialChars($value, $pattern);
}
function haveTheSameSpChReference($pattern, $value)
	{
		$scContainedPattern = getSpecialCharsContainingPattern($pattern);
		$scFromValue = getSpecialCharsFromString($value);
		foreach($scContainedPattern as $sc)
		{
			if( array_search($sc, $scFromValue) !== FALSE )
				return true;
		}
		return false;
	}
function getSearchWordPattern($searchWords, $encoded = false)
	{
		$searchWordsPatterns = array();
		foreach($searchWords as $searchWord)
		{
			$wordPattern = preg_quote($searchWord, "/");
			if( $encoded )
				$wordPattern = runner_htmlspecialchars($wordPattern);

			$searchWordsPatterns[] = $wordPattern;
		}
		return implode('|', $searchWordsPatterns);
	}
function addHighlightingSpan($str)
{
    return '<span class="r-search-highlight">'.$str.'</span>';
}
function getSpecialCharsContainingPattern($pattern)
	{
		$chars = array('&amp;', '&quot;', '&lt;', '&gt;');
		$csArray = array();
		foreach($chars as $char)
		{
			if( preg_match($pattern, $char, $matches) )
			{
				if( $matches[0] != $char )
					$csArray[] = $char;
			}
		}
		return $csArray;
	}
    function getSpecialCharsFromString($str)
	{
		$chars = array('&amp;', '&quot;', '&lt;', '&gt;');
		$csArray = array();
		foreach($chars as $char)
		{
			if( strpos($str, $char) !== FALSE )
				$csArray[] = $char;
		}

		return $csArray;
	}
    function highlightValueWithSpecialChars($value, $pattern)
	{
		$chars = array('&amp;', '&quot;', '&lt;', '&gt;');
		foreach($chars as $char)
		{
			$valueArr = getSplitStringWithCapturedDelimiters('/'.$char.'/', $value);
			if( count($valueArr) == 1 || !preg_match($pattern, $char, $matches) )
				continue;

			$valueArr2 = array();

			foreach($valueArr as $key=>$part)
			{
				if( $part != $char )
					$valueArr2[] = preg_replace($pattern, addHighlightingSpan('$1'), $part);
				else
					$valueArr2[] = $char;
			}

			$value = implode("",$valueArr2);
		}
		return $value;
	}

    function getSplitStringWithCapturedDelimiters($pattern, $str)
	{
		$resArray = array();

		if( !strlen($str) )
			return $resArray ;

		if( !preg_match_all($pattern, $str, $matches) )
		{
			$resArray[] = $str;
			return $resArray;
		}

		$delimiters = $matches[0];
		$strArray = preg_split($pattern, $str);
		foreach($strArray as $key=>$item)
		{
			$resArray[] = $item;
			if( isset( $delimiters[$key] ) )
				$resArray[] = $delimiters[$key];
		}

		return $resArray;
	}
function getCategories(){
    
    $categoryRs = DB::Select("forumcategories");
    $categoryArr = array();
    while($category = $categoryRs->fetchAssoc()){
        $categoryArr[$category["id"]] = $category;
    }
    return $categoryArr;
}
function setUserData(){
    
    global $cUserNameField;
    $userData = Security::currentUserData();
    $username = $userData[$cUserNameField];
    $userid = $userData[$_SESSION["loginKeyField"]];
    $hasUdataRs = DB::Select("forumusers_data",array("username" => $username));
    $fuserdata = $hasUdataRs->fetchAssoc();
    if( !$fuserdata ){
        $fuserdata = array();
        $currentDateTimeForDb = localdatetime2db( runner_date_format("m-d-y H:i:s") );
        
        $fuserdata["userid"] = $userid;
        $fuserdata["username"] = $userData[$cUserNameField]; 
        $fuserdata["last_activity"] = $currentDateTimeForDb;
        if( Security::dynamicPermissions() && Security::isAdmin() ){
            $fuserdata["usertype"] = "admin";
        }
        else{
            $fuserdata["usertype"] = "user";
        }
        $fuserdata["id"] = DB::LastId();
        DB::Insert("forumusers_data",$fuserdata);
    }
    storageSet( "forumudata", $fuserdata );

    

}
function updateUserData($data){
    global $cUserNameField;
    $userData = Security::currentUserData();
    $username = $userData[$cUserNameField];
    DB::Update("forumusers_data",$data, array("username" => $username));
}
function getLoginTData($userName){
    global $cLoginTable,$cUserNameField;
    DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
    $rs = DB::Select($cLoginTable,array($cUserNameField => $userName ));
    $data = $rs->fetchAssoc();
    DB::SetConnection(DB::DefaultConnection());
    return $data;
}
function getUserData($id){
    $rs = DB::Select("forumusers_data",array("userid" =>$id));
    return $rs->fetchAssoc();
}
?>