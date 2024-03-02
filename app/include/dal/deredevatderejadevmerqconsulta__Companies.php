<?php
$dalTableCompanies = array();
$dalTableCompanies["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTableCompanies["CompanyName"] = array("type"=>200,"varname"=>"CompanyName", "name" => "CompanyName");
$dalTableCompanies["CompanyEmail"] = array("type"=>200,"varname"=>"CompanyEmail", "name" => "CompanyEmail");
$dalTableCompanies["CompanyPhone"] = array("type"=>200,"varname"=>"CompanyPhone", "name" => "CompanyPhone");
$dalTableCompanies["CompanyWebsite"] = array("type"=>200,"varname"=>"CompanyWebsite", "name" => "CompanyWebsite");
$dalTableCompanies["CompanySector"] = array("type"=>200,"varname"=>"CompanySector", "name" => "CompanySector");
$dalTableCompanies["CompanyProfile"] = array("type"=>201,"varname"=>"CompanyProfile", "name" => "CompanyProfile");
$dalTableCompanies["CompanyJob"] = array("type"=>200,"varname"=>"CompanyJob", "name" => "CompanyJob");
	$dalTableCompanies["CompanyID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__Companies"] = &$dalTableCompanies;
?>