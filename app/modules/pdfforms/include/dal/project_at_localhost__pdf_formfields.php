<?php
$dalTablepdf_formfields = array();
$dalTablepdf_formfields["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepdf_formfields["formid"] = array("type"=>3,"varname"=>"formid", "name" => "formid", "autoInc" => "0");
$dalTablepdf_formfields["fieldform"] = array("type"=>200,"varname"=>"fieldform", "name" => "fieldform", "autoInc" => "0");
$dalTablepdf_formfields["fieldsql"] = array("type"=>200,"varname"=>"fieldsql", "name" => "fieldsql", "autoInc" => "0");
$dalTablepdf_formfields["fieldformalt"] = array("type"=>200,"varname"=>"fieldformalt", "name" => "fieldformalt", "autoInc" => "0");
$dalTablepdf_formfields["cboxon"] = array("type"=>200,"varname"=>"cboxon", "name" => "cboxon", "autoInc" => "0");
$dalTablepdf_formfields["cboxoff"] = array("type"=>200,"varname"=>"cboxoff", "name" => "cboxoff", "autoInc" => "0");
$dalTablepdf_formfields["id"]["key"]=true;

$dal_info["project_at_localhost__pdf_formfields"] = &$dalTablepdf_formfields;
?>