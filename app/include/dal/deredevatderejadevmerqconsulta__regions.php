<?php
$dalTableregions = array();
$dalTableregions["RegionID"] = array("type"=>3,"varname"=>"RegionID", "name" => "RegionID", "autoInc" => "1");
$dalTableregions["RegionName"] = array("type"=>200,"varname"=>"RegionName", "name" => "RegionName", "autoInc" => "0");
$dalTableregions["Lat"] = array("type"=>14,"varname"=>"Lat", "name" => "Lat", "autoInc" => "0");
$dalTableregions["Lng"] = array("type"=>14,"varname"=>"Lng", "name" => "Lng", "autoInc" => "0");
$dalTableregions["RegionID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__regions"] = &$dalTableregions;
?>