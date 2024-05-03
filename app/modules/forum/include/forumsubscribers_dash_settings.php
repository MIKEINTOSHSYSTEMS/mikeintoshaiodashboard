<?php
$tdataforumsubscribers_dash = array();
$tdataforumsubscribers_dash[".searchableFields"] = array();
$tdataforumsubscribers_dash[".ShortName"] = "forumsubscribers_dash";
$tdataforumsubscribers_dash[".OwnerID"] = "userid";
$tdataforumsubscribers_dash[".OriginalTable"] = "forumsubscribers";


$tdataforumsubscribers_dash[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataforumsubscribers_dash[".originalPagesByType"] = $tdataforumsubscribers_dash[".pagesByType"];
$tdataforumsubscribers_dash[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataforumsubscribers_dash[".originalPages"] = $tdataforumsubscribers_dash[".pages"];
$tdataforumsubscribers_dash[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataforumsubscribers_dash[".originalDefaultPages"] = $tdataforumsubscribers_dash[".defaultPages"];

//	field labels
$fieldLabelsforumsubscribers_dash = array();
$fieldToolTipsforumsubscribers_dash = array();
$pageTitlesforumsubscribers_dash = array();
$placeHoldersforumsubscribers_dash = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumsubscribers_dash["English"] = array();
	$fieldToolTipsforumsubscribers_dash["English"] = array();
	$placeHoldersforumsubscribers_dash["English"] = array();
	$pageTitlesforumsubscribers_dash["English"] = array();
	$fieldLabelsforumsubscribers_dash["English"]["id"] = "Id";
	$fieldToolTipsforumsubscribers_dash["English"]["id"] = "";
	$placeHoldersforumsubscribers_dash["English"]["id"] = "";
	$fieldLabelsforumsubscribers_dash["English"]["topicid"] = "Topicid";
	$fieldToolTipsforumsubscribers_dash["English"]["topicid"] = "";
	$placeHoldersforumsubscribers_dash["English"]["topicid"] = "";
	$fieldLabelsforumsubscribers_dash["English"]["topic"] = "Topic";
	$fieldToolTipsforumsubscribers_dash["English"]["topic"] = "";
	$placeHoldersforumsubscribers_dash["English"]["topic"] = "";
	$fieldLabelsforumsubscribers_dash["English"]["userid"] = "Author";
	$fieldToolTipsforumsubscribers_dash["English"]["userid"] = "";
	$placeHoldersforumsubscribers_dash["English"]["userid"] = "";
	$fieldLabelsforumsubscribers_dash["English"]["name"] = "Name";
	$fieldToolTipsforumsubscribers_dash["English"]["name"] = "";
	$placeHoldersforumsubscribers_dash["English"]["name"] = "";
	if (count($fieldToolTipsforumsubscribers_dash["English"]))
		$tdataforumsubscribers_dash[".isUseToolTips"] = true;
}


	$tdataforumsubscribers_dash[".NCSearch"] = true;



$tdataforumsubscribers_dash[".shortTableName"] = "forumsubscribers_dash";
$tdataforumsubscribers_dash[".nSecOptions"] = 0;

$tdataforumsubscribers_dash[".mainTableOwnerID"] = "userid";
$tdataforumsubscribers_dash[".entityType"] = 1;
$tdataforumsubscribers_dash[".connId"] = "project_at_localhost";


$tdataforumsubscribers_dash[".strOriginalTableName"] = "forumsubscribers";

	



$tdataforumsubscribers_dash[".showAddInPopup"] = false;

$tdataforumsubscribers_dash[".showEditInPopup"] = false;

$tdataforumsubscribers_dash[".showViewInPopup"] = false;

$tdataforumsubscribers_dash[".listAjax"] = false;
//	temporary
//$tdataforumsubscribers_dash[".listAjax"] = false;

	$tdataforumsubscribers_dash[".audit"] = false;

	$tdataforumsubscribers_dash[".locking"] = false;


$pages = $tdataforumsubscribers_dash[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumsubscribers_dash[".edit"] = true;
	$tdataforumsubscribers_dash[".afterEditAction"] = 1;
	$tdataforumsubscribers_dash[".closePopupAfterEdit"] = 1;
	$tdataforumsubscribers_dash[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumsubscribers_dash[".add"] = true;
$tdataforumsubscribers_dash[".afterAddAction"] = 1;
$tdataforumsubscribers_dash[".closePopupAfterAdd"] = 1;
$tdataforumsubscribers_dash[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumsubscribers_dash[".list"] = true;
}



$tdataforumsubscribers_dash[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumsubscribers_dash[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumsubscribers_dash[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumsubscribers_dash[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumsubscribers_dash[".printFriendly"] = true;
}



$tdataforumsubscribers_dash[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumsubscribers_dash[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumsubscribers_dash[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumsubscribers_dash[".isUseAjaxSuggest"] = true;



															

$tdataforumsubscribers_dash[".ajaxCodeSnippetAdded"] = false;

$tdataforumsubscribers_dash[".buttonsAdded"] = false;

$tdataforumsubscribers_dash[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumsubscribers_dash[".isUseTimeForSearch"] = false;


$tdataforumsubscribers_dash[".badgeColor"] = "EDCA00";


$tdataforumsubscribers_dash[".allSearchFields"] = array();
$tdataforumsubscribers_dash[".filterFields"] = array();
$tdataforumsubscribers_dash[".requiredSearchFields"] = array();

$tdataforumsubscribers_dash[".googleLikeFields"] = array();
$tdataforumsubscribers_dash[".googleLikeFields"][] = "userid";
$tdataforumsubscribers_dash[".googleLikeFields"][] = "topicid";
$tdataforumsubscribers_dash[".googleLikeFields"][] = "name";
$tdataforumsubscribers_dash[".googleLikeFields"][] = "topic";
$tdataforumsubscribers_dash[".googleLikeFields"][] = "id";



$tdataforumsubscribers_dash[".tableType"] = "list";

$tdataforumsubscribers_dash[".printerPageOrientation"] = 0;
$tdataforumsubscribers_dash[".nPrinterPageScale"] = 100;

$tdataforumsubscribers_dash[".nPrinterSplitRecords"] = 40;

$tdataforumsubscribers_dash[".geocodingEnabled"] = false;










$tdataforumsubscribers_dash[".pageSize"] = 20;

$tdataforumsubscribers_dash[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataforumsubscribers_dash[".strOrderBy"] = $tstrOrderBy;

$tdataforumsubscribers_dash[".orderindexes"] = array();


$tdataforumsubscribers_dash[".sqlHead"] = "SELECT forumsubscribers.userid,  forumsubscribers.topicid,  forumcategories.name,  forumtopics.topic,  forumsubscribers.id";
$tdataforumsubscribers_dash[".sqlFrom"] = "FROM forumsubscribers  INNER JOIN forumtopics ON forumtopics.id = forumsubscribers.topicid  INNER JOIN forumcategories ON forumcategories.id = forumtopics.categoryid";
$tdataforumsubscribers_dash[".sqlWhereExpr"] = "";
$tdataforumsubscribers_dash[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumsubscribers_dash[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumsubscribers_dash[".arrGroupsPerPage"] = $arrGPP;

$tdataforumsubscribers_dash[".highlightSearchResults"] = true;

$tableKeysforumsubscribers_dash = array();
$tableKeysforumsubscribers_dash[] = "id";
$tdataforumsubscribers_dash[".Keys"] = $tableKeysforumsubscribers_dash;


$tdataforumsubscribers_dash[".hideMobileList"] = array();




//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "forumsubscribers";
	$fdata["Label"] = GetFieldLabel("forumsubscribers_dash","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumsubscribers.userid";

	
	
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


	$tdataforumsubscribers_dash["userid"] = $fdata;
		$tdataforumsubscribers_dash[".searchableFields"][] = "userid";
//	topicid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "topicid";
	$fdata["GoodName"] = "topicid";
	$fdata["ownerTable"] = "forumsubscribers";
	$fdata["Label"] = GetFieldLabel("forumsubscribers_dash","topicid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "topicid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumsubscribers.topicid";

	
	
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


	$tdataforumsubscribers_dash["topicid"] = $fdata;
		$tdataforumsubscribers_dash[".searchableFields"][] = "topicid";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "forumcategories";
	$fdata["Label"] = GetFieldLabel("forumsubscribers_dash","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumcategories.name";

	
	
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


	$tdataforumsubscribers_dash["name"] = $fdata;
		$tdataforumsubscribers_dash[".searchableFields"][] = "name";
//	topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "topic";
	$fdata["GoodName"] = "topic";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumsubscribers_dash","topic");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "topic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.topic";

	
	
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


	$tdataforumsubscribers_dash["topic"] = $fdata;
		$tdataforumsubscribers_dash[".searchableFields"][] = "topic";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumsubscribers";
	$fdata["Label"] = GetFieldLabel("forumsubscribers_dash","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumsubscribers.id";

	
	
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


	$tdataforumsubscribers_dash["id"] = $fdata;
		$tdataforumsubscribers_dash[".searchableFields"][] = "id";


$tables_data["forumsubscribers_dash"]=&$tdataforumsubscribers_dash;
$field_labels["forumsubscribers_dash"] = &$fieldLabelsforumsubscribers_dash;
$fieldToolTips["forumsubscribers_dash"] = &$fieldToolTipsforumsubscribers_dash;
$placeHolders["forumsubscribers_dash"] = &$placeHoldersforumsubscribers_dash;
$page_titles["forumsubscribers_dash"] = &$pageTitlesforumsubscribers_dash;


changeTextControlsToDate( "forumsubscribers_dash" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumsubscribers_dash"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumsubscribers_dash"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumsubscribers_dash()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "forumsubscribers.userid,  forumsubscribers.topicid,  forumcategories.name,  forumtopics.topic,  forumsubscribers.id";
$proto0["m_strFrom"] = "FROM forumsubscribers  INNER JOIN forumtopics ON forumtopics.id = forumsubscribers.topicid  INNER JOIN forumcategories ON forumcategories.id = forumtopics.categoryid";
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
	"m_strName" => "userid",
	"m_strTable" => "forumsubscribers",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto6["m_sql"] = "forumsubscribers.userid";
$proto6["m_srcTableName"] = "forumsubscribers_dash";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "topicid",
	"m_strTable" => "forumsubscribers",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto8["m_sql"] = "forumsubscribers.topicid";
$proto8["m_srcTableName"] = "forumsubscribers_dash";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "forumcategories",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto10["m_sql"] = "forumcategories.name";
$proto10["m_srcTableName"] = "forumsubscribers_dash";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "topic",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto12["m_sql"] = "forumtopics.topic";
$proto12["m_srcTableName"] = "forumsubscribers_dash";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumsubscribers",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto14["m_sql"] = "forumsubscribers.id";
$proto14["m_srcTableName"] = "forumsubscribers_dash";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "forumsubscribers";
$proto17["m_srcTableName"] = "forumsubscribers_dash";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "userid";
$proto17["m_columns"][] = "topicid";
$proto17["m_columns"][] = "lastemail";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "forumsubscribers";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "forumsubscribers_dash";
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
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "forumtopics";
$proto21["m_srcTableName"] = "forumsubscribers_dash";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "topic";
$proto21["m_columns"][] = "startedby";
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "categoryid";
$proto21["m_columns"][] = "views";
$proto21["m_columns"][] = "activity";
$proto21["m_columns"][] = "pinned";
$proto21["m_columns"][] = "question";
$proto21["m_columns"][] = "created";
$proto21["m_columns"][] = "solved";
$proto21["m_columns"][] = "locked";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN forumtopics ON forumtopics.id = forumsubscribers.topicid";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "forumsubscribers_dash";
$proto22=array();
$proto22["m_sql"] = "forumtopics.id = forumsubscribers.topicid";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= forumsubscribers.topicid";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "forumcategories";
$proto25["m_srcTableName"] = "forumsubscribers_dash";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "color";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN forumcategories ON forumcategories.id = forumtopics.categoryid";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "forumsubscribers_dash";
$proto26=array();
$proto26["m_sql"] = "forumcategories.id = forumtopics.categoryid";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumcategories",
	"m_srcTableName" => "forumsubscribers_dash"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= forumtopics.categoryid";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="forumsubscribers_dash";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumsubscribers_dash = createSqlQuery_forumsubscribers_dash();


	
																;

					

$tdataforumsubscribers_dash[".sqlquery"] = $queryData_forumsubscribers_dash;



include_once(getabspath("include/forumsubscribers_dash_events.php"));
$tdataforumsubscribers_dash[".hasEvents"] = true;

?>