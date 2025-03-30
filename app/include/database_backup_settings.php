<?php
$tdatadatabase_backup = array();
$tdatadatabase_backup[".searchableFields"] = array();
$tdatadatabase_backup[".ShortName"] = "database_backup";
$tdatadatabase_backup[".OwnerID"] = "";
$tdatadatabase_backup[".OriginalTable"] = "backup";


$tdatadatabase_backup[".pagesByType"] = my_json_decode( "{\"list\":[\"Main_Database_Backup\",\"Forms_Database_Backup\",\"MB_Database_Backup\"],\"search\":[\"XMB_Database_BackupX\"]}" );
$tdatadatabase_backup[".originalPagesByType"] = $tdatadatabase_backup[".pagesByType"];
$tdatadatabase_backup[".pages"] = types2pages( my_json_decode( "{\"list\":[\"Main_Database_Backup\",\"Forms_Database_Backup\",\"MB_Database_Backup\"],\"search\":[\"XMB_Database_BackupX\"]}" ) );
$tdatadatabase_backup[".originalPages"] = $tdatadatabase_backup[".pages"];
$tdatadatabase_backup[".defaultPages"] = my_json_decode( "{\"list\":\"Main_Database_Backup\",\"search\":\"XMB_Database_BackupX\"}" );
$tdatadatabase_backup[".originalDefaultPages"] = $tdatadatabase_backup[".defaultPages"];

//	field labels
$fieldLabelsdatabase_backup = array();
$fieldToolTipsdatabase_backup = array();
$pageTitlesdatabase_backup = array();
$placeHoldersdatabase_backup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdatabase_backup["English"] = array();
	$fieldToolTipsdatabase_backup["English"] = array();
	$placeHoldersdatabase_backup["English"] = array();
	$pageTitlesdatabase_backup["English"] = array();
	$fieldLabelsdatabase_backup["English"]["backup_id"] = "Backup Id";
	$fieldToolTipsdatabase_backup["English"]["backup_id"] = "";
	$placeHoldersdatabase_backup["English"]["backup_id"] = "";
	$fieldLabelsdatabase_backup["English"]["backup_name"] = "Backup Name";
	$fieldToolTipsdatabase_backup["English"]["backup_name"] = "";
	$placeHoldersdatabase_backup["English"]["backup_name"] = "";
	$fieldLabelsdatabase_backup["English"]["backup_date"] = "Backup Date";
	$fieldToolTipsdatabase_backup["English"]["backup_date"] = "";
	$placeHoldersdatabase_backup["English"]["backup_date"] = "";
	$fieldLabelsdatabase_backup["English"]["backup_action"] = "Backup Action";
	$fieldToolTipsdatabase_backup["English"]["backup_action"] = "";
	$placeHoldersdatabase_backup["English"]["backup_action"] = "";
	$pageTitlesdatabase_backup["English"]["XMB_Database_BackupX"] = "Database Backups";
	if (count($fieldToolTipsdatabase_backup["English"]))
		$tdatadatabase_backup[".isUseToolTips"] = true;
}


	$tdatadatabase_backup[".NCSearch"] = true;



$tdatadatabase_backup[".shortTableName"] = "database_backup";
$tdatadatabase_backup[".nSecOptions"] = 0;

$tdatadatabase_backup[".mainTableOwnerID"] = "";
$tdatadatabase_backup[".entityType"] = 1;
$tdatadatabase_backup[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadatabase_backup[".strOriginalTableName"] = "backup";

	



$tdatadatabase_backup[".showAddInPopup"] = false;

$tdatadatabase_backup[".showEditInPopup"] = false;

$tdatadatabase_backup[".showViewInPopup"] = false;

$tdatadatabase_backup[".listAjax"] = false;
//	temporary
//$tdatadatabase_backup[".listAjax"] = false;

	$tdatadatabase_backup[".audit"] = true;

	$tdatadatabase_backup[".locking"] = false;


$pages = $tdatadatabase_backup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadatabase_backup[".edit"] = true;
	$tdatadatabase_backup[".afterEditAction"] = 1;
	$tdatadatabase_backup[".closePopupAfterEdit"] = 1;
	$tdatadatabase_backup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadatabase_backup[".add"] = true;
$tdatadatabase_backup[".afterAddAction"] = 1;
$tdatadatabase_backup[".closePopupAfterAdd"] = 1;
$tdatadatabase_backup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadatabase_backup[".list"] = true;
}



$tdatadatabase_backup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadatabase_backup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadatabase_backup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadatabase_backup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadatabase_backup[".printFriendly"] = true;
}



$tdatadatabase_backup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadatabase_backup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadatabase_backup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadatabase_backup[".isUseAjaxSuggest"] = true;



						

$tdatadatabase_backup[".ajaxCodeSnippetAdded"] = false;

$tdatadatabase_backup[".buttonsAdded"] = false;

$tdatadatabase_backup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadatabase_backup[".isUseTimeForSearch"] = false;


$tdatadatabase_backup[".badgeColor"] = "778899";


$tdatadatabase_backup[".allSearchFields"] = array();
$tdatadatabase_backup[".filterFields"] = array();
$tdatadatabase_backup[".requiredSearchFields"] = array();

