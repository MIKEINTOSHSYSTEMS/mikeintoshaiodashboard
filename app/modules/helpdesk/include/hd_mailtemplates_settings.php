<?php
$tdatahd_mailtemplates = array();
$tdatahd_mailtemplates[".searchableFields"] = array();
$tdatahd_mailtemplates[".ShortName"] = "hd_mailtemplates";
$tdatahd_mailtemplates[".OwnerID"] = "user_id";
$tdatahd_mailtemplates[".OriginalTable"] = "hd_mailtemplates";


$tdatahd_mailtemplates[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahd_mailtemplates[".originalPagesByType"] = $tdatahd_mailtemplates[".pagesByType"];
$tdatahd_mailtemplates[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahd_mailtemplates[".originalPages"] = $tdatahd_mailtemplates[".pages"];
$tdatahd_mailtemplates[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatahd_mailtemplates[".originalDefaultPages"] = $tdatahd_mailtemplates[".defaultPages"];

//	field labels
$fieldLabelshd_mailtemplates = array();
$fieldToolTipshd_mailtemplates = array();
$pageTitleshd_mailtemplates = array();
$placeHoldershd_mailtemplates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_mailtemplates["English"] = array();
	$fieldToolTipshd_mailtemplates["English"] = array();
	$placeHoldershd_mailtemplates["English"] = array();
	$pageTitleshd_mailtemplates["English"] = array();
	$fieldLabelshd_mailtemplates["English"]["id"] = "Insert macro:";
	$fieldToolTipshd_mailtemplates["English"]["id"] = "";
	$placeHoldershd_mailtemplates["English"]["id"] = "";
	$fieldLabelshd_mailtemplates["English"]["user_id"] = "User Id";
	$fieldToolTipshd_mailtemplates["English"]["user_id"] = "";
	$placeHoldershd_mailtemplates["English"]["user_id"] = "";
	$fieldLabelshd_mailtemplates["English"]["template"] = "Template";
	$fieldToolTipshd_mailtemplates["English"]["template"] = "";
	$placeHoldershd_mailtemplates["English"]["template"] = "";
	$fieldLabelshd_mailtemplates["English"]["type"] = "Template name";
	$fieldToolTipshd_mailtemplates["English"]["type"] = "";
	$placeHoldershd_mailtemplates["English"]["type"] = "";
	if (count($fieldToolTipshd_mailtemplates["English"]))
		$tdatahd_mailtemplates[".isUseToolTips"] = true;
}


	$tdatahd_mailtemplates[".NCSearch"] = true;



$tdatahd_mailtemplates[".shortTableName"] = "hd_mailtemplates";
$tdatahd_mailtemplates[".nSecOptions"] = 1;

$tdatahd_mailtemplates[".mainTableOwnerID"] = "user_id";
$tdatahd_mailtemplates[".entityType"] = 0;
$tdatahd_mailtemplates[".connId"] = "project_at_localhost";


$tdatahd_mailtemplates[".strOriginalTableName"] = "hd_mailtemplates";

	



$tdatahd_mailtemplates[".showAddInPopup"] = false;

$tdatahd_mailtemplates[".showEditInPopup"] = false;

$tdatahd_mailtemplates[".showViewInPopup"] = false;

$tdatahd_mailtemplates[".listAjax"] = false;
//	temporary
//$tdatahd_mailtemplates[".listAjax"] = false;

	$tdatahd_mailtemplates[".audit"] = false;

	$tdatahd_mailtemplates[".locking"] = false;


$pages = $tdatahd_mailtemplates[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_mailtemplates[".edit"] = true;
	$tdatahd_mailtemplates[".afterEditAction"] = 1;
	$tdatahd_mailtemplates[".closePopupAfterEdit"] = 1;
	$tdatahd_mailtemplates[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_mailtemplates[".add"] = true;
$tdatahd_mailtemplates[".afterAddAction"] = 1;
$tdatahd_mailtemplates[".closePopupAfterAdd"] = 1;
$tdatahd_mailtemplates[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_mailtemplates[".list"] = true;
}



$tdatahd_mailtemplates[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_mailtemplates[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_mailtemplates[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_mailtemplates[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_mailtemplates[".printFriendly"] = true;
}



$tdatahd_mailtemplates[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_mailtemplates[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_mailtemplates[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_mailtemplates[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_mailtemplates[".ajaxCodeSnippetAdded"] = false;

$tdatahd_mailtemplates[".buttonsAdded"] = false;

$tdatahd_mailtemplates[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_mailtemplates[".isUseTimeForSearch"] = false;


$tdatahd_mailtemplates[".badgeColor"] = "778899";


$tdatahd_mailtemplates[".allSearchFields"] = array();
$tdatahd_mailtemplates[".filterFields"] = array();
$tdatahd_mailtemplates[".requiredSearchFields"] = array();

$tdatahd_mailtemplates[".googleLikeFields"] = array();
$tdatahd_mailtemplates[".googleLikeFields"][] = "id";
$tdatahd_mailtemplates[".googleLikeFields"][] = "user_id";
$tdatahd_mailtemplates[".googleLikeFields"][] = "template";
$tdatahd_mailtemplates[".googleLikeFields"][] = "type";



$tdatahd_mailtemplates[".tableType"] = "list";

$tdatahd_mailtemplates[".printerPageOrientation"] = 0;
$tdatahd_mailtemplates[".nPrinterPageScale"] = 100;

$tdatahd_mailtemplates[".nPrinterSplitRecords"] = 40;

$tdatahd_mailtemplates[".geocodingEnabled"] = false;










$tdatahd_mailtemplates[".pageSize"] = 20;

$tdatahd_mailtemplates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_mailtemplates[".strOrderBy"] = $tstrOrderBy;

$tdatahd_mailtemplates[".orderindexes"] = array();


$tdatahd_mailtemplates[".sqlHead"] = "SELECT id,  user_id,  template,  `type`";
$tdatahd_mailtemplates[".sqlFrom"] = "FROM hd_mailtemplates";
$tdatahd_mailtemplates[".sqlWhereExpr"] = "";
$tdatahd_mailtemplates[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_mailtemplates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_mailtemplates[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_mailtemplates[".highlightSearchResults"] = true;

$tableKeyshd_mailtemplates = array();
$tableKeyshd_mailtemplates[] = "id";
$tdatahd_mailtemplates[".Keys"] = $tableKeyshd_mailtemplates;


$tdatahd_mailtemplates[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_mailtemplates";
	$fdata["Label"] = GetFieldLabel("hd_mailtemplates","id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "From Email|%fromEmail%";
	$edata["LookupValues"][] = "From Name|%fromName%";
	$edata["LookupValues"][] = "Knowledgebase|%KBase%";
	$edata["LookupValues"][] = "Text body|%TextBody%";
	$edata["LookupValues"][] = "To Name|%toName%";

	
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


	$tdatahd_mailtemplates["id"] = $fdata;
		$tdatahd_mailtemplates[".searchableFields"][] = "id";
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "hd_mailtemplates";
	$fdata["Label"] = GetFieldLabel("hd_mailtemplates","user_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "user_id";

		$fdata["sourceSingle"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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


	$tdatahd_mailtemplates["user_id"] = $fdata;
		$tdatahd_mailtemplates[".searchableFields"][] = "user_id";
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "hd_mailtemplates";
	$fdata["Label"] = GetFieldLabel("hd_mailtemplates","template");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "template";

		$fdata["sourceSingle"] = "template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatahd_mailtemplates["template"] = $fdata;
		$tdatahd_mailtemplates[".searchableFields"][] = "template";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "hd_mailtemplates";
	$fdata["Label"] = GetFieldLabel("hd_mailtemplates","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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


	$tdatahd_mailtemplates["type"] = $fdata;
		$tdatahd_mailtemplates[".searchableFields"][] = "type";


$tables_data["hd_mailtemplates"]=&$tdatahd_mailtemplates;
$field_labels["hd_mailtemplates"] = &$fieldLabelshd_mailtemplates;
$fieldToolTips["hd_mailtemplates"] = &$fieldToolTipshd_mailtemplates;
$placeHolders["hd_mailtemplates"] = &$placeHoldershd_mailtemplates;
$page_titles["hd_mailtemplates"] = &$pageTitleshd_mailtemplates;


changeTextControlsToDate( "hd_mailtemplates" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_mailtemplates"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_mailtemplates"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_mailtemplates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  user_id,  template,  `type`";
$proto0["m_strFrom"] = "FROM hd_mailtemplates";
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
	"m_strTable" => "hd_mailtemplates",
	"m_srcTableName" => "hd_mailtemplates"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_mailtemplates";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "hd_mailtemplates",
	"m_srcTableName" => "hd_mailtemplates"
));

$proto8["m_sql"] = "user_id";
$proto8["m_srcTableName"] = "hd_mailtemplates";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "hd_mailtemplates",
	"m_srcTableName" => "hd_mailtemplates"
));

$proto10["m_sql"] = "template";
$proto10["m_srcTableName"] = "hd_mailtemplates";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "hd_mailtemplates",
	"m_srcTableName" => "hd_mailtemplates"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "hd_mailtemplates";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "hd_mailtemplates";
$proto15["m_srcTableName"] = "hd_mailtemplates";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "user_id";
$proto15["m_columns"][] = "template";
$proto15["m_columns"][] = "type";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "hd_mailtemplates";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "hd_mailtemplates";
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
$proto0["m_srcTableName"]="hd_mailtemplates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_mailtemplates = createSqlQuery_hd_mailtemplates();


	
		;

				

$tdatahd_mailtemplates[".sqlquery"] = $queryData_hd_mailtemplates;



include_once(getabspath("include/hd_mailtemplates_events.php"));
$tdatahd_mailtemplates[".hasEvents"] = true;

?>