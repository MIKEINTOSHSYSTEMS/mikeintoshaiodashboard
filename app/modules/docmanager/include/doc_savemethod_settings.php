<?php
$tdatadoc_savemethod = array();
$tdatadoc_savemethod[".searchableFields"] = array();
$tdatadoc_savemethod[".ShortName"] = "doc_savemethod";
$tdatadoc_savemethod[".OwnerID"] = "";
$tdatadoc_savemethod[".OriginalTable"] = "doc_savemethod";


$tdatadoc_savemethod[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatadoc_savemethod[".originalPagesByType"] = $tdatadoc_savemethod[".pagesByType"];
$tdatadoc_savemethod[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatadoc_savemethod[".originalPages"] = $tdatadoc_savemethod[".pages"];
$tdatadoc_savemethod[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatadoc_savemethod[".originalDefaultPages"] = $tdatadoc_savemethod[".defaultPages"];

//	field labels
$fieldLabelsdoc_savemethod = array();
$fieldToolTipsdoc_savemethod = array();
$pageTitlesdoc_savemethod = array();
$placeHoldersdoc_savemethod = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdoc_savemethod["English"] = array();
	$fieldToolTipsdoc_savemethod["English"] = array();
	$placeHoldersdoc_savemethod["English"] = array();
	$pageTitlesdoc_savemethod["English"] = array();
	$fieldLabelsdoc_savemethod["English"]["ID"] = "ID";
	$fieldToolTipsdoc_savemethod["English"]["ID"] = "";
	$placeHoldersdoc_savemethod["English"]["ID"] = "";
	$fieldLabelsdoc_savemethod["English"]["mehodName"] = "Mehod Name";
	$fieldToolTipsdoc_savemethod["English"]["mehodName"] = "";
	$placeHoldersdoc_savemethod["English"]["mehodName"] = "";
	$fieldLabelsdoc_savemethod["English"]["methodValue"] = "Method Value";
	$fieldToolTipsdoc_savemethod["English"]["methodValue"] = "";
	$placeHoldersdoc_savemethod["English"]["methodValue"] = "";
	if (count($fieldToolTipsdoc_savemethod["English"]))
		$tdatadoc_savemethod[".isUseToolTips"] = true;
}


	$tdatadoc_savemethod[".NCSearch"] = true;



$tdatadoc_savemethod[".shortTableName"] = "doc_savemethod";
$tdatadoc_savemethod[".nSecOptions"] = 0;

$tdatadoc_savemethod[".mainTableOwnerID"] = "";
$tdatadoc_savemethod[".entityType"] = 0;
$tdatadoc_savemethod[".connId"] = "project_at_localhost";


$tdatadoc_savemethod[".strOriginalTableName"] = "doc_savemethod";

		 



$tdatadoc_savemethod[".showAddInPopup"] = false;

$tdatadoc_savemethod[".showEditInPopup"] = false;

$tdatadoc_savemethod[".showViewInPopup"] = false;

$tdatadoc_savemethod[".listAjax"] = false;
//	temporary
//$tdatadoc_savemethod[".listAjax"] = false;

	$tdatadoc_savemethod[".audit"] = false;

	$tdatadoc_savemethod[".locking"] = false;


$pages = $tdatadoc_savemethod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadoc_savemethod[".edit"] = true;
	$tdatadoc_savemethod[".afterEditAction"] = 1;
	$tdatadoc_savemethod[".closePopupAfterEdit"] = 1;
	$tdatadoc_savemethod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadoc_savemethod[".add"] = true;
$tdatadoc_savemethod[".afterAddAction"] = 1;
$tdatadoc_savemethod[".closePopupAfterAdd"] = 1;
$tdatadoc_savemethod[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadoc_savemethod[".list"] = true;
}



$tdatadoc_savemethod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadoc_savemethod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadoc_savemethod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadoc_savemethod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadoc_savemethod[".printFriendly"] = true;
}



$tdatadoc_savemethod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadoc_savemethod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadoc_savemethod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadoc_savemethod[".isUseAjaxSuggest"] = true;



															

$tdatadoc_savemethod[".ajaxCodeSnippetAdded"] = false;

$tdatadoc_savemethod[".buttonsAdded"] = false;

$tdatadoc_savemethod[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadoc_savemethod[".isUseTimeForSearch"] = false;


$tdatadoc_savemethod[".badgeColor"] = "CD853F";


$tdatadoc_savemethod[".allSearchFields"] = array();
$tdatadoc_savemethod[".filterFields"] = array();
$tdatadoc_savemethod[".requiredSearchFields"] = array();

$tdatadoc_savemethod[".googleLikeFields"] = array();
$tdatadoc_savemethod[".googleLikeFields"][] = "ID";
$tdatadoc_savemethod[".googleLikeFields"][] = "mehodName";
$tdatadoc_savemethod[".googleLikeFields"][] = "methodValue";



$tdatadoc_savemethod[".tableType"] = "list";

$tdatadoc_savemethod[".printerPageOrientation"] = 0;
$tdatadoc_savemethod[".nPrinterPageScale"] = 100;

$tdatadoc_savemethod[".nPrinterSplitRecords"] = 40;

$tdatadoc_savemethod[".geocodingEnabled"] = false;










$tdatadoc_savemethod[".pageSize"] = 20;

$tdatadoc_savemethod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadoc_savemethod[".strOrderBy"] = $tstrOrderBy;

$tdatadoc_savemethod[".orderindexes"] = array();


$tdatadoc_savemethod[".sqlHead"] = "SELECT ID,  mehodName,  methodValue";
$tdatadoc_savemethod[".sqlFrom"] = "FROM doc_savemethod";
$tdatadoc_savemethod[".sqlWhereExpr"] = "";
$tdatadoc_savemethod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadoc_savemethod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadoc_savemethod[".arrGroupsPerPage"] = $arrGPP;

$tdatadoc_savemethod[".highlightSearchResults"] = true;

$tableKeysdoc_savemethod = array();
$tableKeysdoc_savemethod[] = "ID";
$tdatadoc_savemethod[".Keys"] = $tableKeysdoc_savemethod;


$tdatadoc_savemethod[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "doc_savemethod";
	$fdata["Label"] = GetFieldLabel("doc_savemethod","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatadoc_savemethod["ID"] = $fdata;
		$tdatadoc_savemethod[".searchableFields"][] = "ID";
//	mehodName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mehodName";
	$fdata["GoodName"] = "mehodName";
	$fdata["ownerTable"] = "doc_savemethod";
	$fdata["Label"] = GetFieldLabel("doc_savemethod","mehodName");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "mehodName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mehodName";

	
	
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


	$tdatadoc_savemethod["mehodName"] = $fdata;
		$tdatadoc_savemethod[".searchableFields"][] = "mehodName";
//	methodValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "methodValue";
	$fdata["GoodName"] = "methodValue";
	$fdata["ownerTable"] = "doc_savemethod";
	$fdata["Label"] = GetFieldLabel("doc_savemethod","methodValue");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "methodValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "methodValue";

	
	
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


	$tdatadoc_savemethod["methodValue"] = $fdata;
		$tdatadoc_savemethod[".searchableFields"][] = "methodValue";


$tables_data["doc_savemethod"]=&$tdatadoc_savemethod;
$field_labels["doc_savemethod"] = &$fieldLabelsdoc_savemethod;
$fieldToolTips["doc_savemethod"] = &$fieldToolTipsdoc_savemethod;
$placeHolders["doc_savemethod"] = &$placeHoldersdoc_savemethod;
$page_titles["doc_savemethod"] = &$pageTitlesdoc_savemethod;


changeTextControlsToDate( "doc_savemethod" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["doc_savemethod"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["doc_savemethod"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_doc_savemethod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  mehodName,  methodValue";
$proto0["m_strFrom"] = "FROM doc_savemethod";
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
	"m_strName" => "ID",
	"m_strTable" => "doc_savemethod",
	"m_srcTableName" => "doc_savemethod"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "doc_savemethod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mehodName",
	"m_strTable" => "doc_savemethod",
	"m_srcTableName" => "doc_savemethod"
));

$proto8["m_sql"] = "mehodName";
$proto8["m_srcTableName"] = "doc_savemethod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "methodValue",
	"m_strTable" => "doc_savemethod",
	"m_srcTableName" => "doc_savemethod"
));

$proto10["m_sql"] = "methodValue";
$proto10["m_srcTableName"] = "doc_savemethod";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "doc_savemethod";
$proto13["m_srcTableName"] = "doc_savemethod";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "mehodName";
$proto13["m_columns"][] = "methodValue";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "doc_savemethod";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "doc_savemethod";
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
$proto0["m_srcTableName"]="doc_savemethod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_doc_savemethod = createSqlQuery_doc_savemethod();


	
					
;

			

$tdatadoc_savemethod[".sqlquery"] = $queryData_doc_savemethod;



$tdatadoc_savemethod[".hasEvents"] = false;

?>