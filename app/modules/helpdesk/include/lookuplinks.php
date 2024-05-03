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

		if( !isset( $lookupTableLinks["hd_status"] ) ) {
			$lookupTableLinks["hd_status"] = array();
		}
		if( !isset( $lookupTableLinks["hd_status"]["hd_tickets.statusid"] )) {
			$lookupTableLinks["hd_status"]["hd_tickets.statusid"] = array();
		}
		$lookupTableLinks["hd_status"]["hd_tickets.statusid"]["edit"] = array("table" => "hd_tickets", "field" => "statusid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_status"] ) ) {
			$lookupTableLinks["hd_status"] = array();
		}
		if( !isset( $lookupTableLinks["hd_status"]["hd_tickets.statusid"] )) {
			$lookupTableLinks["hd_status"]["hd_tickets.statusid"] = array();
		}
		$lookupTableLinks["hd_status"]["hd_tickets.statusid"]["add"] = array("table" => "hd_tickets", "field" => "statusid", "page" => "add");
		if( !isset( $lookupTableLinks["hd_status"] ) ) {
			$lookupTableLinks["hd_status"] = array();
		}
		if( !isset( $lookupTableLinks["hd_status"]["hd_tickets.statusid"] )) {
			$lookupTableLinks["hd_status"]["hd_tickets.statusid"] = array();
		}
		$lookupTableLinks["hd_status"]["hd_tickets.statusid"]["search"] = array("table" => "hd_tickets", "field" => "statusid", "page" => "search");
		if( !isset( $lookupTableLinks["hd_priorities"] ) ) {
			$lookupTableLinks["hd_priorities"] = array();
		}
		if( !isset( $lookupTableLinks["hd_priorities"]["hd_tickets.priorityid"] )) {
			$lookupTableLinks["hd_priorities"]["hd_tickets.priorityid"] = array();
		}
		$lookupTableLinks["hd_priorities"]["hd_tickets.priorityid"]["edit"] = array("table" => "hd_tickets", "field" => "priorityid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_folders"] ) ) {
			$lookupTableLinks["hd_folders"] = array();
		}
		if( !isset( $lookupTableLinks["hd_folders"]["hd_tickets.folderid"] )) {
			$lookupTableLinks["hd_folders"]["hd_tickets.folderid"] = array();
		}
		$lookupTableLinks["hd_folders"]["hd_tickets.folderid"]["edit"] = array("table" => "hd_tickets", "field" => "folderid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_categories"] ) ) {
			$lookupTableLinks["hd_categories"] = array();
		}
		if( !isset( $lookupTableLinks["hd_categories"]["hd_tickets.categoryid"] )) {
			$lookupTableLinks["hd_categories"]["hd_tickets.categoryid"] = array();
		}
		$lookupTableLinks["hd_categories"]["hd_tickets.categoryid"]["edit"] = array("table" => "hd_tickets", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_directions"] ) ) {
			$lookupTableLinks["hd_directions"] = array();
		}
		if( !isset( $lookupTableLinks["hd_directions"]["hd_tickets.directionid"] )) {
			$lookupTableLinks["hd_directions"]["hd_tickets.directionid"] = array();
		}
		$lookupTableLinks["hd_directions"]["hd_tickets.directionid"]["edit"] = array("table" => "hd_tickets", "field" => "directionid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_users"] ) ) {
			$lookupTableLinks["hd_users"] = array();
		}
		if( !isset( $lookupTableLinks["hd_users"]["hd_tickets.assignedid"] )) {
			$lookupTableLinks["hd_users"]["hd_tickets.assignedid"] = array();
		}
		$lookupTableLinks["hd_users"]["hd_tickets.assignedid"]["edit"] = array("table" => "hd_tickets", "field" => "assignedid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_status"] ) ) {
			$lookupTableLinks["hd_status"] = array();
		}
		if( !isset( $lookupTableLinks["hd_status"]["hd_tickets.client_status"] )) {
			$lookupTableLinks["hd_status"]["hd_tickets.client_status"] = array();
		}
		$lookupTableLinks["hd_status"]["hd_tickets.client_status"]["edit"] = array("table" => "hd_tickets", "field" => "client_status", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_status"] ) ) {
			$lookupTableLinks["hd_status"] = array();
		}
		if( !isset( $lookupTableLinks["hd_status"]["hd_tickets.client_status"] )) {
			$lookupTableLinks["hd_status"]["hd_tickets.client_status"] = array();
		}
		$lookupTableLinks["hd_status"]["hd_tickets.client_status"]["add"] = array("table" => "hd_tickets", "field" => "client_status", "page" => "add");
		if( !isset( $lookupTableLinks["hd_status"] ) ) {
			$lookupTableLinks["hd_status"] = array();
		}
		if( !isset( $lookupTableLinks["hd_status"]["hd_tickets.client_status"] )) {
			$lookupTableLinks["hd_status"]["hd_tickets.client_status"] = array();
		}
		$lookupTableLinks["hd_status"]["hd_tickets.client_status"]["search"] = array("table" => "hd_tickets", "field" => "client_status", "page" => "search");
		if( !isset( $lookupTableLinks["hd_users"] ) ) {
			$lookupTableLinks["hd_users"] = array();
		}
		if( !isset( $lookupTableLinks["hd_users"]["hd_messages.to_email"] )) {
			$lookupTableLinks["hd_users"]["hd_messages.to_email"] = array();
		}
		$lookupTableLinks["hd_users"]["hd_messages.to_email"]["edit"] = array("table" => "hd_messages", "field" => "to_email", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_directions"] ) ) {
			$lookupTableLinks["hd_directions"] = array();
		}
		if( !isset( $lookupTableLinks["hd_directions"]["hd_messages.directionid"] )) {
			$lookupTableLinks["hd_directions"]["hd_messages.directionid"] = array();
		}
		$lookupTableLinks["hd_directions"]["hd_messages.directionid"]["edit"] = array("table" => "hd_messages", "field" => "directionid", "page" => "edit");
		if( !isset( $lookupTableLinks["hd_categories"] ) ) {
			$lookupTableLinks["hd_categories"] = array();
		}
		if( !isset( $lookupTableLinks["hd_categories"]["hd_messages.categoryid"] )) {
			$lookupTableLinks["hd_categories"]["hd_messages.categoryid"] = array();
		}
		$lookupTableLinks["hd_categories"]["hd_messages.categoryid"]["edit"] = array("table" => "hd_messages", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["kbcategories"] ) ) {
			$lookupTableLinks["kbcategories"] = array();
		}
		if( !isset( $lookupTableLinks["kbcategories"]["kbarticles.Category"] )) {
			$lookupTableLinks["kbcategories"]["kbarticles.Category"] = array();
		}
		$lookupTableLinks["kbcategories"]["kbarticles.Category"]["edit"] = array("table" => "kbarticles", "field" => "Category", "page" => "edit");
}

?>