<?php
$tdatamtmeetings = array();
$tdatamtmeetings[".searchableFields"] = array();
$tdatamtmeetings[".ShortName"] = "mtmeetings";
$tdatamtmeetings[".OwnerID"] = "";
$tdatamtmeetings[".OriginalTable"] = "mtmeetings";


$tdatamtmeetings[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamtmeetings[".originalPagesByType"] = $tdatamtmeetings[".pagesByType"];
$tdatamtmeetings[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamtmeetings[".originalPages"] = $tdatamtmeetings[".pages"];
$tdatamtmeetings[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamtmeetings[".originalDefaultPages"] = $tdatamtmeetings[".defaultPages"];

//	field labels
$fieldLabelsmtmeetings = array();
$fieldToolTipsmtmeetings = array();
$pageTitlesmtmeetings = array();
$placeHoldersmtmeetings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmtmeetings["English"] = array();
	$fieldToolTipsmtmeetings["English"] = array();
	$placeHoldersmtmeetings["English"] = array();
	$pageTitlesmtmeetings["English"] = array();
	$fieldLabelsmtmeetings["English"]["id"] = "Id";
	$fieldToolTipsmtmeetings["English"]["id"] = "";
	$placeHoldersmtmeetings["English"]["id"] = "";
	$fieldLabelsmtmeetings["English"]["name"] = "Name";
	$fieldToolTipsmtmeetings["English"]["name"] = "";
	$placeHoldersmtmeetings["English"]["name"] = "";
	$fieldLabelsmtmeetings["English"]["desc"] = "Description";
	$fieldToolTipsmtmeetings["English"]["desc"] = "";
	$placeHoldersmtmeetings["English"]["desc"] = "";
	$fieldLabelsmtmeetings["English"]["users"] = "Participants";
	$fieldToolTipsmtmeetings["English"]["users"] = "";
	$placeHoldersmtmeetings["English"]["users"] = "";
	$fieldLabelsmtmeetings["English"]["schedule"] = "Scheduled";
	$fieldToolTipsmtmeetings["English"]["schedule"] = "";
	$placeHoldersmtmeetings["English"]["schedule"] = "";
	$fieldLabelsmtmeetings["English"]["email"] = "Email body";
	$fieldToolTipsmtmeetings["English"]["email"] = "";
	$placeHoldersmtmeetings["English"]["email"] = "";
	$fieldLabelsmtmeetings["English"]["sms"] = "Sms body";
	$fieldToolTipsmtmeetings["English"]["sms"] = "";
	$placeHoldersmtmeetings["English"]["sms"] = "";
	$fieldLabelsmtmeetings["English"]["subj"] = "Email subject";
	$fieldToolTipsmtmeetings["English"]["subj"] = "";
	$placeHoldersmtmeetings["English"]["subj"] = "";
	$fieldLabelsmtmeetings["English"]["createlink"] = "Create the meeting";
	$fieldToolTipsmtmeetings["English"]["createlink"] = "";
	$placeHoldersmtmeetings["English"]["createlink"] = "";
	$fieldLabelsmtmeetings["English"]["joinlink"] = "Join to the metting";
	$fieldToolTipsmtmeetings["English"]["joinlink"] = "";
	$placeHoldersmtmeetings["English"]["joinlink"] = "";
	$fieldLabelsmtmeetings["English"]["ownerid"] = "Ownerid";
	$fieldToolTipsmtmeetings["English"]["ownerid"] = "";
	$placeHoldersmtmeetings["English"]["ownerid"] = "";
	$fieldLabelsmtmeetings["English"]["clink"] = "Create meeting link";
	$fieldToolTipsmtmeetings["English"]["clink"] = "";
	$placeHoldersmtmeetings["English"]["clink"] = "";
	$fieldLabelsmtmeetings["English"]["jlink"] = "Join meeting link";
	$fieldToolTipsmtmeetings["English"]["jlink"] = "";
	$placeHoldersmtmeetings["English"]["jlink"] = "";
	$fieldLabelsmtmeetings["English"]["owner"] = "Owner";
	$fieldToolTipsmtmeetings["English"]["owner"] = "";
	$placeHoldersmtmeetings["English"]["owner"] = "";
	$fieldLabelsmtmeetings["English"]["password"] = "Password (if needed, maximum 10 characters)";
	$fieldToolTipsmtmeetings["English"]["password"] = "";
	$placeHoldersmtmeetings["English"]["password"] = "";
	$fieldLabelsmtmeetings["English"]["notiday"] = "Notiday";
	$fieldToolTipsmtmeetings["English"]["notiday"] = "";
	$placeHoldersmtmeetings["English"]["notiday"] = "";
	$fieldLabelsmtmeetings["English"]["notitime"] = "Notitime";
	$fieldToolTipsmtmeetings["English"]["notitime"] = "";
	$placeHoldersmtmeetings["English"]["notitime"] = "";
	$fieldLabelsmtmeetings["English"]["hiddenclink"] = "Hiddenclink";
	$fieldToolTipsmtmeetings["English"]["hiddenclink"] = "";
	$placeHoldersmtmeetings["English"]["hiddenclink"] = "";
	$pageTitlesmtmeetings["English"]["add"] = "Create meeting";
	$pageTitlesmtmeetings["English"]["edit"] = "Edit meeting [{%id}]";
	$pageTitlesmtmeetings["English"]["view"] = "View meeting {%id}";
	if (count($fieldToolTipsmtmeetings["English"]))
		$tdatamtmeetings[".isUseToolTips"] = true;
}


	$tdatamtmeetings[".NCSearch"] = true;



$tdatamtmeetings[".shortTableName"] = "mtmeetings";
$tdatamtmeetings[".nSecOptions"] = 0;

$tdatamtmeetings[".mainTableOwnerID"] = "";
$tdatamtmeetings[".entityType"] = 0;
$tdatamtmeetings[".connId"] = "project_at_localhost";


$tdatamtmeetings[".strOriginalTableName"] = "mtmeetings";

	



$tdatamtmeetings[".showAddInPopup"] = false;

$tdatamtmeetings[".showEditInPopup"] = false;

$tdatamtmeetings[".showViewInPopup"] = false;

$tdatamtmeetings[".listAjax"] = false;
//	temporary
//$tdatamtmeetings[".listAjax"] = false;

	$tdatamtmeetings[".audit"] = false;

	$tdatamtmeetings[".locking"] = false;


$pages = $tdatamtmeetings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamtmeetings[".edit"] = true;
	$tdatamtmeetings[".afterEditAction"] = 1;
	$tdatamtmeetings[".closePopupAfterEdit"] = 1;
	$tdatamtmeetings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamtmeetings[".add"] = true;
$tdatamtmeetings[".afterAddAction"] = 1;
$tdatamtmeetings[".closePopupAfterAdd"] = 1;
$tdatamtmeetings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamtmeetings[".list"] = true;
}



$tdatamtmeetings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamtmeetings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamtmeetings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamtmeetings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamtmeetings[".printFriendly"] = true;
}



