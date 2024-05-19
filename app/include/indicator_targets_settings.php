<?php
$tdataindicator_targets = array();
$tdataindicator_targets[".searchableFields"] = array();
$tdataindicator_targets[".ShortName"] = "indicator_targets";
$tdataindicator_targets[".OwnerID"] = "";
$tdataindicator_targets[".OriginalTable"] = "indicator_targets";


$tdataindicator_targets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataindicator_targets[".originalPagesByType"] = $tdataindicator_targets[".pagesByType"];
$tdataindicator_targets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataindicator_targets[".originalPages"] = $tdataindicator_targets[".pages"];
$tdataindicator_targets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataindicator_targets[".originalDefaultPages"] = $tdataindicator_targets[".defaultPages"];

//	field labels
$fieldLabelsindicator_targets = array();
$fieldToolTipsindicator_targets = array();
$pageTitlesindicator_targets = array();
$placeHoldersindicator_targets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindicator_targets["English"] = array();
	$fieldToolTipsindicator_targets["English"] = array();
	$placeHoldersindicator_targets["English"] = array();
	$pageTitlesindicator_targets["English"] = array();
	$fieldLabelsindicator_targets["English"]["IndicatorID"] = "Indicator ID";
	$fieldToolTipsindicator_targets["English"]["IndicatorID"] = "";
	$placeHoldersindicator_targets["English"]["IndicatorID"] = "";
	$fieldLabelsindicator_targets["English"]["IndicatorName"] = "Indicator Name";
	$fieldToolTipsindicator_targets["English"]["IndicatorName"] = "";
	$placeHoldersindicator_targets["English"]["IndicatorName"] = "";
	$fieldLabelsindicator_targets["English"]["IndicatorDescription"] = "Indicator Description";
	$fieldToolTipsindicator_targets["English"]["IndicatorDescription"] = "";
	$placeHoldersindicator_targets["English"]["IndicatorDescription"] = "";
	$fieldLabelsindicator_targets["English"]["IndicatorTarget"] = "Indicator Target";
	$fieldToolTipsindicator_targets["English"]["IndicatorTarget"] = "";
	$placeHoldersindicator_targets["English"]["IndicatorTarget"] = "";
	$fieldLabelsindicator_targets["English"]["IndicatorValue"] = "Indicator Value";
	$fieldToolTipsindicator_targets["English"]["IndicatorValue"] = "";
	$placeHoldersindicator_targets["English"]["IndicatorValue"] = "";
	if (count($fieldToolTipsindicator_targets["English"]))
		$tdataindicator_targets[".isUseToolTips"] = true;
}


	$tdataindicator_targets[".NCSearch"] = true;



$tdataindicator_targets[".shortTableName"] = "indicator_targets";
$tdataindicator_targets[".nSecOptions"] = 0;

$tdataindicator_targets[".mainTableOwnerID"] = "";
$tdataindicator_targets[".entityType"] = 0;
$tdataindicator_targets[".connId"] = "deredevatderejadevmerqconsulta";


$tdataindicator_targets[".strOriginalTableName"] = "indicator_targets";

	



$tdataindicator_targets[".showAddInPopup"] = false;

$tdataindicator_targets[".showEditInPopup"] = false;

$tdataindicator_targets[".showViewInPopup"] = false;

$tdataindicator_targets[".listAjax"] = false;
//	temporary
//$tdataindicator_targets[".listAjax"] = false;

	$tdataindicator_targets[".audit"] = false;

	$tdataindicator_targets[".locking"] = false;


$pages = $tdataindicator_targets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicator_targets[".edit"] = true;
	$tdataindicator_targets[".afterEditAction"] = 1;
	$tdataindicator_targets[".closePopupAfterEdit"] = 1;
	$tdataindicator_targets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicator_targets[".add"] = true;
$tdataindicator_targets[".afterAddAction"] = 1;
$tdataindicator_targets[".closePopupAfterAdd"] = 1;
$tdataindicator_targets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicator_targets[".list"] = true;
}



$tdataindicator_targets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicator_targets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicator_targets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicator_targets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicator_targets[".printFriendly"] = true;
}



$tdataindicator_targets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicator_targets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicator_targets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicator_targets[".isUseAjaxSuggest"] = true;



			

$tdataindicator_targets[".ajaxCodeSnippetAdded"] = false;

$tdataindicator_targets[".buttonsAdded"] = false;

