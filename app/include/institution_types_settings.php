<?php
$tdatainstitution_types = array();
$tdatainstitution_types[".searchableFields"] = array();
$tdatainstitution_types[".ShortName"] = "institution_types";
$tdatainstitution_types[".OwnerID"] = "";
$tdatainstitution_types[".OriginalTable"] = "institution_types";


$tdatainstitution_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainstitution_types[".originalPagesByType"] = $tdatainstitution_types[".pagesByType"];
$tdatainstitution_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainstitution_types[".originalPages"] = $tdatainstitution_types[".pages"];
$tdatainstitution_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainstitution_types[".originalDefaultPages"] = $tdatainstitution_types[".defaultPages"];

//	field labels
$fieldLabelsinstitution_types = array();
$fieldToolTipsinstitution_types = array();
$pageTitlesinstitution_types = array();
$placeHoldersinstitution_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinstitution_types["English"] = array();
	$fieldToolTipsinstitution_types["English"] = array();
	$placeHoldersinstitution_types["English"] = array();
	$pageTitlesinstitution_types["English"] = array();
	$fieldLabelsinstitution_types["English"]["InstitutionTypeID"] = "Institution Type ID";
	$fieldToolTipsinstitution_types["English"]["InstitutionTypeID"] = "";
	$placeHoldersinstitution_types["English"]["InstitutionTypeID"] = "";
	$fieldLabelsinstitution_types["English"]["InstitutionTypeName"] = "Institution Type Name";
	$fieldToolTipsinstitution_types["English"]["InstitutionTypeName"] = "";
	$placeHoldersinstitution_types["English"]["InstitutionTypeName"] = "";
	if (count($fieldToolTipsinstitution_types["English"]))
		$tdatainstitution_types[".isUseToolTips"] = true;
}


	$tdatainstitution_types[".NCSearch"] = true;



$tdatainstitution_types[".shortTableName"] = "institution_types";
$tdatainstitution_types[".nSecOptions"] = 0;

$tdatainstitution_types[".mainTableOwnerID"] = "";
$tdatainstitution_types[".entityType"] = 0;
$tdatainstitution_types[".connId"] = "deredevatderejadevmerqconsulta";


$tdatainstitution_types[".strOriginalTableName"] = "institution_types";

	



$tdatainstitution_types[".showAddInPopup"] = false;

$tdatainstitution_types[".showEditInPopup"] = false;

$tdatainstitution_types[".showViewInPopup"] = false;

$tdatainstitution_types[".listAjax"] = false;
//	temporary
//$tdatainstitution_types[".listAjax"] = false;

	$tdatainstitution_types[".audit"] = true;

	$tdatainstitution_types[".locking"] = false;


$pages = $tdatainstitution_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainstitution_types[".edit"] = true;
	$tdatainstitution_types[".afterEditAction"] = 1;
	$tdatainstitution_types[".closePopupAfterEdit"] = 1;
	$tdatainstitution_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainstitution_types[".add"] = true;
$tdatainstitution_types[".afterAddAction"] = 1;
$tdatainstitution_types[".closePopupAfterAdd"] = 1;
$tdatainstitution_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainstitution_types[".list"] = true;
}



$tdatainstitution_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainstitution_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainstitution_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainstitution_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainstitution_types[".printFriendly"] = true;
}



$tdatainstitution_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainstitution_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainstitution_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainstitution_types[".isUseAjaxSuggest"] = true;



			

$tdatainstitution_types[".ajaxCodeSnippetAdded"] = false;

$tdatainstitution_types[".buttonsAdded"] = false;

$tdatainstitution_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainstitution_types[".isUseTimeForSearch"] = false;


$tdatainstitution_types[".badgeColor"] = "4682B4";


$tdatainstitution_types[".allSearchFields"] = array();
$tdatainstitution_types[".filterFields"] = array();
$tdatainstitution_types[".requiredSearchFields"] = array();

