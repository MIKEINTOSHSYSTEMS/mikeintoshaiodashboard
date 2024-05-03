<?php
$tdataforumsettings = array();
$tdataforumsettings[".searchableFields"] = array();
$tdataforumsettings[".ShortName"] = "forumsettings";
$tdataforumsettings[".OwnerID"] = "";
$tdataforumsettings[".OriginalTable"] = "forumsettings";


$tdataforumsettings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\",\"sendmail\"],\"search\":[\"search\"]}" );
$tdataforumsettings[".originalPagesByType"] = $tdataforumsettings[".pagesByType"];
$tdataforumsettings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\",\"sendmail\"],\"search\":[\"search\"]}" ) );
$tdataforumsettings[".originalPages"] = $tdataforumsettings[".pages"];
$tdataforumsettings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdataforumsettings[".originalDefaultPages"] = $tdataforumsettings[".defaultPages"];

//	field labels
$fieldLabelsforumsettings = array();
$fieldToolTipsforumsettings = array();
$pageTitlesforumsettings = array();
$placeHoldersforumsettings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumsettings["English"] = array();
	$fieldToolTipsforumsettings["English"] = array();
	$placeHoldersforumsettings["English"] = array();
	$pageTitlesforumsettings["English"] = array();
	$fieldLabelsforumsettings["English"]["show_active_users"] = "Show the number of active users";
	$fieldToolTipsforumsettings["English"]["show_active_users"] = "";
	$placeHoldersforumsettings["English"]["show_active_users"] = "";
	$fieldLabelsforumsettings["English"]["autolock_after"] = "Lock topics after ... days ( 0 -never )";
	$fieldToolTipsforumsettings["English"]["autolock_after"] = "";
	$placeHoldersforumsettings["English"]["autolock_after"] = "days";
	$fieldLabelsforumsettings["English"]["id"] = "Id";
	$fieldToolTipsforumsettings["English"]["id"] = "";
	$placeHoldersforumsettings["English"]["id"] = "";
	$pageTitlesforumsettings["English"]["edit"] = "Settings";
	if (count($fieldToolTipsforumsettings["English"]))
		$tdataforumsettings[".isUseToolTips"] = true;
}


	$tdataforumsettings[".NCSearch"] = true;



$tdataforumsettings[".shortTableName"] = "forumsettings";
$tdataforumsettings[".nSecOptions"] = 0;

$tdataforumsettings[".mainTableOwnerID"] = "";
$tdataforumsettings[".entityType"] = 0;
$tdataforumsettings[".connId"] = "project_at_localhost";


$tdataforumsettings[".strOriginalTableName"] = "forumsettings";

	



$tdataforumsettings[".showAddInPopup"] = false;

$tdataforumsettings[".showEditInPopup"] = false;

$tdataforumsettings[".showViewInPopup"] = false;

$tdataforumsettings[".listAjax"] = false;
//	temporary
//$tdataforumsettings[".listAjax"] = false;

	$tdataforumsettings[".audit"] = false;

	$tdataforumsettings[".locking"] = false;


$pages = $tdataforumsettings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumsettings[".edit"] = true;
	$tdataforumsettings[".afterEditAction"] = 1;
	$tdataforumsettings[".closePopupAfterEdit"] = 1;
	$tdataforumsettings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumsettings[".add"] = true;
$tdataforumsettings[".afterAddAction"] = 1;
$tdataforumsettings[".closePopupAfterAdd"] = 1;
$tdataforumsettings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumsettings[".list"] = true;
}



$tdataforumsettings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumsettings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumsettings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumsettings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumsettings[".printFriendly"] = true;
}



$tdataforumsettings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumsettings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumsettings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumsettings[".isUseAjaxSuggest"] = true;



															

$tdataforumsettings[".ajaxCodeSnippetAdded"] = false;

$tdataforumsettings[".buttonsAdded"] = false;

$tdataforumsettings[".addPageEvents"] = true;

// use timepicker for search panel
$tdataforumsettings[".isUseTimeForSearch"] = false;


$tdataforumsettings[".badgeColor"] = "2F4F4F";


$tdataforumsettings[".allSearchFields"] = array();
$tdataforumsettings[".filterFields"] = array();
$tdataforumsettings[".requiredSearchFields"] = array();

