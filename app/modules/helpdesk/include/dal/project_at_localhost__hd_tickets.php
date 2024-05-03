<?php
$dalTablehd_tickets = array();
$dalTablehd_tickets["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehd_tickets["created"] = array("type"=>135,"varname"=>"created", "name" => "created", "autoInc" => "0");
$dalTablehd_tickets["updated"] = array("type"=>135,"varname"=>"updated", "name" => "updated", "autoInc" => "0");
$dalTablehd_tickets["subject"] = array("type"=>200,"varname"=>"subject", "name" => "subject", "autoInc" => "0");
$dalTablehd_tickets["statusid"] = array("type"=>3,"varname"=>"statusid", "name" => "statusid", "autoInc" => "0");
$dalTablehd_tickets["priorityid"] = array("type"=>3,"varname"=>"priorityid", "name" => "priorityid", "autoInc" => "0");
$dalTablehd_tickets["folderid"] = array("type"=>3,"varname"=>"folderid", "name" => "folderid", "autoInc" => "0");
$dalTablehd_tickets["categoryid"] = array("type"=>3,"varname"=>"categoryid", "name" => "categoryid", "autoInc" => "0");
$dalTablehd_tickets["directionid"] = array("type"=>3,"varname"=>"directionid", "name" => "directionid", "autoInc" => "0");
$dalTablehd_tickets["ticketemail"] = array("type"=>200,"varname"=>"ticketemail", "name" => "ticketemail", "autoInc" => "0");
$dalTablehd_tickets["assignedid"] = array("type"=>3,"varname"=>"assignedid", "name" => "assignedid", "autoInc" => "0");
$dalTablehd_tickets["clientid"] = array("type"=>3,"varname"=>"clientid", "name" => "clientid", "autoInc" => "0");
$dalTablehd_tickets["client_status"] = array("type"=>3,"varname"=>"client_status", "name" => "client_status", "autoInc" => "0");
$dalTablehd_tickets["id"]["key"]=true;

$dal_info["project_at_localhost__hd_tickets"] = &$dalTablehd_tickets;
?>