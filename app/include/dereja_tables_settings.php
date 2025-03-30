<?php
$tdatadereja_tables = array();
$tdatadereja_tables[".searchableFields"] = array();
$tdatadereja_tables[".ShortName"] = "dereja_tables";
$tdatadereja_tables[".OwnerID"] = "";
$tdatadereja_tables[".OriginalTable"] = "dereja_tables";


$tdatadereja_tables[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_tables[".originalPagesByType"] = $tdatadereja_tables[".pagesByType"];
$tdatadereja_tables[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_tables[".originalPages"] = $tdatadereja_tables[".pages"];
$tdatadereja_tables[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_tables[".originalDefaultPages"] = $tdatadereja_tables[".defaultPages"];

//	field labels
$fieldLabelsdereja_tables = array();
$fieldToolTipsdereja_tables = array();
$pageTitlesdereja_tables = array();
$placeHoldersdereja_tables = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_tables["English"] = array();
	$fieldToolTipsdereja_tables["English"] = array();
	$placeHoldersdereja_tables["English"] = array();
	$pageTitlesdereja_tables["English"] = array();
	$fieldLabelsdereja_tables["English"]["table_id"] = "Table Id";
	$fieldToolTipsdereja_tables["English"]["table_id"] = "";
	$placeHoldersdereja_tables["English"]["table_id"] = "";
	$fieldLabelsdereja_tables["English"]["table_name"] = "Table Name";
	$fieldToolTipsdereja_tables["English"]["table_name"] = "";
	$placeHoldersdereja_tables["English"]["table_name"] = "";
	if (count($fieldToolTipsdereja_tables["English"]))
		$tdatadereja_tables[".isUseToolTips"] = true;
}


	$tdatadereja_tables[".NCSearch"] = true;



$tdatadereja_tables[".shortTableName"] = "dereja_tables";
$tdatadereja_tables[".nSecOptions"] = 0;

$tdatadereja_tables[".mainTableOwnerID"] = "";
$tdatadereja_tables[".entityType"] = 0;
$tdatadereja_tables[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_tables[".strOriginalTableName"] = "dereja_tables";

	



$tdatadereja_tables[".showAddInPopup"] = false;

$tdatadereja_tables[".showEditInPopup"] = false;

$tdatadereja_tables[".showViewInPopup"] = false;

$tdatadereja_tables[".listAjax"] = false;
//	temporary
//$tdatadereja_tables[".listAjax"] = false;

	$tdatadereja_tables[".audit"] = false;

	$tdatadereja_tables[".locking"] = false;


$pages = $tdatadereja_tables[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_tables[".edit"] = true;
	$tdatadereja_tables[".afterEditAction"] = 1;
	$tdatadereja_tables[".closePopupAfterEdit"] = 1;
	$tdatadereja_tables[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_tables[".add"] = true;
$tdatadereja_tables[".afterAddAction"] = 1;
$tdatadereja_tables[".closePopupAfterAdd"] = 1;
$tdatadereja_tables[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_tables[".list"] = true;
}



$tdatadereja_tables[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_tables[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_tables[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_tables[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_tables[".printFriendly"] = true;
}



$tdatadereja_tables[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_tables[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_tables[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_tables[".isUseAjaxSuggest"] = true;



						

$tdatadereja_tables[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_tables[".buttonsAdded"] = false;

$tdatadereja_tables[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_tables[".isUseTimeForSearch"] = false;


$tdatadereja_tables[".badgeColor"] = "8FBC8B";


$tdatadereja_tables[".allSearchFields"] = array();
$tdatadereja_tables[".filterFields"] = array();
$tdatadereja_tables[".requiredSearchFields"] = array();

$tdatadereja_tables[".googleLikeFields"] = array();
$tdatadereja_tables[".googleLikeFields"][] = "table_id";
$tdatadereja_tables[".googleLikeFields"][] = "table_name";



$tdatadereja_tables[".tableType"] = "list";

$tdatadereja_tables[".printerPageOrientation"] = 0;
$tdatadereja_tables[".nPrinterPageScale"] = 100;

$tdatadereja_tables[".nPrinterSplitRecords"] = 40;

$tdatadereja_tables[".geocodingEnabled"] = false;




$tdatadereja_tables[".isDisplayLoading"] = true;






$tdatadereja_tables[".pageSize"] = 20;

$tdatadereja_tables[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadereja_tables[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_tables[".orderindexes"] = array();


$tdatadereja_tables[".sqlHead"] = "SELECT table_id,  	table_name";
$tdatadereja_tables[".sqlFrom"] = "FROM dereja_tables";
$tdatadereja_tables[".sqlWhereExpr"] = "";
$tdatadereja_tables[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_tables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_tables[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_tables[".highlightSearchResults"] = true;

$tableKeysdereja_tables = array();
$tableKeysdereja_tables[] = "table_id";
$tdatadereja_tables[".Keys"] = $tableKeysdereja_tables;


$tdatadereja_tables[".hideMobileList"] = array();




//	table_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "table_id";
	$fdata["GoodName"] = "table_id";
	$fdata["ownerTable"] = "dereja_tables";
	$fdata["Label"] = GetFieldLabel("dereja_tables","table_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "table_id";

		$fdata["sourceSingle"] = "table_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "table_id";

	
	
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


	$tdatadereja_tables["table_id"] = $fdata;
		$tdatadereja_tables[".searchableFields"][] = "table_id";
//	table_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table_name";
	$fdata["GoodName"] = "table_name";
	$fdata["ownerTable"] = "dereja_tables";
	$fdata["Label"] = GetFieldLabel("dereja_tables","table_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table_name";

		$fdata["sourceSingle"] = "table_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "table_name";

	
	
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


	$tdatadereja_tables["table_name"] = $fdata;
		$tdatadereja_tables[".searchableFields"][] = "table_name";


$tables_data["dereja_tables"]=&$tdatadereja_tables;
$field_labels["dereja_tables"] = &$fieldLabelsdereja_tables;
$fieldToolTips["dereja_tables"] = &$fieldToolTipsdereja_tables;
$placeHolders["dereja_tables"] = &$placeHoldersdereja_tables;
$page_titles["dereja_tables"] = &$pageTitlesdereja_tables;


changeTextControlsToDate( "dereja_tables" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dereja_tables"] = array();
//	dereja_schema_fields
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dereja_schema_fields";
		$detailsParam["dOriginalTable"] = "dereja_schema_fields";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dereja_schema_fields";
	$detailsParam["dCaptionTable"] = GetTableCaption("dereja_schema_fields");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dereja_tables"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dereja_tables"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dereja_tables"][$dIndex]["masterKeys"][]="table_name";

				$detailsTablesData["dereja_tables"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dereja_tables"][$dIndex]["detailKeys"][]="table_name";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dereja_tables"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_tables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "table_id,  	table_name";
$proto0["m_strFrom"] = "FROM dereja_tables";
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
	"m_strName" => "table_id",
	"m_strTable" => "dereja_tables",
	"m_srcTableName" => "dereja_tables"
));

$proto6["m_sql"] = "table_id";
$proto6["m_srcTableName"] = "dereja_tables";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table_name",
	"m_strTable" => "dereja_tables",
	"m_srcTableName" => "dereja_tables"
));

$proto8["m_sql"] = "table_name";
$proto8["m_srcTableName"] = "dereja_tables";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dereja_tables";
$proto11["m_srcTableName"] = "dereja_tables";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "table_id";
$proto11["m_columns"][] = "table_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dereja_tables";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dereja_tables";
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
$proto0["m_srcTableName"]="dereja_tables";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_tables = createSqlQuery_dereja_tables();


	
																								;

		

$tdatadereja_tables[".sqlquery"] = $queryData_dereja_tables;



$tdatadereja_tables[".hasEvents"] = false;

?>