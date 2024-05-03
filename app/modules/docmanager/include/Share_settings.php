<?php
$tdataShare = array();
$tdataShare[".searchableFields"] = array();
$tdataShare[".ShortName"] = "Share";
$tdataShare[".OwnerID"] = "";
$tdataShare[".OriginalTable"] = "doc_files";


$tdataShare[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdataShare[".originalPagesByType"] = $tdataShare[".pagesByType"];
$tdataShare[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdataShare[".originalPages"] = $tdataShare[".pages"];
$tdataShare[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdataShare[".originalDefaultPages"] = $tdataShare[".defaultPages"];

//	field labels
$fieldLabelsShare = array();
$fieldToolTipsShare = array();
$pageTitlesShare = array();
$placeHoldersShare = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsShare["English"] = array();
	$fieldToolTipsShare["English"] = array();
	$placeHoldersShare["English"] = array();
	$pageTitlesShare["English"] = array();
	$fieldLabelsShare["English"]["id"] = "Id";
	$fieldToolTipsShare["English"]["id"] = "";
	$placeHoldersShare["English"]["id"] = "";
	$fieldLabelsShare["English"]["file"] = "Send to:";
	$fieldToolTipsShare["English"]["file"] = "";
	$placeHoldersShare["English"]["file"] = "";
	$fieldLabelsShare["English"]["description"] = "Description";
	$fieldToolTipsShare["English"]["description"] = "";
	$placeHoldersShare["English"]["description"] = "";
	$fieldLabelsShare["English"]["hash"] = "Link:";
	$fieldToolTipsShare["English"]["hash"] = "";
	$placeHoldersShare["English"]["hash"] = "";
	$fieldLabelsShare["English"]["parent_folder_id"] = "Parent Folder Id";
	$fieldToolTipsShare["English"]["parent_folder_id"] = "";
	$placeHoldersShare["English"]["parent_folder_id"] = "";
	$fieldLabelsShare["English"]["ownerid"] = "Ownerid";
	$fieldToolTipsShare["English"]["ownerid"] = "";
	$placeHoldersShare["English"]["ownerid"] = "";
	$fieldLabelsShare["English"]["file_type"] = "File Type";
	$fieldToolTipsShare["English"]["file_type"] = "";
	$placeHoldersShare["English"]["file_type"] = "";
	$fieldLabelsShare["English"]["name"] = "Message:";
	$fieldToolTipsShare["English"]["name"] = "";
	$placeHoldersShare["English"]["name"] = "";
	$fieldLabelsShare["English"]["created"] = "Created";
	$fieldToolTipsShare["English"]["created"] = "";
	$placeHoldersShare["English"]["created"] = "";
	$fieldLabelsShare["English"]["share_date"] = "";
	$fieldToolTipsShare["English"]["share_date"] = "";
	$placeHoldersShare["English"]["share_date"] = "";
	$fieldLabelsShare["English"]["share_ro"] = "";
	$fieldToolTipsShare["English"]["share_ro"] = "";
	$placeHoldersShare["English"]["share_ro"] = "";
	$fieldLabelsShare["English"]["share_type"] = "Share Type";
	$fieldToolTipsShare["English"]["share_type"] = "";
	$placeHoldersShare["English"]["share_type"] = "";
	$fieldLabelsShare["English"]["share_users"] = "Users";
	$fieldToolTipsShare["English"]["share_users"] = "";
	$placeHoldersShare["English"]["share_users"] = "";
	$fieldLabelsShare["English"]["share_message"] = "Message:";
	$fieldToolTipsShare["English"]["share_message"] = "";
	$placeHoldersShare["English"]["share_message"] = "";
	$fieldLabelsShare["English"]["share_sendto"] = "Send to:";
	$fieldToolTipsShare["English"]["share_sendto"] = "";
	$placeHoldersShare["English"]["share_sendto"] = "";
	$fieldLabelsShare["English"]["share_needDate"] = "Date Expiration";
	$fieldToolTipsShare["English"]["share_needDate"] = "";
	$placeHoldersShare["English"]["share_needDate"] = "";
	$fieldLabelsShare["English"]["share_startPoint"] = "Share StartPoint";
	$fieldToolTipsShare["English"]["share_startPoint"] = "";
	$placeHoldersShare["English"]["share_startPoint"] = "";
	if (count($fieldToolTipsShare["English"]))
		$tdataShare[".isUseToolTips"] = true;
}


	$tdataShare[".NCSearch"] = true;



$tdataShare[".shortTableName"] = "Share";
$tdataShare[".nSecOptions"] = 0;

$tdataShare[".mainTableOwnerID"] = "";
$tdataShare[".entityType"] = 1;
$tdataShare[".connId"] = "project_at_localhost";


$tdataShare[".strOriginalTableName"] = "doc_files";

		 



$tdataShare[".showAddInPopup"] = false;

$tdataShare[".showEditInPopup"] = false;

$tdataShare[".showViewInPopup"] = false;

$tdataShare[".listAjax"] = false;
//	temporary
//$tdataShare[".listAjax"] = false;

	$tdataShare[".audit"] = false;

	$tdataShare[".locking"] = false;


$pages = $tdataShare[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataShare[".edit"] = true;
	$tdataShare[".afterEditAction"] = 1;
	$tdataShare[".closePopupAfterEdit"] = 1;
	$tdataShare[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataShare[".add"] = true;
$tdataShare[".afterAddAction"] = 1;
$tdataShare[".closePopupAfterAdd"] = 1;
$tdataShare[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataShare[".list"] = true;
}



$tdataShare[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataShare[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataShare[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataShare[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataShare[".printFriendly"] = true;
}



$tdataShare[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataShare[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataShare[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataShare[".isUseAjaxSuggest"] = true;



															

$tdataShare[".ajaxCodeSnippetAdded"] = false;

$tdataShare[".buttonsAdded"] = false;

$tdataShare[".addPageEvents"] = true;

// use timepicker for search panel
$tdataShare[".isUseTimeForSearch"] = false;


$tdataShare[".badgeColor"] = "5F9EA0";


$tdataShare[".allSearchFields"] = array();
$tdataShare[".filterFields"] = array();
$tdataShare[".requiredSearchFields"] = array();

$tdataShare[".googleLikeFields"] = array();
$tdataShare[".googleLikeFields"][] = "id";
$tdataShare[".googleLikeFields"][] = "file";
$tdataShare[".googleLikeFields"][] = "description";
$tdataShare[".googleLikeFields"][] = "hash";
$tdataShare[".googleLikeFields"][] = "parent_folder_id";
$tdataShare[".googleLikeFields"][] = "ownerid";
$tdataShare[".googleLikeFields"][] = "file_type";
$tdataShare[".googleLikeFields"][] = "name";
$tdataShare[".googleLikeFields"][] = "created";
$tdataShare[".googleLikeFields"][] = "share_type";
$tdataShare[".googleLikeFields"][] = "share_date";
$tdataShare[".googleLikeFields"][] = "share_ro";
$tdataShare[".googleLikeFields"][] = "share_users";
$tdataShare[".googleLikeFields"][] = "share_message";
$tdataShare[".googleLikeFields"][] = "share_sendto";
$tdataShare[".googleLikeFields"][] = "share_needDate";
$tdataShare[".googleLikeFields"][] = "share_startPoint";



$tdataShare[".tableType"] = "list";

$tdataShare[".printerPageOrientation"] = 0;
$tdataShare[".nPrinterPageScale"] = 100;

$tdataShare[".nPrinterSplitRecords"] = 40;

$tdataShare[".geocodingEnabled"] = false;










$tdataShare[".pageSize"] = 20;

$tdataShare[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_type DESC, name";
$tdataShare[".strOrderBy"] = $tstrOrderBy;

$tdataShare[".orderindexes"] = array();
	$tdataShare[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "file_type");

	$tdataShare[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "name");



$tdataShare[".sqlHead"] = "SELECT id,  `file`,  description,  hash,  parent_folder_id,  ownerid,  file_type,  name,  created,  share_type,  share_date,  share_ro,  share_users,  share_message,  share_sendto,  share_needDate,  share_startPoint";
$tdataShare[".sqlFrom"] = "FROM doc_files";
$tdataShare[".sqlWhereExpr"] = "";
$tdataShare[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataShare[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataShare[".arrGroupsPerPage"] = $arrGPP;

$tdataShare[".highlightSearchResults"] = true;

$tableKeysShare = array();
$tableKeysShare[] = "id";
$tdataShare[".Keys"] = $tableKeysShare;


$tdataShare[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","id");
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


	$tdataShare["id"] = $fdata;
		$tdataShare[".searchableFields"][] = "id";
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","file");
	$fdata["FieldType"] = 201;


	
	
										

		$fdata["strField"] = "file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`file`";

	
	
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


	$tdataShare["file"] = $fdata;
		$tdataShare[".searchableFields"][] = "file";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","description");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdataShare["description"] = $fdata;
		$tdataShare[".searchableFields"][] = "description";
//	hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hash";
	$fdata["GoodName"] = "hash";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","hash");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "hash";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hash";

	
	
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


	$tdataShare["hash"] = $fdata;
		$tdataShare[".searchableFields"][] = "hash";
//	parent_folder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parent_folder_id";
	$fdata["GoodName"] = "parent_folder_id";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","parent_folder_id");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "parent_folder_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent_folder_id";

	
	
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


	$tdataShare["parent_folder_id"] = $fdata;
		$tdataShare[".searchableFields"][] = "parent_folder_id";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","ownerid");
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


	$tdataShare["ownerid"] = $fdata;
		$tdataShare[".searchableFields"][] = "ownerid";
//	file_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "file_type";
	$fdata["GoodName"] = "file_type";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","file_type");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "file_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_type";

	
	
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


	$tdataShare["file_type"] = $fdata;
		$tdataShare[".searchableFields"][] = "file_type";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","name");
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


	$tdataShare["name"] = $fdata;
		$tdataShare[".searchableFields"][] = "name";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","created");
	$fdata["FieldType"] = 135;


	
	
										

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdataShare["created"] = $fdata;
		$tdataShare[".searchableFields"][] = "created";
//	share_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "share_type";
	$fdata["GoodName"] = "share_type";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_type");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "share_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_type";

	
	
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
	$edata["LookupTable"] = "share_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "share_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataShare["share_type"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_type";
//	share_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "share_date";
	$fdata["GoodName"] = "share_date";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_date");
	$fdata["FieldType"] = 7;


	
	
										

		$fdata["strField"] = "share_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_date";

	
	
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


	$tdataShare["share_date"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_date";
//	share_ro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "share_ro";
	$fdata["GoodName"] = "share_ro";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_ro");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_ro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_ro";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Read only";
	$edata["LookupValues"][] = "Read / Write";

	
	
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


	$tdataShare["share_ro"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_ro";
//	share_users
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "share_users";
	$fdata["GoodName"] = "share_users";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_users");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_users";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_users";

	
	
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
	$edata["LookupTable"] = "doc_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

				$edata["LookupWhere"] = ":session.user_id <> `id`";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdataShare["share_users"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_users";
//	share_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "share_message";
	$fdata["GoodName"] = "share_message";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_message");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_message";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_message";

	
	
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

	
	
	
				$edata["nRows"] = 120;
			$edata["nCols"] = 540;

	
	
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


	$tdataShare["share_message"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_message";
//	share_sendto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "share_sendto";
	$fdata["GoodName"] = "share_sendto";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_sendto");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_sendto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_sendto";

	
	
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


	$tdataShare["share_sendto"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_sendto";
//	share_needDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "share_needDate";
	$fdata["GoodName"] = "share_needDate";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_needDate");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "share_needDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_needDate";

	
	
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


	$tdataShare["share_needDate"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_needDate";
//	share_startPoint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "share_startPoint";
	$fdata["GoodName"] = "share_startPoint";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Share","share_startPoint");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_startPoint";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_startPoint";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdataShare["share_startPoint"] = $fdata;
		$tdataShare[".searchableFields"][] = "share_startPoint";


$tables_data["Share"]=&$tdataShare;
$field_labels["Share"] = &$fieldLabelsShare;
$fieldToolTips["Share"] = &$fieldToolTipsShare;
$placeHolders["Share"] = &$placeHoldersShare;
$page_titles["Share"] = &$pageTitlesShare;


changeTextControlsToDate( "Share" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Share"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Share"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_Share()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `file`,  description,  hash,  parent_folder_id,  ownerid,  file_type,  name,  created,  share_type,  share_date,  share_ro,  share_users,  share_message,  share_sendto,  share_needDate,  share_startPoint";
$proto0["m_strFrom"] = "FROM doc_files";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY file_type DESC, name";
	
					
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
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Share";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto8["m_sql"] = "`file`";
$proto8["m_srcTableName"] = "Share";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "Share";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hash",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto12["m_sql"] = "hash";
$proto12["m_srcTableName"] = "Share";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_folder_id",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto14["m_sql"] = "parent_folder_id";
$proto14["m_srcTableName"] = "Share";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto16["m_sql"] = "ownerid";
$proto16["m_srcTableName"] = "Share";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "file_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto18["m_sql"] = "file_type";
$proto18["m_srcTableName"] = "Share";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto20["m_sql"] = "name";
$proto20["m_srcTableName"] = "Share";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto22["m_sql"] = "created";
$proto22["m_srcTableName"] = "Share";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "share_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto24["m_sql"] = "share_type";
$proto24["m_srcTableName"] = "Share";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "share_date",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto26["m_sql"] = "share_date";
$proto26["m_srcTableName"] = "Share";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "share_ro",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto28["m_sql"] = "share_ro";
$proto28["m_srcTableName"] = "Share";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "share_users",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto30["m_sql"] = "share_users";
$proto30["m_srcTableName"] = "Share";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "share_message",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto32["m_sql"] = "share_message";
$proto32["m_srcTableName"] = "Share";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "share_sendto",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto34["m_sql"] = "share_sendto";
$proto34["m_srcTableName"] = "Share";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "share_needDate",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto36["m_sql"] = "share_needDate";
$proto36["m_srcTableName"] = "Share";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "share_startPoint",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto38["m_sql"] = "share_startPoint";
$proto38["m_srcTableName"] = "Share";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "doc_files";
$proto41["m_srcTableName"] = "Share";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "file";
$proto41["m_columns"][] = "description";
$proto41["m_columns"][] = "hash";
$proto41["m_columns"][] = "parent_folder_id";
$proto41["m_columns"][] = "ownerid";
$proto41["m_columns"][] = "file_type";
$proto41["m_columns"][] = "name";
$proto41["m_columns"][] = "created";
$proto41["m_columns"][] = "share_date";
$proto41["m_columns"][] = "share_ro";
$proto41["m_columns"][] = "share_type";
$proto41["m_columns"][] = "share_users";
$proto41["m_columns"][] = "share_message";
$proto41["m_columns"][] = "share_sendto";
$proto41["m_columns"][] = "share_needDate";
$proto41["m_columns"][] = "downloads";
$proto41["m_columns"][] = "share_startPoint";
$proto41["m_columns"][] = "thumb";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "doc_files";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Share";
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
	"m_strName" => "file_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Share"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 1;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Share";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Share = createSqlQuery_Share();


	
					
;

																	

$tdataShare[".sqlquery"] = $queryData_Share;



include_once(getabspath("include/Share_events.php"));
$tdataShare[".hasEvents"] = true;

?>