<?php
$dalTableTrainer = array();
$dalTableTrainer["TrainerID"] = array("type"=>3,"varname"=>"TrainerID", "name" => "TrainerID", "autoInc" => "1");
$dalTableTrainer["TrainingID"] = array("type"=>3,"varname"=>"TrainingID", "name" => "TrainingID", "autoInc" => "0");
$dalTableTrainer["OrganizerID"] = array("type"=>3,"varname"=>"OrganizerID", "name" => "OrganizerID", "autoInc" => "0");
$dalTableTrainer["Trainer_FullName"] = array("type"=>200,"varname"=>"Trainer_FullName", "name" => "Trainer_FullName", "autoInc" => "0");
$dalTableTrainer["Trainer_Profile"] = array("type"=>200,"varname"=>"Trainer_Profile", "name" => "Trainer_Profile", "autoInc" => "0");
$dalTableTrainer["Trainer_Skills"] = array("type"=>200,"varname"=>"Trainer_Skills", "name" => "Trainer_Skills", "autoInc" => "0");
$dalTableTrainer["TrainerID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__Trainer"] = &$dalTableTrainer;
?>