<?php
$tdataparticipant_organization_types = array();
$tdataparticipant_organization_types[".searchableFields"] = array();
$tdataparticipant_organization_types[".ShortName"] = "participant_organization_types";
$tdataparticipant_organization_types[".OwnerID"] = "";
$tdataparticipant_organization_types[".OriginalTable"] = "participant_organization_types";


$tdataparticipant_organization_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataparticipant_organization_types[".originalPagesByType"] = $tdataparticipant_organization_types[".pagesByType"];
$tdataparticipant_organization_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataparticipant_organization_types[".originalPages"] = $tdataparticipant_organization_types[".pages"];
$tdataparticipant_organization_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataparticipant_organization_types[".originalDefaultPages"] = $tdataparticipant_organization_types[".defaultPages"];

//	field labels
$fieldLabelsparticipant_organization_types = array();
$fieldToolTipsparticipant_organization_types = array();
$pageTitlesparticipant_organization_types = array();
$placeHoldersparticipant_organization_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparticipant_organization_types["English"] = array();
	$fieldToolTipsparticipant_organization_types["English"] = array();
	$placeHoldersparticipant_organization_types["English"] = array();
	$pageTitlesparticipant_organization_types["English"] = array();
	$fieldLabelsparticipant_organization_types["English"]["OrganizationTypeID"] = "Organization Type ID";
	$fieldToolTipsparticipant_organization_types["English"]["OrganizationTypeID"] = "";
	$placeHoldersparticipant_organization_types["English"]["OrganizationTypeID"] = "";
	$fieldLabelsparticipant_organization_types["English"]["OrganizationTypeName"] = "Organization Type Name";
	$fieldToolTipsparticipant_organization_types["English"]["OrganizationTypeName"] = "";
	$placeHoldersparticipant_organization_types["English"]["OrganizationTypeName"] = "";
	if (count($fieldToolTipsparticipant_organization_types["English"]))
		$tdataparticipant_organization_types[".isUseToolTips"] = true;
}


	$tdataparticipant_organization_types[".NCSearch"] = true;



$tdataparticipant_organization_types[".shortTableName"] = "participant_organization_types";
$tdataparticipant_organization_types[".nSecOptions"] = 0;

$tdataparticipant_organization_types[".mainTableOwnerID"] = "";
$tdataparticipant_organization_types[".entityType"] = 0;
$tdataparticipant_organization_types[".connId"] = "deredevatderejadevmerqconsulta";


$tdataparticipant_organization_types[".strOriginalTableName"] = "participant_organization_types";

	



$tdataparticipant_organization_types[".showAddInPopup"] = false;

$tdataparticipant_organization_types[".showEditInPopup"] = false;

$tdataparticipant_organization_types[".showViewInPopup"] = false;

$tdataparticipant_organization_types[".listAjax"] = false;
//	temporary
//$tdataparticipant_organization_types[".listAjax"] = false;

	$tdataparticipant_organization_types[".audit"] = true;

	$tdataparticipant_organization_types[".locking"] = false;


$pages = $tdataparticipant_organization_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataparticipant_organization_types[".edit"] = true;
	$tdataparticipant_organization_types[".afterEditAction"] = 1;
	$tdataparticipant_organization_types[".closePopupAfterEdit"] = 1;
	$tdataparticipant_organization_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataparticipant_organization_types[".add"] = true;
$tdataparticipant_organization_types[".afterAddAction"] = 1;
$tdataparticipant_organization_types[".closePopupAfterAdd"] = 1;
$tdataparticipant_organization_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataparticipant_organization_types[".list"] = true;
}



$tdataparticipant_organization_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataparticipant_organization_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataparticipant_organization_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataparticipant_organization_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataparticipant_organization_types[".printFriendly"] = true;
}



$tdataparticipant_organization_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataparticipant_organization_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataparticipant_organization_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataparticipant_organization_types[".isUseAjaxSuggest"] = true;



			

$tdataparticipant_organization_types[".ajaxCodeSnippetAdded"] = false;

$tdataparticipant_organization_types[".buttonsAdded"] = false;

$tdataparticipant_organization_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparticipant_organization_types[".isUseTimeForSearch"] = false;


$tdataparticipant_organization_types[".badgeColor"] = "6B8E23";


$tdataparticipant_organization_types[".allSearchFields"] = array();
$tdataparticipant_organization_types[".filterFields"] = array();
$tdataparticipant_organization_types[".requiredSearchFields"] = array();

