<?php
$dalTablechat_users = array();
$dalTablechat_users["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablechat_users["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid", "autoInc" => "0");
$dalTablechat_users["lastaccess"] = array("type"=>135,"varname"=>"lastaccess", "name" => "lastaccess", "autoInc" => "0");
$dalTablechat_users["isTyping"] = array("type"=>200,"varname"=>"isTyping", "name" => "isTyping", "autoInc" => "0");
$dalTablechat_users["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTablechat_users["id"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__chat_users"] = &$dalTablechat_users;
?>