<?php
$tdatadepartments = array();
$tdatadepartments[".searchableFields"] = array();
$tdatadepartments[".ShortName"] = "departments";
$tdatadepartments[".OwnerID"] = "";
$tdatadepartments[".OriginalTable"] = "departments";


$tdatadepartments[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadepartments[".originalPagesByType"] = $tdatadepartments[".pagesByType"];
$tdatadepartments[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadepartments[".originalPages"] = $tdatadepartments[".pages"];
$tdatadepartments[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadepartments[".originalDefaultPages"] = $tdatadepartments[".defaultPages"];

//	field labels
$fieldLabelsdepartments = array();
$fieldToolTipsdepartments = array();
$pageTitlesdepartments = array();
$placeHoldersdepartments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartments["English"] = array();
	$fieldToolTipsdepartments["English"] = array();
	$placeHoldersdepartments["English"] = array();
	$pageTitlesdepartments["English"] = array();
	$fieldLabelsdepartments["English"]["DepartmentID"] = "Department ID";
	$fieldToolTipsdepartments["English"]["DepartmentID"] = "";
	$placeHoldersdepartments["English"]["DepartmentID"] = "";
	$fieldLabelsdepartments["English"]["DepartmentName"] = "Department Name";
	$fieldToolTipsdepartments["English"]["DepartmentName"] = "";
	$placeHoldersdepartments["English"]["DepartmentName"] = "";
	if (count($fieldToolTipsdepartments["English"]))
		$tdatadepartments[".isUseToolTips"] = true;
}


	$tdatadepartments[".NCSearch"] = true;



$tdatadepartments[".shortTableName"] = "departments";
$tdatadepartments[".nSecOptions"] = 0;

$tdatadepartments[".mainTableOwnerID"] = "";
$tdatadepartments[".entityType"] = 0;
$tdatadepartments[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadepartments[".strOriginalTableName"] = "departments";

	



$tdatadepartments[".showAddInPopup"] = false;

$tdatadepartments[".showEditInPopup"] = false;

$tdatadepartments[".showViewInPopup"] = false;

$tdatadepartments[".listAjax"] = false;
//	temporary
//$tdatadepartments[".listAjax"] = false;

	$tdatadepartments[".audit"] = false;

	$tdatadepartments[".locking"] = false;


$pages = $tdatadepartments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadepartments[".edit"] = true;
	$tdatadepartments[".afterEditAction"] = 1;
	$tdatadepartments[".closePopupAfterEdit"] = 1;
	$tdatadepartments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadepartments[".add"] = true;
$tdatadepartments[".afterAddAction"] = 1;
$tdatadepartments[".closePopupAfterAdd"] = 1;
$tdatadepartments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadepartments[".list"] = true;
}



$tdatadepartments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadepartments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadepartments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadepartments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadepartments[".printFriendly"] = true;
}



$tdatadepartments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadepartments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadepartments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadepartments[".isUseAjaxSuggest"] = true;





$tdatadepartments[".ajaxCodeSnippetAdded"] = false;

$tdatadepartments[".buttonsAdded"] = false;

$tdatadepartments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartments[".isUseTimeForSearch"] = false;


$tdatadepartments[".badgeColor"] = "DC143C";


$tdatadepartments[".allSearchFields"] = array();
$tdatadepartments[".filterFields"] = array();
$tdatadepartments[".requiredSearchFields"] = array();

$tdatadepartments[".googleLikeFields"] = array();
$tdatadepartments[".googleLikeFields"][] = "DepartmentID";
$tdatadepartments[".googleLikeFields"][] = "DepartmentName";



$tdatadepartments[".tableType"] = "list";

$tdatadepartments[".printerPageOrientation"] = 0;
$tdatadepartments[".nPrinterPageScale"] = 100;

$tdatadepartments[".nPrinterSplitRecords"] = 40;

$tdatadepartments[".geocodingEnabled"] = false;










$tdatadepartments[".pageSize"] = 20;

$tdatadepartments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadepartments[".strOrderBy"] = $tstrOrderBy;

$tdatadepartments[".orderindexes"] = array();


$tdatadepartments[".sqlHead"] = "SELECT DepartmentID,  	DepartmentName";
$tdatadepartments[".sqlFrom"] = "FROM departments";
$tdatadepartments[".sqlWhereExpr"] = "";
$tdatadepartments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartments[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartments[".highlightSearchResults"] = true;

$tableKeysdepartments = array();
$tableKeysdepartments[] = "DepartmentID";
$tdatadepartments[".Keys"] = $tableKeysdepartments;


$tdatadepartments[".hideMobileList"] = array();




//	DepartmentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DepartmentID";
	$fdata["GoodName"] = "DepartmentID";
	$fdata["ownerTable"] = "departments";
	$fdata["Label"] = GetFieldLabel("departments","DepartmentID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DepartmentID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartmentID";

	
	
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


	$tdatadepartments["DepartmentID"] = $fdata;
		$tdatadepartments[".searchableFields"][] = "DepartmentID";
//	DepartmentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DepartmentName";
	$fdata["GoodName"] = "DepartmentName";
	$fdata["ownerTable"] = "departments";
	$fdata["Label"] = GetFieldLabel("departments","DepartmentName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DepartmentName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartmentName";

	
	
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


	$tdatadepartments["DepartmentName"] = $fdata;
		$tdatadepartments[".searchableFields"][] = "DepartmentName";


$tables_data["departments"]=&$tdatadepartments;
$field_labels["departments"] = &$fieldLabelsdepartments;
$fieldToolTips["departments"] = &$fieldToolTipsdepartments;
$placeHolders["departments"] = &$placeHoldersdepartments;
$page_titles["departments"] = &$pageTitlesdepartments;


changeTextControlsToDate( "departments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["departments"] = array();
//	minor_major
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="minor_major";
		$detailsParam["dOriginalTable"] = "minor_major";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "minor_major";
	$detailsParam["dCaptionTable"] = GetTableCaption("minor_major");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["departments"][$dIndex] = $detailsParam;

	
		$detailsTablesData["departments"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["departments"][$dIndex]["masterKeys"][]="DepartmentID";

				$detailsTablesData["departments"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["departments"][$dIndex]["detailKeys"][]="DepartmentID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["departments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_departments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DepartmentID,  	DepartmentName";
$proto0["m_strFrom"] = "FROM departments";
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
	"m_strName" => "DepartmentID",
	"m_strTable" => "departments",
	"m_srcTableName" => "departments"
));

$proto6["m_sql"] = "DepartmentID";
$proto6["m_srcTableName"] = "departments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartmentName",
	"m_strTable" => "departments",
	"m_srcTableName" => "departments"
));

$proto8["m_sql"] = "DepartmentName";
$proto8["m_srcTableName"] = "departments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "departments";
$proto11["m_srcTableName"] = "departments";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "DepartmentID";
$proto11["m_columns"][] = "DepartmentName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "departments";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "departments";
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
$proto0["m_srcTableName"]="departments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_departments = createSqlQuery_departments();


	
																								;

		

$tdatadepartments[".sqlquery"] = $queryData_departments;



$tdatadepartments[".hasEvents"] = false;

?>