<?php
$tdataperformance_indicators = array();
$tdataperformance_indicators[".searchableFields"] = array();
$tdataperformance_indicators[".ShortName"] = "performance_indicators";
$tdataperformance_indicators[".OwnerID"] = "";
$tdataperformance_indicators[".OriginalTable"] = "performance_indicators";


$tdataperformance_indicators[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataperformance_indicators[".originalPagesByType"] = $tdataperformance_indicators[".pagesByType"];
$tdataperformance_indicators[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperformance_indicators[".originalPages"] = $tdataperformance_indicators[".pages"];
$tdataperformance_indicators[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataperformance_indicators[".originalDefaultPages"] = $tdataperformance_indicators[".defaultPages"];

//	field labels
$fieldLabelsperformance_indicators = array();
$fieldToolTipsperformance_indicators = array();
$pageTitlesperformance_indicators = array();
$placeHoldersperformance_indicators = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperformance_indicators["English"] = array();
	$fieldToolTipsperformance_indicators["English"] = array();
	$placeHoldersperformance_indicators["English"] = array();
	$pageTitlesperformance_indicators["English"] = array();
	$fieldLabelsperformance_indicators["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsperformance_indicators["English"]["indicator_id"] = "";
	$placeHoldersperformance_indicators["English"]["indicator_id"] = "";
	$fieldLabelsperformance_indicators["English"]["indicator_name"] = "Indicator Name";
	$fieldToolTipsperformance_indicators["English"]["indicator_name"] = "";
	$placeHoldersperformance_indicators["English"]["indicator_name"] = "";
	$fieldLabelsperformance_indicators["English"]["unit_of_measurement"] = "Unit Of Measurement";
	$fieldToolTipsperformance_indicators["English"]["unit_of_measurement"] = "";
	$placeHoldersperformance_indicators["English"]["unit_of_measurement"] = "";
	$fieldLabelsperformance_indicators["English"]["reporting_frequency"] = "Reporting Frequency";
	$fieldToolTipsperformance_indicators["English"]["reporting_frequency"] = "";
	$placeHoldersperformance_indicators["English"]["reporting_frequency"] = "";
	$fieldLabelsperformance_indicators["English"]["actual_setting"] = "Actual Setting";
	$fieldToolTipsperformance_indicators["English"]["actual_setting"] = "";
	$placeHoldersperformance_indicators["English"]["actual_setting"] = "";
	if (count($fieldToolTipsperformance_indicators["English"]))
		$tdataperformance_indicators[".isUseToolTips"] = true;
}


	$tdataperformance_indicators[".NCSearch"] = true;



$tdataperformance_indicators[".shortTableName"] = "performance_indicators";
$tdataperformance_indicators[".nSecOptions"] = 0;

$tdataperformance_indicators[".mainTableOwnerID"] = "";
$tdataperformance_indicators[".entityType"] = 0;
$tdataperformance_indicators[".connId"] = "deredevatderejadevmerqconsulta";


$tdataperformance_indicators[".strOriginalTableName"] = "performance_indicators";

	



$tdataperformance_indicators[".showAddInPopup"] = false;

$tdataperformance_indicators[".showEditInPopup"] = false;

$tdataperformance_indicators[".showViewInPopup"] = false;

$tdataperformance_indicators[".listAjax"] = false;
//	temporary
//$tdataperformance_indicators[".listAjax"] = false;

	$tdataperformance_indicators[".audit"] = false;

	$tdataperformance_indicators[".locking"] = false;


$pages = $tdataperformance_indicators[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperformance_indicators[".edit"] = true;
	$tdataperformance_indicators[".afterEditAction"] = 1;
	$tdataperformance_indicators[".closePopupAfterEdit"] = 1;
	$tdataperformance_indicators[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperformance_indicators[".add"] = true;
$tdataperformance_indicators[".afterAddAction"] = 1;
$tdataperformance_indicators[".closePopupAfterAdd"] = 1;
$tdataperformance_indicators[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperformance_indicators[".list"] = true;
}



$tdataperformance_indicators[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperformance_indicators[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperformance_indicators[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperformance_indicators[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperformance_indicators[".printFriendly"] = true;
}



$tdataperformance_indicators[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperformance_indicators[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperformance_indicators[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperformance_indicators[".isUseAjaxSuggest"] = true;



						

$tdataperformance_indicators[".ajaxCodeSnippetAdded"] = false;

$tdataperformance_indicators[".buttonsAdded"] = false;

$tdataperformance_indicators[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperformance_indicators[".isUseTimeForSearch"] = false;


$tdataperformance_indicators[".badgeColor"] = "E8926F";


$tdataperformance_indicators[".allSearchFields"] = array();
$tdataperformance_indicators[".filterFields"] = array();
$tdataperformance_indicators[".requiredSearchFields"] = array();

$tdataperformance_indicators[".googleLikeFields"] = array();
$tdataperformance_indicators[".googleLikeFields"][] = "indicator_id";
$tdataperformance_indicators[".googleLikeFields"][] = "indicator_name";
$tdataperformance_indicators[".googleLikeFields"][] = "unit_of_measurement";
$tdataperformance_indicators[".googleLikeFields"][] = "reporting_frequency";
$tdataperformance_indicators[".googleLikeFields"][] = "actual_setting";



$tdataperformance_indicators[".tableType"] = "list";

$tdataperformance_indicators[".printerPageOrientation"] = 0;
$tdataperformance_indicators[".nPrinterPageScale"] = 100;

$tdataperformance_indicators[".nPrinterSplitRecords"] = 40;

$tdataperformance_indicators[".geocodingEnabled"] = false;




$tdataperformance_indicators[".isDisplayLoading"] = true;






$tdataperformance_indicators[".pageSize"] = 20;

$tdataperformance_indicators[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataperformance_indicators[".strOrderBy"] = $tstrOrderBy;

$tdataperformance_indicators[".orderindexes"] = array();


$tdataperformance_indicators[".sqlHead"] = "SELECT indicator_id,  	indicator_name,  	unit_of_measurement,  	reporting_frequency,  	actual_setting";
$tdataperformance_indicators[".sqlFrom"] = "FROM performance_indicators";
$tdataperformance_indicators[".sqlWhereExpr"] = "";
$tdataperformance_indicators[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperformance_indicators[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperformance_indicators[".arrGroupsPerPage"] = $arrGPP;

$tdataperformance_indicators[".highlightSearchResults"] = true;

$tableKeysperformance_indicators = array();
$tableKeysperformance_indicators[] = "indicator_id";
$tdataperformance_indicators[".Keys"] = $tableKeysperformance_indicators;


$tdataperformance_indicators[".hideMobileList"] = array();




//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators","indicator_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "indicator_id";

		$fdata["sourceSingle"] = "indicator_id";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_indicators["indicator_id"] = $fdata;
		$tdataperformance_indicators[".searchableFields"][] = "indicator_id";
//	indicator_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_name";
	$fdata["GoodName"] = "indicator_name";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators","indicator_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "indicator_name";

		$fdata["sourceSingle"] = "indicator_name";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_indicators["indicator_name"] = $fdata;
		$tdataperformance_indicators[".searchableFields"][] = "indicator_name";
//	unit_of_measurement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "unit_of_measurement";
	$fdata["GoodName"] = "unit_of_measurement";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators","unit_of_measurement");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unit_of_measurement";

		$fdata["sourceSingle"] = "unit_of_measurement";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_indicators["unit_of_measurement"] = $fdata;
		$tdataperformance_indicators[".searchableFields"][] = "unit_of_measurement";
//	reporting_frequency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reporting_frequency";
	$fdata["GoodName"] = "reporting_frequency";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators","reporting_frequency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reporting_frequency";

		$fdata["sourceSingle"] = "reporting_frequency";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_indicators["reporting_frequency"] = $fdata;
		$tdataperformance_indicators[".searchableFields"][] = "reporting_frequency";
//	actual_setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actual_setting";
	$fdata["GoodName"] = "actual_setting";
	$fdata["ownerTable"] = "performance_indicators";
	$fdata["Label"] = GetFieldLabel("performance_indicators","actual_setting");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "actual_setting";

		$fdata["sourceSingle"] = "actual_setting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual_setting";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataperformance_indicators["actual_setting"] = $fdata;
		$tdataperformance_indicators[".searchableFields"][] = "actual_setting";


$tables_data["performance_indicators"]=&$tdataperformance_indicators;
$field_labels["performance_indicators"] = &$fieldLabelsperformance_indicators;
$fieldToolTips["performance_indicators"] = &$fieldToolTipsperformance_indicators;
$placeHolders["performance_indicators"] = &$placeHoldersperformance_indicators;
$page_titles["performance_indicators"] = &$pageTitlesperformance_indicators;


changeTextControlsToDate( "performance_indicators" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["performance_indicators"] = array();
//	performance_tracking
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="performance_tracking";
		$detailsParam["dOriginalTable"] = "performance_tracking";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "performance_tracking";
	$detailsParam["dCaptionTable"] = GetTableCaption("performance_tracking");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["performance_indicators"][$dIndex] = $detailsParam;

	
		$detailsTablesData["performance_indicators"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["performance_indicators"][$dIndex]["masterKeys"][]="indicator_id";

				$detailsTablesData["performance_indicators"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["performance_indicators"][$dIndex]["detailKeys"][]="indicator_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["performance_indicators"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_performance_indicators()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "indicator_id,  	indicator_name,  	unit_of_measurement,  	reporting_frequency,  	actual_setting";
$proto0["m_strFrom"] = "FROM performance_indicators";
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
	"m_strTable" => "performance_indicators",
	"m_srcTableName" => "performance_indicators"
));

$proto6["m_sql"] = "indicator_id";
$proto6["m_srcTableName"] = "performance_indicators";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_name",
	"m_strTable" => "performance_indicators",
	"m_srcTableName" => "performance_indicators"
));

$proto8["m_sql"] = "indicator_name";
$proto8["m_srcTableName"] = "performance_indicators";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_of_measurement",
	"m_strTable" => "performance_indicators",
	"m_srcTableName" => "performance_indicators"
));

$proto10["m_sql"] = "unit_of_measurement";
$proto10["m_srcTableName"] = "performance_indicators";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reporting_frequency",
	"m_strTable" => "performance_indicators",
	"m_srcTableName" => "performance_indicators"
));

$proto12["m_sql"] = "reporting_frequency";
$proto12["m_srcTableName"] = "performance_indicators";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actual_setting",
	"m_strTable" => "performance_indicators",
	"m_srcTableName" => "performance_indicators"
));

$proto14["m_sql"] = "actual_setting";
$proto14["m_srcTableName"] = "performance_indicators";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "performance_indicators";
$proto17["m_srcTableName"] = "performance_indicators";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "indicator_id";
$proto17["m_columns"][] = "indicator_name";
$proto17["m_columns"][] = "unit_of_measurement";
$proto17["m_columns"][] = "reporting_frequency";
$proto17["m_columns"][] = "actual_setting";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "performance_indicators";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "performance_indicators";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="performance_indicators";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_performance_indicators = createSqlQuery_performance_indicators();


	
																								;

					

$tdataperformance_indicators[".sqlquery"] = $queryData_performance_indicators;



include_once(getabspath("include/performance_indicators_events.php"));
$tdataperformance_indicators[".hasEvents"] = true;

?>