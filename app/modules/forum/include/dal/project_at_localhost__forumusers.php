<?php
$dalTableforumusers = array();
$dalTableforumusers["displayname"] = array("type"=>200,"varname"=>"displayname", "name" => "displayname", "autoInc" => "0");
$dalTableforumusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableforumusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableforumusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumusers["usertype"] = array("type"=>200,"varname"=>"usertype", "name" => "usertype", "autoInc" => "0");
$dalTableforumusers["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTableforumusers["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTableforumusers["id"]["key"]=true;

$dal_info["project_at_localhost__forumusers"] = &$dalTableforumusers;
?>