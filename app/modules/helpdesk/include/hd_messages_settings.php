<?php
$tdatahd_messages = array();
$tdatahd_messages[".searchableFields"] = array();
$tdatahd_messages[".ShortName"] = "hd_messages";
$tdatahd_messages[".OwnerID"] = "";
$tdatahd_messages[".OriginalTable"] = "hd_messages";


$tdatahd_messages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\",\"add_mess\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"list_customer\"],\"search\":[\"search\",\"support_search\"],\"view\":[\"view\"]}" );
$tdatahd_messages[".originalPagesByType"] = $tdatahd_messages[".pagesByType"];
$tdatahd_messages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\",\"add_mess\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"list_customer\"],\"search\":[\"search\",\"support_search\"],\"view\":[\"view\"]}" ) );
$tdatahd_messages[".originalPages"] = $tdatahd_messages[".pages"];
$tdatahd_messages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahd_messages[".originalDefaultPages"] = $tdatahd_messages[".defaultPages"];

//	field labels
$fieldLabelshd_messages = array();
$fieldToolTipshd_messages = array();
$pageTitleshd_messages = array();
$placeHoldershd_messages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_messages["English"] = array();
	$fieldToolTipshd_messages["English"] = array();
	$placeHoldershd_messages["English"] = array();
	$pageTitleshd_messages["English"] = array();
	$fieldLabelshd_messages["English"]["id"] = "ID:";
	$fieldToolTipshd_messages["English"]["id"] = "";
	$placeHoldershd_messages["English"]["id"] = "";
	$fieldLabelshd_messages["English"]["created"] = "Created:";
	$fieldToolTipshd_messages["English"]["created"] = "";
	$placeHoldershd_messages["English"]["created"] = "";
	$fieldLabelshd_messages["English"]["body"] = "Body";
	$fieldToolTipshd_messages["English"]["body"] = "";
	$placeHoldershd_messages["English"]["body"] = "";
	$fieldLabelshd_messages["English"]["to_email"] = "To:";
	$fieldToolTipshd_messages["English"]["to_email"] = "";
	$placeHoldershd_messages["English"]["to_email"] = "";
	$fieldLabelshd_messages["English"]["subject"] = "Subject:";
	$fieldToolTipshd_messages["English"]["subject"] = "";
	$placeHoldershd_messages["English"]["subject"] = "";
	$fieldLabelshd_messages["English"]["message_id"] = "Message Id";
	$fieldToolTipshd_messages["English"]["message_id"] = "";
	$placeHoldershd_messages["English"]["message_id"] = "";
	$fieldLabelshd_messages["English"]["maildate"] = "Maildate";
	$fieldToolTipshd_messages["English"]["maildate"] = "";
	$placeHoldershd_messages["English"]["maildate"] = "";
	$fieldLabelshd_messages["English"]["from_email"] = "From:";
	$fieldToolTipshd_messages["English"]["from_email"] = "";
	$placeHoldershd_messages["English"]["from_email"] = "";
	$fieldLabelshd_messages["English"]["to_name"] = "To Name";
	$fieldToolTipshd_messages["English"]["to_name"] = "";
	$placeHoldershd_messages["English"]["to_name"] = "";
	$fieldLabelshd_messages["English"]["from_name"] = "From Name";
	$fieldToolTipshd_messages["English"]["from_name"] = "";
	$placeHoldershd_messages["English"]["from_name"] = "";
	$fieldLabelshd_messages["English"]["attachment"] = "Attachments";
	$fieldToolTipshd_messages["English"]["attachment"] = "";
	$placeHoldershd_messages["English"]["attachment"] = "";
	$fieldLabelshd_messages["English"]["cc"] = "Cc";
	$fieldToolTipshd_messages["English"]["cc"] = "";
	$placeHoldershd_messages["English"]["cc"] = "";
	$fieldLabelshd_messages["English"]["bcc"] = "Bcc";
	$fieldToolTipshd_messages["English"]["bcc"] = "";
	$placeHoldershd_messages["English"]["bcc"] = "";
	$fieldLabelshd_messages["English"]["server_id"] = "Server Id";
	$fieldToolTipshd_messages["English"]["server_id"] = "";
	$placeHoldershd_messages["English"]["server_id"] = "";
	$fieldLabelshd_messages["English"]["ticketid"] = "Ticketid";
	$fieldToolTipshd_messages["English"]["ticketid"] = "";
	$placeHoldershd_messages["English"]["ticketid"] = "";
	$fieldLabelshd_messages["English"]["directionid"] = "Direction:";
	$fieldToolTipshd_messages["English"]["directionid"] = "";
	$placeHoldershd_messages["English"]["directionid"] = "";
	$fieldLabelshd_messages["English"]["statusid"] = "Status";
	$fieldToolTipshd_messages["English"]["statusid"] = "";
	$placeHoldershd_messages["English"]["statusid"] = "";
	$fieldLabelshd_messages["English"]["categoryid"] = "Category:";
	$fieldToolTipshd_messages["English"]["categoryid"] = "";
	$placeHoldershd_messages["English"]["categoryid"] = "";
	$fieldLabelshd_messages["English"]["reply"] = "Reply";
	$fieldToolTipshd_messages["English"]["reply"] = "";
	$placeHoldershd_messages["English"]["reply"] = "";
	$fieldLabelshd_messages["English"]["deleterec"] = "Deleterec";
	$fieldToolTipshd_messages["English"]["deleterec"] = "";
	$placeHoldershd_messages["English"]["deleterec"] = "";
	$fieldLabelshd_messages["English"]["created_ago"] = "Created Ago";
	$fieldToolTipshd_messages["English"]["created_ago"] = "";
	$placeHoldershd_messages["English"]["created_ago"] = "";
	$pageTitleshd_messages["English"]["add"] = "New Ticket";
	if (count($fieldToolTipshd_messages["English"]))
		$tdatahd_messages[".isUseToolTips"] = true;
}


	$tdatahd_messages[".NCSearch"] = true;



