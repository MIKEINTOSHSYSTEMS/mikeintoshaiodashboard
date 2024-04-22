<?php
$tdataregions = array();
$tdataregions[".searchableFields"] = array();
$tdataregions[".ShortName"] = "regions";
$tdataregions[".OwnerID"] = "";
$tdataregions[".OriginalTable"] = "regions";


$tdataregions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataregions[".originalPagesByType"] = $tdataregions[".pagesByType"];
$tdataregions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataregions[".originalPages"] = $tdataregions[".pages"];
$tdataregions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataregions[".originalDefaultPages"] = $tdataregions[".defaultPages"];

//	field labels
$fieldLabelsregions = array();
$fieldToolTipsregions = array();
$pageTitlesregions = array();
$placeHoldersregions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsregions["English"] = array();
	$fieldToolTipsregions["English"] = array();
	$placeHoldersregions["English"] = array();
	$pageTitlesregions["English"] = array();
	$fieldLabelsregions["English"]["RegionID"] = "Region ID";
	$fieldToolTipsregions["English"]["RegionID"] = "";
	$placeHoldersregions["English"]["RegionID"] = "";
	$fieldLabelsregions["English"]["RegionName"] = "Region Name";
	$fieldToolTipsregions["English"]["RegionName"] = "";
	$placeHoldersregions["English"]["RegionName"] = "";
	$fieldLabelsregions["English"]["Lat"] = "Lat";
	$fieldToolTipsregions["English"]["Lat"] = "";
	$placeHoldersregions["English"]["Lat"] = "";
	$fieldLabelsregions["English"]["Lng"] = "Lng";
	$fieldToolTipsregions["English"]["Lng"] = "";
	$placeHoldersregions["English"]["Lng"] = "";
	if (count($fieldToolTipsregions["English"]))
		$tdataregions[".isUseToolTips"] = true;
}


	$tdataregions[".NCSearch"] = true;



$tdataregions[".shortTableName"] = "regions";
$tdataregions[".nSecOptions"] = 0;

$tdataregions[".mainTableOwnerID"] = "";
$tdataregions[".entityType"] = 0;
$tdataregions[".connId"] = "deredevatderejadevmerqconsulta";


$tdataregions[".strOriginalTableName"] = "regions";

	



$tdataregions[".showAddInPopup"] = false;

$tdataregions[".showEditInPopup"] = false;

$tdataregions[".showViewInPopup"] = false;

$tdataregions[".listAjax"] = false;
//	temporary
//$tdataregions[".listAjax"] = false;

	$tdataregions[".audit"] = false;

	$tdataregions[".locking"] = false;


$pages = $tdataregions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregions[".edit"] = true;
	$tdataregions[".afterEditAction"] = 1;
	$tdataregions[".closePopupAfterEdit"] = 1;
	$tdataregions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataregions[".add"] = true;
$tdataregions[".afterAddAction"] = 1;
$tdataregions[".closePopupAfterAdd"] = 1;
$tdataregions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataregions[".list"] = true;
}



$tdataregions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregions[".printFriendly"] = true;
}



$tdataregions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregions[".isUseAjaxSuggest"] = true;



			

$tdataregions[".ajaxCodeSnippetAdded"] = false;

$tdataregions[".buttonsAdded"] = false;

$tdataregions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataregions[".isUseTimeForSearch"] = false;


$tdataregions[".badgeColor"] = "5F9EA0";


$tdataregions[".allSearchFields"] = array();
$tdataregions[".filterFields"] = array();
$tdataregions[".requiredSearchFields"] = array();

$tdataregions[".googleLikeFields"] = array();
$tdataregions[".googleLikeFields"][] = "RegionID";
$tdataregions[".googleLikeFields"][] = "RegionName";
$tdataregions[".googleLikeFields"][] = "Lat";
$tdataregions[".googleLikeFields"][] = "Lng";



$tdataregions[".tableType"] = "list";

