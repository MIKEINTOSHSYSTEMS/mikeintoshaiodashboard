<?php
$tdatasv_answer_options = array();
$tdatasv_answer_options[".searchableFields"] = array();
$tdatasv_answer_options[".ShortName"] = "sv_answer_options";
$tdatasv_answer_options[".OwnerID"] = "";
$tdatasv_answer_options[".OriginalTable"] = "sv_answer_options";


$tdatasv_answer_options[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatasv_answer_options[".originalPagesByType"] = $tdatasv_answer_options[".pagesByType"];
$tdatasv_answer_options[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatasv_answer_options[".originalPages"] = $tdatasv_answer_options[".pages"];
$tdatasv_answer_options[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatasv_answer_options[".originalDefaultPages"] = $tdatasv_answer_options[".defaultPages"];

//	field labels
$fieldLabelssv_answer_options = array();
$fieldToolTipssv_answer_options = array();
$pageTitlessv_answer_options = array();
$placeHolderssv_answer_options = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_answer_options["English"] = array();
	$fieldToolTipssv_answer_options["English"] = array();
	$placeHolderssv_answer_options["English"] = array();
	$pageTitlessv_answer_options["English"] = array();
	$fieldLabelssv_answer_options["English"]["id"] = "Id";
	$fieldToolTipssv_answer_options["English"]["id"] = "";
	$placeHolderssv_answer_options["English"]["id"] = "";
	$fieldLabelssv_answer_options["English"]["question_id"] = "Question Id";
	$fieldToolTipssv_answer_options["English"]["question_id"] = "";
	$placeHolderssv_answer_options["English"]["question_id"] = "";
	$fieldLabelssv_answer_options["English"]["text"] = "Text";
	$fieldToolTipssv_answer_options["English"]["text"] = "";
	$placeHolderssv_answer_options["English"]["text"] = "";
	$fieldLabelssv_answer_options["English"]["sortorder"] = "Sortorder";
	$fieldToolTipssv_answer_options["English"]["sortorder"] = "";
	$placeHolderssv_answer_options["English"]["sortorder"] = "";
	if (count($fieldToolTipssv_answer_options["English"]))
		$tdatasv_answer_options[".isUseToolTips"] = true;
}


	$tdatasv_answer_options[".NCSearch"] = true;



$tdatasv_answer_options[".shortTableName"] = "sv_answer_options";
$tdatasv_answer_options[".nSecOptions"] = 0;

$tdatasv_answer_options[".mainTableOwnerID"] = "";
$tdatasv_answer_options[".entityType"] = 1;
$tdatasv_answer_options[".connId"] = "project_at_localhost";


$tdatasv_answer_options[".strOriginalTableName"] = "sv_answer_options";

	



$tdatasv_answer_options[".showAddInPopup"] = false;

$tdatasv_answer_options[".showEditInPopup"] = false;

$tdatasv_answer_options[".showViewInPopup"] = false;

	$tdatasv_answer_options[".listAjax"] = true;
//	temporary
//$tdatasv_answer_options[".listAjax"] = false;

	$tdatasv_answer_options[".audit"] = false;

	$tdatasv_answer_options[".locking"] = false;


$pages = $tdatasv_answer_options[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_answer_options[".edit"] = true;
	$tdatasv_answer_options[".afterEditAction"] = 1;
	$tdatasv_answer_options[".closePopupAfterEdit"] = 1;
	$tdatasv_answer_options[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_answer_options[".add"] = true;
$tdatasv_answer_options[".afterAddAction"] = 1;
$tdatasv_answer_options[".closePopupAfterAdd"] = 1;
$tdatasv_answer_options[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_answer_options[".list"] = true;
}

$tdatasv_answer_options[".updateSelected"] = true;


$tdatasv_answer_options[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_answer_options[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_answer_options[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_answer_options[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_answer_options[".printFriendly"] = true;
}



$tdatasv_answer_options[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_answer_options[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_answer_options[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_answer_options[".isUseAjaxSuggest"] = true;



																										
											

$tdatasv_answer_options[".ajaxCodeSnippetAdded"] = false;

$tdatasv_answer_options[".buttonsAdded"] = true;

$tdatasv_answer_options[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasv_answer_options[".isUseTimeForSearch"] = false;


$tdatasv_answer_options[".badgeColor"] = "1E90FF";


$tdatasv_answer_options[".allSearchFields"] = array();
$tdatasv_answer_options[".filterFields"] = array();
$tdatasv_answer_options[".requiredSearchFields"] = array();

$tdatasv_answer_options[".googleLikeFields"] = array();
$tdatasv_answer_options[".googleLikeFields"][] = "id";
$tdatasv_answer_options[".googleLikeFields"][] = "question_id";
$tdatasv_answer_options[".googleLikeFields"][] = "text";
$tdatasv_answer_options[".googleLikeFields"][] = "sortorder";



$tdatasv_answer_options[".tableType"] = "list";

$tdatasv_answer_options[".printerPageOrientation"] = 0;
$tdatasv_answer_options[".nPrinterPageScale"] = 100;

$tdatasv_answer_options[".nPrinterSplitRecords"] = 40;

$tdatasv_answer_options[".geocodingEnabled"] = false;










$tdatasv_answer_options[".pageSize"] = 20;

$tdatasv_answer_options[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY question_id, sortorder";
$tdatasv_answer_options[".strOrderBy"] = $tstrOrderBy;

$tdatasv_answer_options[".orderindexes"] = array();
	$tdatasv_answer_options[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "question_id");

	$tdatasv_answer_options[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "sortorder");



$tdatasv_answer_options[".sqlHead"] = "SELECT id,  question_id,  text,  sortorder";
$tdatasv_answer_options[".sqlFrom"] = "FROM sv_answer_options";
$tdatasv_answer_options[".sqlWhereExpr"] = "";
$tdatasv_answer_options[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_answer_options[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_answer_options[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_answer_options[".highlightSearchResults"] = true;

$tableKeyssv_answer_options = array();
$tableKeyssv_answer_options[] = "id";
$tdatasv_answer_options[".Keys"] = $tableKeyssv_answer_options;


$tdatasv_answer_options[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_answer_options";
	$fdata["Label"] = GetFieldLabel("sv_answer_options","id");
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


	$tdatasv_answer_options["id"] = $fdata;
		$tdatasv_answer_options[".searchableFields"][] = "id";
//	question_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "question_id";
	$fdata["GoodName"] = "question_id";
	$fdata["ownerTable"] = "sv_answer_options";
	$fdata["Label"] = GetFieldLabel("sv_answer_options","question_id");
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


	$tdatasv_answer_options["question_id"] = $fdata;
		$tdatasv_answer_options[".searchableFields"][] = "question_id";
//	text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "text";
	$fdata["GoodName"] = "text";
	$fdata["ownerTable"] = "sv_answer_options";
	$fdata["Label"] = GetFieldLabel("sv_answer_options","text");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatasv_answer_options["text"] = $fdata;
		$tdatasv_answer_options[".searchableFields"][] = "text";
//	sortorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sortorder";
	$fdata["GoodName"] = "sortorder";
	$fdata["ownerTable"] = "sv_answer_options";
	$fdata["Label"] = GetFieldLabel("sv_answer_options","sortorder");
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
	$eventsData[] = array( "name" => "sortorder_chane_answer_options", "type" => "mouseout" );
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


	$tdatasv_answer_options["sortorder"] = $fdata;
		$tdatasv_answer_options[".searchableFields"][] = "sortorder";


$tables_data["sv_answer_options"]=&$tdatasv_answer_options;
$field_labels["sv_answer_options"] = &$fieldLabelssv_answer_options;
$fieldToolTips["sv_answer_options"] = &$fieldToolTipssv_answer_options;
$placeHolders["sv_answer_options"] = &$placeHolderssv_answer_options;
$page_titles["sv_answer_options"] = &$pageTitlessv_answer_options;


changeTextControlsToDate( "sv_answer_options" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_answer_options"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_answer_options"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="sv_questions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sv_questions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sv_questions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sv_answer_options"][0] = $masterParams;
				$masterTablesData["sv_answer_options"][0]["masterKeys"] = array();
	$masterTablesData["sv_answer_options"][0]["masterKeys"][]="id";
				$masterTablesData["sv_answer_options"][0]["detailKeys"] = array();
	$masterTablesData["sv_answer_options"][0]["detailKeys"][]="question_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_answer_options()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  question_id,  text,  sortorder";
$proto0["m_strFrom"] = "FROM sv_answer_options";
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
	"m_strTable" => "sv_answer_options",
	"m_srcTableName" => "sv_answer_options"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_answer_options";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "question_id",
	"m_strTable" => "sv_answer_options",
	"m_srcTableName" => "sv_answer_options"
));

$proto8["m_sql"] = "question_id";
$proto8["m_srcTableName"] = "sv_answer_options";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "text",
	"m_strTable" => "sv_answer_options",
	"m_srcTableName" => "sv_answer_options"
));

$proto10["m_sql"] = "text";
$proto10["m_srcTableName"] = "sv_answer_options";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_answer_options",
	"m_srcTableName" => "sv_answer_options"
));

$proto12["m_sql"] = "sortorder";
$proto12["m_srcTableName"] = "sv_answer_options";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "sv_answer_options";
$proto15["m_srcTableName"] = "sv_answer_options";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "question_id";
$proto15["m_columns"][] = "text";
$proto15["m_columns"][] = "sortorder";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "sv_answer_options";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "sv_answer_options";
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
	"m_strTable" => "sv_answer_options",
	"m_srcTableName" => "sv_answer_options"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_answer_options",
	"m_srcTableName" => "sv_answer_options"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sv_answer_options";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_answer_options = createSqlQuery_sv_answer_options();


	
		;

				

$tdatasv_answer_options[".sqlquery"] = $queryData_sv_answer_options;



include_once(getabspath("include/sv_answer_options_events.php"));
$tdatasv_answer_options[".hasEvents"] = true;

?>