<?php
$tdatatrainer = array();
$tdatatrainer[".searchableFields"] = array();
$tdatatrainer[".ShortName"] = "trainer";
$tdatatrainer[".OwnerID"] = "";
$tdatatrainer[".OriginalTable"] = "Trainer";


$tdatatrainer[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatrainer[".originalPagesByType"] = $tdatatrainer[".pagesByType"];
$tdatatrainer[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatrainer[".originalPages"] = $tdatatrainer[".pages"];
$tdatatrainer[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatrainer[".originalDefaultPages"] = $tdatatrainer[".defaultPages"];

//	field labels
$fieldLabelstrainer = array();
$fieldToolTipstrainer = array();
$pageTitlestrainer = array();
$placeHolderstrainer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrainer["English"] = array();
	$fieldToolTipstrainer["English"] = array();
	$placeHolderstrainer["English"] = array();
	$pageTitlestrainer["English"] = array();
	$fieldLabelstrainer["English"]["TrainerID"] = "Trainer ID";
	$fieldToolTipstrainer["English"]["TrainerID"] = "";
	$placeHolderstrainer["English"]["TrainerID"] = "";
	$fieldLabelstrainer["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstrainer["English"]["TrainingID"] = "";
	$placeHolderstrainer["English"]["TrainingID"] = "";
	$fieldLabelstrainer["English"]["OrganizerID"] = "Organizer ID";
	$fieldToolTipstrainer["English"]["OrganizerID"] = "";
	$placeHolderstrainer["English"]["OrganizerID"] = "";
	$fieldLabelstrainer["English"]["Trainer_FullName"] = "Trainer FullName";
	$fieldToolTipstrainer["English"]["Trainer_FullName"] = "";
	$placeHolderstrainer["English"]["Trainer_FullName"] = "";
	$fieldLabelstrainer["English"]["Trainer_Profile"] = "Trainer Profile";
	$fieldToolTipstrainer["English"]["Trainer_Profile"] = "";
	$placeHolderstrainer["English"]["Trainer_Profile"] = "";
	$fieldLabelstrainer["English"]["Trainer_Skills"] = "Trainer Skills";
	$fieldToolTipstrainer["English"]["Trainer_Skills"] = "";
	$placeHolderstrainer["English"]["Trainer_Skills"] = "";
	if (count($fieldToolTipstrainer["English"]))
		$tdatatrainer[".isUseToolTips"] = true;
}


	$tdatatrainer[".NCSearch"] = true;



$tdatatrainer[".shortTableName"] = "trainer";
$tdatatrainer[".nSecOptions"] = 0;

$tdatatrainer[".mainTableOwnerID"] = "";
$tdatatrainer[".entityType"] = 0;
$tdatatrainer[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatrainer[".strOriginalTableName"] = "Trainer";

	



$tdatatrainer[".showAddInPopup"] = false;

$tdatatrainer[".showEditInPopup"] = false;

$tdatatrainer[".showViewInPopup"] = false;

$tdatatrainer[".listAjax"] = false;
//	temporary
//$tdatatrainer[".listAjax"] = false;

	$tdatatrainer[".audit"] = false;

	$tdatatrainer[".locking"] = false;


$pages = $tdatatrainer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrainer[".edit"] = true;
	$tdatatrainer[".afterEditAction"] = 1;
	$tdatatrainer[".closePopupAfterEdit"] = 1;
	$tdatatrainer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrainer[".add"] = true;
$tdatatrainer[".afterAddAction"] = 1;
$tdatatrainer[".closePopupAfterAdd"] = 1;
$tdatatrainer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrainer[".list"] = true;
}



$tdatatrainer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrainer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrainer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrainer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrainer[".printFriendly"] = true;
}



$tdatatrainer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrainer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrainer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrainer[".isUseAjaxSuggest"] = true;



						

$tdatatrainer[".ajaxCodeSnippetAdded"] = false;

$tdatatrainer[".buttonsAdded"] = false;

$tdatatrainer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrainer[".isUseTimeForSearch"] = false;


$tdatatrainer[".badgeColor"] = "cd853f";


$tdatatrainer[".allSearchFields"] = array();
$tdatatrainer[".filterFields"] = array();
$tdatatrainer[".requiredSearchFields"] = array();

$tdatatrainer[".googleLikeFields"] = array();
$tdatatrainer[".googleLikeFields"][] = "TrainerID";
$tdatatrainer[".googleLikeFields"][] = "TrainingID";
$tdatatrainer[".googleLikeFields"][] = "OrganizerID";
$tdatatrainer[".googleLikeFields"][] = "Trainer_FullName";
$tdatatrainer[".googleLikeFields"][] = "Trainer_Profile";
$tdatatrainer[".googleLikeFields"][] = "Trainer_Skills";



$tdatatrainer[".tableType"] = "list";

$tdatatrainer[".printerPageOrientation"] = 0;
$tdatatrainer[".nPrinterPageScale"] = 100;

$tdatatrainer[".nPrinterSplitRecords"] = 40;

$tdatatrainer[".geocodingEnabled"] = false;




$tdatatrainer[".isDisplayLoading"] = true;






$tdatatrainer[".pageSize"] = 20;

$tdatatrainer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatrainer[".strOrderBy"] = $tstrOrderBy;

$tdatatrainer[".orderindexes"] = array();


$tdatatrainer[".sqlHead"] = "SELECT TrainerID,  	TrainingID,  	OrganizerID,  	Trainer_FullName,  	Trainer_Profile,  	Trainer_Skills";
$tdatatrainer[".sqlFrom"] = "FROM Trainer";
$tdatatrainer[".sqlWhereExpr"] = "";
$tdatatrainer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrainer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrainer[".arrGroupsPerPage"] = $arrGPP;

$tdatatrainer[".highlightSearchResults"] = true;

$tableKeystrainer = array();
$tableKeystrainer[] = "TrainerID";
$tableKeystrainer[] = "TrainingID";
$tableKeystrainer[] = "OrganizerID";
$tdatatrainer[".Keys"] = $tableKeystrainer;


$tdatatrainer[".hideMobileList"] = array();




//	TrainerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainerID";
	$fdata["GoodName"] = "TrainerID";
	$fdata["ownerTable"] = "Trainer";
	$fdata["Label"] = GetFieldLabel("Trainer","TrainerID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TrainerID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainerID";

	
	
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


	$tdatatrainer["TrainerID"] = $fdata;
		$tdatatrainer[".searchableFields"][] = "TrainerID";
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "Trainer";
	$fdata["Label"] = GetFieldLabel("Trainer","TrainingID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TrainingID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingID";

	
	
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
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TrainingTitle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatatrainer["TrainingID"] = $fdata;
		$tdatatrainer[".searchableFields"][] = "TrainingID";
//	OrganizerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OrganizerID";
	$fdata["GoodName"] = "OrganizerID";
	$fdata["ownerTable"] = "Trainer";
	$fdata["Label"] = GetFieldLabel("Trainer","OrganizerID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrganizerID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrganizerID";

	
	
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
	$edata["LookupTable"] = "training_organizers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "OrganizerID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "OrganizerName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatatrainer["OrganizerID"] = $fdata;
		$tdatatrainer[".searchableFields"][] = "OrganizerID";
//	Trainer_FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Trainer_FullName";
	$fdata["GoodName"] = "Trainer_FullName";
	$fdata["ownerTable"] = "Trainer";
	$fdata["Label"] = GetFieldLabel("Trainer","Trainer_FullName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Trainer_FullName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Trainer_FullName";

	
	
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


	$tdatatrainer["Trainer_FullName"] = $fdata;
		$tdatatrainer[".searchableFields"][] = "Trainer_FullName";
//	Trainer_Profile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Trainer_Profile";
	$fdata["GoodName"] = "Trainer_Profile";
	$fdata["ownerTable"] = "Trainer";
	$fdata["Label"] = GetFieldLabel("Trainer","Trainer_Profile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Trainer_Profile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Trainer_Profile";

	
	
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


	$tdatatrainer["Trainer_Profile"] = $fdata;
		$tdatatrainer[".searchableFields"][] = "Trainer_Profile";
//	Trainer_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Trainer_Skills";
	$fdata["GoodName"] = "Trainer_Skills";
	$fdata["ownerTable"] = "Trainer";
	$fdata["Label"] = GetFieldLabel("Trainer","Trainer_Skills");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Trainer_Skills";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Trainer_Skills";

	
	
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
	$edata["LookupTable"] = "Trainer";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "Trainer_Skills";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Trainer_Skills";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
		$edata["Multiselect"] = true;

	
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


	$tdatatrainer["Trainer_Skills"] = $fdata;
		$tdatatrainer[".searchableFields"][] = "Trainer_Skills";


$tables_data["Trainer"]=&$tdatatrainer;
$field_labels["Trainer"] = &$fieldLabelstrainer;
$fieldToolTips["Trainer"] = &$fieldToolTipstrainer;
$placeHolders["Trainer"] = &$placeHolderstrainer;
$page_titles["Trainer"] = &$pageTitlestrainer;


changeTextControlsToDate( "Trainer" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Trainer"] = array();
//	trainings
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="trainings";
		$detailsParam["dOriginalTable"] = "trainings";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "trainings1";
	$detailsParam["dCaptionTable"] = GetTableCaption("trainings");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Trainer"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Trainer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Trainer"][$dIndex]["masterKeys"][]="TrainingID";

				$detailsTablesData["Trainer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Trainer"][$dIndex]["detailKeys"][]="TrainingID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Trainer"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="training_organizers";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="training_organizers";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_organizers";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Trainer"][0] = $masterParams;
				$masterTablesData["Trainer"][0]["masterKeys"] = array();
	$masterTablesData["Trainer"][0]["masterKeys"][]="OrganizerID";
				$masterTablesData["Trainer"][0]["detailKeys"] = array();
	$masterTablesData["Trainer"][0]["detailKeys"][]="OrganizerID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trainer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainerID,  	TrainingID,  	OrganizerID,  	Trainer_FullName,  	Trainer_Profile,  	Trainer_Skills";
$proto0["m_strFrom"] = "FROM Trainer";
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
	"m_strName" => "TrainerID",
	"m_strTable" => "Trainer",
	"m_srcTableName" => "Trainer"
));

$proto6["m_sql"] = "TrainerID";
$proto6["m_srcTableName"] = "Trainer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "Trainer",
	"m_srcTableName" => "Trainer"
));

$proto8["m_sql"] = "TrainingID";
$proto8["m_srcTableName"] = "Trainer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OrganizerID",
	"m_strTable" => "Trainer",
	"m_srcTableName" => "Trainer"
));

