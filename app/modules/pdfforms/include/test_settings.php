<?php
$tdatatest = array();
$tdatatest[".searchableFields"] = array();
$tdatatest[".ShortName"] = "test";
$tdatatest[".OwnerID"] = "";
$tdatatest[".OriginalTable"] = "test";


$tdatatest[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatest[".originalPagesByType"] = $tdatatest[".pagesByType"];
$tdatatest[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatest[".originalPages"] = $tdatatest[".pages"];
$tdatatest[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatest[".originalDefaultPages"] = $tdatatest[".defaultPages"];

//	field labels
$fieldLabelstest = array();
$fieldToolTipstest = array();
$pageTitlestest = array();
$placeHolderstest = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstest["English"] = array();
	$fieldToolTipstest["English"] = array();
	$placeHolderstest["English"] = array();
	$pageTitlestest["English"] = array();
	$fieldLabelstest["English"]["id"] = "Id";
	$fieldToolTipstest["English"]["id"] = "";
	$placeHolderstest["English"]["id"] = "";
	$fieldLabelstest["English"]["fchar1"] = "Fchar1";
	$fieldToolTipstest["English"]["fchar1"] = "";
	$placeHolderstest["English"]["fchar1"] = "";
	$fieldLabelstest["English"]["fchar2"] = "Fchar2";
	$fieldToolTipstest["English"]["fchar2"] = "";
	$placeHolderstest["English"]["fchar2"] = "";
	$fieldLabelstest["English"]["fint1"] = "Fint1";
	$fieldToolTipstest["English"]["fint1"] = "";
	$placeHolderstest["English"]["fint1"] = "";
	$fieldLabelstest["English"]["fint2"] = "Fint2";
	$fieldToolTipstest["English"]["fint2"] = "";
	$placeHolderstest["English"]["fint2"] = "";
	$fieldLabelstest["English"]["fdate1"] = "Fdate1";
	$fieldToolTipstest["English"]["fdate1"] = "";
	$placeHolderstest["English"]["fdate1"] = "";
	$fieldLabelstest["English"]["fdate2"] = "Fdate2";
	$fieldToolTipstest["English"]["fdate2"] = "";
	$placeHolderstest["English"]["fdate2"] = "";
	if (count($fieldToolTipstest["English"]))
		$tdatatest[".isUseToolTips"] = true;
}


	$tdatatest[".NCSearch"] = true;



$tdatatest[".shortTableName"] = "test";
$tdatatest[".nSecOptions"] = 0;

$tdatatest[".mainTableOwnerID"] = "";
$tdatatest[".entityType"] = 0;
$tdatatest[".connId"] = "project_at_localhost";


$tdatatest[".strOriginalTableName"] = "test";

	



$tdatatest[".showAddInPopup"] = false;

$tdatatest[".showEditInPopup"] = false;

$tdatatest[".showViewInPopup"] = false;

$tdatatest[".listAjax"] = false;
//	temporary
//$tdatatest[".listAjax"] = false;

	$tdatatest[".audit"] = false;

	$tdatatest[".locking"] = false;


$pages = $tdatatest[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatest[".edit"] = true;
	$tdatatest[".afterEditAction"] = 1;
	$tdatatest[".closePopupAfterEdit"] = 1;
	$tdatatest[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatest[".add"] = true;
$tdatatest[".afterAddAction"] = 1;
$tdatatest[".closePopupAfterAdd"] = 1;
$tdatatest[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatest[".list"] = true;
}



$tdatatest[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatest[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatest[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatest[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatest[".printFriendly"] = true;
}



$tdatatest[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatest[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatest[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatest[".isUseAjaxSuggest"] = true;



												

$tdatatest[".ajaxCodeSnippetAdded"] = false;

$tdatatest[".buttonsAdded"] = false;

$tdatatest[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatest[".isUseTimeForSearch"] = false;


$tdatatest[".badgeColor"] = "DB7093";


$tdatatest[".allSearchFields"] = array();
$tdatatest[".filterFields"] = array();
$tdatatest[".requiredSearchFields"] = array();

$tdatatest[".googleLikeFields"] = array();
$tdatatest[".googleLikeFields"][] = "id";
$tdatatest[".googleLikeFields"][] = "fchar1";
$tdatatest[".googleLikeFields"][] = "fchar2";
$tdatatest[".googleLikeFields"][] = "fint1";
$tdatatest[".googleLikeFields"][] = "fint2";
$tdatatest[".googleLikeFields"][] = "fdate1";
$tdatatest[".googleLikeFields"][] = "fdate2";



$tdatatest[".tableType"] = "list";

$tdatatest[".printerPageOrientation"] = 0;
$tdatatest[".nPrinterPageScale"] = 100;

$tdatatest[".nPrinterSplitRecords"] = 40;

$tdatatest[".geocodingEnabled"] = false;










$tdatatest[".pageSize"] = 20;

$tdatatest[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatest[".strOrderBy"] = $tstrOrderBy;

$tdatatest[".orderindexes"] = array();


$tdatatest[".sqlHead"] = "SELECT id,  	fchar1,  	fchar2,  	fint1,  	fint2,  	fdate1,  	fdate2";
$tdatatest[".sqlFrom"] = "FROM test";
$tdatatest[".sqlWhereExpr"] = "";
$tdatatest[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatest[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatest[".arrGroupsPerPage"] = $arrGPP;

$tdatatest[".highlightSearchResults"] = true;

$tableKeystest = array();
$tableKeystest[] = "id";
$tdatatest[".Keys"] = $tableKeystest;


$tdatatest[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","id");
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


	$tdatatest["id"] = $fdata;
		$tdatatest[".searchableFields"][] = "id";
//	fchar1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fchar1";
	$fdata["GoodName"] = "fchar1";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","fchar1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fchar1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fchar1";

	
	
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


	$tdatatest["fchar1"] = $fdata;
		$tdatatest[".searchableFields"][] = "fchar1";
//	fchar2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fchar2";
	$fdata["GoodName"] = "fchar2";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","fchar2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fchar2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fchar2";

	
	
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


	$tdatatest["fchar2"] = $fdata;
		$tdatatest[".searchableFields"][] = "fchar2";
//	fint1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fint1";
	$fdata["GoodName"] = "fint1";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","fint1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fint1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fint1";

	
	
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


	$tdatatest["fint1"] = $fdata;
		$tdatatest[".searchableFields"][] = "fint1";
//	fint2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fint2";
	$fdata["GoodName"] = "fint2";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","fint2");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fint2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fint2";

	
	
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


	$tdatatest["fint2"] = $fdata;
		$tdatatest[".searchableFields"][] = "fint2";
//	fdate1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fdate1";
	$fdata["GoodName"] = "fdate1";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","fdate1");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fdate1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fdate1";

	
	
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


	$tdatatest["fdate1"] = $fdata;
		$tdatatest[".searchableFields"][] = "fdate1";
//	fdate2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fdate2";
	$fdata["GoodName"] = "fdate2";
	$fdata["ownerTable"] = "test";
	$fdata["Label"] = GetFieldLabel("test","fdate2");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fdate2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fdate2";

	
	
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


	$tdatatest["fdate2"] = $fdata;
		$tdatatest[".searchableFields"][] = "fdate2";


$tables_data["test"]=&$tdatatest;
$field_labels["test"] = &$fieldLabelstest;
$fieldToolTips["test"] = &$fieldToolTipstest;
$placeHolders["test"] = &$placeHolderstest;
$page_titles["test"] = &$pageTitlestest;


changeTextControlsToDate( "test" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["test"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["test"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_test()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fchar1,  	fchar2,  	fint1,  	fint2,  	fdate1,  	fdate2";
$proto0["m_strFrom"] = "FROM test";
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
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "test";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fchar1",
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto8["m_sql"] = "fchar1";
$proto8["m_srcTableName"] = "test";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fchar2",
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto10["m_sql"] = "fchar2";
$proto10["m_srcTableName"] = "test";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fint1",
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto12["m_sql"] = "fint1";
$proto12["m_srcTableName"] = "test";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fint2",
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto14["m_sql"] = "fint2";
$proto14["m_srcTableName"] = "test";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fdate1",
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto16["m_sql"] = "fdate1";
$proto16["m_srcTableName"] = "test";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fdate2",
	"m_strTable" => "test",
	"m_srcTableName" => "test"
));

$proto18["m_sql"] = "fdate2";
$proto18["m_srcTableName"] = "test";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "test";
$proto21["m_srcTableName"] = "test";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "fchar1";
$proto21["m_columns"][] = "fchar2";
$proto21["m_columns"][] = "fint1";
$proto21["m_columns"][] = "fint2";
$proto21["m_columns"][] = "fdate1";
$proto21["m_columns"][] = "fdate2";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "test";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "test";
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
$proto0["m_srcTableName"]="test";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_test = createSqlQuery_test();


	
		;

							

$tdatatest[".sqlquery"] = $queryData_test;



$tdatatest[".hasEvents"] = false;

?>