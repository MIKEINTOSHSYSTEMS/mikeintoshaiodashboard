<?php
$tdatapdf_formfields = array();
$tdatapdf_formfields[".searchableFields"] = array();
$tdatapdf_formfields[".ShortName"] = "pdf_formfields";
$tdatapdf_formfields[".OwnerID"] = "";
$tdatapdf_formfields[".OriginalTable"] = "pdf_formfields";


$tdatapdf_formfields[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapdf_formfields[".originalPagesByType"] = $tdatapdf_formfields[".pagesByType"];
$tdatapdf_formfields[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapdf_formfields[".originalPages"] = $tdatapdf_formfields[".pages"];
$tdatapdf_formfields[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatapdf_formfields[".originalDefaultPages"] = $tdatapdf_formfields[".defaultPages"];

//	field labels
$fieldLabelspdf_formfields = array();
$fieldToolTipspdf_formfields = array();
$pageTitlespdf_formfields = array();
$placeHolderspdf_formfields = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_formfields["English"] = array();
	$fieldToolTipspdf_formfields["English"] = array();
	$placeHolderspdf_formfields["English"] = array();
	$pageTitlespdf_formfields["English"] = array();
	$fieldLabelspdf_formfields["English"]["id"] = "Id";
	$fieldToolTipspdf_formfields["English"]["id"] = "";
	$placeHolderspdf_formfields["English"]["id"] = "";
	$fieldLabelspdf_formfields["English"]["formid"] = "Formid";
	$fieldToolTipspdf_formfields["English"]["formid"] = "";
	$placeHolderspdf_formfields["English"]["formid"] = "";
	$fieldLabelspdf_formfields["English"]["fieldform"] = "Fieldform";
	$fieldToolTipspdf_formfields["English"]["fieldform"] = "";
	$placeHolderspdf_formfields["English"]["fieldform"] = "";
	$fieldLabelspdf_formfields["English"]["fieldsql"] = "";
	$fieldToolTipspdf_formfields["English"]["fieldsql"] = "";
	$placeHolderspdf_formfields["English"]["fieldsql"] = "";
	$fieldLabelspdf_formfields["English"]["fieldformalt"] = "PDF Form Field Name";
	$fieldToolTipspdf_formfields["English"]["fieldformalt"] = "";
	$placeHolderspdf_formfields["English"]["fieldformalt"] = "";
	if (count($fieldToolTipspdf_formfields["English"]))
		$tdatapdf_formfields[".isUseToolTips"] = true;
}


	$tdatapdf_formfields[".NCSearch"] = true;



$tdatapdf_formfields[".shortTableName"] = "pdf_formfields";
$tdatapdf_formfields[".nSecOptions"] = 0;

$tdatapdf_formfields[".mainTableOwnerID"] = "";
$tdatapdf_formfields[".entityType"] = 0;
$tdatapdf_formfields[".connId"] = "project_at_localhost";


$tdatapdf_formfields[".strOriginalTableName"] = "pdf_formfields";

	



$tdatapdf_formfields[".showAddInPopup"] = false;

$tdatapdf_formfields[".showEditInPopup"] = false;

$tdatapdf_formfields[".showViewInPopup"] = false;

$tdatapdf_formfields[".listAjax"] = false;
//	temporary
//$tdatapdf_formfields[".listAjax"] = false;

	$tdatapdf_formfields[".audit"] = false;

	$tdatapdf_formfields[".locking"] = false;


$pages = $tdatapdf_formfields[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapdf_formfields[".edit"] = true;
	$tdatapdf_formfields[".afterEditAction"] = 1;
	$tdatapdf_formfields[".closePopupAfterEdit"] = 1;
	$tdatapdf_formfields[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapdf_formfields[".add"] = true;
$tdatapdf_formfields[".afterAddAction"] = 1;
$tdatapdf_formfields[".closePopupAfterAdd"] = 1;
$tdatapdf_formfields[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapdf_formfields[".list"] = true;
}



$tdatapdf_formfields[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapdf_formfields[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapdf_formfields[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapdf_formfields[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapdf_formfields[".printFriendly"] = true;
}



$tdatapdf_formfields[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapdf_formfields[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapdf_formfields[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapdf_formfields[".isUseAjaxSuggest"] = true;



																								

$tdatapdf_formfields[".ajaxCodeSnippetAdded"] = false;

$tdatapdf_formfields[".buttonsAdded"] = false;

$tdatapdf_formfields[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapdf_formfields[".isUseTimeForSearch"] = false;


$tdatapdf_formfields[".badgeColor"] = "2f4f4f";


$tdatapdf_formfields[".allSearchFields"] = array();
$tdatapdf_formfields[".filterFields"] = array();
$tdatapdf_formfields[".requiredSearchFields"] = array();

$tdatapdf_formfields[".googleLikeFields"] = array();
$tdatapdf_formfields[".googleLikeFields"][] = "id";
$tdatapdf_formfields[".googleLikeFields"][] = "formid";
$tdatapdf_formfields[".googleLikeFields"][] = "fieldform";
$tdatapdf_formfields[".googleLikeFields"][] = "fieldsql";
$tdatapdf_formfields[".googleLikeFields"][] = "fieldformalt";



$tdatapdf_formfields[".tableType"] = "list";

$tdatapdf_formfields[".printerPageOrientation"] = 0;
$tdatapdf_formfields[".nPrinterPageScale"] = 100;

$tdatapdf_formfields[".nPrinterSplitRecords"] = 40;

$tdatapdf_formfields[".geocodingEnabled"] = false;










$tdatapdf_formfields[".pageSize"] = 50;

$tdatapdf_formfields[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id";
$tdatapdf_formfields[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_formfields[".orderindexes"] = array();
	$tdatapdf_formfields[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "id");



$tdatapdf_formfields[".sqlHead"] = "SELECT id,  formid,  fieldform,  fieldsql,  fieldformalt";
$tdatapdf_formfields[".sqlFrom"] = "FROM pdf_formfields";
$tdatapdf_formfields[".sqlWhereExpr"] = "";
$tdatapdf_formfields[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_formfields[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_formfields[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_formfields[".highlightSearchResults"] = true;

$tableKeyspdf_formfields = array();
$tableKeyspdf_formfields[] = "id";
$tdatapdf_formfields[".Keys"] = $tableKeyspdf_formfields;


$tdatapdf_formfields[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pdf_formfields";
	$fdata["Label"] = GetFieldLabel("pdf_formfields","id");
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


	$tdatapdf_formfields["id"] = $fdata;
		$tdatapdf_formfields[".searchableFields"][] = "id";
//	formid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "formid";
	$fdata["GoodName"] = "formid";
	$fdata["ownerTable"] = "pdf_formfields";
	$fdata["Label"] = GetFieldLabel("pdf_formfields","formid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "formid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formid";

	
	
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


	$tdatapdf_formfields["formid"] = $fdata;
		$tdatapdf_formfields[".searchableFields"][] = "formid";
//	fieldform
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fieldform";
	$fdata["GoodName"] = "fieldform";
	$fdata["ownerTable"] = "pdf_formfields";
	$fdata["Label"] = GetFieldLabel("pdf_formfields","fieldform");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fieldform";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldform";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatapdf_formfields["fieldform"] = $fdata;
		$tdatapdf_formfields[".searchableFields"][] = "fieldform";
//	fieldsql
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fieldsql";
	$fdata["GoodName"] = "fieldsql";
	$fdata["ownerTable"] = "pdf_formfields";
	$fdata["Label"] = GetFieldLabel("pdf_formfields","fieldsql");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fieldsql";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldsql";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatapdf_formfields["fieldsql"] = $fdata;
		$tdatapdf_formfields[".searchableFields"][] = "fieldsql";
//	fieldformalt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fieldformalt";
	$fdata["GoodName"] = "fieldformalt";
	$fdata["ownerTable"] = "pdf_formfields";
	$fdata["Label"] = GetFieldLabel("pdf_formfields","fieldformalt");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fieldformalt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldformalt";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatapdf_formfields["fieldformalt"] = $fdata;
		$tdatapdf_formfields[".searchableFields"][] = "fieldformalt";


$tables_data["pdf_formfields"]=&$tdatapdf_formfields;
$field_labels["pdf_formfields"] = &$fieldLabelspdf_formfields;
$fieldToolTips["pdf_formfields"] = &$fieldToolTipspdf_formfields;
$placeHolders["pdf_formfields"] = &$placeHolderspdf_formfields;
$page_titles["pdf_formfields"] = &$pageTitlespdf_formfields;


changeTextControlsToDate( "pdf_formfields" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pdf_formfields"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pdf_formfields"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pdf_forms";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pdf_forms";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pdf_forms";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pdf_formfields"][0] = $masterParams;
				$masterTablesData["pdf_formfields"][0]["masterKeys"] = array();
	$masterTablesData["pdf_formfields"][0]["masterKeys"][]="id";
				$masterTablesData["pdf_formfields"][0]["detailKeys"] = array();
	$masterTablesData["pdf_formfields"][0]["detailKeys"][]="formid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pdf_formfields()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  formid,  fieldform,  fieldsql,  fieldformalt";
$proto0["m_strFrom"] = "FROM pdf_formfields";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id";
	
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
	"m_strTable" => "pdf_formfields",
	"m_srcTableName" => "pdf_formfields"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pdf_formfields";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "formid",
	"m_strTable" => "pdf_formfields",
	"m_srcTableName" => "pdf_formfields"
));

$proto8["m_sql"] = "formid";
$proto8["m_srcTableName"] = "pdf_formfields";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldform",
	"m_strTable" => "pdf_formfields",
	"m_srcTableName" => "pdf_formfields"
));

$proto10["m_sql"] = "fieldform";
$proto10["m_srcTableName"] = "pdf_formfields";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldsql",
	"m_strTable" => "pdf_formfields",
	"m_srcTableName" => "pdf_formfields"
));

$proto12["m_sql"] = "fieldsql";
$proto12["m_srcTableName"] = "pdf_formfields";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldformalt",
	"m_strTable" => "pdf_formfields",
	"m_srcTableName" => "pdf_formfields"
));

$proto14["m_sql"] = "fieldformalt";
$proto14["m_srcTableName"] = "pdf_formfields";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "pdf_formfields";
$proto17["m_srcTableName"] = "pdf_formfields";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "formid";
$proto17["m_columns"][] = "fieldform";
$proto17["m_columns"][] = "fieldsql";
$proto17["m_columns"][] = "fieldformalt";
$proto17["m_columns"][] = "cboxon";
$proto17["m_columns"][] = "cboxoff";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "pdf_formfields";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "pdf_formfields";
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
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pdf_formfields",
	"m_srcTableName" => "pdf_formfields"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="pdf_formfields";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_formfields = createSqlQuery_pdf_formfields();


	
		;

					

$tdatapdf_formfields[".sqlquery"] = $queryData_pdf_formfields;



include_once(getabspath("include/pdf_formfields_events.php"));
$tdatapdf_formfields[".hasEvents"] = true;

?>