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

		if( !isset( $lookupTableLinks["training_types"] ) ) {
			$lookupTableLinks["training_types"] = array();
		}
		if( !isset( $lookupTableLinks["training_types"]["trainings1.TypeName"] )) {
			$lookupTableLinks["training_types"]["trainings1.TypeName"] = array();
		}
		$lookupTableLinks["training_types"]["trainings1.TypeName"]["edit"] = array("table" => "trainings", "field" => "TypeName", "page" => "edit");
		if( !isset( $lookupTableLinks["training_organizers"] ) ) {
			$lookupTableLinks["training_organizers"] = array();
		}
		if( !isset( $lookupTableLinks["training_organizers"]["trainings1.OrganizerName"] )) {
			$lookupTableLinks["training_organizers"]["trainings1.OrganizerName"] = array();
		}
		$lookupTableLinks["training_organizers"]["trainings1.OrganizerName"]["edit"] = array("table" => "trainings", "field" => "OrganizerName", "page" => "edit");
		if( !isset( $lookupTableLinks["training_city_towns"] ) ) {
			$lookupTableLinks["training_city_towns"] = array();
		}
		if( !isset( $lookupTableLinks["training_city_towns"]["trainings1.CityTownName"] )) {
			$lookupTableLinks["training_city_towns"]["trainings1.CityTownName"] = array();
		}
		$lookupTableLinks["training_city_towns"]["trainings1.CityTownName"]["edit"] = array("table" => "trainings", "field" => "CityTownName", "page" => "edit");
		if( !isset( $lookupTableLinks["training_venues"] ) ) {
			$lookupTableLinks["training_venues"] = array();
		}
		if( !isset( $lookupTableLinks["training_venues"]["trainings1.VenueName"] )) {
			$lookupTableLinks["training_venues"]["trainings1.VenueName"] = array();
		}
		$lookupTableLinks["training_venues"]["trainings1.VenueName"]["edit"] = array("table" => "trainings", "field" => "VenueName", "page" => "edit");
		if( !isset( $lookupTableLinks["Trainer"] ) ) {
			$lookupTableLinks["Trainer"] = array();
		}
		if( !isset( $lookupTableLinks["Trainer"]["trainings1.Trainer_FullName"] )) {
			$lookupTableLinks["Trainer"]["trainings1.Trainer_FullName"] = array();
		}
		$lookupTableLinks["Trainer"]["trainings1.Trainer_FullName"]["edit"] = array("table" => "trainings", "field" => "Trainer_FullName", "page" => "edit");
		if( !isset( $lookupTableLinks["program_areas"] ) ) {
			$lookupTableLinks["program_areas"] = array();
		}
		if( !isset( $lookupTableLinks["program_areas"]["trainings1.program_areas"] )) {
			$lookupTableLinks["program_areas"]["trainings1.program_areas"] = array();
		}
		$lookupTableLinks["program_areas"]["trainings1.program_areas"]["edit"] = array("table" => "trainings", "field" => "program_areas", "page" => "edit");
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
		if( !isset( $lookupTableLinks["Disability_Types"] ) ) {
			$lookupTableLinks["Disability_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Disability_Types"]["candidates.Disability_Type"] )) {
			$lookupTableLinks["Disability_Types"]["candidates.Disability_Type"] = array();
		}
		$lookupTableLinks["Disability_Types"]["candidates.Disability_Type"]["edit"] = array("table" => "candidates", "field" => "Disability_Type", "page" => "edit");
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
		if( !isset( $lookupTableLinks["Languages"] ) ) {
			$lookupTableLinks["Languages"] = array();
		}
		if( !isset( $lookupTableLinks["Languages"]["candidates.Languages"] )) {
			$lookupTableLinks["Languages"]["candidates.Languages"] = array();
		}
		$lookupTableLinks["Languages"]["candidates.Languages"]["edit"] = array("table" => "candidates", "field" => "Languages", "page" => "edit");
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
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["candidates.DAAP_Completed_Courses"] )) {
			$lookupTableLinks["trainings"]["candidates.DAAP_Completed_Courses"] = array();
		}
		$lookupTableLinks["trainings"]["candidates.DAAP_Completed_Courses"]["edit"] = array("table" => "candidates", "field" => "DAAP_Completed_Courses", "page" => "edit");
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
		if( !isset( $lookupTableLinks["Companies"] ) ) {
			$lookupTableLinks["Companies"] = array();
		}
		if( !isset( $lookupTableLinks["Companies"]["candidates.Employment_Company"] )) {
			$lookupTableLinks["Companies"]["candidates.Employment_Company"] = array();
		}
		$lookupTableLinks["Companies"]["candidates.Employment_Company"]["edit"] = array("table" => "candidates", "field" => "Employment_Company", "page" => "edit");
		if( !isset( $lookupTableLinks["Jobs"] ) ) {
			$lookupTableLinks["Jobs"] = array();
		}
		if( !isset( $lookupTableLinks["Jobs"]["candidates.Employment_Position"] )) {
			$lookupTableLinks["Jobs"]["candidates.Employment_Position"] = array();
		}
		$lookupTableLinks["Jobs"]["candidates.Employment_Position"]["edit"] = array("table" => "candidates", "field" => "Employment_Position", "page" => "edit");
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
		if( !isset( $lookupTableLinks["Disability_Types"] ) ) {
			$lookupTableLinks["Disability_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Disability_Types"]["event_participants.Disability_Type"] )) {
			$lookupTableLinks["Disability_Types"]["event_participants.Disability_Type"] = array();
		}
		$lookupTableLinks["Disability_Types"]["event_participants.Disability_Type"]["edit"] = array("table" => "event_participants", "field" => "Disability_Type", "page" => "edit");
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
		if( !isset( $lookupTableLinks["Disability_Types"] ) ) {
			$lookupTableLinks["Disability_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Disability_Types"]["training_participants.Disability_Type"] )) {
			$lookupTableLinks["Disability_Types"]["training_participants.Disability_Type"] = array();
		}
		$lookupTableLinks["Disability_Types"]["training_participants.Disability_Type"]["edit"] = array("table" => "training_participants", "field" => "Disability_Type", "page" => "edit");
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
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["trainer.TrainingID"] )) {
			$lookupTableLinks["trainings"]["trainer.TrainingID"] = array();
		}
		$lookupTableLinks["trainings"]["trainer.TrainingID"]["edit"] = array("table" => "Trainer", "field" => "TrainingID", "page" => "edit");
		if( !isset( $lookupTableLinks["training_organizers"] ) ) {
			$lookupTableLinks["training_organizers"] = array();
		}
		if( !isset( $lookupTableLinks["training_organizers"]["trainer.OrganizerID"] )) {
			$lookupTableLinks["training_organizers"]["trainer.OrganizerID"] = array();
		}
		$lookupTableLinks["training_organizers"]["trainer.OrganizerID"]["edit"] = array("table" => "Trainer", "field" => "OrganizerID", "page" => "edit");
		if( !isset( $lookupTableLinks["Trainer"] ) ) {
			$lookupTableLinks["Trainer"] = array();
		}
		if( !isset( $lookupTableLinks["Trainer"]["trainer.Trainer_Skills"] )) {
			$lookupTableLinks["Trainer"]["trainer.Trainer_Skills"] = array();
		}
		$lookupTableLinks["Trainer"]["trainer.Trainer_Skills"]["edit"] = array("table" => "Trainer", "field" => "Trainer_Skills", "page" => "edit");
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
		if( !isset( $lookupTableLinks["regions"] ) ) {
			$lookupTableLinks["regions"] = array();
		}
		if( !isset( $lookupTableLinks["regions"]["candidates_view.Region"] )) {
			$lookupTableLinks["regions"]["candidates_view.Region"] = array();
		}
		$lookupTableLinks["regions"]["candidates_view.Region"]["search"] = array("table" => "candidates_view", "field" => "Region", "page" => "search");
		if( !isset( $lookupTableLinks["cities"] ) ) {
			$lookupTableLinks["cities"] = array();
		}
		if( !isset( $lookupTableLinks["cities"]["candidates_view.City"] )) {
			$lookupTableLinks["cities"]["candidates_view.City"] = array();
		}
		$lookupTableLinks["cities"]["candidates_view.City"]["search"] = array("table" => "candidates_view", "field" => "City", "page" => "search");
		if( !isset( $lookupTableLinks["sub_cities"] ) ) {
			$lookupTableLinks["sub_cities"] = array();
		}
		if( !isset( $lookupTableLinks["sub_cities"]["candidates_view.Sub_City"] )) {
			$lookupTableLinks["sub_cities"]["candidates_view.Sub_City"] = array();
		}
		$lookupTableLinks["sub_cities"]["candidates_view.Sub_City"]["search"] = array("table" => "candidates_view", "field" => "Sub_City", "page" => "search");
		if( !isset( $lookupTableLinks["Disability_Types"] ) ) {
			$lookupTableLinks["Disability_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Disability_Types"]["candidates_view.Disability_Type"] )) {
			$lookupTableLinks["Disability_Types"]["candidates_view.Disability_Type"] = array();
		}
		$lookupTableLinks["Disability_Types"]["candidates_view.Disability_Type"]["search"] = array("table" => "candidates_view", "field" => "Disability_Type", "page" => "search");
		if( !isset( $lookupTableLinks["institution_types"] ) ) {
			$lookupTableLinks["institution_types"] = array();
		}
		if( !isset( $lookupTableLinks["institution_types"]["candidates_view.Institution_Type"] )) {
			$lookupTableLinks["institution_types"]["candidates_view.Institution_Type"] = array();
		}
		$lookupTableLinks["institution_types"]["candidates_view.Institution_Type"]["search"] = array("table" => "candidates_view", "field" => "Institution_Type", "page" => "search");
		if( !isset( $lookupTableLinks["education_levels"] ) ) {
			$lookupTableLinks["education_levels"] = array();
		}
		if( !isset( $lookupTableLinks["education_levels"]["candidates_view.Education_Level"] )) {
			$lookupTableLinks["education_levels"]["candidates_view.Education_Level"] = array();
		}
		$lookupTableLinks["education_levels"]["candidates_view.Education_Level"]["search"] = array("table" => "candidates_view", "field" => "Education_Level", "page" => "search");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["candidates_view.Department"] )) {
			$lookupTableLinks["departments"]["candidates_view.Department"] = array();
		}
		$lookupTableLinks["departments"]["candidates_view.Department"]["search"] = array("table" => "candidates_view", "field" => "Department", "page" => "search");
		if( !isset( $lookupTableLinks["minor_major"] ) ) {
			$lookupTableLinks["minor_major"] = array();
		}
		if( !isset( $lookupTableLinks["minor_major"]["candidates_view.Minor"] )) {
			$lookupTableLinks["minor_major"]["candidates_view.Minor"] = array();
		}
		$lookupTableLinks["minor_major"]["candidates_view.Minor"]["search"] = array("table" => "candidates_view", "field" => "Minor", "page" => "search");
		if( !isset( $lookupTableLinks["minor_major"] ) ) {
			$lookupTableLinks["minor_major"] = array();
		}
		if( !isset( $lookupTableLinks["minor_major"]["candidates_view.Major"] )) {
			$lookupTableLinks["minor_major"]["candidates_view.Major"] = array();
		}
		$lookupTableLinks["minor_major"]["candidates_view.Major"]["search"] = array("table" => "candidates_view", "field" => "Major", "page" => "search");
		if( !isset( $lookupTableLinks["skills"] ) ) {
			$lookupTableLinks["skills"] = array();
		}
		if( !isset( $lookupTableLinks["skills"]["candidates_view.Skills"] )) {
			$lookupTableLinks["skills"]["candidates_view.Skills"] = array();
		}
		$lookupTableLinks["skills"]["candidates_view.Skills"]["search"] = array("table" => "candidates_view", "field" => "Skills", "page" => "search");
		if( !isset( $lookupTableLinks["Languages"] ) ) {
			$lookupTableLinks["Languages"] = array();
		}
		if( !isset( $lookupTableLinks["Languages"]["candidates_view.Languages"] )) {
			$lookupTableLinks["Languages"]["candidates_view.Languages"] = array();
		}
		$lookupTableLinks["Languages"]["candidates_view.Languages"]["search"] = array("table" => "candidates_view", "field" => "Languages", "page" => "search");
		if( !isset( $lookupTableLinks["industry_specific_skills"] ) ) {
			$lookupTableLinks["industry_specific_skills"] = array();
		}
		if( !isset( $lookupTableLinks["industry_specific_skills"]["candidates_view.Industry_Specific_Skills"] )) {
			$lookupTableLinks["industry_specific_skills"]["candidates_view.Industry_Specific_Skills"] = array();
		}
		$lookupTableLinks["industry_specific_skills"]["candidates_view.Industry_Specific_Skills"]["search"] = array("table" => "candidates_view", "field" => "Industry_Specific_Skills", "page" => "search");
		if( !isset( $lookupTableLinks["it_related_skills"] ) ) {
			$lookupTableLinks["it_related_skills"] = array();
		}
		if( !isset( $lookupTableLinks["it_related_skills"]["candidates_view.IT_Related_Skills"] )) {
			$lookupTableLinks["it_related_skills"]["candidates_view.IT_Related_Skills"] = array();
		}
		$lookupTableLinks["it_related_skills"]["candidates_view.IT_Related_Skills"]["search"] = array("table" => "candidates_view", "field" => "IT_Related_Skills", "page" => "search");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["candidates_view.DAAP_Completed_Courses"] )) {
			$lookupTableLinks["trainings"]["candidates_view.DAAP_Completed_Courses"] = array();
		}
		$lookupTableLinks["trainings"]["candidates_view.DAAP_Completed_Courses"]["search"] = array("table" => "candidates_view", "field" => "DAAP_Completed_Courses", "page" => "search");
		if( !isset( $lookupTableLinks["dereja_services"] ) ) {
			$lookupTableLinks["dereja_services"] = array();
		}
		if( !isset( $lookupTableLinks["dereja_services"]["candidates_view.Dereja_Services"] )) {
			$lookupTableLinks["dereja_services"]["candidates_view.Dereja_Services"] = array();
		}
		$lookupTableLinks["dereja_services"]["candidates_view.Dereja_Services"]["search"] = array("table" => "candidates_view", "field" => "Dereja_Services", "page" => "search");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["candidates_view.Dereja_Training_Services"] )) {
			$lookupTableLinks["trainings"]["candidates_view.Dereja_Training_Services"] = array();
		}
		$lookupTableLinks["trainings"]["candidates_view.Dereja_Training_Services"]["search"] = array("table" => "candidates_view", "field" => "Dereja_Training_Services", "page" => "search");
		if( !isset( $lookupTableLinks["events"] ) ) {
			$lookupTableLinks["events"] = array();
		}
		if( !isset( $lookupTableLinks["events"]["candidates_view.Dereja_Event_Services"] )) {
			$lookupTableLinks["events"]["candidates_view.Dereja_Event_Services"] = array();
		}
		$lookupTableLinks["events"]["candidates_view.Dereja_Event_Services"]["search"] = array("table" => "candidates_view", "field" => "Dereja_Event_Services", "page" => "search");
		if( !isset( $lookupTableLinks["dereja_information_sources"] ) ) {
			$lookupTableLinks["dereja_information_sources"] = array();
		}
		if( !isset( $lookupTableLinks["dereja_information_sources"]["candidates_view.Dereja_Information_Source"] )) {
			$lookupTableLinks["dereja_information_sources"]["candidates_view.Dereja_Information_Source"] = array();
		}
		$lookupTableLinks["dereja_information_sources"]["candidates_view.Dereja_Information_Source"]["search"] = array("table" => "candidates_view", "field" => "Dereja_Information_Source", "page" => "search");
		if( !isset( $lookupTableLinks["Companies"] ) ) {
			$lookupTableLinks["Companies"] = array();
		}
		if( !isset( $lookupTableLinks["Companies"]["candidates_view.Employment_Company"] )) {
			$lookupTableLinks["Companies"]["candidates_view.Employment_Company"] = array();
		}
		$lookupTableLinks["Companies"]["candidates_view.Employment_Company"]["search"] = array("table" => "candidates_view", "field" => "Employment_Company", "page" => "search");
		if( !isset( $lookupTableLinks["Jobs"] ) ) {
			$lookupTableLinks["Jobs"] = array();
		}
		if( !isset( $lookupTableLinks["Jobs"]["candidates_view.Employment_Position"] )) {
			$lookupTableLinks["Jobs"]["candidates_view.Employment_Position"] = array();
		}
		$lookupTableLinks["Jobs"]["candidates_view.Employment_Position"]["search"] = array("table" => "candidates_view", "field" => "Employment_Position", "page" => "search");
		if( !isset( $lookupTableLinks["events"] ) ) {
			$lookupTableLinks["events"] = array();
		}
		if( !isset( $lookupTableLinks["events"]["event_participants_view.EventID"] )) {
			$lookupTableLinks["events"]["event_participants_view.EventID"] = array();
		}
		$lookupTableLinks["events"]["event_participants_view.EventID"]["search"] = array("table" => "event_participants_view", "field" => "EventID", "page" => "search");
		if( !isset( $lookupTableLinks["candidates"] ) ) {
			$lookupTableLinks["candidates"] = array();
		}
		if( !isset( $lookupTableLinks["candidates"]["event_participants_view.CandidateID"] )) {
			$lookupTableLinks["candidates"]["event_participants_view.CandidateID"] = array();
		}
		$lookupTableLinks["candidates"]["event_participants_view.CandidateID"]["search"] = array("table" => "event_participants_view", "field" => "CandidateID", "page" => "search");
		if( !isset( $lookupTableLinks["Disability_Types"] ) ) {
			$lookupTableLinks["Disability_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Disability_Types"]["event_participants_view.Disability_Type"] )) {
			$lookupTableLinks["Disability_Types"]["event_participants_view.Disability_Type"] = array();
		}
		$lookupTableLinks["Disability_Types"]["event_participants_view.Disability_Type"]["search"] = array("table" => "event_participants_view", "field" => "Disability_Type", "page" => "search");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["training_participants_view.TrainingID"] )) {
			$lookupTableLinks["trainings"]["training_participants_view.TrainingID"] = array();
		}
		$lookupTableLinks["trainings"]["training_participants_view.TrainingID"]["search"] = array("table" => "training_participants_view", "field" => "TrainingID", "page" => "search");
		if( !isset( $lookupTableLinks["candidates"] ) ) {
			$lookupTableLinks["candidates"] = array();
		}
		if( !isset( $lookupTableLinks["candidates"]["training_participants_view.CandidateID"] )) {
			$lookupTableLinks["candidates"]["training_participants_view.CandidateID"] = array();
		}
		$lookupTableLinks["candidates"]["training_participants_view.CandidateID"]["search"] = array("table" => "training_participants_view", "field" => "CandidateID", "page" => "search");
		if( !isset( $lookupTableLinks["training_organizers"] ) ) {
			$lookupTableLinks["training_organizers"] = array();
		}
		if( !isset( $lookupTableLinks["training_organizers"]["training_participants_view.Training_Organizer"] )) {
			$lookupTableLinks["training_organizers"]["training_participants_view.Training_Organizer"] = array();
		}
		$lookupTableLinks["training_organizers"]["training_participants_view.Training_Organizer"]["search"] = array("table" => "training_participants_view", "field" => "Training_Organizer", "page" => "search");
		if( !isset( $lookupTableLinks["training_types"] ) ) {
			$lookupTableLinks["training_types"] = array();
		}
		if( !isset( $lookupTableLinks["training_types"]["training_participants_view.Training_Type"] )) {
			$lookupTableLinks["training_types"]["training_participants_view.Training_Type"] = array();
		}
		$lookupTableLinks["training_types"]["training_participants_view.Training_Type"]["search"] = array("table" => "training_participants_view", "field" => "Training_Type", "page" => "search");
		if( !isset( $lookupTableLinks["program_areas"] ) ) {
			$lookupTableLinks["program_areas"] = array();
		}
		if( !isset( $lookupTableLinks["program_areas"]["training_participants_view.Program_Area"] )) {
			$lookupTableLinks["program_areas"]["training_participants_view.Program_Area"] = array();
		}
		$lookupTableLinks["program_areas"]["training_participants_view.Program_Area"]["search"] = array("table" => "training_participants_view", "field" => "Program_Area", "page" => "search");
		if( !isset( $lookupTableLinks["training_city_towns"] ) ) {
			$lookupTableLinks["training_city_towns"] = array();
		}
		if( !isset( $lookupTableLinks["training_city_towns"]["training_participants_view.Training_City_Town"] )) {
			$lookupTableLinks["training_city_towns"]["training_participants_view.Training_City_Town"] = array();
		}
		$lookupTableLinks["training_city_towns"]["training_participants_view.Training_City_Town"]["search"] = array("table" => "training_participants_view", "field" => "Training_City_Town", "page" => "search");
		if( !isset( $lookupTableLinks["training_venues"] ) ) {
			$lookupTableLinks["training_venues"] = array();
		}
		if( !isset( $lookupTableLinks["training_venues"]["training_participants_view.Training_Venue"] )) {
			$lookupTableLinks["training_venues"]["training_participants_view.Training_Venue"] = array();
		}
		$lookupTableLinks["training_venues"]["training_participants_view.Training_Venue"]["search"] = array("table" => "training_participants_view", "field" => "Training_Venue", "page" => "search");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["training_participants_view.Training_Start_Date"] )) {
			$lookupTableLinks["trainings"]["training_participants_view.Training_Start_Date"] = array();
		}
		$lookupTableLinks["trainings"]["training_participants_view.Training_Start_Date"]["search"] = array("table" => "training_participants_view", "field" => "Training_Start_Date", "page" => "search");
		if( !isset( $lookupTableLinks["trainings"] ) ) {
			$lookupTableLinks["trainings"] = array();
		}
		if( !isset( $lookupTableLinks["trainings"]["training_participants_view.Training_End_Date"] )) {
			$lookupTableLinks["trainings"]["training_participants_view.Training_End_Date"] = array();
		}
		$lookupTableLinks["trainings"]["training_participants_view.Training_End_Date"]["search"] = array("table" => "training_participants_view", "field" => "Training_End_Date", "page" => "search");
		if( !isset( $lookupTableLinks["Disability_Types"] ) ) {
			$lookupTableLinks["Disability_Types"] = array();
		}
		if( !isset( $lookupTableLinks["Disability_Types"]["training_participants_view.Disability_Type"] )) {
			$lookupTableLinks["Disability_Types"]["training_participants_view.Disability_Type"] = array();
		}
		$lookupTableLinks["Disability_Types"]["training_participants_view.Disability_Type"]["search"] = array("table" => "training_participants_view", "field" => "Disability_Type", "page" => "search");
}

?>