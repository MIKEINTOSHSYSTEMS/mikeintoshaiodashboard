<?php
$tdatasv_scenarios = array();
$tdatasv_scenarios[".searchableFields"] = array();
$tdatasv_scenarios[".ShortName"] = "sv_scenarios";
$tdatasv_scenarios[".OwnerID"] = "";
$tdatasv_scenarios[".OriginalTable"] = "sv_scenarios";


$tdatasv_scenarios[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatasv_scenarios[".originalPagesByType"] = $tdatasv_scenarios[".pagesByType"];
$tdatasv_scenarios[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatasv_scenarios[".originalPages"] = $tdatasv_scenarios[".pages"];
$tdatasv_scenarios[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatasv_scenarios[".originalDefaultPages"] = $tdatasv_scenarios[".defaultPages"];

//	field labels
$fieldLabelssv_scenarios = array();
$fieldToolTipssv_scenarios = array();
$pageTitlessv_scenarios = array();
$placeHolderssv_scenarios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_scenarios["English"] = array();
	$fieldToolTipssv_scenarios["English"] = array();
	$placeHolderssv_scenarios["English"] = array();
	$pageTitlessv_scenarios["English"] = array();
	$fieldLabelssv_scenarios["English"]["id"] = "Id";
	$fieldToolTipssv_scenarios["English"]["id"] = "";
	$placeHolderssv_scenarios["English"]["id"] = "";
	$fieldLabelssv_scenarios["English"]["qid"] = "Qid";
	$fieldToolTipssv_scenarios["English"]["qid"] = "";
	$placeHolderssv_scenarios["English"]["qid"] = "";
	$fieldLabelssv_scenarios["English"]["quest"] = "Question";
	$fieldToolTipssv_scenarios["English"]["quest"] = "";
	$placeHolderssv_scenarios["English"]["quest"] = "";
	$fieldLabelssv_scenarios["English"]["condition"] = "Condition";
	$fieldToolTipssv_scenarios["English"]["condition"] = "";
	$placeHolderssv_scenarios["English"]["condition"] = "";
	$fieldLabelssv_scenarios["English"]["cond_value"] = "Value";
	$fieldToolTipssv_scenarios["English"]["cond_value"] = "";
	$placeHolderssv_scenarios["English"]["cond_value"] = "";
	if (count($fieldToolTipssv_scenarios["English"]))
		$tdatasv_scenarios[".isUseToolTips"] = true;
}


	$tdatasv_scenarios[".NCSearch"] = true;



$tdatasv_scenarios[".shortTableName"] = "sv_scenarios";
$tdatasv_scenarios[".nSecOptions"] = 0;

$tdatasv_scenarios[".mainTableOwnerID"] = "";
$tdatasv_scenarios[".entityType"] = 1;
$tdatasv_scenarios[".connId"] = "project_at_localhost";


$tdatasv_scenarios[".strOriginalTableName"] = "sv_scenarios";

	



$tdatasv_scenarios[".showAddInPopup"] = false;

$tdatasv_scenarios[".showEditInPopup"] = false;

$tdatasv_scenarios[".showViewInPopup"] = false;

$tdatasv_scenarios[".listAjax"] = false;
//	temporary
//$tdatasv_scenarios[".listAjax"] = false;

	$tdatasv_scenarios[".audit"] = false;

	$tdatasv_scenarios[".locking"] = false;


$pages = $tdatasv_scenarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_scenarios[".edit"] = true;
	$tdatasv_scenarios[".afterEditAction"] = 1;
	$tdatasv_scenarios[".closePopupAfterEdit"] = 1;
	$tdatasv_scenarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_scenarios[".add"] = true;
$tdatasv_scenarios[".afterAddAction"] = 1;
$tdatasv_scenarios[".closePopupAfterAdd"] = 1;
$tdatasv_scenarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_scenarios[".list"] = true;
}

$tdatasv_scenarios[".updateSelected"] = true;


$tdatasv_scenarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_scenarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_scenarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_scenarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_scenarios[".printFriendly"] = true;
}



$tdatasv_scenarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_scenarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_scenarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_scenarios[".isUseAjaxSuggest"] = false;



																																				

$tdatasv_scenarios[".ajaxCodeSnippetAdded"] = false;

$tdatasv_scenarios[".buttonsAdded"] = false;

