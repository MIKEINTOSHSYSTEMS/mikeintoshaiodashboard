<?php
$tdatatodoboards = array();
$tdatatodoboards[".searchableFields"] = array();
$tdatatodoboards[".ShortName"] = "todoboards";
$tdatatodoboards[".OwnerID"] = "";
$tdatatodoboards[".OriginalTable"] = "todoboards";


$tdatatodoboards[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatodoboards[".originalPagesByType"] = $tdatatodoboards[".pagesByType"];
$tdatatodoboards[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatodoboards[".originalPages"] = $tdatatodoboards[".pages"];
$tdatatodoboards[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatodoboards[".originalDefaultPages"] = $tdatatodoboards[".defaultPages"];

//	field labels
$fieldLabelstodoboards = array();
$fieldToolTipstodoboards = array();
$pageTitlestodoboards = array();
$placeHolderstodoboards = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodoboards["English"] = array();
	$fieldToolTipstodoboards["English"] = array();
	$placeHolderstodoboards["English"] = array();
	$pageTitlestodoboards["English"] = array();
	$fieldLabelstodoboards["English"]["id"] = "Id";
	$fieldToolTipstodoboards["English"]["id"] = "";
	$placeHolderstodoboards["English"]["id"] = "";
	$fieldLabelstodoboards["English"]["boardname"] = "Boardname";
	$fieldToolTipstodoboards["English"]["boardname"] = "";
	$placeHolderstodoboards["English"]["boardname"] = "";
	$fieldLabelstodoboards["English"]["userid"] = "Userid";
	$fieldToolTipstodoboards["English"]["userid"] = "";
	$placeHolderstodoboards["English"]["userid"] = "";
	$pageTitlestodoboards["English"]["edit"] = "{%boardname}";
	if (count($fieldToolTipstodoboards["English"]))
		$tdatatodoboards[".isUseToolTips"] = true;
}


	$tdatatodoboards[".NCSearch"] = true;



$tdatatodoboards[".shortTableName"] = "todoboards";
$tdatatodoboards[".nSecOptions"] = 0;

$tdatatodoboards[".mainTableOwnerID"] = "";
$tdatatodoboards[".entityType"] = 0;
$tdatatodoboards[".connId"] = "project_at_localhost";


$tdatatodoboards[".strOriginalTableName"] = "todoboards";

	



$tdatatodoboards[".showAddInPopup"] = false;

$tdatatodoboards[".showEditInPopup"] = false;

$tdatatodoboards[".showViewInPopup"] = false;

$tdatatodoboards[".listAjax"] = false;
//	temporary
//$tdatatodoboards[".listAjax"] = false;

	$tdatatodoboards[".audit"] = false;

	$tdatatodoboards[".locking"] = false;


$pages = $tdatatodoboards[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodoboards[".edit"] = true;
	$tdatatodoboards[".afterEditAction"] = 1;
	$tdatatodoboards[".closePopupAfterEdit"] = 1;
	$tdatatodoboards[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodoboards[".add"] = true;
$tdatatodoboards[".afterAddAction"] = 1;
$tdatatodoboards[".closePopupAfterAdd"] = 1;
$tdatatodoboards[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodoboards[".list"] = true;
}



$tdatatodoboards[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodoboards[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodoboards[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodoboards[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodoboards[".printFriendly"] = true;
}



$tdatatodoboards[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodoboards[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodoboards[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodoboards[".isUseAjaxSuggest"] = true;



																								

$tdatatodoboards[".ajaxCodeSnippetAdded"] = false;

$tdatatodoboards[".buttonsAdded"] = false;

$tdatatodoboards[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatodoboards[".isUseTimeForSearch"] = false;


$tdatatodoboards[".badgeColor"] = "E07878";


$tdatatodoboards[".allSearchFields"] = array();
$tdatatodoboards[".filterFields"] = array();
$tdatatodoboards[".requiredSearchFields"] = array();

$tdatatodoboards[".googleLikeFields"] = array();
$tdatatodoboards[".googleLikeFields"][] = "id";
$tdatatodoboards[".googleLikeFields"][] = "boardname";
$tdatatodoboards[".googleLikeFields"][] = "userid";



$tdatatodoboards[".tableType"] = "list";

$tdatatodoboards[".printerPageOrientation"] = 0;
$tdatatodoboards[".nPrinterPageScale"] = 100;

$tdatatodoboards[".nPrinterSplitRecords"] = 40;

$tdatatodoboards[".geocodingEnabled"] = false;










$tdatatodoboards[".pageSize"] = 500;




$tstrOrderBy = "ORDER BY id";
$tdatatodoboards[".strOrderBy"] = $tstrOrderBy;

$tdatatodoboards[".orderindexes"] = array();
	$tdatatodoboards[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "id");



$tdatatodoboards[".sqlHead"] = "SELECT id,  boardname,  userid";
$tdatatodoboards[".sqlFrom"] = "FROM todoboards";
$tdatatodoboards[".sqlWhereExpr"] = "";
$tdatatodoboards[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodoboards[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodoboards[".arrGroupsPerPage"] = $arrGPP;

$tdatatodoboards[".highlightSearchResults"] = true;

$tableKeystodoboards = array();
$tableKeystodoboards[] = "id";
$tdatatodoboards[".Keys"] = $tableKeystodoboards;


$tdatatodoboards[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todoboards";
	$fdata["Label"] = GetFieldLabel("todoboards","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatodoboards["id"] = $fdata;
		$tdatatodoboards[".searchableFields"][] = "id";
//	boardname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "boardname";
	$fdata["GoodName"] = "boardname";
	$fdata["ownerTable"] = "todoboards";
	$fdata["Label"] = GetFieldLabel("todoboards","boardname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "boardname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "boardname";

	
	
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


	$tdatatodoboards["boardname"] = $fdata;
		$tdatatodoboards[".searchableFields"][] = "boardname";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "todoboards";
	$fdata["Label"] = GetFieldLabel("todoboards","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatodoboards["userid"] = $fdata;
		$tdatatodoboards[".searchableFields"][] = "userid";


$tables_data["todoboards"]=&$tdatatodoboards;
$field_labels["todoboards"] = &$fieldLabelstodoboards;
$fieldToolTips["todoboards"] = &$fieldToolTipstodoboards;
$placeHolders["todoboards"] = &$placeHolderstodoboards;
$page_titles["todoboards"] = &$pageTitlestodoboards;


changeTextControlsToDate( "todoboards" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todoboards"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todoboards"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todoboards()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  boardname,  userid";
$proto0["m_strFrom"] = "FROM todoboards";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id";
	
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
	"m_strTable" => "todoboards",
	"m_srcTableName" => "todoboards"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todoboards";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "boardname",
	"m_strTable" => "todoboards",
	"m_srcTableName" => "todoboards"
));

$proto8["m_sql"] = "boardname";
$proto8["m_srcTableName"] = "todoboards";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "todoboards",
	"m_srcTableName" => "todoboards"
));

$proto10["m_sql"] = "userid";
$proto10["m_srcTableName"] = "todoboards";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "todoboards";
$proto13["m_srcTableName"] = "todoboards";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "boardname";
$proto13["m_columns"][] = "userid";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "todoboards";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "todoboards";
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
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "todoboards",
	"m_srcTableName" => "todoboards"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="todoboards";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todoboards = createSqlQuery_todoboards();


	
		;

			

$tdatatodoboards[".sqlquery"] = $queryData_todoboards;



include_once(getabspath("include/todoboards_events.php"));
$tdatatodoboards[".hasEvents"] = true;

?>