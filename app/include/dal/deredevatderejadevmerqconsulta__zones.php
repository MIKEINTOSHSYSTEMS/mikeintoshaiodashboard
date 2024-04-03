<?php
$dalTablezones = array();
$dalTablezones["ZoneID"] = array("type"=>3,"varname"=>"ZoneID", "name" => "ZoneID", "autoInc" => "1");
$dalTablezones["ZoneName"] = array("type"=>200,"varname"=>"ZoneName", "name" => "ZoneName", "autoInc" => "0");
$dalTablezones["SubCityID"] = array("type"=>3,"varname"=>"SubCityID", "name" => "SubCityID", "autoInc" => "0");
$dalTablezones["ZoneID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__zones"] = &$dalTablezones;
?>