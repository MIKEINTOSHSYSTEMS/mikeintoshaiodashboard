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

		if( !isset( $lookupTableLinks["sv_survey_formats"] ) ) {
			$lookupTableLinks["sv_survey_formats"] = array();
		}
		if( !isset( $lookupTableLinks["sv_survey_formats"]["response.format"] )) {
			$lookupTableLinks["sv_survey_formats"]["response.format"] = array();
		}
		$lookupTableLinks["sv_survey_formats"]["response.format"]["edit"] = array("table" => "response", "field" => "format", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_format_date"] ) ) {
			$lookupTableLinks["sv_format_date"] = array();
		}
		if( !isset( $lookupTableLinks["sv_format_date"]["response.date_format"] )) {
			$lookupTableLinks["sv_format_date"]["response.date_format"] = array();
		}
		$lookupTableLinks["sv_format_date"]["response.date_format"]["edit"] = array("table" => "response", "field" => "date_format", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_groups"] ) ) {
			$lookupTableLinks["sv_groups"] = array();
		}
		if( !isset( $lookupTableLinks["sv_groups"]["sv_questions.group_id"] )) {
			$lookupTableLinks["sv_groups"]["sv_questions.group_id"] = array();
		}
		$lookupTableLinks["sv_groups"]["sv_questions.group_id"]["edit"] = array("table" => "sv_questions", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_question_types"] ) ) {
			$lookupTableLinks["sv_question_types"] = array();
		}
		if( !isset( $lookupTableLinks["sv_question_types"]["sv_questions.type"] )) {
			$lookupTableLinks["sv_question_types"]["sv_questions.type"] = array();
		}
		$lookupTableLinks["sv_question_types"]["sv_questions.type"]["edit"] = array("table" => "sv_questions", "field" => "type", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_helpquestion_viewtype"] ) ) {
			$lookupTableLinks["sv_helpquestion_viewtype"] = array();
		}
		if( !isset( $lookupTableLinks["sv_helpquestion_viewtype"]["sv_questions.help_orientation"] )) {
			$lookupTableLinks["sv_helpquestion_viewtype"]["sv_questions.help_orientation"] = array();
		}
		$lookupTableLinks["sv_helpquestion_viewtype"]["sv_questions.help_orientation"]["edit"] = array("table" => "sv_questions", "field" => "help_orientation", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_survey_formats"] ) ) {
			$lookupTableLinks["sv_survey_formats"] = array();
		}
		if( !isset( $lookupTableLinks["sv_survey_formats"]["sv_surveys.format"] )) {
			$lookupTableLinks["sv_survey_formats"]["sv_surveys.format"] = array();
		}
		$lookupTableLinks["sv_survey_formats"]["sv_surveys.format"]["edit"] = array("table" => "sv_surveys", "field" => "format", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_format_date"] ) ) {
			$lookupTableLinks["sv_format_date"] = array();
		}
		if( !isset( $lookupTableLinks["sv_format_date"]["sv_surveys.date_format"] )) {
			$lookupTableLinks["sv_format_date"]["sv_surveys.date_format"] = array();
		}
		$lookupTableLinks["sv_format_date"]["sv_surveys.date_format"]["edit"] = array("table" => "sv_surveys", "field" => "date_format", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_questions"] ) ) {
			$lookupTableLinks["sv_questions"] = array();
		}
		if( !isset( $lookupTableLinks["sv_questions"]["sv_scenarios.quest"] )) {
			$lookupTableLinks["sv_questions"]["sv_scenarios.quest"] = array();
		}
		$lookupTableLinks["sv_questions"]["sv_scenarios.quest"]["edit"] = array("table" => "sv_scenarios", "field" => "quest", "page" => "edit");
		if( !isset( $lookupTableLinks["sv_conditions"] ) ) {
			$lookupTableLinks["sv_conditions"] = array();
		}
		if( !isset( $lookupTableLinks["sv_conditions"]["sv_scenarios.condition"] )) {
			$lookupTableLinks["sv_conditions"]["sv_scenarios.condition"] = array();
		}
		$lookupTableLinks["sv_conditions"]["sv_scenarios.condition"]["edit"] = array("table" => "sv_scenarios", "field" => "condition", "page" => "edit");
}

?>