$tdatahd_messages[".shortTableName"] = "hd_messages";
$tdatahd_messages[".nSecOptions"] = 0;

$tdatahd_messages[".mainTableOwnerID"] = "";
$tdatahd_messages[".entityType"] = 0;
$tdatahd_messages[".connId"] = "project_at_localhost";


$tdatahd_messages[".strOriginalTableName"] = "hd_messages";

	



$tdatahd_messages[".showAddInPopup"] = false;

$tdatahd_messages[".showEditInPopup"] = false;

$tdatahd_messages[".showViewInPopup"] = false;

$tdatahd_messages[".listAjax"] = false;
//	temporary
//$tdatahd_messages[".listAjax"] = false;

	$tdatahd_messages[".audit"] = false;

	$tdatahd_messages[".locking"] = false;


$pages = $tdatahd_messages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_messages[".edit"] = true;
	$tdatahd_messages[".afterEditAction"] = 1;
	$tdatahd_messages[".closePopupAfterEdit"] = 1;
	$tdatahd_messages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_messages[".add"] = true;
$tdatahd_messages[".afterAddAction"] = 1;
$tdatahd_messages[".closePopupAfterAdd"] = 1;
$tdatahd_messages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_messages[".list"] = true;
}



$tdatahd_messages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_messages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_messages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_messages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_messages[".printFriendly"] = true;
}



