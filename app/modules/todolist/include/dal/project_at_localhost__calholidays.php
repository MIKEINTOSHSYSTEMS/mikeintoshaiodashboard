<?php
$dalTablecalholidays = array();
$dalTablecalholidays["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecalholidays["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablecalholidays["date"] = array("type"=>7,"varname"=>"date", "name" => "date", "autoInc" => "0");
$dalTablecalholidays["id"]["key"]=true;

$dal_info["project_at_localhost__calholidays"] = &$dalTablecalholidays;
?>