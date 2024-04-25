<?php
$tdatalanguages = array();
$tdatalanguages[".searchableFields"] = array();
$tdatalanguages[".ShortName"] = "languages";
$tdatalanguages[".OwnerID"] = "";
$tdatalanguages[".OriginalTable"] = "Languages";


$tdatalanguages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalanguages[".originalPagesByType"] = $tdatalanguages[".pagesByType"];
$tdatalanguages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalanguages[".originalPages"] = $tdatalanguages[".pages"];
$tdatalanguages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalanguages[".originalDefaultPages"] = $tdatalanguages[".defaultPages"];

//	field labels
$fieldLabelslanguages = array();
$fieldToolTipslanguages = array();
$pageTitleslanguages = array();
$placeHolderslanguages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslanguages["English"] = array();
	$fieldToolTipslanguages["English"] = array();
	$placeHolderslanguages["English"] = array();
	$pageTitleslanguages["English"] = array();
	$fieldLabelslanguages["English"]["Language_ID"] = "Language ID";
	$fieldToolTipslanguages["English"]["Language_ID"] = "";
	$placeHolderslanguages["English"]["Language_ID"] = "";
	$fieldLabelslanguages["English"]["Language_Name"] = "Language Name";
	$fieldToolTipslanguages["English"]["Language_Name"] = "";
	$placeHolderslanguages["English"]["Language_Name"] = "";
	if (count($fieldToolTipslanguages["English"]))
		$tdatalanguages[".isUseToolTips"] = true;
}


	$tdatalanguages[".NCSearch"] = true;



$tdatalanguages[".shortTableName"] = "languages";
$tdatalanguages[".nSecOptions"] = 0;

$tdatalanguages[".mainTableOwnerID"] = "";
$tdatalanguages[".entityType"] = 0;
$tdatalanguages[".connId"] = "deredevatderejadevmerqconsulta";


$tdatalanguages[".strOriginalTableName"] = "Languages";

	



$tdatalanguages[".showAddInPopup"] = false;

$tdatalanguages[".showEditInPopup"] = false;

$tdatalanguages[".showViewInPopup"] = false;

$tdatalanguages[".listAjax"] = false;
//	temporary
//$tdatalanguages[".listAjax"] = false;

	$tdatalanguages[".audit"] = true;

	$tdatalanguages[".locking"] = false;


$pages = $tdatalanguages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalanguages[".edit"] = true;
	$tdatalanguages[".afterEditAction"] = 1;
	$tdatalanguages[".closePopupAfterEdit"] = 1;
	$tdatalanguages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalanguages[".add"] = true;
$tdatalanguages[".afterAddAction"] = 1;
$tdatalanguages[".closePopupAfterAdd"] = 1;
$tdatalanguages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalanguages[".list"] = true;
}



$tdatalanguages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalanguages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalanguages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalanguages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalanguages[".printFriendly"] = true;
}



$tdatalanguages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalanguages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalanguages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalanguages[".isUseAjaxSuggest"] = true;



			

$tdatalanguages[".ajaxCodeSnippetAdded"] = false;

$tdatalanguages[".buttonsAdded"] = false;

$tdatalanguages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalanguages[".isUseTimeForSearch"] = false;


$tdatalanguages[".badgeColor"] = "5F9EA0";


$tdatalanguages[".allSearchFields"] = array();
$tdatalanguages[".filterFields"] = array();
$tdatalanguages[".requiredSearchFields"] = array();

$tdatalanguages[".googleLikeFields"] = array();
$tdatalanguages[".googleLikeFields"][] = "Language_ID";
$tdatalanguages[".googleLikeFields"][] = "Language_Name";



$tdatalanguages[".tableType"] = "list";

$tdatalanguages[".printerPageOrientation"] = 0;
$tdatalanguages[".nPrinterPageScale"] = 100;

$tdatalanguages[".nPrinterSplitRecords"] = 40;

$tdatalanguages[".geocodingEnabled"] = false;










$tdatalanguages[".pageSize"] = 20;

$tdatalanguages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalanguages[".strOrderBy"] = $tstrOrderBy;

$tdatalanguages[".orderindexes"] = array();


$tdatalanguages[".sqlHead"] = "SELECT Language_ID,  	Language_Name";
$tdatalanguages[".sqlFrom"] = "FROM Languages";
$tdatalanguages[".sqlWhereExpr"] = "";
$tdatalanguages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalanguages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalanguages[".arrGroupsPerPage"] = $arrGPP;

$tdatalanguages[".highlightSearchResults"] = true;

$tableKeyslanguages = array();
$tableKeyslanguages[] = "Language_ID";
$tdatalanguages[".Keys"] = $tableKeyslanguages;


$tdatalanguages[".hideMobileList"] = array();




//	Language_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Language_ID";
	$fdata["GoodName"] = "Language_ID";
	$fdata["ownerTable"] = "Languages";
	$fdata["Label"] = GetFieldLabel("Languages","Language_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Language_ID";

		$fdata["sourceSingle"] = "Language_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Language_ID";

	
	
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


	$tdatalanguages["Language_ID"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "Language_ID";
//	Language_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Language_Name";
	$fdata["GoodName"] = "Language_Name";
	$fdata["ownerTable"] = "Languages";
	$fdata["Label"] = GetFieldLabel("Languages","Language_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Language_Name";

		$fdata["sourceSingle"] = "Language_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Language_Name";

	
	
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


	$tdatalanguages["Language_Name"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "Language_Name";


$tables_data["Languages"]=&$tdatalanguages;
$field_labels["Languages"] = &$fieldLabelslanguages;
$fieldToolTips["Languages"] = &$fieldToolTipslanguages;
$placeHolders["Languages"] = &$placeHolderslanguages;
$page_titles["Languages"] = &$pageTitleslanguages;


changeTextControlsToDate( "Languages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Languages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Languages"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_languages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Language_ID,  	Language_Name";
$proto0["m_strFrom"] = "FROM Languages";
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
	"m_strName" => "Language_ID",
	"m_strTable" => "Languages",
	"m_srcTableName" => "Languages"
));

$proto6["m_sql"] = "Language_ID";
$proto6["m_srcTableName"] = "Languages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Language_Name",
	"m_strTable" => "Languages",
	"m_srcTableName" => "Languages"
));

$proto8["m_sql"] = "Language_Name";
$proto8["m_srcTableName"] = "Languages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Languages";
$proto11["m_srcTableName"] = "Languages";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Language_ID";
$proto11["m_columns"][] = "Language_Name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Languages";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Languages";
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
$proto0["m_srcTableName"]="Languages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_languages = createSqlQuery_languages();


	
																								;

		

$tdatalanguages[".sqlquery"] = $queryData_languages;



$tdatalanguages[".hasEvents"] = false;

?>