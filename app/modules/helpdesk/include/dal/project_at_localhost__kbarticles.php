<?php
$dalTablekbarticles = array();
$dalTablekbarticles["approved"] = array("type"=>200,"varname"=>"approved", "name" => "approved", "autoInc" => "0");
$dalTablekbarticles["ArticleID"] = array("type"=>3,"varname"=>"ArticleID", "name" => "ArticleID", "autoInc" => "1");
$dalTablekbarticles["Category"] = array("type"=>200,"varname"=>"Category", "name" => "Category", "autoInc" => "0");
$dalTablekbarticles["DateCreated"] = array("type"=>7,"varname"=>"DateCreated", "name" => "DateCreated", "autoInc" => "0");
$dalTablekbarticles["Problem"] = array("type"=>201,"varname"=>"Problem", "name" => "Problem", "autoInc" => "0");
$dalTablekbarticles["Solution"] = array("type"=>201,"varname"=>"Solution", "name" => "Solution", "autoInc" => "0");
$dalTablekbarticles["Title"] = array("type"=>200,"varname"=>"Title", "name" => "Title", "autoInc" => "0");
$dalTablekbarticles["Views"] = array("type"=>3,"varname"=>"Views", "name" => "Views", "autoInc" => "0");
$dalTablekbarticles["keyworlds"] = array("type"=>200,"varname"=>"keyworlds", "name" => "keyworlds", "autoInc" => "0");
$dalTablekbarticles["ArticleID"]["key"]=true;

$dal_info["project_at_localhost__kbarticles"] = &$dalTablekbarticles;
?>