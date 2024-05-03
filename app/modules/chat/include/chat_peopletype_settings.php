<?php
$tdatachat_peopletype = array();
$tdatachat_peopletype[".searchableFields"] = array();
$tdatachat_peopletype[".ShortName"] = "chat_peopletype";
$tdatachat_peopletype[".OwnerID"] = "";
$tdatachat_peopletype[".OriginalTable"] = "chat_peopletype";


$tdatachat_peopletype[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatachat_peopletype[".originalPagesByType"] = $tdatachat_peopletype[".pagesByType"];
$tdatachat_peopletype[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatachat_peopletype[".originalPages"] = $tdatachat_peopletype[".pages"];
$tdatachat_peopletype[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatachat_peopletype[".originalDefaultPages"] = $tdatachat_peopletype[".defaultPages"];

//	field labels
$fieldLabelschat_peopletype = array();
$fieldToolTipschat_peopletype = array();
$pageTitleschat_peopletype = array();
$placeHolderschat_peopletype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_peopletype["English"] = array();
	$fieldToolTipschat_peopletype["English"] = array();
	$placeHolderschat_peopletype["English"] = array();
	$pageTitleschat_peopletype["English"] = array();
	$fieldLabelschat_peopletype["English"]["id"] = "Id";
	$fieldToolTipschat_peopletype["English"]["id"] = "";
	$placeHolderschat_peopletype["English"]["id"] = "";
	$fieldLabelschat_peopletype["English"]["name"] = "Name";
	$fieldToolTipschat_peopletype["English"]["name"] = "";
	$placeHolderschat_peopletype["English"]["name"] = "";
	if (count($fieldToolTipschat_peopletype["English"]))
		$tdatachat_peopletype[".isUseToolTips"] = true;
}


	$tdatachat_peopletype[".NCSearch"] = true;



$tdatachat_peopletype[".shortTableName"] = "chat_peopletype";
$tdatachat_peopletype[".nSecOptions"] = 0;

$tdatachat_peopletype[".mainTableOwnerID"] = "";
$tdatachat_peopletype[".entityType"] = 0;
$tdatachat_peopletype[".connId"] = "project_at_localhost";


$tdatachat_peopletype[".strOriginalTableName"] = "chat_peopletype";

	



$tdatachat_peopletype[".showAddInPopup"] = false;

$tdatachat_peopletype[".showEditInPopup"] = false;

$tdatachat_peopletype[".showViewInPopup"] = false;

$tdatachat_peopletype[".listAjax"] = false;
//	temporary
//$tdatachat_peopletype[".listAjax"] = false;

	$tdatachat_peopletype[".audit"] = false;

	$tdatachat_peopletype[".locking"] = false;


$pages = $tdatachat_peopletype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_peopletype[".edit"] = true;
	$tdatachat_peopletype[".afterEditAction"] = 1;
	$tdatachat_peopletype[".closePopupAfterEdit"] = 1;
	$tdatachat_peopletype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_peopletype[".add"] = true;
$tdatachat_peopletype[".afterAddAction"] = 1;
$tdatachat_peopletype[".closePopupAfterAdd"] = 1;
$tdatachat_peopletype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_peopletype[".list"] = true;
}



$tdatachat_peopletype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_peopletype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_peopletype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_peopletype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_peopletype[".printFriendly"] = true;
}



$tdatachat_peopletype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_peopletype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_peopletype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_peopletype[".isUseAjaxSuggest"] = true;



																																				

$tdatachat_peopletype[".ajaxCodeSnippetAdded"] = false;

$tdatachat_peopletype[".buttonsAdded"] = false;

$tdatachat_peopletype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachat_peopletype[".isUseTimeForSearch"] = false;


$tdatachat_peopletype[".badgeColor"] = "008B8B";


$tdatachat_peopletype[".allSearchFields"] = array();
$tdatachat_peopletype[".filterFields"] = array();
$tdatachat_peopletype[".requiredSearchFields"] = array();

$tdatachat_peopletype[".googleLikeFields"] = array();
$tdatachat_peopletype[".googleLikeFields"][] = "id";
$tdatachat_peopletype[".googleLikeFields"][] = "name";



$tdatachat_peopletype[".tableType"] = "list";

$tdatachat_peopletype[".printerPageOrientation"] = 0;
$tdatachat_peopletype[".nPrinterPageScale"] = 100;

$tdatachat_peopletype[".nPrinterSplitRecords"] = 40;

$tdatachat_peopletype[".geocodingEnabled"] = false;










$tdatachat_peopletype[".pageSize"] = 20;

$tdatachat_peopletype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_peopletype[".strOrderBy"] = $tstrOrderBy;

$tdatachat_peopletype[".orderindexes"] = array();


$tdatachat_peopletype[".sqlHead"] = "SELECT id,  name";
$tdatachat_peopletype[".sqlFrom"] = "FROM chat_peopletype";
$tdatachat_peopletype[".sqlWhereExpr"] = "";
$tdatachat_peopletype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_peopletype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_peopletype[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_peopletype[".highlightSearchResults"] = true;

$tableKeyschat_peopletype = array();
$tableKeyschat_peopletype[] = "id";
$tdatachat_peopletype[".Keys"] = $tableKeyschat_peopletype;


$tdatachat_peopletype[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_peopletype";
	$fdata["Label"] = GetFieldLabel("chat_peopletype","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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


	$tdatachat_peopletype["id"] = $fdata;
		$tdatachat_peopletype[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "chat_peopletype";
	$fdata["Label"] = GetFieldLabel("chat_peopletype","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatachat_peopletype["name"] = $fdata;
		$tdatachat_peopletype[".searchableFields"][] = "name";


$tables_data["chat_peopletype"]=&$tdatachat_peopletype;
$field_labels["chat_peopletype"] = &$fieldLabelschat_peopletype;
$fieldToolTips["chat_peopletype"] = &$fieldToolTipschat_peopletype;
$placeHolders["chat_peopletype"] = &$placeHolderschat_peopletype;
$page_titles["chat_peopletype"] = &$pageTitleschat_peopletype;


changeTextControlsToDate( "chat_peopletype" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_peopletype"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_peopletype"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_peopletype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name";
$proto0["m_strFrom"] = "FROM chat_peopletype";
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
	"m_strTable" => "chat_peopletype",
	"m_srcTableName" => "chat_peopletype"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_peopletype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "chat_peopletype",
	"m_srcTableName" => "chat_peopletype"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "chat_peopletype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "chat_peopletype";
$proto11["m_srcTableName"] = "chat_peopletype";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "chat_peopletype";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "chat_peopletype";
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
$proto0["m_srcTableName"]="chat_peopletype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_peopletype = createSqlQuery_chat_peopletype();


	
		;

		

$tdatachat_peopletype[".sqlquery"] = $queryData_chat_peopletype;



$tdatachat_peopletype[".hasEvents"] = false;

?>