<?php
$tdataforumcategorysubscribers = array();
$tdataforumcategorysubscribers[".searchableFields"] = array();
$tdataforumcategorysubscribers[".ShortName"] = "forumcategorysubscribers";
$tdataforumcategorysubscribers[".OwnerID"] = "";
$tdataforumcategorysubscribers[".OriginalTable"] = "forumcategorysubscribers";


$tdataforumcategorysubscribers[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataforumcategorysubscribers[".originalPagesByType"] = $tdataforumcategorysubscribers[".pagesByType"];
$tdataforumcategorysubscribers[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataforumcategorysubscribers[".originalPages"] = $tdataforumcategorysubscribers[".pages"];
$tdataforumcategorysubscribers[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataforumcategorysubscribers[".originalDefaultPages"] = $tdataforumcategorysubscribers[".defaultPages"];

//	field labels
$fieldLabelsforumcategorysubscribers = array();
$fieldToolTipsforumcategorysubscribers = array();
$pageTitlesforumcategorysubscribers = array();
$placeHoldersforumcategorysubscribers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumcategorysubscribers["English"] = array();
	$fieldToolTipsforumcategorysubscribers["English"] = array();
	$placeHoldersforumcategorysubscribers["English"] = array();
	$pageTitlesforumcategorysubscribers["English"] = array();
	$fieldLabelsforumcategorysubscribers["English"]["id"] = "Id";
	$fieldToolTipsforumcategorysubscribers["English"]["id"] = "";
	$placeHoldersforumcategorysubscribers["English"]["id"] = "";
	$fieldLabelsforumcategorysubscribers["English"]["userid"] = "Userid";
	$fieldToolTipsforumcategorysubscribers["English"]["userid"] = "";
	$placeHoldersforumcategorysubscribers["English"]["userid"] = "";
	$fieldLabelsforumcategorysubscribers["English"]["categoryid"] = "Categoryid";
	$fieldToolTipsforumcategorysubscribers["English"]["categoryid"] = "";
	$placeHoldersforumcategorysubscribers["English"]["categoryid"] = "";
	$fieldLabelsforumcategorysubscribers["English"]["lastemail"] = "Lastemail";
	$fieldToolTipsforumcategorysubscribers["English"]["lastemail"] = "";
	$placeHoldersforumcategorysubscribers["English"]["lastemail"] = "";
	if (count($fieldToolTipsforumcategorysubscribers["English"]))
		$tdataforumcategorysubscribers[".isUseToolTips"] = true;
}


	$tdataforumcategorysubscribers[".NCSearch"] = true;



$tdataforumcategorysubscribers[".shortTableName"] = "forumcategorysubscribers";
$tdataforumcategorysubscribers[".nSecOptions"] = 0;

$tdataforumcategorysubscribers[".mainTableOwnerID"] = "";
$tdataforumcategorysubscribers[".entityType"] = 0;
$tdataforumcategorysubscribers[".connId"] = "project_at_localhost";


$tdataforumcategorysubscribers[".strOriginalTableName"] = "forumcategorysubscribers";

	



$tdataforumcategorysubscribers[".showAddInPopup"] = false;

$tdataforumcategorysubscribers[".showEditInPopup"] = false;

$tdataforumcategorysubscribers[".showViewInPopup"] = false;

$tdataforumcategorysubscribers[".listAjax"] = false;
//	temporary
//$tdataforumcategorysubscribers[".listAjax"] = false;

	$tdataforumcategorysubscribers[".audit"] = false;

	$tdataforumcategorysubscribers[".locking"] = false;


$pages = $tdataforumcategorysubscribers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumcategorysubscribers[".edit"] = true;
	$tdataforumcategorysubscribers[".afterEditAction"] = 1;
	$tdataforumcategorysubscribers[".closePopupAfterEdit"] = 1;
	$tdataforumcategorysubscribers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumcategorysubscribers[".add"] = true;
$tdataforumcategorysubscribers[".afterAddAction"] = 1;
$tdataforumcategorysubscribers[".closePopupAfterAdd"] = 1;
$tdataforumcategorysubscribers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumcategorysubscribers[".list"] = true;
}



$tdataforumcategorysubscribers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumcategorysubscribers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumcategorysubscribers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumcategorysubscribers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumcategorysubscribers[".printFriendly"] = true;
}



$tdataforumcategorysubscribers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumcategorysubscribers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumcategorysubscribers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumcategorysubscribers[".isUseAjaxSuggest"] = true;



															

$tdataforumcategorysubscribers[".ajaxCodeSnippetAdded"] = false;

$tdataforumcategorysubscribers[".buttonsAdded"] = false;

$tdataforumcategorysubscribers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumcategorysubscribers[".isUseTimeForSearch"] = false;


$tdataforumcategorysubscribers[".badgeColor"] = "6493EA";


$tdataforumcategorysubscribers[".allSearchFields"] = array();
$tdataforumcategorysubscribers[".filterFields"] = array();
$tdataforumcategorysubscribers[".requiredSearchFields"] = array();

