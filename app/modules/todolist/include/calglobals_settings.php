<?php
$tdatacalglobals = array();
$tdatacalglobals[".searchableFields"] = array();
$tdatacalglobals[".ShortName"] = "calglobals";
$tdatacalglobals[".OwnerID"] = "";
$tdatacalglobals[".OriginalTable"] = "calglobals";


$tdatacalglobals[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatacalglobals[".originalPagesByType"] = $tdatacalglobals[".pagesByType"];
$tdatacalglobals[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatacalglobals[".originalPages"] = $tdatacalglobals[".pages"];
$tdatacalglobals[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatacalglobals[".originalDefaultPages"] = $tdatacalglobals[".defaultPages"];

//	field labels
$fieldLabelscalglobals = array();
$fieldToolTipscalglobals = array();
$pageTitlescalglobals = array();
$placeHolderscalglobals = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalglobals["English"] = array();
	$fieldToolTipscalglobals["English"] = array();
	$placeHolderscalglobals["English"] = array();
	$pageTitlescalglobals["English"] = array();
	$fieldLabelscalglobals["English"]["id"] = "Id";
	$fieldToolTipscalglobals["English"]["id"] = "";
	$placeHolderscalglobals["English"]["id"] = "";
	$fieldLabelscalglobals["English"]["TimePeriod"] = "Time Period";
	$fieldToolTipscalglobals["English"]["TimePeriod"] = "";
	$placeHolderscalglobals["English"]["TimePeriod"] = "";
	$fieldLabelscalglobals["English"]["FirstDayOfWeek"] = "First Day Of Week";
	$fieldToolTipscalglobals["English"]["FirstDayOfWeek"] = "";
	$placeHolderscalglobals["English"]["FirstDayOfWeek"] = "";
	$fieldLabelscalglobals["English"]["EditInPast"] = "Edit In Past";
	$fieldToolTipscalglobals["English"]["EditInPast"] = "";
	$placeHolderscalglobals["English"]["EditInPast"] = "";
	$fieldLabelscalglobals["English"]["DefaultColor"] = "Default Color";
	$fieldToolTipscalglobals["English"]["DefaultColor"] = "";
	$placeHolderscalglobals["English"]["DefaultColor"] = "";
	$fieldLabelscalglobals["English"]["HolidayColor"] = "Holiday Color";
	$fieldToolTipscalglobals["English"]["HolidayColor"] = "";
	$placeHolderscalglobals["English"]["HolidayColor"] = "";
	$fieldLabelscalglobals["English"]["WeekEndColor"] = "Week End Color";
	$fieldToolTipscalglobals["English"]["WeekEndColor"] = "";
	$placeHolderscalglobals["English"]["WeekEndColor"] = "";
	$fieldLabelscalglobals["English"]["RangedColor"] = "Ranged Color";
	$fieldToolTipscalglobals["English"]["RangedColor"] = "";
	$placeHolderscalglobals["English"]["RangedColor"] = "";
	$fieldLabelscalglobals["English"]["SubjectLength"] = "Subject Length";
	$fieldToolTipscalglobals["English"]["SubjectLength"] = "";
	$placeHolderscalglobals["English"]["SubjectLength"] = "";
	$fieldLabelscalglobals["English"]["DescriptionLength"] = "Description Length";
	$fieldToolTipscalglobals["English"]["DescriptionLength"] = "";
	$placeHolderscalglobals["English"]["DescriptionLength"] = "";
	$fieldLabelscalglobals["English"]["EndTime"] = "End Time";
	$fieldToolTipscalglobals["English"]["EndTime"] = "";
	$placeHolderscalglobals["English"]["EndTime"] = "";
	$fieldLabelscalglobals["English"]["StartTime"] = "Start Time";
	$fieldToolTipscalglobals["English"]["StartTime"] = "";
	$placeHolderscalglobals["English"]["StartTime"] = "";
	$pageTitlescalglobals["English"]["edit"] = "Calendar Settings";
	if (count($fieldToolTipscalglobals["English"]))
		$tdatacalglobals[".isUseToolTips"] = true;
}


	$tdatacalglobals[".NCSearch"] = true;



$tdatacalglobals[".shortTableName"] = "calglobals";
$tdatacalglobals[".nSecOptions"] = 0;

$tdatacalglobals[".mainTableOwnerID"] = "";
$tdatacalglobals[".entityType"] = 0;
$tdatacalglobals[".connId"] = "project_at_localhost";


$tdatacalglobals[".strOriginalTableName"] = "calglobals";

	



$tdatacalglobals[".showAddInPopup"] = false;

$tdatacalglobals[".showEditInPopup"] = false;

$tdatacalglobals[".showViewInPopup"] = false;

$tdatacalglobals[".listAjax"] = false;
//	temporary
//$tdatacalglobals[".listAjax"] = false;

	$tdatacalglobals[".audit"] = false;

	$tdatacalglobals[".locking"] = false;


$pages = $tdatacalglobals[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalglobals[".edit"] = true;
	$tdatacalglobals[".afterEditAction"] = 1;
	$tdatacalglobals[".closePopupAfterEdit"] = 1;
	$tdatacalglobals[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalglobals[".add"] = true;
$tdatacalglobals[".afterAddAction"] = 1;
$tdatacalglobals[".closePopupAfterAdd"] = 1;
$tdatacalglobals[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalglobals[".list"] = true;
}



$tdatacalglobals[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalglobals[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalglobals[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalglobals[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalglobals[".printFriendly"] = true;
}



$tdatacalglobals[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalglobals[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalglobals[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalglobals[".isUseAjaxSuggest"] = true;



																								

$tdatacalglobals[".ajaxCodeSnippetAdded"] = false;

$tdatacalglobals[".buttonsAdded"] = false;

$tdatacalglobals[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacalglobals[".isUseTimeForSearch"] = false;


$tdatacalglobals[".badgeColor"] = "CD853F";


$tdatacalglobals[".allSearchFields"] = array();
$tdatacalglobals[".filterFields"] = array();
$tdatacalglobals[".requiredSearchFields"] = array();

$tdatacalglobals[".googleLikeFields"] = array();
$tdatacalglobals[".googleLikeFields"][] = "id";
$tdatacalglobals[".googleLikeFields"][] = "TimePeriod";
$tdatacalglobals[".googleLikeFields"][] = "FirstDayOfWeek";
$tdatacalglobals[".googleLikeFields"][] = "EditInPast";
$tdatacalglobals[".googleLikeFields"][] = "DefaultColor";
$tdatacalglobals[".googleLikeFields"][] = "HolidayColor";
$tdatacalglobals[".googleLikeFields"][] = "WeekEndColor";
$tdatacalglobals[".googleLikeFields"][] = "RangedColor";
$tdatacalglobals[".googleLikeFields"][] = "SubjectLength";
$tdatacalglobals[".googleLikeFields"][] = "DescriptionLength";
$tdatacalglobals[".googleLikeFields"][] = "StartTime";
$tdatacalglobals[".googleLikeFields"][] = "EndTime";



$tdatacalglobals[".tableType"] = "list";

$tdatacalglobals[".printerPageOrientation"] = 0;
$tdatacalglobals[".nPrinterPageScale"] = 100;

$tdatacalglobals[".nPrinterSplitRecords"] = 40;

$tdatacalglobals[".geocodingEnabled"] = false;










$tdatacalglobals[".pageSize"] = 20;

$tdatacalglobals[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalglobals[".strOrderBy"] = $tstrOrderBy;

$tdatacalglobals[".orderindexes"] = array();


$tdatacalglobals[".sqlHead"] = "SELECT id,  TimePeriod,  FirstDayOfWeek,  EditInPast,  DefaultColor,  HolidayColor,  WeekEndColor,  RangedColor,  SubjectLength,  DescriptionLength,  StartTime,  EndTime";
$tdatacalglobals[".sqlFrom"] = "FROM calglobals";
$tdatacalglobals[".sqlWhereExpr"] = "";
$tdatacalglobals[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalglobals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalglobals[".arrGroupsPerPage"] = $arrGPP;

$tdatacalglobals[".highlightSearchResults"] = true;

$tableKeyscalglobals = array();
$tableKeyscalglobals[] = "id";
$tdatacalglobals[".Keys"] = $tableKeyscalglobals;


$tdatacalglobals[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","id");
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


	$tdatacalglobals["id"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "id";
//	TimePeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TimePeriod";
	$fdata["GoodName"] = "TimePeriod";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","TimePeriod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TimePeriod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TimePeriod";

	
	
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
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "30";
	$edata["LookupValues"][] = "60";

	
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


	$tdatacalglobals["TimePeriod"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "TimePeriod";
//	FirstDayOfWeek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FirstDayOfWeek";
	$fdata["GoodName"] = "FirstDayOfWeek";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","FirstDayOfWeek");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "FirstDayOfWeek";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstDayOfWeek";

	
	
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
	$edata["LookupTable"] = "calfirstday";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "dayvalue";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dayname";

	

	
	$edata["LookupOrderBy"] = "dayname";

	
	
	
	

	
	
	
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


	$tdatacalglobals["FirstDayOfWeek"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "FirstDayOfWeek";
//	EditInPast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EditInPast";
	$fdata["GoodName"] = "EditInPast";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","EditInPast");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EditInPast";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EditInPast";

	
	
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


	$tdatacalglobals["EditInPast"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "EditInPast";
//	DefaultColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DefaultColor";
	$fdata["GoodName"] = "DefaultColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","DefaultColor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DefaultColor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DefaultColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
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


	$tdatacalglobals["DefaultColor"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "DefaultColor";
//	HolidayColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "HolidayColor";
	$fdata["GoodName"] = "HolidayColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","HolidayColor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "HolidayColor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HolidayColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
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


	$tdatacalglobals["HolidayColor"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "HolidayColor";
//	WeekEndColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WeekEndColor";
	$fdata["GoodName"] = "WeekEndColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","WeekEndColor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "WeekEndColor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WeekEndColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
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


	$tdatacalglobals["WeekEndColor"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "WeekEndColor";
//	RangedColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RangedColor";
	$fdata["GoodName"] = "RangedColor";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","RangedColor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RangedColor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RangedColor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
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


	$tdatacalglobals["RangedColor"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "RangedColor";
//	SubjectLength
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SubjectLength";
	$fdata["GoodName"] = "SubjectLength";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","SubjectLength");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SubjectLength";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubjectLength";

	
	
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


	$tdatacalglobals["SubjectLength"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "SubjectLength";
//	DescriptionLength
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DescriptionLength";
	$fdata["GoodName"] = "DescriptionLength";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","DescriptionLength");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DescriptionLength";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DescriptionLength";

	
	
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


	$tdatacalglobals["DescriptionLength"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "DescriptionLength";
//	StartTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "StartTime";
	$fdata["GoodName"] = "StartTime";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","StartTime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "StartTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StartTime";

	
	
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
	$edata["LookupTable"] = "calglobals";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TimePeriod";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TimePeriod";

	

	
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


	$tdatacalglobals["StartTime"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "StartTime";
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calglobals";
	$fdata["Label"] = GetFieldLabel("calglobals","EndTime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EndTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndTime";

	
	
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
	$edata["LookupTable"] = "calglobals";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TimePeriod";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TimePeriod";

	

	
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


	$tdatacalglobals["EndTime"] = $fdata;
		$tdatacalglobals[".searchableFields"][] = "EndTime";


$tables_data["calglobals"]=&$tdatacalglobals;
$field_labels["calglobals"] = &$fieldLabelscalglobals;
$fieldToolTips["calglobals"] = &$fieldToolTipscalglobals;
$placeHolders["calglobals"] = &$placeHolderscalglobals;
$page_titles["calglobals"] = &$pageTitlescalglobals;


changeTextControlsToDate( "calglobals" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calglobals"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calglobals"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calglobals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  TimePeriod,  FirstDayOfWeek,  EditInPast,  DefaultColor,  HolidayColor,  WeekEndColor,  RangedColor,  SubjectLength,  DescriptionLength,  StartTime,  EndTime";
$proto0["m_strFrom"] = "FROM calglobals";
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
	"m_strName" => "id",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calglobals";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TimePeriod",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto8["m_sql"] = "TimePeriod";
$proto8["m_srcTableName"] = "calglobals";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstDayOfWeek",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto10["m_sql"] = "FirstDayOfWeek";
$proto10["m_srcTableName"] = "calglobals";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EditInPast",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto12["m_sql"] = "EditInPast";
$proto12["m_srcTableName"] = "calglobals";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DefaultColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto14["m_sql"] = "DefaultColor";
$proto14["m_srcTableName"] = "calglobals";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "HolidayColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto16["m_sql"] = "HolidayColor";
$proto16["m_srcTableName"] = "calglobals";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "WeekEndColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto18["m_sql"] = "WeekEndColor";
$proto18["m_srcTableName"] = "calglobals";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RangedColor",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto20["m_sql"] = "RangedColor";
$proto20["m_srcTableName"] = "calglobals";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SubjectLength",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto22["m_sql"] = "SubjectLength";
$proto22["m_srcTableName"] = "calglobals";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriptionLength",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto24["m_sql"] = "DescriptionLength";
$proto24["m_srcTableName"] = "calglobals";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "StartTime",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto26["m_sql"] = "StartTime";
$proto26["m_srcTableName"] = "calglobals";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calglobals",
	"m_srcTableName" => "calglobals"
));

$proto28["m_sql"] = "EndTime";
$proto28["m_srcTableName"] = "calglobals";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "calglobals";
$proto31["m_srcTableName"] = "calglobals";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "TimePeriod";
$proto31["m_columns"][] = "FirstDayOfWeek";
$proto31["m_columns"][] = "EditInPast";
$proto31["m_columns"][] = "DefaultColor";
$proto31["m_columns"][] = "HolidayColor";
$proto31["m_columns"][] = "WeekEndColor";
$proto31["m_columns"][] = "RangedColor";
$proto31["m_columns"][] = "SubjectLength";
$proto31["m_columns"][] = "DescriptionLength";
$proto31["m_columns"][] = "CountEvents";
$proto31["m_columns"][] = "StartTime";
$proto31["m_columns"][] = "EndTime";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "calglobals";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "calglobals";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calglobals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calglobals = createSqlQuery_calglobals();


	
		;

												

$tdatacalglobals[".sqlquery"] = $queryData_calglobals;



include_once(getabspath("include/calglobals_events.php"));
$tdatacalglobals[".hasEvents"] = true;

?>