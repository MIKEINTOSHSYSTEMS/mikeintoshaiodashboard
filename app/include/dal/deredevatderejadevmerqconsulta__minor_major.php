<?php
$dalTableminor_major = array();
$dalTableminor_major["MinorMajorID"] = array("type"=>3,"varname"=>"MinorMajorID", "name" => "MinorMajorID", "autoInc" => "1");
$dalTableminor_major["DepartmentID"] = array("type"=>3,"varname"=>"DepartmentID", "name" => "DepartmentID", "autoInc" => "0");
$dalTableminor_major["MinorName"] = array("type"=>200,"varname"=>"MinorName", "name" => "MinorName", "autoInc" => "0");
$dalTableminor_major["MajorName"] = array("type"=>200,"varname"=>"MajorName", "name" => "MajorName", "autoInc" => "0");
$dalTableminor_major["MinorMajorID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__minor_major"] = &$dalTableminor_major;
?>