$tdatamtmeetings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamtmeetings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamtmeetings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamtmeetings[".isUseAjaxSuggest"] = true;



																								

$tdatamtmeetings[".ajaxCodeSnippetAdded"] = false;

$tdatamtmeetings[".buttonsAdded"] = false;

$tdatamtmeetings[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamtmeetings[".isUseTimeForSearch"] = true;


$tdatamtmeetings[".badgeColor"] = "6B8E23";


$tdatamtmeetings[".allSearchFields"] = array();
$tdatamtmeetings[".filterFields"] = array();
$tdatamtmeetings[".requiredSearchFields"] = array();

$tdatamtmeetings[".googleLikeFields"] = array();
$tdatamtmeetings[".googleLikeFields"][] = "id";
$tdatamtmeetings[".googleLikeFields"][] = "name";
$tdatamtmeetings[".googleLikeFields"][] = "desc";
$tdatamtmeetings[".googleLikeFields"][] = "users";
$tdatamtmeetings[".googleLikeFields"][] = "schedule";
$tdatamtmeetings[".googleLikeFields"][] = "email";
$tdatamtmeetings[".googleLikeFields"][] = "sms";
$tdatamtmeetings[".googleLikeFields"][] = "subj";
$tdatamtmeetings[".googleLikeFields"][] = "createlink";
$tdatamtmeetings[".googleLikeFields"][] = "joinlink";
$tdatamtmeetings[".googleLikeFields"][] = "clink";
$tdatamtmeetings[".googleLikeFields"][] = "hiddenclink";
$tdatamtmeetings[".googleLikeFields"][] = "jlink";
$tdatamtmeetings[".googleLikeFields"][] = "ownerid";
$tdatamtmeetings[".googleLikeFields"][] = "owner";
$tdatamtmeetings[".googleLikeFields"][] = "password";
$tdatamtmeetings[".googleLikeFields"][] = "notiday";
$tdatamtmeetings[".googleLikeFields"][] = "notitime";



$tdatamtmeetings[".tableType"] = "list";

$tdatamtmeetings[".printerPageOrientation"] = 0;
$tdatamtmeetings[".nPrinterPageScale"] = 100;

$tdatamtmeetings[".nPrinterSplitRecords"] = 40;

$tdatamtmeetings[".geocodingEnabled"] = false;










$tdatamtmeetings[".pageSize"] = 20;

$tdatamtmeetings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamtmeetings[".strOrderBy"] = $tstrOrderBy;

$tdatamtmeetings[".orderindexes"] = array();


$tdatamtmeetings[".sqlHead"] = "SELECT id,  name,  `desc`,  users,  schedule,  email,  sms,  subj,  createlink,  joinlink,  createlink AS clink,  createlink AS hiddenclink,  joinlink AS jlink,  ownerid,  ownerid AS owner,  password,  notiday,  notitime";
$tdatamtmeetings[".sqlFrom"] = "FROM mtmeetings";
$tdatamtmeetings[".sqlWhereExpr"] = "";
$tdatamtmeetings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamtmeetings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamtmeetings[".arrGroupsPerPage"] = $arrGPP;

$tdatamtmeetings[".highlightSearchResults"] = true;

$tableKeysmtmeetings = array();
$tableKeysmtmeetings[] = "id";
$tdatamtmeetings[".Keys"] = $tableKeysmtmeetings;


$tdatamtmeetings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","id");
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


	$tdatamtmeetings["id"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamtmeetings["name"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "name";
//	desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "desc";
	$fdata["GoodName"] = "desc";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`desc`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatamtmeetings["desc"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "desc";
//	users
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "users";
	$fdata["GoodName"] = "users";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","users");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "users";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users";

	
	
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
	$edata["LookupTable"] = "mtmeetings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatamtmeetings["users"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "users";
//	schedule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "schedule";
	$fdata["GoodName"] = "schedule";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","schedule");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "schedule";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "schedule";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

		$edata["ShowTime"] = true;

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
	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$fdata["isSeparate"] = true;




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


	$tdatamtmeetings["schedule"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "schedule";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","email");
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatamtmeetings["email"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "email";
//	sms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sms";
	$fdata["GoodName"] = "sms";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","sms");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sms";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sms";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatamtmeetings["sms"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "sms";
//	subj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "subj";
	$fdata["GoodName"] = "subj";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","subj");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subj";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatamtmeetings["subj"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "subj";
//	createlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "createlink";
	$fdata["GoodName"] = "createlink";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","createlink");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "createlink";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createlink";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

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


	$tdatamtmeetings["createlink"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "createlink";
//	joinlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "joinlink";
	$fdata["GoodName"] = "joinlink";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","joinlink");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "joinlink";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "joinlink";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

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


	$tdatamtmeetings["joinlink"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "joinlink";
//	clink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "clink";
	$fdata["GoodName"] = "clink";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","clink");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "createlink";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createlink";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 40;

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


	$tdatamtmeetings["clink"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "clink";
//	hiddenclink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hiddenclink";
	$fdata["GoodName"] = "hiddenclink";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","hiddenclink");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "createlink";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createlink";

	
	
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


	$tdatamtmeetings["hiddenclink"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "hiddenclink";
//	jlink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "jlink";
	$fdata["GoodName"] = "jlink";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","jlink");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "joinlink";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "joinlink";

	
	
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


	$tdatamtmeetings["jlink"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "jlink";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","ownerid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ownerid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ownerid";

	
	
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


	$tdatamtmeetings["ownerid"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "ownerid";
//	owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "owner";
	$fdata["GoodName"] = "owner";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","owner");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mtmeetings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatamtmeetings["owner"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "owner";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","password");
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


	$tdatamtmeetings["password"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "password";
//	notiday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "notiday";
	$fdata["GoodName"] = "notiday";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","notiday");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "notiday";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notiday";

	
	
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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";

	
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


	$tdatamtmeetings["notiday"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "notiday";
//	notitime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "notitime";
	$fdata["GoodName"] = "notitime";
	$fdata["ownerTable"] = "mtmeetings";
	$fdata["Label"] = GetFieldLabel("mtmeetings","notitime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "notitime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notitime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatamtmeetings["notitime"] = $fdata;
		$tdatamtmeetings[".searchableFields"][] = "notitime";


$tables_data["mtmeetings"]=&$tdatamtmeetings;
$field_labels["mtmeetings"] = &$fieldLabelsmtmeetings;
$fieldToolTips["mtmeetings"] = &$fieldToolTipsmtmeetings;
$placeHolders["mtmeetings"] = &$placeHoldersmtmeetings;
$page_titles["mtmeetings"] = &$pageTitlesmtmeetings;


changeTextControlsToDate( "mtmeetings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mtmeetings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mtmeetings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mtmeetings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  `desc`,  users,  schedule,  email,  sms,  subj,  createlink,  joinlink,  createlink AS clink,  createlink AS hiddenclink,  joinlink AS jlink,  ownerid,  ownerid AS owner,  password,  notiday,  notitime";
$proto0["m_strFrom"] = "FROM mtmeetings";
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
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mtmeetings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mtmeetings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "desc",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto10["m_sql"] = "`desc`";
$proto10["m_srcTableName"] = "mtmeetings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "users",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto12["m_sql"] = "users";
$proto12["m_srcTableName"] = "mtmeetings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "schedule",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto14["m_sql"] = "schedule";
$proto14["m_srcTableName"] = "mtmeetings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "mtmeetings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sms",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto18["m_sql"] = "sms";
$proto18["m_srcTableName"] = "mtmeetings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "subj",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto20["m_sql"] = "subj";
$proto20["m_srcTableName"] = "mtmeetings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "createlink",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto22["m_sql"] = "createlink";
$proto22["m_srcTableName"] = "mtmeetings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "joinlink",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto24["m_sql"] = "joinlink";
$proto24["m_srcTableName"] = "mtmeetings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "createlink",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto26["m_sql"] = "createlink";
$proto26["m_srcTableName"] = "mtmeetings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "clink";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "createlink",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto28["m_sql"] = "createlink";
$proto28["m_srcTableName"] = "mtmeetings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "hiddenclink";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "joinlink",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto30["m_sql"] = "joinlink";
$proto30["m_srcTableName"] = "mtmeetings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "jlink";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto32["m_sql"] = "ownerid";
$proto32["m_srcTableName"] = "mtmeetings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto34["m_sql"] = "ownerid";
$proto34["m_srcTableName"] = "mtmeetings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "owner";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto36["m_sql"] = "password";
$proto36["m_srcTableName"] = "mtmeetings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "notiday",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto38["m_sql"] = "notiday";
$proto38["m_srcTableName"] = "mtmeetings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "notitime",
	"m_strTable" => "mtmeetings",
	"m_srcTableName" => "mtmeetings"
));

$proto40["m_sql"] = "notitime";
$proto40["m_srcTableName"] = "mtmeetings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "mtmeetings";
$proto43["m_srcTableName"] = "mtmeetings";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "name";
$proto43["m_columns"][] = "desc";
$proto43["m_columns"][] = "users";
$proto43["m_columns"][] = "schedule";
$proto43["m_columns"][] = "email";
$proto43["m_columns"][] = "sms";
$proto43["m_columns"][] = "subj";
$proto43["m_columns"][] = "createlink";
$proto43["m_columns"][] = "joinlink";
$proto43["m_columns"][] = "ownerid";
$proto43["m_columns"][] = "password";
$proto43["m_columns"][] = "notiday";
$proto43["m_columns"][] = "notitime";
$proto43["m_columns"][] = "notisend";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "mtmeetings";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "mtmeetings";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mtmeetings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mtmeetings = createSqlQuery_mtmeetings();


	
		;

																		

$tdatamtmeetings[".sqlquery"] = $queryData_mtmeetings;



include_once(getabspath("include/mtmeetings_events.php"));
$tdatamtmeetings[".hasEvents"] = true;

?>