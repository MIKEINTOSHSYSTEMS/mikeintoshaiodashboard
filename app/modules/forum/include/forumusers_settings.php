<?php
$tdataforumusers = array();
$tdataforumusers[".searchableFields"] = array();
$tdataforumusers[".ShortName"] = "forumusers";
$tdataforumusers[".OwnerID"] = "";
$tdataforumusers[".OriginalTable"] = "forumusers";


$tdataforumusers[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataforumusers[".originalPagesByType"] = $tdataforumusers[".pagesByType"];
$tdataforumusers[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataforumusers[".originalPages"] = $tdataforumusers[".pages"];
$tdataforumusers[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataforumusers[".originalDefaultPages"] = $tdataforumusers[".defaultPages"];

//	field labels
$fieldLabelsforumusers = array();
$fieldToolTipsforumusers = array();
$pageTitlesforumusers = array();
$placeHoldersforumusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumusers["English"] = array();
	$fieldToolTipsforumusers["English"] = array();
	$placeHoldersforumusers["English"] = array();
	$pageTitlesforumusers["English"] = array();
	$fieldLabelsforumusers["English"]["displayname"] = "Displayname";
	$fieldToolTipsforumusers["English"]["displayname"] = "";
	$placeHoldersforumusers["English"]["displayname"] = "";
	$fieldLabelsforumusers["English"]["password"] = "Password";
	$fieldToolTipsforumusers["English"]["password"] = "";
	$placeHoldersforumusers["English"]["password"] = "";
	$fieldLabelsforumusers["English"]["email"] = "Email";
	$fieldToolTipsforumusers["English"]["email"] = "";
	$placeHoldersforumusers["English"]["email"] = "";
	$fieldLabelsforumusers["English"]["id"] = "Id";
	$fieldToolTipsforumusers["English"]["id"] = "";
	$placeHoldersforumusers["English"]["id"] = "";
	$fieldLabelsforumusers["English"]["usertype"] = "Usertype";
	$fieldToolTipsforumusers["English"]["usertype"] = "";
	$placeHoldersforumusers["English"]["usertype"] = "";
	$fieldLabelsforumusers["English"]["reset_token"] = "Reset Token";
	$fieldToolTipsforumusers["English"]["reset_token"] = "";
	$placeHoldersforumusers["English"]["reset_token"] = "";
	$fieldLabelsforumusers["English"]["reset_date"] = "Reset Date";
	$fieldToolTipsforumusers["English"]["reset_date"] = "";
	$placeHoldersforumusers["English"]["reset_date"] = "";
	if (count($fieldToolTipsforumusers["English"]))
		$tdataforumusers[".isUseToolTips"] = true;
}


	$tdataforumusers[".NCSearch"] = true;



$tdataforumusers[".shortTableName"] = "forumusers";
$tdataforumusers[".nSecOptions"] = 0;

$tdataforumusers[".mainTableOwnerID"] = "";
$tdataforumusers[".entityType"] = 0;
$tdataforumusers[".connId"] = "project_at_localhost";


$tdataforumusers[".strOriginalTableName"] = "forumusers";

	



$tdataforumusers[".showAddInPopup"] = false;

$tdataforumusers[".showEditInPopup"] = false;

$tdataforumusers[".showViewInPopup"] = false;

$tdataforumusers[".listAjax"] = false;
//	temporary
//$tdataforumusers[".listAjax"] = false;

	$tdataforumusers[".audit"] = false;

	$tdataforumusers[".locking"] = false;


$pages = $tdataforumusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumusers[".edit"] = true;
	$tdataforumusers[".afterEditAction"] = 1;
	$tdataforumusers[".closePopupAfterEdit"] = 1;
	$tdataforumusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumusers[".add"] = true;
$tdataforumusers[".afterAddAction"] = 1;
$tdataforumusers[".closePopupAfterAdd"] = 1;
$tdataforumusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumusers[".list"] = true;
}



$tdataforumusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumusers[".printFriendly"] = true;
}



$tdataforumusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumusers[".isUseAjaxSuggest"] = true;



															

$tdataforumusers[".ajaxCodeSnippetAdded"] = false;

$tdataforumusers[".buttonsAdded"] = false;

$tdataforumusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumusers[".isUseTimeForSearch"] = false;


$tdataforumusers[".badgeColor"] = "D2691E";


