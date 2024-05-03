<?php
$tdatahd_tickets = array();
$tdatahd_tickets[".searchableFields"] = array();
$tdatahd_tickets[".ShortName"] = "hd_tickets";
$tdatahd_tickets[".OwnerID"] = "clientid";
$tdatahd_tickets[".OriginalTable"] = "hd_tickets";


$tdatahd_tickets[".pagesByType"] = my_json_decode( "{\"list\":[\"list\",\"list_customer\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatahd_tickets[".originalPagesByType"] = $tdatahd_tickets[".pagesByType"];
$tdatahd_tickets[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\",\"list_customer\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatahd_tickets[".originalPages"] = $tdatahd_tickets[".pages"];
$tdatahd_tickets[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatahd_tickets[".originalDefaultPages"] = $tdatahd_tickets[".defaultPages"];

//	field labels
$fieldLabelshd_tickets = array();
$fieldToolTipshd_tickets = array();
$pageTitleshd_tickets = array();
$placeHoldershd_tickets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_tickets["English"] = array();
	$fieldToolTipshd_tickets["English"] = array();
	$placeHoldershd_tickets["English"] = array();
	$pageTitleshd_tickets["English"] = array();
	$fieldLabelshd_tickets["English"]["id"] = "Total messages";
	$fieldToolTipshd_tickets["English"]["id"] = "";
	$placeHoldershd_tickets["English"]["id"] = "";
	$fieldLabelshd_tickets["English"]["created"] = "Created";
	$fieldToolTipshd_tickets["English"]["created"] = "";
	$placeHoldershd_tickets["English"]["created"] = "";
	$fieldLabelshd_tickets["English"]["subject"] = "Subject";
	$fieldToolTipshd_tickets["English"]["subject"] = "";
	$placeHoldershd_tickets["English"]["subject"] = "";
	$fieldLabelshd_tickets["English"]["statusid"] = "Status";
	$fieldToolTipshd_tickets["English"]["statusid"] = "";
	$placeHoldershd_tickets["English"]["statusid"] = "";
	$fieldLabelshd_tickets["English"]["folderid"] = "Folder";
	$fieldToolTipshd_tickets["English"]["folderid"] = "";
	$placeHoldershd_tickets["English"]["folderid"] = "";
	$fieldLabelshd_tickets["English"]["categoryid"] = "Category";
	$fieldToolTipshd_tickets["English"]["categoryid"] = "";
	$placeHoldershd_tickets["English"]["categoryid"] = "";
	$fieldLabelshd_tickets["English"]["directionid"] = "Direction";
	$fieldToolTipshd_tickets["English"]["directionid"] = "";
	$placeHoldershd_tickets["English"]["directionid"] = "";
	$fieldLabelshd_tickets["English"]["ticketemail"] = "Email";
	$fieldToolTipshd_tickets["English"]["ticketemail"] = "";
	$placeHoldershd_tickets["English"]["ticketemail"] = "";
	$fieldLabelshd_tickets["English"]["assignedid"] = "Assigned to";
	$fieldToolTipshd_tickets["English"]["assignedid"] = "";
	$placeHoldershd_tickets["English"]["assignedid"] = "";
	$fieldLabelshd_tickets["English"]["priorityid"] = "Priority";
	$fieldToolTipshd_tickets["English"]["priorityid"] = "";
	$placeHoldershd_tickets["English"]["priorityid"] = "";
	$fieldLabelshd_tickets["English"]["attached"] = "Attached";
	$fieldToolTipshd_tickets["English"]["attached"] = "";
	$placeHoldershd_tickets["English"]["attached"] = "";
	$fieldLabelshd_tickets["English"]["cnt"] = "Messages";
	$fieldToolTipshd_tickets["English"]["cnt"] = "";
	$placeHoldershd_tickets["English"]["cnt"] = "";
	$fieldLabelshd_tickets["English"]["clientid"] = "Clientid";
	$fieldToolTipshd_tickets["English"]["clientid"] = "";
	$placeHoldershd_tickets["English"]["clientid"] = "";
	$fieldLabelshd_tickets["English"]["updated"] = "Updated";
	$fieldToolTipshd_tickets["English"]["updated"] = "";
	$placeHoldershd_tickets["English"]["updated"] = "";
	$fieldLabelshd_tickets["English"]["ticketid"] = "Ticketid";
	$fieldToolTipshd_tickets["English"]["ticketid"] = "";
	$placeHoldershd_tickets["English"]["ticketid"] = "";
	$fieldLabelshd_tickets["English"]["client_status"] = "Status";
	$fieldToolTipshd_tickets["English"]["client_status"] = "";
	$placeHoldershd_tickets["English"]["client_status"] = "";
	$fieldLabelshd_tickets["English"]["clientinfo"] = "Clientinfo";
	$fieldToolTipshd_tickets["English"]["clientinfo"] = "";
	$placeHoldershd_tickets["English"]["clientinfo"] = "";
	$pageTitleshd_tickets["English"]["masterlist"] = "Ticket ID {%id}";
	if (count($fieldToolTipshd_tickets["English"]))
		$tdatahd_tickets[".isUseToolTips"] = true;
}


	$tdatahd_tickets[".NCSearch"] = true;



$tdatahd_tickets[".shortTableName"] = "hd_tickets";
$tdatahd_tickets[".nSecOptions"] = 1;

$tdatahd_tickets[".mainTableOwnerID"] = "clientid";
$tdatahd_tickets[".entityType"] = 0;
$tdatahd_tickets[".connId"] = "project_at_localhost";


$tdatahd_tickets[".strOriginalTableName"] = "hd_tickets";

	



$tdatahd_tickets[".showAddInPopup"] = false;

$tdatahd_tickets[".showEditInPopup"] = false;

$tdatahd_tickets[".showViewInPopup"] = false;

$tdatahd_tickets[".listAjax"] = false;
//	temporary
//$tdatahd_tickets[".listAjax"] = false;

	$tdatahd_tickets[".audit"] = false;

	$tdatahd_tickets[".locking"] = false;


$pages = $tdatahd_tickets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_tickets[".edit"] = true;
	$tdatahd_tickets[".afterEditAction"] = 1;
	$tdatahd_tickets[".closePopupAfterEdit"] = 1;
	$tdatahd_tickets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_tickets[".add"] = true;
$tdatahd_tickets[".afterAddAction"] = 1;
$tdatahd_tickets[".closePopupAfterAdd"] = 1;
$tdatahd_tickets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_tickets[".list"] = true;
}



$tdatahd_tickets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_tickets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_tickets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_tickets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_tickets[".printFriendly"] = true;
}