$tdataregions[".printerPageOrientation"] = 0;
$tdataregions[".nPrinterPageScale"] = 100;

$tdataregions[".nPrinterSplitRecords"] = 40;

$tdataregions[".geocodingEnabled"] = true;
$tdataregions[".geocodingData"] = array();
$tdataregions[".geocodingData"]["latField"] = "Lat";
$tdataregions[".geocodingData"]["lngField"] = "Lng";
$tdataregions[".geocodingData"]["addressFields"] = array();
	$tdataregions[".geocodingData"]["addressFields"][] = "RegionName";










$tdataregions[".pageSize"] = 20;

$tdataregions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataregions[".strOrderBy"] = $tstrOrderBy;

$tdataregions[".orderindexes"] = array();


$tdataregions[".sqlHead"] = "SELECT RegionID,  	RegionName,  	Lat,  	Lng";
$tdataregions[".sqlFrom"] = "FROM regions";
$tdataregions[".sqlWhereExpr"] = "";
$tdataregions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregions[".arrGroupsPerPage"] = $arrGPP;

$tdataregions[".highlightSearchResults"] = true;

$tableKeysregions = array();
$tableKeysregions[] = "RegionID";
$tdataregions[".Keys"] = $tableKeysregions;


$tdataregions[".hideMobileList"] = array();




//	RegionID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RegionID";
	$fdata["GoodName"] = "RegionID";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","RegionID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "RegionID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegionID";

	
	
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


	$tdataregions["RegionID"] = $fdata;
		$tdataregions[".searchableFields"][] = "RegionID";
//	RegionName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RegionName";
	$fdata["GoodName"] = "RegionName";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","RegionName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RegionName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegionName";

	
	
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


	$tdataregions["RegionName"] = $fdata;
		$tdataregions[".searchableFields"][] = "RegionName";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdataregions["Lat"] = $fdata;
		$tdataregions[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "regions";
	$fdata["Label"] = GetFieldLabel("regions","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdataregions["Lng"] = $fdata;
		$tdataregions[".searchableFields"][] = "Lng";


$tables_data["regions"]=&$tdataregions;
$field_labels["regions"] = &$fieldLabelsregions;
$fieldToolTips["regions"] = &$fieldToolTipsregions;
$placeHolders["regions"] = &$placeHoldersregions;
$page_titles["regions"] = &$pageTitlesregions;


changeTextControlsToDate( "regions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["regions"] = array();
//	cities
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cities";
		$detailsParam["dOriginalTable"] = "cities";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cities";
	$detailsParam["dCaptionTable"] = GetTableCaption("cities");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["regions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["regions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["regions"][$dIndex]["masterKeys"][]="RegionID";

				$detailsTablesData["regions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["regions"][$dIndex]["detailKeys"][]="RegionID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["regions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_regions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RegionID,  	RegionName,  	Lat,  	Lng";
$proto0["m_strFrom"] = "FROM regions";
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
	"m_strName" => "RegionID",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto6["m_sql"] = "RegionID";
$proto6["m_srcTableName"] = "regions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RegionName",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto8["m_sql"] = "RegionName";
$proto8["m_srcTableName"] = "regions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto10["m_sql"] = "Lat";
$proto10["m_srcTableName"] = "regions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "regions",
	"m_srcTableName" => "regions"
));

$proto12["m_sql"] = "Lng";
$proto12["m_srcTableName"] = "regions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "regions";
$proto15["m_srcTableName"] = "regions";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "RegionID";
$proto15["m_columns"][] = "RegionName";
$proto15["m_columns"][] = "Lat";
$proto15["m_columns"][] = "Lng";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "regions";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "regions";
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
$proto0["m_srcTableName"]="regions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_regions = createSqlQuery_regions();


	
																								;

				

$tdataregions[".sqlquery"] = $queryData_regions;



include_once(getabspath("include/regions_events.php"));
$tdataregions[".hasEvents"] = true;

?>