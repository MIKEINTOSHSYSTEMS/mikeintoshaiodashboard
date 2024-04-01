<?php
$dalTableTrainer = array();
$dalTableTrainer["TrainerID"] = array("type"=>3,"varname"=>"TrainerID", "name" => "TrainerID");
$dalTableTrainer["TrainingID"] = array("type"=>3,"varname"=>"TrainingID", "name" => "TrainingID");
$dalTableTrainer["OrganizerID"] = array("type"=>3,"varname"=>"OrganizerID", "name" => "OrganizerID");
$dalTableTrainer["Trainer_FullName"] = array("type"=>200,"varname"=>"Trainer_FullName", "name" => "Trainer_FullName");
$dalTableTrainer["Trainer_Profile"] = array("type"=>200,"varname"=>"Trainer_Profile", "name" => "Trainer_Profile");
$dalTableTrainer["Trainer_Skills"] = array("type"=>200,"varname"=>"Trainer_Skills", "name" => "Trainer_Skills");
	$dalTableTrainer["TrainerID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__Trainer"] = &$dalTableTrainer;
?>