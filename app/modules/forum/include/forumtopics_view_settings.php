<?php
$tdataforumtopics_view = array();
$tdataforumtopics_view[".searchableFields"] = array();
$tdataforumtopics_view[".ShortName"] = "forumtopics_view";
$tdataforumtopics_view[".OwnerID"] = "startedby";
$tdataforumtopics_view[".OriginalTable"] = "forumtopics";


$tdataforumtopics_view[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataforumtopics_view[".originalPagesByType"] = $tdataforumtopics_view[".pagesByType"];
$tdataforumtopics_view[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataforumtopics_view[".originalPages"] = $tdataforumtopics_view[".pages"];
$tdataforumtopics_view[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataforumtopics_view[".originalDefaultPages"] = $tdataforumtopics_view[".defaultPages"];

//	field labels
$fieldLabelsforumtopics_view = array();
$fieldToolTipsforumtopics_view = array();
$pageTitlesforumtopics_view = array();
$placeHoldersforumtopics_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumtopics_view["English"] = array();
	$fieldToolTipsforumtopics_view["English"] = array();
	$placeHoldersforumtopics_view["English"] = array();
	$pageTitlesforumtopics_view["English"] = array();
	$fieldLabelsforumtopics_view["English"]["topic"] = "Topic";
	$fieldToolTipsforumtopics_view["English"]["topic"] = "";
	$placeHoldersforumtopics_view["English"]["topic"] = "";
	$fieldLabelsforumtopics_view["English"]["startedby"] = "Users";
	$fieldToolTipsforumtopics_view["English"]["startedby"] = "";
	$placeHoldersforumtopics_view["English"]["startedby"] = "";
	$fieldLabelsforumtopics_view["English"]["id"] = "Id";
	$fieldToolTipsforumtopics_view["English"]["id"] = "";
	$placeHoldersforumtopics_view["English"]["id"] = "";
	$fieldLabelsforumtopics_view["English"]["categoryid"] = "Category";
	$fieldToolTipsforumtopics_view["English"]["categoryid"] = "";
	$placeHoldersforumtopics_view["English"]["categoryid"] = "";
	$fieldLabelsforumtopics_view["English"]["views"] = "Views";
	$fieldToolTipsforumtopics_view["English"]["views"] = "";
	$placeHoldersforumtopics_view["English"]["views"] = "";
	$fieldLabelsforumtopics_view["English"]["activity"] = "Activity";
	$fieldToolTipsforumtopics_view["English"]["activity"] = "";
	$placeHoldersforumtopics_view["English"]["activity"] = "";
	$fieldLabelsforumtopics_view["English"]["pinned"] = "Pinned";
	$fieldToolTipsforumtopics_view["English"]["pinned"] = "";
	$placeHoldersforumtopics_view["English"]["pinned"] = "";
	$fieldLabelsforumtopics_view["English"]["created"] = "Created";
	$fieldToolTipsforumtopics_view["English"]["created"] = "";
	$placeHoldersforumtopics_view["English"]["created"] = "";
	$fieldLabelsforumtopics_view["English"]["startedby2"] = "Startedby";
	$fieldToolTipsforumtopics_view["English"]["startedby2"] = "";
	$placeHoldersforumtopics_view["English"]["startedby2"] = "";
	$fieldLabelsforumtopics_view["English"]["color"] = "Color";
	$fieldToolTipsforumtopics_view["English"]["color"] = "";
	$placeHoldersforumtopics_view["English"]["color"] = "";
	if (count($fieldToolTipsforumtopics_view["English"]))
		$tdataforumtopics_view[".isUseToolTips"] = true;
}


	$tdataforumtopics_view[".NCSearch"] = true;



$tdataforumtopics_view[".shortTableName"] = "forumtopics_view";
$tdataforumtopics_view[".nSecOptions"] = 1;

$tdataforumtopics_view[".mainTableOwnerID"] = "startedby";
$tdataforumtopics_view[".entityType"] = 1;
$tdataforumtopics_view[".connId"] = "project_at_localhost";


$tdataforumtopics_view[".strOriginalTableName"] = "forumtopics";

	



$tdataforumtopics_view[".showAddInPopup"] = true;

$tdataforumtopics_view[".showEditInPopup"] = false;

$tdataforumtopics_view[".showViewInPopup"] = false;

$tdataforumtopics_view[".listAjax"] = false;
//	temporary
//$tdataforumtopics_view[".listAjax"] = false;

	$tdataforumtopics_view[".audit"] = false;

	$tdataforumtopics_view[".locking"] = false;


$pages = $tdataforumtopics_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumtopics_view[".edit"] = true;
	$tdataforumtopics_view[".afterEditAction"] = 1;
	$tdataforumtopics_view[".closePopupAfterEdit"] = 1;
	$tdataforumtopics_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumtopics_view[".add"] = true;
$tdataforumtopics_view[".afterAddAction"] = 1;
$tdataforumtopics_view[".closePopupAfterAdd"] = 1;
$tdataforumtopics_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumtopics_view[".list"] = true;
}

$tdataforumtopics_view[".updateSelected"] = true;


$tdataforumtopics_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumtopics_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumtopics_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumtopics_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumtopics_view[".printFriendly"] = true;
}



