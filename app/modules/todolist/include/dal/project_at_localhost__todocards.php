<?php
$dalTabletodocards = array();
$dalTabletodocards["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletodocards["listid"] = array("type"=>3,"varname"=>"listid", "name" => "listid", "autoInc" => "0");
$dalTabletodocards["cardname"] = array("type"=>200,"varname"=>"cardname", "name" => "cardname", "autoInc" => "0");
$dalTabletodocards["categoryid"] = array("type"=>3,"varname"=>"categoryid", "name" => "categoryid", "autoInc" => "0");
$dalTabletodocards["cardorder"] = array("type"=>3,"varname"=>"cardorder", "name" => "cardorder", "autoInc" => "0");
$dalTabletodocards["assign"] = array("type"=>3,"varname"=>"assign", "name" => "assign", "autoInc" => "0");
$dalTabletodocards["boardid"] = array("type"=>3,"varname"=>"boardid", "name" => "boardid", "autoInc" => "0");
$dalTabletodocards["duedate"] = array("type"=>135,"varname"=>"duedate", "name" => "duedate", "autoInc" => "0");
$dalTabletodocards["ownerid"] = array("type"=>200,"varname"=>"ownerid", "name" => "ownerid", "autoInc" => "0");
$dalTabletodocards["startdate"] = array("type"=>7,"varname"=>"startdate", "name" => "startdate", "autoInc" => "0");
$dalTabletodocards["id"]["key"]=true;

$dal_info["project_at_localhost__todocards"] = &$dalTabletodocards;
?>