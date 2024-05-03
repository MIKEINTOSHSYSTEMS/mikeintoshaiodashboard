<?php
$tdatapdf_formoptions = array();
$tdatapdf_formoptions[".searchableFields"] = array();
$tdatapdf_formoptions[".ShortName"] = "pdf_formoptions";
$tdatapdf_formoptions[".OwnerID"] = "";
$tdatapdf_formoptions[".OriginalTable"] = "pdf_formoptions";


$tdatapdf_formoptions[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatapdf_formoptions[".originalPagesByType"] = $tdatapdf_formoptions[".pagesByType"];
$tdatapdf_formoptions[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatapdf_formoptions[".originalPages"] = $tdatapdf_formoptions[".pages"];
$tdatapdf_formoptions[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatapdf_formoptions[".originalDefaultPages"] = $tdatapdf_formoptions[".defaultPages"];

//	field labels
$fieldLabelspdf_formoptions = array();
$fieldToolTipspdf_formoptions = array();
$pageTitlespdf_formoptions = array();
$placeHolderspdf_formoptions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_formoptions["English"] = array();
	$fieldToolTipspdf_formoptions["English"] = array();
	$placeHolderspdf_formoptions["English"] = array();
	$pageTitlespdf_formoptions["English"] = array();
	$fieldLabelspdf_formoptions["English"]["id"] = "Id";
	$fieldToolTipspdf_formoptions["English"]["id"] = "";
	$placeHolderspdf_formoptions["English"]["id"] = "";
	$fieldLabelspdf_formoptions["English"]["pdfpath"] = "Path to PDFtk";
	$fieldToolTipspdf_formoptions["English"]["pdfpath"] = "";
	$placeHolderspdf_formoptions["English"]["pdfpath"] = "";
	$pageTitlespdf_formoptions["English"]["edit"] = "Settings";
	if (count($fieldToolTipspdf_formoptions["English"]))
		$tdatapdf_formoptions[".isUseToolTips"] = true;
}


	$tdatapdf_formoptions[".NCSearch"] = true;



$tdatapdf_formoptions[".shortTableName"] = "pdf_formoptions";
$tdatapdf_formoptions[".nSecOptions"] = 0;

$tdatapdf_formoptions[".mainTableOwnerID"] = "";
$tdatapdf_formoptions[".entityType"] = 0;
$tdatapdf_formoptions[".connId"] = "project_at_localhost";


$tdatapdf_formoptions[".strOriginalTableName"] = "pdf_formoptions";

	



$tdatapdf_formoptions[".showAddInPopup"] = false;

$tdatapdf_formoptions[".showEditInPopup"] = false;

$tdatapdf_formoptions[".showViewInPopup"] = false;

$tdatapdf_formoptions[".listAjax"] = false;
//	temporary
//$tdatapdf_formoptions[".listAjax"] = false;

	$tdatapdf_formoptions[".audit"] = false;

	$tdatapdf_formoptions[".locking"] = false;


$pages = $tdatapdf_formoptions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapdf_formoptions[".edit"] = true;
	$tdatapdf_formoptions[".afterEditAction"] = 1;
	$tdatapdf_formoptions[".closePopupAfterEdit"] = 1;
	$tdatapdf_formoptions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapdf_formoptions[".add"] = true;
$tdatapdf_formoptions[".afterAddAction"] = 1;
$tdatapdf_formoptions[".closePopupAfterAdd"] = 1;
$tdatapdf_formoptions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapdf_formoptions[".list"] = true;
}



$tdatapdf_formoptions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapdf_formoptions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapdf_formoptions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapdf_formoptions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapdf_formoptions[".printFriendly"] = true;
}



$tdatapdf_formoptions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapdf_formoptions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapdf_formoptions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapdf_formoptions[".isUseAjaxSuggest"] = true;



												

$tdatapdf_formoptions[".ajaxCodeSnippetAdded"] = false;

