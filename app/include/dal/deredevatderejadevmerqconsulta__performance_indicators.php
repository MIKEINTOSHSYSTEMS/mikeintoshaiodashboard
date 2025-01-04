<?php
$dalTableperformance_indicators = array();
$dalTableperformance_indicators["indicator_id"] = array("type"=>3,"varname"=>"indicator_id", "name" => "indicator_id", "autoInc" => "1");
$dalTableperformance_indicators["indicator_name"] = array("type"=>200,"varname"=>"indicator_name", "name" => "indicator_name", "autoInc" => "0");
$dalTableperformance_indicators["unit_of_measurement"] = array("type"=>200,"varname"=>"unit_of_measurement", "name" => "unit_of_measurement", "autoInc" => "0");
$dalTableperformance_indicators["reporting_frequency"] = array("type"=>200,"varname"=>"reporting_frequency", "name" => "reporting_frequency", "autoInc" => "0");
$dalTableperformance_indicators["actual_setting"] = array("type"=>201,"varname"=>"actual_setting", "name" => "actual_setting", "autoInc" => "0");
$dalTableperformance_indicators["indicator_id"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__performance_indicators"] = &$dalTableperformance_indicators;
?>