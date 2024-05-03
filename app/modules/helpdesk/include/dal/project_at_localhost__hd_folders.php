<?php
$dalTablehd_folders = array();
$dalTablehd_folders["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehd_folders["foldername"] = array("type"=>200,"varname"=>"foldername", "name" => "foldername", "autoInc" => "0");
$dalTablehd_folders["lastticket"] = array("type"=>135,"varname"=>"lastticket", "name" => "lastticket", "autoInc" => "0");
$dalTablehd_folders["id"]["key"]=true;

$dal_info["project_at_localhost__hd_folders"] = &$dalTablehd_folders;
?>