$proto10["m_sql"] = "OrganizerID";
$proto10["m_srcTableName"] = "Trainer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Trainer_FullName",
	"m_strTable" => "Trainer",
	"m_srcTableName" => "Trainer"
));

$proto12["m_sql"] = "Trainer_FullName";
$proto12["m_srcTableName"] = "Trainer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Trainer_Profile",
	"m_strTable" => "Trainer",
	"m_srcTableName" => "Trainer"
));

$proto14["m_sql"] = "Trainer_Profile";
$proto14["m_srcTableName"] = "Trainer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Trainer_Skills",
	"m_strTable" => "Trainer",
	"m_srcTableName" => "Trainer"
));

$proto16["m_sql"] = "Trainer_Skills";
$proto16["m_srcTableName"] = "Trainer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Trainer";
$proto19["m_srcTableName"] = "Trainer";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "TrainerID";
$proto19["m_columns"][] = "TrainingID";
$proto19["m_columns"][] = "OrganizerID";
$proto19["m_columns"][] = "Trainer_FullName";
$proto19["m_columns"][] = "Trainer_Profile";
$proto19["m_columns"][] = "Trainer_Skills";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Trainer";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Trainer";
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
$proto0["m_srcTableName"]="Trainer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trainer = createSqlQuery_trainer();


	
																								;

						

$tdatatrainer[".sqlquery"] = $queryData_trainer;



$tdatatrainer[".hasEvents"] = false;

?>