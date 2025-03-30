<?php
$tdataevent_participants = array();
$tdataevent_participants[".searchableFields"] = array();
$tdataevent_participants[".ShortName"] = "event_participants";
$tdataevent_participants[".OwnerID"] = "";
$tdataevent_participants[".OriginalTable"] = "event_participants";


$tdataevent_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataevent_participants[".originalPagesByType"] = $tdataevent_participants[".pagesByType"];
$tdataevent_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataevent_participants[".originalPages"] = $tdataevent_participants[".pages"];
$tdataevent_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$fieldLabelsevent_participants["English"]["Sex"] = "Sex";
	$fieldToolTipsevent_participants["English"]["Sex"] = "";
	$placeHoldersevent_participants["English"]["Sex"] = "";
	$fieldLabelsevent_participants["English"]["Event_Round"] = "Event Round";
	$fieldToolTipsevent_participants["English"]["Event_Round"] = "";
	$placeHoldersevent_participants["English"]["Event_Round"] = "";
	$fieldLabelsevent_participants["English"]["Event_Organizer"] = "Event Organizer";
	$fieldToolTipsevent_participants["English"]["Event_Organizer"] = "";
	$placeHoldersevent_participants["English"]["Event_Organizer"] = "";
	$fieldLabelsevent_participants["English"]["Event_Note"] = "Event Note";
	$fieldToolTipsevent_participants["English"]["Event_Note"] = "";
	$placeHoldersevent_participants["English"]["Event_Note"] = "";
	$fieldLabelsevent_participants["English"]["Full_Name"] = "Full Name";
	$fieldToolTipsevent_participants["English"]["Full_Name"] = "";
	$placeHoldersevent_participants["English"]["Full_Name"] = "";
	$fieldLabelsevent_participants["English"]["DOB"] = "DOB";
	$fieldToolTipsevent_participants["English"]["DOB"] = "";
	$placeHoldersevent_participants["English"]["DOB"] = "";
	$fieldLabelsevent_participants["English"]["Region"] = "Region";
	$fieldToolTipsevent_participants["English"]["Region"] = "";
	$placeHoldersevent_participants["English"]["Region"] = "";
	$fieldLabelsevent_participants["English"]["City"] = "City";
	$fieldToolTipsevent_participants["English"]["City"] = "";
	$placeHoldersevent_participants["English"]["City"] = "";
	$fieldLabelsevent_participants["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipsevent_participants["English"]["Phone_Number"] = "";
	$placeHoldersevent_participants["English"]["Phone_Number"] = "";
	$fieldLabelsevent_participants["English"]["Email_Address"] = "Email Address";
	$fieldToolTipsevent_participants["English"]["Email_Address"] = "";
	$placeHoldersevent_participants["English"]["Email_Address"] = "";
	$fieldLabelsevent_participants["English"]["Event_Title"] = "Event Title";
	$fieldToolTipsevent_participants["English"]["Event_Title"] = "";
	$placeHoldersevent_participants["English"]["Event_Title"] = "";
	$fieldLabelsevent_participants["English"]["Event_Location"] = "Event Location";
	$fieldToolTipsevent_participants["English"]["Event_Location"] = "";
	$placeHoldersevent_participants["English"]["Event_Location"] = "";
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


$tdataevent_participants[".badgeColor"] = "e67349";


$tdataevent_participants[".allSearchFields"] = array();
$tdataevent_participants[".filterFields"] = array();
$tdataevent_participants[".requiredSearchFields"] = array();

$tdataevent_participants[".googleLikeFields"] = array();
$tdataevent_participants[".googleLikeFields"][] = "CandidateID";
$tdataevent_participants[".googleLikeFields"][] = "Full_Name";
$tdataevent_participants[".googleLikeFields"][] = "Sex";
$tdataevent_participants[".googleLikeFields"][] = "DOB";
$tdataevent_participants[".googleLikeFields"][] = "Region";
$tdataevent_participants[".googleLikeFields"][] = "City";
$tdataevent_participants[".googleLikeFields"][] = "Phone_Number";
$tdataevent_participants[".googleLikeFields"][] = "Email_Address";
$tdataevent_participants[".googleLikeFields"][] = "EventID";
$tdataevent_participants[".googleLikeFields"][] = "Event_Title";
$tdataevent_participants[".googleLikeFields"][] = "Event_Round";
$tdataevent_participants[".googleLikeFields"][] = "Event_Start_Date";
$tdataevent_participants[".googleLikeFields"][] = "Event_End_Date";
$tdataevent_participants[".googleLikeFields"][] = "Event_Organizer";
$tdataevent_participants[".googleLikeFields"][] = "Event_Location";
$tdataevent_participants[".googleLikeFields"][] = "Event_Note";



$tdataevent_participants[".tableType"] = "list";

$tdataevent_participants[".printerPageOrientation"] = 0;
$tdataevent_participants[".nPrinterPageScale"] = 100;

$tdataevent_participants[".nPrinterSplitRecords"] = 40;

$tdataevent_participants[".geocodingEnabled"] = false;




$tdataevent_participants[".isDisplayLoading"] = true;






$tdataevent_participants[".pageSize"] = 20;

$tdataevent_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY
    c.CandidateID, e.EventName";
$tdataevent_participants[".strOrderBy"] = $tstrOrderBy;

$tdataevent_participants[".orderindexes"] = array();
	$tdataevent_participants[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "c.CandidateID");

	$tdataevent_participants[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "e.EventName");



$tdataevent_participants[".sqlHead"] = "SELECT c.CandidateID,      CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      e.EventID,      e.EventName AS Event_Title,      e.Event_Round,      e.Event_Start_Date,      e.Event_End_Date,      e.Event_Organizer,      e.Event_Location AS Event_Location,      e.Event_Note";
$tdataevent_participants[".sqlFrom"] = "FROM      candidates AS c  LEFT JOIN      events AS e  ON FIND_IN_SET(e.EventName, c.Dereja_Event_Services) > 0";
$tdataevent_participants[".sqlWhereExpr"] = "c.Dereja_Event_Services IS NOT NULL";
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
$tdataevent_participants[".Keys"] = $tableKeysevent_participants;


$tdataevent_participants[".hideMobileList"] = array();




//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","CandidateID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CandidateID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.CandidateID";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"EventID", 'lookupF'=>"Dereja_Event_Services");
	$edata["autoCompleteFields"][] = array('masterF'=>"StudentID", 'lookupF'=>"StudentID");
	$edata["autoCompleteFields"][] = array('masterF'=>"First_Name", 'lookupF'=>"First_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle_Name", 'lookupF'=>"Middle_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last_Name", 'lookupF'=>"Last_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone", 'lookupF'=>"Phone_Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email", 'lookupF'=>"Email_Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disability_Status", 'lookupF'=>"Disability_Status");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disability_Type", 'lookupF'=>"Disability_Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disability_Type_Other", 'lookupF'=>"Disability_Type_Other");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant_Type", 'lookupF'=>"Event_Participant_Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant_Field_of_Study", 'lookupF'=>"Field_Of_Study");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Full_Name";

	

	
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


	$tdataevent_participants["CandidateID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "CandidateID";
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("event_participants","Full_Name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Full_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name)";

	
	
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


	$tdataevent_participants["Full_Name"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Full_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Sex";

	
	
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
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","DOB");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "DOB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.DOB";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataevent_participants["DOB"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","Region");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Region";

	
	
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
	$edata["LookupTable"] = "regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "RegionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegionName";

	

	
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


	$tdataevent_participants["Region"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "City";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.City";

	
	
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
	$edata["LookupTable"] = "event_participants";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "City";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "City";

	

	
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


	$tdataevent_participants["City"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "City";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","Phone_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone_Number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Phone_Number";

	
	
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


	$tdataevent_participants["Phone_Number"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Phone_Number";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants","Email_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email_Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Email_Address";

	
	
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


	$tdataevent_participants["Email_Address"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Email_Address";
//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","EventID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EventID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.EventID";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "EventName";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "EventName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Event_Round";

	
		$edata["Multiselect"] = true;

	
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


	$tdataevent_participants["EventID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "EventID";
//	Event_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Event_Title";
	$fdata["GoodName"] = "Event_Title";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EventName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.EventName";

	
	
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

	
		
	$edata["LinkField"] = "EventName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EventName";

	

	
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


	$tdataevent_participants["Event_Title"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Title";
//	Event_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Event_Round";
	$fdata["GoodName"] = "Event_Round";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Round");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Event_Round";

		$fdata["sourceSingle"] = "Event_Round";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_Round";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Event_Round";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "EventID", "lookup" => "Event_Round" );

	
	

	
	
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


	$tdataevent_participants["Event_Round"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Round";
//	Event_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Event_Start_Date";
	$fdata["GoodName"] = "Event_Start_Date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_Start_Date";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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
	$fdata["Index"] = 13;
	$fdata["strName"] = "Event_End_Date";
	$fdata["GoodName"] = "Event_End_Date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_End_Date";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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
//	Event_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Event_Organizer";
	$fdata["GoodName"] = "Event_Organizer";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Organizer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Event_Organizer";

		$fdata["sourceSingle"] = "Event_Organizer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_Organizer";

	
	
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

	
		
	$edata["LinkField"] = "Event_Organizer";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Event_Organizer";

	

	
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


	$tdataevent_participants["Event_Organizer"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Organizer";
//	Event_Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Event_Location";
	$fdata["GoodName"] = "Event_Location";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Location");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Event_Location";

		$fdata["sourceSingle"] = "Event_Location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_Location";

	
	
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

	
		
	$edata["LinkField"] = "Event_Location";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Event_Location";

	

	
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


	$tdataevent_participants["Event_Location"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Location";
//	Event_Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Event_Note";
	$fdata["GoodName"] = "Event_Note";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Note");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Event_Note";

		$fdata["sourceSingle"] = "Event_Note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_Note";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataevent_participants["Event_Note"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Note";


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
$proto0["m_strFieldList"] = "c.CandidateID,      CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      e.EventID,      e.EventName AS Event_Title,      e.Event_Round,      e.Event_Start_Date,      e.Event_End_Date,      e.Event_Organizer,      e.Event_Location AS Event_Location,      e.Event_Note";
$proto0["m_strFrom"] = "FROM      candidates AS c  LEFT JOIN      events AS e  ON FIND_IN_SET(e.EventName, c.Dereja_Event_Services) > 0";
$proto0["m_strWhere"] = "c.Dereja_Event_Services IS NOT NULL";
$proto0["m_strOrderBy"] = "ORDER BY      c.CandidateID, e.EventName";
	
																								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "c.Dereja_Event_Services IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Event_Services",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IS NOT NULL";
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
	"m_strName" => "CandidateID",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto6["m_sql"] = "c.CandidateID";
$proto6["m_srcTableName"] = "event_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.First_Name"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(c.Middle_Name, '')"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Last_Name"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name)";
$proto8["m_srcTableName"] = "event_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Full_Name";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto15["m_sql"] = "c.Sex";
$proto15["m_srcTableName"] = "event_participants";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto17["m_sql"] = "c.DOB";
$proto17["m_srcTableName"] = "event_participants";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto19["m_sql"] = "c.Region";
$proto19["m_srcTableName"] = "event_participants";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto21["m_sql"] = "c.City";
$proto21["m_srcTableName"] = "event_participants";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto23["m_sql"] = "c.Phone_Number";
$proto23["m_srcTableName"] = "event_participants";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto25["m_sql"] = "c.Email_Address";
$proto25["m_srcTableName"] = "event_participants";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "EventID",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto27["m_sql"] = "e.EventID";
$proto27["m_srcTableName"] = "event_participants";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "EventName",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto29["m_sql"] = "e.EventName";
$proto29["m_srcTableName"] = "event_participants";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Event_Title";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Round",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto31["m_sql"] = "e.Event_Round";
$proto31["m_srcTableName"] = "event_participants";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto33["m_sql"] = "e.Event_Start_Date";
$proto33["m_srcTableName"] = "event_participants";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto35["m_sql"] = "e.Event_End_Date";
$proto35["m_srcTableName"] = "event_participants";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Organizer",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto37["m_sql"] = "e.Event_Organizer";
$proto37["m_srcTableName"] = "event_participants";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Location",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto39["m_sql"] = "e.Event_Location";
$proto39["m_srcTableName"] = "event_participants";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Event_Location";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Note",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto41["m_sql"] = "e.Event_Note";
$proto41["m_srcTableName"] = "event_participants";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "candidates";
$proto44["m_srcTableName"] = "event_participants";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "CandidateID";
$proto44["m_columns"][] = "StudentID";
$proto44["m_columns"][] = "First_Name";
$proto44["m_columns"][] = "Middle_Name";
$proto44["m_columns"][] = "Last_Name";
$proto44["m_columns"][] = "Sex";
$proto44["m_columns"][] = "DOB";
$proto44["m_columns"][] = "Region";
$proto44["m_columns"][] = "City";
$proto44["m_columns"][] = "Sub_City";
$proto44["m_columns"][] = "Zone";
$proto44["m_columns"][] = "Woreda";
$proto44["m_columns"][] = "Kebele";
$proto44["m_columns"][] = "House_No";
$proto44["m_columns"][] = "Phone_Number";
$proto44["m_columns"][] = "Phone_Number_Alternate";
$proto44["m_columns"][] = "Email_Address";
$proto44["m_columns"][] = "Disability_Status";
$proto44["m_columns"][] = "Disability_Type";
$proto44["m_columns"][] = "Disability_Type_Other";
$proto44["m_columns"][] = "Institution_Type";
$proto44["m_columns"][] = "Institution_Name";
$proto44["m_columns"][] = "Education_Level";
$proto44["m_columns"][] = "Department";
$proto44["m_columns"][] = "Minor";
$proto44["m_columns"][] = "Major";
$proto44["m_columns"][] = "Enrollement_Type";
$proto44["m_columns"][] = "Skills";
$proto44["m_columns"][] = "Languages";
$proto44["m_columns"][] = "English_Proficiency_Level";
$proto44["m_columns"][] = "Industry_Specific_Skills";
$proto44["m_columns"][] = "IT_Related_Skills";
$proto44["m_columns"][] = "Certifications";
$proto44["m_columns"][] = "Year_of_graduation";
$proto44["m_columns"][] = "Field_Of_Study";
$proto44["m_columns"][] = "GPA";
$proto44["m_columns"][] = "Intervention";
$proto44["m_columns"][] = "Campaign";
$proto44["m_columns"][] = "Attend_Employability_Skill";
$proto44["m_columns"][] = "DAAP_enrolled_1st Round";
$proto44["m_columns"][] = "DAAP_Completed";
$proto44["m_columns"][] = "DAAP_Completed_Courses";
$proto44["m_columns"][] = "Job_Fair_Clinic";
$proto44["m_columns"][] = "Job_Fair";
$proto44["m_columns"][] = "Exit_Exam_Score";
$proto44["m_columns"][] = "Exit_Exam_Status";
$proto44["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto44["m_columns"][] = "Upload_on_Tracker";
$proto44["m_columns"][] = "Upload_on_Website";
$proto44["m_columns"][] = "Work_Experience";
$proto44["m_columns"][] = "Joined_Dereja_Services";
$proto44["m_columns"][] = "Dereja_Services";
$proto44["m_columns"][] = "Program_In_Dereja";
$proto44["m_columns"][] = "Dereja_Training_Services";
$proto44["m_columns"][] = "Training_Start_Date";
$proto44["m_columns"][] = "Training_End_Date";
$proto44["m_columns"][] = "Dereja_Event_Services";
$proto44["m_columns"][] = "Event_Start_Date";
$proto44["m_columns"][] = "Event_End_Date";
$proto44["m_columns"][] = "Event_Participant_Type";
$proto44["m_columns"][] = "Dereja_web_profile_completion";
$proto44["m_columns"][] = "Dereja_Information_Source";
$proto44["m_columns"][] = "Employment_Status";
$proto44["m_columns"][] = "Employment_Company";
$proto44["m_columns"][] = "Employer_Sector";
$proto44["m_columns"][] = "Employment_Position";
$proto44["m_columns"][] = "Salary";
$proto44["m_columns"][] = "Career_Level_Of_Payment";
$proto44["m_columns"][] = "Placement_Type";
$proto44["m_columns"][] = "Placement_Duration";
$proto44["m_columns"][] = "Remark";
$proto44["m_columns"][] = "candidate_data";
$proto44["m_columns"][] = "Date";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "candidates AS c";
$proto43["m_alias"] = "c";
$proto43["m_srcTableName"] = "event_participants";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_LEFTJOIN";
			$proto48=array();
$proto48["m_strName"] = "events";
$proto48["m_srcTableName"] = "event_participants";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "EventID";
$proto48["m_columns"][] = "EventName";
$proto48["m_columns"][] = "Event_Round";
$proto48["m_columns"][] = "Event_Start_Date";
$proto48["m_columns"][] = "Event_End_Date";
$proto48["m_columns"][] = "Event_Organizer";
$proto48["m_columns"][] = "Event_Location";
$proto48["m_columns"][] = "Event_Note";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "LEFT JOIN      events AS e  ON FIND_IN_SET(e.EventName, c.Dereja_Event_Services) > 0";
$proto47["m_alias"] = "e";
$proto47["m_srcTableName"] = "event_participants";
$proto49=array();
$proto49["m_sql"] = "FIND_IN_SET(e.EventName, c.Dereja_Event_Services) > 0";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$proto50=array();
$proto50["m_functiontype"] = "SQLF_CUSTOM";
$proto50["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "e.EventName"
));

$proto50["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Dereja_Event_Services"
));

$proto50["m_arguments"][]=$obj;
$proto50["m_strFunctionName"] = "FIND_IN_SET";
$obj = new SQLFunctionCall($proto50);

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "> 0";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 1;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "EventName",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 1;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="event_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_event_participants = createSqlQuery_event_participants();


	
																								;

																

$tdataevent_participants[".sqlquery"] = $queryData_event_participants;



$tdataevent_participants[".hasEvents"] = false;

?>