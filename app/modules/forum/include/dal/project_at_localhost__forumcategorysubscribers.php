<?php
$dalTableforumcategorysubscribers = array();
$dalTableforumcategorysubscribers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumcategorysubscribers["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid", "autoInc" => "0");
$dalTableforumcategorysubscribers["categoryid"] = array("type"=>3,"varname"=>"categoryid", "name" => "categoryid", "autoInc" => "0");
$dalTableforumcategorysubscribers["lastemail"] = array("type"=>135,"varname"=>"lastemail", "name" => "lastemail", "autoInc" => "0");
$dalTableforumcategorysubscribers["id"]["key"]=true;

$dal_info["project_at_localhost__forumcategorysubscribers"] = &$dalTableforumcategorysubscribers;
?>