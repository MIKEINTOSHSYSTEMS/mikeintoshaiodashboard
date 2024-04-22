<?php
$tdatacities = array();
$tdatacities[".searchableFields"] = array();
$tdatacities[".ShortName"] = "cities";
$tdatacities[".OwnerID"] = "";
$tdatacities[".OriginalTable"] = "cities";


$tdatacities[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacities[".originalPagesByType"] = $tdatacities[".pagesByType"];
$tdatacities[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacities[".originalPages"] = $tdatacities[".pages"];
$tdatacities[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacities[".originalDefaultPages"] = $tdatacities[".defaultPages"];

//	field labels
$fieldLabelscities = array();
$fieldToolTipscities = array();
$pageTitlescities = array();
$placeHolderscities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscities["English"] = array();
	$fieldToolTipscities["English"] = array();
	$placeHolderscities["English"] = array();
	$pageTitlescities["English"] = array();
	$fieldLabelscities["English"]["CityID"] = "City ID";
	$fieldToolTipscities["English"]["CityID"] = "";
	$placeHolderscities["English"]["CityID"] = "";
	$fieldLabelscities["English"]["CityName"] = "City Name";
	$fieldToolTipscities["English"]["CityName"] = "";
	$placeHolderscities["English"]["CityName"] = "";
	$fieldLabelscities["English"]["RegionID"] = "Region ID";
	$fieldToolTipscities["English"]["RegionID"] = "";
	$placeHolderscities["English"]["RegionID"] = "";
	if (count($fieldToolTipscities["English"]))
		$tdatacities[".isUseToolTips"] = true;
}


	$tdatacities[".NCSearch"] = true;



$tdatacities[".shortTableName"] = "cities";
$tdatacities[".nSecOptions"] = 0;

$tdatacities[".mainTableOwnerID"] = "";
$tdatacities[".entityType"] = 0;
$tdatacities[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacities[".strOriginalTableName"] = "cities";

	



$tdatacities[".showAddInPopup"] = false;

$tdatacities[".showEditInPopup"] = false;

$tdatacities[".showViewInPopup"] = false;

$tdatacities[".listAjax"] = false;
//	temporary
//$tdatacities[".listAjax"] = false;

	$tdatacities[".audit"] = false;

	$tdatacities[".locking"] = false;


$pages = $tdatacities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacities[".edit"] = true;
	$tdatacities[".afterEditAction"] = 1;
	$tdatacities[".closePopupAfterEdit"] = 1;
	$tdatacities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacities[".add"] = true;
$tdatacities[".afterAddAction"] = 1;
$tdatacities[".closePopupAfterAdd"] = 1;
$tdatacities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacities[".list"] = true;
}



$tdatacities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacities[".printFriendly"] = true;
}



$tdatacities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacities[".isUseAjaxSuggest"] = true;



						

$tdatacities[".ajaxCodeSnippetAdded"] = false;

$tdatacities[".buttonsAdded"] = false;

$tdatacities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacities[".isUseTimeForSearch"] = false;


$tdatacities[".badgeColor"] = "E07878";


$tdatacities[".allSearchFields"] = array();
$tdatacities[".filterFields"] = array();
$tdatacities[".requiredSearchFields"] = array();

$tdatacities[".googleLikeFields"] = array();
$tdatacities[".googleLikeFields"][] = "CityID";
$tdatacities[".googleLikeFields"][] = "CityName";
$tdatacities[".googleLikeFields"][] = "RegionID";



$tdatacities[".tableType"] = "list";

$tdatacities[".printerPageOrientation"] = 0;
$tdatacities[".nPrinterPageScale"] = 100;

$tdatacities[".nPrinterSplitRecords"] = 40;

$tdatacities[".geocodingEnabled"] = false;










$tdatacities[".pageSize"] = 20;

$tdatacities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacities[".strOrderBy"] = $tstrOrderBy;

$tdatacities[".orderindexes"] = array();


$tdatacities[".sqlHead"] = "SELECT CityID,  	CityName,  	RegionID";
$tdatacities[".sqlFrom"] = "FROM cities";
$tdatacities[".sqlWhereExpr"] = "";
$tdatacities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacities[".arrGroupsPerPage"] = $arrGPP;

$tdatacities[".highlightSearchResults"] = true;

$tableKeyscities = array();
$tableKeyscities[] = "CityID";
$tdatacities[".Keys"] = $tableKeyscities;


$tdatacities[".hideMobileList"] = array();




//	CityID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CityID";
	$fdata["GoodName"] = "CityID";
	$fdata["ownerTable"] = "cities";
	$fdata["Label"] = GetFieldLabel("cities","CityID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CityID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CityID";

	
	
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


	$tdatacities["CityID"] = $fdata;
		$tdatacities[".searchableFields"][] = "CityID";
//	CityName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CityName";
	$fdata["GoodName"] = "CityName";
	$fdata["ownerTable"] = "cities";
	$fdata["Label"] = GetFieldLabel("cities","CityName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CityName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CityName";

	
	
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


	$tdatacities["CityName"] = $fdata;
		$tdatacities[".searchableFields"][] = "CityName";
//	RegionID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RegionID";
	$fdata["GoodName"] = "RegionID";
	$fdata["ownerTable"] = "cities";
	$fdata["Label"] = GetFieldLabel("cities","RegionID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "RegionID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "RegionName";

	

	
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


	$tdatacities["RegionID"] = $fdata;
		$tdatacities[".searchableFields"][] = "RegionID";


$tables_data["cities"]=&$tdatacities;
$field_labels["cities"] = &$fieldLabelscities;
$fieldToolTips["cities"] = &$fieldToolTipscities;
$placeHolders["cities"] = &$placeHolderscities;
$page_titles["cities"] = &$pageTitlescities;


changeTextControlsToDate( "cities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cities"] = array();
//	sub_cities
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sub_cities";
		$detailsParam["dOriginalTable"] = "sub_cities";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sub_cities";
	$detailsParam["dCaptionTable"] = GetTableCaption("sub_cities");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cities"][$dIndex]["masterKeys"][]="CityID";

				$detailsTablesData["cities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cities"][$dIndex]["detailKeys"][]="CityID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cities"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="regions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="regions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "regions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cities"][0] = $masterParams;
				$masterTablesData["cities"][0]["masterKeys"] = array();
	$masterTablesData["cities"][0]["masterKeys"][]="RegionID";
				$masterTablesData["cities"][0]["detailKeys"] = array();
	$masterTablesData["cities"][0]["detailKeys"][]="RegionID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CityID,  	CityName,  	RegionID";
$proto0["m_strFrom"] = "FROM cities";
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
	"m_strName" => "CityID",
	"m_strTable" => "cities",
	"m_srcTableName" => "cities"
));

$proto6["m_sql"] = "CityID";
$proto6["m_srcTableName"] = "cities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CityName",
	"m_strTable" => "cities",
	"m_srcTableName" => "cities"
));

$proto8["m_sql"] = "CityName";
$proto8["m_srcTableName"] = "cities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RegionID",
	"m_strTable" => "cities",
	"m_srcTableName" => "cities"
));

$proto10["m_sql"] = "RegionID";
$proto10["m_srcTableName"] = "cities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cities";
$proto13["m_srcTableName"] = "cities";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "CityID";
$proto13["m_columns"][] = "CityName";
$proto13["m_columns"][] = "RegionID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cities";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cities";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cities = createSqlQuery_cities();


	
																								;

			

$tdatacities[".sqlquery"] = $queryData_cities;



include_once(getabspath("include/cities_events.php"));
$tdatacities[".hasEvents"] = true;

?>