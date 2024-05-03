<?php
$tdatacalweekdays = array();
$tdatacalweekdays[".searchableFields"] = array();
$tdatacalweekdays[".ShortName"] = "calweekdays";
$tdatacalweekdays[".OwnerID"] = "";
$tdatacalweekdays[".OriginalTable"] = "calweekdays";


$tdatacalweekdays[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"print\":[\"print\"]}" );
$tdatacalweekdays[".originalPagesByType"] = $tdatacalweekdays[".pagesByType"];
$tdatacalweekdays[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"print\":[\"print\"]}" ) );
$tdatacalweekdays[".originalPages"] = $tdatacalweekdays[".pages"];
$tdatacalweekdays[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"print\":\"print\"}" );
$tdatacalweekdays[".originalDefaultPages"] = $tdatacalweekdays[".defaultPages"];

//	field labels
$fieldLabelscalweekdays = array();
$fieldToolTipscalweekdays = array();
$pageTitlescalweekdays = array();
$placeHolderscalweekdays = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalweekdays["English"] = array();
	$fieldToolTipscalweekdays["English"] = array();
	$placeHolderscalweekdays["English"] = array();
	$pageTitlescalweekdays["English"] = array();
	$fieldLabelscalweekdays["English"]["id"] = "Id";
	$fieldToolTipscalweekdays["English"]["id"] = "";
	$placeHolderscalweekdays["English"]["id"] = "";
	$fieldLabelscalweekdays["English"]["daynum"] = "Daynum";
	$fieldToolTipscalweekdays["English"]["daynum"] = "";
	$placeHolderscalweekdays["English"]["daynum"] = "";
	$fieldLabelscalweekdays["English"]["dayname"] = "Dayname";
	$fieldToolTipscalweekdays["English"]["dayname"] = "";
	$placeHolderscalweekdays["English"]["dayname"] = "";
	if (count($fieldToolTipscalweekdays["English"]))
		$tdatacalweekdays[".isUseToolTips"] = true;
}


	$tdatacalweekdays[".NCSearch"] = true;



$tdatacalweekdays[".shortTableName"] = "calweekdays";
$tdatacalweekdays[".nSecOptions"] = 0;

$tdatacalweekdays[".mainTableOwnerID"] = "";
$tdatacalweekdays[".entityType"] = 0;
$tdatacalweekdays[".connId"] = "project_at_localhost";


$tdatacalweekdays[".strOriginalTableName"] = "calweekdays";

	



$tdatacalweekdays[".showAddInPopup"] = false;

$tdatacalweekdays[".showEditInPopup"] = false;

$tdatacalweekdays[".showViewInPopup"] = false;

$tdatacalweekdays[".listAjax"] = false;
//	temporary
//$tdatacalweekdays[".listAjax"] = false;

	$tdatacalweekdays[".audit"] = false;

	$tdatacalweekdays[".locking"] = false;


