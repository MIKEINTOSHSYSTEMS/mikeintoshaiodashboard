<?php
$tdatasv_survey_formats = array();
$tdatasv_survey_formats[".searchableFields"] = array();
$tdatasv_survey_formats[".ShortName"] = "sv_survey_formats";
$tdatasv_survey_formats[".OwnerID"] = "";
$tdatasv_survey_formats[".OriginalTable"] = "sv_survey_formats";


$tdatasv_survey_formats[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatasv_survey_formats[".originalPagesByType"] = $tdatasv_survey_formats[".pagesByType"];
$tdatasv_survey_formats[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatasv_survey_formats[".originalPages"] = $tdatasv_survey_formats[".pages"];
$tdatasv_survey_formats[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatasv_survey_formats[".originalDefaultPages"] = $tdatasv_survey_formats[".defaultPages"];

//	field labels
$fieldLabelssv_survey_formats = array();
$fieldToolTipssv_survey_formats = array();
$pageTitlessv_survey_formats = array();
$placeHolderssv_survey_formats = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_survey_formats["English"] = array();
	$fieldToolTipssv_survey_formats["English"] = array();
	$placeHolderssv_survey_formats["English"] = array();
	$pageTitlessv_survey_formats["English"] = array();
	$fieldLabelssv_survey_formats["English"]["format"] = "Format";
	$fieldToolTipssv_survey_formats["English"]["format"] = "";
	$placeHolderssv_survey_formats["English"]["format"] = "";
	$fieldLabelssv_survey_formats["English"]["description"] = "Description";
	$fieldToolTipssv_survey_formats["English"]["description"] = "";
	$placeHolderssv_survey_formats["English"]["description"] = "";
	if (count($fieldToolTipssv_survey_formats["English"]))
		$tdatasv_survey_formats[".isUseToolTips"] = true;
}


	$tdatasv_survey_formats[".NCSearch"] = true;



$tdatasv_survey_formats[".shortTableName"] = "sv_survey_formats";
$tdatasv_survey_formats[".nSecOptions"] = 0;

$tdatasv_survey_formats[".mainTableOwnerID"] = "";
$tdatasv_survey_formats[".entityType"] = 1;
$tdatasv_survey_formats[".connId"] = "project_at_localhost";


$tdatasv_survey_formats[".strOriginalTableName"] = "sv_survey_formats";

	



$tdatasv_survey_formats[".showAddInPopup"] = false;

$tdatasv_survey_formats[".showEditInPopup"] = false;

$tdatasv_survey_formats[".showViewInPopup"] = false;

$tdatasv_survey_formats[".listAjax"] = false;
//	temporary
//$tdatasv_survey_formats[".listAjax"] = false;

	$tdatasv_survey_formats[".audit"] = false;

	$tdatasv_survey_formats[".locking"] = false;


$pages = $tdatasv_survey_formats[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_survey_formats[".edit"] = true;
	$tdatasv_survey_formats[".afterEditAction"] = 1;
	$tdatasv_survey_formats[".closePopupAfterEdit"] = 1;
	$tdatasv_survey_formats[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_survey_formats[".add"] = true;
$tdatasv_survey_formats[".afterAddAction"] = 1;
$tdatasv_survey_formats[".closePopupAfterAdd"] = 1;
$tdatasv_survey_formats[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_survey_formats[".list"] = true;
}

$tdatasv_survey_formats[".updateSelected"] = true;


$tdatasv_survey_formats[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_survey_formats[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_survey_formats[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_survey_formats[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_survey_formats[".printFriendly"] = true;
}



$tdatasv_survey_formats[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_survey_formats[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_survey_formats[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_survey_formats[".isUseAjaxSuggest"] = true;



																		

$tdatasv_survey_formats[".ajaxCodeSnippetAdded"] = false;

$tdatasv_survey_formats[".buttonsAdded"] = false;

$tdatasv_survey_formats[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasv_survey_formats[".isUseTimeForSearch"] = false;




$tdatasv_survey_formats[".allSearchFields"] = array();
$tdatasv_survey_formats[".filterFields"] = array();
$tdatasv_survey_formats[".requiredSearchFields"] = array();

$tdatasv_survey_formats[".googleLikeFields"] = array();
$tdatasv_survey_formats[".googleLikeFields"][] = "format";
$tdatasv_survey_formats[".googleLikeFields"][] = "description";



$tdatasv_survey_formats[".tableType"] = "list";

$tdatasv_survey_formats[".printerPageOrientation"] = 0;
$tdatasv_survey_formats[".nPrinterPageScale"] = 100;

$tdatasv_survey_formats[".nPrinterSplitRecords"] = 40;

$tdatasv_survey_formats[".geocodingEnabled"] = false;










$tdatasv_survey_formats[".pageSize"] = 20;

$tdatasv_survey_formats[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_survey_formats[".strOrderBy"] = $tstrOrderBy;

$tdatasv_survey_formats[".orderindexes"] = array();


$tdatasv_survey_formats[".sqlHead"] = "SELECT format,  description";
$tdatasv_survey_formats[".sqlFrom"] = "FROM sv_survey_formats";
$tdatasv_survey_formats[".sqlWhereExpr"] = "";
$tdatasv_survey_formats[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_survey_formats[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_survey_formats[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_survey_formats[".highlightSearchResults"] = true;

$tableKeyssv_survey_formats = array();
$tableKeyssv_survey_formats[] = "format";
$tdatasv_survey_formats[".Keys"] = $tableKeyssv_survey_formats;


$tdatasv_survey_formats[".hideMobileList"] = array();




//	format
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "format";
	$fdata["GoodName"] = "format";
	$fdata["ownerTable"] = "sv_survey_formats";
	$fdata["Label"] = GetFieldLabel("sv_survey_formats","format");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "format";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format";

	
	
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


	$tdatasv_survey_formats["format"] = $fdata;
		$tdatasv_survey_formats[".searchableFields"][] = "format";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "sv_survey_formats";
	$fdata["Label"] = GetFieldLabel("sv_survey_formats","description");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatasv_survey_formats["description"] = $fdata;
		$tdatasv_survey_formats[".searchableFields"][] = "description";


$tables_data["sv_survey_formats"]=&$tdatasv_survey_formats;
$field_labels["sv_survey_formats"] = &$fieldLabelssv_survey_formats;
$fieldToolTips["sv_survey_formats"] = &$fieldToolTipssv_survey_formats;
$placeHolders["sv_survey_formats"] = &$placeHolderssv_survey_formats;
$page_titles["sv_survey_formats"] = &$pageTitlessv_survey_formats;


changeTextControlsToDate( "sv_survey_formats" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_survey_formats"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_survey_formats"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_survey_formats()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "format,  description";
$proto0["m_strFrom"] = "FROM sv_survey_formats";
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
	"m_strName" => "format",
	"m_strTable" => "sv_survey_formats",
	"m_srcTableName" => "sv_survey_formats"
));

$proto6["m_sql"] = "format";
$proto6["m_srcTableName"] = "sv_survey_formats";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sv_survey_formats",
	"m_srcTableName" => "sv_survey_formats"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "sv_survey_formats";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sv_survey_formats";
$proto11["m_srcTableName"] = "sv_survey_formats";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "format";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sv_survey_formats";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sv_survey_formats";
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
$proto0["m_srcTableName"]="sv_survey_formats";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_survey_formats = createSqlQuery_sv_survey_formats();


	
		;

		

$tdatasv_survey_formats[".sqlquery"] = $queryData_sv_survey_formats;



$tdatasv_survey_formats[".hasEvents"] = false;

?>