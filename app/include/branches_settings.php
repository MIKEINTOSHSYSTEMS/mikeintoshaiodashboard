<?php
$tdatabranches = array();
$tdatabranches[".searchableFields"] = array();
$tdatabranches[".ShortName"] = "branches";
$tdatabranches[".OwnerID"] = "";
$tdatabranches[".OriginalTable"] = "Branches";


$tdatabranches[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabranches[".originalPagesByType"] = $tdatabranches[".pagesByType"];
$tdatabranches[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabranches[".originalPages"] = $tdatabranches[".pages"];
$tdatabranches[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabranches[".originalDefaultPages"] = $tdatabranches[".defaultPages"];

//	field labels
$fieldLabelsbranches = array();
$fieldToolTipsbranches = array();
$pageTitlesbranches = array();
$placeHoldersbranches = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbranches["English"] = array();
	$fieldToolTipsbranches["English"] = array();
	$placeHoldersbranches["English"] = array();
	$pageTitlesbranches["English"] = array();
	$fieldLabelsbranches["English"]["id"] = "Id";
	$fieldToolTipsbranches["English"]["id"] = "";
	$placeHoldersbranches["English"]["id"] = "";
	$fieldLabelsbranches["English"]["name"] = "Name";
	$fieldToolTipsbranches["English"]["name"] = "";
	$placeHoldersbranches["English"]["name"] = "";
	$fieldLabelsbranches["English"]["description"] = "Description";
	$fieldToolTipsbranches["English"]["description"] = "";
	$placeHoldersbranches["English"]["description"] = "";
	if (count($fieldToolTipsbranches["English"]))
		$tdatabranches[".isUseToolTips"] = true;
}


	$tdatabranches[".NCSearch"] = true;



$tdatabranches[".shortTableName"] = "branches";
$tdatabranches[".nSecOptions"] = 0;

$tdatabranches[".mainTableOwnerID"] = "";
$tdatabranches[".entityType"] = 7;
$tdatabranches[".connId"] = "deredevatderejadevmerqconsulta";


$tdatabranches[".strOriginalTableName"] = "Branches";

	



$tdatabranches[".showAddInPopup"] = false;

$tdatabranches[".showEditInPopup"] = false;

$tdatabranches[".showViewInPopup"] = false;

$tdatabranches[".listAjax"] = false;
//	temporary
//$tdatabranches[".listAjax"] = false;

	$tdatabranches[".audit"] = false;

	$tdatabranches[".locking"] = false;


$pages = $tdatabranches[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabranches[".edit"] = true;
	$tdatabranches[".afterEditAction"] = 1;
	$tdatabranches[".closePopupAfterEdit"] = 1;
	$tdatabranches[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabranches[".add"] = true;
$tdatabranches[".afterAddAction"] = 1;
$tdatabranches[".closePopupAfterAdd"] = 1;
$tdatabranches[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabranches[".list"] = true;
}



$tdatabranches[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabranches[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabranches[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabranches[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabranches[".printFriendly"] = true;
}



$tdatabranches[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabranches[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabranches[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabranches[".isUseAjaxSuggest"] = false;



						

$tdatabranches[".ajaxCodeSnippetAdded"] = false;

$tdatabranches[".buttonsAdded"] = false;

$tdatabranches[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabranches[".isUseTimeForSearch"] = false;


$tdatabranches[".badgeColor"] = "DAA520";


$tdatabranches[".allSearchFields"] = array();
$tdatabranches[".filterFields"] = array();
$tdatabranches[".requiredSearchFields"] = array();

$tdatabranches[".googleLikeFields"] = array();
$tdatabranches[".googleLikeFields"][] = "id";
$tdatabranches[".googleLikeFields"][] = "name";
$tdatabranches[".googleLikeFields"][] = "description";




$tdatabranches[".printerPageOrientation"] = 0;
$tdatabranches[".nPrinterPageScale"] = 100;

$tdatabranches[".nPrinterSplitRecords"] = 40;

$tdatabranches[".geocodingEnabled"] = false;




$tdatabranches[".isDisplayLoading"] = true;






$tdatabranches[".pageSize"] = 20;

$tdatabranches[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabranches[".strOrderBy"] = $tstrOrderBy;

$tdatabranches[".orderindexes"] = array();


$tdatabranches[".sqlHead"] = "";
$tdatabranches[".sqlFrom"] = "";
$tdatabranches[".sqlWhereExpr"] = "";
$tdatabranches[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabranches[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabranches[".arrGroupsPerPage"] = $arrGPP;

$tdatabranches[".highlightSearchResults"] = true;

$tableKeysbranches = array();
$tableKeysbranches[] = "id";
$tdatabranches[".Keys"] = $tableKeysbranches;


$tdatabranches[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Branches","id");
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


	$tdatabranches["id"] = $fdata;
		$tdatabranches[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Branches","name");
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


	$tdatabranches["name"] = $fdata;
		$tdatabranches[".searchableFields"][] = "name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Branches","description");
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


	$tdatabranches["description"] = $fdata;
		$tdatabranches[".searchableFields"][] = "description";


$tables_data["Branches"]=&$tdatabranches;
$field_labels["Branches"] = &$fieldLabelsbranches;
$fieldToolTips["Branches"] = &$fieldToolTipsbranches;
$placeHolders["Branches"] = &$placeHoldersbranches;
$page_titles["Branches"] = &$pageTitlesbranches;


changeTextControlsToDate( "Branches" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Branches"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Branches"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/branches_ops.php" ) );



	
																								;

			

$tdatabranches[".sqlquery"] = $queryData_branches;



$tdatabranches[".hasEvents"] = false;

?>