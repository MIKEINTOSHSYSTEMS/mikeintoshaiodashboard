<?php
$tdatadoc_files = array();
$tdatadoc_files[".searchableFields"] = array();
$tdatadoc_files[".ShortName"] = "doc_files";
$tdatadoc_files[".OwnerID"] = "";
$tdatadoc_files[".OriginalTable"] = "doc_files";


$tdatadoc_files[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadoc_files[".originalPagesByType"] = $tdatadoc_files[".pagesByType"];
$tdatadoc_files[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadoc_files[".originalPages"] = $tdatadoc_files[".pages"];
$tdatadoc_files[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatadoc_files[".originalDefaultPages"] = $tdatadoc_files[".defaultPages"];

//	field labels
$fieldLabelsdoc_files = array();
$fieldToolTipsdoc_files = array();
$pageTitlesdoc_files = array();
$placeHoldersdoc_files = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdoc_files["English"] = array();
	$fieldToolTipsdoc_files["English"] = array();
	$placeHoldersdoc_files["English"] = array();
	$pageTitlesdoc_files["English"] = array();
	$fieldLabelsdoc_files["English"]["id"] = "Id";
	$fieldToolTipsdoc_files["English"]["id"] = "";
	$placeHoldersdoc_files["English"]["id"] = "";
	$fieldLabelsdoc_files["English"]["file"] = "File";
	$fieldToolTipsdoc_files["English"]["file"] = "";
	$placeHoldersdoc_files["English"]["file"] = "";
	$fieldLabelsdoc_files["English"]["description"] = "Description";
	$fieldToolTipsdoc_files["English"]["description"] = "";
	$placeHoldersdoc_files["English"]["description"] = "";
	$fieldLabelsdoc_files["English"]["hash"] = "Hash";
	$fieldToolTipsdoc_files["English"]["hash"] = "";
	$placeHoldersdoc_files["English"]["hash"] = "";
	$fieldLabelsdoc_files["English"]["parent_folder_id"] = "Parent Folder Id";
	$fieldToolTipsdoc_files["English"]["parent_folder_id"] = "";
	$placeHoldersdoc_files["English"]["parent_folder_id"] = "";
	$fieldLabelsdoc_files["English"]["ownerid"] = "Ownerid";
	$fieldToolTipsdoc_files["English"]["ownerid"] = "";
	$placeHoldersdoc_files["English"]["ownerid"] = "";
	$fieldLabelsdoc_files["English"]["file_type"] = "File Type";
	$fieldToolTipsdoc_files["English"]["file_type"] = "";
	$placeHoldersdoc_files["English"]["file_type"] = "";
	$fieldLabelsdoc_files["English"]["name"] = "Name";
	$fieldToolTipsdoc_files["English"]["name"] = "";
	$placeHoldersdoc_files["English"]["name"] = "";
	$fieldLabelsdoc_files["English"]["created"] = "Created";
	$fieldToolTipsdoc_files["English"]["created"] = "";
	$placeHoldersdoc_files["English"]["created"] = "";
	$fieldLabelsdoc_files["English"]["share_ro"] = "Share Ro";
	$fieldToolTipsdoc_files["English"]["share_ro"] = "";
	$placeHoldersdoc_files["English"]["share_ro"] = "";
	$fieldLabelsdoc_files["English"]["share_type"] = "Share Type";
	$fieldToolTipsdoc_files["English"]["share_type"] = "";
	$placeHoldersdoc_files["English"]["share_type"] = "";
	$fieldLabelsdoc_files["English"]["share_users"] = "Share Users";
	$fieldToolTipsdoc_files["English"]["share_users"] = "";
	$placeHoldersdoc_files["English"]["share_users"] = "";
	$fieldLabelsdoc_files["English"]["downloads"] = "Downloads";
	$fieldToolTipsdoc_files["English"]["downloads"] = "";
	$placeHoldersdoc_files["English"]["downloads"] = "";
	$fieldLabelsdoc_files["English"]["thumb"] = "Thumb";
	$fieldToolTipsdoc_files["English"]["thumb"] = "";
	$placeHoldersdoc_files["English"]["thumb"] = "";
	if (count($fieldToolTipsdoc_files["English"]))
		$tdatadoc_files[".isUseToolTips"] = true;
}


	$tdatadoc_files[".NCSearch"] = true;



$tdatadoc_files[".shortTableName"] = "doc_files";
$tdatadoc_files[".nSecOptions"] = 0;

$tdatadoc_files[".mainTableOwnerID"] = "";
$tdatadoc_files[".entityType"] = 0;
$tdatadoc_files[".connId"] = "project_at_localhost";


$tdatadoc_files[".strOriginalTableName"] = "doc_files";

		 



$tdatadoc_files[".showAddInPopup"] = false;

$tdatadoc_files[".showEditInPopup"] = false;

$tdatadoc_files[".showViewInPopup"] = false;

$tdatadoc_files[".listAjax"] = false;
//	temporary
//$tdatadoc_files[".listAjax"] = false;

	$tdatadoc_files[".audit"] = false;

	$tdatadoc_files[".locking"] = false;


$pages = $tdatadoc_files[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadoc_files[".edit"] = true;
	$tdatadoc_files[".afterEditAction"] = 1;
	$tdatadoc_files[".closePopupAfterEdit"] = 1;
	$tdatadoc_files[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadoc_files[".add"] = true;
$tdatadoc_files[".afterAddAction"] = 1;
$tdatadoc_files[".closePopupAfterAdd"] = 1;
$tdatadoc_files[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadoc_files[".list"] = true;
}



$tdatadoc_files[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadoc_files[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadoc_files[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadoc_files[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadoc_files[".printFriendly"] = true;
}



$tdatadoc_files[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadoc_files[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadoc_files[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadoc_files[".isUseAjaxSuggest"] = true;



															

$tdatadoc_files[".ajaxCodeSnippetAdded"] = false;

$tdatadoc_files[".buttonsAdded"] = false;

$tdatadoc_files[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadoc_files[".isUseTimeForSearch"] = false;


$tdatadoc_files[".badgeColor"] = "4169E1";


$tdatadoc_files[".allSearchFields"] = array();
$tdatadoc_files[".filterFields"] = array();
$tdatadoc_files[".requiredSearchFields"] = array();

$tdatadoc_files[".googleLikeFields"] = array();
$tdatadoc_files[".googleLikeFields"][] = "id";
$tdatadoc_files[".googleLikeFields"][] = "file";
$tdatadoc_files[".googleLikeFields"][] = "description";
$tdatadoc_files[".googleLikeFields"][] = "hash";
$tdatadoc_files[".googleLikeFields"][] = "parent_folder_id";
$tdatadoc_files[".googleLikeFields"][] = "ownerid";
$tdatadoc_files[".googleLikeFields"][] = "file_type";
$tdatadoc_files[".googleLikeFields"][] = "name";
$tdatadoc_files[".googleLikeFields"][] = "created";
$tdatadoc_files[".googleLikeFields"][] = "share_type";
$tdatadoc_files[".googleLikeFields"][] = "share_users";
$tdatadoc_files[".googleLikeFields"][] = "share_ro";
$tdatadoc_files[".googleLikeFields"][] = "downloads";
$tdatadoc_files[".googleLikeFields"][] = "thumb";



$tdatadoc_files[".tableType"] = "list";

$tdatadoc_files[".printerPageOrientation"] = 0;
$tdatadoc_files[".nPrinterPageScale"] = 100;

$tdatadoc_files[".nPrinterSplitRecords"] = 40;

$tdatadoc_files[".geocodingEnabled"] = false;










$tdatadoc_files[".pageSize"] = 1000;

$tdatadoc_files[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY file_type DESC, name";
$tdatadoc_files[".strOrderBy"] = $tstrOrderBy;

$tdatadoc_files[".orderindexes"] = array();
	$tdatadoc_files[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "file_type");

	$tdatadoc_files[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "name");



$tdatadoc_files[".sqlHead"] = "SELECT id,  `file`,  description,  hash,  parent_folder_id,  ownerid,  file_type,  name,  created,  share_type,  share_users,  share_ro,  downloads,  thumb";
$tdatadoc_files[".sqlFrom"] = "FROM doc_files";
$tdatadoc_files[".sqlWhereExpr"] = "";
$tdatadoc_files[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadoc_files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadoc_files[".arrGroupsPerPage"] = $arrGPP;

$tdatadoc_files[".highlightSearchResults"] = true;

$tableKeysdoc_files = array();
$tableKeysdoc_files[] = "id";
$tdatadoc_files[".Keys"] = $tableKeysdoc_files;


$tdatadoc_files[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","id");
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


	$tdatadoc_files["id"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "id";
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","file");
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


	$tdatadoc_files["file"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "file";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","description");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatadoc_files["description"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "description";
//	hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hash";
	$fdata["GoodName"] = "hash";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","hash");
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


	$tdatadoc_files["hash"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "hash";
//	parent_folder_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parent_folder_id";
	$fdata["GoodName"] = "parent_folder_id";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","parent_folder_id");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "parent_folder_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent_folder_id";

	
	
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


	$tdatadoc_files["parent_folder_id"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "parent_folder_id";
//	ownerid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ownerid";
	$fdata["GoodName"] = "ownerid";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","ownerid");
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


	$tdatadoc_files["ownerid"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "ownerid";
//	file_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "file_type";
	$fdata["GoodName"] = "file_type";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","file_type");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "file_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_type";

	
	
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


	$tdatadoc_files["file_type"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "file_type";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","name");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatadoc_files["name"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "name";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","created");
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


	$tdatadoc_files["created"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "created";
//	share_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "share_type";
	$fdata["GoodName"] = "share_type";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","share_type");
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


	$tdatadoc_files["share_type"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "share_type";
//	share_users
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "share_users";
	$fdata["GoodName"] = "share_users";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","share_users");
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


	$tdatadoc_files["share_users"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "share_users";
//	share_ro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "share_ro";
	$fdata["GoodName"] = "share_ro";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","share_ro");
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


	$tdatadoc_files["share_ro"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "share_ro";
//	downloads
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "downloads";
	$fdata["GoodName"] = "downloads";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","downloads");
	$fdata["FieldType"] = 3;


	
	
										

		$fdata["strField"] = "downloads";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "downloads";

	
	
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


	$tdatadoc_files["downloads"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "downloads";
//	thumb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "thumb";
	$fdata["GoodName"] = "thumb";
	$fdata["ownerTable"] = "doc_files";
	$fdata["Label"] = GetFieldLabel("doc_files","thumb");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "thumb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "thumb";

	
	
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


	$tdatadoc_files["thumb"] = $fdata;
		$tdatadoc_files[".searchableFields"][] = "thumb";


$tables_data["doc_files"]=&$tdatadoc_files;
$field_labels["doc_files"] = &$fieldLabelsdoc_files;
$fieldToolTips["doc_files"] = &$fieldToolTipsdoc_files;
$placeHolders["doc_files"] = &$placeHoldersdoc_files;
$page_titles["doc_files"] = &$pageTitlesdoc_files;


changeTextControlsToDate( "doc_files" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["doc_files"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["doc_files"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_doc_files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `file`,  description,  hash,  parent_folder_id,  ownerid,  file_type,  name,  created,  share_type,  share_users,  share_ro,  downloads,  thumb";
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
	"m_srcTableName" => "doc_files"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "doc_files";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto8["m_sql"] = "`file`";
$proto8["m_srcTableName"] = "doc_files";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "doc_files";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hash",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto12["m_sql"] = "hash";
$proto12["m_srcTableName"] = "doc_files";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_folder_id",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto14["m_sql"] = "parent_folder_id";
$proto14["m_srcTableName"] = "doc_files";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ownerid",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto16["m_sql"] = "ownerid";
$proto16["m_srcTableName"] = "doc_files";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "file_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto18["m_sql"] = "file_type";
$proto18["m_srcTableName"] = "doc_files";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto20["m_sql"] = "name";
$proto20["m_srcTableName"] = "doc_files";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto22["m_sql"] = "created";
$proto22["m_srcTableName"] = "doc_files";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "share_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto24["m_sql"] = "share_type";
$proto24["m_srcTableName"] = "doc_files";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "share_users",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto26["m_sql"] = "share_users";
$proto26["m_srcTableName"] = "doc_files";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "share_ro",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto28["m_sql"] = "share_ro";
$proto28["m_srcTableName"] = "doc_files";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "downloads",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto30["m_sql"] = "downloads";
$proto30["m_srcTableName"] = "doc_files";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "thumb",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto32["m_sql"] = "thumb";
$proto32["m_srcTableName"] = "doc_files";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "doc_files";
$proto35["m_srcTableName"] = "doc_files";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "file";
$proto35["m_columns"][] = "description";
$proto35["m_columns"][] = "hash";
$proto35["m_columns"][] = "parent_folder_id";
$proto35["m_columns"][] = "ownerid";
$proto35["m_columns"][] = "file_type";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "created";
$proto35["m_columns"][] = "share_date";
$proto35["m_columns"][] = "share_ro";
$proto35["m_columns"][] = "share_type";
$proto35["m_columns"][] = "share_users";
$proto35["m_columns"][] = "share_message";
$proto35["m_columns"][] = "share_sendto";
$proto35["m_columns"][] = "share_needDate";
$proto35["m_columns"][] = "downloads";
$proto35["m_columns"][] = "share_startPoint";
$proto35["m_columns"][] = "thumb";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "doc_files";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "doc_files";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "file_type",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_files",
	"m_srcTableName" => "doc_files"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 1;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="doc_files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_doc_files = createSqlQuery_doc_files();


	
					
;

														

$tdatadoc_files[".sqlquery"] = $queryData_doc_files;



include_once(getabspath("include/doc_files_events.php"));
$tdatadoc_files[".hasEvents"] = true;

$query = &$queryData_doc_files;
$table = "doc_files";
// here goes EVENT_INIT_TABLE event
if(!$_SESSION["user_id"] && !postvalue("hash") && !$_SESSION["hash"] && postvalue("a")!="delete"){
	header("Location: login.php");
	die();
}
	

if(postvalue("a")!="delete"){
	$_SESSION["countRecord"] = 0;
	if(postvalue("qs") || postvalue("q")){
		$url = GetFullSiteUrl();
		$p = strpos($url,"?");
		$_SESSION["searchDelete"] = substr($url,$p);
	}
	else{
		$_SESSION["searchDelete"] = "";
	}
}

//if ( ($_GET["qs"] == "" && !$_SESSION["searching"] || $_GET["a"] == "showall")) 
//{

	if ($_SESSION["single_file"])
		$query->addWhere(addFieldWrappers("hash")."='".$_SESSION["hash"]."'");
	else{
		$res = "";
		if(!$_SESSION["searchDelete"]){
			if($_SESSION["current_folder"]==0){
				$res="(".addFieldWrappers("parent_folder_id")."=0";
				if($_SESSION["user_type"]!="admin")
					$res.=" or ".getStartPoint();
				$res.=")";
			}
			else 
				$res=addFieldWrappers("parent_folder_id")."=".$_SESSION["current_folder"];
		}
		else
			$res="1=1";
		if( $_SESSION["user_type"]!="admin" && Security::getUserName() != "Guest" && strlen(Security::getUserName())>0 && getFileNameFromURL()=="doc_files_list.php"){
			$res.= " and (".getSharingWhere()." or ".addFieldWrappers("ownerid")." = ".$_SESSION["user_id"];
			if($_SESSION["hash"])
				$res.=" or ".addFieldWrappers("share_type")."=3";
			$res.=")";
		}
		if(Security::getUserName() == "Guest" && getFileNameFromURL()=="doc_files_list.php" && $_SESSION["user_type"]!="admin")
			$res.=" and ".addFieldWrappers("share_type")."=3";
		$query->addWhere($res);
	}
//}


$ownerID = "";

if(!$_SESSION["searchDelete"]){
	if( $_SESSION["user_type"]!="admin" && count($_SESSION["path_folder"]) )
	{
			if( strlen($ownerID) )
				$ownerID .= " or ";
			$ownerID .= addFieldWrappers("parent_folder_id") . " in (" . implode("," , $_SESSION["path_folder"]) . ")";
			$ownerID .= " or ";
			$ownerID .= addFieldWrappers("id") . " in (" . implode("," , $_SESSION["path_folder"]) . ")";
	}
	if( $_SESSION["user_type"]!="admin" && count($_SESSION["path_file"]) )
	{
		if( strlen($ownerID) )
			$ownerID .= " or ";
		$ownerID .= addFieldWrappers("id") . " in (" . implode("," , $_SESSION["path_file"]) . ")";
	}
}

if($_SESSION["current_folder"]==0 && $_SESSION["user_type"]!="admin" && Security::getUserName() != "Guest" && strlen(Security::getUserName())>0){
	if($ownerID)
		$ownerID = "(".$ownerID.") or ".getSharingWhere();
}

$query->addWhere($ownerID);
;
unset($query);
?>