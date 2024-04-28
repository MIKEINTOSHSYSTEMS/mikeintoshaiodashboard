<?php
$tdatajobs = array();
$tdatajobs[".searchableFields"] = array();
$tdatajobs[".ShortName"] = "jobs";
$tdatajobs[".OwnerID"] = "";
$tdatajobs[".OriginalTable"] = "Jobs";


$tdatajobs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajobs[".originalPagesByType"] = $tdatajobs[".pagesByType"];
$tdatajobs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajobs[".originalPages"] = $tdatajobs[".pages"];
$tdatajobs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajobs[".originalDefaultPages"] = $tdatajobs[".defaultPages"];

//	field labels
$fieldLabelsjobs = array();
$fieldToolTipsjobs = array();
$pageTitlesjobs = array();
$placeHoldersjobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobs["English"] = array();
	$fieldToolTipsjobs["English"] = array();
	$placeHoldersjobs["English"] = array();
	$pageTitlesjobs["English"] = array();
	$fieldLabelsjobs["English"]["JobID"] = "Job ID";
	$fieldToolTipsjobs["English"]["JobID"] = "";
	$placeHoldersjobs["English"]["JobID"] = "";
	$fieldLabelsjobs["English"]["JobName"] = "Job Name";
	$fieldToolTipsjobs["English"]["JobName"] = "";
	$placeHoldersjobs["English"]["JobName"] = "";
	$fieldLabelsjobs["English"]["JobCategory"] = "Job Category";
	$fieldToolTipsjobs["English"]["JobCategory"] = "";
	$placeHoldersjobs["English"]["JobCategory"] = "";
	$fieldLabelsjobs["English"]["JobType"] = "Job Type";
	$fieldToolTipsjobs["English"]["JobType"] = "";
	$placeHoldersjobs["English"]["JobType"] = "";
	$fieldLabelsjobs["English"]["JobPosition"] = "Job Position";
	$fieldToolTipsjobs["English"]["JobPosition"] = "";
	$placeHoldersjobs["English"]["JobPosition"] = "";
	$fieldLabelsjobs["English"]["JobDetails"] = "Job Details";
	$fieldToolTipsjobs["English"]["JobDetails"] = "";
	$placeHoldersjobs["English"]["JobDetails"] = "";
	$fieldLabelsjobs["English"]["CompanyName"] = "Company Name";
	$fieldToolTipsjobs["English"]["CompanyName"] = "";
	$placeHoldersjobs["English"]["CompanyName"] = "";
	if (count($fieldToolTipsjobs["English"]))
		$tdatajobs[".isUseToolTips"] = true;
}


	$tdatajobs[".NCSearch"] = true;



$tdatajobs[".shortTableName"] = "jobs";
$tdatajobs[".nSecOptions"] = 0;

$tdatajobs[".mainTableOwnerID"] = "";
$tdatajobs[".entityType"] = 0;
$tdatajobs[".connId"] = "deredevatderejadevmerqconsulta";


$tdatajobs[".strOriginalTableName"] = "Jobs";

	



$tdatajobs[".showAddInPopup"] = false;

$tdatajobs[".showEditInPopup"] = false;

$tdatajobs[".showViewInPopup"] = false;

$tdatajobs[".listAjax"] = false;
//	temporary
//$tdatajobs[".listAjax"] = false;

	$tdatajobs[".audit"] = true;

	$tdatajobs[".locking"] = false;


$pages = $tdatajobs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajobs[".edit"] = true;
	$tdatajobs[".afterEditAction"] = 1;
	$tdatajobs[".closePopupAfterEdit"] = 1;
	$tdatajobs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajobs[".add"] = true;
$tdatajobs[".afterAddAction"] = 1;
$tdatajobs[".closePopupAfterAdd"] = 1;
$tdatajobs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajobs[".list"] = true;
}



$tdatajobs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajobs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajobs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajobs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajobs[".printFriendly"] = true;
}



$tdatajobs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajobs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajobs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajobs[".isUseAjaxSuggest"] = true;



						

$tdatajobs[".ajaxCodeSnippetAdded"] = false;

$tdatajobs[".buttonsAdded"] = false;

$tdatajobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobs[".isUseTimeForSearch"] = false;


$tdatajobs[".badgeColor"] = "6493ea";


