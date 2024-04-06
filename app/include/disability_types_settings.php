<?php
$tdatadisability_types = array();
$tdatadisability_types[".searchableFields"] = array();
$tdatadisability_types[".ShortName"] = "disability_types";
$tdatadisability_types[".OwnerID"] = "";
$tdatadisability_types[".OriginalTable"] = "Disability_Types";


$tdatadisability_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadisability_types[".originalPagesByType"] = $tdatadisability_types[".pagesByType"];
$tdatadisability_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadisability_types[".originalPages"] = $tdatadisability_types[".pages"];
$tdatadisability_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadisability_types[".originalDefaultPages"] = $tdatadisability_types[".defaultPages"];

//	field labels
$fieldLabelsdisability_types = array();
$fieldToolTipsdisability_types = array();
$pageTitlesdisability_types = array();
$placeHoldersdisability_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdisability_types["English"] = array();
	$fieldToolTipsdisability_types["English"] = array();
	$placeHoldersdisability_types["English"] = array();
	$pageTitlesdisability_types["English"] = array();
	$fieldLabelsdisability_types["English"]["DisabilityID"] = "Disability ID";
	$fieldToolTipsdisability_types["English"]["DisabilityID"] = "";
	$placeHoldersdisability_types["English"]["DisabilityID"] = "";
	$fieldLabelsdisability_types["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipsdisability_types["English"]["Disability_Type"] = "";
	$placeHoldersdisability_types["English"]["Disability_Type"] = "";
	if (count($fieldToolTipsdisability_types["English"]))
		$tdatadisability_types[".isUseToolTips"] = true;
}


	$tdatadisability_types[".NCSearch"] = true;



$tdatadisability_types[".shortTableName"] = "disability_types";
$tdatadisability_types[".nSecOptions"] = 0;

$tdatadisability_types[".mainTableOwnerID"] = "";
$tdatadisability_types[".entityType"] = 0;
$tdatadisability_types[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadisability_types[".strOriginalTableName"] = "Disability_Types";

	



$tdatadisability_types[".showAddInPopup"] = false;

$tdatadisability_types[".showEditInPopup"] = false;

$tdatadisability_types[".showViewInPopup"] = false;

$tdatadisability_types[".listAjax"] = false;
//	temporary
//$tdatadisability_types[".listAjax"] = false;

	$tdatadisability_types[".audit"] = false;

	$tdatadisability_types[".locking"] = false;


$pages = $tdatadisability_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadisability_types[".edit"] = true;
	$tdatadisability_types[".afterEditAction"] = 1;
	$tdatadisability_types[".closePopupAfterEdit"] = 1;
	$tdatadisability_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadisability_types[".add"] = true;
$tdatadisability_types[".afterAddAction"] = 1;
$tdatadisability_types[".closePopupAfterAdd"] = 1;
$tdatadisability_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadisability_types[".list"] = true;
}



$tdatadisability_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadisability_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadisability_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadisability_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadisability_types[".printFriendly"] = true;
}



$tdatadisability_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadisability_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadisability_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadisability_types[".isUseAjaxSuggest"] = true;





$tdatadisability_types[".ajaxCodeSnippetAdded"] = false;

$tdatadisability_types[".buttonsAdded"] = false;

$tdatadisability_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadisability_types[".isUseTimeForSearch"] = false;


$tdatadisability_types[".badgeColor"] = "6DA5C8";


$tdatadisability_types[".allSearchFields"] = array();
$tdatadisability_types[".filterFields"] = array();
$tdatadisability_types[".requiredSearchFields"] = array();

$tdatadisability_types[".googleLikeFields"] = array();
$tdatadisability_types[".googleLikeFields"][] = "DisabilityID";
$tdatadisability_types[".googleLikeFields"][] = "Disability_Type";



$tdatadisability_types[".tableType"] = "list";

$tdatadisability_types[".printerPageOrientation"] = 0;
$tdatadisability_types[".nPrinterPageScale"] = 100;

$tdatadisability_types[".nPrinterSplitRecords"] = 40;

$tdatadisability_types[".geocodingEnabled"] = false;










$tdatadisability_types[".pageSize"] = 20;

$tdatadisability_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadisability_types[".strOrderBy"] = $tstrOrderBy;

$tdatadisability_types[".orderindexes"] = array();


$tdatadisability_types[".sqlHead"] = "SELECT DisabilityID,  	Disability_Type";
$tdatadisability_types[".sqlFrom"] = "FROM Disability_Types";
$tdatadisability_types[".sqlWhereExpr"] = "";
$tdatadisability_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadisability_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadisability_types[".arrGroupsPerPage"] = $arrGPP;

$tdatadisability_types[".highlightSearchResults"] = true;

$tableKeysdisability_types = array();
$tableKeysdisability_types[] = "DisabilityID";
$tdatadisability_types[".Keys"] = $tableKeysdisability_types;


$tdatadisability_types[".hideMobileList"] = array();




//	DisabilityID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DisabilityID";
	$fdata["GoodName"] = "DisabilityID";
	$fdata["ownerTable"] = "Disability_Types";
	$fdata["Label"] = GetFieldLabel("Disability_Types","DisabilityID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DisabilityID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DisabilityID";

	
	
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


	$tdatadisability_types["DisabilityID"] = $fdata;
		$tdatadisability_types[".searchableFields"][] = "DisabilityID";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "Disability_Types";
	$fdata["Label"] = GetFieldLabel("Disability_Types","Disability_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Disability_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type";

	
	
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


	$tdatadisability_types["Disability_Type"] = $fdata;
		$tdatadisability_types[".searchableFields"][] = "Disability_Type";


$tables_data["Disability_Types"]=&$tdatadisability_types;
$field_labels["Disability_Types"] = &$fieldLabelsdisability_types;
$fieldToolTips["Disability_Types"] = &$fieldToolTipsdisability_types;
$placeHolders["Disability_Types"] = &$placeHoldersdisability_types;
$page_titles["Disability_Types"] = &$pageTitlesdisability_types;


changeTextControlsToDate( "Disability_Types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Disability_Types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Disability_Types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_disability_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DisabilityID,  	Disability_Type";
$proto0["m_strFrom"] = "FROM Disability_Types";
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
	"m_strName" => "DisabilityID",
	"m_strTable" => "Disability_Types",
	"m_srcTableName" => "Disability_Types"
));

$proto6["m_sql"] = "DisabilityID";
$proto6["m_srcTableName"] = "Disability_Types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "Disability_Types",
	"m_srcTableName" => "Disability_Types"
));

$proto8["m_sql"] = "Disability_Type";
$proto8["m_srcTableName"] = "Disability_Types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Disability_Types";
$proto11["m_srcTableName"] = "Disability_Types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "DisabilityID";
$proto11["m_columns"][] = "Disability_Type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Disability_Types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Disability_Types";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Disability_Types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_disability_types = createSqlQuery_disability_types();


	
																								;

		

$tdatadisability_types[".sqlquery"] = $queryData_disability_types;



$tdatadisability_types[".hasEvents"] = false;

?>