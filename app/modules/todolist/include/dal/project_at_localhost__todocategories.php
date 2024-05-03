<?php
$dalTabletodocategories = array();
$dalTabletodocategories["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletodocategories["color"] = array("type"=>200,"varname"=>"color", "name" => "color", "autoInc" => "0");
$dalTabletodocategories["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTabletodocategories["id"]["key"]=true;

$dal_info["project_at_localhost__todocategories"] = &$dalTabletodocategories;
?>