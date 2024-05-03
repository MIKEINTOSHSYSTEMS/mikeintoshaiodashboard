<?php
$tdatahd_folders = array();
$tdatahd_folders[".searchableFields"] = array();
$tdatahd_folders[".ShortName"] = "hd_folders";
$tdatahd_folders[".OwnerID"] = "";
$tdatahd_folders[".OriginalTable"] = "hd_folders";


$tdatahd_folders[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatahd_folders[".originalPagesByType"] = $tdatahd_folders[".pagesByType"];
$tdatahd_folders[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatahd_folders[".originalPages"] = $tdatahd_folders[".pages"];
$tdatahd_folders[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatahd_folders[".originalDefaultPages"] = $tdatahd_folders[".defaultPages"];

//	field labels
$fieldLabelshd_folders = array();
$fieldToolTipshd_folders = array();
$pageTitleshd_folders = array();
$placeHoldershd_folders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_folders["English"] = array();
	$fieldToolTipshd_folders["English"] = array();
	$placeHoldershd_folders["English"] = array();
	$pageTitleshd_folders["English"] = array();
	$fieldLabelshd_folders["English"]["id"] = "Total Tickets";
	$fieldToolTipshd_folders["English"]["id"] = "";
	$placeHoldershd_folders["English"]["id"] = "";
	$fieldLabelshd_folders["English"]["foldername"] = "Folder name";
	$fieldToolTipshd_folders["English"]["foldername"] = "";
	$placeHoldershd_folders["English"]["foldername"] = "";
	$fieldLabelshd_folders["English"]["lastticket"] = "Last ticket";
	$fieldToolTipshd_folders["English"]["lastticket"] = "";
	$placeHoldershd_folders["English"]["lastticket"] = "";
	$pageTitleshd_folders["English"]["masterlist"] = "Folders";
	if (count($fieldToolTipshd_folders["English"]))
		$tdatahd_folders[".isUseToolTips"] = true;
}


	$tdatahd_folders[".NCSearch"] = true;



$tdatahd_folders[".shortTableName"] = "hd_folders";
$tdatahd_folders[".nSecOptions"] = 0;

$tdatahd_folders[".mainTableOwnerID"] = "";
$tdatahd_folders[".entityType"] = 0;
$tdatahd_folders[".connId"] = "project_at_localhost";


$tdatahd_folders[".strOriginalTableName"] = "hd_folders";

	



$tdatahd_folders[".showAddInPopup"] = false;

$tdatahd_folders[".showEditInPopup"] = false;

$tdatahd_folders[".showViewInPopup"] = false;

$tdatahd_folders[".listAjax"] = false;
//	temporary
//$tdatahd_folders[".listAjax"] = false;

	$tdatahd_folders[".audit"] = false;

	$tdatahd_folders[".locking"] = false;


$pages = $tdatahd_folders[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_folders[".edit"] = true;
	$tdatahd_folders[".afterEditAction"] = 1;
	$tdatahd_folders[".closePopupAfterEdit"] = 1;
	$tdatahd_folders[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_folders[".add"] = true;
$tdatahd_folders[".afterAddAction"] = 1;
$tdatahd_folders[".closePopupAfterAdd"] = 1;
$tdatahd_folders[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_folders[".list"] = true;
}



$tdatahd_folders[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_folders[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_folders[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_folders[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_folders[".printFriendly"] = true;
}



$tdatahd_folders[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_folders[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_folders[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_folders[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_folders[".ajaxCodeSnippetAdded"] = false;

$tdatahd_folders[".buttonsAdded"] = false;

$tdatahd_folders[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_folders[".isUseTimeForSearch"] = false;


$tdatahd_folders[".badgeColor"] = "00C2C5";


$tdatahd_folders[".allSearchFields"] = array();
$tdatahd_folders[".filterFields"] = array();
$tdatahd_folders[".requiredSearchFields"] = array();

$tdatahd_folders[".googleLikeFields"] = array();
$tdatahd_folders[".googleLikeFields"][] = "id";
$tdatahd_folders[".googleLikeFields"][] = "foldername";
$tdatahd_folders[".googleLikeFields"][] = "lastticket";



$tdatahd_folders[".tableType"] = "list";

$tdatahd_folders[".printerPageOrientation"] = 0;
$tdatahd_folders[".nPrinterPageScale"] = 100;

$tdatahd_folders[".nPrinterSplitRecords"] = 40;

$tdatahd_folders[".geocodingEnabled"] = false;










$tdatahd_folders[".pageSize"] = 20;

$tdatahd_folders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_folders[".strOrderBy"] = $tstrOrderBy;

$tdatahd_folders[".orderindexes"] = array();


$tdatahd_folders[".sqlHead"] = "SELECT id,  foldername,  lastticket";
$tdatahd_folders[".sqlFrom"] = "FROM hd_folders";
$tdatahd_folders[".sqlWhereExpr"] = "";
$tdatahd_folders[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_folders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_folders[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_folders[".highlightSearchResults"] = true;

$tableKeyshd_folders = array();
$tableKeyshd_folders[] = "id";
$tdatahd_folders[".Keys"] = $tableKeyshd_folders;


$tdatahd_folders[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_folders";
	$fdata["Label"] = GetFieldLabel("hd_folders","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatahd_folders["id"] = $fdata;
		$tdatahd_folders[".searchableFields"][] = "id";
//	foldername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "foldername";
	$fdata["GoodName"] = "foldername";
	$fdata["ownerTable"] = "hd_folders";
	$fdata["Label"] = GetFieldLabel("hd_folders","foldername");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "foldername";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foldername";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahd_folders["foldername"] = $fdata;
		$tdatahd_folders[".searchableFields"][] = "foldername";
//	lastticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lastticket";
	$fdata["GoodName"] = "lastticket";
	$fdata["ownerTable"] = "hd_folders";
	$fdata["Label"] = GetFieldLabel("hd_folders","lastticket");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "lastticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastticket";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatahd_folders["lastticket"] = $fdata;
		$tdatahd_folders[".searchableFields"][] = "lastticket";


$tables_data["hd_folders"]=&$tdatahd_folders;
$field_labels["hd_folders"] = &$fieldLabelshd_folders;
$fieldToolTips["hd_folders"] = &$fieldToolTipshd_folders;
$placeHolders["hd_folders"] = &$placeHoldershd_folders;
$page_titles["hd_folders"] = &$pageTitleshd_folders;


changeTextControlsToDate( "hd_folders" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_folders"] = array();
//	hd_tickets
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hd_tickets";
		$detailsParam["dOriginalTable"] = "hd_tickets";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hd_tickets";
	$detailsParam["dCaptionTable"] = GetTableCaption("hd_tickets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hd_folders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hd_folders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hd_folders"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["hd_folders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hd_folders"][$dIndex]["detailKeys"][]="folderid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_folders"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_folders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  foldername,  lastticket";
$proto0["m_strFrom"] = "FROM hd_folders";
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
	"m_strTable" => "hd_folders",
	"m_srcTableName" => "hd_folders"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_folders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "foldername",
	"m_strTable" => "hd_folders",
	"m_srcTableName" => "hd_folders"
));

$proto8["m_sql"] = "foldername";
$proto8["m_srcTableName"] = "hd_folders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lastticket",
	"m_strTable" => "hd_folders",
	"m_srcTableName" => "hd_folders"
));

$proto10["m_sql"] = "lastticket";
$proto10["m_srcTableName"] = "hd_folders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hd_folders";
$proto13["m_srcTableName"] = "hd_folders";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "foldername";
$proto13["m_columns"][] = "lastticket";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hd_folders";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hd_folders";
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
$proto0["m_srcTableName"]="hd_folders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_folders = createSqlQuery_hd_folders();


	
		;

			

$tdatahd_folders[".sqlquery"] = $queryData_hd_folders;



include_once(getabspath("include/hd_folders_events.php"));
$tdatahd_folders[".hasEvents"] = true;

?>