$tdataparticipant_organization_types[".googleLikeFields"] = array();
$tdataparticipant_organization_types[".googleLikeFields"][] = "OrganizationTypeID";
$tdataparticipant_organization_types[".googleLikeFields"][] = "OrganizationTypeName";



$tdataparticipant_organization_types[".tableType"] = "list";

$tdataparticipant_organization_types[".printerPageOrientation"] = 0;
$tdataparticipant_organization_types[".nPrinterPageScale"] = 100;

$tdataparticipant_organization_types[".nPrinterSplitRecords"] = 40;

$tdataparticipant_organization_types[".geocodingEnabled"] = false;










$tdataparticipant_organization_types[".pageSize"] = 20;

$tdataparticipant_organization_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataparticipant_organization_types[".strOrderBy"] = $tstrOrderBy;

$tdataparticipant_organization_types[".orderindexes"] = array();


$tdataparticipant_organization_types[".sqlHead"] = "SELECT OrganizationTypeID,  	OrganizationTypeName";
$tdataparticipant_organization_types[".sqlFrom"] = "FROM participant_organization_types";
$tdataparticipant_organization_types[".sqlWhereExpr"] = "";
$tdataparticipant_organization_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparticipant_organization_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparticipant_organization_types[".arrGroupsPerPage"] = $arrGPP;

$tdataparticipant_organization_types[".highlightSearchResults"] = true;

$tableKeysparticipant_organization_types = array();
$tableKeysparticipant_organization_types[] = "OrganizationTypeID";
$tdataparticipant_organization_types[".Keys"] = $tableKeysparticipant_organization_types;


$tdataparticipant_organization_types[".hideMobileList"] = array();




//	OrganizationTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OrganizationTypeID";
	$fdata["GoodName"] = "OrganizationTypeID";
	$fdata["ownerTable"] = "participant_organization_types";
	$fdata["Label"] = GetFieldLabel("participant_organization_types","OrganizationTypeID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OrganizationTypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrganizationTypeID";

	
	
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


	$tdataparticipant_organization_types["OrganizationTypeID"] = $fdata;
		$tdataparticipant_organization_types[".searchableFields"][] = "OrganizationTypeID";
//	OrganizationTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrganizationTypeName";
	$fdata["GoodName"] = "OrganizationTypeName";
	$fdata["ownerTable"] = "participant_organization_types";
	$fdata["Label"] = GetFieldLabel("participant_organization_types","OrganizationTypeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OrganizationTypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrganizationTypeName";

	
	
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


	$tdataparticipant_organization_types["OrganizationTypeName"] = $fdata;
		$tdataparticipant_organization_types[".searchableFields"][] = "OrganizationTypeName";


$tables_data["participant_organization_types"]=&$tdataparticipant_organization_types;
$field_labels["participant_organization_types"] = &$fieldLabelsparticipant_organization_types;
$fieldToolTips["participant_organization_types"] = &$fieldToolTipsparticipant_organization_types;
$placeHolders["participant_organization_types"] = &$placeHoldersparticipant_organization_types;
$page_titles["participant_organization_types"] = &$pageTitlesparticipant_organization_types;


changeTextControlsToDate( "participant_organization_types" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["participant_organization_types"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["participant_organization_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_participant_organization_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OrganizationTypeID,  	OrganizationTypeName";
$proto0["m_strFrom"] = "FROM participant_organization_types";
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
	"m_strName" => "OrganizationTypeID",
	"m_strTable" => "participant_organization_types",
	"m_srcTableName" => "participant_organization_types"
));

$proto6["m_sql"] = "OrganizationTypeID";
$proto6["m_srcTableName"] = "participant_organization_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OrganizationTypeName",
	"m_strTable" => "participant_organization_types",
	"m_srcTableName" => "participant_organization_types"
));

$proto8["m_sql"] = "OrganizationTypeName";
$proto8["m_srcTableName"] = "participant_organization_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "participant_organization_types";
$proto11["m_srcTableName"] = "participant_organization_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "OrganizationTypeID";
$proto11["m_columns"][] = "OrganizationTypeName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "participant_organization_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "participant_organization_types";
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
$proto0["m_srcTableName"]="participant_organization_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_participant_organization_types = createSqlQuery_participant_organization_types();


	
																								;

		

$tdataparticipant_organization_types[".sqlquery"] = $queryData_participant_organization_types;



$tdataparticipant_organization_types[".hasEvents"] = false;

?>