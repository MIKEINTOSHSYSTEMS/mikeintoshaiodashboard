<?php
$tdatajob_categories = array();
$tdatajob_categories[".searchableFields"] = array();
$tdatajob_categories[".ShortName"] = "job_categories";
$tdatajob_categories[".OwnerID"] = "";
$tdatajob_categories[".OriginalTable"] = "Job_Categories";


$tdatajob_categories[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajob_categories[".originalPagesByType"] = $tdatajob_categories[".pagesByType"];
$tdatajob_categories[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajob_categories[".originalPages"] = $tdatajob_categories[".pages"];
$tdatajob_categories[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajob_categories[".originalDefaultPages"] = $tdatajob_categories[".defaultPages"];

//	field labels
$fieldLabelsjob_categories = array();
$fieldToolTipsjob_categories = array();
$pageTitlesjob_categories = array();
$placeHoldersjob_categories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjob_categories["English"] = array();
	$fieldToolTipsjob_categories["English"] = array();
	$placeHoldersjob_categories["English"] = array();
	$pageTitlesjob_categories["English"] = array();
	$fieldLabelsjob_categories["English"]["CategoryID"] = "Category ID";
	$fieldToolTipsjob_categories["English"]["CategoryID"] = "";
	$placeHoldersjob_categories["English"]["CategoryID"] = "";
	$fieldLabelsjob_categories["English"]["CategoryName"] = "Category Name";
	$fieldToolTipsjob_categories["English"]["CategoryName"] = "";
	$placeHoldersjob_categories["English"]["CategoryName"] = "";
	if (count($fieldToolTipsjob_categories["English"]))
		$tdatajob_categories[".isUseToolTips"] = true;
}


	$tdatajob_categories[".NCSearch"] = true;



$tdatajob_categories[".shortTableName"] = "job_categories";
$tdatajob_categories[".nSecOptions"] = 0;

$tdatajob_categories[".mainTableOwnerID"] = "";
$tdatajob_categories[".entityType"] = 0;
$tdatajob_categories[".connId"] = "deredevatderejadevmerqconsulta";


$tdatajob_categories[".strOriginalTableName"] = "Job_Categories";

	



$tdatajob_categories[".showAddInPopup"] = false;

$tdatajob_categories[".showEditInPopup"] = false;

$tdatajob_categories[".showViewInPopup"] = false;

$tdatajob_categories[".listAjax"] = false;
//	temporary
//$tdatajob_categories[".listAjax"] = false;

	$tdatajob_categories[".audit"] = false;

	$tdatajob_categories[".locking"] = false;


$pages = $tdatajob_categories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajob_categories[".edit"] = true;
	$tdatajob_categories[".afterEditAction"] = 1;
	$tdatajob_categories[".closePopupAfterEdit"] = 1;
	$tdatajob_categories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajob_categories[".add"] = true;
$tdatajob_categories[".afterAddAction"] = 1;
$tdatajob_categories[".closePopupAfterAdd"] = 1;
$tdatajob_categories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajob_categories[".list"] = true;
}



$tdatajob_categories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajob_categories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajob_categories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajob_categories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajob_categories[".printFriendly"] = true;
}



$tdatajob_categories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajob_categories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajob_categories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajob_categories[".isUseAjaxSuggest"] = true;



						

$tdatajob_categories[".ajaxCodeSnippetAdded"] = false;

$tdatajob_categories[".buttonsAdded"] = false;

$tdatajob_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajob_categories[".isUseTimeForSearch"] = false;


$tdatajob_categories[".badgeColor"] = "2f4f4f";


$tdatajob_categories[".allSearchFields"] = array();
$tdatajob_categories[".filterFields"] = array();
$tdatajob_categories[".requiredSearchFields"] = array();

$tdatajob_categories[".googleLikeFields"] = array();
$tdatajob_categories[".googleLikeFields"][] = "CategoryID";
$tdatajob_categories[".googleLikeFields"][] = "CategoryName";



