<?php
$tdataprofessions = array();
$tdataprofessions[".searchableFields"] = array();
$tdataprofessions[".ShortName"] = "professions";
$tdataprofessions[".OwnerID"] = "";
$tdataprofessions[".OriginalTable"] = "professions";


$tdataprofessions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprofessions[".originalPagesByType"] = $tdataprofessions[".pagesByType"];
$tdataprofessions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprofessions[".originalPages"] = $tdataprofessions[".pages"];
$tdataprofessions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprofessions[".originalDefaultPages"] = $tdataprofessions[".defaultPages"];

//	field labels
$fieldLabelsprofessions = array();
$fieldToolTipsprofessions = array();
$pageTitlesprofessions = array();
$placeHoldersprofessions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprofessions["English"] = array();
	$fieldToolTipsprofessions["English"] = array();
	$placeHoldersprofessions["English"] = array();
	$pageTitlesprofessions["English"] = array();
	$fieldLabelsprofessions["English"]["ProfessionID"] = "Profession ID";
	$fieldToolTipsprofessions["English"]["ProfessionID"] = "";
	$placeHoldersprofessions["English"]["ProfessionID"] = "";
	$fieldLabelsprofessions["English"]["ProfessionName"] = "Profession Name";
	$fieldToolTipsprofessions["English"]["ProfessionName"] = "";
	$placeHoldersprofessions["English"]["ProfessionName"] = "";
	if (count($fieldToolTipsprofessions["English"]))
		$tdataprofessions[".isUseToolTips"] = true;
}


	$tdataprofessions[".NCSearch"] = true;



$tdataprofessions[".shortTableName"] = "professions";
$tdataprofessions[".nSecOptions"] = 0;

$tdataprofessions[".mainTableOwnerID"] = "";
$tdataprofessions[".entityType"] = 0;
$tdataprofessions[".connId"] = "deredevatderejadevmerqconsulta";


$tdataprofessions[".strOriginalTableName"] = "professions";

	



$tdataprofessions[".showAddInPopup"] = false;

$tdataprofessions[".showEditInPopup"] = false;

$tdataprofessions[".showViewInPopup"] = false;

$tdataprofessions[".listAjax"] = false;
//	temporary
//$tdataprofessions[".listAjax"] = false;

	$tdataprofessions[".audit"] = false;

	$tdataprofessions[".locking"] = false;


$pages = $tdataprofessions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprofessions[".edit"] = true;
	$tdataprofessions[".afterEditAction"] = 1;
	$tdataprofessions[".closePopupAfterEdit"] = 1;
	$tdataprofessions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprofessions[".add"] = true;
$tdataprofessions[".afterAddAction"] = 1;
$tdataprofessions[".closePopupAfterAdd"] = 1;
$tdataprofessions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprofessions[".list"] = true;
}



$tdataprofessions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprofessions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprofessions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprofessions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprofessions[".printFriendly"] = true;
}



$tdataprofessions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprofessions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprofessions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprofessions[".isUseAjaxSuggest"] = true;



			

$tdataprofessions[".ajaxCodeSnippetAdded"] = false;

$tdataprofessions[".buttonsAdded"] = false;

$tdataprofessions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofessions[".isUseTimeForSearch"] = false;


$tdataprofessions[".badgeColor"] = "2F4F4F";


$tdataprofessions[".allSearchFields"] = array();
$tdataprofessions[".filterFields"] = array();
$tdataprofessions[".requiredSearchFields"] = array();

$tdataprofessions[".googleLikeFields"] = array();
$tdataprofessions[".googleLikeFields"][] = "ProfessionID";
$tdataprofessions[".googleLikeFields"][] = "ProfessionName";



$tdataprofessions[".tableType"] = "list";

$tdataprofessions[".printerPageOrientation"] = 0;
$tdataprofessions[".nPrinterPageScale"] = 100;

$tdataprofessions[".nPrinterSplitRecords"] = 40;

$tdataprofessions[".geocodingEnabled"] = false;










$tdataprofessions[".pageSize"] = 20;

$tdataprofessions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprofessions[".strOrderBy"] = $tstrOrderBy;

$tdataprofessions[".orderindexes"] = array();


$tdataprofessions[".sqlHead"] = "SELECT ProfessionID,  	ProfessionName";
$tdataprofessions[".sqlFrom"] = "FROM professions";
$tdataprofessions[".sqlWhereExpr"] = "";
$tdataprofessions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofessions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofessions[".arrGroupsPerPage"] = $arrGPP;

$tdataprofessions[".highlightSearchResults"] = true;

$tableKeysprofessions = array();
$tableKeysprofessions[] = "ProfessionID";
$tdataprofessions[".Keys"] = $tableKeysprofessions;


$tdataprofessions[".hideMobileList"] = array();




//	ProfessionID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProfessionID";
	$fdata["GoodName"] = "ProfessionID";
	$fdata["ownerTable"] = "professions";
	$fdata["Label"] = GetFieldLabel("professions","ProfessionID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProfessionID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProfessionID";

	
	
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


	$tdataprofessions["ProfessionID"] = $fdata;
		$tdataprofessions[".searchableFields"][] = "ProfessionID";
//	ProfessionName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProfessionName";
	$fdata["GoodName"] = "ProfessionName";
	$fdata["ownerTable"] = "professions";
	$fdata["Label"] = GetFieldLabel("professions","ProfessionName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ProfessionName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProfessionName";

	
	
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


	$tdataprofessions["ProfessionName"] = $fdata;
		$tdataprofessions[".searchableFields"][] = "ProfessionName";


$tables_data["professions"]=&$tdataprofessions;
$field_labels["professions"] = &$fieldLabelsprofessions;
$fieldToolTips["professions"] = &$fieldToolTipsprofessions;
$placeHolders["professions"] = &$placeHoldersprofessions;
$page_titles["professions"] = &$pageTitlesprofessions;


changeTextControlsToDate( "professions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["professions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["professions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_professions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProfessionID,  	ProfessionName";
$proto0["m_strFrom"] = "FROM professions";
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
	"m_strName" => "ProfessionID",
	"m_strTable" => "professions",
	"m_srcTableName" => "professions"
));

$proto6["m_sql"] = "ProfessionID";
$proto6["m_srcTableName"] = "professions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfessionName",
	"m_strTable" => "professions",
	"m_srcTableName" => "professions"
));

$proto8["m_sql"] = "ProfessionName";
$proto8["m_srcTableName"] = "professions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "professions";
$proto11["m_srcTableName"] = "professions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ProfessionID";
$proto11["m_columns"][] = "ProfessionName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "professions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "professions";
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
$proto0["m_srcTableName"]="professions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_professions = createSqlQuery_professions();


	
																								;

		

$tdataprofessions[".sqlquery"] = $queryData_professions;



$tdataprofessions[".hasEvents"] = false;

?>