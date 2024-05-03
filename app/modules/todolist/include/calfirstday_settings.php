<?php
$tdatacalfirstday = array();
$tdatacalfirstday[".searchableFields"] = array();
$tdatacalfirstday[".ShortName"] = "calfirstday";
$tdatacalfirstday[".OwnerID"] = "";
$tdatacalfirstday[".OriginalTable"] = "calfirstday";


$tdatacalfirstday[".pagesByType"] = my_json_decode( "{}" );
$tdatacalfirstday[".originalPagesByType"] = $tdatacalfirstday[".pagesByType"];
$tdatacalfirstday[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacalfirstday[".originalPages"] = $tdatacalfirstday[".pages"];
$tdatacalfirstday[".defaultPages"] = my_json_decode( "{}" );
$tdatacalfirstday[".originalDefaultPages"] = $tdatacalfirstday[".defaultPages"];

//	field labels
$fieldLabelscalfirstday = array();
$fieldToolTipscalfirstday = array();
$pageTitlescalfirstday = array();
$placeHolderscalfirstday = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalfirstday["English"] = array();
	$fieldToolTipscalfirstday["English"] = array();
	$placeHolderscalfirstday["English"] = array();
	$pageTitlescalfirstday["English"] = array();
	$fieldLabelscalfirstday["English"]["id"] = "Id";
	$fieldToolTipscalfirstday["English"]["id"] = "";
	$placeHolderscalfirstday["English"]["id"] = "";
	$fieldLabelscalfirstday["English"]["dayvalue"] = "Dayvalue";
	$fieldToolTipscalfirstday["English"]["dayvalue"] = "";
	$placeHolderscalfirstday["English"]["dayvalue"] = "";
	$fieldLabelscalfirstday["English"]["dayname"] = "Dayname";
	$fieldToolTipscalfirstday["English"]["dayname"] = "";
	$placeHolderscalfirstday["English"]["dayname"] = "";
	if (count($fieldToolTipscalfirstday["English"]))
		$tdatacalfirstday[".isUseToolTips"] = true;
}


	$tdatacalfirstday[".NCSearch"] = true;



$tdatacalfirstday[".shortTableName"] = "calfirstday";
$tdatacalfirstday[".nSecOptions"] = 0;

$tdatacalfirstday[".mainTableOwnerID"] = "";
$tdatacalfirstday[".entityType"] = 0;
$tdatacalfirstday[".connId"] = "project_at_localhost";


$tdatacalfirstday[".strOriginalTableName"] = "calfirstday";

	



$tdatacalfirstday[".showAddInPopup"] = false;

$tdatacalfirstday[".showEditInPopup"] = false;

$tdatacalfirstday[".showViewInPopup"] = false;

$tdatacalfirstday[".listAjax"] = false;
//	temporary
//$tdatacalfirstday[".listAjax"] = false;

	$tdatacalfirstday[".audit"] = false;

	$tdatacalfirstday[".locking"] = false;