$tdatapdf_formoptions[".buttonsAdded"] = false;

$tdatapdf_formoptions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf_formoptions[".isUseTimeForSearch"] = false;


$tdatapdf_formoptions[".badgeColor"] = "778899";


$tdatapdf_formoptions[".allSearchFields"] = array();
$tdatapdf_formoptions[".filterFields"] = array();
$tdatapdf_formoptions[".requiredSearchFields"] = array();

$tdatapdf_formoptions[".googleLikeFields"] = array();
$tdatapdf_formoptions[".googleLikeFields"][] = "id";
$tdatapdf_formoptions[".googleLikeFields"][] = "pdfpath";



$tdatapdf_formoptions[".tableType"] = "list";

$tdatapdf_formoptions[".printerPageOrientation"] = 0;
$tdatapdf_formoptions[".nPrinterPageScale"] = 100;

$tdatapdf_formoptions[".nPrinterSplitRecords"] = 40;

$tdatapdf_formoptions[".geocodingEnabled"] = false;










$tdatapdf_formoptions[".pageSize"] = 20;

$tdatapdf_formoptions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapdf_formoptions[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_formoptions[".orderindexes"] = array();


$tdatapdf_formoptions[".sqlHead"] = "SELECT id,  	pdfpath";
$tdatapdf_formoptions[".sqlFrom"] = "FROM pdf_formoptions";
$tdatapdf_formoptions[".sqlWhereExpr"] = "";
$tdatapdf_formoptions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_formoptions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_formoptions[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_formoptions[".highlightSearchResults"] = true;

$tableKeyspdf_formoptions = array();
$tableKeyspdf_formoptions[] = "id";
$tdatapdf_formoptions[".Keys"] = $tableKeyspdf_formoptions;


$tdatapdf_formoptions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pdf_formoptions";
	$fdata["Label"] = GetFieldLabel("pdf_formoptions","id");
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


	$tdatapdf_formoptions["id"] = $fdata;
		$tdatapdf_formoptions[".searchableFields"][] = "id";
//	pdfpath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdfpath";
	$fdata["GoodName"] = "pdfpath";
	$fdata["ownerTable"] = "pdf_formoptions";
	$fdata["Label"] = GetFieldLabel("pdf_formoptions","pdfpath");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pdfpath";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdfpath";

	
	
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


	$tdatapdf_formoptions["pdfpath"] = $fdata;
		$tdatapdf_formoptions[".searchableFields"][] = "pdfpath";


$tables_data["pdf_formoptions"]=&$tdatapdf_formoptions;
$field_labels["pdf_formoptions"] = &$fieldLabelspdf_formoptions;
$fieldToolTips["pdf_formoptions"] = &$fieldToolTipspdf_formoptions;
$placeHolders["pdf_formoptions"] = &$placeHolderspdf_formoptions;
$page_titles["pdf_formoptions"] = &$pageTitlespdf_formoptions;


changeTextControlsToDate( "pdf_formoptions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pdf_formoptions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pdf_formoptions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pdf_formoptions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	pdfpath";
$proto0["m_strFrom"] = "FROM pdf_formoptions";
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
	"m_strTable" => "pdf_formoptions",
	"m_srcTableName" => "pdf_formoptions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pdf_formoptions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pdfpath",
	"m_strTable" => "pdf_formoptions",
	"m_srcTableName" => "pdf_formoptions"
));

$proto8["m_sql"] = "pdfpath";
$proto8["m_srcTableName"] = "pdf_formoptions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "pdf_formoptions";
$proto11["m_srcTableName"] = "pdf_formoptions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "pdfpath";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "pdf_formoptions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "pdf_formoptions";
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
$proto0["m_srcTableName"]="pdf_formoptions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_formoptions = createSqlQuery_pdf_formoptions();


	
		;

		

$tdatapdf_formoptions[".sqlquery"] = $queryData_pdf_formoptions;



$tdatapdf_formoptions[".hasEvents"] = false;

?>