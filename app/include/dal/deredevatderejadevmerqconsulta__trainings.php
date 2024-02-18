<?php
$dalTabletrainings = array();
$dalTabletrainings["TrainingID"] = array("type"=>3,"varname"=>"TrainingID", "name" => "TrainingID");
$dalTabletrainings["Training_Start_Date"] = array("type"=>7,"varname"=>"Training_Start_Date", "name" => "Training_Start_Date");
$dalTabletrainings["Training_End_Date"] = array("type"=>7,"varname"=>"Training_End_Date", "name" => "Training_End_Date");
$dalTabletrainings["TrainingTitle"] = array("type"=>200,"varname"=>"TrainingTitle", "name" => "TrainingTitle");
	$dalTabletrainings["TrainingID"]["key"]=true;

$dal_info["deredevatderejadevmerqconsulta__trainings"] = &$dalTabletrainings;
?>