<?php
$dalTablecalweekdays = array();
$dalTablecalweekdays["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecalweekdays["daynum"] = array("type"=>3,"varname"=>"daynum", "name" => "daynum", "autoInc" => "0");
$dalTablecalweekdays["dayname"] = array("type"=>200,"varname"=>"dayname", "name" => "dayname", "autoInc" => "0");
$dalTablecalweekdays["id"]["key"]=true;

$dal_info["project_at_localhost__calweekdays"] = &$dalTablecalweekdays;
?>