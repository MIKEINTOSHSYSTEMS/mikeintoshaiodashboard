<?php
$tdatacalcategory = array();
$tdatacalcategory[".searchableFields"] = array();
$tdatacalcategory[".ShortName"] = "calcategory";
$tdatacalcategory[".OwnerID"] = "";
$tdatacalcategory[".OriginalTable"] = "calcategory";


$tdatacalcategory[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacalcategory[".originalPagesByType"] = $tdatacalcategory[".pagesByType"];
$tdatacalcategory[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacalcategory[".originalPages"] = $tdatacalcategory[".pages"];
$tdatacalcategory[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacalcategory[".originalDefaultPages"] = $tdatacalcategory[".defaultPages"];

//	field labels
$fieldLabelscalcategory = array();
$fieldToolTipscalcategory = array();
$pageTitlescalcategory = array();
$placeHolderscalcategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalcategory["English"] = array();
	$fieldToolTipscalcategory["English"] = array();
	$placeHolderscalcategory["English"] = array();
	$pageTitlescalcategory["English"] = array();
	$fieldLabelscalcategory["English"]["id"] = "Id";
	$fieldToolTipscalcategory["English"]["id"] = "";
	$placeHolderscalcategory["English"]["id"] = "";
	$fieldLabelscalcategory["English"]["Category"] = "Category";
	$fieldToolTipscalcategory["English"]["Category"] = "";
	$placeHolderscalcategory["English"]["Category"] = "";
	$fieldLabelscalcategory["English"]["Color"] = "Color";
	$fieldToolTipscalcategory["English"]["Color"] = "";
	$placeHolderscalcategory["English"]["Color"] = "";
	if (count($fieldToolTipscalcategory["English"]))
		$tdatacalcategory[".isUseToolTips"] = true;
}


	$tdatacalcategory[".NCSearch"] = true;



$tdatacalcategory[".shortTableName"] = "calcategory";
$tdatacalcategory[".nSecOptions"] = 0;

$tdatacalcategory[".mainTableOwnerID"] = "";
$tdatacalcategory[".entityType"] = 0;
$tdatacalcategory[".connId"] = "project_at_localhost";


$tdatacalcategory[".strOriginalTableName"] = "calcategory";

	



$tdatacalcategory[".showAddInPopup"] = false;

$tdatacalcategory[".showEditInPopup"] = false;

$tdatacalcategory[".showViewInPopup"] = false;

$tdatacalcategory[".listAjax"] = false;
//	temporary
//$tdatacalcategory[".listAjax"] = false;

	$tdatacalcategory[".audit"] = false;

	$tdatacalcategory[".locking"] = false;


$pages = $tdatacalcategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalcategory[".edit"] = true;
	$tdatacalcategory[".afterEditAction"] = 1;
	$tdatacalcategory[".closePopupAfterEdit"] = 1;
	$tdatacalcategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalcategory[".add"] = true;
$tdatacalcategory[".afterAddAction"] = 1;
$tdatacalcategory[".closePopupAfterAdd"] = 1;
$tdatacalcategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalcategory[".list"] = true;
}



$tdatacalcategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalcategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalcategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalcategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalcategory[".printFriendly"] = true;
}



$tdatacalcategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalcategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalcategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalcategory[".isUseAjaxSuggest"] = true;



																								

$tdatacalcategory[".ajaxCodeSnippetAdded"] = false;

$tdatacalcategory[".buttonsAdded"] = false;

$tdatacalcategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalcategory[".isUseTimeForSearch"] = false;


$tdatacalcategory[".badgeColor"] = "6DA5C8";


$tdatacalcategory[".allSearchFields"] = array();
$tdatacalcategory[".filterFields"] = array();
$tdatacalcategory[".requiredSearchFields"] = array();

$tdatacalcategory[".googleLikeFields"] = array();
$tdatacalcategory[".googleLikeFields"][] = "id";
$tdatacalcategory[".googleLikeFields"][] = "Category";
$tdatacalcategory[".googleLikeFields"][] = "Color";



$tdatacalcategory[".tableType"] = "list";

$tdatacalcategory[".printerPageOrientation"] = 0;
$tdatacalcategory[".nPrinterPageScale"] = 100;

$tdatacalcategory[".nPrinterSplitRecords"] = 40;

$tdatacalcategory[".geocodingEnabled"] = false;










$tdatacalcategory[".pageSize"] = 20;

$tdatacalcategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalcategory[".strOrderBy"] = $tstrOrderBy;

$tdatacalcategory[".orderindexes"] = array();


$tdatacalcategory[".sqlHead"] = "SELECT id,  Category,  Color";
$tdatacalcategory[".sqlFrom"] = "FROM calcategory";
$tdatacalcategory[".sqlWhereExpr"] = "";
$tdatacalcategory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalcategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalcategory[".arrGroupsPerPage"] = $arrGPP;

$tdatacalcategory[".highlightSearchResults"] = true;

$tableKeyscalcategory = array();
$tableKeyscalcategory[] = "id";
$tdatacalcategory[".Keys"] = $tableKeyscalcategory;


$tdatacalcategory[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcategory","id");
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


	$tdatacalcategory["id"] = $fdata;
		$tdatacalcategory[".searchableFields"][] = "id";
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcategory","Category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
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


	$tdatacalcategory["Category"] = $fdata;
		$tdatacalcategory[".searchableFields"][] = "Category";
//	Color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Color";
	$fdata["GoodName"] = "Color";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcategory","Color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Color";

	
	
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


	$tdatacalcategory["Color"] = $fdata;
		$tdatacalcategory[".searchableFields"][] = "Color";


$tables_data["calcategory"]=&$tdatacalcategory;
$field_labels["calcategory"] = &$fieldLabelscalcategory;
$fieldToolTips["calcategory"] = &$fieldToolTipscalcategory;
$placeHolders["calcategory"] = &$placeHolderscalcategory;
$page_titles["calcategory"] = &$pageTitlescalcategory;


changeTextControlsToDate( "calcategory" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calcategory"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calcategory"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calcategory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  Category,  Color";
$proto0["m_strFrom"] = "FROM calcategory";
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
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcategory"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calcategory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcategory"
));

$proto8["m_sql"] = "Category";
$proto8["m_srcTableName"] = "calcategory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Color",
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcategory"
));

$proto10["m_sql"] = "Color";
$proto10["m_srcTableName"] = "calcategory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calcategory";
$proto13["m_srcTableName"] = "calcategory";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Category";
$proto13["m_columns"][] = "Color";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calcategory";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calcategory";
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
$proto0["m_srcTableName"]="calcategory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calcategory = createSqlQuery_calcategory();


	
		;

			

$tdatacalcategory[".sqlquery"] = $queryData_calcategory;



include_once(getabspath("include/calcategory_events.php"));
$tdatacalcategory[".hasEvents"] = true;

?>