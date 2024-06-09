<?php
$tdatatraining_participants_by_trainings = array();
$tdatatraining_participants_by_trainings[".searchableFields"] = array();
$tdatatraining_participants_by_trainings[".ShortName"] = "training_participants_by_trainings";
$tdatatraining_participants_by_trainings[".OwnerID"] = "";
$tdatatraining_participants_by_trainings[".OriginalTable"] = "training_participants";


$tdatatraining_participants_by_trainings[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatraining_participants_by_trainings[".originalPagesByType"] = $tdatatraining_participants_by_trainings[".pagesByType"];
$tdatatraining_participants_by_trainings[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatraining_participants_by_trainings[".originalPages"] = $tdatatraining_participants_by_trainings[".pages"];
$tdatatraining_participants_by_trainings[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatraining_participants_by_trainings[".originalDefaultPages"] = $tdatatraining_participants_by_trainings[".defaultPages"];

//	field labels
$fieldLabelstraining_participants_by_trainings = array();
$fieldToolTipstraining_participants_by_trainings = array();
$pageTitlestraining_participants_by_trainings = array();
$placeHolderstraining_participants_by_trainings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participants_by_trainings["English"] = array();
	$fieldToolTipstraining_participants_by_trainings["English"] = array();
	$placeHolderstraining_participants_by_trainings["English"] = array();
	$pageTitlestraining_participants_by_trainings["English"] = array();
	$fieldLabelstraining_participants_by_trainings["English"]["TrainingID"] = "Training";
	$fieldToolTipstraining_participants_by_trainings["English"]["TrainingID"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["TrainingID"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["CandidateID"] = "Candidates";
	$fieldToolTipstraining_participants_by_trainings["English"]["CandidateID"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["CandidateID"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["StudentID"] = "Student ID";
	$fieldToolTipstraining_participants_by_trainings["English"]["StudentID"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["StudentID"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Organizer"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Type"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Type"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Program_Area"] = "Program Area";
	$fieldToolTipstraining_participants_by_trainings["English"]["Program_Area"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Program_Area"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_City_Town"] = "Training City Town";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_City_Town"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_City_Town"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Venue"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Venue"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Start_Date"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Start_Date"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_End_Date"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_End_Date"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["First_Name"] = "First Name";
	$fieldToolTipstraining_participants_by_trainings["English"]["First_Name"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["First_Name"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipstraining_participants_by_trainings["English"]["Middle_Name"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Middle_Name"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Last_Name"] = "Last Name";
	$fieldToolTipstraining_participants_by_trainings["English"]["Last_Name"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Last_Name"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Sex"] = "Sex";
	$fieldToolTipstraining_participants_by_trainings["English"]["Sex"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Sex"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Email"] = "Email";
	$fieldToolTipstraining_participants_by_trainings["English"]["Email"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Email"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Phone"] = "Phone";
	$fieldToolTipstraining_participants_by_trainings["English"]["Phone"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Phone"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipstraining_participants_by_trainings["English"]["Disability_Status"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Disability_Status"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipstraining_participants_by_trainings["English"]["Disability_Type"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Disability_Type"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipstraining_participants_by_trainings["English"]["Disability_Type_Other"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Disability_Type_Other"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Participant_Profession"] = "Participant Profession";
	$fieldToolTipstraining_participants_by_trainings["English"]["Participant_Profession"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Participant_Profession"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Participant_Field_of_Study"] = "Participant Field Of Study";
	$fieldToolTipstraining_participants_by_trainings["English"]["Participant_Field_of_Study"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Participant_Facility_Organization_Type"] = "Participant Facility Organization Type";
	$fieldToolTipstraining_participants_by_trainings["English"]["Participant_Facility_Organization_Type"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Participant_Facility_Organization_Type"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipstraining_participants_by_trainings["English"]["Participant_Organization_Name"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Participant_Organization_Name"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Participants_Home_Address"] = "Participants Home Address";
	$fieldToolTipstraining_participants_by_trainings["English"]["Participants_Home_Address"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Participants_Home_Address"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["PreTest_Score"] = "PreTest Score";
	$fieldToolTipstraining_participants_by_trainings["English"]["PreTest_Score"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["PreTest_Score"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Skill_Test"] = "Skill Test";
	$fieldToolTipstraining_participants_by_trainings["English"]["Skill_Test"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Skill_Test"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Post_Test_Score"] = "Post Test Score";
	$fieldToolTipstraining_participants_by_trainings["English"]["Post_Test_Score"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Post_Test_Score"] = "";
	if (count($fieldToolTipstraining_participants_by_trainings["English"]))
		$tdatatraining_participants_by_trainings[".isUseToolTips"] = true;
}


	$tdatatraining_participants_by_trainings[".NCSearch"] = true;

	$tdatatraining_participants_by_trainings[".ChartRefreshTime"] = 0;


$tdatatraining_participants_by_trainings[".shortTableName"] = "training_participants_by_trainings";
$tdatatraining_participants_by_trainings[".nSecOptions"] = 0;

$tdatatraining_participants_by_trainings[".mainTableOwnerID"] = "";
$tdatatraining_participants_by_trainings[".entityType"] = 3;
$tdatatraining_participants_by_trainings[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_participants_by_trainings[".strOriginalTableName"] = "training_participants";

	



$tdatatraining_participants_by_trainings[".showAddInPopup"] = false;

$tdatatraining_participants_by_trainings[".showEditInPopup"] = false;

$tdatatraining_participants_by_trainings[".showViewInPopup"] = false;

$tdatatraining_participants_by_trainings[".listAjax"] = false;
//	temporary
//$tdatatraining_participants_by_trainings[".listAjax"] = false;

	$tdatatraining_participants_by_trainings[".audit"] = false;

	$tdatatraining_participants_by_trainings[".locking"] = false;


$pages = $tdatatraining_participants_by_trainings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participants_by_trainings[".edit"] = true;
	$tdatatraining_participants_by_trainings[".afterEditAction"] = 1;
	$tdatatraining_participants_by_trainings[".closePopupAfterEdit"] = 1;
	$tdatatraining_participants_by_trainings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participants_by_trainings[".add"] = true;
$tdatatraining_participants_by_trainings[".afterAddAction"] = 1;
$tdatatraining_participants_by_trainings[".closePopupAfterAdd"] = 1;
$tdatatraining_participants_by_trainings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participants_by_trainings[".list"] = true;
}



$tdatatraining_participants_by_trainings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participants_by_trainings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participants_by_trainings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participants_by_trainings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participants_by_trainings[".printFriendly"] = true;
}



$tdatatraining_participants_by_trainings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participants_by_trainings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participants_by_trainings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participants_by_trainings[".isUseAjaxSuggest"] = true;



									

$tdatatraining_participants_by_trainings[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants_by_trainings[".buttonsAdded"] = false;

$tdatatraining_participants_by_trainings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants_by_trainings[".isUseTimeForSearch"] = false;


$tdatatraining_participants_by_trainings[".badgeColor"] = "8FBC8B";


$tdatatraining_participants_by_trainings[".allSearchFields"] = array();
$tdatatraining_participants_by_trainings[".filterFields"] = array();
$tdatatraining_participants_by_trainings[".requiredSearchFields"] = array();

$tdatatraining_participants_by_trainings[".googleLikeFields"] = array();
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "TrainingID";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "CandidateID";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "StudentID";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Organizer";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Type";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Program_Area";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_City_Town";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Venue";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Start_Date";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_End_Date";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "First_Name";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Middle_Name";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Last_Name";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Sex";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Email";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Phone";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Disability_Status";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Disability_Type";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Disability_Type_Other";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Participant_Profession";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Participant_Field_of_Study";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Participant_Facility_Organization_Type";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Participant_Organization_Name";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Participants_Home_Address";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "PreTest_Score";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Skill_Test";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Post_Test_Score";



$tdatatraining_participants_by_trainings[".tableType"] = "chart";

$tdatatraining_participants_by_trainings[".printerPageOrientation"] = 0;
$tdatatraining_participants_by_trainings[".nPrinterPageScale"] = 100;

$tdatatraining_participants_by_trainings[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants_by_trainings[".geocodingEnabled"] = false;



// chart settings
$tdatatraining_participants_by_trainings[".chartType"] = "2DBar";
// end of chart settings

$tdatatraining_participants_by_trainings[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatatraining_participants_by_trainings[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants_by_trainings[".orderindexes"] = array();


$tdatatraining_participants_by_trainings[".sqlHead"] = "SELECT TrainingID,  CandidateID,  StudentID,  Training_Organizer,  Training_Type,  Program_Area,  Training_City_Town,  Training_Venue,  Training_Start_Date,  Training_End_Date,  First_Name,  Middle_Name,  Last_Name,  Sex,  Email,  Phone,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Participant_Profession,  Participant_Field_of_Study,  Participant_Facility_Organization_Type,  Participant_Organization_Name,  Participants_Home_Address,  PreTest_Score,  Skill_Test,  Post_Test_Score";
$tdatatraining_participants_by_trainings[".sqlFrom"] = "FROM training_participants";
$tdatatraining_participants_by_trainings[".sqlWhereExpr"] = "";
$tdatatraining_participants_by_trainings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participants_by_trainings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participants_by_trainings[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participants_by_trainings[".highlightSearchResults"] = true;

$tableKeystraining_participants_by_trainings = array();
$tableKeystraining_participants_by_trainings[] = "TrainingID";
$tableKeystraining_participants_by_trainings[] = "CandidateID";
$tdatatraining_participants_by_trainings[".Keys"] = $tableKeystraining_participants_by_trainings;


$tdatatraining_participants_by_trainings[".hideMobileList"] = array();




//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","TrainingID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TrainingID";

		$fdata["sourceSingle"] = "TrainingID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Training_Organizer", 'lookupF'=>"OrganizerName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Type", 'lookupF'=>"TypeName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Program_Area", 'lookupF'=>"program_areas");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_City_Town", 'lookupF'=>"CityTownName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Venue", 'lookupF'=>"VenueName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Start_Date", 'lookupF'=>"Training_Start_Date");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_End_Date", 'lookupF'=>"Training_End_Date");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingTitle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["TrainingID"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "TrainingID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","CandidateID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CandidateID";

		$fdata["sourceSingle"] = "CandidateID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CandidateID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "candidates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"First_Name", 'lookupF'=>"First_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle_Name", 'lookupF'=>"Middle_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last_Name", 'lookupF'=>"Last_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email", 'lookupF'=>"Email_Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone", 'lookupF'=>"Phone_Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant_Field_of_Study", 'lookupF'=>"Field_Of_Study");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["CandidateID"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","StudentID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "StudentID";

		$fdata["sourceSingle"] = "StudentID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StudentID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["StudentID"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "StudentID";
//	Training_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Training_Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Organizer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_Organizer";

		$fdata["sourceSingle"] = "Training_Organizer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Organizer";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "training_organizers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OrganizerID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "OrganizerName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Training_Organizer"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Organizer";
//	Training_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Training_Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_Type";

		$fdata["sourceSingle"] = "Training_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "training_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TypeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TypeName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Training_Type"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Type";
//	Program_Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Program_Area";
	$fdata["GoodName"] = "Program_Area";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Program_Area");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Program_Area";

		$fdata["sourceSingle"] = "Program_Area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Program_Area";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "program_areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AreaID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AreaName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Program_Area"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Program_Area";
//	Training_City_Town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Training_City_Town";
	$fdata["GoodName"] = "Training_City_Town";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_City_Town");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_City_Town";

		$fdata["sourceSingle"] = "Training_City_Town";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_City_Town";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "training_city_towns";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CityTownID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CityTownName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Training_City_Town"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_City_Town";
//	Training_Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Training_Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Venue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_Venue";

		$fdata["sourceSingle"] = "Training_Venue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Venue";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "training_venues";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "VenueID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VenueName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Training_Venue"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Venue";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_Start_Date";

		$fdata["sourceSingle"] = "Training_Start_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Start_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"TrainingID", 'lookupF'=>"TrainingID");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_End_Date", 'lookupF'=>"Training_End_Date");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Training_Start_Date";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Training_Start_Date"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_End_Date";

		$fdata["sourceSingle"] = "Training_End_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_End_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"TrainingID", 'lookupF'=>"TrainingID");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Start_Date", 'lookupF'=>"Training_Start_Date");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Training_End_Date";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Training_End_Date"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_End_Date";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","First_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "First_Name";

		$fdata["sourceSingle"] = "First_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "First_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["First_Name"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Middle_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Middle_Name";

		$fdata["sourceSingle"] = "Middle_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Middle_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Middle_Name"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Last_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Last_Name";

		$fdata["sourceSingle"] = "Last_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Last_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Last_Name"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Last_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

		$fdata["sourceSingle"] = "Sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sex";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Sex"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Sex";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Email"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Email";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone";

		$fdata["sourceSingle"] = "Phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Phone"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Phone";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Disability_Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Disability_Status";

		$fdata["sourceSingle"] = "Disability_Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Disability_Status"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Disability_Type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Disability_Type";

		$fdata["sourceSingle"] = "Disability_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Disability_Types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DisabilityID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Disability_Type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Disability_Type"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Disability_Type_Other");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Disability_Type_Other";

		$fdata["sourceSingle"] = "Disability_Type_Other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type_Other";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Disability_Type_Other"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Disability_Type_Other";
//	Participant_Profession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Participant_Profession";
	$fdata["GoodName"] = "Participant_Profession";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Participant_Profession");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Profession";

		$fdata["sourceSingle"] = "Participant_Profession";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Profession";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Participant_Profession"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Participant_Profession";
//	Participant_Field_of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Participant_Field_of_Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Participant_Field_of_Study");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Field_of_Study";

		$fdata["sourceSingle"] = "Participant_Field_of_Study";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Field_of_Study";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Participant_Field_of_Study"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Participant_Field_of_Study";
//	Participant_Facility_Organization_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Participant_Facility_Organization_Type";
	$fdata["GoodName"] = "Participant_Facility_Organization_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Participant_Facility_Organization_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Facility_Organization_Type";

		$fdata["sourceSingle"] = "Participant_Facility_Organization_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Facility_Organization_Type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Participant_Facility_Organization_Type"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Participant_Facility_Organization_Type";
//	Participant_Organization_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Participant_Organization_Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Participant_Organization_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Organization_Name";

		$fdata["sourceSingle"] = "Participant_Organization_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Organization_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Participant_Organization_Name"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Participant_Organization_Name";
//	Participants_Home_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Participants_Home_Address";
	$fdata["GoodName"] = "Participants_Home_Address";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Participants_Home_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participants_Home_Address";

		$fdata["sourceSingle"] = "Participants_Home_Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participants_Home_Address";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Participants_Home_Address"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Participants_Home_Address";
//	PreTest_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "PreTest_Score";
	$fdata["GoodName"] = "PreTest_Score";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","PreTest_Score");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PreTest_Score";

		$fdata["sourceSingle"] = "PreTest_Score";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreTest_Score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["PreTest_Score"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "PreTest_Score";
//	Skill_Test
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Skill_Test";
	$fdata["GoodName"] = "Skill_Test";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Skill_Test");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Skill_Test";

		$fdata["sourceSingle"] = "Skill_Test";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Skill_Test";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Skill_Test"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Skill_Test";
//	Post_Test_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Post_Test_Score";
	$fdata["GoodName"] = "Post_Test_Score";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Post_Test_Score");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Post_Test_Score";

		$fdata["sourceSingle"] = "Post_Test_Score";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Post_Test_Score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_participants_by_trainings["Post_Test_Score"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Post_Test_Score";

$tdatatraining_participants_by_trainings[".groupChart"] = true;
$tdatatraining_participants_by_trainings[".chartLabelInterval"] = 0;
$tdatatraining_participants_by_trainings[".chartLabelField"] = "TrainingID";
$tdatatraining_participants_by_trainings[".chartSeries"] = array();
$tdatatraining_participants_by_trainings[".chartSeries"][] = array(
	"field" => "CandidateID",
	"total" => "COUNT"
);
	$tdatatraining_participants_by_trainings[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">training_participants_by_trainings</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_bar</attr>
		</attr>

		<attr value="parameters">';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="0">
			<attr value="name">CandidateID</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="1">
		<attr value="name">TrainingID</attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="head">'.xmlencode("Training Participants By Trainings").'</attr>
<attr value="foot">'.xmlencode("Trainings").'</attr>
<attr value="y_axis_label">'.xmlencode("TrainingID").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="0">
		<attr value="name">TrainingID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","TrainingID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="1">
		<attr value="name">CandidateID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","CandidateID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="2">
		<attr value="name">StudentID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","StudentID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="3">
		<attr value="name">Training_Organizer</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Organizer")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="4">
		<attr value="name">Training_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="5">
		<attr value="name">Program_Area</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Program_Area")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="6">
		<attr value="name">Training_City_Town</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_City_Town")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="7">
		<attr value="name">Training_Venue</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Venue")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="8">
		<attr value="name">Training_Start_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Start_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="9">
		<attr value="name">Training_End_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_End_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="10">
		<attr value="name">First_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","First_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="11">
		<attr value="name">Middle_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Middle_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="12">
		<attr value="name">Last_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Last_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="13">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="14">
		<attr value="name">Email</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Email")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="15">
		<attr value="name">Phone</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Phone")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="16">
		<attr value="name">Disability_Status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Disability_Status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="17">
		<attr value="name">Disability_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Disability_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="18">
		<attr value="name">Disability_Type_Other</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Disability_Type_Other")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="19">
		<attr value="name">Participant_Profession</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Participant_Profession")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="20">
		<attr value="name">Participant_Field_of_Study</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Participant_Field_of_Study")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="21">
		<attr value="name">Participant_Facility_Organization_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Participant_Facility_Organization_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="22">
		<attr value="name">Participant_Organization_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Participant_Organization_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="23">
		<attr value="name">Participants_Home_Address</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Participants_Home_Address")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="24">
		<attr value="name">PreTest_Score</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","PreTest_Score")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="25">
		<attr value="name">Skill_Test</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Skill_Test")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="26">
		<attr value="name">Post_Test_Score</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Post_Test_Score")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">training_participants_by_trainings</attr>
<attr value="short_table_name">training_participants_by_trainings</attr>
</attr>

</chart>';

$tables_data["training_participants_by_trainings"]=&$tdatatraining_participants_by_trainings;
$field_labels["training_participants_by_trainings"] = &$fieldLabelstraining_participants_by_trainings;
$fieldToolTips["training_participants_by_trainings"] = &$fieldToolTipstraining_participants_by_trainings;
$placeHolders["training_participants_by_trainings"] = &$placeHolderstraining_participants_by_trainings;
$page_titles["training_participants_by_trainings"] = &$pageTitlestraining_participants_by_trainings;


changeTextControlsToDate( "training_participants_by_trainings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_participants_by_trainings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_participants_by_trainings"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants_by_trainings"][0] = $masterParams;
				$masterTablesData["training_participants_by_trainings"][0]["masterKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants_by_trainings"][0]["detailKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][0]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="trainings";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="trainings";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "trainings1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants_by_trainings"][1] = $masterParams;
				$masterTablesData["training_participants_by_trainings"][1]["masterKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][1]["masterKeys"][]="TrainingID";
				$masterTablesData["training_participants_by_trainings"][1]["detailKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][1]["detailKeys"][]="TrainingID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants_by_trainings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,  CandidateID,  StudentID,  Training_Organizer,  Training_Type,  Program_Area,  Training_City_Town,  Training_Venue,  Training_Start_Date,  Training_End_Date,  First_Name,  Middle_Name,  Last_Name,  Sex,  Email,  Phone,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Participant_Profession,  Participant_Field_of_Study,  Participant_Facility_Organization_Type,  Participant_Organization_Name,  Participants_Home_Address,  PreTest_Score,  Skill_Test,  Post_Test_Score";
$proto0["m_strFrom"] = "FROM training_participants";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
																								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto6["m_sql"] = "TrainingID";
$proto6["m_srcTableName"] = "training_participants_by_trainings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "training_participants_by_trainings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto10["m_sql"] = "StudentID";
$proto10["m_srcTableName"] = "training_participants_by_trainings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Organizer",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto12["m_sql"] = "Training_Organizer";
$proto12["m_srcTableName"] = "training_participants_by_trainings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto14["m_sql"] = "Training_Type";
$proto14["m_srcTableName"] = "training_participants_by_trainings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Program_Area",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto16["m_sql"] = "Program_Area";
$proto16["m_srcTableName"] = "training_participants_by_trainings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_City_Town",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto18["m_sql"] = "Training_City_Town";
$proto18["m_srcTableName"] = "training_participants_by_trainings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Venue",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto20["m_sql"] = "Training_Venue";
$proto20["m_srcTableName"] = "training_participants_by_trainings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto22["m_sql"] = "Training_Start_Date";
$proto22["m_srcTableName"] = "training_participants_by_trainings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto24["m_sql"] = "Training_End_Date";
$proto24["m_srcTableName"] = "training_participants_by_trainings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto26["m_sql"] = "First_Name";
$proto26["m_srcTableName"] = "training_participants_by_trainings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto28["m_sql"] = "Middle_Name";
$proto28["m_srcTableName"] = "training_participants_by_trainings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto30["m_sql"] = "Last_Name";
$proto30["m_srcTableName"] = "training_participants_by_trainings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto32["m_sql"] = "Sex";
$proto32["m_srcTableName"] = "training_participants_by_trainings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto34["m_sql"] = "Email";
$proto34["m_srcTableName"] = "training_participants_by_trainings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto36["m_sql"] = "Phone";
$proto36["m_srcTableName"] = "training_participants_by_trainings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto38["m_sql"] = "Disability_Status";
$proto38["m_srcTableName"] = "training_participants_by_trainings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto40["m_sql"] = "Disability_Type";
$proto40["m_srcTableName"] = "training_participants_by_trainings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto42["m_sql"] = "Disability_Type_Other";
$proto42["m_srcTableName"] = "training_participants_by_trainings";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Profession",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto44["m_sql"] = "Participant_Profession";
$proto44["m_srcTableName"] = "training_participants_by_trainings";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto46["m_sql"] = "Participant_Field_of_Study";
$proto46["m_srcTableName"] = "training_participants_by_trainings";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Facility_Organization_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto48["m_sql"] = "Participant_Facility_Organization_Type";
$proto48["m_srcTableName"] = "training_participants_by_trainings";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto50["m_sql"] = "Participant_Organization_Name";
$proto50["m_srcTableName"] = "training_participants_by_trainings";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Participants_Home_Address",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto52["m_sql"] = "Participants_Home_Address";
$proto52["m_srcTableName"] = "training_participants_by_trainings";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "PreTest_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto54["m_sql"] = "PreTest_Score";
$proto54["m_srcTableName"] = "training_participants_by_trainings";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Skill_Test",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto56["m_sql"] = "Skill_Test";
$proto56["m_srcTableName"] = "training_participants_by_trainings";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Post_Test_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto58["m_sql"] = "Post_Test_Score";
$proto58["m_srcTableName"] = "training_participants_by_trainings";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "training_participants";
$proto61["m_srcTableName"] = "training_participants_by_trainings";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "TrainingID";
$proto61["m_columns"][] = "CandidateID";
$proto61["m_columns"][] = "StudentID";
$proto61["m_columns"][] = "Training_Organizer";
$proto61["m_columns"][] = "Training_Type";
$proto61["m_columns"][] = "Program_Area";
$proto61["m_columns"][] = "Training_City_Town";
$proto61["m_columns"][] = "Training_Venue";
$proto61["m_columns"][] = "Training_Start_Date";
$proto61["m_columns"][] = "Training_End_Date";
$proto61["m_columns"][] = "Training_Round";
$proto61["m_columns"][] = "First_Name";
$proto61["m_columns"][] = "Middle_Name";
$proto61["m_columns"][] = "Last_Name";
$proto61["m_columns"][] = "Sex";
$proto61["m_columns"][] = "Email";
$proto61["m_columns"][] = "Phone";
$proto61["m_columns"][] = "Disability_Status";
$proto61["m_columns"][] = "Disability_Type";
$proto61["m_columns"][] = "Disability_Type_Other";
$proto61["m_columns"][] = "Participant_Profession";
$proto61["m_columns"][] = "Participant_Field_of_Study";
$proto61["m_columns"][] = "Participant_Facility_Organization_Type";
$proto61["m_columns"][] = "Participant_Organization_Name";
$proto61["m_columns"][] = "Participants_Home_Address";
$proto61["m_columns"][] = "PreTest_Score";
$proto61["m_columns"][] = "Skill_Test";
$proto61["m_columns"][] = "Post_Test_Score";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "training_participants";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "training_participants_by_trainings";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "Training_Organizer",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "Training_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "Program_Area",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "Training_City_Town",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "Training_Venue",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto86["m_column"]=$obj;
$obj = new SQLGroupByItem($proto86);

$proto0["m_groupby"][]=$obj;
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto88["m_column"]=$obj;
$obj = new SQLGroupByItem($proto88);

$proto0["m_groupby"][]=$obj;
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto90["m_column"]=$obj;
$obj = new SQLGroupByItem($proto90);

$proto0["m_groupby"][]=$obj;
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto92["m_column"]=$obj;
$obj = new SQLGroupByItem($proto92);

$proto0["m_groupby"][]=$obj;
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto94["m_column"]=$obj;
$obj = new SQLGroupByItem($proto94);

$proto0["m_groupby"][]=$obj;
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto96["m_column"]=$obj;
$obj = new SQLGroupByItem($proto96);

$proto0["m_groupby"][]=$obj;
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto98["m_column"]=$obj;
$obj = new SQLGroupByItem($proto98);

$proto0["m_groupby"][]=$obj;
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto0["m_groupby"][]=$obj;
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Profession",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto102["m_column"]=$obj;
$obj = new SQLGroupByItem($proto102);

$proto0["m_groupby"][]=$obj;
												$proto104=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto104["m_column"]=$obj;
$obj = new SQLGroupByItem($proto104);

$proto0["m_groupby"][]=$obj;
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Facility_Organization_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "Participants_Home_Address",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto110["m_column"]=$obj;
$obj = new SQLGroupByItem($proto110);

$proto0["m_groupby"][]=$obj;
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "PreTest_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto112["m_column"]=$obj;
$obj = new SQLGroupByItem($proto112);

$proto0["m_groupby"][]=$obj;
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "Skill_Test",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto114["m_column"]=$obj;
$obj = new SQLGroupByItem($proto114);

$proto0["m_groupby"][]=$obj;
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "Post_Test_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="training_participants_by_trainings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants_by_trainings = createSqlQuery_training_participants_by_trainings();


	
																								;

																											

$tdatatraining_participants_by_trainings[".sqlquery"] = $queryData_training_participants_by_trainings;



$tdatatraining_participants_by_trainings[".hasEvents"] = false;

?>