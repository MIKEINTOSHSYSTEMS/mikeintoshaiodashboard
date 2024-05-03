<?php
$tdatasv_helpquestion_viewtype = array();
$tdatasv_helpquestion_viewtype[".searchableFields"] = array();
$tdatasv_helpquestion_viewtype[".ShortName"] = "sv_helpquestion_viewtype";
$tdatasv_helpquestion_viewtype[".OwnerID"] = "";
$tdatasv_helpquestion_viewtype[".OriginalTable"] = "sv_helpquestion_viewtype";


$tdatasv_helpquestion_viewtype[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatasv_helpquestion_viewtype[".originalPagesByType"] = $tdatasv_helpquestion_viewtype[".pagesByType"];
$tdatasv_helpquestion_viewtype[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatasv_helpquestion_viewtype[".originalPages"] = $tdatasv_helpquestion_viewtype[".pages"];
$tdatasv_helpquestion_viewtype[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatasv_helpquestion_viewtype[".originalDefaultPages"] = $tdatasv_helpquestion_viewtype[".defaultPages"];

//	field labels
$fieldLabelssv_helpquestion_viewtype = array();
$fieldToolTipssv_helpquestion_viewtype = array();
$pageTitlessv_helpquestion_viewtype = array();
$placeHolderssv_helpquestion_viewtype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_helpquestion_viewtype["English"] = array();
	$fieldToolTipssv_helpquestion_viewtype["English"] = array();
	$placeHolderssv_helpquestion_viewtype["English"] = array();
	$pageTitlessv_helpquestion_viewtype["English"] = array();
	$fieldLabelssv_helpquestion_viewtype["English"]["orientation"] = "Orientation";
	$fieldToolTipssv_helpquestion_viewtype["English"]["orientation"] = "";
	$placeHolderssv_helpquestion_viewtype["English"]["orientation"] = "";
	$fieldLabelssv_helpquestion_viewtype["English"]["description"] = "Description";
	$fieldToolTipssv_helpquestion_viewtype["English"]["description"] = "";
	$placeHolderssv_helpquestion_viewtype["English"]["description"] = "";
	if (count($fieldToolTipssv_helpquestion_viewtype["English"]))
		$tdatasv_helpquestion_viewtype[".isUseToolTips"] = true;
}


	$tdatasv_helpquestion_viewtype[".NCSearch"] = true;



$tdatasv_helpquestion_viewtype[".shortTableName"] = "sv_helpquestion_viewtype";
$tdatasv_helpquestion_viewtype[".nSecOptions"] = 0;

$tdatasv_helpquestion_viewtype[".mainTableOwnerID"] = "";
$tdatasv_helpquestion_viewtype[".entityType"] = 1;
$tdatasv_helpquestion_viewtype[".connId"] = "project_at_localhost";


$tdatasv_helpquestion_viewtype[".strOriginalTableName"] = "sv_helpquestion_viewtype";

	



$tdatasv_helpquestion_viewtype[".showAddInPopup"] = false;

$tdatasv_helpquestion_viewtype[".showEditInPopup"] = false;

$tdatasv_helpquestion_viewtype[".showViewInPopup"] = false;

$tdatasv_helpquestion_viewtype[".listAjax"] = false;
//	temporary
//$tdatasv_helpquestion_viewtype[".listAjax"] = false;

	$tdatasv_helpquestion_viewtype[".audit"] = false;

	$tdatasv_helpquestion_viewtype[".locking"] = false;


$pages = $tdatasv_helpquestion_viewtype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_helpquestion_viewtype[".edit"] = true;
	$tdatasv_helpquestion_viewtype[".afterEditAction"] = 1;
	$tdatasv_helpquestion_viewtype[".closePopupAfterEdit"] = 1;
	$tdatasv_helpquestion_viewtype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_helpquestion_viewtype[".add"] = true;
$tdatasv_helpquestion_viewtype[".afterAddAction"] = 1;
$tdatasv_helpquestion_viewtype[".closePopupAfterAdd"] = 1;
$tdatasv_helpquestion_viewtype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_helpquestion_viewtype[".list"] = true;
}

$tdatasv_helpquestion_viewtype[".updateSelected"] = true;


$tdatasv_helpquestion_viewtype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_helpquestion_viewtype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_helpquestion_viewtype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_helpquestion_viewtype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_helpquestion_viewtype[".printFriendly"] = true;
}



$tdatasv_helpquestion_viewtype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_helpquestion_viewtype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_helpquestion_viewtype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_helpquestion_viewtype[".isUseAjaxSuggest"] = true;



																		

$tdatasv_helpquestion_viewtype[".ajaxCodeSnippetAdded"] = false;

$tdatasv_helpquestion_viewtype[".buttonsAdded"] = false;

