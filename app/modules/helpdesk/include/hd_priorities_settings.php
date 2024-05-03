<?php
$tdatahd_priorities = array();
$tdatahd_priorities[".searchableFields"] = array();
$tdatahd_priorities[".ShortName"] = "hd_priorities";
$tdatahd_priorities[".OwnerID"] = "";
$tdatahd_priorities[".OriginalTable"] = "hd_priorities";


$tdatahd_priorities[".pagesByType"] = my_json_decode( "{}" );
$tdatahd_priorities[".originalPagesByType"] = $tdatahd_priorities[".pagesByType"];
$tdatahd_priorities[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatahd_priorities[".originalPages"] = $tdatahd_priorities[".pages"];
$tdatahd_priorities[".defaultPages"] = my_json_decode( "{}" );
$tdatahd_priorities[".originalDefaultPages"] = $tdatahd_priorities[".defaultPages"];

//	field labels
$fieldLabelshd_priorities = array();
$fieldToolTipshd_priorities = array();
$pageTitleshd_priorities = array();
$placeHoldershd_priorities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_priorities["English"] = array();
	$fieldToolTipshd_priorities["English"] = array();
	$placeHoldershd_priorities["English"] = array();
	$pageTitleshd_priorities["English"] = array();
	$fieldLabelshd_priorities["English"]["id"] = "Id";
	$fieldToolTipshd_priorities["English"]["id"] = "";
	$placeHoldershd_priorities["English"]["id"] = "";
	$fieldLabelshd_priorities["English"]["priorityname"] = "Priorityname";
	$fieldToolTipshd_priorities["English"]["priorityname"] = "";
	$placeHoldershd_priorities["English"]["priorityname"] = "";
	if (count($fieldToolTipshd_priorities["English"]))
		$tdatahd_priorities[".isUseToolTips"] = true;
}


	$tdatahd_priorities[".NCSearch"] = true;



$tdatahd_priorities[".shortTableName"] = "hd_priorities";
$tdatahd_priorities[".nSecOptions"] = 0;

$tdatahd_priorities[".mainTableOwnerID"] = "";
$tdatahd_priorities[".entityType"] = 0;
$tdatahd_priorities[".connId"] = "project_at_localhost";


$tdatahd_priorities[".strOriginalTableName"] = "hd_priorities";

	



$tdatahd_priorities[".showAddInPopup"] = false;

$tdatahd_priorities[".showEditInPopup"] = false;

$tdatahd_priorities[".showViewInPopup"] = false;

$tdatahd_priorities[".listAjax"] = false;
//	temporary
//$tdatahd_priorities[".listAjax"] = false;

	$tdatahd_priorities[".audit"] = false;

	$tdatahd_priorities[".locking"] = false;


$pages = $tdatahd_priorities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_priorities[".edit"] = true;
	$tdatahd_priorities[".afterEditAction"] = 1;
	$tdatahd_priorities[".closePopupAfterEdit"] = 1;
	$tdatahd_priorities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_priorities[".add"] = true;
$tdatahd_priorities[".afterAddAction"] = 1;
$tdatahd_priorities[".closePopupAfterAdd"] = 1;
$tdatahd_priorities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_priorities[".list"] = true;
}



$tdatahd_priorities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_priorities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_priorities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_priorities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_priorities[".printFriendly"] = true;
}



$tdatahd_priorities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_priorities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_priorities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_priorities[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_priorities[".ajaxCodeSnippetAdded"] = false;

$tdatahd_priorities[".buttonsAdded"] = false;

$tdatahd_priorities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahd_priorities[".isUseTimeForSearch"] = false;


$tdatahd_priorities[".badgeColor"] = "8FBC8B";


$tdatahd_priorities[".allSearchFields"] = array();
$tdatahd_priorities[".filterFields"] = array();
$tdatahd_priorities[".requiredSearchFields"] = array();

$tdatahd_priorities[".googleLikeFields"] = array();
$tdatahd_priorities[".googleLikeFields"][] = "id";
$tdatahd_priorities[".googleLikeFields"][] = "priorityname";



$tdatahd_priorities[".tableType"] = "list";

$tdatahd_priorities[".printerPageOrientation"] = 0;
$tdatahd_priorities[".nPrinterPageScale"] = 100;

$tdatahd_priorities[".nPrinterSplitRecords"] = 40;

$tdatahd_priorities[".geocodingEnabled"] = false;










$tdatahd_priorities[".pageSize"] = 20;

$tdatahd_priorities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_priorities[".strOrderBy"] = $tstrOrderBy;

$tdatahd_priorities[".orderindexes"] = array();


$tdatahd_priorities[".sqlHead"] = "SELECT id,  priorityname";
$tdatahd_priorities[".sqlFrom"] = "FROM hd_priorities";
$tdatahd_priorities[".sqlWhereExpr"] = "";
$tdatahd_priorities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_priorities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_priorities[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_priorities[".highlightSearchResults"] = true;

$tableKeyshd_priorities = array();
$tableKeyshd_priorities[] = "id";
$tdatahd_priorities[".Keys"] = $tableKeyshd_priorities;


$tdatahd_priorities[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_priorities";
	$fdata["Label"] = GetFieldLabel("hd_priorities","id");
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


	$tdatahd_priorities["id"] = $fdata;
		$tdatahd_priorities[".searchableFields"][] = "id";
//	priorityname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "priorityname";
	$fdata["GoodName"] = "priorityname";
	$fdata["ownerTable"] = "hd_priorities";
	$fdata["Label"] = GetFieldLabel("hd_priorities","priorityname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "priorityname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priorityname";

	
	
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


	$tdatahd_priorities["priorityname"] = $fdata;
		$tdatahd_priorities[".searchableFields"][] = "priorityname";


$tables_data["hd_priorities"]=&$tdatahd_priorities;
$field_labels["hd_priorities"] = &$fieldLabelshd_priorities;
$fieldToolTips["hd_priorities"] = &$fieldToolTipshd_priorities;
$placeHolders["hd_priorities"] = &$placeHoldershd_priorities;
$page_titles["hd_priorities"] = &$pageTitleshd_priorities;


changeTextControlsToDate( "hd_priorities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_priorities"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_priorities"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_priorities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  priorityname";
$proto0["m_strFrom"] = "FROM hd_priorities";
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
	"m_strTable" => "hd_priorities",
	"m_srcTableName" => "hd_priorities"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_priorities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "priorityname",
	"m_strTable" => "hd_priorities",
	"m_srcTableName" => "hd_priorities"
));

$proto8["m_sql"] = "priorityname";
$proto8["m_srcTableName"] = "hd_priorities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hd_priorities";
$proto11["m_srcTableName"] = "hd_priorities";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "priorityname";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hd_priorities";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hd_priorities";
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
$proto0["m_srcTableName"]="hd_priorities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_priorities = createSqlQuery_hd_priorities();


	
		;

		

$tdatahd_priorities[".sqlquery"] = $queryData_hd_priorities;



$tdatahd_priorities[".hasEvents"] = false;

?>