$tdatainstitution_types[".googleLikeFields"] = array();
$tdatainstitution_types[".googleLikeFields"][] = "InstitutionTypeID";
$tdatainstitution_types[".googleLikeFields"][] = "InstitutionTypeName";



$tdatainstitution_types[".tableType"] = "list";

$tdatainstitution_types[".printerPageOrientation"] = 0;
$tdatainstitution_types[".nPrinterPageScale"] = 100;

$tdatainstitution_types[".nPrinterSplitRecords"] = 40;

$tdatainstitution_types[".geocodingEnabled"] = false;










$tdatainstitution_types[".pageSize"] = 20;

$tdatainstitution_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainstitution_types[".strOrderBy"] = $tstrOrderBy;

$tdatainstitution_types[".orderindexes"] = array();


$tdatainstitution_types[".sqlHead"] = "SELECT InstitutionTypeID,  	InstitutionTypeName";
$tdatainstitution_types[".sqlFrom"] = "FROM institution_types";
$tdatainstitution_types[".sqlWhereExpr"] = "";
$tdatainstitution_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainstitution_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainstitution_types[".arrGroupsPerPage"] = $arrGPP;

$tdatainstitution_types[".highlightSearchResults"] = true;

$tableKeysinstitution_types = array();
$tableKeysinstitution_types[] = "InstitutionTypeID";
$tdatainstitution_types[".Keys"] = $tableKeysinstitution_types;


$tdatainstitution_types[".hideMobileList"] = array();




//	InstitutionTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "InstitutionTypeID";
	$fdata["GoodName"] = "InstitutionTypeID";
	$fdata["ownerTable"] = "institution_types";
	$fdata["Label"] = GetFieldLabel("institution_types","InstitutionTypeID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "InstitutionTypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InstitutionTypeID";

	
	
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


	$tdatainstitution_types["InstitutionTypeID"] = $fdata;
		$tdatainstitution_types[".searchableFields"][] = "InstitutionTypeID";
//	InstitutionTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "InstitutionTypeName";
	$fdata["GoodName"] = "InstitutionTypeName";
	$fdata["ownerTable"] = "institution_types";
	$fdata["Label"] = GetFieldLabel("institution_types","InstitutionTypeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "InstitutionTypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InstitutionTypeName";

	
	
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


	$tdatainstitution_types["InstitutionTypeName"] = $fdata;
		$tdatainstitution_types[".searchableFields"][] = "InstitutionTypeName";


$tables_data["institution_types"]=&$tdatainstitution_types;
$field_labels["institution_types"] = &$fieldLabelsinstitution_types;
$fieldToolTips["institution_types"] = &$fieldToolTipsinstitution_types;
$placeHolders["institution_types"] = &$placeHoldersinstitution_types;
$page_titles["institution_types"] = &$pageTitlesinstitution_types;


changeTextControlsToDate( "institution_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["institution_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["institution_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_institution_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "InstitutionTypeID,  	InstitutionTypeName";
$proto0["m_strFrom"] = "FROM institution_types";
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
	"m_strName" => "InstitutionTypeID",
	"m_strTable" => "institution_types",
	"m_srcTableName" => "institution_types"
));

$proto6["m_sql"] = "InstitutionTypeID";
$proto6["m_srcTableName"] = "institution_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "InstitutionTypeName",
	"m_strTable" => "institution_types",
	"m_srcTableName" => "institution_types"
));

$proto8["m_sql"] = "InstitutionTypeName";
$proto8["m_srcTableName"] = "institution_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "institution_types";
$proto11["m_srcTableName"] = "institution_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "InstitutionTypeID";
$proto11["m_columns"][] = "InstitutionTypeName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "institution_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "institution_types";
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
$proto0["m_srcTableName"]="institution_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_institution_types = createSqlQuery_institution_types();


	
																								;

		

$tdatainstitution_types[".sqlquery"] = $queryData_institution_types;



$tdatainstitution_types[".hasEvents"] = false;

?>