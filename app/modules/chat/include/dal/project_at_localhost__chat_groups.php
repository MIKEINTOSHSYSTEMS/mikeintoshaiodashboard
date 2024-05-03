<?php
$dalTablechat_groups = array();
$dalTablechat_groups["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablechat_groups["groupname"] = array("type"=>200,"varname"=>"groupname", "name" => "groupname", "autoInc" => "0");
$dalTablechat_groups["targetid"] = array("type"=>200,"varname"=>"targetid", "name" => "targetid", "autoInc" => "0");
$dalTablechat_groups["grouptype"] = array("type"=>3,"varname"=>"grouptype", "name" => "grouptype", "autoInc" => "0");
$dalTablechat_groups["ownerid"] = array("type"=>200,"varname"=>"ownerid", "name" => "ownerid", "autoInc" => "0");
$dalTablechat_groups["id"]["key"]=true;

$dal_info["project_at_localhost__chat_groups"] = &$dalTablechat_groups;
?>