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

		if( !isset( $lookupTableLinks["todocategories"] ) ) {
			$lookupTableLinks["todocategories"] = array();
		}
		if( !isset( $lookupTableLinks["todocategories"]["todocards.categoryid"] )) {
			$lookupTableLinks["todocategories"]["todocards.categoryid"] = array();
		}
		$lookupTableLinks["todocategories"]["todocards.categoryid"]["edit"] = array("table" => "todocards", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["todousers"] ) ) {
			$lookupTableLinks["todousers"] = array();
		}
		if( !isset( $lookupTableLinks["todousers"]["todocards.assign"] )) {
			$lookupTableLinks["todousers"]["todocards.assign"] = array();
		}
		$lookupTableLinks["todousers"]["todocards.assign"]["edit"] = array("table" => "todocards", "field" => "assign", "page" => "edit");
		if( !isset( $lookupTableLinks["todoboards"] ) ) {
			$lookupTableLinks["todoboards"] = array();
		}
		if( !isset( $lookupTableLinks["todoboards"]["calcalendar.Description"] )) {
			$lookupTableLinks["todoboards"]["calcalendar.Description"] = array();
		}
		$lookupTableLinks["todoboards"]["calcalendar.Description"]["edit"] = array("table" => "calcalendar", "field" => "Description", "page" => "edit");
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
		if( !isset( $lookupTableLinks["todolists"] ) ) {
			$lookupTableLinks["todolists"] = array();
		}
		if( !isset( $lookupTableLinks["todolists"]["calcalendar.DayEvent"] )) {
			$lookupTableLinks["todolists"]["calcalendar.DayEvent"] = array();
		}
		$lookupTableLinks["todolists"]["calcalendar.DayEvent"]["edit"] = array("table" => "calcalendar", "field" => "DayEvent", "page" => "edit");
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
		if( !isset( $lookupTableLinks["todoboards"] ) ) {
			$lookupTableLinks["todoboards"] = array();
		}
		if( !isset( $lookupTableLinks["todoboards"]["calcalendar.Recurrence"] )) {
			$lookupTableLinks["todoboards"]["calcalendar.Recurrence"] = array();
		}
		$lookupTableLinks["todoboards"]["calcalendar.Recurrence"]["edit"] = array("table" => "calcalendar", "field" => "Recurrence", "page" => "edit");
		if( !isset( $lookupTableLinks["todocategories"] ) ) {
			$lookupTableLinks["todocategories"] = array();
		}
		if( !isset( $lookupTableLinks["todocategories"]["calcalendar.Category"] )) {
			$lookupTableLinks["todocategories"]["calcalendar.Category"] = array();
		}
		$lookupTableLinks["todocategories"]["calcalendar.Category"]["edit"] = array("table" => "calcalendar", "field" => "Category", "page" => "edit");
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
		if( !isset( $lookupTableLinks["todocategories"] ) ) {
			$lookupTableLinks["todocategories"] = array();
		}
		if( !isset( $lookupTableLinks["todocategories"]["todogantt.categoryid"] )) {
			$lookupTableLinks["todocategories"]["todogantt.categoryid"] = array();
		}
		$lookupTableLinks["todocategories"]["todogantt.categoryid"]["edit"] = array("table" => "todogantt", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["todousers"] ) ) {
			$lookupTableLinks["todousers"] = array();
		}
		if( !isset( $lookupTableLinks["todousers"]["todogantt.assign"] )) {
			$lookupTableLinks["todousers"]["todogantt.assign"] = array();
		}
		$lookupTableLinks["todousers"]["todogantt.assign"]["edit"] = array("table" => "todogantt", "field" => "assign", "page" => "edit");
		if( !isset( $lookupTableLinks["todousers"] ) ) {
			$lookupTableLinks["todousers"] = array();
		}
		if( !isset( $lookupTableLinks["todousers"]["todocomments.ownerid"] )) {
			$lookupTableLinks["todousers"]["todocomments.ownerid"] = array();
		}
		$lookupTableLinks["todousers"]["todocomments.ownerid"]["edit"] = array("table" => "todocomments", "field" => "ownerid", "page" => "edit");
}

?>