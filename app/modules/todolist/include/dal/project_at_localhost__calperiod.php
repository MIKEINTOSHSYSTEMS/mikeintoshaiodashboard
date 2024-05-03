<?php
$dalTablecalperiod = array();
$dalTablecalperiod["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecalperiod["Period"] = array("type"=>200,"varname"=>"Period", "name" => "Period", "autoInc" => "0");
$dalTablecalperiod["ValueField"] = array("type"=>200,"varname"=>"ValueField", "name" => "ValueField", "autoInc" => "0");
$dalTablecalperiod["id"]["key"]=true;

$dal_info["project_at_localhost__calperiod"] = &$dalTablecalperiod;
?>