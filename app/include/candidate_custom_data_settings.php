<?php
$tdatacandidate_custom_data = array();
$tdatacandidate_custom_data[".searchableFields"] = array();
$tdatacandidate_custom_data[".ShortName"] = "candidate_custom_data";
$tdatacandidate_custom_data[".OwnerID"] = "";
$tdatacandidate_custom_data[".OriginalTable"] = "candidate_custom_data";


$tdatacandidate_custom_data[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacandidate_custom_data[".originalPagesByType"] = $tdatacandidate_custom_data[".pagesByType"];
$tdatacandidate_custom_data[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacandidate_custom_data[".originalPages"] = $tdatacandidate_custom_data[".pages"];
$tdatacandidate_custom_data[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacandidate_custom_data[".originalDefaultPages"] = $tdatacandidate_custom_data[".defaultPages"];

//	field labels
$fieldLabelscandidate_custom_data = array();
$fieldToolTipscandidate_custom_data = array();
$pageTitlescandidate_custom_data = array();
$placeHolderscandidate_custom_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidate_custom_data["English"] = array();
	$fieldToolTipscandidate_custom_data["English"] = array();
	$placeHolderscandidate_custom_data["English"] = array();
	$pageTitlescandidate_custom_data["English"] = array();
	$fieldLabelscandidate_custom_data["English"]["CustomDataID"] = "Custom Data ID";
	$fieldToolTipscandidate_custom_data["English"]["CustomDataID"] = "";
	$placeHolderscandidate_custom_data["English"]["CustomDataID"] = "";
	$fieldLabelscandidate_custom_data["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipscandidate_custom_data["English"]["CandidateID"] = "";
	$placeHolderscandidate_custom_data["English"]["CandidateID"] = "";
	$fieldLabelscandidate_custom_data["English"]["CustomFieldID"] = "Custom Field ID";
	$fieldToolTipscandidate_custom_data["English"]["CustomFieldID"] = "";
	$placeHolderscandidate_custom_data["English"]["CustomFieldID"] = "";
	$fieldLabelscandidate_custom_data["English"]["Custom_Field_Value"] = "Custom Field Value";
	$fieldToolTipscandidate_custom_data["English"]["Custom_Field_Value"] = "";
	$placeHolderscandidate_custom_data["English"]["Custom_Field_Value"] = "";
	if (count($fieldToolTipscandidate_custom_data["English"]))
		$tdatacandidate_custom_data[".isUseToolTips"] = true;
}


	$tdatacandidate_custom_data[".NCSearch"] = true;



$tdatacandidate_custom_data[".shortTableName"] = "candidate_custom_data";
$tdatacandidate_custom_data[".nSecOptions"] = 0;

$tdatacandidate_custom_data[".mainTableOwnerID"] = "";
$tdatacandidate_custom_data[".entityType"] = 0;
$tdatacandidate_custom_data[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidate_custom_data[".strOriginalTableName"] = "candidate_custom_data";

	



$tdatacandidate_custom_data[".showAddInPopup"] = false;

$tdatacandidate_custom_data[".showEditInPopup"] = false;

$tdatacandidate_custom_data[".showViewInPopup"] = false;

$tdatacandidate_custom_data[".listAjax"] = false;
//	temporary
//$tdatacandidate_custom_data[".listAjax"] = false;

	$tdatacandidate_custom_data[".audit"] = false;

	$tdatacandidate_custom_data[".locking"] = false;


$pages = $tdatacandidate_custom_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidate_custom_data[".edit"] = true;
	$tdatacandidate_custom_data[".afterEditAction"] = 1;
	$tdatacandidate_custom_data[".closePopupAfterEdit"] = 1;
	$tdatacandidate_custom_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidate_custom_data[".add"] = true;
$tdatacandidate_custom_data[".afterAddAction"] = 1;
$tdatacandidate_custom_data[".closePopupAfterAdd"] = 1;
$tdatacandidate_custom_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidate_custom_data[".list"] = true;
}



$tdatacandidate_custom_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidate_custom_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidate_custom_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidate_custom_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidate_custom_data[".printFriendly"] = true;
}



$tdatacandidate_custom_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidate_custom_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidate_custom_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidate_custom_data[".isUseAjaxSuggest"] = true;



																		

$tdatacandidate_custom_data[".ajaxCodeSnippetAdded"] = false;

$tdatacandidate_custom_data[".buttonsAdded"] = false;

$tdatacandidate_custom_data[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacandidate_custom_data[".isUseTimeForSearch"] = false;


$tdatacandidate_custom_data[".badgeColor"] = "4169e1";


$tdatacandidate_custom_data[".allSearchFields"] = array();
$tdatacandidate_custom_data[".filterFields"] = array();
$tdatacandidate_custom_data[".requiredSearchFields"] = array();

$tdatacandidate_custom_data[".googleLikeFields"] = array();
$tdatacandidate_custom_data[".googleLikeFields"][] = "CustomDataID";
$tdatacandidate_custom_data[".googleLikeFields"][] = "CandidateID";
$tdatacandidate_custom_data[".googleLikeFields"][] = "CustomFieldID";
$tdatacandidate_custom_data[".googleLikeFields"][] = "Custom_Field_Value";



$tdatacandidate_custom_data[".tableType"] = "list";

$tdatacandidate_custom_data[".printerPageOrientation"] = 0;
$tdatacandidate_custom_data[".nPrinterPageScale"] = 100;

$tdatacandidate_custom_data[".nPrinterSplitRecords"] = 40;

$tdatacandidate_custom_data[".geocodingEnabled"] = false;




$tdatacandidate_custom_data[".isDisplayLoading"] = true;






$tdatacandidate_custom_data[".pageSize"] = 20;

$tdatacandidate_custom_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacandidate_custom_data[".strOrderBy"] = $tstrOrderBy;

$tdatacandidate_custom_data[".orderindexes"] = array();


$tdatacandidate_custom_data[".sqlHead"] = "SELECT CustomDataID,  	CandidateID,  	CustomFieldID,  	Custom_Field_Value";
$tdatacandidate_custom_data[".sqlFrom"] = "FROM candidate_custom_data";
$tdatacandidate_custom_data[".sqlWhereExpr"] = "";
$tdatacandidate_custom_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidate_custom_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidate_custom_data[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidate_custom_data[".highlightSearchResults"] = true;

$tableKeyscandidate_custom_data = array();
$tableKeyscandidate_custom_data[] = "CustomDataID";
$tdatacandidate_custom_data[".Keys"] = $tableKeyscandidate_custom_data;


$tdatacandidate_custom_data[".hideMobileList"] = array();




//	CustomDataID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CustomDataID";
	$fdata["GoodName"] = "CustomDataID";
	$fdata["ownerTable"] = "candidate_custom_data";
	$fdata["Label"] = GetFieldLabel("candidate_custom_data","CustomDataID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CustomDataID";

		$fdata["sourceSingle"] = "CustomDataID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomDataID";

	
	
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


	$tdatacandidate_custom_data["CustomDataID"] = $fdata;
		$tdatacandidate_custom_data[".searchableFields"][] = "CustomDataID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidate_custom_data";
	$fdata["Label"] = GetFieldLabel("candidate_custom_data","CandidateID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CandidateID";

		$fdata["sourceSingle"] = "CandidateID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CandidateID";

	
	
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
	$edata["LookupTable"] = "candidates";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatacandidate_custom_data["CandidateID"] = $fdata;
		$tdatacandidate_custom_data[".searchableFields"][] = "CandidateID";
//	CustomFieldID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CustomFieldID";
	$fdata["GoodName"] = "CustomFieldID";
	$fdata["ownerTable"] = "candidate_custom_data";
	$fdata["Label"] = GetFieldLabel("candidate_custom_data","CustomFieldID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "candidate_custom_fields";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CustomFieldID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FieldName";

	

	
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


	$tdatacandidate_custom_data["CustomFieldID"] = $fdata;
		$tdatacandidate_custom_data[".searchableFields"][] = "CustomFieldID";
//	Custom_Field_Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Custom_Field_Value";
	$fdata["GoodName"] = "Custom_Field_Value";
	$fdata["ownerTable"] = "candidate_custom_data";
	$fdata["Label"] = GetFieldLabel("candidate_custom_data","Custom_Field_Value");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Custom_Field_Value";

		$fdata["sourceSingle"] = "Custom_Field_Value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Custom_Field_Value";

	
	
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


	$tdatacandidate_custom_data["Custom_Field_Value"] = $fdata;
		$tdatacandidate_custom_data[".searchableFields"][] = "Custom_Field_Value";


$tables_data["candidate_custom_data"]=&$tdatacandidate_custom_data;
$field_labels["candidate_custom_data"] = &$fieldLabelscandidate_custom_data;
$fieldToolTips["candidate_custom_data"] = &$fieldToolTipscandidate_custom_data;
$placeHolders["candidate_custom_data"] = &$placeHolderscandidate_custom_data;
$page_titles["candidate_custom_data"] = &$pageTitlescandidate_custom_data;


changeTextControlsToDate( "candidate_custom_data" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidate_custom_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidate_custom_data"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["candidate_custom_data"][0] = $masterParams;
				$masterTablesData["candidate_custom_data"][0]["masterKeys"] = array();
	$masterTablesData["candidate_custom_data"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["candidate_custom_data"][0]["detailKeys"] = array();
	$masterTablesData["candidate_custom_data"][0]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidate_custom_fields";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidate_custom_fields";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidate_custom_fields";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["candidate_custom_data"][1] = $masterParams;
				$masterTablesData["candidate_custom_data"][1]["masterKeys"] = array();
	$masterTablesData["candidate_custom_data"][1]["masterKeys"][]="CustomFieldID";
				$masterTablesData["candidate_custom_data"][1]["detailKeys"] = array();
	$masterTablesData["candidate_custom_data"][1]["detailKeys"][]="CustomFieldID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidate_custom_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CustomDataID,  	CandidateID,  	CustomFieldID,  	Custom_Field_Value";
$proto0["m_strFrom"] = "FROM candidate_custom_data";
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
	"m_strName" => "CustomDataID",
	"m_strTable" => "candidate_custom_data",
	"m_srcTableName" => "candidate_custom_data"
));

$proto6["m_sql"] = "CustomDataID";
$proto6["m_srcTableName"] = "candidate_custom_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "candidate_custom_data",
	"m_srcTableName" => "candidate_custom_data"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "candidate_custom_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomFieldID",
	"m_strTable" => "candidate_custom_data",
	"m_srcTableName" => "candidate_custom_data"
));

$proto10["m_sql"] = "CustomFieldID";
$proto10["m_srcTableName"] = "candidate_custom_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Custom_Field_Value",
	"m_strTable" => "candidate_custom_data",
	"m_srcTableName" => "candidate_custom_data"
));

$proto12["m_sql"] = "Custom_Field_Value";
$proto12["m_srcTableName"] = "candidate_custom_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "candidate_custom_data";
$proto15["m_srcTableName"] = "candidate_custom_data";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "CustomDataID";
$proto15["m_columns"][] = "CandidateID";
$proto15["m_columns"][] = "CustomFieldID";
$proto15["m_columns"][] = "Custom_Field_Value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "candidate_custom_data";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "candidate_custom_data";
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
$proto0["m_srcTableName"]="candidate_custom_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidate_custom_data = createSqlQuery_candidate_custom_data();


	
																								;

				

$tdatacandidate_custom_data[".sqlquery"] = $queryData_candidate_custom_data;



include_once(getabspath("include/candidate_custom_data_events.php"));
$tdatacandidate_custom_data[".hasEvents"] = true;

?>