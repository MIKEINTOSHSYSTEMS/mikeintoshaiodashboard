<?php
$dalTablechat_files = array();
$dalTablechat_files["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablechat_files["messageid"] = array("type"=>3,"varname"=>"messageid", "name" => "messageid", "autoInc" => "0");
$dalTablechat_files["files"] = array("type"=>200,"varname"=>"files", "name" => "files", "autoInc" => "0");
$dalTablechat_files["id"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__chat_files"] = &$dalTablechat_files;
?>