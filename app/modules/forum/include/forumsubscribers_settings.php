<?php
$tdataforumsubscribers = array();
$tdataforumsubscribers[".searchableFields"] = array();
$tdataforumsubscribers[".ShortName"] = "forumsubscribers";
$tdataforumsubscribers[".OwnerID"] = "userid";
$tdataforumsubscribers[".OriginalTable"] = "forumsubscribers";


$tdataforumsubscribers[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataforumsubscribers[".originalPagesByType"] = $tdataforumsubscribers[".pagesByType"];
$tdataforumsubscribers[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataforumsubscribers[".originalPages"] = $tdataforumsubscribers[".pages"];
$tdataforumsubscribers[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataforumsubscribers[".originalDefaultPages"] = $tdataforumsubscribers[".defaultPages"];

//	field labels
$fieldLabelsforumsubscribers = array();
$fieldToolTipsforumsubscribers = array();
$pageTitlesforumsubscribers = array();
$placeHoldersforumsubscribers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumsubscribers["English"] = array();
	$fieldToolTipsforumsubscribers["English"] = array();
	$placeHoldersforumsubscribers["English"] = array();
	$pageTitlesforumsubscribers["English"] = array();
	$fieldLabelsforumsubscribers["English"]["id"] = "Id";
	$fieldToolTipsforumsubscribers["English"]["id"] = "";
	$placeHoldersforumsubscribers["English"]["id"] = "";
	$fieldLabelsforumsubscribers["English"]["topicid"] = "Topicid";
	$fieldToolTipsforumsubscribers["English"]["topicid"] = "";
	$placeHoldersforumsubscribers["English"]["topicid"] = "";
	$fieldLabelsforumsubscribers["English"]["topic"] = "Topic Name";
	$fieldToolTipsforumsubscribers["English"]["topic"] = "";
	$placeHoldersforumsubscribers["English"]["topic"] = "";
	$fieldLabelsforumsubscribers["English"]["userid"] = "Author";
	$fieldToolTipsforumsubscribers["English"]["userid"] = "";
	$placeHoldersforumsubscribers["English"]["userid"] = "";
	$fieldLabelsforumsubscribers["English"]["categoryid"] = "Categoryid";
	$fieldToolTipsforumsubscribers["English"]["categoryid"] = "";
	$placeHoldersforumsubscribers["English"]["categoryid"] = "";
	$fieldLabelsforumsubscribers["English"]["date_for_notify"] = "Date For Notify";
	$fieldToolTipsforumsubscribers["English"]["date_for_notify"] = "";
	$placeHoldersforumsubscribers["English"]["date_for_notify"] = "";
	if (count($fieldToolTipsforumsubscribers["English"]))
		$tdataforumsubscribers[".isUseToolTips"] = true;
}


	$tdataforumsubscribers[".NCSearch"] = true;



$tdataforumsubscribers[".shortTableName"] = "forumsubscribers";
$tdataforumsubscribers[".nSecOptions"] = 0;

$tdataforumsubscribers[".mainTableOwnerID"] = "userid";
$tdataforumsubscribers[".entityType"] = 0;
$tdataforumsubscribers[".connId"] = "project_at_localhost";


$tdataforumsubscribers[".strOriginalTableName"] = "forumsubscribers";

	



$tdataforumsubscribers[".showAddInPopup"] = false;

$tdataforumsubscribers[".showEditInPopup"] = false;

$tdataforumsubscribers[".showViewInPopup"] = false;

$tdataforumsubscribers[".listAjax"] = false;
//	temporary
//$tdataforumsubscribers[".listAjax"] = false;

	$tdataforumsubscribers[".audit"] = false;

	$tdataforumsubscribers[".locking"] = false;


$pages = $tdataforumsubscribers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumsubscribers[".edit"] = true;
	$tdataforumsubscribers[".afterEditAction"] = 1;
	$tdataforumsubscribers[".closePopupAfterEdit"] = 1;
	$tdataforumsubscribers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumsubscribers[".add"] = true;
$tdataforumsubscribers[".afterAddAction"] = 1;
$tdataforumsubscribers[".closePopupAfterAdd"] = 1;
$tdataforumsubscribers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumsubscribers[".list"] = true;
}



$tdataforumsubscribers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumsubscribers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumsubscribers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumsubscribers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumsubscribers[".printFriendly"] = true;
}



$tdataforumsubscribers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumsubscribers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumsubscribers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumsubscribers[".isUseAjaxSuggest"] = true;



															

$tdataforumsubscribers[".ajaxCodeSnippetAdded"] = false;

$tdataforumsubscribers[".buttonsAdded"] = false;

$tdataforumsubscribers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumsubscribers[".isUseTimeForSearch"] = false;


