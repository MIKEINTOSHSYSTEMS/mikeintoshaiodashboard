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

		if( !isset( $lookupTableLinks["doc_savemethod"] ) ) {
			$lookupTableLinks["doc_savemethod"] = array();
		}
		if( !isset( $lookupTableLinks["doc_savemethod"]["doc_settings.isStructure"] )) {
			$lookupTableLinks["doc_savemethod"]["doc_settings.isStructure"] = array();
		}
		$lookupTableLinks["doc_savemethod"]["doc_settings.isStructure"]["edit"] = array("table" => "doc_settings", "field" => "isStructure", "page" => "edit");
		if( !isset( $lookupTableLinks["share_type"] ) ) {
			$lookupTableLinks["share_type"] = array();
		}
		if( !isset( $lookupTableLinks["share_type"]["Share.share_type"] )) {
			$lookupTableLinks["share_type"]["Share.share_type"] = array();
		}
		$lookupTableLinks["share_type"]["Share.share_type"]["edit"] = array("table" => "Share", "field" => "share_type", "page" => "edit");
		if( !isset( $lookupTableLinks["doc_users"] ) ) {
			$lookupTableLinks["doc_users"] = array();
		}
		if( !isset( $lookupTableLinks["doc_users"]["Share.share_users"] )) {
			$lookupTableLinks["doc_users"]["Share.share_users"] = array();
		}
		$lookupTableLinks["doc_users"]["Share.share_users"]["edit"] = array("table" => "Share", "field" => "share_users", "page" => "edit");
}

?>