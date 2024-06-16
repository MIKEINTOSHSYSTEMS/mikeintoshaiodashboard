<?php
$tdatatraining_participants_view = array();
$tdatatraining_participants_view[".searchableFields"] = array();
$tdatatraining_participants_view[".ShortName"] = "training_participants_view";
$tdatatraining_participants_view[".OwnerID"] = "";
$tdatatraining_participants_view[".OriginalTable"] = "training_participants";


$tdatatraining_participants_view[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatatraining_participants_view[".originalPagesByType"] = $tdatatraining_participants_view[".pagesByType"];
$tdatatraining_participants_view[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatatraining_participants_view[".originalPages"] = $tdatatraining_participants_view[".pages"];
$tdatatraining_participants_view[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatatraining_participants_view[".originalDefaultPages"] = $tdatatraining_participants_view[".defaultPages"];

//	field labels
$fieldLabelstraining_participants_view = array();
$fieldToolTipstraining_participants_view = array();
$pageTitlestraining_participants_view = array();
$placeHolderstraining_participants_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participants_view["English"] = array();
	$fieldToolTipstraining_participants_view["English"] = array();
	$placeHolderstraining_participants_view["English"] = array();
	$pageTitlestraining_participants_view["English"] = array();
	$fieldLabelstraining_participants_view["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstraining_participants_view["English"]["TrainingID"] = "";
	$placeHolderstraining_participants_view["English"]["TrainingID"] = "";
	$fieldLabelstraining_participants_view["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipstraining_participants_view["English"]["CandidateID"] = "";
	$placeHolderstraining_participants_view["English"]["CandidateID"] = "";
	$fieldLabelstraining_participants_view["English"]["StudentID"] = "Student ID";
	$fieldToolTipstraining_participants_view["English"]["StudentID"] = "";
	$placeHolderstraining_participants_view["English"]["StudentID"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_participants_view["English"]["Training_Organizer"] = "";
	$placeHolderstraining_participants_view["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_participants_view["English"]["Training_Type"] = "";
	$placeHolderstraining_participants_view["English"]["Training_Type"] = "";
	$fieldLabelstraining_participants_view["English"]["Program_Area"] = "Program Area";
	$fieldToolTipstraining_participants_view["English"]["Program_Area"] = "";
	$placeHolderstraining_participants_view["English"]["Program_Area"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_City_Town"] = "Training City Town";
	$fieldToolTipstraining_participants_view["English"]["Training_City_Town"] = "";
	$placeHolderstraining_participants_view["English"]["Training_City_Town"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_participants_view["English"]["Training_Venue"] = "";
	$placeHolderstraining_participants_view["English"]["Training_Venue"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstraining_participants_view["English"]["Training_Start_Date"] = "";
	$placeHolderstraining_participants_view["English"]["Training_Start_Date"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstraining_participants_view["English"]["Training_End_Date"] = "";
	$placeHolderstraining_participants_view["English"]["Training_End_Date"] = "";
	$fieldLabelstraining_participants_view["English"]["First_Name"] = "First Name";
	$fieldToolTipstraining_participants_view["English"]["First_Name"] = "";
	$placeHolderstraining_participants_view["English"]["First_Name"] = "";
	$fieldLabelstraining_participants_view["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipstraining_participants_view["English"]["Middle_Name"] = "";
	$placeHolderstraining_participants_view["English"]["Middle_Name"] = "";
	$fieldLabelstraining_participants_view["English"]["Last_Name"] = "Last Name";
	$fieldToolTipstraining_participants_view["English"]["Last_Name"] = "";
	$placeHolderstraining_participants_view["English"]["Last_Name"] = "";
	$fieldLabelstraining_participants_view["English"]["Sex"] = "Sex";
	$fieldToolTipstraining_participants_view["English"]["Sex"] = "";
	$placeHolderstraining_participants_view["English"]["Sex"] = "";
	$fieldLabelstraining_participants_view["English"]["Email"] = "Email";
	$fieldToolTipstraining_participants_view["English"]["Email"] = "";
	$placeHolderstraining_participants_view["English"]["Email"] = "";
	$fieldLabelstraining_participants_view["English"]["Phone"] = "Phone";
	$fieldToolTipstraining_participants_view["English"]["Phone"] = "";
	$placeHolderstraining_participants_view["English"]["Phone"] = "";
	$fieldLabelstraining_participants_view["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipstraining_participants_view["English"]["Disability_Status"] = "";
	$placeHolderstraining_participants_view["English"]["Disability_Status"] = "";
	$fieldLabelstraining_participants_view["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipstraining_participants_view["English"]["Disability_Type"] = "";
	$placeHolderstraining_participants_view["English"]["Disability_Type"] = "";
	$fieldLabelstraining_participants_view["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipstraining_participants_view["English"]["Disability_Type_Other"] = "";
	$placeHolderstraining_participants_view["English"]["Disability_Type_Other"] = "";
	$fieldLabelstraining_participants_view["English"]["Participant_Profession"] = "Participant Profession";
	$fieldToolTipstraining_participants_view["English"]["Participant_Profession"] = "";
	$placeHolderstraining_participants_view["English"]["Participant_Profession"] = "";
	$fieldLabelstraining_participants_view["English"]["Participant_Field_of_Study"] = "Participant Field Of Study";
	$fieldToolTipstraining_participants_view["English"]["Participant_Field_of_Study"] = "";
	$placeHolderstraining_participants_view["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelstraining_participants_view["English"]["Participant_Facility_Organization_Type"] = "Participant Facility Organization Type";
	$fieldToolTipstraining_participants_view["English"]["Participant_Facility_Organization_Type"] = "";
	$placeHolderstraining_participants_view["English"]["Participant_Facility_Organization_Type"] = "";
	$fieldLabelstraining_participants_view["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipstraining_participants_view["English"]["Participant_Organization_Name"] = "";
	$placeHolderstraining_participants_view["English"]["Participant_Organization_Name"] = "";
	$fieldLabelstraining_participants_view["English"]["Participants_Home_Address"] = "Participants Home Address";
	$fieldToolTipstraining_participants_view["English"]["Participants_Home_Address"] = "";
	$placeHolderstraining_participants_view["English"]["Participants_Home_Address"] = "";
	$fieldLabelstraining_participants_view["English"]["PreTest_Score"] = "PreTest Score";
	$fieldToolTipstraining_participants_view["English"]["PreTest_Score"] = "";
	$placeHolderstraining_participants_view["English"]["PreTest_Score"] = "";
	$fieldLabelstraining_participants_view["English"]["Skill_Test"] = "Skill Test";
	$fieldToolTipstraining_participants_view["English"]["Skill_Test"] = "";
	$placeHolderstraining_participants_view["English"]["Skill_Test"] = "";
	$fieldLabelstraining_participants_view["English"]["Post_Test_Score"] = "Post Test Score";
	$fieldToolTipstraining_participants_view["English"]["Post_Test_Score"] = "";
	$placeHolderstraining_participants_view["English"]["Post_Test_Score"] = "";
	$fieldLabelstraining_participants_view["English"]["Training_Round"] = "Training Round";
	$fieldToolTipstraining_participants_view["English"]["Training_Round"] = "";
	$placeHolderstraining_participants_view["English"]["Training_Round"] = "";
	$fieldLabelstraining_participants_view["English"]["Date"] = "Date";
	$fieldToolTipstraining_participants_view["English"]["Date"] = "";
	$placeHolderstraining_participants_view["English"]["Date"] = "";
	if (count($fieldToolTipstraining_participants_view["English"]))
		$tdatatraining_participants_view[".isUseToolTips"] = true;
}


	$tdatatraining_participants_view[".NCSearch"] = true;



$tdatatraining_participants_view[".shortTableName"] = "training_participants_view";
$tdatatraining_participants_view[".nSecOptions"] = 0;

$tdatatraining_participants_view[".mainTableOwnerID"] = "";
$tdatatraining_participants_view[".entityType"] = 2;
$tdatatraining_participants_view[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_participants_view[".strOriginalTableName"] = "training_participants";

	



$tdatatraining_participants_view[".showAddInPopup"] = false;

$tdatatraining_participants_view[".showEditInPopup"] = false;

$tdatatraining_participants_view[".showViewInPopup"] = false;

$tdatatraining_participants_view[".listAjax"] = false;
//	temporary
//$tdatatraining_participants_view[".listAjax"] = false;

	$tdatatraining_participants_view[".audit"] = false;

	$tdatatraining_participants_view[".locking"] = false;


$pages = $tdatatraining_participants_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participants_view[".edit"] = true;
	$tdatatraining_participants_view[".afterEditAction"] = 1;
	$tdatatraining_participants_view[".closePopupAfterEdit"] = 1;
	$tdatatraining_participants_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participants_view[".add"] = true;
$tdatatraining_participants_view[".afterAddAction"] = 1;
$tdatatraining_participants_view[".closePopupAfterAdd"] = 1;
$tdatatraining_participants_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participants_view[".list"] = true;
}



$tdatatraining_participants_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participants_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participants_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participants_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participants_view[".printFriendly"] = true;
}



$tdatatraining_participants_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participants_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participants_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participants_view[".isUseAjaxSuggest"] = true;



									

$tdatatraining_participants_view[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants_view[".buttonsAdded"] = false;

$tdatatraining_participants_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants_view[".isUseTimeForSearch"] = false;


$tdatatraining_participants_view[".badgeColor"] = "EDCA00";


$tdatatraining_participants_view[".allSearchFields"] = array();
$tdatatraining_participants_view[".filterFields"] = array();
$tdatatraining_participants_view[".requiredSearchFields"] = array();

$tdatatraining_participants_view[".googleLikeFields"] = array();
$tdatatraining_participants_view[".googleLikeFields"][] = "TrainingID";
$tdatatraining_participants_view[".googleLikeFields"][] = "CandidateID";
$tdatatraining_participants_view[".googleLikeFields"][] = "StudentID";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_Organizer";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_Type";
$tdatatraining_participants_view[".googleLikeFields"][] = "Program_Area";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_City_Town";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_Venue";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_Start_Date";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_End_Date";
$tdatatraining_participants_view[".googleLikeFields"][] = "Training_Round";
$tdatatraining_participants_view[".googleLikeFields"][] = "First_Name";
$tdatatraining_participants_view[".googleLikeFields"][] = "Middle_Name";
$tdatatraining_participants_view[".googleLikeFields"][] = "Last_Name";
$tdatatraining_participants_view[".googleLikeFields"][] = "Sex";
$tdatatraining_participants_view[".googleLikeFields"][] = "Email";
$tdatatraining_participants_view[".googleLikeFields"][] = "Phone";
$tdatatraining_participants_view[".googleLikeFields"][] = "Disability_Status";
$tdatatraining_participants_view[".googleLikeFields"][] = "Disability_Type";
$tdatatraining_participants_view[".googleLikeFields"][] = "Disability_Type_Other";
$tdatatraining_participants_view[".googleLikeFields"][] = "Participant_Profession";
$tdatatraining_participants_view[".googleLikeFields"][] = "Participant_Field_of_Study";
$tdatatraining_participants_view[".googleLikeFields"][] = "Participant_Facility_Organization_Type";
$tdatatraining_participants_view[".googleLikeFields"][] = "Participant_Organization_Name";
$tdatatraining_participants_view[".googleLikeFields"][] = "Participants_Home_Address";
$tdatatraining_participants_view[".googleLikeFields"][] = "PreTest_Score";
$tdatatraining_participants_view[".googleLikeFields"][] = "Skill_Test";
$tdatatraining_participants_view[".googleLikeFields"][] = "Post_Test_Score";
$tdatatraining_participants_view[".googleLikeFields"][] = "Date";



$tdatatraining_participants_view[".tableType"] = "report";

$tdatatraining_participants_view[".printerPageOrientation"] = 0;
$tdatatraining_participants_view[".nPrinterPageScale"] = 100;

$tdatatraining_participants_view[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants_view[".geocodingEnabled"] = false;

//report settings

$tdatatraining_participants_view[".reportPrintGroupsPerPage"] = 3;
$tdatatraining_participants_view[".reportPrintRecordsPerPage"] = 40;

$tdatatraining_participants_view[".pageSizeGroups"] = 20;
$tdatatraining_participants_view[".pageSizeRecords"] = 20;


//end of report settings



$tdatatraining_participants_view[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatatraining_participants_view[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants_view[".orderindexes"] = array();


$tdatatraining_participants_view[".sqlHead"] = "SELECT TrainingID,  	CandidateID,  	StudentID,  	Training_Organizer,  	Training_Type,  	Program_Area,  	Training_City_Town,  	Training_Venue,  	Training_Start_Date,  	Training_End_Date,  	Training_Round,  	First_Name,  	Middle_Name,  	Last_Name,  	Sex,  	Email,  	Phone,  	Disability_Status,  	Disability_Type,  	Disability_Type_Other,  	Participant_Profession,  	Participant_Field_of_Study,  	Participant_Facility_Organization_Type,  	Participant_Organization_Name,  	Participants_Home_Address,  	PreTest_Score,  	Skill_Test,  	Post_Test_Score,  	`Date`";
$tdatatraining_participants_view[".sqlFrom"] = "FROM training_participants";
$tdatatraining_participants_view[".sqlWhereExpr"] = "";
$tdatatraining_participants_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participants_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participants_view[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participants_view[".highlightSearchResults"] = true;

$tableKeystraining_participants_view = array();
$tableKeystraining_participants_view[] = "TrainingID";
$tableKeystraining_participants_view[] = "CandidateID";
$tdatatraining_participants_view[".Keys"] = $tableKeystraining_participants_view;


$tdatatraining_participants_view[".hideMobileList"] = array();




//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","TrainingID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["TrainingID"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "TrainingID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","CandidateID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["CandidateID"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","StudentID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["StudentID"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "StudentID";
//	Training_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Training_Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_Organizer");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_Organizer"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_Organizer";
//	Training_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Training_Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_Type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_Type"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_Type";
//	Program_Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Program_Area";
	$fdata["GoodName"] = "Program_Area";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Program_Area");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Program_Area"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Program_Area";
//	Training_City_Town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Training_City_Town";
	$fdata["GoodName"] = "Training_City_Town";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_City_Town");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_City_Town"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_City_Town";
//	Training_Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Training_Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_Venue");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_Venue"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_Venue";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_Start_Date");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_Start_Date"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_End_Date");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_End_Date"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_End_Date";
//	Training_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Training_Round";
	$fdata["GoodName"] = "Training_Round";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Training_Round");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Training_Round";

		$fdata["sourceSingle"] = "Training_Round";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Round";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Training_Round"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Training_Round";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","First_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["First_Name"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Middle_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Middle_Name"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Last_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Last_Name"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Last_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Sex");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Sex"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Sex";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Email");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Email"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Email";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Phone");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Phone"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Phone";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Disability_Status");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Disability_Status"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Disability_Type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Disability_Type"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Disability_Type_Other");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Disability_Type_Other"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Disability_Type_Other";
//	Participant_Profession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Participant_Profession";
	$fdata["GoodName"] = "Participant_Profession";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Participant_Profession");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Participant_Profession"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Participant_Profession";
//	Participant_Field_of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Participant_Field_of_Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Participant_Field_of_Study");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Participant_Field_of_Study"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Participant_Field_of_Study";
//	Participant_Facility_Organization_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Participant_Facility_Organization_Type";
	$fdata["GoodName"] = "Participant_Facility_Organization_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Participant_Facility_Organization_Type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Participant_Facility_Organization_Type"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Participant_Facility_Organization_Type";
//	Participant_Organization_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Participant_Organization_Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Participant_Organization_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Participant_Organization_Name"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Participant_Organization_Name";
//	Participants_Home_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Participants_Home_Address";
	$fdata["GoodName"] = "Participants_Home_Address";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Participants_Home_Address");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Participants_Home_Address"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Participants_Home_Address";
//	PreTest_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PreTest_Score";
	$fdata["GoodName"] = "PreTest_Score";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","PreTest_Score");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["PreTest_Score"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "PreTest_Score";
//	Skill_Test
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Skill_Test";
	$fdata["GoodName"] = "Skill_Test";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Skill_Test");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Skill_Test"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Skill_Test";
//	Post_Test_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Post_Test_Score";
	$fdata["GoodName"] = "Post_Test_Score";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Post_Test_Score");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatatraining_participants_view["Post_Test_Score"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Post_Test_Score";
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants_view","Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Date";

		$fdata["sourceSingle"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatatraining_participants_view["Date"] = $fdata;
		$tdatatraining_participants_view[".searchableFields"][] = "Date";


$tables_data["training_participants_view"]=&$tdatatraining_participants_view;
$field_labels["training_participants_view"] = &$fieldLabelstraining_participants_view;
$fieldToolTips["training_participants_view"] = &$fieldToolTipstraining_participants_view;
$placeHolders["training_participants_view"] = &$placeHolderstraining_participants_view;
$page_titles["training_participants_view"] = &$pageTitlestraining_participants_view;


changeTextControlsToDate( "training_participants_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_participants_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_participants_view"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants_view"][0] = $masterParams;
				$masterTablesData["training_participants_view"][0]["masterKeys"] = array();
	$masterTablesData["training_participants_view"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants_view"][0]["detailKeys"] = array();
	$masterTablesData["training_participants_view"][0]["detailKeys"][]="CandidateID";
		
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
					$masterTablesData["training_participants_view"][1] = $masterParams;
				$masterTablesData["training_participants_view"][1]["masterKeys"] = array();
	$masterTablesData["training_participants_view"][1]["masterKeys"][]="TrainingID";
				$masterTablesData["training_participants_view"][1]["detailKeys"] = array();
	$masterTablesData["training_participants_view"][1]["detailKeys"][]="TrainingID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,  	CandidateID,  	StudentID,  	Training_Organizer,  	Training_Type,  	Program_Area,  	Training_City_Town,  	Training_Venue,  	Training_Start_Date,  	Training_End_Date,  	Training_Round,  	First_Name,  	Middle_Name,  	Last_Name,  	Sex,  	Email,  	Phone,  	Disability_Status,  	Disability_Type,  	Disability_Type_Other,  	Participant_Profession,  	Participant_Field_of_Study,  	Participant_Facility_Organization_Type,  	Participant_Organization_Name,  	Participants_Home_Address,  	PreTest_Score,  	Skill_Test,  	Post_Test_Score,  	`Date`";
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
	"m_srcTableName" => "training_participants_view"
));

$proto6["m_sql"] = "TrainingID";
$proto6["m_srcTableName"] = "training_participants_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "training_participants_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto10["m_sql"] = "StudentID";
$proto10["m_srcTableName"] = "training_participants_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Organizer",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto12["m_sql"] = "Training_Organizer";
$proto12["m_srcTableName"] = "training_participants_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto14["m_sql"] = "Training_Type";
$proto14["m_srcTableName"] = "training_participants_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Program_Area",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto16["m_sql"] = "Program_Area";
$proto16["m_srcTableName"] = "training_participants_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_City_Town",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto18["m_sql"] = "Training_City_Town";
$proto18["m_srcTableName"] = "training_participants_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Venue",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto20["m_sql"] = "Training_Venue";
$proto20["m_srcTableName"] = "training_participants_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto22["m_sql"] = "Training_Start_Date";
$proto22["m_srcTableName"] = "training_participants_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto24["m_sql"] = "Training_End_Date";
$proto24["m_srcTableName"] = "training_participants_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Round",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto26["m_sql"] = "Training_Round";
$proto26["m_srcTableName"] = "training_participants_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto28["m_sql"] = "First_Name";
$proto28["m_srcTableName"] = "training_participants_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto30["m_sql"] = "Middle_Name";
$proto30["m_srcTableName"] = "training_participants_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto32["m_sql"] = "Last_Name";
$proto32["m_srcTableName"] = "training_participants_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto34["m_sql"] = "Sex";
$proto34["m_srcTableName"] = "training_participants_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto36["m_sql"] = "Email";
$proto36["m_srcTableName"] = "training_participants_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto38["m_sql"] = "Phone";
$proto38["m_srcTableName"] = "training_participants_view";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto40["m_sql"] = "Disability_Status";
$proto40["m_srcTableName"] = "training_participants_view";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto42["m_sql"] = "Disability_Type";
$proto42["m_srcTableName"] = "training_participants_view";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto44["m_sql"] = "Disability_Type_Other";
$proto44["m_srcTableName"] = "training_participants_view";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Profession",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto46["m_sql"] = "Participant_Profession";
$proto46["m_srcTableName"] = "training_participants_view";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto48["m_sql"] = "Participant_Field_of_Study";
$proto48["m_srcTableName"] = "training_participants_view";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Facility_Organization_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto50["m_sql"] = "Participant_Facility_Organization_Type";
$proto50["m_srcTableName"] = "training_participants_view";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto52["m_sql"] = "Participant_Organization_Name";
$proto52["m_srcTableName"] = "training_participants_view";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Participants_Home_Address",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto54["m_sql"] = "Participants_Home_Address";
$proto54["m_srcTableName"] = "training_participants_view";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PreTest_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto56["m_sql"] = "PreTest_Score";
$proto56["m_srcTableName"] = "training_participants_view";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Skill_Test",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto58["m_sql"] = "Skill_Test";
$proto58["m_srcTableName"] = "training_participants_view";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Post_Test_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto60["m_sql"] = "Post_Test_Score";
$proto60["m_srcTableName"] = "training_participants_view";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants_view"
));

$proto62["m_sql"] = "`Date`";
$proto62["m_srcTableName"] = "training_participants_view";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "training_participants";
$proto65["m_srcTableName"] = "training_participants_view";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "TrainingID";
$proto65["m_columns"][] = "CandidateID";
$proto65["m_columns"][] = "StudentID";
$proto65["m_columns"][] = "Training_Organizer";
$proto65["m_columns"][] = "Training_Type";
$proto65["m_columns"][] = "Program_Area";
$proto65["m_columns"][] = "Training_City_Town";
$proto65["m_columns"][] = "Training_Venue";
$proto65["m_columns"][] = "Training_Start_Date";
$proto65["m_columns"][] = "Training_End_Date";
$proto65["m_columns"][] = "Training_Round";
$proto65["m_columns"][] = "First_Name";
$proto65["m_columns"][] = "Middle_Name";
$proto65["m_columns"][] = "Last_Name";
$proto65["m_columns"][] = "Sex";
$proto65["m_columns"][] = "Email";
$proto65["m_columns"][] = "Phone";
$proto65["m_columns"][] = "Disability_Status";
$proto65["m_columns"][] = "Disability_Type";
$proto65["m_columns"][] = "Disability_Type_Other";
$proto65["m_columns"][] = "Participant_Profession";
$proto65["m_columns"][] = "Participant_Field_of_Study";
$proto65["m_columns"][] = "Participant_Facility_Organization_Type";
$proto65["m_columns"][] = "Participant_Organization_Name";
$proto65["m_columns"][] = "Participants_Home_Address";
$proto65["m_columns"][] = "PreTest_Score";
$proto65["m_columns"][] = "Skill_Test";
$proto65["m_columns"][] = "Post_Test_Score";
$proto65["m_columns"][] = "Date";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "training_participants";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "training_participants_view";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="training_participants_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants_view = createSqlQuery_training_participants_view();


	
																								;

																													

$tdatatraining_participants_view[".sqlquery"] = $queryData_training_participants_view;



$tdatatraining_participants_view[".hasEvents"] = false;

?>