$tdatajobs[".allSearchFields"] = array();
$tdatajobs[".filterFields"] = array();
$tdatajobs[".requiredSearchFields"] = array();

$tdatajobs[".googleLikeFields"] = array();
$tdatajobs[".googleLikeFields"][] = "JobID";
$tdatajobs[".googleLikeFields"][] = "JobName";
$tdatajobs[".googleLikeFields"][] = "JobCategory";
$tdatajobs[".googleLikeFields"][] = "JobType";
$tdatajobs[".googleLikeFields"][] = "JobPosition";
$tdatajobs[".googleLikeFields"][] = "JobDetails";
$tdatajobs[".googleLikeFields"][] = "CompanyName";



$tdatajobs[".tableType"] = "list";

$tdatajobs[".printerPageOrientation"] = 0;
$tdatajobs[".nPrinterPageScale"] = 100;

$tdatajobs[".nPrinterSplitRecords"] = 40;

$tdatajobs[".geocodingEnabled"] = false;










$tdatajobs[".pageSize"] = 20;

$tdatajobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatajobs[".strOrderBy"] = $tstrOrderBy;

$tdatajobs[".orderindexes"] = array();


$tdatajobs[".sqlHead"] = "SELECT JobID,  	JobName,  	JobCategory,  	JobType,  	JobPosition,  	JobDetails,  	CompanyName";
$tdatajobs[".sqlFrom"] = "FROM Jobs";
$tdatajobs[".sqlWhereExpr"] = "";
$tdatajobs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobs[".arrGroupsPerPage"] = $arrGPP;

$tdatajobs[".highlightSearchResults"] = true;

$tableKeysjobs = array();
$tableKeysjobs[] = "JobID";
$tdatajobs[".Keys"] = $tableKeysjobs;


$tdatajobs[".hideMobileList"] = array();




//	JobID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "JobID";
	$fdata["GoodName"] = "JobID";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","JobID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "JobID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JobID";

	
	
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


	$tdatajobs["JobID"] = $fdata;
		$tdatajobs[".searchableFields"][] = "JobID";
//	JobName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "JobName";
	$fdata["GoodName"] = "JobName";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","JobName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "JobName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JobName";

	
	
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


	$tdatajobs["JobName"] = $fdata;
		$tdatajobs[".searchableFields"][] = "JobName";
//	JobCategory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "JobCategory";
	$fdata["GoodName"] = "JobCategory";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","JobCategory");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "JobCategory";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JobCategory";

	
	
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
	$edata["LookupTable"] = "Job_Categories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CategoryID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CategoryName";

	

	
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


	$tdatajobs["JobCategory"] = $fdata;
		$tdatajobs[".searchableFields"][] = "JobCategory";
//	JobType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "JobType";
	$fdata["GoodName"] = "JobType";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","JobType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "JobType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JobType";

	
	
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
	$edata["LookupTable"] = "Job_Types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TypeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TypeName";

	

	
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


	$tdatajobs["JobType"] = $fdata;
		$tdatajobs[".searchableFields"][] = "JobType";
//	JobPosition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "JobPosition";
	$fdata["GoodName"] = "JobPosition";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","JobPosition");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "JobPosition";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JobPosition";

	
	
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


	$tdatajobs["JobPosition"] = $fdata;
		$tdatajobs[".searchableFields"][] = "JobPosition";
//	JobDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "JobDetails";
	$fdata["GoodName"] = "JobDetails";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","JobDetails");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "JobDetails";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JobDetails";

	
	
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


	$tdatajobs["JobDetails"] = $fdata;
		$tdatajobs[".searchableFields"][] = "JobDetails";
//	CompanyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CompanyName";
	$fdata["GoodName"] = "CompanyName";
	$fdata["ownerTable"] = "Jobs";
	$fdata["Label"] = GetFieldLabel("Jobs","CompanyName");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Companies";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CompanyID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CompanyName";

	

	
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


	$tdatajobs["CompanyName"] = $fdata;
		$tdatajobs[".searchableFields"][] = "CompanyName";


$tables_data["Jobs"]=&$tdatajobs;
$field_labels["Jobs"] = &$fieldLabelsjobs;
$fieldToolTips["Jobs"] = &$fieldToolTipsjobs;
$placeHolders["Jobs"] = &$placeHoldersjobs;
$page_titles["Jobs"] = &$pageTitlesjobs;


