<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusers["email"] = array("type"=>201,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableusers["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTableusers["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTableusers["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTableusers["id"]["key"]=true;

$dal_info["project_at_localhost__users"] = &$dalTableusers;
?>