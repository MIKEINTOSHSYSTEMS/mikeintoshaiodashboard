<?php
$dalTablecalusers = array();
$dalTablecalusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecalusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablecalusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablecalusers["id"]["key"]=true;

$dal_info["project_at_localhost__calusers"] = &$dalTablecalusers;
?>