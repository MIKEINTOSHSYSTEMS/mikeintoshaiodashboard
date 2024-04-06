<?php
$tdatawebreports = array();
$tdatawebreports[".searchableFields"] = array();
$tdatawebreports[".ShortName"] = "webreports";
$tdatawebreports[".OwnerID"] = "";
$tdatawebreports[".OriginalTable"] = "webreports";


$tdatawebreports[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebreports[".originalPagesByType"] = $tdatawebreports[".pagesByType"];
$tdatawebreports[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebreports[".originalPages"] = $tdatawebreports[".pages"];
$tdatawebreports[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebreports[".originalDefaultPages"] = $tdatawebreports[".defaultPages"];

//	field labels
$fieldLabelswebreports = array();
$fieldToolTipswebreports = array();
$pageTitleswebreports = array();
$placeHolderswebreports = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebreports["English"] = array();
	$fieldToolTipswebreports["English"] = array();
	$placeHolderswebreports["English"] = array();
	$pageTitleswebreports["English"] = array();
	$fieldLabelswebreports["English"]["rpt_id"] = "Rpt Id";
	$fieldToolTipswebreports["English"]["rpt_id"] = "";
	$placeHolderswebreports["English"]["rpt_id"] = "";
	$fieldLabelswebreports["English"]["rpt_name"] = "Rpt Name";
	$fieldToolTipswebreports["English"]["rpt_name"] = "";
	$placeHolderswebreports["English"]["rpt_name"] = "";
	$fieldLabelswebreports["English"]["rpt_title"] = "Rpt Title";
	$fieldToolTipswebreports["English"]["rpt_title"] = "";
	$placeHolderswebreports["English"]["rpt_title"] = "";
	$fieldLabelswebreports["English"]["rpt_cdate"] = "Rpt Cdate";
	$fieldToolTipswebreports["English"]["rpt_cdate"] = "";
	$placeHolderswebreports["English"]["rpt_cdate"] = "";
	$fieldLabelswebreports["English"]["rpt_mdate"] = "Rpt Mdate";
	$fieldToolTipswebreports["English"]["rpt_mdate"] = "";
	$placeHolderswebreports["English"]["rpt_mdate"] = "";
	$fieldLabelswebreports["English"]["rpt_content"] = "Rpt Content";
	$fieldToolTipswebreports["English"]["rpt_content"] = "";
	$placeHolderswebreports["English"]["rpt_content"] = "";
	$fieldLabelswebreports["English"]["rpt_owner"] = "Rpt Owner";
	$fieldToolTipswebreports["English"]["rpt_owner"] = "";
	$placeHolderswebreports["English"]["rpt_owner"] = "";
	$fieldLabelswebreports["English"]["rpt_status"] = "Rpt Status";
	$fieldToolTipswebreports["English"]["rpt_status"] = "";
	$placeHolderswebreports["English"]["rpt_status"] = "";
	$fieldLabelswebreports["English"]["rpt_type"] = "Rpt Type";
	$fieldToolTipswebreports["English"]["rpt_type"] = "";
	$placeHolderswebreports["English"]["rpt_type"] = "";
	if (count($fieldToolTipswebreports["English"]))
		$tdatawebreports[".isUseToolTips"] = true;
}


	$tdatawebreports[".NCSearch"] = true;



$tdatawebreports[".shortTableName"] = "webreports";
$tdatawebreports[".nSecOptions"] = 0;

$tdatawebreports[".mainTableOwnerID"] = "";
$tdatawebreports[".entityType"] = 0;
$tdatawebreports[".connId"] = "deredevatderejadevmerqconsulta";


$tdatawebreports[".strOriginalTableName"] = "webreports";

	



$tdatawebreports[".showAddInPopup"] = false;

$tdatawebreports[".showEditInPopup"] = false;

$tdatawebreports[".showViewInPopup"] = false;

$tdatawebreports[".listAjax"] = false;
//	temporary
//$tdatawebreports[".listAjax"] = false;

	$tdatawebreports[".audit"] = false;

	$tdatawebreports[".locking"] = false;


$pages = $tdatawebreports[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebreports[".edit"] = true;
	$tdatawebreports[".afterEditAction"] = 1;
	$tdatawebreports[".closePopupAfterEdit"] = 1;
	$tdatawebreports[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebreports[".add"] = true;
$tdatawebreports[".afterAddAction"] = 1;
$tdatawebreports[".closePopupAfterAdd"] = 1;
$tdatawebreports[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebreports[".list"] = true;
}



$tdatawebreports[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebreports[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebreports[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebreports[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebreports[".printFriendly"] = true;
}



$tdatawebreports[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebreports[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebreports[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebreports[".isUseAjaxSuggest"] = true;





$tdatawebreports[".ajaxCodeSnippetAdded"] = false;

$tdatawebreports[".buttonsAdded"] = false;

$tdatawebreports[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebreports[".isUseTimeForSearch"] = false;


$tdatawebreports[".badgeColor"] = "BC8F8F";


$tdatawebreports[".allSearchFields"] = array();
$tdatawebreports[".filterFields"] = array();
$tdatawebreports[".requiredSearchFields"] = array();

$tdatawebreports[".googleLikeFields"] = array();
$tdatawebreports[".googleLikeFields"][] = "rpt_id";
$tdatawebreports[".googleLikeFields"][] = "rpt_name";
$tdatawebreports[".googleLikeFields"][] = "rpt_title";
$tdatawebreports[".googleLikeFields"][] = "rpt_cdate";
$tdatawebreports[".googleLikeFields"][] = "rpt_mdate";
$tdatawebreports[".googleLikeFields"][] = "rpt_content";
$tdatawebreports[".googleLikeFields"][] = "rpt_owner";
$tdatawebreports[".googleLikeFields"][] = "rpt_status";
$tdatawebreports[".googleLikeFields"][] = "rpt_type";



$tdatawebreports[".tableType"] = "list";

$tdatawebreports[".printerPageOrientation"] = 0;
$tdatawebreports[".nPrinterPageScale"] = 100;

$tdatawebreports[".nPrinterSplitRecords"] = 40;

$tdatawebreports[".geocodingEnabled"] = false;










$tdatawebreports[".pageSize"] = 20;

$tdatawebreports[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebreports[".strOrderBy"] = $tstrOrderBy;

$tdatawebreports[".orderindexes"] = array();


$tdatawebreports[".sqlHead"] = "SELECT rpt_id,  	rpt_name,  	rpt_title,  	rpt_cdate,  	rpt_mdate,  	rpt_content,  	rpt_owner,  	rpt_status,  	rpt_type";
$tdatawebreports[".sqlFrom"] = "FROM webreports";
$tdatawebreports[".sqlWhereExpr"] = "";
$tdatawebreports[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebreports[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebreports[".arrGroupsPerPage"] = $arrGPP;

$tdatawebreports[".highlightSearchResults"] = true;

$tableKeyswebreports = array();
$tableKeyswebreports[] = "rpt_id";
$tdatawebreports[".Keys"] = $tableKeyswebreports;


$tdatawebreports[".hideMobileList"] = array();




//	rpt_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rpt_id";
	$fdata["GoodName"] = "rpt_id";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "rpt_id";

		$fdata["sourceSingle"] = "rpt_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_id";

	
	
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


	$tdatawebreports["rpt_id"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_id";
//	rpt_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rpt_name";
	$fdata["GoodName"] = "rpt_name";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rpt_name";

		$fdata["sourceSingle"] = "rpt_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_name";

	
	
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


	$tdatawebreports["rpt_name"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_name";
//	rpt_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rpt_title";
	$fdata["GoodName"] = "rpt_title";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rpt_title";

		$fdata["sourceSingle"] = "rpt_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_title";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatawebreports["rpt_title"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_title";
//	rpt_cdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rpt_cdate";
	$fdata["GoodName"] = "rpt_cdate";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_cdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "rpt_cdate";

		$fdata["sourceSingle"] = "rpt_cdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_cdate";

	
	
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


	$tdatawebreports["rpt_cdate"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_cdate";
//	rpt_mdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rpt_mdate";
	$fdata["GoodName"] = "rpt_mdate";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_mdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "rpt_mdate";

		$fdata["sourceSingle"] = "rpt_mdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_mdate";

	
	
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


	$tdatawebreports["rpt_mdate"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_mdate";
//	rpt_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rpt_content";
	$fdata["GoodName"] = "rpt_content";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_content");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "rpt_content";

		$fdata["sourceSingle"] = "rpt_content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_content";

	
	
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


	$tdatawebreports["rpt_content"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_content";
//	rpt_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rpt_owner";
	$fdata["GoodName"] = "rpt_owner";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_owner");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rpt_owner";

		$fdata["sourceSingle"] = "rpt_owner";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_owner";

	
	
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


	$tdatawebreports["rpt_owner"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_owner";
//	rpt_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rpt_status";
	$fdata["GoodName"] = "rpt_status";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rpt_status";

		$fdata["sourceSingle"] = "rpt_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_status";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatawebreports["rpt_status"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_status";
//	rpt_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rpt_type";
	$fdata["GoodName"] = "rpt_type";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports","rpt_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rpt_type";

		$fdata["sourceSingle"] = "rpt_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rpt_type";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatawebreports["rpt_type"] = $fdata;
		$tdatawebreports[".searchableFields"][] = "rpt_type";


$tables_data["webreports"]=&$tdatawebreports;
$field_labels["webreports"] = &$fieldLabelswebreports;
$fieldToolTips["webreports"] = &$fieldToolTipswebreports;
$placeHolders["webreports"] = &$placeHolderswebreports;
$page_titles["webreports"] = &$pageTitleswebreports;


changeTextControlsToDate( "webreports" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["webreports"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["webreports"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webreports()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rpt_id,  	rpt_name,  	rpt_title,  	rpt_cdate,  	rpt_mdate,  	rpt_content,  	rpt_owner,  	rpt_status,  	rpt_type";
$proto0["m_strFrom"] = "FROM webreports";
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
	"m_strName" => "rpt_id",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto6["m_sql"] = "rpt_id";
$proto6["m_srcTableName"] = "webreports";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_name",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto8["m_sql"] = "rpt_name";
$proto8["m_srcTableName"] = "webreports";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_title",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto10["m_sql"] = "rpt_title";
$proto10["m_srcTableName"] = "webreports";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_cdate",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto12["m_sql"] = "rpt_cdate";
$proto12["m_srcTableName"] = "webreports";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_mdate",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto14["m_sql"] = "rpt_mdate";
$proto14["m_srcTableName"] = "webreports";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_content",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto16["m_sql"] = "rpt_content";
$proto16["m_srcTableName"] = "webreports";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_owner",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto18["m_sql"] = "rpt_owner";
$proto18["m_srcTableName"] = "webreports";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_status",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto20["m_sql"] = "rpt_status";
$proto20["m_srcTableName"] = "webreports";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_type",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports"
));

$proto22["m_sql"] = "rpt_type";
$proto22["m_srcTableName"] = "webreports";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "webreports";
$proto25["m_srcTableName"] = "webreports";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "rpt_id";
$proto25["m_columns"][] = "rpt_name";
$proto25["m_columns"][] = "rpt_title";
$proto25["m_columns"][] = "rpt_cdate";
$proto25["m_columns"][] = "rpt_mdate";
$proto25["m_columns"][] = "rpt_content";
$proto25["m_columns"][] = "rpt_owner";
$proto25["m_columns"][] = "rpt_status";
$proto25["m_columns"][] = "rpt_type";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "webreports";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "webreports";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="webreports";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webreports = createSqlQuery_webreports();


	
																								;

									

$tdatawebreports[".sqlquery"] = $queryData_webreports;



$tdatawebreports[".hasEvents"] = false;

?>