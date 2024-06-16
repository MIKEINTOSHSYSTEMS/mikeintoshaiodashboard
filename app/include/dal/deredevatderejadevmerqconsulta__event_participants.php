<?php
$dalTableevent_participants = array();
$dalTableevent_participants["EventID"] = array("type"=>3,"varname"=>"EventID", "name" => "EventID", "autoInc" => "0");
$dalTableevent_participants["CandidateID"] = array("type"=>3,"varname"=>"CandidateID", "name" => "CandidateID", "autoInc" => "0");
$dalTableevent_participants["StudentID"] = array("type"=>200,"varname"=>"StudentID", "name" => "StudentID", "autoInc" => "0");
$dalTableevent_participants["Event_Start_Date"] = array("type"=>7,"varname"=>"Event_Start_Date", "name" => "Event_Start_Date", "autoInc" => "0");
$dalTableevent_participants["Event_End_Date"] = array("type"=>7,"varname"=>"Event_End_Date", "name" => "Event_End_Date", "autoInc" => "0");
$dalTableevent_participants["Event_Round"] = array("type"=>3,"varname"=>"Event_Round", "name" => "Event_Round", "autoInc" => "0");
$dalTableevent_participants["Event_Organizer"] = array("type"=>200,"varname"=>"Event_Organizer", "name" => "Event_Organizer", "autoInc" => "0");
$dalTableevent_participants["Event_Location"] = array("type"=>200,"varname"=>"Event_Location", "name" => "Event_Location", "autoInc" => "0");
$dalTableevent_participants["Event_Note"] = array("type"=>200,"varname"=>"Event_Note", "name" => "Event_Note", "autoInc" => "0");
$dalTableevent_participants["First_Name"] = array("type"=>200,"varname"=>"First_Name", "name" => "First_Name", "autoInc" => "0");
$dalTableevent_participants["Middle_Name"] = array("type"=>200,"varname"=>"Middle_Name", "name" => "Middle_Name", "autoInc" => "0");
$dalTableevent_participants["Last_Name"] = array("type"=>200,"varname"=>"Last_Name", "name" => "Last_Name", "autoInc" => "0");
$dalTableevent_participants["Sex"] = array("type"=>200,"varname"=>"Sex", "name" => "Sex", "autoInc" => "0");
$dalTableevent_participants["Phone"] = array("type"=>200,"varname"=>"Phone", "name" => "Phone", "autoInc" => "0");
$dalTableevent_participants["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableevent_participants["Disability_Status"] = array("type"=>200,"varname"=>"Disability_Status", "name" => "Disability_Status", "autoInc" => "0");
$dalTableevent_participants["Disability_Type"] = array("type"=>3,"varname"=>"Disability_Type", "name" => "Disability_Type", "autoInc" => "0");
$dalTableevent_participants["Disability_Type_Other"] = array("type"=>3,"varname"=>"Disability_Type_Other", "name" => "Disability_Type_Other", "autoInc" => "0");
$dalTableevent_participants["Participant_Type"] = array("type"=>200,"varname"=>"Participant_Type", "name" => "Participant_Type", "autoInc" => "0");
$dalTableevent_participants["Participant_Field_of_Study"] = array("type"=>200,"varname"=>"Participant_Field_of_Study", "name" => "Participant_Field_of_Study", "autoInc" => "0");
$dalTableevent_participants["Participant_Organization_Type"] = array("type"=>200,"varname"=>"Participant_Organization_Type", "name" => "Participant_Organization_Type", "autoInc" => "0");
$dalTableevent_participants["Participant_Organization_Name"] = array("type"=>200,"varname"=>"Participant_Organization_Name", "name" => "Participant_Organization_Name", "autoInc" => "0");
$dalTableevent_participants["Participant_Home_Address"] = array("type"=>200,"varname"=>"Participant_Home_Address", "name" => "Participant_Home_Address", "autoInc" => "0");
$dalTableevent_participants["Date"] = array("type"=>7,"varname"=>"Date", "name" => "Date", "autoInc" => "0");
$dalTableevent_participants["EventID"]["key"]=true;
$dalTableevent_participants["CandidateID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__event_participants"] = &$dalTableevent_participants;
?>