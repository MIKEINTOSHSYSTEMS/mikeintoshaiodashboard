<?php
$dalTableJobs = array();
$dalTableJobs["JobID"] = array("type"=>3,"varname"=>"JobID", "name" => "JobID");
$dalTableJobs["JobName"] = array("type"=>200,"varname"=>"JobName", "name" => "JobName");
$dalTableJobs["JobCategory"] = array("type"=>200,"varname"=>"JobCategory", "name" => "JobCategory");
$dalTableJobs["JobType"] = array("type"=>200,"varname"=>"JobType", "name" => "JobType");
$dalTableJobs["JobPosition"] = array("type"=>200,"varname"=>"JobPosition", "name" => "JobPosition");
$dalTableJobs["JobDetails"] = array("type"=>201,"varname"=>"JobDetails", "name" => "JobDetails");
$dalTableJobs["CompanyName"] = array("type"=>200,"varname"=>"CompanyName", "name" => "CompanyName");
	$dalTableJobs["JobID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__Jobs"] = &$dalTableJobs;
?>