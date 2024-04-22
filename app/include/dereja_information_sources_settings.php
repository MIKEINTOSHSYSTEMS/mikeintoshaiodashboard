<?php
$tdatadereja_information_sources = array();
$tdatadereja_information_sources[".searchableFields"] = array();
$tdatadereja_information_sources[".ShortName"] = "dereja_information_sources";
$tdatadereja_information_sources[".OwnerID"] = "";
$tdatadereja_information_sources[".OriginalTable"] = "dereja_information_sources";


$tdatadereja_information_sources[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_information_sources[".originalPagesByType"] = $tdatadereja_information_sources[".pagesByType"];
$tdatadereja_information_sources[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_information_sources[".originalPages"] = $tdatadereja_information_sources[".pages"];
$tdatadereja_information_sources[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_information_sources[".originalDefaultPages"] = $tdatadereja_information_sources[".defaultPages"];

//	field labels
$fieldLabelsdereja_information_sources = array();
$fieldToolTipsdereja_information_sources = array();
$pageTitlesdereja_information_sources = array();
$placeHoldersdereja_information_sources = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_information_sources["English"] = array();
	$fieldToolTipsdereja_information_sources["English"] = array();
	$placeHoldersdereja_information_sources["English"] = array();
	$pageTitlesdereja_information_sources["English"] = array();
	$fieldLabelsdereja_information_sources["English"]["SourceID"] = "Source ID";
	$fieldToolTipsdereja_information_sources["English"]["SourceID"] = "";
	$placeHoldersdereja_information_sources["English"]["SourceID"] = "";
	$fieldLabelsdereja_information_sources["English"]["SourceName"] = "Source Name";
	$fieldToolTipsdereja_information_sources["English"]["SourceName"] = "";
	$placeHoldersdereja_information_sources["English"]["SourceName"] = "";
	if (count($fieldToolTipsdereja_information_sources["English"]))
		$tdatadereja_information_sources[".isUseToolTips"] = true;
}


	$tdatadereja_information_sources[".NCSearch"] = true;



$tdatadereja_information_sources[".shortTableName"] = "dereja_information_sources";
$tdatadereja_information_sources[".nSecOptions"] = 0;

$tdatadereja_information_sources[".mainTableOwnerID"] = "";
$tdatadereja_information_sources[".entityType"] = 0;
$tdatadereja_information_sources[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_information_sources[".strOriginalTableName"] = "dereja_information_sources";

	



$tdatadereja_information_sources[".showAddInPopup"] = false;

$tdatadereja_information_sources[".showEditInPopup"] = false;

$tdatadereja_information_sources[".showViewInPopup"] = false;

$tdatadereja_information_sources[".listAjax"] = false;
//	temporary
//$tdatadereja_information_sources[".listAjax"] = false;

	$tdatadereja_information_sources[".audit"] = false;

	$tdatadereja_information_sources[".locking"] = false;


$pages = $tdatadereja_information_sources[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_information_sources[".edit"] = true;
	$tdatadereja_information_sources[".afterEditAction"] = 1;
	$tdatadereja_information_sources[".closePopupAfterEdit"] = 1;
	$tdatadereja_information_sources[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_information_sources[".add"] = true;
$tdatadereja_information_sources[".afterAddAction"] = 1;
$tdatadereja_information_sources[".closePopupAfterAdd"] = 1;
$tdatadereja_information_sources[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_information_sources[".list"] = true;
}



$tdatadereja_information_sources[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_information_sources[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_information_sources[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_information_sources[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_information_sources[".printFriendly"] = true;
}



$tdatadereja_information_sources[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_information_sources[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_information_sources[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_information_sources[".isUseAjaxSuggest"] = true;



			

$tdatadereja_information_sources[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_information_sources[".buttonsAdded"] = false;

$tdatadereja_information_sources[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_information_sources[".isUseTimeForSearch"] = false;


$tdatadereja_information_sources[".badgeColor"] = "2F4F4F";


$tdatadereja_information_sources[".allSearchFields"] = array();
$tdatadereja_information_sources[".filterFields"] = array();
$tdatadereja_information_sources[".requiredSearchFields"] = array();

$tdatadereja_information_sources[".googleLikeFields"] = array();
$tdatadereja_information_sources[".googleLikeFields"][] = "SourceID";
$tdatadereja_information_sources[".googleLikeFields"][] = "SourceName";



$tdatadereja_information_sources[".tableType"] = "list";

$tdatadereja_information_sources[".printerPageOrientation"] = 0;
$tdatadereja_information_sources[".nPrinterPageScale"] = 100;

$tdatadereja_information_sources[".nPrinterSplitRecords"] = 40;

$tdatadereja_information_sources[".geocodingEnabled"] = false;










$tdatadereja_information_sources[".pageSize"] = 20;

$tdatadereja_information_sources[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadereja_information_sources[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_information_sources[".orderindexes"] = array();


$tdatadereja_information_sources[".sqlHead"] = "SELECT SourceID,  	SourceName";
$tdatadereja_information_sources[".sqlFrom"] = "FROM dereja_information_sources";
$tdatadereja_information_sources[".sqlWhereExpr"] = "";
$tdatadereja_information_sources[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_information_sources[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_information_sources[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_information_sources[".highlightSearchResults"] = true;

$tableKeysdereja_information_sources = array();
$tableKeysdereja_information_sources[] = "SourceID";
$tdatadereja_information_sources[".Keys"] = $tableKeysdereja_information_sources;


$tdatadereja_information_sources[".hideMobileList"] = array();




//	SourceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SourceID";
	$fdata["GoodName"] = "SourceID";
	$fdata["ownerTable"] = "dereja_information_sources";
	$fdata["Label"] = GetFieldLabel("dereja_information_sources","SourceID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SourceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SourceID";

	
	
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


	$tdatadereja_information_sources["SourceID"] = $fdata;
		$tdatadereja_information_sources[".searchableFields"][] = "SourceID";
//	SourceName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SourceName";
	$fdata["GoodName"] = "SourceName";
	$fdata["ownerTable"] = "dereja_information_sources";
	$fdata["Label"] = GetFieldLabel("dereja_information_sources","SourceName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SourceName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SourceName";

	
	
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


	$tdatadereja_information_sources["SourceName"] = $fdata;
		$tdatadereja_information_sources[".searchableFields"][] = "SourceName";


$tables_data["dereja_information_sources"]=&$tdatadereja_information_sources;
$field_labels["dereja_information_sources"] = &$fieldLabelsdereja_information_sources;
$fieldToolTips["dereja_information_sources"] = &$fieldToolTipsdereja_information_sources;
$placeHolders["dereja_information_sources"] = &$placeHoldersdereja_information_sources;
$page_titles["dereja_information_sources"] = &$pageTitlesdereja_information_sources;


changeTextControlsToDate( "dereja_information_sources" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dereja_information_sources"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dereja_information_sources"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_information_sources()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SourceID,  	SourceName";
$proto0["m_strFrom"] = "FROM dereja_information_sources";
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
	"m_strName" => "SourceID",
	"m_strTable" => "dereja_information_sources",
	"m_srcTableName" => "dereja_information_sources"
));

$proto6["m_sql"] = "SourceID";
$proto6["m_srcTableName"] = "dereja_information_sources";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SourceName",
	"m_strTable" => "dereja_information_sources",
	"m_srcTableName" => "dereja_information_sources"
));

$proto8["m_sql"] = "SourceName";
$proto8["m_srcTableName"] = "dereja_information_sources";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dereja_information_sources";
$proto11["m_srcTableName"] = "dereja_information_sources";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "SourceID";
$proto11["m_columns"][] = "SourceName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dereja_information_sources";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dereja_information_sources";
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
$proto0["m_srcTableName"]="dereja_information_sources";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_information_sources = createSqlQuery_dereja_information_sources();


	
																								;

		

$tdatadereja_information_sources[".sqlquery"] = $queryData_dereja_information_sources;



$tdatadereja_information_sources[".hasEvents"] = false;

?>