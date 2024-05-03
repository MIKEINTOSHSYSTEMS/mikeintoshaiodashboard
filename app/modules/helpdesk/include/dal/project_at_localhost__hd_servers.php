<?php
$dalTablehd_servers = array();
$dalTablehd_servers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehd_servers["server"] = array("type"=>200,"varname"=>"server", "name" => "server", "autoInc" => "0");
$dalTablehd_servers["user"] = array("type"=>200,"varname"=>"user", "name" => "user", "autoInc" => "0");
$dalTablehd_servers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablehd_servers["interval"] = array("type"=>3,"varname"=>"interval", "name" => "interval", "autoInc" => "0");
$dalTablehd_servers["leave_copy"] = array("type"=>3,"varname"=>"leave_copy", "name" => "leave_copy", "autoInc" => "0");
$dalTablehd_servers["lastconnect"] = array("type"=>135,"varname"=>"lastconnect", "name" => "lastconnect", "autoInc" => "0");
$dalTablehd_servers["port"] = array("type"=>3,"varname"=>"port", "name" => "port", "autoInc" => "0");
$dalTablehd_servers["id"]["key"]=true;

$dal_info["project_at_localhost__hd_servers"] = &$dalTablehd_servers;
?>