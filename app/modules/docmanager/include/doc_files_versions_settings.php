<?php
$tdatadoc_files_versions = array();
$tdatadoc_files_versions[".searchableFields"] = array();
$tdatadoc_files_versions[".ShortName"] = "doc_files_versions";
$tdatadoc_files_versions[".OwnerID"] = "";
$tdatadoc_files_versions[".OriginalTable"] = "doc_files_versions";


$tdatadoc_files_versions[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadoc_files_versions[".originalPagesByType"] = $tdatadoc_files_versions[".pagesByType"];
$tdatadoc_files_versions[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadoc_files_versions[".originalPages"] = $tdatadoc_files_versions[".pages"];
$tdatadoc_files_versions[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatadoc_files_versions[".originalDefaultPages"] = $tdatadoc_files_versions[".defaultPages"];

//	field labels
$fieldLabelsdoc_files_versions = array();
$fieldToolTipsdoc_files_versions = array();
$pageTitlesdoc_files_versions = array();
$placeHoldersdoc_files_versions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdoc_files_versions["English"] = array();
	$fieldToolTipsdoc_files_versions["English"] = array();
	$placeHoldersdoc_files_versions["English"] = array();
	$pageTitlesdoc_files_versions["English"] = array();
	$fieldLabelsdoc_files_versions["English"]["id"] = "Id";
	$fieldToolTipsdoc_files_versions["English"]["id"] = "";
	$placeHoldersdoc_files_versions["English"]["id"] = "";
	$fieldLabelsdoc_files_versions["English"]["docid"] = "Docid";
	$fieldToolTipsdoc_files_versions["English"]["docid"] = "";
	$placeHoldersdoc_files_versions["English"]["docid"] = "";
	$fieldLabelsdoc_files_versions["English"]["file"] = "File";
	$fieldToolTipsdoc_files_versions["English"]["file"] = "";
	$placeHoldersdoc_files_versions["English"]["file"] = "";
	$fieldLabelsdoc_files_versions["English"]["ownerid"] = "Ownerid";
	$fieldToolTipsdoc_files_versions["English"]["ownerid"] = "";
	$placeHoldersdoc_files_versions["English"]["ownerid"] = "";
	$fieldLabelsdoc_files_versions["English"]["created"] = "Created";
	$fieldToolTipsdoc_files_versions["English"]["created"] = "";
	$placeHoldersdoc_files_versions["English"]["created"] = "";
	if (count($fieldToolTipsdoc_files_versions["English"]))
		$tdatadoc_files_versions[".isUseToolTips"] = true;
}


	$tdatadoc_files_versions[".NCSearch"] = true;



$tdatadoc_files_versions[".shortTableName"] = "doc_files_versions";
$tdatadoc_files_versions[".nSecOptions"] = 0;

$tdatadoc_files_versions[".mainTableOwnerID"] = "";
$tdatadoc_files_versions[".entityType"] = 0;
$tdatadoc_files_versions[".connId"] = "project_at_localhost";


$tdatadoc_files_versions[".strOriginalTableName"] = "doc_files_versions";

		 



$tdatadoc_files_versions[".showAddInPopup"] = false;

$tdatadoc_files_versions[".showEditInPopup"] = false;

$tdatadoc_files_versions[".showViewInPopup"] = false;

$tdatadoc_files_versions[".listAjax"] = false;
//	temporary
//$tdatadoc_files_versions[".listAjax"] = false;

	$tdatadoc_files_versions[".audit"] = false;

	$tdatadoc_files_versions[".locking"] = false;


$pages = $tdatadoc_files_versions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadoc_files_versions[".edit"] = true;
	$tdatadoc_files_versions[".afterEditAction"] = 1;
	$tdatadoc_files_versions[".closePopupAfterEdit"] = 1;
	$tdatadoc_files_versions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadoc_files_versions[".add"] = true;
$tdatadoc_files_versions[".afterAddAction"] = 1;
$tdatadoc_files_versions[".closePopupAfterAdd"] = 1;
$tdatadoc_files_versions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadoc_files_versions[".list"] = true;
}



$tdatadoc_files_versions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadoc_files_versions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadoc_files_versions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadoc_files_versions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadoc_files_versions[".printFriendly"] = true;
}



$tdatadoc_files_versions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadoc_files_versions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadoc_files_versions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadoc_files_versions[".isUseAjaxSuggest"] = true;



															

$tdatadoc_files_versions[".ajaxCodeSnippetAdded"] = false;

$tdatadoc_files_versions[".buttonsAdded"] = false;

$tdatadoc_files_versions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadoc_files_versions[".isUseTimeForSearch"] = false;


$tdatadoc_files_versions[".badgeColor"] = "2F4F4F";


$tdatadoc_files_versions[".allSearchFields"] = array();
$tdatadoc_files_versions[".filterFields"] = array();
$tdatadoc_files_versions[".requiredSearchFields"] = array();

$tdatadoc_files_versions[".googleLikeFields"] = array();
$tdatadoc_files_versions[".googleLikeFields"][] = "id";
$tdatadoc_files_versions[".googleLikeFields"][] = "docid";
$tdatadoc_files_versions[".googleLikeFields"][] = "file";
$tdatadoc_files_versions[".googleLikeFields"][] = "ownerid";
$tdatadoc_files_versions[".googleLikeFields"][] = "created";



