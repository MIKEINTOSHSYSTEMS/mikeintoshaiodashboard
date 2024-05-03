<?php
$tdataforumreplies = array();
$tdataforumreplies[".searchableFields"] = array();
$tdataforumreplies[".ShortName"] = "forumreplies";
$tdataforumreplies[".OwnerID"] = "userid";
$tdataforumreplies[".OriginalTable"] = "forumreplies";


$tdataforumreplies[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataforumreplies[".originalPagesByType"] = $tdataforumreplies[".pagesByType"];
$tdataforumreplies[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataforumreplies[".originalPages"] = $tdataforumreplies[".pages"];
$tdataforumreplies[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataforumreplies[".originalDefaultPages"] = $tdataforumreplies[".defaultPages"];

//	field labels
$fieldLabelsforumreplies = array();
$fieldToolTipsforumreplies = array();
$pageTitlesforumreplies = array();
$placeHoldersforumreplies = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumreplies["English"] = array();
	$fieldToolTipsforumreplies["English"] = array();
	$placeHoldersforumreplies["English"] = array();
	$pageTitlesforumreplies["English"] = array();
	$fieldLabelsforumreplies["English"]["topicid"] = "Topicid";
	$fieldToolTipsforumreplies["English"]["topicid"] = "";
	$placeHoldersforumreplies["English"]["topicid"] = "";
	$fieldLabelsforumreplies["English"]["userid"] = "Userid";
	$fieldToolTipsforumreplies["English"]["userid"] = "";
	$placeHoldersforumreplies["English"]["userid"] = "";
	$fieldLabelsforumreplies["English"]["reply"] = "Reply";
	$fieldToolTipsforumreplies["English"]["reply"] = "";
	$placeHoldersforumreplies["English"]["reply"] = "";
	$fieldLabelsforumreplies["English"]["created"] = "Created";
	$fieldToolTipsforumreplies["English"]["created"] = "";
	$placeHoldersforumreplies["English"]["created"] = "";
	$fieldLabelsforumreplies["English"]["id"] = "Id";
	$fieldToolTipsforumreplies["English"]["id"] = "";
	$placeHoldersforumreplies["English"]["id"] = "";
	$fieldLabelsforumreplies["English"]["userid2"] = "Userid2";
	$fieldToolTipsforumreplies["English"]["userid2"] = "";
	$placeHoldersforumreplies["English"]["userid2"] = "";
	$fieldLabelsforumreplies["English"]["image"] = "Image";
	$fieldToolTipsforumreplies["English"]["image"] = "";
	$placeHoldersforumreplies["English"]["image"] = "";
	if (count($fieldToolTipsforumreplies["English"]))
		$tdataforumreplies[".isUseToolTips"] = true;
}


	$tdataforumreplies[".NCSearch"] = true;



$tdataforumreplies[".shortTableName"] = "forumreplies";
$tdataforumreplies[".nSecOptions"] = 2;

$tdataforumreplies[".mainTableOwnerID"] = "userid";
$tdataforumreplies[".entityType"] = 0;
$tdataforumreplies[".connId"] = "project_at_localhost";


$tdataforumreplies[".strOriginalTableName"] = "forumreplies";

	



$tdataforumreplies[".showAddInPopup"] = true;

$tdataforumreplies[".showEditInPopup"] = false;

$tdataforumreplies[".showViewInPopup"] = false;

	$tdataforumreplies[".listAjax"] = true;
//	temporary
//$tdataforumreplies[".listAjax"] = false;

	$tdataforumreplies[".audit"] = false;

	$tdataforumreplies[".locking"] = false;


$pages = $tdataforumreplies[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumreplies[".edit"] = true;
	$tdataforumreplies[".afterEditAction"] = 1;
	$tdataforumreplies[".closePopupAfterEdit"] = 1;
	$tdataforumreplies[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumreplies[".add"] = true;
$tdataforumreplies[".afterAddAction"] = 1;
$tdataforumreplies[".closePopupAfterAdd"] = 1;
$tdataforumreplies[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumreplies[".list"] = true;
}

$tdataforumreplies[".updateSelected"] = true;


$tdataforumreplies[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumreplies[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumreplies[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumreplies[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumreplies[".printFriendly"] = true;
}



$tdataforumreplies[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumreplies[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumreplies[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumreplies[".isUseAjaxSuggest"] = true;



																														

$tdataforumreplies[".ajaxCodeSnippetAdded"] = false;

$tdataforumreplies[".buttonsAdded"] = false;

$tdataforumreplies[".addPageEvents"] = true;

// use timepicker for search panel
$tdataforumreplies[".isUseTimeForSearch"] = false;


$tdataforumreplies[".badgeColor"] = "e07878";


$tdataforumreplies[".allSearchFields"] = array();
$tdataforumreplies[".filterFields"] = array();
$tdataforumreplies[".requiredSearchFields"] = array();

$tdataforumreplies[".googleLikeFields"] = array();
$tdataforumreplies[".googleLikeFields"][] = "userid";
$tdataforumreplies[".googleLikeFields"][] = "reply";



$tdataforumreplies[".tableType"] = "list";

$tdataforumreplies[".printerPageOrientation"] = 0;
$tdataforumreplies[".nPrinterPageScale"] = 100;

$tdataforumreplies[".nPrinterSplitRecords"] = 40;

$tdataforumreplies[".geocodingEnabled"] = false;










$tdataforumreplies[".pageSize"] = 1000;

$tdataforumreplies[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY created";
$tdataforumreplies[".strOrderBy"] = $tstrOrderBy;

$tdataforumreplies[".orderindexes"] = array();
	$tdataforumreplies[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "created");



$tdataforumreplies[".sqlHead"] = "SELECT topicid,  userid,  reply,  created,  id,  userid AS userid2,  id AS image";
$tdataforumreplies[".sqlFrom"] = "FROM forumreplies";
$tdataforumreplies[".sqlWhereExpr"] = "";
$tdataforumreplies[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumreplies[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumreplies[".arrGroupsPerPage"] = $arrGPP;

$tdataforumreplies[".highlightSearchResults"] = true;

$tableKeysforumreplies = array();
$tableKeysforumreplies[] = "id";
$tdataforumreplies[".Keys"] = $tableKeysforumreplies;


$tdataforumreplies[".hideMobileList"] = array();




//	topicid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "topicid";
	$fdata["GoodName"] = "topicid";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","topicid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "topicid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "topicid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdataforumreplies["topicid"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "topicid";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataforumreplies["userid"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "userid";
//	reply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "reply";
	$fdata["GoodName"] = "reply";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","reply");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reply";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reply";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 255;
			$edata["nCols"] = 700;

	
	
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


	$tdataforumreplies["reply"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "reply";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdataforumreplies["created"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "created";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdataforumreplies["id"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "id";
//	userid2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "userid2";
	$fdata["GoodName"] = "userid2";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","userid2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataforumreplies["userid2"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "userid2";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies","image");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdataforumreplies["image"] = $fdata;
		$tdataforumreplies[".searchableFields"][] = "image";


$tables_data["forumreplies"]=&$tdataforumreplies;
$field_labels["forumreplies"] = &$fieldLabelsforumreplies;
$fieldToolTips["forumreplies"] = &$fieldToolTipsforumreplies;
$placeHolders["forumreplies"] = &$placeHoldersforumreplies;
$page_titles["forumreplies"] = &$pageTitlesforumreplies;


changeTextControlsToDate( "forumreplies" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumreplies"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumreplies"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="forumtopics";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="forumtopics";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "forumtopics";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["forumreplies"][0] = $masterParams;
				$masterTablesData["forumreplies"][0]["masterKeys"] = array();
	$masterTablesData["forumreplies"][0]["masterKeys"][]="id";
				$masterTablesData["forumreplies"][0]["detailKeys"] = array();
	$masterTablesData["forumreplies"][0]["detailKeys"][]="topicid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumreplies()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "topicid,  userid,  reply,  created,  id,  userid AS userid2,  id AS image";
$proto0["m_strFrom"] = "FROM forumreplies";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY created";
	
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
	"m_strName" => "topicid",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto6["m_sql"] = "topicid";
$proto6["m_srcTableName"] = "forumreplies";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto8["m_sql"] = "userid";
$proto8["m_srcTableName"] = "forumreplies";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "reply",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto10["m_sql"] = "reply";
$proto10["m_srcTableName"] = "forumreplies";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto12["m_sql"] = "created";
$proto12["m_srcTableName"] = "forumreplies";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto14["m_sql"] = "id";
$proto14["m_srcTableName"] = "forumreplies";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto16["m_sql"] = "userid";
$proto16["m_srcTableName"] = "forumreplies";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "userid2";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto18["m_sql"] = "id";
$proto18["m_srcTableName"] = "forumreplies";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "image";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "forumreplies";
$proto21["m_srcTableName"] = "forumreplies";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "topicid";
$proto21["m_columns"][] = "userid";
$proto21["m_columns"][] = "reply";
$proto21["m_columns"][] = "created";
$proto21["m_columns"][] = "id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "forumreplies";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "forumreplies";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "forumreplies",
	"m_srcTableName" => "forumreplies"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="forumreplies";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumreplies = createSqlQuery_forumreplies();


	
																;

							

$tdataforumreplies[".sqlquery"] = $queryData_forumreplies;



include_once(getabspath("include/forumreplies_events.php"));
$tdataforumreplies[".hasEvents"] = true;

?>