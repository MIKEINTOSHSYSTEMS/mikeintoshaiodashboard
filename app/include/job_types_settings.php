<?php
$tdatajob_types = array();
$tdatajob_types[".searchableFields"] = array();
$tdatajob_types[".ShortName"] = "job_types";
$tdatajob_types[".OwnerID"] = "";
$tdatajob_types[".OriginalTable"] = "Job_Types";


$tdatajob_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajob_types[".originalPagesByType"] = $tdatajob_types[".pagesByType"];
$tdatajob_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajob_types[".originalPages"] = $tdatajob_types[".pages"];
$tdatajob_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajob_types[".originalDefaultPages"] = $tdatajob_types[".defaultPages"];

//	field labels
$fieldLabelsjob_types = array();
$fieldToolTipsjob_types = array();
$pageTitlesjob_types = array();
$placeHoldersjob_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjob_types["English"] = array();
	$fieldToolTipsjob_types["English"] = array();
	$placeHoldersjob_types["English"] = array();
	$pageTitlesjob_types["English"] = array();
	$fieldLabelsjob_types["English"]["TypeID"] = "Type ID";
	$fieldToolTipsjob_types["English"]["TypeID"] = "";
	$placeHoldersjob_types["English"]["TypeID"] = "";
	$fieldLabelsjob_types["English"]["TypeName"] = "Type Name";
	$fieldToolTipsjob_types["English"]["TypeName"] = "";
	$placeHoldersjob_types["English"]["TypeName"] = "";
	if (count($fieldToolTipsjob_types["English"]))
		$tdatajob_types[".isUseToolTips"] = true;
}


	$tdatajob_types[".NCSearch"] = true;



$tdatajob_types[".shortTableName"] = "job_types";
$tdatajob_types[".nSecOptions"] = 0;

$tdatajob_types[".mainTableOwnerID"] = "";
$tdatajob_types[".entityType"] = 0;
$tdatajob_types[".connId"] = "deredevatderejadevmerqconsulta";


$tdatajob_types[".strOriginalTableName"] = "Job_Types";

	



$tdatajob_types[".showAddInPopup"] = false;

$tdatajob_types[".showEditInPopup"] = false;

$tdatajob_types[".showViewInPopup"] = false;

$tdatajob_types[".listAjax"] = false;
//	temporary
//$tdatajob_types[".listAjax"] = false;

	$tdatajob_types[".audit"] = false;

	$tdatajob_types[".locking"] = false;


$pages = $tdatajob_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajob_types[".edit"] = true;
	$tdatajob_types[".afterEditAction"] = 1;
	$tdatajob_types[".closePopupAfterEdit"] = 1;
	$tdatajob_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajob_types[".add"] = true;
$tdatajob_types[".afterAddAction"] = 1;
$tdatajob_types[".closePopupAfterAdd"] = 1;
$tdatajob_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajob_types[".list"] = true;
}



$tdatajob_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajob_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajob_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajob_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajob_types[".printFriendly"] = true;
}



$tdatajob_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajob_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajob_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajob_types[".isUseAjaxSuggest"] = true;





$tdatajob_types[".ajaxCodeSnippetAdded"] = false;

$tdatajob_types[".buttonsAdded"] = false;

$tdatajob_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajob_types[".isUseTimeForSearch"] = false;


$tdatajob_types[".badgeColor"] = "b22222";


$tdatajob_types[".allSearchFields"] = array();
$tdatajob_types[".filterFields"] = array();
$tdatajob_types[".requiredSearchFields"] = array();

$tdatajob_types[".googleLikeFields"] = array();
$tdatajob_types[".googleLikeFields"][] = "TypeID";
$tdatajob_types[".googleLikeFields"][] = "TypeName";



$tdatajob_types[".tableType"] = "list";

$tdatajob_types[".printerPageOrientation"] = 0;
$tdatajob_types[".nPrinterPageScale"] = 100;

$tdatajob_types[".nPrinterSplitRecords"] = 40;

$tdatajob_types[".geocodingEnabled"] = false;










$tdatajob_types[".pageSize"] = 20;

$tdatajob_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatajob_types[".strOrderBy"] = $tstrOrderBy;

$tdatajob_types[".orderindexes"] = array();


$tdatajob_types[".sqlHead"] = "SELECT TypeID,  	TypeName";
$tdatajob_types[".sqlFrom"] = "FROM Job_Types";
$tdatajob_types[".sqlWhereExpr"] = "";
$tdatajob_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajob_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajob_types[".arrGroupsPerPage"] = $arrGPP;

$tdatajob_types[".highlightSearchResults"] = true;

$tableKeysjob_types = array();
$tableKeysjob_types[] = "TypeID";
$tdatajob_types[".Keys"] = $tableKeysjob_types;


$tdatajob_types[".hideMobileList"] = array();




//	TypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TypeID";
	$fdata["GoodName"] = "TypeID";
	$fdata["ownerTable"] = "Job_Types";
	$fdata["Label"] = GetFieldLabel("Job_Types","TypeID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeID";

	
	
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


	$tdatajob_types["TypeID"] = $fdata;
		$tdatajob_types[".searchableFields"][] = "TypeID";
//	TypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TypeName";
	$fdata["GoodName"] = "TypeName";
	$fdata["ownerTable"] = "Job_Types";
	$fdata["Label"] = GetFieldLabel("Job_Types","TypeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeName";

	
	
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


	$tdatajob_types["TypeName"] = $fdata;
		$tdatajob_types[".searchableFields"][] = "TypeName";


$tables_data["Job_Types"]=&$tdatajob_types;
$field_labels["Job_Types"] = &$fieldLabelsjob_types;
$fieldToolTips["Job_Types"] = &$fieldToolTipsjob_types;
$placeHolders["Job_Types"] = &$placeHoldersjob_types;
$page_titles["Job_Types"] = &$pageTitlesjob_types;


changeTextControlsToDate( "Job_Types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Job_Types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Job_Types"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Jobs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Jobs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "jobs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Job_Types"][0] = $masterParams;
				$masterTablesData["Job_Types"][0]["masterKeys"] = array();
	$masterTablesData["Job_Types"][0]["masterKeys"][]="JobType";
				$masterTablesData["Job_Types"][0]["detailKeys"] = array();
	$masterTablesData["Job_Types"][0]["detailKeys"][]="TypeName";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_job_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TypeID,  	TypeName";
$proto0["m_strFrom"] = "FROM Job_Types";
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
	"m_strName" => "TypeID",
	"m_strTable" => "Job_Types",
	"m_srcTableName" => "Job_Types"
));

$proto6["m_sql"] = "TypeID";
$proto6["m_srcTableName"] = "Job_Types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeName",
	"m_strTable" => "Job_Types",
	"m_srcTableName" => "Job_Types"
));

$proto8["m_sql"] = "TypeName";
$proto8["m_srcTableName"] = "Job_Types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Job_Types";
$proto11["m_srcTableName"] = "Job_Types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TypeID";
$proto11["m_columns"][] = "TypeName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Job_Types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Job_Types";
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
$proto0["m_srcTableName"]="Job_Types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_job_types = createSqlQuery_job_types();


	
		;

		

$tdatajob_types[".sqlquery"] = $queryData_job_types;



$tdatajob_types[".hasEvents"] = false;

?>