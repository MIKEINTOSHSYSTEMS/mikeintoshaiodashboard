<?php
$tdatachat_users = array();
$tdatachat_users[".searchableFields"] = array();
$tdatachat_users[".ShortName"] = "chat_users";
$tdatachat_users[".OwnerID"] = "";
$tdatachat_users[".OriginalTable"] = "chat_users";


$tdatachat_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatachat_users[".originalPagesByType"] = $tdatachat_users[".pagesByType"];
$tdatachat_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatachat_users[".originalPages"] = $tdatachat_users[".pages"];
$tdatachat_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatachat_users[".originalDefaultPages"] = $tdatachat_users[".defaultPages"];

//	field labels
$fieldLabelschat_users = array();
$fieldToolTipschat_users = array();
$pageTitleschat_users = array();
$placeHolderschat_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_users["English"] = array();
	$fieldToolTipschat_users["English"] = array();
	$placeHolderschat_users["English"] = array();
	$pageTitleschat_users["English"] = array();
	$fieldLabelschat_users["English"]["id"] = "Id";
	$fieldToolTipschat_users["English"]["id"] = "";
	$placeHolderschat_users["English"]["id"] = "";
	$fieldLabelschat_users["English"]["userid"] = "Userid";
	$fieldToolTipschat_users["English"]["userid"] = "";
	$placeHolderschat_users["English"]["userid"] = "";
	$fieldLabelschat_users["English"]["lastaccess"] = "Lastaccess";
	$fieldToolTipschat_users["English"]["lastaccess"] = "";
	$placeHolderschat_users["English"]["lastaccess"] = "";
	$fieldLabelschat_users["English"]["isTyping"] = "Is Typing";
	$fieldToolTipschat_users["English"]["isTyping"] = "";
	$placeHolderschat_users["English"]["isTyping"] = "";
	$fieldLabelschat_users["English"]["userpic"] = "Userpic";
	$fieldToolTipschat_users["English"]["userpic"] = "";
	$placeHolderschat_users["English"]["userpic"] = "";
	if (count($fieldToolTipschat_users["English"]))
		$tdatachat_users[".isUseToolTips"] = true;
}


	$tdatachat_users[".NCSearch"] = true;



$tdatachat_users[".shortTableName"] = "chat_users";
$tdatachat_users[".nSecOptions"] = 0;

$tdatachat_users[".mainTableOwnerID"] = "";
$tdatachat_users[".entityType"] = 0;
$tdatachat_users[".connId"] = "project_at_localhost";


$tdatachat_users[".strOriginalTableName"] = "chat_users";

	



$tdatachat_users[".showAddInPopup"] = false;

$tdatachat_users[".showEditInPopup"] = false;

$tdatachat_users[".showViewInPopup"] = false;

$tdatachat_users[".listAjax"] = false;
//	temporary
//$tdatachat_users[".listAjax"] = false;

	$tdatachat_users[".audit"] = false;

	$tdatachat_users[".locking"] = false;


$pages = $tdatachat_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_users[".edit"] = true;
	$tdatachat_users[".afterEditAction"] = 1;
	$tdatachat_users[".closePopupAfterEdit"] = 1;
	$tdatachat_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_users[".add"] = true;
$tdatachat_users[".afterAddAction"] = 1;
$tdatachat_users[".closePopupAfterAdd"] = 1;
$tdatachat_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_users[".list"] = true;
}



$tdatachat_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_users[".printFriendly"] = true;
}



$tdatachat_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_users[".isUseAjaxSuggest"] = true;



																																				

$tdatachat_users[".ajaxCodeSnippetAdded"] = false;

$tdatachat_users[".buttonsAdded"] = false;

$tdatachat_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachat_users[".isUseTimeForSearch"] = false;


$tdatachat_users[".badgeColor"] = "D2691E";


$tdatachat_users[".allSearchFields"] = array();
$tdatachat_users[".filterFields"] = array();
$tdatachat_users[".requiredSearchFields"] = array();

$tdatachat_users[".googleLikeFields"] = array();
$tdatachat_users[".googleLikeFields"][] = "id";
$tdatachat_users[".googleLikeFields"][] = "userid";
$tdatachat_users[".googleLikeFields"][] = "lastaccess";
$tdatachat_users[".googleLikeFields"][] = "isTyping";



