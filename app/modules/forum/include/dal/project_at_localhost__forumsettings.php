<?php
$dalTableforumsettings = array();
$dalTableforumsettings["show_active_users"] = array("type"=>16,"varname"=>"show_active_users", "name" => "show_active_users", "autoInc" => "0");
$dalTableforumsettings["autolock_after"] = array("type"=>3,"varname"=>"autolock_after", "name" => "autolock_after", "autoInc" => "0");
$dalTableforumsettings["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumsettings["id"]["key"]=true;

$dal_info["project_at_localhost__forumsettings"] = &$dalTableforumsettings;
?>