<?php
$tdataperformance_overview = array();
$tdataperformance_overview[".searchableFields"] = array();
$tdataperformance_overview[".ShortName"] = "performance_overview";
$tdataperformance_overview[".OwnerID"] = "";
$tdataperformance_overview[".OriginalTable"] = "Performance_Overview";


$tdataperformance_overview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataperformance_overview[".originalPagesByType"] = $tdataperformance_overview[".pagesByType"];
$tdataperformance_overview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataperformance_overview[".originalPages"] = $tdataperformance_overview[".pages"];
$tdataperformance_overview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataperformance_overview[".originalDefaultPages"] = $tdataperformance_overview[".defaultPages"];

//	field labels
$fieldLabelsperformance_overview = array();
$fieldToolTipsperformance_overview = array();
$pageTitlesperformance_overview = array();
$placeHoldersperformance_overview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperformance_overview["English"] = array();
	$fieldToolTipsperformance_overview["English"] = array();
	$placeHoldersperformance_overview["English"] = array();
	$pageTitlesperformance_overview["English"] = array();
	$fieldLabelsperformance_overview["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsperformance_overview["English"]["indicator_id"] = "";
	$placeHoldersperformance_overview["English"]["indicator_id"] = "";
	$fieldLabelsperformance_overview["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipsperformance_overview["English"]["indicator_name"] = "";
	$placeHoldersperformance_overview["English"]["indicator_name"] = "";
	$fieldLabelsperformance_overview["English"]["unit_of_measurement"] = "Unit Of Measurement";
	$fieldToolTipsperformance_overview["English"]["unit_of_measurement"] = "";
	$placeHoldersperformance_overview["English"]["unit_of_measurement"] = "";
	$fieldLabelsperformance_overview["English"]["reporting_frequency"] = "Reporting Frequency";
	$fieldToolTipsperformance_overview["English"]["reporting_frequency"] = "";
	$placeHoldersperformance_overview["English"]["reporting_frequency"] = "";
	$fieldLabelsperformance_overview["English"]["tracking_id"] = "Tracking Id";
	$fieldToolTipsperformance_overview["English"]["tracking_id"] = "";
	$placeHoldersperformance_overview["English"]["tracking_id"] = "";
	$fieldLabelsperformance_overview["English"]["baseline_year"] = "Baseline Year";
	$fieldToolTipsperformance_overview["English"]["baseline_year"] = "";
	$placeHoldersperformance_overview["English"]["baseline_year"] = "";
	$fieldLabelsperformance_overview["English"]["baseline_value"] = "Baseline Value";
	$fieldToolTipsperformance_overview["English"]["baseline_value"] = "";
	$placeHoldersperformance_overview["English"]["baseline_value"] = "";
	$fieldLabelsperformance_overview["English"]["performance_year"] = "Performance Year";
	$fieldToolTipsperformance_overview["English"]["performance_year"] = "";
	$placeHoldersperformance_overview["English"]["performance_year"] = "";
	$fieldLabelsperformance_overview["English"]["target"] = "Target";
	$fieldToolTipsperformance_overview["English"]["target"] = "";
	$placeHoldersperformance_overview["English"]["target"] = "";
	$fieldLabelsperformance_overview["English"]["actual"] = "Actual";
	$fieldToolTipsperformance_overview["English"]["actual"] = "";
	$placeHoldersperformance_overview["English"]["actual"] = "";
	if (count($fieldToolTipsperformance_overview["English"]))
		$tdataperformance_overview[".isUseToolTips"] = true;
}


	$tdataperformance_overview[".NCSearch"] = true;



$tdataperformance_overview[".shortTableName"] = "performance_overview";
$tdataperformance_overview[".nSecOptions"] = 0;

$tdataperformance_overview[".mainTableOwnerID"] = "";
$tdataperformance_overview[".entityType"] = 6;
$tdataperformance_overview[".connId"] = "deredevatderejadevmerqconsulta";


$tdataperformance_overview[".strOriginalTableName"] = "Performance_Overview";

	



$tdataperformance_overview[".showAddInPopup"] = false;

$tdataperformance_overview[".showEditInPopup"] = false;

$tdataperformance_overview[".showViewInPopup"] = false;

$tdataperformance_overview[".listAjax"] = false;
//	temporary
//$tdataperformance_overview[".listAjax"] = false;

	$tdataperformance_overview[".audit"] = false;

	$tdataperformance_overview[".locking"] = false;


$pages = $tdataperformance_overview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperformance_overview[".edit"] = true;
	$tdataperformance_overview[".afterEditAction"] = 1;
	$tdataperformance_overview[".closePopupAfterEdit"] = 1;
	$tdataperformance_overview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperformance_overview[".add"] = true;
$tdataperformance_overview[".afterAddAction"] = 1;
$tdataperformance_overview[".closePopupAfterAdd"] = 1;
$tdataperformance_overview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperformance_overview[".list"] = true;
}



$tdataperformance_overview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperformance_overview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperformance_overview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperformance_overview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperformance_overview[".printFriendly"] = true;
}



$tdataperformance_overview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperformance_overview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperformance_overview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperformance_overview[".isUseAjaxSuggest"] = false;



			

$tdataperformance_overview[".ajaxCodeSnippetAdded"] = false;

$tdataperformance_overview[".buttonsAdded"] = false;

$tdataperformance_overview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperformance_overview[".isUseTimeForSearch"] = false;


$tdataperformance_overview[".badgeColor"] = "BC8F8F";


$tdataperformance_overview[".allSearchFields"] = array();
$tdataperformance_overview[".filterFields"] = array();
$tdataperformance_overview[".requiredSearchFields"] = array();

