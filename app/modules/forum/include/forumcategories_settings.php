<?php
$tdataforumcategories = array();
$tdataforumcategories[".searchableFields"] = array();
$tdataforumcategories[".ShortName"] = "forumcategories";
$tdataforumcategories[".OwnerID"] = "id";
$tdataforumcategories[".OriginalTable"] = "forumcategories";


$tdataforumcategories[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataforumcategories[".originalPagesByType"] = $tdataforumcategories[".pagesByType"];
$tdataforumcategories[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataforumcategories[".originalPages"] = $tdataforumcategories[".pages"];
$tdataforumcategories[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataforumcategories[".originalDefaultPages"] = $tdataforumcategories[".defaultPages"];

//	field labels
$fieldLabelsforumcategories = array();
$fieldToolTipsforumcategories = array();
$pageTitlesforumcategories = array();
$placeHoldersforumcategories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumcategories["English"] = array();
	$fieldToolTipsforumcategories["English"] = array();
	$placeHoldersforumcategories["English"] = array();
	$pageTitlesforumcategories["English"] = array();
	$fieldLabelsforumcategories["English"]["id"] = "Id";
	$fieldToolTipsforumcategories["English"]["id"] = "";
	$placeHoldersforumcategories["English"]["id"] = "";
	$fieldLabelsforumcategories["English"]["name"] = "Name";
	$fieldToolTipsforumcategories["English"]["name"] = "";
	$placeHoldersforumcategories["English"]["name"] = "";
	$fieldLabelsforumcategories["English"]["color"] = "Color";
	$fieldToolTipsforumcategories["English"]["color"] = "";
	$placeHoldersforumcategories["English"]["color"] = "";
	if (count($fieldToolTipsforumcategories["English"]))
		$tdataforumcategories[".isUseToolTips"] = true;
}


	$tdataforumcategories[".NCSearch"] = true;



$tdataforumcategories[".shortTableName"] = "forumcategories";
$tdataforumcategories[".nSecOptions"] = 0;

$tdataforumcategories[".mainTableOwnerID"] = "id";
$tdataforumcategories[".entityType"] = 0;
$tdataforumcategories[".connId"] = "project_at_localhost";


$tdataforumcategories[".strOriginalTableName"] = "forumcategories";

	



$tdataforumcategories[".showAddInPopup"] = false;

$tdataforumcategories[".showEditInPopup"] = false;

$tdataforumcategories[".showViewInPopup"] = false;

$tdataforumcategories[".listAjax"] = false;
//	temporary
//$tdataforumcategories[".listAjax"] = false;

	$tdataforumcategories[".audit"] = false;

	$tdataforumcategories[".locking"] = false;


$pages = $tdataforumcategories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumcategories[".edit"] = true;
	$tdataforumcategories[".afterEditAction"] = 1;
	$tdataforumcategories[".closePopupAfterEdit"] = 1;
	$tdataforumcategories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumcategories[".add"] = true;
$tdataforumcategories[".afterAddAction"] = 1;
$tdataforumcategories[".closePopupAfterAdd"] = 1;
$tdataforumcategories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumcategories[".list"] = true;
}

$tdataforumcategories[".updateSelected"] = true;


$tdataforumcategories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumcategories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumcategories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumcategories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumcategories[".printFriendly"] = true;
}



$tdataforumcategories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumcategories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumcategories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumcategories[".isUseAjaxSuggest"] = true;



															

$tdataforumcategories[".ajaxCodeSnippetAdded"] = false;

$tdataforumcategories[".buttonsAdded"] = false;

$tdataforumcategories[".addPageEvents"] = true;

// use timepicker for search panel
$tdataforumcategories[".isUseTimeForSearch"] = false;


$tdataforumcategories[".badgeColor"] = "EDCA00";


$tdataforumcategories[".allSearchFields"] = array();
$tdataforumcategories[".filterFields"] = array();
$tdataforumcategories[".requiredSearchFields"] = array();

$tdataforumcategories[".googleLikeFields"] = array();
$tdataforumcategories[".googleLikeFields"][] = "id";
$tdataforumcategories[".googleLikeFields"][] = "name";
$tdataforumcategories[".googleLikeFields"][] = "color";



$tdataforumcategories[".tableType"] = "list";

$tdataforumcategories[".printerPageOrientation"] = 0;
$tdataforumcategories[".nPrinterPageScale"] = 100;

$tdataforumcategories[".nPrinterSplitRecords"] = 40;

$tdataforumcategories[".geocodingEnabled"] = false;










$tdataforumcategories[".pageSize"] = 20;

$tdataforumcategories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataforumcategories[".strOrderBy"] = $tstrOrderBy;

$tdataforumcategories[".orderindexes"] = array();


$tdataforumcategories[".sqlHead"] = "SELECT id,  name,  color";
$tdataforumcategories[".sqlFrom"] = "FROM forumcategories";
$tdataforumcategories[".sqlWhereExpr"] = "";
$tdataforumcategories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumcategories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumcategories[".arrGroupsPerPage"] = $arrGPP;

$tdataforumcategories[".highlightSearchResults"] = true;

$tableKeysforumcategories = array();
$tableKeysforumcategories[] = "id";
$tdataforumcategories[".Keys"] = $tableKeysforumcategories;


$tdataforumcategories[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumcategories";
	$fdata["Label"] = GetFieldLabel("forumcategories","id");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataforumcategories["id"] = $fdata;
		$tdataforumcategories[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "forumcategories";
	$fdata["Label"] = GetFieldLabel("forumcategories","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataforumcategories["name"] = $fdata;
		$tdataforumcategories[".searchableFields"][] = "name";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "forumcategories";
	$fdata["Label"] = GetFieldLabel("forumcategories","color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
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


	$tdataforumcategories["color"] = $fdata;
		$tdataforumcategories[".searchableFields"][] = "color";


$tables_data["forumcategories"]=&$tdataforumcategories;
$field_labels["forumcategories"] = &$fieldLabelsforumcategories;
$fieldToolTips["forumcategories"] = &$fieldToolTipsforumcategories;
$placeHolders["forumcategories"] = &$placeHoldersforumcategories;
$page_titles["forumcategories"] = &$pageTitlesforumcategories;


changeTextControlsToDate( "forumcategories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumcategories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumcategories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumcategories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  color";
$proto0["m_strFrom"] = "FROM forumcategories";
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
	"m_strTable" => "forumcategories",
	"m_srcTableName" => "forumcategories"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "forumcategories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "forumcategories",
	"m_srcTableName" => "forumcategories"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "forumcategories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "forumcategories",
	"m_srcTableName" => "forumcategories"
));

$proto10["m_sql"] = "color";
$proto10["m_srcTableName"] = "forumcategories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "forumcategories";
$proto13["m_srcTableName"] = "forumcategories";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "color";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "forumcategories";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "forumcategories";
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
$proto0["m_srcTableName"]="forumcategories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumcategories = createSqlQuery_forumcategories();


	
																;

			

$tdataforumcategories[".sqlquery"] = $queryData_forumcategories;



include_once(getabspath("include/forumcategories_events.php"));
$tdataforumcategories[".hasEvents"] = true;

?>