$tdatahd_messages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_messages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_messages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_messages[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatahd_messages[".ajaxCodeSnippetAdded"] = false;

$tdatahd_messages[".buttonsAdded"] = false;

$tdatahd_messages[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_messages[".isUseTimeForSearch"] = false;


$tdatahd_messages[".badgeColor"] = "cd853f";


$tdatahd_messages[".allSearchFields"] = array();
$tdatahd_messages[".filterFields"] = array();
$tdatahd_messages[".requiredSearchFields"] = array();

$tdatahd_messages[".googleLikeFields"] = array();
$tdatahd_messages[".googleLikeFields"][] = "id";
$tdatahd_messages[".googleLikeFields"][] = "created";
$tdatahd_messages[".googleLikeFields"][] = "created_ago";
$tdatahd_messages[".googleLikeFields"][] = "body";
$tdatahd_messages[".googleLikeFields"][] = "to_email";
$tdatahd_messages[".googleLikeFields"][] = "subject";
$tdatahd_messages[".googleLikeFields"][] = "message_id";
$tdatahd_messages[".googleLikeFields"][] = "maildate";
$tdatahd_messages[".googleLikeFields"][] = "from_email";
$tdatahd_messages[".googleLikeFields"][] = "to_name";
$tdatahd_messages[".googleLikeFields"][] = "from_name";
$tdatahd_messages[".googleLikeFields"][] = "attachment";
$tdatahd_messages[".googleLikeFields"][] = "cc";
$tdatahd_messages[".googleLikeFields"][] = "bcc";
$tdatahd_messages[".googleLikeFields"][] = "server_id";
$tdatahd_messages[".googleLikeFields"][] = "ticketid";
$tdatahd_messages[".googleLikeFields"][] = "directionid";
$tdatahd_messages[".googleLikeFields"][] = "statusid";
$tdatahd_messages[".googleLikeFields"][] = "categoryid";
$tdatahd_messages[".googleLikeFields"][] = "reply";
$tdatahd_messages[".googleLikeFields"][] = "deleterec";



$tdatahd_messages[".tableType"] = "list";

$tdatahd_messages[".printerPageOrientation"] = 0;
$tdatahd_messages[".nPrinterPageScale"] = 100;

$tdatahd_messages[".nPrinterSplitRecords"] = 40;

$tdatahd_messages[".geocodingEnabled"] = false;










$tdatahd_messages[".pageSize"] = 1000;

$tdatahd_messages[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY created DESC";
$tdatahd_messages[".strOrderBy"] = $tstrOrderBy;

$tdatahd_messages[".orderindexes"] = array();
	$tdatahd_messages[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "created");



$tdatahd_messages[".sqlHead"] = "SELECT id,  created,  created AS created_ago,  `body`,  to_email,  subject,  message_id,  maildate,  from_email,  to_name,  from_name,  attachment,  cc,  bcc,  server_id,  ticketid,  directionid,  statusid,  categoryid,  id AS reply,  id AS deleterec";
$tdatahd_messages[".sqlFrom"] = "FROM hd_messages";
$tdatahd_messages[".sqlWhereExpr"] = "";
$tdatahd_messages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_messages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_messages[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_messages[".highlightSearchResults"] = true;

$tableKeyshd_messages = array();
$tableKeyshd_messages[] = "id";
$tdatahd_messages[".Keys"] = $tableKeyshd_messages;


$tdatahd_messages[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","id");
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


	$tdatahd_messages["id"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "id";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatahd_messages["created"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "created";
//	created_ago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_ago";
	$fdata["GoodName"] = "created_ago";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","created_ago");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatahd_messages["created_ago"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "created_ago";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","body");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "body";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`body`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 250;
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


	$tdatahd_messages["body"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "body";
//	to_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "to_email";
	$fdata["GoodName"] = "to_email";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","to_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "to_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_email";

	
	
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
	$edata["LookupTable"] = "hd_users";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatahd_messages["to_email"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "to_email";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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


	$tdatahd_messages["subject"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "subject";
//	message_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "message_id";
	$fdata["GoodName"] = "message_id";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","message_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "message_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message_id";

	
	
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


	$tdatahd_messages["message_id"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "message_id";
//	maildate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "maildate";
	$fdata["GoodName"] = "maildate";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","maildate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "maildate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maildate";

	
	
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


	$tdatahd_messages["maildate"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "maildate";
//	from_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "from_email";
	$fdata["GoodName"] = "from_email";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","from_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "from_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "from_email";

	
	
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


	$tdatahd_messages["from_email"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "from_email";
//	to_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "to_name";
	$fdata["GoodName"] = "to_name";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","to_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "to_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_name";

	
	
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


	$tdatahd_messages["to_name"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "to_name";
//	from_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "from_name";
	$fdata["GoodName"] = "from_name";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","from_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "from_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "from_name";

	
	
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


	$tdatahd_messages["from_name"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "from_name";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","attachment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "attachment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatahd_messages["attachment"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "attachment";
//	cc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cc";
	$fdata["GoodName"] = "cc";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","cc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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


	$tdatahd_messages["cc"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "cc";
//	bcc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "bcc";
	$fdata["GoodName"] = "bcc";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","bcc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bcc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bcc";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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


	$tdatahd_messages["bcc"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "bcc";
//	server_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "server_id";
	$fdata["GoodName"] = "server_id";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","server_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "server_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "server_id";

	
	
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


	$tdatahd_messages["server_id"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "server_id";
//	ticketid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ticketid";
	$fdata["GoodName"] = "ticketid";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","ticketid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ticketid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketid";

	
	
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


	$tdatahd_messages["ticketid"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "ticketid";
//	directionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "directionid";
	$fdata["GoodName"] = "directionid";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","directionid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "directionid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "directionid";

	
	
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
	$edata["LookupTable"] = "hd_directions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "directionname";

	

	
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


	$tdatahd_messages["directionid"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "directionid";
//	statusid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "statusid";
	$fdata["GoodName"] = "statusid";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","statusid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "statusid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusid";

	
	
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


	$tdatahd_messages["statusid"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "statusid";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","categoryid");
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
	$edata["LookupTable"] = "hd_categories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "categoryname";

	

	
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


	$tdatahd_messages["categoryid"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "categoryid";
//	reply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "reply";
	$fdata["GoodName"] = "reply";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","reply");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatahd_messages["reply"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "reply";
//	deleterec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "deleterec";
	$fdata["GoodName"] = "deleterec";
	$fdata["ownerTable"] = "hd_messages";
	$fdata["Label"] = GetFieldLabel("hd_messages","deleterec");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatahd_messages["deleterec"] = $fdata;
		$tdatahd_messages[".searchableFields"][] = "deleterec";


$tables_data["hd_messages"]=&$tdatahd_messages;
$field_labels["hd_messages"] = &$fieldLabelshd_messages;
$fieldToolTips["hd_messages"] = &$fieldToolTipshd_messages;
$placeHolders["hd_messages"] = &$placeHoldershd_messages;
$page_titles["hd_messages"] = &$pageTitleshd_messages;


changeTextControlsToDate( "hd_messages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_messages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_messages"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hd_tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hd_tickets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hd_tickets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hd_messages"][0] = $masterParams;
				$masterTablesData["hd_messages"][0]["masterKeys"] = array();
	$masterTablesData["hd_messages"][0]["masterKeys"][]="id";
				$masterTablesData["hd_messages"][0]["detailKeys"] = array();
	$masterTablesData["hd_messages"][0]["detailKeys"][]="ticketid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_messages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  created,  created AS created_ago,  `body`,  to_email,  subject,  message_id,  maildate,  from_email,  to_name,  from_name,  attachment,  cc,  bcc,  server_id,  ticketid,  directionid,  statusid,  categoryid,  id AS reply,  id AS deleterec";
$proto0["m_strFrom"] = "FROM hd_messages";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY created DESC";
	
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
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_messages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto8["m_sql"] = "created";
$proto8["m_srcTableName"] = "hd_messages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto10["m_sql"] = "created";
$proto10["m_srcTableName"] = "hd_messages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "created_ago";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto12["m_sql"] = "`body`";
$proto12["m_srcTableName"] = "hd_messages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "to_email",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto14["m_sql"] = "to_email";
$proto14["m_srcTableName"] = "hd_messages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto16["m_sql"] = "subject";
$proto16["m_srcTableName"] = "hd_messages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "message_id",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto18["m_sql"] = "message_id";
$proto18["m_srcTableName"] = "hd_messages";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "maildate",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto20["m_sql"] = "maildate";
$proto20["m_srcTableName"] = "hd_messages";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "from_email",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto22["m_sql"] = "from_email";
$proto22["m_srcTableName"] = "hd_messages";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "to_name",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto24["m_sql"] = "to_name";
$proto24["m_srcTableName"] = "hd_messages";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "from_name",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto26["m_sql"] = "from_name";
$proto26["m_srcTableName"] = "hd_messages";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto28["m_sql"] = "attachment";
$proto28["m_srcTableName"] = "hd_messages";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cc",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto30["m_sql"] = "cc";
$proto30["m_srcTableName"] = "hd_messages";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "bcc",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto32["m_sql"] = "bcc";
$proto32["m_srcTableName"] = "hd_messages";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "server_id",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto34["m_sql"] = "server_id";
$proto34["m_srcTableName"] = "hd_messages";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketid",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto36["m_sql"] = "ticketid";
$proto36["m_srcTableName"] = "hd_messages";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "directionid",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto38["m_sql"] = "directionid";
$proto38["m_srcTableName"] = "hd_messages";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "statusid",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto40["m_sql"] = "statusid";
$proto40["m_srcTableName"] = "hd_messages";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto42["m_sql"] = "categoryid";
$proto42["m_srcTableName"] = "hd_messages";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto44["m_sql"] = "id";
$proto44["m_srcTableName"] = "hd_messages";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "reply";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto46["m_sql"] = "id";
$proto46["m_srcTableName"] = "hd_messages";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "deleterec";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "hd_messages";
$proto49["m_srcTableName"] = "hd_messages";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "created";
$proto49["m_columns"][] = "body";
$proto49["m_columns"][] = "to_email";
$proto49["m_columns"][] = "subject";
$proto49["m_columns"][] = "message_id";
$proto49["m_columns"][] = "maildate";
$proto49["m_columns"][] = "from_email";
$proto49["m_columns"][] = "to_name";
$proto49["m_columns"][] = "from_name";
$proto49["m_columns"][] = "attachment";
$proto49["m_columns"][] = "cc";
$proto49["m_columns"][] = "bcc";
$proto49["m_columns"][] = "server_id";
$proto49["m_columns"][] = "ticketid";
$proto49["m_columns"][] = "directionid";
$proto49["m_columns"][] = "statusid";
$proto49["m_columns"][] = "categoryid";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "hd_messages";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "hd_messages";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "hd_messages",
	"m_srcTableName" => "hd_messages"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hd_messages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_messages = createSqlQuery_hd_messages();


	
		;

																					

$tdatahd_messages[".sqlquery"] = $queryData_hd_messages;



include_once(getabspath("include/hd_messages_events.php"));
$tdatahd_messages[".hasEvents"] = true;

$query = &$queryData_hd_messages;
$table = "hd_messages";
// here goes EVENT_INIT_TABLE event
$username = Security::getUserName();
$userdata = Security::getUserData($username);
if($userdata["usertype"]=="user")
	$query->addWhere("directionid<>3");

;
unset($query);
?>