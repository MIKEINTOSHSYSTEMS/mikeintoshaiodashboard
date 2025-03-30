<?php
$tdataperformance_tracking = array();
$tdataperformance_tracking[".searchableFields"] = array();
$tdataperformance_tracking[".ShortName"] = "performance_tracking";
$tdataperformance_tracking[".OwnerID"] = "";
$tdataperformance_tracking[".OriginalTable"] = "performance_tracking";


$tdataperformance_tracking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataperformance_tracking[".originalPagesByType"] = $tdataperformance_tracking[".pagesByType"];
$tdataperformance_tracking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperformance_tracking[".originalPages"] = $tdataperformance_tracking[".pages"];
$tdataperformance_tracking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataperformance_tracking[".originalDefaultPages"] = $tdataperformance_tracking[".defaultPages"];

//	field labels
$fieldLabelsperformance_tracking = array();
$fieldToolTipsperformance_tracking = array();
$pageTitlesperformance_tracking = array();
$placeHoldersperformance_tracking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperformance_tracking["English"] = array();
	$fieldToolTipsperformance_tracking["English"] = array();
	$placeHoldersperformance_tracking["English"] = array();
	$pageTitlesperformance_tracking["English"] = array();
	$fieldLabelsperformance_tracking["English"]["tracking_id"] = "Tracking Id";
	$fieldToolTipsperformance_tracking["English"]["tracking_id"] = "";
	$placeHoldersperformance_tracking["English"]["tracking_id"] = "";
	$fieldLabelsperformance_tracking["English"]["indicator_id"] = "Indicator Id";
	$fieldToolTipsperformance_tracking["English"]["indicator_id"] = "";
	$placeHoldersperformance_tracking["English"]["indicator_id"] = "";
	$fieldLabelsperformance_tracking["English"]["baseline_year"] = "Baseline Year";
	$fieldToolTipsperformance_tracking["English"]["baseline_year"] = "";
	$placeHoldersperformance_tracking["English"]["baseline_year"] = "";
	$fieldLabelsperformance_tracking["English"]["baseline_value"] = "Baseline Value";
	$fieldToolTipsperformance_tracking["English"]["baseline_value"] = "";
	$placeHoldersperformance_tracking["English"]["baseline_value"] = "";
	if (count($fieldToolTipsperformance_tracking["English"]))
		$tdataperformance_tracking[".isUseToolTips"] = true;
}


	$tdataperformance_tracking[".NCSearch"] = true;



$tdataperformance_tracking[".shortTableName"] = "performance_tracking";
$tdataperformance_tracking[".nSecOptions"] = 0;

$tdataperformance_tracking[".mainTableOwnerID"] = "";
$tdataperformance_tracking[".entityType"] = 0;
$tdataperformance_tracking[".connId"] = "deredevatderejadevmerqconsulta";


$tdataperformance_tracking[".strOriginalTableName"] = "performance_tracking";

	



$tdataperformance_tracking[".showAddInPopup"] = false;

$tdataperformance_tracking[".showEditInPopup"] = false;

$tdataperformance_tracking[".showViewInPopup"] = false;

$tdataperformance_tracking[".listAjax"] = false;
//	temporary
//$tdataperformance_tracking[".listAjax"] = false;

	$tdataperformance_tracking[".audit"] = false;

	$tdataperformance_tracking[".locking"] = false;


$pages = $tdataperformance_tracking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperformance_tracking[".edit"] = true;
	$tdataperformance_tracking[".afterEditAction"] = 1;
	$tdataperformance_tracking[".closePopupAfterEdit"] = 1;
	$tdataperformance_tracking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperformance_tracking[".add"] = true;
$tdataperformance_tracking[".afterAddAction"] = 1;
$tdataperformance_tracking[".closePopupAfterAdd"] = 1;
$tdataperformance_tracking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperformance_tracking[".list"] = true;
}



$tdataperformance_tracking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperformance_tracking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperformance_tracking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperformance_tracking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperformance_tracking[".printFriendly"] = true;
}



$tdataperformance_tracking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperformance_tracking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperformance_tracking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperformance_tracking[".isUseAjaxSuggest"] = true;



												

$tdataperformance_tracking[".ajaxCodeSnippetAdded"] = false;

$tdataperformance_tracking[".buttonsAdded"] = false;

