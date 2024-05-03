<?php
$tdatapdf_sqlfields = array();
$tdatapdf_sqlfields[".searchableFields"] = array();
$tdatapdf_sqlfields[".ShortName"] = "pdf_sqlfields";
$tdatapdf_sqlfields[".OwnerID"] = "";
$tdatapdf_sqlfields[".OriginalTable"] = "pdf_sqlfields";


$tdatapdf_sqlfields[".pagesByType"] = my_json_decode( "{}" );
$tdatapdf_sqlfields[".originalPagesByType"] = $tdatapdf_sqlfields[".pagesByType"];
$tdatapdf_sqlfields[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatapdf_sqlfields[".originalPages"] = $tdatapdf_sqlfields[".pages"];
$tdatapdf_sqlfields[".defaultPages"] = my_json_decode( "{}" );
$tdatapdf_sqlfields[".originalDefaultPages"] = $tdatapdf_sqlfields[".defaultPages"];

//	field labels
$fieldLabelspdf_sqlfields = array();
$fieldToolTipspdf_sqlfields = array();
$pageTitlespdf_sqlfields = array();
$placeHolderspdf_sqlfields = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_sqlfields["English"] = array();
	$fieldToolTipspdf_sqlfields["English"] = array();
	$placeHolderspdf_sqlfields["English"] = array();
	$pageTitlespdf_sqlfields["English"] = array();
	$fieldLabelspdf_sqlfields["English"]["id"] = "Id";
	$fieldToolTipspdf_sqlfields["English"]["id"] = "";
	$placeHolderspdf_sqlfields["English"]["id"] = "";
	$fieldLabelspdf_sqlfields["English"]["formid"] = "Formid";
	$fieldToolTipspdf_sqlfields["English"]["formid"] = "";
	$placeHolderspdf_sqlfields["English"]["formid"] = "";
	$fieldLabelspdf_sqlfields["English"]["sqlfield"] = "Sqlfield";
	$fieldToolTipspdf_sqlfields["English"]["sqlfield"] = "";
	$placeHolderspdf_sqlfields["English"]["sqlfield"] = "";
	if (count($fieldToolTipspdf_sqlfields["English"]))
		$tdatapdf_sqlfields[".isUseToolTips"] = true;
}


	$tdatapdf_sqlfields[".NCSearch"] = true;



$tdatapdf_sqlfields[".shortTableName"] = "pdf_sqlfields";
$tdatapdf_sqlfields[".nSecOptions"] = 0;

$tdatapdf_sqlfields[".mainTableOwnerID"] = "";
$tdatapdf_sqlfields[".entityType"] = 0;
$tdatapdf_sqlfields[".connId"] = "project_at_localhost";


$tdatapdf_sqlfields[".strOriginalTableName"] = "pdf_sqlfields";

	



$tdatapdf_sqlfields[".showAddInPopup"] = false;

$tdatapdf_sqlfields[".showEditInPopup"] = false;

$tdatapdf_sqlfields[".showViewInPopup"] = false;

$tdatapdf_sqlfields[".listAjax"] = false;
//	temporary
//$tdatapdf_sqlfields[".listAjax"] = false;

	$tdatapdf_sqlfields[".audit"] = false;

	$tdatapdf_sqlfields[".locking"] = false;


