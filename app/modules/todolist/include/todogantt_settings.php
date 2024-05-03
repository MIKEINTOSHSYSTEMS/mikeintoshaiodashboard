<?php
$tdatatodogantt = array();
$tdatatodogantt[".searchableFields"] = array();
$tdatatodogantt[".ShortName"] = "todogantt";
$tdatatodogantt[".OwnerID"] = "ownerid";
$tdatatodogantt[".OriginalTable"] = "todocards";


$tdatatodogantt[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatodogantt[".originalPagesByType"] = $tdatatodogantt[".pagesByType"];
$tdatatodogantt[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatodogantt[".originalPages"] = $tdatatodogantt[".pages"];
$tdatatodogantt[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatodogantt[".originalDefaultPages"] = $tdatatodogantt[".defaultPages"];

//	field labels
$fieldLabelstodogantt = array();
$fieldToolTipstodogantt = array();
$pageTitlestodogantt = array();
$placeHolderstodogantt = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodogantt["English"] = array();
	$fieldToolTipstodogantt["English"] = array();
	$placeHolderstodogantt["English"] = array();
	$pageTitlestodogantt["English"] = array();
	$fieldLabelstodogantt["English"]["id"] = "Id";
	$fieldToolTipstodogantt["English"]["id"] = "";
	$placeHolderstodogantt["English"]["id"] = "";
	$fieldLabelstodogantt["English"]["listid"] = "Listid";
	$fieldToolTipstodogantt["English"]["listid"] = "";
	$placeHolderstodogantt["English"]["listid"] = "";
	$fieldLabelstodogantt["English"]["cardname"] = "Name";
	$fieldToolTipstodogantt["English"]["cardname"] = "";
	$placeHolderstodogantt["English"]["cardname"] = "";
	$fieldLabelstodogantt["English"]["cardorder"] = "Cardorder";
	$fieldToolTipstodogantt["English"]["cardorder"] = "";
	$placeHolderstodogantt["English"]["cardorder"] = "";
	$fieldLabelstodogantt["English"]["assign"] = "Assign To";
	$fieldToolTipstodogantt["English"]["assign"] = "";
	$placeHolderstodogantt["English"]["assign"] = "";
	$fieldLabelstodogantt["English"]["categoryid"] = "Category";
	$fieldToolTipstodogantt["English"]["categoryid"] = "";
	$placeHolderstodogantt["English"]["categoryid"] = "";
	$fieldLabelstodogantt["English"]["boardid"] = "Boardid";
	$fieldToolTipstodogantt["English"]["boardid"] = "";
	$placeHolderstodogantt["English"]["boardid"] = "";
	$fieldLabelstodogantt["English"]["ownerid"] = "Ownerid";
	$fieldToolTipstodogantt["English"]["ownerid"] = "";
	$placeHolderstodogantt["English"]["ownerid"] = "";
	if (count($fieldToolTipstodogantt["English"]))
		$tdatatodogantt[".isUseToolTips"] = true;
}


	$tdatatodogantt[".NCSearch"] = true;



$tdatatodogantt[".shortTableName"] = "todogantt";
$tdatatodogantt[".nSecOptions"] = 1;

$tdatatodogantt[".mainTableOwnerID"] = "ownerid";
$tdatatodogantt[".entityType"] = 1;
$tdatatodogantt[".connId"] = "project_at_localhost";


$tdatatodogantt[".strOriginalTableName"] = "todocards";

	



$tdatatodogantt[".showAddInPopup"] = false;

$tdatatodogantt[".showEditInPopup"] = false;

$tdatatodogantt[".showViewInPopup"] = false;

$tdatatodogantt[".listAjax"] = false;
//	temporary
//$tdatatodogantt[".listAjax"] = false;

	$tdatatodogantt[".audit"] = false;

	$tdatatodogantt[".locking"] = false;


$pages = $tdatatodogantt[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodogantt[".edit"] = true;
	$tdatatodogantt[".afterEditAction"] = 1;
	$tdatatodogantt[".closePopupAfterEdit"] = 1;
	$tdatatodogantt[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodogantt[".add"] = true;
$tdatatodogantt[".afterAddAction"] = 1;
$tdatatodogantt[".closePopupAfterAdd"] = 1;
$tdatatodogantt[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodogantt[".list"] = true;
}



$tdatatodogantt[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodogantt[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodogantt[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodogantt[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodogantt[".printFriendly"] = true;
}



$tdatatodogantt[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodogantt[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodogantt[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodogantt[".isUseAjaxSuggest"] = true;



																								

$tdatatodogantt[".ajaxCodeSnippetAdded"] = false;

$tdatatodogantt[".buttonsAdded"] = false;

$tdatatodogantt[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatodogantt[".isUseTimeForSearch"] = false;


$tdatatodogantt[".badgeColor"] = "DAA520";


$tdatatodogantt[".allSearchFields"] = array();
$tdatatodogantt[".filterFields"] = array();
$tdatatodogantt[".requiredSearchFields"] = array();

$tdatatodogantt[".googleLikeFields"] = array();
$tdatatodogantt[".googleLikeFields"][] = "cardname";
$tdatatodogantt[".googleLikeFields"][] = "categoryid";
$tdatatodogantt[".googleLikeFields"][] = "assign";



$tdatatodogantt[".tableType"] = "list";

$tdatatodogantt[".printerPageOrientation"] = 0;
$tdatatodogantt[".nPrinterPageScale"] = 100;

$tdatatodogantt[".nPrinterSplitRecords"] = 40;

$tdatatodogantt[".geocodingEnabled"] = false;










$tdatatodogantt[".pageSize"] = 20;

$tdatatodogantt[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatodogantt[".strOrderBy"] = $tstrOrderBy;

$tdatatodogantt[".orderindexes"] = array();


$tdatatodogantt[".sqlHead"] = "SELECT id,  listid,  cardname,  categoryid,  cardorder,  assign,  boardid,  ownerid";
$tdatatodogantt[".sqlFrom"] = "FROM todocards";
$tdatatodogantt[".sqlWhereExpr"] = "";
$tdatatodogantt[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatodogantt[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodogantt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodogantt[".arrGroupsPerPage"] = $arrGPP;

$tdatatodogantt[".highlightSearchResults"] = true;

$tableKeystodogantt = array();
$tableKeystodogantt[] = "id";
$tdatatodogantt[".Keys"] = $tableKeystodogantt;


$tdatatodogantt[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","id");
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


	$tdatatodogantt["id"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "id";
//	listid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "listid";
	$fdata["GoodName"] = "listid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","listid");
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


	$tdatatodogantt["listid"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "listid";
//	cardname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cardname";
	$fdata["GoodName"] = "cardname";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","cardname");
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


	$tdatatodogantt["cardname"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "cardname";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","categoryid");
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


	$tdatatodogantt["categoryid"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "categoryid";
//	cardorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cardorder";
	$fdata["GoodName"] = "cardorder";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","cardorder");
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


	$tdatatodogantt["cardorder"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "cardorder";
//	assign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "assign";
	$fdata["GoodName"] = "assign";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","assign");
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


	$tdatatodogantt["assign"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "assign";
//	boardid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "boardid";
	$fdata["GoodName"] = "boardid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","boardid");
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


	$tdatatodogantt["boardid"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "boardid";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "todocards";
	$fdata["Label"] = GetFieldLabel("todogantt","ownerid");
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


	$tdatatodogantt["ownerid"] = $fdata;
		$tdatatodogantt[".searchableFields"][] = "ownerid";


$tables_data["todogantt"]=&$tdatatodogantt;
$field_labels["todogantt"] = &$fieldLabelstodogantt;
$fieldToolTips["todogantt"] = &$fieldToolTipstodogantt;
$placeHolders["todogantt"] = &$placeHolderstodogantt;
$page_titles["todogantt"] = &$pageTitlestodogantt;


changeTextControlsToDate( "todogantt" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todogantt"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todogantt"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todogantt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  listid,  cardname,  categoryid,  cardorder,  assign,  boardid,  ownerid";
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
	"m_srcTableName" => "todogantt"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todogantt";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "listid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto8["m_sql"] = "listid";
$proto8["m_srcTableName"] = "todogantt";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cardname",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto10["m_sql"] = "cardname";
$proto10["m_srcTableName"] = "todogantt";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto12["m_sql"] = "categoryid";
$proto12["m_srcTableName"] = "todogantt";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cardorder",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto14["m_sql"] = "cardorder";
$proto14["m_srcTableName"] = "todogantt";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "assign",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto16["m_sql"] = "assign";
$proto16["m_srcTableName"] = "todogantt";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "boardid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto18["m_sql"] = "boardid";
$proto18["m_srcTableName"] = "todogantt";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "todocards",
	"m_srcTableName" => "todogantt"
));

$proto20["m_sql"] = "ownerid";
$proto20["m_srcTableName"] = "todogantt";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "todocards";
$proto23["m_srcTableName"] = "todogantt";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "listid";
$proto23["m_columns"][] = "cardname";
$proto23["m_columns"][] = "categoryid";
$proto23["m_columns"][] = "cardorder";
$proto23["m_columns"][] = "assign";
$proto23["m_columns"][] = "boardid";
$proto23["m_columns"][] = "duedate";
$proto23["m_columns"][] = "ownerid";
$proto23["m_columns"][] = "startdate";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "todocards";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "todogantt";
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
$proto0["m_srcTableName"]="todogantt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todogantt = createSqlQuery_todogantt();


	
		;

								

$tdatatodogantt[".sqlquery"] = $queryData_todogantt;



include_once(getabspath("include/todogantt_events.php"));
$tdatatodogantt[".hasEvents"] = true;

?>