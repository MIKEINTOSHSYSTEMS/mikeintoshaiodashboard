<?php
$dalTablehd_todolist = array();
$dalTablehd_todolist["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehd_todolist["ticketid"] = array("type"=>3,"varname"=>"ticketid", "name" => "ticketid", "autoInc" => "0");
$dalTablehd_todolist["completed"] = array("type"=>16,"varname"=>"completed", "name" => "completed", "autoInc" => "0");
$dalTablehd_todolist["task"] = array("type"=>201,"varname"=>"task", "name" => "task", "autoInc" => "0");
$dalTablehd_todolist["id"]["key"]=true;

$dal_info["project_at_localhost__hd_todolist"] = &$dalTablehd_todolist;
?>