<?php
$dalTablechat_history = array();
$dalTablechat_history["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablechat_history["messages"] = array("type"=>200,"varname"=>"messages", "name" => "messages", "autoInc" => "0");
$dalTablechat_history["ownerid"] = array("type"=>200,"varname"=>"ownerid", "name" => "ownerid", "autoInc" => "0");
$dalTablechat_history["created"] = array("type"=>200,"varname"=>"created", "name" => "created", "autoInc" => "0");
$dalTablechat_history["isread"] = array("type"=>200,"varname"=>"isread", "name" => "isread", "autoInc" => "0");
$dalTablechat_history["targetid"] = array("type"=>200,"varname"=>"targetid", "name" => "targetid", "autoInc" => "0");
$dalTablechat_history["tmp_file"] = array("type"=>200,"varname"=>"tmp_file", "name" => "tmp_file", "autoInc" => "0");
$dalTablechat_history["status"] = array("type"=>200,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablechat_history["status_created"] = array("type"=>200,"varname"=>"status_created", "name" => "status_created", "autoInc" => "0");
$dalTablechat_history["soundRecord"] = array("type"=>128,"varname"=>"soundRecord", "name" => "soundRecord", "autoInc" => "0");
$dalTablechat_history["isVideo"] = array("type"=>3,"varname"=>"isVideo", "name" => "isVideo", "autoInc" => "0");
$dalTablechat_history["id"]["key"]=true;

$dal_info["project_at_localhost__chat_history"] = &$dalTablechat_history;
?>