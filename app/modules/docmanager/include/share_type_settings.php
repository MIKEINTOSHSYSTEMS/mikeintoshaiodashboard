<?php
$tdatashare_type = array();
$tdatashare_type[".searchableFields"] = array();
$tdatashare_type[".ShortName"] = "share_type";
$tdatashare_type[".OwnerID"] = "";
$tdatashare_type[".OriginalTable"] = "share_type";


$tdatashare_type[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatashare_type[".originalPagesByType"] = $tdatashare_type[".pagesByType"];
$tdatashare_type[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatashare_type[".originalPages"] = $tdatashare_type[".pages"];
$tdatashare_type[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatashare_type[".originalDefaultPages"] = $tdatashare_type[".defaultPages"];

//	field labels
$fieldLabelsshare_type = array();
$fieldToolTipsshare_type = array();
$pageTitlesshare_type = array();
$placeHoldersshare_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshare_type["English"] = array();
	$fieldToolTipsshare_type["English"] = array();
	$placeHoldersshare_type["English"] = array();
	$pageTitlesshare_type["English"] = array();
	$fieldLabelsshare_type["English"]["id"] = "Id";
	$fieldToolTipsshare_type["English"]["id"] = "";
	$placeHoldersshare_type["English"]["id"] = "";
	$fieldLabelsshare_type["English"]["share_type"] = "Share Type";
	$fieldToolTipsshare_type["English"]["share_type"] = "";
	$placeHoldersshare_type["English"]["share_type"] = "";
	if (count($fieldToolTipsshare_type["English"]))
		$tdatashare_type[".isUseToolTips"] = true;
}


	$tdatashare_type[".NCSearch"] = true;



$tdatashare_type[".shortTableName"] = "share_type";
$tdatashare_type[".nSecOptions"] = 0;

$tdatashare_type[".mainTableOwnerID"] = "";
$tdatashare_type[".entityType"] = 0;
$tdatashare_type[".connId"] = "project_at_localhost";


$tdatashare_type[".strOriginalTableName"] = "share_type";

		 



$tdatashare_type[".showAddInPopup"] = false;

$tdatashare_type[".showEditInPopup"] = false;

$tdatashare_type[".showViewInPopup"] = false;

$tdatashare_type[".listAjax"] = false;
//	temporary
//$tdatashare_type[".listAjax"] = false;

	$tdatashare_type[".audit"] = false;

	$tdatashare_type[".locking"] = false;


$pages = $tdatashare_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatashare_type[".edit"] = true;
	$tdatashare_type[".afterEditAction"] = 1;
	$tdatashare_type[".closePopupAfterEdit"] = 1;
	$tdatashare_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatashare_type[".add"] = true;
$tdatashare_type[".afterAddAction"] = 1;
$tdatashare_type[".closePopupAfterAdd"] = 1;
$tdatashare_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatashare_type[".list"] = true;
}



$tdatashare_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatashare_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatashare_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatashare_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatashare_type[".printFriendly"] = true;
}



$tdatashare_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatashare_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatashare_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatashare_type[".isUseAjaxSuggest"] = true;



															

$tdatashare_type[".ajaxCodeSnippetAdded"] = false;

$tdatashare_type[".buttonsAdded"] = false;

$tdatashare_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashare_type[".isUseTimeForSearch"] = false;


$tdatashare_type[".badgeColor"] = "2F4F4F";


$tdatashare_type[".allSearchFields"] = array();
$tdatashare_type[".filterFields"] = array();
$tdatashare_type[".requiredSearchFields"] = array();

$tdatashare_type[".googleLikeFields"] = array();
$tdatashare_type[".googleLikeFields"][] = "id";
$tdatashare_type[".googleLikeFields"][] = "share_type";



$tdatashare_type[".tableType"] = "list";

$tdatashare_type[".printerPageOrientation"] = 0;
$tdatashare_type[".nPrinterPageScale"] = 100;

$tdatashare_type[".nPrinterSplitRecords"] = 40;

$tdatashare_type[".geocodingEnabled"] = false;










$tdatashare_type[".pageSize"] = 20;

$tdatashare_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatashare_type[".strOrderBy"] = $tstrOrderBy;

$tdatashare_type[".orderindexes"] = array();


$tdatashare_type[".sqlHead"] = "SELECT id,  share_type";
$tdatashare_type[".sqlFrom"] = "FROM share_type";
$tdatashare_type[".sqlWhereExpr"] = "";
$tdatashare_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashare_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashare_type[".arrGroupsPerPage"] = $arrGPP;

$tdatashare_type[".highlightSearchResults"] = true;

$tableKeysshare_type = array();
$tableKeysshare_type[] = "id";
$tdatashare_type[".Keys"] = $tableKeysshare_type;


$tdatashare_type[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "share_type";
	$fdata["Label"] = GetFieldLabel("share_type","id");
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


	$tdatashare_type["id"] = $fdata;
		$tdatashare_type[".searchableFields"][] = "id";
//	share_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "share_type";
	$fdata["GoodName"] = "share_type";
	$fdata["ownerTable"] = "share_type";
	$fdata["Label"] = GetFieldLabel("share_type","share_type");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_type";

	
	
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


	$tdatashare_type["share_type"] = $fdata;
		$tdatashare_type[".searchableFields"][] = "share_type";


$tables_data["share_type"]=&$tdatashare_type;
$field_labels["share_type"] = &$fieldLabelsshare_type;
$fieldToolTips["share_type"] = &$fieldToolTipsshare_type;
$placeHolders["share_type"] = &$placeHoldersshare_type;
$page_titles["share_type"] = &$pageTitlesshare_type;


changeTextControlsToDate( "share_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["share_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["share_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_share_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  share_type";
$proto0["m_strFrom"] = "FROM share_type";
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
	"m_strTable" => "share_type",
	"m_srcTableName" => "share_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "share_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "share_type",
	"m_strTable" => "share_type",
	"m_srcTableName" => "share_type"
));

$proto8["m_sql"] = "share_type";
$proto8["m_srcTableName"] = "share_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "share_type";
$proto11["m_srcTableName"] = "share_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "share_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "share_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "share_type";
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
$proto0["m_srcTableName"]="share_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_share_type = createSqlQuery_share_type();


	
					
;

		

$tdatashare_type[".sqlquery"] = $queryData_share_type;



$tdatashare_type[".hasEvents"] = false;

?>