<?php
$dalTablesv_users = array();
$dalTablesv_users["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesv_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablesv_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablesv_users["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablesv_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablesv_users["email"] = array("type"=>201,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablesv_users["id"]["key"]=true;

$dal_info["project_at_localhost__sv_users"] = &$dalTablesv_users;
?>