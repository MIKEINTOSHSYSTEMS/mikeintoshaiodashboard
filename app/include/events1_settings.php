<?php
$tdataevents1 = array();
$tdataevents1[".searchableFields"] = array();
$tdataevents1[".ShortName"] = "events1";
$tdataevents1[".OwnerID"] = "";
$tdataevents1[".OriginalTable"] = "events";


$tdataevents1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevents1[".originalPagesByType"] = $tdataevents1[".pagesByType"];
$tdataevents1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevents1[".originalPages"] = $tdataevents1[".pages"];
$tdataevents1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevents1[".originalDefaultPages"] = $tdataevents1[".defaultPages"];

//	field labels
$fieldLabelsevents1 = array();
$fieldToolTipsevents1 = array();
$pageTitlesevents1 = array();
$placeHoldersevents1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevents1["English"] = array();
	$fieldToolTipsevents1["English"] = array();
	$placeHoldersevents1["English"] = array();
	$pageTitlesevents1["English"] = array();
	$fieldLabelsevents1["English"]["EventID"] = "Event ID";
	$fieldToolTipsevents1["English"]["EventID"] = "";
	$placeHoldersevents1["English"]["EventID"] = "";
	$fieldLabelsevents1["English"]["EventName"] = "Event Name";
	$fieldToolTipsevents1["English"]["EventName"] = "";
	$placeHoldersevents1["English"]["EventName"] = "";
	$fieldLabelsevents1["English"]["Event_Round"] = "Event Round";
	$fieldToolTipsevents1["English"]["Event_Round"] = "";
	$placeHoldersevents1["English"]["Event_Round"] = "";
	$fieldLabelsevents1["English"]["Event_Start_Date"] = "Event Start Date";
	$fieldToolTipsevents1["English"]["Event_Start_Date"] = "";
	$placeHoldersevents1["English"]["Event_Start_Date"] = "";
	$fieldLabelsevents1["English"]["Event_End_Date"] = "Event End Date";
	$fieldToolTipsevents1["English"]["Event_End_Date"] = "";
	$placeHoldersevents1["English"]["Event_End_Date"] = "";
	$fieldLabelsevents1["English"]["Event_Organizer"] = "Event Organizer";
	$fieldToolTipsevents1["English"]["Event_Organizer"] = "";
	$placeHoldersevents1["English"]["Event_Organizer"] = "";
	$fieldLabelsevents1["English"]["Event_Location"] = "Event Location";
	$fieldToolTipsevents1["English"]["Event_Location"] = "";
	$placeHoldersevents1["English"]["Event_Location"] = "";
	$fieldLabelsevents1["English"]["Event_Note"] = "Event Note";
	$fieldToolTipsevents1["English"]["Event_Note"] = "";
	$placeHoldersevents1["English"]["Event_Note"] = "";
	if (count($fieldToolTipsevents1["English"]))
		$tdataevents1[".isUseToolTips"] = true;
}


	$tdataevents1[".NCSearch"] = true;



$tdataevents1[".shortTableName"] = "events1";
$tdataevents1[".nSecOptions"] = 0;

$tdataevents1[".mainTableOwnerID"] = "";
$tdataevents1[".entityType"] = 0;
$tdataevents1[".connId"] = "deredevatderejadevmerqconsulta";


$tdataevents1[".strOriginalTableName"] = "events";

	



$tdataevents1[".showAddInPopup"] = false;

$tdataevents1[".showEditInPopup"] = false;

$tdataevents1[".showViewInPopup"] = false;

$tdataevents1[".listAjax"] = false;
//	temporary
//$tdataevents1[".listAjax"] = false;

	$tdataevents1[".audit"] = true;

	$tdataevents1[".locking"] = false;


$pages = $tdataevents1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevents1[".edit"] = true;
	$tdataevents1[".afterEditAction"] = 1;
	$tdataevents1[".closePopupAfterEdit"] = 1;
	$tdataevents1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevents1[".add"] = true;
$tdataevents1[".afterAddAction"] = 1;
$tdataevents1[".closePopupAfterAdd"] = 1;
$tdataevents1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevents1[".list"] = true;
}



