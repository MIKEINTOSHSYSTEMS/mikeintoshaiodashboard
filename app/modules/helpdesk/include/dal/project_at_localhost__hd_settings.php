<?php
$dalTablehd_settings = array();
$dalTablehd_settings["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehd_settings["attachment_folder"] = array("type"=>200,"varname"=>"attachment_folder", "name" => "attachment_folder", "autoInc" => "0");
$dalTablehd_settings["isReply"] = array("type"=>3,"varname"=>"isReply", "name" => "isReply", "autoInc" => "0");
$dalTablehd_settings["to"] = array("type"=>200,"varname"=>"to", "name" => "to", "autoInc" => "0");
$dalTablehd_settings["subject"] = array("type"=>200,"varname"=>"subject", "name" => "subject", "autoInc" => "0");
$dalTablehd_settings["body"] = array("type"=>201,"varname"=>"body", "name" => "body", "autoInc" => "0");
$dalTablehd_settings["fromName"] = array("type"=>200,"varname"=>"fromName", "name" => "fromName", "autoInc" => "0");
$dalTablehd_settings["fromEmail"] = array("type"=>200,"varname"=>"fromEmail", "name" => "fromEmail", "autoInc" => "0");
$dalTablehd_settings["knowledge_base"] = array("type"=>16,"varname"=>"knowledge_base", "name" => "knowledge_base", "autoInc" => "0");
$dalTablehd_settings["who_is_online"] = array("type"=>16,"varname"=>"who_is_online", "name" => "who_is_online", "autoInc" => "0");
$dalTablehd_settings["emaildays"] = array("type"=>3,"varname"=>"emaildays", "name" => "emaildays", "autoInc" => "0");
$dalTablehd_settings["folder"] = array("type"=>200,"varname"=>"folder", "name" => "folder", "autoInc" => "0");
$dalTablehd_settings["id"]["key"]=true;

$dal_info["project_at_localhost__hd_settings"] = &$dalTablehd_settings;
?>