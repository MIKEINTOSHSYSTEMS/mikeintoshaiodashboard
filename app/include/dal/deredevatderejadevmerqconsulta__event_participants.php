<?php
$dalTableevent_participants = array();
$dalTableevent_participants["EventID"] = array("type"=>3,"varname"=>"EventID", "name" => "EventID");
$dalTableevent_participants["CandidateID"] = array("type"=>3,"varname"=>"CandidateID", "name" => "CandidateID");
$dalTableevent_participants["StudentID"] = array("type"=>200,"varname"=>"StudentID", "name" => "StudentID");
$dalTableevent_participants["Event_Start_Date"] = array("type"=>7,"varname"=>"Event_Start_Date", "name" => "Event_Start_Date");
$dalTableevent_participants["Event_End_Date"] = array("type"=>7,"varname"=>"Event_End_Date", "name" => "Event_End_Date");
$dalTableevent_participants["First_Name"] = array("type"=>200,"varname"=>"First_Name", "name" => "First_Name");
$dalTableevent_participants["Middle_Name"] = array("type"=>200,"varname"=>"Middle_Name", "name" => "Middle_Name");
$dalTableevent_participants["Last_Name"] = array("type"=>200,"varname"=>"Last_Name", "name" => "Last_Name");
$dalTableevent_participants["Sex"] = array("type"=>200,"varname"=>"Sex", "name" => "Sex");
$dalTableevent_participants["Phone"] = array("type"=>200,"varname"=>"Phone", "name" => "Phone");
$dalTableevent_participants["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email");
$dalTableevent_participants["Disability_Status"] = array("type"=>200,"varname"=>"Disability_Status", "name" => "Disability_Status");
$dalTableevent_participants["Disability_Type"] = array("type"=>3,"varname"=>"Disability_Type", "name" => "Disability_Type");
$dalTableevent_participants["Disability_Type_Other"] = array("type"=>3,"varname"=>"Disability_Type_Other", "name" => "Disability_Type_Other");
$dalTableevent_participants["Participant_Type"] = array("type"=>200,"varname"=>"Participant_Type", "name" => "Participant_Type");
$dalTableevent_participants["Participant_Field_of_Study"] = array("type"=>200,"varname"=>"Participant_Field_of_Study", "name" => "Participant_Field_of_Study");
$dalTableevent_participants["Participant_Organization_Type"] = array("type"=>200,"varname"=>"Participant_Organization_Type", "name" => "Participant_Organization_Type");
$dalTableevent_participants["Participant_Organization_Name"] = array("type"=>200,"varname"=>"Participant_Organization_Name", "name" => "Participant_Organization_Name");
$dalTableevent_participants["Participant_Home_Address"] = array("type"=>200,"varname"=>"Participant_Home_Address", "name" => "Participant_Home_Address");
	$dalTableevent_participants["EventID"]["key"]=true;
	$dalTableevent_participants["CandidateID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__event_participants"] = &$dalTableevent_participants;
?>