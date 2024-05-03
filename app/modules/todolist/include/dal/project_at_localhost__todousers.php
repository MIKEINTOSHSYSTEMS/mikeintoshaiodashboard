<?php
$dalTabletodousers = array();
$dalTabletodousers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletodousers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTabletodousers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTabletodousers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTabletodousers["avatar"] = array("type"=>200,"varname"=>"avatar", "name" => "avatar", "autoInc" => "0");
$dalTabletodousers["daystoadd"] = array("type"=>3,"varname"=>"daystoadd", "name" => "daystoadd", "autoInc" => "0");
$dalTabletodousers["email"] = array("type"=>201,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTabletodousers["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTabletodousers["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTabletodousers["id"]["key"]=true;

$dal_info["project_at_localhost__todousers"] = &$dalTabletodousers;
?>