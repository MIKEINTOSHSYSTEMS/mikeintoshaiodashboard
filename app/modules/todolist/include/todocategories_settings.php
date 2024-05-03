<?php
$tdatatodocategories = array();
$tdatatodocategories[".searchableFields"] = array();
$tdatatodocategories[".ShortName"] = "todocategories";
$tdatatodocategories[".OwnerID"] = "";
$tdatatodocategories[".OriginalTable"] = "todocategories";


$tdatatodocategories[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatodocategories[".originalPagesByType"] = $tdatatodocategories[".pagesByType"];
$tdatatodocategories[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatodocategories[".originalPages"] = $tdatatodocategories[".pages"];
$tdatatodocategories[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatodocategories[".originalDefaultPages"] = $tdatatodocategories[".defaultPages"];

//	field labels
$fieldLabelstodocategories = array();
$fieldToolTipstodocategories = array();
$pageTitlestodocategories = array();
$placeHolderstodocategories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodocategories["English"] = array();
	$fieldToolTipstodocategories["English"] = array();
	$placeHolderstodocategories["English"] = array();
	$pageTitlestodocategories["English"] = array();
	$fieldLabelstodocategories["English"]["id"] = "Id";
	$fieldToolTipstodocategories["English"]["id"] = "";
	$placeHolderstodocategories["English"]["id"] = "";
	$fieldLabelstodocategories["English"]["color"] = "Color";
	$fieldToolTipstodocategories["English"]["color"] = "";
	$placeHolderstodocategories["English"]["color"] = "";
	$fieldLabelstodocategories["English"]["name"] = "Category Name";
	$fieldToolTipstodocategories["English"]["name"] = "";
	$placeHolderstodocategories["English"]["name"] = "";
	if (count($fieldToolTipstodocategories["English"]))
		$tdatatodocategories[".isUseToolTips"] = true;
}


	$tdatatodocategories[".NCSearch"] = true;



$tdatatodocategories[".shortTableName"] = "todocategories";
$tdatatodocategories[".nSecOptions"] = 0;

$tdatatodocategories[".mainTableOwnerID"] = "";
$tdatatodocategories[".entityType"] = 0;
$tdatatodocategories[".connId"] = "project_at_localhost";


$tdatatodocategories[".strOriginalTableName"] = "todocategories";

	



$tdatatodocategories[".showAddInPopup"] = false;

$tdatatodocategories[".showEditInPopup"] = false;

$tdatatodocategories[".showViewInPopup"] = false;

$tdatatodocategories[".listAjax"] = false;
//	temporary
//$tdatatodocategories[".listAjax"] = false;

	$tdatatodocategories[".audit"] = false;

	$tdatatodocategories[".locking"] = false;


$pages = $tdatatodocategories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodocategories[".edit"] = true;
	$tdatatodocategories[".afterEditAction"] = 1;
	$tdatatodocategories[".closePopupAfterEdit"] = 1;
	$tdatatodocategories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodocategories[".add"] = true;
$tdatatodocategories[".afterAddAction"] = 1;
$tdatatodocategories[".closePopupAfterAdd"] = 1;
$tdatatodocategories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodocategories[".list"] = true;
}



$tdatatodocategories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodocategories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodocategories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodocategories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodocategories[".printFriendly"] = true;
}



$tdatatodocategories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodocategories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodocategories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodocategories[".isUseAjaxSuggest"] = true;



																								

$tdatatodocategories[".ajaxCodeSnippetAdded"] = false;

$tdatatodocategories[".buttonsAdded"] = false;

$tdatatodocategories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatodocategories[".isUseTimeForSearch"] = false;


$tdatatodocategories[".badgeColor"] = "D2AF80";


$tdatatodocategories[".allSearchFields"] = array();
$tdatatodocategories[".filterFields"] = array();
$tdatatodocategories[".requiredSearchFields"] = array();

$tdatatodocategories[".googleLikeFields"] = array();
$tdatatodocategories[".googleLikeFields"][] = "id";
$tdatatodocategories[".googleLikeFields"][] = "color";
$tdatatodocategories[".googleLikeFields"][] = "name";



$tdatatodocategories[".tableType"] = "list";

$tdatatodocategories[".printerPageOrientation"] = 0;
$tdatatodocategories[".nPrinterPageScale"] = 100;

$tdatatodocategories[".nPrinterSplitRecords"] = 40;

$tdatatodocategories[".geocodingEnabled"] = false;










$tdatatodocategories[".pageSize"] = 20;

$tdatatodocategories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatodocategories[".strOrderBy"] = $tstrOrderBy;

$tdatatodocategories[".orderindexes"] = array();


$tdatatodocategories[".sqlHead"] = "SELECT id,  color,  name";
$tdatatodocategories[".sqlFrom"] = "FROM todocategories";
$tdatatodocategories[".sqlWhereExpr"] = "";
$tdatatodocategories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodocategories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodocategories[".arrGroupsPerPage"] = $arrGPP;

$tdatatodocategories[".highlightSearchResults"] = true;

$tableKeystodocategories = array();
$tableKeystodocategories[] = "id";
$tdatatodocategories[".Keys"] = $tableKeystodocategories;


$tdatatodocategories[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todocategories";
	$fdata["Label"] = GetFieldLabel("todocategories","id");
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


	$tdatatodocategories["id"] = $fdata;
		$tdatatodocategories[".searchableFields"][] = "id";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "todocategories";
	$fdata["Label"] = GetFieldLabel("todocategories","color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatodocategories["color"] = $fdata;
		$tdatatodocategories[".searchableFields"][] = "color";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "todocategories";
	$fdata["Label"] = GetFieldLabel("todocategories","name");
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


	$tdatatodocategories["name"] = $fdata;
		$tdatatodocategories[".searchableFields"][] = "name";


$tables_data["todocategories"]=&$tdatatodocategories;
$field_labels["todocategories"] = &$fieldLabelstodocategories;
$fieldToolTips["todocategories"] = &$fieldToolTipstodocategories;
$placeHolders["todocategories"] = &$placeHolderstodocategories;
$page_titles["todocategories"] = &$pageTitlestodocategories;


changeTextControlsToDate( "todocategories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todocategories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todocategories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todocategories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  color,  name";
$proto0["m_strFrom"] = "FROM todocategories";
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
	"m_strTable" => "todocategories",
	"m_srcTableName" => "todocategories"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todocategories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "todocategories",
	"m_srcTableName" => "todocategories"
));

$proto8["m_sql"] = "color";
$proto8["m_srcTableName"] = "todocategories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "todocategories",
	"m_srcTableName" => "todocategories"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "todocategories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "todocategories";
$proto13["m_srcTableName"] = "todocategories";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "color";
$proto13["m_columns"][] = "name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "todocategories";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "todocategories";
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
$proto0["m_srcTableName"]="todocategories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todocategories = createSqlQuery_todocategories();


	
		;

			

$tdatatodocategories[".sqlquery"] = $queryData_todocategories;



$tdatatodocategories[".hasEvents"] = false;

?>