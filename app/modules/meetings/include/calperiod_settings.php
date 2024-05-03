<?php
$tdatacalperiod = array();
$tdatacalperiod[".searchableFields"] = array();
$tdatacalperiod[".ShortName"] = "calperiod";
$tdatacalperiod[".OwnerID"] = "";
$tdatacalperiod[".OriginalTable"] = "calperiod";


$tdatacalperiod[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacalperiod[".originalPagesByType"] = $tdatacalperiod[".pagesByType"];
$tdatacalperiod[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacalperiod[".originalPages"] = $tdatacalperiod[".pages"];
$tdatacalperiod[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacalperiod[".originalDefaultPages"] = $tdatacalperiod[".defaultPages"];

//	field labels
$fieldLabelscalperiod = array();
$fieldToolTipscalperiod = array();
$pageTitlescalperiod = array();
$placeHolderscalperiod = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalperiod["English"] = array();
	$fieldToolTipscalperiod["English"] = array();
	$placeHolderscalperiod["English"] = array();
	$pageTitlescalperiod["English"] = array();
	$fieldLabelscalperiod["English"]["id"] = "Id";
	$fieldToolTipscalperiod["English"]["id"] = "";
	$placeHolderscalperiod["English"]["id"] = "";
	$fieldLabelscalperiod["English"]["Period"] = "Period";
	$fieldToolTipscalperiod["English"]["Period"] = "";
	$placeHolderscalperiod["English"]["Period"] = "";
	$fieldLabelscalperiod["English"]["ValueField"] = "Value Field";
	$fieldToolTipscalperiod["English"]["ValueField"] = "";
	$placeHolderscalperiod["English"]["ValueField"] = "";
	if (count($fieldToolTipscalperiod["English"]))
		$tdatacalperiod[".isUseToolTips"] = true;
}


	$tdatacalperiod[".NCSearch"] = true;



$tdatacalperiod[".shortTableName"] = "calperiod";
$tdatacalperiod[".nSecOptions"] = 0;

$tdatacalperiod[".mainTableOwnerID"] = "";
$tdatacalperiod[".entityType"] = 0;
$tdatacalperiod[".connId"] = "project_at_localhost";


$tdatacalperiod[".strOriginalTableName"] = "calperiod";

	



$tdatacalperiod[".showAddInPopup"] = false;

$tdatacalperiod[".showEditInPopup"] = false;

$tdatacalperiod[".showViewInPopup"] = false;

$tdatacalperiod[".listAjax"] = false;
//	temporary
//$tdatacalperiod[".listAjax"] = false;

	$tdatacalperiod[".audit"] = false;

	$tdatacalperiod[".locking"] = false;


$pages = $tdatacalperiod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalperiod[".edit"] = true;
	$tdatacalperiod[".afterEditAction"] = 1;
	$tdatacalperiod[".closePopupAfterEdit"] = 1;
	$tdatacalperiod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalperiod[".add"] = true;
$tdatacalperiod[".afterAddAction"] = 1;
$tdatacalperiod[".closePopupAfterAdd"] = 1;
$tdatacalperiod[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalperiod[".list"] = true;
}



$tdatacalperiod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalperiod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalperiod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalperiod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalperiod[".printFriendly"] = true;
}



$tdatacalperiod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalperiod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalperiod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalperiod[".isUseAjaxSuggest"] = true;



																								

$tdatacalperiod[".ajaxCodeSnippetAdded"] = false;

$tdatacalperiod[".buttonsAdded"] = false;

$tdatacalperiod[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalperiod[".isUseTimeForSearch"] = false;


$tdatacalperiod[".badgeColor"] = "008B8B";


$tdatacalperiod[".allSearchFields"] = array();
$tdatacalperiod[".filterFields"] = array();
$tdatacalperiod[".requiredSearchFields"] = array();

$tdatacalperiod[".googleLikeFields"] = array();
$tdatacalperiod[".googleLikeFields"][] = "id";
$tdatacalperiod[".googleLikeFields"][] = "Period";
$tdatacalperiod[".googleLikeFields"][] = "ValueField";



$tdatacalperiod[".tableType"] = "list";

$tdatacalperiod[".printerPageOrientation"] = 0;
$tdatacalperiod[".nPrinterPageScale"] = 100;

$tdatacalperiod[".nPrinterSplitRecords"] = 40;

$tdatacalperiod[".geocodingEnabled"] = false;










$tdatacalperiod[".pageSize"] = 20;

$tdatacalperiod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalperiod[".strOrderBy"] = $tstrOrderBy;

$tdatacalperiod[".orderindexes"] = array();


$tdatacalperiod[".sqlHead"] = "SELECT id,  Period,  ValueField";
$tdatacalperiod[".sqlFrom"] = "FROM calperiod";
$tdatacalperiod[".sqlWhereExpr"] = "";
$tdatacalperiod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalperiod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalperiod[".arrGroupsPerPage"] = $arrGPP;

$tdatacalperiod[".highlightSearchResults"] = true;

$tableKeyscalperiod = array();
$tableKeyscalperiod[] = "id";
$tdatacalperiod[".Keys"] = $tableKeyscalperiod;


$tdatacalperiod[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calperiod";
	$fdata["Label"] = GetFieldLabel("calperiod","id");
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


	$tdatacalperiod["id"] = $fdata;
		$tdatacalperiod[".searchableFields"][] = "id";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calperiod";
	$fdata["Label"] = GetFieldLabel("calperiod","Period");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Period";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Period";

	
	
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


	$tdatacalperiod["Period"] = $fdata;
		$tdatacalperiod[".searchableFields"][] = "Period";
//	ValueField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ValueField";
	$fdata["GoodName"] = "ValueField";
	$fdata["ownerTable"] = "calperiod";
	$fdata["Label"] = GetFieldLabel("calperiod","ValueField");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ValueField";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValueField";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatacalperiod["ValueField"] = $fdata;
		$tdatacalperiod[".searchableFields"][] = "ValueField";


$tables_data["calperiod"]=&$tdatacalperiod;
$field_labels["calperiod"] = &$fieldLabelscalperiod;
$fieldToolTips["calperiod"] = &$fieldToolTipscalperiod;
$placeHolders["calperiod"] = &$placeHolderscalperiod;
$page_titles["calperiod"] = &$pageTitlescalperiod;


changeTextControlsToDate( "calperiod" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calperiod"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calperiod"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calperiod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  Period,  ValueField";
$proto0["m_strFrom"] = "FROM calperiod";
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
	"m_strTable" => "calperiod",
	"m_srcTableName" => "calperiod"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calperiod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calperiod",
	"m_srcTableName" => "calperiod"
));

$proto8["m_sql"] = "Period";
$proto8["m_srcTableName"] = "calperiod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ValueField",
	"m_strTable" => "calperiod",
	"m_srcTableName" => "calperiod"
));

$proto10["m_sql"] = "ValueField";
$proto10["m_srcTableName"] = "calperiod";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calperiod";
$proto13["m_srcTableName"] = "calperiod";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Period";
$proto13["m_columns"][] = "ValueField";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calperiod";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calperiod";
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
$proto0["m_srcTableName"]="calperiod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calperiod = createSqlQuery_calperiod();


	
		;

			

$tdatacalperiod[".sqlquery"] = $queryData_calperiod;



$tdatacalperiod[".hasEvents"] = false;

?>