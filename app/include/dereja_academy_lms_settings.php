<?php
$tdatadereja_academy_lms = array();
$tdatadereja_academy_lms[".searchableFields"] = array();
$tdatadereja_academy_lms[".ShortName"] = "dereja_academy_lms";
$tdatadereja_academy_lms[".OwnerID"] = "";
$tdatadereja_academy_lms[".OriginalTable"] = "dereja_academy_lms";


$tdatadereja_academy_lms[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_academy_lms[".originalPagesByType"] = $tdatadereja_academy_lms[".pagesByType"];
$tdatadereja_academy_lms[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_academy_lms[".originalPages"] = $tdatadereja_academy_lms[".pages"];
$tdatadereja_academy_lms[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_academy_lms[".originalDefaultPages"] = $tdatadereja_academy_lms[".defaultPages"];

//	field labels
$fieldLabelsdereja_academy_lms = array();
$fieldToolTipsdereja_academy_lms = array();
$pageTitlesdereja_academy_lms = array();
$placeHoldersdereja_academy_lms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_academy_lms["English"] = array();
	$fieldToolTipsdereja_academy_lms["English"] = array();
	$placeHoldersdereja_academy_lms["English"] = array();
	$pageTitlesdereja_academy_lms["English"] = array();
	$fieldLabelsdereja_academy_lms["English"]["TraineeID"] = "Trainee ID";
	$fieldToolTipsdereja_academy_lms["English"]["TraineeID"] = "";
	$placeHoldersdereja_academy_lms["English"]["TraineeID"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Full_Name"] = "Full Name";
	$fieldToolTipsdereja_academy_lms["English"]["Full_Name"] = "";
	$placeHoldersdereja_academy_lms["English"]["Full_Name"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Email"] = "Email";
	$fieldToolTipsdereja_academy_lms["English"]["Email"] = "";
	$placeHoldersdereja_academy_lms["English"]["Email"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Role"] = "Role";
	$fieldToolTipsdereja_academy_lms["English"]["Role"] = "";
	$placeHoldersdereja_academy_lms["English"]["Role"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Progress"] = "Progress";
	$fieldToolTipsdereja_academy_lms["English"]["Progress"] = "";
	$placeHoldersdereja_academy_lms["English"]["Progress"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Score"] = "Score";
	$fieldToolTipsdereja_academy_lms["English"]["Score"] = "";
	$placeHoldersdereja_academy_lms["English"]["Score"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Completion_date"] = "Completion Date";
	$fieldToolTipsdereja_academy_lms["English"]["Completion_date"] = "";
	$placeHoldersdereja_academy_lms["English"]["Completion_date"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Time"] = "Time";
	$fieldToolTipsdereja_academy_lms["English"]["Time"] = "";
	$placeHoldersdereja_academy_lms["English"]["Time"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Gender"] = "Gender";
	$fieldToolTipsdereja_academy_lms["English"]["Gender"] = "";
	$placeHoldersdereja_academy_lms["English"]["Gender"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Phone"] = "Phone";
	$fieldToolTipsdereja_academy_lms["English"]["Phone"] = "";
	$placeHoldersdereja_academy_lms["English"]["Phone"] = "";
	$fieldLabelsdereja_academy_lms["English"]["University"] = "University";
	$fieldToolTipsdereja_academy_lms["English"]["University"] = "";
	$placeHoldersdereja_academy_lms["English"]["University"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Department"] = "Department";
	$fieldToolTipsdereja_academy_lms["English"]["Department"] = "";
	$placeHoldersdereja_academy_lms["English"]["Department"] = "";
	$fieldLabelsdereja_academy_lms["English"]["Career_Choice"] = "Career Choice";
	$fieldToolTipsdereja_academy_lms["English"]["Career_Choice"] = "";
	$placeHoldersdereja_academy_lms["English"]["Career_Choice"] = "";
	if (count($fieldToolTipsdereja_academy_lms["English"]))
		$tdatadereja_academy_lms[".isUseToolTips"] = true;
}


	$tdatadereja_academy_lms[".NCSearch"] = true;



$tdatadereja_academy_lms[".shortTableName"] = "dereja_academy_lms";
$tdatadereja_academy_lms[".nSecOptions"] = 0;

$tdatadereja_academy_lms[".mainTableOwnerID"] = "";
$tdatadereja_academy_lms[".entityType"] = 0;
$tdatadereja_academy_lms[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_academy_lms[".strOriginalTableName"] = "dereja_academy_lms";

	



$tdatadereja_academy_lms[".showAddInPopup"] = false;

$tdatadereja_academy_lms[".showEditInPopup"] = false;

$tdatadereja_academy_lms[".showViewInPopup"] = false;

$tdatadereja_academy_lms[".listAjax"] = false;
//	temporary
//$tdatadereja_academy_lms[".listAjax"] = false;

	$tdatadereja_academy_lms[".audit"] = true;

	$tdatadereja_academy_lms[".locking"] = false;


$pages = $tdatadereja_academy_lms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_academy_lms[".edit"] = true;
	$tdatadereja_academy_lms[".afterEditAction"] = 1;
	$tdatadereja_academy_lms[".closePopupAfterEdit"] = 1;
	$tdatadereja_academy_lms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_academy_lms[".add"] = true;
$tdatadereja_academy_lms[".afterAddAction"] = 1;
$tdatadereja_academy_lms[".closePopupAfterAdd"] = 1;
$tdatadereja_academy_lms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_academy_lms[".list"] = true;
}



$tdatadereja_academy_lms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_academy_lms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_academy_lms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_academy_lms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_academy_lms[".printFriendly"] = true;
}



$tdatadereja_academy_lms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_academy_lms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_academy_lms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_academy_lms[".isUseAjaxSuggest"] = true;



			

$tdatadereja_academy_lms[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_academy_lms[".buttonsAdded"] = false;

$tdatadereja_academy_lms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_academy_lms[".isUseTimeForSearch"] = false;


$tdatadereja_academy_lms[".badgeColor"] = "1E90FF";


$tdatadereja_academy_lms[".allSearchFields"] = array();
$tdatadereja_academy_lms[".filterFields"] = array();
$tdatadereja_academy_lms[".requiredSearchFields"] = array();

$tdatadereja_academy_lms[".googleLikeFields"] = array();
$tdatadereja_academy_lms[".googleLikeFields"][] = "TraineeID";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Full_Name";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Email";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Role";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Progress";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Score";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Completion_date";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Time";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Gender";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Phone";
$tdatadereja_academy_lms[".googleLikeFields"][] = "University";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Department";
$tdatadereja_academy_lms[".googleLikeFields"][] = "Career_Choice";



$tdatadereja_academy_lms[".tableType"] = "list";

$tdatadereja_academy_lms[".printerPageOrientation"] = 0;
$tdatadereja_academy_lms[".nPrinterPageScale"] = 100;

$tdatadereja_academy_lms[".nPrinterSplitRecords"] = 40;

$tdatadereja_academy_lms[".geocodingEnabled"] = false;




$tdatadereja_academy_lms[".isDisplayLoading"] = true;






$tdatadereja_academy_lms[".pageSize"] = 20;

$tdatadereja_academy_lms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadereja_academy_lms[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_academy_lms[".orderindexes"] = array();


$tdatadereja_academy_lms[".sqlHead"] = "SELECT TraineeID,  	Full_Name,  	Email,  	`Role`,  	Progress,  	Score,  	Completion_date,  	`Time`,  	Gender,  	Phone,  	University,  	Department,  	Career_Choice";
$tdatadereja_academy_lms[".sqlFrom"] = "FROM dereja_academy_lms";
$tdatadereja_academy_lms[".sqlWhereExpr"] = "";
$tdatadereja_academy_lms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_academy_lms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_academy_lms[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_academy_lms[".highlightSearchResults"] = true;

$tableKeysdereja_academy_lms = array();
$tableKeysdereja_academy_lms[] = "TraineeID";
$tdatadereja_academy_lms[".Keys"] = $tableKeysdereja_academy_lms;


$tdatadereja_academy_lms[".hideMobileList"] = array();




//	TraineeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TraineeID";
	$fdata["GoodName"] = "TraineeID";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","TraineeID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TraineeID";

		$fdata["sourceSingle"] = "TraineeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TraineeID";

	
	
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


	$tdatadereja_academy_lms["TraineeID"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "TraineeID";
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Full_Name");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_academy_lms["Full_Name"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Full_Name";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Email");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_academy_lms["Email"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Email";
//	Role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Role";
	$fdata["GoodName"] = "Role";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Role");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Role";

		$fdata["sourceSingle"] = "Role";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Role`";

	
	
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


	$tdatadereja_academy_lms["Role"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Role";
//	Progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Progress";
	$fdata["GoodName"] = "Progress";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Progress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Progress";

		$fdata["sourceSingle"] = "Progress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Progress";

	
	
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


	$tdatadereja_academy_lms["Progress"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Progress";
//	Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Score";
	$fdata["GoodName"] = "Score";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Score");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Score";

		$fdata["sourceSingle"] = "Score";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Score";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatadereja_academy_lms["Score"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Score";
//	Completion_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Completion_date";
	$fdata["GoodName"] = "Completion_date";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Completion_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Completion_date";

		$fdata["sourceSingle"] = "Completion_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Completion_date";

	
	
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


	$tdatadereja_academy_lms["Completion_date"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Completion_date";
//	Time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Time";
	$fdata["GoodName"] = "Time";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Time");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Time";

		$fdata["sourceSingle"] = "Time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Time`";

	
	
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


	$tdatadereja_academy_lms["Time"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Time";
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Gender");
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatadereja_academy_lms["Gender"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Gender";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone";

		$fdata["sourceSingle"] = "Phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatadereja_academy_lms["Phone"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Phone";
//	University
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "University";
	$fdata["GoodName"] = "University";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","University");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_academy_lms["University"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "University";
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Department");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_academy_lms["Department"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Department";
//	Career_Choice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Career_Choice";
	$fdata["GoodName"] = "Career_Choice";
	$fdata["ownerTable"] = "dereja_academy_lms";
	$fdata["Label"] = GetFieldLabel("dereja_academy_lms","Career_Choice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Career_Choice";

		$fdata["sourceSingle"] = "Career_Choice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Career_Choice";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_academy_lms["Career_Choice"] = $fdata;
		$tdatadereja_academy_lms[".searchableFields"][] = "Career_Choice";


$tables_data["dereja_academy_lms"]=&$tdatadereja_academy_lms;
$field_labels["dereja_academy_lms"] = &$fieldLabelsdereja_academy_lms;
$fieldToolTips["dereja_academy_lms"] = &$fieldToolTipsdereja_academy_lms;
$placeHolders["dereja_academy_lms"] = &$placeHoldersdereja_academy_lms;
$page_titles["dereja_academy_lms"] = &$pageTitlesdereja_academy_lms;


changeTextControlsToDate( "dereja_academy_lms" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dereja_academy_lms"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dereja_academy_lms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_academy_lms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TraineeID,  	Full_Name,  	Email,  	`Role`,  	Progress,  	Score,  	Completion_date,  	`Time`,  	Gender,  	Phone,  	University,  	Department,  	Career_Choice";
$proto0["m_strFrom"] = "FROM dereja_academy_lms";
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
	"m_strName" => "TraineeID",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto6["m_sql"] = "TraineeID";
$proto6["m_srcTableName"] = "dereja_academy_lms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Full_Name",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto8["m_sql"] = "Full_Name";
$proto8["m_srcTableName"] = "dereja_academy_lms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto10["m_sql"] = "Email";
$proto10["m_srcTableName"] = "dereja_academy_lms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Role",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto12["m_sql"] = "`Role`";
$proto12["m_srcTableName"] = "dereja_academy_lms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Progress",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto14["m_sql"] = "Progress";
$proto14["m_srcTableName"] = "dereja_academy_lms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Score",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto16["m_sql"] = "Score";
$proto16["m_srcTableName"] = "dereja_academy_lms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Completion_date",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto18["m_sql"] = "Completion_date";
$proto18["m_srcTableName"] = "dereja_academy_lms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Time",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto20["m_sql"] = "`Time`";
$proto20["m_srcTableName"] = "dereja_academy_lms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto22["m_sql"] = "Gender";
$proto22["m_srcTableName"] = "dereja_academy_lms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto24["m_sql"] = "Phone";
$proto24["m_srcTableName"] = "dereja_academy_lms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "University",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto26["m_sql"] = "University";
$proto26["m_srcTableName"] = "dereja_academy_lms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto28["m_sql"] = "Department";
$proto28["m_srcTableName"] = "dereja_academy_lms";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Career_Choice",
	"m_strTable" => "dereja_academy_lms",
	"m_srcTableName" => "dereja_academy_lms"
));

$proto30["m_sql"] = "Career_Choice";
$proto30["m_srcTableName"] = "dereja_academy_lms";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "dereja_academy_lms";
$proto33["m_srcTableName"] = "dereja_academy_lms";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "TraineeID";
$proto33["m_columns"][] = "Full_Name";
$proto33["m_columns"][] = "Email";
$proto33["m_columns"][] = "Role";
$proto33["m_columns"][] = "Progress";
$proto33["m_columns"][] = "Score";
$proto33["m_columns"][] = "Completion_date";
$proto33["m_columns"][] = "Time";
$proto33["m_columns"][] = "Gender";
$proto33["m_columns"][] = "Phone";
$proto33["m_columns"][] = "University";
$proto33["m_columns"][] = "Department";
$proto33["m_columns"][] = "Career_Choice";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "dereja_academy_lms";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "dereja_academy_lms";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dereja_academy_lms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_academy_lms = createSqlQuery_dereja_academy_lms();


	
																								;

													

$tdatadereja_academy_lms[".sqlquery"] = $queryData_dereja_academy_lms;



$tdatadereja_academy_lms[".hasEvents"] = false;

?>