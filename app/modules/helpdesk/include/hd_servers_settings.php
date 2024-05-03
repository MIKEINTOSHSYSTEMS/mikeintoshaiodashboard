<?php
$tdatahd_servers = array();
$tdatahd_servers[".searchableFields"] = array();
$tdatahd_servers[".ShortName"] = "hd_servers";
$tdatahd_servers[".OwnerID"] = "";
$tdatahd_servers[".OriginalTable"] = "hd_servers";


$tdatahd_servers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahd_servers[".originalPagesByType"] = $tdatahd_servers[".pagesByType"];
$tdatahd_servers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahd_servers[".originalPages"] = $tdatahd_servers[".pages"];
$tdatahd_servers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahd_servers[".originalDefaultPages"] = $tdatahd_servers[".defaultPages"];

//	field labels
$fieldLabelshd_servers = array();
$fieldToolTipshd_servers = array();
$pageTitleshd_servers = array();
$placeHoldershd_servers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_servers["English"] = array();
	$fieldToolTipshd_servers["English"] = array();
	$placeHoldershd_servers["English"] = array();
	$pageTitleshd_servers["English"] = array();
	$fieldLabelshd_servers["English"]["id"] = "Id";
	$fieldToolTipshd_servers["English"]["id"] = "";
	$placeHoldershd_servers["English"]["id"] = "";
	$fieldLabelshd_servers["English"]["server"] = "Server";
	$fieldToolTipshd_servers["English"]["server"] = "";
	$placeHoldershd_servers["English"]["server"] = "";
	$fieldLabelshd_servers["English"]["user"] = "User";
	$fieldToolTipshd_servers["English"]["user"] = "";
	$placeHoldershd_servers["English"]["user"] = "";
	$fieldLabelshd_servers["English"]["password"] = "Password";
	$fieldToolTipshd_servers["English"]["password"] = "";
	$placeHoldershd_servers["English"]["password"] = "";
	$fieldLabelshd_servers["English"]["interval"] = "Interval (in minutes)";
	$fieldToolTipshd_servers["English"]["interval"] = "";
	$placeHoldershd_servers["English"]["interval"] = "";
	$fieldLabelshd_servers["English"]["leave_copy"] = "Leave Copy";
	$fieldToolTipshd_servers["English"]["leave_copy"] = "";
	$placeHoldershd_servers["English"]["leave_copy"] = "";
	$fieldLabelshd_servers["English"]["lastconnect"] = "Lastconnect";
	$fieldToolTipshd_servers["English"]["lastconnect"] = "";
	$placeHoldershd_servers["English"]["lastconnect"] = "";
	$fieldLabelshd_servers["English"]["port"] = "Port";
	$fieldToolTipshd_servers["English"]["port"] = "";
	$placeHoldershd_servers["English"]["port"] = "";
	if (count($fieldToolTipshd_servers["English"]))
		$tdatahd_servers[".isUseToolTips"] = true;
}


	$tdatahd_servers[".NCSearch"] = true;



$tdatahd_servers[".shortTableName"] = "hd_servers";
$tdatahd_servers[".nSecOptions"] = 0;

$tdatahd_servers[".mainTableOwnerID"] = "";
$tdatahd_servers[".entityType"] = 0;
$tdatahd_servers[".connId"] = "project_at_localhost";


$tdatahd_servers[".strOriginalTableName"] = "hd_servers";

	



$tdatahd_servers[".showAddInPopup"] = false;

$tdatahd_servers[".showEditInPopup"] = false;

$tdatahd_servers[".showViewInPopup"] = false;

$tdatahd_servers[".listAjax"] = false;
//	temporary
//$tdatahd_servers[".listAjax"] = false;

	$tdatahd_servers[".audit"] = false;

	$tdatahd_servers[".locking"] = false;


$pages = $tdatahd_servers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_servers[".edit"] = true;
	$tdatahd_servers[".afterEditAction"] = 1;
	$tdatahd_servers[".closePopupAfterEdit"] = 1;
	$tdatahd_servers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_servers[".add"] = true;
$tdatahd_servers[".afterAddAction"] = 1;
$tdatahd_servers[".closePopupAfterAdd"] = 1;
$tdatahd_servers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_servers[".list"] = true;
}



$tdatahd_servers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_servers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_servers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_servers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_servers[".printFriendly"] = true;
}



