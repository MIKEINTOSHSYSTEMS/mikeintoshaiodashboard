<?php
$tdatachat_groups = array();
$tdatachat_groups[".searchableFields"] = array();
$tdatachat_groups[".ShortName"] = "chat_groups";
$tdatachat_groups[".OwnerID"] = "";
$tdatachat_groups[".OriginalTable"] = "chat_groups";


$tdatachat_groups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatachat_groups[".originalPagesByType"] = $tdatachat_groups[".pagesByType"];
$tdatachat_groups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatachat_groups[".originalPages"] = $tdatachat_groups[".pages"];
$tdatachat_groups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatachat_groups[".originalDefaultPages"] = $tdatachat_groups[".defaultPages"];

//	field labels
$fieldLabelschat_groups = array();
$fieldToolTipschat_groups = array();
$pageTitleschat_groups = array();
$placeHolderschat_groups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_groups["English"] = array();
	$fieldToolTipschat_groups["English"] = array();
	$placeHolderschat_groups["English"] = array();
	$pageTitleschat_groups["English"] = array();
	$fieldLabelschat_groups["English"]["id"] = "Id";
	$fieldToolTipschat_groups["English"]["id"] = "";
	$placeHolderschat_groups["English"]["id"] = "";
	$fieldLabelschat_groups["English"]["groupname"] = "Name";
	$fieldToolTipschat_groups["English"]["groupname"] = "";
	$placeHolderschat_groups["English"]["groupname"] = "";
	$fieldLabelschat_groups["English"]["targetid"] = "";
	$fieldToolTipschat_groups["English"]["targetid"] = "";
	$placeHolderschat_groups["English"]["targetid"] = "";
	$fieldLabelschat_groups["English"]["grouptype"] = "People";
	$fieldToolTipschat_groups["English"]["grouptype"] = "";
	$placeHolderschat_groups["English"]["grouptype"] = "";
	$fieldLabelschat_groups["English"]["ownerid"] = "Ownerid";
	$fieldToolTipschat_groups["English"]["ownerid"] = "";
	$placeHolderschat_groups["English"]["ownerid"] = "";
	if (count($fieldToolTipschat_groups["English"]))
		$tdatachat_groups[".isUseToolTips"] = true;
}


	$tdatachat_groups[".NCSearch"] = true;



$tdatachat_groups[".shortTableName"] = "chat_groups";
$tdatachat_groups[".nSecOptions"] = 0;

$tdatachat_groups[".mainTableOwnerID"] = "";
$tdatachat_groups[".entityType"] = 0;
$tdatachat_groups[".connId"] = "project_at_localhost";


$tdatachat_groups[".strOriginalTableName"] = "chat_groups";

	



$tdatachat_groups[".showAddInPopup"] = false;

$tdatachat_groups[".showEditInPopup"] = false;

$tdatachat_groups[".showViewInPopup"] = false;

$tdatachat_groups[".listAjax"] = false;
//	temporary
//$tdatachat_groups[".listAjax"] = false;

	$tdatachat_groups[".audit"] = false;

	$tdatachat_groups[".locking"] = false;


$pages = $tdatachat_groups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_groups[".edit"] = true;
	$tdatachat_groups[".afterEditAction"] = 1;
	$tdatachat_groups[".closePopupAfterEdit"] = 1;
	$tdatachat_groups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_groups[".add"] = true;
$tdatachat_groups[".afterAddAction"] = 1;
$tdatachat_groups[".closePopupAfterAdd"] = 1;
$tdatachat_groups[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_groups[".list"] = true;
}



$tdatachat_groups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_groups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_groups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_groups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_groups[".printFriendly"] = true;
}



$tdatachat_groups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_groups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_groups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_groups[".isUseAjaxSuggest"] = true;



																																				

$tdatachat_groups[".ajaxCodeSnippetAdded"] = false;

$tdatachat_groups[".buttonsAdded"] = false;

