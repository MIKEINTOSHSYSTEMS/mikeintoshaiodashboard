<?php
$tdatautilities = array();
$tdatautilities[".searchableFields"] = array();
$tdatautilities[".ShortName"] = "utilities";
$tdatautilities[".OwnerID"] = "";
$tdatautilities[".OriginalTable"] = "utilities";


$tdatautilities[".pagesByType"] = my_json_decode( "{\"list\":[\"list\",\"Chat\",\"Project_Manager\",\"Survey\",\"document_manager\",\"knowledge_base\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatautilities[".originalPagesByType"] = $tdatautilities[".pagesByType"];
$tdatautilities[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\",\"Chat\",\"Project_Manager\",\"Survey\",\"document_manager\",\"knowledge_base\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatautilities[".originalPages"] = $tdatautilities[".pages"];
$tdatautilities[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatautilities[".originalDefaultPages"] = $tdatautilities[".defaultPages"];

//	field labels
$fieldLabelsutilities = array();
$fieldToolTipsutilities = array();
$pageTitlesutilities = array();
$placeHoldersutilities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsutilities["English"] = array();
	$fieldToolTipsutilities["English"] = array();
	$placeHoldersutilities["English"] = array();
	$pageTitlesutilities["English"] = array();
	$fieldLabelsutilities["English"]["id"] = "Id";
	$fieldToolTipsutilities["English"]["id"] = "";
	$placeHoldersutilities["English"]["id"] = "";
	$fieldLabelsutilities["English"]["utility_name"] = "Utility Name";
	$fieldToolTipsutilities["English"]["utility_name"] = "";
	$placeHoldersutilities["English"]["utility_name"] = "";
	if (count($fieldToolTipsutilities["English"]))
		$tdatautilities[".isUseToolTips"] = true;
}


	$tdatautilities[".NCSearch"] = true;



$tdatautilities[".shortTableName"] = "utilities";
$tdatautilities[".nSecOptions"] = 0;

$tdatautilities[".mainTableOwnerID"] = "";
$tdatautilities[".entityType"] = 0;
$tdatautilities[".connId"] = "deredevatderejadevmerqconsulta";


$tdatautilities[".strOriginalTableName"] = "utilities";

	



$tdatautilities[".showAddInPopup"] = false;

$tdatautilities[".showEditInPopup"] = false;

$tdatautilities[".showViewInPopup"] = false;

$tdatautilities[".listAjax"] = false;
//	temporary
//$tdatautilities[".listAjax"] = false;

	$tdatautilities[".audit"] = false;

	$tdatautilities[".locking"] = false;


$pages = $tdatautilities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatautilities[".edit"] = true;
	$tdatautilities[".afterEditAction"] = 1;
	$tdatautilities[".closePopupAfterEdit"] = 1;
	$tdatautilities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatautilities[".add"] = true;
$tdatautilities[".afterAddAction"] = 1;
$tdatautilities[".closePopupAfterAdd"] = 1;
$tdatautilities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatautilities[".list"] = true;
}



$tdatautilities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatautilities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatautilities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatautilities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatautilities[".printFriendly"] = true;
}



$tdatautilities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatautilities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatautilities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatautilities[".isUseAjaxSuggest"] = true;



			

$tdatautilities[".ajaxCodeSnippetAdded"] = false;

$tdatautilities[".buttonsAdded"] = false;

$tdatautilities[".addPageEvents"] = false;

// use timepicker for search panel
$tdatautilities[".isUseTimeForSearch"] = false;


$tdatautilities[".badgeColor"] = "CD5C5C";


$tdatautilities[".allSearchFields"] = array();
$tdatautilities[".filterFields"] = array();
$tdatautilities[".requiredSearchFields"] = array();

$tdatautilities[".googleLikeFields"] = array();
$tdatautilities[".googleLikeFields"][] = "id";
$tdatautilities[".googleLikeFields"][] = "utility_name";



$tdatautilities[".tableType"] = "list";

$tdatautilities[".printerPageOrientation"] = 0;
$tdatautilities[".nPrinterPageScale"] = 100;

$tdatautilities[".nPrinterSplitRecords"] = 40;

$tdatautilities[".geocodingEnabled"] = false;




$tdatautilities[".isDisplayLoading"] = true;






$tdatautilities[".pageSize"] = 20;

$tdatautilities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatautilities[".strOrderBy"] = $tstrOrderBy;

$tdatautilities[".orderindexes"] = array();


$tdatautilities[".sqlHead"] = "SELECT id,  	utility_name";
$tdatautilities[".sqlFrom"] = "FROM utilities";
$tdatautilities[".sqlWhereExpr"] = "";
$tdatautilities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatautilities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatautilities[".arrGroupsPerPage"] = $arrGPP;

$tdatautilities[".highlightSearchResults"] = true;

$tableKeysutilities = array();
$tableKeysutilities[] = "id";
$tdatautilities[".Keys"] = $tableKeysutilities;


$tdatautilities[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "utilities";
	$fdata["Label"] = GetFieldLabel("utilities","id");
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


	$tdatautilities["id"] = $fdata;
		$tdatautilities[".searchableFields"][] = "id";
//	utility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "utility_name";
	$fdata["GoodName"] = "utility_name";
	$fdata["ownerTable"] = "utilities";
	$fdata["Label"] = GetFieldLabel("utilities","utility_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "utility_name";

		$fdata["sourceSingle"] = "utility_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "utility_name";

	
	
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
			$edata["EditParams"].= " maxlength=400";

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


	$tdatautilities["utility_name"] = $fdata;
		$tdatautilities[".searchableFields"][] = "utility_name";


$tables_data["utilities"]=&$tdatautilities;
$field_labels["utilities"] = &$fieldLabelsutilities;
$fieldToolTips["utilities"] = &$fieldToolTipsutilities;
$placeHolders["utilities"] = &$placeHoldersutilities;
$page_titles["utilities"] = &$pageTitlesutilities;


changeTextControlsToDate( "utilities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["utilities"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["utilities"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_utilities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	utility_name";
$proto0["m_strFrom"] = "FROM utilities";
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
	"m_strTable" => "utilities",
	"m_srcTableName" => "utilities"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "utilities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "utility_name",
	"m_strTable" => "utilities",
	"m_srcTableName" => "utilities"
));

$proto8["m_sql"] = "utility_name";
$proto8["m_srcTableName"] = "utilities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "utilities";
$proto11["m_srcTableName"] = "utilities";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "utility_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "utilities";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "utilities";
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
$proto0["m_srcTableName"]="utilities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_utilities = createSqlQuery_utilities();


	
																								;

		

$tdatautilities[".sqlquery"] = $queryData_utilities;



$tdatautilities[".hasEvents"] = false;

?>