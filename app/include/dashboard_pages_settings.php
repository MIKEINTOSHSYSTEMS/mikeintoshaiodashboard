<?php
$tdatadashboard_pages = array();
$tdatadashboard_pages[".searchableFields"] = array();
$tdatadashboard_pages[".ShortName"] = "dashboard_pages";
$tdatadashboard_pages[".OwnerID"] = "";
$tdatadashboard_pages[".OriginalTable"] = "dashboard_pages";


$tdatadashboard_pages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadashboard_pages[".originalPagesByType"] = $tdatadashboard_pages[".pagesByType"];
$tdatadashboard_pages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadashboard_pages[".originalPages"] = $tdatadashboard_pages[".pages"];
$tdatadashboard_pages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadashboard_pages[".originalDefaultPages"] = $tdatadashboard_pages[".defaultPages"];

//	field labels
$fieldLabelsdashboard_pages = array();
$fieldToolTipsdashboard_pages = array();
$pageTitlesdashboard_pages = array();
$placeHoldersdashboard_pages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard_pages["English"] = array();
	$fieldToolTipsdashboard_pages["English"] = array();
	$placeHoldersdashboard_pages["English"] = array();
	$pageTitlesdashboard_pages["English"] = array();
	$fieldLabelsdashboard_pages["English"]["dashboard_id"] = "Dashboard Id";
	$fieldToolTipsdashboard_pages["English"]["dashboard_id"] = "";
	$placeHoldersdashboard_pages["English"]["dashboard_id"] = "";
	$fieldLabelsdashboard_pages["English"]["dashboard_name"] = "Dashboard Name";
	$fieldToolTipsdashboard_pages["English"]["dashboard_name"] = "";
	$placeHoldersdashboard_pages["English"]["dashboard_name"] = "";
	$fieldLabelsdashboard_pages["English"]["dashboard_category"] = "Dashboard Category";
	$fieldToolTipsdashboard_pages["English"]["dashboard_category"] = "";
	$placeHoldersdashboard_pages["English"]["dashboard_category"] = "";
	$fieldLabelsdashboard_pages["English"]["dashboard_link"] = "Dashboard Link";
	$fieldToolTipsdashboard_pages["English"]["dashboard_link"] = "";
	$placeHoldersdashboard_pages["English"]["dashboard_link"] = "";
	$fieldLabelsdashboard_pages["English"]["dashboard_file"] = "Dashboard File";
	$fieldToolTipsdashboard_pages["English"]["dashboard_file"] = "";
	$placeHoldersdashboard_pages["English"]["dashboard_file"] = "";
	$fieldLabelsdashboard_pages["English"]["dashboard_comments"] = "Dashboard Comments";
	$fieldToolTipsdashboard_pages["English"]["dashboard_comments"] = "";
	$placeHoldersdashboard_pages["English"]["dashboard_comments"] = "Comments";
	if (count($fieldToolTipsdashboard_pages["English"]))
		$tdatadashboard_pages[".isUseToolTips"] = true;
}


	$tdatadashboard_pages[".NCSearch"] = true;



$tdatadashboard_pages[".shortTableName"] = "dashboard_pages";
$tdatadashboard_pages[".nSecOptions"] = 0;

$tdatadashboard_pages[".mainTableOwnerID"] = "";
$tdatadashboard_pages[".entityType"] = 0;
$tdatadashboard_pages[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadashboard_pages[".strOriginalTableName"] = "dashboard_pages";

	



$tdatadashboard_pages[".showAddInPopup"] = false;

$tdatadashboard_pages[".showEditInPopup"] = false;

$tdatadashboard_pages[".showViewInPopup"] = false;

$tdatadashboard_pages[".listAjax"] = false;
//	temporary
//$tdatadashboard_pages[".listAjax"] = false;

	$tdatadashboard_pages[".audit"] = false;

	$tdatadashboard_pages[".locking"] = false;


$pages = $tdatadashboard_pages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadashboard_pages[".edit"] = true;
	$tdatadashboard_pages[".afterEditAction"] = 1;
	$tdatadashboard_pages[".closePopupAfterEdit"] = 1;
	$tdatadashboard_pages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadashboard_pages[".add"] = true;
$tdatadashboard_pages[".afterAddAction"] = 1;
$tdatadashboard_pages[".closePopupAfterAdd"] = 1;
$tdatadashboard_pages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadashboard_pages[".list"] = true;
}



