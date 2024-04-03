<?php
$dalTableprofessions = array();
$dalTableprofessions["ProfessionID"] = array("type"=>3,"varname"=>"ProfessionID", "name" => "ProfessionID", "autoInc" => "1");
$dalTableprofessions["ProfessionName"] = array("type"=>200,"varname"=>"ProfessionName", "name" => "ProfessionName", "autoInc" => "0");
$dalTableprofessions["ProfessionID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__professions"] = &$dalTableprofessions;
?>