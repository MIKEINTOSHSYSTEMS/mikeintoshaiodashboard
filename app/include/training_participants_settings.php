<?php
$tdatatraining_participants = array();
$tdatatraining_participants[".searchableFields"] = array();
$tdatatraining_participants[".ShortName"] = "training_participants";
$tdatatraining_participants[".OwnerID"] = "";
$tdatatraining_participants[".OriginalTable"] = "training_participants";


$tdatatraining_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_participants[".originalPagesByType"] = $tdatatraining_participants[".pagesByType"];
$tdatatraining_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_participants[".originalPages"] = $tdatatraining_participants[".pages"];
$tdatatraining_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_participants[".originalDefaultPages"] = $tdatatraining_participants[".defaultPages"];

//	field labels
$fieldLabelstraining_participants = array();
$fieldToolTipstraining_participants = array();
$pageTitlestraining_participants = array();
$placeHolderstraining_participants = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participants["English"] = array();
	$fieldToolTipstraining_participants["English"] = array();
	$placeHolderstraining_participants["English"] = array();
	$pageTitlestraining_participants["English"] = array();
	$fieldLabelstraining_participants["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstraining_participants["English"]["TrainingID"] = "";
	$placeHolderstraining_participants["English"]["TrainingID"] = "";
	$fieldLabelstraining_participants["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipstraining_participants["English"]["CandidateID"] = "";
	$placeHolderstraining_participants["English"]["CandidateID"] = "";
	$fieldLabelstraining_participants["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_participants["English"]["Training_Organizer"] = "";
	$placeHolderstraining_participants["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_participants["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_participants["English"]["Training_Type"] = "";
	$placeHolderstraining_participants["English"]["Training_Type"] = "";
	$fieldLabelstraining_participants["English"]["Program_Area"] = "Program Area";
	$fieldToolTipstraining_participants["English"]["Program_Area"] = "";
	$placeHolderstraining_participants["English"]["Program_Area"] = "";
	$fieldLabelstraining_participants["English"]["Training_City_Town"] = "Training City Town";
	$fieldToolTipstraining_participants["English"]["Training_City_Town"] = "";
	$placeHolderstraining_participants["English"]["Training_City_Town"] = "";
	$fieldLabelstraining_participants["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_participants["English"]["Training_Venue"] = "";
	$placeHolderstraining_participants["English"]["Training_Venue"] = "";
	$fieldLabelstraining_participants["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstraining_participants["English"]["Training_Start_Date"] = "";
	$placeHolderstraining_participants["English"]["Training_Start_Date"] = "";
	$fieldLabelstraining_participants["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstraining_participants["English"]["Training_End_Date"] = "";
	$placeHolderstraining_participants["English"]["Training_End_Date"] = "";
	$fieldLabelstraining_participants["English"]["First_Name"] = "First Name";
	$fieldToolTipstraining_participants["English"]["First_Name"] = "";
	$placeHolderstraining_participants["English"]["First_Name"] = "";
	$fieldLabelstraining_participants["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipstraining_participants["English"]["Middle_Name"] = "";
	$placeHolderstraining_participants["English"]["Middle_Name"] = "";
	$fieldLabelstraining_participants["English"]["Last_Name"] = "Last Name";
	$fieldToolTipstraining_participants["English"]["Last_Name"] = "";
	$placeHolderstraining_participants["English"]["Last_Name"] = "";
	$fieldLabelstraining_participants["English"]["Email"] = "Email";
	$fieldToolTipstraining_participants["English"]["Email"] = "";
	$placeHolderstraining_participants["English"]["Email"] = "";
	$fieldLabelstraining_participants["English"]["Phone"] = "Phone";
	$fieldToolTipstraining_participants["English"]["Phone"] = "";
	$placeHolderstraining_participants["English"]["Phone"] = "";
	$fieldLabelstraining_participants["English"]["StudentID"] = "Student ID";
	$fieldToolTipstraining_participants["English"]["StudentID"] = "";
	$placeHolderstraining_participants["English"]["StudentID"] = "";
	$fieldLabelstraining_participants["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipstraining_participants["English"]["Disability_Status"] = "";
	$placeHolderstraining_participants["English"]["Disability_Status"] = "";
	$fieldLabelstraining_participants["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipstraining_participants["English"]["Disability_Type"] = "";
	$placeHolderstraining_participants["English"]["Disability_Type"] = "";
	$fieldLabelstraining_participants["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipstraining_participants["English"]["Disability_Type_Other"] = "";
	$placeHolderstraining_participants["English"]["Disability_Type_Other"] = "";
	$fieldLabelstraining_participants["English"]["Participant_Profession"] = "Participant Profession";
	$fieldToolTipstraining_participants["English"]["Participant_Profession"] = "";
	$placeHolderstraining_participants["English"]["Participant_Profession"] = "";
	$fieldLabelstraining_participants["English"]["Participant_Field_of_Study"] = "Participant Field Of Study";
	$fieldToolTipstraining_participants["English"]["Participant_Field_of_Study"] = "";
	$placeHolderstraining_participants["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelstraining_participants["English"]["Participant_Facility_Organization_Type"] = "Participant Facility Organization Type";
	$fieldToolTipstraining_participants["English"]["Participant_Facility_Organization_Type"] = "";
	$placeHolderstraining_participants["English"]["Participant_Facility_Organization_Type"] = "";
	$fieldLabelstraining_participants["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipstraining_participants["English"]["Participant_Organization_Name"] = "";
	$placeHolderstraining_participants["English"]["Participant_Organization_Name"] = "";
	$fieldLabelstraining_participants["English"]["Participants_Home_Address"] = "Participants Home Address";
	$fieldToolTipstraining_participants["English"]["Participants_Home_Address"] = "";
	$placeHolderstraining_participants["English"]["Participants_Home_Address"] = "";
	$fieldLabelstraining_participants["English"]["PreTest_Score"] = "PreTest Score";
	$fieldToolTipstraining_participants["English"]["PreTest_Score"] = "";
	$placeHolderstraining_participants["English"]["PreTest_Score"] = "";
	$fieldLabelstraining_participants["English"]["Skill_Test"] = "Skill Test";
	$fieldToolTipstraining_participants["English"]["Skill_Test"] = "";
	$placeHolderstraining_participants["English"]["Skill_Test"] = "";
	$fieldLabelstraining_participants["English"]["Post_Test_Score"] = "Post Test Score";
	$fieldToolTipstraining_participants["English"]["Post_Test_Score"] = "";
	$placeHolderstraining_participants["English"]["Post_Test_Score"] = "";
	$fieldLabelstraining_participants["English"]["Sex"] = "Sex";
	$fieldToolTipstraining_participants["English"]["Sex"] = "";
	$placeHolderstraining_participants["English"]["Sex"] = "";
	$fieldLabelstraining_participants["English"]["Full_Name"] = "Full Name";
	$fieldToolTipstraining_participants["English"]["Full_Name"] = "";
	$placeHolderstraining_participants["English"]["Full_Name"] = "";
	if (count($fieldToolTipstraining_participants["English"]))
		$tdatatraining_participants[".isUseToolTips"] = true;
}


	$tdatatraining_participants[".NCSearch"] = true;



$tdatatraining_participants[".shortTableName"] = "training_participants";
$tdatatraining_participants[".nSecOptions"] = 0;

$tdatatraining_participants[".mainTableOwnerID"] = "";
$tdatatraining_participants[".entityType"] = 0;
$tdatatraining_participants[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_participants[".strOriginalTableName"] = "training_participants";

	



$tdatatraining_participants[".showAddInPopup"] = false;

$tdatatraining_participants[".showEditInPopup"] = false;

$tdatatraining_participants[".showViewInPopup"] = false;

$tdatatraining_participants[".listAjax"] = false;
//	temporary
//$tdatatraining_participants[".listAjax"] = false;

	$tdatatraining_participants[".audit"] = true;

	$tdatatraining_participants[".locking"] = false;


$pages = $tdatatraining_participants[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participants[".edit"] = true;
	$tdatatraining_participants[".afterEditAction"] = 1;
	$tdatatraining_participants[".closePopupAfterEdit"] = 1;
	$tdatatraining_participants[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participants[".add"] = true;
$tdatatraining_participants[".afterAddAction"] = 1;
$tdatatraining_participants[".closePopupAfterAdd"] = 1;
$tdatatraining_participants[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participants[".list"] = true;
}



$tdatatraining_participants[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participants[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participants[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participants[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participants[".printFriendly"] = true;
}



$tdatatraining_participants[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participants[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participants[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participants[".isUseAjaxSuggest"] = true;



																		

$tdatatraining_participants[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants[".buttonsAdded"] = false;

$tdatatraining_participants[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants[".isUseTimeForSearch"] = false;


$tdatatraining_participants[".badgeColor"] = "4169e1";


$tdatatraining_participants[".allSearchFields"] = array();
$tdatatraining_participants[".filterFields"] = array();
$tdatatraining_participants[".requiredSearchFields"] = array();

$tdatatraining_participants[".googleLikeFields"] = array();
$tdatatraining_participants[".googleLikeFields"][] = "TrainingID";
$tdatatraining_participants[".googleLikeFields"][] = "CandidateID";
$tdatatraining_participants[".googleLikeFields"][] = "StudentID";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Organizer";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Type";
$tdatatraining_participants[".googleLikeFields"][] = "Program_Area";
$tdatatraining_participants[".googleLikeFields"][] = "Training_City_Town";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Venue";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Start_Date";
$tdatatraining_participants[".googleLikeFields"][] = "Training_End_Date";
$tdatatraining_participants[".googleLikeFields"][] = "First_Name";
$tdatatraining_participants[".googleLikeFields"][] = "Middle_Name";
$tdatatraining_participants[".googleLikeFields"][] = "Last_Name";
$tdatatraining_participants[".googleLikeFields"][] = "Full_Name";
$tdatatraining_participants[".googleLikeFields"][] = "Sex";
$tdatatraining_participants[".googleLikeFields"][] = "Email";
$tdatatraining_participants[".googleLikeFields"][] = "Phone";
$tdatatraining_participants[".googleLikeFields"][] = "Disability_Status";
$tdatatraining_participants[".googleLikeFields"][] = "Disability_Type";
$tdatatraining_participants[".googleLikeFields"][] = "Disability_Type_Other";
$tdatatraining_participants[".googleLikeFields"][] = "Participant_Profession";
$tdatatraining_participants[".googleLikeFields"][] = "Participant_Field_of_Study";
$tdatatraining_participants[".googleLikeFields"][] = "Participant_Facility_Organization_Type";
$tdatatraining_participants[".googleLikeFields"][] = "Participant_Organization_Name";
$tdatatraining_participants[".googleLikeFields"][] = "Participants_Home_Address";
$tdatatraining_participants[".googleLikeFields"][] = "PreTest_Score";
$tdatatraining_participants[".googleLikeFields"][] = "Skill_Test";
$tdatatraining_participants[".googleLikeFields"][] = "Post_Test_Score";



$tdatatraining_participants[".tableType"] = "list";

$tdatatraining_participants[".printerPageOrientation"] = 0;
$tdatatraining_participants[".nPrinterPageScale"] = 100;

$tdatatraining_participants[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants[".geocodingEnabled"] = false;




$tdatatraining_participants[".isDisplayLoading"] = true;






$tdatatraining_participants[".pageSize"] = 20;

$tdatatraining_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_participants[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants[".orderindexes"] = array();


$tdatatraining_participants[".sqlHead"] = "SELECT TrainingID,  	CandidateID,  	StudentID,  	Training_Organizer,  	Training_Type,  	Program_Area,  	Training_City_Town,  	Training_Venue,  	Training_Start_Date,  	Training_End_Date,  	First_Name,  	Middle_Name,  	Last_Name,  	concat(First_Name,' ',Middle_Name,' ',Last_Name) AS Full_Name,  	Sex,  	Email,  	Phone,  	Disability_Status,  	Disability_Type,  	Disability_Type_Other,  	Participant_Profession,  	Participant_Field_of_Study,  	Participant_Facility_Organization_Type,  	Participant_Organization_Name,  	Participants_Home_Address,  	PreTest_Score,  	Skill_Test,  	Post_Test_Score";
$tdatatraining_participants[".sqlFrom"] = "FROM training_participants";
$tdatatraining_participants[".sqlWhereExpr"] = "";
$tdatatraining_participants[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participants[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participants[".highlightSearchResults"] = true;

$tableKeystraining_participants = array();
$tableKeystraining_participants[] = "TrainingID";
$tableKeystraining_participants[] = "CandidateID";
$tdatatraining_participants[".Keys"] = $tableKeystraining_participants;


$tdatatraining_participants[".hideMobileList"] = array();




//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","TrainingID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TrainingID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["TrainingID"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "TrainingID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","CandidateID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CandidateID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CandidateID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["CandidateID"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","StudentID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "StudentID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StudentID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["StudentID"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "StudentID";
//	Training_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Training_Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Organizer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_Organizer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Organizer";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Training_Organizer"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Organizer";
//	Training_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Training_Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Training_Type"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Type";
//	Program_Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Program_Area";
	$fdata["GoodName"] = "Program_Area";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Program_Area");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Program_Area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Program_Area";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Program_Area"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Program_Area";
//	Training_City_Town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Training_City_Town";
	$fdata["GoodName"] = "Training_City_Town";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_City_Town");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_City_Town";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_City_Town";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Training_City_Town"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_City_Town";
//	Training_Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Training_Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Venue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Training_Venue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Venue";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Training_Venue"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Venue";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Start_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Training_Start_Date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_End_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Training_End_Date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_End_Date";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","First_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "First_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "First_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["First_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Middle_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Middle_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Middle_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Middle_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Last_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Last_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Last_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Last_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Last_Name";
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("training_participants","Full_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Full_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(First_Name,' ',Middle_Name,' ',Last_Name)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Full_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Full_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sex";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Sex"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Sex";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Email"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Email";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Phone"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Phone";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Disability_Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Disability_Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Disability_Status"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Disability_Type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Disability_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Disability_Type"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Disability_Type_Other");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Disability_Type_Other";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type_Other";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Disability_Type_Other"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Disability_Type_Other";
//	Participant_Profession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Participant_Profession";
	$fdata["GoodName"] = "Participant_Profession";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Participant_Profession");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Profession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Profession";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Participant_Profession"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Participant_Profession";
//	Participant_Field_of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Participant_Field_of_Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Participant_Field_of_Study");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Field_of_Study";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Field_of_Study";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Participant_Field_of_Study"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Participant_Field_of_Study";
//	Participant_Facility_Organization_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Participant_Facility_Organization_Type";
	$fdata["GoodName"] = "Participant_Facility_Organization_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Participant_Facility_Organization_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Facility_Organization_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Facility_Organization_Type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Participant_Facility_Organization_Type"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Participant_Facility_Organization_Type";
//	Participant_Organization_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Participant_Organization_Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Participant_Organization_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Organization_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Organization_Name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Participant_Organization_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Participant_Organization_Name";
//	Participants_Home_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Participants_Home_Address";
	$fdata["GoodName"] = "Participants_Home_Address";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Participants_Home_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participants_Home_Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participants_Home_Address";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Participants_Home_Address"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Participants_Home_Address";
//	PreTest_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PreTest_Score";
	$fdata["GoodName"] = "PreTest_Score";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","PreTest_Score");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PreTest_Score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PreTest_Score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["PreTest_Score"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "PreTest_Score";
//	Skill_Test
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Skill_Test";
	$fdata["GoodName"] = "Skill_Test";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Skill_Test");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Skill_Test";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Skill_Test";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Skill_Test"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Skill_Test";
//	Post_Test_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Post_Test_Score";
	$fdata["GoodName"] = "Post_Test_Score";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Post_Test_Score");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Post_Test_Score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Post_Test_Score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatraining_participants["Post_Test_Score"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Post_Test_Score";


$tables_data["training_participants"]=&$tdatatraining_participants;
$field_labels["training_participants"] = &$fieldLabelstraining_participants;
$fieldToolTips["training_participants"] = &$fieldToolTipstraining_participants;
$placeHolders["training_participants"] = &$placeHolderstraining_participants;
$page_titles["training_participants"] = &$pageTitlestraining_participants;


changeTextControlsToDate( "training_participants" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_participants"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_participants"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants"][0] = $masterParams;
				$masterTablesData["training_participants"][0]["masterKeys"] = array();
	$masterTablesData["training_participants"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][0]["detailKeys"] = array();
	$masterTablesData["training_participants"][0]["detailKeys"][]="CandidateID";
		
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
					$masterTablesData["training_participants"][1] = $masterParams;
				$masterTablesData["training_participants"][1]["masterKeys"] = array();
	$masterTablesData["training_participants"][1]["masterKeys"][]="TrainingID";
				$masterTablesData["training_participants"][1]["masterKeys"][]="Training_Start_Date";
				$masterTablesData["training_participants"][1]["masterKeys"][]="Training_End_Date";
				$masterTablesData["training_participants"][1]["detailKeys"] = array();
	$masterTablesData["training_participants"][1]["detailKeys"][]="TrainingID";
				$masterTablesData["training_participants"][1]["detailKeys"][]="Training_Start_Date";
				$masterTablesData["training_participants"][1]["detailKeys"][]="Training_End_Date";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_view";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_view";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["training_participants"][2] = $masterParams;
				$masterTablesData["training_participants"][2]["masterKeys"] = array();
	$masterTablesData["training_participants"][2]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][2]["detailKeys"] = array();
	$masterTablesData["training_participants"][2]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_by_region";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_by_region";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["training_participants"][3] = $masterParams;
				$masterTablesData["training_participants"][3]["masterKeys"] = array();
	$masterTablesData["training_participants"][3]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][3]["detailKeys"] = array();
	$masterTablesData["training_participants"][3]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_reports";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_reports";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["training_participants"][4] = $masterParams;
				$masterTablesData["training_participants"][4]["masterKeys"] = array();
	$masterTablesData["training_participants"][4]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][4]["detailKeys"] = array();
	$masterTablesData["training_participants"][4]["detailKeys"][]="CandidateID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,  	CandidateID,  	StudentID,  	Training_Organizer,  	Training_Type,  	Program_Area,  	Training_City_Town,  	Training_Venue,  	Training_Start_Date,  	Training_End_Date,  	First_Name,  	Middle_Name,  	Last_Name,  	concat(First_Name,' ',Middle_Name,' ',Last_Name) AS Full_Name,  	Sex,  	Email,  	Phone,  	Disability_Status,  	Disability_Type,  	Disability_Type_Other,  	Participant_Profession,  	Participant_Field_of_Study,  	Participant_Facility_Organization_Type,  	Participant_Organization_Name,  	Participants_Home_Address,  	PreTest_Score,  	Skill_Test,  	Post_Test_Score";
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
	"m_srcTableName" => "training_participants"
));

$proto6["m_sql"] = "TrainingID";
$proto6["m_srcTableName"] = "training_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "training_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto10["m_sql"] = "StudentID";
$proto10["m_srcTableName"] = "training_participants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Organizer",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto12["m_sql"] = "Training_Organizer";
$proto12["m_srcTableName"] = "training_participants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto14["m_sql"] = "Training_Type";
$proto14["m_srcTableName"] = "training_participants";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Program_Area",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto16["m_sql"] = "Program_Area";
$proto16["m_srcTableName"] = "training_participants";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_City_Town",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto18["m_sql"] = "Training_City_Town";
$proto18["m_srcTableName"] = "training_participants";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Venue",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto20["m_sql"] = "Training_Venue";
$proto20["m_srcTableName"] = "training_participants";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto22["m_sql"] = "Training_Start_Date";
$proto22["m_srcTableName"] = "training_participants";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto24["m_sql"] = "Training_End_Date";
$proto24["m_srcTableName"] = "training_participants";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto26["m_sql"] = "First_Name";
$proto26["m_srcTableName"] = "training_participants";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto28["m_sql"] = "Middle_Name";
$proto28["m_srcTableName"] = "training_participants";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto30["m_sql"] = "Last_Name";
$proto30["m_srcTableName"] = "training_participants";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "First_Name"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Middle_Name"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Last_Name"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "concat(First_Name,' ',Middle_Name,' ',Last_Name)";
$proto32["m_srcTableName"] = "training_participants";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "Full_Name";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto39["m_sql"] = "Sex";
$proto39["m_srcTableName"] = "training_participants";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto41["m_sql"] = "Email";
$proto41["m_srcTableName"] = "training_participants";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto43["m_sql"] = "Phone";
$proto43["m_srcTableName"] = "training_participants";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto45["m_sql"] = "Disability_Status";
$proto45["m_srcTableName"] = "training_participants";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto47["m_sql"] = "Disability_Type";
$proto47["m_srcTableName"] = "training_participants";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto49["m_sql"] = "Disability_Type_Other";
$proto49["m_srcTableName"] = "training_participants";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Profession",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto51["m_sql"] = "Participant_Profession";
$proto51["m_srcTableName"] = "training_participants";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto53["m_sql"] = "Participant_Field_of_Study";
$proto53["m_srcTableName"] = "training_participants";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Facility_Organization_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto55["m_sql"] = "Participant_Facility_Organization_Type";
$proto55["m_srcTableName"] = "training_participants";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto57["m_sql"] = "Participant_Organization_Name";
$proto57["m_srcTableName"] = "training_participants";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "Participants_Home_Address",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto59["m_sql"] = "Participants_Home_Address";
$proto59["m_srcTableName"] = "training_participants";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "PreTest_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto61["m_sql"] = "PreTest_Score";
$proto61["m_srcTableName"] = "training_participants";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "Skill_Test",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto63["m_sql"] = "Skill_Test";
$proto63["m_srcTableName"] = "training_participants";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Post_Test_Score",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto65["m_sql"] = "Post_Test_Score";
$proto65["m_srcTableName"] = "training_participants";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto67=array();
$proto67["m_link"] = "SQLL_MAIN";
			$proto68=array();
$proto68["m_strName"] = "training_participants";
$proto68["m_srcTableName"] = "training_participants";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "TrainingID";
$proto68["m_columns"][] = "CandidateID";
$proto68["m_columns"][] = "StudentID";
$proto68["m_columns"][] = "Training_Organizer";
$proto68["m_columns"][] = "Training_Type";
$proto68["m_columns"][] = "Program_Area";
$proto68["m_columns"][] = "Training_City_Town";
$proto68["m_columns"][] = "Training_Venue";
$proto68["m_columns"][] = "Training_Start_Date";
$proto68["m_columns"][] = "Training_End_Date";
$proto68["m_columns"][] = "First_Name";
$proto68["m_columns"][] = "Middle_Name";
$proto68["m_columns"][] = "Last_Name";
$proto68["m_columns"][] = "Sex";
$proto68["m_columns"][] = "Email";
$proto68["m_columns"][] = "Phone";
$proto68["m_columns"][] = "Disability_Status";
$proto68["m_columns"][] = "Disability_Type";
$proto68["m_columns"][] = "Disability_Type_Other";
$proto68["m_columns"][] = "Participant_Profession";
$proto68["m_columns"][] = "Participant_Field_of_Study";
$proto68["m_columns"][] = "Participant_Facility_Organization_Type";
$proto68["m_columns"][] = "Participant_Organization_Name";
$proto68["m_columns"][] = "Participants_Home_Address";
$proto68["m_columns"][] = "PreTest_Score";
$proto68["m_columns"][] = "Skill_Test";
$proto68["m_columns"][] = "Post_Test_Score";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "training_participants";
$proto67["m_alias"] = "";
$proto67["m_srcTableName"] = "training_participants";
$proto69=array();
$proto69["m_sql"] = "";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="training_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants = createSqlQuery_training_participants();


	
																								;

																												

$tdatatraining_participants[".sqlquery"] = $queryData_training_participants;



$tdatatraining_participants[".hasEvents"] = false;

?>