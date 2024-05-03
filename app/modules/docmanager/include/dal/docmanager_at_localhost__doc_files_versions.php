<?php
$dalTabledoc_files_versions = array();
$dalTabledoc_files_versions["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledoc_files_versions["docid"] = array("type"=>3,"varname"=>"docid", "name" => "docid", "autoInc" => "0");
$dalTabledoc_files_versions["file"] = array("type"=>200,"varname"=>"file", "name" => "file", "autoInc" => "0");
$dalTabledoc_files_versions["ownerid"] = array("type"=>3,"varname"=>"ownerid", "name" => "ownerid", "autoInc" => "0");
$dalTabledoc_files_versions["created"] = array("type"=>135,"varname"=>"created", "name" => "created", "autoInc" => "0");
$dalTabledoc_files_versions["id"]["key"]=true;

$dal_info["docmanager_at_localhost__doc_files_versions"] = &$dalTabledoc_files_versions;
?>