$tdatachat_users[".tableType"] = "list";

$tdatachat_users[".printerPageOrientation"] = 0;
$tdatachat_users[".nPrinterPageScale"] = 100;

$tdatachat_users[".nPrinterSplitRecords"] = 40;

$tdatachat_users[".geocodingEnabled"] = false;










$tdatachat_users[".pageSize"] = 20;

$tdatachat_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_users[".strOrderBy"] = $tstrOrderBy;

$tdatachat_users[".orderindexes"] = array();


$tdatachat_users[".sqlHead"] = "SELECT id,  userid,  lastaccess,  isTyping,  userpic";
$tdatachat_users[".sqlFrom"] = "FROM chat_users";
$tdatachat_users[".sqlWhereExpr"] = "";
$tdatachat_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_users[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_users[".highlightSearchResults"] = true;

$tableKeyschat_users = array();
$tableKeyschat_users[] = "id";
$tdatachat_users[".Keys"] = $tableKeyschat_users;


$tdatachat_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_users";
	$fdata["Label"] = GetFieldLabel("chat_users","id");
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


	$tdatachat_users["id"] = $fdata;
		$tdatachat_users[".searchableFields"][] = "id";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "chat_users";
	$fdata["Label"] = GetFieldLabel("chat_users","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdatachat_users["userid"] = $fdata;
		$tdatachat_users[".searchableFields"][] = "userid";
//	lastaccess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lastaccess";
	$fdata["GoodName"] = "lastaccess";
	$fdata["ownerTable"] = "chat_users";
	$fdata["Label"] = GetFieldLabel("chat_users","lastaccess");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "lastaccess";

		$fdata["sourceSingle"] = "lastaccess";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastaccess";

	
	
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


	$tdatachat_users["lastaccess"] = $fdata;
		$tdatachat_users[".searchableFields"][] = "lastaccess";
//	isTyping
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "isTyping";
	$fdata["GoodName"] = "isTyping";
	$fdata["ownerTable"] = "chat_users";
	$fdata["Label"] = GetFieldLabel("chat_users","isTyping");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "isTyping";

		$fdata["sourceSingle"] = "isTyping";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isTyping";

	
	
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


	$tdatachat_users["isTyping"] = $fdata;
		$tdatachat_users[".searchableFields"][] = "isTyping";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "chat_users";
	$fdata["Label"] = GetFieldLabel("chat_users","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatachat_users["userpic"] = $fdata;
	

$tables_data["chat_users"]=&$tdatachat_users;
$field_labels["chat_users"] = &$fieldLabelschat_users;
$fieldToolTips["chat_users"] = &$fieldToolTipschat_users;
$placeHolders["chat_users"] = &$placeHolderschat_users;
$page_titles["chat_users"] = &$pageTitleschat_users;


changeTextControlsToDate( "chat_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  userid,  lastaccess,  isTyping,  userpic";
$proto0["m_strFrom"] = "FROM chat_users";
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
	"m_strTable" => "chat_users",
	"m_srcTableName" => "chat_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "chat_users",
	"m_srcTableName" => "chat_users"
));

$proto8["m_sql"] = "userid";
$proto8["m_srcTableName"] = "chat_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lastaccess",
	"m_strTable" => "chat_users",
	"m_srcTableName" => "chat_users"
));

$proto10["m_sql"] = "lastaccess";
$proto10["m_srcTableName"] = "chat_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "isTyping",
	"m_strTable" => "chat_users",
	"m_srcTableName" => "chat_users"
));

$proto12["m_sql"] = "isTyping";
$proto12["m_srcTableName"] = "chat_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "chat_users",
	"m_srcTableName" => "chat_users"
));

$proto14["m_sql"] = "userpic";
$proto14["m_srcTableName"] = "chat_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "chat_users";
$proto17["m_srcTableName"] = "chat_users";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "userid";
$proto17["m_columns"][] = "lastaccess";
$proto17["m_columns"][] = "isTyping";
$proto17["m_columns"][] = "userpic";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "chat_users";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "chat_users";
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
$proto0["m_srcTableName"]="chat_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_users = createSqlQuery_chat_users();


	
		;

					

$tdatachat_users[".sqlquery"] = $queryData_chat_users;



$tdatachat_users[".hasEvents"] = false;

?>