<?php
$tdatadoc_settings = array();
$tdatadoc_settings[".searchableFields"] = array();
$tdatadoc_settings[".ShortName"] = "doc_settings";
$tdatadoc_settings[".OwnerID"] = "";
$tdatadoc_settings[".OriginalTable"] = "doc_settings";


$tdatadoc_settings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatadoc_settings[".originalPagesByType"] = $tdatadoc_settings[".pagesByType"];
$tdatadoc_settings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatadoc_settings[".originalPages"] = $tdatadoc_settings[".pages"];
$tdatadoc_settings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatadoc_settings[".originalDefaultPages"] = $tdatadoc_settings[".defaultPages"];

//	field labels
$fieldLabelsdoc_settings = array();
$fieldToolTipsdoc_settings = array();
$pageTitlesdoc_settings = array();
$placeHoldersdoc_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdoc_settings["English"] = array();
	$fieldToolTipsdoc_settings["English"] = array();
	$placeHoldersdoc_settings["English"] = array();
	$pageTitlesdoc_settings["English"] = array();
	$fieldLabelsdoc_settings["English"]["id"] = "Id";
	$fieldToolTipsdoc_settings["English"]["id"] = "";
	$placeHoldersdoc_settings["English"]["id"] = "";
	$fieldLabelsdoc_settings["English"]["upload_path"] = "Upload Path";
	$fieldToolTipsdoc_settings["English"]["upload_path"] = "";
	$placeHoldersdoc_settings["English"]["upload_path"] = "";
	$fieldLabelsdoc_settings["English"]["isStructure"] = "File storage method";
	$fieldToolTipsdoc_settings["English"]["isStructure"] = "";
	$placeHoldersdoc_settings["English"]["isStructure"] = "";
	$fieldLabelsdoc_settings["English"]["isVersions"] = "Store file versions";
	$fieldToolTipsdoc_settings["English"]["isVersions"] = "";
	$placeHoldersdoc_settings["English"]["isVersions"] = "";
	$pageTitlesdoc_settings["English"]["edit"] = "DocManager settings";
	if (count($fieldToolTipsdoc_settings["English"]))
		$tdatadoc_settings[".isUseToolTips"] = true;
}


	$tdatadoc_settings[".NCSearch"] = true;



$tdatadoc_settings[".shortTableName"] = "doc_settings";
$tdatadoc_settings[".nSecOptions"] = 0;

$tdatadoc_settings[".mainTableOwnerID"] = "";
$tdatadoc_settings[".entityType"] = 0;
$tdatadoc_settings[".connId"] = "project_at_localhost";


$tdatadoc_settings[".strOriginalTableName"] = "doc_settings";

		 



$tdatadoc_settings[".showAddInPopup"] = false;

$tdatadoc_settings[".showEditInPopup"] = false;

$tdatadoc_settings[".showViewInPopup"] = false;

$tdatadoc_settings[".listAjax"] = false;
//	temporary
//$tdatadoc_settings[".listAjax"] = false;

	$tdatadoc_settings[".audit"] = false;

	$tdatadoc_settings[".locking"] = false;


$pages = $tdatadoc_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadoc_settings[".edit"] = true;
	$tdatadoc_settings[".afterEditAction"] = 1;
	$tdatadoc_settings[".closePopupAfterEdit"] = 1;
	$tdatadoc_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadoc_settings[".add"] = true;
$tdatadoc_settings[".afterAddAction"] = 1;
$tdatadoc_settings[".closePopupAfterAdd"] = 1;
$tdatadoc_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadoc_settings[".list"] = true;
}



$tdatadoc_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadoc_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadoc_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadoc_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadoc_settings[".printFriendly"] = true;
}



$tdatadoc_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadoc_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadoc_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadoc_settings[".isUseAjaxSuggest"] = true;



															

$tdatadoc_settings[".ajaxCodeSnippetAdded"] = false;

$tdatadoc_settings[".buttonsAdded"] = false;

