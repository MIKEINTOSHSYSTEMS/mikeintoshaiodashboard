<?php
$tdatahd_todolist = array();
$tdatahd_todolist[".searchableFields"] = array();
$tdatahd_todolist[".ShortName"] = "hd_todolist";
$tdatahd_todolist[".OwnerID"] = "";
$tdatahd_todolist[".OriginalTable"] = "hd_todolist";


$tdatahd_todolist[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatahd_todolist[".originalPagesByType"] = $tdatahd_todolist[".pagesByType"];
$tdatahd_todolist[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatahd_todolist[".originalPages"] = $tdatahd_todolist[".pages"];
$tdatahd_todolist[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatahd_todolist[".originalDefaultPages"] = $tdatahd_todolist[".defaultPages"];

//	field labels
$fieldLabelshd_todolist = array();
$fieldToolTipshd_todolist = array();
$pageTitleshd_todolist = array();
$placeHoldershd_todolist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_todolist["English"] = array();
	$fieldToolTipshd_todolist["English"] = array();
	$placeHoldershd_todolist["English"] = array();
	$pageTitleshd_todolist["English"] = array();
	$fieldLabelshd_todolist["English"]["id"] = "Id";
	$fieldToolTipshd_todolist["English"]["id"] = "";
	$placeHoldershd_todolist["English"]["id"] = "";
	$fieldLabelshd_todolist["English"]["ticketid"] = "Ticketid";
	$fieldToolTipshd_todolist["English"]["ticketid"] = "";
	$placeHoldershd_todolist["English"]["ticketid"] = "";
	$fieldLabelshd_todolist["English"]["completed"] = "Completed";
	$fieldToolTipshd_todolist["English"]["completed"] = "";
	$placeHoldershd_todolist["English"]["completed"] = "";
	$fieldLabelshd_todolist["English"]["task"] = "Task";
	$fieldToolTipshd_todolist["English"]["task"] = "";
	$placeHoldershd_todolist["English"]["task"] = "";
	if (count($fieldToolTipshd_todolist["English"]))
		$tdatahd_todolist[".isUseToolTips"] = true;
}


	$tdatahd_todolist[".NCSearch"] = true;



$tdatahd_todolist[".shortTableName"] = "hd_todolist";
$tdatahd_todolist[".nSecOptions"] = 0;

$tdatahd_todolist[".mainTableOwnerID"] = "";
$tdatahd_todolist[".entityType"] = 0;
$tdatahd_todolist[".connId"] = "project_at_localhost";


$tdatahd_todolist[".strOriginalTableName"] = "hd_todolist";

	



$tdatahd_todolist[".showAddInPopup"] = false;

$tdatahd_todolist[".showEditInPopup"] = false;

$tdatahd_todolist[".showViewInPopup"] = false;

$tdatahd_todolist[".listAjax"] = false;
//	temporary
//$tdatahd_todolist[".listAjax"] = false;

	$tdatahd_todolist[".audit"] = false;

	$tdatahd_todolist[".locking"] = false;


$pages = $tdatahd_todolist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_todolist[".edit"] = true;
	$tdatahd_todolist[".afterEditAction"] = 1;
	$tdatahd_todolist[".closePopupAfterEdit"] = 1;
	$tdatahd_todolist[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_todolist[".add"] = true;
$tdatahd_todolist[".afterAddAction"] = 1;
$tdatahd_todolist[".closePopupAfterAdd"] = 1;
$tdatahd_todolist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_todolist[".list"] = true;
}



$tdatahd_todolist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_todolist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_todolist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_todolist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_todolist[".printFriendly"] = true;
}



$tdatahd_todolist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_todolist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_todolist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_todolist[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_todolist[".ajaxCodeSnippetAdded"] = false;

$tdatahd_todolist[".buttonsAdded"] = false;

$tdatahd_todolist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahd_todolist[".isUseTimeForSearch"] = false;


$tdatahd_todolist[".badgeColor"] = "cd853f";


$tdatahd_todolist[".allSearchFields"] = array();
$tdatahd_todolist[".filterFields"] = array();
$tdatahd_todolist[".requiredSearchFields"] = array();

$tdatahd_todolist[".googleLikeFields"] = array();
$tdatahd_todolist[".googleLikeFields"][] = "id";
$tdatahd_todolist[".googleLikeFields"][] = "ticketid";
$tdatahd_todolist[".googleLikeFields"][] = "completed";
$tdatahd_todolist[".googleLikeFields"][] = "task";



$tdatahd_todolist[".tableType"] = "list";

$tdatahd_todolist[".printerPageOrientation"] = 0;
$tdatahd_todolist[".nPrinterPageScale"] = 100;

$tdatahd_todolist[".nPrinterSplitRecords"] = 40;

$tdatahd_todolist[".geocodingEnabled"] = false;










$tdatahd_todolist[".pageSize"] = 20;

$tdatahd_todolist[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_todolist[".strOrderBy"] = $tstrOrderBy;

$tdatahd_todolist[".orderindexes"] = array();


$tdatahd_todolist[".sqlHead"] = "SELECT id,  ticketid,  completed,  task";
$tdatahd_todolist[".sqlFrom"] = "FROM hd_todolist";
$tdatahd_todolist[".sqlWhereExpr"] = "";
$tdatahd_todolist[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_todolist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_todolist[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_todolist[".highlightSearchResults"] = true;

$tableKeyshd_todolist = array();
$tableKeyshd_todolist[] = "id";
$tdatahd_todolist[".Keys"] = $tableKeyshd_todolist;


$tdatahd_todolist[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_todolist";
	$fdata["Label"] = GetFieldLabel("hd_todolist","id");
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


	$tdatahd_todolist["id"] = $fdata;
		$tdatahd_todolist[".searchableFields"][] = "id";
//	ticketid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ticketid";
	$fdata["GoodName"] = "ticketid";
	$fdata["ownerTable"] = "hd_todolist";
	$fdata["Label"] = GetFieldLabel("hd_todolist","ticketid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ticketid";

		$fdata["sourceSingle"] = "ticketid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketid";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatahd_todolist["ticketid"] = $fdata;
		$tdatahd_todolist[".searchableFields"][] = "ticketid";
//	completed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "completed";
	$fdata["GoodName"] = "completed";
	$fdata["ownerTable"] = "hd_todolist";
	$fdata["Label"] = GetFieldLabel("hd_todolist","completed");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "completed";

		$fdata["sourceSingle"] = "completed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "completed";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatahd_todolist["completed"] = $fdata;
		$tdatahd_todolist[".searchableFields"][] = "completed";
//	task
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "task";
	$fdata["GoodName"] = "task";
	$fdata["ownerTable"] = "hd_todolist";
	$fdata["Label"] = GetFieldLabel("hd_todolist","task");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "task";

		$fdata["sourceSingle"] = "task";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "task";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatahd_todolist["task"] = $fdata;
		$tdatahd_todolist[".searchableFields"][] = "task";


$tables_data["hd_todolist"]=&$tdatahd_todolist;
$field_labels["hd_todolist"] = &$fieldLabelshd_todolist;
$fieldToolTips["hd_todolist"] = &$fieldToolTipshd_todolist;
$placeHolders["hd_todolist"] = &$placeHoldershd_todolist;
$page_titles["hd_todolist"] = &$pageTitleshd_todolist;


changeTextControlsToDate( "hd_todolist" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_todolist"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_todolist"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_todolist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  ticketid,  completed,  task";
$proto0["m_strFrom"] = "FROM hd_todolist";
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
	"m_strTable" => "hd_todolist",
	"m_srcTableName" => "hd_todolist"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_todolist";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketid",
	"m_strTable" => "hd_todolist",
	"m_srcTableName" => "hd_todolist"
));

$proto8["m_sql"] = "ticketid";
$proto8["m_srcTableName"] = "hd_todolist";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "completed",
	"m_strTable" => "hd_todolist",
	"m_srcTableName" => "hd_todolist"
));

$proto10["m_sql"] = "completed";
$proto10["m_srcTableName"] = "hd_todolist";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "task",
	"m_strTable" => "hd_todolist",
	"m_srcTableName" => "hd_todolist"
));

$proto12["m_sql"] = "task";
$proto12["m_srcTableName"] = "hd_todolist";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "hd_todolist";
$proto15["m_srcTableName"] = "hd_todolist";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "ticketid";
$proto15["m_columns"][] = "completed";
$proto15["m_columns"][] = "task";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "hd_todolist";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "hd_todolist";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hd_todolist";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_todolist = createSqlQuery_hd_todolist();


	
		;

				

$tdatahd_todolist[".sqlquery"] = $queryData_hd_todolist;



$tdatahd_todolist[".hasEvents"] = false;

?>