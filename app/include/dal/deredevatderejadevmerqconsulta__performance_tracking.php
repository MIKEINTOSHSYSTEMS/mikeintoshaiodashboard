<?php
$dalTableperformance_tracking = array();
$dalTableperformance_tracking["tracking_id"] = array("type"=>3,"varname"=>"tracking_id", "name" => "tracking_id", "autoInc" => "1");
$dalTableperformance_tracking["indicator_id"] = array("type"=>3,"varname"=>"indicator_id", "name" => "indicator_id", "autoInc" => "0");
$dalTableperformance_tracking["baseline_year"] = array("type"=>2,"varname"=>"baseline_year", "name" => "baseline_year", "autoInc" => "0");
$dalTableperformance_tracking["baseline_value"] = array("type"=>14,"varname"=>"baseline_value", "name" => "baseline_value", "autoInc" => "0");
$dalTableperformance_tracking["tracking_id"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__performance_tracking"] = &$dalTableperformance_tracking;
?>