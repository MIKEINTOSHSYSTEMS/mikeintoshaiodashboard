<?php
$tdatapdf_test1 = array();
$tdatapdf_test1[".searchableFields"] = array();
$tdatapdf_test1[".ShortName"] = "pdf_test1";
$tdatapdf_test1[".OwnerID"] = "id";
$tdatapdf_test1[".OriginalTable"] = "pdf_test";


$tdatapdf_test1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapdf_test1[".originalPagesByType"] = $tdatapdf_test1[".pagesByType"];
$tdatapdf_test1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapdf_test1[".originalPages"] = $tdatapdf_test1[".pages"];
$tdatapdf_test1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapdf_test1[".originalDefaultPages"] = $tdatapdf_test1[".defaultPages"];

//	field labels
$fieldLabelspdf_test1 = array();
$fieldToolTipspdf_test1 = array();
$pageTitlespdf_test1 = array();
$placeHolderspdf_test1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_test1["English"] = array();
	$fieldToolTipspdf_test1["English"] = array();
	$placeHolderspdf_test1["English"] = array();
	$pageTitlespdf_test1["English"] = array();
	$fieldLabelspdf_test1["English"]["id"] = "Id";
	$fieldToolTipspdf_test1["English"]["id"] = "";
	$placeHolderspdf_test1["English"]["id"] = "";
	$fieldLabelspdf_test1["English"]["field_char1"] = "Field Char1";
	$fieldToolTipspdf_test1["English"]["field_char1"] = "";
	$placeHolderspdf_test1["English"]["field_char1"] = "";
	$fieldLabelspdf_test1["English"]["field_char2"] = "Field Char2";
	$fieldToolTipspdf_test1["English"]["field_char2"] = "";
	$placeHolderspdf_test1["English"]["field_char2"] = "";
	$fieldLabelspdf_test1["English"]["field_int1"] = "Field Int1";
	$fieldToolTipspdf_test1["English"]["field_int1"] = "";
	$placeHolderspdf_test1["English"]["field_int1"] = "";
	$fieldLabelspdf_test1["English"]["field_int2"] = "Field Int2";
	$fieldToolTipspdf_test1["English"]["field_int2"] = "";
	$placeHolderspdf_test1["English"]["field_int2"] = "";
	$fieldLabelspdf_test1["English"]["field_date1"] = "Field Date1";
	$fieldToolTipspdf_test1["English"]["field_date1"] = "";
	$placeHolderspdf_test1["English"]["field_date1"] = "";
	$fieldLabelspdf_test1["English"]["field_date2"] = "Field Date2";
	$fieldToolTipspdf_test1["English"]["field_date2"] = "";
	$placeHolderspdf_test1["English"]["field_date2"] = "";
	$fieldLabelspdf_test1["English"]["field_char3"] = "Field Char3";
	$fieldToolTipspdf_test1["English"]["field_char3"] = "";
	$placeHolderspdf_test1["English"]["field_char3"] = "";
	$fieldLabelspdf_test1["English"]["field_char4"] = "Field Char4";
	$fieldToolTipspdf_test1["English"]["field_char4"] = "";
	$placeHolderspdf_test1["English"]["field_char4"] = "";
	$fieldLabelspdf_test1["English"]["field_char5"] = "Field Char5";
	$fieldToolTipspdf_test1["English"]["field_char5"] = "";
	$placeHolderspdf_test1["English"]["field_char5"] = "";
	$fieldLabelspdf_test1["English"]["field_int3"] = "Field Int3";
	$fieldToolTipspdf_test1["English"]["field_int3"] = "";
	$placeHolderspdf_test1["English"]["field_int3"] = "";
	if (count($fieldToolTipspdf_test1["English"]))
		$tdatapdf_test1[".isUseToolTips"] = true;
}


	$tdatapdf_test1[".NCSearch"] = true;



$tdatapdf_test1[".shortTableName"] = "pdf_test1";
$tdatapdf_test1[".nSecOptions"] = 0;

$tdatapdf_test1[".mainTableOwnerID"] = "id";
$tdatapdf_test1[".entityType"] = 0;
$tdatapdf_test1[".connId"] = "project_at_localhost";


$tdatapdf_test1[".strOriginalTableName"] = "pdf_test";

	



$tdatapdf_test1[".showAddInPopup"] = false;

$tdatapdf_test1[".showEditInPopup"] = false;

$tdatapdf_test1[".showViewInPopup"] = false;

