<?php
$dalTablepdf_forms = array();
$dalTablepdf_forms["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepdf_forms["formname"] = array("type"=>200,"varname"=>"formname", "name" => "formname", "autoInc" => "0");
$dalTablepdf_forms["sqlquery"] = array("type"=>200,"varname"=>"sqlquery", "name" => "sqlquery", "autoInc" => "0");
$dalTablepdf_forms["formfile"] = array("type"=>200,"varname"=>"formfile", "name" => "formfile", "autoInc" => "0");
$dalTablepdf_forms["pdffile"] = array("type"=>200,"varname"=>"pdffile", "name" => "pdffile", "autoInc" => "0");
$dalTablepdf_forms["multifields"] = array("type"=>3,"varname"=>"multifields", "name" => "multifields", "autoInc" => "0");
$dalTablepdf_forms["id"]["key"]=true;

$dal_info["project_at_localhost__pdf_forms"] = &$dalTablepdf_forms;
?>