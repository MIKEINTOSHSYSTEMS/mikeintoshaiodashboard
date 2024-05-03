<?php
$dalTabletodoboards = array();
$dalTabletodoboards["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletodoboards["boardname"] = array("type"=>200,"varname"=>"boardname", "name" => "boardname", "autoInc" => "0");
$dalTabletodoboards["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid", "autoInc" => "0");
$dalTabletodoboards["id"]["key"]=true;

$dal_info["project_at_localhost__todoboards"] = &$dalTabletodoboards;
?>