$tdataperformance_overview[".googleLikeFields"] = array();
$tdataperformance_overview[".googleLikeFields"][] = "indicator_id";
$tdataperformance_overview[".googleLikeFields"][] = "indicator_name";
$tdataperformance_overview[".googleLikeFields"][] = "unit_of_measurement";
$tdataperformance_overview[".googleLikeFields"][] = "reporting_frequency";
$tdataperformance_overview[".googleLikeFields"][] = "tracking_id";
$tdataperformance_overview[".googleLikeFields"][] = "baseline_year";
$tdataperformance_overview[".googleLikeFields"][] = "baseline_value";
$tdataperformance_overview[".googleLikeFields"][] = "performance_year";
$tdataperformance_overview[".googleLikeFields"][] = "target";
$tdataperformance_overview[".googleLikeFields"][] = "actual";




$tdataperformance_overview[".printerPageOrientation"] = 0;
$tdataperformance_overview[".nPrinterPageScale"] = 100;

$tdataperformance_overview[".nPrinterSplitRecords"] = 40;

$tdataperformance_overview[".geocodingEnabled"] = false;




$tdataperformance_overview[".isDisplayLoading"] = true;






$tdataperformance_overview[".pageSize"] = 20;

$tdataperformance_overview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataperformance_overview[".strOrderBy"] = $tstrOrderBy;

$tdataperformance_overview[".orderindexes"] = array();


$tdataperformance_overview[".sqlHead"] = "";
$tdataperformance_overview[".sqlFrom"] = "";
$tdataperformance_overview[".sqlWhereExpr"] = "";
$tdataperformance_overview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperformance_overview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperformance_overview[".arrGroupsPerPage"] = $arrGPP;

$tdataperformance_overview[".highlightSearchResults"] = true;

$tableKeysperformance_overview = array();
$tdataperformance_overview[".Keys"] = $tableKeysperformance_overview;


$tdataperformance_overview[".hideMobileList"] = array();




//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "indicator_id";

	
		$fdata["FullName"] = "indicator_id";

	
	
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


	$tdataperformance_overview["indicator_id"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "indicator_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","indicator_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_name";

	
		$fdata["FullName"] = "indicator_name";

	
	
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
	$edata["LookupTable"] = "performance_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "indicator_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "unit_of_measurement";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "reporting_frequency";

	
		$edata["Multiselect"] = true;

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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_overview["indicator_name"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "indicator_name";
//	unit_of_measurement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "unit_of_measurement";
	$fdata["GoodName"] = "unit_of_measurement";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","unit_of_measurement");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unit_of_measurement";

	
		$fdata["FullName"] = "unit_of_measurement";

	
	
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
	$edata["LookupTable"] = "performance_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "unit_of_measurement";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "unit_of_measurement";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "indicator_name", "lookup" => "indicator_name" );

	
	

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_overview["unit_of_measurement"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "unit_of_measurement";
//	reporting_frequency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reporting_frequency";
	$fdata["GoodName"] = "reporting_frequency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","reporting_frequency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reporting_frequency";

	
		$fdata["FullName"] = "reporting_frequency";

	
	
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
	$edata["LookupTable"] = "performance_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "reporting_frequency";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "reporting_frequency";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "indicator_name", "lookup" => "indicator_name" );

	
	

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_overview["reporting_frequency"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "reporting_frequency";
//	tracking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tracking_id";
	$fdata["GoodName"] = "tracking_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","tracking_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tracking_id";

	
		$fdata["FullName"] = "tracking_id";

	
	
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


	$tdataperformance_overview["tracking_id"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "tracking_id";
//	baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "baseline_year";
	$fdata["GoodName"] = "baseline_year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","baseline_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "baseline_year";

	
		$fdata["FullName"] = "baseline_year";

	
	
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
	$edata["LookupTable"] = "performance_tracking";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "baseline_year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "baseline_year";

	

	
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


	$tdataperformance_overview["baseline_year"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "baseline_year";
//	baseline_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "baseline_value";
	$fdata["GoodName"] = "baseline_value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","baseline_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "baseline_value";

	
		$fdata["FullName"] = "baseline_value";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataperformance_overview["baseline_value"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "baseline_value";
//	performance_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "performance_year";
	$fdata["GoodName"] = "performance_year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","performance_year");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "performance_year";

	
		$fdata["FullName"] = "performance_year";

	
	
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
	$edata["LookupTable"] = "performance_years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_overview["performance_year"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "performance_year";
//	target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "target";
	$fdata["GoodName"] = "target";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "target";

	
		$fdata["FullName"] = "target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataperformance_overview["target"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "target";
//	actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actual";
	$fdata["GoodName"] = "actual";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Performance_Overview","actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "actual";

	
		$fdata["FullName"] = "actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataperformance_overview["actual"] = $fdata;
		$tdataperformance_overview[".searchableFields"][] = "actual";


$tables_data["Performance_Overview"]=&$tdataperformance_overview;
$field_labels["Performance_Overview"] = &$fieldLabelsperformance_overview;
$fieldToolTips["Performance_Overview"] = &$fieldToolTipsperformance_overview;
$placeHolders["Performance_Overview"] = &$placeHoldersperformance_overview;
$page_titles["Performance_Overview"] = &$pageTitlesperformance_overview;


changeTextControlsToDate( "Performance_Overview" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Performance_Overview"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Performance_Overview"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/performance_overview_ops.php" ) );



	
																								;

										

$tdataperformance_overview[".sqlquery"] = $queryData_performance_overview;



$tdataperformance_overview[".hasEvents"] = false;

?>