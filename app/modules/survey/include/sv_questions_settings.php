<?php
$tdatasv_questions = array();
$tdatasv_questions[".searchableFields"] = array();
$tdatasv_questions[".ShortName"] = "sv_questions";
$tdatasv_questions[".OwnerID"] = "";
$tdatasv_questions[".OriginalTable"] = "sv_questions";


$tdatasv_questions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasv_questions[".originalPagesByType"] = $tdatasv_questions[".pagesByType"];
$tdatasv_questions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasv_questions[".originalPages"] = $tdatasv_questions[".pages"];
$tdatasv_questions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasv_questions[".originalDefaultPages"] = $tdatasv_questions[".defaultPages"];

//	field labels
$fieldLabelssv_questions = array();
$fieldToolTipssv_questions = array();
$pageTitlessv_questions = array();
$placeHolderssv_questions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_questions["English"] = array();
	$fieldToolTipssv_questions["English"] = array();
	$placeHolderssv_questions["English"] = array();
	$pageTitlessv_questions["English"] = array();
	$fieldLabelssv_questions["English"]["id"] = "ID";
	$fieldToolTipssv_questions["English"]["id"] = "";
	$placeHolderssv_questions["English"]["id"] = "";
	$fieldLabelssv_questions["English"]["parent_id"] = "Parent ID";
	$fieldToolTipssv_questions["English"]["parent_id"] = "";
	$placeHolderssv_questions["English"]["parent_id"] = "";
	$fieldLabelssv_questions["English"]["sid"] = "Sid";
	$fieldToolTipssv_questions["English"]["sid"] = "";
	$placeHolderssv_questions["English"]["sid"] = "";
	$fieldLabelssv_questions["English"]["group_id"] = "Group";
	$fieldToolTipssv_questions["English"]["group_id"] = "";
	$placeHolderssv_questions["English"]["group_id"] = "";
	$fieldLabelssv_questions["English"]["type"] = "Type";
	$fieldToolTipssv_questions["English"]["type"] = "";
	$placeHolderssv_questions["English"]["type"] = "";
	$fieldLabelssv_questions["English"]["question"] = "Question";
	$fieldToolTipssv_questions["English"]["question"] = "";
	$placeHolderssv_questions["English"]["question"] = "";
	$fieldLabelssv_questions["English"]["help_orientation"] = "Help Orientation";
	$fieldToolTipssv_questions["English"]["help_orientation"] = "";
	$placeHolderssv_questions["English"]["help_orientation"] = "";
	$fieldLabelssv_questions["English"]["regex"] = "Validation (regex)";
	$fieldToolTipssv_questions["English"]["regex"] = "";
	$placeHolderssv_questions["English"]["regex"] = "";
	$fieldLabelssv_questions["English"]["required"] = "Required";
	$fieldToolTipssv_questions["English"]["required"] = "";
	$placeHolderssv_questions["English"]["required"] = "";
	$fieldLabelssv_questions["English"]["help"] = "Long description";
	$fieldToolTipssv_questions["English"]["help"] = "";
	$placeHolderssv_questions["English"]["help"] = "";
	$fieldLabelssv_questions["English"]["sortorder"] = "Sort Order";
	$fieldToolTipssv_questions["English"]["sortorder"] = "";
	$placeHolderssv_questions["English"]["sortorder"] = "";
	$fieldLabelssv_questions["English"]["other"] = "Option 'Other'";
	$fieldToolTipssv_questions["English"]["other"] = "";
	$placeHolderssv_questions["English"]["other"] = "";
	$fieldLabelssv_questions["English"]["int_only"] = "Integer Only";
	$fieldToolTipssv_questions["English"]["int_only"] = "";
	$placeHolderssv_questions["English"]["int_only"] = "";
	$fieldLabelssv_questions["English"]["max_length"] = "Max Length";
	$fieldToolTipssv_questions["English"]["max_length"] = "";
	$placeHolderssv_questions["English"]["max_length"] = "";
	$fieldLabelssv_questions["English"]["file_extensions"] = "Allowed File Extensions";
	$fieldToolTipssv_questions["English"]["file_extensions"] = "";
	$placeHolderssv_questions["English"]["file_extensions"] = "";
	$fieldLabelssv_questions["English"]["max_num_of_files"] = "Maximum Num of Files";
	$fieldToolTipssv_questions["English"]["max_num_of_files"] = "";
	$placeHolderssv_questions["English"]["max_num_of_files"] = "";
	$fieldLabelssv_questions["English"]["max_file_size"] = "Maximum File Size (in KB)";
	$fieldToolTipssv_questions["English"]["max_file_size"] = "";
	$placeHolderssv_questions["English"]["max_file_size"] = "";
	$fieldLabelssv_questions["English"]["groupname"] = "Group Name";
	$fieldToolTipssv_questions["English"]["groupname"] = "";
	$placeHolderssv_questions["English"]["groupname"] = "";
	$fieldLabelssv_questions["English"]["sv_groups_sortorder"] = "Sort Order";
	$fieldToolTipssv_questions["English"]["sv_groups_sortorder"] = "";
	$placeHolderssv_questions["English"]["sv_groups_sortorder"] = "";
	$fieldLabelssv_questions["English"]["grouptext"] = "Grouptext";
	$fieldToolTipssv_questions["English"]["grouptext"] = "";
	$placeHolderssv_questions["English"]["grouptext"] = "";
	if (count($fieldToolTipssv_questions["English"]))
		$tdatasv_questions[".isUseToolTips"] = true;
}


	$tdatasv_questions[".NCSearch"] = true;