$tdatadashboard_pages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadashboard_pages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadashboard_pages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadashboard_pages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadashboard_pages[".printFriendly"] = true;
}



$tdatadashboard_pages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadashboard_pages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadashboard_pages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadashboard_pages[".isUseAjaxSuggest"] = true;



			

$tdatadashboard_pages[".ajaxCodeSnippetAdded"] = false;

$tdatadashboard_pages[".buttonsAdded"] = false;

$tdatadashboard_pages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadashboard_pages[".isUseTimeForSearch"] = false;


$tdatadashboard_pages[".badgeColor"] = "DC143C";


$tdatadashboard_pages[".allSearchFields"] = array();
$tdatadashboard_pages[".filterFields"] = array();
$tdatadashboard_pages[".requiredSearchFields"] = array();

$tdatadashboard_pages[".googleLikeFields"] = array();
$tdatadashboard_pages[".googleLikeFields"][] = "dashboard_id";
$tdatadashboard_pages[".googleLikeFields"][] = "dashboard_name";
$tdatadashboard_pages[".googleLikeFields"][] = "dashboard_category";
$tdatadashboard_pages[".googleLikeFields"][] = "dashboard_link";
$tdatadashboard_pages[".googleLikeFields"][] = "dashboard_file";
$tdatadashboard_pages[".googleLikeFields"][] = "dashboard_comments";



$tdatadashboard_pages[".tableType"] = "list";

$tdatadashboard_pages[".printerPageOrientation"] = 0;
$tdatadashboard_pages[".nPrinterPageScale"] = 100;

$tdatadashboard_pages[".nPrinterSplitRecords"] = 40;

$tdatadashboard_pages[".geocodingEnabled"] = false;










$tdatadashboard_pages[".pageSize"] = 20;

$tdatadashboard_pages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadashboard_pages[".strOrderBy"] = $tstrOrderBy;

$tdatadashboard_pages[".orderindexes"] = array();


$tdatadashboard_pages[".sqlHead"] = "SELECT dashboard_id,  	dashboard_name,  	dashboard_category,  	dashboard_link,  	dashboard_file,  	dashboard_comments";
$tdatadashboard_pages[".sqlFrom"] = "FROM dashboard_pages";
$tdatadashboard_pages[".sqlWhereExpr"] = "";
$tdatadashboard_pages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadashboard_pages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadashboard_pages[".arrGroupsPerPage"] = $arrGPP;

$tdatadashboard_pages[".highlightSearchResults"] = true;

$tableKeysdashboard_pages = array();
$tableKeysdashboard_pages[] = "dashboard_id";
$tdatadashboard_pages[".Keys"] = $tableKeysdashboard_pages;


$tdatadashboard_pages[".hideMobileList"] = array();




