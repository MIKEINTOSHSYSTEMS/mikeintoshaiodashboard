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

		if( !isset( $lookupTableLinks["forumcategories"] ) ) {
			$lookupTableLinks["forumcategories"] = array();
		}
		if( !isset( $lookupTableLinks["forumcategories"]["forumtopics.categoryid"] )) {
			$lookupTableLinks["forumcategories"]["forumtopics.categoryid"] = array();
		}
		$lookupTableLinks["forumcategories"]["forumtopics.categoryid"]["edit"] = array("table" => "forumtopics", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["forumcategories"] ) ) {
			$lookupTableLinks["forumcategories"] = array();
		}
		if( !isset( $lookupTableLinks["forumcategories"]["forumtopics.categoryid"] )) {
			$lookupTableLinks["forumcategories"]["forumtopics.categoryid"] = array();
		}
		$lookupTableLinks["forumcategories"]["forumtopics.categoryid"]["add"] = array("table" => "forumtopics", "field" => "categoryid", "page" => "add");
		if( !isset( $lookupTableLinks["forumcategories"] ) ) {
			$lookupTableLinks["forumcategories"] = array();
		}
		if( !isset( $lookupTableLinks["forumcategories"]["forumtopics.categoryid"] )) {
			$lookupTableLinks["forumcategories"]["forumtopics.categoryid"] = array();
		}
		$lookupTableLinks["forumcategories"]["forumtopics.categoryid"]["search"] = array("table" => "forumtopics", "field" => "categoryid", "page" => "search");
		if( !isset( $lookupTableLinks["forumcategories"] ) ) {
			$lookupTableLinks["forumcategories"] = array();
		}
		if( !isset( $lookupTableLinks["forumcategories"]["forumsubscribers.categoryid"] )) {
			$lookupTableLinks["forumcategories"]["forumsubscribers.categoryid"] = array();
		}
		$lookupTableLinks["forumcategories"]["forumsubscribers.categoryid"]["edit"] = array("table" => "forumsubscribers", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["forumusers"] ) ) {
			$lookupTableLinks["forumusers"] = array();
		}
		if( !isset( $lookupTableLinks["forumusers"]["forumtopics_view.startedby2"] )) {
			$lookupTableLinks["forumusers"]["forumtopics_view.startedby2"] = array();
		}
		$lookupTableLinks["forumusers"]["forumtopics_view.startedby2"]["edit"] = array("table" => "forumtopics_view", "field" => "startedby2", "page" => "edit");
		if( !isset( $lookupTableLinks["forumcategories"] ) ) {
			$lookupTableLinks["forumcategories"] = array();
		}
		if( !isset( $lookupTableLinks["forumcategories"]["forumtopics_view.categoryid"] )) {
			$lookupTableLinks["forumcategories"]["forumtopics_view.categoryid"] = array();
		}
		$lookupTableLinks["forumcategories"]["forumtopics_view.categoryid"]["edit"] = array("table" => "forumtopics_view", "field" => "categoryid", "page" => "edit");
}

?>