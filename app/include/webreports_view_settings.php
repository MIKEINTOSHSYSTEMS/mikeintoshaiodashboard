<?php
$tdatawebreports_view = array();
$tdatawebreports_view[".searchableFields"] = array();
$tdatawebreports_view[".ShortName"] = "webreports_view";
$tdatawebreports_view[".OwnerID"] = "";
$tdatawebreports_view[".OriginalTable"] = "webreports";


$tdatawebreports_view[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatawebreports_view[".originalPagesByType"] = $tdatawebreports_view[".pagesByType"];
$tdatawebreports_view[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatawebreports_view[".originalPages"] = $tdatawebreports_view[".pages"];
$tdatawebreports_view[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatawebreports_view[".originalDefaultPages"] = $tdatawebreports_view[".defaultPages"];

//	field labels
$fieldLabelswebreports_view = array();
$fieldToolTipswebreports_view = array();
$pageTitleswebreports_view = array();
$placeHolderswebreports_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebreports_view["English"] = array();
	$fieldToolTipswebreports_view["English"] = array();
	$placeHolderswebreports_view["English"] = array();
	$pageTitleswebreports_view["English"] = array();
	$fieldLabelswebreports_view["English"]["rpt_id"] = "Rpt Id";
	$fieldToolTipswebreports_view["English"]["rpt_id"] = "";
	$placeHolderswebreports_view["English"]["rpt_id"] = "";
	$fieldLabelswebreports_view["English"]["rpt_name"] = "Rpt Name";
	$fieldToolTipswebreports_view["English"]["rpt_name"] = "";
	$placeHolderswebreports_view["English"]["rpt_name"] = "";
	$fieldLabelswebreports_view["English"]["rpt_title"] = "Rpt Title";
	$fieldToolTipswebreports_view["English"]["rpt_title"] = "";
	$placeHolderswebreports_view["English"]["rpt_title"] = "";
	$fieldLabelswebreports_view["English"]["rpt_cdate"] = "Rpt Cdate";
	$fieldToolTipswebreports_view["English"]["rpt_cdate"] = "";
	$placeHolderswebreports_view["English"]["rpt_cdate"] = "";
	$fieldLabelswebreports_view["English"]["rpt_mdate"] = "Rpt Mdate";
	$fieldToolTipswebreports_view["English"]["rpt_mdate"] = "";
	$placeHolderswebreports_view["English"]["rpt_mdate"] = "";
	$fieldLabelswebreports_view["English"]["rpt_content"] = "Rpt Content";
	$fieldToolTipswebreports_view["English"]["rpt_content"] = "";
	$placeHolderswebreports_view["English"]["rpt_content"] = "";
	$fieldLabelswebreports_view["English"]["rpt_owner"] = "Rpt Owner";
	$fieldToolTipswebreports_view["English"]["rpt_owner"] = "";
	$placeHolderswebreports_view["English"]["rpt_owner"] = "";
	$fieldLabelswebreports_view["English"]["rpt_status"] = "Rpt Status";
	$fieldToolTipswebreports_view["English"]["rpt_status"] = "";
	$placeHolderswebreports_view["English"]["rpt_status"] = "";
	$fieldLabelswebreports_view["English"]["rpt_type"] = "Rpt Type";
	$fieldToolTipswebreports_view["English"]["rpt_type"] = "";
	$placeHolderswebreports_view["English"]["rpt_type"] = "";
	if (count($fieldToolTipswebreports_view["English"]))
		$tdatawebreports_view[".isUseToolTips"] = true;
}


	$tdatawebreports_view[".NCSearch"] = true;



$tdatawebreports_view[".shortTableName"] = "webreports_view";
$tdatawebreports_view[".nSecOptions"] = 0;

$tdatawebreports_view[".mainTableOwnerID"] = "";
$tdatawebreports_view[".entityType"] = 2;
$tdatawebreports_view[".connId"] = "deredevatderejadevmerqconsulta";


$tdatawebreports_view[".strOriginalTableName"] = "webreports";

	



$tdatawebreports_view[".showAddInPopup"] = false;

$tdatawebreports_view[".showEditInPopup"] = false;

$tdatawebreports_view[".showViewInPopup"] = false;

$tdatawebreports_view[".listAjax"] = false;
//	temporary
//$tdatawebreports_view[".listAjax"] = false;

	$tdatawebreports_view[".audit"] = false;

	$tdatawebreports_view[".locking"] = false;


$pages = $tdatawebreports_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebreports_view[".edit"] = true;
	$tdatawebreports_view[".afterEditAction"] = 1;
	$tdatawebreports_view[".closePopupAfterEdit"] = 1;
	$tdatawebreports_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebreports_view[".add"] = true;
$tdatawebreports_view[".afterAddAction"] = 1;
$tdatawebreports_view[".closePopupAfterAdd"] = 1;
$tdatawebreports_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebreports_view[".list"] = true;
}



$tdatawebreports_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebreports_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebreports_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebreports_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebreports_view[".printFriendly"] = true;
}



$tdatawebreports_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebreports_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebreports_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebreports_view[".isUseAjaxSuggest"] = true;





$tdatawebreports_view[".ajaxCodeSnippetAdded"] = false;

$tdatawebreports_view[".buttonsAdded"] = false;

$tdatawebreports_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebreports_view[".isUseTimeForSearch"] = false;


$tdatawebreports_view[".badgeColor"] = "6DA5C8";


