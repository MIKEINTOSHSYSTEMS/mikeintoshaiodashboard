<?php
$tdatacallocale = array();
$tdatacallocale[".searchableFields"] = array();
$tdatacallocale[".ShortName"] = "callocale";
$tdatacallocale[".OwnerID"] = "";
$tdatacallocale[".OriginalTable"] = "callocale";


$tdatacallocale[".pagesByType"] = my_json_decode( "{}" );
$tdatacallocale[".originalPagesByType"] = $tdatacallocale[".pagesByType"];
$tdatacallocale[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacallocale[".originalPages"] = $tdatacallocale[".pages"];
$tdatacallocale[".defaultPages"] = my_json_decode( "{}" );
$tdatacallocale[".originalDefaultPages"] = $tdatacallocale[".defaultPages"];

//	field labels
$fieldLabelscallocale = array();
$fieldToolTipscallocale = array();
$pageTitlescallocale = array();
$placeHolderscallocale = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscallocale["English"] = array();
	$fieldToolTipscallocale["English"] = array();
	$placeHolderscallocale["English"] = array();
	$pageTitlescallocale["English"] = array();
	$fieldLabelscallocale["English"]["id"] = "Id";
	$fieldToolTipscallocale["English"]["id"] = "";
	$placeHolderscallocale["English"]["id"] = "";
	$fieldLabelscallocale["English"]["fullcalendarlocale"] = "Fullcalendarlocale";
	$fieldToolTipscallocale["English"]["fullcalendarlocale"] = "";
	$placeHolderscallocale["English"]["fullcalendarlocale"] = "";
	$fieldLabelscallocale["English"]["runnerlocale"] = "Runnerlocale";
	$fieldToolTipscallocale["English"]["runnerlocale"] = "";
	$placeHolderscallocale["English"]["runnerlocale"] = "";
	if (count($fieldToolTipscallocale["English"]))
		$tdatacallocale[".isUseToolTips"] = true;
}


	$tdatacallocale[".NCSearch"] = true;



$tdatacallocale[".shortTableName"] = "callocale";
$tdatacallocale[".nSecOptions"] = 0;

$tdatacallocale[".mainTableOwnerID"] = "";
$tdatacallocale[".entityType"] = 0;
$tdatacallocale[".connId"] = "project_at_localhost";


$tdatacallocale[".strOriginalTableName"] = "callocale";

	



$tdatacallocale[".showAddInPopup"] = false;

$tdatacallocale[".showEditInPopup"] = false;

$tdatacallocale[".showViewInPopup"] = false;

$tdatacallocale[".listAjax"] = false;
//	temporary
//$tdatacallocale[".listAjax"] = false;

	$tdatacallocale[".audit"] = false;

	$tdatacallocale[".locking"] = false;


