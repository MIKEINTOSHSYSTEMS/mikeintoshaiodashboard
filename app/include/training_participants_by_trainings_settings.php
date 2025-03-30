<?php
$tdatatraining_participants_by_trainings = array();
$tdatatraining_participants_by_trainings[".searchableFields"] = array();
$tdatatraining_participants_by_trainings[".ShortName"] = "training_participants_by_trainings";
$tdatatraining_participants_by_trainings[".OwnerID"] = "";
$tdatatraining_participants_by_trainings[".OriginalTable"] = "training_participants";


$tdatatraining_participants_by_trainings[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatraining_participants_by_trainings[".originalPagesByType"] = $tdatatraining_participants_by_trainings[".pagesByType"];
$tdatatraining_participants_by_trainings[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatraining_participants_by_trainings[".originalPages"] = $tdatatraining_participants_by_trainings[".pages"];
$tdatatraining_participants_by_trainings[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatraining_participants_by_trainings[".originalDefaultPages"] = $tdatatraining_participants_by_trainings[".defaultPages"];

//	field labels
$fieldLabelstraining_participants_by_trainings = array();
$fieldToolTipstraining_participants_by_trainings = array();
$pageTitlestraining_participants_by_trainings = array();
$placeHolderstraining_participants_by_trainings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_participants_by_trainings["English"] = array();
	$fieldToolTipstraining_participants_by_trainings["English"] = array();
	$placeHolderstraining_participants_by_trainings["English"] = array();
	$pageTitlestraining_participants_by_trainings["English"] = array();
	$fieldLabelstraining_participants_by_trainings["English"]["TrainingID"] = "Training";
	$fieldToolTipstraining_participants_by_trainings["English"]["TrainingID"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["TrainingID"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["CandidateID"] = "Candidates";
	$fieldToolTipstraining_participants_by_trainings["English"]["CandidateID"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["CandidateID"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Organizer"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Type"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Type"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Venue"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Venue"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_Start_Date"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_Start_Date"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_End_Date"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_End_Date"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Sex"] = "Sex";
	$fieldToolTipstraining_participants_by_trainings["English"]["Sex"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Sex"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Full_Name"] = "Full Name";
	$fieldToolTipstraining_participants_by_trainings["English"]["Full_Name"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Full_Name"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["DOB"] = "DOB";
	$fieldToolTipstraining_participants_by_trainings["English"]["DOB"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["DOB"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Region"] = "Region";
	$fieldToolTipstraining_participants_by_trainings["English"]["Region"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Region"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["City"] = "City";
	$fieldToolTipstraining_participants_by_trainings["English"]["City"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["City"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipstraining_participants_by_trainings["English"]["Phone_Number"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Phone_Number"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Email_Address"] = "Email Address";
	$fieldToolTipstraining_participants_by_trainings["English"]["Email_Address"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Email_Address"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["TrainingTitle"] = "Training Title";
	$fieldToolTipstraining_participants_by_trainings["English"]["TrainingTitle"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["TrainingTitle"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Training_City"] = "Training City";
	$fieldToolTipstraining_participants_by_trainings["English"]["Training_City"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Training_City"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["Trainer_Name"] = "Trainer Name";
	$fieldToolTipstraining_participants_by_trainings["English"]["Trainer_Name"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["Trainer_Name"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["TrainingRound"] = "Training Round";
	$fieldToolTipstraining_participants_by_trainings["English"]["TrainingRound"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["TrainingRound"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["TrainingNote"] = "Training Note";
	$fieldToolTipstraining_participants_by_trainings["English"]["TrainingNote"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["TrainingNote"] = "";
	$fieldLabelstraining_participants_by_trainings["English"]["program_areas"] = "Program Areas";
	$fieldToolTipstraining_participants_by_trainings["English"]["program_areas"] = "";
	$placeHolderstraining_participants_by_trainings["English"]["program_areas"] = "";
	if (count($fieldToolTipstraining_participants_by_trainings["English"]))
		$tdatatraining_participants_by_trainings[".isUseToolTips"] = true;
}


	$tdatatraining_participants_by_trainings[".NCSearch"] = true;

	$tdatatraining_participants_by_trainings[".ChartRefreshTime"] = 0;


$tdatatraining_participants_by_trainings[".shortTableName"] = "training_participants_by_trainings";
$tdatatraining_participants_by_trainings[".nSecOptions"] = 0;

$tdatatraining_participants_by_trainings[".mainTableOwnerID"] = "";
$tdatatraining_participants_by_trainings[".entityType"] = 3;
$tdatatraining_participants_by_trainings[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_participants_by_trainings[".strOriginalTableName"] = "training_participants";

	



$tdatatraining_participants_by_trainings[".showAddInPopup"] = false;

$tdatatraining_participants_by_trainings[".showEditInPopup"] = false;

$tdatatraining_participants_by_trainings[".showViewInPopup"] = false;

$tdatatraining_participants_by_trainings[".listAjax"] = false;
//	temporary
//$tdatatraining_participants_by_trainings[".listAjax"] = false;

	$tdatatraining_participants_by_trainings[".audit"] = false;

	$tdatatraining_participants_by_trainings[".locking"] = false;


$pages = $tdatatraining_participants_by_trainings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_participants_by_trainings[".edit"] = true;
	$tdatatraining_participants_by_trainings[".afterEditAction"] = 1;
	$tdatatraining_participants_by_trainings[".closePopupAfterEdit"] = 1;
	$tdatatraining_participants_by_trainings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_participants_by_trainings[".add"] = true;
$tdatatraining_participants_by_trainings[".afterAddAction"] = 1;
$tdatatraining_participants_by_trainings[".closePopupAfterAdd"] = 1;
$tdatatraining_participants_by_trainings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_participants_by_trainings[".list"] = true;
}



$tdatatraining_participants_by_trainings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_participants_by_trainings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_participants_by_trainings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_participants_by_trainings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_participants_by_trainings[".printFriendly"] = true;
}



$tdatatraining_participants_by_trainings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_participants_by_trainings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_participants_by_trainings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_participants_by_trainings[".isUseAjaxSuggest"] = true;



																		

$tdatatraining_participants_by_trainings[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_participants_by_trainings[".buttonsAdded"] = false;

$tdatatraining_participants_by_trainings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_participants_by_trainings[".isUseTimeForSearch"] = false;


$tdatatraining_participants_by_trainings[".badgeColor"] = "8FBC8B";


$tdatatraining_participants_by_trainings[".allSearchFields"] = array();
$tdatatraining_participants_by_trainings[".filterFields"] = array();
$tdatatraining_participants_by_trainings[".requiredSearchFields"] = array();

$tdatatraining_participants_by_trainings[".googleLikeFields"] = array();
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "CandidateID";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Full_Name";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Sex";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "DOB";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Region";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "City";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Phone_Number";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Email_Address";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "TrainingID";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "TrainingTitle";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Start_Date";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_End_Date";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Type";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Organizer";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_City";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Training_Venue";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "Trainer_Name";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "TrainingRound";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "TrainingNote";
$tdatatraining_participants_by_trainings[".googleLikeFields"][] = "program_areas";



$tdatatraining_participants_by_trainings[".tableType"] = "chart";

$tdatatraining_participants_by_trainings[".printerPageOrientation"] = 0;
$tdatatraining_participants_by_trainings[".nPrinterPageScale"] = 100;

$tdatatraining_participants_by_trainings[".nPrinterSplitRecords"] = 40;

$tdatatraining_participants_by_trainings[".geocodingEnabled"] = false;



// chart settings
$tdatatraining_participants_by_trainings[".chartType"] = "2DColumn";
// end of chart settings

$tdatatraining_participants_by_trainings[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY
    c.CandidateID, t.TrainingTitle";
$tdatatraining_participants_by_trainings[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_participants_by_trainings[".orderindexes"] = array();
	$tdatatraining_participants_by_trainings[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "c.CandidateID");

	$tdatatraining_participants_by_trainings[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "t.TrainingTitle");



$tdatatraining_participants_by_trainings[".sqlHead"] = "SELECT c.CandidateID,  		CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      t.TrainingID,      t.TrainingTitle,      t.Training_Start_Date,      t.Training_End_Date,     t.TypeName AS Training_Type,      t.OrganizerName AS Training_Organizer,      t.CityTownName AS Training_City,      t.VenueName AS Training_Venue,      t.Trainer_FullName AS Trainer_Name,      t.TrainingRound,      t.TrainingNote,      t.program_areas";
$tdatatraining_participants_by_trainings[".sqlFrom"] = "FROM      candidates AS c  LEFT JOIN      trainings AS t  ON FIND_IN_SET(t.TrainingTitle, c.Dereja_Training_Services) > 0";
$tdatatraining_participants_by_trainings[".sqlWhereExpr"] = "t.TrainingTitle IS NOT NULL";
$tdatatraining_participants_by_trainings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_participants_by_trainings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_participants_by_trainings[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_participants_by_trainings[".highlightSearchResults"] = true;

$tableKeystraining_participants_by_trainings = array();
$tableKeystraining_participants_by_trainings[] = "TrainingID";
$tableKeystraining_participants_by_trainings[] = "CandidateID";
$tdatatraining_participants_by_trainings[".Keys"] = $tableKeystraining_participants_by_trainings;


$tdatatraining_participants_by_trainings[".hideMobileList"] = array();




//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","CandidateID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CandidateID";

		$fdata["sourceSingle"] = "CandidateID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.CandidateID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
		$edata["autoCompleteFields"][] = array('masterF'=>"First_Name", 'lookupF'=>"First_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle_Name", 'lookupF'=>"Middle_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last_Name", 'lookupF'=>"Last_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email", 'lookupF'=>"Email_Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone", 'lookupF'=>"Phone_Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant_Field_of_Study", 'lookupF'=>"Field_Of_Study");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["CandidateID"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "CandidateID";
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Full_Name");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Full_Name"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Full_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

		$fdata["sourceSingle"] = "Sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.Sex";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Sex"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Sex";
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","DOB");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["DOB"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Region");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "RegionName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RegionName";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Region"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","City");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["City"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "City";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Phone_Number");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Phone_Number"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Phone_Number";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Email_Address");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Email_Address"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Email_Address";
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","TrainingID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TrainingID";

		$fdata["sourceSingle"] = "TrainingID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TrainingID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Training_Organizer", 'lookupF'=>"OrganizerName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Type", 'lookupF'=>"TypeName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Program_Area", 'lookupF'=>"program_areas");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_City_Town", 'lookupF'=>"CityTownName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Venue", 'lookupF'=>"VenueName");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Start_Date", 'lookupF'=>"Training_Start_Date");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_End_Date", 'lookupF'=>"Training_End_Date");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingTitle";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["TrainingID"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "TrainingID";
//	TrainingTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TrainingTitle";
	$fdata["GoodName"] = "TrainingTitle";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","TrainingTitle");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["TrainingTitle"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "TrainingTitle";
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Start_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_Start_Date";

		$fdata["sourceSingle"] = "Training_Start_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.Training_Start_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"TrainingID", 'lookupF'=>"TrainingID");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_End_Date", 'lookupF'=>"Training_End_Date");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Training_Start_Date";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Training_Start_Date"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_End_Date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Training_End_Date";

		$fdata["sourceSingle"] = "Training_End_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.Training_End_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"TrainingID", 'lookupF'=>"TrainingID");
	$edata["autoCompleteFields"][] = array('masterF'=>"Training_Start_Date", 'lookupF'=>"Training_Start_Date");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Training_End_Date";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Training_End_Date"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_End_Date";
//	Training_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Training_Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TypeName";

		$fdata["sourceSingle"] = "Training_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.TypeName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Training_Type"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Type";
//	Training_Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Training_Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Organizer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OrganizerName";

		$fdata["sourceSingle"] = "Training_Organizer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.OrganizerName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Training_Organizer"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Organizer";
//	Training_City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Training_City";
	$fdata["GoodName"] = "Training_City";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_City");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Training_City"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_City";
//	Training_Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Training_Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Training_Venue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "VenueName";

		$fdata["sourceSingle"] = "Training_Venue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t.VenueName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Training_Venue"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Training_Venue";
//	Trainer_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Trainer_Name";
	$fdata["GoodName"] = "Trainer_Name";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","Trainer_Name");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["Trainer_Name"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "Trainer_Name";
//	TrainingRound
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "TrainingRound";
	$fdata["GoodName"] = "TrainingRound";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","TrainingRound");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["TrainingRound"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "TrainingRound";
//	TrainingNote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TrainingNote";
	$fdata["GoodName"] = "TrainingNote";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","TrainingNote");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["TrainingNote"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "TrainingNote";
//	program_areas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "program_areas";
	$fdata["GoodName"] = "program_areas";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("training_participants_by_trainings","program_areas");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatraining_participants_by_trainings["program_areas"] = $fdata;
		$tdatatraining_participants_by_trainings[".searchableFields"][] = "program_areas";

$tdatatraining_participants_by_trainings[".groupChart"] = true;
$tdatatraining_participants_by_trainings[".chartLabelInterval"] = 0;
$tdatatraining_participants_by_trainings[".chartLabelField"] = "TrainingTitle";
$tdatatraining_participants_by_trainings[".chartSeries"] = array();
$tdatatraining_participants_by_trainings[".chartSeries"][] = array(
	"field" => "TrainingID",
	"total" => "COUNT"
);
	$tdatatraining_participants_by_trainings[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">training_participants_by_trainings</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="0">
			<attr value="name">TrainingID</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="1">
		<attr value="name">TrainingTitle</attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="head">'.xmlencode("Number of candidates received training by training type").'</attr>
<attr value="foot">'.xmlencode("Trainings").'</attr>
<attr value="y_axis_label">'.xmlencode("TrainingID").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="0">
		<attr value="name">CandidateID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","CandidateID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="1">
		<attr value="name">Full_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Full_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="2">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="3">
		<attr value="name">DOB</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","DOB")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="4">
		<attr value="name">Region</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Region")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="5">
		<attr value="name">City</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","City")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="6">
		<attr value="name">Phone_Number</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Phone_Number")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="7">
		<attr value="name">Email_Address</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Email_Address")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="8">
		<attr value="name">TrainingID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","TrainingID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="9">
		<attr value="name">TrainingTitle</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","TrainingTitle")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="10">
		<attr value="name">Training_Start_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Start_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="11">
		<attr value="name">Training_End_Date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_End_Date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="12">
		<attr value="name">Training_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="13">
		<attr value="name">Training_Organizer</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Organizer")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="14">
		<attr value="name">Training_City</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_City")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="15">
		<attr value="name">Training_Venue</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Training_Venue")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="16">
		<attr value="name">Trainer_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","Trainer_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="17">
		<attr value="name">TrainingRound</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","TrainingRound")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="18">
		<attr value="name">TrainingNote</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","TrainingNote")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatraining_participants_by_trainings[".chartXml"] .= '<attr value="19">
		<attr value="name">program_areas</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("training_participants_by_trainings","program_areas")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatraining_participants_by_trainings[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">training_participants_by_trainings</attr>
<attr value="short_table_name">training_participants_by_trainings</attr>
</attr>

</chart>';

$tables_data["training_participants_by_trainings"]=&$tdatatraining_participants_by_trainings;
$field_labels["training_participants_by_trainings"] = &$fieldLabelstraining_participants_by_trainings;
$fieldToolTips["training_participants_by_trainings"] = &$fieldToolTipstraining_participants_by_trainings;
$placeHolders["training_participants_by_trainings"] = &$placeHolderstraining_participants_by_trainings;
$page_titles["training_participants_by_trainings"] = &$pageTitlestraining_participants_by_trainings;


changeTextControlsToDate( "training_participants_by_trainings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_participants_by_trainings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_participants_by_trainings"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_participants_by_trainings"][0] = $masterParams;
				$masterTablesData["training_participants_by_trainings"][0]["masterKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["training_participants_by_trainings"][0]["detailKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][0]["detailKeys"][]="CandidateID";
		
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
					$masterTablesData["training_participants_by_trainings"][1] = $masterParams;
				$masterTablesData["training_participants_by_trainings"][1]["masterKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][1]["masterKeys"][]="TrainingID";
				$masterTablesData["training_participants_by_trainings"][1]["detailKeys"] = array();
	$masterTablesData["training_participants_by_trainings"][1]["detailKeys"][]="TrainingID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_participants_by_trainings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "c.CandidateID,  		CONCAT(c.First_Name, ' ', COALESCE(c.Middle_Name, ''), ' ', c.Last_Name) AS Full_Name,      c.Sex,      c.DOB,      c.Region,      c.City,      c.Phone_Number,      c.Email_Address,      t.TrainingID,      t.TrainingTitle,      t.Training_Start_Date,      t.Training_End_Date,     t.TypeName AS Training_Type,      t.OrganizerName AS Training_Organizer,      t.CityTownName AS Training_City,      t.VenueName AS Training_Venue,      t.Trainer_FullName AS Trainer_Name,      t.TrainingRound,      t.TrainingNote,      t.program_areas";
$proto0["m_strFrom"] = "FROM      candidates AS c  LEFT JOIN      trainings AS t  ON FIND_IN_SET(t.TrainingTitle, c.Dereja_Training_Services) > 0";
$proto0["m_strWhere"] = "t.TrainingTitle IS NOT NULL";
$proto0["m_strOrderBy"] = "ORDER BY      c.CandidateID, t.TrainingTitle";
	
																								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t.TrainingTitle IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
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
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto6["m_sql"] = "c.CandidateID";
$proto6["m_srcTableName"] = "training_participants_by_trainings";
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
$proto8["m_srcTableName"] = "training_participants_by_trainings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Full_Name";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto15["m_sql"] = "c.Sex";
$proto15["m_srcTableName"] = "training_participants_by_trainings";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto17["m_sql"] = "c.DOB";
$proto17["m_srcTableName"] = "training_participants_by_trainings";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto19["m_sql"] = "c.Region";
$proto19["m_srcTableName"] = "training_participants_by_trainings";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto21["m_sql"] = "c.City";
$proto21["m_srcTableName"] = "training_participants_by_trainings";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto23["m_sql"] = "c.Phone_Number";
$proto23["m_srcTableName"] = "training_participants_by_trainings";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "c",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto25["m_sql"] = "c.Email_Address";
$proto25["m_srcTableName"] = "training_participants_by_trainings";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto27["m_sql"] = "t.TrainingID";
$proto27["m_srcTableName"] = "training_participants_by_trainings";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto29["m_sql"] = "t.TrainingTitle";
$proto29["m_srcTableName"] = "training_participants_by_trainings";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto31["m_sql"] = "t.Training_Start_Date";
$proto31["m_srcTableName"] = "training_participants_by_trainings";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto33["m_sql"] = "t.Training_End_Date";
$proto33["m_srcTableName"] = "training_participants_by_trainings";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto35["m_sql"] = "t.TypeName";
$proto35["m_srcTableName"] = "training_participants_by_trainings";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Training_Type";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "OrganizerName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto37["m_sql"] = "t.OrganizerName";
$proto37["m_srcTableName"] = "training_participants_by_trainings";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Training_Organizer";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "CityTownName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto39["m_sql"] = "t.CityTownName";
$proto39["m_srcTableName"] = "training_participants_by_trainings";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Training_City";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "VenueName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto41["m_sql"] = "t.VenueName";
$proto41["m_srcTableName"] = "training_participants_by_trainings";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Training_Venue";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Trainer_FullName",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto43["m_sql"] = "t.Trainer_FullName";
$proto43["m_srcTableName"] = "training_participants_by_trainings";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "Trainer_Name";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingRound",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto45["m_sql"] = "t.TrainingRound";
$proto45["m_srcTableName"] = "training_participants_by_trainings";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingNote",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto47["m_sql"] = "t.TrainingNote";
$proto47["m_srcTableName"] = "training_participants_by_trainings";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "program_areas",
	"m_strTable" => "t",
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto49["m_sql"] = "t.program_areas";
$proto49["m_srcTableName"] = "training_participants_by_trainings";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strName"] = "candidates";
$proto52["m_srcTableName"] = "training_participants_by_trainings";
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
$proto51["m_srcTableName"] = "training_participants_by_trainings";
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
$proto56["m_srcTableName"] = "training_participants_by_trainings";
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
$proto55["m_srcTableName"] = "training_participants_by_trainings";
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
	"m_srcTableName" => "training_participants_by_trainings"
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
	"m_srcTableName" => "training_participants_by_trainings"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 1;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="training_participants_by_trainings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_participants_by_trainings = createSqlQuery_training_participants_by_trainings();


	
																								;

																				

$tdatatraining_participants_by_trainings[".sqlquery"] = $queryData_training_participants_by_trainings;



$tdatatraining_participants_by_trainings[".hasEvents"] = false;

?>