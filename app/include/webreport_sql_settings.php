<?php
$tdatawebreport_sql = array();
$tdatawebreport_sql[".searchableFields"] = array();
$tdatawebreport_sql[".ShortName"] = "webreport_sql";
$tdatawebreport_sql[".OwnerID"] = "";
$tdatawebreport_sql[".OriginalTable"] = "webreport_sql";


$tdatawebreport_sql[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebreport_sql[".originalPagesByType"] = $tdatawebreport_sql[".pagesByType"];
$tdatawebreport_sql[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebreport_sql[".originalPages"] = $tdatawebreport_sql[".pages"];
$tdatawebreport_sql[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebreport_sql[".originalDefaultPages"] = $tdatawebreport_sql[".defaultPages"];

//	field labels
$fieldLabelswebreport_sql = array();
$fieldToolTipswebreport_sql = array();
$pageTitleswebreport_sql = array();
$placeHolderswebreport_sql = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebreport_sql["English"] = array();
	$fieldToolTipswebreport_sql["English"] = array();
	$placeHolderswebreport_sql["English"] = array();
	$pageTitleswebreport_sql["English"] = array();
	$fieldLabelswebreport_sql["English"]["id"] = "Id";
	$fieldToolTipswebreport_sql["English"]["id"] = "";
	$placeHolderswebreport_sql["English"]["id"] = "";
	$fieldLabelswebreport_sql["English"]["sqlname"] = "Sqlname";
	$fieldToolTipswebreport_sql["English"]["sqlname"] = "";
	$placeHolderswebreport_sql["English"]["sqlname"] = "";
	$fieldLabelswebreport_sql["English"]["sqlcontent"] = "Sqlcontent";
	$fieldToolTipswebreport_sql["English"]["sqlcontent"] = "";
	$placeHolderswebreport_sql["English"]["sqlcontent"] = "";
	if (count($fieldToolTipswebreport_sql["English"]))
		$tdatawebreport_sql[".isUseToolTips"] = true;
}


	$tdatawebreport_sql[".NCSearch"] = true;



$tdatawebreport_sql[".shortTableName"] = "webreport_sql";
$tdatawebreport_sql[".nSecOptions"] = 0;

$tdatawebreport_sql[".mainTableOwnerID"] = "";
$tdatawebreport_sql[".entityType"] = 0;
$tdatawebreport_sql[".connId"] = "deredevatderejadevmerqconsulta";


$tdatawebreport_sql[".strOriginalTableName"] = "webreport_sql";

	



$tdatawebreport_sql[".showAddInPopup"] = false;

$tdatawebreport_sql[".showEditInPopup"] = false;

$tdatawebreport_sql[".showViewInPopup"] = false;

$tdatawebreport_sql[".listAjax"] = false;
//	temporary
//$tdatawebreport_sql[".listAjax"] = false;

	$tdatawebreport_sql[".audit"] = false;

	$tdatawebreport_sql[".locking"] = false;


$pages = $tdatawebreport_sql[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebreport_sql[".edit"] = true;
	$tdatawebreport_sql[".afterEditAction"] = 1;
	$tdatawebreport_sql[".closePopupAfterEdit"] = 1;
	$tdatawebreport_sql[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebreport_sql[".add"] = true;
$tdatawebreport_sql[".afterAddAction"] = 1;
$tdatawebreport_sql[".closePopupAfterAdd"] = 1;
$tdatawebreport_sql[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebreport_sql[".list"] = true;
}



$tdatawebreport_sql[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebreport_sql[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebreport_sql[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebreport_sql[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebreport_sql[".printFriendly"] = true;
}



$tdatawebreport_sql[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebreport_sql[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebreport_sql[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebreport_sql[".isUseAjaxSuggest"] = true;



						

$tdatawebreport_sql[".ajaxCodeSnippetAdded"] = false;

$tdatawebreport_sql[".buttonsAdded"] = false;

$tdatawebreport_sql[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebreport_sql[".isUseTimeForSearch"] = false;


$tdatawebreport_sql[".badgeColor"] = "D2AF80";


$tdatawebreport_sql[".allSearchFields"] = array();
$tdatawebreport_sql[".filterFields"] = array();
$tdatawebreport_sql[".requiredSearchFields"] = array();

$tdatawebreport_sql[".googleLikeFields"] = array();
$tdatawebreport_sql[".googleLikeFields"][] = "id";
$tdatawebreport_sql[".googleLikeFields"][] = "sqlname";
$tdatawebreport_sql[".googleLikeFields"][] = "sqlcontent";



$tdatawebreport_sql[".tableType"] = "list";

$tdatawebreport_sql[".printerPageOrientation"] = 0;
$tdatawebreport_sql[".nPrinterPageScale"] = 100;

$tdatawebreport_sql[".nPrinterSplitRecords"] = 40;

$tdatawebreport_sql[".geocodingEnabled"] = false;










$tdatawebreport_sql[".pageSize"] = 20;

$tdatawebreport_sql[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebreport_sql[".strOrderBy"] = $tstrOrderBy;

$tdatawebreport_sql[".orderindexes"] = array();


$tdatawebreport_sql[".sqlHead"] = "SELECT id,  	sqlname,  	sqlcontent";
$tdatawebreport_sql[".sqlFrom"] = "FROM webreport_sql";
$tdatawebreport_sql[".sqlWhereExpr"] = "";
$tdatawebreport_sql[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebreport_sql[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebreport_sql[".arrGroupsPerPage"] = $arrGPP;

$tdatawebreport_sql[".highlightSearchResults"] = true;

$tableKeyswebreport_sql = array();
$tableKeyswebreport_sql[] = "id";
$tdatawebreport_sql[".Keys"] = $tableKeyswebreport_sql;


$tdatawebreport_sql[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "webreport_sql";
	$fdata["Label"] = GetFieldLabel("webreport_sql","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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


	$tdatawebreport_sql["id"] = $fdata;
		$tdatawebreport_sql[".searchableFields"][] = "id";
//	sqlname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sqlname";
	$fdata["GoodName"] = "sqlname";
	$fdata["ownerTable"] = "webreport_sql";
	$fdata["Label"] = GetFieldLabel("webreport_sql","sqlname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sqlname";

		$fdata["sourceSingle"] = "sqlname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sqlname";

	
	
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


	$tdatawebreport_sql["sqlname"] = $fdata;
		$tdatawebreport_sql[".searchableFields"][] = "sqlname";
//	sqlcontent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sqlcontent";
	$fdata["GoodName"] = "sqlcontent";
	$fdata["ownerTable"] = "webreport_sql";
	$fdata["Label"] = GetFieldLabel("webreport_sql","sqlcontent");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "sqlcontent";

		$fdata["sourceSingle"] = "sqlcontent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sqlcontent";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatawebreport_sql["sqlcontent"] = $fdata;
		$tdatawebreport_sql[".searchableFields"][] = "sqlcontent";


$tables_data["webreport_sql"]=&$tdatawebreport_sql;
$field_labels["webreport_sql"] = &$fieldLabelswebreport_sql;
$fieldToolTips["webreport_sql"] = &$fieldToolTipswebreport_sql;
$placeHolders["webreport_sql"] = &$placeHolderswebreport_sql;
$page_titles["webreport_sql"] = &$pageTitleswebreport_sql;


changeTextControlsToDate( "webreport_sql" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["webreport_sql"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["webreport_sql"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webreport_sql()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	sqlname,  	sqlcontent";
$proto0["m_strFrom"] = "FROM webreport_sql";
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
	"m_strTable" => "webreport_sql",
	"m_srcTableName" => "webreport_sql"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "webreport_sql";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sqlname",
	"m_strTable" => "webreport_sql",
	"m_srcTableName" => "webreport_sql"
));

$proto8["m_sql"] = "sqlname";
$proto8["m_srcTableName"] = "webreport_sql";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sqlcontent",
	"m_strTable" => "webreport_sql",
	"m_srcTableName" => "webreport_sql"
));

$proto10["m_sql"] = "sqlcontent";
$proto10["m_srcTableName"] = "webreport_sql";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "webreport_sql";
$proto13["m_srcTableName"] = "webreport_sql";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "sqlname";
$proto13["m_columns"][] = "sqlcontent";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "webreport_sql";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "webreport_sql";
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
$proto0["m_srcTableName"]="webreport_sql";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webreport_sql = createSqlQuery_webreport_sql();


	
																								;

			

$tdatawebreport_sql[".sqlquery"] = $queryData_webreport_sql;



$tdatawebreport_sql[".hasEvents"] = false;

?>