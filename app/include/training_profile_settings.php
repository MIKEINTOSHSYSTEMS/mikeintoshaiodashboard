<?php
$tdatatraining_profile = array();
$tdatatraining_profile[".searchableFields"] = array();
$tdatatraining_profile[".ShortName"] = "training_profile";
$tdatatraining_profile[".OwnerID"] = "";
$tdatatraining_profile[".OriginalTable"] = "training_profile";


$tdatatraining_profile[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_profile[".originalPagesByType"] = $tdatatraining_profile[".pagesByType"];
$tdatatraining_profile[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_profile[".originalPages"] = $tdatatraining_profile[".pages"];
$tdatatraining_profile[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_profile[".originalDefaultPages"] = $tdatatraining_profile[".defaultPages"];

//	field labels
$fieldLabelstraining_profile = array();
$fieldToolTipstraining_profile = array();
$pageTitlestraining_profile = array();
$placeHolderstraining_profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_profile["English"] = array();
	$fieldToolTipstraining_profile["English"] = array();
	$placeHolderstraining_profile["English"] = array();
	$pageTitlestraining_profile["English"] = array();
	$fieldLabelstraining_profile["English"]["ID"] = "ID";
	$fieldToolTipstraining_profile["English"]["ID"] = "";
	$placeHolderstraining_profile["English"]["ID"] = "";
	$fieldLabelstraining_profile["English"]["First_Name"] = "First Name";
	$fieldToolTipstraining_profile["English"]["First_Name"] = "";
	$placeHolderstraining_profile["English"]["First_Name"] = "";
	$fieldLabelstraining_profile["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipstraining_profile["English"]["Middle_Name"] = "";
	$placeHolderstraining_profile["English"]["Middle_Name"] = "";
	$fieldLabelstraining_profile["English"]["Last_Name"] = "Last Name";
	$fieldToolTipstraining_profile["English"]["Last_Name"] = "";
	$placeHolderstraining_profile["English"]["Last_Name"] = "";
	$fieldLabelstraining_profile["English"]["Sex"] = "Sex";
	$fieldToolTipstraining_profile["English"]["Sex"] = "";
	$placeHolderstraining_profile["English"]["Sex"] = "";
	$fieldLabelstraining_profile["English"]["Region"] = "Region";
	$fieldToolTipstraining_profile["English"]["Region"] = "";
	$placeHolderstraining_profile["English"]["Region"] = "";
	$fieldLabelstraining_profile["English"]["City"] = "City";
	$fieldToolTipstraining_profile["English"]["City"] = "";
	$placeHolderstraining_profile["English"]["City"] = "";
	$fieldLabelstraining_profile["English"]["Participant_Profession"] = "Participant Profession";
	$fieldToolTipstraining_profile["English"]["Participant_Profession"] = "";
	$placeHolderstraining_profile["English"]["Participant_Profession"] = "";
	$fieldLabelstraining_profile["English"]["Participant_Field_of_Study"] = "Participant Field of Study";
	$fieldToolTipstraining_profile["English"]["Participant_Field_of_Study"] = "";
	$placeHolderstraining_profile["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelstraining_profile["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipstraining_profile["English"]["Participant_Organization_Name"] = "";
	$placeHolderstraining_profile["English"]["Participant_Organization_Name"] = "";
	$fieldLabelstraining_profile["English"]["Participant_Home_Address"] = "Participant Home Address";
	$fieldToolTipstraining_profile["English"]["Participant_Home_Address"] = "";
	$placeHolderstraining_profile["English"]["Participant_Home_Address"] = "";
	$fieldLabelstraining_profile["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipstraining_profile["English"]["Phone_Number"] = "";
	$placeHolderstraining_profile["English"]["Phone_Number"] = "";
	$fieldLabelstraining_profile["English"]["Email_Address"] = "Email Address";
	$fieldToolTipstraining_profile["English"]["Email_Address"] = "";
	$placeHolderstraining_profile["English"]["Email_Address"] = "";
	$fieldLabelstraining_profile["English"]["Disablity_Status"] = "Disablity Status";
	$fieldToolTipstraining_profile["English"]["Disablity_Status"] = "";
	$placeHolderstraining_profile["English"]["Disablity_Status"] = "";
	$fieldLabelstraining_profile["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipstraining_profile["English"]["Training_Organizer"] = "";
	$placeHolderstraining_profile["English"]["Training_Organizer"] = "";
	$fieldLabelstraining_profile["English"]["Training_Type"] = "Training Type";
	$fieldToolTipstraining_profile["English"]["Training_Type"] = "";
	$placeHolderstraining_profile["English"]["Training_Type"] = "";
	$fieldLabelstraining_profile["English"]["Program_Area"] = "Program Area";
	$fieldToolTipstraining_profile["English"]["Program_Area"] = "";
	$placeHolderstraining_profile["English"]["Program_Area"] = "";
	$fieldLabelstraining_profile["English"]["Training_City_Town"] = "Training City Town";
	$fieldToolTipstraining_profile["English"]["Training_City_Town"] = "";
	$placeHolderstraining_profile["English"]["Training_City_Town"] = "";
	$fieldLabelstraining_profile["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipstraining_profile["English"]["Training_Venue"] = "";
	$placeHolderstraining_profile["English"]["Training_Venue"] = "";
	$fieldLabelstraining_profile["English"]["Training_start_date"] = "Training start date";
	$fieldToolTipstraining_profile["English"]["Training_start_date"] = "";
	$placeHolderstraining_profile["English"]["Training_start_date"] = "";
	$fieldLabelstraining_profile["English"]["Training_end_date"] = "Training end date";
	$fieldToolTipstraining_profile["English"]["Training_end_date"] = "";
	$placeHolderstraining_profile["English"]["Training_end_date"] = "";
	$fieldLabelstraining_profile["English"]["Training_Title"] = "Training Title";
	$fieldToolTipstraining_profile["English"]["Training_Title"] = "";
	$placeHolderstraining_profile["English"]["Training_Title"] = "";
	$fieldLabelstraining_profile["English"]["Zone"] = "Zone";
	$fieldToolTipstraining_profile["English"]["Zone"] = "";
	$placeHolderstraining_profile["English"]["Zone"] = "";
	$fieldLabelstraining_profile["English"]["Sub_City"] = "Sub City";
	$fieldToolTipstraining_profile["English"]["Sub_City"] = "";
	$placeHolderstraining_profile["English"]["Sub_City"] = "";
	$fieldLabelstraining_profile["English"]["Participant_Facility_or_Organization_Type"] = "Participant Facility or Organization Type";
	$fieldToolTipstraining_profile["English"]["Participant_Facility_or_Organization_Type"] = "";
	$placeHolderstraining_profile["English"]["Participant_Facility_or_Organization_Type"] = "";
	$fieldLabelstraining_profile["English"]["Pre_Test_Score"] = "Pre-Test Score";
	$fieldToolTipstraining_profile["English"]["Pre_Test_Score"] = "";
	$placeHolderstraining_profile["English"]["Pre_Test_Score"] = "";
	$fieldLabelstraining_profile["English"]["Skill_Test"] = "Skill Test";
	$fieldToolTipstraining_profile["English"]["Skill_Test"] = "";
	$placeHolderstraining_profile["English"]["Skill_Test"] = "";
	$fieldLabelstraining_profile["English"]["Post_Test_Score"] = "Post-Test Score";
	$fieldToolTipstraining_profile["English"]["Post_Test_Score"] = "";
	$placeHolderstraining_profile["English"]["Post_Test_Score"] = "";
	if (count($fieldToolTipstraining_profile["English"]))
		$tdatatraining_profile[".isUseToolTips"] = true;
}


	$tdatatraining_profile[".NCSearch"] = true;



$tdatatraining_profile[".shortTableName"] = "training_profile";
$tdatatraining_profile[".nSecOptions"] = 0;

$tdatatraining_profile[".mainTableOwnerID"] = "";
$tdatatraining_profile[".entityType"] = 0;
$tdatatraining_profile[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_profile[".strOriginalTableName"] = "training_profile";

	



$tdatatraining_profile[".showAddInPopup"] = false;

$tdatatraining_profile[".showEditInPopup"] = false;

$tdatatraining_profile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatraining_profile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatraining_profile[".listAjax"] = false;
//	temporary
$tdatatraining_profile[".listAjax"] = false;

	$tdatatraining_profile[".audit"] = false;

	$tdatatraining_profile[".locking"] = false;


$pages = $tdatatraining_profile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_profile[".edit"] = true;
	$tdatatraining_profile[".afterEditAction"] = 1;
	$tdatatraining_profile[".closePopupAfterEdit"] = 1;
	$tdatatraining_profile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_profile[".add"] = true;
$tdatatraining_profile[".afterAddAction"] = 1;
$tdatatraining_profile[".closePopupAfterAdd"] = 1;
$tdatatraining_profile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_profile[".list"] = true;
}



$tdatatraining_profile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_profile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_profile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_profile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_profile[".printFriendly"] = true;
}



$tdatatraining_profile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_profile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_profile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_profile[".isUseAjaxSuggest"] = true;

$tdatatraining_profile[".rowHighlite"] = true;





$tdatatraining_profile[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_profile[".buttonsAdded"] = false;

$tdatatraining_profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_profile[".isUseTimeForSearch"] = false;


$tdatatraining_profile[".badgeColor"] = "7b68ee";


$tdatatraining_profile[".allSearchFields"] = array();
$tdatatraining_profile[".filterFields"] = array();
$tdatatraining_profile[".requiredSearchFields"] = array();

$tdatatraining_profile[".googleLikeFields"] = array();
$tdatatraining_profile[".googleLikeFields"][] = "ID";
$tdatatraining_profile[".googleLikeFields"][] = "First Name";
$tdatatraining_profile[".googleLikeFields"][] = "Middle Name";
$tdatatraining_profile[".googleLikeFields"][] = "Last Name";
$tdatatraining_profile[".googleLikeFields"][] = "Sex";
$tdatatraining_profile[".googleLikeFields"][] = "Training Organizer";
$tdatatraining_profile[".googleLikeFields"][] = "Training Type";
$tdatatraining_profile[".googleLikeFields"][] = "Program Area";
$tdatatraining_profile[".googleLikeFields"][] = "Training City Town";
$tdatatraining_profile[".googleLikeFields"][] = "Training Venue";
$tdatatraining_profile[".googleLikeFields"][] = "Training start date";
$tdatatraining_profile[".googleLikeFields"][] = "Training end date";
$tdatatraining_profile[".googleLikeFields"][] = "Training Title";
$tdatatraining_profile[".googleLikeFields"][] = "Region";
$tdatatraining_profile[".googleLikeFields"][] = "City";
$tdatatraining_profile[".googleLikeFields"][] = "Zone";
$tdatatraining_profile[".googleLikeFields"][] = "Sub City";
$tdatatraining_profile[".googleLikeFields"][] = "Participant Profession";
$tdatatraining_profile[".googleLikeFields"][] = "Participant Field of Study";
$tdatatraining_profile[".googleLikeFields"][] = "Participant Facility or Organization Type";
$tdatatraining_profile[".googleLikeFields"][] = "Participant Organization Name";
$tdatatraining_profile[".googleLikeFields"][] = "Participant Home Address";
$tdatatraining_profile[".googleLikeFields"][] = "Phone Number";
$tdatatraining_profile[".googleLikeFields"][] = "Email Address";
$tdatatraining_profile[".googleLikeFields"][] = "Disablity Status";
$tdatatraining_profile[".googleLikeFields"][] = "Pre-Test Score";
$tdatatraining_profile[".googleLikeFields"][] = "Skill Test";
$tdatatraining_profile[".googleLikeFields"][] = "Post-Test Score";



$tdatatraining_profile[".tableType"] = "list";

$tdatatraining_profile[".printerPageOrientation"] = 0;
$tdatatraining_profile[".nPrinterPageScale"] = 100;

$tdatatraining_profile[".nPrinterSplitRecords"] = 40;

$tdatatraining_profile[".geocodingEnabled"] = false;




$tdatatraining_profile[".isDisplayLoading"] = true;






$tdatatraining_profile[".pageSize"] = 20;

$tdatatraining_profile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatraining_profile[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_profile[".orderindexes"] = array();


$tdatatraining_profile[".sqlHead"] = "SELECT ID,  	`First Name`,  	`Middle Name`,  	`Last Name`,  	Sex,  	`Training Organizer`,  	`Training Type`,  	`Program Area`,  	`Training City Town`,  	`Training Venue`,  	`Training start date`,  	`Training end date`,  	`Training Title`,  	Region,  	City,  	`Zone`,  	`Sub City`,  	`Participant Profession`,  	`Participant Field of Study`,  	`Participant Facility or Organization Type`,  	`Participant Organization Name`,  	`Participant Home Address`,  	`Phone Number`,  	`Email Address`,  	`Disablity Status`,  	`Pre-Test Score`,  	`Skill Test`,  	`Post-Test Score`";
$tdatatraining_profile[".sqlFrom"] = "FROM training_profile";
$tdatatraining_profile[".sqlWhereExpr"] = "";
$tdatatraining_profile[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_profile[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_profile[".highlightSearchResults"] = true;

$tableKeystraining_profile = array();
$tableKeystraining_profile[] = "ID";
$tdatatraining_profile[".Keys"] = $tableKeystraining_profile;


$tdatatraining_profile[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
		
	
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
	$edata["LookupTable"] = "event_profile";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"First Name", 'lookupF'=>"First Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Middle Name", 'lookupF'=>"Middle Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Last Name", 'lookupF'=>"Last Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Sex", 'lookupF'=>"Sex");
	$edata["autoCompleteFields"][] = array('masterF'=>"Region", 'lookupF'=>"Region");
	$edata["autoCompleteFields"][] = array('masterF'=>"City", 'lookupF'=>"City");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Profession", 'lookupF'=>"Participant Profession");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Field of Study", 'lookupF'=>"Participant Field of Study");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Facility or Organization Type", 'lookupF'=>"Participant Organization Type");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Organization Name", 'lookupF'=>"Participant Organization Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Participant Home Address", 'lookupF'=>"Participant Home Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Phone Number", 'lookupF'=>"Phone Number");
	$edata["autoCompleteFields"][] = array('masterF'=>"Email Address", 'lookupF'=>"Email Address");
	$edata["autoCompleteFields"][] = array('masterF'=>"Disablity Status", 'lookupF'=>"Disablity Status");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ID";

	

	
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_profile["ID"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "ID";
//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","First_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "First Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`First Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["First Name"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "First Name";
//	Middle Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Middle Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Middle_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Middle Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Middle Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Middle Name"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Middle Name";
//	Last Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Last Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Last_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Last Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Last Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Last Name"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Last Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Sex");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sex";

	
	
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
	$edata["LookupValues"][] = "Female";
	$edata["LookupValues"][] = "Male";

	
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
			$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatatraining_profile["Sex"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Sex";
//	Training Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Training Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_Organizer");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training Organizer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training Organizer`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Training Organizer"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training Organizer";
//	Training Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Training Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_Type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training Type`";

	
	
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
	$edata["LookupValues"][] = "Basic";
	$edata["LookupValues"][] = "TOT";

	
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


	$tdatatraining_profile["Training Type"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training Type";
//	Program Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Program Area";
	$fdata["GoodName"] = "Program_Area";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Program_Area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Program Area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Program Area`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Program Area"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Program Area";
//	Training City Town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Training City Town";
	$fdata["GoodName"] = "Training_City_Town";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_City_Town");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training City Town";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training City Town`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Training City Town"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training City Town";
//	Training Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Training Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_Venue");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training Venue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training Venue`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Training Venue"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training Venue";
//	Training start date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Training start date";
	$fdata["GoodName"] = "Training_start_date";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_start_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Training start date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training start date`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Training start date"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training start date";
//	Training end date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Training end date";
	$fdata["GoodName"] = "Training_end_date";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_end_date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Training end date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training end date`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Training end date"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training end date";
//	Training Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Training Title";
	$fdata["GoodName"] = "Training_Title";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Training_Title");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Training Title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Training Title`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Training Title"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Training Title";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Region");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Region";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Region";

	
	
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
	$edata["LookupValues"][] = "Addis Ababa";
	$edata["LookupValues"][] = "Afar";
	$edata["LookupValues"][] = "Amhara";
	$edata["LookupValues"][] = "Benishangul-Gumuz";
	$edata["LookupValues"][] = "Central Ethiopia";
	$edata["LookupValues"][] = "Dire Dawa";
	$edata["LookupValues"][] = "Gambela";
	$edata["LookupValues"][] = "Harari";
	$edata["LookupValues"][] = "Oromia";
	$edata["LookupValues"][] = "Sidama";
	$edata["LookupValues"][] = "Somali";
	$edata["LookupValues"][] = "South Ethiopia";
	$edata["LookupValues"][] = "South West Ethiopia Peoples";
	$edata["LookupValues"][] = "Tigray";

	
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_profile["Region"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","City");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "City";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "City";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_profile["City"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "City";
//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Zone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Zone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Zone`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Zone"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Zone";
//	Sub City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Sub City";
	$fdata["GoodName"] = "Sub_City";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Sub_City");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Sub City";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Sub City`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Sub City"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Sub City";
//	Participant Profession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Participant Profession";
	$fdata["GoodName"] = "Participant_Profession";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Participant_Profession");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Profession";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Profession`";

	
	
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
	$edata["LookupValues"][] = "Trainer/Teacher/Instructor/Tutor";
	$edata["LookupValues"][] = "Student";
	$edata["LookupValues"][] = "Administration/Managment related";

	
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


	$tdatatraining_profile["Participant Profession"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Participant Profession";
//	Participant Field of Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Participant Field of Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Participant_Field_of_Study");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Field of Study";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Field of Study`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Participant Field of Study"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Participant Field of Study";
//	Participant Facility or Organization Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Participant Facility or Organization Type";
	$fdata["GoodName"] = "Participant_Facility_or_Organization_Type";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Participant_Facility_or_Organization_Type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Facility or Organization Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Facility or Organization Type`";

	
	
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
	$edata["LookupValues"][] = "Private University";
	$edata["LookupValues"][] = "Public University";
	$edata["LookupValues"][] = "Private commercial entry";
	$edata["LookupValues"][] = "TVET";
	$edata["LookupValues"][] = "Other Governmental organizations";

	
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


	$tdatatraining_profile["Participant Facility or Organization Type"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Participant Facility or Organization Type";
//	Participant Organization Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Participant Organization Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Participant_Organization_Name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Organization Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Organization Name`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Participant Organization Name"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Participant Organization Name";
//	Participant Home Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Participant Home Address";
	$fdata["GoodName"] = "Participant_Home_Address";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Participant_Home_Address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Participant Home Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Participant Home Address`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Participant Home Address"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Participant Home Address";
//	Phone Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Phone Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Phone_Number");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Phone Number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Phone Number`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatraining_profile["Phone Number"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Phone Number";
//	Email Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Email Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Email_Address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Email Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Email Address`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatraining_profile["Email Address"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Email Address";
//	Disablity Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Disablity Status";
	$fdata["GoodName"] = "Disablity_Status";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Disablity_Status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Disablity Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Disablity Status`";

	
	
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
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


	$tdatatraining_profile["Disablity Status"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Disablity Status";
//	Pre-Test Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Pre-Test Score";
	$fdata["GoodName"] = "Pre_Test_Score";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Pre_Test_Score");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Pre-Test Score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Pre-Test Score`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Pre-Test Score"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Pre-Test Score";
//	Skill Test
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Skill Test";
	$fdata["GoodName"] = "Skill_Test";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Skill_Test");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Skill Test";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Skill Test`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Skill Test"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Skill Test";
//	Post-Test Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Post-Test Score";
	$fdata["GoodName"] = "Post_Test_Score";
	$fdata["ownerTable"] = "training_profile";
	$fdata["Label"] = GetFieldLabel("training_profile","Post_Test_Score");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Post-Test Score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Post-Test Score`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatatraining_profile["Post-Test Score"] = $fdata;
		$tdatatraining_profile[".searchableFields"][] = "Post-Test Score";


$tables_data["training_profile"]=&$tdatatraining_profile;
$field_labels["training_profile"] = &$fieldLabelstraining_profile;
$fieldToolTips["training_profile"] = &$fieldToolTipstraining_profile;
$placeHolders["training_profile"] = &$placeHolderstraining_profile;
$page_titles["training_profile"] = &$pageTitlestraining_profile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["training_profile"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["training_profile"] = array();



	
				$strOriginalDetailsTable="event_profile";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="event_profile";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "event_profile";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training_profile"][0] = $masterParams;
				$masterTablesData["training_profile"][0]["masterKeys"] = array();
	$masterTablesData["training_profile"][0]["masterKeys"][]="ID";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Participant Organization Type";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Participant Organization Name";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Participant Home Address";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Phone Number";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Email Address";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Disablity Status";
				$masterTablesData["training_profile"][0]["masterKeys"][]="First Name";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Middle Name";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Last Name";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Sex";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Region";
				$masterTablesData["training_profile"][0]["masterKeys"][]="City";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Participant Profession";
				$masterTablesData["training_profile"][0]["masterKeys"][]="Participant Field of Study";
				$masterTablesData["training_profile"][0]["detailKeys"] = array();
	$masterTablesData["training_profile"][0]["detailKeys"][]="ID";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Participant Facility or Organization Type";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Participant Organization Name";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Participant Home Address";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Phone Number";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Email Address";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Disablity Status";
				$masterTablesData["training_profile"][0]["detailKeys"][]="First Name";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Middle Name";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Last Name";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Sex";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Region";
				$masterTablesData["training_profile"][0]["detailKeys"][]="City";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Participant Profession";
				$masterTablesData["training_profile"][0]["detailKeys"][]="Participant Field of Study";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`First Name`,  	`Middle Name`,  	`Last Name`,  	Sex,  	`Training Organizer`,  	`Training Type`,  	`Program Area`,  	`Training City Town`,  	`Training Venue`,  	`Training start date`,  	`Training end date`,  	`Training Title`,  	Region,  	City,  	`Zone`,  	`Sub City`,  	`Participant Profession`,  	`Participant Field of Study`,  	`Participant Facility or Organization Type`,  	`Participant Organization Name`,  	`Participant Home Address`,  	`Phone Number`,  	`Email Address`,  	`Disablity Status`,  	`Pre-Test Score`,  	`Skill Test`,  	`Post-Test Score`";
$proto0["m_strFrom"] = "FROM training_profile";
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
	"m_strName" => "ID",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "training_profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "First Name",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto8["m_sql"] = "`First Name`";
$proto8["m_srcTableName"] = "training_profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle Name",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto10["m_sql"] = "`Middle Name`";
$proto10["m_srcTableName"] = "training_profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Last Name",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto12["m_sql"] = "`Last Name`";
$proto12["m_srcTableName"] = "training_profile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto14["m_sql"] = "Sex";
$proto14["m_srcTableName"] = "training_profile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Organizer",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto16["m_sql"] = "`Training Organizer`";
$proto16["m_srcTableName"] = "training_profile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Type",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto18["m_sql"] = "`Training Type`";
$proto18["m_srcTableName"] = "training_profile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Program Area",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto20["m_sql"] = "`Program Area`";
$proto20["m_srcTableName"] = "training_profile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Training City Town",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto22["m_sql"] = "`Training City Town`";
$proto22["m_srcTableName"] = "training_profile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Venue",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto24["m_sql"] = "`Training Venue`";
$proto24["m_srcTableName"] = "training_profile";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Training start date",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto26["m_sql"] = "`Training start date`";
$proto26["m_srcTableName"] = "training_profile";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Training end date",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto28["m_sql"] = "`Training end date`";
$proto28["m_srcTableName"] = "training_profile";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Title",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto30["m_sql"] = "`Training Title`";
$proto30["m_srcTableName"] = "training_profile";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto32["m_sql"] = "Region";
$proto32["m_srcTableName"] = "training_profile";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto34["m_sql"] = "City";
$proto34["m_srcTableName"] = "training_profile";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto36["m_sql"] = "`Zone`";
$proto36["m_srcTableName"] = "training_profile";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Sub City",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto38["m_sql"] = "`Sub City`";
$proto38["m_srcTableName"] = "training_profile";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Profession",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto40["m_sql"] = "`Participant Profession`";
$proto40["m_srcTableName"] = "training_profile";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Field of Study",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto42["m_sql"] = "`Participant Field of Study`";
$proto42["m_srcTableName"] = "training_profile";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Facility or Organization Type",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto44["m_sql"] = "`Participant Facility or Organization Type`";
$proto44["m_srcTableName"] = "training_profile";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Organization Name",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto46["m_sql"] = "`Participant Organization Name`";
$proto46["m_srcTableName"] = "training_profile";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Home Address",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto48["m_sql"] = "`Participant Home Address`";
$proto48["m_srcTableName"] = "training_profile";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone Number",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto50["m_sql"] = "`Phone Number`";
$proto50["m_srcTableName"] = "training_profile";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Email Address",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto52["m_sql"] = "`Email Address`";
$proto52["m_srcTableName"] = "training_profile";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Disablity Status",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto54["m_sql"] = "`Disablity Status`";
$proto54["m_srcTableName"] = "training_profile";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Pre-Test Score",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto56["m_sql"] = "`Pre-Test Score`";
$proto56["m_srcTableName"] = "training_profile";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Skill Test",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto58["m_sql"] = "`Skill Test`";
$proto58["m_srcTableName"] = "training_profile";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Post-Test Score",
	"m_strTable" => "training_profile",
	"m_srcTableName" => "training_profile"
));

$proto60["m_sql"] = "`Post-Test Score`";
$proto60["m_srcTableName"] = "training_profile";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "training_profile";
$proto63["m_srcTableName"] = "training_profile";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "ID";
$proto63["m_columns"][] = "First Name";
$proto63["m_columns"][] = "Middle Name";
$proto63["m_columns"][] = "Last Name";
$proto63["m_columns"][] = "Sex";
$proto63["m_columns"][] = "Training Organizer";
$proto63["m_columns"][] = "Training Type";
$proto63["m_columns"][] = "Program Area";
$proto63["m_columns"][] = "Training City Town";
$proto63["m_columns"][] = "Training Venue";
$proto63["m_columns"][] = "Training start date";
$proto63["m_columns"][] = "Training end date";
$proto63["m_columns"][] = "Training Title";
$proto63["m_columns"][] = "Region";
$proto63["m_columns"][] = "City";
$proto63["m_columns"][] = "Zone";
$proto63["m_columns"][] = "Sub City";
$proto63["m_columns"][] = "Participant Profession";
$proto63["m_columns"][] = "Participant Field of Study";
$proto63["m_columns"][] = "Participant Facility or Organization Type";
$proto63["m_columns"][] = "Participant Organization Name";
$proto63["m_columns"][] = "Participant Home Address";
$proto63["m_columns"][] = "Phone Number";
$proto63["m_columns"][] = "Email Address";
$proto63["m_columns"][] = "Disablity Status";
$proto63["m_columns"][] = "Pre-Test Score";
$proto63["m_columns"][] = "Skill Test";
$proto63["m_columns"][] = "Post-Test Score";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "training_profile";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "training_profile";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="training_profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_profile = createSqlQuery_training_profile();


	
		;

																												

$tdatatraining_profile[".sqlquery"] = $queryData_training_profile;



$tableEvents["training_profile"] = new eventsBase;
$tdatatraining_profile[".hasEvents"] = false;

?>