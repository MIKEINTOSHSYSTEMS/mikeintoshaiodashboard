<?php
$dalTabletraining_participants = array();
$dalTabletraining_participants["TrainingID"] = array("type"=>3,"varname"=>"TrainingID", "name" => "TrainingID");
$dalTabletraining_participants["CandidateID"] = array("type"=>3,"varname"=>"CandidateID", "name" => "CandidateID");
$dalTabletraining_participants["Training_Organizer"] = array("type"=>200,"varname"=>"Training_Organizer", "name" => "Training_Organizer");
$dalTabletraining_participants["Training_Type"] = array("type"=>200,"varname"=>"Training_Type", "name" => "Training_Type");
$dalTabletraining_participants["Program_Area"] = array("type"=>200,"varname"=>"Program_Area", "name" => "Program_Area");
$dalTabletraining_participants["Training_City_Town"] = array("type"=>200,"varname"=>"Training_City_Town", "name" => "Training_City_Town");
$dalTabletraining_participants["Training_Venue"] = array("type"=>200,"varname"=>"Training_Venue", "name" => "Training_Venue");
$dalTabletraining_participants["Training_Start_Date"] = array("type"=>7,"varname"=>"Training_Start_Date", "name" => "Training_Start_Date");
$dalTabletraining_participants["Training_End_Date"] = array("type"=>7,"varname"=>"Training_End_Date", "name" => "Training_End_Date");
	$dalTabletraining_participants["TrainingID"]["key"]=true;
	$dalTabletraining_participants["CandidateID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__training_participants"] = &$dalTabletraining_participants;
?>