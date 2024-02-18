<?php
$tdataevent_profile = array();
$tdataevent_profile[".searchableFields"] = array();
$tdataevent_profile[".ShortName"] = "event_profile";
$tdataevent_profile[".OwnerID"] = "";
$tdataevent_profile[".OriginalTable"] = "event_profile";


$tdataevent_profile[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevent_profile[".originalPagesByType"] = $tdataevent_profile[".pagesByType"];
$tdataevent_profile[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevent_profile[".originalPages"] = $tdataevent_profile[".pages"];
$tdataevent_profile[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevent_profile[".originalDefaultPages"] = $tdataevent_profile[".defaultPages"];

//	field labels
$fieldLabelsevent_profile = array();
$fieldToolTipsevent_profile = array();
$pageTitlesevent_profile = array();
$placeHoldersevent_profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevent_profile["English"] = array();
	$fieldToolTipsevent_profile["English"] = array();
	$placeHoldersevent_profile["English"] = array();
	$pageTitlesevent_profile["English"] = array();
	$fieldLabelsevent_profile["English"]["First_Name"] = "First Name";
	$fieldToolTipsevent_profile["English"]["First_Name"] = "";
	$placeHoldersevent_profile["English"]["First_Name"] = "";
	$fieldLabelsevent_profile["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipsevent_profile["English"]["Middle_Name"] = "";
	$placeHoldersevent_profile["English"]["Middle_Name"] = "";
	$fieldLabelsevent_profile["English"]["Last_Name"] = "Last Name";
	$fieldToolTipsevent_profile["English"]["Last_Name"] = "";
	$placeHoldersevent_profile["English"]["Last_Name"] = "";
	$fieldLabelsevent_profile["English"]["Sex"] = "Sex";
	$fieldToolTipsevent_profile["English"]["Sex"] = "";
	$placeHoldersevent_profile["English"]["Sex"] = "";
	$fieldLabelsevent_profile["English"]["Event_start_date"] = "Event start date";
	$fieldToolTipsevent_profile["English"]["Event_start_date"] = "";
	$placeHoldersevent_profile["English"]["Event_start_date"] = "";
	$fieldLabelsevent_profile["English"]["Event_end_date"] = "Event end date";
	$fieldToolTipsevent_profile["English"]["Event_end_date"] = "";
	$placeHoldersevent_profile["English"]["Event_end_date"] = "";
	$fieldLabelsevent_profile["English"]["Event_Name"] = "Event Name";
	$fieldToolTipsevent_profile["English"]["Event_Name"] = "";
	$placeHoldersevent_profile["English"]["Event_Name"] = "";
	$fieldLabelsevent_profile["English"]["Region"] = "Region";
	$fieldToolTipsevent_profile["English"]["Region"] = "";
	$placeHoldersevent_profile["English"]["Region"] = "";
	$fieldLabelsevent_profile["English"]["City"] = "City";
	$fieldToolTipsevent_profile["English"]["City"] = "";
	$placeHoldersevent_profile["English"]["City"] = "";
	$fieldLabelsevent_profile["English"]["Participant_Profession"] = "Participant Profession";
	$fieldToolTipsevent_profile["English"]["Participant_Profession"] = "";
	$placeHoldersevent_profile["English"]["Participant_Profession"] = "";
	$fieldLabelsevent_profile["English"]["Participant_Field_of_Study"] = "Participant Field of Study";
	$fieldToolTipsevent_profile["English"]["Participant_Field_of_Study"] = "";
	$placeHoldersevent_profile["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelsevent_profile["English"]["Participant_Organization_Type"] = "Participant Organization Type";
	$fieldToolTipsevent_profile["English"]["Participant_Organization_Type"] = "";
	$placeHoldersevent_profile["English"]["Participant_Organization_Type"] = "";
	$fieldLabelsevent_profile["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipsevent_profile["English"]["Participant_Organization_Name"] = "";
	$placeHoldersevent_profile["English"]["Participant_Organization_Name"] = "";
	$fieldLabelsevent_profile["English"]["Participant_Home_Address"] = "Participant Home Address";
	$fieldToolTipsevent_profile["English"]["Participant_Home_Address"] = "";
	$placeHoldersevent_profile["English"]["Participant_Home_Address"] = "";
	$fieldLabelsevent_profile["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipsevent_profile["English"]["Phone_Number"] = "";
	$placeHoldersevent_profile["English"]["Phone_Number"] = "";
	$fieldLabelsevent_profile["English"]["Email_Address"] = "Email Address";
	$fieldToolTipsevent_profile["English"]["Email_Address"] = "";
	$placeHoldersevent_profile["English"]["Email_Address"] = "";
	$fieldLabelsevent_profile["English"]["Disablity_Status"] = "Disablity Status";
	$fieldToolTipsevent_profile["English"]["Disablity_Status"] = "";
	$placeHoldersevent_profile["English"]["Disablity_Status"] = "";
	$fieldLabelsevent_profile["English"]["EventID"] = "Event ID";
	$fieldToolTipsevent_profile["English"]["EventID"] = "";
	$placeHoldersevent_profile["English"]["EventID"] = "";
	$fieldLabelsevent_profile["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipsevent_profile["English"]["CandidateID"] = "";
	$placeHoldersevent_profile["English"]["CandidateID"] = "";
	$fieldLabelsevent_profile["English"]["TrainingID"] = "Training ID";
	$fieldToolTipsevent_profile["English"]["TrainingID"] = "";
	$placeHoldersevent_profile["English"]["TrainingID"] = "";
	if (count($fieldToolTipsevent_profile["English"]))
		$tdataevent_profile[".isUseToolTips"] = true;
}


	$tdataevent_profile[".NCSearch"] = true;



$tdataevent_profile[".shortTableName"] = "event_profile";
$tdataevent_profile[".nSecOptions"] = 0;

$tdataevent_profile[".mainTableOwnerID"] = "";
$tdataevent_profile[".entityType"] = 0;
$tdataevent_profile[".connId"] = "deredevatderejadevmerqconsulta";


$tdataevent_profile[".strOriginalTableName"] = "event_profile";

	



$tdataevent_profile[".showAddInPopup"] = false;

$tdataevent_profile[".showEditInPopup"] = false;

$tdataevent_profile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevent_profile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevent_profile[".listAjax"] = false;
//	temporary
$tdataevent_profile[".listAjax"] = false;

	$tdataevent_profile[".audit"] = false;

	$tdataevent_profile[".locking"] = false;


$pages = $tdataevent_profile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevent_profile[".edit"] = true;
	$tdataevent_profile[".afterEditAction"] = 1;
	$tdataevent_profile[".closePopupAfterEdit"] = 1;
	$tdataevent_profile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevent_profile[".add"] = true;
$tdataevent_profile[".afterAddAction"] = 1;
$tdataevent_profile[".closePopupAfterAdd"] = 1;
$tdataevent_profile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevent_profile[".list"] = true;
}



$tdataevent_profile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevent_profile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevent_profile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevent_profile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevent_profile[".printFriendly"] = true;
}



$tdataevent_profile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevent_profile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevent_profile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevent_profile[".isUseAjaxSuggest"] = true;

$tdataevent_profile[".rowHighlite"] = true;





$tdataevent_profile[".ajaxCodeSnippetAdded"] = false;

$tdataevent_profile[".buttonsAdded"] = false;

$tdataevent_profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevent_profile[".isUseTimeForSearch"] = false;


$tdataevent_profile[".badgeColor"] = "5f9ea0";


$tdataevent_profile[".allSearchFields"] = array();
$tdataevent_profile[".filterFields"] = array();
$tdataevent_profile[".requiredSearchFields"] = array();

$tdataevent_profile[".googleLikeFields"] = array();
$tdataevent_profile[".googleLikeFields"][] = "EventID";
$tdataevent_profile[".googleLikeFields"][] = "CandidateID";
$tdataevent_profile[".googleLikeFields"][] = "TrainingID";
$tdataevent_profile[".googleLikeFields"][] = "First Name";
$tdataevent_profile[".googleLikeFields"][] = "Middle Name";
$tdataevent_profile[".googleLikeFields"][] = "Last Name";
$tdataevent_profile[".googleLikeFields"][] = "Sex";
$tdataevent_profile[".googleLikeFields"][] = "Event start date";
$tdataevent_profile[".googleLikeFields"][] = "Event end date";
$tdataevent_profile[".googleLikeFields"][] = "Event Name";
$tdataevent_profile[".googleLikeFields"][] = "Region";
$tdataevent_profile[".googleLikeFields"][] = "City";
$tdataevent_profile[".googleLikeFields"][] = "Participant Profession";
$tdataevent_profile[".googleLikeFields"][] = "Participant Field of Study";
$tdataevent_profile[".googleLikeFields"][] = "Participant Organization Type";
$tdataevent_profile[".googleLikeFields"][] = "Participant Organization Name";
$tdataevent_profile[".googleLikeFields"][] = "Participant Home Address";
$tdataevent_profile[".googleLikeFields"][] = "Phone Number";
$tdataevent_profile[".googleLikeFields"][] = "Email Address";
$tdataevent_profile[".googleLikeFields"][] = "Disablity Status";



$tdataevent_profile[".tableType"] = "list";

$tdataevent_profile[".printerPageOrientation"] = 0;
$tdataevent_profile[".nPrinterPageScale"] = 100;

$tdataevent_profile[".nPrinterSplitRecords"] = 40;

$tdataevent_profile[".geocodingEnabled"] = false;




$tdataevent_profile[".isDisplayLoading"] = true;






$tdataevent_profile[".pageSize"] = 20;

$tdataevent_profile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevent_profile[".strOrderBy"] = $tstrOrderBy;

$tdataevent_profile[".orderindexes"] = array();


$tdataevent_profile[".sqlHead"] = "SELECT EventID,  	CandidateID,  	TrainingID,  	`First Name`,  	`Middle Name`,  	`Last Name`,  	Sex,  	`Event start date`,  	`Event end date`,  	`Event Name`,  	Region,  	City,  	`Participant Profession`,  	`Participant Field of Study`,  	`Participant Organization Type`,  	`Participant Organization Name`,  	`Participant Home Address`,  	`Phone Number`,  	`Email Address`,  	`Disablity Status`";
$tdataevent_profile[".sqlFrom"] = "FROM event_profile";
$tdataevent_profile[".sqlWhereExpr"] = "";
$tdataevent_profile[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevent_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevent_profile[".arrGroupsPerPage"] = $arrGPP;

$tdataevent_profile[".highlightSearchResults"] = true;

$tableKeysevent_profile = array();
$tableKeysevent_profile[] = "EventID";
$tdataevent_profile[".Keys"] = $tableKeysevent_profile;


$tdataevent_profile[".hideMobileList"] = array();




//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","EventID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EventID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventID";

	
	
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
	$edata["LookupTable"] = "candidate_profile";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"CandidateID", 'lookupF'=>"CandidateID");
	$edata["autoCompleteFields"][] = array('masterF'=>"First Name", 'lookupF'=>"First Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle Name", 'lookupF'=>"Middle Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last Name", 'lookupF'=>"Last Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Region", 'lookupF'=>"Region");
	$edata["autoCompleteFields"][] = array('masterF'=>"City", 'lookupF'=>"City");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone Number", 'lookupF'=>"Phone Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email Address", 'lookupF'=>"Email Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disablity Status", 'lookupF'=>"Disablity Status");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["EventID"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "EventID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","CandidateID");
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
	$edata["LookupTable"] = "candidate_profile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"First Name", 'lookupF'=>"First Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle Name", 'lookupF'=>"Middle Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last Name", 'lookupF'=>"Last Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Region", 'lookupF'=>"Region");
	$edata["autoCompleteFields"][] = array('masterF'=>"City", 'lookupF'=>"City");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Field of Study", 'lookupF'=>"Participant Field of Study");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Organization Type", 'lookupF'=>"Participant Facility or Organization Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Organization Name", 'lookupF'=>"Participant Organization Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Home Address", 'lookupF'=>"Participant Home Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone Number", 'lookupF'=>"Phone Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email Address", 'lookupF'=>"Email Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disablity Status", 'lookupF'=>"Disablity Status");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdataevent_profile["CandidateID"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "CandidateID";
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","TrainingID");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["TrainingID"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "TrainingID";
//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","First_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "First Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`First Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["First Name"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "First Name";
//	Middle Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Middle Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Middle_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Middle Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Middle Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Middle Name"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Middle Name";
//	Last Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Last Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Last_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Last Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Last Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Last Name"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Last Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Sex");
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
	$edata["LookupValues"][] = "Female";
	$edata["LookupValues"][] = "Male";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Sex"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Sex";
//	Event start date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Event start date";
	$fdata["GoodName"] = "Event_start_date";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Event_start_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Event start date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Event start date`";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 7;
	$edata["LastYearFactor"] = 100;

	
	
	
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


	$tdataevent_profile["Event start date"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Event start date";
//	Event end date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Event end date";
	$fdata["GoodName"] = "Event_end_date";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Event_end_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Event end date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Event end date`";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 7;
	$edata["LastYearFactor"] = 100;

	
	
	
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


	$tdataevent_profile["Event end date"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Event end date";
//	Event Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Event Name";
	$fdata["GoodName"] = "Event_Name";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Event_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Event Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Event Name`";

	
	
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
	$edata["LookupTable"] = "Events";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EventNameID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SetEventName";

	

	
	$edata["LookupOrderBy"] = "EventNameID";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Event Name"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Event Name";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Region");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Region";

	
	
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
	$edata["LookupValues"][] = "Addis Ababa";
	$edata["LookupValues"][] = "Afar";
	$edata["LookupValues"][] = "Amhara";
	$edata["LookupValues"][] = "Benishangul-Gumuz";
	$edata["LookupValues"][] = "Central Ethiopia";
	$edata["LookupValues"][] = "Dire Dawa";
	$edata["LookupValues"][] = "Gambela";
	$edata["LookupValues"][] = "Harari";
	$edata["LookupValues"][] = "Oromia";
	$edata["LookupValues"][] = "Sidama";
	$edata["LookupValues"][] = "Somali";
	$edata["LookupValues"][] = "South Ethiopia";
	$edata["LookupValues"][] = "South West Ethiopia Peoples";
	$edata["LookupValues"][] = "Tigray";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevent_profile["Region"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","City");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "City";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "City";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["City"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "City";
//	Participant Profession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Participant Profession";
	$fdata["GoodName"] = "Participant_Profession";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Participant_Profession");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Profession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Profession`";

	
	
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
	$edata["LookupValues"][] = "Trainer/Teacher/Instructor/Tutor";
	$edata["LookupValues"][] = "Student";
	$edata["LookupValues"][] = "Administration/Managment related";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Participant Profession"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Participant Profession";
//	Participant Field of Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Participant Field of Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Participant_Field_of_Study");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Field of Study";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Field of Study`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Participant Field of Study"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Participant Field of Study";
//	Participant Organization Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Participant Organization Type";
	$fdata["GoodName"] = "Participant_Organization_Type";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Participant_Organization_Type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Organization Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Organization Type`";

	
	
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
	$edata["LookupValues"][] = "Private University";
	$edata["LookupValues"][] = "Public University ";
	$edata["LookupValues"][] = "Private commercial entry";
	$edata["LookupValues"][] = "TVET";
	$edata["LookupValues"][] = "Other Governmental organizations ";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Participant Organization Type"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Participant Organization Type";
//	Participant Organization Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Participant Organization Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Participant_Organization_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Organization Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Organization Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Participant Organization Name"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Participant Organization Name";
//	Participant Home Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Participant Home Address";
	$fdata["GoodName"] = "Participant_Home_Address";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Participant_Home_Address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Home Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Home Address`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Participant Home Address"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Participant Home Address";
//	Phone Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Phone Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Phone_Number");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Phone Number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Phone Number`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataevent_profile["Phone Number"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Phone Number";
//	Email Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Email Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Email_Address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Email Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Email Address`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdataevent_profile["Email Address"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Email Address";
//	Disablity Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Disablity Status";
	$fdata["GoodName"] = "Disablity_Status";
	$fdata["ownerTable"] = "event_profile";
	$fdata["Label"] = GetFieldLabel("event_profile","Disablity_Status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Disablity Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Disablity Status`";

	
	
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


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataevent_profile["Disablity Status"] = $fdata;
		$tdataevent_profile[".searchableFields"][] = "Disablity Status";


$tables_data["event_profile"]=&$tdataevent_profile;
$field_labels["event_profile"] = &$fieldLabelsevent_profile;
$fieldToolTips["event_profile"] = &$fieldToolTipsevent_profile;
$placeHolders["event_profile"] = &$placeHoldersevent_profile;
$page_titles["event_profile"] = &$pageTitlesevent_profile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["event_profile"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["event_profile"] = array();



	
				$strOriginalDetailsTable="candidate_profile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidate_profile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidate_profile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_profile"][0] = $masterParams;
				$masterTablesData["event_profile"][0]["masterKeys"] = array();
	$masterTablesData["event_profile"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Sex";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Region";
				$masterTablesData["event_profile"][0]["masterKeys"][]="City";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Phone Number";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Email Address";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Disablity Status";
				$masterTablesData["event_profile"][0]["masterKeys"][]="EventID";
				$masterTablesData["event_profile"][0]["masterKeys"][]="TrainingID";
				$masterTablesData["event_profile"][0]["masterKeys"][]="First Name";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Middle Name";
				$masterTablesData["event_profile"][0]["masterKeys"][]="Last Name";
				$masterTablesData["event_profile"][0]["detailKeys"] = array();
	$masterTablesData["event_profile"][0]["detailKeys"][]="CandidateID";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Sex";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Region";
				$masterTablesData["event_profile"][0]["detailKeys"][]="City";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Phone Number";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Email Address";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Disablity Status";
				$masterTablesData["event_profile"][0]["detailKeys"][]="EventID";
				$masterTablesData["event_profile"][0]["detailKeys"][]="TrainingID";
				$masterTablesData["event_profile"][0]["detailKeys"][]="First Name";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Middle Name";
				$masterTablesData["event_profile"][0]["detailKeys"][]="Last Name";
		
	
				$strOriginalDetailsTable="Events";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Events";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "events";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_profile"][1] = $masterParams;
				$masterTablesData["event_profile"][1]["masterKeys"] = array();
	$masterTablesData["event_profile"][1]["masterKeys"][]="SetEventName";
				$masterTablesData["event_profile"][1]["detailKeys"] = array();
	$masterTablesData["event_profile"][1]["detailKeys"][]="Event Name";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_event_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventID,  	CandidateID,  	TrainingID,  	`First Name`,  	`Middle Name`,  	`Last Name`,  	Sex,  	`Event start date`,  	`Event end date`,  	`Event Name`,  	Region,  	City,  	`Participant Profession`,  	`Participant Field of Study`,  	`Participant Organization Type`,  	`Participant Organization Name`,  	`Participant Home Address`,  	`Phone Number`,  	`Email Address`,  	`Disablity Status`";
$proto0["m_strFrom"] = "FROM event_profile";
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
	"m_strName" => "EventID",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto6["m_sql"] = "EventID";
$proto6["m_srcTableName"] = "event_profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "event_profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto10["m_sql"] = "TrainingID";
$proto10["m_srcTableName"] = "event_profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "First Name",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto12["m_sql"] = "`First Name`";
$proto12["m_srcTableName"] = "event_profile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle Name",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto14["m_sql"] = "`Middle Name`";
$proto14["m_srcTableName"] = "event_profile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Last Name",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto16["m_sql"] = "`Last Name`";
$proto16["m_srcTableName"] = "event_profile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto18["m_sql"] = "Sex";
$proto18["m_srcTableName"] = "event_profile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Event start date",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto20["m_sql"] = "`Event start date`";
$proto20["m_srcTableName"] = "event_profile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Event end date",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto22["m_sql"] = "`Event end date`";
$proto22["m_srcTableName"] = "event_profile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Event Name",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto24["m_sql"] = "`Event Name`";
$proto24["m_srcTableName"] = "event_profile";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto26["m_sql"] = "Region";
$proto26["m_srcTableName"] = "event_profile";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto28["m_sql"] = "City";
$proto28["m_srcTableName"] = "event_profile";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Profession",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto30["m_sql"] = "`Participant Profession`";
$proto30["m_srcTableName"] = "event_profile";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Field of Study",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto32["m_sql"] = "`Participant Field of Study`";
$proto32["m_srcTableName"] = "event_profile";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Organization Type",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto34["m_sql"] = "`Participant Organization Type`";
$proto34["m_srcTableName"] = "event_profile";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Organization Name",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto36["m_sql"] = "`Participant Organization Name`";
$proto36["m_srcTableName"] = "event_profile";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Home Address",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto38["m_sql"] = "`Participant Home Address`";
$proto38["m_srcTableName"] = "event_profile";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone Number",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto40["m_sql"] = "`Phone Number`";
$proto40["m_srcTableName"] = "event_profile";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Email Address",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto42["m_sql"] = "`Email Address`";
$proto42["m_srcTableName"] = "event_profile";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Disablity Status",
	"m_strTable" => "event_profile",
	"m_srcTableName" => "event_profile"
));

$proto44["m_sql"] = "`Disablity Status`";
$proto44["m_srcTableName"] = "event_profile";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "event_profile";
$proto47["m_srcTableName"] = "event_profile";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "EventID";
$proto47["m_columns"][] = "CandidateID";
$proto47["m_columns"][] = "TrainingID";
$proto47["m_columns"][] = "First Name";
$proto47["m_columns"][] = "Middle Name";
$proto47["m_columns"][] = "Last Name";
$proto47["m_columns"][] = "Sex";
$proto47["m_columns"][] = "Event start date";
$proto47["m_columns"][] = "Event end date";
$proto47["m_columns"][] = "Event Name";
$proto47["m_columns"][] = "Region";
$proto47["m_columns"][] = "City";
$proto47["m_columns"][] = "Participant Profession";
$proto47["m_columns"][] = "Participant Field of Study";
$proto47["m_columns"][] = "Participant Organization Type";
$proto47["m_columns"][] = "Participant Organization Name";
$proto47["m_columns"][] = "Participant Home Address";
$proto47["m_columns"][] = "Phone Number";
$proto47["m_columns"][] = "Email Address";
$proto47["m_columns"][] = "Disablity Status";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "event_profile";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "event_profile";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="event_profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_event_profile = createSqlQuery_event_profile();


	
		;

																				

$tdataevent_profile[".sqlquery"] = $queryData_event_profile;



$tableEvents["event_profile"] = new eventsBase;
$tdataevent_profile[".hasEvents"] = false;

?>