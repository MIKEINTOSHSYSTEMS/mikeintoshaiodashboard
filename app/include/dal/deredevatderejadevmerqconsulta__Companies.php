<?php
$dalTableCompanies = array();
$dalTableCompanies["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID", "autoInc" => "1");
$dalTableCompanies["CompanyName"] = array("type"=>200,"varname"=>"CompanyName", "name" => "CompanyName", "autoInc" => "0");
$dalTableCompanies["CompanyEmail"] = array("type"=>200,"varname"=>"CompanyEmail", "name" => "CompanyEmail", "autoInc" => "0");
$dalTableCompanies["CompanyPhone"] = array("type"=>200,"varname"=>"CompanyPhone", "name" => "CompanyPhone", "autoInc" => "0");
$dalTableCompanies["CompanyWebsite"] = array("type"=>200,"varname"=>"CompanyWebsite", "name" => "CompanyWebsite", "autoInc" => "0");
$dalTableCompanies["CompanySector"] = array("type"=>200,"varname"=>"CompanySector", "name" => "CompanySector", "autoInc" => "0");
$dalTableCompanies["CompanyProfile"] = array("type"=>201,"varname"=>"CompanyProfile", "name" => "CompanyProfile", "autoInc" => "0");
$dalTableCompanies["CompanyJob"] = array("type"=>200,"varname"=>"CompanyJob", "name" => "CompanyJob", "autoInc" => "0");
$dalTableCompanies["CompanyID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__Companies"] = &$dalTableCompanies;
?>