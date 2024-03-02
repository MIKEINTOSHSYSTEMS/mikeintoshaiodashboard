<?php
$strTableName="Candidate_Employment_Tracker";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Candidate_Employment_Tracker";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Candidate_Employment_Tracker");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Candidate_Employment_Tracker"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>