$tdataforumtopics_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumtopics_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumtopics_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumtopics_view[".isUseAjaxSuggest"] = true;



															

$tdataforumtopics_view[".ajaxCodeSnippetAdded"] = false;

$tdataforumtopics_view[".buttonsAdded"] = false;

$tdataforumtopics_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumtopics_view[".isUseTimeForSearch"] = false;


$tdataforumtopics_view[".badgeColor"] = "cfae83";


$tdataforumtopics_view[".allSearchFields"] = array();
$tdataforumtopics_view[".filterFields"] = array();
$tdataforumtopics_view[".requiredSearchFields"] = array();

$tdataforumtopics_view[".googleLikeFields"] = array();
$tdataforumtopics_view[".googleLikeFields"][] = "topic";
$tdataforumtopics_view[".googleLikeFields"][] = "startedby";
$tdataforumtopics_view[".googleLikeFields"][] = "startedby2";
$tdataforumtopics_view[".googleLikeFields"][] = "categoryid";
$tdataforumtopics_view[".googleLikeFields"][] = "color";



$tdataforumtopics_view[".tableType"] = "list";

$tdataforumtopics_view[".printerPageOrientation"] = 0;
$tdataforumtopics_view[".nPrinterPageScale"] = 100;

$tdataforumtopics_view[".nPrinterSplitRecords"] = 40;

$tdataforumtopics_view[".geocodingEnabled"] = false;










$tdataforumtopics_view[".pageSize"] = 20;