$tdatajob_categories[".tableType"] = "list";

$tdatajob_categories[".printerPageOrientation"] = 0;
$tdatajob_categories[".nPrinterPageScale"] = 100;

$tdatajob_categories[".nPrinterSplitRecords"] = 40;

$tdatajob_categories[".geocodingEnabled"] = false;










$tdatajob_categories[".pageSize"] = 20;

$tdatajob_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatajob_categories[".strOrderBy"] = $tstrOrderBy;

$tdatajob_categories[".orderindexes"] = array();


$tdatajob_categories[".sqlHead"] = "SELECT CategoryID,  	CategoryName";
$tdatajob_categories[".sqlFrom"] = "FROM Job_Categories";
$tdatajob_categories[".sqlWhereExpr"] = "";
$tdatajob_categories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajob_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajob_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatajob_categories[".highlightSearchResults"] = true;

$tableKeysjob_categories = array();
$tableKeysjob_categories[] = "CategoryID";
$tdatajob_categories[".Keys"] = $tableKeysjob_categories;


$tdatajob_categories[".hideMobileList"] = array();




//	CategoryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CategoryID";
	$fdata["GoodName"] = "CategoryID";
	$fdata["ownerTable"] = "Job_Categories";
	$fdata["Label"] = GetFieldLabel("Job_Categories","CategoryID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CategoryID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoryID";

	
	
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


	$tdatajob_categories["CategoryID"] = $fdata;
		$tdatajob_categories[".searchableFields"][] = "CategoryID";
//	CategoryName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CategoryName";
	$fdata["GoodName"] = "CategoryName";
	$fdata["ownerTable"] = "Job_Categories";
	$fdata["Label"] = GetFieldLabel("Job_Categories","CategoryName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CategoryName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CategoryName";

	
	
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


	$tdatajob_categories["CategoryName"] = $fdata;
		$tdatajob_categories[".searchableFields"][] = "CategoryName";


$tables_data["Job_Categories"]=&$tdatajob_categories;
$field_labels["Job_Categories"] = &$fieldLabelsjob_categories;
$fieldToolTips["Job_Categories"] = &$fieldToolTipsjob_categories;
$placeHolders["Job_Categories"] = &$placeHoldersjob_categories;
$page_titles["Job_Categories"] = &$pageTitlesjob_categories;


changeTextControlsToDate( "Job_Categories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Job_Categories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Job_Categories"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Jobs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Jobs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Job_Categories"][0] = $masterParams;
				$masterTablesData["Job_Categories"][0]["masterKeys"] = array();
	$masterTablesData["Job_Categories"][0]["masterKeys"][]="JobCategory";
				$masterTablesData["Job_Categories"][0]["detailKeys"] = array();
	$masterTablesData["Job_Categories"][0]["detailKeys"][]="CategoryName";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_job_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CategoryID,  	CategoryName";
$proto0["m_strFrom"] = "FROM Job_Categories";
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
	"m_strName" => "CategoryID",
	"m_strTable" => "Job_Categories",
	"m_srcTableName" => "Job_Categories"
));

$proto6["m_sql"] = "CategoryID";
$proto6["m_srcTableName"] = "Job_Categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CategoryName",
	"m_strTable" => "Job_Categories",
	"m_srcTableName" => "Job_Categories"
));

$proto8["m_sql"] = "CategoryName";
$proto8["m_srcTableName"] = "Job_Categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Job_Categories";
$proto11["m_srcTableName"] = "Job_Categories";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CategoryID";
$proto11["m_columns"][] = "CategoryName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Job_Categories";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Job_Categories";
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
$proto0["m_srcTableName"]="Job_Categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_job_categories = createSqlQuery_job_categories();


	
																								;

		

$tdatajob_categories[".sqlquery"] = $queryData_job_categories;



$tdatajob_categories[".hasEvents"] = false;

?>