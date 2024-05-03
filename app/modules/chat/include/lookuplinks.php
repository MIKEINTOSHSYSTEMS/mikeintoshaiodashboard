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

		if( !isset( $lookupTableLinks["chat_timezone"] ) ) {
			$lookupTableLinks["chat_timezone"] = array();
		}
		if( !isset( $lookupTableLinks["chat_timezone"]["chat_settings.timezone"] )) {
			$lookupTableLinks["chat_timezone"]["chat_settings.timezone"] = array();
		}
		$lookupTableLinks["chat_timezone"]["chat_settings.timezone"]["edit"] = array("table" => "chat_settings", "field" => "timezone", "page" => "edit");
		if( !isset( $lookupTableLinks["chat_peopletype"] ) ) {
			$lookupTableLinks["chat_peopletype"] = array();
		}
		if( !isset( $lookupTableLinks["chat_peopletype"]["chat_groups.grouptype"] )) {
			$lookupTableLinks["chat_peopletype"]["chat_groups.grouptype"] = array();
		}
		$lookupTableLinks["chat_peopletype"]["chat_groups.grouptype"]["edit"] = array("table" => "chat_groups", "field" => "grouptype", "page" => "edit");
}

?>