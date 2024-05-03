<?php
$tdatahd_settings = array();
$tdatahd_settings[".searchableFields"] = array();
$tdatahd_settings[".ShortName"] = "hd_settings";
$tdatahd_settings[".OwnerID"] = "";
$tdatahd_settings[".OriginalTable"] = "hd_settings";


$tdatahd_settings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatahd_settings[".originalPagesByType"] = $tdatahd_settings[".pagesByType"];
$tdatahd_settings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatahd_settings[".originalPages"] = $tdatahd_settings[".pages"];
$tdatahd_settings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatahd_settings[".originalDefaultPages"] = $tdatahd_settings[".defaultPages"];

//	field labels
$fieldLabelshd_settings = array();
$fieldToolTipshd_settings = array();
$pageTitleshd_settings = array();
$placeHoldershd_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_settings["English"] = array();
	$fieldToolTipshd_settings["English"] = array();
	$placeHoldershd_settings["English"] = array();
	$pageTitleshd_settings["English"] = array();
	$fieldLabelshd_settings["English"]["id"] = "Id";
	$fieldToolTipshd_settings["English"]["id"] = "";
	$placeHoldershd_settings["English"]["id"] = "";
	$fieldLabelshd_settings["English"]["attachment_folder"] = "Attachment Folder";
	$fieldToolTipshd_settings["English"]["attachment_folder"] = "";
	$placeHoldershd_settings["English"]["attachment_folder"] = "";
	$fieldLabelshd_settings["English"]["isReply"] = "Is Reply";
	$fieldToolTipshd_settings["English"]["isReply"] = "";
	$placeHoldershd_settings["English"]["isReply"] = "";
	$fieldLabelshd_settings["English"]["to"] = "To";
	$fieldToolTipshd_settings["English"]["to"] = "";
	$placeHoldershd_settings["English"]["to"] = "";
	$fieldLabelshd_settings["English"]["subject"] = "Subject";
	$fieldToolTipshd_settings["English"]["subject"] = "";
	$placeHoldershd_settings["English"]["subject"] = "";
	$fieldLabelshd_settings["English"]["body"] = "Body";
	$fieldToolTipshd_settings["English"]["body"] = "";
	$placeHoldershd_settings["English"]["body"] = "";
	$fieldLabelshd_settings["English"]["fromName"] = "From Name";
	$fieldToolTipshd_settings["English"]["fromName"] = "";
	$placeHoldershd_settings["English"]["fromName"] = "";
	$fieldLabelshd_settings["English"]["fromEmail"] = "From Email";
	$fieldToolTipshd_settings["English"]["fromEmail"] = "";
	$placeHoldershd_settings["English"]["fromEmail"] = "";
	$fieldLabelshd_settings["English"]["knowledge_base"] = "Enable Knowledge Base integration";
	$fieldToolTipshd_settings["English"]["knowledge_base"] = "";
	$placeHoldershd_settings["English"]["knowledge_base"] = "";
	$fieldLabelshd_settings["English"]["who_is_online"] = "Show who is online";
	$fieldToolTipshd_settings["English"]["who_is_online"] = "";
	$placeHoldershd_settings["English"]["who_is_online"] = "";
	$fieldLabelshd_settings["English"]["emaildays"] = "Fetch emails for the last";
	$fieldToolTipshd_settings["English"]["emaildays"] = "";
	$placeHoldershd_settings["English"]["emaildays"] = "";
	$fieldLabelshd_settings["English"]["folder"] = "Folder";
	$fieldToolTipshd_settings["English"]["folder"] = "";
	$placeHoldershd_settings["English"]["folder"] = "";
	$pageTitleshd_settings["English"]["edit"] = "Settings";
	if (count($fieldToolTipshd_settings["English"]))
		$tdatahd_settings[".isUseToolTips"] = true;
}


	$tdatahd_settings[".NCSearch"] = true;



$tdatahd_settings[".shortTableName"] = "hd_settings";
$tdatahd_settings[".nSecOptions"] = 0;

$tdatahd_settings[".mainTableOwnerID"] = "";
$tdatahd_settings[".entityType"] = 0;
$tdatahd_settings[".connId"] = "project_at_localhost";


$tdatahd_settings[".strOriginalTableName"] = "hd_settings";

	



$tdatahd_settings[".showAddInPopup"] = false;

$tdatahd_settings[".showEditInPopup"] = false;