$tdataindicator_targets[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicator_targets[".isUseTimeForSearch"] = false;


$tdataindicator_targets[".badgeColor"] = "6493EA";


$tdataindicator_targets[".allSearchFields"] = array();
$tdataindicator_targets[".filterFields"] = array();
$tdataindicator_targets[".requiredSearchFields"] = array();

$tdataindicator_targets[".googleLikeFields"] = array();
$tdataindicator_targets[".googleLikeFields"][] = "IndicatorID";
$tdataindicator_targets[".googleLikeFields"][] = "IndicatorName";
$tdataindicator_targets[".googleLikeFields"][] = "IndicatorDescription";
$tdataindicator_targets[".googleLikeFields"][] = "IndicatorValue";
$tdataindicator_targets[".googleLikeFields"][] = "IndicatorTarget";



$tdataindicator_targets[".tableType"] = "list";

$tdataindicator_targets[".printerPageOrientation"] = 0;
$tdataindicator_targets[".nPrinterPageScale"] = 100;

$tdataindicator_targets[".nPrinterSplitRecords"] = 40;

$tdataindicator_targets[".geocodingEnabled"] = false;




$tdataindicator_targets[".isDisplayLoading"] = true;






$tdataindicator_targets[".pageSize"] = 20;

$tdataindicator_targets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindicator_targets[".strOrderBy"] = $tstrOrderBy;

$tdataindicator_targets[".orderindexes"] = array();


$tdataindicator_targets[".sqlHead"] = "SELECT IndicatorID,  	IndicatorName,  	IndicatorDescription,  	IndicatorValue,  	IndicatorTarget";
$tdataindicator_targets[".sqlFrom"] = "FROM indicator_targets";
$tdataindicator_targets[".sqlWhereExpr"] = "";
$tdataindicator_targets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindicator_targets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicator_targets[".arrGroupsPerPage"] = $arrGPP;

$tdataindicator_targets[".highlightSearchResults"] = true;

$tableKeysindicator_targets = array();
$tableKeysindicator_targets[] = "IndicatorID";
$tdataindicator_targets[".Keys"] = $tableKeysindicator_targets;


$tdataindicator_targets[".hideMobileList"] = array();




//	IndicatorID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IndicatorID";
	$fdata["GoodName"] = "IndicatorID";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets","IndicatorID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IndicatorID";

		$fdata["sourceSingle"] = "IndicatorID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorID";

	
	
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


	$tdataindicator_targets["IndicatorID"] = $fdata;
		$tdataindicator_targets[".searchableFields"][] = "IndicatorID";
//	IndicatorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IndicatorName";
	$fdata["GoodName"] = "IndicatorName";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets","IndicatorName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IndicatorName";

		$fdata["sourceSingle"] = "IndicatorName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorName";

	
	
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


	$tdataindicator_targets["IndicatorName"] = $fdata;
		$tdataindicator_targets[".searchableFields"][] = "IndicatorName";
//	IndicatorDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IndicatorDescription";
	$fdata["GoodName"] = "IndicatorDescription";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets","IndicatorDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IndicatorDescription";

		$fdata["sourceSingle"] = "IndicatorDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorDescription";

	
	
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


	$tdataindicator_targets["IndicatorDescription"] = $fdata;
		$tdataindicator_targets[".searchableFields"][] = "IndicatorDescription";
//	IndicatorValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IndicatorValue";
	$fdata["GoodName"] = "IndicatorValue";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets","IndicatorValue");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IndicatorValue";

		$fdata["sourceSingle"] = "IndicatorValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorValue";

	
	
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


	$tdataindicator_targets["IndicatorValue"] = $fdata;
		$tdataindicator_targets[".searchableFields"][] = "IndicatorValue";
//	IndicatorTarget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IndicatorTarget";
	$fdata["GoodName"] = "IndicatorTarget";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets","IndicatorTarget");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IndicatorTarget";

		$fdata["sourceSingle"] = "IndicatorTarget";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorTarget";

	
	
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


	$tdataindicator_targets["IndicatorTarget"] = $fdata;
		$tdataindicator_targets[".searchableFields"][] = "IndicatorTarget";


$tables_data["indicator_targets"]=&$tdataindicator_targets;
$field_labels["indicator_targets"] = &$fieldLabelsindicator_targets;
$fieldToolTips["indicator_targets"] = &$fieldToolTipsindicator_targets;
$placeHolders["indicator_targets"] = &$placeHoldersindicator_targets;
$page_titles["indicator_targets"] = &$pageTitlesindicator_targets;


changeTextControlsToDate( "indicator_targets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["indicator_targets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["indicator_targets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_indicator_targets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IndicatorID,  	IndicatorName,  	IndicatorDescription,  	IndicatorValue,  	IndicatorTarget";
$proto0["m_strFrom"] = "FROM indicator_targets";
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
	"m_strName" => "IndicatorID",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets"
));

$proto6["m_sql"] = "IndicatorID";
$proto6["m_srcTableName"] = "indicator_targets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorName",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets"
));

$proto8["m_sql"] = "IndicatorName";
$proto8["m_srcTableName"] = "indicator_targets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorDescription",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets"
));

$proto10["m_sql"] = "IndicatorDescription";
$proto10["m_srcTableName"] = "indicator_targets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorValue",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets"
));

$proto12["m_sql"] = "IndicatorValue";
$proto12["m_srcTableName"] = "indicator_targets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorTarget",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets"
));

$proto14["m_sql"] = "IndicatorTarget";
$proto14["m_srcTableName"] = "indicator_targets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "indicator_targets";
$proto17["m_srcTableName"] = "indicator_targets";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IndicatorID";
$proto17["m_columns"][] = "IndicatorName";
$proto17["m_columns"][] = "IndicatorDescription";
$proto17["m_columns"][] = "IndicatorValue";
$proto17["m_columns"][] = "IndicatorTarget";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "indicator_targets";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "indicator_targets";
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
$proto0["m_srcTableName"]="indicator_targets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indicator_targets = createSqlQuery_indicator_targets();


	
																								;

					

$tdataindicator_targets[".sqlquery"] = $queryData_indicator_targets;



include_once(getabspath("include/indicator_targets_events.php"));
$tdataindicator_targets[".hasEvents"] = true;

?>