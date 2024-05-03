<?php
$tdatatodolists = array();
$tdatatodolists[".searchableFields"] = array();
$tdatatodolists[".ShortName"] = "todolists";
$tdatatodolists[".OwnerID"] = "";
$tdatatodolists[".OriginalTable"] = "todolists";


$tdatatodolists[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatodolists[".originalPagesByType"] = $tdatatodolists[".pagesByType"];
$tdatatodolists[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatodolists[".originalPages"] = $tdatatodolists[".pages"];
$tdatatodolists[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatodolists[".originalDefaultPages"] = $tdatatodolists[".defaultPages"];

//	field labels
$fieldLabelstodolists = array();
$fieldToolTipstodolists = array();
$pageTitlestodolists = array();
$placeHolderstodolists = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodolists["English"] = array();
	$fieldToolTipstodolists["English"] = array();
	$placeHolderstodolists["English"] = array();
	$pageTitlestodolists["English"] = array();
	$fieldLabelstodolists["English"]["id"] = "Id";
	$fieldToolTipstodolists["English"]["id"] = "";
	$placeHolderstodolists["English"]["id"] = "";
	$fieldLabelstodolists["English"]["listname"] = "Listname";
	$fieldToolTipstodolists["English"]["listname"] = "";
	$placeHolderstodolists["English"]["listname"] = "";
	$fieldLabelstodolists["English"]["listorder"] = "Listorder";
	$fieldToolTipstodolists["English"]["listorder"] = "";
	$placeHolderstodolists["English"]["listorder"] = "";
	$fieldLabelstodolists["English"]["boardid"] = "Boardid";
	$fieldToolTipstodolists["English"]["boardid"] = "";
	$placeHolderstodolists["English"]["boardid"] = "";
	if (count($fieldToolTipstodolists["English"]))
		$tdatatodolists[".isUseToolTips"] = true;
}


	$tdatatodolists[".NCSearch"] = true;



$tdatatodolists[".shortTableName"] = "todolists";
$tdatatodolists[".nSecOptions"] = 0;

$tdatatodolists[".mainTableOwnerID"] = "";
$tdatatodolists[".entityType"] = 0;
$tdatatodolists[".connId"] = "project_at_localhost";


$tdatatodolists[".strOriginalTableName"] = "todolists";

	



$tdatatodolists[".showAddInPopup"] = false;

$tdatatodolists[".showEditInPopup"] = false;

$tdatatodolists[".showViewInPopup"] = false;

$tdatatodolists[".listAjax"] = false;
//	temporary
//$tdatatodolists[".listAjax"] = false;

	$tdatatodolists[".audit"] = false;

	$tdatatodolists[".locking"] = false;


$pages = $tdatatodolists[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodolists[".edit"] = true;
	$tdatatodolists[".afterEditAction"] = 1;
	$tdatatodolists[".closePopupAfterEdit"] = 1;
	$tdatatodolists[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodolists[".add"] = true;
$tdatatodolists[".afterAddAction"] = 1;
$tdatatodolists[".closePopupAfterAdd"] = 1;
$tdatatodolists[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodolists[".list"] = true;
}



$tdatatodolists[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodolists[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodolists[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodolists[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodolists[".printFriendly"] = true;
}



$tdatatodolists[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodolists[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodolists[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodolists[".isUseAjaxSuggest"] = true;



																								

$tdatatodolists[".ajaxCodeSnippetAdded"] = false;

$tdatatodolists[".buttonsAdded"] = false;

$tdatatodolists[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatodolists[".isUseTimeForSearch"] = false;


$tdatatodolists[".badgeColor"] = "EDCA00";


$tdatatodolists[".allSearchFields"] = array();
$tdatatodolists[".filterFields"] = array();
$tdatatodolists[".requiredSearchFields"] = array();

$tdatatodolists[".googleLikeFields"] = array();
$tdatatodolists[".googleLikeFields"][] = "id";
$tdatatodolists[".googleLikeFields"][] = "listname";
$tdatatodolists[".googleLikeFields"][] = "listorder";
$tdatatodolists[".googleLikeFields"][] = "boardid";



$tdatatodolists[".tableType"] = "list";

$tdatatodolists[".printerPageOrientation"] = 0;
$tdatatodolists[".nPrinterPageScale"] = 100;

$tdatatodolists[".nPrinterSplitRecords"] = 40;

$tdatatodolists[".geocodingEnabled"] = false;










$tdatatodolists[".pageSize"] = 20;

$tdatatodolists[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatodolists[".strOrderBy"] = $tstrOrderBy;

$tdatatodolists[".orderindexes"] = array();


$tdatatodolists[".sqlHead"] = "SELECT id,  listname,  listorder,  boardid";
$tdatatodolists[".sqlFrom"] = "FROM todolists";
$tdatatodolists[".sqlWhereExpr"] = "";
$tdatatodolists[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodolists[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodolists[".arrGroupsPerPage"] = $arrGPP;

$tdatatodolists[".highlightSearchResults"] = true;

$tableKeystodolists = array();
$tableKeystodolists[] = "id";
$tdatatodolists[".Keys"] = $tableKeystodolists;


$tdatatodolists[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todolists";
	$fdata["Label"] = GetFieldLabel("todolists","id");
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


	$tdatatodolists["id"] = $fdata;
		$tdatatodolists[".searchableFields"][] = "id";
//	listname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "listname";
	$fdata["GoodName"] = "listname";
	$fdata["ownerTable"] = "todolists";
	$fdata["Label"] = GetFieldLabel("todolists","listname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "listname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "listname";

	
	
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


	$tdatatodolists["listname"] = $fdata;
		$tdatatodolists[".searchableFields"][] = "listname";
//	listorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "listorder";
	$fdata["GoodName"] = "listorder";
	$fdata["ownerTable"] = "todolists";
	$fdata["Label"] = GetFieldLabel("todolists","listorder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "listorder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "listorder";

	
	
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


	$tdatatodolists["listorder"] = $fdata;
		$tdatatodolists[".searchableFields"][] = "listorder";
//	boardid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "boardid";
	$fdata["GoodName"] = "boardid";
	$fdata["ownerTable"] = "todolists";
	$fdata["Label"] = GetFieldLabel("todolists","boardid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "boardid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "boardid";

	
	
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


	$tdatatodolists["boardid"] = $fdata;
		$tdatatodolists[".searchableFields"][] = "boardid";


$tables_data["todolists"]=&$tdatatodolists;
$field_labels["todolists"] = &$fieldLabelstodolists;
$fieldToolTips["todolists"] = &$fieldToolTipstodolists;
$placeHolders["todolists"] = &$placeHolderstodolists;
$page_titles["todolists"] = &$pageTitlestodolists;


changeTextControlsToDate( "todolists" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todolists"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todolists"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todolists()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  listname,  listorder,  boardid";
$proto0["m_strFrom"] = "FROM todolists";
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
	"m_strTable" => "todolists",
	"m_srcTableName" => "todolists"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todolists";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "listname",
	"m_strTable" => "todolists",
	"m_srcTableName" => "todolists"
));

$proto8["m_sql"] = "listname";
$proto8["m_srcTableName"] = "todolists";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "listorder",
	"m_strTable" => "todolists",
	"m_srcTableName" => "todolists"
));

$proto10["m_sql"] = "listorder";
$proto10["m_srcTableName"] = "todolists";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "boardid",
	"m_strTable" => "todolists",
	"m_srcTableName" => "todolists"
));

$proto12["m_sql"] = "boardid";
$proto12["m_srcTableName"] = "todolists";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "todolists";
$proto15["m_srcTableName"] = "todolists";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "listname";
$proto15["m_columns"][] = "listorder";
$proto15["m_columns"][] = "boardid";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "todolists";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "todolists";
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
$proto0["m_srcTableName"]="todolists";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todolists = createSqlQuery_todolists();


	
		;

				

$tdatatodolists[".sqlquery"] = $queryData_todolists;



$tdatatodolists[".hasEvents"] = false;

?>