<?php
$dalTabletest = array();
$dalTabletest["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletest["fchar1"] = array("type"=>200,"varname"=>"fchar1", "name" => "fchar1", "autoInc" => "0");
$dalTabletest["fchar2"] = array("type"=>200,"varname"=>"fchar2", "name" => "fchar2", "autoInc" => "0");
$dalTabletest["fint1"] = array("type"=>3,"varname"=>"fint1", "name" => "fint1", "autoInc" => "0");
$dalTabletest["fint2"] = array("type"=>3,"varname"=>"fint2", "name" => "fint2", "autoInc" => "0");
$dalTabletest["fdate1"] = array("type"=>7,"varname"=>"fdate1", "name" => "fdate1", "autoInc" => "0");
$dalTabletest["fdate2"] = array("type"=>7,"varname"=>"fdate2", "name" => "fdate2", "autoInc" => "0");
$dalTabletest["id"]["key"]=true;

$dal_info["project_at_localhost__test"] = &$dalTabletest;
?>