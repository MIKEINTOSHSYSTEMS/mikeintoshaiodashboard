<?php
$dalTabletodocomments = array();
$dalTabletodocomments["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletodocomments["cardid"] = array("type"=>3,"varname"=>"cardid", "name" => "cardid", "autoInc" => "0");
$dalTabletodocomments["comment"] = array("type"=>200,"varname"=>"comment", "name" => "comment", "autoInc" => "0");
$dalTabletodocomments["ownerid"] = array("type"=>3,"varname"=>"ownerid", "name" => "ownerid", "autoInc" => "0");
$dalTabletodocomments["commtime"] = array("type"=>200,"varname"=>"commtime", "name" => "commtime", "autoInc" => "0");
$dalTabletodocomments["id"]["key"]=true;

$dal_info["project_at_localhost__todocomments"] = &$dalTabletodocomments;
?>