$tdataforumsubscribers[".badgeColor"] = "b22222";


$tdataforumsubscribers[".allSearchFields"] = array();
$tdataforumsubscribers[".filterFields"] = array();
$tdataforumsubscribers[".requiredSearchFields"] = array();

$tdataforumsubscribers[".googleLikeFields"] = array();
$tdataforumsubscribers[".googleLikeFields"][] = "id";
$tdataforumsubscribers[".googleLikeFields"][] = "userid";
$tdataforumsubscribers[".googleLikeFields"][] = "topicid";
$tdataforumsubscribers[".googleLikeFields"][] = "topic";
$tdataforumsubscribers[".googleLikeFields"][] = "categoryid";
$tdataforumsubscribers[".googleLikeFields"][] = "date_for_notify";



$tdataforumsubscribers[".tableType"] = "list";

$tdataforumsubscribers[".printerPageOrientation"] = 0;
$tdataforumsubscribers[".nPrinterPageScale"] = 100;

$tdataforumsubscribers[".nPrinterSplitRecords"] = 40;

$tdataforumsubscribers[".geocodingEnabled"] = false;










$tdataforumsubscribers[".pageSize"] = 20;

$tdataforumsubscribers[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY date_for_notify";
$tdataforumsubscribers[".strOrderBy"] = $tstrOrderBy;

$tdataforumsubscribers[".orderindexes"] = array();
	$tdataforumsubscribers[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "select
MAX(forumreplies.created)
FROM forumreplies
WHERE forumreplies.topicid =forumtopics.id
");



$tdataforumsubscribers[".sqlHead"] = "SELECT forumsubscribers.id,  forumsubscribers.userid,  forumsubscribers.topicid,  topic,  categoryid AS categoryid,  (select  MAX(forumreplies.created)  FROM forumreplies  WHERE forumreplies.topicid =forumtopics.id  ) AS date_for_notify";
$tdataforumsubscribers[".sqlFrom"] = "FROM forumsubscribers  LEFT OUTER JOIN forumtopics ON forumtopics.id = forumsubscribers.topicid";
$tdataforumsubscribers[".sqlWhereExpr"] = "";
$tdataforumsubscribers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumsubscribers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumsubscribers[".arrGroupsPerPage"] = $arrGPP;

$tdataforumsubscribers[".highlightSearchResults"] = true;

$tableKeysforumsubscribers = array();
$tableKeysforumsubscribers[] = "id";
$tdataforumsubscribers[".Keys"] = $tableKeysforumsubscribers;


$tdataforumsubscribers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumsubscribers";
	$fdata["Label"] = GetFieldLabel("forumsubscribers","id");
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


	$tdataforumsubscribers["id"] = $fdata;
		$tdataforumsubscribers[".searchableFields"][] = "id";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "forumsubscribers";
	$fdata["Label"] = GetFieldLabel("forumsubscribers","userid");
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


	$tdataforumsubscribers["userid"] = $fdata;
		$tdataforumsubscribers[".searchableFields"][] = "userid";
//	topicid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "topicid";
	$fdata["GoodName"] = "topicid";
	$fdata["ownerTable"] = "forumsubscribers";
	$fdata["Label"] = GetFieldLabel("forumsubscribers","topicid");
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


	$tdataforumsubscribers["topicid"] = $fdata;
		$tdataforumsubscribers[".searchableFields"][] = "topicid";
//	topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "topic";
	$fdata["GoodName"] = "topic";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("forumsubscribers","topic");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "topic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "topic";

	
	
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


	$tdataforumsubscribers["topic"] = $fdata;
		$tdataforumsubscribers[".searchableFields"][] = "topic";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("forumsubscribers","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoryid";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "forumcategories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataforumsubscribers["categoryid"] = $fdata;
		$tdataforumsubscribers[".searchableFields"][] = "categoryid";
//	date_for_notify
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_for_notify";
	$fdata["GoodName"] = "date_for_notify";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("forumsubscribers","date_for_notify");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_for_notify";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  MAX(forumreplies.created)  FROM forumreplies  WHERE forumreplies.topicid =forumtopics.id  )";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataforumsubscribers["date_for_notify"] = $fdata;
		$tdataforumsubscribers[".searchableFields"][] = "date_for_notify";


$tables_data["forumsubscribers"]=&$tdataforumsubscribers;
$field_labels["forumsubscribers"] = &$fieldLabelsforumsubscribers;
$fieldToolTips["forumsubscribers"] = &$fieldToolTipsforumsubscribers;
$placeHolders["forumsubscribers"] = &$placeHoldersforumsubscribers;
$page_titles["forumsubscribers"] = &$pageTitlesforumsubscribers;


changeTextControlsToDate( "forumsubscribers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumsubscribers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumsubscribers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumsubscribers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "forumsubscribers.id,  forumsubscribers.userid,  forumsubscribers.topicid,  topic,  categoryid AS categoryid,  (select  MAX(forumreplies.created)  FROM forumreplies  WHERE forumreplies.topicid =forumtopics.id  ) AS date_for_notify";
$proto0["m_strFrom"] = "FROM forumsubscribers  LEFT OUTER JOIN forumtopics ON forumtopics.id = forumsubscribers.topicid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY date_for_notify";
	
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
	"m_strTable" => "forumsubscribers",
	"m_srcTableName" => "forumsubscribers"
));

$proto6["m_sql"] = "forumsubscribers.id";
$proto6["m_srcTableName"] = "forumsubscribers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "forumsubscribers",
	"m_srcTableName" => "forumsubscribers"
));

