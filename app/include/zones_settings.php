<?php
$tdatazones = array();
$tdatazones[".searchableFields"] = array();
$tdatazones[".ShortName"] = "zones";
$tdatazones[".OwnerID"] = "";
$tdatazones[".OriginalTable"] = "zones";


$tdatazones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatazones[".originalPagesByType"] = $tdatazones[".pagesByType"];
$tdatazones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatazones[".originalPages"] = $tdatazones[".pages"];
$tdatazones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatazones[".originalDefaultPages"] = $tdatazones[".defaultPages"];

//	field labels
$fieldLabelszones = array();
$fieldToolTipszones = array();
$pageTitleszones = array();
$placeHolderszones = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelszones["English"] = array();
	$fieldToolTipszones["English"] = array();
	$placeHolderszones["English"] = array();
	$pageTitleszones["English"] = array();
	$fieldLabelszones["English"]["ZoneID"] = "Zone ID";
	$fieldToolTipszones["English"]["ZoneID"] = "";
	$placeHolderszones["English"]["ZoneID"] = "";
	$fieldLabelszones["English"]["ZoneName"] = "Zone Name";
	$fieldToolTipszones["English"]["ZoneName"] = "";
	$placeHolderszones["English"]["ZoneName"] = "";
	$fieldLabelszones["English"]["SubCityID"] = "Sub City ID";
	$fieldToolTipszones["English"]["SubCityID"] = "";
	$placeHolderszones["English"]["SubCityID"] = "";
	if (count($fieldToolTipszones["English"]))
		$tdatazones[".isUseToolTips"] = true;
}


	$tdatazones[".NCSearch"] = true;



$tdatazones[".shortTableName"] = "zones";
$tdatazones[".nSecOptions"] = 0;

$tdatazones[".mainTableOwnerID"] = "";
$tdatazones[".entityType"] = 0;
$tdatazones[".connId"] = "deredevatderejadevmerqconsulta";


$tdatazones[".strOriginalTableName"] = "zones";

	



$tdatazones[".showAddInPopup"] = false;

$tdatazones[".showEditInPopup"] = false;

$tdatazones[".showViewInPopup"] = false;

$tdatazones[".listAjax"] = false;
//	temporary
//$tdatazones[".listAjax"] = false;

	$tdatazones[".audit"] = true;

	$tdatazones[".locking"] = false;


$pages = $tdatazones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatazones[".edit"] = true;
	$tdatazones[".afterEditAction"] = 1;
	$tdatazones[".closePopupAfterEdit"] = 1;
	$tdatazones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatazones[".add"] = true;
$tdatazones[".afterAddAction"] = 1;
$tdatazones[".closePopupAfterAdd"] = 1;
$tdatazones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatazones[".list"] = true;
}



$tdatazones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatazones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatazones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatazones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatazones[".printFriendly"] = true;
}



$tdatazones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatazones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatazones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatazones[".isUseAjaxSuggest"] = true;



						

$tdatazones[".ajaxCodeSnippetAdded"] = false;

$tdatazones[".buttonsAdded"] = false;

$tdatazones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazones[".isUseTimeForSearch"] = false;


$tdatazones[".badgeColor"] = "E07878";


$tdatazones[".allSearchFields"] = array();
$tdatazones[".filterFields"] = array();
$tdatazones[".requiredSearchFields"] = array();

$tdatazones[".googleLikeFields"] = array();
$tdatazones[".googleLikeFields"][] = "ZoneID";
$tdatazones[".googleLikeFields"][] = "ZoneName";
$tdatazones[".googleLikeFields"][] = "SubCityID";



$tdatazones[".tableType"] = "list";

$tdatazones[".printerPageOrientation"] = 0;
$tdatazones[".nPrinterPageScale"] = 100;

$tdatazones[".nPrinterSplitRecords"] = 40;

$tdatazones[".geocodingEnabled"] = false;










$tdatazones[".pageSize"] = 20;

$tdatazones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatazones[".strOrderBy"] = $tstrOrderBy;

$tdatazones[".orderindexes"] = array();


$tdatazones[".sqlHead"] = "SELECT ZoneID,  	ZoneName,  	SubCityID";
$tdatazones[".sqlFrom"] = "FROM zones";
$tdatazones[".sqlWhereExpr"] = "";
$tdatazones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazones[".arrGroupsPerPage"] = $arrGPP;

$tdatazones[".highlightSearchResults"] = true;

$tableKeyszones = array();
$tableKeyszones[] = "ZoneID";
$tdatazones[".Keys"] = $tableKeyszones;


$tdatazones[".hideMobileList"] = array();




//	ZoneID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ZoneID";
	$fdata["GoodName"] = "ZoneID";
	$fdata["ownerTable"] = "zones";
	$fdata["Label"] = GetFieldLabel("zones","ZoneID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ZoneID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ZoneID";

	
	
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


	$tdatazones["ZoneID"] = $fdata;
		$tdatazones[".searchableFields"][] = "ZoneID";
//	ZoneName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ZoneName";
	$fdata["GoodName"] = "ZoneName";
	$fdata["ownerTable"] = "zones";
	$fdata["Label"] = GetFieldLabel("zones","ZoneName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ZoneName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ZoneName";

	
	
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


	$tdatazones["ZoneName"] = $fdata;
		$tdatazones[".searchableFields"][] = "ZoneName";
//	SubCityID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SubCityID";
	$fdata["GoodName"] = "SubCityID";
	$fdata["ownerTable"] = "zones";
	$fdata["Label"] = GetFieldLabel("zones","SubCityID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sub_cities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SubCityID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "SubCityName";

	

	
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


	$tdatazones["SubCityID"] = $fdata;
		$tdatazones[".searchableFields"][] = "SubCityID";


$tables_data["zones"]=&$tdatazones;
$field_labels["zones"] = &$fieldLabelszones;
$fieldToolTips["zones"] = &$fieldToolTipszones;
$placeHolders["zones"] = &$placeHolderszones;
$page_titles["zones"] = &$pageTitleszones;


changeTextControlsToDate( "zones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["zones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["zones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="sub_cities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sub_cities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sub_cities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["zones"][0] = $masterParams;
				$masterTablesData["zones"][0]["masterKeys"] = array();
	$masterTablesData["zones"][0]["masterKeys"][]="SubCityID";
				$masterTablesData["zones"][0]["detailKeys"] = array();
	$masterTablesData["zones"][0]["detailKeys"][]="SubCityID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_zones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ZoneID,  	ZoneName,  	SubCityID";
$proto0["m_strFrom"] = "FROM zones";
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
	"m_strName" => "ZoneID",
	"m_strTable" => "zones",
	"m_srcTableName" => "zones"
));

$proto6["m_sql"] = "ZoneID";
$proto6["m_srcTableName"] = "zones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ZoneName",
	"m_strTable" => "zones",
	"m_srcTableName" => "zones"
));

$proto8["m_sql"] = "ZoneName";
$proto8["m_srcTableName"] = "zones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SubCityID",
	"m_strTable" => "zones",
	"m_srcTableName" => "zones"
));

$proto10["m_sql"] = "SubCityID";
$proto10["m_srcTableName"] = "zones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "zones";
$proto13["m_srcTableName"] = "zones";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ZoneID";
$proto13["m_columns"][] = "ZoneName";
$proto13["m_columns"][] = "SubCityID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "zones";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "zones";
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
$proto0["m_srcTableName"]="zones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zones = createSqlQuery_zones();


	
																								;

			

$tdatazones[".sqlquery"] = $queryData_zones;



$tdatazones[".hasEvents"] = false;

?>