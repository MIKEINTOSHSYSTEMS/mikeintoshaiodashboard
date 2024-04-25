<?php
$tdatacompanysectors = array();
$tdatacompanysectors[".searchableFields"] = array();
$tdatacompanysectors[".ShortName"] = "companysectors";
$tdatacompanysectors[".OwnerID"] = "";
$tdatacompanysectors[".OriginalTable"] = "CompanySectors";


$tdatacompanysectors[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacompanysectors[".originalPagesByType"] = $tdatacompanysectors[".pagesByType"];
$tdatacompanysectors[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacompanysectors[".originalPages"] = $tdatacompanysectors[".pages"];
$tdatacompanysectors[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacompanysectors[".originalDefaultPages"] = $tdatacompanysectors[".defaultPages"];

//	field labels
$fieldLabelscompanysectors = array();
$fieldToolTipscompanysectors = array();
$pageTitlescompanysectors = array();
$placeHolderscompanysectors = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscompanysectors["English"] = array();
	$fieldToolTipscompanysectors["English"] = array();
	$placeHolderscompanysectors["English"] = array();
	$pageTitlescompanysectors["English"] = array();
	$fieldLabelscompanysectors["English"]["CompanySectorID"] = "Company Sector ID";
	$fieldToolTipscompanysectors["English"]["CompanySectorID"] = "";
	$placeHolderscompanysectors["English"]["CompanySectorID"] = "";
	$fieldLabelscompanysectors["English"]["CompanySectorName"] = "Company Sector Name";
	$fieldToolTipscompanysectors["English"]["CompanySectorName"] = "";
	$placeHolderscompanysectors["English"]["CompanySectorName"] = "";
	if (count($fieldToolTipscompanysectors["English"]))
		$tdatacompanysectors[".isUseToolTips"] = true;
}


	$tdatacompanysectors[".NCSearch"] = true;



$tdatacompanysectors[".shortTableName"] = "companysectors";
$tdatacompanysectors[".nSecOptions"] = 0;

$tdatacompanysectors[".mainTableOwnerID"] = "";
$tdatacompanysectors[".entityType"] = 0;
$tdatacompanysectors[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacompanysectors[".strOriginalTableName"] = "CompanySectors";

	



$tdatacompanysectors[".showAddInPopup"] = false;

$tdatacompanysectors[".showEditInPopup"] = false;

$tdatacompanysectors[".showViewInPopup"] = false;

$tdatacompanysectors[".listAjax"] = false;
//	temporary
//$tdatacompanysectors[".listAjax"] = false;

	$tdatacompanysectors[".audit"] = true;

	$tdatacompanysectors[".locking"] = false;


$pages = $tdatacompanysectors[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacompanysectors[".edit"] = true;
	$tdatacompanysectors[".afterEditAction"] = 1;
	$tdatacompanysectors[".closePopupAfterEdit"] = 1;
	$tdatacompanysectors[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacompanysectors[".add"] = true;
$tdatacompanysectors[".afterAddAction"] = 1;
$tdatacompanysectors[".closePopupAfterAdd"] = 1;
$tdatacompanysectors[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacompanysectors[".list"] = true;
}



$tdatacompanysectors[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacompanysectors[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacompanysectors[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacompanysectors[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacompanysectors[".printFriendly"] = true;
}



$tdatacompanysectors[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacompanysectors[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacompanysectors[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacompanysectors[".isUseAjaxSuggest"] = true;



						

$tdatacompanysectors[".ajaxCodeSnippetAdded"] = false;

$tdatacompanysectors[".buttonsAdded"] = false;

$tdatacompanysectors[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacompanysectors[".isUseTimeForSearch"] = false;


$tdatacompanysectors[".badgeColor"] = "e67349";


$tdatacompanysectors[".allSearchFields"] = array();
$tdatacompanysectors[".filterFields"] = array();
$tdatacompanysectors[".requiredSearchFields"] = array();

$tdatacompanysectors[".googleLikeFields"] = array();
$tdatacompanysectors[".googleLikeFields"][] = "CompanySectorID";
$tdatacompanysectors[".googleLikeFields"][] = "CompanySectorName";



$tdatacompanysectors[".tableType"] = "list";

$tdatacompanysectors[".printerPageOrientation"] = 0;
$tdatacompanysectors[".nPrinterPageScale"] = 100;

$tdatacompanysectors[".nPrinterSplitRecords"] = 40;

$tdatacompanysectors[".geocodingEnabled"] = false;










$tdatacompanysectors[".pageSize"] = 20;

$tdatacompanysectors[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacompanysectors[".strOrderBy"] = $tstrOrderBy;

$tdatacompanysectors[".orderindexes"] = array();


$tdatacompanysectors[".sqlHead"] = "SELECT CompanySectorID,  	CompanySectorName";
$tdatacompanysectors[".sqlFrom"] = "FROM CompanySectors";
$tdatacompanysectors[".sqlWhereExpr"] = "";
$tdatacompanysectors[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompanysectors[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompanysectors[".arrGroupsPerPage"] = $arrGPP;

$tdatacompanysectors[".highlightSearchResults"] = true;

$tableKeyscompanysectors = array();
$tableKeyscompanysectors[] = "CompanySectorID";
$tdatacompanysectors[".Keys"] = $tableKeyscompanysectors;


$tdatacompanysectors[".hideMobileList"] = array();




//	CompanySectorID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CompanySectorID";
	$fdata["GoodName"] = "CompanySectorID";
	$fdata["ownerTable"] = "CompanySectors";
	$fdata["Label"] = GetFieldLabel("CompanySectors","CompanySectorID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CompanySectorID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanySectorID";

	
	
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


	$tdatacompanysectors["CompanySectorID"] = $fdata;
		$tdatacompanysectors[".searchableFields"][] = "CompanySectorID";
//	CompanySectorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanySectorName";
	$fdata["GoodName"] = "CompanySectorName";
	$fdata["ownerTable"] = "CompanySectors";
	$fdata["Label"] = GetFieldLabel("CompanySectors","CompanySectorName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanySectorName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanySectorName";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatacompanysectors["CompanySectorName"] = $fdata;
		$tdatacompanysectors[".searchableFields"][] = "CompanySectorName";


$tables_data["CompanySectors"]=&$tdatacompanysectors;
$field_labels["CompanySectors"] = &$fieldLabelscompanysectors;
$fieldToolTips["CompanySectors"] = &$fieldToolTipscompanysectors;
$placeHolders["CompanySectors"] = &$placeHolderscompanysectors;
$page_titles["CompanySectors"] = &$pageTitlescompanysectors;


changeTextControlsToDate( "CompanySectors" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["CompanySectors"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["CompanySectors"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Companies";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Companies";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "companies";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["CompanySectors"][0] = $masterParams;
				$masterTablesData["CompanySectors"][0]["masterKeys"] = array();
	$masterTablesData["CompanySectors"][0]["masterKeys"][]="CompanyID";
				$masterTablesData["CompanySectors"][0]["masterKeys"][]="CompanySector";
				$masterTablesData["CompanySectors"][0]["detailKeys"] = array();
	$masterTablesData["CompanySectors"][0]["detailKeys"][]="CompanySectorID";
				$masterTablesData["CompanySectors"][0]["detailKeys"][]="CompanySectorName";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_companysectors()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CompanySectorID,  	CompanySectorName";
$proto0["m_strFrom"] = "FROM CompanySectors";
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
	"m_strName" => "CompanySectorID",
	"m_strTable" => "CompanySectors",
	"m_srcTableName" => "CompanySectors"
));

$proto6["m_sql"] = "CompanySectorID";
$proto6["m_srcTableName"] = "CompanySectors";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanySectorName",
	"m_strTable" => "CompanySectors",
	"m_srcTableName" => "CompanySectors"
));

$proto8["m_sql"] = "CompanySectorName";
$proto8["m_srcTableName"] = "CompanySectors";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "CompanySectors";
$proto11["m_srcTableName"] = "CompanySectors";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CompanySectorID";
$proto11["m_columns"][] = "CompanySectorName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "CompanySectors";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "CompanySectors";
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
$proto0["m_srcTableName"]="CompanySectors";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_companysectors = createSqlQuery_companysectors();


	
																								;

		

$tdatacompanysectors[".sqlquery"] = $queryData_companysectors;



$tdatacompanysectors[".hasEvents"] = false;

?>