<?php
$tdataprogram_areas = array();
$tdataprogram_areas[".searchableFields"] = array();
$tdataprogram_areas[".ShortName"] = "program_areas";
$tdataprogram_areas[".OwnerID"] = "";
$tdataprogram_areas[".OriginalTable"] = "program_areas";


$tdataprogram_areas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprogram_areas[".originalPagesByType"] = $tdataprogram_areas[".pagesByType"];
$tdataprogram_areas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprogram_areas[".originalPages"] = $tdataprogram_areas[".pages"];
$tdataprogram_areas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprogram_areas[".originalDefaultPages"] = $tdataprogram_areas[".defaultPages"];

//	field labels
$fieldLabelsprogram_areas = array();
$fieldToolTipsprogram_areas = array();
$pageTitlesprogram_areas = array();
$placeHoldersprogram_areas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprogram_areas["English"] = array();
	$fieldToolTipsprogram_areas["English"] = array();
	$placeHoldersprogram_areas["English"] = array();
	$pageTitlesprogram_areas["English"] = array();
	$fieldLabelsprogram_areas["English"]["AreaID"] = "Area ID";
	$fieldToolTipsprogram_areas["English"]["AreaID"] = "";
	$placeHoldersprogram_areas["English"]["AreaID"] = "";
	$fieldLabelsprogram_areas["English"]["AreaName"] = "Area Name";
	$fieldToolTipsprogram_areas["English"]["AreaName"] = "";
	$placeHoldersprogram_areas["English"]["AreaName"] = "";
	if (count($fieldToolTipsprogram_areas["English"]))
		$tdataprogram_areas[".isUseToolTips"] = true;
}


	$tdataprogram_areas[".NCSearch"] = true;



$tdataprogram_areas[".shortTableName"] = "program_areas";
$tdataprogram_areas[".nSecOptions"] = 0;

$tdataprogram_areas[".mainTableOwnerID"] = "";
$tdataprogram_areas[".entityType"] = 0;
$tdataprogram_areas[".connId"] = "deredevatderejadevmerqconsulta";


$tdataprogram_areas[".strOriginalTableName"] = "program_areas";

	



$tdataprogram_areas[".showAddInPopup"] = false;

$tdataprogram_areas[".showEditInPopup"] = false;

$tdataprogram_areas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprogram_areas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprogram_areas[".listAjax"] = false;
//	temporary
$tdataprogram_areas[".listAjax"] = false;

	$tdataprogram_areas[".audit"] = false;

	$tdataprogram_areas[".locking"] = false;


$pages = $tdataprogram_areas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprogram_areas[".edit"] = true;
	$tdataprogram_areas[".afterEditAction"] = 1;
	$tdataprogram_areas[".closePopupAfterEdit"] = 1;
	$tdataprogram_areas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprogram_areas[".add"] = true;
$tdataprogram_areas[".afterAddAction"] = 1;
$tdataprogram_areas[".closePopupAfterAdd"] = 1;
$tdataprogram_areas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprogram_areas[".list"] = true;
}



$tdataprogram_areas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprogram_areas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprogram_areas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprogram_areas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprogram_areas[".printFriendly"] = true;
}



$tdataprogram_areas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprogram_areas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprogram_areas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprogram_areas[".isUseAjaxSuggest"] = true;

$tdataprogram_areas[".rowHighlite"] = true;





$tdataprogram_areas[".ajaxCodeSnippetAdded"] = false;

$tdataprogram_areas[".buttonsAdded"] = false;

$tdataprogram_areas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogram_areas[".isUseTimeForSearch"] = false;


$tdataprogram_areas[".badgeColor"] = "4169E1";


$tdataprogram_areas[".allSearchFields"] = array();
$tdataprogram_areas[".filterFields"] = array();
$tdataprogram_areas[".requiredSearchFields"] = array();

$tdataprogram_areas[".googleLikeFields"] = array();
$tdataprogram_areas[".googleLikeFields"][] = "AreaID";
$tdataprogram_areas[".googleLikeFields"][] = "AreaName";



$tdataprogram_areas[".tableType"] = "list";

$tdataprogram_areas[".printerPageOrientation"] = 0;
$tdataprogram_areas[".nPrinterPageScale"] = 100;

$tdataprogram_areas[".nPrinterSplitRecords"] = 40;

$tdataprogram_areas[".geocodingEnabled"] = false;










$tdataprogram_areas[".pageSize"] = 20;

$tdataprogram_areas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprogram_areas[".strOrderBy"] = $tstrOrderBy;

$tdataprogram_areas[".orderindexes"] = array();


$tdataprogram_areas[".sqlHead"] = "SELECT AreaID,  	AreaName";
$tdataprogram_areas[".sqlFrom"] = "FROM program_areas";
$tdataprogram_areas[".sqlWhereExpr"] = "";
$tdataprogram_areas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogram_areas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogram_areas[".arrGroupsPerPage"] = $arrGPP;

$tdataprogram_areas[".highlightSearchResults"] = true;

$tableKeysprogram_areas = array();
$tableKeysprogram_areas[] = "AreaID";
$tdataprogram_areas[".Keys"] = $tableKeysprogram_areas;


$tdataprogram_areas[".hideMobileList"] = array();




//	AreaID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AreaID";
	$fdata["GoodName"] = "AreaID";
	$fdata["ownerTable"] = "program_areas";
	$fdata["Label"] = GetFieldLabel("program_areas","AreaID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AreaID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AreaID";

	
	
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

	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataprogram_areas["AreaID"] = $fdata;
		$tdataprogram_areas[".searchableFields"][] = "AreaID";
//	AreaName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AreaName";
	$fdata["GoodName"] = "AreaName";
	$fdata["ownerTable"] = "program_areas";
	$fdata["Label"] = GetFieldLabel("program_areas","AreaName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AreaName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AreaName";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataprogram_areas["AreaName"] = $fdata;
		$tdataprogram_areas[".searchableFields"][] = "AreaName";


$tables_data["program_areas"]=&$tdataprogram_areas;
$field_labels["program_areas"] = &$fieldLabelsprogram_areas;
$fieldToolTips["program_areas"] = &$fieldToolTipsprogram_areas;
$placeHolders["program_areas"] = &$placeHoldersprogram_areas;
$page_titles["program_areas"] = &$pageTitlesprogram_areas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["program_areas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["program_areas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_program_areas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AreaID,  	AreaName";
$proto0["m_strFrom"] = "FROM program_areas";
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
	"m_strName" => "AreaID",
	"m_strTable" => "program_areas",
	"m_srcTableName" => "program_areas"
));

$proto6["m_sql"] = "AreaID";
$proto6["m_srcTableName"] = "program_areas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AreaName",
	"m_strTable" => "program_areas",
	"m_srcTableName" => "program_areas"
));

$proto8["m_sql"] = "AreaName";
$proto8["m_srcTableName"] = "program_areas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "program_areas";
$proto11["m_srcTableName"] = "program_areas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "AreaID";
$proto11["m_columns"][] = "AreaName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "program_areas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "program_areas";
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
$proto0["m_srcTableName"]="program_areas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_program_areas = createSqlQuery_program_areas();


	
		;

		

$tdataprogram_areas[".sqlquery"] = $queryData_program_areas;



$tableEvents["program_areas"] = new eventsBase;
$tdataprogram_areas[".hasEvents"] = false;

?>