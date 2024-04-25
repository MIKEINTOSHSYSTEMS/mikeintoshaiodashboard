<?php
$tdatawebsite_data = array();
$tdatawebsite_data[".searchableFields"] = array();
$tdatawebsite_data[".ShortName"] = "website_data";
$tdatawebsite_data[".OwnerID"] = "";
$tdatawebsite_data[".OriginalTable"] = "website_data";


$tdatawebsite_data[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatawebsite_data[".originalPagesByType"] = $tdatawebsite_data[".pagesByType"];
$tdatawebsite_data[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatawebsite_data[".originalPages"] = $tdatawebsite_data[".pages"];
$tdatawebsite_data[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatawebsite_data[".originalDefaultPages"] = $tdatawebsite_data[".defaultPages"];

//	field labels
$fieldLabelswebsite_data = array();
$fieldToolTipswebsite_data = array();
$pageTitleswebsite_data = array();
$placeHolderswebsite_data = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebsite_data["English"] = array();
	$fieldToolTipswebsite_data["English"] = array();
	$placeHolderswebsite_data["English"] = array();
	$pageTitleswebsite_data["English"] = array();
	$fieldLabelswebsite_data["English"]["First_Name"] = "First Name";
	$fieldToolTipswebsite_data["English"]["First_Name"] = "";
	$placeHolderswebsite_data["English"]["First_Name"] = "";
	$fieldLabelswebsite_data["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipswebsite_data["English"]["Middle_Name"] = "";
	$placeHolderswebsite_data["English"]["Middle_Name"] = "";
	$fieldLabelswebsite_data["English"]["Last_Name"] = "Last Name";
	$fieldToolTipswebsite_data["English"]["Last_Name"] = "";
	$placeHolderswebsite_data["English"]["Last_Name"] = "";
	$fieldLabelswebsite_data["English"]["Gender"] = "Gender";
	$fieldToolTipswebsite_data["English"]["Gender"] = "";
	$placeHolderswebsite_data["English"]["Gender"] = "";
	$fieldLabelswebsite_data["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipswebsite_data["English"]["Phone_Number"] = "";
	$placeHolderswebsite_data["English"]["Phone_Number"] = "";
	$fieldLabelswebsite_data["English"]["Email"] = "Email";
	$fieldToolTipswebsite_data["English"]["Email"] = "";
	$placeHolderswebsite_data["English"]["Email"] = "";
	$fieldLabelswebsite_data["English"]["Program_Year"] = "Program Year";
	$fieldToolTipswebsite_data["English"]["Program_Year"] = "";
	$placeHolderswebsite_data["English"]["Program_Year"] = "";
	$fieldLabelswebsite_data["English"]["Title"] = "Title";
	$fieldToolTipswebsite_data["English"]["Title"] = "";
	$placeHolderswebsite_data["English"]["Title"] = "";
	$fieldLabelswebsite_data["English"]["Online_Registered"] = "Online Registered";
	$fieldToolTipswebsite_data["English"]["Online_Registered"] = "";
	$placeHolderswebsite_data["English"]["Online_Registered"] = "";
	$fieldLabelswebsite_data["English"]["Full_Name"] = "Full Name";
	$fieldToolTipswebsite_data["English"]["Full_Name"] = "";
	$placeHolderswebsite_data["English"]["Full_Name"] = "";
	if (count($fieldToolTipswebsite_data["English"]))
		$tdatawebsite_data[".isUseToolTips"] = true;
}


	$tdatawebsite_data[".NCSearch"] = true;



$tdatawebsite_data[".shortTableName"] = "website_data";
$tdatawebsite_data[".nSecOptions"] = 0;

$tdatawebsite_data[".mainTableOwnerID"] = "";
$tdatawebsite_data[".entityType"] = 0;
$tdatawebsite_data[".connId"] = "deredevatderejadevmerqconsulta";


$tdatawebsite_data[".strOriginalTableName"] = "website_data";

	



$tdatawebsite_data[".showAddInPopup"] = false;

$tdatawebsite_data[".showEditInPopup"] = false;

$tdatawebsite_data[".showViewInPopup"] = false;

$tdatawebsite_data[".listAjax"] = false;
//	temporary
//$tdatawebsite_data[".listAjax"] = false;

	$tdatawebsite_data[".audit"] = true;

	$tdatawebsite_data[".locking"] = false;


$pages = $tdatawebsite_data[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatawebsite_data[".edit"] = true;
	$tdatawebsite_data[".afterEditAction"] = 1;
	$tdatawebsite_data[".closePopupAfterEdit"] = 1;
	$tdatawebsite_data[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatawebsite_data[".add"] = true;
$tdatawebsite_data[".afterAddAction"] = 1;
$tdatawebsite_data[".closePopupAfterAdd"] = 1;
$tdatawebsite_data[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatawebsite_data[".list"] = true;
}



$tdatawebsite_data[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatawebsite_data[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatawebsite_data[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatawebsite_data[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatawebsite_data[".printFriendly"] = true;
}



$tdatawebsite_data[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatawebsite_data[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatawebsite_data[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatawebsite_data[".isUseAjaxSuggest"] = true;



						

$tdatawebsite_data[".ajaxCodeSnippetAdded"] = false;

$tdatawebsite_data[".buttonsAdded"] = false;

$tdatawebsite_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebsite_data[".isUseTimeForSearch"] = false;


$tdatawebsite_data[".badgeColor"] = "7b68ee";


$tdatawebsite_data[".allSearchFields"] = array();
$tdatawebsite_data[".filterFields"] = array();
$tdatawebsite_data[".requiredSearchFields"] = array();

$tdatawebsite_data[".googleLikeFields"] = array();
$tdatawebsite_data[".googleLikeFields"][] = "First_Name";
$tdatawebsite_data[".googleLikeFields"][] = "Middle_Name";
$tdatawebsite_data[".googleLikeFields"][] = "Last_Name";
$tdatawebsite_data[".googleLikeFields"][] = "Full_Name";
$tdatawebsite_data[".googleLikeFields"][] = "Gender";
$tdatawebsite_data[".googleLikeFields"][] = "Phone_Number";
$tdatawebsite_data[".googleLikeFields"][] = "Email";
$tdatawebsite_data[".googleLikeFields"][] = "Program_Year";
$tdatawebsite_data[".googleLikeFields"][] = "Title";
$tdatawebsite_data[".googleLikeFields"][] = "Online_Registered";



$tdatawebsite_data[".tableType"] = "list";

$tdatawebsite_data[".printerPageOrientation"] = 0;
$tdatawebsite_data[".nPrinterPageScale"] = 100;

$tdatawebsite_data[".nPrinterSplitRecords"] = 40;

$tdatawebsite_data[".geocodingEnabled"] = false;










$tdatawebsite_data[".pageSize"] = 20;

$tdatawebsite_data[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatawebsite_data[".strOrderBy"] = $tstrOrderBy;

$tdatawebsite_data[".orderindexes"] = array();


$tdatawebsite_data[".sqlHead"] = "SELECT First_Name,  	Middle_Name,  	Last_Name,  	concat(First_Name,' ',Middle_Name,' ',Last_Name) AS Full_Name,  	Gender,  	Phone_Number,  	Email,  	Program_Year,  	Title,  	Online_Registered";
$tdatawebsite_data[".sqlFrom"] = "FROM website_data";
$tdatawebsite_data[".sqlWhereExpr"] = "";
$tdatawebsite_data[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebsite_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebsite_data[".arrGroupsPerPage"] = $arrGPP;

$tdatawebsite_data[".highlightSearchResults"] = true;

$tableKeyswebsite_data = array();
$tableKeyswebsite_data[] = "Phone_Number";
$tableKeyswebsite_data[] = "Email";
$tdatawebsite_data[".Keys"] = $tableKeyswebsite_data;


$tdatawebsite_data[".hideMobileList"] = array();




//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","First_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "First_Name";

		$fdata["sourceSingle"] = "First_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "First_Name";

	
	
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


	$tdatawebsite_data["First_Name"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Middle_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Middle_Name";

		$fdata["sourceSingle"] = "Middle_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Middle_Name";

	
	
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


	$tdatawebsite_data["Middle_Name"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Last_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Last_Name";

		$fdata["sourceSingle"] = "Last_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Last_Name";

	
	
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


	$tdatawebsite_data["Last_Name"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Last_Name";
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("website_data","Full_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Full_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(First_Name,' ',Middle_Name,' ',Last_Name)";

	
	
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


	$tdatawebsite_data["Full_Name"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Full_Name";
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Gender";

		$fdata["sourceSingle"] = "Gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gender";

	
	
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


	$tdatawebsite_data["Gender"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Gender";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Phone_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone_Number";

		$fdata["sourceSingle"] = "Phone_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone_Number";

	
	
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


	$tdatawebsite_data["Phone_Number"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Phone_Number";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdatawebsite_data["Email"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Email";
//	Program_Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Program_Year";
	$fdata["GoodName"] = "Program_Year";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Program_Year");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Program_Year";

		$fdata["sourceSingle"] = "Program_Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Program_Year";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

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


	$tdatawebsite_data["Program_Year"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Program_Year";
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Title";

		$fdata["sourceSingle"] = "Title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Title";

	
	
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


	$tdatawebsite_data["Title"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Title";
//	Online_Registered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Online_Registered";
	$fdata["GoodName"] = "Online_Registered";
	$fdata["ownerTable"] = "website_data";
	$fdata["Label"] = GetFieldLabel("website_data","Online_Registered");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Online_Registered";

		$fdata["sourceSingle"] = "Online_Registered";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Online_Registered";

	
	
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


	$tdatawebsite_data["Online_Registered"] = $fdata;
		$tdatawebsite_data[".searchableFields"][] = "Online_Registered";


$tables_data["website_data"]=&$tdatawebsite_data;
$field_labels["website_data"] = &$fieldLabelswebsite_data;
$fieldToolTips["website_data"] = &$fieldToolTipswebsite_data;
$placeHolders["website_data"] = &$placeHolderswebsite_data;
$page_titles["website_data"] = &$pageTitleswebsite_data;


changeTextControlsToDate( "website_data" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["website_data"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["website_data"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["website_data"][0] = $masterParams;
				$masterTablesData["website_data"][0]["masterKeys"] = array();
	$masterTablesData["website_data"][0]["masterKeys"][]="Email_Address";
				$masterTablesData["website_data"][0]["detailKeys"] = array();
	$masterTablesData["website_data"][0]["detailKeys"][]="Email";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_website_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "First_Name,  	Middle_Name,  	Last_Name,  	concat(First_Name,' ',Middle_Name,' ',Last_Name) AS Full_Name,  	Gender,  	Phone_Number,  	Email,  	Program_Year,  	Title,  	Online_Registered";
$proto0["m_strFrom"] = "FROM website_data";
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
	"m_strName" => "First_Name",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto6["m_sql"] = "First_Name";
$proto6["m_srcTableName"] = "website_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto8["m_sql"] = "Middle_Name";
$proto8["m_srcTableName"] = "website_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto10["m_sql"] = "Last_Name";
$proto10["m_srcTableName"] = "website_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "First_Name"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Middle_Name"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Last_Name"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "concat(First_Name,' ',Middle_Name,' ',Last_Name)";
$proto12["m_srcTableName"] = "website_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Full_Name";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto19["m_sql"] = "Gender";
$proto19["m_srcTableName"] = "website_data";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto21["m_sql"] = "Phone_Number";
$proto21["m_srcTableName"] = "website_data";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto23["m_sql"] = "Email";
$proto23["m_srcTableName"] = "website_data";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Program_Year",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto25["m_sql"] = "Program_Year";
$proto25["m_srcTableName"] = "website_data";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto27["m_sql"] = "Title";
$proto27["m_srcTableName"] = "website_data";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Online_Registered",
	"m_strTable" => "website_data",
	"m_srcTableName" => "website_data"
));

$proto29["m_sql"] = "Online_Registered";
$proto29["m_srcTableName"] = "website_data";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "website_data";
$proto32["m_srcTableName"] = "website_data";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "First_Name";
$proto32["m_columns"][] = "Middle_Name";
$proto32["m_columns"][] = "Last_Name";
$proto32["m_columns"][] = "Gender";
$proto32["m_columns"][] = "Phone_Number";
$proto32["m_columns"][] = "Email";
$proto32["m_columns"][] = "Program_Year";
$proto32["m_columns"][] = "Title";
$proto32["m_columns"][] = "Online_Registered";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "website_data";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "website_data";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="website_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_website_data = createSqlQuery_website_data();


	
																								;

										

$tdatawebsite_data[".sqlquery"] = $queryData_website_data;



$tdatawebsite_data[".hasEvents"] = false;

?>