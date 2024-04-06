<?php
$tdataeducation_levels = array();
$tdataeducation_levels[".searchableFields"] = array();
$tdataeducation_levels[".ShortName"] = "education_levels";
$tdataeducation_levels[".OwnerID"] = "";
$tdataeducation_levels[".OriginalTable"] = "education_levels";


$tdataeducation_levels[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataeducation_levels[".originalPagesByType"] = $tdataeducation_levels[".pagesByType"];
$tdataeducation_levels[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataeducation_levels[".originalPages"] = $tdataeducation_levels[".pages"];
$tdataeducation_levels[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataeducation_levels[".originalDefaultPages"] = $tdataeducation_levels[".defaultPages"];

//	field labels
$fieldLabelseducation_levels = array();
$fieldToolTipseducation_levels = array();
$pageTitleseducation_levels = array();
$placeHolderseducation_levels = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseducation_levels["English"] = array();
	$fieldToolTipseducation_levels["English"] = array();
	$placeHolderseducation_levels["English"] = array();
	$pageTitleseducation_levels["English"] = array();
	$fieldLabelseducation_levels["English"]["EducationLevelID"] = "Education Level ID";
	$fieldToolTipseducation_levels["English"]["EducationLevelID"] = "";
	$placeHolderseducation_levels["English"]["EducationLevelID"] = "";
	$fieldLabelseducation_levels["English"]["EducationLevelName"] = "Education Level Name";
	$fieldToolTipseducation_levels["English"]["EducationLevelName"] = "";
	$placeHolderseducation_levels["English"]["EducationLevelName"] = "";
	if (count($fieldToolTipseducation_levels["English"]))
		$tdataeducation_levels[".isUseToolTips"] = true;
}


	$tdataeducation_levels[".NCSearch"] = true;



$tdataeducation_levels[".shortTableName"] = "education_levels";
$tdataeducation_levels[".nSecOptions"] = 0;

$tdataeducation_levels[".mainTableOwnerID"] = "";
$tdataeducation_levels[".entityType"] = 0;
$tdataeducation_levels[".connId"] = "deredevatderejadevmerqconsulta";


$tdataeducation_levels[".strOriginalTableName"] = "education_levels";

	



$tdataeducation_levels[".showAddInPopup"] = false;

$tdataeducation_levels[".showEditInPopup"] = false;

$tdataeducation_levels[".showViewInPopup"] = false;

$tdataeducation_levels[".listAjax"] = false;
//	temporary
//$tdataeducation_levels[".listAjax"] = false;

	$tdataeducation_levels[".audit"] = false;

	$tdataeducation_levels[".locking"] = false;


$pages = $tdataeducation_levels[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataeducation_levels[".edit"] = true;
	$tdataeducation_levels[".afterEditAction"] = 1;
	$tdataeducation_levels[".closePopupAfterEdit"] = 1;
	$tdataeducation_levels[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataeducation_levels[".add"] = true;
$tdataeducation_levels[".afterAddAction"] = 1;
$tdataeducation_levels[".closePopupAfterAdd"] = 1;
$tdataeducation_levels[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataeducation_levels[".list"] = true;
}



$tdataeducation_levels[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataeducation_levels[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataeducation_levels[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataeducation_levels[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataeducation_levels[".printFriendly"] = true;
}



$tdataeducation_levels[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataeducation_levels[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataeducation_levels[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataeducation_levels[".isUseAjaxSuggest"] = true;





$tdataeducation_levels[".ajaxCodeSnippetAdded"] = false;

$tdataeducation_levels[".buttonsAdded"] = false;

$tdataeducation_levels[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeducation_levels[".isUseTimeForSearch"] = false;


$tdataeducation_levels[".badgeColor"] = "E67349";


$tdataeducation_levels[".allSearchFields"] = array();
$tdataeducation_levels[".filterFields"] = array();
$tdataeducation_levels[".requiredSearchFields"] = array();

$tdataeducation_levels[".googleLikeFields"] = array();
$tdataeducation_levels[".googleLikeFields"][] = "EducationLevelID";
$tdataeducation_levels[".googleLikeFields"][] = "EducationLevelName";



$tdataeducation_levels[".tableType"] = "list";

$tdataeducation_levels[".printerPageOrientation"] = 0;
$tdataeducation_levels[".nPrinterPageScale"] = 100;

$tdataeducation_levels[".nPrinterSplitRecords"] = 40;

$tdataeducation_levels[".geocodingEnabled"] = false;










$tdataeducation_levels[".pageSize"] = 20;

$tdataeducation_levels[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataeducation_levels[".strOrderBy"] = $tstrOrderBy;

$tdataeducation_levels[".orderindexes"] = array();


$tdataeducation_levels[".sqlHead"] = "SELECT EducationLevelID,  	EducationLevelName";
$tdataeducation_levels[".sqlFrom"] = "FROM education_levels";
$tdataeducation_levels[".sqlWhereExpr"] = "";
$tdataeducation_levels[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeducation_levels[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeducation_levels[".arrGroupsPerPage"] = $arrGPP;

$tdataeducation_levels[".highlightSearchResults"] = true;

$tableKeyseducation_levels = array();
$tableKeyseducation_levels[] = "EducationLevelID";
$tdataeducation_levels[".Keys"] = $tableKeyseducation_levels;


$tdataeducation_levels[".hideMobileList"] = array();




//	EducationLevelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EducationLevelID";
	$fdata["GoodName"] = "EducationLevelID";
	$fdata["ownerTable"] = "education_levels";
	$fdata["Label"] = GetFieldLabel("education_levels","EducationLevelID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EducationLevelID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EducationLevelID";

	
	
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


	$tdataeducation_levels["EducationLevelID"] = $fdata;
		$tdataeducation_levels[".searchableFields"][] = "EducationLevelID";
//	EducationLevelName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EducationLevelName";
	$fdata["GoodName"] = "EducationLevelName";
	$fdata["ownerTable"] = "education_levels";
	$fdata["Label"] = GetFieldLabel("education_levels","EducationLevelName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EducationLevelName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EducationLevelName";

	
	
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


	$tdataeducation_levels["EducationLevelName"] = $fdata;
		$tdataeducation_levels[".searchableFields"][] = "EducationLevelName";


$tables_data["education_levels"]=&$tdataeducation_levels;
$field_labels["education_levels"] = &$fieldLabelseducation_levels;
$fieldToolTips["education_levels"] = &$fieldToolTipseducation_levels;
$placeHolders["education_levels"] = &$placeHolderseducation_levels;
$page_titles["education_levels"] = &$pageTitleseducation_levels;


changeTextControlsToDate( "education_levels" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["education_levels"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["education_levels"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_education_levels()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EducationLevelID,  	EducationLevelName";
$proto0["m_strFrom"] = "FROM education_levels";
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
	"m_strName" => "EducationLevelID",
	"m_strTable" => "education_levels",
	"m_srcTableName" => "education_levels"
));

$proto6["m_sql"] = "EducationLevelID";
$proto6["m_srcTableName"] = "education_levels";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EducationLevelName",
	"m_strTable" => "education_levels",
	"m_srcTableName" => "education_levels"
));

$proto8["m_sql"] = "EducationLevelName";
$proto8["m_srcTableName"] = "education_levels";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "education_levels";
$proto11["m_srcTableName"] = "education_levels";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "EducationLevelID";
$proto11["m_columns"][] = "EducationLevelName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "education_levels";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "education_levels";
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
$proto0["m_srcTableName"]="education_levels";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_education_levels = createSqlQuery_education_levels();


	
																								;

		

$tdataeducation_levels[".sqlquery"] = $queryData_education_levels;



$tdataeducation_levels[".hasEvents"] = false;

?>