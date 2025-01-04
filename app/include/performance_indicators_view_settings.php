<?php
$tdataperformance_indicators_view = array();
$tdataperformance_indicators_view[".searchableFields"] = array();
$tdataperformance_indicators_view[".ShortName"] = "performance_indicators_view";
$tdataperformance_indicators_view[".OwnerID"] = "";
$tdataperformance_indicators_view[".OriginalTable"] = "performance_indicators";


$tdataperformance_indicators_view[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdataperformance_indicators_view[".originalPagesByType"] = $tdataperformance_indicators_view[".pagesByType"];
$tdataperformance_indicators_view[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdataperformance_indicators_view[".originalPages"] = $tdataperformance_indicators_view[".pages"];
$tdataperformance_indicators_view[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdataperformance_indicators_view[".originalDefaultPages"] = $tdataperformance_indicators_view[".defaultPages"];

//	field labels
$fieldLabelsperformance_indicators_view = array();
$fieldToolTipsperformance_indicators_view = array();
$pageTitlesperformance_indicators_view = array();
$placeHoldersperformance_indicators_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperformance_indicators_view["English"] = array();
	$fieldToolTipsperformance_indicators_view["English"] = array();
	$placeHoldersperformance_indicators_view["English"] = array();
	$pageTitlesperformance_indicators_view["English"] = array();
	$fieldLabelsperformance_indicators_view["English"]["target"] = "Target";
	$fieldToolTipsperformance_indicators_view["English"]["target"] = "";
	$placeHoldersperformance_indicators_view["English"]["target"] = "";
	$fieldLabelsperformance_indicators_view["English"]["actual"] = "Actual";
	$fieldToolTipsperformance_indicators_view["English"]["actual"] = "";
	$placeHoldersperformance_indicators_view["English"]["actual"] = "";
	$fieldLabelsperformance_indicators_view["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsperformance_indicators_view["English"]["indicator_id"] = "";
	$placeHoldersperformance_indicators_view["English"]["indicator_id"] = "";
	$fieldLabelsperformance_indicators_view["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipsperformance_indicators_view["English"]["indicator_name"] = "";
	$placeHoldersperformance_indicators_view["English"]["indicator_name"] = "";
	$fieldLabelsperformance_indicators_view["English"]["unit_of_measurement"] = "Unit Of Measurement";
	$fieldToolTipsperformance_indicators_view["English"]["unit_of_measurement"] = "";
	$placeHoldersperformance_indicators_view["English"]["unit_of_measurement"] = "";
	$fieldLabelsperformance_indicators_view["English"]["reporting_frequency"] = "Reporting Frequency";
	$fieldToolTipsperformance_indicators_view["English"]["reporting_frequency"] = "";
	$placeHoldersperformance_indicators_view["English"]["reporting_frequency"] = "";
	$fieldLabelsperformance_indicators_view["English"]["tracking_id"] = "Tracking Id";
	$fieldToolTipsperformance_indicators_view["English"]["tracking_id"] = "";
	$placeHoldersperformance_indicators_view["English"]["tracking_id"] = "";
	$fieldLabelsperformance_indicators_view["English"]["baseline_year"] = "Baseline Year";
	$fieldToolTipsperformance_indicators_view["English"]["baseline_year"] = "";
	$placeHoldersperformance_indicators_view["English"]["baseline_year"] = "";
	$fieldLabelsperformance_indicators_view["English"]["baseline_value"] = "Baseline Value";
	$fieldToolTipsperformance_indicators_view["English"]["baseline_value"] = "";
	$placeHoldersperformance_indicators_view["English"]["baseline_value"] = "";
	$fieldLabelsperformance_indicators_view["English"]["performance_year"] = "Performance Year";
	$fieldToolTipsperformance_indicators_view["English"]["performance_year"] = "";
	$placeHoldersperformance_indicators_view["English"]["performance_year"] = "";
	if (count($fieldToolTipsperformance_indicators_view["English"]))
		$tdataperformance_indicators_view[".isUseToolTips"] = true;
}


	$tdataperformance_indicators_view[".NCSearch"] = true;

	$tdataperformance_indicators_view[".ChartRefreshTime"] = 0;


$tdataperformance_indicators_view[".shortTableName"] = "performance_indicators_view";
$tdataperformance_indicators_view[".nSecOptions"] = 0;

$tdataperformance_indicators_view[".mainTableOwnerID"] = "";
$tdataperformance_indicators_view[".entityType"] = 3;
$tdataperformance_indicators_view[".connId"] = "deredevatderejadevmerqconsulta";


$tdataperformance_indicators_view[".strOriginalTableName"] = "performance_indicators";

	



$tdataperformance_indicators_view[".showAddInPopup"] = false;

$tdataperformance_indicators_view[".showEditInPopup"] = false;

$tdataperformance_indicators_view[".showViewInPopup"] = false;

$tdataperformance_indicators_view[".listAjax"] = false;
//	temporary
//$tdataperformance_indicators_view[".listAjax"] = false;

	$tdataperformance_indicators_view[".audit"] = false;

	$tdataperformance_indicators_view[".locking"] = false;


$pages = $tdataperformance_indicators_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperformance_indicators_view[".edit"] = true;
	$tdataperformance_indicators_view[".afterEditAction"] = 1;
	$tdataperformance_indicators_view[".closePopupAfterEdit"] = 1;
	$tdataperformance_indicators_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperformance_indicators_view[".add"] = true;
$tdataperformance_indicators_view[".afterAddAction"] = 1;
$tdataperformance_indicators_view[".closePopupAfterAdd"] = 1;
$tdataperformance_indicators_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperformance_indicators_view[".list"] = true;
}



$tdataperformance_indicators_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperformance_indicators_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperformance_indicators_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperformance_indicators_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperformance_indicators_view[".printFriendly"] = true;
}



$tdataperformance_indicators_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperformance_indicators_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperformance_indicators_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperformance_indicators_view[".isUseAjaxSuggest"] = true;



			

$tdataperformance_indicators_view[".ajaxCodeSnippetAdded"] = false;

$tdataperformance_indicators_view[".buttonsAdded"] = false;

$tdataperformance_indicators_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperformance_indicators_view[".isUseTimeForSearch"] = false;


$tdataperformance_indicators_view[".badgeColor"] = "B22222";


$tdataperformance_indicators_view[".allSearchFields"] = array();
$tdataperformance_indicators_view[".filterFields"] = array();
$tdataperformance_indicators_view[".requiredSearchFields"] = array();

$tdataperformance_indicators_view[".googleLikeFields"] = array();
$tdataperformance_indicators_view[".googleLikeFields"][] = "indicator_id";
$tdataperformance_indicators_view[".googleLikeFields"][] = "indicator_name";
$tdataperformance_indicators_view[".googleLikeFields"][] = "unit_of_measurement";
$tdataperformance_indicators_view[".googleLikeFields"][] = "reporting_frequency";
$tdataperformance_indicators_view[".googleLikeFields"][] = "tracking_id";
$tdataperformance_indicators_view[".googleLikeFields"][] = "baseline_year";
$tdataperformance_indicators_view[".googleLikeFields"][] = "baseline_value";
$tdataperformance_indicators_view[".googleLikeFields"][] = "performance_year";



$tdataperformance_indicators_view[".tableType"] = "chart";

$tdataperformance_indicators_view[".printerPageOrientation"] = 0;
$tdataperformance_indicators_view[".nPrinterPageScale"] = 100;

$tdataperformance_indicators_view[".nPrinterSplitRecords"] = 40;

$tdataperformance_indicators_view[".geocodingEnabled"] = false;



// chart settings
$tdataperformance_indicators_view[".chartType"] = "2DColumn";
// end of chart settings

$tdataperformance_indicators_view[".isDisplayLoading"] = true;


$tdataperformance_indicators_view[".searchIsRequiredForFilters"] = true;





$tstrOrderBy = "";
$tdataperformance_indicators_view[".strOrderBy"] = $tstrOrderBy;

$tdataperformance_indicators_view[".orderindexes"] = array();


$tdataperformance_indicators_view[".sqlHead"] = "SELECT pi.indicator_id,  pi.indicator_name,  pi.unit_of_measurement,  pi.reporting_frequency,  pt.tracking_id,  pt.baseline_year,  pt.baseline_value,  py.`year` AS performance_year,  py.target,  py.actual";
$tdataperformance_indicators_view[".sqlFrom"] = "FROM performance_indicators AS pi  INNER JOIN performance_tracking AS pt ON pi.indicator_id = pt.indicator_id  INNER JOIN performance_years AS py ON pt.tracking_id = py.tracking_id";
$tdataperformance_indicators_view[".sqlWhereExpr"] = "";
$tdataperformance_indicators_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperformance_indicators_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperformance_indicators_view[".arrGroupsPerPage"] = $arrGPP;

$tdataperformance_indicators_view[".highlightSearchResults"] = true;

$tableKeysperformance_indicators_view = array();
$tdataperformance_indicators_view[".Keys"] = $tableKeysperformance_indicators_view;


$tdataperformance_indicators_view[".hideMobileList"] = array();




//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","indicator_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pi.indicator_id";

	
	
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


	$tdataperformance_indicators_view["indicator_id"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "indicator_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","indicator_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_name";

		$fdata["sourceSingle"] = "indicator_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pi.indicator_name";

	
	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_indicators_view["indicator_name"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "indicator_name";
//	unit_of_measurement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "unit_of_measurement";
	$fdata["GoodName"] = "unit_of_measurement";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","unit_of_measurement");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unit_of_measurement";

		$fdata["sourceSingle"] = "unit_of_measurement";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pi.unit_of_measurement";

	
	
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
	$edata["LookupTable"] = "performance_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_indicators_view["unit_of_measurement"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "unit_of_measurement";
//	reporting_frequency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reporting_frequency";
	$fdata["GoodName"] = "reporting_frequency";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","reporting_frequency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reporting_frequency";

		$fdata["sourceSingle"] = "reporting_frequency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pi.reporting_frequency";

	
	
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
	$edata["LookupTable"] = "performance_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_indicators_view["reporting_frequency"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "reporting_frequency";
//	tracking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tracking_id";
	$fdata["GoodName"] = "tracking_id";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","tracking_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tracking_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pt.tracking_id";

	
	
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


	$tdataperformance_indicators_view["tracking_id"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "tracking_id";
//	baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "baseline_year";
	$fdata["GoodName"] = "baseline_year";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","baseline_year");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "baseline_year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pt.baseline_year";

	
	
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


	$tdataperformance_indicators_view["baseline_year"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "baseline_year";
//	baseline_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "baseline_value";
	$fdata["GoodName"] = "baseline_value";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","baseline_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "baseline_value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pt.baseline_value";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataperformance_indicators_view["baseline_value"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "baseline_value";
//	performance_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "performance_year";
	$fdata["GoodName"] = "performance_year";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","performance_year");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "year";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "py.`year`";

	
	
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
	$edata["LookupTable"] = "performance_years";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "year";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "year";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "indicator_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataperformance_indicators_view["performance_year"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "performance_year";
//	target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "target";
	$fdata["GoodName"] = "target";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "target";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "py.target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataperformance_indicators_view["target"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "target";
//	actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actual";
	$fdata["GoodName"] = "actual";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_indicators_view","actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "py.actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataperformance_indicators_view["actual"] = $fdata;
		$tdataperformance_indicators_view[".searchableFields"][] = "actual";

$tdataperformance_indicators_view[".groupChart"] = true;
$tdataperformance_indicators_view[".chartLabelInterval"] = 0;
$tdataperformance_indicators_view[".chartLabelField"] = "indicator_name";
$tdataperformance_indicators_view[".chartSeries"] = array();
$tdataperformance_indicators_view[".chartSeries"][] = array(
	"field" => "target",
	"total" => "AVG"
);
$tdataperformance_indicators_view[".chartSeries"][] = array(
	"field" => "actual",
	"total" => "AVG"
);
	$tdataperformance_indicators_view[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">performance_indicators_view</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="0">
			<attr value="name">target</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="1">
			<attr value="name">actual</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="2">
		<attr value="name">indicator_name</attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="head">'.xmlencode("Indicators Performance Chart").'</attr>
<attr value="foot">'.xmlencode("Indicator by Performance Year").'</attr>
<attr value="y_axis_label">'.xmlencode("Indicator Value").'</attr>


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
$tdataperformance_indicators_view[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="0">
		<attr value="name">indicator_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","indicator_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="1">
		<attr value="name">indicator_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","indicator_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="2">
		<attr value="name">unit_of_measurement</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","unit_of_measurement")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="3">
		<attr value="name">reporting_frequency</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","reporting_frequency")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="4">
		<attr value="name">tracking_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","tracking_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="5">
		<attr value="name">baseline_year</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","baseline_year")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="6">
		<attr value="name">baseline_value</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","baseline_value")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="7">
		<attr value="name">performance_year</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","performance_year")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="8">
		<attr value="name">target</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","target")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataperformance_indicators_view[".chartXml"] .= '<attr value="9">
		<attr value="name">actual</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("performance_indicators_view","actual")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataperformance_indicators_view[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">performance_indicators_view</attr>
<attr value="short_table_name">performance_indicators_view</attr>
</attr>

</chart>';

$tables_data["performance_indicators_view"]=&$tdataperformance_indicators_view;
$field_labels["performance_indicators_view"] = &$fieldLabelsperformance_indicators_view;
$fieldToolTips["performance_indicators_view"] = &$fieldToolTipsperformance_indicators_view;
$placeHolders["performance_indicators_view"] = &$placeHoldersperformance_indicators_view;
$page_titles["performance_indicators_view"] = &$pageTitlesperformance_indicators_view;


changeTextControlsToDate( "performance_indicators_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["performance_indicators_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["performance_indicators_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_performance_indicators_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pi.indicator_id,  pi.indicator_name,  pi.unit_of_measurement,  pi.reporting_frequency,  pt.tracking_id,  pt.baseline_year,  pt.baseline_value,  py.`year` AS performance_year,  py.target,  py.actual";
$proto0["m_strFrom"] = "FROM performance_indicators AS pi  INNER JOIN performance_tracking AS pt ON pi.indicator_id = pt.indicator_id  INNER JOIN performance_years AS py ON pt.tracking_id = py.tracking_id";
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
	"m_strName" => "indicator_id",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto6["m_sql"] = "pi.indicator_id";
$proto6["m_srcTableName"] = "performance_indicators_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto8["m_sql"] = "pi.indicator_name";
$proto8["m_srcTableName"] = "performance_indicators_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_of_measurement",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto10["m_sql"] = "pi.unit_of_measurement";
$proto10["m_srcTableName"] = "performance_indicators_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_frequency",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto12["m_sql"] = "pi.reporting_frequency";
$proto12["m_srcTableName"] = "performance_indicators_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tracking_id",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto14["m_sql"] = "pt.tracking_id";
$proto14["m_srcTableName"] = "performance_indicators_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline_year",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto16["m_sql"] = "pt.baseline_year";
$proto16["m_srcTableName"] = "performance_indicators_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline_value",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto18["m_sql"] = "pt.baseline_value";
$proto18["m_srcTableName"] = "performance_indicators_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto20["m_sql"] = "py.`year`";
$proto20["m_srcTableName"] = "performance_indicators_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "performance_year";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "target",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto22["m_sql"] = "py.target";
$proto22["m_srcTableName"] = "performance_indicators_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "actual",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto24["m_sql"] = "py.actual";
$proto24["m_srcTableName"] = "performance_indicators_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "performance_indicators";
$proto27["m_srcTableName"] = "performance_indicators_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "indicator_id";
$proto27["m_columns"][] = "indicator_name";
$proto27["m_columns"][] = "unit_of_measurement";
$proto27["m_columns"][] = "reporting_frequency";
$proto27["m_columns"][] = "actual_setting";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "performance_indicators AS pi";
$proto26["m_alias"] = "pi";
$proto26["m_srcTableName"] = "performance_indicators_view";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "performance_tracking";
$proto31["m_srcTableName"] = "performance_indicators_view";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "tracking_id";
$proto31["m_columns"][] = "indicator_id";
$proto31["m_columns"][] = "baseline_year";
$proto31["m_columns"][] = "baseline_value";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN performance_tracking AS pt ON pi.indicator_id = pt.indicator_id";
$proto30["m_alias"] = "pt";
$proto30["m_srcTableName"] = "performance_indicators_view";
$proto32=array();
$proto32["m_sql"] = "pt.indicator_id = pi.indicator_id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= pi.indicator_id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "performance_years";
$proto35["m_srcTableName"] = "performance_indicators_view";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "tracking_id";
$proto35["m_columns"][] = "year";
$proto35["m_columns"][] = "target";
$proto35["m_columns"][] = "actual";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN performance_years AS py ON pt.tracking_id = py.tracking_id";
$proto34["m_alias"] = "py";
$proto34["m_srcTableName"] = "performance_indicators_view";
$proto36=array();
$proto36["m_sql"] = "py.tracking_id = pt.tracking_id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tracking_id",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= pt.tracking_id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "unit_of_measurement",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "reporting_frequency",
	"m_strTable" => "pi",
	"m_srcTableName" => "performance_indicators_view"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "tracking_id",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "baseline_year",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "baseline_value",
	"m_strTable" => "pt",
	"m_srcTableName" => "performance_indicators_view"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "target",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto54["m_column"]=$obj;
$obj = new SQLGroupByItem($proto54);

$proto0["m_groupby"][]=$obj;
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "actual",
	"m_strTable" => "py",
	"m_srcTableName" => "performance_indicators_view"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="performance_indicators_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_performance_indicators_view = createSqlQuery_performance_indicators_view();


	
																								;

										

$tdataperformance_indicators_view[".sqlquery"] = $queryData_performance_indicators_view;



$tdataperformance_indicators_view[".hasEvents"] = false;

?>