$tdataevents1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevents1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevents1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevents1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevents1[".printFriendly"] = true;
}



$tdataevents1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevents1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevents1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevents1[".isUseAjaxSuggest"] = true;



			

$tdataevents1[".ajaxCodeSnippetAdded"] = false;

$tdataevents1[".buttonsAdded"] = false;

$tdataevents1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevents1[".isUseTimeForSearch"] = false;


$tdataevents1[".badgeColor"] = "DAA520";


$tdataevents1[".allSearchFields"] = array();
$tdataevents1[".filterFields"] = array();
$tdataevents1[".requiredSearchFields"] = array();

$tdataevents1[".googleLikeFields"] = array();
$tdataevents1[".googleLikeFields"][] = "EventID";
$tdataevents1[".googleLikeFields"][] = "EventName";
$tdataevents1[".googleLikeFields"][] = "Event_Round";
$tdataevents1[".googleLikeFields"][] = "Event_Start_Date";
$tdataevents1[".googleLikeFields"][] = "Event_End_Date";
$tdataevents1[".googleLikeFields"][] = "Event_Organizer";
$tdataevents1[".googleLikeFields"][] = "Event_Location";
$tdataevents1[".googleLikeFields"][] = "Event_Note";



$tdataevents1[".tableType"] = "list";

$tdataevents1[".printerPageOrientation"] = 0;
$tdataevents1[".nPrinterPageScale"] = 100;

$tdataevents1[".nPrinterSplitRecords"] = 40;

$tdataevents1[".geocodingEnabled"] = false;




$tdataevents1[".isDisplayLoading"] = true;






$tdataevents1[".pageSize"] = 20;

$tdataevents1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataevents1[".strOrderBy"] = $tstrOrderBy;

$tdataevents1[".orderindexes"] = array();


$tdataevents1[".sqlHead"] = "SELECT EventID,  	EventName,  	Event_Round,  	Event_Start_Date,  	Event_End_Date,  	Event_Organizer,  	Event_Location,  	Event_Note";
$tdataevents1[".sqlFrom"] = "FROM events";
$tdataevents1[".sqlWhereExpr"] = "";
$tdataevents1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevents1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevents1[".arrGroupsPerPage"] = $arrGPP;

$tdataevents1[".highlightSearchResults"] = true;

$tableKeysevents1 = array();
$tableKeysevents1[] = "EventID";
$tdataevents1[".Keys"] = $tableKeysevents1;


$tdataevents1[".hideMobileList"] = array();




//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","EventID");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataevents1["EventID"] = $fdata;
		$tdataevents1[".searchableFields"][] = "EventID";
//	EventName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EventName";
	$fdata["GoodName"] = "EventName";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","EventName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EventName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataevents1["EventName"] = $fdata;
		$tdataevents1[".searchableFields"][] = "EventName";
//	Event_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Event_Round";
	$fdata["GoodName"] = "Event_Round";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","Event_Round");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Event_Round";

		$fdata["sourceSingle"] = "Event_Round";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Round";

	
	
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


	$tdataevents1["Event_Round"] = $fdata;
		$tdataevents1[".searchableFields"][] = "Event_Round";
//	Event_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Event_Start_Date";
	$fdata["GoodName"] = "Event_Start_Date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","Event_Start_Date");
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


	$tdataevents1["Event_Start_Date"] = $fdata;
		$tdataevents1[".searchableFields"][] = "Event_Start_Date";
//	Event_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Event_End_Date";
	$fdata["GoodName"] = "Event_End_Date";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","Event_End_Date");
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


	$tdataevents1["Event_End_Date"] = $fdata;
		$tdataevents1[".searchableFields"][] = "Event_End_Date";
//	Event_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Event_Organizer";
	$fdata["GoodName"] = "Event_Organizer";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","Event_Organizer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Event_Organizer";

		$fdata["sourceSingle"] = "Event_Organizer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Organizer";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataevents1["Event_Organizer"] = $fdata;
		$tdataevents1[".searchableFields"][] = "Event_Organizer";
//	Event_Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Event_Location";
	$fdata["GoodName"] = "Event_Location";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","Event_Location");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Event_Location";

		$fdata["sourceSingle"] = "Event_Location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Location";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataevents1["Event_Location"] = $fdata;
		$tdataevents1[".searchableFields"][] = "Event_Location";
