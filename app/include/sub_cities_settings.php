<?php
$tdatasub_cities = array();
$tdatasub_cities[".searchableFields"] = array();
$tdatasub_cities[".ShortName"] = "sub_cities";
$tdatasub_cities[".OwnerID"] = "";
$tdatasub_cities[".OriginalTable"] = "sub_cities";


$tdatasub_cities[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasub_cities[".originalPagesByType"] = $tdatasub_cities[".pagesByType"];
$tdatasub_cities[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasub_cities[".originalPages"] = $tdatasub_cities[".pages"];
$tdatasub_cities[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasub_cities[".originalDefaultPages"] = $tdatasub_cities[".defaultPages"];

//	field labels
$fieldLabelssub_cities = array();
$fieldToolTipssub_cities = array();
$pageTitlessub_cities = array();
$placeHolderssub_cities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssub_cities["English"] = array();
	$fieldToolTipssub_cities["English"] = array();
	$placeHolderssub_cities["English"] = array();
	$pageTitlessub_cities["English"] = array();
	$fieldLabelssub_cities["English"]["SubCityID"] = "Sub City ID";
	$fieldToolTipssub_cities["English"]["SubCityID"] = "";
	$placeHolderssub_cities["English"]["SubCityID"] = "";
	$fieldLabelssub_cities["English"]["SubCityName"] = "Sub City Name";
	$fieldToolTipssub_cities["English"]["SubCityName"] = "";
	$placeHolderssub_cities["English"]["SubCityName"] = "";
	$fieldLabelssub_cities["English"]["CityID"] = "City ID";
	$fieldToolTipssub_cities["English"]["CityID"] = "";
	$placeHolderssub_cities["English"]["CityID"] = "";
	if (count($fieldToolTipssub_cities["English"]))
		$tdatasub_cities[".isUseToolTips"] = true;
}


	$tdatasub_cities[".NCSearch"] = true;



$tdatasub_cities[".shortTableName"] = "sub_cities";
$tdatasub_cities[".nSecOptions"] = 0;

$tdatasub_cities[".mainTableOwnerID"] = "";
$tdatasub_cities[".entityType"] = 0;
$tdatasub_cities[".connId"] = "deredevatderejadevmerqconsulta";


$tdatasub_cities[".strOriginalTableName"] = "sub_cities";

	



$tdatasub_cities[".showAddInPopup"] = false;

$tdatasub_cities[".showEditInPopup"] = false;

$tdatasub_cities[".showViewInPopup"] = false;

$tdatasub_cities[".listAjax"] = false;
//	temporary
//$tdatasub_cities[".listAjax"] = false;

	$tdatasub_cities[".audit"] = false;

	$tdatasub_cities[".locking"] = false;


$pages = $tdatasub_cities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasub_cities[".edit"] = true;
	$tdatasub_cities[".afterEditAction"] = 1;
	$tdatasub_cities[".closePopupAfterEdit"] = 1;
	$tdatasub_cities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasub_cities[".add"] = true;
$tdatasub_cities[".afterAddAction"] = 1;
$tdatasub_cities[".closePopupAfterAdd"] = 1;
$tdatasub_cities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasub_cities[".list"] = true;
}



$tdatasub_cities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasub_cities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasub_cities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasub_cities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasub_cities[".printFriendly"] = true;
}



$tdatasub_cities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasub_cities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasub_cities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasub_cities[".isUseAjaxSuggest"] = true;





$tdatasub_cities[".ajaxCodeSnippetAdded"] = false;

$tdatasub_cities[".buttonsAdded"] = false;

$tdatasub_cities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasub_cities[".isUseTimeForSearch"] = false;


$tdatasub_cities[".badgeColor"] = "B22222";


$tdatasub_cities[".allSearchFields"] = array();
$tdatasub_cities[".filterFields"] = array();
$tdatasub_cities[".requiredSearchFields"] = array();

$tdatasub_cities[".googleLikeFields"] = array();
$tdatasub_cities[".googleLikeFields"][] = "SubCityID";
$tdatasub_cities[".googleLikeFields"][] = "SubCityName";
$tdatasub_cities[".googleLikeFields"][] = "CityID";



$tdatasub_cities[".tableType"] = "list";

$tdatasub_cities[".printerPageOrientation"] = 0;
$tdatasub_cities[".nPrinterPageScale"] = 100;

$tdatasub_cities[".nPrinterSplitRecords"] = 40;

$tdatasub_cities[".geocodingEnabled"] = false;










$tdatasub_cities[".pageSize"] = 20;

