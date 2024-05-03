<?php
$dalTabledoc_settings = array();
$dalTabledoc_settings["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledoc_settings["upload_path"] = array("type"=>200,"varname"=>"upload_path", "name" => "upload_path", "autoInc" => "0");
$dalTabledoc_settings["isStructure"] = array("type"=>200,"varname"=>"isStructure", "name" => "isStructure", "autoInc" => "0");
$dalTabledoc_settings["isVersions"] = array("type"=>3,"varname"=>"isVersions", "name" => "isVersions", "autoInc" => "0");
$dalTabledoc_settings["id"]["key"]=true;

$dal_info["docmanager_at_localhost__doc_settings"] = &$dalTabledoc_settings;
?>