$tdatawebreports_view[".allSearchFields"] = array();
$tdatawebreports_view[".filterFields"] = array();
$tdatawebreports_view[".requiredSearchFields"] = array();

$tdatawebreports_view[".googleLikeFields"] = array();
$tdatawebreports_view[".googleLikeFields"][] = "rpt_id";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_name";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_title";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_cdate";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_mdate";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_content";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_owner";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_status";
$tdatawebreports_view[".googleLikeFields"][] = "rpt_type";



$tdatawebreports_view[".tableType"] = "report";

$tdatawebreports_view[".printerPageOrientation"] = 0;
$tdatawebreports_view[".nPrinterPageScale"] = 100;

$tdatawebreports_view[".nPrinterSplitRecords"] = 40;

$tdatawebreports_view[".geocodingEnabled"] = false;

//report settings

$tdatawebreports_view[".reportPrintGroupsPerPage"] = 3;
$tdatawebreports_view[".reportPrintRecordsPerPage"] = 40;

$tdatawebreports_view[".pageSizeGroups"] = 5;
$tdatawebreports_view[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatawebreports_view[".strOrderBy"] = $tstrOrderBy;

$tdatawebreports_view[".orderindexes"] = array();


$tdatawebreports_view[".sqlHead"] = "SELECT rpt_id,  	rpt_name,  	rpt_title,  	rpt_cdate,  	rpt_mdate,  	rpt_content,  	rpt_owner,  	rpt_status,  	rpt_type";
$tdatawebreports_view[".sqlFrom"] = "FROM webreports";
$tdatawebreports_view[".sqlWhereExpr"] = "";
$tdatawebreports_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebreports_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebreports_view[".arrGroupsPerPage"] = $arrGPP;

$tdatawebreports_view[".highlightSearchResults"] = true;

$tableKeyswebreports_view = array();
$tableKeyswebreports_view[] = "rpt_id";
$tdatawebreports_view[".Keys"] = $tableKeyswebreports_view;


$tdatawebreports_view[".hideMobileList"] = array();




//	rpt_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rpt_id";
	$fdata["GoodName"] = "rpt_id";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_id");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_id"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_id";
//	rpt_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rpt_name";
	$fdata["GoodName"] = "rpt_name";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_name"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_name";
//	rpt_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rpt_title";
	$fdata["GoodName"] = "rpt_title";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_title");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_title"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_title";
//	rpt_cdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rpt_cdate";
	$fdata["GoodName"] = "rpt_cdate";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_cdate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_cdate"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_cdate";
//	rpt_mdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rpt_mdate";
	$fdata["GoodName"] = "rpt_mdate";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_mdate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_mdate"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_mdate";
//	rpt_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rpt_content";
	$fdata["GoodName"] = "rpt_content";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_content");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_content"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_content";
//	rpt_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rpt_owner";
	$fdata["GoodName"] = "rpt_owner";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_owner");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_owner"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_owner";
//	rpt_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rpt_status";
	$fdata["GoodName"] = "rpt_status";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_status");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_status"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_status";
//	rpt_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rpt_type";
	$fdata["GoodName"] = "rpt_type";
	$fdata["ownerTable"] = "webreports";
	$fdata["Label"] = GetFieldLabel("webreports_view","rpt_type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatawebreports_view["rpt_type"] = $fdata;
		$tdatawebreports_view[".searchableFields"][] = "rpt_type";


$tables_data["webreports_view"]=&$tdatawebreports_view;
$field_labels["webreports_view"] = &$fieldLabelswebreports_view;
$fieldToolTips["webreports_view"] = &$fieldToolTipswebreports_view;
$placeHolders["webreports_view"] = &$placeHolderswebreports_view;
$page_titles["webreports_view"] = &$pageTitleswebreports_view;


changeTextControlsToDate( "webreports_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["webreports_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["webreports_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webreports_view()
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
	"m_srcTableName" => "webreports_view"
));

$proto6["m_sql"] = "rpt_id";
$proto6["m_srcTableName"] = "webreports_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_name",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto8["m_sql"] = "rpt_name";
$proto8["m_srcTableName"] = "webreports_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_title",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto10["m_sql"] = "rpt_title";
$proto10["m_srcTableName"] = "webreports_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_cdate",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto12["m_sql"] = "rpt_cdate";
$proto12["m_srcTableName"] = "webreports_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_mdate",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto14["m_sql"] = "rpt_mdate";
$proto14["m_srcTableName"] = "webreports_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_content",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto16["m_sql"] = "rpt_content";
$proto16["m_srcTableName"] = "webreports_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_owner",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto18["m_sql"] = "rpt_owner";
$proto18["m_srcTableName"] = "webreports_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_status",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto20["m_sql"] = "rpt_status";
$proto20["m_srcTableName"] = "webreports_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rpt_type",
	"m_strTable" => "webreports",
	"m_srcTableName" => "webreports_view"
));

$proto22["m_sql"] = "rpt_type";
$proto22["m_srcTableName"] = "webreports_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "webreports";
$proto25["m_srcTableName"] = "webreports_view";
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
$proto24["m_srcTableName"] = "webreports_view";
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
$proto0["m_srcTableName"]="webreports_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webreports_view = createSqlQuery_webreports_view();


	
																								;

									

$tdatawebreports_view[".sqlquery"] = $queryData_webreports_view;



$tdatawebreports_view[".hasEvents"] = false;

?>