<?php
$tdataforumusers_data = array();
$tdataforumusers_data[".searchableFields"] = array();
$tdataforumusers_data[".ShortName"] = "forumusers_data";
$tdataforumusers_data[".OwnerID"] = "";
$tdataforumusers_data[".OriginalTable"] = "forumusers_data";


$tdataforumusers_data[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataforumusers_data[".originalPagesByType"] = $tdataforumusers_data[".pagesByType"];
$tdataforumusers_data[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataforumusers_data[".originalPages"] = $tdataforumusers_data[".pages"];
$tdataforumusers_data[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataforumusers_data[".originalDefaultPages"] = $tdataforumusers_data[".defaultPages"];

//	field labels
$fieldLabelsforumusers_data = array();
$fieldToolTipsforumusers_data = array();
$pageTitlesforumusers_data = array();
$placeHoldersforumusers_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumusers_data["English"] = array();
	$fieldToolTipsforumusers_data["English"] = array();
	$placeHoldersforumusers_data["English"] = array();
	$pageTitlesforumusers_data["English"] = array();
	$fieldLabelsforumusers_data["English"]["id"] = "Id";
	$fieldToolTipsforumusers_data["English"]["id"] = "";
	$placeHoldersforumusers_data["English"]["id"] = "";
	$fieldLabelsforumusers_data["English"]["scheme"] = "Scheme";
	$fieldToolTipsforumusers_data["English"]["scheme"] = "";
	$placeHoldersforumusers_data["English"]["scheme"] = "";
	$fieldLabelsforumusers_data["English"]["last_activity"] = "Last Activity";
	$fieldToolTipsforumusers_data["English"]["last_activity"] = "";
	$placeHoldersforumusers_data["English"]["last_activity"] = "";
	$fieldLabelsforumusers_data["English"]["last_login"] = "Last Login";
	$fieldToolTipsforumusers_data["English"]["last_login"] = "";
	$placeHoldersforumusers_data["English"]["last_login"] = "";
	$fieldLabelsforumusers_data["English"]["joined"] = "Joined";
	$fieldToolTipsforumusers_data["English"]["joined"] = "";
	$placeHoldersforumusers_data["English"]["joined"] = "";
	$fieldLabelsforumusers_data["English"]["usertype"] = "Usertype";
	$fieldToolTipsforumusers_data["English"]["usertype"] = "";
	$placeHoldersforumusers_data["English"]["usertype"] = "";
	$fieldLabelsforumusers_data["English"]["image"] = "Image";
	$fieldToolTipsforumusers_data["English"]["image"] = "";
	$placeHoldersforumusers_data["English"]["image"] = "";
	$fieldLabelsforumusers_data["English"]["userid"] = "Userid";
	$fieldToolTipsforumusers_data["English"]["userid"] = "";
	$placeHoldersforumusers_data["English"]["userid"] = "";
	$fieldLabelsforumusers_data["English"]["username"] = "Username";
	$fieldToolTipsforumusers_data["English"]["username"] = "";
	$placeHoldersforumusers_data["English"]["username"] = "";
	if (count($fieldToolTipsforumusers_data["English"]))
		$tdataforumusers_data[".isUseToolTips"] = true;
}


	$tdataforumusers_data[".NCSearch"] = true;



$tdataforumusers_data[".shortTableName"] = "forumusers_data";
$tdataforumusers_data[".nSecOptions"] = 0;

$tdataforumusers_data[".mainTableOwnerID"] = "";
$tdataforumusers_data[".entityType"] = 0;
$tdataforumusers_data[".connId"] = "project_at_localhost";


$tdataforumusers_data[".strOriginalTableName"] = "forumusers_data";

	



$tdataforumusers_data[".showAddInPopup"] = false;

$tdataforumusers_data[".showEditInPopup"] = false;

$tdataforumusers_data[".showViewInPopup"] = false;

$tdataforumusers_data[".listAjax"] = false;
//	temporary
//$tdataforumusers_data[".listAjax"] = false;

	$tdataforumusers_data[".audit"] = false;

	$tdataforumusers_data[".locking"] = false;


$pages = $tdataforumusers_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumusers_data[".edit"] = true;
	$tdataforumusers_data[".afterEditAction"] = 1;
	$tdataforumusers_data[".closePopupAfterEdit"] = 1;
	$tdataforumusers_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumusers_data[".add"] = true;
$tdataforumusers_data[".afterAddAction"] = 1;
$tdataforumusers_data[".closePopupAfterAdd"] = 1;
$tdataforumusers_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumusers_data[".list"] = true;
}



$tdataforumusers_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumusers_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumusers_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumusers_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumusers_data[".printFriendly"] = true;
}



$tdataforumusers_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumusers_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumusers_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumusers_data[".isUseAjaxSuggest"] = true;



															

$tdataforumusers_data[".ajaxCodeSnippetAdded"] = false;

$tdataforumusers_data[".buttonsAdded"] = false;

$tdataforumusers_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumusers_data[".isUseTimeForSearch"] = false;


$tdataforumusers_data[".badgeColor"] = "CD853F";


$tdataforumusers_data[".allSearchFields"] = array();
$tdataforumusers_data[".filterFields"] = array();
$tdataforumusers_data[".requiredSearchFields"] = array();