$tdatahd_tickets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_tickets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_tickets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_tickets[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatahd_tickets[".ajaxCodeSnippetAdded"] = false;

$tdatahd_tickets[".buttonsAdded"] = false;

$tdatahd_tickets[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_tickets[".isUseTimeForSearch"] = false;


$tdatahd_tickets[".badgeColor"] = "cd853f";


$tdatahd_tickets[".allSearchFields"] = array();
$tdatahd_tickets[".filterFields"] = array();
$tdatahd_tickets[".requiredSearchFields"] = array();

$tdatahd_tickets[".googleLikeFields"] = array();
$tdatahd_tickets[".googleLikeFields"][] = "id";
$tdatahd_tickets[".googleLikeFields"][] = "created";
$tdatahd_tickets[".googleLikeFields"][] = "subject";
$tdatahd_tickets[".googleLikeFields"][] = "statusid";
$tdatahd_tickets[".googleLikeFields"][] = "priorityid";
$tdatahd_tickets[".googleLikeFields"][] = "folderid";
$tdatahd_tickets[".googleLikeFields"][] = "categoryid";
$tdatahd_tickets[".googleLikeFields"][] = "directionid";
$tdatahd_tickets[".googleLikeFields"][] = "ticketemail";
$tdatahd_tickets[".googleLikeFields"][] = "assignedid";
$tdatahd_tickets[".googleLikeFields"][] = "attached";
$tdatahd_tickets[".googleLikeFields"][] = "cnt";
$tdatahd_tickets[".googleLikeFields"][] = "ticketid";
$tdatahd_tickets[".googleLikeFields"][] = "clientinfo";
$tdatahd_tickets[".googleLikeFields"][] = "clientid";
$tdatahd_tickets[".googleLikeFields"][] = "updated";
$tdatahd_tickets[".googleLikeFields"][] = "client_status";



$tdatahd_tickets[".tableType"] = "list";

$tdatahd_tickets[".printerPageOrientation"] = 0;
$tdatahd_tickets[".nPrinterPageScale"] = 100;

$tdatahd_tickets[".nPrinterSplitRecords"] = 40;

$tdatahd_tickets[".geocodingEnabled"] = false;










$tdatahd_tickets[".pageSize"] = 25;

$tdatahd_tickets[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY created DESC, id DESC";
$tdatahd_tickets[".strOrderBy"] = $tstrOrderBy;

$tdatahd_tickets[".orderindexes"] = array();
	$tdatahd_tickets[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "created");

	$tdatahd_tickets[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");



$tdatahd_tickets[".sqlHead"] = "SELECT id,  created,  subject,  statusid,  priorityid,  folderid,  categoryid,  directionid,  ticketemail,  assignedid,  id AS attached,  id AS cnt,  id AS ticketid,  id AS clientinfo,  clientid,  updated,  client_status";
$tdatahd_tickets[".sqlFrom"] = "FROM hd_tickets";
$tdatahd_tickets[".sqlWhereExpr"] = "";
$tdatahd_tickets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_tickets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_tickets[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_tickets[".highlightSearchResults"] = true;

$tableKeyshd_tickets = array();
$tableKeyshd_tickets[] = "id";
$tdatahd_tickets[".Keys"] = $tableKeyshd_tickets;


$tdatahd_tickets[".hideMobileList"] = array();
		$tdatahd_tickets[".hideMobileList"][1] = array();
$tdatahd_tickets[".hideMobileList"][1]["updated"] = true;
		$tdatahd_tickets[".hideMobileList"][5] = array();
$tdatahd_tickets[".hideMobileList"][5]["id"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["created"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["statusid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["priorityid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["folderid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["categoryid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["directionid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["assignedid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["attached"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["cnt"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["clientinfo"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["clientid"] = true;
		$tdatahd_tickets[".hideMobileList"][5]["client_status"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","id");
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


	$tdatahd_tickets["id"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "id";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","created");
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


	$tdatahd_tickets["created"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "created";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";

	
	
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


	$tdatahd_tickets["subject"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "subject";
//	statusid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "statusid";
	$fdata["GoodName"] = "statusid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","statusid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "statusid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statusid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hd_status";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusname";

	

	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hd_status";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusname";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hd_status";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusname";

	

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahd_tickets["statusid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "statusid";
//	priorityid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "priorityid";
	$fdata["GoodName"] = "priorityid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","priorityid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "priorityid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priorityid";

	
	
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
	$edata["LookupTable"] = "hd_priorities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "priorityname";

	

	
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


	$tdatahd_tickets["priorityid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "priorityid";
//	folderid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "folderid";
	$fdata["GoodName"] = "folderid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","folderid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "folderid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "folderid";

	
	
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
	$edata["LookupTable"] = "hd_folders";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "foldername";

	

	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahd_tickets["folderid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "folderid";
//	categoryid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "categoryid";
	$fdata["GoodName"] = "categoryid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","categoryid");
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
	$edata["LookupTable"] = "hd_categories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahd_tickets["categoryid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "categoryid";
//	directionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "directionid";
	$fdata["GoodName"] = "directionid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","directionid");
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
	$edata["LinkFieldType"] = 3;
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


	$tdatahd_tickets["directionid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "directionid";
//	ticketemail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ticketemail";
	$fdata["GoodName"] = "ticketemail";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","ticketemail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ticketemail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketemail";

	
	
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


	$tdatahd_tickets["ticketemail"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "ticketemail";
//	assignedid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "assignedid";
	$fdata["GoodName"] = "assignedid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","assignedid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "assignedid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assignedid";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullname";

	

	
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


	$tdatahd_tickets["assignedid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "assignedid";
//	attached
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "attached";
	$fdata["GoodName"] = "attached";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","attached");
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


	$tdatahd_tickets["attached"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "attached";
//	cnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cnt";
	$fdata["GoodName"] = "cnt";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","cnt");
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


	$tdatahd_tickets["cnt"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "cnt";
//	ticketid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ticketid";
	$fdata["GoodName"] = "ticketid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","ticketid");
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


	$tdatahd_tickets["ticketid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "ticketid";
//	clientinfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "clientinfo";
	$fdata["GoodName"] = "clientinfo";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","clientinfo");
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


	$tdatahd_tickets["clientinfo"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "clientinfo";
//	clientid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "clientid";
	$fdata["GoodName"] = "clientid";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","clientid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "clientid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clientid";

	
	
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


	$tdatahd_tickets["clientid"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "clientid";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","updated");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated";

		$fdata["sourceSingle"] = "updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
			$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Interval slider";
		$fdata["showCollapsed"] = false;

	
	
	
	

	$fdata["filterKnobsType"] = 0;
		$fdata["filterSliderStepType"] = 3;
	$fdata["filterSliderStepValue"] = 1;
//end of Filters settings


	$tdatahd_tickets["updated"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "updated";
//	client_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "client_status";
	$fdata["GoodName"] = "client_status";
	$fdata["ownerTable"] = "hd_tickets";
	$fdata["Label"] = GetFieldLabel("hd_tickets","client_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "client_status";

		$fdata["sourceSingle"] = "client_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hd_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusname";

	

	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hd_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusname";

	

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hd_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "statusname";

	

	
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
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahd_tickets["client_status"] = $fdata;
		$tdatahd_tickets[".searchableFields"][] = "client_status";


$tables_data["hd_tickets"]=&$tdatahd_tickets;
$field_labels["hd_tickets"] = &$fieldLabelshd_tickets;
$fieldToolTips["hd_tickets"] = &$fieldToolTipshd_tickets;
$placeHolders["hd_tickets"] = &$placeHoldershd_tickets;
$page_titles["hd_tickets"] = &$pageTitleshd_tickets;


changeTextControlsToDate( "hd_tickets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_tickets"] = array();
//	hd_messages
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hd_messages";
		$detailsParam["dOriginalTable"] = "hd_messages";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hd_messages";
	$detailsParam["dCaptionTable"] = GetTableCaption("hd_messages");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hd_tickets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hd_tickets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hd_tickets"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["hd_tickets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hd_tickets"][$dIndex]["detailKeys"][]="ticketid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_tickets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hd_folders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hd_folders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hd_folders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hd_tickets"][0] = $masterParams;
				$masterTablesData["hd_tickets"][0]["masterKeys"] = array();
	$masterTablesData["hd_tickets"][0]["masterKeys"][]="id";
				$masterTablesData["hd_tickets"][0]["detailKeys"] = array();
	$masterTablesData["hd_tickets"][0]["detailKeys"][]="folderid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_tickets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  created,  subject,  statusid,  priorityid,  folderid,  categoryid,  directionid,  ticketemail,  assignedid,  id AS attached,  id AS cnt,  id AS ticketid,  id AS clientinfo,  clientid,  updated,  client_status";
$proto0["m_strFrom"] = "FROM hd_tickets";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY created DESC, id DESC";
	
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
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_tickets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto8["m_sql"] = "created";
$proto8["m_srcTableName"] = "hd_tickets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto10["m_sql"] = "subject";
$proto10["m_srcTableName"] = "hd_tickets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "statusid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto12["m_sql"] = "statusid";
$proto12["m_srcTableName"] = "hd_tickets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "priorityid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto14["m_sql"] = "priorityid";
$proto14["m_srcTableName"] = "hd_tickets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "folderid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto16["m_sql"] = "folderid";
$proto16["m_srcTableName"] = "hd_tickets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "categoryid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto18["m_sql"] = "categoryid";
$proto18["m_srcTableName"] = "hd_tickets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "directionid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto20["m_sql"] = "directionid";
$proto20["m_srcTableName"] = "hd_tickets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketemail",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto22["m_sql"] = "ticketemail";
$proto22["m_srcTableName"] = "hd_tickets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "assignedid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto24["m_sql"] = "assignedid";
$proto24["m_srcTableName"] = "hd_tickets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto26["m_sql"] = "id";
$proto26["m_srcTableName"] = "hd_tickets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "attached";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto28["m_sql"] = "id";
$proto28["m_srcTableName"] = "hd_tickets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "cnt";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto30["m_sql"] = "id";
$proto30["m_srcTableName"] = "hd_tickets";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "ticketid";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto32["m_sql"] = "id";
$proto32["m_srcTableName"] = "hd_tickets";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "clientinfo";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "clientid",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto34["m_sql"] = "clientid";
$proto34["m_srcTableName"] = "hd_tickets";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "updated",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto36["m_sql"] = "updated";
$proto36["m_srcTableName"] = "hd_tickets";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "client_status",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto38["m_sql"] = "client_status";
$proto38["m_srcTableName"] = "hd_tickets";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "hd_tickets";
$proto41["m_srcTableName"] = "hd_tickets";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "created";
$proto41["m_columns"][] = "updated";
$proto41["m_columns"][] = "subject";
$proto41["m_columns"][] = "statusid";
$proto41["m_columns"][] = "priorityid";
$proto41["m_columns"][] = "folderid";
$proto41["m_columns"][] = "categoryid";
$proto41["m_columns"][] = "directionid";
$proto41["m_columns"][] = "ticketemail";
$proto41["m_columns"][] = "assignedid";
$proto41["m_columns"][] = "clientid";
$proto41["m_columns"][] = "client_status";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "hd_tickets";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "hd_tickets";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "hd_tickets",
	"m_srcTableName" => "hd_tickets"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hd_tickets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_tickets = createSqlQuery_hd_tickets();


	
		;

																	

$tdatahd_tickets[".sqlquery"] = $queryData_hd_tickets;



include_once(getabspath("include/hd_tickets_events.php"));
$tdatahd_tickets[".hasEvents"] = true;

$query = &$queryData_hd_tickets;
$table = "hd_tickets";
// here goes EVENT_INIT_TABLE event

$username = Security::getUserName();
$userdata = Security::getUserData($username);

if($userdata["usertype"]==="user"){
	if($userdata["supporterView"] != "View all tickets")
		$query->addWhere("assignedid=".$userdata[$_SESSION["user_keyfield_for_query"]]);
}



;
unset($query);
?>