<?php
$dalTableforumsubscribers = array();
$dalTableforumsubscribers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumsubscribers["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid", "autoInc" => "0");
$dalTableforumsubscribers["topicid"] = array("type"=>3,"varname"=>"topicid", "name" => "topicid", "autoInc" => "0");
$dalTableforumsubscribers["lastemail"] = array("type"=>135,"varname"=>"lastemail", "name" => "lastemail", "autoInc" => "0");
$dalTableforumsubscribers["id"]["key"]=true;

$dal_info["project_at_localhost__forumsubscribers"] = &$dalTableforumsubscribers;
?>