$tdataforumusers_data[".googleLikeFields"] = array();
$tdataforumusers_data[".googleLikeFields"][] = "id";
$tdataforumusers_data[".googleLikeFields"][] = "scheme";
$tdataforumusers_data[".googleLikeFields"][] = "last_activity";
$tdataforumusers_data[".googleLikeFields"][] = "last_login";
$tdataforumusers_data[".googleLikeFields"][] = "joined";
$tdataforumusers_data[".googleLikeFields"][] = "usertype";
$tdataforumusers_data[".googleLikeFields"][] = "image";
$tdataforumusers_data[".googleLikeFields"][] = "userid";
$tdataforumusers_data[".googleLikeFields"][] = "username";



$tdataforumusers_data[".tableType"] = "list";

$tdataforumusers_data[".printerPageOrientation"] = 0;
$tdataforumusers_data[".nPrinterPageScale"] = 100;

$tdataforumusers_data[".nPrinterSplitRecords"] = 40;

$tdataforumusers_data[".geocodingEnabled"] = false;










$tdataforumusers_data[".pageSize"] = 20;

$tdataforumusers_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataforumusers_data[".strOrderBy"] = $tstrOrderBy;

$tdataforumusers_data[".orderindexes"] = array();


$tdataforumusers_data[".sqlHead"] = "SELECT id,  scheme,  last_activity,  last_login,  joined,  usertype,  image,  userid,  username";
$tdataforumusers_data[".sqlFrom"] = "FROM forumusers_data";
$tdataforumusers_data[".sqlWhereExpr"] = "";
$tdataforumusers_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumusers_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumusers_data[".arrGroupsPerPage"] = $arrGPP;

$tdataforumusers_data[".highlightSearchResults"] = true;

$tableKeysforumusers_data = array();
$tableKeysforumusers_data[] = "id";
$tdataforumusers_data[".Keys"] = $tableKeysforumusers_data;


$tdataforumusers_data[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","id");
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


	$tdataforumusers_data["id"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "id";
//	scheme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "scheme";
	$fdata["GoodName"] = "scheme";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","scheme");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "scheme";

		$fdata["sourceSingle"] = "scheme";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scheme";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataforumusers_data["scheme"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "scheme";
//	last_activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_activity";
	$fdata["GoodName"] = "last_activity";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","last_activity");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_activity";

		$fdata["sourceSingle"] = "last_activity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_activity";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataforumusers_data["last_activity"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "last_activity";
//	last_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "last_login";
	$fdata["GoodName"] = "last_login";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","last_login");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_login";

		$fdata["sourceSingle"] = "last_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_login";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataforumusers_data["last_login"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "last_login";
//	joined
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "joined";
	$fdata["GoodName"] = "joined";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","joined");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "joined";

		$fdata["sourceSingle"] = "joined";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "joined";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataforumusers_data["joined"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "joined";
//	usertype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usertype";
	$fdata["GoodName"] = "usertype";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","usertype");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "user";
	$edata["LookupValues"][] = "admin";

	
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


	$tdataforumusers_data["usertype"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "usertype";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","image");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "image";

		$fdata["sourceSingle"] = "image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "avatars";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataforumusers_data["image"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "image";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdataforumusers_data["userid"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "userid";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumusers_data","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataforumusers_data["username"] = $fdata;
		$tdataforumusers_data[".searchableFields"][] = "username";


$tables_data["forumusers_data"]=&$tdataforumusers_data;
$field_labels["forumusers_data"] = &$fieldLabelsforumusers_data;
$fieldToolTips["forumusers_data"] = &$fieldToolTipsforumusers_data;
$placeHolders["forumusers_data"] = &$placeHoldersforumusers_data;
$page_titles["forumusers_data"] = &$pageTitlesforumusers_data;


changeTextControlsToDate( "forumusers_data" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumusers_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumusers_data"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumusers_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  scheme,  last_activity,  last_login,  joined,  usertype,  image,  userid,  username";
$proto0["m_strFrom"] = "FROM forumusers_data";
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
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "forumusers_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "scheme",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto8["m_sql"] = "scheme";
$proto8["m_srcTableName"] = "forumusers_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_activity",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto10["m_sql"] = "last_activity";
$proto10["m_srcTableName"] = "forumusers_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "last_login",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto12["m_sql"] = "last_login";
$proto12["m_srcTableName"] = "forumusers_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "joined",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto14["m_sql"] = "joined";
$proto14["m_srcTableName"] = "forumusers_data";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usertype",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto16["m_sql"] = "usertype";
$proto16["m_srcTableName"] = "forumusers_data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto18["m_sql"] = "image";
$proto18["m_srcTableName"] = "forumusers_data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto20["m_sql"] = "userid";
$proto20["m_srcTableName"] = "forumusers_data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "forumusers_data"
));

$proto22["m_sql"] = "username";
$proto22["m_srcTableName"] = "forumusers_data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "forumusers_data";
$proto25["m_srcTableName"] = "forumusers_data";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "scheme";
$proto25["m_columns"][] = "last_activity";
$proto25["m_columns"][] = "last_login";
$proto25["m_columns"][] = "joined";
$proto25["m_columns"][] = "usertype";
$proto25["m_columns"][] = "image";
$proto25["m_columns"][] = "userid";
$proto25["m_columns"][] = "username";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "forumusers_data";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "forumusers_data";
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
$proto0["m_srcTableName"]="forumusers_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumusers_data = createSqlQuery_forumusers_data();


	
																;

									

$tdataforumusers_data[".sqlquery"] = $queryData_forumusers_data;



$tdataforumusers_data[".hasEvents"] = false;

?>