<?php
$dalTablebackup = array();
$dalTablebackup["backup_id"] = array("type"=>3,"varname"=>"backup_id", "name" => "backup_id", "autoInc" => "1");
$dalTablebackup["backup_name"] = array("type"=>200,"varname"=>"backup_name", "name" => "backup_name", "autoInc" => "0");
$dalTablebackup["backup_date"] = array("type"=>7,"varname"=>"backup_date", "name" => "backup_date", "autoInc" => "0");
$dalTablebackup["backup_action"] = array("type"=>200,"varname"=>"backup_action", "name" => "backup_action", "autoInc" => "0");
$dalTablebackup["backup_id"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__backup"] = &$dalTablebackup;
?>