//	Event_Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Event_Note";
	$fdata["GoodName"] = "Event_Note";
	$fdata["ownerTable"] = "events";
	$fdata["Label"] = GetFieldLabel("events","Event_Note");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Event_Note";

		$fdata["sourceSingle"] = "Event_Note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Note";

	
	
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


	$tdataevents1["Event_Note"] = $fdata;
		$tdataevents1[".searchableFields"][] = "Event_Note";


$tables_data["events"]=&$tdataevents1;
$field_labels["events"] = &$fieldLabelsevents1;
$fieldToolTips["events"] = &$fieldToolTipsevents1;
$placeHolders["events"] = &$placeHoldersevents1;
$page_titles["events"] = &$pageTitlesevents1;


changeTextControlsToDate( "events" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["events"] = array();
//	event_participants
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="event_participants";
		$detailsParam["dOriginalTable"] = "event_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "event_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("event_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["events"][$dIndex]["masterKeys"][]="EventID";

				$detailsTablesData["events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["events"][$dIndex]["detailKeys"][]="EventID";
//	dereja_event_services
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dereja_event_services";
		$detailsParam["dOriginalTable"] = "dereja_event_services";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dereja_event_services";
	$detailsParam["dCaptionTable"] = GetTableCaption("dereja_event_services");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["events"][$dIndex]["masterKeys"][]="EventID";

				$detailsTablesData["events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["events"][$dIndex]["detailKeys"][]="EventID";
//	event_participants_view
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="event_participants_view";
		$detailsParam["dOriginalTable"] = "event_participants";



		$detailsParam["dType"]=PAGE_REPORT;
	
		$detailsParam["dShortTable"] = "event_participants_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("event_participants_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["events"][$dIndex]["masterKeys"][]="EventID";

				$detailsTablesData["events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["events"][$dIndex]["detailKeys"][]="EventID";
//	event_participants_by_events
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="event_participants_by_events";
		$detailsParam["dOriginalTable"] = "event_participants";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "event_participants_by_events";
	$detailsParam["dCaptionTable"] = GetTableCaption("event_participants_by_events");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["events"][$dIndex]["masterKeys"][]="EventID";

				$detailsTablesData["events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["events"][$dIndex]["detailKeys"][]="EventID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["events"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_events1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventID,  	EventName,  	Event_Round,  	Event_Start_Date,  	Event_End_Date,  	Event_Organizer,  	Event_Location,  	Event_Note";
$proto0["m_strFrom"] = "FROM events";
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
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto6["m_sql"] = "EventID";
$proto6["m_srcTableName"] = "events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EventName",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto8["m_sql"] = "EventName";
$proto8["m_srcTableName"] = "events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Round",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto10["m_sql"] = "Event_Round";
$proto10["m_srcTableName"] = "events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto12["m_sql"] = "Event_Start_Date";
$proto12["m_srcTableName"] = "events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto14["m_sql"] = "Event_End_Date";
$proto14["m_srcTableName"] = "events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Organizer",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto16["m_sql"] = "Event_Organizer";
$proto16["m_srcTableName"] = "events";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Location",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto18["m_sql"] = "Event_Location";
$proto18["m_srcTableName"] = "events";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Note",
	"m_strTable" => "events",
	"m_srcTableName" => "events"
));

$proto20["m_sql"] = "Event_Note";
$proto20["m_srcTableName"] = "events";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "events";
$proto23["m_srcTableName"] = "events";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "EventID";
$proto23["m_columns"][] = "EventName";
$proto23["m_columns"][] = "Event_Round";
$proto23["m_columns"][] = "Event_Start_Date";
$proto23["m_columns"][] = "Event_End_Date";
$proto23["m_columns"][] = "Event_Organizer";
$proto23["m_columns"][] = "Event_Location";
$proto23["m_columns"][] = "Event_Note";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "events";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "events";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_events1 = createSqlQuery_events1();


	
																								;

								

$tdataevents1[".sqlquery"] = $queryData_events1;



$tdataevents1[".hasEvents"] = false;

?>