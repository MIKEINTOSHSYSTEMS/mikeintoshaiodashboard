<?php
$dalTabletodolists = array();
$dalTabletodolists["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletodolists["listname"] = array("type"=>200,"varname"=>"listname", "name" => "listname", "autoInc" => "0");
$dalTabletodolists["listorder"] = array("type"=>3,"varname"=>"listorder", "name" => "listorder", "autoInc" => "0");
$dalTabletodolists["boardid"] = array("type"=>3,"varname"=>"boardid", "name" => "boardid", "autoInc" => "0");
$dalTabletodolists["id"]["key"]=true;

$dal_info["project_at_localhost__todolists"] = &$dalTabletodolists;
?>