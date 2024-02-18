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

		if( !isset( $lookupTableLinks["candidate_profile"] ) ) {
			$lookupTableLinks["candidate_profile"] = array();
		}
		if( !isset( $lookupTableLinks["candidate_profile"]["training_profile.TrainingID"] )) {
			$lookupTableLinks["candidate_profile"]["training_profile.TrainingID"] = array();
		}
		$lookupTableLinks["candidate_profile"]["training_profile.TrainingID"]["edit"] = array("table" => "training_profile", "field" => "TrainingID", "page" => "edit");
		if( !isset( $lookupTableLinks["candidate_profile"] ) ) {
			$lookupTableLinks["candidate_profile"] = array();
		}
		if( !isset( $lookupTableLinks["candidate_profile"]["training_profile.CandidateID"] )) {
			$lookupTableLinks["candidate_profile"]["training_profile.CandidateID"] = array();
		}
		$lookupTableLinks["candidate_profile"]["training_profile.CandidateID"]["edit"] = array("table" => "training_profile", "field" => "CandidateID", "page" => "edit");
		if( !isset( $lookupTableLinks["Trainings"] ) ) {
			$lookupTableLinks["Trainings"] = array();
		}
		if( !isset( $lookupTableLinks["Trainings"]["training_profile.Training Title"] )) {
			$lookupTableLinks["Trainings"]["training_profile.Training Title"] = array();
		}
		$lookupTableLinks["Trainings"]["training_profile.Training Title"]["edit"] = array("table" => "training_profile", "field" => "Training Title", "page" => "edit");
		if( !isset( $lookupTableLinks["candidate_profile"] ) ) {
			$lookupTableLinks["candidate_profile"] = array();
		}
		if( !isset( $lookupTableLinks["candidate_profile"]["event_profile.EventID"] )) {
			$lookupTableLinks["candidate_profile"]["event_profile.EventID"] = array();
		}
		$lookupTableLinks["candidate_profile"]["event_profile.EventID"]["edit"] = array("table" => "event_profile", "field" => "EventID", "page" => "edit");
		if( !isset( $lookupTableLinks["candidate_profile"] ) ) {
			$lookupTableLinks["candidate_profile"] = array();
		}
		if( !isset( $lookupTableLinks["candidate_profile"]["event_profile.CandidateID"] )) {
			$lookupTableLinks["candidate_profile"]["event_profile.CandidateID"] = array();
		}
		$lookupTableLinks["candidate_profile"]["event_profile.CandidateID"]["edit"] = array("table" => "event_profile", "field" => "CandidateID", "page" => "edit");
		if( !isset( $lookupTableLinks["Events"] ) ) {
			$lookupTableLinks["Events"] = array();
		}
		if( !isset( $lookupTableLinks["Events"]["event_profile.Event Name"] )) {
			$lookupTableLinks["Events"]["event_profile.Event Name"] = array();
		}
		$lookupTableLinks["Events"]["event_profile.Event Name"]["edit"] = array("table" => "event_profile", "field" => "Event Name", "page" => "edit");
		if( !isset( $lookupTableLinks["candidate_profile"] ) ) {
			$lookupTableLinks["candidate_profile"] = array();
		}
		if( !isset( $lookupTableLinks["candidate_profile"]["candidate_profile.CandidateID"] )) {
			$lookupTableLinks["candidate_profile"]["candidate_profile.CandidateID"] = array();
		}
		$lookupTableLinks["candidate_profile"]["candidate_profile.CandidateID"]["edit"] = array("table" => "candidate_profile", "field" => "CandidateID", "page" => "edit");
		if( !isset( $lookupTableLinks["event_profile"] ) ) {
			$lookupTableLinks["event_profile"] = array();
		}
		if( !isset( $lookupTableLinks["event_profile"]["candidate_profile.EventID"] )) {
			$lookupTableLinks["event_profile"]["candidate_profile.EventID"] = array();
		}
		$lookupTableLinks["event_profile"]["candidate_profile.EventID"]["edit"] = array("table" => "candidate_profile", "field" => "EventID", "page" => "edit");
		if( !isset( $lookupTableLinks["training_profile"] ) ) {
			$lookupTableLinks["training_profile"] = array();
		}
		if( !isset( $lookupTableLinks["training_profile"]["candidate_profile.TrainingID"] )) {
			$lookupTableLinks["training_profile"]["candidate_profile.TrainingID"] = array();
		}
		$lookupTableLinks["training_profile"]["candidate_profile.TrainingID"]["edit"] = array("table" => "candidate_profile", "field" => "TrainingID", "page" => "edit");
}

?>