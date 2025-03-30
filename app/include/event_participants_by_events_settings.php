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
	$fieldLabelsevent_participants_by_events["English"]["Sex"] = "Sex";
	$fieldToolTipsevent_participants_by_events["English"]["Sex"] = "";
	$placeHoldersevent_participants_by_events["English"]["Sex"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Region"] = "Region";
	$fieldToolTipsevent_participants_by_events["English"]["Region"] = "";
	$placeHoldersevent_participants_by_events["English"]["Region"] = "";
	$fieldLabelsevent_participants_by_events["English"]["CandidateID"] = "Candidates";
	$fieldToolTipsevent_participants_by_events["English"]["CandidateID"] = "";
	$placeHoldersevent_participants_by_events["English"]["CandidateID"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Full_Name"] = "Full Name";
	$fieldToolTipsevent_participants_by_events["English"]["Full_Name"] = "";
	$placeHoldersevent_participants_by_events["English"]["Full_Name"] = "";
	$fieldLabelsevent_participants_by_events["English"]["DOB"] = "DOB";
	$fieldToolTipsevent_participants_by_events["English"]["DOB"] = "";
	$placeHoldersevent_participants_by_events["English"]["DOB"] = "";
	$fieldLabelsevent_participants_by_events["English"]["City"] = "City";
	$fieldToolTipsevent_participants_by_events["English"]["City"] = "";
	$placeHoldersevent_participants_by_events["English"]["City"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipsevent_participants_by_events["English"]["Phone_Number"] = "";
	$placeHoldersevent_participants_by_events["English"]["Phone_Number"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Email_Address"] = "Email Address";
	$fieldToolTipsevent_participants_by_events["English"]["Email_Address"] = "";
	$placeHoldersevent_participants_by_events["English"]["Email_Address"] = "";
	$fieldLabelsevent_participants_by_events["English"]["EventID"] = "Events";
	$fieldToolTipsevent_participants_by_events["English"]["EventID"] = "";
	$placeHoldersevent_participants_by_events["English"]["EventID"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Title"] = "Event Title";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Title"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Title"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Round"] = "Event Round";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Round"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Round"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Start_Date"] = "Event Start Date";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Start_Date"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Start_Date"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_End_Date"] = "Event End Date";
	$fieldToolTipsevent_participants_by_events["English"]["Event_End_Date"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_End_Date"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Organizer"] = "Event Organizer";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Organizer"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Organizer"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Location"] = "Event Location";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Location"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Location"] = "";
	$fieldLabelsevent_participants_by_events["English"]["Event_Note"] = "Event Note";
	$fieldToolTipsevent_participants_by_events["English"]["Event_Note"] = "";
	$placeHoldersevent_participants_by_events["English"]["Event_Note"] = "";
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
$tdataevent_participants_by_events[".googleLikeFields"][] = "CandidateID";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Full_Name";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Sex";
$tdataevent_participants_by_events[".googleLikeFields"][] = "DOB";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Region";
$tdataevent_participants_by_events[".googleLikeFields"][] = "City";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Phone_Number";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Email_Address";
$tdataevent_participants_by_events[".googleLikeFields"][] = "EventID";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Title";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Round";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Start_Date";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_End_Date";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Organizer";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Location";
$tdataevent_participants_by_events[".googleLikeFields"][] = "Event_Note";



$tdataevent_participants_by_events[".tableType"] = "chart";

$tdataevent_participants_by_events[".printerPageOrientation"] = 0;
$tdataevent_participants_by_events[".nPrinterPageScale"] = 100;

$tdataevent_participants_by_events[".nPrinterSplitRecords"] = 40;

$tdataevent_participants_by_events[".geocodingEnabled"] = false;



// chart settings
$tdataevent_participants_by_events[".chartType"] = "2DColumn";
// end of chart settings

$tdataevent_participants_by_events[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY
    c.CandidateID, e.EventName";
$tdataevent_participants_by_events[".strOrderBy"] = $tstrOrderBy;

$tdataevent_participants_by_events[".orderindexes"] = array();
	$tdataevent_participants_by_events[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "c.CandidateID");

	$tdataevent_participants_by_events[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "e.EventName");



$tdataevent_participants_by_events[".sqlHead"] = "SELECT c.CandidateID,      CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      e.EventID,      e.EventName AS Event_Title,      e.Event_Round,      e.Event_Start_Date,      e.Event_End_Date,      e.Event_Organizer,      e.Event_Location AS Event_Location,      e.Event_Note";
$tdataevent_participants_by_events[".sqlFrom"] = "FROM      candidates AS c  LEFT JOIN      events AS e  ON FIND_IN_SET(e.EventName, c.Dereja_Event_Services) > 0";
$tdataevent_participants_by_events[".sqlWhereExpr"] = "e.EventName IS NOT NULL";
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
$tdataevent_participants_by_events[".Keys"] = $tableKeysevent_participants_by_events;


$tdataevent_participants_by_events[".hideMobileList"] = array();




//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","CandidateID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CandidateID";

		$fdata["sourceSingle"] = "CandidateID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.CandidateID";

	
	
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
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Full_Name");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdataevent_participants_by_events["Full_Name"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Full_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

		$fdata["sourceSingle"] = "Sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Sex";

	
	
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
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","DOB");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataevent_participants_by_events["DOB"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Region");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataevent_participants_by_events["Region"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","City");
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


	$tdataevent_participants_by_events["City"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "City";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Phone_Number");
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


	$tdataevent_participants_by_events["Phone_Number"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Phone_Number";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Email_Address");
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


	$tdataevent_participants_by_events["Email_Address"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Email_Address";
//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","EventID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EventID";

		$fdata["sourceSingle"] = "EventID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.EventID";

	
	
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
//	Event_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Event_Title";
	$fdata["GoodName"] = "Event_Title";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Title");
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


	$tdataevent_participants_by_events["Event_Title"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_Title";
//	Event_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Event_Round";
	$fdata["GoodName"] = "Event_Round";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Round");
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


	$tdataevent_participants_by_events["Event_Round"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_Round";
//	Event_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Event_Start_Date";
	$fdata["GoodName"] = "Event_Start_Date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_Start_Date";

		$fdata["sourceSingle"] = "Event_Start_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_Start_Date";

	
	
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
	$fdata["Index"] = 13;
	$fdata["strName"] = "Event_End_Date";
	$fdata["GoodName"] = "Event_End_Date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Event_End_Date";

		$fdata["sourceSingle"] = "Event_End_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "e.Event_End_Date";

	
	
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
//	Event_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Event_Organizer";
	$fdata["GoodName"] = "Event_Organizer";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Organizer");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataevent_participants_by_events["Event_Organizer"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_Organizer";
//	Event_Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Event_Location";
	$fdata["GoodName"] = "Event_Location";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Location");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataevent_participants_by_events["Event_Location"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_Location";
//	Event_Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Event_Note";
	$fdata["GoodName"] = "Event_Note";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("event_participants_by_events","Event_Note");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataevent_participants_by_events["Event_Note"] = $fdata;
		$tdataevent_participants_by_events[".searchableFields"][] = "Event_Note";

$tdataevent_participants_by_events[".groupChart"] = true;
$tdataevent_participants_by_events[".chartLabelInterval"] = 0;
$tdataevent_participants_by_events[".chartLabelField"] = "Event_Title";
$tdataevent_participants_by_events[".chartSeries"] = array();
$tdataevent_participants_by_events[".chartSeries"][] = array(
	"field" => "EventID",
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
			<attr value="name">EventID</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="1">
		<attr value="name">Event_Title</attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="head">'.xmlencode("Number of candidates participated on event by event type").'</attr>
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
		<attr value="name">CandidateID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","CandidateID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="1">
		<attr value="name">Full_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Full_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="2">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="3">
		<attr value="name">DOB</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","DOB")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="4">
		<attr value="name">Region</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Region")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="5">
		<attr value="name">City</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","City")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="6">
		<attr value="name">Phone_Number</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Phone_Number")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="7">
		<attr value="name">Email_Address</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Email_Address")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="8">
		<attr value="name">EventID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","EventID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="9">
		<attr value="name">Event_Title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="10">
		<attr value="name">Event_Round</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Round")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="11">
		<attr value="name">Event_Start_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Start_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="12">
		<attr value="name">Event_End_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_End_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="13">
		<attr value="name">Event_Organizer</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Organizer")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="14">
		<attr value="name">Event_Location</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Location")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataevent_participants_by_events[".chartXml"] .= '<attr value="15">
		<attr value="name">Event_Note</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("event_participants_by_events","Event_Note")).'</attr>
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



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_event_participants_by_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "c.CandidateID,      CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      e.EventID,      e.EventName AS Event_Title,      e.Event_Round,      e.Event_Start_Date,      e.Event_End_Date,      e.Event_Organizer,      e.Event_Location AS Event_Location,      e.Event_Note";
$proto0["m_strFrom"] = "FROM      candidates AS c  LEFT JOIN      events AS e  ON FIND_IN_SET(e.EventName, c.Dereja_Event_Services) > 0";
$proto0["m_strWhere"] = "e.EventName IS NOT NULL";
$proto0["m_strOrderBy"] = "ORDER BY      c.CandidateID, e.EventName";
	
																								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "e.EventName IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EventName",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
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
	"m_srcTableName" => "event_participants_by_events"
));

$proto6["m_sql"] = "c.CandidateID";
$proto6["m_srcTableName"] = "event_participants_by_events";
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
$proto8["m_srcTableName"] = "event_participants_by_events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Full_Name";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants_by_events"
));

$proto15["m_sql"] = "c.Sex";
$proto15["m_srcTableName"] = "event_participants_by_events";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants_by_events"
));

$proto17["m_sql"] = "c.DOB";
$proto17["m_srcTableName"] = "event_participants_by_events";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants_by_events"
));

