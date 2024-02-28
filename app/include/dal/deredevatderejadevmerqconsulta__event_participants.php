<?php
$dalTableevent_participants = array();
$dalTableevent_participants["EventID"] = array("type"=>3,"varname"=>"EventID", "name" => "EventID");
$dalTableevent_participants["CandidateID"] = array("type"=>3,"varname"=>"CandidateID", "name" => "CandidateID");
$dalTableevent_participants["Event_Start_Date"] = array("type"=>7,"varname"=>"Event_Start_Date", "name" => "Event_Start_Date");
$dalTableevent_participants["Event_End_Date"] = array("type"=>7,"varname"=>"Event_End_Date", "name" => "Event_End_Date");
$dalTableevent_participants["First_Name"] = array("type"=>200,"varname"=>"First_Name", "name" => "First_Name");
$dalTableevent_participants["Middle_Name"] = array("type"=>200,"varname"=>"Middle_Name", "name" => "Middle_Name");
$dalTableevent_participants["Last_Name"] = array("type"=>200,"varname"=>"Last_Name", "name" => "Last_Name");
$dalTableevent_participants["Phone"] = array("type"=>200,"varname"=>"Phone", "name" => "Phone");
$dalTableevent_participants["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email");
	$dalTableevent_participants["EventID"]["key"]=true;
	$dalTableevent_participants["CandidateID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__event_participants"] = &$dalTableevent_participants;
?>