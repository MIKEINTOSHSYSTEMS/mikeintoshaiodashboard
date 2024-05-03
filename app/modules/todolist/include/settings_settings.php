<?php
$tdatasettings = array();
$tdatasettings[".searchableFields"] = array();
$tdatasettings[".ShortName"] = "settings";
$tdatasettings[".OwnerID"] = "id";
$tdatasettings[".OriginalTable"] = "todousers";


$tdatasettings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatasettings[".originalPagesByType"] = $tdatasettings[".pagesByType"];
$tdatasettings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatasettings[".originalPages"] = $tdatasettings[".pages"];
$tdatasettings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatasettings[".originalDefaultPages"] = $tdatasettings[".defaultPages"];

//	field labels
$fieldLabelssettings = array();
$fieldToolTipssettings = array();
$pageTitlessettings = array();
$placeHolderssettings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssettings["English"] = array();
	$fieldToolTipssettings["English"] = array();
	$placeHolderssettings["English"] = array();
	$pageTitlessettings["English"] = array();
	$fieldLabelssettings["English"]["id"] = "Id";
	$fieldToolTipssettings["English"]["id"] = "";
	$placeHolderssettings["English"]["id"] = "";
	$fieldLabelssettings["English"]["daystoadd"] = "Number of days to add to today's date to populate Due Date";
	$fieldToolTipssettings["English"]["daystoadd"] = "";
	$placeHolderssettings["English"]["daystoadd"] = "";
	$pageTitlessettings["English"]["edit"] = "Settings";
	if (count($fieldToolTipssettings["English"]))
		$tdatasettings[".isUseToolTips"] = true;
}


	$tdatasettings[".NCSearch"] = true;



$tdatasettings[".shortTableName"] = "settings";
$tdatasettings[".nSecOptions"] = 1;

$tdatasettings[".mainTableOwnerID"] = "id";
$tdatasettings[".entityType"] = 1;
$tdatasettings[".connId"] = "project_at_localhost";


$tdatasettings[".strOriginalTableName"] = "todousers";

	



$tdatasettings[".showAddInPopup"] = false;

$tdatasettings[".showEditInPopup"] = false;

$tdatasettings[".showViewInPopup"] = false;

$tdatasettings[".listAjax"] = false;
//	temporary
//$tdatasettings[".listAjax"] = false;

	$tdatasettings[".audit"] = false;

	$tdatasettings[".locking"] = false;


$pages = $tdatasettings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasettings[".edit"] = true;
	$tdatasettings[".afterEditAction"] = 1;
	$tdatasettings[".closePopupAfterEdit"] = 1;
	$tdatasettings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasettings[".add"] = true;
$tdatasettings[".afterAddAction"] = 1;
$tdatasettings[".closePopupAfterAdd"] = 1;
$tdatasettings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasettings[".list"] = true;
}



$tdatasettings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasettings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasettings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasettings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasettings[".printFriendly"] = true;
}



$tdatasettings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasettings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasettings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasettings[".isUseAjaxSuggest"] = true;



																								

$tdatasettings[".ajaxCodeSnippetAdded"] = false;

$tdatasettings[".buttonsAdded"] = false;

$tdatasettings[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasettings[".isUseTimeForSearch"] = false;


$tdatasettings[".badgeColor"] = "1E90FF";


$tdatasettings[".allSearchFields"] = array();
$tdatasettings[".filterFields"] = array();
$tdatasettings[".requiredSearchFields"] = array();

$tdatasettings[".googleLikeFields"] = array();
$tdatasettings[".googleLikeFields"][] = "id";
$tdatasettings[".googleLikeFields"][] = "daystoadd";



$tdatasettings[".tableType"] = "list";

$tdatasettings[".printerPageOrientation"] = 0;
$tdatasettings[".nPrinterPageScale"] = 100;

$tdatasettings[".nPrinterSplitRecords"] = 40;

$tdatasettings[".geocodingEnabled"] = false;










$tdatasettings[".pageSize"] = 20;

$tdatasettings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasettings[".strOrderBy"] = $tstrOrderBy;

$tdatasettings[".orderindexes"] = array();


$tdatasettings[".sqlHead"] = "SELECT id,  daystoadd";
$tdatasettings[".sqlFrom"] = "FROM todousers";
$tdatasettings[".sqlWhereExpr"] = "";
$tdatasettings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasettings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasettings[".arrGroupsPerPage"] = $arrGPP;

$tdatasettings[".highlightSearchResults"] = true;

$tableKeyssettings = array();
$tableKeyssettings[] = "id";
$tdatasettings[".Keys"] = $tableKeyssettings;


$tdatasettings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("Settings","id");
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


	$tdatasettings["id"] = $fdata;
		$tdatasettings[".searchableFields"][] = "id";
//	daystoadd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "daystoadd";
	$fdata["GoodName"] = "daystoadd";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("Settings","daystoadd");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "daystoadd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "daystoadd";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatasettings["daystoadd"] = $fdata;
		$tdatasettings[".searchableFields"][] = "daystoadd";


$tables_data["Settings"]=&$tdatasettings;
$field_labels["Settings"] = &$fieldLabelssettings;
$fieldToolTips["Settings"] = &$fieldToolTipssettings;
$placeHolders["Settings"] = &$placeHolderssettings;
$page_titles["Settings"] = &$pageTitlessettings;


changeTextControlsToDate( "Settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  daystoadd";
$proto0["m_strFrom"] = "FROM todousers";
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
	"m_strTable" => "todousers",
	"m_srcTableName" => "Settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "daystoadd",
	"m_strTable" => "todousers",
	"m_srcTableName" => "Settings"
));

$proto8["m_sql"] = "daystoadd";
$proto8["m_srcTableName"] = "Settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "todousers";
$proto11["m_srcTableName"] = "Settings";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "username";
$proto11["m_columns"][] = "password";
$proto11["m_columns"][] = "fullname";
$proto11["m_columns"][] = "avatar";
$proto11["m_columns"][] = "daystoadd";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "todousers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Settings";
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
$proto0["m_srcTableName"]="Settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_settings = createSqlQuery_settings();


	
		;

		

$tdatasettings[".sqlquery"] = $queryData_settings;



include_once(getabspath("include/settings_events.php"));
$tdatasettings[".hasEvents"] = true;

?>