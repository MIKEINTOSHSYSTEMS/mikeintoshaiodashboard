<?php
$tdatahd_status = array();
$tdatahd_status[".searchableFields"] = array();
$tdatahd_status[".ShortName"] = "hd_status";
$tdatahd_status[".OwnerID"] = "";
$tdatahd_status[".OriginalTable"] = "hd_status";


$tdatahd_status[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahd_status[".originalPagesByType"] = $tdatahd_status[".pagesByType"];
$tdatahd_status[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahd_status[".originalPages"] = $tdatahd_status[".pages"];
$tdatahd_status[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatahd_status[".originalDefaultPages"] = $tdatahd_status[".defaultPages"];

//	field labels
$fieldLabelshd_status = array();
$fieldToolTipshd_status = array();
$pageTitleshd_status = array();
$placeHoldershd_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_status["English"] = array();
	$fieldToolTipshd_status["English"] = array();
	$placeHoldershd_status["English"] = array();
	$pageTitleshd_status["English"] = array();
	$fieldLabelshd_status["English"]["id"] = "Id";
	$fieldToolTipshd_status["English"]["id"] = "";
	$placeHoldershd_status["English"]["id"] = "";
	$fieldLabelshd_status["English"]["statusname"] = "Name";
	$fieldToolTipshd_status["English"]["statusname"] = "";
	$placeHoldershd_status["English"]["statusname"] = "";
	$fieldLabelshd_status["English"]["statuscolor"] = "Color";
	$fieldToolTipshd_status["English"]["statuscolor"] = "";
	$placeHoldershd_status["English"]["statuscolor"] = "";
	if (count($fieldToolTipshd_status["English"]))
		$tdatahd_status[".isUseToolTips"] = true;
}


	$tdatahd_status[".NCSearch"] = true;



$tdatahd_status[".shortTableName"] = "hd_status";
$tdatahd_status[".nSecOptions"] = 0;

$tdatahd_status[".mainTableOwnerID"] = "";
$tdatahd_status[".entityType"] = 0;
$tdatahd_status[".connId"] = "project_at_localhost";


$tdatahd_status[".strOriginalTableName"] = "hd_status";

	



$tdatahd_status[".showAddInPopup"] = false;

$tdatahd_status[".showEditInPopup"] = false;

$tdatahd_status[".showViewInPopup"] = false;

$tdatahd_status[".listAjax"] = false;
//	temporary
//$tdatahd_status[".listAjax"] = false;

	$tdatahd_status[".audit"] = false;

	$tdatahd_status[".locking"] = false;


$pages = $tdatahd_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_status[".edit"] = true;
	$tdatahd_status[".afterEditAction"] = 1;
	$tdatahd_status[".closePopupAfterEdit"] = 1;
	$tdatahd_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_status[".add"] = true;
$tdatahd_status[".afterAddAction"] = 1;
$tdatahd_status[".closePopupAfterAdd"] = 1;
$tdatahd_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_status[".list"] = true;
}



$tdatahd_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_status[".printFriendly"] = true;
}



$tdatahd_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_status[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_status[".ajaxCodeSnippetAdded"] = false;

$tdatahd_status[".buttonsAdded"] = false;

$tdatahd_status[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_status[".isUseTimeForSearch"] = false;


$tdatahd_status[".badgeColor"] = "B22222";


$tdatahd_status[".allSearchFields"] = array();
$tdatahd_status[".filterFields"] = array();
$tdatahd_status[".requiredSearchFields"] = array();

$tdatahd_status[".googleLikeFields"] = array();
$tdatahd_status[".googleLikeFields"][] = "id";
$tdatahd_status[".googleLikeFields"][] = "statusname";
$tdatahd_status[".googleLikeFields"][] = "statuscolor";



$tdatahd_status[".tableType"] = "list";

$tdatahd_status[".printerPageOrientation"] = 0;
$tdatahd_status[".nPrinterPageScale"] = 100;

$tdatahd_status[".nPrinterSplitRecords"] = 40;

$tdatahd_status[".geocodingEnabled"] = false;










$tdatahd_status[".pageSize"] = 20;

$tdatahd_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_status[".strOrderBy"] = $tstrOrderBy;

$tdatahd_status[".orderindexes"] = array();


$tdatahd_status[".sqlHead"] = "SELECT id,  statusname,  statuscolor";
$tdatahd_status[".sqlFrom"] = "FROM hd_status";
$tdatahd_status[".sqlWhereExpr"] = "";
$tdatahd_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_status[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_status[".highlightSearchResults"] = true;

$tableKeyshd_status = array();
$tableKeyshd_status[] = "id";
$tdatahd_status[".Keys"] = $tableKeyshd_status;


$tdatahd_status[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_status";
	$fdata["Label"] = GetFieldLabel("hd_status","id");
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


	$tdatahd_status["id"] = $fdata;
		$tdatahd_status[".searchableFields"][] = "id";
//	statusname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "statusname";
	$fdata["GoodName"] = "statusname";
	$fdata["ownerTable"] = "hd_status";
	$fdata["Label"] = GetFieldLabel("hd_status","statusname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statusname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusname";

	
	
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


	$tdatahd_status["statusname"] = $fdata;
		$tdatahd_status[".searchableFields"][] = "statusname";
//	statuscolor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "statuscolor";
	$fdata["GoodName"] = "statuscolor";
	$fdata["ownerTable"] = "hd_status";
	$fdata["Label"] = GetFieldLabel("hd_status","statuscolor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statuscolor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statuscolor";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatahd_status["statuscolor"] = $fdata;
		$tdatahd_status[".searchableFields"][] = "statuscolor";


$tables_data["hd_status"]=&$tdatahd_status;
$field_labels["hd_status"] = &$fieldLabelshd_status;
$fieldToolTips["hd_status"] = &$fieldToolTipshd_status;
$placeHolders["hd_status"] = &$placeHoldershd_status;
$page_titles["hd_status"] = &$pageTitleshd_status;


changeTextControlsToDate( "hd_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  statusname,  statuscolor";
$proto0["m_strFrom"] = "FROM hd_status";
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
	"m_strTable" => "hd_status",
	"m_srcTableName" => "hd_status"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "statusname",
	"m_strTable" => "hd_status",
	"m_srcTableName" => "hd_status"
));

$proto8["m_sql"] = "statusname";
$proto8["m_srcTableName"] = "hd_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "statuscolor",
	"m_strTable" => "hd_status",
	"m_srcTableName" => "hd_status"
));

$proto10["m_sql"] = "statuscolor";
$proto10["m_srcTableName"] = "hd_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hd_status";
$proto13["m_srcTableName"] = "hd_status";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "statusname";
$proto13["m_columns"][] = "statuscolor";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hd_status";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hd_status";
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
$proto0["m_srcTableName"]="hd_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_status = createSqlQuery_hd_status();


	
		;

			

$tdatahd_status[".sqlquery"] = $queryData_hd_status;



include_once(getabspath("include/hd_status_events.php"));
$tdatahd_status[".hasEvents"] = true;

?>