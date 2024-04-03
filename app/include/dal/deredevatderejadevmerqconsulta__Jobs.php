<?php
$dalTableJobs = array();
$dalTableJobs["JobID"] = array("type"=>3,"varname"=>"JobID", "name" => "JobID", "autoInc" => "1");
$dalTableJobs["JobName"] = array("type"=>200,"varname"=>"JobName", "name" => "JobName", "autoInc" => "0");
$dalTableJobs["JobCategory"] = array("type"=>200,"varname"=>"JobCategory", "name" => "JobCategory", "autoInc" => "0");
$dalTableJobs["JobType"] = array("type"=>200,"varname"=>"JobType", "name" => "JobType", "autoInc" => "0");
$dalTableJobs["JobPosition"] = array("type"=>200,"varname"=>"JobPosition", "name" => "JobPosition", "autoInc" => "0");
$dalTableJobs["JobDetails"] = array("type"=>201,"varname"=>"JobDetails", "name" => "JobDetails", "autoInc" => "0");
$dalTableJobs["CompanyName"] = array("type"=>200,"varname"=>"CompanyName", "name" => "CompanyName", "autoInc" => "0");
$dalTableJobs["JobID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__Jobs"] = &$dalTableJobs;
?>