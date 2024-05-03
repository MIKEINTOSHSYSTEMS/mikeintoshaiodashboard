<?php
$tdatasv_report = array();
$tdatasv_report[".searchableFields"] = array();
$tdatasv_report[".ShortName"] = "sv_report";
$tdatasv_report[".OwnerID"] = "";
$tdatasv_report[".OriginalTable"] = "sv_report";


$tdatasv_report[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasv_report[".originalPagesByType"] = $tdatasv_report[".pagesByType"];
$tdatasv_report[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasv_report[".originalPages"] = $tdatasv_report[".pages"];
$tdatasv_report[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasv_report[".originalDefaultPages"] = $tdatasv_report[".defaultPages"];

//	field labels
$fieldLabelssv_report = array();
$fieldToolTipssv_report = array();
$pageTitlessv_report = array();
$placeHolderssv_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_report["English"] = array();
	$fieldToolTipssv_report["English"] = array();
	$placeHolderssv_report["English"] = array();
	$pageTitlessv_report["English"] = array();
	$fieldLabelssv_report["English"]["id"] = "Id";
	$fieldToolTipssv_report["English"]["id"] = "";
	$placeHolderssv_report["English"]["id"] = "";
	$fieldLabelssv_report["English"]["created"] = "Created";
	$fieldToolTipssv_report["English"]["created"] = "";
	$placeHolderssv_report["English"]["created"] = "";
	$fieldLabelssv_report["English"]["ip"] = "Ip";
	$fieldToolTipssv_report["English"]["ip"] = "";
	$placeHolderssv_report["English"]["ip"] = "";
	$fieldLabelssv_report["English"]["sv_view"] = "Sv View";
	$fieldToolTipssv_report["English"]["sv_view"] = "";
	$placeHolderssv_report["English"]["sv_view"] = "";
	$fieldLabelssv_report["English"]["sv_export"] = "Sv Export";
	$fieldToolTipssv_report["English"]["sv_export"] = "";
	$placeHolderssv_report["English"]["sv_export"] = "";
	$fieldLabelssv_report["English"]["procent"] = "Procent";
	$fieldToolTipssv_report["English"]["procent"] = "";
	$placeHolderssv_report["English"]["procent"] = "";
	if (count($fieldToolTipssv_report["English"]))
		$tdatasv_report[".isUseToolTips"] = true;
}


	$tdatasv_report[".NCSearch"] = true;



$tdatasv_report[".shortTableName"] = "sv_report";
$tdatasv_report[".nSecOptions"] = 0;

$tdatasv_report[".mainTableOwnerID"] = "";
$tdatasv_report[".entityType"] = 1;
$tdatasv_report[".connId"] = "project_at_localhost";


$tdatasv_report[".strOriginalTableName"] = "sv_report";

	



$tdatasv_report[".showAddInPopup"] = false;

$tdatasv_report[".showEditInPopup"] = false;

$tdatasv_report[".showViewInPopup"] = false;

$tdatasv_report[".listAjax"] = false;
//	temporary
//$tdatasv_report[".listAjax"] = false;

	$tdatasv_report[".audit"] = false;

	$tdatasv_report[".locking"] = false;


$pages = $tdatasv_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_report[".edit"] = true;
	$tdatasv_report[".afterEditAction"] = 1;
	$tdatasv_report[".closePopupAfterEdit"] = 1;
	$tdatasv_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_report[".add"] = true;
$tdatasv_report[".afterAddAction"] = 1;
$tdatasv_report[".closePopupAfterAdd"] = 1;
$tdatasv_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_report[".list"] = true;
}



$tdatasv_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_report[".printFriendly"] = true;
}



$tdatasv_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_report[".isUseAjaxSuggest"] = true;



																		

$tdatasv_report[".ajaxCodeSnippetAdded"] = false;

$tdatasv_report[".buttonsAdded"] = false;

$tdatasv_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasv_report[".isUseTimeForSearch"] = false;


$tdatasv_report[".badgeColor"] = "6493EA";


$tdatasv_report[".allSearchFields"] = array();
$tdatasv_report[".filterFields"] = array();
$tdatasv_report[".requiredSearchFields"] = array();

$tdatasv_report[".googleLikeFields"] = array();
$tdatasv_report[".googleLikeFields"][] = "id";
$tdatasv_report[".googleLikeFields"][] = "created";
$tdatasv_report[".googleLikeFields"][] = "ip";
$tdatasv_report[".googleLikeFields"][] = "sv_view";
$tdatasv_report[".googleLikeFields"][] = "sv_export";
$tdatasv_report[".googleLikeFields"][] = "procent";



$tdatasv_report[".tableType"] = "list";

