<?php
$tdatasv_format_date = array();
$tdatasv_format_date[".searchableFields"] = array();
$tdatasv_format_date[".ShortName"] = "sv_format_date";
$tdatasv_format_date[".OwnerID"] = "";
$tdatasv_format_date[".OriginalTable"] = "sv_format_date";


$tdatasv_format_date[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatasv_format_date[".originalPagesByType"] = $tdatasv_format_date[".pagesByType"];
$tdatasv_format_date[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatasv_format_date[".originalPages"] = $tdatasv_format_date[".pages"];
$tdatasv_format_date[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatasv_format_date[".originalDefaultPages"] = $tdatasv_format_date[".defaultPages"];

//	field labels
$fieldLabelssv_format_date = array();
$fieldToolTipssv_format_date = array();
$pageTitlessv_format_date = array();
$placeHolderssv_format_date = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_format_date["English"] = array();
	$fieldToolTipssv_format_date["English"] = array();
	$placeHolderssv_format_date["English"] = array();
	$pageTitlessv_format_date["English"] = array();
	$fieldLabelssv_format_date["English"]["id"] = "Id";
	$fieldToolTipssv_format_date["English"]["id"] = "";
	$placeHolderssv_format_date["English"]["id"] = "";
	$fieldLabelssv_format_date["English"]["format"] = "Format";
	$fieldToolTipssv_format_date["English"]["format"] = "";
	$placeHolderssv_format_date["English"]["format"] = "";
	$fieldLabelssv_format_date["English"]["description"] = "Description";
	$fieldToolTipssv_format_date["English"]["description"] = "";
	$placeHolderssv_format_date["English"]["description"] = "";
	if (count($fieldToolTipssv_format_date["English"]))
		$tdatasv_format_date[".isUseToolTips"] = true;
}


	$tdatasv_format_date[".NCSearch"] = true;



$tdatasv_format_date[".shortTableName"] = "sv_format_date";
$tdatasv_format_date[".nSecOptions"] = 0;

$tdatasv_format_date[".mainTableOwnerID"] = "";
$tdatasv_format_date[".entityType"] = 1;
$tdatasv_format_date[".connId"] = "project_at_localhost";


$tdatasv_format_date[".strOriginalTableName"] = "sv_format_date";

	



$tdatasv_format_date[".showAddInPopup"] = false;

$tdatasv_format_date[".showEditInPopup"] = false;

$tdatasv_format_date[".showViewInPopup"] = false;

$tdatasv_format_date[".listAjax"] = false;
//	temporary
//$tdatasv_format_date[".listAjax"] = false;

	$tdatasv_format_date[".audit"] = false;

	$tdatasv_format_date[".locking"] = false;


$pages = $tdatasv_format_date[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_format_date[".edit"] = true;
	$tdatasv_format_date[".afterEditAction"] = 1;
	$tdatasv_format_date[".closePopupAfterEdit"] = 1;
	$tdatasv_format_date[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_format_date[".add"] = true;
$tdatasv_format_date[".afterAddAction"] = 1;
$tdatasv_format_date[".closePopupAfterAdd"] = 1;
$tdatasv_format_date[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_format_date[".list"] = true;
}

$tdatasv_format_date[".updateSelected"] = true;


$tdatasv_format_date[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_format_date[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_format_date[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_format_date[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_format_date[".printFriendly"] = true;
}



$tdatasv_format_date[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_format_date[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_format_date[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_format_date[".isUseAjaxSuggest"] = true;



																		

$tdatasv_format_date[".ajaxCodeSnippetAdded"] = false;

$tdatasv_format_date[".buttonsAdded"] = false;

$tdatasv_format_date[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasv_format_date[".isUseTimeForSearch"] = false;




$tdatasv_format_date[".allSearchFields"] = array();
$tdatasv_format_date[".filterFields"] = array();
$tdatasv_format_date[".requiredSearchFields"] = array();

$tdatasv_format_date[".googleLikeFields"] = array();
$tdatasv_format_date[".googleLikeFields"][] = "id";
$tdatasv_format_date[".googleLikeFields"][] = "format";
$tdatasv_format_date[".googleLikeFields"][] = "description";



$tdatasv_format_date[".tableType"] = "list";

$tdatasv_format_date[".printerPageOrientation"] = 0;
$tdatasv_format_date[".nPrinterPageScale"] = 100;

$tdatasv_format_date[".nPrinterSplitRecords"] = 40;

$tdatasv_format_date[".geocodingEnabled"] = false;










$tdatasv_format_date[".pageSize"] = 20;

$tdatasv_format_date[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_format_date[".strOrderBy"] = $tstrOrderBy;

$tdatasv_format_date[".orderindexes"] = array();


$tdatasv_format_date[".sqlHead"] = "SELECT id,  format,  description";
$tdatasv_format_date[".sqlFrom"] = "FROM sv_format_date";
$tdatasv_format_date[".sqlWhereExpr"] = "";
$tdatasv_format_date[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_format_date[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_format_date[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_format_date[".highlightSearchResults"] = true;

$tableKeyssv_format_date = array();
$tableKeyssv_format_date[] = "id";
$tdatasv_format_date[".Keys"] = $tableKeyssv_format_date;


$tdatasv_format_date[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_format_date";
	$fdata["Label"] = GetFieldLabel("sv_format_date","id");
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


	$tdatasv_format_date["id"] = $fdata;
		$tdatasv_format_date[".searchableFields"][] = "id";
//	format
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "format";
	$fdata["GoodName"] = "format";
	$fdata["ownerTable"] = "sv_format_date";
	$fdata["Label"] = GetFieldLabel("sv_format_date","format");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "format";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "format";

	
	
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


	$tdatasv_format_date["format"] = $fdata;
		$tdatasv_format_date[".searchableFields"][] = "format";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "sv_format_date";
	$fdata["Label"] = GetFieldLabel("sv_format_date","description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatasv_format_date["description"] = $fdata;
		$tdatasv_format_date[".searchableFields"][] = "description";


$tables_data["sv_format_date"]=&$tdatasv_format_date;
$field_labels["sv_format_date"] = &$fieldLabelssv_format_date;
$fieldToolTips["sv_format_date"] = &$fieldToolTipssv_format_date;
$placeHolders["sv_format_date"] = &$placeHolderssv_format_date;
$page_titles["sv_format_date"] = &$pageTitlessv_format_date;


changeTextControlsToDate( "sv_format_date" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_format_date"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_format_date"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_format_date()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  format,  description";
$proto0["m_strFrom"] = "FROM sv_format_date";
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
	"m_strTable" => "sv_format_date",
	"m_srcTableName" => "sv_format_date"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_format_date";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "format",
	"m_strTable" => "sv_format_date",
	"m_srcTableName" => "sv_format_date"
));

$proto8["m_sql"] = "format";
$proto8["m_srcTableName"] = "sv_format_date";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sv_format_date",
	"m_srcTableName" => "sv_format_date"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "sv_format_date";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sv_format_date";
$proto13["m_srcTableName"] = "sv_format_date";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "format";
$proto13["m_columns"][] = "description";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sv_format_date";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sv_format_date";
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
$proto0["m_srcTableName"]="sv_format_date";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_format_date = createSqlQuery_sv_format_date();


	
		;

			

$tdatasv_format_date[".sqlquery"] = $queryData_sv_format_date;



$tdatasv_format_date[".hasEvents"] = false;

?>