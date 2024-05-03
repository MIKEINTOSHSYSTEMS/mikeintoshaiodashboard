<?php
$tdatatodocomments = array();
$tdatatodocomments[".searchableFields"] = array();
$tdatatodocomments[".ShortName"] = "todocomments";
$tdatatodocomments[".OwnerID"] = "ownerid";
$tdatatodocomments[".OriginalTable"] = "todocomments";


$tdatatodocomments[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatodocomments[".originalPagesByType"] = $tdatatodocomments[".pagesByType"];
$tdatatodocomments[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatodocomments[".originalPages"] = $tdatatodocomments[".pages"];
$tdatatodocomments[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatodocomments[".originalDefaultPages"] = $tdatatodocomments[".defaultPages"];

//	field labels
$fieldLabelstodocomments = array();
$fieldToolTipstodocomments = array();
$pageTitlestodocomments = array();
$placeHolderstodocomments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodocomments["English"] = array();
	$fieldToolTipstodocomments["English"] = array();
	$placeHolderstodocomments["English"] = array();
	$pageTitlestodocomments["English"] = array();
	$fieldLabelstodocomments["English"]["id"] = "Id";
	$fieldToolTipstodocomments["English"]["id"] = "";
	$placeHolderstodocomments["English"]["id"] = "";
	$fieldLabelstodocomments["English"]["cardid"] = "Cardid";
	$fieldToolTipstodocomments["English"]["cardid"] = "";
	$placeHolderstodocomments["English"]["cardid"] = "";
	$fieldLabelstodocomments["English"]["comment"] = "Comment";
	$fieldToolTipstodocomments["English"]["comment"] = "";
	$placeHolderstodocomments["English"]["comment"] = "";
	$fieldLabelstodocomments["English"]["ownerid"] = "Username";
	$fieldToolTipstodocomments["English"]["ownerid"] = "";
	$placeHolderstodocomments["English"]["ownerid"] = "";
	$fieldLabelstodocomments["English"]["commtime"] = "Date";
	$fieldToolTipstodocomments["English"]["commtime"] = "";
	$placeHolderstodocomments["English"]["commtime"] = "";
	$pageTitlestodocomments["English"]["edit"] = "Edit Comment";
	$pageTitlestodocomments["English"]["add"] = "Add Comment";
	if (count($fieldToolTipstodocomments["English"]))
		$tdatatodocomments[".isUseToolTips"] = true;
}


	$tdatatodocomments[".NCSearch"] = true;



$tdatatodocomments[".shortTableName"] = "todocomments";
$tdatatodocomments[".nSecOptions"] = 2;

$tdatatodocomments[".mainTableOwnerID"] = "ownerid";
$tdatatodocomments[".entityType"] = 0;
$tdatatodocomments[".connId"] = "project_at_localhost";


$tdatatodocomments[".strOriginalTableName"] = "todocomments";

	



$tdatatodocomments[".showAddInPopup"] = false;

$tdatatodocomments[".showEditInPopup"] = false;

$tdatatodocomments[".showViewInPopup"] = false;

$tdatatodocomments[".listAjax"] = false;
//	temporary
//$tdatatodocomments[".listAjax"] = false;

	$tdatatodocomments[".audit"] = false;

	$tdatatodocomments[".locking"] = false;


$pages = $tdatatodocomments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodocomments[".edit"] = true;
	$tdatatodocomments[".afterEditAction"] = 1;
	$tdatatodocomments[".closePopupAfterEdit"] = 1;
	$tdatatodocomments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodocomments[".add"] = true;
$tdatatodocomments[".afterAddAction"] = 1;
$tdatatodocomments[".closePopupAfterAdd"] = 1;
$tdatatodocomments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodocomments[".list"] = true;
}



$tdatatodocomments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodocomments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodocomments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodocomments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodocomments[".printFriendly"] = true;
}



$tdatatodocomments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodocomments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodocomments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodocomments[".isUseAjaxSuggest"] = true;



																																																

$tdatatodocomments[".ajaxCodeSnippetAdded"] = false;

$tdatatodocomments[".buttonsAdded"] = false;