//	dashboard_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dashboard_id";
	$fdata["GoodName"] = "dashboard_id";
	$fdata["ownerTable"] = "dashboard_pages";
	$fdata["Label"] = GetFieldLabel("dashboard_pages","dashboard_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "dashboard_id";

		$fdata["sourceSingle"] = "dashboard_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_id";

	
	
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


	$tdatadashboard_pages["dashboard_id"] = $fdata;
		$tdatadashboard_pages[".searchableFields"][] = "dashboard_id";
//	dashboard_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dashboard_name";
	$fdata["GoodName"] = "dashboard_name";
	$fdata["ownerTable"] = "dashboard_pages";
	$fdata["Label"] = GetFieldLabel("dashboard_pages","dashboard_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_name";

		$fdata["sourceSingle"] = "dashboard_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatadashboard_pages["dashboard_name"] = $fdata;
		$tdatadashboard_pages[".searchableFields"][] = "dashboard_name";
//	dashboard_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dashboard_category";
	$fdata["GoodName"] = "dashboard_category";
	$fdata["ownerTable"] = "dashboard_pages";
	$fdata["Label"] = GetFieldLabel("dashboard_pages","dashboard_category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_category";

		$fdata["sourceSingle"] = "dashboard_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_category";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatadashboard_pages["dashboard_category"] = $fdata;
		$tdatadashboard_pages[".searchableFields"][] = "dashboard_category";
//	dashboard_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dashboard_link";
	$fdata["GoodName"] = "dashboard_link";
	$fdata["ownerTable"] = "dashboard_pages";
	$fdata["Label"] = GetFieldLabel("dashboard_pages","dashboard_link");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_link";

		$fdata["sourceSingle"] = "dashboard_link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_link";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatadashboard_pages["dashboard_link"] = $fdata;
		$tdatadashboard_pages[".searchableFields"][] = "dashboard_link";
//	dashboard_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dashboard_file";
	$fdata["GoodName"] = "dashboard_file";
	$fdata["ownerTable"] = "dashboard_pages";
	$fdata["Label"] = GetFieldLabel("dashboard_pages","dashboard_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_file";

		$fdata["sourceSingle"] = "dashboard_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_file";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("docx");
						$edata["acceptFileTypesHtml"] = ".docx";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] .= ",.pdf";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 4;

		$edata["maxFileSize"] = 1024;

		$edata["maxTotalFilesSize"] = 4096;

	
	
	
	
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


	$tdatadashboard_pages["dashboard_file"] = $fdata;
		$tdatadashboard_pages[".searchableFields"][] = "dashboard_file";
//	dashboard_comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dashboard_comments";
	$fdata["GoodName"] = "dashboard_comments";
	$fdata["ownerTable"] = "dashboard_pages";
	$fdata["Label"] = GetFieldLabel("dashboard_pages","dashboard_comments");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_comments";

		$fdata["sourceSingle"] = "dashboard_comments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_comments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 600;
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


	$tdatadashboard_pages["dashboard_comments"] = $fdata;
		$tdatadashboard_pages[".searchableFields"][] = "dashboard_comments";


$tables_data["dashboard_pages"]=&$tdatadashboard_pages;
$field_labels["dashboard_pages"] = &$fieldLabelsdashboard_pages;
$fieldToolTips["dashboard_pages"] = &$fieldToolTipsdashboard_pages;
$placeHolders["dashboard_pages"] = &$placeHoldersdashboard_pages;
$page_titles["dashboard_pages"] = &$pageTitlesdashboard_pages;


changeTextControlsToDate( "dashboard_pages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dashboard_pages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dashboard_pages"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dashboard_pages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dashboard_id,  	dashboard_name,  	dashboard_category,  	dashboard_link,  	dashboard_file,  	dashboard_comments";
$proto0["m_strFrom"] = "FROM dashboard_pages";
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
	"m_strName" => "dashboard_id",
	"m_strTable" => "dashboard_pages",
	"m_srcTableName" => "dashboard_pages"
));

$proto6["m_sql"] = "dashboard_id";
$proto6["m_srcTableName"] = "dashboard_pages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_name",
	"m_strTable" => "dashboard_pages",
	"m_srcTableName" => "dashboard_pages"
));

$proto8["m_sql"] = "dashboard_name";
$proto8["m_srcTableName"] = "dashboard_pages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_category",
	"m_strTable" => "dashboard_pages",
	"m_srcTableName" => "dashboard_pages"
));

$proto10["m_sql"] = "dashboard_category";
$proto10["m_srcTableName"] = "dashboard_pages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_link",
	"m_strTable" => "dashboard_pages",
	"m_srcTableName" => "dashboard_pages"
));

$proto12["m_sql"] = "dashboard_link";
$proto12["m_srcTableName"] = "dashboard_pages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_file",
	"m_strTable" => "dashboard_pages",
	"m_srcTableName" => "dashboard_pages"
));

$proto14["m_sql"] = "dashboard_file";
$proto14["m_srcTableName"] = "dashboard_pages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_comments",
	"m_strTable" => "dashboard_pages",
	"m_srcTableName" => "dashboard_pages"
));

$proto16["m_sql"] = "dashboard_comments";
$proto16["m_srcTableName"] = "dashboard_pages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dashboard_pages";
$proto19["m_srcTableName"] = "dashboard_pages";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "dashboard_id";
$proto19["m_columns"][] = "dashboard_name";
$proto19["m_columns"][] = "dashboard_category";
$proto19["m_columns"][] = "dashboard_link";
$proto19["m_columns"][] = "dashboard_file";
$proto19["m_columns"][] = "dashboard_comments";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dashboard_pages";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dashboard_pages";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dashboard_pages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dashboard_pages = createSqlQuery_dashboard_pages();


	
																								;

						

$tdatadashboard_pages[".sqlquery"] = $queryData_dashboard_pages;



$tdatadashboard_pages[".hasEvents"] = false;

?>