$tdatapdf_test1[".listAjax"] = false;
//	temporary
//$tdatapdf_test1[".listAjax"] = false;

	$tdatapdf_test1[".audit"] = false;

	$tdatapdf_test1[".locking"] = false;


$pages = $tdatapdf_test1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapdf_test1[".edit"] = true;
	$tdatapdf_test1[".afterEditAction"] = 1;
	$tdatapdf_test1[".closePopupAfterEdit"] = 1;
	$tdatapdf_test1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapdf_test1[".add"] = true;
$tdatapdf_test1[".afterAddAction"] = 1;
$tdatapdf_test1[".closePopupAfterAdd"] = 1;
$tdatapdf_test1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapdf_test1[".list"] = true;
}



$tdatapdf_test1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapdf_test1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapdf_test1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapdf_test1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapdf_test1[".printFriendly"] = true;
}



$tdatapdf_test1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapdf_test1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapdf_test1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapdf_test1[".isUseAjaxSuggest"] = true;



												

$tdatapdf_test1[".ajaxCodeSnippetAdded"] = false;

$tdatapdf_test1[".buttonsAdded"] = false;

$tdatapdf_test1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf_test1[".isUseTimeForSearch"] = false;


$tdatapdf_test1[".badgeColor"] = "DB7093";


$tdatapdf_test1[".allSearchFields"] = array();
$tdatapdf_test1[".filterFields"] = array();
$tdatapdf_test1[".requiredSearchFields"] = array();

$tdatapdf_test1[".googleLikeFields"] = array();
$tdatapdf_test1[".googleLikeFields"][] = "id";
$tdatapdf_test1[".googleLikeFields"][] = "field_char1";
$tdatapdf_test1[".googleLikeFields"][] = "field_char2";
$tdatapdf_test1[".googleLikeFields"][] = "field_char3";
$tdatapdf_test1[".googleLikeFields"][] = "field_char4";
$tdatapdf_test1[".googleLikeFields"][] = "field_char5";
$tdatapdf_test1[".googleLikeFields"][] = "field_int1";
$tdatapdf_test1[".googleLikeFields"][] = "field_int2";
$tdatapdf_test1[".googleLikeFields"][] = "field_int3";
$tdatapdf_test1[".googleLikeFields"][] = "field_date1";
$tdatapdf_test1[".googleLikeFields"][] = "field_date2";



$tdatapdf_test1[".tableType"] = "list";

$tdatapdf_test1[".printerPageOrientation"] = 0;
$tdatapdf_test1[".nPrinterPageScale"] = 100;

$tdatapdf_test1[".nPrinterSplitRecords"] = 40;

$tdatapdf_test1[".geocodingEnabled"] = false;










$tdatapdf_test1[".pageSize"] = 20;

