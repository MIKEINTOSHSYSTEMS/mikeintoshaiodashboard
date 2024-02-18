<?php
$dalTablezones = array();
$dalTablezones["ZoneID"] = array("type"=>3,"varname"=>"ZoneID", "name" => "ZoneID");
$dalTablezones["ZoneName"] = array("type"=>200,"varname"=>"ZoneName", "name" => "ZoneName");
$dalTablezones["SubCityID"] = array("type"=>3,"varname"=>"SubCityID", "name" => "SubCityID");
	$dalTablezones["ZoneID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__zones"] = &$dalTablezones;
?>