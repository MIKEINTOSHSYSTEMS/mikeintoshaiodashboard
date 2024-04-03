<?php
$dalTablesub_cities = array();
$dalTablesub_cities["SubCityID"] = array("type"=>3,"varname"=>"SubCityID", "name" => "SubCityID", "autoInc" => "1");
$dalTablesub_cities["SubCityName"] = array("type"=>200,"varname"=>"SubCityName", "name" => "SubCityName", "autoInc" => "0");
$dalTablesub_cities["CityID"] = array("type"=>3,"varname"=>"CityID", "name" => "CityID", "autoInc" => "0");
$dalTablesub_cities["SubCityID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__sub_cities"] = &$dalTablesub_cities;
?>