$tdatadoc_files_versions[".tableType"] = "list";

$tdatadoc_files_versions[".printerPageOrientation"] = 0;
$tdatadoc_files_versions[".nPrinterPageScale"] = 100;

$tdatadoc_files_versions[".nPrinterSplitRecords"] = 40;

$tdatadoc_files_versions[".geocodingEnabled"] = false;










$tdatadoc_files_versions[".pageSize"] = 20;

$tdatadoc_files_versions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadoc_files_versions[".strOrderBy"] = $tstrOrderBy;

$tdatadoc_files_versions[".orderindexes"] = array();


$tdatadoc_files_versions[".sqlHead"] = "SELECT id,  docid,  `file`,  ownerid,  created";
$tdatadoc_files_versions[".sqlFrom"] = "FROM doc_files_versions";
$tdatadoc_files_versions[".sqlWhereExpr"] = "";
$tdatadoc_files_versions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadoc_files_versions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadoc_files_versions[".arrGroupsPerPage"] = $arrGPP;

$tdatadoc_files_versions[".highlightSearchResults"] = true;

$tableKeysdoc_files_versions = array();
$tableKeysdoc_files_versions[] = "id";
$tdatadoc_files_versions[".Keys"] = $tableKeysdoc_files_versions;


$tdatadoc_files_versions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "doc_files_versions";
	$fdata["Label"] = GetFieldLabel("doc_files_versions","id");
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


	$tdatadoc_files_versions["id"] = $fdata;
		$tdatadoc_files_versions[".searchableFields"][] = "id";
//	docid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "docid";
	$fdata["GoodName"] = "docid";
	$fdata["ownerTable"] = "doc_files_versions";
	$fdata["Label"] = GetFieldLabel("doc_files_versions","docid");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "docid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docid";

	
	
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


	$tdatadoc_files_versions["docid"] = $fdata;
		$tdatadoc_files_versions[".searchableFields"][] = "docid";
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "doc_files_versions";
	$fdata["Label"] = GetFieldLabel("doc_files_versions","file");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`file`";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatadoc_files_versions["file"] = $fdata;
		$tdatadoc_files_versions[".searchableFields"][] = "file";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "doc_files_versions";
	$fdata["Label"] = GetFieldLabel("doc_files_versions","ownerid");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "ownerid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ownerid";

	
	
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


	$tdatadoc_files_versions["ownerid"] = $fdata;
		$tdatadoc_files_versions[".searchableFields"][] = "ownerid";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "doc_files_versions";
	$fdata["Label"] = GetFieldLabel("doc_files_versions","created");
	$fdata["FieldType"] = 135;


	
	
										

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadoc_files_versions["created"] = $fdata;
		$tdatadoc_files_versions[".searchableFields"][] = "created";


$tables_data["doc_files_versions"]=&$tdatadoc_files_versions;
$field_labels["doc_files_versions"] = &$fieldLabelsdoc_files_versions;
$fieldToolTips["doc_files_versions"] = &$fieldToolTipsdoc_files_versions;
$placeHolders["doc_files_versions"] = &$placeHoldersdoc_files_versions;
$page_titles["doc_files_versions"] = &$pageTitlesdoc_files_versions;


changeTextControlsToDate( "doc_files_versions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["doc_files_versions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["doc_files_versions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_doc_files_versions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  docid,  `file`,  ownerid,  created";
$proto0["m_strFrom"] = "FROM doc_files_versions";
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
	"m_strTable" => "doc_files_versions",
	"m_srcTableName" => "doc_files_versions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "doc_files_versions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "docid",
	"m_strTable" => "doc_files_versions",
	"m_srcTableName" => "doc_files_versions"
));

$proto8["m_sql"] = "docid";
$proto8["m_srcTableName"] = "doc_files_versions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "doc_files_versions",
	"m_srcTableName" => "doc_files_versions"
));

$proto10["m_sql"] = "`file`";
$proto10["m_srcTableName"] = "doc_files_versions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "doc_files_versions",
	"m_srcTableName" => "doc_files_versions"
));

$proto12["m_sql"] = "ownerid";
$proto12["m_srcTableName"] = "doc_files_versions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "doc_files_versions",
	"m_srcTableName" => "doc_files_versions"
));

$proto14["m_sql"] = "created";
$proto14["m_srcTableName"] = "doc_files_versions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "doc_files_versions";
$proto17["m_srcTableName"] = "doc_files_versions";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "docid";
$proto17["m_columns"][] = "file";
$proto17["m_columns"][] = "ownerid";
$proto17["m_columns"][] = "created";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "doc_files_versions";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "doc_files_versions";
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
$proto0["m_srcTableName"]="doc_files_versions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_doc_files_versions = createSqlQuery_doc_files_versions();


	
					
;

					

$tdatadoc_files_versions[".sqlquery"] = $queryData_doc_files_versions;



$tdatadoc_files_versions[".hasEvents"] = false;

?>