<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["mttimezone"] ) ) {
			$lookupTableLinks["mttimezone"] = array();
		}
		if( !isset( $lookupTableLinks["mttimezone"]["mtsettings.timezone"] )) {
			$lookupTableLinks["mttimezone"]["mtsettings.timezone"] = array();
		}
		$lookupTableLinks["mttimezone"]["mtsettings.timezone"]["edit"] = array("table" => "mtsettings", "field" => "timezone", "page" => "edit");
		if( !isset( $lookupTableLinks["mtmeetings"] ) ) {
			$lookupTableLinks["mtmeetings"] = array();
		}
		if( !isset( $lookupTableLinks["mtmeetings"]["mtmeetings.users"] )) {
			$lookupTableLinks["mtmeetings"]["mtmeetings.users"] = array();
		}
		$lookupTableLinks["mtmeetings"]["mtmeetings.users"]["edit"] = array("table" => "mtmeetings", "field" => "users", "page" => "edit");
		if( !isset( $lookupTableLinks["mtmeetings"] ) ) {
			$lookupTableLinks["mtmeetings"] = array();
		}
		if( !isset( $lookupTableLinks["mtmeetings"]["mtmeetings.owner"] )) {
			$lookupTableLinks["mtmeetings"]["mtmeetings.owner"] = array();
		}
		$lookupTableLinks["mtmeetings"]["mtmeetings.owner"]["edit"] = array("table" => "mtmeetings", "field" => "owner", "page" => "edit");
		if( !isset( $lookupTableLinks["calglobals"] ) ) {
			$lookupTableLinks["calglobals"] = array();
		}
		if( !isset( $lookupTableLinks["calglobals"]["calcalendar.TimeField"] )) {
			$lookupTableLinks["calglobals"]["calcalendar.TimeField"] = array();
		}
		$lookupTableLinks["calglobals"]["calcalendar.TimeField"]["edit"] = array("table" => "calcalendar", "field" => "TimeField", "page" => "edit");
		if( !isset( $lookupTableLinks["calglobals"] ) ) {
			$lookupTableLinks["calglobals"] = array();
		}
		if( !isset( $lookupTableLinks["calglobals"]["calcalendar.EndTime"] )) {
			$lookupTableLinks["calglobals"]["calcalendar.EndTime"] = array();
		}
		$lookupTableLinks["calglobals"]["calcalendar.EndTime"]["edit"] = array("table" => "calcalendar", "field" => "EndTime", "page" => "edit");
		if( !isset( $lookupTableLinks["calperiod"] ) ) {
			$lookupTableLinks["calperiod"] = array();
		}
		if( !isset( $lookupTableLinks["calperiod"]["calcalendar.Period"] )) {
			$lookupTableLinks["calperiod"]["calcalendar.Period"] = array();
		}
		$lookupTableLinks["calperiod"]["calcalendar.Period"]["edit"] = array("table" => "calcalendar", "field" => "Period", "page" => "edit");
		if( !isset( $lookupTableLinks["calweekdays"] ) ) {
			$lookupTableLinks["calweekdays"] = array();
		}
		if( !isset( $lookupTableLinks["calweekdays"]["calcalendar.PeriodDays"] )) {
			$lookupTableLinks["calweekdays"]["calcalendar.PeriodDays"] = array();
		}
		$lookupTableLinks["calweekdays"]["calcalendar.PeriodDays"]["edit"] = array("table" => "calcalendar", "field" => "PeriodDays", "page" => "edit");
		if( !isset( $lookupTableLinks["calcategory"] ) ) {
			$lookupTableLinks["calcategory"] = array();
		}
		if( !isset( $lookupTableLinks["calcategory"]["calcalendar.Category"] )) {
			$lookupTableLinks["calcategory"]["calcalendar.Category"] = array();
		}
		$lookupTableLinks["calcategory"]["calcalendar.Category"]["edit"] = array("table" => "calcalendar", "field" => "Category", "page" => "edit");
		if( !isset( $lookupTableLinks["calfirstday"] ) ) {
			$lookupTableLinks["calfirstday"] = array();
		}
		if( !isset( $lookupTableLinks["calfirstday"]["calglobals.FirstDayOfWeek"] )) {
			$lookupTableLinks["calfirstday"]["calglobals.FirstDayOfWeek"] = array();
		}
		$lookupTableLinks["calfirstday"]["calglobals.FirstDayOfWeek"]["edit"] = array("table" => "calglobals", "field" => "FirstDayOfWeek", "page" => "edit");
		if( !isset( $lookupTableLinks["calglobals"] ) ) {
			$lookupTableLinks["calglobals"] = array();
		}
		if( !isset( $lookupTableLinks["calglobals"]["calglobals.StartTime"] )) {
			$lookupTableLinks["calglobals"]["calglobals.StartTime"] = array();
		}
		$lookupTableLinks["calglobals"]["calglobals.StartTime"]["edit"] = array("table" => "calglobals", "field" => "StartTime", "page" => "edit");
		if( !isset( $lookupTableLinks["calglobals"] ) ) {
			$lookupTableLinks["calglobals"] = array();
		}
		if( !isset( $lookupTableLinks["calglobals"]["calglobals.EndTime"] )) {
			$lookupTableLinks["calglobals"]["calglobals.EndTime"] = array();
		}
		$lookupTableLinks["calglobals"]["calglobals.EndTime"]["edit"] = array("table" => "calglobals", "field" => "EndTime", "page" => "edit");
}

?>