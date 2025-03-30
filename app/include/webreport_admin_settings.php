<?php
$tdatawebreport_admin = array();
$tdatawebreport_admin[".searchableFields"] = array();
$tdatawebreport_admin[".ShortName"] = "webreport_admin";
$tdatawebreport_admin[".OwnerID"] = "";
$tdatawebreport_admin[".OriginalTable"] = "webreport_admin";


$tdatawebreport_admin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebreport_admin[".originalPagesByType"] = $tdatawebreport_admin[".pagesByType"];
$tdatawebreport_admin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebreport_admin[".originalPages"] = $tdatawebreport_admin[".pages"];
$tdatawebreport_admin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebreport_admin[".originalDefaultPages"] = $tdatawebreport_admin[".defaultPages"];

//	field labels
$fieldLabelswebreport_admin = array();
$fieldToolTipswebreport_admin = array();
$pageTitleswebreport_admin = array();
$placeHolderswebreport_admin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebreport_admin["English"] = array();
	$fieldToolTipswebreport_admin["English"] = array();
	$placeHolderswebreport_admin["English"] = array();
	$pageTitleswebreport_admin["English"] = array();
	$fieldLabelswebreport_admin["English"]["id"] = "Id";
	$fieldToolTipswebreport_admin["English"]["id"] = "";
	$placeHolderswebreport_admin["English"]["id"] = "";
	$fieldLabelswebreport_admin["English"]["tablename"] = "Tablename";
	$fieldToolTipswebreport_admin["English"]["tablename"] = "";
	$placeHolderswebreport_admin["English"]["tablename"] = "";
	$fieldLabelswebreport_admin["English"]["db_type"] = "Db Type";
	$fieldToolTipswebreport_admin["English"]["db_type"] = "";
	$placeHolderswebreport_admin["English"]["db_type"] = "";
	$fieldLabelswebreport_admin["English"]["group_name"] = "Group Name";
	$fieldToolTipswebreport_admin["English"]["group_name"] = "";
	$placeHolderswebreport_admin["English"]["group_name"] = "";
	if (count($fieldToolTipswebreport_admin["English"]))
		$tdatawebreport_admin[".isUseToolTips"] = true;
}


	$tdatawebreport_admin[".NCSearch"] = true;



$tdatawebreport_admin[".shortTableName"] = "webreport_admin";
$tdatawebreport_admin[".nSecOptions"] = 0;

$tdatawebreport_admin[".mainTableOwnerID"] = "";
$tdatawebreport_admin[".entityType"] = 0;
$tdatawebreport_admin[".connId"] = "deredevatderejadevmerqconsulta";


$tdatawebreport_admin[".strOriginalTableName"] = "webreport_admin";

	



$tdatawebreport_admin[".showAddInPopup"] = false;

$tdatawebreport_admin[".showEditInPopup"] = false;

$tdatawebreport_admin[".showViewInPopup"] = false;

$tdatawebreport_admin[".listAjax"] = false;
//	temporary
//$tdatawebreport_admin[".listAjax"] = false;

	$tdatawebreport_admin[".audit"] = false;

	$tdatawebreport_admin[".locking"] = false;


$pages = $tdatawebreport_admin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebreport_admin[".edit"] = true;
	$tdatawebreport_admin[".afterEditAction"] = 1;
	$tdatawebreport_admin[".closePopupAfterEdit"] = 1;
	$tdatawebreport_admin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebreport_admin[".add"] = true;
$tdatawebreport_admin[".afterAddAction"] = 1;
$tdatawebreport_admin[".closePopupAfterAdd"] = 1;
$tdatawebreport_admin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebreport_admin[".list"] = true;
}



$tdatawebreport_admin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebreport_admin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebreport_admin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebreport_admin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebreport_admin[".printFriendly"] = true;
}



$tdatawebreport_admin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebreport_admin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebreport_admin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebreport_admin[".isUseAjaxSuggest"] = true;



						

$tdatawebreport_admin[".ajaxCodeSnippetAdded"] = false;

$tdatawebreport_admin[".buttonsAdded"] = false;

$tdatawebreport_admin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebreport_admin[".isUseTimeForSearch"] = false;


$tdatawebreport_admin[".badgeColor"] = "BC8F8F";


$tdatawebreport_admin[".allSearchFields"] = array();
$tdatawebreport_admin[".filterFields"] = array();
$tdatawebreport_admin[".requiredSearchFields"] = array();

$tdatawebreport_admin[".googleLikeFields"] = array();
$tdatawebreport_admin[".googleLikeFields"][] = "id";
$tdatawebreport_admin[".googleLikeFields"][] = "tablename";
$tdatawebreport_admin[".googleLikeFields"][] = "db_type";
$tdatawebreport_admin[".googleLikeFields"][] = "group_name";



