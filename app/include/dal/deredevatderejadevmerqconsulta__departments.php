<?php
$dalTabledepartments = array();
$dalTabledepartments["DepartmentID"] = array("type"=>3,"varname"=>"DepartmentID", "name" => "DepartmentID", "autoInc" => "1");
$dalTabledepartments["DepartmentName"] = array("type"=>200,"varname"=>"DepartmentName", "name" => "DepartmentName", "autoInc" => "0");
$dalTabledepartments["DepartmentID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__departments"] = &$dalTabledepartments;
?>