$tdataforumcategorysubscribers[".googleLikeFields"] = array();
$tdataforumcategorysubscribers[".googleLikeFields"][] = "id";
$tdataforumcategorysubscribers[".googleLikeFields"][] = "userid";
$tdataforumcategorysubscribers[".googleLikeFields"][] = "categoryid";
$tdataforumcategorysubscribers[".googleLikeFields"][] = "lastemail";



$tdataforumcategorysubscribers[".tableType"] = "list";

$tdataforumcategorysubscribers[".printerPageOrientation"] = 0;
$tdataforumcategorysubscribers[".nPrinterPageScale"] = 100;

$tdataforumcategorysubscribers[".nPrinterSplitRecords"] = 40;

$tdataforumcategorysubscribers[".geocodingEnabled"] = false;










$tdataforumcategorysubscribers[".pageSize"] = 20;

$tdataforumcategorysubscribers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataforumcategorysubscribers[".strOrderBy"] = $tstrOrderBy;

$tdataforumcategorysubscribers[".orderindexes"] = array();


$tdataforumcategorysubscribers[".sqlHead"] = "SELECT id,  userid,  categoryid,  lastemail";
$tdataforumcategorysubscribers[".sqlFrom"] = "FROM forumcategorysubscribers";
$tdataforumcategorysubscribers[".sqlWhereExpr"] = "";
$tdataforumcategorysubscribers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumcategorysubscribers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumcategorysubscribers[".arrGroupsPerPage"] = $arrGPP;

$tdataforumcategorysubscribers[".highlightSearchResults"] = true;

$tableKeysforumcategorysubscribers = array();
$tableKeysforumcategorysubscribers[] = "id";
$tdataforumcategorysubscribers[".Keys"] = $tableKeysforumcategorysubscribers;


$tdataforumcategorysubscribers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumcategorysubscribers";
	$fdata["Label"] = GetFieldLabel("forumcategorysubscribers","id");
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


	$tdataforumcategorysubscribers["id"] = $fdata;
		$tdataforumcategorysubscribers[".searchableFields"][] = "id";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "forumcategorysubscribers";
	$fdata["Label"] = GetFieldLabel("forumcategorysubscribers","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdataforumcategorysubscribers["userid"] = $fdata;
		$tdataforumcategorysubscribers[".searchableFields"][] = "userid";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "forumcategorysubscribers";
	$fdata["Label"] = GetFieldLabel("forumcategorysubscribers","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

		$fdata["sourceSingle"] = "categoryid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoryid";

	
	
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


	$tdataforumcategorysubscribers["categoryid"] = $fdata;
		$tdataforumcategorysubscribers[".searchableFields"][] = "categoryid";
//	lastemail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lastemail";
	$fdata["GoodName"] = "lastemail";
	$fdata["ownerTable"] = "forumcategorysubscribers";
	$fdata["Label"] = GetFieldLabel("forumcategorysubscribers","lastemail");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "lastemail";

		$fdata["sourceSingle"] = "lastemail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastemail";

	
	
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


	$tdataforumcategorysubscribers["lastemail"] = $fdata;
		$tdataforumcategorysubscribers[".searchableFields"][] = "lastemail";


$tables_data["forumcategorysubscribers"]=&$tdataforumcategorysubscribers;
$field_labels["forumcategorysubscribers"] = &$fieldLabelsforumcategorysubscribers;
$fieldToolTips["forumcategorysubscribers"] = &$fieldToolTipsforumcategorysubscribers;
$placeHolders["forumcategorysubscribers"] = &$placeHoldersforumcategorysubscribers;
$page_titles["forumcategorysubscribers"] = &$pageTitlesforumcategorysubscribers;


changeTextControlsToDate( "forumcategorysubscribers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumcategorysubscribers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumcategorysubscribers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumcategorysubscribers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  userid,  categoryid,  lastemail";
$proto0["m_strFrom"] = "FROM forumcategorysubscribers";
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
	"m_strTable" => "forumcategorysubscribers",
	"m_srcTableName" => "forumcategorysubscribers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "forumcategorysubscribers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "forumcategorysubscribers",
	"m_srcTableName" => "forumcategorysubscribers"
));

$proto8["m_sql"] = "userid";
$proto8["m_srcTableName"] = "forumcategorysubscribers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "forumcategorysubscribers",
	"m_srcTableName" => "forumcategorysubscribers"
));

$proto10["m_sql"] = "categoryid";
$proto10["m_srcTableName"] = "forumcategorysubscribers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lastemail",
	"m_strTable" => "forumcategorysubscribers",
	"m_srcTableName" => "forumcategorysubscribers"
));

$proto12["m_sql"] = "lastemail";
$proto12["m_srcTableName"] = "forumcategorysubscribers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "forumcategorysubscribers";
$proto15["m_srcTableName"] = "forumcategorysubscribers";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "userid";
$proto15["m_columns"][] = "categoryid";
$proto15["m_columns"][] = "lastemail";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "forumcategorysubscribers";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "forumcategorysubscribers";
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
$proto0["m_srcTableName"]="forumcategorysubscribers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumcategorysubscribers = createSqlQuery_forumcategorysubscribers();


	
																;

				

$tdataforumcategorysubscribers[".sqlquery"] = $queryData_forumcategorysubscribers;



$tdataforumcategorysubscribers[".hasEvents"] = false;

?>