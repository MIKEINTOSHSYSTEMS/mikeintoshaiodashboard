<?php
$dalTableforumtopics = array();
$dalTableforumtopics["topic"] = array("type"=>200,"varname"=>"topic", "name" => "topic", "autoInc" => "0");
$dalTableforumtopics["startedby"] = array("type"=>200,"varname"=>"startedby", "name" => "startedby", "autoInc" => "0");
$dalTableforumtopics["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableforumtopics["categoryid"] = array("type"=>3,"varname"=>"categoryid", "name" => "categoryid", "autoInc" => "0");
$dalTableforumtopics["views"] = array("type"=>3,"varname"=>"views", "name" => "views", "autoInc" => "0");
$dalTableforumtopics["activity"] = array("type"=>135,"varname"=>"activity", "name" => "activity", "autoInc" => "0");
$dalTableforumtopics["pinned"] = array("type"=>16,"varname"=>"pinned", "name" => "pinned", "autoInc" => "0");
$dalTableforumtopics["question"] = array("type"=>201,"varname"=>"question", "name" => "question", "autoInc" => "0");
$dalTableforumtopics["created"] = array("type"=>135,"varname"=>"created", "name" => "created", "autoInc" => "0");
$dalTableforumtopics["solved"] = array("type"=>16,"varname"=>"solved", "name" => "solved", "autoInc" => "0");
$dalTableforumtopics["locked"] = array("type"=>200,"varname"=>"locked", "name" => "locked", "autoInc" => "0");
$dalTableforumtopics["id"]["key"]=true;

$dal_info["project_at_localhost__forumtopics"] = &$dalTableforumtopics;
?>