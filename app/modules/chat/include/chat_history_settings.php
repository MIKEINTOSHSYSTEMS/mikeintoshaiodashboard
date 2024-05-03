<?php
$tdatachat_history = array();
$tdatachat_history[".searchableFields"] = array();
$tdatachat_history[".ShortName"] = "chat_history";
$tdatachat_history[".OwnerID"] = "";
$tdatachat_history[".OriginalTable"] = "chat_history";


$tdatachat_history[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdatachat_history[".originalPagesByType"] = $tdatachat_history[".pagesByType"];
$tdatachat_history[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdatachat_history[".originalPages"] = $tdatachat_history[".pages"];
$tdatachat_history[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );
$tdatachat_history[".originalDefaultPages"] = $tdatachat_history[".defaultPages"];

//	field labels
$fieldLabelschat_history = array();
$fieldToolTipschat_history = array();
$pageTitleschat_history = array();
$placeHolderschat_history = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_history["English"] = array();
	$fieldToolTipschat_history["English"] = array();
	$placeHolderschat_history["English"] = array();
	$pageTitleschat_history["English"] = array();
	$fieldLabelschat_history["English"]["id"] = "Id";
	$fieldToolTipschat_history["English"]["id"] = "";
	$placeHolderschat_history["English"]["id"] = "";
	$fieldLabelschat_history["English"]["created"] = "Created";
	$fieldToolTipschat_history["English"]["created"] = "";
	$placeHolderschat_history["English"]["created"] = "";
	$fieldLabelschat_history["English"]["isread"] = "Is Read";
	$fieldToolTipschat_history["English"]["isread"] = "";
	$placeHolderschat_history["English"]["isread"] = "";
	$fieldLabelschat_history["English"]["ownerid"] = "Ownerid";
	$fieldToolTipschat_history["English"]["ownerid"] = "";
	$placeHolderschat_history["English"]["ownerid"] = "";
	$fieldLabelschat_history["English"]["targetid"] = "Targetid";
	$fieldToolTipschat_history["English"]["targetid"] = "";
	$placeHolderschat_history["English"]["targetid"] = "";
	$fieldLabelschat_history["English"]["messages"] = "Messages";
	$fieldToolTipschat_history["English"]["messages"] = "";
	$placeHolderschat_history["English"]["messages"] = "";
	$fieldLabelschat_history["English"]["tmp_file"] = "Tmp File";
	$fieldToolTipschat_history["English"]["tmp_file"] = "";
	$placeHolderschat_history["English"]["tmp_file"] = "";
	$fieldLabelschat_history["English"]["status"] = "Status";
	$fieldToolTipschat_history["English"]["status"] = "";
	$placeHolderschat_history["English"]["status"] = "";
	$fieldLabelschat_history["English"]["status_created"] = "Status Created";
	$fieldToolTipschat_history["English"]["status_created"] = "";
	$placeHolderschat_history["English"]["status_created"] = "";
	$fieldLabelschat_history["English"]["soundRecord"] = "Sound Record";
	$fieldToolTipschat_history["English"]["soundRecord"] = "";
	$placeHolderschat_history["English"]["soundRecord"] = "";
	$fieldLabelschat_history["English"]["isVideo"] = "Is Video";
	$fieldToolTipschat_history["English"]["isVideo"] = "";
	$placeHolderschat_history["English"]["isVideo"] = "";
	$pageTitleschat_history["English"]["add"] = "Chat History";
	if (count($fieldToolTipschat_history["English"]))
		$tdatachat_history[".isUseToolTips"] = true;
}


	$tdatachat_history[".NCSearch"] = true;



$tdatachat_history[".shortTableName"] = "chat_history";
$tdatachat_history[".nSecOptions"] = 0;

$tdatachat_history[".mainTableOwnerID"] = "";
$tdatachat_history[".entityType"] = 0;
$tdatachat_history[".connId"] = "project_at_localhost";


$tdatachat_history[".strOriginalTableName"] = "chat_history";

	



$tdatachat_history[".showAddInPopup"] = false;

$tdatachat_history[".showEditInPopup"] = false;

$tdatachat_history[".showViewInPopup"] = false;

$tdatachat_history[".listAjax"] = false;
//	temporary
//$tdatachat_history[".listAjax"] = false;

	$tdatachat_history[".audit"] = false;

	$tdatachat_history[".locking"] = false;


$pages = $tdatachat_history[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_history[".edit"] = true;
	$tdatachat_history[".afterEditAction"] = 1;
	$tdatachat_history[".closePopupAfterEdit"] = 1;
	$tdatachat_history[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_history[".add"] = true;
$tdatachat_history[".afterAddAction"] = 1;
$tdatachat_history[".closePopupAfterAdd"] = 1;
$tdatachat_history[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_history[".list"] = true;
}



$tdatachat_history[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_history[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_history[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_history[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_history[".printFriendly"] = true;
}



$tdatachat_history[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_history[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_history[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_history[".isUseAjaxSuggest"] = true;



																																
					

$tdatachat_history[".ajaxCodeSnippetAdded"] = false;

$tdatachat_history[".buttonsAdded"] = true;

$tdatachat_history[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachat_history[".isUseTimeForSearch"] = false;


$tdatachat_history[".badgeColor"] = "CFAE83";


$tdatachat_history[".allSearchFields"] = array();
$tdatachat_history[".filterFields"] = array();
$tdatachat_history[".requiredSearchFields"] = array();

$tdatachat_history[".googleLikeFields"] = array();
$tdatachat_history[".googleLikeFields"][] = "id";
$tdatachat_history[".googleLikeFields"][] = "messages";
$tdatachat_history[".googleLikeFields"][] = "ownerid";
$tdatachat_history[".googleLikeFields"][] = "created";
$tdatachat_history[".googleLikeFields"][] = "isread";
$tdatachat_history[".googleLikeFields"][] = "targetid";
$tdatachat_history[".googleLikeFields"][] = "tmp_file";
$tdatachat_history[".googleLikeFields"][] = "status";
$tdatachat_history[".googleLikeFields"][] = "status_created";
$tdatachat_history[".googleLikeFields"][] = "isVideo";



$tdatachat_history[".tableType"] = "list";

$tdatachat_history[".printerPageOrientation"] = 0;
$tdatachat_history[".nPrinterPageScale"] = 100;

$tdatachat_history[".nPrinterSplitRecords"] = 40;

$tdatachat_history[".geocodingEnabled"] = false;










$tdatachat_history[".pageSize"] = 20;




$tstrOrderBy = "";
$tdatachat_history[".strOrderBy"] = $tstrOrderBy;

$tdatachat_history[".orderindexes"] = array();


$tdatachat_history[".sqlHead"] = "SELECT id,  messages,  ownerid,  created,  isread,  targetid,  tmp_file,  status,  status_created,  soundRecord,  isVideo";
$tdatachat_history[".sqlFrom"] = "FROM chat_history";
$tdatachat_history[".sqlWhereExpr"] = "";
$tdatachat_history[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_history[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_history[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_history[".highlightSearchResults"] = true;

$tableKeyschat_history = array();
$tableKeyschat_history[] = "id";
$tdatachat_history[".Keys"] = $tableKeyschat_history;


$tdatachat_history[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","id");
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


	$tdatachat_history["id"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "id";
//	messages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "messages";
	$fdata["GoodName"] = "messages";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","messages");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "messages";

		$fdata["sourceSingle"] = "messages";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "messages";

	
	
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


	$tdatachat_history["messages"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "messages";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","ownerid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ownerid";

		$fdata["sourceSingle"] = "ownerid";

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


	$tdatachat_history["ownerid"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "ownerid";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","created");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdatachat_history["created"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "created";
//	isread
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "isread";
	$fdata["GoodName"] = "isread";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","isread");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "isread";

		$fdata["sourceSingle"] = "isRead";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isread";

	
	
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


	$tdatachat_history["isread"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "isread";
//	targetid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "targetid";
	$fdata["GoodName"] = "targetid";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","targetid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "targetid";

		$fdata["sourceSingle"] = "targetid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "targetid";

	
	
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


	$tdatachat_history["targetid"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "targetid";
//	tmp_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tmp_file";
	$fdata["GoodName"] = "tmp_file";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","tmp_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tmp_file";

		$fdata["sourceSingle"] = "tmp_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tmp_file";

	
	
				$fdata["UploadFolder"] = "files";

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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "tmp_file_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatachat_history["tmp_file"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "tmp_file";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatachat_history["status"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "status";
//	status_created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status_created";
	$fdata["GoodName"] = "status_created";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","status_created");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_created";

		$fdata["sourceSingle"] = "status_created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_created";

	
	
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


	$tdatachat_history["status_created"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "status_created";
//	soundRecord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "soundRecord";
	$fdata["GoodName"] = "soundRecord";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","soundRecord");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "soundRecord";

		$fdata["sourceSingle"] = "soundRecord";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "soundRecord";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatachat_history["soundRecord"] = $fdata;
	//	isVideo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "isVideo";
	$fdata["GoodName"] = "isVideo";
	$fdata["ownerTable"] = "chat_history";
	$fdata["Label"] = GetFieldLabel("chat_history","isVideo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "isVideo";

		$fdata["sourceSingle"] = "isVideo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isVideo";

	
	
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


	$tdatachat_history["isVideo"] = $fdata;
		$tdatachat_history[".searchableFields"][] = "isVideo";


$tables_data["chat_history"]=&$tdatachat_history;
$field_labels["chat_history"] = &$fieldLabelschat_history;
$fieldToolTips["chat_history"] = &$fieldToolTipschat_history;
$placeHolders["chat_history"] = &$placeHolderschat_history;
$page_titles["chat_history"] = &$pageTitleschat_history;


changeTextControlsToDate( "chat_history" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_history"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_history"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_history()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  messages,  ownerid,  created,  isread,  targetid,  tmp_file,  status,  status_created,  soundRecord,  isVideo";
$proto0["m_strFrom"] = "FROM chat_history";
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
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_history";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "messages",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto8["m_sql"] = "messages";
$proto8["m_srcTableName"] = "chat_history";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto10["m_sql"] = "ownerid";
$proto10["m_srcTableName"] = "chat_history";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto12["m_sql"] = "created";
$proto12["m_srcTableName"] = "chat_history";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "isread",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto14["m_sql"] = "isread";
$proto14["m_srcTableName"] = "chat_history";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "targetid",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto16["m_sql"] = "targetid";
$proto16["m_srcTableName"] = "chat_history";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tmp_file",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto18["m_sql"] = "tmp_file";
$proto18["m_srcTableName"] = "chat_history";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto20["m_sql"] = "status";
$proto20["m_srcTableName"] = "chat_history";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status_created",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto22["m_sql"] = "status_created";
$proto22["m_srcTableName"] = "chat_history";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "soundRecord",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto24["m_sql"] = "soundRecord";
$proto24["m_srcTableName"] = "chat_history";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "isVideo",
	"m_strTable" => "chat_history",
	"m_srcTableName" => "chat_history"
));

$proto26["m_sql"] = "isVideo";
$proto26["m_srcTableName"] = "chat_history";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "chat_history";
$proto29["m_srcTableName"] = "chat_history";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "messages";
$proto29["m_columns"][] = "ownerid";
$proto29["m_columns"][] = "created";
$proto29["m_columns"][] = "isread";
$proto29["m_columns"][] = "targetid";
$proto29["m_columns"][] = "tmp_file";
$proto29["m_columns"][] = "status";
$proto29["m_columns"][] = "status_created";
$proto29["m_columns"][] = "soundRecord";
$proto29["m_columns"][] = "isVideo";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "chat_history";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "chat_history";
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
$proto0["m_srcTableName"]="chat_history";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_history = createSqlQuery_chat_history();


	
		;

											

$tdatachat_history[".sqlquery"] = $queryData_chat_history;



include_once(getabspath("include/chat_history_events.php"));
$tdatachat_history[".hasEvents"] = true;

?>