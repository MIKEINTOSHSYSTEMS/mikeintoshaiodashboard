<?php
$tdatakbusers = array();
$tdatakbusers[".searchableFields"] = array();
$tdatakbusers[".ShortName"] = "kbusers";
$tdatakbusers[".OwnerID"] = "";
$tdatakbusers[".OriginalTable"] = "kbusers";


$tdatakbusers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakbusers[".originalPagesByType"] = $tdatakbusers[".pagesByType"];
$tdatakbusers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakbusers[".originalPages"] = $tdatakbusers[".pages"];
$tdatakbusers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakbusers[".originalDefaultPages"] = $tdatakbusers[".defaultPages"];

//	field labels
$fieldLabelskbusers = array();
$fieldToolTipskbusers = array();
$pageTitleskbusers = array();
$placeHolderskbusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskbusers["English"] = array();
	$fieldToolTipskbusers["English"] = array();
	$placeHolderskbusers["English"] = array();
	$pageTitleskbusers["English"] = array();
	$fieldLabelskbusers["English"]["email"] = "Email";
	$fieldToolTipskbusers["English"]["email"] = "";
	$placeHolderskbusers["English"]["email"] = "";
	$fieldLabelskbusers["English"]["fullname"] = "Fullname";
	$fieldToolTipskbusers["English"]["fullname"] = "";
	$placeHolderskbusers["English"]["fullname"] = "";
	$fieldLabelskbusers["English"]["password"] = "Password";
	$fieldToolTipskbusers["English"]["password"] = "";
	$placeHolderskbusers["English"]["password"] = "";
	$fieldLabelskbusers["English"]["username"] = "Username";
	$fieldToolTipskbusers["English"]["username"] = "";
	$placeHolderskbusers["English"]["username"] = "";
	$fieldLabelskbusers["English"]["reset_token"] = "Reset Token";
	$fieldToolTipskbusers["English"]["reset_token"] = "";
	$placeHolderskbusers["English"]["reset_token"] = "";
	$fieldLabelskbusers["English"]["reset_date"] = "Reset Date";
	$fieldToolTipskbusers["English"]["reset_date"] = "";
	$placeHolderskbusers["English"]["reset_date"] = "";
	$fieldLabelskbusers["English"]["id"] = "Id";
	$fieldToolTipskbusers["English"]["id"] = "";
	$placeHolderskbusers["English"]["id"] = "";
	if (count($fieldToolTipskbusers["English"]))
		$tdatakbusers[".isUseToolTips"] = true;
}


	$tdatakbusers[".NCSearch"] = true;



$tdatakbusers[".shortTableName"] = "kbusers";
$tdatakbusers[".nSecOptions"] = 0;

$tdatakbusers[".mainTableOwnerID"] = "";
$tdatakbusers[".entityType"] = 0;
$tdatakbusers[".connId"] = "deredevatderejadevmerqconsulta";


$tdatakbusers[".strOriginalTableName"] = "kbusers";

	



$tdatakbusers[".showAddInPopup"] = false;

$tdatakbusers[".showEditInPopup"] = false;

$tdatakbusers[".showViewInPopup"] = false;

$tdatakbusers[".listAjax"] = false;
//	temporary
//$tdatakbusers[".listAjax"] = false;

	$tdatakbusers[".audit"] = true;

	$tdatakbusers[".locking"] = false;


$pages = $tdatakbusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakbusers[".edit"] = true;
	$tdatakbusers[".afterEditAction"] = 1;
	$tdatakbusers[".closePopupAfterEdit"] = 1;
	$tdatakbusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakbusers[".add"] = true;
$tdatakbusers[".afterAddAction"] = 1;
$tdatakbusers[".closePopupAfterAdd"] = 1;
$tdatakbusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakbusers[".list"] = true;
}



$tdatakbusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakbusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakbusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakbusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakbusers[".printFriendly"] = true;
}



$tdatakbusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakbusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakbusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakbusers[".isUseAjaxSuggest"] = true;



						

$tdatakbusers[".ajaxCodeSnippetAdded"] = false;