$pages = $tdatapdf_sqlfields[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapdf_sqlfields[".edit"] = true;
	$tdatapdf_sqlfields[".afterEditAction"] = 1;
	$tdatapdf_sqlfields[".closePopupAfterEdit"] = 1;
	$tdatapdf_sqlfields[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapdf_sqlfields[".add"] = true;
$tdatapdf_sqlfields[".afterAddAction"] = 1;
$tdatapdf_sqlfields[".closePopupAfterAdd"] = 1;
$tdatapdf_sqlfields[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapdf_sqlfields[".list"] = true;
}



$tdatapdf_sqlfields[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapdf_sqlfields[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapdf_sqlfields[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapdf_sqlfields[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapdf_sqlfields[".printFriendly"] = true;
}



$tdatapdf_sqlfields[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapdf_sqlfields[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapdf_sqlfields[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapdf_sqlfields[".isUseAjaxSuggest"] = true;



												

$tdatapdf_sqlfields[".ajaxCodeSnippetAdded"] = false;

$tdatapdf_sqlfields[".buttonsAdded"] = false;

$tdatapdf_sqlfields[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf_sqlfields[".isUseTimeForSearch"] = false;


$tdatapdf_sqlfields[".badgeColor"] = "E07878";


$tdatapdf_sqlfields[".allSearchFields"] = array();
$tdatapdf_sqlfields[".filterFields"] = array();
$tdatapdf_sqlfields[".requiredSearchFields"] = array();

$tdatapdf_sqlfields[".googleLikeFields"] = array();
$tdatapdf_sqlfields[".googleLikeFields"][] = "id";
$tdatapdf_sqlfields[".googleLikeFields"][] = "formid";
$tdatapdf_sqlfields[".googleLikeFields"][] = "sqlfield";



$tdatapdf_sqlfields[".tableType"] = "list";

$tdatapdf_sqlfields[".printerPageOrientation"] = 0;
$tdatapdf_sqlfields[".nPrinterPageScale"] = 100;

$tdatapdf_sqlfields[".nPrinterSplitRecords"] = 40;

$tdatapdf_sqlfields[".geocodingEnabled"] = false;










$tdatapdf_sqlfields[".pageSize"] = 20;

$tdatapdf_sqlfields[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapdf_sqlfields[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_sqlfields[".orderindexes"] = array();


$tdatapdf_sqlfields[".sqlHead"] = "SELECT id,  	formid,  	sqlfield";
$tdatapdf_sqlfields[".sqlFrom"] = "FROM pdf_sqlfields";
$tdatapdf_sqlfields[".sqlWhereExpr"] = "";
$tdatapdf_sqlfields[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_sqlfields[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_sqlfields[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_sqlfields[".highlightSearchResults"] = true;

$tableKeyspdf_sqlfields = array();
$tableKeyspdf_sqlfields[] = "id";
$tdatapdf_sqlfields[".Keys"] = $tableKeyspdf_sqlfields;


$tdatapdf_sqlfields[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pdf_sqlfields";
	$fdata["Label"] = GetFieldLabel("pdf_sqlfields","id");
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


	$tdatapdf_sqlfields["id"] = $fdata;
		$tdatapdf_sqlfields[".searchableFields"][] = "id";
//	formid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "formid";
	$fdata["GoodName"] = "formid";
	$fdata["ownerTable"] = "pdf_sqlfields";
	$fdata["Label"] = GetFieldLabel("pdf_sqlfields","formid");
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


	$tdatapdf_sqlfields["formid"] = $fdata;
		$tdatapdf_sqlfields[".searchableFields"][] = "formid";
//	sqlfield
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sqlfield";
	$fdata["GoodName"] = "sqlfield";
	$fdata["ownerTable"] = "pdf_sqlfields";
	$fdata["Label"] = GetFieldLabel("pdf_sqlfields","sqlfield");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sqlfield";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sqlfield";

	
	
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


	$tdatapdf_sqlfields["sqlfield"] = $fdata;
		$tdatapdf_sqlfields[".searchableFields"][] = "sqlfield";


$tables_data["pdf_sqlfields"]=&$tdatapdf_sqlfields;
$field_labels["pdf_sqlfields"] = &$fieldLabelspdf_sqlfields;
$fieldToolTips["pdf_sqlfields"] = &$fieldToolTipspdf_sqlfields;
$placeHolders["pdf_sqlfields"] = &$placeHolderspdf_sqlfields;
$page_titles["pdf_sqlfields"] = &$pageTitlespdf_sqlfields;


changeTextControlsToDate( "pdf_sqlfields" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pdf_sqlfields"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pdf_sqlfields"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pdf_sqlfields()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	formid,  	sqlfield";
$proto0["m_strFrom"] = "FROM pdf_sqlfields";
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
	"m_strTable" => "pdf_sqlfields",
	"m_srcTableName" => "pdf_sqlfields"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pdf_sqlfields";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "formid",
	"m_strTable" => "pdf_sqlfields",
	"m_srcTableName" => "pdf_sqlfields"
));

$proto8["m_sql"] = "formid";
$proto8["m_srcTableName"] = "pdf_sqlfields";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sqlfield",
	"m_strTable" => "pdf_sqlfields",
	"m_srcTableName" => "pdf_sqlfields"
));

$proto10["m_sql"] = "sqlfield";
$proto10["m_srcTableName"] = "pdf_sqlfields";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "pdf_sqlfields";
$proto13["m_srcTableName"] = "pdf_sqlfields";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "formid";
$proto13["m_columns"][] = "sqlfield";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "pdf_sqlfields";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "pdf_sqlfields";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pdf_sqlfields";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_sqlfields = createSqlQuery_pdf_sqlfields();


	
		;

			

$tdatapdf_sqlfields[".sqlquery"] = $queryData_pdf_sqlfields;



$tdatapdf_sqlfields[".hasEvents"] = false;

?>