$tdataperformance_tracking[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperformance_tracking[".isUseTimeForSearch"] = false;


$tdataperformance_tracking[".badgeColor"] = "CFAE83";


$tdataperformance_tracking[".allSearchFields"] = array();
$tdataperformance_tracking[".filterFields"] = array();
$tdataperformance_tracking[".requiredSearchFields"] = array();

$tdataperformance_tracking[".googleLikeFields"] = array();
$tdataperformance_tracking[".googleLikeFields"][] = "tracking_id";
$tdataperformance_tracking[".googleLikeFields"][] = "indicator_id";
$tdataperformance_tracking[".googleLikeFields"][] = "baseline_year";
$tdataperformance_tracking[".googleLikeFields"][] = "baseline_value";



$tdataperformance_tracking[".tableType"] = "list";

$tdataperformance_tracking[".printerPageOrientation"] = 0;
$tdataperformance_tracking[".nPrinterPageScale"] = 100;

$tdataperformance_tracking[".nPrinterSplitRecords"] = 40;

$tdataperformance_tracking[".geocodingEnabled"] = false;




$tdataperformance_tracking[".isDisplayLoading"] = true;






$tdataperformance_tracking[".pageSize"] = 20;

$tdataperformance_tracking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataperformance_tracking[".strOrderBy"] = $tstrOrderBy;

$tdataperformance_tracking[".orderindexes"] = array();


$tdataperformance_tracking[".sqlHead"] = "SELECT tracking_id,  	indicator_id,  	baseline_year,  	baseline_value";
$tdataperformance_tracking[".sqlFrom"] = "FROM performance_tracking";
$tdataperformance_tracking[".sqlWhereExpr"] = "";
$tdataperformance_tracking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperformance_tracking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperformance_tracking[".arrGroupsPerPage"] = $arrGPP;

$tdataperformance_tracking[".highlightSearchResults"] = true;

$tableKeysperformance_tracking = array();
$tableKeysperformance_tracking[] = "tracking_id";
$tdataperformance_tracking[".Keys"] = $tableKeysperformance_tracking;


$tdataperformance_tracking[".hideMobileList"] = array();




//	tracking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tracking_id";
	$fdata["GoodName"] = "tracking_id";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_tracking","tracking_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tracking_id";

		$fdata["sourceSingle"] = "tracking_id";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_tracking["tracking_id"] = $fdata;
		$tdataperformance_tracking[".searchableFields"][] = "tracking_id";
//	indicator_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "indicator_id";
	$fdata["GoodName"] = "indicator_id";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_tracking","indicator_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "performance_indicators";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "indicator_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "indicator_name";

	

	
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


	$tdataperformance_tracking["indicator_id"] = $fdata;
		$tdataperformance_tracking[".searchableFields"][] = "indicator_id";
//	baseline_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "baseline_year";
	$fdata["GoodName"] = "baseline_year";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_tracking","baseline_year");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "baseline_year";

		$fdata["sourceSingle"] = "baseline_year";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_tracking["baseline_year"] = $fdata;
		$tdataperformance_tracking[".searchableFields"][] = "baseline_year";
//	baseline_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "baseline_value";
	$fdata["GoodName"] = "baseline_value";
	$fdata["ownerTable"] = "performance_tracking";
	$fdata["Label"] = GetFieldLabel("performance_tracking","baseline_value");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "baseline_value";

		$fdata["sourceSingle"] = "baseline_value";

		$fdata["isSQLExpression"] = true;
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


	$tdataperformance_tracking["baseline_value"] = $fdata;
		$tdataperformance_tracking[".searchableFields"][] = "baseline_value";


$tables_data["performance_tracking"]=&$tdataperformance_tracking;
$field_labels["performance_tracking"] = &$fieldLabelsperformance_tracking;
$fieldToolTips["performance_tracking"] = &$fieldToolTipsperformance_tracking;
$placeHolders["performance_tracking"] = &$placeHoldersperformance_tracking;
$page_titles["performance_tracking"] = &$pageTitlesperformance_tracking;


changeTextControlsToDate( "performance_tracking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["performance_tracking"] = array();
//	performance_years
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="performance_years";
		$detailsParam["dOriginalTable"] = "performance_years";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "performance_years";
	$detailsParam["dCaptionTable"] = GetTableCaption("performance_years");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["performance_tracking"][$dIndex] = $detailsParam;

	
		$detailsTablesData["performance_tracking"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["performance_tracking"][$dIndex]["masterKeys"][]="tracking_id";

				$detailsTablesData["performance_tracking"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["performance_tracking"][$dIndex]["detailKeys"][]="tracking_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["performance_tracking"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="performance_indicators";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="performance_indicators";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "performance_indicators";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["performance_tracking"][0] = $masterParams;
				$masterTablesData["performance_tracking"][0]["masterKeys"] = array();
	$masterTablesData["performance_tracking"][0]["masterKeys"][]="indicator_id";
				$masterTablesData["performance_tracking"][0]["detailKeys"] = array();
	$masterTablesData["performance_tracking"][0]["detailKeys"][]="indicator_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_performance_tracking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tracking_id,  	indicator_id,  	baseline_year,  	baseline_value";
$proto0["m_strFrom"] = "FROM performance_tracking";
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
	"m_strName" => "tracking_id",
	"m_strTable" => "performance_tracking",
	"m_srcTableName" => "performance_tracking"
));

$proto6["m_sql"] = "tracking_id";
$proto6["m_srcTableName"] = "performance_tracking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "indicator_id",
	"m_strTable" => "performance_tracking",
	"m_srcTableName" => "performance_tracking"
));

$proto8["m_sql"] = "indicator_id";
$proto8["m_srcTableName"] = "performance_tracking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline_year",
	"m_strTable" => "performance_tracking",
	"m_srcTableName" => "performance_tracking"
));

$proto10["m_sql"] = "baseline_year";
$proto10["m_srcTableName"] = "performance_tracking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "baseline_value",
	"m_strTable" => "performance_tracking",
	"m_srcTableName" => "performance_tracking"
));

$proto12["m_sql"] = "baseline_value";
$proto12["m_srcTableName"] = "performance_tracking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "performance_tracking";
$proto15["m_srcTableName"] = "performance_tracking";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "tracking_id";
$proto15["m_columns"][] = "indicator_id";
$proto15["m_columns"][] = "baseline_year";
$proto15["m_columns"][] = "baseline_value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "performance_tracking";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "performance_tracking";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="performance_tracking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_performance_tracking = createSqlQuery_performance_tracking();


	
																								;

				

$tdataperformance_tracking[".sqlquery"] = $queryData_performance_tracking;



$tdataperformance_tracking[".hasEvents"] = false;

?>