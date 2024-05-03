<?php
$tdataforumtopics = array();
$tdataforumtopics[".searchableFields"] = array();
$tdataforumtopics[".ShortName"] = "forumtopics";
$tdataforumtopics[".OwnerID"] = "startedby";
$tdataforumtopics[".OriginalTable"] = "forumtopics";


$tdataforumtopics[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataforumtopics[".originalPagesByType"] = $tdataforumtopics[".pagesByType"];
$tdataforumtopics[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataforumtopics[".originalPages"] = $tdataforumtopics[".pages"];
$tdataforumtopics[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataforumtopics[".originalDefaultPages"] = $tdataforumtopics[".defaultPages"];

//	field labels
$fieldLabelsforumtopics = array();
$fieldToolTipsforumtopics = array();
$pageTitlesforumtopics = array();
$placeHoldersforumtopics = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumtopics["English"] = array();
	$fieldToolTipsforumtopics["English"] = array();
	$placeHoldersforumtopics["English"] = array();
	$pageTitlesforumtopics["English"] = array();
	$fieldLabelsforumtopics["English"]["topic"] = "Topic";
	$fieldToolTipsforumtopics["English"]["topic"] = "";
	$placeHoldersforumtopics["English"]["topic"] = "";
	$fieldLabelsforumtopics["English"]["startedby"] = "Users";
	$fieldToolTipsforumtopics["English"]["startedby"] = "";
	$placeHoldersforumtopics["English"]["startedby"] = "";
	$fieldLabelsforumtopics["English"]["id"] = "Id";
	$fieldToolTipsforumtopics["English"]["id"] = "";
	$placeHoldersforumtopics["English"]["id"] = "";
	$fieldLabelsforumtopics["English"]["categoryid"] = "Category";
	$fieldToolTipsforumtopics["English"]["categoryid"] = "";
	$placeHoldersforumtopics["English"]["categoryid"] = "";
	$fieldLabelsforumtopics["English"]["views"] = "Views";
	$fieldToolTipsforumtopics["English"]["views"] = "";
	$placeHoldersforumtopics["English"]["views"] = "";
	$fieldLabelsforumtopics["English"]["activity"] = "Activity";
	$fieldToolTipsforumtopics["English"]["activity"] = "";
	$placeHoldersforumtopics["English"]["activity"] = "";
	$fieldLabelsforumtopics["English"]["pinned"] = "Pinned";
	$fieldToolTipsforumtopics["English"]["pinned"] = "";
	$placeHoldersforumtopics["English"]["pinned"] = "";
	$fieldLabelsforumtopics["English"]["question"] = "Question";
	$fieldToolTipsforumtopics["English"]["question"] = "";
	$placeHoldersforumtopics["English"]["question"] = "";
	$fieldLabelsforumtopics["English"]["created"] = "Created";
	$fieldToolTipsforumtopics["English"]["created"] = "";
	$placeHoldersforumtopics["English"]["created"] = "";
	$fieldLabelsforumtopics["English"]["topic2"] = "Topic2";
	$fieldToolTipsforumtopics["English"]["topic2"] = "";
	$placeHoldersforumtopics["English"]["topic2"] = "";
	$fieldLabelsforumtopics["English"]["startedby2"] = "Startedby2";
	$fieldToolTipsforumtopics["English"]["startedby2"] = "";
	$placeHoldersforumtopics["English"]["startedby2"] = "";
	$fieldLabelsforumtopics["English"]["color"] = "Color";
	$fieldToolTipsforumtopics["English"]["color"] = "";
	$placeHoldersforumtopics["English"]["color"] = "";
	$fieldLabelsforumtopics["English"]["image"] = "Image";
	$fieldToolTipsforumtopics["English"]["image"] = "";
	$placeHoldersforumtopics["English"]["image"] = "";
	$fieldLabelsforumtopics["English"]["forumreplies"] = "Replies";
	$fieldToolTipsforumtopics["English"]["forumreplies"] = "";
	$placeHoldersforumtopics["English"]["forumreplies"] = "";
	$fieldLabelsforumtopics["English"]["solved"] = "Solved";
	$fieldToolTipsforumtopics["English"]["solved"] = "";
	$placeHoldersforumtopics["English"]["solved"] = "";
	$fieldLabelsforumtopics["English"]["locked"] = "Locked";
	$fieldToolTipsforumtopics["English"]["locked"] = "";
	$placeHoldersforumtopics["English"]["locked"] = "";
	$pageTitlesforumtopics["English"]["add"] = "New topic";
	$pageTitlesforumtopics["English"]["edit"] = "Edit topic";
	if (count($fieldToolTipsforumtopics["English"]))
		$tdataforumtopics[".isUseToolTips"] = true;
}


	$tdataforumtopics[".NCSearch"] = true;



$tdataforumtopics[".shortTableName"] = "forumtopics";
$tdataforumtopics[".nSecOptions"] = 2;

$tdataforumtopics[".mainTableOwnerID"] = "startedby";
$tdataforumtopics[".entityType"] = 0;
$tdataforumtopics[".connId"] = "project_at_localhost";


$tdataforumtopics[".strOriginalTableName"] = "forumtopics";

	



$tdataforumtopics[".showAddInPopup"] = true;

$tdataforumtopics[".showEditInPopup"] = false;

$tdataforumtopics[".showViewInPopup"] = false;

$tdataforumtopics[".listAjax"] = false;
//	temporary
//$tdataforumtopics[".listAjax"] = false;

	$tdataforumtopics[".audit"] = false;

	$tdataforumtopics[".locking"] = false;


$pages = $tdataforumtopics[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumtopics[".edit"] = true;
	$tdataforumtopics[".afterEditAction"] = 1;
	$tdataforumtopics[".closePopupAfterEdit"] = 1;
	$tdataforumtopics[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumtopics[".add"] = true;
$tdataforumtopics[".afterAddAction"] = 1;
$tdataforumtopics[".closePopupAfterAdd"] = 1;
$tdataforumtopics[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumtopics[".list"] = true;
}

$tdataforumtopics[".updateSelected"] = true;


$tdataforumtopics[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumtopics[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumtopics[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumtopics[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumtopics[".printFriendly"] = true;
}



$tdataforumtopics[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumtopics[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumtopics[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumtopics[".isUseAjaxSuggest"] = true;



															

$tdataforumtopics[".ajaxCodeSnippetAdded"] = false;

$tdataforumtopics[".buttonsAdded"] = false;

$tdataforumtopics[".addPageEvents"] = true;

// use timepicker for search panel
$tdataforumtopics[".isUseTimeForSearch"] = false;


$tdataforumtopics[".badgeColor"] = "2F4F4F";


$tdataforumtopics[".allSearchFields"] = array();
$tdataforumtopics[".filterFields"] = array();
$tdataforumtopics[".requiredSearchFields"] = array();

$tdataforumtopics[".googleLikeFields"] = array();
$tdataforumtopics[".googleLikeFields"][] = "topic";
$tdataforumtopics[".googleLikeFields"][] = "startedby";
$tdataforumtopics[".googleLikeFields"][] = "startedby2";
$tdataforumtopics[".googleLikeFields"][] = "categoryid";
$tdataforumtopics[".googleLikeFields"][] = "question";
$tdataforumtopics[".googleLikeFields"][] = "solved";
$tdataforumtopics[".googleLikeFields"][] = "locked";
$tdataforumtopics[".googleLikeFields"][] = "forumreplies";



$tdataforumtopics[".tableType"] = "list";

$tdataforumtopics[".printerPageOrientation"] = 0;
$tdataforumtopics[".nPrinterPageScale"] = 100;

$tdataforumtopics[".nPrinterSplitRecords"] = 40;

$tdataforumtopics[".geocodingEnabled"] = false;










$tdataforumtopics[".pageSize"] = 20;

$tdataforumtopics[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY forumtopics.pinned DESC, forumtopics.activity DESC";
$tdataforumtopics[".strOrderBy"] = $tstrOrderBy;

$tdataforumtopics[".orderindexes"] = array();
	$tdataforumtopics[".orderindexes"][] = array(9, (0 ? "ASC" : "DESC"), "forumtopics.pinned");

	$tdataforumtopics[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "forumtopics.activity");



$tdataforumtopics[".sqlHead"] = "SELECT forumtopics.topic,  forumtopics.topic AS topic2,  forumtopics.startedby,  forumtopics.startedby AS startedby2,  forumtopics.id,  forumtopics.categoryid,  forumtopics.views,  forumtopics.activity,  forumtopics.pinned,  c.color,  forumtopics.question,  forumtopics.created,  forumtopics.solved,  forumtopics.locked,  forumtopics.id AS image,  (select  COUNT(*)  FROM forumreplies AS r  WHERE r.topicid = forumtopics.id  ) AS forumreplies";
$tdataforumtopics[".sqlFrom"] = "FROM forumtopics  INNER JOIN forumcategories AS c ON c.id = forumtopics.categoryid";
$tdataforumtopics[".sqlWhereExpr"] = "";
$tdataforumtopics[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumtopics[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumtopics[".arrGroupsPerPage"] = $arrGPP;

$tdataforumtopics[".highlightSearchResults"] = true;

$tableKeysforumtopics = array();
$tableKeysforumtopics[] = "id";
$tdataforumtopics[".Keys"] = $tableKeysforumtopics;


$tdataforumtopics[".hideMobileList"] = array();




//	topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "topic";
	$fdata["GoodName"] = "topic";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","topic");
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 356;

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


	$tdataforumtopics["topic"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "topic";
//	topic2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "topic2";
	$fdata["GoodName"] = "topic2";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","topic2");
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


	$tdataforumtopics["topic2"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "topic2";
//	startedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startedby";
	$fdata["GoodName"] = "startedby";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","startedby");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "startedby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.startedby";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "startedby";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataforumtopics["startedby"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "startedby";
//	startedby2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "startedby2";
	$fdata["GoodName"] = "startedby2";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","startedby2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "startedby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.startedby";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataforumtopics["startedby2"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "startedby2";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.id";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataforumtopics["id"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "id";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.categoryid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "forumcategories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataforumtopics["categoryid"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "categoryid";
//	views
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "views";
	$fdata["GoodName"] = "views";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","views");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "views";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.views";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdataforumtopics["views"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "views";
//	activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "activity";
	$fdata["GoodName"] = "activity";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","activity");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "activity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.activity";

	
	
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


	$tdataforumtopics["activity"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "activity";
//	pinned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pinned";
	$fdata["GoodName"] = "pinned";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","pinned");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "pinned";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.pinned";

	
	
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
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataforumtopics["pinned"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "pinned";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "forumcategories";
	$fdata["Label"] = GetFieldLabel("forumtopics","color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.color";

	
	
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


	$tdataforumtopics["color"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "color";
//	question
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "question";
	$fdata["GoodName"] = "question";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","question");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "question";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.question";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 240;
			$edata["nCols"] = 800;

	
	
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


	$tdataforumtopics["question"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "question";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.created";

	
	
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


	$tdataforumtopics["created"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "created";
//	solved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "solved";
	$fdata["GoodName"] = "solved";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","solved");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "solved";

		$fdata["sourceSingle"] = "solved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.solved";

	
	
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


	$tdataforumtopics["solved"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "solved";
//	locked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "locked";
	$fdata["GoodName"] = "locked";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","locked");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "locked";

		$fdata["sourceSingle"] = "locked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.locked";

	
	
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


	$tdataforumtopics["locked"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "locked";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics","image");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forumtopics.id";

	
	
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


	$tdataforumtopics["image"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "image";
//	forumreplies
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "forumreplies";
	$fdata["GoodName"] = "forumreplies";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("forumtopics","forumreplies");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "forumreplies";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select  COUNT(*)  FROM forumreplies AS r  WHERE r.topicid = forumtopics.id  )";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
		$fdata["filterTotalFields"] = "startedby";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataforumtopics["forumreplies"] = $fdata;
		$tdataforumtopics[".searchableFields"][] = "forumreplies";


$tables_data["forumtopics"]=&$tdataforumtopics;
$field_labels["forumtopics"] = &$fieldLabelsforumtopics;
$fieldToolTips["forumtopics"] = &$fieldToolTipsforumtopics;
$placeHolders["forumtopics"] = &$placeHoldersforumtopics;
$page_titles["forumtopics"] = &$pageTitlesforumtopics;


changeTextControlsToDate( "forumtopics" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumtopics"] = array();
//	forumreplies
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="forumreplies";
		$detailsParam["dOriginalTable"] = "forumreplies";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "forumreplies";
	$detailsParam["dCaptionTable"] = GetTableCaption("forumreplies");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["forumtopics"][$dIndex] = $detailsParam;

	
		$detailsTablesData["forumtopics"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["forumtopics"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["forumtopics"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["forumtopics"][$dIndex]["detailKeys"][]="topicid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumtopics"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumtopics()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "forumtopics.topic,  forumtopics.topic AS topic2,  forumtopics.startedby,  forumtopics.startedby AS startedby2,  forumtopics.id,  forumtopics.categoryid,  forumtopics.views,  forumtopics.activity,  forumtopics.pinned,  c.color,  forumtopics.question,  forumtopics.created,  forumtopics.solved,  forumtopics.locked,  forumtopics.id AS image,  (select  COUNT(*)  FROM forumreplies AS r  WHERE r.topicid = forumtopics.id  ) AS forumreplies";
$proto0["m_strFrom"] = "FROM forumtopics  INNER JOIN forumcategories AS c ON c.id = forumtopics.categoryid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY forumtopics.pinned DESC, forumtopics.activity DESC";
	
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
	"m_strName" => "topic",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto6["m_sql"] = "forumtopics.topic";
$proto6["m_srcTableName"] = "forumtopics";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "topic",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto8["m_sql"] = "forumtopics.topic";
$proto8["m_srcTableName"] = "forumtopics";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "topic2";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startedby",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto10["m_sql"] = "forumtopics.startedby";
$proto10["m_srcTableName"] = "forumtopics";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "startedby",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto12["m_sql"] = "forumtopics.startedby";
$proto12["m_srcTableName"] = "forumtopics";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "startedby2";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto14["m_sql"] = "forumtopics.id";
$proto14["m_srcTableName"] = "forumtopics";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto16["m_sql"] = "forumtopics.categoryid";
$proto16["m_srcTableName"] = "forumtopics";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "views",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto18["m_sql"] = "forumtopics.views";
$proto18["m_srcTableName"] = "forumtopics";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto20["m_sql"] = "forumtopics.activity";
$proto20["m_srcTableName"] = "forumtopics";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "pinned",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto22["m_sql"] = "forumtopics.pinned";
$proto22["m_srcTableName"] = "forumtopics";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "c",
	"m_srcTableName" => "forumtopics"
));

$proto24["m_sql"] = "c.color";
$proto24["m_srcTableName"] = "forumtopics";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "question",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto26["m_sql"] = "forumtopics.question";
$proto26["m_srcTableName"] = "forumtopics";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto28["m_sql"] = "forumtopics.created";
$proto28["m_srcTableName"] = "forumtopics";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "solved",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto30["m_sql"] = "forumtopics.solved";
$proto30["m_srcTableName"] = "forumtopics";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "locked",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto32["m_sql"] = "forumtopics.locked";
$proto32["m_srcTableName"] = "forumtopics";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto34["m_sql"] = "forumtopics.id";
$proto34["m_srcTableName"] = "forumtopics";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "image";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_strHead"] = "select";
$proto37["m_strFieldList"] = "COUNT(*)";
$proto37["m_strFrom"] = "FROM forumreplies AS r";
$proto37["m_strWhere"] = "r.topicid = forumtopics.id";
$proto37["m_strOrderBy"] = "";
	
																;
			$proto37["cipherer"] = null;
$proto39=array();
$proto39["m_sql"] = "r.topicid = forumtopics.id";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "topicid",
	"m_strTable" => "r",
	"m_srcTableName" => "forumtopics"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= forumtopics.id";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_where"] = $obj;
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto37["m_having"] = $obj;
$proto37["m_fieldlist"] = array();
						$proto43=array();
			$proto44=array();
$proto44["m_functiontype"] = "SQLF_COUNT";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto44);

$proto43["m_sql"] = "COUNT(*)";
$proto43["m_srcTableName"] = "forumtopics";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto37["m_fieldlist"][]=$obj;
$proto37["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "forumreplies";
$proto47["m_srcTableName"] = "forumtopics";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "topicid";
$proto47["m_columns"][] = "userid";
$proto47["m_columns"][] = "reply";
$proto47["m_columns"][] = "created";
$proto47["m_columns"][] = "id";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "forumreplies AS r";
$proto46["m_alias"] = "r";
$proto46["m_srcTableName"] = "forumtopics";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto37["m_fromlist"][]=$obj;
$proto37["m_groupby"] = array();
$proto37["m_orderby"] = array();
$proto37["m_srcTableName"]="forumtopics";		
$obj = new SQLQuery($proto37);

$proto36["m_sql"] = "(select  COUNT(*)  FROM forumreplies AS r  WHERE r.topicid = forumtopics.id  )";
$proto36["m_srcTableName"] = "forumtopics";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "forumreplies";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "forumtopics";
$proto51["m_srcTableName"] = "forumtopics";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "topic";
$proto51["m_columns"][] = "startedby";
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "categoryid";
$proto51["m_columns"][] = "views";
$proto51["m_columns"][] = "activity";
$proto51["m_columns"][] = "pinned";
$proto51["m_columns"][] = "question";
$proto51["m_columns"][] = "created";
$proto51["m_columns"][] = "solved";
$proto51["m_columns"][] = "locked";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "forumtopics";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "forumtopics";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_INNERJOIN";
			$proto55=array();
$proto55["m_strName"] = "forumcategories";
$proto55["m_srcTableName"] = "forumtopics";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "name";
$proto55["m_columns"][] = "color";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "INNER JOIN forumcategories AS c ON c.id = forumtopics.categoryid";
$proto54["m_alias"] = "c";
$proto54["m_srcTableName"] = "forumtopics";
$proto56=array();
$proto56["m_sql"] = "c.id = forumtopics.categoryid";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c",
	"m_srcTableName" => "forumtopics"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= forumtopics.categoryid";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "pinned",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 0;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "forumtopics",
	"m_srcTableName" => "forumtopics"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 0;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="forumtopics";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumtopics = createSqlQuery_forumtopics();


	
																;

																

$tdataforumtopics[".sqlquery"] = $queryData_forumtopics;



include_once(getabspath("include/forumtopics_events.php"));
$tdataforumtopics[".hasEvents"] = true;

$query = &$queryData_forumtopics;
$table = "forumtopics";
// here goes EVENT_INIT_TABLE event
$strWhereClause = "";
						if(postvalue("category") !=false){
							$categoryid = DBLookup("select id from forumcategories where name='".postvalue("category")."'");
								$query->addWhere("categoryid=".$categoryid);
							
							}
if(postvalue("q")==false && (postvalue("qs") != false || isset($_SESSION["forumtopics_qs"]))){
	$qs = preg_replace('/[^a-zA-Z0-9 ]/', '', postvalue("qs")!=false?postvalue("qs"):$_SESSION["forumtopics_qs"] );
	$strWhereClause.="forumtopics.topic like '%".$qs."%' or ";
	$strWhereClause.="forumtopics.question like '%".$qs."%' or ";
	$strWhereClause.= "forumtopics.id in( select topicid from forumreplies where ";
	$strWhereClause.= "reply like '%".$qs."%')";

}


unset($_SESSION["topicClause"]);
$find = array();
preg_match_all("/\(topic~contains~(.+)\)/U",postvalue("q"),$find);

$keyworld = (isset($find[1]) && isset($find[1][0]) && !empty($find[1][0]) )?$find[1][0]:null;
if(!is_null($keyworld)){
	if(isset($_SESSION["forumtopics_qs"])) unset($_SESSION["forumtopics_qs"]);
	$strWhereClause = "";
	$topicClause = preg_replace('/[^a-zA-Z0-9 ]/', '', $keyworld );
	$_SESSION["topicClause"] = $keyworld;
	$strWhereClause.= "upper(forumtopics.topic) like upper('%".$topicClause."%') or ";
	$strWhereClause.= " upper(forumtopics.question) like upper('%".$topicClause."%') ";
	//search in messages
	$strWhereClause.= " or forumtopics.id in( select topicid from forumreplies where reply like '%".$topicClause."%') ";
}
if($strWhereClause !=="")
	$query->addWhere($strWhereClause);

if( postvalue("mastertable") === "forumtopics" ){
	$query->replaceWhere("1=1");
}

;
unset($query);
?>