$tdatatodocomments[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatodocomments[".isUseTimeForSearch"] = false;


$tdatatodocomments[".badgeColor"] = "edca00";


$tdatatodocomments[".allSearchFields"] = array();
$tdatatodocomments[".filterFields"] = array();
$tdatatodocomments[".requiredSearchFields"] = array();

$tdatatodocomments[".googleLikeFields"] = array();
$tdatatodocomments[".googleLikeFields"][] = "id";
$tdatatodocomments[".googleLikeFields"][] = "cardid";
$tdatatodocomments[".googleLikeFields"][] = "comment";
$tdatatodocomments[".googleLikeFields"][] = "ownerid";
$tdatatodocomments[".googleLikeFields"][] = "commtime";



$tdatatodocomments[".tableType"] = "list";

$tdatatodocomments[".printerPageOrientation"] = 0;
$tdatatodocomments[".nPrinterPageScale"] = 100;

$tdatatodocomments[".nPrinterSplitRecords"] = 40;

$tdatatodocomments[".geocodingEnabled"] = false;










$tdatatodocomments[".pageSize"] = 20;

$tdatatodocomments[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY commtime DESC";
$tdatatodocomments[".strOrderBy"] = $tstrOrderBy;

$tdatatodocomments[".orderindexes"] = array();
	$tdatatodocomments[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "commtime");



$tdatatodocomments[".sqlHead"] = "SELECT id,  cardid,  `comment`,  ownerid,  commtime";
$tdatatodocomments[".sqlFrom"] = "FROM todocomments";
$tdatatodocomments[".sqlWhereExpr"] = "";
$tdatatodocomments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodocomments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodocomments[".arrGroupsPerPage"] = $arrGPP;

$tdatatodocomments[".highlightSearchResults"] = true;

$tableKeystodocomments = array();
$tableKeystodocomments[] = "id";
$tdatatodocomments[".Keys"] = $tableKeystodocomments;


$tdatatodocomments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todocomments";
	$fdata["Label"] = GetFieldLabel("todocomments","id");
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


	$tdatatodocomments["id"] = $fdata;
		$tdatatodocomments[".searchableFields"][] = "id";
//	cardid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cardid";
	$fdata["GoodName"] = "cardid";
	$fdata["ownerTable"] = "todocomments";
	$fdata["Label"] = GetFieldLabel("todocomments","cardid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cardid";

		$fdata["sourceSingle"] = "cardid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cardid";

	
	
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


	$tdatatodocomments["cardid"] = $fdata;
		$tdatatodocomments[".searchableFields"][] = "cardid";
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "todocomments";
	$fdata["Label"] = GetFieldLabel("todocomments","comment");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "comment";

		$fdata["sourceSingle"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 320;
			$edata["nCols"] = 200;

	
	
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


	$tdatatodocomments["comment"] = $fdata;
		$tdatatodocomments[".searchableFields"][] = "comment";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "todocomments";
	$fdata["Label"] = GetFieldLabel("todocomments","ownerid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ownerid";

		$fdata["sourceSingle"] = "ownerid";

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "todousers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatatodocomments["ownerid"] = $fdata;
		$tdatatodocomments[".searchableFields"][] = "ownerid";
//	commtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "commtime";
	$fdata["GoodName"] = "commtime";
	$fdata["ownerTable"] = "todocomments";
	$fdata["Label"] = GetFieldLabel("todocomments","commtime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "commtime";

		$fdata["sourceSingle"] = "commtime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commtime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatodocomments["commtime"] = $fdata;
		$tdatatodocomments[".searchableFields"][] = "commtime";


$tables_data["todocomments"]=&$tdatatodocomments;
$field_labels["todocomments"] = &$fieldLabelstodocomments;
$fieldToolTips["todocomments"] = &$fieldToolTipstodocomments;
$placeHolders["todocomments"] = &$placeHolderstodocomments;
$page_titles["todocomments"] = &$pageTitlestodocomments;


changeTextControlsToDate( "todocomments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todocomments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todocomments"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="todocards";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="todocards";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "todocards";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["todocomments"][0] = $masterParams;
				$masterTablesData["todocomments"][0]["masterKeys"] = array();
	$masterTablesData["todocomments"][0]["masterKeys"][]="id";
				$masterTablesData["todocomments"][0]["detailKeys"] = array();
	$masterTablesData["todocomments"][0]["detailKeys"][]="cardid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todocomments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  cardid,  `comment`,  ownerid,  commtime";
$proto0["m_strFrom"] = "FROM todocomments";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY commtime DESC";
	
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
	"m_strTable" => "todocomments",
	"m_srcTableName" => "todocomments"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todocomments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cardid",
	"m_strTable" => "todocomments",
	"m_srcTableName" => "todocomments"
));

$proto8["m_sql"] = "cardid";
$proto8["m_srcTableName"] = "todocomments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "todocomments",
	"m_srcTableName" => "todocomments"
));

$proto10["m_sql"] = "`comment`";
$proto10["m_srcTableName"] = "todocomments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "todocomments",
	"m_srcTableName" => "todocomments"
));

$proto12["m_sql"] = "ownerid";
$proto12["m_srcTableName"] = "todocomments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "commtime",
	"m_strTable" => "todocomments",
	"m_srcTableName" => "todocomments"
));

$proto14["m_sql"] = "commtime";
$proto14["m_srcTableName"] = "todocomments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "todocomments";
$proto17["m_srcTableName"] = "todocomments";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "cardid";
$proto17["m_columns"][] = "comment";
$proto17["m_columns"][] = "ownerid";
$proto17["m_columns"][] = "commtime";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "todocomments";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "todocomments";
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
	"m_strName" => "commtime",
	"m_strTable" => "todocomments",
	"m_srcTableName" => "todocomments"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="todocomments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todocomments = createSqlQuery_todocomments();


	
		;

					

$tdatatodocomments[".sqlquery"] = $queryData_todocomments;



include_once(getabspath("include/todocomments_events.php"));
$tdatatodocomments[".hasEvents"] = true;

?>