$tdatasv_report[".printerPageOrientation"] = 0;
$tdatasv_report[".nPrinterPageScale"] = 100;

$tdatasv_report[".nPrinterSplitRecords"] = 40;

$tdatasv_report[".geocodingEnabled"] = false;










$tdatasv_report[".pageSize"] = 20;

$tdatasv_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_report[".strOrderBy"] = $tstrOrderBy;

$tdatasv_report[".orderindexes"] = array();


$tdatasv_report[".sqlHead"] = "SELECT id,  created,  ip,  id AS sv_view,  id AS sv_export,  id AS procent";
$tdatasv_report[".sqlFrom"] = "FROM sv_survey";
$tdatasv_report[".sqlWhereExpr"] = "";
$tdatasv_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_report[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_report[".highlightSearchResults"] = true;

$tableKeyssv_report = array();
$tdatasv_report[".Keys"] = $tableKeyssv_report;


$tdatasv_report[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_survey";
	$fdata["Label"] = GetFieldLabel("sv_report","id");
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


	$tdatasv_report["id"] = $fdata;
		$tdatasv_report[".searchableFields"][] = "id";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "sv_survey";
	$fdata["Label"] = GetFieldLabel("sv_report","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasv_report["created"] = $fdata;
		$tdatasv_report[".searchableFields"][] = "created";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "sv_survey";
	$fdata["Label"] = GetFieldLabel("sv_report","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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


	$tdatasv_report["ip"] = $fdata;
		$tdatasv_report[".searchableFields"][] = "ip";
//	sv_view
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sv_view";
	$fdata["GoodName"] = "sv_view";
	$fdata["ownerTable"] = "sv_survey";
	$fdata["Label"] = GetFieldLabel("sv_report","sv_view");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatasv_report["sv_view"] = $fdata;
		$tdatasv_report[".searchableFields"][] = "sv_view";
//	sv_export
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sv_export";
	$fdata["GoodName"] = "sv_export";
	$fdata["ownerTable"] = "sv_survey";
	$fdata["Label"] = GetFieldLabel("sv_report","sv_export");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatasv_report["sv_export"] = $fdata;
		$tdatasv_report[".searchableFields"][] = "sv_export";
//	procent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "procent";
	$fdata["GoodName"] = "procent";
	$fdata["ownerTable"] = "sv_survey";
	$fdata["Label"] = GetFieldLabel("sv_report","procent");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatasv_report["procent"] = $fdata;
		$tdatasv_report[".searchableFields"][] = "procent";


$tables_data["sv_report"]=&$tdatasv_report;
$field_labels["sv_report"] = &$fieldLabelssv_report;
$fieldToolTips["sv_report"] = &$fieldToolTipssv_report;
$placeHolders["sv_report"] = &$placeHolderssv_report;
$page_titles["sv_report"] = &$pageTitlessv_report;


changeTextControlsToDate( "sv_report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  created,  ip,  id AS sv_view,  id AS sv_export,  id AS procent";
$proto0["m_strFrom"] = "FROM sv_survey";
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
	"m_strTable" => "sv_survey",
	"m_srcTableName" => "sv_report"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "sv_survey",
	"m_srcTableName" => "sv_report"
));

$proto8["m_sql"] = "created";
$proto8["m_srcTableName"] = "sv_report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "sv_survey",
	"m_srcTableName" => "sv_report"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "sv_report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sv_survey",
	"m_srcTableName" => "sv_report"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "sv_report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "sv_view";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sv_survey",
	"m_srcTableName" => "sv_report"
));

$proto14["m_sql"] = "id";
$proto14["m_srcTableName"] = "sv_report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "sv_export";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sv_survey",
	"m_srcTableName" => "sv_report"
));

$proto16["m_sql"] = "id";
$proto16["m_srcTableName"] = "sv_report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "procent";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "sv_survey";
$proto19["m_srcTableName"] = "sv_report";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "created";
$proto19["m_columns"][] = "ip";
$proto19["m_columns"][] = "lastpage";
$proto19["m_columns"][] = "hash";
$proto19["m_columns"][] = "answer";
$proto19["m_columns"][] = "submit";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "sv_survey";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "sv_report";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sv_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_report = createSqlQuery_sv_report();


	
		;

						

$tdatasv_report[".sqlquery"] = $queryData_sv_report;



include_once(getabspath("include/sv_report_events.php"));
$tdatasv_report[".hasEvents"] = true;

$query = &$queryData_sv_report;
$table = "sv_report";
// here goes EVENT_INIT_TABLE event
$query->m_fromlist[0]->m_table->m_strName = "sv_survey_".postvalue("svid");

;
unset($query);
?>