$tdatasv_scenarios[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasv_scenarios[".isUseTimeForSearch"] = false;


$tdatasv_scenarios[".badgeColor"] = "5F9EA0";


$tdatasv_scenarios[".allSearchFields"] = array();
$tdatasv_scenarios[".filterFields"] = array();
$tdatasv_scenarios[".requiredSearchFields"] = array();




$tdatasv_scenarios[".tableType"] = "list";

$tdatasv_scenarios[".printerPageOrientation"] = 0;
$tdatasv_scenarios[".nPrinterPageScale"] = 100;

$tdatasv_scenarios[".nPrinterSplitRecords"] = 40;

$tdatasv_scenarios[".geocodingEnabled"] = false;










$tdatasv_scenarios[".pageSize"] = 20;

$tdatasv_scenarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_scenarios[".strOrderBy"] = $tstrOrderBy;

$tdatasv_scenarios[".orderindexes"] = array();


$tdatasv_scenarios[".sqlHead"] = "SELECT id,  qid,  quest,  `condition`,  cond_value";
$tdatasv_scenarios[".sqlFrom"] = "FROM sv_scenarios";
$tdatasv_scenarios[".sqlWhereExpr"] = "";
$tdatasv_scenarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_scenarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_scenarios[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssv_scenarios = array();
$tableKeyssv_scenarios[] = "id";
$tdatasv_scenarios[".Keys"] = $tableKeyssv_scenarios;


$tdatasv_scenarios[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_scenarios";
	$fdata["Label"] = GetFieldLabel("sv_scenarios","id");
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


	$tdatasv_scenarios["id"] = $fdata;
		$tdatasv_scenarios[".searchableFields"][] = "id";
//	qid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qid";
	$fdata["GoodName"] = "qid";
	$fdata["ownerTable"] = "sv_scenarios";
	$fdata["Label"] = GetFieldLabel("sv_scenarios","qid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qid";

	
	
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


	$tdatasv_scenarios["qid"] = $fdata;
		$tdatasv_scenarios[".searchableFields"][] = "qid";
//	quest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "quest";
	$fdata["GoodName"] = "quest";
	$fdata["ownerTable"] = "sv_scenarios";
	$fdata["Label"] = GetFieldLabel("sv_scenarios","quest");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "quest";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quest";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sv_questions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "question";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatasv_scenarios["quest"] = $fdata;
		$tdatasv_scenarios[".searchableFields"][] = "quest";
//	condition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "condition";
	$fdata["GoodName"] = "condition";
	$fdata["ownerTable"] = "sv_scenarios";
	$fdata["Label"] = GetFieldLabel("sv_scenarios","condition");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "condition";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`condition`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "sv_conditions";
	$edata["LookupConnId"] = "project_at_localhost";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "condition";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "condition";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatasv_scenarios["condition"] = $fdata;
		$tdatasv_scenarios[".searchableFields"][] = "condition";
//	cond_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cond_value";
	$fdata["GoodName"] = "cond_value";
	$fdata["ownerTable"] = "sv_scenarios";
	$fdata["Label"] = GetFieldLabel("sv_scenarios","cond_value");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cond_value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cond_value";

	
	
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


	$tdatasv_scenarios["cond_value"] = $fdata;
		$tdatasv_scenarios[".searchableFields"][] = "cond_value";


$tables_data["sv_scenarios"]=&$tdatasv_scenarios;
$field_labels["sv_scenarios"] = &$fieldLabelssv_scenarios;
$fieldToolTips["sv_scenarios"] = &$fieldToolTipssv_scenarios;
$placeHolders["sv_scenarios"] = &$placeHolderssv_scenarios;
$page_titles["sv_scenarios"] = &$pageTitlessv_scenarios;


changeTextControlsToDate( "sv_scenarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_scenarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_scenarios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="sv_questions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sv_questions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sv_questions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sv_scenarios"][0] = $masterParams;
				$masterTablesData["sv_scenarios"][0]["masterKeys"] = array();
	$masterTablesData["sv_scenarios"][0]["masterKeys"][]="id";
				$masterTablesData["sv_scenarios"][0]["detailKeys"] = array();
	$masterTablesData["sv_scenarios"][0]["detailKeys"][]="qid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_scenarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  qid,  quest,  `condition`,  cond_value";
$proto0["m_strFrom"] = "FROM sv_scenarios";
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
	"m_strTable" => "sv_scenarios",
	"m_srcTableName" => "sv_scenarios"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_scenarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qid",
	"m_strTable" => "sv_scenarios",
	"m_srcTableName" => "sv_scenarios"
));

$proto8["m_sql"] = "qid";
$proto8["m_srcTableName"] = "sv_scenarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "quest",
	"m_strTable" => "sv_scenarios",
	"m_srcTableName" => "sv_scenarios"
));

$proto10["m_sql"] = "quest";
$proto10["m_srcTableName"] = "sv_scenarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "condition",
	"m_strTable" => "sv_scenarios",
	"m_srcTableName" => "sv_scenarios"
));

$proto12["m_sql"] = "`condition`";
$proto12["m_srcTableName"] = "sv_scenarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cond_value",
	"m_strTable" => "sv_scenarios",
	"m_srcTableName" => "sv_scenarios"
));

$proto14["m_sql"] = "cond_value";
$proto14["m_srcTableName"] = "sv_scenarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "sv_scenarios";
$proto17["m_srcTableName"] = "sv_scenarios";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "qid";
$proto17["m_columns"][] = "quest";
$proto17["m_columns"][] = "condition";
$proto17["m_columns"][] = "cond_value";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "sv_scenarios";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "sv_scenarios";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sv_scenarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_scenarios = createSqlQuery_sv_scenarios();


	
		;

					

$tdatasv_scenarios[".sqlquery"] = $queryData_sv_scenarios;



include_once(getabspath("include/sv_scenarios_events.php"));
$tdatasv_scenarios[".hasEvents"] = true;

?>