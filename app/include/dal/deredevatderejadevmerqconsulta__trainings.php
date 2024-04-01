<?php
$dalTabletrainings = array();
$dalTabletrainings["TrainingID"] = array("type"=>3,"varname"=>"TrainingID", "name" => "TrainingID");
$dalTabletrainings["Training_Start_Date"] = array("type"=>7,"varname"=>"Training_Start_Date", "name" => "Training_Start_Date");
$dalTabletrainings["Training_End_Date"] = array("type"=>7,"varname"=>"Training_End_Date", "name" => "Training_End_Date");
$dalTabletrainings["TrainingTitle"] = array("type"=>200,"varname"=>"TrainingTitle", "name" => "TrainingTitle");
$dalTabletrainings["TypeName"] = array("type"=>200,"varname"=>"TypeName", "name" => "TypeName");
$dalTabletrainings["OrganizerName"] = array("type"=>200,"varname"=>"OrganizerName", "name" => "OrganizerName");
$dalTabletrainings["CityTownName"] = array("type"=>200,"varname"=>"CityTownName", "name" => "CityTownName");
$dalTabletrainings["VenueName"] = array("type"=>200,"varname"=>"VenueName", "name" => "VenueName");
$dalTabletrainings["Trainer_FullName"] = array("type"=>200,"varname"=>"Trainer_FullName", "name" => "Trainer_FullName");
$dalTabletrainings["TrainingRound"] = array("type"=>3,"varname"=>"TrainingRound", "name" => "TrainingRound");
$dalTabletrainings["TrainingNote"] = array("type"=>200,"varname"=>"TrainingNote", "name" => "TrainingNote");
$dalTabletrainings["program_areas"] = array("type"=>200,"varname"=>"program_areas", "name" => "program_areas");
	$dalTabletrainings["TrainingID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__trainings"] = &$dalTabletrainings;
?>