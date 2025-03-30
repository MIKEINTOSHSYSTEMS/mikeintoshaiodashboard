<?php
$tdatajob_fair = array();
$tdatajob_fair[".searchableFields"] = array();
$tdatajob_fair[".ShortName"] = "job_fair";
$tdatajob_fair[".OwnerID"] = "";
$tdatajob_fair[".OriginalTable"] = "Job_Fair";


$tdatajob_fair[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajob_fair[".originalPagesByType"] = $tdatajob_fair[".pagesByType"];
$tdatajob_fair[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajob_fair[".originalPages"] = $tdatajob_fair[".pages"];
$tdatajob_fair[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajob_fair[".originalDefaultPages"] = $tdatajob_fair[".defaultPages"];

//	field labels
$fieldLabelsjob_fair = array();
$fieldToolTipsjob_fair = array();
$pageTitlesjob_fair = array();
$placeHoldersjob_fair = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjob_fair["English"] = array();
	$fieldToolTipsjob_fair["English"] = array();
	$placeHoldersjob_fair["English"] = array();
	$pageTitlesjob_fair["English"] = array();
	$fieldLabelsjob_fair["English"]["First_Name"] = "First Name";
	$fieldToolTipsjob_fair["English"]["First_Name"] = "";
	$placeHoldersjob_fair["English"]["First_Name"] = "";
	$fieldLabelsjob_fair["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipsjob_fair["English"]["Middle_Name"] = "";
	$placeHoldersjob_fair["English"]["Middle_Name"] = "";
	$fieldLabelsjob_fair["English"]["Last_Name"] = "Last Name";
	$fieldToolTipsjob_fair["English"]["Last_Name"] = "";
	$placeHoldersjob_fair["English"]["Last_Name"] = "";
	$fieldLabelsjob_fair["English"]["Full_Name"] = "Full Name";
	$fieldToolTipsjob_fair["English"]["Full_Name"] = "";
	$placeHoldersjob_fair["English"]["Full_Name"] = "";
	$fieldLabelsjob_fair["English"]["Gender"] = "Gender";
	$fieldToolTipsjob_fair["English"]["Gender"] = "";
	$placeHoldersjob_fair["English"]["Gender"] = "";
	$fieldLabelsjob_fair["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipsjob_fair["English"]["Phone_Number"] = "";
	$placeHoldersjob_fair["English"]["Phone_Number"] = "";
	$fieldLabelsjob_fair["English"]["Email"] = "Email";
	$fieldToolTipsjob_fair["English"]["Email"] = "";
	$placeHoldersjob_fair["English"]["Email"] = "";
	$fieldLabelsjob_fair["English"]["University"] = "University";
	$fieldToolTipsjob_fair["English"]["University"] = "";
	$placeHoldersjob_fair["English"]["University"] = "";
	$fieldLabelsjob_fair["English"]["Department"] = "Department";
	$fieldToolTipsjob_fair["English"]["Department"] = "";
	$placeHoldersjob_fair["English"]["Department"] = "";
	if (count($fieldToolTipsjob_fair["English"]))
		$tdatajob_fair[".isUseToolTips"] = true;
}


	$tdatajob_fair[".NCSearch"] = true;



$tdatajob_fair[".shortTableName"] = "job_fair";
$tdatajob_fair[".nSecOptions"] = 0;

$tdatajob_fair[".mainTableOwnerID"] = "";
$tdatajob_fair[".entityType"] = 0;
$tdatajob_fair[".connId"] = "deredevatderejadevmerqconsulta";


$tdatajob_fair[".strOriginalTableName"] = "Job_Fair";

	



$tdatajob_fair[".showAddInPopup"] = false;

$tdatajob_fair[".showEditInPopup"] = false;

$tdatajob_fair[".showViewInPopup"] = false;

$tdatajob_fair[".listAjax"] = false;
//	temporary
//$tdatajob_fair[".listAjax"] = false;

	$tdatajob_fair[".audit"] = true;

	$tdatajob_fair[".locking"] = false;


$pages = $tdatajob_fair[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajob_fair[".edit"] = true;
	$tdatajob_fair[".afterEditAction"] = 1;
	$tdatajob_fair[".closePopupAfterEdit"] = 1;
	$tdatajob_fair[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajob_fair[".add"] = true;
$tdatajob_fair[".afterAddAction"] = 1;
$tdatajob_fair[".closePopupAfterAdd"] = 1;
$tdatajob_fair[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajob_fair[".list"] = true;
}



$tdatajob_fair[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajob_fair[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajob_fair[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajob_fair[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajob_fair[".printFriendly"] = true;
}



$tdatajob_fair[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajob_fair[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajob_fair[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajob_fair[".isUseAjaxSuggest"] = true;



												

$tdatajob_fair[".ajaxCodeSnippetAdded"] = false;

$tdatajob_fair[".buttonsAdded"] = false;

$tdatajob_fair[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajob_fair[".isUseTimeForSearch"] = false;


$tdatajob_fair[".badgeColor"] = "00c2c5";


$tdatajob_fair[".allSearchFields"] = array();
$tdatajob_fair[".filterFields"] = array();
$tdatajob_fair[".requiredSearchFields"] = array();

$tdatajob_fair[".googleLikeFields"] = array();
$tdatajob_fair[".googleLikeFields"][] = "First_Name";
$tdatajob_fair[".googleLikeFields"][] = "Middle_Name";
$tdatajob_fair[".googleLikeFields"][] = "Last_Name";
$tdatajob_fair[".googleLikeFields"][] = "Full_Name";
$tdatajob_fair[".googleLikeFields"][] = "Gender";
$tdatajob_fair[".googleLikeFields"][] = "Phone_Number";
$tdatajob_fair[".googleLikeFields"][] = "Email";
$tdatajob_fair[".googleLikeFields"][] = "University";
$tdatajob_fair[".googleLikeFields"][] = "Department";



$tdatajob_fair[".tableType"] = "list";

$tdatajob_fair[".printerPageOrientation"] = 0;
$tdatajob_fair[".nPrinterPageScale"] = 100;

$tdatajob_fair[".nPrinterSplitRecords"] = 40;

$tdatajob_fair[".geocodingEnabled"] = false;










$tdatajob_fair[".pageSize"] = 20;

$tdatajob_fair[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatajob_fair[".strOrderBy"] = $tstrOrderBy;

$tdatajob_fair[".orderindexes"] = array();


$tdatajob_fair[".sqlHead"] = "SELECT First_Name,  	Middle_Name,  	Last_Name,  	Full_Name,  	Gender,  	Phone_Number,  	Email,  	University,  	Department";
$tdatajob_fair[".sqlFrom"] = "FROM Job_Fair";
$tdatajob_fair[".sqlWhereExpr"] = "";
$tdatajob_fair[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajob_fair[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajob_fair[".arrGroupsPerPage"] = $arrGPP;

$tdatajob_fair[".highlightSearchResults"] = true;

$tableKeysjob_fair = array();
$tableKeysjob_fair[] = "Phone_Number";
$tableKeysjob_fair[] = "Email";
$tdatajob_fair[".Keys"] = $tableKeysjob_fair;


$tdatajob_fair[".hideMobileList"] = array();




//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","First_Name");
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


	$tdatajob_fair["First_Name"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Middle_Name");
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


	$tdatajob_fair["Middle_Name"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Last_Name");
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


	$tdatajob_fair["Last_Name"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Last_Name";
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Full_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Full_Name";

		$fdata["sourceSingle"] = "Full_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Full_Name";

	
	
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


	$tdatajob_fair["Full_Name"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Full_Name";
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Gender");
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


	$tdatajob_fair["Gender"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Gender";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Phone_Number");
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


	$tdatajob_fair["Phone_Number"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Phone_Number";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Email");
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


	$tdatajob_fair["Email"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Email";
//	University
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "University";
	$fdata["GoodName"] = "University";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","University");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "University";

		$fdata["sourceSingle"] = "University";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "University";

	
	
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


	$tdatajob_fair["University"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "University";
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "Job_Fair";
	$fdata["Label"] = GetFieldLabel("Job_Fair","Department");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Department";

		$fdata["sourceSingle"] = "Department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Department";

	
	
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


	$tdatajob_fair["Department"] = $fdata;
		$tdatajob_fair[".searchableFields"][] = "Department";


$tables_data["Job_Fair"]=&$tdatajob_fair;
$field_labels["Job_Fair"] = &$fieldLabelsjob_fair;
$fieldToolTips["Job_Fair"] = &$fieldToolTipsjob_fair;
$placeHolders["Job_Fair"] = &$placeHoldersjob_fair;
$page_titles["Job_Fair"] = &$pageTitlesjob_fair;


changeTextControlsToDate( "Job_Fair" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Job_Fair"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Job_Fair"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Job_Fair"][0] = $masterParams;
				$masterTablesData["Job_Fair"][0]["masterKeys"] = array();
	$masterTablesData["Job_Fair"][0]["masterKeys"][]="Email_Address";
				$masterTablesData["Job_Fair"][0]["masterKeys"][]="Phone_Number";
				$masterTablesData["Job_Fair"][0]["detailKeys"] = array();
	$masterTablesData["Job_Fair"][0]["detailKeys"][]="Email";
				$masterTablesData["Job_Fair"][0]["detailKeys"][]="Phone_Number";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_job_fair()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "First_Name,  	Middle_Name,  	Last_Name,  	Full_Name,  	Gender,  	Phone_Number,  	Email,  	University,  	Department";
$proto0["m_strFrom"] = "FROM Job_Fair";
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
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto6["m_sql"] = "First_Name";
$proto6["m_srcTableName"] = "Job_Fair";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto8["m_sql"] = "Middle_Name";
$proto8["m_srcTableName"] = "Job_Fair";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto10["m_sql"] = "Last_Name";
$proto10["m_srcTableName"] = "Job_Fair";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Full_Name",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto12["m_sql"] = "Full_Name";
$proto12["m_srcTableName"] = "Job_Fair";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto14["m_sql"] = "Gender";
$proto14["m_srcTableName"] = "Job_Fair";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto16["m_sql"] = "Phone_Number";
$proto16["m_srcTableName"] = "Job_Fair";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto18["m_sql"] = "Email";
$proto18["m_srcTableName"] = "Job_Fair";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "University",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto20["m_sql"] = "University";
$proto20["m_srcTableName"] = "Job_Fair";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "Job_Fair",
	"m_srcTableName" => "Job_Fair"
));

$proto22["m_sql"] = "Department";
$proto22["m_srcTableName"] = "Job_Fair";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "Job_Fair";
$proto25["m_srcTableName"] = "Job_Fair";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "First_Name";
$proto25["m_columns"][] = "Middle_Name";
$proto25["m_columns"][] = "Last_Name";
$proto25["m_columns"][] = "Full_Name";
$proto25["m_columns"][] = "Gender";
$proto25["m_columns"][] = "Phone_Number";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "University";
$proto25["m_columns"][] = "Department";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "Job_Fair";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Job_Fair";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Job_Fair";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_job_fair = createSqlQuery_job_fair();


	
																								;

									

$tdatajob_fair[".sqlquery"] = $queryData_job_fair;



$tdatajob_fair[".hasEvents"] = false;

?>