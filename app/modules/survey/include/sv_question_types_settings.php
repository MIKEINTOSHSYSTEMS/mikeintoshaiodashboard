<?php
$tdatasv_question_types = array();
$tdatasv_question_types[".searchableFields"] = array();
$tdatasv_question_types[".ShortName"] = "sv_question_types";
$tdatasv_question_types[".OwnerID"] = "";
$tdatasv_question_types[".OriginalTable"] = "sv_question_types";


$tdatasv_question_types[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatasv_question_types[".originalPagesByType"] = $tdatasv_question_types[".pagesByType"];
$tdatasv_question_types[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatasv_question_types[".originalPages"] = $tdatasv_question_types[".pages"];
$tdatasv_question_types[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatasv_question_types[".originalDefaultPages"] = $tdatasv_question_types[".defaultPages"];

//	field labels
$fieldLabelssv_question_types = array();
$fieldToolTipssv_question_types = array();
$pageTitlessv_question_types = array();
$placeHolderssv_question_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_question_types["English"] = array();
	$fieldToolTipssv_question_types["English"] = array();
	$placeHolderssv_question_types["English"] = array();
	$pageTitlessv_question_types["English"] = array();
	$fieldLabelssv_question_types["English"]["type"] = "Type";
	$fieldToolTipssv_question_types["English"]["type"] = "";
	$placeHolderssv_question_types["English"]["type"] = "";
	$fieldLabelssv_question_types["English"]["description"] = "Description";
	$fieldToolTipssv_question_types["English"]["description"] = "";
	$placeHolderssv_question_types["English"]["description"] = "";
	if (count($fieldToolTipssv_question_types["English"]))
		$tdatasv_question_types[".isUseToolTips"] = true;
}


	$tdatasv_question_types[".NCSearch"] = true;



$tdatasv_question_types[".shortTableName"] = "sv_question_types";
$tdatasv_question_types[".nSecOptions"] = 0;

$tdatasv_question_types[".mainTableOwnerID"] = "";
$tdatasv_question_types[".entityType"] = 1;
$tdatasv_question_types[".connId"] = "project_at_localhost";


$tdatasv_question_types[".strOriginalTableName"] = "sv_question_types";

	



$tdatasv_question_types[".showAddInPopup"] = false;

$tdatasv_question_types[".showEditInPopup"] = false;

$tdatasv_question_types[".showViewInPopup"] = false;

$tdatasv_question_types[".listAjax"] = false;
//	temporary
//$tdatasv_question_types[".listAjax"] = false;

	$tdatasv_question_types[".audit"] = false;

	$tdatasv_question_types[".locking"] = false;


$pages = $tdatasv_question_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_question_types[".edit"] = true;
	$tdatasv_question_types[".afterEditAction"] = 1;
	$tdatasv_question_types[".closePopupAfterEdit"] = 1;
	$tdatasv_question_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_question_types[".add"] = true;
$tdatasv_question_types[".afterAddAction"] = 1;
$tdatasv_question_types[".closePopupAfterAdd"] = 1;
$tdatasv_question_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_question_types[".list"] = true;
}

$tdatasv_question_types[".updateSelected"] = true;


$tdatasv_question_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_question_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_question_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_question_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_question_types[".printFriendly"] = true;
}



$tdatasv_question_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_question_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_question_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_question_types[".isUseAjaxSuggest"] = true;



																		

$tdatasv_question_types[".ajaxCodeSnippetAdded"] = false;

$tdatasv_question_types[".buttonsAdded"] = false;

$tdatasv_question_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasv_question_types[".isUseTimeForSearch"] = false;




$tdatasv_question_types[".allSearchFields"] = array();
$tdatasv_question_types[".filterFields"] = array();
$tdatasv_question_types[".requiredSearchFields"] = array();

$tdatasv_question_types[".googleLikeFields"] = array();
$tdatasv_question_types[".googleLikeFields"][] = "type";
$tdatasv_question_types[".googleLikeFields"][] = "description";



$tdatasv_question_types[".tableType"] = "list";

$tdatasv_question_types[".printerPageOrientation"] = 0;
$tdatasv_question_types[".nPrinterPageScale"] = 100;

$tdatasv_question_types[".nPrinterSplitRecords"] = 40;

$tdatasv_question_types[".geocodingEnabled"] = false;










$tdatasv_question_types[".pageSize"] = 20;

$tdatasv_question_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_question_types[".strOrderBy"] = $tstrOrderBy;

$tdatasv_question_types[".orderindexes"] = array();


$tdatasv_question_types[".sqlHead"] = "SELECT `type`,  description";
$tdatasv_question_types[".sqlFrom"] = "FROM sv_question_types";
$tdatasv_question_types[".sqlWhereExpr"] = "";
$tdatasv_question_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_question_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_question_types[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_question_types[".highlightSearchResults"] = true;

$tableKeyssv_question_types = array();
$tableKeyssv_question_types[] = "type";
$tdatasv_question_types[".Keys"] = $tableKeyssv_question_types;


$tdatasv_question_types[".hideMobileList"] = array();




//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "sv_question_types";
	$fdata["Label"] = GetFieldLabel("sv_question_types","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatasv_question_types["type"] = $fdata;
		$tdatasv_question_types[".searchableFields"][] = "type";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "sv_question_types";
	$fdata["Label"] = GetFieldLabel("sv_question_types","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasv_question_types["description"] = $fdata;
		$tdatasv_question_types[".searchableFields"][] = "description";


$tables_data["sv_question_types"]=&$tdatasv_question_types;
$field_labels["sv_question_types"] = &$fieldLabelssv_question_types;
$fieldToolTips["sv_question_types"] = &$fieldToolTipssv_question_types;
$placeHolders["sv_question_types"] = &$placeHolderssv_question_types;
$page_titles["sv_question_types"] = &$pageTitlessv_question_types;


changeTextControlsToDate( "sv_question_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_question_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_question_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_question_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`type`,  description";
$proto0["m_strFrom"] = "FROM sv_question_types";
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
	"m_strName" => "type",
	"m_strTable" => "sv_question_types",
	"m_srcTableName" => "sv_question_types"
));

$proto6["m_sql"] = "`type`";
$proto6["m_srcTableName"] = "sv_question_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sv_question_types",
	"m_srcTableName" => "sv_question_types"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "sv_question_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sv_question_types";
$proto11["m_srcTableName"] = "sv_question_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "type";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sv_question_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sv_question_types";
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
$proto0["m_srcTableName"]="sv_question_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_question_types = createSqlQuery_sv_question_types();


	
		;

		

$tdatasv_question_types[".sqlquery"] = $queryData_sv_question_types;



$tdatasv_question_types[".hasEvents"] = false;

?>