<?php
$tdatacompanies = array();
$tdatacompanies[".searchableFields"] = array();
$tdatacompanies[".ShortName"] = "companies";
$tdatacompanies[".OwnerID"] = "";
$tdatacompanies[".OriginalTable"] = "Companies";


$tdatacompanies[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacompanies[".originalPagesByType"] = $tdatacompanies[".pagesByType"];
$tdatacompanies[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacompanies[".originalPages"] = $tdatacompanies[".pages"];
$tdatacompanies[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacompanies[".originalDefaultPages"] = $tdatacompanies[".defaultPages"];

//	field labels
$fieldLabelscompanies = array();
$fieldToolTipscompanies = array();
$pageTitlescompanies = array();
$placeHolderscompanies = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscompanies["English"] = array();
	$fieldToolTipscompanies["English"] = array();
	$placeHolderscompanies["English"] = array();
	$pageTitlescompanies["English"] = array();
	$fieldLabelscompanies["English"]["CompanyID"] = "Company ID";
	$fieldToolTipscompanies["English"]["CompanyID"] = "";
	$placeHolderscompanies["English"]["CompanyID"] = "";
	$fieldLabelscompanies["English"]["CompanyName"] = "Company Name";
	$fieldToolTipscompanies["English"]["CompanyName"] = "";
	$placeHolderscompanies["English"]["CompanyName"] = "";
	$fieldLabelscompanies["English"]["CompanyEmail"] = "Company Email";
	$fieldToolTipscompanies["English"]["CompanyEmail"] = "";
	$placeHolderscompanies["English"]["CompanyEmail"] = "";
	$fieldLabelscompanies["English"]["CompanyPhone"] = "Company Phone";
	$fieldToolTipscompanies["English"]["CompanyPhone"] = "";
	$placeHolderscompanies["English"]["CompanyPhone"] = "";
	$fieldLabelscompanies["English"]["CompanyWebsite"] = "Company Website";
	$fieldToolTipscompanies["English"]["CompanyWebsite"] = "";
	$placeHolderscompanies["English"]["CompanyWebsite"] = "";
	$fieldLabelscompanies["English"]["CompanySector"] = "Company Sector";
	$fieldToolTipscompanies["English"]["CompanySector"] = "";
	$placeHolderscompanies["English"]["CompanySector"] = "";
	$fieldLabelscompanies["English"]["CompanyProfile"] = "Company Profile";
	$fieldToolTipscompanies["English"]["CompanyProfile"] = "";
	$placeHolderscompanies["English"]["CompanyProfile"] = "";
	$fieldLabelscompanies["English"]["CompanyJob"] = "Company Job";
	$fieldToolTipscompanies["English"]["CompanyJob"] = "";
	$placeHolderscompanies["English"]["CompanyJob"] = "";
	if (count($fieldToolTipscompanies["English"]))
		$tdatacompanies[".isUseToolTips"] = true;
}


	$tdatacompanies[".NCSearch"] = true;



$tdatacompanies[".shortTableName"] = "companies";
$tdatacompanies[".nSecOptions"] = 0;

$tdatacompanies[".mainTableOwnerID"] = "";
$tdatacompanies[".entityType"] = 0;
$tdatacompanies[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacompanies[".strOriginalTableName"] = "Companies";

	



$tdatacompanies[".showAddInPopup"] = false;

$tdatacompanies[".showEditInPopup"] = false;

$tdatacompanies[".showViewInPopup"] = false;

$tdatacompanies[".listAjax"] = false;
//	temporary
//$tdatacompanies[".listAjax"] = false;

	$tdatacompanies[".audit"] = true;

	$tdatacompanies[".locking"] = false;


$pages = $tdatacompanies[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacompanies[".edit"] = true;
	$tdatacompanies[".afterEditAction"] = 1;
	$tdatacompanies[".closePopupAfterEdit"] = 1;
	$tdatacompanies[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacompanies[".add"] = true;
$tdatacompanies[".afterAddAction"] = 1;
$tdatacompanies[".closePopupAfterAdd"] = 1;
$tdatacompanies[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacompanies[".list"] = true;
}



$tdatacompanies[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacompanies[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacompanies[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacompanies[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacompanies[".printFriendly"] = true;
}



$tdatacompanies[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacompanies[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacompanies[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacompanies[".isUseAjaxSuggest"] = true;



						

$tdatacompanies[".ajaxCodeSnippetAdded"] = false;

$tdatacompanies[".buttonsAdded"] = false;

$tdatacompanies[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacompanies[".isUseTimeForSearch"] = false;


$tdatacompanies[".badgeColor"] = "EDCA00";


$tdatacompanies[".allSearchFields"] = array();
$tdatacompanies[".filterFields"] = array();
$tdatacompanies[".requiredSearchFields"] = array();

$tdatacompanies[".googleLikeFields"] = array();
$tdatacompanies[".googleLikeFields"][] = "CompanyID";
$tdatacompanies[".googleLikeFields"][] = "CompanyName";
$tdatacompanies[".googleLikeFields"][] = "CompanyEmail";
$tdatacompanies[".googleLikeFields"][] = "CompanyPhone";
$tdatacompanies[".googleLikeFields"][] = "CompanyWebsite";
$tdatacompanies[".googleLikeFields"][] = "CompanySector";
$tdatacompanies[".googleLikeFields"][] = "CompanyProfile";
$tdatacompanies[".googleLikeFields"][] = "CompanyJob";



$tdatacompanies[".tableType"] = "list";

$tdatacompanies[".printerPageOrientation"] = 0;
$tdatacompanies[".nPrinterPageScale"] = 100;

$tdatacompanies[".nPrinterSplitRecords"] = 40;

$tdatacompanies[".geocodingEnabled"] = false;










$tdatacompanies[".pageSize"] = 20;

$tdatacompanies[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacompanies[".strOrderBy"] = $tstrOrderBy;

$tdatacompanies[".orderindexes"] = array();


$tdatacompanies[".sqlHead"] = "SELECT CompanyID,  	CompanyName,  	CompanyEmail,  	CompanyPhone,  	CompanyWebsite,  	CompanySector,  	CompanyProfile,  	CompanyJob";
$tdatacompanies[".sqlFrom"] = "FROM Companies";
$tdatacompanies[".sqlWhereExpr"] = "";
$tdatacompanies[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompanies[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompanies[".arrGroupsPerPage"] = $arrGPP;

$tdatacompanies[".highlightSearchResults"] = true;

$tableKeyscompanies = array();
$tableKeyscompanies[] = "CompanyID";
$tdatacompanies[".Keys"] = $tableKeyscompanies;


$tdatacompanies[".hideMobileList"] = array();




//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CompanyID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyID";

	
	
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


	$tdatacompanies["CompanyID"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyID";
//	CompanyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyName";
	$fdata["GoodName"] = "CompanyName";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanyName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyName";

	
	
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


	$tdatacompanies["CompanyName"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyName";
//	CompanyEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CompanyEmail";
	$fdata["GoodName"] = "CompanyEmail";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanyEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyEmail";

	
	
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


	$tdatacompanies["CompanyEmail"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyEmail";
//	CompanyPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CompanyPhone";
	$fdata["GoodName"] = "CompanyPhone";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyPhone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanyPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyPhone";

	
	
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
			$edata["EditParams"].= " maxlength=13";

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


	$tdatacompanies["CompanyPhone"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyPhone";
//	CompanyWebsite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CompanyWebsite";
	$fdata["GoodName"] = "CompanyWebsite";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyWebsite");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanyWebsite";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyWebsite";

	
	
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


	$tdatacompanies["CompanyWebsite"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyWebsite";
//	CompanySector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CompanySector";
	$fdata["GoodName"] = "CompanySector";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanySector");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanySector";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanySector";

	
	
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
	$edata["LookupTable"] = "CompanySectors";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CompanySectorID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CompanySectorName";

	

	
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


	$tdatacompanies["CompanySector"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanySector";
//	CompanyProfile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CompanyProfile";
	$fdata["GoodName"] = "CompanyProfile";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyProfile");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "CompanyProfile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyProfile";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacompanies["CompanyProfile"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyProfile";
//	CompanyJob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CompanyJob";
	$fdata["GoodName"] = "CompanyJob";
	$fdata["ownerTable"] = "Companies";
	$fdata["Label"] = GetFieldLabel("Companies","CompanyJob");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CompanyJob";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyJob";

	
	
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
	$edata["LookupTable"] = "Jobs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "JobID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "JobPosition";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
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


	$tdatacompanies["CompanyJob"] = $fdata;
		$tdatacompanies[".searchableFields"][] = "CompanyJob";


$tables_data["Companies"]=&$tdatacompanies;
$field_labels["Companies"] = &$fieldLabelscompanies;
$fieldToolTips["Companies"] = &$fieldToolTipscompanies;
$placeHolders["Companies"] = &$placeHolderscompanies;
$page_titles["Companies"] = &$pageTitlescompanies;


changeTextControlsToDate( "Companies" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Companies"] = array();
//	Jobs
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Jobs";
		$detailsParam["dOriginalTable"] = "Jobs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "jobs";
	$detailsParam["dCaptionTable"] = GetTableCaption("Jobs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Companies"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Companies"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Companies"][$dIndex]["masterKeys"][]="CompanyID";

	$detailsTablesData["Companies"][$dIndex]["masterKeys"][]="CompanyJob";

	$detailsTablesData["Companies"][$dIndex]["masterKeys"][]="CompanyName";

				$detailsTablesData["Companies"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Companies"][$dIndex]["detailKeys"][]="JobID";

		
	$detailsTablesData["Companies"][$dIndex]["detailKeys"][]="JobPosition";

		
	$detailsTablesData["Companies"][$dIndex]["detailKeys"][]="CompanyName";
//	CompanySectors
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="CompanySectors";
		$detailsParam["dOriginalTable"] = "CompanySectors";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "companysectors";
	$detailsParam["dCaptionTable"] = GetTableCaption("CompanySectors");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Companies"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Companies"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Companies"][$dIndex]["masterKeys"][]="CompanyID";

	$detailsTablesData["Companies"][$dIndex]["masterKeys"][]="CompanySector";

				$detailsTablesData["Companies"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Companies"][$dIndex]["detailKeys"][]="CompanySectorID";

		
	$detailsTablesData["Companies"][$dIndex]["detailKeys"][]="CompanySectorName";
//	candidates
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="candidates";
		$detailsParam["dOriginalTable"] = "candidates";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "candidates";
	$detailsParam["dCaptionTable"] = GetTableCaption("candidates");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Companies"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Companies"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Companies"][$dIndex]["masterKeys"][]="CompanyID";

				$detailsTablesData["Companies"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Companies"][$dIndex]["detailKeys"][]="CandidateID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Companies"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_companies()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CompanyID,  	CompanyName,  	CompanyEmail,  	CompanyPhone,  	CompanyWebsite,  	CompanySector,  	CompanyProfile,  	CompanyJob";
$proto0["m_strFrom"] = "FROM Companies";
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
	"m_strName" => "CompanyID",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto6["m_sql"] = "CompanyID";
$proto6["m_srcTableName"] = "Companies";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyName",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto8["m_sql"] = "CompanyName";
$proto8["m_srcTableName"] = "Companies";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyEmail",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto10["m_sql"] = "CompanyEmail";
$proto10["m_srcTableName"] = "Companies";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyPhone",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto12["m_sql"] = "CompanyPhone";
$proto12["m_srcTableName"] = "Companies";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyWebsite",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto14["m_sql"] = "CompanyWebsite";
$proto14["m_srcTableName"] = "Companies";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanySector",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto16["m_sql"] = "CompanySector";
$proto16["m_srcTableName"] = "Companies";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyProfile",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto18["m_sql"] = "CompanyProfile";
$proto18["m_srcTableName"] = "Companies";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyJob",
	"m_strTable" => "Companies",
	"m_srcTableName" => "Companies"
));

$proto20["m_sql"] = "CompanyJob";
$proto20["m_srcTableName"] = "Companies";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Companies";
$proto23["m_srcTableName"] = "Companies";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "CompanyID";
$proto23["m_columns"][] = "CompanyName";
$proto23["m_columns"][] = "CompanyEmail";
$proto23["m_columns"][] = "CompanyPhone";
$proto23["m_columns"][] = "CompanyWebsite";
$proto23["m_columns"][] = "CompanySector";
$proto23["m_columns"][] = "CompanyProfile";
$proto23["m_columns"][] = "CompanyJob";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "Companies";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Companies";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Companies";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_companies = createSqlQuery_companies();


	
																								;

								

$tdatacompanies[".sqlquery"] = $queryData_companies;



$tdatacompanies[".hasEvents"] = false;

?>