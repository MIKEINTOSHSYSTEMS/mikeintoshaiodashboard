<?php
$tdatatrainings1 = array();
$tdatatrainings1[".searchableFields"] = array();
$tdatatrainings1[".ShortName"] = "trainings1";
$tdatatrainings1[".OwnerID"] = "";
$tdatatrainings1[".OriginalTable"] = "trainings";


$tdatatrainings1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatrainings1[".originalPagesByType"] = $tdatatrainings1[".pagesByType"];
$tdatatrainings1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatrainings1[".originalPages"] = $tdatatrainings1[".pages"];
$tdatatrainings1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatrainings1[".originalDefaultPages"] = $tdatatrainings1[".defaultPages"];

//	field labels
$fieldLabelstrainings1 = array();
$fieldToolTipstrainings1 = array();
$pageTitlestrainings1 = array();
$placeHolderstrainings1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrainings1["English"] = array();
	$fieldToolTipstrainings1["English"] = array();
	$placeHolderstrainings1["English"] = array();
	$pageTitlestrainings1["English"] = array();
	$fieldLabelstrainings1["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstrainings1["English"]["TrainingID"] = "";
	$placeHolderstrainings1["English"]["TrainingID"] = "";
	$fieldLabelstrainings1["English"]["TrainingTitle"] = "Training Title";
	$fieldToolTipstrainings1["English"]["TrainingTitle"] = "";
	$placeHolderstrainings1["English"]["TrainingTitle"] = "";
	$fieldLabelstrainings1["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstrainings1["English"]["Training_Start_Date"] = "";
	$placeHolderstrainings1["English"]["Training_Start_Date"] = "";
	$fieldLabelstrainings1["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstrainings1["English"]["Training_End_Date"] = "";
	$placeHolderstrainings1["English"]["Training_End_Date"] = "";
	$fieldLabelstrainings1["English"]["TypeName"] = "Type Name";
	$fieldToolTipstrainings1["English"]["TypeName"] = "";
	$placeHolderstrainings1["English"]["TypeName"] = "";
	$fieldLabelstrainings1["English"]["OrganizerName"] = "Organizer Name";
	$fieldToolTipstrainings1["English"]["OrganizerName"] = "";
	$placeHolderstrainings1["English"]["OrganizerName"] = "";
	$fieldLabelstrainings1["English"]["CityTownName"] = "City Town Name";
	$fieldToolTipstrainings1["English"]["CityTownName"] = "";
	$placeHolderstrainings1["English"]["CityTownName"] = "";
	$fieldLabelstrainings1["English"]["VenueName"] = "Venue Name";
	$fieldToolTipstrainings1["English"]["VenueName"] = "";
	$placeHolderstrainings1["English"]["VenueName"] = "";
	$fieldLabelstrainings1["English"]["Trainer_FullName"] = "Trainer FullName";
	$fieldToolTipstrainings1["English"]["Trainer_FullName"] = "";
	$placeHolderstrainings1["English"]["Trainer_FullName"] = "";
	$fieldLabelstrainings1["English"]["TrainingRound"] = "Training Round";
	$fieldToolTipstrainings1["English"]["TrainingRound"] = "";
	$placeHolderstrainings1["English"]["TrainingRound"] = "";
	$fieldLabelstrainings1["English"]["TrainingNote"] = "Training Note";
	$fieldToolTipstrainings1["English"]["TrainingNote"] = "";
	$placeHolderstrainings1["English"]["TrainingNote"] = "";
	$fieldLabelstrainings1["English"]["program_areas"] = "Program Areas";
	$fieldToolTipstrainings1["English"]["program_areas"] = "";
	$placeHolderstrainings1["English"]["program_areas"] = "";
	if (count($fieldToolTipstrainings1["English"]))
		$tdatatrainings1[".isUseToolTips"] = true;
}


	$tdatatrainings1[".NCSearch"] = true;



$tdatatrainings1[".shortTableName"] = "trainings1";
$tdatatrainings1[".nSecOptions"] = 0;

$tdatatrainings1[".mainTableOwnerID"] = "";
$tdatatrainings1[".entityType"] = 0;
$tdatatrainings1[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatrainings1[".strOriginalTableName"] = "trainings";

	



$tdatatrainings1[".showAddInPopup"] = false;

$tdatatrainings1[".showEditInPopup"] = false;

$tdatatrainings1[".showViewInPopup"] = false;

$tdatatrainings1[".listAjax"] = false;
//	temporary
//$tdatatrainings1[".listAjax"] = false;

	$tdatatrainings1[".audit"] = false;

	$tdatatrainings1[".locking"] = false;


$pages = $tdatatrainings1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrainings1[".edit"] = true;
	$tdatatrainings1[".afterEditAction"] = 1;
	$tdatatrainings1[".closePopupAfterEdit"] = 1;
	$tdatatrainings1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrainings1[".add"] = true;
$tdatatrainings1[".afterAddAction"] = 1;
$tdatatrainings1[".closePopupAfterAdd"] = 1;
$tdatatrainings1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrainings1[".list"] = true;
}



$tdatatrainings1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrainings1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrainings1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrainings1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrainings1[".printFriendly"] = true;
}



$tdatatrainings1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrainings1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrainings1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrainings1[".isUseAjaxSuggest"] = true;



						

$tdatatrainings1[".ajaxCodeSnippetAdded"] = false;

$tdatatrainings1[".buttonsAdded"] = false;

$tdatatrainings1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrainings1[".isUseTimeForSearch"] = false;


$tdatatrainings1[".badgeColor"] = "00c2c5";


$tdatatrainings1[".allSearchFields"] = array();
$tdatatrainings1[".filterFields"] = array();
$tdatatrainings1[".requiredSearchFields"] = array();

$tdatatrainings1[".googleLikeFields"] = array();
$tdatatrainings1[".googleLikeFields"][] = "TrainingID";
$tdatatrainings1[".googleLikeFields"][] = "Training_Start_Date";
$tdatatrainings1[".googleLikeFields"][] = "Training_End_Date";
$tdatatrainings1[".googleLikeFields"][] = "TrainingTitle";
$tdatatrainings1[".googleLikeFields"][] = "TypeName";
$tdatatrainings1[".googleLikeFields"][] = "OrganizerName";
$tdatatrainings1[".googleLikeFields"][] = "CityTownName";
$tdatatrainings1[".googleLikeFields"][] = "VenueName";
$tdatatrainings1[".googleLikeFields"][] = "Trainer_FullName";
$tdatatrainings1[".googleLikeFields"][] = "TrainingRound";
$tdatatrainings1[".googleLikeFields"][] = "TrainingNote";
$tdatatrainings1[".googleLikeFields"][] = "program_areas";



$tdatatrainings1[".tableType"] = "list";

$tdatatrainings1[".printerPageOrientation"] = 0;
$tdatatrainings1[".nPrinterPageScale"] = 100;

$tdatatrainings1[".nPrinterSplitRecords"] = 40;

$tdatatrainings1[".geocodingEnabled"] = false;




$tdatatrainings1[".isDisplayLoading"] = true;






$tdatatrainings1[".pageSize"] = 20;

$tdatatrainings1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatrainings1[".strOrderBy"] = $tstrOrderBy;

$tdatatrainings1[".orderindexes"] = array();


$tdatatrainings1[".sqlHead"] = "SELECT TrainingID,  	Training_Start_Date,  	Training_End_Date,  	TrainingTitle,  	TypeName,  	OrganizerName,  	CityTownName,  	VenueName,  	Trainer_FullName,  	TrainingRound,  	TrainingNote,  	program_areas";
$tdatatrainings1[".sqlFrom"] = "FROM trainings";
$tdatatrainings1[".sqlWhereExpr"] = "";
$tdatatrainings1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrainings1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrainings1[".arrGroupsPerPage"] = $arrGPP;

$tdatatrainings1[".highlightSearchResults"] = true;

$tableKeystrainings1 = array();
$tableKeystrainings1[] = "TrainingID";
$tdatatrainings1[".Keys"] = $tableKeystrainings1;


$tdatatrainings1[".hideMobileList"] = array();




//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TrainingID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatatrainings1["TrainingID"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TrainingID";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","Training_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Start_Date";

	
	
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


	$tdatatrainings1["Training_Start_Date"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","Training_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_End_Date";

	
	
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


	$tdatatrainings1["Training_End_Date"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "Training_End_Date";
//	TrainingTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TrainingTitle";
	$fdata["GoodName"] = "TrainingTitle";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TrainingTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TrainingTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingTitle";

	
	
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


	$tdatatrainings1["TrainingTitle"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TrainingTitle";
//	TypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TypeName";
	$fdata["GoodName"] = "TypeName";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TypeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeName";

	
	
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
	$edata["LookupTable"] = "training_types";
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


	$tdatatrainings1["TypeName"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TypeName";
//	OrganizerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OrganizerName";
	$fdata["GoodName"] = "OrganizerName";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","OrganizerName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OrganizerName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrganizerName";

	
	
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


	$tdatatrainings1["OrganizerName"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "OrganizerName";
//	CityTownName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CityTownName";
	$fdata["GoodName"] = "CityTownName";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","CityTownName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CityTownName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CityTownName";

	
	
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
	$edata["LookupTable"] = "training_city_towns";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CityTownID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CityTownName";

	

	
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


	$tdatatrainings1["CityTownName"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "CityTownName";
//	VenueName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "VenueName";
	$fdata["GoodName"] = "VenueName";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","VenueName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "VenueName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VenueName";

	
	
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
	$edata["LookupTable"] = "training_venues";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "VenueID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VenueName";

	

	
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


	$tdatatrainings1["VenueName"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "VenueName";
//	Trainer_FullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Trainer_FullName";
	$fdata["GoodName"] = "Trainer_FullName";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","Trainer_FullName");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Trainer";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainerID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Trainer_FullName";

	

	
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


	$tdatatrainings1["Trainer_FullName"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "Trainer_FullName";
//	TrainingRound
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TrainingRound";
	$fdata["GoodName"] = "TrainingRound";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TrainingRound");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TrainingRound";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingRound";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatrainings1["TrainingRound"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TrainingRound";
//	TrainingNote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TrainingNote";
	$fdata["GoodName"] = "TrainingNote";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TrainingNote");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TrainingNote";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingNote";

	
	
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


	$tdatatrainings1["TrainingNote"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TrainingNote";
//	program_areas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "program_areas";
	$fdata["GoodName"] = "program_areas";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","program_areas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "program_areas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "program_areas";

	
	
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
	$edata["LookupTable"] = "program_areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AreaID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AreaName";

	

	
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


	$tdatatrainings1["program_areas"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "program_areas";


$tables_data["trainings"]=&$tdatatrainings1;
$field_labels["trainings"] = &$fieldLabelstrainings1;
$fieldToolTips["trainings"] = &$fieldToolTipstrainings1;
$placeHolders["trainings"] = &$placeHolderstrainings1;
$page_titles["trainings"] = &$pageTitlestrainings1;


changeTextControlsToDate( "trainings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["trainings"] = array();
//	training_participants
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="training_participants";
		$detailsParam["dOriginalTable"] = "training_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("training_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["trainings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["trainings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["trainings"][$dIndex]["masterKeys"][]="TrainingID";

	$detailsTablesData["trainings"][$dIndex]["masterKeys"][]="Training_Start_Date";

	$detailsTablesData["trainings"][$dIndex]["masterKeys"][]="Training_End_Date";

				$detailsTablesData["trainings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["trainings"][$dIndex]["detailKeys"][]="TrainingID";

		
	$detailsTablesData["trainings"][$dIndex]["detailKeys"][]="Training_Start_Date";

		
	$detailsTablesData["trainings"][$dIndex]["detailKeys"][]="Training_End_Date";
//	dereja_training_services
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dereja_training_services";
		$detailsParam["dOriginalTable"] = "dereja_training_services";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dereja_training_services";
	$detailsParam["dCaptionTable"] = GetTableCaption("dereja_training_services");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["trainings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["trainings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["trainings"][$dIndex]["masterKeys"][]="TrainingID";

				$detailsTablesData["trainings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["trainings"][$dIndex]["detailKeys"][]="TrainingID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["trainings"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Trainer";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Trainer";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "trainer";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["trainings"][0] = $masterParams;
				$masterTablesData["trainings"][0]["masterKeys"] = array();
	$masterTablesData["trainings"][0]["masterKeys"][]="TrainingID";
				$masterTablesData["trainings"][0]["detailKeys"] = array();
	$masterTablesData["trainings"][0]["detailKeys"][]="TrainingID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trainings1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,  	Training_Start_Date,  	Training_End_Date,  	TrainingTitle,  	TypeName,  	OrganizerName,  	CityTownName,  	VenueName,  	Trainer_FullName,  	TrainingRound,  	TrainingNote,  	program_areas";
$proto0["m_strFrom"] = "FROM trainings";
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
	"m_strName" => "TrainingID",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto6["m_sql"] = "TrainingID";
$proto6["m_srcTableName"] = "trainings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto8["m_sql"] = "Training_Start_Date";
$proto8["m_srcTableName"] = "trainings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto10["m_sql"] = "Training_End_Date";
$proto10["m_srcTableName"] = "trainings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto12["m_sql"] = "TrainingTitle";
$proto12["m_srcTableName"] = "trainings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeName",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto14["m_sql"] = "TypeName";
$proto14["m_srcTableName"] = "trainings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OrganizerName",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto16["m_sql"] = "OrganizerName";
$proto16["m_srcTableName"] = "trainings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CityTownName",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto18["m_sql"] = "CityTownName";
$proto18["m_srcTableName"] = "trainings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "VenueName",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto20["m_sql"] = "VenueName";
$proto20["m_srcTableName"] = "trainings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Trainer_FullName",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto22["m_sql"] = "Trainer_FullName";
$proto22["m_srcTableName"] = "trainings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingRound",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto24["m_sql"] = "TrainingRound";
$proto24["m_srcTableName"] = "trainings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingNote",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto26["m_sql"] = "TrainingNote";
$proto26["m_srcTableName"] = "trainings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "program_areas",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto28["m_sql"] = "program_areas";
$proto28["m_srcTableName"] = "trainings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "trainings";
$proto31["m_srcTableName"] = "trainings";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "TrainingID";
$proto31["m_columns"][] = "Training_Start_Date";
$proto31["m_columns"][] = "Training_End_Date";
$proto31["m_columns"][] = "TrainingTitle";
$proto31["m_columns"][] = "TypeName";
$proto31["m_columns"][] = "OrganizerName";
$proto31["m_columns"][] = "CityTownName";
$proto31["m_columns"][] = "VenueName";
$proto31["m_columns"][] = "Trainer_FullName";
$proto31["m_columns"][] = "TrainingRound";
$proto31["m_columns"][] = "TrainingNote";
$proto31["m_columns"][] = "program_areas";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "trainings";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "trainings";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="trainings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trainings1 = createSqlQuery_trainings1();


	
																								;

												

$tdatatrainings1[".sqlquery"] = $queryData_trainings1;



$tdatatrainings1[".hasEvents"] = false;

?>