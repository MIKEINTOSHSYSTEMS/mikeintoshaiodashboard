<?php
$tdatatodocards = array();
$tdatatodocards[".searchableFields"] = array();
$tdatatodocards[".ShortName"] = "todocards";
$tdatatodocards[".OwnerID"] = "";
$tdatatodocards[".OriginalTable"] = "todocards";


$tdatatodocards[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatodocards[".originalPagesByType"] = $tdatatodocards[".pagesByType"];
$tdatatodocards[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatodocards[".originalPages"] = $tdatatodocards[".pages"];
$tdatatodocards[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatodocards[".originalDefaultPages"] = $tdatatodocards[".defaultPages"];

//	field labels
$fieldLabelstodocards = array();
$fieldToolTipstodocards = array();
$pageTitlestodocards = array();
$placeHolderstodocards = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodocards["English"] = array();
	$fieldToolTipstodocards["English"] = array();
	$placeHolderstodocards["English"] = array();
	$pageTitlestodocards["English"] = array();
	$fieldLabelstodocards["English"]["id"] = "Id";
	$fieldToolTipstodocards["English"]["id"] = "";
	$placeHolderstodocards["English"]["id"] = "";
	$fieldLabelstodocards["English"]["listid"] = "Listid";
	$fieldToolTipstodocards["English"]["listid"] = "";
	$placeHolderstodocards["English"]["listid"] = "";
	$fieldLabelstodocards["English"]["cardname"] = "Card Name";
	$fieldToolTipstodocards["English"]["cardname"] = "";
	$placeHolderstodocards["English"]["cardname"] = "";
	$fieldLabelstodocards["English"]["cardorder"] = "Cardorder";
	$fieldToolTipstodocards["English"]["cardorder"] = "";
	$placeHolderstodocards["English"]["cardorder"] = "";
	$fieldLabelstodocards["English"]["assign"] = "Assign To";
	$fieldToolTipstodocards["English"]["assign"] = "";
	$placeHolderstodocards["English"]["assign"] = "";
	$fieldLabelstodocards["English"]["categoryid"] = "Category";
	$fieldToolTipstodocards["English"]["categoryid"] = "";
	$placeHolderstodocards["English"]["categoryid"] = "";
	$fieldLabelstodocards["English"]["boardid"] = "Boardid";
	$fieldToolTipstodocards["English"]["boardid"] = "";
	$placeHolderstodocards["English"]["boardid"] = "";
	$fieldLabelstodocards["English"]["duedate"] = "Due Date";
	$fieldToolTipstodocards["English"]["duedate"] = "";
	$placeHolderstodocards["English"]["duedate"] = "";
	$fieldLabelstodocards["English"]["ownerid"] = "Ownerid";
	$fieldToolTipstodocards["English"]["ownerid"] = "";
	$placeHolderstodocards["English"]["ownerid"] = "";
	$pageTitlestodocards["English"]["edit"] = "Edit Card";
	$pageTitlestodocards["English"]["view"] = "View Card";
	if (count($fieldToolTipstodocards["English"]))
		$tdatatodocards[".isUseToolTips"] = true;
}


	$tdatatodocards[".NCSearch"] = true;



$tdatatodocards[".shortTableName"] = "todocards";
$tdatatodocards[".nSecOptions"] = 0;

$tdatatodocards[".mainTableOwnerID"] = "";
$tdatatodocards[".entityType"] = 0;
$tdatatodocards[".connId"] = "project_at_localhost";


$tdatatodocards[".strOriginalTableName"] = "todocards";

	



$tdatatodocards[".showAddInPopup"] = false;

$tdatatodocards[".showEditInPopup"] = false;

$tdatatodocards[".showViewInPopup"] = false;

$tdatatodocards[".listAjax"] = false;
//	temporary
//$tdatatodocards[".listAjax"] = false;

	$tdatatodocards[".audit"] = false;

	$tdatatodocards[".locking"] = false;


$pages = $tdatatodocards[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodocards[".edit"] = true;
	$tdatatodocards[".afterEditAction"] = 1;
	$tdatatodocards[".closePopupAfterEdit"] = 1;
	$tdatatodocards[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodocards[".add"] = true;
$tdatatodocards[".afterAddAction"] = 1;
$tdatatodocards[".closePopupAfterAdd"] = 1;
$tdatatodocards[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodocards[".list"] = true;
}



$tdatatodocards[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodocards[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodocards[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodocards[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodocards[".printFriendly"] = true;
}



$tdatatodocards[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodocards[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodocards[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodocards[".isUseAjaxSuggest"] = true;



																								

$tdatatodocards[".ajaxCodeSnippetAdded"] = false;

$tdatatodocards[".buttonsAdded"] = false;

$tdatatodocards[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatodocards[".isUseTimeForSearch"] = false;


$tdatatodocards[".badgeColor"] = "008B8B";


$tdatatodocards[".allSearchFields"] = array();
$tdatatodocards[".filterFields"] = array();
$tdatatodocards[".requiredSearchFields"] = array();

$tdatatodocards[".googleLikeFields"] = array();
$tdatatodocards[".googleLikeFields"][] = "cardname";
$tdatatodocards[".googleLikeFields"][] = "categoryid";
$tdatatodocards[".googleLikeFields"][] = "assign";
$tdatatodocards[".googleLikeFields"][] = "duedate";



$tdatatodocards[".tableType"] = "list";

$tdatatodocards[".printerPageOrientation"] = 0;
$tdatatodocards[".nPrinterPageScale"] = 100;

$tdatatodocards[".nPrinterSplitRecords"] = 40;

$tdatatodocards[".geocodingEnabled"] = false;










$tdatatodocards[".pageSize"] = 20;

$tdatatodocards[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatodocards[".strOrderBy"] = $tstrOrderBy;

$tdatatodocards[".orderindexes"] = array();


$tdatatodocards[".sqlHead"] = "SELECT id,  listid,  cardname,  categoryid,  cardorder,  assign,  boardid,  duedate,  ownerid";
$tdatatodocards[".sqlFrom"] = "FROM todocards";
$tdatatodocards[".sqlWhereExpr"] = "";
$tdatatodocards[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodocards[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodocards[".arrGroupsPerPage"] = $arrGPP;

$tdatatodocards[".highlightSearchResults"] = true;

$tableKeystodocards = array();
$tableKeystodocards[] = "id";
$tdatatodocards[".Keys"] = $tableKeystodocards;


$tdatatodocards[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","id");
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


	$tdatatodocards["id"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "id";
//	listid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "listid";
	$fdata["GoodName"] = "listid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","listid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "listid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "listid";

	
	
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


	$tdatatodocards["listid"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "listid";
//	cardname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cardname";
	$fdata["GoodName"] = "cardname";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","cardname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cardname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cardname";

	
	
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


	$tdatatodocards["cardname"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "cardname";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","categoryid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoryid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoryid";

	
	
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
	$edata["LookupTable"] = "todocategories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatatodocards["categoryid"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "categoryid";
//	cardorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cardorder";
	$fdata["GoodName"] = "cardorder";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","cardorder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cardorder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cardorder";

	
	
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


	$tdatatodocards["cardorder"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "cardorder";
//	assign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "assign";
	$fdata["GoodName"] = "assign";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","assign");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "assign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assign";

	
	
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
	$edata["LookupTable"] = "todousers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatatodocards["assign"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "assign";
//	boardid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "boardid";
	$fdata["GoodName"] = "boardid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","boardid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "boardid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "boardid";

	
	
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


	$tdatatodocards["boardid"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "boardid";
//	duedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "duedate";
	$fdata["GoodName"] = "duedate";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","duedate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "duedate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "duedate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatatodocards["duedate"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "duedate";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todocards","ownerid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ownerid";

	
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


	$tdatatodocards["ownerid"] = $fdata;
		$tdatatodocards[".searchableFields"][] = "ownerid";


$tables_data["todocards"]=&$tdatatodocards;
$field_labels["todocards"] = &$fieldLabelstodocards;
$fieldToolTips["todocards"] = &$fieldToolTipstodocards;
$placeHolders["todocards"] = &$placeHolderstodocards;
$page_titles["todocards"] = &$pageTitlestodocards;


changeTextControlsToDate( "todocards" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todocards"] = array();
//	todocomments
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="todocomments";
		$detailsParam["dOriginalTable"] = "todocomments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "todocomments";
	$detailsParam["dCaptionTable"] = GetTableCaption("todocomments");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["todocards"][$dIndex] = $detailsParam;

	
		$detailsTablesData["todocards"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["todocards"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["todocards"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["todocards"][$dIndex]["detailKeys"][]="cardid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todocards"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todocards()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  listid,  cardname,  categoryid,  cardorder,  assign,  boardid,  duedate,  ownerid";
$proto0["m_strFrom"] = "FROM todocards";
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
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todocards";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "listid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto8["m_sql"] = "listid";
$proto8["m_srcTableName"] = "todocards";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cardname",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto10["m_sql"] = "cardname";
$proto10["m_srcTableName"] = "todocards";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto12["m_sql"] = "categoryid";
$proto12["m_srcTableName"] = "todocards";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cardorder",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto14["m_sql"] = "cardorder";
$proto14["m_srcTableName"] = "todocards";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "assign",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto16["m_sql"] = "assign";
$proto16["m_srcTableName"] = "todocards";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "boardid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto18["m_sql"] = "boardid";
$proto18["m_srcTableName"] = "todocards";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "duedate",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto20["m_sql"] = "duedate";
$proto20["m_srcTableName"] = "todocards";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todocards"
));

$proto22["m_sql"] = "ownerid";
$proto22["m_srcTableName"] = "todocards";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "todocards";
$proto25["m_srcTableName"] = "todocards";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "listid";
$proto25["m_columns"][] = "cardname";
$proto25["m_columns"][] = "categoryid";
$proto25["m_columns"][] = "cardorder";
$proto25["m_columns"][] = "assign";
$proto25["m_columns"][] = "boardid";
$proto25["m_columns"][] = "duedate";
$proto25["m_columns"][] = "ownerid";
$proto25["m_columns"][] = "startdate";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "todocards";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "todocards";
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
$proto0["m_srcTableName"]="todocards";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todocards = createSqlQuery_todocards();


	
		;

									

$tdatatodocards[".sqlquery"] = $queryData_todocards;



include_once(getabspath("include/todocards_events.php"));
$tdatatodocards[".hasEvents"] = true;

?>