<?php
$tdatachat_files = array();
$tdatachat_files[".searchableFields"] = array();
$tdatachat_files[".ShortName"] = "chat_files";
$tdatachat_files[".OwnerID"] = "";
$tdatachat_files[".OriginalTable"] = "chat_files";


$tdatachat_files[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatachat_files[".originalPagesByType"] = $tdatachat_files[".pagesByType"];
$tdatachat_files[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatachat_files[".originalPages"] = $tdatachat_files[".pages"];
$tdatachat_files[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatachat_files[".originalDefaultPages"] = $tdatachat_files[".defaultPages"];

//	field labels
$fieldLabelschat_files = array();
$fieldToolTipschat_files = array();
$pageTitleschat_files = array();
$placeHolderschat_files = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_files["English"] = array();
	$fieldToolTipschat_files["English"] = array();
	$placeHolderschat_files["English"] = array();
	$pageTitleschat_files["English"] = array();
	$fieldLabelschat_files["English"]["id"] = "Id";
	$fieldToolTipschat_files["English"]["id"] = "";
	$placeHolderschat_files["English"]["id"] = "";
	$fieldLabelschat_files["English"]["messageid"] = "Messageid";
	$fieldToolTipschat_files["English"]["messageid"] = "";
	$placeHolderschat_files["English"]["messageid"] = "";
	$fieldLabelschat_files["English"]["files"] = "Files";
	$fieldToolTipschat_files["English"]["files"] = "";
	$placeHolderschat_files["English"]["files"] = "";
	if (count($fieldToolTipschat_files["English"]))
		$tdatachat_files[".isUseToolTips"] = true;
}


	$tdatachat_files[".NCSearch"] = true;



$tdatachat_files[".shortTableName"] = "chat_files";
$tdatachat_files[".nSecOptions"] = 0;

$tdatachat_files[".mainTableOwnerID"] = "";
$tdatachat_files[".entityType"] = 0;
$tdatachat_files[".connId"] = "project_at_localhost";


$tdatachat_files[".strOriginalTableName"] = "chat_files";

	



$tdatachat_files[".showAddInPopup"] = false;

$tdatachat_files[".showEditInPopup"] = false;

$tdatachat_files[".showViewInPopup"] = false;

$tdatachat_files[".listAjax"] = false;
//	temporary
//$tdatachat_files[".listAjax"] = false;

	$tdatachat_files[".audit"] = false;

	$tdatachat_files[".locking"] = false;


$pages = $tdatachat_files[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_files[".edit"] = true;
	$tdatachat_files[".afterEditAction"] = 1;
	$tdatachat_files[".closePopupAfterEdit"] = 1;
	$tdatachat_files[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_files[".add"] = true;
$tdatachat_files[".afterAddAction"] = 1;
$tdatachat_files[".closePopupAfterAdd"] = 1;
$tdatachat_files[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_files[".list"] = true;
}



$tdatachat_files[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_files[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_files[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_files[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_files[".printFriendly"] = true;
}



$tdatachat_files[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_files[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_files[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_files[".isUseAjaxSuggest"] = true;



																																				

$tdatachat_files[".ajaxCodeSnippetAdded"] = false;

$tdatachat_files[".buttonsAdded"] = false;

$tdatachat_files[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachat_files[".isUseTimeForSearch"] = false;


$tdatachat_files[".badgeColor"] = "7B68EE";


$tdatachat_files[".allSearchFields"] = array();
$tdatachat_files[".filterFields"] = array();
$tdatachat_files[".requiredSearchFields"] = array();

$tdatachat_files[".googleLikeFields"] = array();
$tdatachat_files[".googleLikeFields"][] = "id";
$tdatachat_files[".googleLikeFields"][] = "messageid";
$tdatachat_files[".googleLikeFields"][] = "files";



$tdatachat_files[".tableType"] = "list";

$tdatachat_files[".printerPageOrientation"] = 0;
$tdatachat_files[".nPrinterPageScale"] = 100;

$tdatachat_files[".nPrinterSplitRecords"] = 40;

$tdatachat_files[".geocodingEnabled"] = false;










$tdatachat_files[".pageSize"] = 20;

$tdatachat_files[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_files[".strOrderBy"] = $tstrOrderBy;

$tdatachat_files[".orderindexes"] = array();


$tdatachat_files[".sqlHead"] = "SELECT id,  messageid,  files";
$tdatachat_files[".sqlFrom"] = "FROM chat_files";
$tdatachat_files[".sqlWhereExpr"] = "";
$tdatachat_files[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_files[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_files[".highlightSearchResults"] = true;

$tableKeyschat_files = array();
$tableKeyschat_files[] = "id";
$tdatachat_files[".Keys"] = $tableKeyschat_files;


$tdatachat_files[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_files";
	$fdata["Label"] = GetFieldLabel("chat_files","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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


	$tdatachat_files["id"] = $fdata;
		$tdatachat_files[".searchableFields"][] = "id";
//	messageid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "messageid";
	$fdata["GoodName"] = "messageid";
	$fdata["ownerTable"] = "chat_files";
	$fdata["Label"] = GetFieldLabel("chat_files","messageid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "messageid";

		$fdata["sourceSingle"] = "messageid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "messageid";

	
	
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


	$tdatachat_files["messageid"] = $fdata;
		$tdatachat_files[".searchableFields"][] = "messageid";
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "chat_files";
	$fdata["Label"] = GetFieldLabel("chat_files","files");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "files";

		$fdata["sourceSingle"] = "files";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "files";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatachat_files["files"] = $fdata;
		$tdatachat_files[".searchableFields"][] = "files";


$tables_data["chat_files"]=&$tdatachat_files;
$field_labels["chat_files"] = &$fieldLabelschat_files;
$fieldToolTips["chat_files"] = &$fieldToolTipschat_files;
$placeHolders["chat_files"] = &$placeHolderschat_files;
$page_titles["chat_files"] = &$pageTitleschat_files;


changeTextControlsToDate( "chat_files" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_files"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_files"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  messageid,  files";
$proto0["m_strFrom"] = "FROM chat_files";
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
	"m_strTable" => "chat_files",
	"m_srcTableName" => "chat_files"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_files";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "messageid",
	"m_strTable" => "chat_files",
	"m_srcTableName" => "chat_files"
));

$proto8["m_sql"] = "messageid";
$proto8["m_srcTableName"] = "chat_files";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "files",
	"m_strTable" => "chat_files",
	"m_srcTableName" => "chat_files"
));

$proto10["m_sql"] = "files";
$proto10["m_srcTableName"] = "chat_files";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "chat_files";
$proto13["m_srcTableName"] = "chat_files";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "messageid";
$proto13["m_columns"][] = "files";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "chat_files";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "chat_files";
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
$proto0["m_srcTableName"]="chat_files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_files = createSqlQuery_chat_files();


	
		;

			

$tdatachat_files[".sqlquery"] = $queryData_chat_files;



$tdatachat_files[".hasEvents"] = false;

?>