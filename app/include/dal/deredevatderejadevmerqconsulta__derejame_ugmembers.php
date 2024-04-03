<?php
$dalTablederejame_ugmembers = array();
$dalTablederejame_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablederejame_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablederejame_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablederejame_ugmembers["UserName"]["key"]=true;
$dalTablederejame_ugmembers["GroupID"]["key"]=true;
$dalTablederejame_ugmembers["Provider"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__derejame_ugmembers"] = &$dalTablederejame_ugmembers;
?>