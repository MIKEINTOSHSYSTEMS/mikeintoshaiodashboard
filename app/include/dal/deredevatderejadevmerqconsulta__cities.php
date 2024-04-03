<?php
$dalTablecities = array();
$dalTablecities["CityID"] = array("type"=>3,"varname"=>"CityID", "name" => "CityID", "autoInc" => "1");
$dalTablecities["CityName"] = array("type"=>200,"varname"=>"CityName", "name" => "CityName", "autoInc" => "0");
$dalTablecities["RegionID"] = array("type"=>3,"varname"=>"RegionID", "name" => "RegionID", "autoInc" => "0");
$dalTablecities["CityID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__cities"] = &$dalTablecities;
?>