$tdatadatabase_backup[".googleLikeFields"] = array();
$tdatadatabase_backup[".googleLikeFields"][] = "backup_id";
$tdatadatabase_backup[".googleLikeFields"][] = "backup_name";
$tdatadatabase_backup[".googleLikeFields"][] = "backup_date";
$tdatadatabase_backup[".googleLikeFields"][] = "backup_action";



$tdatadatabase_backup[".tableType"] = "list";

$tdatadatabase_backup[".printerPageOrientation"] = 0;
$tdatadatabase_backup[".nPrinterPageScale"] = 100;

$tdatadatabase_backup[".nPrinterSplitRecords"] = 40;

$tdatadatabase_backup[".geocodingEnabled"] = false;




$tdatadatabase_backup[".isDisplayLoading"] = true;






$tdatadatabase_backup[".pageSize"] = 20;

$tdatadatabase_backup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadatabase_backup[".strOrderBy"] = $tstrOrderBy;

$tdatadatabase_backup[".orderindexes"] = array();


$tdatadatabase_backup[".sqlHead"] = "SELECT backup_id,  	backup_name,  	backup_date,  	backup_action";
$tdatadatabase_backup[".sqlFrom"] = "FROM `backup`";
$tdatadatabase_backup[".sqlWhereExpr"] = "";
$tdatadatabase_backup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadatabase_backup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadatabase_backup[".arrGroupsPerPage"] = $arrGPP;

$tdatadatabase_backup[".highlightSearchResults"] = true;

$tableKeysdatabase_backup = array();
$tableKeysdatabase_backup[] = "backup_id";
$tdatadatabase_backup[".Keys"] = $tableKeysdatabase_backup;


$tdatadatabase_backup[".hideMobileList"] = array();




//	backup_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "backup_id";
	$fdata["GoodName"] = "backup_id";
	$fdata["ownerTable"] = "backup";
	$fdata["Label"] = GetFieldLabel("database_backup","backup_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "backup_id";

		$fdata["sourceSingle"] = "backup_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "backup_id";

	
	
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


	$tdatadatabase_backup["backup_id"] = $fdata;
		$tdatadatabase_backup[".searchableFields"][] = "backup_id";
//	backup_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "backup_name";
	$fdata["GoodName"] = "backup_name";
	$fdata["ownerTable"] = "backup";
	$fdata["Label"] = GetFieldLabel("database_backup","backup_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "backup_name";

		$fdata["sourceSingle"] = "backup_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "backup_name";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatadatabase_backup["backup_name"] = $fdata;
		$tdatadatabase_backup[".searchableFields"][] = "backup_name";
//	backup_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "backup_date";
	$fdata["GoodName"] = "backup_date";
	$fdata["ownerTable"] = "backup";
	$fdata["Label"] = GetFieldLabel("database_backup","backup_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "backup_date";

		$fdata["sourceSingle"] = "backup_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "backup_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadatabase_backup["backup_date"] = $fdata;
		$tdatadatabase_backup[".searchableFields"][] = "backup_date";
//	backup_action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "backup_action";
	$fdata["GoodName"] = "backup_action";
	$fdata["ownerTable"] = "backup";
	$fdata["Label"] = GetFieldLabel("database_backup","backup_action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "backup_action";

		$fdata["sourceSingle"] = "backup_action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "backup_action";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatadatabase_backup["backup_action"] = $fdata;
		$tdatadatabase_backup[".searchableFields"][] = "backup_action";


$tables_data["database_backup"]=&$tdatadatabase_backup;
$field_labels["database_backup"] = &$fieldLabelsdatabase_backup;
$fieldToolTips["database_backup"] = &$fieldToolTipsdatabase_backup;
$placeHolders["database_backup"] = &$placeHoldersdatabase_backup;
$page_titles["database_backup"] = &$pageTitlesdatabase_backup;


changeTextControlsToDate( "database_backup" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["database_backup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["database_backup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_database_backup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "backup_id,  	backup_name,  	backup_date,  	backup_action";
$proto0["m_strFrom"] = "FROM `backup`";
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
	"m_strName" => "backup_id",
	"m_strTable" => "backup",
	"m_srcTableName" => "database_backup"
));

$proto6["m_sql"] = "backup_id";
$proto6["m_srcTableName"] = "database_backup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "backup_name",
	"m_strTable" => "backup",
	"m_srcTableName" => "database_backup"
));

$proto8["m_sql"] = "backup_name";
$proto8["m_srcTableName"] = "database_backup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "backup_date",
	"m_strTable" => "backup",
	"m_srcTableName" => "database_backup"
));

$proto10["m_sql"] = "backup_date";
$proto10["m_srcTableName"] = "database_backup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "backup_action",
	"m_strTable" => "backup",
	"m_srcTableName" => "database_backup"
));

$proto12["m_sql"] = "backup_action";
$proto12["m_srcTableName"] = "database_backup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "backup";
$proto15["m_srcTableName"] = "database_backup";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "backup_id";
$proto15["m_columns"][] = "backup_name";
$proto15["m_columns"][] = "backup_date";
$proto15["m_columns"][] = "backup_action";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`backup`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "database_backup";
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
$proto0["m_srcTableName"]="database_backup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_database_backup = createSqlQuery_database_backup();


	
																								;

				

$tdatadatabase_backup[".sqlquery"] = $queryData_database_backup;



include_once(getabspath("include/database_backup_events.php"));
$tdatadatabase_backup[".hasEvents"] = true;

?>