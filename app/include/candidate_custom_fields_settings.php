<?php
$tdatacandidate_custom_fields = array();
$tdatacandidate_custom_fields[".searchableFields"] = array();
$tdatacandidate_custom_fields[".ShortName"] = "candidate_custom_fields";
$tdatacandidate_custom_fields[".OwnerID"] = "";
$tdatacandidate_custom_fields[".OriginalTable"] = "candidate_custom_fields";


$tdatacandidate_custom_fields[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacandidate_custom_fields[".originalPagesByType"] = $tdatacandidate_custom_fields[".pagesByType"];
$tdatacandidate_custom_fields[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacandidate_custom_fields[".originalPages"] = $tdatacandidate_custom_fields[".pages"];
$tdatacandidate_custom_fields[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacandidate_custom_fields[".originalDefaultPages"] = $tdatacandidate_custom_fields[".defaultPages"];

//	field labels
$fieldLabelscandidate_custom_fields = array();
$fieldToolTipscandidate_custom_fields = array();
$pageTitlescandidate_custom_fields = array();
$placeHolderscandidate_custom_fields = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidate_custom_fields["English"] = array();
	$fieldToolTipscandidate_custom_fields["English"] = array();
	$placeHolderscandidate_custom_fields["English"] = array();
	$pageTitlescandidate_custom_fields["English"] = array();
	$fieldLabelscandidate_custom_fields["English"]["CustomFieldID"] = "Custom Field ID";
	$fieldToolTipscandidate_custom_fields["English"]["CustomFieldID"] = "";
	$placeHolderscandidate_custom_fields["English"]["CustomFieldID"] = "";
	$fieldLabelscandidate_custom_fields["English"]["FieldName"] = "Field Name";
	$fieldToolTipscandidate_custom_fields["English"]["FieldName"] = "";
	$placeHolderscandidate_custom_fields["English"]["FieldName"] = "";
	if (count($fieldToolTipscandidate_custom_fields["English"]))
		$tdatacandidate_custom_fields[".isUseToolTips"] = true;
}


	$tdatacandidate_custom_fields[".NCSearch"] = true;



$tdatacandidate_custom_fields[".shortTableName"] = "candidate_custom_fields";
$tdatacandidate_custom_fields[".nSecOptions"] = 0;

$tdatacandidate_custom_fields[".mainTableOwnerID"] = "";
$tdatacandidate_custom_fields[".entityType"] = 0;
$tdatacandidate_custom_fields[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidate_custom_fields[".strOriginalTableName"] = "candidate_custom_fields";

	



$tdatacandidate_custom_fields[".showAddInPopup"] = false;

$tdatacandidate_custom_fields[".showEditInPopup"] = false;

$tdatacandidate_custom_fields[".showViewInPopup"] = false;

$tdatacandidate_custom_fields[".listAjax"] = false;
//	temporary
//$tdatacandidate_custom_fields[".listAjax"] = false;

	$tdatacandidate_custom_fields[".audit"] = false;

	$tdatacandidate_custom_fields[".locking"] = false;


$pages = $tdatacandidate_custom_fields[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidate_custom_fields[".edit"] = true;
	$tdatacandidate_custom_fields[".afterEditAction"] = 1;
	$tdatacandidate_custom_fields[".closePopupAfterEdit"] = 1;
	$tdatacandidate_custom_fields[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidate_custom_fields[".add"] = true;
$tdatacandidate_custom_fields[".afterAddAction"] = 1;
$tdatacandidate_custom_fields[".closePopupAfterAdd"] = 1;
$tdatacandidate_custom_fields[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidate_custom_fields[".list"] = true;
}



$tdatacandidate_custom_fields[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidate_custom_fields[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidate_custom_fields[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidate_custom_fields[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidate_custom_fields[".printFriendly"] = true;
}



$tdatacandidate_custom_fields[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidate_custom_fields[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidate_custom_fields[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidate_custom_fields[".isUseAjaxSuggest"] = true;



						

$tdatacandidate_custom_fields[".ajaxCodeSnippetAdded"] = false;

$tdatacandidate_custom_fields[".buttonsAdded"] = false;

$tdatacandidate_custom_fields[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidate_custom_fields[".isUseTimeForSearch"] = false;


$tdatacandidate_custom_fields[".badgeColor"] = "EDCA00";


$tdatacandidate_custom_fields[".allSearchFields"] = array();
$tdatacandidate_custom_fields[".filterFields"] = array();
$tdatacandidate_custom_fields[".requiredSearchFields"] = array();

$tdatacandidate_custom_fields[".googleLikeFields"] = array();
$tdatacandidate_custom_fields[".googleLikeFields"][] = "CustomFieldID";
$tdatacandidate_custom_fields[".googleLikeFields"][] = "FieldName";



$tdatacandidate_custom_fields[".tableType"] = "list";

$tdatacandidate_custom_fields[".printerPageOrientation"] = 0;
$tdatacandidate_custom_fields[".nPrinterPageScale"] = 100;

$tdatacandidate_custom_fields[".nPrinterSplitRecords"] = 40;

$tdatacandidate_custom_fields[".geocodingEnabled"] = false;




$tdatacandidate_custom_fields[".isDisplayLoading"] = true;






$tdatacandidate_custom_fields[".pageSize"] = 20;

$tdatacandidate_custom_fields[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacandidate_custom_fields[".strOrderBy"] = $tstrOrderBy;

$tdatacandidate_custom_fields[".orderindexes"] = array();


$tdatacandidate_custom_fields[".sqlHead"] = "SELECT CustomFieldID,  	FieldName";
$tdatacandidate_custom_fields[".sqlFrom"] = "FROM candidate_custom_fields";
$tdatacandidate_custom_fields[".sqlWhereExpr"] = "";
$tdatacandidate_custom_fields[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidate_custom_fields[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidate_custom_fields[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidate_custom_fields[".highlightSearchResults"] = true;

$tableKeyscandidate_custom_fields = array();
$tableKeyscandidate_custom_fields[] = "CustomFieldID";
$tdatacandidate_custom_fields[".Keys"] = $tableKeyscandidate_custom_fields;


$tdatacandidate_custom_fields[".hideMobileList"] = array();




//	CustomFieldID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CustomFieldID";
	$fdata["GoodName"] = "CustomFieldID";
	$fdata["ownerTable"] = "candidate_custom_fields";
	$fdata["Label"] = GetFieldLabel("candidate_custom_fields","CustomFieldID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CustomFieldID";

		$fdata["sourceSingle"] = "CustomFieldID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomFieldID";

	
	
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


	$tdatacandidate_custom_fields["CustomFieldID"] = $fdata;
		$tdatacandidate_custom_fields[".searchableFields"][] = "CustomFieldID";
//	FieldName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FieldName";
	$fdata["GoodName"] = "FieldName";
	$fdata["ownerTable"] = "candidate_custom_fields";
	$fdata["Label"] = GetFieldLabel("candidate_custom_fields","FieldName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FieldName";

		$fdata["sourceSingle"] = "FieldName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FieldName";

	
	
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


	$tdatacandidate_custom_fields["FieldName"] = $fdata;
		$tdatacandidate_custom_fields[".searchableFields"][] = "FieldName";


$tables_data["candidate_custom_fields"]=&$tdatacandidate_custom_fields;
$field_labels["candidate_custom_fields"] = &$fieldLabelscandidate_custom_fields;
$fieldToolTips["candidate_custom_fields"] = &$fieldToolTipscandidate_custom_fields;
$placeHolders["candidate_custom_fields"] = &$placeHolderscandidate_custom_fields;
$page_titles["candidate_custom_fields"] = &$pageTitlescandidate_custom_fields;


changeTextControlsToDate( "candidate_custom_fields" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidate_custom_fields"] = array();
//	candidate_custom_data
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="candidate_custom_data";
		$detailsParam["dOriginalTable"] = "candidate_custom_data";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "candidate_custom_data";
	$detailsParam["dCaptionTable"] = GetTableCaption("candidate_custom_data");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["candidate_custom_fields"][$dIndex] = $detailsParam;

	
		$detailsTablesData["candidate_custom_fields"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["candidate_custom_fields"][$dIndex]["masterKeys"][]="CustomFieldID";

				$detailsTablesData["candidate_custom_fields"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["candidate_custom_fields"][$dIndex]["detailKeys"][]="CustomFieldID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidate_custom_fields"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidate_custom_fields()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CustomFieldID,  	FieldName";
$proto0["m_strFrom"] = "FROM candidate_custom_fields";
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
	"m_strName" => "CustomFieldID",
	"m_strTable" => "candidate_custom_fields",
	"m_srcTableName" => "candidate_custom_fields"
));

$proto6["m_sql"] = "CustomFieldID";
$proto6["m_srcTableName"] = "candidate_custom_fields";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FieldName",
	"m_strTable" => "candidate_custom_fields",
	"m_srcTableName" => "candidate_custom_fields"
));

$proto8["m_sql"] = "FieldName";
$proto8["m_srcTableName"] = "candidate_custom_fields";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "candidate_custom_fields";
$proto11["m_srcTableName"] = "candidate_custom_fields";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CustomFieldID";
$proto11["m_columns"][] = "FieldName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "candidate_custom_fields";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "candidate_custom_fields";
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
$proto0["m_srcTableName"]="candidate_custom_fields";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidate_custom_fields = createSqlQuery_candidate_custom_fields();


	
																								;

		

$tdatacandidate_custom_fields[".sqlquery"] = $queryData_candidate_custom_fields;



$tdatacandidate_custom_fields[".hasEvents"] = false;

?>