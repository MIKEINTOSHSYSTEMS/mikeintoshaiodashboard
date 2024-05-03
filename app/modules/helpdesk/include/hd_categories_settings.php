<?php
$tdatahd_categories = array();
$tdatahd_categories[".searchableFields"] = array();
$tdatahd_categories[".ShortName"] = "hd_categories";
$tdatahd_categories[".OwnerID"] = "";
$tdatahd_categories[".OriginalTable"] = "hd_categories";


$tdatahd_categories[".pagesByType"] = my_json_decode( "{}" );
$tdatahd_categories[".originalPagesByType"] = $tdatahd_categories[".pagesByType"];
$tdatahd_categories[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatahd_categories[".originalPages"] = $tdatahd_categories[".pages"];
$tdatahd_categories[".defaultPages"] = my_json_decode( "{}" );
$tdatahd_categories[".originalDefaultPages"] = $tdatahd_categories[".defaultPages"];

//	field labels
$fieldLabelshd_categories = array();
$fieldToolTipshd_categories = array();
$pageTitleshd_categories = array();
$placeHoldershd_categories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_categories["English"] = array();
	$fieldToolTipshd_categories["English"] = array();
	$placeHoldershd_categories["English"] = array();
	$pageTitleshd_categories["English"] = array();
	$fieldLabelshd_categories["English"]["id"] = "Id";
	$fieldToolTipshd_categories["English"]["id"] = "";
	$placeHoldershd_categories["English"]["id"] = "";
	$fieldLabelshd_categories["English"]["categoryname"] = "Categoryname";
	$fieldToolTipshd_categories["English"]["categoryname"] = "";
	$placeHoldershd_categories["English"]["categoryname"] = "";
	if (count($fieldToolTipshd_categories["English"]))
		$tdatahd_categories[".isUseToolTips"] = true;
}


	$tdatahd_categories[".NCSearch"] = true;



$tdatahd_categories[".shortTableName"] = "hd_categories";
$tdatahd_categories[".nSecOptions"] = 0;

$tdatahd_categories[".mainTableOwnerID"] = "";
$tdatahd_categories[".entityType"] = 0;
$tdatahd_categories[".connId"] = "project_at_localhost";


$tdatahd_categories[".strOriginalTableName"] = "hd_categories";

	



$tdatahd_categories[".showAddInPopup"] = false;

$tdatahd_categories[".showEditInPopup"] = false;

$tdatahd_categories[".showViewInPopup"] = false;

$tdatahd_categories[".listAjax"] = false;
//	temporary
//$tdatahd_categories[".listAjax"] = false;

	$tdatahd_categories[".audit"] = false;

	$tdatahd_categories[".locking"] = false;


$pages = $tdatahd_categories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_categories[".edit"] = true;
	$tdatahd_categories[".afterEditAction"] = 1;
	$tdatahd_categories[".closePopupAfterEdit"] = 1;
	$tdatahd_categories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_categories[".add"] = true;
$tdatahd_categories[".afterAddAction"] = 1;
$tdatahd_categories[".closePopupAfterAdd"] = 1;
$tdatahd_categories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_categories[".list"] = true;
}



$tdatahd_categories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_categories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_categories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_categories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_categories[".printFriendly"] = true;
}



$tdatahd_categories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_categories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_categories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_categories[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_categories[".ajaxCodeSnippetAdded"] = false;

$tdatahd_categories[".buttonsAdded"] = false;

$tdatahd_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahd_categories[".isUseTimeForSearch"] = false;


$tdatahd_categories[".badgeColor"] = "E67349";


$tdatahd_categories[".allSearchFields"] = array();
$tdatahd_categories[".filterFields"] = array();
$tdatahd_categories[".requiredSearchFields"] = array();

$tdatahd_categories[".googleLikeFields"] = array();
$tdatahd_categories[".googleLikeFields"][] = "id";
$tdatahd_categories[".googleLikeFields"][] = "categoryname";



$tdatahd_categories[".tableType"] = "list";

$tdatahd_categories[".printerPageOrientation"] = 0;
$tdatahd_categories[".nPrinterPageScale"] = 100;

$tdatahd_categories[".nPrinterSplitRecords"] = 40;

$tdatahd_categories[".geocodingEnabled"] = false;










$tdatahd_categories[".pageSize"] = 20;

$tdatahd_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_categories[".strOrderBy"] = $tstrOrderBy;

$tdatahd_categories[".orderindexes"] = array();


$tdatahd_categories[".sqlHead"] = "SELECT id,  categoryname";
$tdatahd_categories[".sqlFrom"] = "FROM hd_categories";
$tdatahd_categories[".sqlWhereExpr"] = "";
$tdatahd_categories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_categories[".highlightSearchResults"] = true;

$tableKeyshd_categories = array();
$tableKeyshd_categories[] = "id";
$tdatahd_categories[".Keys"] = $tableKeyshd_categories;


$tdatahd_categories[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_categories";
	$fdata["Label"] = GetFieldLabel("hd_categories","id");
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


	$tdatahd_categories["id"] = $fdata;
		$tdatahd_categories[".searchableFields"][] = "id";
//	categoryname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "categoryname";
	$fdata["GoodName"] = "categoryname";
	$fdata["ownerTable"] = "hd_categories";
	$fdata["Label"] = GetFieldLabel("hd_categories","categoryname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "categoryname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoryname";

	
	
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


	$tdatahd_categories["categoryname"] = $fdata;
		$tdatahd_categories[".searchableFields"][] = "categoryname";


$tables_data["hd_categories"]=&$tdatahd_categories;
$field_labels["hd_categories"] = &$fieldLabelshd_categories;
$fieldToolTips["hd_categories"] = &$fieldToolTipshd_categories;
$placeHolders["hd_categories"] = &$placeHoldershd_categories;
$page_titles["hd_categories"] = &$pageTitleshd_categories;


changeTextControlsToDate( "hd_categories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_categories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_categories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  categoryname";
$proto0["m_strFrom"] = "FROM hd_categories";
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
	"m_strTable" => "hd_categories",
	"m_srcTableName" => "hd_categories"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryname",
	"m_strTable" => "hd_categories",
	"m_srcTableName" => "hd_categories"
));

$proto8["m_sql"] = "categoryname";
$proto8["m_srcTableName"] = "hd_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hd_categories";
$proto11["m_srcTableName"] = "hd_categories";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "categoryname";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hd_categories";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hd_categories";
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
$proto0["m_srcTableName"]="hd_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_categories = createSqlQuery_hd_categories();


	
		;

		

$tdatahd_categories[".sqlquery"] = $queryData_hd_categories;



$tdatahd_categories[".hasEvents"] = false;

?>