$tdatasub_cities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasub_cities[".strOrderBy"] = $tstrOrderBy;

$tdatasub_cities[".orderindexes"] = array();


$tdatasub_cities[".sqlHead"] = "SELECT SubCityID,  	SubCityName,  	CityID";
$tdatasub_cities[".sqlFrom"] = "FROM sub_cities";
$tdatasub_cities[".sqlWhereExpr"] = "";
$tdatasub_cities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasub_cities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasub_cities[".arrGroupsPerPage"] = $arrGPP;

$tdatasub_cities[".highlightSearchResults"] = true;

$tableKeyssub_cities = array();
$tableKeyssub_cities[] = "SubCityID";
$tdatasub_cities[".Keys"] = $tableKeyssub_cities;


$tdatasub_cities[".hideMobileList"] = array();




//	SubCityID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SubCityID";
	$fdata["GoodName"] = "SubCityID";
	$fdata["ownerTable"] = "sub_cities";
	$fdata["Label"] = GetFieldLabel("sub_cities","SubCityID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SubCityID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubCityID";

	
	
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


	$tdatasub_cities["SubCityID"] = $fdata;
		$tdatasub_cities[".searchableFields"][] = "SubCityID";
//	SubCityName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SubCityName";
	$fdata["GoodName"] = "SubCityName";
	$fdata["ownerTable"] = "sub_cities";
	$fdata["Label"] = GetFieldLabel("sub_cities","SubCityName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SubCityName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubCityName";

	
	
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


	$tdatasub_cities["SubCityName"] = $fdata;
		$tdatasub_cities[".searchableFields"][] = "SubCityName";
//	CityID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CityID";
	$fdata["GoodName"] = "CityID";
	$fdata["ownerTable"] = "sub_cities";
	$fdata["Label"] = GetFieldLabel("sub_cities","CityID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CityID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CityName";

	

	
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


	$tdatasub_cities["CityID"] = $fdata;
		$tdatasub_cities[".searchableFields"][] = "CityID";


$tables_data["sub_cities"]=&$tdatasub_cities;
$field_labels["sub_cities"] = &$fieldLabelssub_cities;
$fieldToolTips["sub_cities"] = &$fieldToolTipssub_cities;
$placeHolders["sub_cities"] = &$placeHolderssub_cities;
$page_titles["sub_cities"] = &$pageTitlessub_cities;


changeTextControlsToDate( "sub_cities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sub_cities"] = array();
//	zones
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="zones";
		$detailsParam["dOriginalTable"] = "zones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "zones";
	$detailsParam["dCaptionTable"] = GetTableCaption("zones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sub_cities"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sub_cities"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sub_cities"][$dIndex]["masterKeys"][]="SubCityID";

				$detailsTablesData["sub_cities"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sub_cities"][$dIndex]["detailKeys"][]="SubCityID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sub_cities"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sub_cities"][0] = $masterParams;
				$masterTablesData["sub_cities"][0]["masterKeys"] = array();
	$masterTablesData["sub_cities"][0]["masterKeys"][]="CityID";
				$masterTablesData["sub_cities"][0]["detailKeys"] = array();
	$masterTablesData["sub_cities"][0]["detailKeys"][]="CityID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sub_cities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SubCityID,  	SubCityName,  	CityID";
$proto0["m_strFrom"] = "FROM sub_cities";
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
	"m_strName" => "SubCityID",
	"m_strTable" => "sub_cities",
	"m_srcTableName" => "sub_cities"
));

$proto6["m_sql"] = "SubCityID";
$proto6["m_srcTableName"] = "sub_cities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SubCityName",
	"m_strTable" => "sub_cities",
	"m_srcTableName" => "sub_cities"
));

$proto8["m_sql"] = "SubCityName";
$proto8["m_srcTableName"] = "sub_cities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CityID",
	"m_strTable" => "sub_cities",
	"m_srcTableName" => "sub_cities"
));

$proto10["m_sql"] = "CityID";
$proto10["m_srcTableName"] = "sub_cities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sub_cities";
$proto13["m_srcTableName"] = "sub_cities";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "SubCityID";
$proto13["m_columns"][] = "SubCityName";
$proto13["m_columns"][] = "CityID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sub_cities";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sub_cities";
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
$proto0["m_srcTableName"]="sub_cities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sub_cities = createSqlQuery_sub_cities();


	
																								;

			

$tdatasub_cities[".sqlquery"] = $queryData_sub_cities;



$tdatasub_cities[".hasEvents"] = false;

?>