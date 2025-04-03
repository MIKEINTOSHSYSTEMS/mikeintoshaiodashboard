<?php
$tdatacategories = array();
$tdatacategories[".searchableFields"] = array();
$tdatacategories[".ShortName"] = "categories";
$tdatacategories[".OwnerID"] = "";
$tdatacategories[".OriginalTable"] = "Categories";


$tdatacategories[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacategories[".originalPagesByType"] = $tdatacategories[".pagesByType"];
$tdatacategories[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacategories[".originalPages"] = $tdatacategories[".pages"];
$tdatacategories[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacategories[".originalDefaultPages"] = $tdatacategories[".defaultPages"];

//	field labels
$fieldLabelscategories = array();
$fieldToolTipscategories = array();
$pageTitlescategories = array();
$placeHolderscategories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscategories["English"] = array();
	$fieldToolTipscategories["English"] = array();
	$placeHolderscategories["English"] = array();
	$pageTitlescategories["English"] = array();
	$fieldLabelscategories["English"]["id"] = "Id";
	$fieldToolTipscategories["English"]["id"] = "";
	$placeHolderscategories["English"]["id"] = "";
	$fieldLabelscategories["English"]["name"] = "Name";
	$fieldToolTipscategories["English"]["name"] = "";
	$placeHolderscategories["English"]["name"] = "";
	$fieldLabelscategories["English"]["price"] = "Price";
	$fieldToolTipscategories["English"]["price"] = "";
	$placeHolderscategories["English"]["price"] = "";
	$fieldLabelscategories["English"]["parent_category_id"] = "Parent Category Id";
	$fieldToolTipscategories["English"]["parent_category_id"] = "";
	$placeHolderscategories["English"]["parent_category_id"] = "";
	if (count($fieldToolTipscategories["English"]))
		$tdatacategories[".isUseToolTips"] = true;
}


	$tdatacategories[".NCSearch"] = true;



$tdatacategories[".shortTableName"] = "categories";
$tdatacategories[".nSecOptions"] = 0;

$tdatacategories[".mainTableOwnerID"] = "";
$tdatacategories[".entityType"] = 7;
$tdatacategories[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacategories[".strOriginalTableName"] = "Categories";

	



$tdatacategories[".showAddInPopup"] = false;

$tdatacategories[".showEditInPopup"] = false;

$tdatacategories[".showViewInPopup"] = false;

$tdatacategories[".listAjax"] = false;
//	temporary
//$tdatacategories[".listAjax"] = false;

	$tdatacategories[".audit"] = false;

	$tdatacategories[".locking"] = false;


$pages = $tdatacategories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacategories[".edit"] = true;
	$tdatacategories[".afterEditAction"] = 1;
	$tdatacategories[".closePopupAfterEdit"] = 1;
	$tdatacategories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacategories[".add"] = true;
$tdatacategories[".afterAddAction"] = 1;
$tdatacategories[".closePopupAfterAdd"] = 1;
$tdatacategories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacategories[".list"] = true;
}



$tdatacategories[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacategories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacategories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacategories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacategories[".printFriendly"] = true;
}



$tdatacategories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacategories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacategories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacategories[".isUseAjaxSuggest"] = false;



						

$tdatacategories[".ajaxCodeSnippetAdded"] = false;

$tdatacategories[".buttonsAdded"] = false;

$tdatacategories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategories[".isUseTimeForSearch"] = false;


$tdatacategories[".badgeColor"] = "CFAE83";


$tdatacategories[".allSearchFields"] = array();
$tdatacategories[".filterFields"] = array();
$tdatacategories[".requiredSearchFields"] = array();

$tdatacategories[".googleLikeFields"] = array();
$tdatacategories[".googleLikeFields"][] = "id";
$tdatacategories[".googleLikeFields"][] = "name";
$tdatacategories[".googleLikeFields"][] = "price";
$tdatacategories[".googleLikeFields"][] = "parent_category_id";




$tdatacategories[".printerPageOrientation"] = 0;
$tdatacategories[".nPrinterPageScale"] = 100;

$tdatacategories[".nPrinterSplitRecords"] = 40;

$tdatacategories[".geocodingEnabled"] = false;




$tdatacategories[".isDisplayLoading"] = true;






$tdatacategories[".pageSize"] = 20;

$tdatacategories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacategories[".strOrderBy"] = $tstrOrderBy;

$tdatacategories[".orderindexes"] = array();


$tdatacategories[".sqlHead"] = "";
$tdatacategories[".sqlFrom"] = "";
$tdatacategories[".sqlWhereExpr"] = "";
$tdatacategories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategories[".arrGroupsPerPage"] = $arrGPP;

$tdatacategories[".highlightSearchResults"] = true;

$tableKeyscategories = array();
$tableKeyscategories[] = "id";
$tdatacategories[".Keys"] = $tableKeyscategories;


$tdatacategories[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Categories","id");
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


	$tdatacategories["id"] = $fdata;
		$tdatacategories[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Categories","name");
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


	$tdatacategories["name"] = $fdata;
		$tdatacategories[".searchableFields"][] = "name";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Categories","price");
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


	$tdatacategories["price"] = $fdata;
		$tdatacategories[".searchableFields"][] = "price";
//	parent_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent_category_id";
	$fdata["GoodName"] = "parent_category_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Categories","parent_category_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/parent_category_id";

	
		$fdata["FullName"] = "parent_category_id";

	
	
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


	$tdatacategories["parent_category_id"] = $fdata;
		$tdatacategories[".searchableFields"][] = "parent_category_id";


$tables_data["Categories"]=&$tdatacategories;
$field_labels["Categories"] = &$fieldLabelscategories;
$fieldToolTips["Categories"] = &$fieldToolTipscategories;
$placeHolders["Categories"] = &$placeHolderscategories;
$page_titles["Categories"] = &$pageTitlescategories;


changeTextControlsToDate( "Categories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Categories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Categories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/categories_ops.php" ) );



	
																								;

				

$tdatacategories[".sqlquery"] = $queryData_categories;



$tdatacategories[".hasEvents"] = false;

?>