$tdatachat_groups[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachat_groups[".isUseTimeForSearch"] = false;


$tdatachat_groups[".badgeColor"] = "DAA520";


$tdatachat_groups[".allSearchFields"] = array();
$tdatachat_groups[".filterFields"] = array();
$tdatachat_groups[".requiredSearchFields"] = array();

$tdatachat_groups[".googleLikeFields"] = array();
$tdatachat_groups[".googleLikeFields"][] = "id";
$tdatachat_groups[".googleLikeFields"][] = "groupname";
$tdatachat_groups[".googleLikeFields"][] = "targetid";
$tdatachat_groups[".googleLikeFields"][] = "grouptype";
$tdatachat_groups[".googleLikeFields"][] = "ownerid";



$tdatachat_groups[".tableType"] = "list";

$tdatachat_groups[".printerPageOrientation"] = 0;
$tdatachat_groups[".nPrinterPageScale"] = 100;

$tdatachat_groups[".nPrinterSplitRecords"] = 40;

$tdatachat_groups[".geocodingEnabled"] = false;










$tdatachat_groups[".pageSize"] = 20;

$tdatachat_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_groups[".strOrderBy"] = $tstrOrderBy;

$tdatachat_groups[".orderindexes"] = array();


$tdatachat_groups[".sqlHead"] = "SELECT id,  groupname,  targetid,  grouptype,  ownerid";
$tdatachat_groups[".sqlFrom"] = "FROM chat_groups";
$tdatachat_groups[".sqlWhereExpr"] = "";
$tdatachat_groups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_groups[".highlightSearchResults"] = true;

$tableKeyschat_groups = array();
$tableKeyschat_groups[] = "id";
$tdatachat_groups[".Keys"] = $tableKeyschat_groups;


$tdatachat_groups[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_groups";
	$fdata["Label"] = GetFieldLabel("chat_groups","id");
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


	$tdatachat_groups["id"] = $fdata;
		$tdatachat_groups[".searchableFields"][] = "id";
//	groupname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "groupname";
	$fdata["GoodName"] = "groupname";
	$fdata["ownerTable"] = "chat_groups";
	$fdata["Label"] = GetFieldLabel("chat_groups","groupname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupname";

		$fdata["sourceSingle"] = "groupname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupname";

	
	
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


	$tdatachat_groups["groupname"] = $fdata;
		$tdatachat_groups[".searchableFields"][] = "groupname";
//	targetid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "targetid";
	$fdata["GoodName"] = "targetid";
	$fdata["ownerTable"] = "chat_groups";
	$fdata["Label"] = GetFieldLabel("chat_groups","targetid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "targetid";

		$fdata["sourceSingle"] = "targetid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "targetid";

	
	
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
	$edata["LookupValues"][] = "test";
	$edata["LookupValues"][] = "";

		$edata["Multiselect"] = true;

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


	$tdatachat_groups["targetid"] = $fdata;
		$tdatachat_groups[".searchableFields"][] = "targetid";
//	grouptype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "grouptype";
	$fdata["GoodName"] = "grouptype";
	$fdata["ownerTable"] = "chat_groups";
	$fdata["Label"] = GetFieldLabel("chat_groups","grouptype");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "grouptype";

		$fdata["sourceSingle"] = "grouptype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grouptype";

	
	
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
	$edata["LookupTable"] = "chat_peopletype";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatachat_groups["grouptype"] = $fdata;
		$tdatachat_groups[".searchableFields"][] = "grouptype";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "chat_groups";
	$fdata["Label"] = GetFieldLabel("chat_groups","ownerid");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatachat_groups["ownerid"] = $fdata;
		$tdatachat_groups[".searchableFields"][] = "ownerid";


$tables_data["chat_groups"]=&$tdatachat_groups;
$field_labels["chat_groups"] = &$fieldLabelschat_groups;
$fieldToolTips["chat_groups"] = &$fieldToolTipschat_groups;
$placeHolders["chat_groups"] = &$placeHolderschat_groups;
$page_titles["chat_groups"] = &$pageTitleschat_groups;


changeTextControlsToDate( "chat_groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_groups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_groups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  groupname,  targetid,  grouptype,  ownerid";
$proto0["m_strFrom"] = "FROM chat_groups";
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
	"m_strTable" => "chat_groups",
	"m_srcTableName" => "chat_groups"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_groups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "groupname",
	"m_strTable" => "chat_groups",
	"m_srcTableName" => "chat_groups"
));

$proto8["m_sql"] = "groupname";
$proto8["m_srcTableName"] = "chat_groups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "targetid",
	"m_strTable" => "chat_groups",
	"m_srcTableName" => "chat_groups"
));

$proto10["m_sql"] = "targetid";
$proto10["m_srcTableName"] = "chat_groups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "grouptype",
	"m_strTable" => "chat_groups",
	"m_srcTableName" => "chat_groups"
));

$proto12["m_sql"] = "grouptype";
$proto12["m_srcTableName"] = "chat_groups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "chat_groups",
	"m_srcTableName" => "chat_groups"
));

$proto14["m_sql"] = "ownerid";
$proto14["m_srcTableName"] = "chat_groups";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "chat_groups";
$proto17["m_srcTableName"] = "chat_groups";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "groupname";
$proto17["m_columns"][] = "targetid";
$proto17["m_columns"][] = "grouptype";
$proto17["m_columns"][] = "ownerid";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "chat_groups";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "chat_groups";
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
$proto0["m_srcTableName"]="chat_groups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_groups = createSqlQuery_chat_groups();


	
		;

					

$tdatachat_groups[".sqlquery"] = $queryData_chat_groups;



include_once(getabspath("include/chat_groups_events.php"));
$tdatachat_groups[".hasEvents"] = true;

?>