$pages = $tdatacalfirstday[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalfirstday[".edit"] = true;
	$tdatacalfirstday[".afterEditAction"] = 1;
	$tdatacalfirstday[".closePopupAfterEdit"] = 1;
	$tdatacalfirstday[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalfirstday[".add"] = true;
$tdatacalfirstday[".afterAddAction"] = 1;
$tdatacalfirstday[".closePopupAfterAdd"] = 1;
$tdatacalfirstday[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalfirstday[".list"] = true;
}



$tdatacalfirstday[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalfirstday[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalfirstday[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalfirstday[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalfirstday[".printFriendly"] = true;
}



$tdatacalfirstday[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalfirstday[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalfirstday[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalfirstday[".isUseAjaxSuggest"] = true;



																								

$tdatacalfirstday[".ajaxCodeSnippetAdded"] = false;

$tdatacalfirstday[".buttonsAdded"] = false;

$tdatacalfirstday[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalfirstday[".isUseTimeForSearch"] = false;


$tdatacalfirstday[".badgeColor"] = "DC143C";


$tdatacalfirstday[".allSearchFields"] = array();
$tdatacalfirstday[".filterFields"] = array();
$tdatacalfirstday[".requiredSearchFields"] = array();

$tdatacalfirstday[".googleLikeFields"] = array();
$tdatacalfirstday[".googleLikeFields"][] = "id";
$tdatacalfirstday[".googleLikeFields"][] = "dayvalue";
$tdatacalfirstday[".googleLikeFields"][] = "dayname";



$tdatacalfirstday[".tableType"] = "list";

$tdatacalfirstday[".printerPageOrientation"] = 0;
$tdatacalfirstday[".nPrinterPageScale"] = 100;

$tdatacalfirstday[".nPrinterSplitRecords"] = 40;

$tdatacalfirstday[".geocodingEnabled"] = false;










$tdatacalfirstday[".pageSize"] = 20;

$tdatacalfirstday[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalfirstday[".strOrderBy"] = $tstrOrderBy;

$tdatacalfirstday[".orderindexes"] = array();


$tdatacalfirstday[".sqlHead"] = "SELECT id,  dayvalue,  dayname";
$tdatacalfirstday[".sqlFrom"] = "FROM calfirstday";
$tdatacalfirstday[".sqlWhereExpr"] = "";
$tdatacalfirstday[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalfirstday[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalfirstday[".arrGroupsPerPage"] = $arrGPP;

$tdatacalfirstday[".highlightSearchResults"] = true;

$tableKeyscalfirstday = array();
$tableKeyscalfirstday[] = "id";
$tdatacalfirstday[".Keys"] = $tableKeyscalfirstday;


$tdatacalfirstday[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calfirstday";
	$fdata["Label"] = GetFieldLabel("calfirstday","id");
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


	$tdatacalfirstday["id"] = $fdata;
		$tdatacalfirstday[".searchableFields"][] = "id";
//	dayvalue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dayvalue";
	$fdata["GoodName"] = "dayvalue";
	$fdata["ownerTable"] = "calfirstday";
	$fdata["Label"] = GetFieldLabel("calfirstday","dayvalue");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dayvalue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dayvalue";

	
	
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


	$tdatacalfirstday["dayvalue"] = $fdata;
		$tdatacalfirstday[".searchableFields"][] = "dayvalue";
//	dayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dayname";
	$fdata["GoodName"] = "dayname";
	$fdata["ownerTable"] = "calfirstday";
	$fdata["Label"] = GetFieldLabel("calfirstday","dayname");
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


	$tdatacalfirstday["dayname"] = $fdata;
		$tdatacalfirstday[".searchableFields"][] = "dayname";


$tables_data["calfirstday"]=&$tdatacalfirstday;
$field_labels["calfirstday"] = &$fieldLabelscalfirstday;
$fieldToolTips["calfirstday"] = &$fieldToolTipscalfirstday;
$placeHolders["calfirstday"] = &$placeHolderscalfirstday;
$page_titles["calfirstday"] = &$pageTitlescalfirstday;


changeTextControlsToDate( "calfirstday" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calfirstday"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calfirstday"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calfirstday()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  dayvalue,  dayname";
$proto0["m_strFrom"] = "FROM calfirstday";
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
	"m_strTable" => "calfirstday",
	"m_srcTableName" => "calfirstday"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calfirstday";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dayvalue",
	"m_strTable" => "calfirstday",
	"m_srcTableName" => "calfirstday"
));

$proto8["m_sql"] = "dayvalue";
$proto8["m_srcTableName"] = "calfirstday";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dayname",
	"m_strTable" => "calfirstday",
	"m_srcTableName" => "calfirstday"
));

$proto10["m_sql"] = "dayname";
$proto10["m_srcTableName"] = "calfirstday";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calfirstday";
$proto13["m_srcTableName"] = "calfirstday";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "dayvalue";
$proto13["m_columns"][] = "dayname";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calfirstday";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calfirstday";
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
$proto0["m_srcTableName"]="calfirstday";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calfirstday = createSqlQuery_calfirstday();


	
		;

			

$tdatacalfirstday[".sqlquery"] = $queryData_calfirstday;



$tdatacalfirstday[".hasEvents"] = false;

?>