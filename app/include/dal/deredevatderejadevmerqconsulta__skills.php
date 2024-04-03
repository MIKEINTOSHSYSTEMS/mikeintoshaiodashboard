<?php
$dalTableskills = array();
$dalTableskills["SkillID"] = array("type"=>3,"varname"=>"SkillID", "name" => "SkillID", "autoInc" => "1");
$dalTableskills["SkillName"] = array("type"=>200,"varname"=>"SkillName", "name" => "SkillName", "autoInc" => "0");
$dalTableskills["SkillID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__skills"] = &$dalTableskills;
?>