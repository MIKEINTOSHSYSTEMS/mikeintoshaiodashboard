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

		if( !isset( $lookupTableLinks["kbcategories"] ) ) {
			$lookupTableLinks["kbcategories"] = array();
		}
		if( !isset( $lookupTableLinks["kbcategories"]["kbarticles.Category"] )) {
			$lookupTableLinks["kbcategories"]["kbarticles.Category"] = array();
		}
		$lookupTableLinks["kbcategories"]["kbarticles.Category"]["edit"] = array("table" => "kbarticles", "field" => "Category", "page" => "edit");
		if( !isset( $lookupTableLinks["faicons"] ) ) {
			$lookupTableLinks["faicons"] = array();
		}
		if( !isset( $lookupTableLinks["faicons"]["kbcategories.faicon"] )) {
			$lookupTableLinks["faicons"]["kbcategories.faicon"] = array();
		}
		$lookupTableLinks["faicons"]["kbcategories.faicon"]["edit"] = array("table" => "kbcategories", "field" => "faicon", "page" => "edit");
		if( !isset( $lookupTableLinks["kbarticles"] ) ) {
			$lookupTableLinks["kbarticles"] = array();
		}
		if( !isset( $lookupTableLinks["kbarticles"]["admin_comments.ArticleID"] )) {
			$lookupTableLinks["kbarticles"]["admin_comments.ArticleID"] = array();
		}
		$lookupTableLinks["kbarticles"]["admin_comments.ArticleID"]["edit"] = array("table" => "admin_comments", "field" => "ArticleID", "page" => "edit");
}

?>