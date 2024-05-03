<?php
$dalTablesv_questions = array();
$dalTablesv_questions["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesv_questions["parent_id"] = array("type"=>3,"varname"=>"parent_id", "name" => "parent_id", "autoInc" => "0");
$dalTablesv_questions["sid"] = array("type"=>3,"varname"=>"sid", "name" => "sid", "autoInc" => "0");
$dalTablesv_questions["group_id"] = array("type"=>3,"varname"=>"group_id", "name" => "group_id", "autoInc" => "0");
$dalTablesv_questions["type"] = array("type"=>200,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTablesv_questions["question"] = array("type"=>201,"varname"=>"question", "name" => "question", "autoInc" => "0");
$dalTablesv_questions["help_orientation"] = array("type"=>200,"varname"=>"help_orientation", "name" => "help_orientation", "autoInc" => "0");
$dalTablesv_questions["regex"] = array("type"=>201,"varname"=>"regex", "name" => "regex", "autoInc" => "0");
$dalTablesv_questions["required"] = array("type"=>3,"varname"=>"required", "name" => "required", "autoInc" => "0");
$dalTablesv_questions["help"] = array("type"=>201,"varname"=>"help", "name" => "help", "autoInc" => "0");
$dalTablesv_questions["sortorder"] = array("type"=>3,"varname"=>"sortorder", "name" => "sortorder", "autoInc" => "0");
$dalTablesv_questions["other"] = array("type"=>3,"varname"=>"other", "name" => "other", "autoInc" => "0");
$dalTablesv_questions["int_only"] = array("type"=>3,"varname"=>"int_only", "name" => "int_only", "autoInc" => "0");
$dalTablesv_questions["max_length"] = array("type"=>3,"varname"=>"max_length", "name" => "max_length", "autoInc" => "0");
$dalTablesv_questions["file_extensions"] = array("type"=>200,"varname"=>"file_extensions", "name" => "file_extensions", "autoInc" => "0");
$dalTablesv_questions["max_num_of_files"] = array("type"=>3,"varname"=>"max_num_of_files", "name" => "max_num_of_files", "autoInc" => "0");
$dalTablesv_questions["max_file_size"] = array("type"=>3,"varname"=>"max_file_size", "name" => "max_file_size", "autoInc" => "0");
$dalTablesv_questions["id"]["key"]=true;

$dal_info["project_at_localhost__sv_questions"] = &$dalTablesv_questions;
?>