$tdatapdf_test1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapdf_test1[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_test1[".orderindexes"] = array();


$tdatapdf_test1[".sqlHead"] = "SELECT id,  	field_char1,  	field_char2,  	field_char3,  	field_char4,  	field_char5,  	field_int1,  	field_int2,  	field_int3,  	field_date1,  	field_date2";
$tdatapdf_test1[".sqlFrom"] = "FROM pdf_test";
$tdatapdf_test1[".sqlWhereExpr"] = "";
$tdatapdf_test1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_test1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_test1[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_test1[".highlightSearchResults"] = true;

$tableKeyspdf_test1 = array();
$tableKeyspdf_test1[] = "id";
$tdatapdf_test1[".Keys"] = $tableKeyspdf_test1;


$tdatapdf_test1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","id");
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


	$tdatapdf_test1["id"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "id";
//	field_char1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "field_char1";
	$fdata["GoodName"] = "field_char1";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_char1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_char1";

		$fdata["sourceSingle"] = "field_char1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_char1";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatapdf_test1["field_char1"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_char1";
//	field_char2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "field_char2";
	$fdata["GoodName"] = "field_char2";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_char2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_char2";

		$fdata["sourceSingle"] = "field_char2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_char2";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatapdf_test1["field_char2"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_char2";
//	field_char3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "field_char3";
	$fdata["GoodName"] = "field_char3";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_char3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_char3";

		$fdata["sourceSingle"] = "field_char3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_char3";

	
	
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


	$tdatapdf_test1["field_char3"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_char3";
//	field_char4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "field_char4";
	$fdata["GoodName"] = "field_char4";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_char4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_char4";

		$fdata["sourceSingle"] = "field_char4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_char4";

	
	
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


	$tdatapdf_test1["field_char4"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_char4";
//	field_char5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "field_char5";
	$fdata["GoodName"] = "field_char5";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_char5");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_char5";

		$fdata["sourceSingle"] = "field_char5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_char5";

	
	
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


	$tdatapdf_test1["field_char5"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_char5";
//	field_int1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "field_int1";
	$fdata["GoodName"] = "field_int1";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_int1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "field_int1";

		$fdata["sourceSingle"] = "field_int1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_int1";

	
	
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


	$tdatapdf_test1["field_int1"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_int1";
//	field_int2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "field_int2";
	$fdata["GoodName"] = "field_int2";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_int2");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "field_int2";

		$fdata["sourceSingle"] = "field_int2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_int2";

	
	
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


	$tdatapdf_test1["field_int2"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_int2";
//	field_int3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "field_int3";
	$fdata["GoodName"] = "field_int3";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_int3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_int3";

		$fdata["sourceSingle"] = "field_int3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_int3";

	
	
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


	$tdatapdf_test1["field_int3"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_int3";
//	field_date1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "field_date1";
	$fdata["GoodName"] = "field_date1";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_date1");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "field_date1";

		$fdata["sourceSingle"] = "field_date1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_date1";

	
	
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


	$tdatapdf_test1["field_date1"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_date1";
//	field_date2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "field_date2";
	$fdata["GoodName"] = "field_date2";
	$fdata["ownerTable"] = "pdf_test";
	$fdata["Label"] = GetFieldLabel("pdf_test","field_date2");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "field_date2";

		$fdata["sourceSingle"] = "field_date2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_date2";

	
	
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


	$tdatapdf_test1["field_date2"] = $fdata;
		$tdatapdf_test1[".searchableFields"][] = "field_date2";


$tables_data["pdf_test"]=&$tdatapdf_test1;
$field_labels["pdf_test"] = &$fieldLabelspdf_test1;
$fieldToolTips["pdf_test"] = &$fieldToolTipspdf_test1;
$placeHolders["pdf_test"] = &$placeHolderspdf_test1;
$page_titles["pdf_test"] = &$pageTitlespdf_test1;


changeTextControlsToDate( "pdf_test" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pdf_test"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pdf_test"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pdf_test1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	field_char1,  	field_char2,  	field_char3,  	field_char4,  	field_char5,  	field_int1,  	field_int2,  	field_int3,  	field_date1,  	field_date2";
$proto0["m_strFrom"] = "FROM pdf_test";
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
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pdf_test";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "field_char1",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto8["m_sql"] = "field_char1";
$proto8["m_srcTableName"] = "pdf_test";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "field_char2",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto10["m_sql"] = "field_char2";
$proto10["m_srcTableName"] = "pdf_test";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "field_char3",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto12["m_sql"] = "field_char3";
$proto12["m_srcTableName"] = "pdf_test";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "field_char4",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto14["m_sql"] = "field_char4";
$proto14["m_srcTableName"] = "pdf_test";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "field_char5",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto16["m_sql"] = "field_char5";
$proto16["m_srcTableName"] = "pdf_test";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "field_int1",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto18["m_sql"] = "field_int1";
$proto18["m_srcTableName"] = "pdf_test";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "field_int2",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto20["m_sql"] = "field_int2";
$proto20["m_srcTableName"] = "pdf_test";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "field_int3",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto22["m_sql"] = "field_int3";
$proto22["m_srcTableName"] = "pdf_test";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "field_date1",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto24["m_sql"] = "field_date1";
$proto24["m_srcTableName"] = "pdf_test";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "field_date2",
	"m_strTable" => "pdf_test",
	"m_srcTableName" => "pdf_test"
));

$proto26["m_sql"] = "field_date2";
$proto26["m_srcTableName"] = "pdf_test";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "pdf_test";
$proto29["m_srcTableName"] = "pdf_test";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "field_char1";
$proto29["m_columns"][] = "field_char2";
$proto29["m_columns"][] = "field_char3";
$proto29["m_columns"][] = "field_char4";
$proto29["m_columns"][] = "field_char5";
$proto29["m_columns"][] = "field_int1";
$proto29["m_columns"][] = "field_int2";
$proto29["m_columns"][] = "field_int3";
$proto29["m_columns"][] = "field_date1";
$proto29["m_columns"][] = "field_date2";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "pdf_test";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "pdf_test";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pdf_test";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_test1 = createSqlQuery_pdf_test1();


	
		;

											

$tdatapdf_test1[".sqlquery"] = $queryData_pdf_test1;



$tdatapdf_test1[".hasEvents"] = false;

?>