$tdatasv_questions[".shortTableName"] = "sv_questions";
$tdatasv_questions[".nSecOptions"] = 0;

$tdatasv_questions[".mainTableOwnerID"] = "";
$tdatasv_questions[".entityType"] = 1;
$tdatasv_questions[".connId"] = "project_at_localhost";


$tdatasv_questions[".strOriginalTableName"] = "sv_questions";

	



$tdatasv_questions[".showAddInPopup"] = false;

$tdatasv_questions[".showEditInPopup"] = false;

$tdatasv_questions[".showViewInPopup"] = true;

$tdatasv_questions[".listAjax"] = false;
//	temporary
//$tdatasv_questions[".listAjax"] = false;

	$tdatasv_questions[".audit"] = false;

	$tdatasv_questions[".locking"] = false;


$pages = $tdatasv_questions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_questions[".edit"] = true;
	$tdatasv_questions[".afterEditAction"] = 1;
	$tdatasv_questions[".closePopupAfterEdit"] = 1;
	$tdatasv_questions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_questions[".add"] = true;
$tdatasv_questions[".afterAddAction"] = 1;
$tdatasv_questions[".closePopupAfterAdd"] = 1;
$tdatasv_questions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_questions[".list"] = true;
}

$tdatasv_questions[".updateSelected"] = true;


$tdatasv_questions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_questions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_questions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_questions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_questions[".printFriendly"] = true;
}



$tdatasv_questions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_questions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_questions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_questions[".isUseAjaxSuggest"] = true;



																																				

$tdatasv_questions[".ajaxCodeSnippetAdded"] = false;

$tdatasv_questions[".buttonsAdded"] = false;

