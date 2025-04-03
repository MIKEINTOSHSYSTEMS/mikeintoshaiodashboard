<?php
$tdatagroups = array();
$tdatagroups[".searchableFields"] = array();
$tdatagroups[".ShortName"] = "groups";
$tdatagroups[".OwnerID"] = "";
$tdatagroups[".OriginalTable"] = "Groups";


$tdatagroups[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatagroups[".originalPagesByType"] = $tdatagroups[".pagesByType"];
$tdatagroups[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatagroups[".originalPages"] = $tdatagroups[".pages"];
$tdatagroups[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatagroups[".originalDefaultPages"] = $tdatagroups[".defaultPages"];

//	field labels
$fieldLabelsgroups = array();
$fieldToolTipsgroups = array();
$pageTitlesgroups = array();
$placeHoldersgroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroups["English"] = array();
	$fieldToolTipsgroups["English"] = array();
	$placeHoldersgroups["English"] = array();
	$pageTitlesgroups["English"] = array();
	$fieldLabelsgroups["English"]["id"] = "Id";
	$fieldToolTipsgroups["English"]["id"] = "";
	$placeHoldersgroups["English"]["id"] = "";
	$fieldLabelsgroups["English"]["name"] = "Name";
	$fieldToolTipsgroups["English"]["name"] = "";
	$placeHoldersgroups["English"]["name"] = "";
	$fieldLabelsgroups["English"]["description"] = "Description";
	$fieldToolTipsgroups["English"]["description"] = "";
	$placeHoldersgroups["English"]["description"] = "";
	$fieldLabelsgroups["English"]["key"] = "Key";
	$fieldToolTipsgroups["English"]["key"] = "";
	$placeHoldersgroups["English"]["key"] = "";
	$fieldLabelsgroups["English"]["price"] = "Price";
	$fieldToolTipsgroups["English"]["price"] = "";
	$placeHoldersgroups["English"]["price"] = "";
	$fieldLabelsgroups["English"]["owner_id"] = "Owner Id";
	$fieldToolTipsgroups["English"]["owner_id"] = "";
	$placeHoldersgroups["English"]["owner_id"] = "";
	if (count($fieldToolTipsgroups["English"]))
		$tdatagroups[".isUseToolTips"] = true;
}


	$tdatagroups[".NCSearch"] = true;



$tdatagroups[".shortTableName"] = "groups";
$tdatagroups[".nSecOptions"] = 0;

$tdatagroups[".mainTableOwnerID"] = "";
$tdatagroups[".entityType"] = 7;
$tdatagroups[".connId"] = "deredevatderejadevmerqconsulta";


$tdatagroups[".strOriginalTableName"] = "Groups";

	



$tdatagroups[".showAddInPopup"] = false;

$tdatagroups[".showEditInPopup"] = false;

$tdatagroups[".showViewInPopup"] = false;

$tdatagroups[".listAjax"] = false;
//	temporary
//$tdatagroups[".listAjax"] = false;

	$tdatagroups[".audit"] = false;

	$tdatagroups[".locking"] = false;


$pages = $tdatagroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroups[".edit"] = true;
	$tdatagroups[".afterEditAction"] = 1;
	$tdatagroups[".closePopupAfterEdit"] = 1;
	$tdatagroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroups[".add"] = true;
$tdatagroups[".afterAddAction"] = 1;
$tdatagroups[".closePopupAfterAdd"] = 1;
$tdatagroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroups[".list"] = true;
}



$tdatagroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroups[".printFriendly"] = true;
}



$tdatagroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroups[".isUseAjaxSuggest"] = false;



						

$tdatagroups[".ajaxCodeSnippetAdded"] = false;

$tdatagroups[".buttonsAdded"] = false;

$tdatagroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroups[".isUseTimeForSearch"] = false;


$tdatagroups[".badgeColor"] = "4682B4";


$tdatagroups[".allSearchFields"] = array();
$tdatagroups[".filterFields"] = array();
$tdatagroups[".requiredSearchFields"] = array();

$tdatagroups[".googleLikeFields"] = array();
$tdatagroups[".googleLikeFields"][] = "id";
$tdatagroups[".googleLikeFields"][] = "name";
$tdatagroups[".googleLikeFields"][] = "description";
$tdatagroups[".googleLikeFields"][] = "key";
$tdatagroups[".googleLikeFields"][] = "price";
$tdatagroups[".googleLikeFields"][] = "owner_id";




$tdatagroups[".printerPageOrientation"] = 0;
$tdatagroups[".nPrinterPageScale"] = 100;

$tdatagroups[".nPrinterSplitRecords"] = 40;

$tdatagroups[".geocodingEnabled"] = false;




$tdatagroups[".isDisplayLoading"] = true;






$tdatagroups[".pageSize"] = 20;

$tdatagroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagroups[".strOrderBy"] = $tstrOrderBy;

$tdatagroups[".orderindexes"] = array();


$tdatagroups[".sqlHead"] = "";
$tdatagroups[".sqlFrom"] = "";
$tdatagroups[".sqlWhereExpr"] = "";
$tdatagroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroups[".arrGroupsPerPage"] = $arrGPP;

$tdatagroups[".highlightSearchResults"] = true;

$tableKeysgroups = array();
$tableKeysgroups[] = "id";
$tdatagroups[".Keys"] = $tableKeysgroups;


$tdatagroups[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Groups","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/id";

	
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


	$tdatagroups["id"] = $fdata;
		$tdatagroups[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Groups","name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/name";

	
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


	$tdatagroups["name"] = $fdata;
		$tdatagroups[".searchableFields"][] = "name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Groups","description");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/description";

	
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


	$tdatagroups["description"] = $fdata;
		$tdatagroups[".searchableFields"][] = "description";
//	key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "key";
	$fdata["GoodName"] = "key";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Groups","key");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/key";

	
		$fdata["FullName"] = "key";

	
	
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


	$tdatagroups["key"] = $fdata;
		$tdatagroups[".searchableFields"][] = "key";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Groups","price");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/price";

	
		$fdata["FullName"] = "price";

	
	
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


	$tdatagroups["price"] = $fdata;
		$tdatagroups[".searchableFields"][] = "price";
//	owner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "owner_id";
	$fdata["GoodName"] = "owner_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Groups","owner_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/owner_id";

	
		$fdata["FullName"] = "owner_id";

	
	
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


	$tdatagroups["owner_id"] = $fdata;
		$tdatagroups[".searchableFields"][] = "owner_id";


$tables_data["Groups"]=&$tdatagroups;
$field_labels["Groups"] = &$fieldLabelsgroups;
$fieldToolTips["Groups"] = &$fieldToolTipsgroups;
$placeHolders["Groups"] = &$placeHoldersgroups;
$page_titles["Groups"] = &$pageTitlesgroups;


changeTextControlsToDate( "Groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Groups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/groups_ops.php" ) );



	
																								;

						

$tdatagroups[".sqlquery"] = $queryData_groups;



$tdatagroups[".hasEvents"] = false;

?>