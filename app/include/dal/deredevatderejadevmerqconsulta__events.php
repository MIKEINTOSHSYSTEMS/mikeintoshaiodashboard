<?php
$dalTableevents = array();
$dalTableevents["EventID"] = array("type"=>3,"varname"=>"EventID", "name" => "EventID", "autoInc" => "1");
$dalTableevents["EventName"] = array("type"=>200,"varname"=>"EventName", "name" => "EventName", "autoInc" => "0");
$dalTableevents["Event_Round"] = array("type"=>3,"varname"=>"Event_Round", "name" => "Event_Round", "autoInc" => "0");
$dalTableevents["Event_Start_Date"] = array("type"=>7,"varname"=>"Event_Start_Date", "name" => "Event_Start_Date", "autoInc" => "0");
$dalTableevents["Event_End_Date"] = array("type"=>7,"varname"=>"Event_End_Date", "name" => "Event_End_Date", "autoInc" => "0");
$dalTableevents["Event_Organizer"] = array("type"=>200,"varname"=>"Event_Organizer", "name" => "Event_Organizer", "autoInc" => "0");
$dalTableevents["Event_Location"] = array("type"=>200,"varname"=>"Event_Location", "name" => "Event_Location", "autoInc" => "0");
$dalTableevents["Event_Note"] = array("type"=>200,"varname"=>"Event_Note", "name" => "Event_Note", "autoInc" => "0");
$dalTableevents["EventID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__events"] = &$dalTableevents;
?>