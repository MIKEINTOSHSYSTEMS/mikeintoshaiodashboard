<?php
$dalTablesv_groups = array();
$dalTablesv_groups["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesv_groups["sid"] = array("type"=>3,"varname"=>"sid", "name" => "sid", "autoInc" => "0");
$dalTablesv_groups["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablesv_groups["sortorder"] = array("type"=>3,"varname"=>"sortorder", "name" => "sortorder", "autoInc" => "0");
$dalTablesv_groups["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablesv_groups["id"]["key"]=true;

$dal_info["project_at_localhost__sv_groups"] = &$dalTablesv_groups;
?>