$tdatasv_helpquestion_viewtype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasv_helpquestion_viewtype[".isUseTimeForSearch"] = false;




$tdatasv_helpquestion_viewtype[".allSearchFields"] = array();
$tdatasv_helpquestion_viewtype[".filterFields"] = array();
$tdatasv_helpquestion_viewtype[".requiredSearchFields"] = array();

$tdatasv_helpquestion_viewtype[".googleLikeFields"] = array();
$tdatasv_helpquestion_viewtype[".googleLikeFields"][] = "orientation";
$tdatasv_helpquestion_viewtype[".googleLikeFields"][] = "description";



$tdatasv_helpquestion_viewtype[".tableType"] = "list";

$tdatasv_helpquestion_viewtype[".printerPageOrientation"] = 0;
$tdatasv_helpquestion_viewtype[".nPrinterPageScale"] = 100;

$tdatasv_helpquestion_viewtype[".nPrinterSplitRecords"] = 40;

$tdatasv_helpquestion_viewtype[".geocodingEnabled"] = false;










$tdatasv_helpquestion_viewtype[".pageSize"] = 20;

$tdatasv_helpquestion_viewtype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_helpquestion_viewtype[".strOrderBy"] = $tstrOrderBy;

$tdatasv_helpquestion_viewtype[".orderindexes"] = array();


$tdatasv_helpquestion_viewtype[".sqlHead"] = "SELECT orientation,  description";
$tdatasv_helpquestion_viewtype[".sqlFrom"] = "FROM sv_helpquestion_viewtype";
$tdatasv_helpquestion_viewtype[".sqlWhereExpr"] = "";
$tdatasv_helpquestion_viewtype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_helpquestion_viewtype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_helpquestion_viewtype[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_helpquestion_viewtype[".highlightSearchResults"] = true;

$tableKeyssv_helpquestion_viewtype = array();
$tableKeyssv_helpquestion_viewtype[] = "orientation";
$tdatasv_helpquestion_viewtype[".Keys"] = $tableKeyssv_helpquestion_viewtype;


$tdatasv_helpquestion_viewtype[".hideMobileList"] = array();




//	orientation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "orientation";
	$fdata["GoodName"] = "orientation";
	$fdata["ownerTable"] = "sv_helpquestion_viewtype";
	$fdata["Label"] = GetFieldLabel("sv_helpquestion_viewtype","orientation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "orientation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orientation";

	
	
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


	$tdatasv_helpquestion_viewtype["orientation"] = $fdata;
		$tdatasv_helpquestion_viewtype[".searchableFields"][] = "orientation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "sv_helpquestion_viewtype";
	$fdata["Label"] = GetFieldLabel("sv_helpquestion_viewtype","description");
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


	$tdatasv_helpquestion_viewtype["description"] = $fdata;
		$tdatasv_helpquestion_viewtype[".searchableFields"][] = "description";


$tables_data["sv_helpquestion_viewtype"]=&$tdatasv_helpquestion_viewtype;
$field_labels["sv_helpquestion_viewtype"] = &$fieldLabelssv_helpquestion_viewtype;
$fieldToolTips["sv_helpquestion_viewtype"] = &$fieldToolTipssv_helpquestion_viewtype;
$placeHolders["sv_helpquestion_viewtype"] = &$placeHolderssv_helpquestion_viewtype;
$page_titles["sv_helpquestion_viewtype"] = &$pageTitlessv_helpquestion_viewtype;


changeTextControlsToDate( "sv_helpquestion_viewtype" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_helpquestion_viewtype"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_helpquestion_viewtype"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_helpquestion_viewtype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "orientation,  description";
$proto0["m_strFrom"] = "FROM sv_helpquestion_viewtype";
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
	"m_strName" => "orientation",
	"m_strTable" => "sv_helpquestion_viewtype",
	"m_srcTableName" => "sv_helpquestion_viewtype"
));

$proto6["m_sql"] = "orientation";
$proto6["m_srcTableName"] = "sv_helpquestion_viewtype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sv_helpquestion_viewtype",
	"m_srcTableName" => "sv_helpquestion_viewtype"
));

$proto8["m_sql"] = "description";
$proto8["m_srcTableName"] = "sv_helpquestion_viewtype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sv_helpquestion_viewtype";
$proto11["m_srcTableName"] = "sv_helpquestion_viewtype";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "orientation";
$proto11["m_columns"][] = "description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sv_helpquestion_viewtype";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sv_helpquestion_viewtype";
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
$proto0["m_srcTableName"]="sv_helpquestion_viewtype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_helpquestion_viewtype = createSqlQuery_sv_helpquestion_viewtype();


	
		;

		

$tdatasv_helpquestion_viewtype[".sqlquery"] = $queryData_sv_helpquestion_viewtype;



$tdatasv_helpquestion_viewtype[".hasEvents"] = false;

?>