$tdataforumsettings[".googleLikeFields"] = array();
$tdataforumsettings[".googleLikeFields"][] = "show_active_users";
$tdataforumsettings[".googleLikeFields"][] = "autolock_after";
$tdataforumsettings[".googleLikeFields"][] = "id";



$tdataforumsettings[".tableType"] = "list";

$tdataforumsettings[".printerPageOrientation"] = 0;
$tdataforumsettings[".nPrinterPageScale"] = 100;

$tdataforumsettings[".nPrinterSplitRecords"] = 40;

$tdataforumsettings[".geocodingEnabled"] = false;










$tdataforumsettings[".pageSize"] = 20;

$tdataforumsettings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataforumsettings[".strOrderBy"] = $tstrOrderBy;

$tdataforumsettings[".orderindexes"] = array();


$tdataforumsettings[".sqlHead"] = "SELECT show_active_users,  autolock_after,  id";
$tdataforumsettings[".sqlFrom"] = "FROM forumsettings";
$tdataforumsettings[".sqlWhereExpr"] = "";
$tdataforumsettings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumsettings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumsettings[".arrGroupsPerPage"] = $arrGPP;

$tdataforumsettings[".highlightSearchResults"] = true;

$tableKeysforumsettings = array();
$tableKeysforumsettings[] = "id";
$tdataforumsettings[".Keys"] = $tableKeysforumsettings;


$tdataforumsettings[".hideMobileList"] = array();




//	show_active_users
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "show_active_users";
	$fdata["GoodName"] = "show_active_users";
	$fdata["ownerTable"] = "forumsettings";
	$fdata["Label"] = GetFieldLabel("forumsettings","show_active_users");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "show_active_users";

		$fdata["sourceSingle"] = "show_active_users";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "show_active_users";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdataforumsettings["show_active_users"] = $fdata;
		$tdataforumsettings[".searchableFields"][] = "show_active_users";
//	autolock_after
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "autolock_after";
	$fdata["GoodName"] = "autolock_after";
	$fdata["ownerTable"] = "forumsettings";
	$fdata["Label"] = GetFieldLabel("forumsettings","autolock_after");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "autolock_after";

		$fdata["sourceSingle"] = "autolock_after";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "autolock_after";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataforumsettings["autolock_after"] = $fdata;
		$tdataforumsettings[".searchableFields"][] = "autolock_after";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumsettings";
	$fdata["Label"] = GetFieldLabel("forumsettings","id");
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


	$tdataforumsettings["id"] = $fdata;
		$tdataforumsettings[".searchableFields"][] = "id";


$tables_data["forumsettings"]=&$tdataforumsettings;
$field_labels["forumsettings"] = &$fieldLabelsforumsettings;
$fieldToolTips["forumsettings"] = &$fieldToolTipsforumsettings;
$placeHolders["forumsettings"] = &$placeHoldersforumsettings;
$page_titles["forumsettings"] = &$pageTitlesforumsettings;


changeTextControlsToDate( "forumsettings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumsettings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumsettings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumsettings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "show_active_users,  autolock_after,  id";
$proto0["m_strFrom"] = "FROM forumsettings";
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
	"m_strName" => "show_active_users",
	"m_strTable" => "forumsettings",
	"m_srcTableName" => "forumsettings"
));

$proto6["m_sql"] = "show_active_users";
$proto6["m_srcTableName"] = "forumsettings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "autolock_after",
	"m_strTable" => "forumsettings",
	"m_srcTableName" => "forumsettings"
));

$proto8["m_sql"] = "autolock_after";
$proto8["m_srcTableName"] = "forumsettings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumsettings",
	"m_srcTableName" => "forumsettings"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "forumsettings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "forumsettings";
$proto13["m_srcTableName"] = "forumsettings";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "show_active_users";
$proto13["m_columns"][] = "autolock_after";
$proto13["m_columns"][] = "id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "forumsettings";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "forumsettings";
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
$proto0["m_srcTableName"]="forumsettings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumsettings = createSqlQuery_forumsettings();


	
																;

			

$tdataforumsettings[".sqlquery"] = $queryData_forumsettings;



include_once(getabspath("include/forumsettings_events.php"));
$tdataforumsettings[".hasEvents"] = true;

?>