$proto19["m_sql"] = "c.Region";
$proto19["m_srcTableName"] = "event_participants_by_events";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants_by_events"
));

$proto21["m_sql"] = "c.City";
$proto21["m_srcTableName"] = "event_participants_by_events";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants_by_events"
));

$proto23["m_sql"] = "c.Phone_Number";
$proto23["m_srcTableName"] = "event_participants_by_events";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "c",
	"m_srcTableName" => "event_participants_by_events"
));

$proto25["m_sql"] = "c.Email_Address";
$proto25["m_srcTableName"] = "event_participants_by_events";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "EventID",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto27["m_sql"] = "e.EventID";
$proto27["m_srcTableName"] = "event_participants_by_events";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "EventName",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto29["m_sql"] = "e.EventName";
$proto29["m_srcTableName"] = "event_participants_by_events";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Event_Title";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Round",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto31["m_sql"] = "e.Event_Round";
$proto31["m_srcTableName"] = "event_participants_by_events";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto33["m_sql"] = "e.Event_Start_Date";
$proto33["m_srcTableName"] = "event_participants_by_events";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto35["m_sql"] = "e.Event_End_Date";
$proto35["m_srcTableName"] = "event_participants_by_events";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Organizer",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto37["m_sql"] = "e.Event_Organizer";
$proto37["m_srcTableName"] = "event_participants_by_events";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Location",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto39["m_sql"] = "e.Event_Location";
$proto39["m_srcTableName"] = "event_participants_by_events";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Event_Location";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Note",
	"m_strTable" => "e",
	"m_srcTableName" => "event_participants_by_events"
));

$proto41["m_sql"] = "e.Event_Note";
$proto41["m_srcTableName"] = "event_participants_by_events";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "candidates";
$proto44["m_srcTableName"] = "event_participants_by_events";
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
$proto43["m_srcTableName"] = "event_participants_by_events";
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
$proto48["m_srcTableName"] = "event_participants_by_events";
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
$proto47["m_srcTableName"] = "event_participants_by_events";
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
	"m_srcTableName" => "event_participants_by_events"
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
	"m_srcTableName" => "event_participants_by_events"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 1;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="event_participants_by_events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_event_participants_by_events = createSqlQuery_event_participants_by_events();


	
																								;

																

$tdataevent_participants_by_events[".sqlquery"] = $queryData_event_participants_by_events;



$tdataevent_participants_by_events[".hasEvents"] = false;

?>