$proto8["m_sql"] = "forumsubscribers.userid";
$proto8["m_srcTableName"] = "forumsubscribers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "topicid",
	"m_strTable" => "forumsubscribers",
	"m_srcTableName" => "forumsubscribers"
));

$proto10["m_sql"] = "forumsubscribers.topicid";
$proto10["m_srcTableName"] = "forumsubscribers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "topic"
));

$proto12["m_sql"] = "topic";
$proto12["m_srcTableName"] = "forumsubscribers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "categoryid"
));

$proto14["m_sql"] = "categoryid";
$proto14["m_srcTableName"] = "forumsubscribers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "categoryid";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_strHead"] = "select";
$proto17["m_strFieldList"] = "MAX(forumreplies.created)";
$proto17["m_strFrom"] = "FROM forumreplies";
$proto17["m_strWhere"] = "forumreplies.topicid =forumtopics.id";
$proto17["m_strOrderBy"] = "";
	
																;
			$proto17["cipherer"] = null;
$proto19=array();
$proto19["m_sql"] = "forumreplies.topicid =forumtopics.id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "topicid",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumsubscribers"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "=forumtopics.id";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_where"] = $obj;
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto17["m_having"] = $obj;
$proto17["m_fieldlist"] = array();
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_MAX";
$proto24["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumsubscribers"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "MAX(forumreplies.created)";
$proto23["m_srcTableName"] = "forumsubscribers";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto17["m_fieldlist"][]=$obj;
$proto17["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "forumreplies";
$proto27["m_srcTableName"] = "forumsubscribers";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "topicid";
$proto27["m_columns"][] = "userid";
$proto27["m_columns"][] = "reply";
$proto27["m_columns"][] = "created";
$proto27["m_columns"][] = "id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "forumreplies";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "forumsubscribers";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto17["m_fromlist"][]=$obj;
$proto17["m_groupby"] = array();
$proto17["m_orderby"] = array();
$proto17["m_srcTableName"]="forumsubscribers";		
$obj = new SQLQuery($proto17);

$proto16["m_sql"] = "(select  MAX(forumreplies.created)  FROM forumreplies  WHERE forumreplies.topicid =forumtopics.id  )";
$proto16["m_srcTableName"] = "forumsubscribers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "date_for_notify";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "forumsubscribers";
$proto31["m_srcTableName"] = "forumsubscribers";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "userid";
$proto31["m_columns"][] = "topicid";
$proto31["m_columns"][] = "lastemail";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "forumsubscribers";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "forumsubscribers";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "forumtopics";
$proto35["m_srcTableName"] = "forumsubscribers";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "topic";
$proto35["m_columns"][] = "startedby";
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "categoryid";
$proto35["m_columns"][] = "views";
$proto35["m_columns"][] = "activity";
$proto35["m_columns"][] = "pinned";
$proto35["m_columns"][] = "question";
$proto35["m_columns"][] = "created";
$proto35["m_columns"][] = "solved";
$proto35["m_columns"][] = "locked";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN forumtopics ON forumtopics.id = forumsubscribers.topicid";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "forumsubscribers";
$proto36=array();
$proto36["m_sql"] = "forumtopics.id = forumsubscribers.topicid";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumsubscribers"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= forumsubscribers.topicid";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date_for_notify"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="forumsubscribers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumsubscribers = createSqlQuery_forumsubscribers();


	
																;

						

$tdataforumsubscribers[".sqlquery"] = $queryData_forumsubscribers;



include_once(getabspath("include/forumsubscribers_events.php"));
$tdataforumsubscribers[".hasEvents"] = true;

$query = &$queryData_forumsubscribers;
$table = "forumsubscribers";
// here goes EVENT_INIT_TABLE event
$userData = Security::currentUserData();


;
unset($query);
?>