$tdatasv_questions[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasv_questions[".isUseTimeForSearch"] = false;


$tdatasv_questions[".badgeColor"] = "DB7093";


$tdatasv_questions[".allSearchFields"] = array();
$tdatasv_questions[".filterFields"] = array();
$tdatasv_questions[".requiredSearchFields"] = array();

$tdatasv_questions[".googleLikeFields"] = array();
$tdatasv_questions[".googleLikeFields"][] = "id";
$tdatasv_questions[".googleLikeFields"][] = "parent_id";
$tdatasv_questions[".googleLikeFields"][] = "sid";
$tdatasv_questions[".googleLikeFields"][] = "group_id";
$tdatasv_questions[".googleLikeFields"][] = "type";
$tdatasv_questions[".googleLikeFields"][] = "question";
$tdatasv_questions[".googleLikeFields"][] = "regex";
$tdatasv_questions[".googleLikeFields"][] = "required";
$tdatasv_questions[".googleLikeFields"][] = "help";
$tdatasv_questions[".googleLikeFields"][] = "sortorder";
$tdatasv_questions[".googleLikeFields"][] = "other";
$tdatasv_questions[".googleLikeFields"][] = "int_only";
$tdatasv_questions[".googleLikeFields"][] = "max_length";
$tdatasv_questions[".googleLikeFields"][] = "file_extensions";
$tdatasv_questions[".googleLikeFields"][] = "max_num_of_files";
$tdatasv_questions[".googleLikeFields"][] = "max_file_size";
$tdatasv_questions[".googleLikeFields"][] = "groupname";
$tdatasv_questions[".googleLikeFields"][] = "sv_groups_sortorder";
$tdatasv_questions[".googleLikeFields"][] = "help_orientation";
$tdatasv_questions[".googleLikeFields"][] = "grouptext";



$tdatasv_questions[".tableType"] = "list";

$tdatasv_questions[".printerPageOrientation"] = 0;
$tdatasv_questions[".nPrinterPageScale"] = 100;

$tdatasv_questions[".nPrinterSplitRecords"] = 40;

$tdatasv_questions[".geocodingEnabled"] = false;










$tdatasv_questions[".pageSize"] = 20;

$tdatasv_questions[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sv_groups.sortorder, sv_questions.sortorder, sv_questions.id";
$tdatasv_questions[".strOrderBy"] = $tstrOrderBy;

$tdatasv_questions[".orderindexes"] = array();
	$tdatasv_questions[".orderindexes"][] = array(18, (1 ? "ASC" : "DESC"), "sv_groups.sortorder");

	$tdatasv_questions[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "sv_questions.sortorder");

	$tdatasv_questions[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "sv_questions.id");



$tdatasv_questions[".sqlHead"] = "SELECT sv_questions.id,  sv_questions.parent_id,  sv_questions.sid,  sv_questions.group_id,  sv_questions.`type`,  sv_questions.question,  sv_questions.regex,  sv_questions.required,  sv_questions.help,  sv_questions.sortorder,  sv_questions.other,  sv_questions.int_only,  sv_questions.max_length,  sv_questions.file_extensions,  sv_questions.max_num_of_files,  sv_questions.max_file_size,  sv_groups.name AS groupname,  sv_groups.sortorder AS sv_groups_sortorder,  sv_questions.help_orientation,  '' AS grouptext";
$tdatasv_questions[".sqlFrom"] = "FROM sv_questions  INNER JOIN sv_groups ON sv_groups.id = sv_questions.group_id";
$tdatasv_questions[".sqlWhereExpr"] = "";
$tdatasv_questions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_questions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_questions[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_questions[".highlightSearchResults"] = true;

$tableKeyssv_questions = array();
$tableKeyssv_questions[] = "id";
$tdatasv_questions[".Keys"] = $tableKeyssv_questions;


$tdatasv_questions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.id";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_questions["id"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "id";
//	parent_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "parent_id";
	$fdata["GoodName"] = "parent_id";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","parent_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "parent_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.parent_id";

	
	
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


	$tdatasv_questions["parent_id"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "parent_id";
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","sid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.sid";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_questions["sid"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "sid";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.group_id";

	
	
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
	$edata["LookupTable"] = "sv_groups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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


	$tdatasv_questions["group_id"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "group_id";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.`type`";

	
	
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
	$edata["LookupTable"] = "sv_question_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "type";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "description";

	

	
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


	$tdatasv_questions["type"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "type";
//	question
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "question";
	$fdata["GoodName"] = "question";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","question");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "question";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.question";

	
	
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


	$tdatasv_questions["question"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "question";
//	regex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "regex";
	$fdata["GoodName"] = "regex";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","regex");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "regex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.regex";

	
	
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
		
		$edata["controlWidth"] = 283;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
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


	$tdatasv_questions["regex"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "regex";
//	required
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "required";
	$fdata["GoodName"] = "required";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","required");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "required";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.required";

	
	
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


	$tdatasv_questions["required"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "required";
//	help
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "help";
	$fdata["GoodName"] = "help";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","help");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "help";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.help";

	
	
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


	$tdatasv_questions["help"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "help";
//	sortorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sortorder";
	$fdata["GoodName"] = "sortorder";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","sortorder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sortorder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.sortorder";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
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

	$fdata["ViewFormats"]["print"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasv_questions["sortorder"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "sortorder";
//	other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "other";
	$fdata["GoodName"] = "other";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","other");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "other";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.other";

	
	
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


	$tdatasv_questions["other"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "other";
//	int_only
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "int_only";
	$fdata["GoodName"] = "int_only";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","int_only");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "int_only";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.int_only";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatasv_questions["int_only"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "int_only";
//	max_length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "max_length";
	$fdata["GoodName"] = "max_length";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","max_length");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "max_length";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.max_length";

	
	
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


	$tdatasv_questions["max_length"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "max_length";
//	file_extensions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "file_extensions";
	$fdata["GoodName"] = "file_extensions";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","file_extensions");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "file_extensions";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.file_extensions";

	
	
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


	$tdatasv_questions["file_extensions"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "file_extensions";
//	max_num_of_files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "max_num_of_files";
	$fdata["GoodName"] = "max_num_of_files";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","max_num_of_files");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "max_num_of_files";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.max_num_of_files";

	
	
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


	$tdatasv_questions["max_num_of_files"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "max_num_of_files";
//	max_file_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "max_file_size";
	$fdata["GoodName"] = "max_file_size";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","max_file_size");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "max_file_size";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.max_file_size";

	
	
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


	$tdatasv_questions["max_file_size"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "max_file_size";
//	groupname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "groupname";
	$fdata["GoodName"] = "groupname";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_questions","groupname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_groups.name";

	
	
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
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
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


	$tdatasv_questions["groupname"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "groupname";
//	sv_groups_sortorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sv_groups_sortorder";
	$fdata["GoodName"] = "sv_groups_sortorder";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_questions","sv_groups_sortorder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sortorder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_groups.sortorder";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_questions["sv_groups_sortorder"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "sv_groups_sortorder";
//	help_orientation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "help_orientation";
	$fdata["GoodName"] = "help_orientation";
	$fdata["ownerTable"] = "sv_questions";
	$fdata["Label"] = GetFieldLabel("sv_questions","help_orientation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "help_orientation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv_questions.help_orientation";

	
	
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
	$edata["LookupTable"] = "sv_helpquestion_viewtype";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "orientation";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "description";

	

	
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


	$tdatasv_questions["help_orientation"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "help_orientation";
//	grouptext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "grouptext";
	$fdata["GoodName"] = "grouptext";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sv_questions","grouptext");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "grouptext";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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


	$tdatasv_questions["grouptext"] = $fdata;
		$tdatasv_questions[".searchableFields"][] = "grouptext";


$tables_data["sv_questions"]=&$tdatasv_questions;
$field_labels["sv_questions"] = &$fieldLabelssv_questions;
$fieldToolTips["sv_questions"] = &$fieldToolTipssv_questions;
$placeHolders["sv_questions"] = &$placeHolderssv_questions;
$page_titles["sv_questions"] = &$pageTitlessv_questions;


changeTextControlsToDate( "sv_questions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_questions"] = array();
//	sv_question_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sv_question_details";
		$detailsParam["dOriginalTable"] = "sv_question_details";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sv_question_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("sv_question_details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sv_questions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sv_questions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sv_questions"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["sv_questions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sv_questions"][$dIndex]["detailKeys"][]="question_id";
//	sv_answer_options
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sv_answer_options";
		$detailsParam["dOriginalTable"] = "sv_answer_options";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sv_answer_options";
	$detailsParam["dCaptionTable"] = GetTableCaption("sv_answer_options");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sv_questions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sv_questions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sv_questions"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["sv_questions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sv_questions"][$dIndex]["detailKeys"][]="question_id";
//	sv_scenarios
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sv_scenarios";
		$detailsParam["dOriginalTable"] = "sv_scenarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sv_scenarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("sv_scenarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sv_questions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sv_questions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sv_questions"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["sv_questions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sv_questions"][$dIndex]["detailKeys"][]="qid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_questions"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="sv_surveys";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sv_surveys";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sv_surveys";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sv_questions"][0] = $masterParams;
				$masterTablesData["sv_questions"][0]["masterKeys"] = array();
	$masterTablesData["sv_questions"][0]["masterKeys"][]="id";
				$masterTablesData["sv_questions"][0]["detailKeys"] = array();
	$masterTablesData["sv_questions"][0]["detailKeys"][]="sid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_questions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sv_questions.id,  sv_questions.parent_id,  sv_questions.sid,  sv_questions.group_id,  sv_questions.`type`,  sv_questions.question,  sv_questions.regex,  sv_questions.required,  sv_questions.help,  sv_questions.sortorder,  sv_questions.other,  sv_questions.int_only,  sv_questions.max_length,  sv_questions.file_extensions,  sv_questions.max_num_of_files,  sv_questions.max_file_size,  sv_groups.name AS groupname,  sv_groups.sortorder AS sv_groups_sortorder,  sv_questions.help_orientation,  '' AS grouptext";
$proto0["m_strFrom"] = "FROM sv_questions  INNER JOIN sv_groups ON sv_groups.id = sv_questions.group_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sv_groups.sortorder, sv_questions.sortorder, sv_questions.id";
	
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
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto6["m_sql"] = "sv_questions.id";
$proto6["m_srcTableName"] = "sv_questions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_id",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto8["m_sql"] = "sv_questions.parent_id";
$proto8["m_srcTableName"] = "sv_questions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto10["m_sql"] = "sv_questions.sid";
$proto10["m_srcTableName"] = "sv_questions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto12["m_sql"] = "sv_questions.group_id";
$proto12["m_srcTableName"] = "sv_questions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto14["m_sql"] = "sv_questions.`type`";
$proto14["m_srcTableName"] = "sv_questions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "question",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto16["m_sql"] = "sv_questions.question";
$proto16["m_srcTableName"] = "sv_questions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "regex",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto18["m_sql"] = "sv_questions.regex";
$proto18["m_srcTableName"] = "sv_questions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "required",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto20["m_sql"] = "sv_questions.required";
$proto20["m_srcTableName"] = "sv_questions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "help",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto22["m_sql"] = "sv_questions.help";
$proto22["m_srcTableName"] = "sv_questions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto24["m_sql"] = "sv_questions.sortorder";
$proto24["m_srcTableName"] = "sv_questions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "other",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto26["m_sql"] = "sv_questions.other";
$proto26["m_srcTableName"] = "sv_questions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "int_only",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto28["m_sql"] = "sv_questions.int_only";
$proto28["m_srcTableName"] = "sv_questions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "max_length",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto30["m_sql"] = "sv_questions.max_length";
$proto30["m_srcTableName"] = "sv_questions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "file_extensions",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto32["m_sql"] = "sv_questions.file_extensions";
$proto32["m_srcTableName"] = "sv_questions";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "max_num_of_files",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto34["m_sql"] = "sv_questions.max_num_of_files";
$proto34["m_srcTableName"] = "sv_questions";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "max_file_size",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto36["m_sql"] = "sv_questions.max_file_size";
$proto36["m_srcTableName"] = "sv_questions";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_questions"
));

$proto38["m_sql"] = "sv_groups.name";
$proto38["m_srcTableName"] = "sv_questions";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "groupname";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_questions"
));

$proto40["m_sql"] = "sv_groups.sortorder";
$proto40["m_srcTableName"] = "sv_questions";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "sv_groups_sortorder";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "help_orientation",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto42["m_sql"] = "sv_questions.help_orientation";
$proto42["m_srcTableName"] = "sv_questions";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "sv_questions";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "grouptext";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "sv_questions";
$proto47["m_srcTableName"] = "sv_questions";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "parent_id";
$proto47["m_columns"][] = "sid";
$proto47["m_columns"][] = "group_id";
$proto47["m_columns"][] = "type";
$proto47["m_columns"][] = "question";
$proto47["m_columns"][] = "help_orientation";
$proto47["m_columns"][] = "regex";
$proto47["m_columns"][] = "required";
$proto47["m_columns"][] = "help";
$proto47["m_columns"][] = "sortorder";
$proto47["m_columns"][] = "other";
$proto47["m_columns"][] = "int_only";
$proto47["m_columns"][] = "max_length";
$proto47["m_columns"][] = "file_extensions";
$proto47["m_columns"][] = "max_num_of_files";
$proto47["m_columns"][] = "max_file_size";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "sv_questions";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "sv_questions";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "sv_groups";
$proto51["m_srcTableName"] = "sv_questions";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "sid";
$proto51["m_columns"][] = "name";
$proto51["m_columns"][] = "sortorder";
$proto51["m_columns"][] = "description";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "INNER JOIN sv_groups ON sv_groups.id = sv_questions.group_id";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "sv_questions";
$proto52=array();
$proto52["m_sql"] = "sv_groups.id = sv_questions.group_id";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_questions"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= sv_questions.group_id";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_questions"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 1;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto56["m_column"]=$obj;
$proto56["m_bAsc"] = 1;
$proto56["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto56);

$proto0["m_orderby"][]=$obj;					
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sv_questions",
	"m_srcTableName" => "sv_questions"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 1;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sv_questions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_questions = createSqlQuery_sv_questions();


	
		;

																				

$tdatasv_questions[".sqlquery"] = $queryData_sv_questions;



include_once(getabspath("include/sv_questions_events.php"));
$tdatasv_questions[".hasEvents"] = true;

?>