$tdatawebreport_admin[".tableType"] = "list";

$tdatawebreport_admin[".printerPageOrientation"] = 0;
$tdatawebreport_admin[".nPrinterPageScale"] = 100;

$tdatawebreport_admin[".nPrinterSplitRecords"] = 40;

$tdatawebreport_admin[".geocodingEnabled"] = false;










$tdatawebreport_admin[".pageSize"] = 20;

$tdatawebreport_admin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebreport_admin[".strOrderBy"] = $tstrOrderBy;

$tdatawebreport_admin[".orderindexes"] = array();


$tdatawebreport_admin[".sqlHead"] = "SELECT id,  	tablename,  	db_type,  	group_name";
$tdatawebreport_admin[".sqlFrom"] = "FROM webreport_admin";
$tdatawebreport_admin[".sqlWhereExpr"] = "";
$tdatawebreport_admin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebreport_admin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebreport_admin[".arrGroupsPerPage"] = $arrGPP;

$tdatawebreport_admin[".highlightSearchResults"] = true;

$tableKeyswebreport_admin = array();
$tableKeyswebreport_admin[] = "id";
$tdatawebreport_admin[".Keys"] = $tableKeyswebreport_admin;


$tdatawebreport_admin[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "webreport_admin";
	$fdata["Label"] = GetFieldLabel("webreport_admin","id");
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


	$tdatawebreport_admin["id"] = $fdata;
		$tdatawebreport_admin[".searchableFields"][] = "id";
//	tablename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tablename";
	$fdata["GoodName"] = "tablename";
	$fdata["ownerTable"] = "webreport_admin";
	$fdata["Label"] = GetFieldLabel("webreport_admin","tablename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tablename";

		$fdata["sourceSingle"] = "tablename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tablename";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatawebreport_admin["tablename"] = $fdata;
		$tdatawebreport_admin[".searchableFields"][] = "tablename";
//	db_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "db_type";
	$fdata["GoodName"] = "db_type";
	$fdata["ownerTable"] = "webreport_admin";
	$fdata["Label"] = GetFieldLabel("webreport_admin","db_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "db_type";

		$fdata["sourceSingle"] = "db_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "db_type";

	
	
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


	$tdatawebreport_admin["db_type"] = $fdata;
		$tdatawebreport_admin[".searchableFields"][] = "db_type";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "webreport_admin";
	$fdata["Label"] = GetFieldLabel("webreport_admin","group_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "group_name";

		$fdata["sourceSingle"] = "group_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_name";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatawebreport_admin["group_name"] = $fdata;
		$tdatawebreport_admin[".searchableFields"][] = "group_name";


$tables_data["webreport_admin"]=&$tdatawebreport_admin;
$field_labels["webreport_admin"] = &$fieldLabelswebreport_admin;
$fieldToolTips["webreport_admin"] = &$fieldToolTipswebreport_admin;
$placeHolders["webreport_admin"] = &$placeHolderswebreport_admin;
$page_titles["webreport_admin"] = &$pageTitleswebreport_admin;


changeTextControlsToDate( "webreport_admin" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["webreport_admin"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["webreport_admin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webreport_admin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	tablename,  	db_type,  	group_name";
$proto0["m_strFrom"] = "FROM webreport_admin";
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
	"m_strTable" => "webreport_admin",
	"m_srcTableName" => "webreport_admin"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "webreport_admin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tablename",
	"m_strTable" => "webreport_admin",
	"m_srcTableName" => "webreport_admin"
));

$proto8["m_sql"] = "tablename";
$proto8["m_srcTableName"] = "webreport_admin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "db_type",
	"m_strTable" => "webreport_admin",
	"m_srcTableName" => "webreport_admin"
));

$proto10["m_sql"] = "db_type";
$proto10["m_srcTableName"] = "webreport_admin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "webreport_admin",
	"m_srcTableName" => "webreport_admin"
));

$proto12["m_sql"] = "group_name";
$proto12["m_srcTableName"] = "webreport_admin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "webreport_admin";
$proto15["m_srcTableName"] = "webreport_admin";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "tablename";
$proto15["m_columns"][] = "db_type";
$proto15["m_columns"][] = "group_name";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "webreport_admin";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "webreport_admin";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="webreport_admin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webreport_admin = createSqlQuery_webreport_admin();


	
																								;

				

$tdatawebreport_admin[".sqlquery"] = $queryData_webreport_admin;



$tdatawebreport_admin[".hasEvents"] = false;

?>