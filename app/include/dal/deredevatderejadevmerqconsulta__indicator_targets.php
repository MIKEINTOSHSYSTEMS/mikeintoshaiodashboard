<?php
$dalTableindicator_targets = array();
$dalTableindicator_targets["IndicatorID"] = array("type"=>3,"varname"=>"IndicatorID", "name" => "IndicatorID", "autoInc" => "1");
$dalTableindicator_targets["IndicatorName"] = array("type"=>200,"varname"=>"IndicatorName", "name" => "IndicatorName", "autoInc" => "0");
$dalTableindicator_targets["IndicatorDescription"] = array("type"=>200,"varname"=>"IndicatorDescription", "name" => "IndicatorDescription", "autoInc" => "0");
$dalTableindicator_targets["IndicatorValue"] = array("type"=>3,"varname"=>"IndicatorValue", "name" => "IndicatorValue", "autoInc" => "0");
$dalTableindicator_targets["IndicatorTarget"] = array("type"=>3,"varname"=>"IndicatorTarget", "name" => "IndicatorTarget", "autoInc" => "0");
$dalTableindicator_targets["IndicatorID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__indicator_targets"] = &$dalTableindicator_targets;
?>