$tdatadoc_settings[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadoc_settings[".isUseTimeForSearch"] = false;


$tdatadoc_settings[".badgeColor"] = "778899";


$tdatadoc_settings[".allSearchFields"] = array();
$tdatadoc_settings[".filterFields"] = array();
$tdatadoc_settings[".requiredSearchFields"] = array();

$tdatadoc_settings[".googleLikeFields"] = array();
$tdatadoc_settings[".googleLikeFields"][] = "id";
$tdatadoc_settings[".googleLikeFields"][] = "upload_path";
$tdatadoc_settings[".googleLikeFields"][] = "isStructure";
$tdatadoc_settings[".googleLikeFields"][] = "isVersions";



$tdatadoc_settings[".tableType"] = "list";

$tdatadoc_settings[".printerPageOrientation"] = 0;
$tdatadoc_settings[".nPrinterPageScale"] = 100;

$tdatadoc_settings[".nPrinterSplitRecords"] = 40;

$tdatadoc_settings[".geocodingEnabled"] = false;










$tdatadoc_settings[".pageSize"] = 20;

$tdatadoc_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadoc_settings[".strOrderBy"] = $tstrOrderBy;

$tdatadoc_settings[".orderindexes"] = array();


$tdatadoc_settings[".sqlHead"] = "SELECT id,  upload_path,  isStructure,  isVersions";
$tdatadoc_settings[".sqlFrom"] = "FROM doc_settings";
$tdatadoc_settings[".sqlWhereExpr"] = "";
$tdatadoc_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadoc_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadoc_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatadoc_settings[".highlightSearchResults"] = true;

$tableKeysdoc_settings = array();
$tableKeysdoc_settings[] = "id";
$tdatadoc_settings[".Keys"] = $tableKeysdoc_settings;


$tdatadoc_settings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "doc_settings";
	$fdata["Label"] = GetFieldLabel("doc_settings","id");
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


	$tdatadoc_settings["id"] = $fdata;
		$tdatadoc_settings[".searchableFields"][] = "id";
//	upload_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "upload_path";
	$fdata["GoodName"] = "upload_path";
	$fdata["ownerTable"] = "doc_settings";
	$fdata["Label"] = GetFieldLabel("doc_settings","upload_path");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "upload_path";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upload_path";

	
	
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


	$tdatadoc_settings["upload_path"] = $fdata;
		$tdatadoc_settings[".searchableFields"][] = "upload_path";
//	isStructure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "isStructure";
	$fdata["GoodName"] = "isStructure";
	$fdata["ownerTable"] = "doc_settings";
	$fdata["Label"] = GetFieldLabel("doc_settings","isStructure");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "isStructure";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isStructure";

	
	
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
	$edata["LookupTable"] = "doc_savemethod";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "methodValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mehodName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatadoc_settings["isStructure"] = $fdata;
		$tdatadoc_settings[".searchableFields"][] = "isStructure";
//	isVersions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "isVersions";
	$fdata["GoodName"] = "isVersions";
	$fdata["ownerTable"] = "doc_settings";
	$fdata["Label"] = GetFieldLabel("doc_settings","isVersions");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "isVersions";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isVersions";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatadoc_settings["isVersions"] = $fdata;
		$tdatadoc_settings[".searchableFields"][] = "isVersions";


$tables_data["doc_settings"]=&$tdatadoc_settings;
$field_labels["doc_settings"] = &$fieldLabelsdoc_settings;
$fieldToolTips["doc_settings"] = &$fieldToolTipsdoc_settings;
$placeHolders["doc_settings"] = &$placeHoldersdoc_settings;
$page_titles["doc_settings"] = &$pageTitlesdoc_settings;


changeTextControlsToDate( "doc_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["doc_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["doc_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_doc_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  upload_path,  isStructure,  isVersions";
$proto0["m_strFrom"] = "FROM doc_settings";
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
	"m_strTable" => "doc_settings",
	"m_srcTableName" => "doc_settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "doc_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "upload_path",
	"m_strTable" => "doc_settings",
	"m_srcTableName" => "doc_settings"
));

$proto8["m_sql"] = "upload_path";
$proto8["m_srcTableName"] = "doc_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "isStructure",
	"m_strTable" => "doc_settings",
	"m_srcTableName" => "doc_settings"
));

$proto10["m_sql"] = "isStructure";
$proto10["m_srcTableName"] = "doc_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "isVersions",
	"m_strTable" => "doc_settings",
	"m_srcTableName" => "doc_settings"
));

$proto12["m_sql"] = "isVersions";
$proto12["m_srcTableName"] = "doc_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "doc_settings";
$proto15["m_srcTableName"] = "doc_settings";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "upload_path";
$proto15["m_columns"][] = "isStructure";
$proto15["m_columns"][] = "isVersions";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "doc_settings";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "doc_settings";
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
$proto0["m_srcTableName"]="doc_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_doc_settings = createSqlQuery_doc_settings();


	
					
;

				

$tdatadoc_settings[".sqlquery"] = $queryData_doc_settings;



include_once(getabspath("include/doc_settings_events.php"));
$tdatadoc_settings[".hasEvents"] = true;

?>