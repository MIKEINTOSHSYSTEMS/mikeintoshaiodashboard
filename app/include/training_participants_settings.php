<?php
$tdatatraining_participants = array();
$tdatatraining_participants[".searchableFields"] = array();
$tdatatraining_participants[".ShortName"] = "training_participants";
$tdatatraining_participants[".OwnerID"] = "";
$tdatatraining_participants[".OriginalTable"] = "training_participants";


$tdatatraining_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_participants[".originalPagesByType"] = $tdatatraining_participants[".pagesByType"];
$tdatatraining_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_participants[".originalPages"] = $tdatatraining_participants[".pages"];
$tdatatraining_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_participants[".originalDefaultPages"] = $tdatatraining_participants[".defaultPages"];

//	field labels
$fieldLabelstraining_participants = array();
$fieldToolTipstraining_participants = array();
$pageTitlestraining_participants = array();
$placeHolderstraining_participants = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participants["English"] = array();
	$fieldToolTipstraining_participants["English"] = array();
	$placeHolderstraining_participants["English"] = array();
	$pageTitlestraining_participants["English"] = array();
	$fieldLabelstraining_participants["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstraining_participants["English"]["TrainingID"] = "";
	$placeHolderstraining_participants["English"]["TrainingID"] = "";
	$fieldLabelstraining_participants["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipstraining_participants["English"]["CandidateID"] = "";
	$placeHolderstraining_participants["English"]["CandidateID"] = "";
	$fieldLabelstraining_participants["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_participants["English"]["Training_Organizer"] = "";
	$placeHolderstraining_participants["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_participants["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_participants["English"]["Training_Type"] = "";
	$placeHolderstraining_participants["English"]["Training_Type"] = "";
	$fieldLabelstraining_participants["English"]["Program_Area"] = "Program Area";
	$fieldToolTipstraining_participants["English"]["Program_Area"] = "";
	$placeHolderstraining_participants["English"]["Program_Area"] = "";
	$fieldLabelstraining_participants["English"]["Training_City_Town"] = "Training City Town";
	$fieldToolTipstraining_participants["English"]["Training_City_Town"] = "";
	$placeHolderstraining_participants["English"]["Training_City_Town"] = "";
	$fieldLabelstraining_participants["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_participants["English"]["Training_Venue"] = "";
	$placeHolderstraining_participants["English"]["Training_Venue"] = "";
	$fieldLabelstraining_participants["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstraining_participants["English"]["Training_Start_Date"] = "";
	$placeHolderstraining_participants["English"]["Training_Start_Date"] = "";
	$fieldLabelstraining_participants["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstraining_participants["English"]["Training_End_Date"] = "";
	$placeHolderstraining_participants["English"]["Training_End_Date"] = "";
	if (count($fieldToolTipstraining_participants["English"]))
		$tdatatraining_participants[".isUseToolTips"] = true;
}


	$tdatatraining_participants[".NCSearch"] = true;



$tdatatraining_participants[".shortTableName"] = "training_participants";
$tdatatraining_participants[".nSecOptions"] = 0;

$tdatatraining_participants[".mainTableOwnerID"] = "";
$tdatatraining_participants[".entityType"] = 0;
$tdatatraining_participants[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_participants[".strOriginalTableName"] = "training_participants";

	



$tdatatraining_participants[".showAddInPopup"] = false;

$tdatatraining_participants[".showEditInPopup"] = false;

$tdatatraining_participants[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatraining_participants[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatraining_participants[".listAjax"] = false;
//	temporary
$tdatatraining_participants[".listAjax"] = false;

	$tdatatraining_participants[".audit"] = false;

	$tdatatraining_participants[".locking"] = false;


$pages = $tdatatraining_participants[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participants[".edit"] = true;
	$tdatatraining_participants[".afterEditAction"] = 1;
	$tdatatraining_participants[".closePopupAfterEdit"] = 1;
	$tdatatraining_participants[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participants[".add"] = true;
$tdatatraining_participants[".afterAddAction"] = 1;
$tdatatraining_participants[".closePopupAfterAdd"] = 1;
$tdatatraining_participants[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participants[".list"] = true;
}



$tdatatraining_participants[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participants[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participants[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participants[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participants[".printFriendly"] = true;
}



$tdatatraining_participants[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participants[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participants[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participants[".isUseAjaxSuggest"] = true;

$tdatatraining_participants[".rowHighlite"] = true;





$tdatatraining_participants[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants[".buttonsAdded"] = false;

$tdatatraining_participants[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants[".isUseTimeForSearch"] = false;


$tdatatraining_participants[".badgeColor"] = "4169E1";


$tdatatraining_participants[".allSearchFields"] = array();
$tdatatraining_participants[".filterFields"] = array();
$tdatatraining_participants[".requiredSearchFields"] = array();

$tdatatraining_participants[".googleLikeFields"] = array();
$tdatatraining_participants[".googleLikeFields"][] = "TrainingID";
$tdatatraining_participants[".googleLikeFields"][] = "CandidateID";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Organizer";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Type";
$tdatatraining_participants[".googleLikeFields"][] = "Program_Area";
$tdatatraining_participants[".googleLikeFields"][] = "Training_City_Town";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Venue";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Start_Date";
$tdatatraining_participants[".googleLikeFields"][] = "Training_End_Date";



$tdatatraining_participants[".tableType"] = "list";

$tdatatraining_participants[".printerPageOrientation"] = 0;
$tdatatraining_participants[".nPrinterPageScale"] = 100;

$tdatatraining_participants[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants[".geocodingEnabled"] = false;










$tdatatraining_participants[".pageSize"] = 20;

$tdatatraining_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatraining_participants[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants[".orderindexes"] = array();


$tdatatraining_participants[".sqlHead"] = "SELECT TrainingID,  	CandidateID,  	Training_Organizer,  	Training_Type,  	Program_Area,  	Training_City_Town,  	Training_Venue,  	Training_Start_Date,  	Training_End_Date";
$tdatatraining_participants[".sqlFrom"] = "FROM training_participants";
$tdatatraining_participants[".sqlWhereExpr"] = "";
$tdatatraining_participants[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participants[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participants[".highlightSearchResults"] = true;

$tableKeystraining_participants = array();
$tableKeystraining_participants[] = "TrainingID";
$tableKeystraining_participants[] = "CandidateID";
$tdatatraining_participants[".Keys"] = $tableKeystraining_participants;


$tdatatraining_participants[".hideMobileList"] = array();




//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","TrainingID");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingTitle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatatraining_participants["TrainingID"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "TrainingID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","CandidateID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "CandidateID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CandidateID";

	
	
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
	$edata["LookupTable"] = "candidates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatraining_participants["CandidateID"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "CandidateID";
//	Training_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Training_Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Organizer");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training_Organizer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Organizer";

	
	
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

	
		
	$edata["LinkField"] = "OrganizerName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "OrganizerName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Training_Organizer"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Organizer";
//	Training_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Training_Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Type";

	
	
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

	
		
	$edata["LinkField"] = "TypeName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TypeName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Training_Type"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Type";
//	Program_Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Program_Area";
	$fdata["GoodName"] = "Program_Area";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Program_Area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Program_Area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Program_Area";

	
	
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

	
		
	$edata["LinkField"] = "AreaName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AreaName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Program_Area"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Program_Area";
//	Training_City_Town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Training_City_Town";
	$fdata["GoodName"] = "Training_City_Town";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_City_Town");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training_City_Town";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_City_Town";

	
	
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

	
		
	$edata["LinkField"] = "CityTownName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CityTownName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Training_City_Town"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_City_Town";
//	Training_Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Training_Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Venue");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training_Venue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Venue";

	
	
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

	
		
	$edata["LinkField"] = "VenueName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VenueName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Training_Venue"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Venue";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Start_Date");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Training_Start_Date";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Training_Start_Date";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Training_Start_Date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "training_participants";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_End_Date");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Training_End_Date";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Training_End_Date";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_participants["Training_End_Date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_End_Date";


$tables_data["training_participants"]=&$tdatatraining_participants;
$field_labels["training_participants"] = &$fieldLabelstraining_participants;
$fieldToolTips["training_participants"] = &$fieldToolTipstraining_participants;
$placeHolders["training_participants"] = &$placeHolderstraining_participants;
$page_titles["training_participants"] = &$pageTitlestraining_participants;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["training_participants"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["training_participants"] = array();



	
				$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants"][0] = $masterParams;
				$masterTablesData["training_participants"][0]["masterKeys"] = array();
	$masterTablesData["training_participants"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][0]["detailKeys"] = array();
	$masterTablesData["training_participants"][0]["detailKeys"][]="CandidateID";
		
	
				$strOriginalDetailsTable="trainings";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="trainings";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "trainings1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants"][1] = $masterParams;
				$masterTablesData["training_participants"][1]["masterKeys"] = array();
	$masterTablesData["training_participants"][1]["masterKeys"][]="TrainingID";
				$masterTablesData["training_participants"][1]["detailKeys"] = array();
	$masterTablesData["training_participants"][1]["detailKeys"][]="TrainingID";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,  	CandidateID,  	Training_Organizer,  	Training_Type,  	Program_Area,  	Training_City_Town,  	Training_Venue,  	Training_Start_Date,  	Training_End_Date";
$proto0["m_strFrom"] = "FROM training_participants";
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
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto6["m_sql"] = "TrainingID";
$proto6["m_srcTableName"] = "training_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "training_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Organizer",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto10["m_sql"] = "Training_Organizer";
$proto10["m_srcTableName"] = "training_participants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Type",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto12["m_sql"] = "Training_Type";
$proto12["m_srcTableName"] = "training_participants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Program_Area",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto14["m_sql"] = "Program_Area";
$proto14["m_srcTableName"] = "training_participants";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_City_Town",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto16["m_sql"] = "Training_City_Town";
$proto16["m_srcTableName"] = "training_participants";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Venue",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto18["m_sql"] = "Training_Venue";
$proto18["m_srcTableName"] = "training_participants";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto20["m_sql"] = "Training_Start_Date";
$proto20["m_srcTableName"] = "training_participants";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "training_participants",
	"m_srcTableName" => "training_participants"
));

$proto22["m_sql"] = "Training_End_Date";
$proto22["m_srcTableName"] = "training_participants";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "training_participants";
$proto25["m_srcTableName"] = "training_participants";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "TrainingID";
$proto25["m_columns"][] = "CandidateID";
$proto25["m_columns"][] = "Training_Organizer";
$proto25["m_columns"][] = "Training_Type";
$proto25["m_columns"][] = "Program_Area";
$proto25["m_columns"][] = "Training_City_Town";
$proto25["m_columns"][] = "Training_Venue";
$proto25["m_columns"][] = "Training_Start_Date";
$proto25["m_columns"][] = "Training_End_Date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "training_participants";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "training_participants";
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
$proto0["m_srcTableName"]="training_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants = createSqlQuery_training_participants();


	
		;

									

$tdatatraining_participants[".sqlquery"] = $queryData_training_participants;



$tableEvents["training_participants"] = new eventsBase;
$tdatatraining_participants[".hasEvents"] = false;

?>