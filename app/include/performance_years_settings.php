<?php
$tdataperformance_years = array();
$tdataperformance_years[".searchableFields"] = array();
$tdataperformance_years[".ShortName"] = "performance_years";
$tdataperformance_years[".OwnerID"] = "";
$tdataperformance_years[".OriginalTable"] = "performance_years";


$tdataperformance_years[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataperformance_years[".originalPagesByType"] = $tdataperformance_years[".pagesByType"];
$tdataperformance_years[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataperformance_years[".originalPages"] = $tdataperformance_years[".pages"];
$tdataperformance_years[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataperformance_years[".originalDefaultPages"] = $tdataperformance_years[".defaultPages"];

//	field labels
$fieldLabelsperformance_years = array();
$fieldToolTipsperformance_years = array();
$pageTitlesperformance_years = array();
$placeHoldersperformance_years = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperformance_years["English"] = array();
	$fieldToolTipsperformance_years["English"] = array();
	$placeHoldersperformance_years["English"] = array();
	$pageTitlesperformance_years["English"] = array();
	$fieldLabelsperformance_years["English"]["id"] = "Id";
	$fieldToolTipsperformance_years["English"]["id"] = "";
	$placeHoldersperformance_years["English"]["id"] = "";
	$fieldLabelsperformance_years["English"]["tracking_id"] = "Tracking Id";
	$fieldToolTipsperformance_years["English"]["tracking_id"] = "";
	$placeHoldersperformance_years["English"]["tracking_id"] = "";
	$fieldLabelsperformance_years["English"]["year"] = "Year";
	$fieldToolTipsperformance_years["English"]["year"] = "";
	$placeHoldersperformance_years["English"]["year"] = "";
	$fieldLabelsperformance_years["English"]["target"] = "Target";
	$fieldToolTipsperformance_years["English"]["target"] = "";
	$placeHoldersperformance_years["English"]["target"] = "";
	$fieldLabelsperformance_years["English"]["actual"] = "Actual";
	$fieldToolTipsperformance_years["English"]["actual"] = "";
	$placeHoldersperformance_years["English"]["actual"] = "";
	if (count($fieldToolTipsperformance_years["English"]))
		$tdataperformance_years[".isUseToolTips"] = true;
}


	$tdataperformance_years[".NCSearch"] = true;



$tdataperformance_years[".shortTableName"] = "performance_years";
$tdataperformance_years[".nSecOptions"] = 0;

$tdataperformance_years[".mainTableOwnerID"] = "";
$tdataperformance_years[".entityType"] = 0;
$tdataperformance_years[".connId"] = "deredevatderejadevmerqconsulta";


$tdataperformance_years[".strOriginalTableName"] = "performance_years";

	



$tdataperformance_years[".showAddInPopup"] = false;

$tdataperformance_years[".showEditInPopup"] = false;

$tdataperformance_years[".showViewInPopup"] = false;

$tdataperformance_years[".listAjax"] = false;
//	temporary
//$tdataperformance_years[".listAjax"] = false;

	$tdataperformance_years[".audit"] = false;

	$tdataperformance_years[".locking"] = false;


$pages = $tdataperformance_years[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperformance_years[".edit"] = true;
	$tdataperformance_years[".afterEditAction"] = 1;
	$tdataperformance_years[".closePopupAfterEdit"] = 1;
	$tdataperformance_years[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperformance_years[".add"] = true;
$tdataperformance_years[".afterAddAction"] = 1;
$tdataperformance_years[".closePopupAfterAdd"] = 1;
$tdataperformance_years[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperformance_years[".list"] = true;
}



$tdataperformance_years[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperformance_years[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperformance_years[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperformance_years[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperformance_years[".printFriendly"] = true;
}



$tdataperformance_years[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperformance_years[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperformance_years[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperformance_years[".isUseAjaxSuggest"] = true;



						

$tdataperformance_years[".ajaxCodeSnippetAdded"] = false;

$tdataperformance_years[".buttonsAdded"] = false;

$tdataperformance_years[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperformance_years[".isUseTimeForSearch"] = false;


$tdataperformance_years[".badgeColor"] = "3CB371";


$tdataperformance_years[".allSearchFields"] = array();
$tdataperformance_years[".filterFields"] = array();
$tdataperformance_years[".requiredSearchFields"] = array();

$tdataperformance_years[".googleLikeFields"] = array();
$tdataperformance_years[".googleLikeFields"][] = "id";
$tdataperformance_years[".googleLikeFields"][] = "tracking_id";
$tdataperformance_years[".googleLikeFields"][] = "year";
$tdataperformance_years[".googleLikeFields"][] = "target";
$tdataperformance_years[".googleLikeFields"][] = "actual";



$tdataperformance_years[".tableType"] = "list";

$tdataperformance_years[".printerPageOrientation"] = 0;
$tdataperformance_years[".nPrinterPageScale"] = 100;

$tdataperformance_years[".nPrinterSplitRecords"] = 40;

$tdataperformance_years[".geocodingEnabled"] = false;




$tdataperformance_years[".isDisplayLoading"] = true;






$tdataperformance_years[".pageSize"] = 20;

$tdataperformance_years[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataperformance_years[".strOrderBy"] = $tstrOrderBy;

$tdataperformance_years[".orderindexes"] = array();


$tdataperformance_years[".sqlHead"] = "SELECT id,  	tracking_id,  	`year`,  	target,  	actual";
$tdataperformance_years[".sqlFrom"] = "FROM performance_years";
$tdataperformance_years[".sqlWhereExpr"] = "";
$tdataperformance_years[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperformance_years[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperformance_years[".arrGroupsPerPage"] = $arrGPP;

$tdataperformance_years[".highlightSearchResults"] = true;

$tableKeysperformance_years = array();
$tableKeysperformance_years[] = "id";
$tdataperformance_years[".Keys"] = $tableKeysperformance_years;


$tdataperformance_years[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_years","id");
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


	$tdataperformance_years["id"] = $fdata;
		$tdataperformance_years[".searchableFields"][] = "id";
//	tracking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tracking_id";
	$fdata["GoodName"] = "tracking_id";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_years","tracking_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tracking_id";

		$fdata["sourceSingle"] = "tracking_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tracking_id";

	
	
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
	$edata["LookupTable"] = "performance_tracking";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "tracking_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tracking_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataperformance_years["tracking_id"] = $fdata;
		$tdataperformance_years[".searchableFields"][] = "tracking_id";
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_years","year");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "year";

		$fdata["sourceSingle"] = "year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`year`";

	
	
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


	$tdataperformance_years["year"] = $fdata;
		$tdataperformance_years[".searchableFields"][] = "year";
//	target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "target";
	$fdata["GoodName"] = "target";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_years","target");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "target";

		$fdata["sourceSingle"] = "target";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "target";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataperformance_years["target"] = $fdata;
		$tdataperformance_years[".searchableFields"][] = "target";
//	actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actual";
	$fdata["GoodName"] = "actual";
	$fdata["ownerTable"] = "performance_years";
	$fdata["Label"] = GetFieldLabel("performance_years","actual");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "actual";

		$fdata["sourceSingle"] = "actual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataperformance_years["actual"] = $fdata;
		$tdataperformance_years[".searchableFields"][] = "actual";


$tables_data["performance_years"]=&$tdataperformance_years;
$field_labels["performance_years"] = &$fieldLabelsperformance_years;
$fieldToolTips["performance_years"] = &$fieldToolTipsperformance_years;
$placeHolders["performance_years"] = &$placeHoldersperformance_years;
$page_titles["performance_years"] = &$pageTitlesperformance_years;


changeTextControlsToDate( "performance_years" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["performance_years"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["performance_years"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="performance_tracking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="performance_tracking";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "performance_tracking";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["performance_years"][0] = $masterParams;
				$masterTablesData["performance_years"][0]["masterKeys"] = array();
	$masterTablesData["performance_years"][0]["masterKeys"][]="tracking_id";
				$masterTablesData["performance_years"][0]["detailKeys"] = array();
	$masterTablesData["performance_years"][0]["detailKeys"][]="tracking_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_performance_years()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	tracking_id,  	`year`,  	target,  	actual";
$proto0["m_strFrom"] = "FROM performance_years";
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
	"m_strTable" => "performance_years",
	"m_srcTableName" => "performance_years"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "performance_years";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tracking_id",
	"m_strTable" => "performance_years",
	"m_srcTableName" => "performance_years"
));

$proto8["m_sql"] = "tracking_id";
$proto8["m_srcTableName"] = "performance_years";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "performance_years",
	"m_srcTableName" => "performance_years"
));

$proto10["m_sql"] = "`year`";
$proto10["m_srcTableName"] = "performance_years";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "target",
	"m_strTable" => "performance_years",
	"m_srcTableName" => "performance_years"
));

$proto12["m_sql"] = "target";
$proto12["m_srcTableName"] = "performance_years";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actual",
	"m_strTable" => "performance_years",
	"m_srcTableName" => "performance_years"
));

$proto14["m_sql"] = "actual";
$proto14["m_srcTableName"] = "performance_years";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "performance_years";
$proto17["m_srcTableName"] = "performance_years";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "tracking_id";
$proto17["m_columns"][] = "year";
$proto17["m_columns"][] = "target";
$proto17["m_columns"][] = "actual";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "performance_years";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "performance_years";
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
$proto0["m_srcTableName"]="performance_years";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_performance_years = createSqlQuery_performance_years();


	
																								;

					

$tdataperformance_years[".sqlquery"] = $queryData_performance_years;



$tdataperformance_years[".hasEvents"] = false;

?>