$tdatahd_servers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_servers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_servers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_servers[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_servers[".ajaxCodeSnippetAdded"] = false;

$tdatahd_servers[".buttonsAdded"] = false;

$tdatahd_servers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahd_servers[".isUseTimeForSearch"] = false;


$tdatahd_servers[".badgeColor"] = "E8926F";


$tdatahd_servers[".allSearchFields"] = array();
$tdatahd_servers[".filterFields"] = array();
$tdatahd_servers[".requiredSearchFields"] = array();

$tdatahd_servers[".googleLikeFields"] = array();
$tdatahd_servers[".googleLikeFields"][] = "id";
$tdatahd_servers[".googleLikeFields"][] = "server";
$tdatahd_servers[".googleLikeFields"][] = "user";
$tdatahd_servers[".googleLikeFields"][] = "password";
$tdatahd_servers[".googleLikeFields"][] = "interval";
$tdatahd_servers[".googleLikeFields"][] = "leave_copy";
$tdatahd_servers[".googleLikeFields"][] = "lastconnect";
$tdatahd_servers[".googleLikeFields"][] = "port";



$tdatahd_servers[".tableType"] = "list";

$tdatahd_servers[".printerPageOrientation"] = 0;
$tdatahd_servers[".nPrinterPageScale"] = 100;

$tdatahd_servers[".nPrinterSplitRecords"] = 40;

$tdatahd_servers[".geocodingEnabled"] = false;










$tdatahd_servers[".pageSize"] = 20;

$tdatahd_servers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_servers[".strOrderBy"] = $tstrOrderBy;

$tdatahd_servers[".orderindexes"] = array();


$tdatahd_servers[".sqlHead"] = "SELECT id,  server,  `user`,  password,  `interval`,  leave_copy,  lastconnect,  port";
$tdatahd_servers[".sqlFrom"] = "FROM hd_servers";
$tdatahd_servers[".sqlWhereExpr"] = "";
$tdatahd_servers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_servers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_servers[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_servers[".highlightSearchResults"] = true;

$tableKeyshd_servers = array();
$tableKeyshd_servers[] = "id";
$tdatahd_servers[".Keys"] = $tableKeyshd_servers;


$tdatahd_servers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","id");
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


	$tdatahd_servers["id"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "id";
//	server
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "server";
	$fdata["GoodName"] = "server";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","server");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "server";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "server";

	
	
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


	$tdatahd_servers["server"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "server";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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


	$tdatahd_servers["user"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "user";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","password");
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


	$tdatahd_servers["password"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "password";
//	interval
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "interval";
	$fdata["GoodName"] = "interval";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","interval");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "interval";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`interval`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatahd_servers["interval"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "interval";
//	leave_copy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "leave_copy";
	$fdata["GoodName"] = "leave_copy";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","leave_copy");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "leave_copy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leave_copy";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatahd_servers["leave_copy"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "leave_copy";
//	lastconnect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lastconnect";
	$fdata["GoodName"] = "lastconnect";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","lastconnect");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "lastconnect";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastconnect";

	
	
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


	$tdatahd_servers["lastconnect"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "lastconnect";
//	port
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "port";
	$fdata["GoodName"] = "port";
	$fdata["ownerTable"] = "hd_servers";
	$fdata["Label"] = GetFieldLabel("hd_servers","port");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "port";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "port";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatahd_servers["port"] = $fdata;
		$tdatahd_servers[".searchableFields"][] = "port";


$tables_data["hd_servers"]=&$tdatahd_servers;
$field_labels["hd_servers"] = &$fieldLabelshd_servers;
$fieldToolTips["hd_servers"] = &$fieldToolTipshd_servers;
$placeHolders["hd_servers"] = &$placeHoldershd_servers;
$page_titles["hd_servers"] = &$pageTitleshd_servers;


changeTextControlsToDate( "hd_servers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_servers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_servers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_servers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  server,  `user`,  password,  `interval`,  leave_copy,  lastconnect,  port";
$proto0["m_strFrom"] = "FROM hd_servers";
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
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_servers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "server",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto8["m_sql"] = "server";
$proto8["m_srcTableName"] = "hd_servers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto10["m_sql"] = "`user`";
$proto10["m_srcTableName"] = "hd_servers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "hd_servers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "interval",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto14["m_sql"] = "`interval`";
$proto14["m_srcTableName"] = "hd_servers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "leave_copy",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto16["m_sql"] = "leave_copy";
$proto16["m_srcTableName"] = "hd_servers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "lastconnect",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto18["m_sql"] = "lastconnect";
$proto18["m_srcTableName"] = "hd_servers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "port",
	"m_strTable" => "hd_servers",
	"m_srcTableName" => "hd_servers"
));

$proto20["m_sql"] = "port";
$proto20["m_srcTableName"] = "hd_servers";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "hd_servers";
$proto23["m_srcTableName"] = "hd_servers";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "server";
$proto23["m_columns"][] = "user";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "interval";
$proto23["m_columns"][] = "leave_copy";
$proto23["m_columns"][] = "lastconnect";
$proto23["m_columns"][] = "port";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "hd_servers";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "hd_servers";
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
$proto0["m_srcTableName"]="hd_servers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_servers = createSqlQuery_hd_servers();


	
		;

								

$tdatahd_servers[".sqlquery"] = $queryData_hd_servers;



$tdatahd_servers[".hasEvents"] = false;

?>