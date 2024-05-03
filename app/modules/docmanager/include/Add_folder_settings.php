<?php
$tdataAdd_folder = array();
$tdataAdd_folder[".searchableFields"] = array();
$tdataAdd_folder[".ShortName"] = "Add_folder";
$tdataAdd_folder[".OwnerID"] = "ownerid";
$tdataAdd_folder[".OriginalTable"] = "doc_files";


$tdataAdd_folder[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdataAdd_folder[".originalPagesByType"] = $tdataAdd_folder[".pagesByType"];
$tdataAdd_folder[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdataAdd_folder[".originalPages"] = $tdataAdd_folder[".pages"];
$tdataAdd_folder[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );
$tdataAdd_folder[".originalDefaultPages"] = $tdataAdd_folder[".defaultPages"];

//	field labels
$fieldLabelsAdd_folder = array();
$fieldToolTipsAdd_folder = array();
$pageTitlesAdd_folder = array();
$placeHoldersAdd_folder = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAdd_folder["English"] = array();
	$fieldToolTipsAdd_folder["English"] = array();
	$placeHoldersAdd_folder["English"] = array();
	$pageTitlesAdd_folder["English"] = array();
	$fieldLabelsAdd_folder["English"]["id"] = "Id";
	$fieldToolTipsAdd_folder["English"]["id"] = "";
	$placeHoldersAdd_folder["English"]["id"] = "";
	$fieldLabelsAdd_folder["English"]["file"] = "File";
	$fieldToolTipsAdd_folder["English"]["file"] = "";
	$placeHoldersAdd_folder["English"]["file"] = "";
	$fieldLabelsAdd_folder["English"]["description"] = "Description";
	$fieldToolTipsAdd_folder["English"]["description"] = "";
	$placeHoldersAdd_folder["English"]["description"] = "";
	$fieldLabelsAdd_folder["English"]["hash"] = "Hash";
	$fieldToolTipsAdd_folder["English"]["hash"] = "";
	$placeHoldersAdd_folder["English"]["hash"] = "";
	$fieldLabelsAdd_folder["English"]["parent_folder_id"] = "Parent Folder Id";
	$fieldToolTipsAdd_folder["English"]["parent_folder_id"] = "";
	$placeHoldersAdd_folder["English"]["parent_folder_id"] = "";
	$fieldLabelsAdd_folder["English"]["ownerid"] = "Ownerid";
	$fieldToolTipsAdd_folder["English"]["ownerid"] = "";
	$placeHoldersAdd_folder["English"]["ownerid"] = "";
	$fieldLabelsAdd_folder["English"]["file_type"] = "File Type";
	$fieldToolTipsAdd_folder["English"]["file_type"] = "";
	$placeHoldersAdd_folder["English"]["file_type"] = "";
	$fieldLabelsAdd_folder["English"]["name"] = "Name";
	$fieldToolTipsAdd_folder["English"]["name"] = "";
	$placeHoldersAdd_folder["English"]["name"] = "";
	$fieldLabelsAdd_folder["English"]["created"] = "Created";
	$fieldToolTipsAdd_folder["English"]["created"] = "";
	$placeHoldersAdd_folder["English"]["created"] = "";
	$fieldLabelsAdd_folder["English"]["share_ro"] = "Share Ro";
	$fieldToolTipsAdd_folder["English"]["share_ro"] = "";
	$placeHoldersAdd_folder["English"]["share_ro"] = "";
	$fieldLabelsAdd_folder["English"]["share_type"] = "Share Type";
	$fieldToolTipsAdd_folder["English"]["share_type"] = "";
	$placeHoldersAdd_folder["English"]["share_type"] = "";
	$fieldLabelsAdd_folder["English"]["share_users"] = "Share Users";
	$fieldToolTipsAdd_folder["English"]["share_users"] = "";
	$placeHoldersAdd_folder["English"]["share_users"] = "";
	if (count($fieldToolTipsAdd_folder["English"]))
		$tdataAdd_folder[".isUseToolTips"] = true;
}


	$tdataAdd_folder[".NCSearch"] = true;



$tdataAdd_folder[".shortTableName"] = "Add_folder";
$tdataAdd_folder[".nSecOptions"] = 1;

$tdataAdd_folder[".mainTableOwnerID"] = "ownerid";
$tdataAdd_folder[".entityType"] = 1;
$tdataAdd_folder[".connId"] = "project_at_localhost";


$tdataAdd_folder[".strOriginalTableName"] = "doc_files";

		 



$tdataAdd_folder[".showAddInPopup"] = false;

$tdataAdd_folder[".showEditInPopup"] = false;

$tdataAdd_folder[".showViewInPopup"] = false;

$tdataAdd_folder[".listAjax"] = false;
//	temporary
//$tdataAdd_folder[".listAjax"] = false;

	$tdataAdd_folder[".audit"] = false;

	$tdataAdd_folder[".locking"] = false;


$pages = $tdataAdd_folder[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataAdd_folder[".edit"] = true;
	$tdataAdd_folder[".afterEditAction"] = 1;
	$tdataAdd_folder[".closePopupAfterEdit"] = 1;
	$tdataAdd_folder[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataAdd_folder[".add"] = true;
$tdataAdd_folder[".afterAddAction"] = 1;
$tdataAdd_folder[".closePopupAfterAdd"] = 1;
$tdataAdd_folder[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataAdd_folder[".list"] = true;
}



$tdataAdd_folder[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataAdd_folder[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataAdd_folder[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataAdd_folder[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataAdd_folder[".printFriendly"] = true;
}



$tdataAdd_folder[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataAdd_folder[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataAdd_folder[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataAdd_folder[".isUseAjaxSuggest"] = true;



															

$tdataAdd_folder[".ajaxCodeSnippetAdded"] = false;

$tdataAdd_folder[".buttonsAdded"] = false;

$tdataAdd_folder[".addPageEvents"] = true;

// use timepicker for search panel
$tdataAdd_folder[".isUseTimeForSearch"] = false;


$tdataAdd_folder[".badgeColor"] = "CFAE83";


$tdataAdd_folder[".allSearchFields"] = array();
$tdataAdd_folder[".filterFields"] = array();
$tdataAdd_folder[".requiredSearchFields"] = array();

$tdataAdd_folder[".googleLikeFields"] = array();
$tdataAdd_folder[".googleLikeFields"][] = "id";
$tdataAdd_folder[".googleLikeFields"][] = "file";
$tdataAdd_folder[".googleLikeFields"][] = "description";
$tdataAdd_folder[".googleLikeFields"][] = "hash";
$tdataAdd_folder[".googleLikeFields"][] = "parent_folder_id";
$tdataAdd_folder[".googleLikeFields"][] = "ownerid";
$tdataAdd_folder[".googleLikeFields"][] = "file_type";
$tdataAdd_folder[".googleLikeFields"][] = "name";
$tdataAdd_folder[".googleLikeFields"][] = "created";
$tdataAdd_folder[".googleLikeFields"][] = "share_ro";
$tdataAdd_folder[".googleLikeFields"][] = "share_type";
$tdataAdd_folder[".googleLikeFields"][] = "share_users";



$tdataAdd_folder[".tableType"] = "list";

$tdataAdd_folder[".printerPageOrientation"] = 0;
$tdataAdd_folder[".nPrinterPageScale"] = 100;

$tdataAdd_folder[".nPrinterSplitRecords"] = 40;

$tdataAdd_folder[".geocodingEnabled"] = false;










$tdataAdd_folder[".pageSize"] = 20;

$tdataAdd_folder[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_type DESC, name";
$tdataAdd_folder[".strOrderBy"] = $tstrOrderBy;

$tdataAdd_folder[".orderindexes"] = array();
	$tdataAdd_folder[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "file_type");

	$tdataAdd_folder[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "name");



$tdataAdd_folder[".sqlHead"] = "SELECT id,  `file`,  description,  hash,  parent_folder_id,  ownerid,  file_type,  name,  created,  share_ro,  share_type,  share_users";
$tdataAdd_folder[".sqlFrom"] = "FROM doc_files";
$tdataAdd_folder[".sqlWhereExpr"] = "";
$tdataAdd_folder[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAdd_folder[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAdd_folder[".arrGroupsPerPage"] = $arrGPP;

$tdataAdd_folder[".highlightSearchResults"] = true;

$tableKeysAdd_folder = array();
$tableKeysAdd_folder[] = "id";
$tdataAdd_folder[".Keys"] = $tableKeysAdd_folder;


$tdataAdd_folder[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","id");
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


	$tdataAdd_folder["id"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "id";
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","file");
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


	$tdataAdd_folder["file"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "file";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","description");
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


	$tdataAdd_folder["description"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "description";
//	hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hash";
	$fdata["GoodName"] = "hash";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","hash");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "hash";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hash";

	
	
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


	$tdataAdd_folder["hash"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "hash";
//	parent_folder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parent_folder_id";
	$fdata["GoodName"] = "parent_folder_id";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","parent_folder_id");
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


	$tdataAdd_folder["parent_folder_id"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "parent_folder_id";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","ownerid");
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


	$tdataAdd_folder["ownerid"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "ownerid";
//	file_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "file_type";
	$fdata["GoodName"] = "file_type";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","file_type");
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


	$tdataAdd_folder["file_type"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "file_type";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","name");
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


	$tdataAdd_folder["name"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "name";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","created");
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


	$tdataAdd_folder["created"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "created";
//	share_ro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "share_ro";
	$fdata["GoodName"] = "share_ro";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","share_ro");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "share_ro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "share_ro";

	
	
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


	$tdataAdd_folder["share_ro"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "share_ro";
//	share_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "share_type";
	$fdata["GoodName"] = "share_type";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","share_type");
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


	$tdataAdd_folder["share_type"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "share_type";
//	share_users
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "share_users";
	$fdata["GoodName"] = "share_users";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("Add_folder","share_users");
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


	$tdataAdd_folder["share_users"] = $fdata;
		$tdataAdd_folder[".searchableFields"][] = "share_users";


$tables_data["Add folder"]=&$tdataAdd_folder;
$field_labels["Add_folder"] = &$fieldLabelsAdd_folder;
$fieldToolTips["Add_folder"] = &$fieldToolTipsAdd_folder;
$placeHolders["Add_folder"] = &$placeHoldersAdd_folder;
$page_titles["Add_folder"] = &$pageTitlesAdd_folder;


changeTextControlsToDate( "Add folder" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Add folder"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Add folder"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_Add_folder()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `file`,  description,  hash,  parent_folder_id,  ownerid,  file_type,  name,  created,  share_ro,  share_type,  share_users";
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
	"m_srcTableName" => "Add folder"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Add folder";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto8["m_sql"] = "`file`";
$proto8["m_srcTableName"] = "Add folder";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "Add folder";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hash",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto12["m_sql"] = "hash";
$proto12["m_srcTableName"] = "Add folder";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_folder_id",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto14["m_sql"] = "parent_folder_id";
$proto14["m_srcTableName"] = "Add folder";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto16["m_sql"] = "ownerid";
$proto16["m_srcTableName"] = "Add folder";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "file_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto18["m_sql"] = "file_type";
$proto18["m_srcTableName"] = "Add folder";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto20["m_sql"] = "name";
$proto20["m_srcTableName"] = "Add folder";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto22["m_sql"] = "created";
$proto22["m_srcTableName"] = "Add folder";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "share_ro",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto24["m_sql"] = "share_ro";
$proto24["m_srcTableName"] = "Add folder";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "share_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto26["m_sql"] = "share_type";
$proto26["m_srcTableName"] = "Add folder";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "share_users",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto28["m_sql"] = "share_users";
$proto28["m_srcTableName"] = "Add folder";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "doc_files";
$proto31["m_srcTableName"] = "Add folder";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "file";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "hash";
$proto31["m_columns"][] = "parent_folder_id";
$proto31["m_columns"][] = "ownerid";
$proto31["m_columns"][] = "file_type";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "created";
$proto31["m_columns"][] = "share_date";
$proto31["m_columns"][] = "share_ro";
$proto31["m_columns"][] = "share_type";
$proto31["m_columns"][] = "share_users";
$proto31["m_columns"][] = "share_message";
$proto31["m_columns"][] = "share_sendto";
$proto31["m_columns"][] = "share_needDate";
$proto31["m_columns"][] = "downloads";
$proto31["m_columns"][] = "share_startPoint";
$proto31["m_columns"][] = "thumb";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "doc_files";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "Add folder";
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
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "file_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "Add folder"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Add folder";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Add_folder = createSqlQuery_Add_folder();


	
					
;

												

$tdataAdd_folder[".sqlquery"] = $queryData_Add_folder;



include_once(getabspath("include/Add_folder_events.php"));
$tdataAdd_folder[".hasEvents"] = true;

?>