changeTextControlsToDate( "Jobs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Jobs"] = array();
//	Candidate_Employment_Tracker
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Candidate_Employment_Tracker";
		$detailsParam["dOriginalTable"] = "Candidate_Employment_Tracker";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "candidate_employment_tracker";
	$detailsParam["dCaptionTable"] = GetTableCaption("Candidate_Employment_Tracker");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Jobs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Jobs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["masterKeys"][]="JobID";

	$detailsTablesData["Jobs"][$dIndex]["masterKeys"][]="JobPosition";

	$detailsTablesData["Jobs"][$dIndex]["masterKeys"][]="JobType";

				$detailsTablesData["Jobs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["detailKeys"][]="JobID";

		
	$detailsTablesData["Jobs"][$dIndex]["detailKeys"][]="Job_Position";

		
	$detailsTablesData["Jobs"][$dIndex]["detailKeys"][]="Job_Type";
//	Job_Categories
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Job_Categories";
		$detailsParam["dOriginalTable"] = "Job_Categories";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "job_categories";
	$detailsParam["dCaptionTable"] = GetTableCaption("Job_Categories");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Jobs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Jobs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["masterKeys"][]="JobCategory";

				$detailsTablesData["Jobs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["detailKeys"][]="CategoryName";
//	Job_Types
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Job_Types";
		$detailsParam["dOriginalTable"] = "Job_Types";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "job_types";
	$detailsParam["dCaptionTable"] = GetTableCaption("Job_Types");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Jobs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Jobs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["masterKeys"][]="JobType";

				$detailsTablesData["Jobs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["detailKeys"][]="TypeName";
//	Candidate_Employment_Tracker_view
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Candidate_Employment_Tracker_view";
		$detailsParam["dOriginalTable"] = "Candidate_Employment_Tracker";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "candidate_employment_tracker_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("Candidate_Employment_Tracker_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Jobs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Jobs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["masterKeys"][]="JobID";

				$detailsTablesData["Jobs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Jobs"][$dIndex]["detailKeys"][]="JobID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Jobs"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Companies";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Companies";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "companies";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Jobs"][0] = $masterParams;
				$masterTablesData["Jobs"][0]["masterKeys"] = array();
	$masterTablesData["Jobs"][0]["masterKeys"][]="CompanyID";
				$masterTablesData["Jobs"][0]["masterKeys"][]="CompanyJob";
				$masterTablesData["Jobs"][0]["masterKeys"][]="CompanyName";
				$masterTablesData["Jobs"][0]["detailKeys"] = array();
	$masterTablesData["Jobs"][0]["detailKeys"][]="JobID";
				$masterTablesData["Jobs"][0]["detailKeys"][]="JobPosition";
				$masterTablesData["Jobs"][0]["detailKeys"][]="CompanyName";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "JobID,  	JobName,  	JobCategory,  	JobType,  	JobPosition,  	JobDetails,  	CompanyName";
$proto0["m_strFrom"] = "FROM Jobs";
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
	"m_strName" => "JobID",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto6["m_sql"] = "JobID";
$proto6["m_srcTableName"] = "Jobs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "JobName",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto8["m_sql"] = "JobName";
$proto8["m_srcTableName"] = "Jobs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "JobCategory",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto10["m_sql"] = "JobCategory";
$proto10["m_srcTableName"] = "Jobs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "JobType",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto12["m_sql"] = "JobType";
$proto12["m_srcTableName"] = "Jobs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "JobPosition",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto14["m_sql"] = "JobPosition";
$proto14["m_srcTableName"] = "Jobs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "JobDetails",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto16["m_sql"] = "JobDetails";
$proto16["m_srcTableName"] = "Jobs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyName",
	"m_strTable" => "Jobs",
	"m_srcTableName" => "Jobs"
));

$proto18["m_sql"] = "CompanyName";
$proto18["m_srcTableName"] = "Jobs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Jobs";
$proto21["m_srcTableName"] = "Jobs";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "JobID";
$proto21["m_columns"][] = "JobName";
$proto21["m_columns"][] = "JobCategory";
$proto21["m_columns"][] = "JobType";
$proto21["m_columns"][] = "JobPosition";
$proto21["m_columns"][] = "JobDetails";
$proto21["m_columns"][] = "CompanyName";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "Jobs";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Jobs";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobs = createSqlQuery_jobs();


	
																								;

							

$tdatajobs[".sqlquery"] = $queryData_jobs;



$tdatajobs[".hasEvents"] = false;

?>