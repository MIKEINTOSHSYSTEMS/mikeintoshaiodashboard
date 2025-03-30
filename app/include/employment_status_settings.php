<?php
$tdataemployment_status = array();
$tdataemployment_status[".searchableFields"] = array();
$tdataemployment_status[".ShortName"] = "employment_status";
$tdataemployment_status[".OwnerID"] = "";
$tdataemployment_status[".OriginalTable"] = "Employment_Status";


$tdataemployment_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataemployment_status[".originalPagesByType"] = $tdataemployment_status[".pagesByType"];
$tdataemployment_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataemployment_status[".originalPages"] = $tdataemployment_status[".pages"];
$tdataemployment_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataemployment_status[".originalDefaultPages"] = $tdataemployment_status[".defaultPages"];

//	field labels
$fieldLabelsemployment_status = array();
$fieldToolTipsemployment_status = array();
$pageTitlesemployment_status = array();
$placeHoldersemployment_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployment_status["English"] = array();
	$fieldToolTipsemployment_status["English"] = array();
	$placeHoldersemployment_status["English"] = array();
	$pageTitlesemployment_status["English"] = array();
	$fieldLabelsemployment_status["English"]["empstat_id"] = "Empstat Id";
	$fieldToolTipsemployment_status["English"]["empstat_id"] = "";
	$placeHoldersemployment_status["English"]["empstat_id"] = "";
	$fieldLabelsemployment_status["English"]["employment_status"] = "Employment Status";
	$fieldToolTipsemployment_status["English"]["employment_status"] = "";
	$placeHoldersemployment_status["English"]["employment_status"] = "";
	if (count($fieldToolTipsemployment_status["English"]))
		$tdataemployment_status[".isUseToolTips"] = true;
}


	$tdataemployment_status[".NCSearch"] = true;



$tdataemployment_status[".shortTableName"] = "employment_status";
$tdataemployment_status[".nSecOptions"] = 0;

$tdataemployment_status[".mainTableOwnerID"] = "";
$tdataemployment_status[".entityType"] = 0;
$tdataemployment_status[".connId"] = "deredevatderejadevmerqconsulta";


$tdataemployment_status[".strOriginalTableName"] = "Employment_Status";

	



$tdataemployment_status[".showAddInPopup"] = false;

$tdataemployment_status[".showEditInPopup"] = false;

$tdataemployment_status[".showViewInPopup"] = false;

$tdataemployment_status[".listAjax"] = false;
//	temporary
//$tdataemployment_status[".listAjax"] = false;

	$tdataemployment_status[".audit"] = false;

	$tdataemployment_status[".locking"] = false;


$pages = $tdataemployment_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataemployment_status[".edit"] = true;
	$tdataemployment_status[".afterEditAction"] = 1;
	$tdataemployment_status[".closePopupAfterEdit"] = 1;
	$tdataemployment_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataemployment_status[".add"] = true;
$tdataemployment_status[".afterAddAction"] = 0;
$tdataemployment_status[".closePopupAfterAdd"] = 1;
$tdataemployment_status[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataemployment_status[".list"] = true;
}



$tdataemployment_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataemployment_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataemployment_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataemployment_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataemployment_status[".printFriendly"] = true;
}



$tdataemployment_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataemployment_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataemployment_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataemployment_status[".isUseAjaxSuggest"] = true;



						

$tdataemployment_status[".ajaxCodeSnippetAdded"] = false;

$tdataemployment_status[".buttonsAdded"] = false;

$tdataemployment_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployment_status[".isUseTimeForSearch"] = false;


$tdataemployment_status[".badgeColor"] = "E67349";


$tdataemployment_status[".allSearchFields"] = array();
$tdataemployment_status[".filterFields"] = array();
$tdataemployment_status[".requiredSearchFields"] = array();

$tdataemployment_status[".googleLikeFields"] = array();
$tdataemployment_status[".googleLikeFields"][] = "empstat_id";
$tdataemployment_status[".googleLikeFields"][] = "employment_status";



