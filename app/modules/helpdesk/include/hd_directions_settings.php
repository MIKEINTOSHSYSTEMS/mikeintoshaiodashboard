<?php
$tdatahd_directions = array();
$tdatahd_directions[".searchableFields"] = array();
$tdatahd_directions[".ShortName"] = "hd_directions";
$tdatahd_directions[".OwnerID"] = "";
$tdatahd_directions[".OriginalTable"] = "hd_directions";


$tdatahd_directions[".pagesByType"] = my_json_decode( "{}" );
$tdatahd_directions[".originalPagesByType"] = $tdatahd_directions[".pagesByType"];
$tdatahd_directions[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatahd_directions[".originalPages"] = $tdatahd_directions[".pages"];
$tdatahd_directions[".defaultPages"] = my_json_decode( "{}" );
$tdatahd_directions[".originalDefaultPages"] = $tdatahd_directions[".defaultPages"];

//	field labels
$fieldLabelshd_directions = array();
$fieldToolTipshd_directions = array();
$pageTitleshd_directions = array();
$placeHoldershd_directions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_directions["English"] = array();
	$fieldToolTipshd_directions["English"] = array();
	$placeHoldershd_directions["English"] = array();
	$pageTitleshd_directions["English"] = array();
	$fieldLabelshd_directions["English"]["id"] = "Id";
	$fieldToolTipshd_directions["English"]["id"] = "";
	$placeHoldershd_directions["English"]["id"] = "";
	$fieldLabelshd_directions["English"]["directionname"] = "Directionname";
	$fieldToolTipshd_directions["English"]["directionname"] = "";
	$placeHoldershd_directions["English"]["directionname"] = "";
	if (count($fieldToolTipshd_directions["English"]))
		$tdatahd_directions[".isUseToolTips"] = true;
}


	$tdatahd_directions[".NCSearch"] = true;



$tdatahd_directions[".shortTableName"] = "hd_directions";
$tdatahd_directions[".nSecOptions"] = 0;

$tdatahd_directions[".mainTableOwnerID"] = "";
$tdatahd_directions[".entityType"] = 0;
$tdatahd_directions[".connId"] = "project_at_localhost";


$tdatahd_directions[".strOriginalTableName"] = "hd_directions";

	



$tdatahd_directions[".showAddInPopup"] = false;

$tdatahd_directions[".showEditInPopup"] = false;

$tdatahd_directions[".showViewInPopup"] = false;

$tdatahd_directions[".listAjax"] = false;
//	temporary
//$tdatahd_directions[".listAjax"] = false;

	$tdatahd_directions[".audit"] = false;

	$tdatahd_directions[".locking"] = false;


$pages = $tdatahd_directions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_directions[".edit"] = true;
	$tdatahd_directions[".afterEditAction"] = 1;
	$tdatahd_directions[".closePopupAfterEdit"] = 1;
	$tdatahd_directions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_directions[".add"] = true;
$tdatahd_directions[".afterAddAction"] = 1;
$tdatahd_directions[".closePopupAfterAdd"] = 1;
$tdatahd_directions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_directions[".list"] = true;
}



$tdatahd_directions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_directions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_directions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_directions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_directions[".printFriendly"] = true;
}



$tdatahd_directions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_directions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_directions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_directions[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_directions[".ajaxCodeSnippetAdded"] = false;

$tdatahd_directions[".buttonsAdded"] = false;

$tdatahd_directions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahd_directions[".isUseTimeForSearch"] = false;


$tdatahd_directions[".badgeColor"] = "5F9EA0";


$tdatahd_directions[".allSearchFields"] = array();
$tdatahd_directions[".filterFields"] = array();
$tdatahd_directions[".requiredSearchFields"] = array();

$tdatahd_directions[".googleLikeFields"] = array();
$tdatahd_directions[".googleLikeFields"][] = "id";
$tdatahd_directions[".googleLikeFields"][] = "directionname";



$tdatahd_directions[".tableType"] = "list";

$tdatahd_directions[".printerPageOrientation"] = 0;
$tdatahd_directions[".nPrinterPageScale"] = 100;

$tdatahd_directions[".nPrinterSplitRecords"] = 40;

$tdatahd_directions[".geocodingEnabled"] = false;










$tdatahd_directions[".pageSize"] = 20;

$tdatahd_directions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_directions[".strOrderBy"] = $tstrOrderBy;

$tdatahd_directions[".orderindexes"] = array();


$tdatahd_directions[".sqlHead"] = "SELECT id,  directionname";
$tdatahd_directions[".sqlFrom"] = "FROM hd_directions";
$tdatahd_directions[".sqlWhereExpr"] = "";
$tdatahd_directions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_directions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_directions[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_directions[".highlightSearchResults"] = true;

$tableKeyshd_directions = array();
$tableKeyshd_directions[] = "id";
$tdatahd_directions[".Keys"] = $tableKeyshd_directions;


$tdatahd_directions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_directions";
	$fdata["Label"] = GetFieldLabel("hd_directions","id");
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


	$tdatahd_directions["id"] = $fdata;
		$tdatahd_directions[".searchableFields"][] = "id";
//	directionname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "directionname";
	$fdata["GoodName"] = "directionname";
	$fdata["ownerTable"] = "hd_directions";
	$fdata["Label"] = GetFieldLabel("hd_directions","directionname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "directionname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "directionname";

	
	
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


	$tdatahd_directions["directionname"] = $fdata;
		$tdatahd_directions[".searchableFields"][] = "directionname";


$tables_data["hd_directions"]=&$tdatahd_directions;
$field_labels["hd_directions"] = &$fieldLabelshd_directions;
$fieldToolTips["hd_directions"] = &$fieldToolTipshd_directions;
$placeHolders["hd_directions"] = &$placeHoldershd_directions;
$page_titles["hd_directions"] = &$pageTitleshd_directions;


changeTextControlsToDate( "hd_directions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_directions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_directions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_directions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  directionname";
$proto0["m_strFrom"] = "FROM hd_directions";
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
	"m_strTable" => "hd_directions",
	"m_srcTableName" => "hd_directions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_directions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "directionname",
	"m_strTable" => "hd_directions",
	"m_srcTableName" => "hd_directions"
));

$proto8["m_sql"] = "directionname";
$proto8["m_srcTableName"] = "hd_directions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hd_directions";
$proto11["m_srcTableName"] = "hd_directions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "directionname";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hd_directions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hd_directions";
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
$proto0["m_srcTableName"]="hd_directions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_directions = createSqlQuery_hd_directions();


	
		;

		

$tdatahd_directions[".sqlquery"] = $queryData_hd_directions;



$tdatahd_directions[".hasEvents"] = false;

?>