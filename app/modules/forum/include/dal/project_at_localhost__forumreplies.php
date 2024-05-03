<?php
$dalTableforumreplies = array();
$dalTableforumreplies["topicid"] = array("type"=>3,"varname"=>"topicid", "name" => "topicid", "autoInc" => "0");
$dalTableforumreplies["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid", "autoInc" => "0");
$dalTableforumreplies["reply"] = array("type"=>201,"varname"=>"reply", "name" => "reply", "autoInc" => "0");
$dalTableforumreplies["created"] = array("type"=>135,"varname"=>"created", "name" => "created", "autoInc" => "0");
$dalTableforumreplies["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumreplies["id"]["key"]=true;

$dal_info["project_at_localhost__forumreplies"] = &$dalTableforumreplies;
?>