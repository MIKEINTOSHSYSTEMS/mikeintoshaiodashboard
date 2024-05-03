<?php
$dalTablemtmeetings = array();
$dalTablemtmeetings["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablemtmeetings["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablemtmeetings["desc"] = array("type"=>200,"varname"=>"desc", "name" => "desc", "autoInc" => "0");
$dalTablemtmeetings["users"] = array("type"=>200,"varname"=>"users", "name" => "users", "autoInc" => "0");
$dalTablemtmeetings["schedule"] = array("type"=>200,"varname"=>"schedule", "name" => "schedule", "autoInc" => "0");
$dalTablemtmeetings["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablemtmeetings["sms"] = array("type"=>200,"varname"=>"sms", "name" => "sms", "autoInc" => "0");
$dalTablemtmeetings["subj"] = array("type"=>200,"varname"=>"subj", "name" => "subj", "autoInc" => "0");
$dalTablemtmeetings["createlink"] = array("type"=>200,"varname"=>"createlink", "name" => "createlink", "autoInc" => "0");
$dalTablemtmeetings["joinlink"] = array("type"=>200,"varname"=>"joinlink", "name" => "joinlink", "autoInc" => "0");
$dalTablemtmeetings["ownerid"] = array("type"=>3,"varname"=>"ownerid", "name" => "ownerid", "autoInc" => "0");
$dalTablemtmeetings["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablemtmeetings["notiday"] = array("type"=>200,"varname"=>"notiday", "name" => "notiday", "autoInc" => "0");
$dalTablemtmeetings["notitime"] = array("type"=>200,"varname"=>"notitime", "name" => "notitime", "autoInc" => "0");
$dalTablemtmeetings["notisend"] = array("type"=>3,"varname"=>"notisend", "name" => "notisend", "autoInc" => "0");
$dalTablemtmeetings["id"]["key"]=true;

$dal_info["project_at_localhost__mtmeetings"] = &$dalTablemtmeetings;
?>