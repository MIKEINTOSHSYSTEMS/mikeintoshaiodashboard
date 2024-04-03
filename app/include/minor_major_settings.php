<?php
$tdataminor_major = array();
$tdataminor_major[".searchableFields"] = array();
$tdataminor_major[".ShortName"] = "minor_major";
$tdataminor_major[".OwnerID"] = "";
$tdataminor_major[".OriginalTable"] = "minor_major";


$tdataminor_major[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataminor_major[".originalPagesByType"] = $tdataminor_major[".pagesByType"];
$tdataminor_major[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataminor_major[".originalPages"] = $tdataminor_major[".pages"];
$tdataminor_major[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataminor_major[".originalDefaultPages"] = $tdataminor_major[".defaultPages"];

//	field labels
$fieldLabelsminor_major = array();
$fieldToolTipsminor_major = array();
$pageTitlesminor_major = array();
$placeHoldersminor_major = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsminor_major["English"] = array();
	$fieldToolTipsminor_major["English"] = array();
	$placeHoldersminor_major["English"] = array();
	$pageTitlesminor_major["English"] = array();
	$fieldLabelsminor_major["English"]["MinorMajorID"] = "Minor Major ID";
	$fieldToolTipsminor_major["English"]["MinorMajorID"] = "";
	$placeHoldersminor_major["English"]["MinorMajorID"] = "";
	$fieldLabelsminor_major["English"]["DepartmentID"] = "Department ID";
	$fieldToolTipsminor_major["English"]["DepartmentID"] = "";
	$placeHoldersminor_major["English"]["DepartmentID"] = "";
	$fieldLabelsminor_major["English"]["MinorName"] = "Minor Name";
	$fieldToolTipsminor_major["English"]["MinorName"] = "";
	$placeHoldersminor_major["English"]["MinorName"] = "";
	$fieldLabelsminor_major["English"]["MajorName"] = "Major Name";
	$fieldToolTipsminor_major["English"]["MajorName"] = "";
	$placeHoldersminor_major["English"]["MajorName"] = "";
	if (count($fieldToolTipsminor_major["English"]))
		$tdataminor_major[".isUseToolTips"] = true;
}


	$tdataminor_major[".NCSearch"] = true;



$tdataminor_major[".shortTableName"] = "minor_major";
$tdataminor_major[".nSecOptions"] = 0;

$tdataminor_major[".mainTableOwnerID"] = "";
$tdataminor_major[".entityType"] = 0;
$tdataminor_major[".connId"] = "deredevatderejadevmerqconsulta";


$tdataminor_major[".strOriginalTableName"] = "minor_major";

	



$tdataminor_major[".showAddInPopup"] = false;

$tdataminor_major[".showEditInPopup"] = false;

$tdataminor_major[".showViewInPopup"] = false;

$tdataminor_major[".listAjax"] = false;
//	temporary
//$tdataminor_major[".listAjax"] = false;

	$tdataminor_major[".audit"] = false;

	$tdataminor_major[".locking"] = false;


$pages = $tdataminor_major[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataminor_major[".edit"] = true;
	$tdataminor_major[".afterEditAction"] = 1;
	$tdataminor_major[".closePopupAfterEdit"] = 1;
	$tdataminor_major[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataminor_major[".add"] = true;
$tdataminor_major[".afterAddAction"] = 1;
$tdataminor_major[".closePopupAfterAdd"] = 1;
$tdataminor_major[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataminor_major[".list"] = true;
}



$tdataminor_major[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataminor_major[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataminor_major[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataminor_major[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataminor_major[".printFriendly"] = true;
}



$tdataminor_major[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataminor_major[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataminor_major[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataminor_major[".isUseAjaxSuggest"] = true;





$tdataminor_major[".ajaxCodeSnippetAdded"] = false;

$tdataminor_major[".buttonsAdded"] = false;

$tdataminor_major[".addPageEvents"] = false;

// use timepicker for search panel
$tdataminor_major[".isUseTimeForSearch"] = false;


$tdataminor_major[".badgeColor"] = "DB7093";


$tdataminor_major[".allSearchFields"] = array();
$tdataminor_major[".filterFields"] = array();
$tdataminor_major[".requiredSearchFields"] = array();

$tdataminor_major[".googleLikeFields"] = array();
$tdataminor_major[".googleLikeFields"][] = "MinorMajorID";
$tdataminor_major[".googleLikeFields"][] = "DepartmentID";
$tdataminor_major[".googleLikeFields"][] = "MinorName";
$tdataminor_major[".googleLikeFields"][] = "MajorName";



$tdataminor_major[".tableType"] = "list";

$tdataminor_major[".printerPageOrientation"] = 0;
$tdataminor_major[".nPrinterPageScale"] = 100;

$tdataminor_major[".nPrinterSplitRecords"] = 40;

$tdataminor_major[".geocodingEnabled"] = false;










$tdataminor_major[".pageSize"] = 20;

$tdataminor_major[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataminor_major[".strOrderBy"] = $tstrOrderBy;

$tdataminor_major[".orderindexes"] = array();


$tdataminor_major[".sqlHead"] = "SELECT MinorMajorID,  	DepartmentID,  	MinorName,  	MajorName";
$tdataminor_major[".sqlFrom"] = "FROM minor_major";
$tdataminor_major[".sqlWhereExpr"] = "";
$tdataminor_major[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataminor_major[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataminor_major[".arrGroupsPerPage"] = $arrGPP;

$tdataminor_major[".highlightSearchResults"] = true;

$tableKeysminor_major = array();
$tableKeysminor_major[] = "MinorMajorID";
$tdataminor_major[".Keys"] = $tableKeysminor_major;


$tdataminor_major[".hideMobileList"] = array();




//	MinorMajorID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MinorMajorID";
	$fdata["GoodName"] = "MinorMajorID";
	$fdata["ownerTable"] = "minor_major";
	$fdata["Label"] = GetFieldLabel("minor_major","MinorMajorID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MinorMajorID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinorMajorID";

	
	
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


	$tdataminor_major["MinorMajorID"] = $fdata;
		$tdataminor_major[".searchableFields"][] = "MinorMajorID";
//	DepartmentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DepartmentID";
	$fdata["GoodName"] = "DepartmentID";
	$fdata["ownerTable"] = "minor_major";
	$fdata["Label"] = GetFieldLabel("minor_major","DepartmentID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "departments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DepartmentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "DepartmentName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataminor_major["DepartmentID"] = $fdata;
		$tdataminor_major[".searchableFields"][] = "DepartmentID";
//	MinorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MinorName";
	$fdata["GoodName"] = "MinorName";
	$fdata["ownerTable"] = "minor_major";
	$fdata["Label"] = GetFieldLabel("minor_major","MinorName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MinorName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MinorName";

	
	
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


	$tdataminor_major["MinorName"] = $fdata;
		$tdataminor_major[".searchableFields"][] = "MinorName";
//	MajorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MajorName";
	$fdata["GoodName"] = "MajorName";
	$fdata["ownerTable"] = "minor_major";
	$fdata["Label"] = GetFieldLabel("minor_major","MajorName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MajorName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MajorName";

	
	
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


	$tdataminor_major["MajorName"] = $fdata;
		$tdataminor_major[".searchableFields"][] = "MajorName";


$tables_data["minor_major"]=&$tdataminor_major;
$field_labels["minor_major"] = &$fieldLabelsminor_major;
$fieldToolTips["minor_major"] = &$fieldToolTipsminor_major;
$placeHolders["minor_major"] = &$placeHoldersminor_major;
$page_titles["minor_major"] = &$pageTitlesminor_major;


changeTextControlsToDate( "minor_major" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["minor_major"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["minor_major"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="departments";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="departments";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "departments";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["minor_major"][0] = $masterParams;
				$masterTablesData["minor_major"][0]["masterKeys"] = array();
	$masterTablesData["minor_major"][0]["masterKeys"][]="DepartmentID";
				$masterTablesData["minor_major"][0]["detailKeys"] = array();
	$masterTablesData["minor_major"][0]["detailKeys"][]="DepartmentID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_minor_major()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MinorMajorID,  	DepartmentID,  	MinorName,  	MajorName";
$proto0["m_strFrom"] = "FROM minor_major";
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
	"m_strName" => "MinorMajorID",
	"m_strTable" => "minor_major",
	"m_srcTableName" => "minor_major"
));

$proto6["m_sql"] = "MinorMajorID";
$proto6["m_srcTableName"] = "minor_major";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartmentID",
	"m_strTable" => "minor_major",
	"m_srcTableName" => "minor_major"
));

$proto8["m_sql"] = "DepartmentID";
$proto8["m_srcTableName"] = "minor_major";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MinorName",
	"m_strTable" => "minor_major",
	"m_srcTableName" => "minor_major"
));

$proto10["m_sql"] = "MinorName";
$proto10["m_srcTableName"] = "minor_major";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MajorName",
	"m_strTable" => "minor_major",
	"m_srcTableName" => "minor_major"
));

$proto12["m_sql"] = "MajorName";
$proto12["m_srcTableName"] = "minor_major";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "minor_major";
$proto15["m_srcTableName"] = "minor_major";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "MinorMajorID";
$proto15["m_columns"][] = "DepartmentID";
$proto15["m_columns"][] = "MinorName";
$proto15["m_columns"][] = "MajorName";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "minor_major";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "minor_major";
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
$proto0["m_srcTableName"]="minor_major";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_minor_major = createSqlQuery_minor_major();


	
		;

				

$tdataminor_major[".sqlquery"] = $queryData_minor_major;



$tdataminor_major[".hasEvents"] = false;

?>