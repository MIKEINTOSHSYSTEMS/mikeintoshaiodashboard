<?php
$dalTabletrainings = array();
$dalTabletrainings["TrainingID"] = array("type"=>3,"varname"=>"TrainingID", "name" => "TrainingID", "autoInc" => "1");
$dalTabletrainings["Training_Start_Date"] = array("type"=>7,"varname"=>"Training_Start_Date", "name" => "Training_Start_Date", "autoInc" => "0");
$dalTabletrainings["Training_End_Date"] = array("type"=>7,"varname"=>"Training_End_Date", "name" => "Training_End_Date", "autoInc" => "0");
$dalTabletrainings["TrainingTitle"] = array("type"=>200,"varname"=>"TrainingTitle", "name" => "TrainingTitle", "autoInc" => "0");
$dalTabletrainings["TypeName"] = array("type"=>200,"varname"=>"TypeName", "name" => "TypeName", "autoInc" => "0");
$dalTabletrainings["OrganizerName"] = array("type"=>200,"varname"=>"OrganizerName", "name" => "OrganizerName", "autoInc" => "0");
$dalTabletrainings["CityTownName"] = array("type"=>200,"varname"=>"CityTownName", "name" => "CityTownName", "autoInc" => "0");
$dalTabletrainings["VenueName"] = array("type"=>200,"varname"=>"VenueName", "name" => "VenueName", "autoInc" => "0");
$dalTabletrainings["Trainer_FullName"] = array("type"=>200,"varname"=>"Trainer_FullName", "name" => "Trainer_FullName", "autoInc" => "0");
$dalTabletrainings["TrainingRound"] = array("type"=>3,"varname"=>"TrainingRound", "name" => "TrainingRound", "autoInc" => "0");
$dalTabletrainings["TrainingNote"] = array("type"=>200,"varname"=>"TrainingNote", "name" => "TrainingNote", "autoInc" => "0");
$dalTabletrainings["program_areas"] = array("type"=>200,"varname"=>"program_areas", "name" => "program_areas", "autoInc" => "0");
$dalTabletrainings["TrainingID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__trainings"] = &$dalTabletrainings;
?>