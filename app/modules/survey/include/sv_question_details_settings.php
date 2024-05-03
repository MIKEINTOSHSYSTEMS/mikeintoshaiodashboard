<?php
$tdatasv_question_details = array();
$tdatasv_question_details[".searchableFields"] = array();
$tdatasv_question_details[".ShortName"] = "sv_question_details";
$tdatasv_question_details[".OwnerID"] = "";
$tdatasv_question_details[".OriginalTable"] = "sv_question_details";


$tdatasv_question_details[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatasv_question_details[".originalPagesByType"] = $tdatasv_question_details[".pagesByType"];
$tdatasv_question_details[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatasv_question_details[".originalPages"] = $tdatasv_question_details[".pages"];
$tdatasv_question_details[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatasv_question_details[".originalDefaultPages"] = $tdatasv_question_details[".defaultPages"];

//	field labels
$fieldLabelssv_question_details = array();
$fieldToolTipssv_question_details = array();
$pageTitlessv_question_details = array();
$placeHolderssv_question_details = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_question_details["English"] = array();
	$fieldToolTipssv_question_details["English"] = array();
	$placeHolderssv_question_details["English"] = array();
	$pageTitlessv_question_details["English"] = array();
	$fieldLabelssv_question_details["English"]["id"] = "Id";
	$fieldToolTipssv_question_details["English"]["id"] = "";
	$placeHolderssv_question_details["English"]["id"] = "";
	$fieldLabelssv_question_details["English"]["question_id"] = "Question ID";
	$fieldToolTipssv_question_details["English"]["question_id"] = "";
	$placeHolderssv_question_details["English"]["question_id"] = "";
	$fieldLabelssv_question_details["English"]["text"] = "Text";
	$fieldToolTipssv_question_details["English"]["text"] = "";
	$placeHolderssv_question_details["English"]["text"] = "";
	$fieldLabelssv_question_details["English"]["sortorder"] = "Sortorder";
	$fieldToolTipssv_question_details["English"]["sortorder"] = "";
	$placeHolderssv_question_details["English"]["sortorder"] = "";
	if (count($fieldToolTipssv_question_details["English"]))
		$tdatasv_question_details[".isUseToolTips"] = true;
}


	$tdatasv_question_details[".NCSearch"] = true;



$tdatasv_question_details[".shortTableName"] = "sv_question_details";
$tdatasv_question_details[".nSecOptions"] = 0;

$tdatasv_question_details[".mainTableOwnerID"] = "";
$tdatasv_question_details[".entityType"] = 1;
$tdatasv_question_details[".connId"] = "project_at_localhost";


$tdatasv_question_details[".strOriginalTableName"] = "sv_question_details";

	



$tdatasv_question_details[".showAddInPopup"] = false;

$tdatasv_question_details[".showEditInPopup"] = false;

$tdatasv_question_details[".showViewInPopup"] = false;

	$tdatasv_question_details[".listAjax"] = true;
//	temporary
//$tdatasv_question_details[".listAjax"] = false;

	$tdatasv_question_details[".audit"] = false;

	$tdatasv_question_details[".locking"] = false;


$pages = $tdatasv_question_details[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_question_details[".edit"] = true;
	$tdatasv_question_details[".afterEditAction"] = 1;
	$tdatasv_question_details[".closePopupAfterEdit"] = 1;
	$tdatasv_question_details[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_question_details[".add"] = true;
$tdatasv_question_details[".afterAddAction"] = 1;
$tdatasv_question_details[".closePopupAfterAdd"] = 1;
$tdatasv_question_details[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_question_details[".list"] = true;
}

$tdatasv_question_details[".updateSelected"] = true;


$tdatasv_question_details[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_question_details[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_question_details[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_question_details[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_question_details[".printFriendly"] = true;
}



$tdatasv_question_details[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_question_details[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_question_details[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_question_details[".isUseAjaxSuggest"] = true;



																																
					

$tdatasv_question_details[".ajaxCodeSnippetAdded"] = false;

$tdatasv_question_details[".buttonsAdded"] = true;

$tdatasv_question_details[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasv_question_details[".isUseTimeForSearch"] = false;


$tdatasv_question_details[".badgeColor"] = "778899";


$tdatasv_question_details[".allSearchFields"] = array();
$tdatasv_question_details[".filterFields"] = array();
$tdatasv_question_details[".requiredSearchFields"] = array();

$tdatasv_question_details[".googleLikeFields"] = array();
$tdatasv_question_details[".googleLikeFields"][] = "id";
$tdatasv_question_details[".googleLikeFields"][] = "question_id";
$tdatasv_question_details[".googleLikeFields"][] = "text";
$tdatasv_question_details[".googleLikeFields"][] = "sortorder";



$tdatasv_question_details[".tableType"] = "list";

$tdatasv_question_details[".printerPageOrientation"] = 0;
$tdatasv_question_details[".nPrinterPageScale"] = 100;

$tdatasv_question_details[".nPrinterSplitRecords"] = 40;

$tdatasv_question_details[".geocodingEnabled"] = false;










$tdatasv_question_details[".pageSize"] = 20;

$tdatasv_question_details[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY question_id, sortorder";
$tdatasv_question_details[".strOrderBy"] = $tstrOrderBy;

$tdatasv_question_details[".orderindexes"] = array();
	$tdatasv_question_details[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "question_id");

	$tdatasv_question_details[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "sortorder");



$tdatasv_question_details[".sqlHead"] = "SELECT id,  question_id,  text,  sortorder";
$tdatasv_question_details[".sqlFrom"] = "FROM sv_question_details";
$tdatasv_question_details[".sqlWhereExpr"] = "";
$tdatasv_question_details[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_question_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_question_details[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_question_details[".highlightSearchResults"] = true;

$tableKeyssv_question_details = array();
$tableKeyssv_question_details[] = "id";
$tdatasv_question_details[".Keys"] = $tableKeyssv_question_details;


$tdatasv_question_details[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_question_details";
	$fdata["Label"] = GetFieldLabel("sv_question_details","id");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_question_details["id"] = $fdata;
		$tdatasv_question_details[".searchableFields"][] = "id";
//	question_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "question_id";
	$fdata["GoodName"] = "question_id";
	$fdata["ownerTable"] = "sv_question_details";
	$fdata["Label"] = GetFieldLabel("sv_question_details","question_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "question_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_id";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_question_details["question_id"] = $fdata;
		$tdatasv_question_details[".searchableFields"][] = "question_id";
//	text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "text";
	$fdata["GoodName"] = "text";
	$fdata["ownerTable"] = "sv_question_details";
	$fdata["Label"] = GetFieldLabel("sv_question_details","text");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "text";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "text";

	
	
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
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
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


	$tdatasv_question_details["text"] = $fdata;
		$tdatasv_question_details[".searchableFields"][] = "text";
//	sortorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sortorder";
	$fdata["GoodName"] = "sortorder";
	$fdata["ownerTable"] = "sv_question_details";
	$fdata["Label"] = GetFieldLabel("sv_question_details","sortorder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sortorder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sortorder";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "sortorder_chane_answer_options1", "type" => "mouseout" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_question_details["sortorder"] = $fdata;
		$tdatasv_question_details[".searchableFields"][] = "sortorder";


$tables_data["sv_question_details"]=&$tdatasv_question_details;
$field_labels["sv_question_details"] = &$fieldLabelssv_question_details;
$fieldToolTips["sv_question_details"] = &$fieldToolTipssv_question_details;
$placeHolders["sv_question_details"] = &$placeHolderssv_question_details;
$page_titles["sv_question_details"] = &$pageTitlessv_question_details;


changeTextControlsToDate( "sv_question_details" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_question_details"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_question_details"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="sv_questions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sv_questions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sv_questions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sv_question_details"][0] = $masterParams;
				$masterTablesData["sv_question_details"][0]["masterKeys"] = array();
	$masterTablesData["sv_question_details"][0]["masterKeys"][]="id";
				$masterTablesData["sv_question_details"][0]["detailKeys"] = array();
	$masterTablesData["sv_question_details"][0]["detailKeys"][]="question_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_question_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  question_id,  text,  sortorder";
$proto0["m_strFrom"] = "FROM sv_question_details";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY question_id, sortorder";
	
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
	"m_strTable" => "sv_question_details",
	"m_srcTableName" => "sv_question_details"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_question_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "question_id",
	"m_strTable" => "sv_question_details",
	"m_srcTableName" => "sv_question_details"
));

$proto8["m_sql"] = "question_id";
$proto8["m_srcTableName"] = "sv_question_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "text",
	"m_strTable" => "sv_question_details",
	"m_srcTableName" => "sv_question_details"
));

$proto10["m_sql"] = "text";
$proto10["m_srcTableName"] = "sv_question_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_question_details",
	"m_srcTableName" => "sv_question_details"
));

$proto12["m_sql"] = "sortorder";
$proto12["m_srcTableName"] = "sv_question_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "sv_question_details";
$proto15["m_srcTableName"] = "sv_question_details";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "question_id";
$proto15["m_columns"][] = "text";
$proto15["m_columns"][] = "sortorder";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "sv_question_details";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "sv_question_details";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "question_id",
	"m_strTable" => "sv_question_details",
	"m_srcTableName" => "sv_question_details"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_question_details",
	"m_srcTableName" => "sv_question_details"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sv_question_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_question_details = createSqlQuery_sv_question_details();


	
		;

				

$tdatasv_question_details[".sqlquery"] = $queryData_sv_question_details;



include_once(getabspath("include/sv_question_details_events.php"));
$tdatasv_question_details[".hasEvents"] = true;

?>