$tdatakbusers[".buttonsAdded"] = false;

$tdatakbusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakbusers[".isUseTimeForSearch"] = false;


$tdatakbusers[".badgeColor"] = "E8926F";


$tdatakbusers[".allSearchFields"] = array();
$tdatakbusers[".filterFields"] = array();
$tdatakbusers[".requiredSearchFields"] = array();

$tdatakbusers[".googleLikeFields"] = array();
$tdatakbusers[".googleLikeFields"][] = "email";
$tdatakbusers[".googleLikeFields"][] = "fullname";
$tdatakbusers[".googleLikeFields"][] = "password";
$tdatakbusers[".googleLikeFields"][] = "username";
$tdatakbusers[".googleLikeFields"][] = "reset_token";
$tdatakbusers[".googleLikeFields"][] = "reset_date";
$tdatakbusers[".googleLikeFields"][] = "id";



$tdatakbusers[".tableType"] = "list";

$tdatakbusers[".printerPageOrientation"] = 0;
$tdatakbusers[".nPrinterPageScale"] = 100;

$tdatakbusers[".nPrinterSplitRecords"] = 40;

$tdatakbusers[".geocodingEnabled"] = false;










$tdatakbusers[".pageSize"] = 20;

$tdatakbusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakbusers[".strOrderBy"] = $tstrOrderBy;

$tdatakbusers[".orderindexes"] = array();


$tdatakbusers[".sqlHead"] = "SELECT email,  	fullname,  	password,  	username,  	reset_token,  	reset_date,  	id";
$tdatakbusers[".sqlFrom"] = "FROM kbusers";
$tdatakbusers[".sqlWhereExpr"] = "";
$tdatakbusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakbusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakbusers[".arrGroupsPerPage"] = $arrGPP;

$tdatakbusers[".highlightSearchResults"] = true;

$tableKeyskbusers = array();
$tableKeyskbusers[] = "email";
$tdatakbusers[".Keys"] = $tableKeyskbusers;


$tdatakbusers[".hideMobileList"] = array();




//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatakbusers["email"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatakbusers["fullname"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "fullname";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatakbusers["password"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "password";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatakbusers["username"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "username";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","reset_token");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdatakbusers["reset_token"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdatakbusers["reset_date"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "reset_date";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "kbusers";
	$fdata["Label"] = GetFieldLabel("kbusers","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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


	$tdatakbusers["id"] = $fdata;
		$tdatakbusers[".searchableFields"][] = "id";


$tables_data["kbusers"]=&$tdatakbusers;
$field_labels["kbusers"] = &$fieldLabelskbusers;
$fieldToolTips["kbusers"] = &$fieldToolTipskbusers;
$placeHolders["kbusers"] = &$placeHolderskbusers;
$page_titles["kbusers"] = &$pageTitleskbusers;


changeTextControlsToDate( "kbusers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kbusers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kbusers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kbusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "email,  	fullname,  	password,  	username,  	reset_token,  	reset_date,  	id";
$proto0["m_strFrom"] = "FROM kbusers";
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
	"m_strName" => "email",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto6["m_sql"] = "email";
$proto6["m_srcTableName"] = "kbusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "kbusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "kbusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto12["m_sql"] = "username";
$proto12["m_srcTableName"] = "kbusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto14["m_sql"] = "reset_token";
$proto14["m_srcTableName"] = "kbusers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto16["m_sql"] = "reset_date";
$proto16["m_srcTableName"] = "kbusers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "kbusers",
	"m_srcTableName" => "kbusers"
));

$proto18["m_sql"] = "id";
$proto18["m_srcTableName"] = "kbusers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "kbusers";
$proto21["m_srcTableName"] = "kbusers";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "reset_token";
$proto21["m_columns"][] = "reset_date";
$proto21["m_columns"][] = "id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "kbusers";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "kbusers";
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
$proto0["m_srcTableName"]="kbusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kbusers = createSqlQuery_kbusers();


	
																								;

							

$tdatakbusers[".sqlquery"] = $queryData_kbusers;



$tdatakbusers[".hasEvents"] = false;

?>