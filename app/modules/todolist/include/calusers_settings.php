<?php
$tdatacalusers = array();
$tdatacalusers[".searchableFields"] = array();
$tdatacalusers[".ShortName"] = "calusers";
$tdatacalusers[".OwnerID"] = "";
$tdatacalusers[".OriginalTable"] = "calusers";


$tdatacalusers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalusers[".originalPagesByType"] = $tdatacalusers[".pagesByType"];
$tdatacalusers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalusers[".originalPages"] = $tdatacalusers[".pages"];
$tdatacalusers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalusers[".originalDefaultPages"] = $tdatacalusers[".defaultPages"];

//	field labels
$fieldLabelscalusers = array();
$fieldToolTipscalusers = array();
$pageTitlescalusers = array();
$placeHolderscalusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalusers["English"] = array();
	$fieldToolTipscalusers["English"] = array();
	$placeHolderscalusers["English"] = array();
	$pageTitlescalusers["English"] = array();
	$fieldLabelscalusers["English"]["id"] = "Id";
	$fieldToolTipscalusers["English"]["id"] = "";
	$placeHolderscalusers["English"]["id"] = "";
	$fieldLabelscalusers["English"]["username"] = "Username";
	$fieldToolTipscalusers["English"]["username"] = "";
	$placeHolderscalusers["English"]["username"] = "";
	$fieldLabelscalusers["English"]["password"] = "Password";
	$fieldToolTipscalusers["English"]["password"] = "";
	$placeHolderscalusers["English"]["password"] = "";
	if (count($fieldToolTipscalusers["English"]))
		$tdatacalusers[".isUseToolTips"] = true;
}


	$tdatacalusers[".NCSearch"] = true;



$tdatacalusers[".shortTableName"] = "calusers";
$tdatacalusers[".nSecOptions"] = 0;

$tdatacalusers[".mainTableOwnerID"] = "";
$tdatacalusers[".entityType"] = 0;
$tdatacalusers[".connId"] = "project_at_localhost";


$tdatacalusers[".strOriginalTableName"] = "calusers";

	



$tdatacalusers[".showAddInPopup"] = false;

$tdatacalusers[".showEditInPopup"] = false;

$tdatacalusers[".showViewInPopup"] = false;

$tdatacalusers[".listAjax"] = false;
//	temporary
//$tdatacalusers[".listAjax"] = false;

	$tdatacalusers[".audit"] = false;

	$tdatacalusers[".locking"] = false;


$pages = $tdatacalusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalusers[".edit"] = true;
	$tdatacalusers[".afterEditAction"] = 1;
	$tdatacalusers[".closePopupAfterEdit"] = 1;
	$tdatacalusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalusers[".add"] = true;
$tdatacalusers[".afterAddAction"] = 1;
$tdatacalusers[".closePopupAfterAdd"] = 1;
$tdatacalusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalusers[".list"] = true;
}



$tdatacalusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalusers[".printFriendly"] = true;
}



$tdatacalusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalusers[".isUseAjaxSuggest"] = true;



																								

$tdatacalusers[".ajaxCodeSnippetAdded"] = false;

$tdatacalusers[".buttonsAdded"] = false;

$tdatacalusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalusers[".isUseTimeForSearch"] = false;


$tdatacalusers[".badgeColor"] = "CFAE83";


$tdatacalusers[".allSearchFields"] = array();
$tdatacalusers[".filterFields"] = array();
$tdatacalusers[".requiredSearchFields"] = array();

$tdatacalusers[".googleLikeFields"] = array();
$tdatacalusers[".googleLikeFields"][] = "id";
$tdatacalusers[".googleLikeFields"][] = "username";
$tdatacalusers[".googleLikeFields"][] = "password";



$tdatacalusers[".tableType"] = "list";

$tdatacalusers[".printerPageOrientation"] = 0;
$tdatacalusers[".nPrinterPageScale"] = 100;

$tdatacalusers[".nPrinterSplitRecords"] = 40;

$tdatacalusers[".geocodingEnabled"] = false;










$tdatacalusers[".pageSize"] = 20;

$tdatacalusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalusers[".strOrderBy"] = $tstrOrderBy;

$tdatacalusers[".orderindexes"] = array();


$tdatacalusers[".sqlHead"] = "SELECT id,  username,  password";
$tdatacalusers[".sqlFrom"] = "FROM calusers";
$tdatacalusers[".sqlWhereExpr"] = "";
$tdatacalusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalusers[".arrGroupsPerPage"] = $arrGPP;

$tdatacalusers[".highlightSearchResults"] = true;

$tableKeyscalusers = array();
$tableKeyscalusers[] = "id";
$tdatacalusers[".Keys"] = $tableKeyscalusers;


$tdatacalusers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacalusers["id"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatacalusers["username"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatacalusers["password"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "password";


$tables_data["calusers"]=&$tdatacalusers;
$field_labels["calusers"] = &$fieldLabelscalusers;
$fieldToolTips["calusers"] = &$fieldToolTipscalusers;
$placeHolders["calusers"] = &$placeHolderscalusers;
$page_titles["calusers"] = &$pageTitlescalusers;


changeTextControlsToDate( "calusers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calusers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calusers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  username,  password";
$proto0["m_strFrom"] = "FROM calusers";
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
	"m_strName" => "id",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "calusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "calusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "calusers";
$proto13["m_srcTableName"] = "calusers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "username";
$proto13["m_columns"][] = "password";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "calusers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "calusers";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calusers = createSqlQuery_calusers();


	
		;

			

$tdatacalusers[".sqlquery"] = $queryData_calusers;



$tdatacalusers[".hasEvents"] = false;

?>