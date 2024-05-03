<?php
$dalTablekbusers = array();
$dalTablekbusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablekbusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablekbusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablekbusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablekbusers["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablekbusers["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablekbusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablekbusers["id"]["key"]=true;

$dal_info["project_at_localhost__kbusers"] = &$dalTablekbusers;
?>