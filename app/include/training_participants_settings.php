<?php
$tdatatraining_participants = array();
$tdatatraining_participants[".searchableFields"] = array();
$tdatatraining_participants[".ShortName"] = "training_participants";
$tdatatraining_participants[".OwnerID"] = "";
$tdatatraining_participants[".OriginalTable"] = "training_participants";


$tdatatraining_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatraining_participants[".originalPagesByType"] = $tdatatraining_participants[".pagesByType"];
$tdatatraining_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatraining_participants[".originalPages"] = $tdatatraining_participants[".pages"];
$tdatatraining_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
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
	$fieldLabelstraining_participants["English"]["CandidateID"] = "Candidate";
	$fieldToolTipstraining_participants["English"]["CandidateID"] = "";
	$placeHolderstraining_participants["English"]["CandidateID"] = "";
	$fieldLabelstraining_participants["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_participants["English"]["Training_Organizer"] = "";
	$placeHolderstraining_participants["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_participants["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_participants["English"]["Training_Type"] = "";
	$placeHolderstraining_participants["English"]["Training_Type"] = "";
	$fieldLabelstraining_participants["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_participants["English"]["Training_Venue"] = "";
	$placeHolderstraining_participants["English"]["Training_Venue"] = "";
	$fieldLabelstraining_participants["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstraining_participants["English"]["Training_Start_Date"] = "";
	$placeHolderstraining_participants["English"]["Training_Start_Date"] = "";
	$fieldLabelstraining_participants["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstraining_participants["English"]["Training_End_Date"] = "";
	$placeHolderstraining_participants["English"]["Training_End_Date"] = "";
	$fieldLabelstraining_participants["English"]["Sex"] = "Sex";
	$fieldToolTipstraining_participants["English"]["Sex"] = "";
	$placeHolderstraining_participants["English"]["Sex"] = "";
	$fieldLabelstraining_participants["English"]["Full_Name"] = "Full Name";
	$fieldToolTipstraining_participants["English"]["Full_Name"] = "";
	$placeHolderstraining_participants["English"]["Full_Name"] = "";
	$fieldLabelstraining_participants["English"]["DOB"] = "DOB";
	$fieldToolTipstraining_participants["English"]["DOB"] = "";
	$placeHolderstraining_participants["English"]["DOB"] = "";
	$fieldLabelstraining_participants["English"]["Region"] = "Region";
	$fieldToolTipstraining_participants["English"]["Region"] = "";
	$placeHolderstraining_participants["English"]["Region"] = "";
	$fieldLabelstraining_participants["English"]["City"] = "City";
	$fieldToolTipstraining_participants["English"]["City"] = "";
	$placeHolderstraining_participants["English"]["City"] = "";
	$fieldLabelstraining_participants["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipstraining_participants["English"]["Phone_Number"] = "";
	$placeHolderstraining_participants["English"]["Phone_Number"] = "";
	$fieldLabelstraining_participants["English"]["Email_Address"] = "Email Address";
	$fieldToolTipstraining_participants["English"]["Email_Address"] = "";
	$placeHolderstraining_participants["English"]["Email_Address"] = "";
	$fieldLabelstraining_participants["English"]["TrainingTitle"] = "Training Title";
	$fieldToolTipstraining_participants["English"]["TrainingTitle"] = "";
	$placeHolderstraining_participants["English"]["TrainingTitle"] = "";
	$fieldLabelstraining_participants["English"]["Training_City"] = "Training City";
	$fieldToolTipstraining_participants["English"]["Training_City"] = "";
	$placeHolderstraining_participants["English"]["Training_City"] = "";
	$fieldLabelstraining_participants["English"]["Trainer_Name"] = "Trainer Name";
	$fieldToolTipstraining_participants["English"]["Trainer_Name"] = "";
	$placeHolderstraining_participants["English"]["Trainer_Name"] = "";
	$fieldLabelstraining_participants["English"]["TrainingRound"] = "Training Round";
	$fieldToolTipstraining_participants["English"]["TrainingRound"] = "";
	$placeHolderstraining_participants["English"]["TrainingRound"] = "";
	$fieldLabelstraining_participants["English"]["TrainingNote"] = "Training Note";
	$fieldToolTipstraining_participants["English"]["TrainingNote"] = "";
	$placeHolderstraining_participants["English"]["TrainingNote"] = "";
	$fieldLabelstraining_participants["English"]["program_areas"] = "Program Areas";
	$fieldToolTipstraining_participants["English"]["program_areas"] = "";
	$placeHolderstraining_participants["English"]["program_areas"] = "";
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

$tdatatraining_participants[".listAjax"] = false;
//	temporary
//$tdatatraining_participants[".listAjax"] = false;

	$tdatatraining_participants[".audit"] = true;

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



																																										

$tdatatraining_participants[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants[".buttonsAdded"] = false;

$tdatatraining_participants[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants[".isUseTimeForSearch"] = false;


$tdatatraining_participants[".badgeColor"] = "4169e1";


$tdatatraining_participants[".allSearchFields"] = array();
$tdatatraining_participants[".filterFields"] = array();
$tdatatraining_participants[".requiredSearchFields"] = array();

$tdatatraining_participants[".googleLikeFields"] = array();
$tdatatraining_participants[".googleLikeFields"][] = "CandidateID";
$tdatatraining_participants[".googleLikeFields"][] = "Full_Name";
$tdatatraining_participants[".googleLikeFields"][] = "Sex";
$tdatatraining_participants[".googleLikeFields"][] = "DOB";
$tdatatraining_participants[".googleLikeFields"][] = "Region";
$tdatatraining_participants[".googleLikeFields"][] = "City";
$tdatatraining_participants[".googleLikeFields"][] = "Phone_Number";
$tdatatraining_participants[".googleLikeFields"][] = "Email_Address";
$tdatatraining_participants[".googleLikeFields"][] = "TrainingID";
$tdatatraining_participants[".googleLikeFields"][] = "TrainingTitle";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Start_Date";
$tdatatraining_participants[".googleLikeFields"][] = "Training_End_Date";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Type";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Organizer";
$tdatatraining_participants[".googleLikeFields"][] = "Training_City";
$tdatatraining_participants[".googleLikeFields"][] = "Training_Venue";
$tdatatraining_participants[".googleLikeFields"][] = "Trainer_Name";
$tdatatraining_participants[".googleLikeFields"][] = "TrainingRound";
$tdatatraining_participants[".googleLikeFields"][] = "TrainingNote";
$tdatatraining_participants[".googleLikeFields"][] = "program_areas";



$tdatatraining_participants[".tableType"] = "list";

$tdatatraining_participants[".printerPageOrientation"] = 0;
$tdatatraining_participants[".nPrinterPageScale"] = 100;

$tdatatraining_participants[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants[".geocodingEnabled"] = false;




$tdatatraining_participants[".isDisplayLoading"] = true;






$tdatatraining_participants[".pageSize"] = 20;

$tdatatraining_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY
    c.CandidateID, t.TrainingTitle";
$tdatatraining_participants[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants[".orderindexes"] = array();
	$tdatatraining_participants[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "c.CandidateID");

	$tdatatraining_participants[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "t.TrainingTitle");



$tdatatraining_participants[".sqlHead"] = "SELECT c.CandidateID,  		CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      t.TrainingID,      t.TrainingTitle,      t.Training_Start_Date,      t.Training_End_Date,     t.TypeName AS Training_Type,      t.OrganizerName AS Training_Organizer,      t.CityTownName AS Training_City,      t.VenueName AS Training_Venue,      t.Trainer_FullName AS Trainer_Name,      t.TrainingRound,      t.TrainingNote,      t.program_areas";
$tdatatraining_participants[".sqlFrom"] = "FROM      candidates AS c  LEFT JOIN      trainings AS t  ON FIND_IN_SET(t.TrainingTitle, c.Dereja_Training_Services) > 0";
$tdatatraining_participants[".sqlWhereExpr"] = "c.Dereja_Training_Services IS NOT NULL";
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
$tdatatraining_participants[".Keys"] = $tableKeystraining_participants;


$tdatatraining_participants[".hideMobileList"] = array();




//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","CandidateID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CandidateID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.CandidateID";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"TrainingID", 'lookupF'=>"Dereja_Training_Services");
	$edata["autoCompleteFields"][] = array('masterF'=>"StudentID", 'lookupF'=>"StudentID");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Start_Date", 'lookupF'=>"Training_Start_Date");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_End_Date", 'lookupF'=>"Training_End_Date");
	$edata["autoCompleteFields"][] = array('masterF'=>"First_Name", 'lookupF'=>"First_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle_Name", 'lookupF'=>"Middle_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last_Name", 'lookupF'=>"Last_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email", 'lookupF'=>"Email_Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone", 'lookupF'=>"Phone_Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disability_Status", 'lookupF'=>"Disability_Status");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disability_Type", 'lookupF'=>"Disability_Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disability_Type_Other", 'lookupF'=>"Disability_Type_Other");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant_Field_of_Study", 'lookupF'=>"Field_Of_Study");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Full_Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
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
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("training_participants","Full_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Full_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name)";

	
	
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


	$tdatatraining_participants["Full_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Full_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Sex";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

	
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


	$tdatatraining_participants["Sex"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Sex";
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","DOB");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "DOB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.DOB";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatraining_participants["DOB"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","Region");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Region";

	
	
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


	$tdatatraining_participants["Region"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "City";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.City";

	
	
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


	$tdatatraining_participants["City"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "City";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","Phone_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone_Number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Phone_Number";

	
	
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


	$tdatatraining_participants["Phone_Number"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Phone_Number";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants","Email_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email_Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Email_Address";

	
	
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


	$tdatatraining_participants["Email_Address"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Email_Address";
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","TrainingID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TrainingID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TrainingID";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "TrainingTitle";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingTitle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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


	$tdatatraining_participants["TrainingID"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "TrainingID";
//	TrainingTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TrainingTitle";
	$fdata["GoodName"] = "TrainingTitle";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","TrainingTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TrainingTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TrainingTitle";

	
	
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

	
		
	$edata["LinkField"] = "TrainingTitle";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TrainingTitle";

	

	
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


	$tdatatraining_participants["TrainingTitle"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "TrainingTitle";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.Training_Start_Date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatatraining_participants["Training_Start_Date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.Training_End_Date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatatraining_participants["Training_End_Date"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_End_Date";
//	Training_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Training_Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TypeName";

	
	
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


	$tdatatraining_participants["Training_Type"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Type";
//	Training_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Training_Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Organizer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OrganizerName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.OrganizerName";

	
	
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


	$tdatatraining_participants["Training_Organizer"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Organizer";
//	Training_City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Training_City";
	$fdata["GoodName"] = "Training_City";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CityTownName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.CityTownName";

	
	
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


	$tdatatraining_participants["Training_City"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_City";
//	Training_Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Training_Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Training_Venue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "VenueName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.VenueName";

	
	
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


	$tdatatraining_participants["Training_Venue"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Training_Venue";
//	Trainer_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Trainer_Name";
	$fdata["GoodName"] = "Trainer_Name";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","Trainer_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Trainer_FullName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.Trainer_FullName";

	
	
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


	$tdatatraining_participants["Trainer_Name"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "Trainer_Name";
//	TrainingRound
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TrainingRound";
	$fdata["GoodName"] = "TrainingRound";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","TrainingRound");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TrainingRound";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TrainingRound";

	
	
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


	$tdatatraining_participants["TrainingRound"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "TrainingRound";
//	TrainingNote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TrainingNote";
	$fdata["GoodName"] = "TrainingNote";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","TrainingNote");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TrainingNote";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TrainingNote";

	
	
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


	$tdatatraining_participants["TrainingNote"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "TrainingNote";
//	program_areas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "program_areas";
	$fdata["GoodName"] = "program_areas";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants","program_areas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "program_areas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.program_areas";

	
	
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


	$tdatatraining_participants["program_areas"] = $fdata;
		$tdatatraining_participants[".searchableFields"][] = "program_areas";


$tables_data["training_participants"]=&$tdatatraining_participants;
$field_labels["training_participants"] = &$fieldLabelstraining_participants;
$fieldToolTips["training_participants"] = &$fieldToolTipstraining_participants;
$placeHolders["training_participants"] = &$placeHolderstraining_participants;
$page_titles["training_participants"] = &$pageTitlestraining_participants;


changeTextControlsToDate( "training_participants" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_participants"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_participants"] = array();



	
	//if !@t.bReportCrossTab
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
		
	//endif
	
	//if !@t.bReportCrossTab
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
				$masterTablesData["training_participants"][1]["masterKeys"][]="Training_Start_Date";
				$masterTablesData["training_participants"][1]["masterKeys"][]="Training_End_Date";
				$masterTablesData["training_participants"][1]["detailKeys"] = array();
	$masterTablesData["training_participants"][1]["detailKeys"][]="TrainingID";
				$masterTablesData["training_participants"][1]["detailKeys"][]="Training_Start_Date";
				$masterTablesData["training_participants"][1]["detailKeys"][]="Training_End_Date";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_view";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_view";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["training_participants"][2] = $masterParams;
				$masterTablesData["training_participants"][2]["masterKeys"] = array();
	$masterTablesData["training_participants"][2]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][2]["detailKeys"] = array();
	$masterTablesData["training_participants"][2]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_by_region";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_by_region";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["training_participants"][3] = $masterParams;
				$masterTablesData["training_participants"][3]["masterKeys"] = array();
	$masterTablesData["training_participants"][3]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][3]["detailKeys"] = array();
	$masterTablesData["training_participants"][3]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_reports";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_reports";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["training_participants"][4] = $masterParams;
				$masterTablesData["training_participants"][4]["masterKeys"] = array();
	$masterTablesData["training_participants"][4]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][4]["detailKeys"] = array();
	$masterTablesData["training_participants"][4]["detailKeys"][]="CandidateID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates_by_gender";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates_by_gender";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["training_participants"][5] = $masterParams;
				$masterTablesData["training_participants"][5]["masterKeys"] = array();
	$masterTablesData["training_participants"][5]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants"][5]["detailKeys"] = array();
	$masterTablesData["training_participants"][5]["detailKeys"][]="CandidateID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "c.CandidateID,  		CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      t.TrainingID,      t.TrainingTitle,      t.Training_Start_Date,      t.Training_End_Date,     t.TypeName AS Training_Type,      t.OrganizerName AS Training_Organizer,      t.CityTownName AS Training_City,      t.VenueName AS Training_Venue,      t.Trainer_FullName AS Trainer_Name,      t.TrainingRound,      t.TrainingNote,      t.program_areas";
$proto0["m_strFrom"] = "FROM      candidates AS c  LEFT JOIN      trainings AS t  ON FIND_IN_SET(t.TrainingTitle, c.Dereja_Training_Services) > 0";
$proto0["m_strWhere"] = "c.Dereja_Training_Services IS NOT NULL";
$proto0["m_strOrderBy"] = "ORDER BY      c.CandidateID, t.TrainingTitle";
	
																								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "c.Dereja_Training_Services IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Training_Services",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IS NOT NULL";
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
	"m_strName" => "CandidateID",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto6["m_sql"] = "c.CandidateID";
$proto6["m_srcTableName"] = "training_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.First_Name"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(c.Middle_Name, '')"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Last_Name"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name)";
$proto8["m_srcTableName"] = "training_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Full_Name";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto15["m_sql"] = "c.Sex";
$proto15["m_srcTableName"] = "training_participants";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto17["m_sql"] = "c.DOB";
$proto17["m_srcTableName"] = "training_participants";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto19["m_sql"] = "c.Region";
$proto19["m_srcTableName"] = "training_participants";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto21["m_sql"] = "c.City";
$proto21["m_srcTableName"] = "training_participants";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto23["m_sql"] = "c.Phone_Number";
$proto23["m_srcTableName"] = "training_participants";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto25["m_sql"] = "c.Email_Address";
$proto25["m_srcTableName"] = "training_participants";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto27["m_sql"] = "t.TrainingID";
$proto27["m_srcTableName"] = "training_participants";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto29["m_sql"] = "t.TrainingTitle";
$proto29["m_srcTableName"] = "training_participants";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto31["m_sql"] = "t.Training_Start_Date";
$proto31["m_srcTableName"] = "training_participants";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto33["m_sql"] = "t.Training_End_Date";
$proto33["m_srcTableName"] = "training_participants";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto35["m_sql"] = "t.TypeName";
$proto35["m_srcTableName"] = "training_participants";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Training_Type";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "OrganizerName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto37["m_sql"] = "t.OrganizerName";
$proto37["m_srcTableName"] = "training_participants";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Training_Organizer";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "CityTownName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto39["m_sql"] = "t.CityTownName";
$proto39["m_srcTableName"] = "training_participants";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Training_City";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "VenueName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto41["m_sql"] = "t.VenueName";
$proto41["m_srcTableName"] = "training_participants";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Training_Venue";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Trainer_FullName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto43["m_sql"] = "t.Trainer_FullName";
$proto43["m_srcTableName"] = "training_participants";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "Trainer_Name";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingRound",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto45["m_sql"] = "t.TrainingRound";
$proto45["m_srcTableName"] = "training_participants";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingNote",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto47["m_sql"] = "t.TrainingNote";
$proto47["m_srcTableName"] = "training_participants";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "program_areas",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto49["m_sql"] = "t.program_areas";
$proto49["m_srcTableName"] = "training_participants";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strName"] = "candidates";
$proto52["m_srcTableName"] = "training_participants";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "CandidateID";
$proto52["m_columns"][] = "StudentID";
$proto52["m_columns"][] = "First_Name";
$proto52["m_columns"][] = "Middle_Name";
$proto52["m_columns"][] = "Last_Name";
$proto52["m_columns"][] = "Sex";
$proto52["m_columns"][] = "DOB";
$proto52["m_columns"][] = "Region";
$proto52["m_columns"][] = "City";
$proto52["m_columns"][] = "Sub_City";
$proto52["m_columns"][] = "Zone";
$proto52["m_columns"][] = "Woreda";
$proto52["m_columns"][] = "Kebele";
$proto52["m_columns"][] = "House_No";
$proto52["m_columns"][] = "Phone_Number";
$proto52["m_columns"][] = "Phone_Number_Alternate";
$proto52["m_columns"][] = "Email_Address";
$proto52["m_columns"][] = "Disability_Status";
$proto52["m_columns"][] = "Disability_Type";
$proto52["m_columns"][] = "Disability_Type_Other";
$proto52["m_columns"][] = "Institution_Type";
$proto52["m_columns"][] = "Institution_Name";
$proto52["m_columns"][] = "Education_Level";
$proto52["m_columns"][] = "Department";
$proto52["m_columns"][] = "Minor";
$proto52["m_columns"][] = "Major";
$proto52["m_columns"][] = "Enrollement_Type";
$proto52["m_columns"][] = "Skills";
$proto52["m_columns"][] = "Languages";
$proto52["m_columns"][] = "English_Proficiency_Level";
$proto52["m_columns"][] = "Industry_Specific_Skills";
$proto52["m_columns"][] = "IT_Related_Skills";
$proto52["m_columns"][] = "Certifications";
$proto52["m_columns"][] = "Year_of_graduation";
$proto52["m_columns"][] = "Field_Of_Study";
$proto52["m_columns"][] = "GPA";
$proto52["m_columns"][] = "Intervention";
$proto52["m_columns"][] = "Campaign";
$proto52["m_columns"][] = "Attend_Employability_Skill";
$proto52["m_columns"][] = "DAAP_enrolled_1st Round";
$proto52["m_columns"][] = "DAAP_Completed";
$proto52["m_columns"][] = "DAAP_Completed_Courses";
$proto52["m_columns"][] = "Job_Fair_Clinic";
$proto52["m_columns"][] = "Job_Fair";
$proto52["m_columns"][] = "Exit_Exam_Score";
$proto52["m_columns"][] = "Exit_Exam_Status";
$proto52["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto52["m_columns"][] = "Upload_on_Tracker";
$proto52["m_columns"][] = "Upload_on_Website";
$proto52["m_columns"][] = "Work_Experience";
$proto52["m_columns"][] = "Joined_Dereja_Services";
$proto52["m_columns"][] = "Dereja_Services";
$proto52["m_columns"][] = "Program_In_Dereja";
$proto52["m_columns"][] = "Dereja_Training_Services";
$proto52["m_columns"][] = "Training_Start_Date";
$proto52["m_columns"][] = "Training_End_Date";
$proto52["m_columns"][] = "Dereja_Event_Services";
$proto52["m_columns"][] = "Event_Start_Date";
$proto52["m_columns"][] = "Event_End_Date";
$proto52["m_columns"][] = "Event_Participant_Type";
$proto52["m_columns"][] = "Dereja_web_profile_completion";
$proto52["m_columns"][] = "Dereja_Information_Source";
$proto52["m_columns"][] = "Employment_Status";
$proto52["m_columns"][] = "Employment_Company";
$proto52["m_columns"][] = "Employer_Sector";
$proto52["m_columns"][] = "Employment_Position";
$proto52["m_columns"][] = "Salary";
$proto52["m_columns"][] = "Career_Level_Of_Payment";
$proto52["m_columns"][] = "Placement_Type";
$proto52["m_columns"][] = "Placement_Duration";
$proto52["m_columns"][] = "Remark";
$proto52["m_columns"][] = "candidate_data";
$proto52["m_columns"][] = "Date";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "candidates AS c";
$proto51["m_alias"] = "c";
$proto51["m_srcTableName"] = "training_participants";
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_LEFTJOIN";
			$proto56=array();
$proto56["m_strName"] = "trainings";
$proto56["m_srcTableName"] = "training_participants";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "TrainingID";
$proto56["m_columns"][] = "Training_Start_Date";
$proto56["m_columns"][] = "Training_End_Date";
$proto56["m_columns"][] = "TrainingTitle";
$proto56["m_columns"][] = "TypeName";
$proto56["m_columns"][] = "OrganizerName";
$proto56["m_columns"][] = "CityTownName";
$proto56["m_columns"][] = "VenueName";
$proto56["m_columns"][] = "Trainer_FullName";
$proto56["m_columns"][] = "TrainingRound";
$proto56["m_columns"][] = "TrainingNote";
$proto56["m_columns"][] = "program_areas";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "LEFT JOIN      trainings AS t  ON FIND_IN_SET(t.TrainingTitle, c.Dereja_Training_Services) > 0";
$proto55["m_alias"] = "t";
$proto55["m_srcTableName"] = "training_participants";
$proto57=array();
$proto57["m_sql"] = "FIND_IN_SET(t.TrainingTitle, c.Dereja_Training_Services) > 0";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t.TrainingTitle"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Dereja_Training_Services"
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "FIND_IN_SET";
$obj = new SQLFunctionCall($proto58);

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "> 0";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants"
));

$proto61["m_column"]=$obj;
$proto61["m_bAsc"] = 1;
$proto61["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto61);

$proto0["m_orderby"][]=$obj;					
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 1;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="training_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants = createSqlQuery_training_participants();


	
																								;

																				

$tdatatraining_participants[".sqlquery"] = $queryData_training_participants;



$tdatatraining_participants[".hasEvents"] = false;

?>