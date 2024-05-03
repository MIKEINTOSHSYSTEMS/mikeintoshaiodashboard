<?php
$tdatasv_surveys = array();
$tdatasv_surveys[".searchableFields"] = array();
$tdatasv_surveys[".ShortName"] = "sv_surveys";
$tdatasv_surveys[".OwnerID"] = "";
$tdatasv_surveys[".OriginalTable"] = "sv_surveys";


$tdatasv_surveys[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatasv_surveys[".originalPagesByType"] = $tdatasv_surveys[".pagesByType"];
$tdatasv_surveys[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatasv_surveys[".originalPages"] = $tdatasv_surveys[".pages"];
$tdatasv_surveys[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatasv_surveys[".originalDefaultPages"] = $tdatasv_surveys[".defaultPages"];

//	field labels
$fieldLabelssv_surveys = array();
$fieldToolTipssv_surveys = array();
$pageTitlessv_surveys = array();
$placeHolderssv_surveys = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_surveys["English"] = array();
	$fieldToolTipssv_surveys["English"] = array();
	$placeHolderssv_surveys["English"] = array();
	$pageTitlessv_surveys["English"] = array();
	$fieldLabelssv_surveys["English"]["id"] = "ID";
	$fieldToolTipssv_surveys["English"]["id"] = "";
	$placeHolderssv_surveys["English"]["id"] = "";
	$fieldLabelssv_surveys["English"]["active"] = "Active";
	$fieldToolTipssv_surveys["English"]["active"] = "";
	$placeHolderssv_surveys["English"]["active"] = "";
	$fieldLabelssv_surveys["English"]["expires"] = "Expiry date/time";
	$fieldToolTipssv_surveys["English"]["expires"] = "";
	$placeHolderssv_surveys["English"]["expires"] = "";
	$fieldLabelssv_surveys["English"]["startdate"] = "Start date/time";
	$fieldToolTipssv_surveys["English"]["startdate"] = "";
	$placeHolderssv_surveys["English"]["startdate"] = "";
	$fieldLabelssv_surveys["English"]["created"] = "Created";
	$fieldToolTipssv_surveys["English"]["created"] = "";
	$placeHolderssv_surveys["English"]["created"] = "";
	$fieldLabelssv_surveys["English"]["progressbar"] = "Show progress bar";
	$fieldToolTipssv_surveys["English"]["progressbar"] = "";
	$placeHolderssv_surveys["English"]["progressbar"] = "";
	$fieldLabelssv_surveys["English"]["allowprev"] = "Show [Prev] button";
	$fieldToolTipssv_surveys["English"]["allowprev"] = "";
	$placeHolderssv_surveys["English"]["allowprev"] = "";
	$fieldLabelssv_surveys["English"]["format"] = "Format";
	$fieldToolTipssv_surveys["English"]["format"] = "";
	$placeHolderssv_surveys["English"]["format"] = "";
	$fieldLabelssv_surveys["English"]["ipaddr"] = "Save IP address";
	$fieldToolTipssv_surveys["English"]["ipaddr"] = "";
	$placeHolderssv_surveys["English"]["ipaddr"] = "";
	$fieldLabelssv_surveys["English"]["title"] = "Title";
	$fieldToolTipssv_surveys["English"]["title"] = "";
	$placeHolderssv_surveys["English"]["title"] = "";
	$fieldLabelssv_surveys["English"]["description"] = "Description";
	$fieldToolTipssv_surveys["English"]["description"] = "";
	$placeHolderssv_surveys["English"]["description"] = "";
	$fieldLabelssv_surveys["English"]["welcome_message"] = "Welcome Message";
	$fieldToolTipssv_surveys["English"]["welcome_message"] = "";
	$placeHolderssv_surveys["English"]["welcome_message"] = "";
	$fieldLabelssv_surveys["English"]["end_message"] = "End Message";
	$fieldToolTipssv_surveys["English"]["end_message"] = "";
	$placeHolderssv_surveys["English"]["end_message"] = "";
	$fieldLabelssv_surveys["English"]["date_format"] = "Date Format";
	$fieldToolTipssv_surveys["English"]["date_format"] = "";
	$placeHolderssv_surveys["English"]["date_format"] = "";
	$fieldLabelssv_surveys["English"]["userid"] = "Userid";
	$fieldToolTipssv_surveys["English"]["userid"] = "";
	$placeHolderssv_surveys["English"]["userid"] = "";
	$fieldLabelssv_surveys["English"]["status"] = "Status";
	$fieldToolTipssv_surveys["English"]["status"] = "";
	$placeHolderssv_surveys["English"]["status"] = "";
	if (count($fieldToolTipssv_surveys["English"]))
		$tdatasv_surveys[".isUseToolTips"] = true;
}


	$tdatasv_surveys[".NCSearch"] = true;



$tdatasv_surveys[".shortTableName"] = "sv_surveys";
$tdatasv_surveys[".nSecOptions"] = 0;

$tdatasv_surveys[".mainTableOwnerID"] = "";
$tdatasv_surveys[".entityType"] = 1;
$tdatasv_surveys[".connId"] = "project_at_localhost";


$tdatasv_surveys[".strOriginalTableName"] = "sv_surveys";

	



$tdatasv_surveys[".showAddInPopup"] = true;

$tdatasv_surveys[".showEditInPopup"] = true;

$tdatasv_surveys[".showViewInPopup"] = true;

$tdatasv_surveys[".listAjax"] = false;
//	temporary
//$tdatasv_surveys[".listAjax"] = false;

	$tdatasv_surveys[".audit"] = false;

	$tdatasv_surveys[".locking"] = false;


$pages = $tdatasv_surveys[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_surveys[".edit"] = true;
	$tdatasv_surveys[".afterEditAction"] = 1;
	$tdatasv_surveys[".closePopupAfterEdit"] = 1;
	$tdatasv_surveys[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_surveys[".add"] = true;
$tdatasv_surveys[".afterAddAction"] = 1;
$tdatasv_surveys[".closePopupAfterAdd"] = 1;
$tdatasv_surveys[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_surveys[".list"] = true;
}

$tdatasv_surveys[".updateSelected"] = true;


$tdatasv_surveys[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_surveys[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_surveys[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_surveys[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_surveys[".printFriendly"] = true;
}



$tdatasv_surveys[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_surveys[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_surveys[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_surveys[".isUseAjaxSuggest"] = true;



																		

$tdatasv_surveys[".ajaxCodeSnippetAdded"] = false;

$tdatasv_surveys[".buttonsAdded"] = false;

$tdatasv_surveys[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasv_surveys[".isUseTimeForSearch"] = false;




$tdatasv_surveys[".allSearchFields"] = array();
$tdatasv_surveys[".filterFields"] = array();
$tdatasv_surveys[".requiredSearchFields"] = array();




$tdatasv_surveys[".tableType"] = "list";

$tdatasv_surveys[".printerPageOrientation"] = 0;
$tdatasv_surveys[".nPrinterPageScale"] = 100;

$tdatasv_surveys[".nPrinterSplitRecords"] = 40;

$tdatasv_surveys[".geocodingEnabled"] = false;






$tdatasv_surveys[".searchIsRequiredForFilters"] = true;




$tdatasv_surveys[".pageSize"] = 20;

$tdatasv_surveys[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
$tdatasv_surveys[".strOrderBy"] = $tstrOrderBy;

$tdatasv_surveys[".orderindexes"] = array();
	$tdatasv_surveys[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");



$tdatasv_surveys[".sqlHead"] = "SELECT id,  active,  expires,  startdate,  created,  progressbar,  allowprev,  format,  ipaddr,  title,  description,  welcome_message,  end_message,  '' AS status,  date_format,  userid";
$tdatasv_surveys[".sqlFrom"] = "FROM sv_surveys";
$tdatasv_surveys[".sqlWhereExpr"] = "";
$tdatasv_surveys[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_surveys[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_surveys[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssv_surveys = array();
$tableKeyssv_surveys[] = "id";
$tdatasv_surveys[".Keys"] = $tableKeyssv_surveys;


$tdatasv_surveys[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_surveys["id"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "id";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_surveys["active"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "active";
//	expires
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "expires";
	$fdata["GoodName"] = "expires";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","expires");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "expires";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expires";

	
	
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


	$tdatasv_surveys["expires"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "expires";
//	startdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "startdate";
	$fdata["GoodName"] = "startdate";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","startdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "startdate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdate";

	
	
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


	$tdatasv_surveys["startdate"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "startdate";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdatasv_surveys["created"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "created";
//	progressbar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "progressbar";
	$fdata["GoodName"] = "progressbar";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","progressbar");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "progressbar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "progressbar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasv_surveys["progressbar"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "progressbar";
//	allowprev
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "allowprev";
	$fdata["GoodName"] = "allowprev";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","allowprev");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "allowprev";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "allowprev";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasv_surveys["allowprev"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "allowprev";
//	format
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "format";
	$fdata["GoodName"] = "format";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","format");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "format";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format";

	
	
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
	$edata["LookupTable"] = "sv_survey_formats";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "format";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "description";

	

	
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


	$tdatasv_surveys["format"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "format";
//	ipaddr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ipaddr";
	$fdata["GoodName"] = "ipaddr";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","ipaddr");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ipaddr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ipaddr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasv_surveys["ipaddr"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "ipaddr";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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


	$tdatasv_surveys["title"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "title";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasv_surveys["description"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "description";
//	welcome_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "welcome_message";
	$fdata["GoodName"] = "welcome_message";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","welcome_message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "welcome_message";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "welcome_message";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasv_surveys["welcome_message"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "welcome_message";
//	end_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "end_message";
	$fdata["GoodName"] = "end_message";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","end_message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "end_message";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_message";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasv_surveys["end_message"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "end_message";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sv_surveys","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatasv_surveys["status"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "status";
//	date_format
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "date_format";
	$fdata["GoodName"] = "date_format";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","date_format");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "date_format";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_format";

	
	
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
	$edata["LookupTable"] = "sv_format_date";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "description";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
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


	$tdatasv_surveys["date_format"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "date_format";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "sv_surveys";
	$fdata["Label"] = GetFieldLabel("sv_surveys","userid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_surveys["userid"] = $fdata;
		$tdatasv_surveys[".searchableFields"][] = "userid";


$tables_data["sv_surveys"]=&$tdatasv_surveys;
$field_labels["sv_surveys"] = &$fieldLabelssv_surveys;
$fieldToolTips["sv_surveys"] = &$fieldToolTipssv_surveys;
$placeHolders["sv_surveys"] = &$placeHolderssv_surveys;
$page_titles["sv_surveys"] = &$pageTitlessv_surveys;


changeTextControlsToDate( "sv_surveys" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_surveys"] = array();
//	sv_questions
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sv_questions";
		$detailsParam["dOriginalTable"] = "sv_questions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sv_questions";
	$detailsParam["dCaptionTable"] = GetTableCaption("sv_questions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sv_surveys"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sv_surveys"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sv_surveys"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["sv_surveys"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sv_surveys"][$dIndex]["detailKeys"][]="sid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_surveys"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_surveys()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  active,  expires,  startdate,  created,  progressbar,  allowprev,  format,  ipaddr,  title,  description,  welcome_message,  end_message,  '' AS status,  date_format,  userid";
$proto0["m_strFrom"] = "FROM sv_surveys";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
	
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
	"m_strName" => "id",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_surveys";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto8["m_sql"] = "active";
$proto8["m_srcTableName"] = "sv_surveys";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "expires",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto10["m_sql"] = "expires";
$proto10["m_srcTableName"] = "sv_surveys";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "startdate",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto12["m_sql"] = "startdate";
$proto12["m_srcTableName"] = "sv_surveys";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto14["m_sql"] = "created";
$proto14["m_srcTableName"] = "sv_surveys";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "progressbar",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto16["m_sql"] = "progressbar";
$proto16["m_srcTableName"] = "sv_surveys";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "allowprev",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto18["m_sql"] = "allowprev";
$proto18["m_srcTableName"] = "sv_surveys";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "format",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto20["m_sql"] = "format";
$proto20["m_srcTableName"] = "sv_surveys";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ipaddr",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto22["m_sql"] = "ipaddr";
$proto22["m_srcTableName"] = "sv_surveys";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto24["m_sql"] = "title";
$proto24["m_srcTableName"] = "sv_surveys";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto26["m_sql"] = "description";
$proto26["m_srcTableName"] = "sv_surveys";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "welcome_message",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto28["m_sql"] = "welcome_message";
$proto28["m_srcTableName"] = "sv_surveys";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "end_message",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto30["m_sql"] = "end_message";
$proto30["m_srcTableName"] = "sv_surveys";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto32["m_sql"] = "''";
$proto32["m_srcTableName"] = "sv_surveys";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "status";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "date_format",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto34["m_sql"] = "date_format";
$proto34["m_srcTableName"] = "sv_surveys";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto36["m_sql"] = "userid";
$proto36["m_srcTableName"] = "sv_surveys";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "sv_surveys";
$proto39["m_srcTableName"] = "sv_surveys";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "active";
$proto39["m_columns"][] = "expires";
$proto39["m_columns"][] = "startdate";
$proto39["m_columns"][] = "created";
$proto39["m_columns"][] = "progressbar";
$proto39["m_columns"][] = "allowprev";
$proto39["m_columns"][] = "format";
$proto39["m_columns"][] = "ipaddr";
$proto39["m_columns"][] = "title";
$proto39["m_columns"][] = "description";
$proto39["m_columns"][] = "welcome_message";
$proto39["m_columns"][] = "end_message";
$proto39["m_columns"][] = "date_format";
$proto39["m_columns"][] = "userid";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "sv_surveys";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "sv_surveys";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sv_surveys",
	"m_srcTableName" => "sv_surveys"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sv_surveys";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_surveys = createSqlQuery_sv_surveys();


	
		;

																

$tdatasv_surveys[".sqlquery"] = $queryData_sv_surveys;



include_once(getabspath("include/sv_surveys_events.php"));
$tdatasv_surveys[".hasEvents"] = true;

?>