$tdataemployment_status[".tableType"] = "list";

$tdataemployment_status[".printerPageOrientation"] = 0;
$tdataemployment_status[".nPrinterPageScale"] = 100;

$tdataemployment_status[".nPrinterSplitRecords"] = 40;

$tdataemployment_status[".geocodingEnabled"] = false;




$tdataemployment_status[".isDisplayLoading"] = true;






$tdataemployment_status[".pageSize"] = 20;

$tdataemployment_status[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY empstat_id DESC";
$tdataemployment_status[".strOrderBy"] = $tstrOrderBy;

$tdataemployment_status[".orderindexes"] = array();
	$tdataemployment_status[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "empstat_id");



$tdataemployment_status[".sqlHead"] = "SELECT empstat_id,  employment_status";
$tdataemployment_status[".sqlFrom"] = "FROM Employment_Status";
$tdataemployment_status[".sqlWhereExpr"] = "";
$tdataemployment_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployment_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployment_status[".arrGroupsPerPage"] = $arrGPP;

$tdataemployment_status[".highlightSearchResults"] = true;

$tableKeysemployment_status = array();
$tableKeysemployment_status[] = "empstat_id";
$tdataemployment_status[".Keys"] = $tableKeysemployment_status;


$tdataemployment_status[".hideMobileList"] = array();




//	empstat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "empstat_id";
	$fdata["GoodName"] = "empstat_id";
	$fdata["ownerTable"] = "Employment_Status";
	$fdata["Label"] = GetFieldLabel("Employment_Status","empstat_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "empstat_id";

		$fdata["sourceSingle"] = "empstat_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empstat_id";

	
	
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


	$tdataemployment_status["empstat_id"] = $fdata;
		$tdataemployment_status[".searchableFields"][] = "empstat_id";
//	employment_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "employment_status";
	$fdata["GoodName"] = "employment_status";
	$fdata["ownerTable"] = "Employment_Status";
	$fdata["Label"] = GetFieldLabel("Employment_Status","employment_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "employment_status";

		$fdata["sourceSingle"] = "employment_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "employment_status";

	
	
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


	$tdataemployment_status["employment_status"] = $fdata;
		$tdataemployment_status[".searchableFields"][] = "employment_status";


$tables_data["Employment_Status"]=&$tdataemployment_status;
$field_labels["Employment_Status"] = &$fieldLabelsemployment_status;
$fieldToolTips["Employment_Status"] = &$fieldToolTipsemployment_status;
$placeHolders["Employment_Status"] = &$placeHoldersemployment_status;
$page_titles["Employment_Status"] = &$pageTitlesemployment_status;


changeTextControlsToDate( "Employment_Status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Employment_Status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Employment_Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_employment_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "empstat_id,  employment_status";
$proto0["m_strFrom"] = "FROM Employment_Status";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY empstat_id DESC";
	
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
	"m_strName" => "empstat_id",
	"m_strTable" => "Employment_Status",
	"m_srcTableName" => "Employment_Status"
));

$proto6["m_sql"] = "empstat_id";
$proto6["m_srcTableName"] = "Employment_Status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "employment_status",
	"m_strTable" => "Employment_Status",
	"m_srcTableName" => "Employment_Status"
));

$proto8["m_sql"] = "employment_status";
$proto8["m_srcTableName"] = "Employment_Status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Employment_Status";
$proto11["m_srcTableName"] = "Employment_Status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "empstat_id";
$proto11["m_columns"][] = "employment_status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Employment_Status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Employment_Status";
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
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "empstat_id",
	"m_strTable" => "Employment_Status",
	"m_srcTableName" => "Employment_Status"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 0;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Employment_Status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employment_status = createSqlQuery_employment_status();


	
																								;

		

$tdataemployment_status[".sqlquery"] = $queryData_employment_status;



$tdataemployment_status[".hasEvents"] = false;

?>