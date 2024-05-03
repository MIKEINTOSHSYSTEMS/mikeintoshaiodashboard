<?php
$dalTableforumcategories = array();
$dalTableforumcategories["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumcategories["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableforumcategories["color"] = array("type"=>200,"varname"=>"color", "name" => "color", "autoInc" => "0");
$dalTableforumcategories["id"]["key"]=true;

$dal_info["project_at_localhost__forumcategories"] = &$dalTableforumcategories;
?>