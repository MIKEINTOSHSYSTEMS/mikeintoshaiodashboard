<?php
$dalTableevents = array();
$dalTableevents["EventID"] = array("type"=>3,"varname"=>"EventID", "name" => "EventID", "autoInc" => "1");
$dalTableevents["EventName"] = array("type"=>200,"varname"=>"EventName", "name" => "EventName", "autoInc" => "0");
$dalTableevents["EventID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__events"] = &$dalTableevents;
?>