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

		if( !isset( $lookupTableLinks["events"] ) ) {
			$lookupTableLinks["events"] = array();
		}
		if( !isset( $lookupTableLinks["events"]["event_participants.EventID"] )) {
			$lookupTableLinks["events"]["event_participants.EventID"] = array();
		}
		$lookupTableLinks["events"]["event_participants.EventID"]["edit"] = array("table" => "event_participants", "field" => "EventID", "page" => "edit");
		if( !isset( $lookupTableLinks["candidates"] ) ) {
			$lookupTableLinks["candidates"] = array();
		}
		if( !isset( $lookupTableLinks["candidates"]["event_participants.CandidateID"] )) {
			$lookupTableLinks["candidates"]["event_participants.CandidateID"] = array();
		}
		$lookupTableLinks["candidates"]["event_participants.CandidateID"]["edit"] = array("table" => "event_participants", "field" => "CandidateID", "page" => "edit");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["training_participants.TrainingID"] )) {
			$lookupTableLinks["trainings"]["training_participants.TrainingID"] = array();
		}
		$lookupTableLinks["trainings"]["training_participants.TrainingID"]["edit"] = array("table" => "training_participants", "field" => "TrainingID", "page" => "edit");
		if( !isset( $lookupTableLinks["candidates"] ) ) {
			$lookupTableLinks["candidates"] = array();
		}
		if( !isset( $lookupTableLinks["candidates"]["training_participants.CandidateID"] )) {
			$lookupTableLinks["candidates"]["training_participants.CandidateID"] = array();
		}
		$lookupTableLinks["candidates"]["training_participants.CandidateID"]["edit"] = array("table" => "training_participants", "field" => "CandidateID", "page" => "edit");
}

?>