$tdataforumusers[".allSearchFields"] = array();
$tdataforumusers[".filterFields"] = array();
$tdataforumusers[".requiredSearchFields"] = array();

$tdataforumusers[".googleLikeFields"] = array();
$tdataforumusers[".googleLikeFields"][] = "displayname";
$tdataforumusers[".googleLikeFields"][] = "password";
$tdataforumusers[".googleLikeFields"][] = "email";
$tdataforumusers[".googleLikeFields"][] = "id";
$tdataforumusers[".googleLikeFields"][] = "usertype";
$tdataforumusers[".googleLikeFields"][] = "reset_token";
$tdataforumusers[".googleLikeFields"][] = "reset_date";



$tdataforumusers[".tableType"] = "list";

$tdataforumusers[".printerPageOrientation"] = 0;
$tdataforumusers[".nPrinterPageScale"] = 100;

$tdataforumusers[".nPrinterSplitRecords"] = 40;

$tdataforumusers[".geocodingEnabled"] = false;










$tdataforumusers[".pageSize"] = 20;

$tdataforumusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataforumusers[".strOrderBy"] = $tstrOrderBy;

$tdataforumusers[".orderindexes"] = array();


$tdataforumusers[".sqlHead"] = "SELECT displayname,  password,  email,  id,  usertype,  reset_token,  reset_date";
$tdataforumusers[".sqlFrom"] = "FROM forumusers";
$tdataforumusers[".sqlWhereExpr"] = "";
$tdataforumusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumusers[".arrGroupsPerPage"] = $arrGPP;

$tdataforumusers[".highlightSearchResults"] = true;

$tableKeysforumusers = array();
$tableKeysforumusers[] = "id";
$tdataforumusers[".Keys"] = $tableKeysforumusers;


$tdataforumusers[".hideMobileList"] = array();




//	displayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "displayname";
	$fdata["GoodName"] = "displayname";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","displayname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "displayname";

		$fdata["sourceSingle"] = "displayname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "displayname";

	
	
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


	$tdataforumusers["displayname"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "displayname";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdataforumusers["password"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

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


	$tdataforumusers["email"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "email";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","id");
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


	$tdataforumusers["id"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "id";
//	usertype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usertype";
	$fdata["GoodName"] = "usertype";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","usertype");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usertype";

		$fdata["sourceSingle"] = "usertype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usertype";

	
	
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


	$tdataforumusers["usertype"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "usertype";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdataforumusers["reset_token"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "forumusers";
	$fdata["Label"] = GetFieldLabel("forumusers","reset_date");
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


	$tdataforumusers["reset_date"] = $fdata;
		$tdataforumusers[".searchableFields"][] = "reset_date";


$tables_data["forumusers"]=&$tdataforumusers;
$field_labels["forumusers"] = &$fieldLabelsforumusers;
$fieldToolTips["forumusers"] = &$fieldToolTipsforumusers;
$placeHolders["forumusers"] = &$placeHoldersforumusers;
$page_titles["forumusers"] = &$pageTitlesforumusers;


changeTextControlsToDate( "forumusers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumusers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumusers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "displayname,  password,  email,  id,  usertype,  reset_token,  reset_date";
$proto0["m_strFrom"] = "FROM forumusers";
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
	"m_strName" => "displayname",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto6["m_sql"] = "displayname";
$proto6["m_srcTableName"] = "forumusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto8["m_sql"] = "password";
$proto8["m_srcTableName"] = "forumusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "forumusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "forumusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usertype",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto14["m_sql"] = "usertype";
$proto14["m_srcTableName"] = "forumusers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto16["m_sql"] = "reset_token";
$proto16["m_srcTableName"] = "forumusers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "forumusers",
	"m_srcTableName" => "forumusers"
));

$proto18["m_sql"] = "reset_date";
$proto18["m_srcTableName"] = "forumusers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "forumusers";
$proto21["m_srcTableName"] = "forumusers";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "displayname";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "usertype";
$proto21["m_columns"][] = "reset_token";
$proto21["m_columns"][] = "reset_date";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "forumusers";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "forumusers";
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
$proto0["m_srcTableName"]="forumusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumusers = createSqlQuery_forumusers();


	
																;

							

$tdataforumusers[".sqlquery"] = $queryData_forumusers;



include_once(getabspath("include/forumusers_events.php"));
$tdataforumusers[".hasEvents"] = true;

?>