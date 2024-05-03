<?php
$dalTablehd_users = array();
$dalTablehd_users["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehd_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablehd_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablehd_users["usertype"] = array("type"=>200,"varname"=>"usertype", "name" => "usertype", "autoInc" => "0");
$dalTablehd_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablehd_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablehd_users["last_activity"] = array("type"=>135,"varname"=>"last_activity", "name" => "last_activity", "autoInc" => "0");
$dalTablehd_users["viewing_page"] = array("type"=>200,"varname"=>"viewing_page", "name" => "viewing_page", "autoInc" => "0");
$dalTablehd_users["repling_in"] = array("type"=>200,"varname"=>"repling_in", "name" => "repling_in", "autoInc" => "0");
$dalTablehd_users["supporterView"] = array("type"=>200,"varname"=>"supporterView", "name" => "supporterView", "autoInc" => "0");
$dalTablehd_users["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablehd_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablehd_users["id"]["key"]=true;

$dal_info["project_at_localhost__hd_users"] = &$dalTablehd_users;
?>