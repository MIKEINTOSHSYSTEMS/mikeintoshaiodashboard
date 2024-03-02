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

		if( !isset( $lookupTableLinks["regions"] ) ) {
			$lookupTableLinks["regions"] = array();
		}
		if( !isset( $lookupTableLinks["regions"]["candidates.Region"] )) {
			$lookupTableLinks["regions"]["candidates.Region"] = array();
		}
		$lookupTableLinks["regions"]["candidates.Region"]["edit"] = array("table" => "candidates", "field" => "Region", "page" => "edit");
		if( !isset( $lookupTableLinks["cities"] ) ) {
			$lookupTableLinks["cities"] = array();
		}
		if( !isset( $lookupTableLinks["cities"]["candidates.City"] )) {
			$lookupTableLinks["cities"]["candidates.City"] = array();
		}
		$lookupTableLinks["cities"]["candidates.City"]["edit"] = array("table" => "candidates", "field" => "City", "page" => "edit");
		if( !isset( $lookupTableLinks["sub_cities"] ) ) {
			$lookupTableLinks["sub_cities"] = array();
		}
		if( !isset( $lookupTableLinks["sub_cities"]["candidates.Sub_City"] )) {
			$lookupTableLinks["sub_cities"]["candidates.Sub_City"] = array();
		}
		$lookupTableLinks["sub_cities"]["candidates.Sub_City"]["edit"] = array("table" => "candidates", "field" => "Sub_City", "page" => "edit");
		if( !isset( $lookupTableLinks["institution_types"] ) ) {
			$lookupTableLinks["institution_types"] = array();
		}
		if( !isset( $lookupTableLinks["institution_types"]["candidates.Institution_Type"] )) {
			$lookupTableLinks["institution_types"]["candidates.Institution_Type"] = array();
		}
		$lookupTableLinks["institution_types"]["candidates.Institution_Type"]["edit"] = array("table" => "candidates", "field" => "Institution_Type", "page" => "edit");
		if( !isset( $lookupTableLinks["education_levels"] ) ) {
			$lookupTableLinks["education_levels"] = array();
		}
		if( !isset( $lookupTableLinks["education_levels"]["candidates.Education_Level"] )) {
			$lookupTableLinks["education_levels"]["candidates.Education_Level"] = array();
		}
		$lookupTableLinks["education_levels"]["candidates.Education_Level"]["edit"] = array("table" => "candidates", "field" => "Education_Level", "page" => "edit");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["candidates.Department"] )) {
			$lookupTableLinks["departments"]["candidates.Department"] = array();
		}
		$lookupTableLinks["departments"]["candidates.Department"]["edit"] = array("table" => "candidates", "field" => "Department", "page" => "edit");
		if( !isset( $lookupTableLinks["minor_major"] ) ) {
			$lookupTableLinks["minor_major"] = array();
		}
		if( !isset( $lookupTableLinks["minor_major"]["candidates.Minor"] )) {
			$lookupTableLinks["minor_major"]["candidates.Minor"] = array();
		}
		$lookupTableLinks["minor_major"]["candidates.Minor"]["edit"] = array("table" => "candidates", "field" => "Minor", "page" => "edit");
		if( !isset( $lookupTableLinks["minor_major"] ) ) {
			$lookupTableLinks["minor_major"] = array();
		}
		if( !isset( $lookupTableLinks["minor_major"]["candidates.Major"] )) {
			$lookupTableLinks["minor_major"]["candidates.Major"] = array();
		}
		$lookupTableLinks["minor_major"]["candidates.Major"]["edit"] = array("table" => "candidates", "field" => "Major", "page" => "edit");
		if( !isset( $lookupTableLinks["skills"] ) ) {
			$lookupTableLinks["skills"] = array();
		}
		if( !isset( $lookupTableLinks["skills"]["candidates.Skills"] )) {
			$lookupTableLinks["skills"]["candidates.Skills"] = array();
		}
		$lookupTableLinks["skills"]["candidates.Skills"]["edit"] = array("table" => "candidates", "field" => "Skills", "page" => "edit");
		if( !isset( $lookupTableLinks["industry_specific_skills"] ) ) {
			$lookupTableLinks["industry_specific_skills"] = array();
		}
		if( !isset( $lookupTableLinks["industry_specific_skills"]["candidates.Industry_Specific_Skills"] )) {
			$lookupTableLinks["industry_specific_skills"]["candidates.Industry_Specific_Skills"] = array();
		}
		$lookupTableLinks["industry_specific_skills"]["candidates.Industry_Specific_Skills"]["edit"] = array("table" => "candidates", "field" => "Industry_Specific_Skills", "page" => "edit");
		if( !isset( $lookupTableLinks["it_related_skills"] ) ) {
			$lookupTableLinks["it_related_skills"] = array();
		}
		if( !isset( $lookupTableLinks["it_related_skills"]["candidates.IT_Related_Skills"] )) {
			$lookupTableLinks["it_related_skills"]["candidates.IT_Related_Skills"] = array();
		}
		$lookupTableLinks["it_related_skills"]["candidates.IT_Related_Skills"]["edit"] = array("table" => "candidates", "field" => "IT_Related_Skills", "page" => "edit");
		if( !isset( $lookupTableLinks["dereja_services"] ) ) {
			$lookupTableLinks["dereja_services"] = array();
		}
		if( !isset( $lookupTableLinks["dereja_services"]["candidates.Dereja_Services"] )) {
			$lookupTableLinks["dereja_services"]["candidates.Dereja_Services"] = array();
		}
		$lookupTableLinks["dereja_services"]["candidates.Dereja_Services"]["edit"] = array("table" => "candidates", "field" => "Dereja_Services", "page" => "edit");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["candidates.Dereja_Training_Services"] )) {
			$lookupTableLinks["trainings"]["candidates.Dereja_Training_Services"] = array();
		}
		$lookupTableLinks["trainings"]["candidates.Dereja_Training_Services"]["edit"] = array("table" => "candidates", "field" => "Dereja_Training_Services", "page" => "edit");
		if( !isset( $lookupTableLinks["events"] ) ) {
			$lookupTableLinks["events"] = array();
		}
		if( !isset( $lookupTableLinks["events"]["candidates.Dereja_Event_Services"] )) {
			$lookupTableLinks["events"]["candidates.Dereja_Event_Services"] = array();
		}
		$lookupTableLinks["events"]["candidates.Dereja_Event_Services"]["edit"] = array("table" => "candidates", "field" => "Dereja_Event_Services", "page" => "edit");
		if( !isset( $lookupTableLinks["dereja_information_sources"] ) ) {
			$lookupTableLinks["dereja_information_sources"] = array();
		}
		if( !isset( $lookupTableLinks["dereja_information_sources"]["candidates.Dereja_Information_Source"] )) {
			$lookupTableLinks["dereja_information_sources"]["candidates.Dereja_Information_Source"] = array();
		}
		$lookupTableLinks["dereja_information_sources"]["candidates.Dereja_Information_Source"]["edit"] = array("table" => "candidates", "field" => "Dereja_Information_Source", "page" => "edit");
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
		if( !isset( $lookupTableLinks["training_organizers"] ) ) {
			$lookupTableLinks["training_organizers"] = array();
		}
		if( !isset( $lookupTableLinks["training_organizers"]["training_participants.Training_Organizer"] )) {
			$lookupTableLinks["training_organizers"]["training_participants.Training_Organizer"] = array();
		}
		$lookupTableLinks["training_organizers"]["training_participants.Training_Organizer"]["edit"] = array("table" => "training_participants", "field" => "Training_Organizer", "page" => "edit");
		if( !isset( $lookupTableLinks["training_types"] ) ) {
			$lookupTableLinks["training_types"] = array();
		}
		if( !isset( $lookupTableLinks["training_types"]["training_participants.Training_Type"] )) {
			$lookupTableLinks["training_types"]["training_participants.Training_Type"] = array();
		}
		$lookupTableLinks["training_types"]["training_participants.Training_Type"]["edit"] = array("table" => "training_participants", "field" => "Training_Type", "page" => "edit");
		if( !isset( $lookupTableLinks["program_areas"] ) ) {
			$lookupTableLinks["program_areas"] = array();
		}
		if( !isset( $lookupTableLinks["program_areas"]["training_participants.Program_Area"] )) {
			$lookupTableLinks["program_areas"]["training_participants.Program_Area"] = array();
		}
		$lookupTableLinks["program_areas"]["training_participants.Program_Area"]["edit"] = array("table" => "training_participants", "field" => "Program_Area", "page" => "edit");
		if( !isset( $lookupTableLinks["training_city_towns"] ) ) {
			$lookupTableLinks["training_city_towns"] = array();
		}
		if( !isset( $lookupTableLinks["training_city_towns"]["training_participants.Training_City_Town"] )) {
			$lookupTableLinks["training_city_towns"]["training_participants.Training_City_Town"] = array();
		}
		$lookupTableLinks["training_city_towns"]["training_participants.Training_City_Town"]["edit"] = array("table" => "training_participants", "field" => "Training_City_Town", "page" => "edit");
		if( !isset( $lookupTableLinks["training_venues"] ) ) {
			$lookupTableLinks["training_venues"] = array();
		}
		if( !isset( $lookupTableLinks["training_venues"]["training_participants.Training_Venue"] )) {
			$lookupTableLinks["training_venues"]["training_participants.Training_Venue"] = array();
		}
		$lookupTableLinks["training_venues"]["training_participants.Training_Venue"]["edit"] = array("table" => "training_participants", "field" => "Training_Venue", "page" => "edit");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["training_participants.Training_Start_Date"] )) {
			$lookupTableLinks["trainings"]["training_participants.Training_Start_Date"] = array();
		}
		$lookupTableLinks["trainings"]["training_participants.Training_Start_Date"]["edit"] = array("table" => "training_participants", "field" => "Training_Start_Date", "page" => "edit");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["training_participants.Training_End_Date"] )) {
			$lookupTableLinks["trainings"]["training_participants.Training_End_Date"] = array();
		}
		$lookupTableLinks["trainings"]["training_participants.Training_End_Date"]["edit"] = array("table" => "training_participants", "field" => "Training_End_Date", "page" => "edit");
		if( !isset( $lookupTableLinks["regions"] ) ) {
			$lookupTableLinks["regions"] = array();
		}
		if( !isset( $lookupTableLinks["regions"]["cities.RegionID"] )) {
			$lookupTableLinks["regions"]["cities.RegionID"] = array();
		}
		$lookupTableLinks["regions"]["cities.RegionID"]["edit"] = array("table" => "cities", "field" => "RegionID", "page" => "edit");
		if( !isset( $lookupTableLinks["cities"] ) ) {
			$lookupTableLinks["cities"] = array();
		}
		if( !isset( $lookupTableLinks["cities"]["sub_cities.CityID"] )) {
			$lookupTableLinks["cities"]["sub_cities.CityID"] = array();
		}
		$lookupTableLinks["cities"]["sub_cities.CityID"]["edit"] = array("table" => "sub_cities", "field" => "CityID", "page" => "edit");
		if( !isset( $lookupTableLinks["sub_cities"] ) ) {
			$lookupTableLinks["sub_cities"] = array();
		}
		if( !isset( $lookupTableLinks["sub_cities"]["zones.SubCityID"] )) {
			$lookupTableLinks["sub_cities"]["zones.SubCityID"] = array();
		}
		$lookupTableLinks["sub_cities"]["zones.SubCityID"]["edit"] = array("table" => "zones", "field" => "SubCityID", "page" => "edit");
		if( !isset( $lookupTableLinks["dereja_services"] ) ) {
			$lookupTableLinks["dereja_services"] = array();
		}
		if( !isset( $lookupTableLinks["dereja_services"]["dereja_event_services.ServiceID"] )) {
			$lookupTableLinks["dereja_services"]["dereja_event_services.ServiceID"] = array();
		}
		$lookupTableLinks["dereja_services"]["dereja_event_services.ServiceID"]["edit"] = array("table" => "dereja_event_services", "field" => "ServiceID", "page" => "edit");
		if( !isset( $lookupTableLinks["events"] ) ) {
			$lookupTableLinks["events"] = array();
		}
		if( !isset( $lookupTableLinks["events"]["dereja_event_services.EventID"] )) {
			$lookupTableLinks["events"]["dereja_event_services.EventID"] = array();
		}
		$lookupTableLinks["events"]["dereja_event_services.EventID"]["edit"] = array("table" => "dereja_event_services", "field" => "EventID", "page" => "edit");
		if( !isset( $lookupTableLinks["dereja_services"] ) ) {
			$lookupTableLinks["dereja_services"] = array();
		}
		if( !isset( $lookupTableLinks["dereja_services"]["dereja_training_services.ServiceID"] )) {
			$lookupTableLinks["dereja_services"]["dereja_training_services.ServiceID"] = array();
		}
		$lookupTableLinks["dereja_services"]["dereja_training_services.ServiceID"]["edit"] = array("table" => "dereja_training_services", "field" => "ServiceID", "page" => "edit");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["dereja_training_services.TrainingID"] )) {
			$lookupTableLinks["trainings"]["dereja_training_services.TrainingID"] = array();
		}
		$lookupTableLinks["trainings"]["dereja_training_services.TrainingID"]["edit"] = array("table" => "dereja_training_services", "field" => "TrainingID", "page" => "edit");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["minor_major.DepartmentID"] )) {
			$lookupTableLinks["departments"]["minor_major.DepartmentID"] = array();
		}
		$lookupTableLinks["departments"]["minor_major.DepartmentID"]["edit"] = array("table" => "minor_major", "field" => "DepartmentID", "page" => "edit");
		if( !isset( $lookupTableLinks["candidates"] ) ) {
			$lookupTableLinks["candidates"] = array();
		}
		if( !isset( $lookupTableLinks["candidates"]["candidate_employment_tracker.CandidateID"] )) {
			$lookupTableLinks["candidates"]["candidate_employment_tracker.CandidateID"] = array();
		}
		$lookupTableLinks["candidates"]["candidate_employment_tracker.CandidateID"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "CandidateID", "page" => "edit");
		if( !isset( $lookupTableLinks["Jobs"] ) ) {
			$lookupTableLinks["Jobs"] = array();
		}
		if( !isset( $lookupTableLinks["Jobs"]["candidate_employment_tracker.JobID"] )) {
			$lookupTableLinks["Jobs"]["candidate_employment_tracker.JobID"] = array();
		}
		$lookupTableLinks["Jobs"]["candidate_employment_tracker.JobID"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "JobID", "page" => "edit");
		if( !isset( $lookupTableLinks["Companies"] ) ) {
			$lookupTableLinks["Companies"] = array();
		}
		if( !isset( $lookupTableLinks["Companies"]["candidate_employment_tracker.Company_Name"] )) {
			$lookupTableLinks["Companies"]["candidate_employment_tracker.Company_Name"] = array();
		}
		$lookupTableLinks["Companies"]["candidate_employment_tracker.Company_Name"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "Company_Name", "page" => "edit");
		if( !isset( $lookupTableLinks["Companies"] ) ) {
			$lookupTableLinks["Companies"] = array();
		}
		if( !isset( $lookupTableLinks["Companies"]["candidate_employment_tracker.Company_Phone_Number"] )) {
			$lookupTableLinks["Companies"]["candidate_employment_tracker.Company_Phone_Number"] = array();
		}
		$lookupTableLinks["Companies"]["candidate_employment_tracker.Company_Phone_Number"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "Company_Phone_Number", "page" => "edit");
		if( !isset( $lookupTableLinks["CompanySectors"] ) ) {
			$lookupTableLinks["CompanySectors"] = array();
		}
		if( !isset( $lookupTableLinks["CompanySectors"]["candidate_employment_tracker.Sector"] )) {
			$lookupTableLinks["CompanySectors"]["candidate_employment_tracker.Sector"] = array();
		}
		$lookupTableLinks["CompanySectors"]["candidate_employment_tracker.Sector"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "Sector", "page" => "edit");
		if( !isset( $lookupTableLinks["Jobs"] ) ) {
			$lookupTableLinks["Jobs"] = array();
		}
		if( !isset( $lookupTableLinks["Jobs"]["candidate_employment_tracker.Job_Position"] )) {
			$lookupTableLinks["Jobs"]["candidate_employment_tracker.Job_Position"] = array();
		}
		$lookupTableLinks["Jobs"]["candidate_employment_tracker.Job_Position"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "Job_Position", "page" => "edit");
		if( !isset( $lookupTableLinks["Job_Types"] ) ) {
			$lookupTableLinks["Job_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Job_Types"]["candidate_employment_tracker.Job_Type"] )) {
			$lookupTableLinks["Job_Types"]["candidate_employment_tracker.Job_Type"] = array();
		}
		$lookupTableLinks["Job_Types"]["candidate_employment_tracker.Job_Type"]["edit"] = array("table" => "Candidate_Employment_Tracker", "field" => "Job_Type", "page" => "edit");
		if( !isset( $lookupTableLinks["CompanySectors"] ) ) {
			$lookupTableLinks["CompanySectors"] = array();
		}
		if( !isset( $lookupTableLinks["CompanySectors"]["companies.CompanySector"] )) {
			$lookupTableLinks["CompanySectors"]["companies.CompanySector"] = array();
		}
		$lookupTableLinks["CompanySectors"]["companies.CompanySector"]["edit"] = array("table" => "Companies", "field" => "CompanySector", "page" => "edit");
		if( !isset( $lookupTableLinks["Jobs"] ) ) {
			$lookupTableLinks["Jobs"] = array();
		}
		if( !isset( $lookupTableLinks["Jobs"]["companies.CompanyJob"] )) {
			$lookupTableLinks["Jobs"]["companies.CompanyJob"] = array();
		}
		$lookupTableLinks["Jobs"]["companies.CompanyJob"]["edit"] = array("table" => "Companies", "field" => "CompanyJob", "page" => "edit");
		if( !isset( $lookupTableLinks["Job_Categories"] ) ) {
			$lookupTableLinks["Job_Categories"] = array();
		}
		if( !isset( $lookupTableLinks["Job_Categories"]["jobs.JobCategory"] )) {
			$lookupTableLinks["Job_Categories"]["jobs.JobCategory"] = array();
		}
		$lookupTableLinks["Job_Categories"]["jobs.JobCategory"]["edit"] = array("table" => "Jobs", "field" => "JobCategory", "page" => "edit");
		if( !isset( $lookupTableLinks["Job_Types"] ) ) {
			$lookupTableLinks["Job_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Job_Types"]["jobs.JobType"] )) {
			$lookupTableLinks["Job_Types"]["jobs.JobType"] = array();
		}
		$lookupTableLinks["Job_Types"]["jobs.JobType"]["edit"] = array("table" => "Jobs", "field" => "JobType", "page" => "edit");
		if( !isset( $lookupTableLinks["Companies"] ) ) {
			$lookupTableLinks["Companies"] = array();
		}
		if( !isset( $lookupTableLinks["Companies"]["jobs.CompanyName"] )) {
			$lookupTableLinks["Companies"]["jobs.CompanyName"] = array();
		}
		$lookupTableLinks["Companies"]["jobs.CompanyName"]["edit"] = array("table" => "Jobs", "field" => "CompanyName", "page" => "edit");
}

?>