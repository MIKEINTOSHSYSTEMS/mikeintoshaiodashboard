<?php
$tdataevent_participants = array();
$tdataevent_participants[".searchableFields"] = array();
$tdataevent_participants[".ShortName"] = "event_participants";
$tdataevent_participants[".OwnerID"] = "";
$tdataevent_participants[".OriginalTable"] = "event_participants";


$tdataevent_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevent_participants[".originalPagesByType"] = $tdataevent_participants[".pagesByType"];
$tdataevent_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevent_participants[".originalPages"] = $tdataevent_participants[".pages"];
$tdataevent_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevent_participants[".originalDefaultPages"] = $tdataevent_participants[".defaultPages"];

//	field labels
$fieldLabelsevent_participants = array();
$fieldToolTipsevent_participants = array();
$pageTitlesevent_participants = array();
$placeHoldersevent_participants = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevent_participants["English"] = array();
	$fieldToolTipsevent_participants["English"] = array();
	$placeHoldersevent_participants["English"] = array();
	$pageTitlesevent_participants["English"] = array();
	$fieldLabelsevent_participants["English"]["EventID"] = "Event ID";
	$fieldToolTipsevent_participants["English"]["EventID"] = "";
	$placeHoldersevent_participants["English"]["EventID"] = "";
	$fieldLabelsevent_participants["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipsevent_participants["English"]["CandidateID"] = "";
	$placeHoldersevent_participants["English"]["CandidateID"] = "";
	$fieldLabelsevent_participants["English"]["Event_Start_Date"] = "Event Start Date";
	$fieldToolTipsevent_participants["English"]["Event_Start_Date"] = "";
	$placeHoldersevent_participants["English"]["Event_Start_Date"] = "";
	$fieldLabelsevent_participants["English"]["Event_End_Date"] = "Event End Date";
	$fieldToolTipsevent_participants["English"]["Event_End_Date"] = "";
	$placeHoldersevent_participants["English"]["Event_End_Date"] = "";
	$fieldLabelsevent_participants["English"]["First_Name"] = "First Name";
	$fieldToolTipsevent_participants["English"]["First_Name"] = "";
	$placeHoldersevent_participants["English"]["First_Name"] = "";
	$fieldLabelsevent_participants["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipsevent_participants["English"]["Middle_Name"] = "";
	$placeHoldersevent_participants["English"]["Middle_Name"] = "";
	$fieldLabelsevent_participants["English"]["Last_Name"] = "Last Name";
	$fieldToolTipsevent_participants["English"]["Last_Name"] = "";
	$placeHoldersevent_participants["English"]["Last_Name"] = "";
	$fieldLabelsevent_participants["English"]["Phone"] = "Phone";
	$fieldToolTipsevent_participants["English"]["Phone"] = "";
	$placeHoldersevent_participants["English"]["Phone"] = "";
	$fieldLabelsevent_participants["English"]["Email"] = "Email";
	$fieldToolTipsevent_participants["English"]["Email"] = "";
	$placeHoldersevent_participants["English"]["Email"] = "";
	$fieldLabelsevent_participants["English"]["StudentID"] = "Student ID";
	$fieldToolTipsevent_participants["English"]["StudentID"] = "";
	$placeHoldersevent_participants["English"]["StudentID"] = "";
	$fieldLabelsevent_participants["English"]["Sex"] = "Sex";
	$fieldToolTipsevent_participants["English"]["Sex"] = "";
	$placeHoldersevent_participants["English"]["Sex"] = "";
	$fieldLabelsevent_participants["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipsevent_participants["English"]["Disability_Status"] = "";
	$placeHoldersevent_participants["English"]["Disability_Status"] = "";
	$fieldLabelsevent_participants["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipsevent_participants["English"]["Disability_Type"] = "";
	$placeHoldersevent_participants["English"]["Disability_Type"] = "";
	$fieldLabelsevent_participants["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipsevent_participants["English"]["Disability_Type_Other"] = "";
	$placeHoldersevent_participants["English"]["Disability_Type_Other"] = "";
	$fieldLabelsevent_participants["English"]["Participant_Type"] = "Participant Type";
	$fieldToolTipsevent_participants["English"]["Participant_Type"] = "";
	$placeHoldersevent_participants["English"]["Participant_Type"] = "";
	$fieldLabelsevent_participants["English"]["Participant_Field_of_Study"] = "Participant Field Of Study";
	$fieldToolTipsevent_participants["English"]["Participant_Field_of_Study"] = "";
	$placeHoldersevent_participants["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelsevent_participants["English"]["Participant_Organization_Type"] = "Participant Organization Type";
	$fieldToolTipsevent_participants["English"]["Participant_Organization_Type"] = "";
	$placeHoldersevent_participants["English"]["Participant_Organization_Type"] = "";
	$fieldLabelsevent_participants["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipsevent_participants["English"]["Participant_Organization_Name"] = "";
	$placeHoldersevent_participants["English"]["Participant_Organization_Name"] = "";
	$fieldLabelsevent_participants["English"]["Participant_Home_Address"] = "Participant Home Address";
	$fieldToolTipsevent_participants["English"]["Participant_Home_Address"] = "";
	$placeHoldersevent_participants["English"]["Participant_Home_Address"] = "";
	if (count($fieldToolTipsevent_participants["English"]))
		$tdataevent_participants[".isUseToolTips"] = true;
}


	$tdataevent_participants[".NCSearch"] = true;



$tdataevent_participants[".shortTableName"] = "event_participants";
$tdataevent_participants[".nSecOptions"] = 0;

$tdataevent_participants[".mainTableOwnerID"] = "";
$tdataevent_participants[".entityType"] = 0;
$tdataevent_participants[".connId"] = "deredevatderejadevmerqconsulta";


$tdataevent_participants[".strOriginalTableName"] = "event_participants";

	



$tdataevent_participants[".showAddInPopup"] = false;

$tdataevent_participants[".showEditInPopup"] = false;

$tdataevent_participants[".showViewInPopup"] = false;

$tdataevent_participants[".listAjax"] = false;
//	temporary
//$tdataevent_participants[".listAjax"] = false;

	$tdataevent_participants[".audit"] = true;

	$tdataevent_participants[".locking"] = false;


$pages = $tdataevent_participants[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevent_participants[".edit"] = true;
	$tdataevent_participants[".afterEditAction"] = 1;
	$tdataevent_participants[".closePopupAfterEdit"] = 1;
	$tdataevent_participants[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevent_participants[".add"] = true;
$tdataevent_participants[".afterAddAction"] = 1;
$tdataevent_participants[".closePopupAfterAdd"] = 1;
$tdataevent_participants[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevent_participants[".list"] = true;
}



$tdataevent_participants[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevent_participants[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevent_participants[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevent_participants[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevent_participants[".printFriendly"] = true;
}



$tdataevent_participants[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevent_participants[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevent_participants[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevent_participants[".isUseAjaxSuggest"] = true;



																					

$tdataevent_participants[".ajaxCodeSnippetAdded"] = false;

$tdataevent_participants[".buttonsAdded"] = false;

$tdataevent_participants[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevent_participants[".isUseTimeForSearch"] = false;


$tdataevent_participants[".badgeColor"] = "E67349";


$tdataevent_participants[".allSearchFields"] = array();
$tdataevent_participants[".filterFields"] = array();
$tdataevent_participants[".requiredSearchFields"] = array();

$tdataevent_participants[".googleLikeFields"] = array();
$tdataevent_participants[".googleLikeFields"][] = "EventID";
$tdataevent_participants[".googleLikeFields"][] = "CandidateID";
$tdataevent_participants[".googleLikeFields"][] = "StudentID";
$tdataevent_participants[".googleLikeFields"][] = "Event_Start_Date";
$tdataevent_participants[".googleLikeFields"][] = "Event_End_Date";
$tdataevent_participants[".googleLikeFields"][] = "First_Name";
$tdataevent_participants[".googleLikeFields"][] = "Middle_Name";
$tdataevent_participants[".googleLikeFields"][] = "Last_Name";
$tdataevent_participants[".googleLikeFields"][] = "Sex";
$tdataevent_participants[".googleLikeFields"][] = "Phone";
$tdataevent_participants[".googleLikeFields"][] = "Email";
$tdataevent_participants[".googleLikeFields"][] = "Disability_Status";
$tdataevent_participants[".googleLikeFields"][] = "Disability_Type";
$tdataevent_participants[".googleLikeFields"][] = "Disability_Type_Other";
$tdataevent_participants[".googleLikeFields"][] = "Participant_Type";
$tdataevent_participants[".googleLikeFields"][] = "Participant_Field_of_Study";
$tdataevent_participants[".googleLikeFields"][] = "Participant_Organization_Type";
$tdataevent_participants[".googleLikeFields"][] = "Participant_Organization_Name";
$tdataevent_participants[".googleLikeFields"][] = "Participant_Home_Address";



$tdataevent_participants[".tableType"] = "list";

$tdataevent_participants[".printerPageOrientation"] = 0;
$tdataevent_participants[".nPrinterPageScale"] = 100;

$tdataevent_participants[".nPrinterSplitRecords"] = 40;

$tdataevent_participants[".geocodingEnabled"] = false;




$tdataevent_participants[".isDisplayLoading"] = true;






$tdataevent_participants[".pageSize"] = 20;

$tdataevent_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevent_participants[".strOrderBy"] = $tstrOrderBy;

$tdataevent_participants[".orderindexes"] = array();


$tdataevent_participants[".sqlHead"] = "SELECT EventID,  	CandidateID,  	StudentID,  	Event_Start_Date,  	Event_End_Date,  	First_Name,  	Middle_Name,  	Last_Name,  	Sex,  	Phone,  	Email,  	Disability_Status,  	Disability_Type,  	Disability_Type_Other,  	Participant_Type,  	Participant_Field_of_Study,  	Participant_Organization_Type,  	Participant_Organization_Name,  	Participant_Home_Address";
$tdataevent_participants[".sqlFrom"] = "FROM event_participants";
$tdataevent_participants[".sqlWhereExpr"] = "";
$tdataevent_participants[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevent_participants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevent_participants[".arrGroupsPerPage"] = $arrGPP;

$tdataevent_participants[".highlightSearchResults"] = true;

$tableKeysevent_participants = array();
$tableKeysevent_participants[] = "EventID";
$tableKeysevent_participants[] = "CandidateID";
$tdataevent_participants[".Keys"] = $tableKeysevent_participants;


$tdataevent_participants[".hideMobileList"] = array();




//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","EventID");
	$fdata["FieldType"] = 3;


	
	
			

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
	$edata["LookupTable"] = "events";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EventID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "EventName";

	

	
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


	$tdataevent_participants["EventID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "EventID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","CandidateID");
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
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone", 'lookupF'=>"Phone_Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email", 'lookupF'=>"Email_Address");
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


	$tdataevent_participants["CandidateID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","StudentID");
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


	$tdataevent_participants["StudentID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "StudentID";
//	Event_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Event_Start_Date";
	$fdata["GoodName"] = "Event_Start_Date";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Start_Date";

	
	
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


	$tdataevent_participants["Event_Start_Date"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Start_Date";
//	Event_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Event_End_Date";
	$fdata["GoodName"] = "Event_End_Date";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_End_Date";

	
	
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


	$tdataevent_participants["Event_End_Date"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_End_Date";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","First_Name");
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


	$tdataevent_participants["First_Name"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Middle_Name");
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


	$tdataevent_participants["Middle_Name"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Last_Name");
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


	$tdataevent_participants["Last_Name"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Last_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Sex");
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


	$tdataevent_participants["Sex"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Sex";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Phone");
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


	$tdataevent_participants["Phone"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Phone";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Email");
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


	$tdataevent_participants["Email"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Email";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Disability_Status");
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


	$tdataevent_participants["Disability_Status"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Disability_Type");
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


	$tdataevent_participants["Disability_Type"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Disability_Type_Other");
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


	$tdataevent_participants["Disability_Type_Other"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Disability_Type_Other";
//	Participant_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Participant_Type";
	$fdata["GoodName"] = "Participant_Type";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Participant_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Type";

	
	
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


	$tdataevent_participants["Participant_Type"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Participant_Type";
//	Participant_Field_of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Participant_Field_of_Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Participant_Field_of_Study");
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


	$tdataevent_participants["Participant_Field_of_Study"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Participant_Field_of_Study";
//	Participant_Organization_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Participant_Organization_Type";
	$fdata["GoodName"] = "Participant_Organization_Type";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Participant_Organization_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Organization_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Organization_Type";

	
	
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


	$tdataevent_participants["Participant_Organization_Type"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Participant_Organization_Type";
//	Participant_Organization_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Participant_Organization_Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Participant_Organization_Name");
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


	$tdataevent_participants["Participant_Organization_Name"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Participant_Organization_Name";
//	Participant_Home_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Participant_Home_Address";
	$fdata["GoodName"] = "Participant_Home_Address";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Participant_Home_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Home_Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Home_Address";

	
	
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


	$tdataevent_participants["Participant_Home_Address"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Participant_Home_Address";


$tables_data["event_participants"]=&$tdataevent_participants;
$field_labels["event_participants"] = &$fieldLabelsevent_participants;
$fieldToolTips["event_participants"] = &$fieldToolTipsevent_participants;
$placeHolders["event_participants"] = &$placeHoldersevent_participants;
$page_titles["event_participants"] = &$pageTitlesevent_participants;


changeTextControlsToDate( "event_participants" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["event_participants"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["event_participants"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_participants"][0] = $masterParams;
				$masterTablesData["event_participants"][0]["masterKeys"] = array();
	$masterTablesData["event_participants"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants"][0]["detailKeys"] = array();
	$masterTablesData["event_participants"][0]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="events";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="events";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "events1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_participants"][1] = $masterParams;
				$masterTablesData["event_participants"][1]["masterKeys"] = array();
	$masterTablesData["event_participants"][1]["masterKeys"][]="EventID";
				$masterTablesData["event_participants"][1]["detailKeys"] = array();
	$masterTablesData["event_participants"][1]["detailKeys"][]="EventID";
		
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
	$masterTablesData["event_participants"][2] = $masterParams;
				$masterTablesData["event_participants"][2]["masterKeys"] = array();
	$masterTablesData["event_participants"][2]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants"][2]["detailKeys"] = array();
	$masterTablesData["event_participants"][2]["detailKeys"][]="CandidateID";
		
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
			$masterTablesData["event_participants"][3] = $masterParams;
				$masterTablesData["event_participants"][3]["masterKeys"] = array();
	$masterTablesData["event_participants"][3]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants"][3]["detailKeys"] = array();
	$masterTablesData["event_participants"][3]["detailKeys"][]="CandidateID";
		
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
			$masterTablesData["event_participants"][4] = $masterParams;
				$masterTablesData["event_participants"][4]["masterKeys"] = array();
	$masterTablesData["event_participants"][4]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants"][4]["detailKeys"] = array();
	$masterTablesData["event_participants"][4]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_by_gender";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_by_gender";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["event_participants"][5] = $masterParams;
				$masterTablesData["event_participants"][5]["masterKeys"] = array();
	$masterTablesData["event_participants"][5]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants"][5]["detailKeys"] = array();
	$masterTablesData["event_participants"][5]["detailKeys"][]="CandidateID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_event_participants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventID,  	CandidateID,  	StudentID,  	Event_Start_Date,  	Event_End_Date,  	First_Name,  	Middle_Name,  	Last_Name,  	Sex,  	Phone,  	Email,  	Disability_Status,  	Disability_Type,  	Disability_Type_Other,  	Participant_Type,  	Participant_Field_of_Study,  	Participant_Organization_Type,  	Participant_Organization_Name,  	Participant_Home_Address";
$proto0["m_strFrom"] = "FROM event_participants";
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
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto6["m_sql"] = "EventID";
$proto6["m_srcTableName"] = "event_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "event_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto10["m_sql"] = "StudentID";
$proto10["m_srcTableName"] = "event_participants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto12["m_sql"] = "Event_Start_Date";
$proto12["m_srcTableName"] = "event_participants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto14["m_sql"] = "Event_End_Date";
$proto14["m_srcTableName"] = "event_participants";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto16["m_sql"] = "First_Name";
$proto16["m_srcTableName"] = "event_participants";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto18["m_sql"] = "Middle_Name";
$proto18["m_srcTableName"] = "event_participants";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto20["m_sql"] = "Last_Name";
$proto20["m_srcTableName"] = "event_participants";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto22["m_sql"] = "Sex";
$proto22["m_srcTableName"] = "event_participants";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto24["m_sql"] = "Phone";
$proto24["m_srcTableName"] = "event_participants";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto26["m_sql"] = "Email";
$proto26["m_srcTableName"] = "event_participants";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto28["m_sql"] = "Disability_Status";
$proto28["m_srcTableName"] = "event_participants";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto30["m_sql"] = "Disability_Type";
$proto30["m_srcTableName"] = "event_participants";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto32["m_sql"] = "Disability_Type_Other";
$proto32["m_srcTableName"] = "event_participants";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto34["m_sql"] = "Participant_Type";
$proto34["m_srcTableName"] = "event_participants";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto36["m_sql"] = "Participant_Field_of_Study";
$proto36["m_srcTableName"] = "event_participants";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto38["m_sql"] = "Participant_Organization_Type";
$proto38["m_srcTableName"] = "event_participants";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto40["m_sql"] = "Participant_Organization_Name";
$proto40["m_srcTableName"] = "event_participants";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Home_Address",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto42["m_sql"] = "Participant_Home_Address";
$proto42["m_srcTableName"] = "event_participants";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "event_participants";
$proto45["m_srcTableName"] = "event_participants";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "EventID";
$proto45["m_columns"][] = "CandidateID";
$proto45["m_columns"][] = "StudentID";
$proto45["m_columns"][] = "Event_Start_Date";
$proto45["m_columns"][] = "Event_End_Date";
$proto45["m_columns"][] = "First_Name";
$proto45["m_columns"][] = "Middle_Name";
$proto45["m_columns"][] = "Last_Name";
$proto45["m_columns"][] = "Sex";
$proto45["m_columns"][] = "Phone";
$proto45["m_columns"][] = "Email";
$proto45["m_columns"][] = "Disability_Status";
$proto45["m_columns"][] = "Disability_Type";
$proto45["m_columns"][] = "Disability_Type_Other";
$proto45["m_columns"][] = "Participant_Type";
$proto45["m_columns"][] = "Participant_Field_of_Study";
$proto45["m_columns"][] = "Participant_Organization_Type";
$proto45["m_columns"][] = "Participant_Organization_Name";
$proto45["m_columns"][] = "Participant_Home_Address";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "event_participants";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "event_participants";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="event_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_event_participants = createSqlQuery_event_participants();


	
																								;

																			

$tdataevent_participants[".sqlquery"] = $queryData_event_participants;



$tdataevent_participants[".hasEvents"] = false;

?>