<?php
$tdataevent_participants_by_events = array();
$tdataevent_participants_by_events[".searchableFields"] = array();
$tdataevent_participants_by_events[".ShortName"] = "event_participants_by_events";
$tdataevent_participants_by_events[".OwnerID"] = "";
$tdataevent_participants_by_events[".OriginalTable"] = "event_participants";


$tdataevent_participants_by_events[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataevent_participants_by_events[".originalPagesByType"] = $tdataevent_participants_by_events[".pagesByType"];
$tdataevent_participants_by_events[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataevent_participants_by_events[".originalPages"] = $tdataevent_participants_by_events[".pages"];
$tdataevent_participants_by_events[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataevent_participants_by_events[".originalDefaultPages"] = $tdataevent_participants_by_events[".defaultPages"];

//	field labels
$fieldLabelsevent_participants_by_events = array();
$fieldToolTipsevent_participants_by_events = array();
$pageTitlesevent_participants_by_events = array();
$placeHoldersevent_participants_by_events = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevent_participants_by_events["English"] = array();
	$fieldToolTipsevent_participants_by_events["English"] = array();
	$placeHoldersevent_participants_by_events["English"] = array();
	$pageTitlesevent_participants_by_events["English"] = array();
	$fieldLabelsevent_participants_by_events["English"]["EventID"] = "Events";
	$fieldToolTipsevent_participants_by_events["English"]["EventID"] = "";
	$placeHoldersevent_participants_by_events["English"]["EventID"] = "";
	$fieldLabelsevent_participants_by_events["English"]["CandidateID"] = "Candidates";
	$fieldToolTipsevent_participants_by_events["English"]["CandidateID"] = "";
	$placeHoldersevent_participants_by_events["English"]["CandidateID"] = "";
	$fieldLabelsevent_participants_by_events["English"]["StudentID"] = "Student ID";
	$fieldToolTipsevent_participants_by_events["English"]["StudentID"] = "";
	$placeHoldersevent_participants_by_events["English"]["StudentID"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Start_Date"] = "Event Start Date";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Start_Date"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Start_Date"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_End_Date"] = "Event End Date";
	$fieldToolTipsevent_participants_by_events["English"]["Event_End_Date"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_End_Date"] = "";
	$fieldLabelsevent_participants_by_events["English"]["First_Name"] = "First Name";
	$fieldToolTipsevent_participants_by_events["English"]["First_Name"] = "";
	$placeHoldersevent_participants_by_events["English"]["First_Name"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipsevent_participants_by_events["English"]["Middle_Name"] = "";
	$placeHoldersevent_participants_by_events["English"]["Middle_Name"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Last_Name"] = "Last Name";
	$fieldToolTipsevent_participants_by_events["English"]["Last_Name"] = "";
	$placeHoldersevent_participants_by_events["English"]["Last_Name"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Sex"] = "Sex";
	$fieldToolTipsevent_participants_by_events["English"]["Sex"] = "";
	$placeHoldersevent_participants_by_events["English"]["Sex"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Phone"] = "Phone";
	$fieldToolTipsevent_participants_by_events["English"]["Phone"] = "";
	$placeHoldersevent_participants_by_events["English"]["Phone"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Email"] = "Email";
	$fieldToolTipsevent_participants_by_events["English"]["Email"] = "";
	$placeHoldersevent_participants_by_events["English"]["Email"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipsevent_participants_by_events["English"]["Disability_Status"] = "";
	$placeHoldersevent_participants_by_events["English"]["Disability_Status"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipsevent_participants_by_events["English"]["Disability_Type"] = "";
	$placeHoldersevent_participants_by_events["English"]["Disability_Type"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipsevent_participants_by_events["English"]["Disability_Type_Other"] = "";
	$placeHoldersevent_participants_by_events["English"]["Disability_Type_Other"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Participant_Type"] = "Participant Type";
	$fieldToolTipsevent_participants_by_events["English"]["Participant_Type"] = "";
	$placeHoldersevent_participants_by_events["English"]["Participant_Type"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Participant_Field_of_Study"] = "Participant Field Of Study";
	$fieldToolTipsevent_participants_by_events["English"]["Participant_Field_of_Study"] = "";
	$placeHoldersevent_participants_by_events["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Participant_Organization_Type"] = "Participant Organization Type";
	$fieldToolTipsevent_participants_by_events["English"]["Participant_Organization_Type"] = "";
	$placeHoldersevent_participants_by_events["English"]["Participant_Organization_Type"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipsevent_participants_by_events["English"]["Participant_Organization_Name"] = "";
	$placeHoldersevent_participants_by_events["English"]["Participant_Organization_Name"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Participant_Home_Address"] = "Participant Home Address";
	$fieldToolTipsevent_participants_by_events["English"]["Participant_Home_Address"] = "";
	$placeHoldersevent_participants_by_events["English"]["Participant_Home_Address"] = "";
	if (count($fieldToolTipsevent_participants_by_events["English"]))
		$tdataevent_participants_by_events[".isUseToolTips"] = true;
}


	$tdataevent_participants_by_events[".NCSearch"] = true;

	$tdataevent_participants_by_events[".ChartRefreshTime"] = 0;


$tdataevent_participants_by_events[".shortTableName"] = "event_participants_by_events";
$tdataevent_participants_by_events[".nSecOptions"] = 0;

$tdataevent_participants_by_events[".mainTableOwnerID"] = "";
$tdataevent_participants_by_events[".entityType"] = 3;
$tdataevent_participants_by_events[".connId"] = "deredevatderejadevmerqconsulta";


$tdataevent_participants_by_events[".strOriginalTableName"] = "event_participants";

	



$tdataevent_participants_by_events[".showAddInPopup"] = false;

$tdataevent_participants_by_events[".showEditInPopup"] = false;

$tdataevent_participants_by_events[".showViewInPopup"] = false;

$tdataevent_participants_by_events[".listAjax"] = false;
//	temporary
//$tdataevent_participants_by_events[".listAjax"] = false;

	$tdataevent_participants_by_events[".audit"] = false;

	$tdataevent_participants_by_events[".locking"] = false;


$pages = $tdataevent_participants_by_events[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevent_participants_by_events[".edit"] = true;
	$tdataevent_participants_by_events[".afterEditAction"] = 1;
	$tdataevent_participants_by_events[".closePopupAfterEdit"] = 1;
	$tdataevent_participants_by_events[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevent_participants_by_events[".add"] = true;
$tdataevent_participants_by_events[".afterAddAction"] = 1;
$tdataevent_participants_by_events[".closePopupAfterAdd"] = 1;
$tdataevent_participants_by_events[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevent_participants_by_events[".list"] = true;
}



$tdataevent_participants_by_events[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevent_participants_by_events[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevent_participants_by_events[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevent_participants_by_events[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevent_participants_by_events[".printFriendly"] = true;
}



$tdataevent_participants_by_events[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevent_participants_by_events[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevent_participants_by_events[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevent_participants_by_events[".isUseAjaxSuggest"] = true;



									

$tdataevent_participants_by_events[".ajaxCodeSnippetAdded"] = false;

$tdataevent_participants_by_events[".buttonsAdded"] = false;

$tdataevent_participants_by_events[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevent_participants_by_events[".isUseTimeForSearch"] = false;


$tdataevent_participants_by_events[".badgeColor"] = "6493EA";


$tdataevent_participants_by_events[".allSearchFields"] = array();
$tdataevent_participants_by_events[".filterFields"] = array();
$tdataevent_participants_by_events[".requiredSearchFields"] = array();

$tdataevent_participants_by_events[".googleLikeFields"] = array();
$tdataevent_participants_by_events[".googleLikeFields"][] = "EventID";
$tdataevent_participants_by_events[".googleLikeFields"][] = "CandidateID";
$tdataevent_participants_by_events[".googleLikeFields"][] = "StudentID";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Start_Date";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_End_Date";
$tdataevent_participants_by_events[".googleLikeFields"][] = "First_Name";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Middle_Name";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Last_Name";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Sex";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Phone";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Email";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Disability_Status";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Disability_Type";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Disability_Type_Other";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Participant_Type";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Participant_Field_of_Study";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Participant_Organization_Type";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Participant_Organization_Name";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Participant_Home_Address";



$tdataevent_participants_by_events[".tableType"] = "chart";

$tdataevent_participants_by_events[".printerPageOrientation"] = 0;
$tdataevent_participants_by_events[".nPrinterPageScale"] = 100;

$tdataevent_participants_by_events[".nPrinterSplitRecords"] = 40;

$tdataevent_participants_by_events[".geocodingEnabled"] = false;



// chart settings
$tdataevent_participants_by_events[".chartType"] = "2DColumn";
// end of chart settings

$tdataevent_participants_by_events[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdataevent_participants_by_events[".strOrderBy"] = $tstrOrderBy;

$tdataevent_participants_by_events[".orderindexes"] = array();


$tdataevent_participants_by_events[".sqlHead"] = "SELECT EventID,  CandidateID,  StudentID,  Event_Start_Date,  Event_End_Date,  First_Name,  Middle_Name,  Last_Name,  Sex,  Phone,  Email,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Participant_Type,  Participant_Field_of_Study,  Participant_Organization_Type,  Participant_Organization_Name,  Participant_Home_Address";
$tdataevent_participants_by_events[".sqlFrom"] = "FROM event_participants";
$tdataevent_participants_by_events[".sqlWhereExpr"] = "";
$tdataevent_participants_by_events[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevent_participants_by_events[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevent_participants_by_events[".arrGroupsPerPage"] = $arrGPP;

$tdataevent_participants_by_events[".highlightSearchResults"] = true;

$tableKeysevent_participants_by_events = array();
$tableKeysevent_participants_by_events[] = "EventID";
$tableKeysevent_participants_by_events[] = "CandidateID";
$tdataevent_participants_by_events[".Keys"] = $tableKeysevent_participants_by_events;


$tdataevent_participants_by_events[".hideMobileList"] = array();




//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","EventID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EventID";

		$fdata["sourceSingle"] = "EventID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventID";

	
	
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


	$tdataevent_participants_by_events["EventID"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "EventID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","CandidateID");
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


	$tdataevent_participants_by_events["CandidateID"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","StudentID");
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


	$tdataevent_participants_by_events["StudentID"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "StudentID";
//	Event_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Event_Start_Date";
	$fdata["GoodName"] = "Event_Start_Date";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_Start_Date";

		$fdata["sourceSingle"] = "Event_Start_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Start_Date";

	
	
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


	$tdataevent_participants_by_events["Event_Start_Date"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_Start_Date";
//	Event_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Event_End_Date";
	$fdata["GoodName"] = "Event_End_Date";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_End_Date";

		$fdata["sourceSingle"] = "Event_End_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_End_Date";

	
	
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


	$tdataevent_participants_by_events["Event_End_Date"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_End_Date";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","First_Name");
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


	$tdataevent_participants_by_events["First_Name"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Middle_Name");
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


	$tdataevent_participants_by_events["Middle_Name"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Last_Name");
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


	$tdataevent_participants_by_events["Last_Name"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Last_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Sex");
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


	$tdataevent_participants_by_events["Sex"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Sex";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Phone");
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


	$tdataevent_participants_by_events["Phone"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Phone";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Email");
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


	$tdataevent_participants_by_events["Email"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Email";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Disability_Status");
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


	$tdataevent_participants_by_events["Disability_Status"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Disability_Type");
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


	$tdataevent_participants_by_events["Disability_Type"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Disability_Type_Other");
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


	$tdataevent_participants_by_events["Disability_Type_Other"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Disability_Type_Other";
//	Participant_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Participant_Type";
	$fdata["GoodName"] = "Participant_Type";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Participant_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Type";

		$fdata["sourceSingle"] = "Participant_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Type";

	
	
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


	$tdataevent_participants_by_events["Participant_Type"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Participant_Type";
//	Participant_Field_of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Participant_Field_of_Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Participant_Field_of_Study");
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


	$tdataevent_participants_by_events["Participant_Field_of_Study"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Participant_Field_of_Study";
//	Participant_Organization_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Participant_Organization_Type";
	$fdata["GoodName"] = "Participant_Organization_Type";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Participant_Organization_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Organization_Type";

		$fdata["sourceSingle"] = "Participant_Organization_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Organization_Type";

	
	
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


	$tdataevent_participants_by_events["Participant_Organization_Type"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Participant_Organization_Type";
//	Participant_Organization_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Participant_Organization_Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Participant_Organization_Name");
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


	$tdataevent_participants_by_events["Participant_Organization_Name"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Participant_Organization_Name";
//	Participant_Home_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Participant_Home_Address";
	$fdata["GoodName"] = "Participant_Home_Address";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Participant_Home_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Participant_Home_Address";

		$fdata["sourceSingle"] = "Participant_Home_Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Participant_Home_Address";

	
	
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


	$tdataevent_participants_by_events["Participant_Home_Address"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Participant_Home_Address";

$tdataevent_participants_by_events[".groupChart"] = true;
$tdataevent_participants_by_events[".chartLabelInterval"] = 0;
$tdataevent_participants_by_events[".chartLabelField"] = "EventID";
$tdataevent_participants_by_events[".chartSeries"] = array();
$tdataevent_participants_by_events[".chartSeries"][] = array(
	"field" => "CandidateID",
	"total" => "COUNT"
);
	$tdataevent_participants_by_events[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">event_participants_by_events</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="0">
			<attr value="name">CandidateID</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="1">
		<attr value="name">EventID</attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="head">'.xmlencode("Event Participants By Events").'</attr>
<attr value="foot">'.xmlencode("Events").'</attr>
<attr value="y_axis_label">'.xmlencode("EventID").'</attr>


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
$tdataevent_participants_by_events[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="0">
		<attr value="name">EventID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","EventID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="1">
		<attr value="name">CandidateID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","CandidateID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="2">
		<attr value="name">StudentID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","StudentID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="3">
		<attr value="name">Event_Start_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Start_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="4">
		<attr value="name">Event_End_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_End_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="5">
		<attr value="name">First_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","First_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="6">
		<attr value="name">Middle_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Middle_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="7">
		<attr value="name">Last_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Last_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="8">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="9">
		<attr value="name">Phone</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Phone")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="10">
		<attr value="name">Email</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Email")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="11">
		<attr value="name">Disability_Status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Disability_Status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="12">
		<attr value="name">Disability_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Disability_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="13">
		<attr value="name">Disability_Type_Other</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Disability_Type_Other")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="14">
		<attr value="name">Participant_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Participant_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="15">
		<attr value="name">Participant_Field_of_Study</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Participant_Field_of_Study")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="16">
		<attr value="name">Participant_Organization_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Participant_Organization_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="17">
		<attr value="name">Participant_Organization_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Participant_Organization_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="18">
		<attr value="name">Participant_Home_Address</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Participant_Home_Address")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataevent_participants_by_events[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">event_participants_by_events</attr>
<attr value="short_table_name">event_participants_by_events</attr>
</attr>

</chart>';

$tables_data["event_participants_by_events"]=&$tdataevent_participants_by_events;
$field_labels["event_participants_by_events"] = &$fieldLabelsevent_participants_by_events;
$fieldToolTips["event_participants_by_events"] = &$fieldToolTipsevent_participants_by_events;
$placeHolders["event_participants_by_events"] = &$placeHoldersevent_participants_by_events;
$page_titles["event_participants_by_events"] = &$pageTitlesevent_participants_by_events;


changeTextControlsToDate( "event_participants_by_events" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["event_participants_by_events"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["event_participants_by_events"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_participants_by_events"][0] = $masterParams;
				$masterTablesData["event_participants_by_events"][0]["masterKeys"] = array();
	$masterTablesData["event_participants_by_events"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants_by_events"][0]["detailKeys"] = array();
	$masterTablesData["event_participants_by_events"][0]["detailKeys"][]="CandidateID";
		
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
					$masterTablesData["event_participants_by_events"][1] = $masterParams;
				$masterTablesData["event_participants_by_events"][1]["masterKeys"] = array();
	$masterTablesData["event_participants_by_events"][1]["masterKeys"][]="EventID";
				$masterTablesData["event_participants_by_events"][1]["detailKeys"] = array();
	$masterTablesData["event_participants_by_events"][1]["detailKeys"][]="EventID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_event_participants_by_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventID,  CandidateID,  StudentID,  Event_Start_Date,  Event_End_Date,  First_Name,  Middle_Name,  Last_Name,  Sex,  Phone,  Email,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Participant_Type,  Participant_Field_of_Study,  Participant_Organization_Type,  Participant_Organization_Name,  Participant_Home_Address";
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
	"m_srcTableName" => "event_participants_by_events"
));

$proto6["m_sql"] = "EventID";
$proto6["m_srcTableName"] = "event_participants_by_events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "event_participants_by_events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto10["m_sql"] = "StudentID";
$proto10["m_srcTableName"] = "event_participants_by_events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto12["m_sql"] = "Event_Start_Date";
$proto12["m_srcTableName"] = "event_participants_by_events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto14["m_sql"] = "Event_End_Date";
$proto14["m_srcTableName"] = "event_participants_by_events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto16["m_sql"] = "First_Name";
$proto16["m_srcTableName"] = "event_participants_by_events";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto18["m_sql"] = "Middle_Name";
$proto18["m_srcTableName"] = "event_participants_by_events";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto20["m_sql"] = "Last_Name";
$proto20["m_srcTableName"] = "event_participants_by_events";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto22["m_sql"] = "Sex";
$proto22["m_srcTableName"] = "event_participants_by_events";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto24["m_sql"] = "Phone";
$proto24["m_srcTableName"] = "event_participants_by_events";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto26["m_sql"] = "Email";
$proto26["m_srcTableName"] = "event_participants_by_events";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto28["m_sql"] = "Disability_Status";
$proto28["m_srcTableName"] = "event_participants_by_events";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto30["m_sql"] = "Disability_Type";
$proto30["m_srcTableName"] = "event_participants_by_events";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto32["m_sql"] = "Disability_Type_Other";
$proto32["m_srcTableName"] = "event_participants_by_events";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto34["m_sql"] = "Participant_Type";
$proto34["m_srcTableName"] = "event_participants_by_events";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto36["m_sql"] = "Participant_Field_of_Study";
$proto36["m_srcTableName"] = "event_participants_by_events";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto38["m_sql"] = "Participant_Organization_Type";
$proto38["m_srcTableName"] = "event_participants_by_events";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto40["m_sql"] = "Participant_Organization_Name";
$proto40["m_srcTableName"] = "event_participants_by_events";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant_Home_Address",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto42["m_sql"] = "Participant_Home_Address";
$proto42["m_srcTableName"] = "event_participants_by_events";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "event_participants";
$proto45["m_srcTableName"] = "event_participants_by_events";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "EventID";
$proto45["m_columns"][] = "CandidateID";
$proto45["m_columns"][] = "StudentID";
$proto45["m_columns"][] = "Event_Start_Date";
$proto45["m_columns"][] = "Event_End_Date";
$proto45["m_columns"][] = "Event_Round";
$proto45["m_columns"][] = "Event_Organizer";
$proto45["m_columns"][] = "Event_Location";
$proto45["m_columns"][] = "Event_Note";
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
$proto44["m_srcTableName"] = "event_participants_by_events";
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
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "EventID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Field_of_Study",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto78["m_column"]=$obj;
$obj = new SQLGroupByItem($proto78);

$proto0["m_groupby"][]=$obj;
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Type",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto80["m_column"]=$obj;
$obj = new SQLGroupByItem($proto80);

$proto0["m_groupby"][]=$obj;
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Organization_Name",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto82["m_column"]=$obj;
$obj = new SQLGroupByItem($proto82);

$proto0["m_groupby"][]=$obj;
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "Participant_Home_Address",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants_by_events"
));

$proto84["m_column"]=$obj;
$obj = new SQLGroupByItem($proto84);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="event_participants_by_events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_event_participants_by_events = createSqlQuery_event_participants_by_events();


	
																								;

																			

$tdataevent_participants_by_events[".sqlquery"] = $queryData_event_participants_by_events;



$tdataevent_participants_by_events[".hasEvents"] = false;

?>