$tdataforumtopics_view[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY t.activity DESC";
$tdataforumtopics_view[".strOrderBy"] = $tstrOrderBy;

$tdataforumtopics_view[".orderindexes"] = array();
	$tdataforumtopics_view[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "t.activity");



$tdataforumtopics_view[".sqlHead"] = "SELECT t.topic,  t.startedby,  t.startedby AS startedby2,  t.id,  t.categoryid,  t.views,  t.activity,  t.pinned,  c.color,  t.created";
$tdataforumtopics_view[".sqlFrom"] = "FROM forumtopics AS t  INNER JOIN forumcategories AS c ON c.id = t.categoryid";
$tdataforumtopics_view[".sqlWhereExpr"] = "";
$tdataforumtopics_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumtopics_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumtopics_view[".arrGroupsPerPage"] = $arrGPP;

$tdataforumtopics_view[".highlightSearchResults"] = true;

$tableKeysforumtopics_view = array();
$tableKeysforumtopics_view[] = "id";
$tdataforumtopics_view[".Keys"] = $tableKeysforumtopics_view;


$tdataforumtopics_view[".hideMobileList"] = array();




//	topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "topic";
	$fdata["GoodName"] = "topic";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","topic");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "topic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.topic";

	
	
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


	$tdataforumtopics_view["topic"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "topic";
//	startedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "startedby";
	$fdata["GoodName"] = "startedby";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","startedby");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "startedby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.startedby";

	
	
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


	$tdataforumtopics_view["startedby"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "startedby";
//	startedby2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startedby2";
	$fdata["GoodName"] = "startedby2";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","startedby2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "startedby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.startedby";

	
	
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
	$edata["LookupTable"] = "forumusers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "displayname";

	

	
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


	$tdataforumtopics_view["startedby2"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "startedby2";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.id";

	
	
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


	$tdataforumtopics_view["id"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "id";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.categoryid";

	
	
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


	$tdataforumtopics_view["categoryid"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "categoryid";
//	views
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "views";
	$fdata["GoodName"] = "views";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","views");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "views";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.views";

	
	
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


	$tdataforumtopics_view["views"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "views";
//	activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "activity";
	$fdata["GoodName"] = "activity";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","activity");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "activity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.activity";

	
	
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


	$tdataforumtopics_view["activity"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "activity";
//	pinned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pinned";
	$fdata["GoodName"] = "pinned";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","pinned");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "pinned";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.pinned";

	
	
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


	$tdataforumtopics_view["pinned"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "pinned";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "forumcategories";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","color");
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


	$tdataforumtopics_view["color"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "color";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "forumtopics";
	$fdata["Label"] = GetFieldLabel("forumtopics_view","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.created";

	
	
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


	$tdataforumtopics_view["created"] = $fdata;
		$tdataforumtopics_view[".searchableFields"][] = "created";


$tables_data["forumtopics_view"]=&$tdataforumtopics_view;
$field_labels["forumtopics_view"] = &$fieldLabelsforumtopics_view;
$fieldToolTips["forumtopics_view"] = &$fieldToolTipsforumtopics_view;
$placeHolders["forumtopics_view"] = &$placeHoldersforumtopics_view;
$page_titles["forumtopics_view"] = &$pageTitlesforumtopics_view;


changeTextControlsToDate( "forumtopics_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumtopics_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumtopics_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumtopics_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t.topic,  t.startedby,  t.startedby AS startedby2,  t.id,  t.categoryid,  t.views,  t.activity,  t.pinned,  c.color,  t.created";
$proto0["m_strFrom"] = "FROM forumtopics AS t  INNER JOIN forumcategories AS c ON c.id = t.categoryid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY t.activity DESC";
	
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
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto6["m_sql"] = "t.topic";
$proto6["m_srcTableName"] = "forumtopics_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "startedby",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto8["m_sql"] = "t.startedby";
$proto8["m_srcTableName"] = "forumtopics_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startedby",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto10["m_sql"] = "t.startedby";
$proto10["m_srcTableName"] = "forumtopics_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "startedby2";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto12["m_sql"] = "t.id";
$proto12["m_srcTableName"] = "forumtopics_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto14["m_sql"] = "t.categoryid";
$proto14["m_srcTableName"] = "forumtopics_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "views",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto16["m_sql"] = "t.views";
$proto16["m_srcTableName"] = "forumtopics_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto18["m_sql"] = "t.activity";
$proto18["m_srcTableName"] = "forumtopics_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "pinned",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto20["m_sql"] = "t.pinned";
$proto20["m_srcTableName"] = "forumtopics_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "c",
	"m_srcTableName" => "forumtopics_view"
));

$proto22["m_sql"] = "c.color";
$proto22["m_srcTableName"] = "forumtopics_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto24["m_sql"] = "t.created";
$proto24["m_srcTableName"] = "forumtopics_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "forumtopics";
$proto27["m_srcTableName"] = "forumtopics_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "topic";
$proto27["m_columns"][] = "startedby";
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "categoryid";
$proto27["m_columns"][] = "views";
$proto27["m_columns"][] = "activity";
$proto27["m_columns"][] = "pinned";
$proto27["m_columns"][] = "question";
$proto27["m_columns"][] = "created";
$proto27["m_columns"][] = "solved";
$proto27["m_columns"][] = "locked";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "forumtopics AS t";
$proto26["m_alias"] = "t";
$proto26["m_srcTableName"] = "forumtopics_view";
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

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "forumcategories";
$proto31["m_srcTableName"] = "forumtopics_view";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "color";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN forumcategories AS c ON c.id = t.categoryid";
$proto30["m_alias"] = "c";
$proto30["m_srcTableName"] = "forumtopics_view";
$proto32=array();
$proto32["m_sql"] = "c.id = t.categoryid";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c",
	"m_srcTableName" => "forumtopics_view"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= t.categoryid";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "activity",
	"m_strTable" => "t",
	"m_srcTableName" => "forumtopics_view"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="forumtopics_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumtopics_view = createSqlQuery_forumtopics_view();


	
																;

										

$tdataforumtopics_view[".sqlquery"] = $queryData_forumtopics_view;



include_once(getabspath("include/forumtopics_view_events.php"));
$tdataforumtopics_view[".hasEvents"] = true;

$query = &$queryData_forumtopics_view;
$table = "forumtopics_view";
// here goes EVENT_INIT_TABLE event
if($_SESSION["user_id"])
	$query->addWhere("startedby='".$_SESSION["user_id"]."'");

;
unset($query);
?>