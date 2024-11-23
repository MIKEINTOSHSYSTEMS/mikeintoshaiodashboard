<?php
$dalTableperformance_years = array();
$dalTableperformance_years["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableperformance_years["tracking_id"] = array("type"=>3,"varname"=>"tracking_id", "name" => "tracking_id", "autoInc" => "0");
$dalTableperformance_years["year"] = array("type"=>2,"varname"=>"year", "name" => "year", "autoInc" => "0");
$dalTableperformance_years["target"] = array("type"=>14,"varname"=>"target", "name" => "target", "autoInc" => "0");
$dalTableperformance_years["actual"] = array("type"=>14,"varname"=>"actual", "name" => "actual", "autoInc" => "0");
$dalTableperformance_years["id"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__performance_years"] = &$dalTableperformance_years;
?>