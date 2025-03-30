<?php
$tdatawebreport_style = array();
$tdatawebreport_style[".searchableFields"] = array();
$tdatawebreport_style[".ShortName"] = "webreport_style";
$tdatawebreport_style[".OwnerID"] = "";
$tdatawebreport_style[".OriginalTable"] = "webreport_style";


$tdatawebreport_style[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebreport_style[".originalPagesByType"] = $tdatawebreport_style[".pagesByType"];
$tdatawebreport_style[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebreport_style[".originalPages"] = $tdatawebreport_style[".pages"];
$tdatawebreport_style[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebreport_style[".originalDefaultPages"] = $tdatawebreport_style[".defaultPages"];

//	field labels
$fieldLabelswebreport_style = array();
$fieldToolTipswebreport_style = array();
$pageTitleswebreport_style = array();
$placeHolderswebreport_style = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebreport_style["English"] = array();
	$fieldToolTipswebreport_style["English"] = array();
	$placeHolderswebreport_style["English"] = array();
	$pageTitleswebreport_style["English"] = array();
	$fieldLabelswebreport_style["English"]["report_style_id"] = "Report Style Id";
	$fieldToolTipswebreport_style["English"]["report_style_id"] = "";
	$placeHolderswebreport_style["English"]["report_style_id"] = "";
	$fieldLabelswebreport_style["English"]["type"] = "Type";
	$fieldToolTipswebreport_style["English"]["type"] = "";
	$placeHolderswebreport_style["English"]["type"] = "";
	$fieldLabelswebreport_style["English"]["field"] = "Field";
	$fieldToolTipswebreport_style["English"]["field"] = "";
	$placeHolderswebreport_style["English"]["field"] = "";
	$fieldLabelswebreport_style["English"]["group"] = "Group";
	$fieldToolTipswebreport_style["English"]["group"] = "";
	$placeHolderswebreport_style["English"]["group"] = "";
	$fieldLabelswebreport_style["English"]["style_str"] = "Style Str";
	$fieldToolTipswebreport_style["English"]["style_str"] = "";
	$placeHolderswebreport_style["English"]["style_str"] = "";
	$fieldLabelswebreport_style["English"]["uniq"] = "Uniq";
	$fieldToolTipswebreport_style["English"]["uniq"] = "";
	$placeHolderswebreport_style["English"]["uniq"] = "";
	$fieldLabelswebreport_style["English"]["repname"] = "Repname";
	$fieldToolTipswebreport_style["English"]["repname"] = "";
	$placeHolderswebreport_style["English"]["repname"] = "";
	$fieldLabelswebreport_style["English"]["styletype"] = "Styletype";
	$fieldToolTipswebreport_style["English"]["styletype"] = "";
	$placeHolderswebreport_style["English"]["styletype"] = "";
	if (count($fieldToolTipswebreport_style["English"]))
		$tdatawebreport_style[".isUseToolTips"] = true;
}


	$tdatawebreport_style[".NCSearch"] = true;



$tdatawebreport_style[".shortTableName"] = "webreport_style";
$tdatawebreport_style[".nSecOptions"] = 0;

$tdatawebreport_style[".mainTableOwnerID"] = "";
$tdatawebreport_style[".entityType"] = 0;
$tdatawebreport_style[".connId"] = "deredevatderejadevmerqconsulta";


$tdatawebreport_style[".strOriginalTableName"] = "webreport_style";

	



$tdatawebreport_style[".showAddInPopup"] = false;

$tdatawebreport_style[".showEditInPopup"] = false;

$tdatawebreport_style[".showViewInPopup"] = false;

$tdatawebreport_style[".listAjax"] = false;
//	temporary
//$tdatawebreport_style[".listAjax"] = false;

	$tdatawebreport_style[".audit"] = false;

	$tdatawebreport_style[".locking"] = false;


$pages = $tdatawebreport_style[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebreport_style[".edit"] = true;
	$tdatawebreport_style[".afterEditAction"] = 1;
	$tdatawebreport_style[".closePopupAfterEdit"] = 1;
	$tdatawebreport_style[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebreport_style[".add"] = true;
$tdatawebreport_style[".afterAddAction"] = 1;
$tdatawebreport_style[".closePopupAfterAdd"] = 1;
$tdatawebreport_style[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebreport_style[".list"] = true;
}



$tdatawebreport_style[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebreport_style[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebreport_style[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebreport_style[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebreport_style[".printFriendly"] = true;
}



$tdatawebreport_style[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebreport_style[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebreport_style[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebreport_style[".isUseAjaxSuggest"] = true;



						

$tdatawebreport_style[".ajaxCodeSnippetAdded"] = false;

$tdatawebreport_style[".buttonsAdded"] = false;

$tdatawebreport_style[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebreport_style[".isUseTimeForSearch"] = false;


$tdatawebreport_style[".badgeColor"] = "B22222";


$tdatawebreport_style[".allSearchFields"] = array();
$tdatawebreport_style[".filterFields"] = array();
$tdatawebreport_style[".requiredSearchFields"] = array();

$tdatawebreport_style[".googleLikeFields"] = array();
$tdatawebreport_style[".googleLikeFields"][] = "report_style_id";
$tdatawebreport_style[".googleLikeFields"][] = "type";
$tdatawebreport_style[".googleLikeFields"][] = "field";
$tdatawebreport_style[".googleLikeFields"][] = "group";
$tdatawebreport_style[".googleLikeFields"][] = "style_str";
$tdatawebreport_style[".googleLikeFields"][] = "uniq";
$tdatawebreport_style[".googleLikeFields"][] = "repname";
$tdatawebreport_style[".googleLikeFields"][] = "styletype";



$tdatawebreport_style[".tableType"] = "list";

$tdatawebreport_style[".printerPageOrientation"] = 0;
$tdatawebreport_style[".nPrinterPageScale"] = 100;

$tdatawebreport_style[".nPrinterSplitRecords"] = 40;

$tdatawebreport_style[".geocodingEnabled"] = false;










$tdatawebreport_style[".pageSize"] = 20;

$tdatawebreport_style[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebreport_style[".strOrderBy"] = $tstrOrderBy;

$tdatawebreport_style[".orderindexes"] = array();


$tdatawebreport_style[".sqlHead"] = "SELECT report_style_id,  	`type`,  	field,  	`group`,  	style_str,  	uniq,  	repname,  	styletype";
$tdatawebreport_style[".sqlFrom"] = "FROM webreport_style";
$tdatawebreport_style[".sqlWhereExpr"] = "";
$tdatawebreport_style[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebreport_style[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebreport_style[".arrGroupsPerPage"] = $arrGPP;

$tdatawebreport_style[".highlightSearchResults"] = true;

$tableKeyswebreport_style = array();
$tableKeyswebreport_style[] = "report_style_id";
$tdatawebreport_style[".Keys"] = $tableKeyswebreport_style;


$tdatawebreport_style[".hideMobileList"] = array();




//	report_style_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "report_style_id";
	$fdata["GoodName"] = "report_style_id";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","report_style_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "report_style_id";

		$fdata["sourceSingle"] = "report_style_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "report_style_id";

	
	
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


	$tdatawebreport_style["report_style_id"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "report_style_id";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","type");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=6";

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


	$tdatawebreport_style["type"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "type";
//	field
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "field";
	$fdata["GoodName"] = "field";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","field");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "field";

		$fdata["sourceSingle"] = "field";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field";

	
	
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


	$tdatawebreport_style["field"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "field";
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","group");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "group";

		$fdata["sourceSingle"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`";

	
	
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


	$tdatawebreport_style["group"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "group";
//	style_str
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "style_str";
	$fdata["GoodName"] = "style_str";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","style_str");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "style_str";

		$fdata["sourceSingle"] = "style_str";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "style_str";

	
	
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


	$tdatawebreport_style["style_str"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "style_str";
//	uniq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "uniq";
	$fdata["GoodName"] = "uniq";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","uniq");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "uniq";

		$fdata["sourceSingle"] = "uniq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uniq";

	
	
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


	$tdatawebreport_style["uniq"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "uniq";
//	repname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "repname";
	$fdata["GoodName"] = "repname";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","repname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "repname";

		$fdata["sourceSingle"] = "repname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "repname";

	
	
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


	$tdatawebreport_style["repname"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "repname";
//	styletype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "styletype";
	$fdata["GoodName"] = "styletype";
	$fdata["ownerTable"] = "webreport_style";
	$fdata["Label"] = GetFieldLabel("webreport_style","styletype");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "styletype";

		$fdata["sourceSingle"] = "styletype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "styletype";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatawebreport_style["styletype"] = $fdata;
		$tdatawebreport_style[".searchableFields"][] = "styletype";


$tables_data["webreport_style"]=&$tdatawebreport_style;
$field_labels["webreport_style"] = &$fieldLabelswebreport_style;
$fieldToolTips["webreport_style"] = &$fieldToolTipswebreport_style;
$placeHolders["webreport_style"] = &$placeHolderswebreport_style;
$page_titles["webreport_style"] = &$pageTitleswebreport_style;


changeTextControlsToDate( "webreport_style" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["webreport_style"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["webreport_style"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_webreport_style()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "report_style_id,  	`type`,  	field,  	`group`,  	style_str,  	uniq,  	repname,  	styletype";
$proto0["m_strFrom"] = "FROM webreport_style";
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
	"m_strName" => "report_style_id",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto6["m_sql"] = "report_style_id";
$proto6["m_srcTableName"] = "webreport_style";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto8["m_sql"] = "`type`";
$proto8["m_srcTableName"] = "webreport_style";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "field",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto10["m_sql"] = "field";
$proto10["m_srcTableName"] = "webreport_style";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto12["m_sql"] = "`group`";
$proto12["m_srcTableName"] = "webreport_style";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "style_str",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto14["m_sql"] = "style_str";
$proto14["m_srcTableName"] = "webreport_style";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "uniq",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto16["m_sql"] = "uniq";
$proto16["m_srcTableName"] = "webreport_style";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "repname",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto18["m_sql"] = "repname";
$proto18["m_srcTableName"] = "webreport_style";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "styletype",
	"m_strTable" => "webreport_style",
	"m_srcTableName" => "webreport_style"
));

$proto20["m_sql"] = "styletype";
$proto20["m_srcTableName"] = "webreport_style";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "webreport_style";
$proto23["m_srcTableName"] = "webreport_style";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "report_style_id";
$proto23["m_columns"][] = "type";
$proto23["m_columns"][] = "field";
$proto23["m_columns"][] = "group";
$proto23["m_columns"][] = "style_str";
$proto23["m_columns"][] = "uniq";
$proto23["m_columns"][] = "repname";
$proto23["m_columns"][] = "styletype";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "webreport_style";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "webreport_style";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="webreport_style";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webreport_style = createSqlQuery_webreport_style();


	
																								;

								

$tdatawebreport_style[".sqlquery"] = $queryData_webreport_style;



$tdatawebreport_style[".hasEvents"] = false;

?>