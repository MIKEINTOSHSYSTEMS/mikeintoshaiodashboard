<?php
$dalTablesv_scenarios = array();
$dalTablesv_scenarios["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesv_scenarios["qid"] = array("type"=>3,"varname"=>"qid", "name" => "qid", "autoInc" => "0");
$dalTablesv_scenarios["quest"] = array("type"=>3,"varname"=>"quest", "name" => "quest", "autoInc" => "0");
$dalTablesv_scenarios["condition"] = array("type"=>200,"varname"=>"condition", "name" => "condition", "autoInc" => "0");
$dalTablesv_scenarios["cond_value"] = array("type"=>200,"varname"=>"cond_value", "name" => "cond_value", "autoInc" => "0");
$dalTablesv_scenarios["id"]["key"]=true;

$dal_info["project_at_localhost__sv_scenarios"] = &$dalTablesv_scenarios;
?>