$tdatahd_settings[".showViewInPopup"] = false;

$tdatahd_settings[".listAjax"] = false;
//	temporary
//$tdatahd_settings[".listAjax"] = false;

	$tdatahd_settings[".audit"] = false;

	$tdatahd_settings[".locking"] = false;


$pages = $tdatahd_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_settings[".edit"] = true;
	$tdatahd_settings[".afterEditAction"] = 1;
	$tdatahd_settings[".closePopupAfterEdit"] = 1;
	$tdatahd_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_settings[".add"] = true;
$tdatahd_settings[".afterAddAction"] = 1;
$tdatahd_settings[".closePopupAfterAdd"] = 1;
$tdatahd_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_settings[".list"] = true;
}



$tdatahd_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_settings[".printFriendly"] = true;
}



$tdatahd_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_settings[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_settings[".ajaxCodeSnippetAdded"] = false;

$tdatahd_settings[".buttonsAdded"] = false;

$tdatahd_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahd_settings[".isUseTimeForSearch"] = false;


$tdatahd_settings[".badgeColor"] = "008B8B";


$tdatahd_settings[".allSearchFields"] = array();
$tdatahd_settings[".filterFields"] = array();
$tdatahd_settings[".requiredSearchFields"] = array();

$tdatahd_settings[".googleLikeFields"] = array();
$tdatahd_settings[".googleLikeFields"][] = "id";
$tdatahd_settings[".googleLikeFields"][] = "attachment_folder";
$tdatahd_settings[".googleLikeFields"][] = "isReply";
$tdatahd_settings[".googleLikeFields"][] = "to";
$tdatahd_settings[".googleLikeFields"][] = "subject";
$tdatahd_settings[".googleLikeFields"][] = "body";
$tdatahd_settings[".googleLikeFields"][] = "fromName";
$tdatahd_settings[".googleLikeFields"][] = "fromEmail";
$tdatahd_settings[".googleLikeFields"][] = "knowledge_base";
$tdatahd_settings[".googleLikeFields"][] = "who_is_online";
$tdatahd_settings[".googleLikeFields"][] = "emaildays";
$tdatahd_settings[".googleLikeFields"][] = "folder";



$tdatahd_settings[".tableType"] = "list";

$tdatahd_settings[".printerPageOrientation"] = 0;
$tdatahd_settings[".nPrinterPageScale"] = 100;

$tdatahd_settings[".nPrinterSplitRecords"] = 40;

$tdatahd_settings[".geocodingEnabled"] = false;










$tdatahd_settings[".pageSize"] = 20;

$tdatahd_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_settings[".strOrderBy"] = $tstrOrderBy;

$tdatahd_settings[".orderindexes"] = array();


$tdatahd_settings[".sqlHead"] = "SELECT id,  attachment_folder,  isReply,  `to`,  subject,  `body`,  fromName,  fromEmail,  knowledge_base,  who_is_online,  emaildays,  folder";
$tdatahd_settings[".sqlFrom"] = "FROM hd_settings";
$tdatahd_settings[".sqlWhereExpr"] = "";
$tdatahd_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_settings[".highlightSearchResults"] = true;

$tableKeyshd_settings = array();
$tableKeyshd_settings[] = "id";
$tdatahd_settings[".Keys"] = $tableKeyshd_settings;


$tdatahd_settings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","id");
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


	$tdatahd_settings["id"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "id";
//	attachment_folder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "attachment_folder";
	$fdata["GoodName"] = "attachment_folder";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","attachment_folder");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "attachment_folder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment_folder";

	
	
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


	$tdatahd_settings["attachment_folder"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "attachment_folder";
//	isReply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "isReply";
	$fdata["GoodName"] = "isReply";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","isReply");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "isReply";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isReply";

	
	
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


	$tdatahd_settings["isReply"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "isReply";
//	to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "to";
	$fdata["GoodName"] = "to";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "to";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`to`";

	
	
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


	$tdatahd_settings["to"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "to";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","subject");
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


	$tdatahd_settings["subject"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "subject";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","body");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "body";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`body`";

	
	
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


	$tdatahd_settings["body"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "body";
//	fromName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fromName";
	$fdata["GoodName"] = "fromName";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","fromName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fromName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fromName";

	
	
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


	$tdatahd_settings["fromName"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "fromName";
//	fromEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fromEmail";
	$fdata["GoodName"] = "fromEmail";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","fromEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fromEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fromEmail";

	
	
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


	$tdatahd_settings["fromEmail"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "fromEmail";
//	knowledge_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "knowledge_base";
	$fdata["GoodName"] = "knowledge_base";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","knowledge_base");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "knowledge_base";

		$fdata["sourceSingle"] = "knowledge_base";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "knowledge_base";

	
	
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


	$tdatahd_settings["knowledge_base"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "knowledge_base";
//	who_is_online
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "who_is_online";
	$fdata["GoodName"] = "who_is_online";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","who_is_online");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "who_is_online";

		$fdata["sourceSingle"] = "who_is_online";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "who_is_online";

	
	
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


	$tdatahd_settings["who_is_online"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "who_is_online";
//	emaildays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "emaildays";
	$fdata["GoodName"] = "emaildays";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","emaildays");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "emaildays";

		$fdata["sourceSingle"] = "emaildays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emaildays";

	
	
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


	$tdatahd_settings["emaildays"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "emaildays";
//	folder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "folder";
	$fdata["GoodName"] = "folder";
	$fdata["ownerTable"] = "hd_settings";
	$fdata["Label"] = GetFieldLabel("hd_settings","folder");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "folder";

		$fdata["sourceSingle"] = "folder";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "folder";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "fetch INBOX emails only";
	$edata["LookupValues"][] = "fetch email from all folders";

	
	
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


	$tdatahd_settings["folder"] = $fdata;
		$tdatahd_settings[".searchableFields"][] = "folder";


$tables_data["hd_settings"]=&$tdatahd_settings;
$field_labels["hd_settings"] = &$fieldLabelshd_settings;
$fieldToolTips["hd_settings"] = &$fieldToolTipshd_settings;
$placeHolders["hd_settings"] = &$placeHoldershd_settings;
$page_titles["hd_settings"] = &$pageTitleshd_settings;


changeTextControlsToDate( "hd_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  attachment_folder,  isReply,  `to`,  subject,  `body`,  fromName,  fromEmail,  knowledge_base,  who_is_online,  emaildays,  folder";
$proto0["m_strFrom"] = "FROM hd_settings";
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
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment_folder",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto8["m_sql"] = "attachment_folder";
$proto8["m_srcTableName"] = "hd_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "isReply",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto10["m_sql"] = "isReply";
$proto10["m_srcTableName"] = "hd_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "to",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto12["m_sql"] = "`to`";
$proto12["m_srcTableName"] = "hd_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto14["m_sql"] = "subject";
$proto14["m_srcTableName"] = "hd_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto16["m_sql"] = "`body`";
$proto16["m_srcTableName"] = "hd_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fromName",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto18["m_sql"] = "fromName";
$proto18["m_srcTableName"] = "hd_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fromEmail",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto20["m_sql"] = "fromEmail";
$proto20["m_srcTableName"] = "hd_settings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "knowledge_base",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto22["m_sql"] = "knowledge_base";
$proto22["m_srcTableName"] = "hd_settings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "who_is_online",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto24["m_sql"] = "who_is_online";
$proto24["m_srcTableName"] = "hd_settings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "emaildays",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto26["m_sql"] = "emaildays";
$proto26["m_srcTableName"] = "hd_settings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "folder",
	"m_strTable" => "hd_settings",
	"m_srcTableName" => "hd_settings"
));

$proto28["m_sql"] = "folder";
$proto28["m_srcTableName"] = "hd_settings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "hd_settings";
$proto31["m_srcTableName"] = "hd_settings";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "attachment_folder";
$proto31["m_columns"][] = "isReply";
$proto31["m_columns"][] = "to";
$proto31["m_columns"][] = "subject";
$proto31["m_columns"][] = "body";
$proto31["m_columns"][] = "fromName";
$proto31["m_columns"][] = "fromEmail";
$proto31["m_columns"][] = "knowledge_base";
$proto31["m_columns"][] = "who_is_online";
$proto31["m_columns"][] = "emaildays";
$proto31["m_columns"][] = "folder";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "hd_settings";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "hd_settings";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hd_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_settings = createSqlQuery_hd_settings();


	
		;

												

$tdatahd_settings[".sqlquery"] = $queryData_hd_settings;



include_once(getabspath("include/hd_settings_events.php"));
$tdatahd_settings[".hasEvents"] = true;

?>