$pages = $tdatacallocale[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacallocale[".edit"] = true;
	$tdatacallocale[".afterEditAction"] = 1;
	$tdatacallocale[".closePopupAfterEdit"] = 1;
	$tdatacallocale[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacallocale[".add"] = true;
$tdatacallocale[".afterAddAction"] = 1;
$tdatacallocale[".closePopupAfterAdd"] = 1;
$tdatacallocale[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacallocale[".list"] = true;
}



$tdatacallocale[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacallocale[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacallocale[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacallocale[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacallocale[".printFriendly"] = true;
}



$tdatacallocale[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacallocale[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacallocale[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacallocale[".isUseAjaxSuggest"] = true;



																								

$tdatacallocale[".ajaxCodeSnippetAdded"] = false;

$tdatacallocale[".buttonsAdded"] = false;

$tdatacallocale[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacallocale[".isUseTimeForSearch"] = false;


$tdatacallocale[".badgeColor"] = "00C2C5";


$tdatacallocale[".allSearchFields"] = array();
$tdatacallocale[".filterFields"] = array();
$tdatacallocale[".requiredSearchFields"] = array();

$tdatacallocale[".googleLikeFields"] = array();
$tdatacallocale[".googleLikeFields"][] = "id";
$tdatacallocale[".googleLikeFields"][] = "fullcalendarlocale";
$tdatacallocale[".googleLikeFields"][] = "runnerlocale";



$tdatacallocale[".tableType"] = "list";

$tdatacallocale[".printerPageOrientation"] = 0;
$tdatacallocale[".nPrinterPageScale"] = 100;

$tdatacallocale[".nPrinterSplitRecords"] = 40;

$tdatacallocale[".geocodingEnabled"] = false;










$tdatacallocale[".pageSize"] = 20;

$tdatacallocale[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacallocale[".strOrderBy"] = $tstrOrderBy;

$tdatacallocale[".orderindexes"] = array();


$tdatacallocale[".sqlHead"] = "SELECT id,  fullcalendarlocale,  runnerlocale";
$tdatacallocale[".sqlFrom"] = "FROM callocale";
$tdatacallocale[".sqlWhereExpr"] = "";
$tdatacallocale[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacallocale[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacallocale[".arrGroupsPerPage"] = $arrGPP;

$tdatacallocale[".highlightSearchResults"] = true;

$tableKeyscallocale = array();
$tableKeyscallocale[] = "id";
$tdatacallocale[".Keys"] = $tableKeyscallocale;


$tdatacallocale[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "callocale";
	$fdata["Label"] = GetFieldLabel("callocale","id");
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


	$tdatacallocale["id"] = $fdata;
		$tdatacallocale[".searchableFields"][] = "id";
//	fullcalendarlocale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullcalendarlocale";
	$fdata["GoodName"] = "fullcalendarlocale";
	$fdata["ownerTable"] = "callocale";
	$fdata["Label"] = GetFieldLabel("callocale","fullcalendarlocale");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullcalendarlocale";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullcalendarlocale";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatacallocale["fullcalendarlocale"] = $fdata;
		$tdatacallocale[".searchableFields"][] = "fullcalendarlocale";
//	runnerlocale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "runnerlocale";
	$fdata["GoodName"] = "runnerlocale";
	$fdata["ownerTable"] = "callocale";
	$fdata["Label"] = GetFieldLabel("callocale","runnerlocale");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "runnerlocale";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "runnerlocale";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatacallocale["runnerlocale"] = $fdata;
		$tdatacallocale[".searchableFields"][] = "runnerlocale";


$tables_data["callocale"]=&$tdatacallocale;
$field_labels["callocale"] = &$fieldLabelscallocale;
$fieldToolTips["callocale"] = &$fieldToolTipscallocale;
$placeHolders["callocale"] = &$placeHolderscallocale;
$page_titles["callocale"] = &$pageTitlescallocale;


changeTextControlsToDate( "callocale" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["callocale"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["callocale"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_callocale()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  fullcalendarlocale,  runnerlocale";
$proto0["m_strFrom"] = "FROM callocale";
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
	"m_strTable" => "callocale",
	"m_srcTableName" => "callocale"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "callocale";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullcalendarlocale",
	"m_strTable" => "callocale",
	"m_srcTableName" => "callocale"
));

$proto8["m_sql"] = "fullcalendarlocale";
$proto8["m_srcTableName"] = "callocale";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "runnerlocale",
	"m_strTable" => "callocale",
	"m_srcTableName" => "callocale"
));

$proto10["m_sql"] = "runnerlocale";
$proto10["m_srcTableName"] = "callocale";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "callocale";
$proto13["m_srcTableName"] = "callocale";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "fullcalendarlocale";
$proto13["m_columns"][] = "runnerlocale";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "callocale";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "callocale";
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
$proto0["m_srcTableName"]="callocale";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_callocale = createSqlQuery_callocale();


	
		;

			

$tdatacallocale[".sqlquery"] = $queryData_callocale;



$tdatacallocale[".hasEvents"] = false;

?>