$pages = $tdatacalweekdays[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalweekdays[".edit"] = true;
	$tdatacalweekdays[".afterEditAction"] = 1;
	$tdatacalweekdays[".closePopupAfterEdit"] = 1;
	$tdatacalweekdays[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalweekdays[".add"] = true;
$tdatacalweekdays[".afterAddAction"] = 1;
$tdatacalweekdays[".closePopupAfterAdd"] = 1;
$tdatacalweekdays[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalweekdays[".list"] = true;
}



$tdatacalweekdays[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalweekdays[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalweekdays[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalweekdays[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalweekdays[".printFriendly"] = true;
}



$tdatacalweekdays[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalweekdays[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalweekdays[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalweekdays[".isUseAjaxSuggest"] = true;



																								

$tdatacalweekdays[".ajaxCodeSnippetAdded"] = false;

$tdatacalweekdays[".buttonsAdded"] = false;

$tdatacalweekdays[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalweekdays[".isUseTimeForSearch"] = false;


$tdatacalweekdays[".badgeColor"] = "B22222";


$tdatacalweekdays[".allSearchFields"] = array();
$tdatacalweekdays[".filterFields"] = array();
$tdatacalweekdays[".requiredSearchFields"] = array();

$tdatacalweekdays[".googleLikeFields"] = array();
$tdatacalweekdays[".googleLikeFields"][] = "id";
$tdatacalweekdays[".googleLikeFields"][] = "daynum";
$tdatacalweekdays[".googleLikeFields"][] = "dayname";



$tdatacalweekdays[".tableType"] = "list";

$tdatacalweekdays[".printerPageOrientation"] = 0;
$tdatacalweekdays[".nPrinterPageScale"] = 100;

$tdatacalweekdays[".nPrinterSplitRecords"] = 40;

$tdatacalweekdays[".geocodingEnabled"] = false;










$tdatacalweekdays[".pageSize"] = 20;

$tdatacalweekdays[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalweekdays[".strOrderBy"] = $tstrOrderBy;

$tdatacalweekdays[".orderindexes"] = array();


$tdatacalweekdays[".sqlHead"] = "SELECT id,  daynum,  dayname";
$tdatacalweekdays[".sqlFrom"] = "FROM calweekdays";
$tdatacalweekdays[".sqlWhereExpr"] = "";
$tdatacalweekdays[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalweekdays[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalweekdays[".arrGroupsPerPage"] = $arrGPP;

$tdatacalweekdays[".highlightSearchResults"] = true;

$tableKeyscalweekdays = array();
$tableKeyscalweekdays[] = "id";
$tdatacalweekdays[".Keys"] = $tableKeyscalweekdays;


$tdatacalweekdays[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calweekdays";
	$fdata["Label"] = GetFieldLabel("calweekdays","id");
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


	$tdatacalweekdays["id"] = $fdata;
		$tdatacalweekdays[".searchableFields"][] = "id";
//	daynum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "daynum";
	$fdata["GoodName"] = "daynum";
	$fdata["ownerTable"] = "calweekdays";
	$fdata["Label"] = GetFieldLabel("calweekdays","daynum");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "daynum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "daynum";

	
	
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


	$tdatacalweekdays["daynum"] = $fdata;
		$tdatacalweekdays[".searchableFields"][] = "daynum";
//	dayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dayname";
	$fdata["GoodName"] = "dayname";
	$fdata["ownerTable"] = "calweekdays";
	$fdata["Label"] = GetFieldLabel("calweekdays","dayname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dayname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dayname";

	
	
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


	$tdatacalweekdays["dayname"] = $fdata;
		$tdatacalweekdays[".searchableFields"][] = "dayname";


$tables_data["calweekdays"]=&$tdatacalweekdays;
$field_labels["calweekdays"] = &$fieldLabelscalweekdays;
$fieldToolTips["calweekdays"] = &$fieldToolTipscalweekdays;
$placeHolders["calweekdays"] = &$placeHolderscalweekdays;
$page_titles["calweekdays"] = &$pageTitlescalweekdays;


changeTextControlsToDate( "calweekdays" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calweekdays"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calweekdays"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calweekdays()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  daynum,  dayname";
$proto0["m_strFrom"] = "FROM calweekdays";
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
	"m_strTable" => "calweekdays",
	"m_srcTableName" => "calweekdays"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calweekdays";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "daynum",
	"m_strTable" => "calweekdays",
	"m_srcTableName" => "calweekdays"
));

$proto8["m_sql"] = "daynum";
$proto8["m_srcTableName"] = "calweekdays";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dayname",
	"m_strTable" => "calweekdays",
	"m_srcTableName" => "calweekdays"
));

$proto10["m_sql"] = "dayname";
$proto10["m_srcTableName"] = "calweekdays";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calweekdays";
$proto13["m_srcTableName"] = "calweekdays";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "daynum";
$proto13["m_columns"][] = "dayname";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calweekdays";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calweekdays";
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
$proto0["m_srcTableName"]="calweekdays";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calweekdays = createSqlQuery_calweekdays();


	
		;

			

$tdatacalweekdays[".sqlquery"] = $queryData_calweekdays;



$tdatacalweekdays[".hasEvents"] = false;

?>