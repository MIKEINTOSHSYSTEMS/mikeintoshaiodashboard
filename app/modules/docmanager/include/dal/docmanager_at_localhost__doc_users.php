<?php
$dalTabledoc_users = array();
$dalTabledoc_users["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledoc_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTabledoc_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTabledoc_users["usertype"] = array("type"=>200,"varname"=>"usertype", "name" => "usertype", "autoInc" => "0");
$dalTabledoc_users["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTabledoc_users["id"]["key"]=true;

$dal_info["docmanager_at_localhost__doc_users"] = &$dalTabledoc_users;
?>