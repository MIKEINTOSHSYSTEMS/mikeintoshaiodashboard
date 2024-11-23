<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblderedevatderejadevmerqconsulta__backup;
	var $tblderedevatderejadevmerqconsulta__Candidate_Employment_Tracker;
	var $tblderedevatderejadevmerqconsulta__candidates;
	var $tblderedevatderejadevmerqconsulta__cities;
	var $tblderedevatderejadevmerqconsulta__Companies;
	var $tblderedevatderejadevmerqconsulta__CompanySectors;
	var $tblderedevatderejadevmerqconsulta__dashboard_pages;
	var $tblderedevatderejadevmerqconsulta__dashboards;
	var $tblderedevatderejadevmerqconsulta__departments;
	var $tblderedevatderejadevmerqconsulta__dereja_academy_lms;
	var $tblderedevatderejadevmerqconsulta__dereja_event_services;
	var $tblderedevatderejadevmerqconsulta__dereja_information_sources;
	var $tblderedevatderejadevmerqconsulta__dereja_services;
	var $tblderedevatderejadevmerqconsulta__dereja_training_services;
	var $tblderedevatderejadevmerqconsulta__derejame_audit;
	var $tblderedevatderejadevmerqconsulta__derejame_noti;
	var $tblderedevatderejadevmerqconsulta__derejame_settings;
	var $tblderedevatderejadevmerqconsulta__derejame_uggroups;
	var $tblderedevatderejadevmerqconsulta__derejame_ugmembers;
	var $tblderedevatderejadevmerqconsulta__derejame_ugrights;
	var $tblderedevatderejadevmerqconsulta__Disability_Types;
	var $tblderedevatderejadevmerqconsulta__education_levels;
	var $tblderedevatderejadevmerqconsulta__event_participants;
	var $tblderedevatderejadevmerqconsulta__events;
	var $tblderedevatderejadevmerqconsulta__faicons;
	var $tblderedevatderejadevmerqconsulta__indicator_targets;
	var $tblderedevatderejadevmerqconsulta__industry_specific_skills;
	var $tblderedevatderejadevmerqconsulta__institution_types;
	var $tblderedevatderejadevmerqconsulta__it_related_skills;
	var $tblderedevatderejadevmerqconsulta__Job_Categories;
	var $tblderedevatderejadevmerqconsulta__Job_Fair;
	var $tblderedevatderejadevmerqconsulta__Job_Types;
	var $tblderedevatderejadevmerqconsulta__Jobs;
	var $tblderedevatderejadevmerqconsulta__kbarticles;
	var $tblderedevatderejadevmerqconsulta__kbcategories;
	var $tblderedevatderejadevmerqconsulta__kbcomments;
	var $tblderedevatderejadevmerqconsulta__kbusers;
	var $tblderedevatderejadevmerqconsulta__Languages;
	var $tblderedevatderejadevmerqconsulta__minor_major;
	var $tblderedevatderejadevmerqconsulta__participant_organization_types;
	var $tblderedevatderejadevmerqconsulta__performance_indicators;
	var $tblderedevatderejadevmerqconsulta__performance_tracking;
	var $tblderedevatderejadevmerqconsulta__performance_years;
	var $tblderedevatderejadevmerqconsulta__professions;
	var $tblderedevatderejadevmerqconsulta__program_areas;
	var $tblderedevatderejadevmerqconsulta__regions;
	var $tblderedevatderejadevmerqconsulta__settings;
	var $tblderedevatderejadevmerqconsulta__skills;
	var $tblderedevatderejadevmerqconsulta__sub_cities;
	var $tblderedevatderejadevmerqconsulta__Trainer;
	var $tblderedevatderejadevmerqconsulta__training_city_towns;
	var $tblderedevatderejadevmerqconsulta__training_organizers;
	var $tblderedevatderejadevmerqconsulta__training_participants;
	var $tblderedevatderejadevmerqconsulta__training_types;
	var $tblderedevatderejadevmerqconsulta__training_venues;
	var $tblderedevatderejadevmerqconsulta__trainings;
	var $tblderedevatderejadevmerqconsulta__users;
	var $tblderedevatderejadevmerqconsulta__utilities;
	var $tblderedevatderejadevmerqconsulta__webreport_admin;
	var $tblderedevatderejadevmerqconsulta__webreport_sql;
	var $tblderedevatderejadevmerqconsulta__webreport_style;
	var $tblderedevatderejadevmerqconsulta__webreports;
	var $tblderedevatderejadevmerqconsulta__website_data;
	var $tblderedevatderejadevmerqconsulta__zones;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "backup", "varname" => "deredevatderejadevmerqconsulta__backup", "altvarname" => "backup", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Candidate_Employment_Tracker", "varname" => "deredevatderejadevmerqconsulta__Candidate_Employment_Tracker", "altvarname" => "Candidate_Employment_Tracker", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "candidates", "varname" => "deredevatderejadevmerqconsulta__candidates", "altvarname" => "candidates", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "cities", "varname" => "deredevatderejadevmerqconsulta__cities", "altvarname" => "cities", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Companies", "varname" => "deredevatderejadevmerqconsulta__Companies", "altvarname" => "Companies", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "CompanySectors", "varname" => "deredevatderejadevmerqconsulta__CompanySectors", "altvarname" => "CompanySectors", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dashboard_pages", "varname" => "deredevatderejadevmerqconsulta__dashboard_pages", "altvarname" => "dashboard_pages", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dashboards", "varname" => "deredevatderejadevmerqconsulta__dashboards", "altvarname" => "dashboards", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "departments", "varname" => "deredevatderejadevmerqconsulta__departments", "altvarname" => "departments", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dereja_academy_lms", "varname" => "deredevatderejadevmerqconsulta__dereja_academy_lms", "altvarname" => "dereja_academy_lms", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dereja_event_services", "varname" => "deredevatderejadevmerqconsulta__dereja_event_services", "altvarname" => "dereja_event_services", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dereja_information_sources", "varname" => "deredevatderejadevmerqconsulta__dereja_information_sources", "altvarname" => "dereja_information_sources", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dereja_services", "varname" => "deredevatderejadevmerqconsulta__dereja_services", "altvarname" => "dereja_services", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "dereja_training_services", "varname" => "deredevatderejadevmerqconsulta__dereja_training_services", "altvarname" => "dereja_training_services", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "derejame_audit", "varname" => "deredevatderejadevmerqconsulta__derejame_audit", "altvarname" => "derejame_audit", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "derejame_noti", "varname" => "deredevatderejadevmerqconsulta__derejame_noti", "altvarname" => "derejame_noti", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "derejame_settings", "varname" => "deredevatderejadevmerqconsulta__derejame_settings", "altvarname" => "derejame_settings", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "derejame_uggroups", "varname" => "deredevatderejadevmerqconsulta__derejame_uggroups", "altvarname" => "derejame_uggroups", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "derejame_ugmembers", "varname" => "deredevatderejadevmerqconsulta__derejame_ugmembers", "altvarname" => "derejame_ugmembers", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "derejame_ugrights", "varname" => "deredevatderejadevmerqconsulta__derejame_ugrights", "altvarname" => "derejame_ugrights", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Disability_Types", "varname" => "deredevatderejadevmerqconsulta__Disability_Types", "altvarname" => "Disability_Types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "education_levels", "varname" => "deredevatderejadevmerqconsulta__education_levels", "altvarname" => "education_levels", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "event_participants", "varname" => "deredevatderejadevmerqconsulta__event_participants", "altvarname" => "event_participants", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "events", "varname" => "deredevatderejadevmerqconsulta__events", "altvarname" => "events", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "faicons", "varname" => "deredevatderejadevmerqconsulta__faicons", "altvarname" => "faicons", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "indicator_targets", "varname" => "deredevatderejadevmerqconsulta__indicator_targets", "altvarname" => "indicator_targets", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "industry_specific_skills", "varname" => "deredevatderejadevmerqconsulta__industry_specific_skills", "altvarname" => "industry_specific_skills", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "institution_types", "varname" => "deredevatderejadevmerqconsulta__institution_types", "altvarname" => "institution_types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "it_related_skills", "varname" => "deredevatderejadevmerqconsulta__it_related_skills", "altvarname" => "it_related_skills", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Job_Categories", "varname" => "deredevatderejadevmerqconsulta__Job_Categories", "altvarname" => "Job_Categories", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Job_Fair", "varname" => "deredevatderejadevmerqconsulta__Job_Fair", "altvarname" => "Job_Fair", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Job_Types", "varname" => "deredevatderejadevmerqconsulta__Job_Types", "altvarname" => "Job_Types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Jobs", "varname" => "deredevatderejadevmerqconsulta__Jobs", "altvarname" => "Jobs", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "kbarticles", "varname" => "deredevatderejadevmerqconsulta__kbarticles", "altvarname" => "kbarticles", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "kbcategories", "varname" => "deredevatderejadevmerqconsulta__kbcategories", "altvarname" => "kbcategories", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "kbcomments", "varname" => "deredevatderejadevmerqconsulta__kbcomments", "altvarname" => "kbcomments", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "kbusers", "varname" => "deredevatderejadevmerqconsulta__kbusers", "altvarname" => "kbusers", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Languages", "varname" => "deredevatderejadevmerqconsulta__Languages", "altvarname" => "Languages", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "minor_major", "varname" => "deredevatderejadevmerqconsulta__minor_major", "altvarname" => "minor_major", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "participant_organization_types", "varname" => "deredevatderejadevmerqconsulta__participant_organization_types", "altvarname" => "participant_organization_types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "performance_indicators", "varname" => "deredevatderejadevmerqconsulta__performance_indicators", "altvarname" => "performance_indicators", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "performance_tracking", "varname" => "deredevatderejadevmerqconsulta__performance_tracking", "altvarname" => "performance_tracking", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "performance_years", "varname" => "deredevatderejadevmerqconsulta__performance_years", "altvarname" => "performance_years", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "professions", "varname" => "deredevatderejadevmerqconsulta__professions", "altvarname" => "professions", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "program_areas", "varname" => "deredevatderejadevmerqconsulta__program_areas", "altvarname" => "program_areas", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "regions", "varname" => "deredevatderejadevmerqconsulta__regions", "altvarname" => "regions", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "settings", "varname" => "deredevatderejadevmerqconsulta__settings", "altvarname" => "settings", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "skills", "varname" => "deredevatderejadevmerqconsulta__skills", "altvarname" => "skills", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "sub_cities", "varname" => "deredevatderejadevmerqconsulta__sub_cities", "altvarname" => "sub_cities", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "Trainer", "varname" => "deredevatderejadevmerqconsulta__Trainer", "altvarname" => "Trainer", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "training_city_towns", "varname" => "deredevatderejadevmerqconsulta__training_city_towns", "altvarname" => "training_city_towns", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "training_organizers", "varname" => "deredevatderejadevmerqconsulta__training_organizers", "altvarname" => "training_organizers", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "training_participants", "varname" => "deredevatderejadevmerqconsulta__training_participants", "altvarname" => "training_participants", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "training_types", "varname" => "deredevatderejadevmerqconsulta__training_types", "altvarname" => "training_types", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "training_venues", "varname" => "deredevatderejadevmerqconsulta__training_venues", "altvarname" => "training_venues", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "trainings", "varname" => "deredevatderejadevmerqconsulta__trainings", "altvarname" => "trainings", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "users", "varname" => "deredevatderejadevmerqconsulta__users", "altvarname" => "users", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "utilities", "varname" => "deredevatderejadevmerqconsulta__utilities", "altvarname" => "utilities", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "webreport_admin", "varname" => "deredevatderejadevmerqconsulta__webreport_admin", "altvarname" => "webreport_admin", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "webreport_sql", "varname" => "deredevatderejadevmerqconsulta__webreport_sql", "altvarname" => "webreport_sql", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "webreport_style", "varname" => "deredevatderejadevmerqconsulta__webreport_style", "altvarname" => "webreport_style", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "webreports", "varname" => "deredevatderejadevmerqconsulta__webreports", "altvarname" => "webreports", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "website_data", "varname" => "deredevatderejadevmerqconsulta__website_data", "altvarname" => "website_data", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
		$this->lstTables[] = array("name" => "zones", "varname" => "deredevatderejadevmerqconsulta__zones", "altvarname" => "zones", "connId" => "deredevatderejadevmerqconsulta", "schema" => "", "connName" => "dere_dev at derejadev.merqcons");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>