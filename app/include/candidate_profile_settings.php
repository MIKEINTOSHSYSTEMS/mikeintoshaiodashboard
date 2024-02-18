<?php
$tdatacandidate_profile = array();
$tdatacandidate_profile[".searchableFields"] = array();
$tdatacandidate_profile[".ShortName"] = "candidate_profile";
$tdatacandidate_profile[".OwnerID"] = "";
$tdatacandidate_profile[".OriginalTable"] = "candidate_profile";


$tdatacandidate_profile[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacandidate_profile[".originalPagesByType"] = $tdatacandidate_profile[".pagesByType"];
$tdatacandidate_profile[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacandidate_profile[".originalPages"] = $tdatacandidate_profile[".pages"];
$tdatacandidate_profile[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacandidate_profile[".originalDefaultPages"] = $tdatacandidate_profile[".defaultPages"];

//	field labels
$fieldLabelscandidate_profile = array();
$fieldToolTipscandidate_profile = array();
$pageTitlescandidate_profile = array();
$placeHolderscandidate_profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidate_profile["English"] = array();
	$fieldToolTipscandidate_profile["English"] = array();
	$placeHolderscandidate_profile["English"] = array();
	$pageTitlescandidate_profile["English"] = array();
	$fieldLabelscandidate_profile["English"]["First_Name"] = "First Name";
	$fieldToolTipscandidate_profile["English"]["First_Name"] = "";
	$placeHolderscandidate_profile["English"]["First_Name"] = "";
	$fieldLabelscandidate_profile["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipscandidate_profile["English"]["Middle_Name"] = "";
	$placeHolderscandidate_profile["English"]["Middle_Name"] = "";
	$fieldLabelscandidate_profile["English"]["Last_Name"] = "Last Name";
	$fieldToolTipscandidate_profile["English"]["Last_Name"] = "";
	$placeHolderscandidate_profile["English"]["Last_Name"] = "";
	$fieldLabelscandidate_profile["English"]["Sex"] = "Sex";
	$fieldToolTipscandidate_profile["English"]["Sex"] = "";
	$placeHolderscandidate_profile["English"]["Sex"] = "";
	$fieldLabelscandidate_profile["English"]["DOB"] = "DOB";
	$fieldToolTipscandidate_profile["English"]["DOB"] = "";
	$placeHolderscandidate_profile["English"]["DOB"] = "";
	$fieldLabelscandidate_profile["English"]["Region"] = "Region";
	$fieldToolTipscandidate_profile["English"]["Region"] = "";
	$placeHolderscandidate_profile["English"]["Region"] = "";
	$fieldLabelscandidate_profile["English"]["City"] = "City";
	$fieldToolTipscandidate_profile["English"]["City"] = "";
	$placeHolderscandidate_profile["English"]["City"] = "";
	$fieldLabelscandidate_profile["English"]["Sub_City"] = "Sub City";
	$fieldToolTipscandidate_profile["English"]["Sub_City"] = "";
	$placeHolderscandidate_profile["English"]["Sub_City"] = "";
	$fieldLabelscandidate_profile["English"]["Zone"] = "Zone";
	$fieldToolTipscandidate_profile["English"]["Zone"] = "";
	$placeHolderscandidate_profile["English"]["Zone"] = "";
	$fieldLabelscandidate_profile["English"]["House_No"] = "House No";
	$fieldToolTipscandidate_profile["English"]["House_No"] = "";
	$placeHolderscandidate_profile["English"]["House_No"] = "";
	$fieldLabelscandidate_profile["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipscandidate_profile["English"]["Phone_Number"] = "";
	$placeHolderscandidate_profile["English"]["Phone_Number"] = "";
	$fieldLabelscandidate_profile["English"]["Phone_Number_Family"] = "Phone Number Family";
	$fieldToolTipscandidate_profile["English"]["Phone_Number_Family"] = "";
	$placeHolderscandidate_profile["English"]["Phone_Number_Family"] = "";
	$fieldLabelscandidate_profile["English"]["Email_Address"] = "Email Address";
	$fieldToolTipscandidate_profile["English"]["Email_Address"] = "";
	$placeHolderscandidate_profile["English"]["Email_Address"] = "";
	$fieldLabelscandidate_profile["English"]["Institution_Type"] = "Institution Type";
	$fieldToolTipscandidate_profile["English"]["Institution_Type"] = "";
	$placeHolderscandidate_profile["English"]["Institution_Type"] = "";
	$fieldLabelscandidate_profile["English"]["Education_Level"] = "Education Level";
	$fieldToolTipscandidate_profile["English"]["Education_Level"] = "";
	$placeHolderscandidate_profile["English"]["Education_Level"] = "";
	$fieldLabelscandidate_profile["English"]["Department"] = "Department";
	$fieldToolTipscandidate_profile["English"]["Department"] = "";
	$placeHolderscandidate_profile["English"]["Department"] = "";
	$fieldLabelscandidate_profile["English"]["Minor"] = "Minor";
	$fieldToolTipscandidate_profile["English"]["Minor"] = "";
	$placeHolderscandidate_profile["English"]["Minor"] = "";
	$fieldLabelscandidate_profile["English"]["Major"] = "Major";
	$fieldToolTipscandidate_profile["English"]["Major"] = "";
	$placeHolderscandidate_profile["English"]["Major"] = "";
	$fieldLabelscandidate_profile["English"]["Skills"] = "Skills";
	$fieldToolTipscandidate_profile["English"]["Skills"] = "";
	$placeHolderscandidate_profile["English"]["Skills"] = "";
	$fieldLabelscandidate_profile["English"]["English_Proficiency_Level"] = "English Proficiency Level";
	$fieldToolTipscandidate_profile["English"]["English_Proficiency_Level"] = "";
	$placeHolderscandidate_profile["English"]["English_Proficiency_Level"] = "";
	$fieldLabelscandidate_profile["English"]["Industry_Specific_Skills"] = "Industry Specific Skills";
	$fieldToolTipscandidate_profile["English"]["Industry_Specific_Skills"] = "";
	$placeHolderscandidate_profile["English"]["Industry_Specific_Skills"] = "";
	$fieldLabelscandidate_profile["English"]["IT_Related_Skills"] = "IT Related Skills";
	$fieldToolTipscandidate_profile["English"]["IT_Related_Skills"] = "";
	$placeHolderscandidate_profile["English"]["IT_Related_Skills"] = "";
	$fieldLabelscandidate_profile["English"]["Certifications"] = "Certifications";
	$fieldToolTipscandidate_profile["English"]["Certifications"] = "";
	$placeHolderscandidate_profile["English"]["Certifications"] = "";
	$fieldLabelscandidate_profile["English"]["Year_of_graduation"] = "Year of graduation";
	$fieldToolTipscandidate_profile["English"]["Year_of_graduation"] = "";
	$placeHolderscandidate_profile["English"]["Year_of_graduation"] = "";
	$fieldLabelscandidate_profile["English"]["Work_Experience"] = "Work Experience";
	$fieldToolTipscandidate_profile["English"]["Work_Experience"] = "";
	$placeHolderscandidate_profile["English"]["Work_Experience"] = "";
	$fieldLabelscandidate_profile["English"]["Joined_Dereja_Services"] = "Joined Dereja Services";
	$fieldToolTipscandidate_profile["English"]["Joined_Dereja_Services"] = "";
	$placeHolderscandidate_profile["English"]["Joined_Dereja_Services"] = "";
	$fieldLabelscandidate_profile["English"]["Dereja_Services"] = "Dereja Services";
	$fieldToolTipscandidate_profile["English"]["Dereja_Services"] = "";
	$placeHolderscandidate_profile["English"]["Dereja_Services"] = "";
	$fieldLabelscandidate_profile["English"]["Dereja_Training_Services"] = "Dereja Training Services";
	$fieldToolTipscandidate_profile["English"]["Dereja_Training_Services"] = "";
	$placeHolderscandidate_profile["English"]["Dereja_Training_Services"] = "";
	$fieldLabelscandidate_profile["English"]["Dereja_Event_Services"] = "Dereja Event Services";
	$fieldToolTipscandidate_profile["English"]["Dereja_Event_Services"] = "";
	$placeHolderscandidate_profile["English"]["Dereja_Event_Services"] = "";
	$fieldLabelscandidate_profile["English"]["Dereja_web_profile_completion"] = "Dereja web profile completion";
	$fieldToolTipscandidate_profile["English"]["Dereja_web_profile_completion"] = "";
	$placeHolderscandidate_profile["English"]["Dereja_web_profile_completion"] = "";
	$fieldLabelscandidate_profile["English"]["Dereja_Information_Source"] = "Dereja Information Source";
	$fieldToolTipscandidate_profile["English"]["Dereja_Information_Source"] = "";
	$placeHolderscandidate_profile["English"]["Dereja_Information_Source"] = "";
	$fieldLabelscandidate_profile["English"]["Training_Organizer"] = "Training Organizer";
	$fieldToolTipscandidate_profile["English"]["Training_Organizer"] = "";
	$placeHolderscandidate_profile["English"]["Training_Organizer"] = "";
	$fieldLabelscandidate_profile["English"]["Training_Type"] = "Training Type";
	$fieldToolTipscandidate_profile["English"]["Training_Type"] = "";
	$placeHolderscandidate_profile["English"]["Training_Type"] = "";
	$fieldLabelscandidate_profile["English"]["Program_Area"] = "Program Area";
	$fieldToolTipscandidate_profile["English"]["Program_Area"] = "";
	$placeHolderscandidate_profile["English"]["Program_Area"] = "";
	$fieldLabelscandidate_profile["English"]["Training_City_Town"] = "Training City Town";
	$fieldToolTipscandidate_profile["English"]["Training_City_Town"] = "";
	$placeHolderscandidate_profile["English"]["Training_City_Town"] = "";
	$fieldLabelscandidate_profile["English"]["Training_Venue"] = "Training Venue";
	$fieldToolTipscandidate_profile["English"]["Training_Venue"] = "";
	$placeHolderscandidate_profile["English"]["Training_Venue"] = "";
	$fieldLabelscandidate_profile["English"]["Training_start_date"] = "Training start date";
	$fieldToolTipscandidate_profile["English"]["Training_start_date"] = "";
	$placeHolderscandidate_profile["English"]["Training_start_date"] = "";
	$fieldLabelscandidate_profile["English"]["Training_end_date"] = "Training end date";
	$fieldToolTipscandidate_profile["English"]["Training_end_date"] = "";
	$placeHolderscandidate_profile["English"]["Training_end_date"] = "";
	$fieldLabelscandidate_profile["English"]["Training_Title"] = "Training Title";
	$fieldToolTipscandidate_profile["English"]["Training_Title"] = "";
	$placeHolderscandidate_profile["English"]["Training_Title"] = "";
	$fieldLabelscandidate_profile["English"]["Participant_Profession"] = "Participant Profession";
	$fieldToolTipscandidate_profile["English"]["Participant_Profession"] = "";
	$placeHolderscandidate_profile["English"]["Participant_Profession"] = "";
	$fieldLabelscandidate_profile["English"]["Participant_Field_of_Study"] = "Participant Field of Study";
	$fieldToolTipscandidate_profile["English"]["Participant_Field_of_Study"] = "";
	$placeHolderscandidate_profile["English"]["Participant_Field_of_Study"] = "";
	$fieldLabelscandidate_profile["English"]["Participant_Facility_or_Organization_Type"] = "Participant Facility or Organization Type";
	$fieldToolTipscandidate_profile["English"]["Participant_Facility_or_Organization_Type"] = "";
	$placeHolderscandidate_profile["English"]["Participant_Facility_or_Organization_Type"] = "";
	$fieldLabelscandidate_profile["English"]["Participant_Organization_Name"] = "Participant Organization Name";
	$fieldToolTipscandidate_profile["English"]["Participant_Organization_Name"] = "";
	$placeHolderscandidate_profile["English"]["Participant_Organization_Name"] = "";
	$fieldLabelscandidate_profile["English"]["Participant_Home_Address"] = "Participant Home Address";
	$fieldToolTipscandidate_profile["English"]["Participant_Home_Address"] = "";
	$placeHolderscandidate_profile["English"]["Participant_Home_Address"] = "";
	$fieldLabelscandidate_profile["English"]["Disablity_Status"] = "Disablity Status";
	$fieldToolTipscandidate_profile["English"]["Disablity_Status"] = "";
	$placeHolderscandidate_profile["English"]["Disablity_Status"] = "";
	$fieldLabelscandidate_profile["English"]["Pre_Test_Score"] = "Pre-Test Score";
	$fieldToolTipscandidate_profile["English"]["Pre_Test_Score"] = "";
	$placeHolderscandidate_profile["English"]["Pre_Test_Score"] = "";
	$fieldLabelscandidate_profile["English"]["Skill_Test"] = "Skill Test";
	$fieldToolTipscandidate_profile["English"]["Skill_Test"] = "";
	$placeHolderscandidate_profile["English"]["Skill_Test"] = "";
	$fieldLabelscandidate_profile["English"]["Post_Test_Score"] = "Post-Test Score";
	$fieldToolTipscandidate_profile["English"]["Post_Test_Score"] = "";
	$placeHolderscandidate_profile["English"]["Post_Test_Score"] = "";
	$fieldLabelscandidate_profile["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipscandidate_profile["English"]["CandidateID"] = "";
	$placeHolderscandidate_profile["English"]["CandidateID"] = "";
	$fieldLabelscandidate_profile["English"]["EventID"] = "Event ID";
	$fieldToolTipscandidate_profile["English"]["EventID"] = "";
	$placeHolderscandidate_profile["English"]["EventID"] = "";
	$fieldLabelscandidate_profile["English"]["TrainingID"] = "Training ID";
	$fieldToolTipscandidate_profile["English"]["TrainingID"] = "";
	$placeHolderscandidate_profile["English"]["TrainingID"] = "";
	if (count($fieldToolTipscandidate_profile["English"]))
		$tdatacandidate_profile[".isUseToolTips"] = true;
}


	$tdatacandidate_profile[".NCSearch"] = true;



$tdatacandidate_profile[".shortTableName"] = "candidate_profile";
$tdatacandidate_profile[".nSecOptions"] = 0;

$tdatacandidate_profile[".mainTableOwnerID"] = "";
$tdatacandidate_profile[".entityType"] = 0;
$tdatacandidate_profile[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidate_profile[".strOriginalTableName"] = "candidate_profile";

	



$tdatacandidate_profile[".showAddInPopup"] = false;

$tdatacandidate_profile[".showEditInPopup"] = false;

$tdatacandidate_profile[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacandidate_profile[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacandidate_profile[".listAjax"] = false;
//	temporary
$tdatacandidate_profile[".listAjax"] = false;

	$tdatacandidate_profile[".audit"] = false;

	$tdatacandidate_profile[".locking"] = false;


$pages = $tdatacandidate_profile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidate_profile[".edit"] = true;
	$tdatacandidate_profile[".afterEditAction"] = 1;
	$tdatacandidate_profile[".closePopupAfterEdit"] = 1;
	$tdatacandidate_profile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidate_profile[".add"] = true;
$tdatacandidate_profile[".afterAddAction"] = 1;
$tdatacandidate_profile[".closePopupAfterAdd"] = 1;
$tdatacandidate_profile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidate_profile[".list"] = true;
}



$tdatacandidate_profile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidate_profile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidate_profile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidate_profile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidate_profile[".printFriendly"] = true;
}



$tdatacandidate_profile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidate_profile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidate_profile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidate_profile[".isUseAjaxSuggest"] = true;

$tdatacandidate_profile[".rowHighlite"] = true;





$tdatacandidate_profile[".ajaxCodeSnippetAdded"] = false;

$tdatacandidate_profile[".buttonsAdded"] = false;

$tdatacandidate_profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidate_profile[".isUseTimeForSearch"] = false;


$tdatacandidate_profile[".badgeColor"] = "5f9ea0";


$tdatacandidate_profile[".allSearchFields"] = array();
$tdatacandidate_profile[".filterFields"] = array();
$tdatacandidate_profile[".requiredSearchFields"] = array();

$tdatacandidate_profile[".googleLikeFields"] = array();
$tdatacandidate_profile[".googleLikeFields"][] = "CandidateID";
$tdatacandidate_profile[".googleLikeFields"][] = "EventID";
$tdatacandidate_profile[".googleLikeFields"][] = "TrainingID";
$tdatacandidate_profile[".googleLikeFields"][] = "First Name";
$tdatacandidate_profile[".googleLikeFields"][] = "Middle Name";
$tdatacandidate_profile[".googleLikeFields"][] = "Last Name";
$tdatacandidate_profile[".googleLikeFields"][] = "Sex";
$tdatacandidate_profile[".googleLikeFields"][] = "DOB";
$tdatacandidate_profile[".googleLikeFields"][] = "Region";
$tdatacandidate_profile[".googleLikeFields"][] = "City";
$tdatacandidate_profile[".googleLikeFields"][] = "Sub City";
$tdatacandidate_profile[".googleLikeFields"][] = "Zone";
$tdatacandidate_profile[".googleLikeFields"][] = "House No";
$tdatacandidate_profile[".googleLikeFields"][] = "Phone Number";
$tdatacandidate_profile[".googleLikeFields"][] = "Phone Number Family";
$tdatacandidate_profile[".googleLikeFields"][] = "Email Address";
$tdatacandidate_profile[".googleLikeFields"][] = "Institution Type";
$tdatacandidate_profile[".googleLikeFields"][] = "Education Level";
$tdatacandidate_profile[".googleLikeFields"][] = "Department";
$tdatacandidate_profile[".googleLikeFields"][] = "Minor";
$tdatacandidate_profile[".googleLikeFields"][] = "Major";
$tdatacandidate_profile[".googleLikeFields"][] = "Skills";
$tdatacandidate_profile[".googleLikeFields"][] = "English Proficiency Level";
$tdatacandidate_profile[".googleLikeFields"][] = "Industry Specific Skills";
$tdatacandidate_profile[".googleLikeFields"][] = "IT Related Skills";
$tdatacandidate_profile[".googleLikeFields"][] = "Certifications";
$tdatacandidate_profile[".googleLikeFields"][] = "Year of graduation";
$tdatacandidate_profile[".googleLikeFields"][] = "Work Experience";
$tdatacandidate_profile[".googleLikeFields"][] = "Joined Dereja Services";
$tdatacandidate_profile[".googleLikeFields"][] = "Dereja Services";
$tdatacandidate_profile[".googleLikeFields"][] = "Dereja Training Services";
$tdatacandidate_profile[".googleLikeFields"][] = "Dereja Event Services";
$tdatacandidate_profile[".googleLikeFields"][] = "Dereja web profile completion";
$tdatacandidate_profile[".googleLikeFields"][] = "Dereja Information Source";
$tdatacandidate_profile[".googleLikeFields"][] = "Training Organizer";
$tdatacandidate_profile[".googleLikeFields"][] = "Training Type";
$tdatacandidate_profile[".googleLikeFields"][] = "Program Area";
$tdatacandidate_profile[".googleLikeFields"][] = "Training City Town";
$tdatacandidate_profile[".googleLikeFields"][] = "Training Venue";
$tdatacandidate_profile[".googleLikeFields"][] = "Training start date";
$tdatacandidate_profile[".googleLikeFields"][] = "Training end date";
$tdatacandidate_profile[".googleLikeFields"][] = "Training Title";
$tdatacandidate_profile[".googleLikeFields"][] = "Participant Profession";
$tdatacandidate_profile[".googleLikeFields"][] = "Participant Field of Study";
$tdatacandidate_profile[".googleLikeFields"][] = "Participant Facility or Organization Type";
$tdatacandidate_profile[".googleLikeFields"][] = "Participant Organization Name";
$tdatacandidate_profile[".googleLikeFields"][] = "Participant Home Address";
$tdatacandidate_profile[".googleLikeFields"][] = "Disablity Status";
$tdatacandidate_profile[".googleLikeFields"][] = "Pre-Test Score";
$tdatacandidate_profile[".googleLikeFields"][] = "Skill Test";
$tdatacandidate_profile[".googleLikeFields"][] = "Post-Test Score";



$tdatacandidate_profile[".tableType"] = "list";

$tdatacandidate_profile[".printerPageOrientation"] = 0;
$tdatacandidate_profile[".nPrinterPageScale"] = 100;

$tdatacandidate_profile[".nPrinterSplitRecords"] = 40;

$tdatacandidate_profile[".geocodingEnabled"] = false;




$tdatacandidate_profile[".isDisplayLoading"] = true;






$tdatacandidate_profile[".pageSize"] = 20;

$tdatacandidate_profile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacandidate_profile[".strOrderBy"] = $tstrOrderBy;

$tdatacandidate_profile[".orderindexes"] = array();


$tdatacandidate_profile[".sqlHead"] = "SELECT CandidateID,  	EventID,  	TrainingID,  	`First Name`,  	`Middle Name`,  	`Last Name`,  	Sex,  	DOB,  	Region,  	City,  	`Sub City`,  	`Zone`,  	`House No`,  	`Phone Number`,  	`Phone Number Family`,  	`Email Address`,  	`Institution Type`,  	`Education Level`,  	Department,  	Minor,  	Major,  	Skills,  	`English Proficiency Level`,  	`Industry Specific Skills`,  	`IT Related Skills`,  	Certifications,  	`Year of graduation`,  	`Work Experience`,  	`Joined Dereja Services`,  	`Dereja Services`,  	`Dereja Training Services`,  	`Dereja Event Services`,  	`Dereja web profile completion`,  	`Dereja Information Source`,  	`Training Organizer`,  	`Training Type`,  	`Program Area`,  	`Training City Town`,  	`Training Venue`,  	`Training start date`,  	`Training end date`,  	`Training Title`,  	`Participant Profession`,  	`Participant Field of Study`,  	`Participant Facility or Organization Type`,  	`Participant Organization Name`,  	`Participant Home Address`,  	`Disablity Status`,  	`Pre-Test Score`,  	`Skill Test`,  	`Post-Test Score`";
$tdatacandidate_profile[".sqlFrom"] = "FROM candidate_profile";
$tdatacandidate_profile[".sqlWhereExpr"] = "";
$tdatacandidate_profile[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacandidate_profile[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidate_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidate_profile[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidate_profile[".highlightSearchResults"] = true;

$tableKeyscandidate_profile = array();
$tableKeyscandidate_profile[] = "CandidateID";
$tdatacandidate_profile[".Keys"] = $tableKeyscandidate_profile;


$tdatacandidate_profile[".hideMobileList"] = array();




//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","CandidateID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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
	$edata["LookupTable"] = "candidate_profile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CandidateID";

	

	
	$edata["LookupOrderBy"] = "CandidateID";

	
	
	
	

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatacandidate_profile["CandidateID"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "CandidateID";
//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","EventID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "EventID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventID";

	
	
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
	$edata["LookupTable"] = "event_profile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EventID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EventID";

	

	
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


	$tdatacandidate_profile["EventID"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "EventID";
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","TrainingID");
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
	$edata["LookupTable"] = "training_profile";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TrainingID";

	

	
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


	$tdatacandidate_profile["TrainingID"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "TrainingID";
//	First Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "First Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","First_Name");
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


	$tdatacandidate_profile["First Name"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "First Name";
//	Middle Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Middle Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Middle_Name");
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


	$tdatacandidate_profile["Middle Name"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Middle Name";
//	Last Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Last Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Last_Name");
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


	$tdatacandidate_profile["Last Name"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Last Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Sex");
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacandidate_profile["Sex"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Sex";
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","DOB");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "DOB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOB";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 50;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatacandidate_profile["DOB"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Region");
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
	$edata["LookupValues"][] = "Central Ethiopia Regional State";
	$edata["LookupValues"][] = "Dire Dawa";
	$edata["LookupValues"][] = "Gambela";
	$edata["LookupValues"][] = "Harari";
	$edata["LookupValues"][] = "Oromia";
	$edata["LookupValues"][] = "Sidama";
	$edata["LookupValues"][] = "Somali";
	$edata["LookupValues"][] = "South Ethiopia Regional State";
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacandidate_profile["Region"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","City");
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


	$tdatacandidate_profile["City"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "City";
//	Sub City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Sub City";
	$fdata["GoodName"] = "Sub_City";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Sub_City");
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


	$tdatacandidate_profile["Sub City"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Sub City";
//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Zone");
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


	$tdatacandidate_profile["Zone"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Zone";
//	House No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "House No";
	$fdata["GoodName"] = "House_No";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","House_No");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "House No";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`House No`";

	
	
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


	$tdatacandidate_profile["House No"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "House No";
//	Phone Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Phone Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Phone_Number");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Phone Number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Phone Number`";

	
	
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


	$tdatacandidate_profile["Phone Number"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Phone Number";
//	Phone Number Family
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Phone Number Family";
	$fdata["GoodName"] = "Phone_Number_Family";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Phone_Number_Family");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Phone Number Family";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Phone Number Family`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

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


	$tdatacandidate_profile["Phone Number Family"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Phone Number Family";
//	Email Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Email Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Email_Address");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Email Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Email Address`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
		$edata["autoUpdatable"] = true;

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


	$tdatacandidate_profile["Email Address"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Email Address";
//	Institution Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Institution Type";
	$fdata["GoodName"] = "Institution_Type";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Institution_Type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Institution Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Institution Type`";

	
	
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
	$edata["LookupValues"][] = "University";
	$edata["LookupValues"][] = "TVET";
	$edata["LookupValues"][] = "Others";

	
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


	$tdatacandidate_profile["Institution Type"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Institution Type";
//	Education Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Education Level";
	$fdata["GoodName"] = "Education_Level";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Education_Level");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Education Level";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Education Level`";

	
	
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
	$edata["LookupValues"][] = "1st year";
	$edata["LookupValues"][] = "2nd year";
	$edata["LookupValues"][] = "3rd year";
	$edata["LookupValues"][] = "4th year";
	$edata["LookupValues"][] = "5th year";
	$edata["LookupValues"][] = "Graduate";
	$edata["LookupValues"][] = "At Work";

	
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


	$tdatacandidate_profile["Education Level"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Education Level";
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Department");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Department";

	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatacandidate_profile["Department"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Department";
//	Minor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Minor";
	$fdata["GoodName"] = "Minor";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Minor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Minor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Minor";

	
	
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


	$tdatacandidate_profile["Minor"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Minor";
//	Major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Major";
	$fdata["GoodName"] = "Major";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Major");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Major";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Major";

	
	
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


	$tdatacandidate_profile["Major"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Major";
//	Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Skills";
	$fdata["GoodName"] = "Skills";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Skills");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Skills";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Skills";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacandidate_profile["Skills"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Skills";
//	English Proficiency Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "English Proficiency Level";
	$fdata["GoodName"] = "English_Proficiency_Level";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","English_Proficiency_Level");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "English Proficiency Level";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`English Proficiency Level`";

	
	
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


	$tdatacandidate_profile["English Proficiency Level"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "English Proficiency Level";
//	Industry Specific Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Industry Specific Skills";
	$fdata["GoodName"] = "Industry_Specific_Skills";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Industry_Specific_Skills");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Industry Specific Skills";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Industry Specific Skills`";

	
	
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


	$tdatacandidate_profile["Industry Specific Skills"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Industry Specific Skills";
//	IT Related Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "IT Related Skills";
	$fdata["GoodName"] = "IT_Related_Skills";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","IT_Related_Skills");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "IT Related Skills";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`IT Related Skills`";

	
	
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


	$tdatacandidate_profile["IT Related Skills"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "IT Related Skills";
//	Certifications
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Certifications";
	$fdata["GoodName"] = "Certifications";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Certifications");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Certifications";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Certifications";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatacandidate_profile["Certifications"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Certifications";
//	Year of graduation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Year of graduation";
	$fdata["GoodName"] = "Year_of_graduation";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Year_of_graduation");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Year of graduation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Year of graduation`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 50;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatacandidate_profile["Year of graduation"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Year of graduation";
//	Work Experience
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Work Experience";
	$fdata["GoodName"] = "Work_Experience";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Work_Experience");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Work Experience";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Work Experience`";

	
	
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
	$edata["LookupValues"][] = "Internship";
	$edata["LookupValues"][] = "Work";

	
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


	$tdatacandidate_profile["Work Experience"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Work Experience";
//	Joined Dereja Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Joined Dereja Services";
	$fdata["GoodName"] = "Joined_Dereja_Services";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Joined_Dereja_Services");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Joined Dereja Services";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Joined Dereja Services`";

	
	
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


	$tdatacandidate_profile["Joined Dereja Services"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Joined Dereja Services";
//	Dereja Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Dereja Services";
	$fdata["GoodName"] = "Dereja_Services";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Dereja_Services");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dereja Services";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dereja Services`";

	
	
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
	$edata["LookupValues"][] = "Training";
	$edata["LookupValues"][] = "Event";
	$edata["LookupValues"][] = "Student club membership";
	$edata["LookupValues"][] = "CDC";
	$edata["LookupValues"][] = "Dereja.com Website Registration";

	
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


	$tdatacandidate_profile["Dereja Services"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Dereja Services";
//	Dereja Training Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Dereja Training Services";
	$fdata["GoodName"] = "Dereja_Training_Services";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Dereja_Training_Services");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dereja Training Services";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dereja Training Services`";

	
	
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
	$edata["LookupValues"][] = "DAAP";
	$edata["LookupValues"][] = "Technical";
	$edata["LookupValues"][] = "Language proficiency";
	$edata["LookupValues"][] = "Other";

	
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


	$tdatacandidate_profile["Dereja Training Services"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Dereja Training Services";
//	Dereja Event Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Dereja Event Services";
	$fdata["GoodName"] = "Dereja_Event_Services";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Dereja_Event_Services");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dereja Event Services";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dereja Event Services`";

	
	
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
	$edata["LookupValues"][] = "Job fair";
	$edata["LookupValues"][] = "Online event";
	$edata["LookupValues"][] = "Other";

	
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


	$tdatacandidate_profile["Dereja Event Services"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Dereja Event Services";
//	Dereja web profile completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Dereja web profile completion";
	$fdata["GoodName"] = "Dereja_web_profile_completion";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Dereja_web_profile_completion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Dereja web profile completion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dereja web profile completion`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatacandidate_profile["Dereja web profile completion"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Dereja web profile completion";
//	Dereja Information Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Dereja Information Source";
	$fdata["GoodName"] = "Dereja_Information_Source";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Dereja_Information_Source");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dereja Information Source";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dereja Information Source`";

	
	
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
	$edata["LookupValues"][] = "From a friend";
	$edata["LookupValues"][] = "At Dereja campaign";
	$edata["LookupValues"][] = "From my instructors";
	$edata["LookupValues"][] = "From Dereja website";
	$edata["LookupValues"][] = "Telegram link";
	$edata["LookupValues"][] = "Other";

	
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


	$tdatacandidate_profile["Dereja Information Source"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Dereja Information Source";
//	Training Organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Training Organizer";
	$fdata["GoodName"] = "Training_Organizer";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_Organizer");
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


	$tdatacandidate_profile["Training Organizer"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training Organizer";
//	Training Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Training Type";
	$fdata["GoodName"] = "Training_Type";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_Type");
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


	$tdatacandidate_profile["Training Type"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training Type";
//	Program Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Program Area";
	$fdata["GoodName"] = "Program_Area";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Program_Area");
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


	$tdatacandidate_profile["Program Area"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Program Area";
//	Training City Town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Training City Town";
	$fdata["GoodName"] = "Training_City_Town";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_City_Town");
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


	$tdatacandidate_profile["Training City Town"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training City Town";
//	Training Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Training Venue";
	$fdata["GoodName"] = "Training_Venue";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_Venue");
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


	$tdatacandidate_profile["Training Venue"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training Venue";
//	Training start date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Training start date";
	$fdata["GoodName"] = "Training_start_date";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_start_date");
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


	$tdatacandidate_profile["Training start date"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training start date";
//	Training end date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Training end date";
	$fdata["GoodName"] = "Training_end_date";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_end_date");
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


	$tdatacandidate_profile["Training end date"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training end date";
//	Training Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Training Title";
	$fdata["GoodName"] = "Training_Title";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Training_Title");
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


	$tdatacandidate_profile["Training Title"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Training Title";
//	Participant Profession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Participant Profession";
	$fdata["GoodName"] = "Participant_Profession";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Participant_Profession");
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


	$tdatacandidate_profile["Participant Profession"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Participant Profession";
//	Participant Field of Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Participant Field of Study";
	$fdata["GoodName"] = "Participant_Field_of_Study";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Participant_Field_of_Study");
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


	$tdatacandidate_profile["Participant Field of Study"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Participant Field of Study";
//	Participant Facility or Organization Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Participant Facility or Organization Type";
	$fdata["GoodName"] = "Participant_Facility_or_Organization_Type";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Participant_Facility_or_Organization_Type");
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


	$tdatacandidate_profile["Participant Facility or Organization Type"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Participant Facility or Organization Type";
//	Participant Organization Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Participant Organization Name";
	$fdata["GoodName"] = "Participant_Organization_Name";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Participant_Organization_Name");
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


	$tdatacandidate_profile["Participant Organization Name"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Participant Organization Name";
//	Participant Home Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Participant Home Address";
	$fdata["GoodName"] = "Participant_Home_Address";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Participant_Home_Address");
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


	$tdatacandidate_profile["Participant Home Address"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Participant Home Address";
//	Disablity Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Disablity Status";
	$fdata["GoodName"] = "Disablity_Status";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Disablity_Status");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatacandidate_profile["Disablity Status"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Disablity Status";
//	Pre-Test Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Pre-Test Score";
	$fdata["GoodName"] = "Pre_Test_Score";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Pre_Test_Score");
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


	$tdatacandidate_profile["Pre-Test Score"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Pre-Test Score";
//	Skill Test
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Skill Test";
	$fdata["GoodName"] = "Skill_Test";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Skill_Test");
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


	$tdatacandidate_profile["Skill Test"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Skill Test";
//	Post-Test Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Post-Test Score";
	$fdata["GoodName"] = "Post_Test_Score";
	$fdata["ownerTable"] = "candidate_profile";
	$fdata["Label"] = GetFieldLabel("candidate_profile","Post_Test_Score");
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


	$tdatacandidate_profile["Post-Test Score"] = $fdata;
		$tdatacandidate_profile[".searchableFields"][] = "Post-Test Score";


$tables_data["candidate_profile"]=&$tdatacandidate_profile;
$field_labels["candidate_profile"] = &$fieldLabelscandidate_profile;
$fieldToolTips["candidate_profile"] = &$fieldToolTipscandidate_profile;
$placeHolders["candidate_profile"] = &$placeHolderscandidate_profile;
$page_titles["candidate_profile"] = &$pageTitlescandidate_profile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["candidate_profile"] = array();
//	event_profile
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="event_profile";
		$detailsParam["dOriginalTable"] = "event_profile";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "event_profile";
	$detailsParam["dCaptionTable"] = GetTableCaption("event_profile");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["candidate_profile"][$dIndex] = $detailsParam;

	
		$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="CandidateID";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Sex";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Region";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="City";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Phone Number";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Email Address";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Disablity Status";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="EventID";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="TrainingID";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="First Name";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Middle Name";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Last Name";

				$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="CandidateID";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Sex";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Region";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="City";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Phone Number";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Email Address";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Disablity Status";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="EventID";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="TrainingID";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="First Name";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Middle Name";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Last Name";
//	training_profile
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="training_profile";
		$detailsParam["dOriginalTable"] = "training_profile";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_profile";
	$detailsParam["dCaptionTable"] = GetTableCaption("training_profile");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["candidate_profile"][$dIndex] = $detailsParam;

	
		$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="CandidateID";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Sub City";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Phone Number";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Email Address";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Disablity Status";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="EventID";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="TrainingID";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="First Name";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Middle Name";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Last Name";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Sex";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="Region";

	$detailsTablesData["candidate_profile"][$dIndex]["masterKeys"][]="City";

				$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="CandidateID";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Sub City";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Phone Number";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Email Address";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Disablity Status";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="EventID";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="TrainingID";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="First Name";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Middle Name";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Last Name";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Sex";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="Region";

		
	$detailsTablesData["candidate_profile"][$dIndex]["detailKeys"][]="City";

// tables which are master tables for current table (detail)
$masterTablesData["candidate_profile"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidate_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CandidateID,  	EventID,  	TrainingID,  	`First Name`,  	`Middle Name`,  	`Last Name`,  	Sex,  	DOB,  	Region,  	City,  	`Sub City`,  	`Zone`,  	`House No`,  	`Phone Number`,  	`Phone Number Family`,  	`Email Address`,  	`Institution Type`,  	`Education Level`,  	Department,  	Minor,  	Major,  	Skills,  	`English Proficiency Level`,  	`Industry Specific Skills`,  	`IT Related Skills`,  	Certifications,  	`Year of graduation`,  	`Work Experience`,  	`Joined Dereja Services`,  	`Dereja Services`,  	`Dereja Training Services`,  	`Dereja Event Services`,  	`Dereja web profile completion`,  	`Dereja Information Source`,  	`Training Organizer`,  	`Training Type`,  	`Program Area`,  	`Training City Town`,  	`Training Venue`,  	`Training start date`,  	`Training end date`,  	`Training Title`,  	`Participant Profession`,  	`Participant Field of Study`,  	`Participant Facility or Organization Type`,  	`Participant Organization Name`,  	`Participant Home Address`,  	`Disablity Status`,  	`Pre-Test Score`,  	`Skill Test`,  	`Post-Test Score`";
$proto0["m_strFrom"] = "FROM candidate_profile";
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
	"m_strName" => "CandidateID",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto6["m_sql"] = "CandidateID";
$proto6["m_srcTableName"] = "candidate_profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EventID",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto8["m_sql"] = "EventID";
$proto8["m_srcTableName"] = "candidate_profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto10["m_sql"] = "TrainingID";
$proto10["m_srcTableName"] = "candidate_profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "First Name",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto12["m_sql"] = "`First Name`";
$proto12["m_srcTableName"] = "candidate_profile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle Name",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto14["m_sql"] = "`Middle Name`";
$proto14["m_srcTableName"] = "candidate_profile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Last Name",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto16["m_sql"] = "`Last Name`";
$proto16["m_srcTableName"] = "candidate_profile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto18["m_sql"] = "Sex";
$proto18["m_srcTableName"] = "candidate_profile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto20["m_sql"] = "DOB";
$proto20["m_srcTableName"] = "candidate_profile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto22["m_sql"] = "Region";
$proto22["m_srcTableName"] = "candidate_profile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto24["m_sql"] = "City";
$proto24["m_srcTableName"] = "candidate_profile";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Sub City",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto26["m_sql"] = "`Sub City`";
$proto26["m_srcTableName"] = "candidate_profile";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto28["m_sql"] = "`Zone`";
$proto28["m_srcTableName"] = "candidate_profile";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "House No",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto30["m_sql"] = "`House No`";
$proto30["m_srcTableName"] = "candidate_profile";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone Number",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto32["m_sql"] = "`Phone Number`";
$proto32["m_srcTableName"] = "candidate_profile";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone Number Family",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto34["m_sql"] = "`Phone Number Family`";
$proto34["m_srcTableName"] = "candidate_profile";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Email Address",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto36["m_sql"] = "`Email Address`";
$proto36["m_srcTableName"] = "candidate_profile";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution Type",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto38["m_sql"] = "`Institution Type`";
$proto38["m_srcTableName"] = "candidate_profile";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Education Level",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto40["m_sql"] = "`Education Level`";
$proto40["m_srcTableName"] = "candidate_profile";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto42["m_sql"] = "Department";
$proto42["m_srcTableName"] = "candidate_profile";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Minor",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto44["m_sql"] = "Minor";
$proto44["m_srcTableName"] = "candidate_profile";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto46["m_sql"] = "Major";
$proto46["m_srcTableName"] = "candidate_profile";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Skills",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto48["m_sql"] = "Skills";
$proto48["m_srcTableName"] = "candidate_profile";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "English Proficiency Level",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto50["m_sql"] = "`English Proficiency Level`";
$proto50["m_srcTableName"] = "candidate_profile";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Industry Specific Skills",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto52["m_sql"] = "`Industry Specific Skills`";
$proto52["m_srcTableName"] = "candidate_profile";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "IT Related Skills",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto54["m_sql"] = "`IT Related Skills`";
$proto54["m_srcTableName"] = "candidate_profile";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Certifications",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto56["m_sql"] = "Certifications";
$proto56["m_srcTableName"] = "candidate_profile";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Year of graduation",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto58["m_sql"] = "`Year of graduation`";
$proto58["m_srcTableName"] = "candidate_profile";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Work Experience",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto60["m_sql"] = "`Work Experience`";
$proto60["m_srcTableName"] = "candidate_profile";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Joined Dereja Services",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto62["m_sql"] = "`Joined Dereja Services`";
$proto62["m_srcTableName"] = "candidate_profile";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja Services",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto64["m_sql"] = "`Dereja Services`";
$proto64["m_srcTableName"] = "candidate_profile";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja Training Services",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto66["m_sql"] = "`Dereja Training Services`";
$proto66["m_srcTableName"] = "candidate_profile";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja Event Services",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto68["m_sql"] = "`Dereja Event Services`";
$proto68["m_srcTableName"] = "candidate_profile";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja web profile completion",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto70["m_sql"] = "`Dereja web profile completion`";
$proto70["m_srcTableName"] = "candidate_profile";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja Information Source",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto72["m_sql"] = "`Dereja Information Source`";
$proto72["m_srcTableName"] = "candidate_profile";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Organizer",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto74["m_sql"] = "`Training Organizer`";
$proto74["m_srcTableName"] = "candidate_profile";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Type",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto76["m_sql"] = "`Training Type`";
$proto76["m_srcTableName"] = "candidate_profile";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Program Area",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto78["m_sql"] = "`Program Area`";
$proto78["m_srcTableName"] = "candidate_profile";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Training City Town",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto80["m_sql"] = "`Training City Town`";
$proto80["m_srcTableName"] = "candidate_profile";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Venue",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto82["m_sql"] = "`Training Venue`";
$proto82["m_srcTableName"] = "candidate_profile";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Training start date",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto84["m_sql"] = "`Training start date`";
$proto84["m_srcTableName"] = "candidate_profile";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Training end date",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto86["m_sql"] = "`Training end date`";
$proto86["m_srcTableName"] = "candidate_profile";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Training Title",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto88["m_sql"] = "`Training Title`";
$proto88["m_srcTableName"] = "candidate_profile";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Profession",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto90["m_sql"] = "`Participant Profession`";
$proto90["m_srcTableName"] = "candidate_profile";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Field of Study",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto92["m_sql"] = "`Participant Field of Study`";
$proto92["m_srcTableName"] = "candidate_profile";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Facility or Organization Type",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto94["m_sql"] = "`Participant Facility or Organization Type`";
$proto94["m_srcTableName"] = "candidate_profile";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Organization Name",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto96["m_sql"] = "`Participant Organization Name`";
$proto96["m_srcTableName"] = "candidate_profile";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Participant Home Address",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto98["m_sql"] = "`Participant Home Address`";
$proto98["m_srcTableName"] = "candidate_profile";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Disablity Status",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto100["m_sql"] = "`Disablity Status`";
$proto100["m_srcTableName"] = "candidate_profile";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Pre-Test Score",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto102["m_sql"] = "`Pre-Test Score`";
$proto102["m_srcTableName"] = "candidate_profile";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Skill Test",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto104["m_sql"] = "`Skill Test`";
$proto104["m_srcTableName"] = "candidate_profile";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Post-Test Score",
	"m_strTable" => "candidate_profile",
	"m_srcTableName" => "candidate_profile"
));

$proto106["m_sql"] = "`Post-Test Score`";
$proto106["m_srcTableName"] = "candidate_profile";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "candidate_profile";
$proto109["m_srcTableName"] = "candidate_profile";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "CandidateID";
$proto109["m_columns"][] = "EventID";
$proto109["m_columns"][] = "TrainingID";
$proto109["m_columns"][] = "First Name";
$proto109["m_columns"][] = "Middle Name";
$proto109["m_columns"][] = "Last Name";
$proto109["m_columns"][] = "Sex";
$proto109["m_columns"][] = "DOB";
$proto109["m_columns"][] = "Region";
$proto109["m_columns"][] = "City";
$proto109["m_columns"][] = "Sub City";
$proto109["m_columns"][] = "Zone";
$proto109["m_columns"][] = "House No";
$proto109["m_columns"][] = "Phone Number";
$proto109["m_columns"][] = "Phone Number Family";
$proto109["m_columns"][] = "Email Address";
$proto109["m_columns"][] = "Institution Type";
$proto109["m_columns"][] = "Education Level";
$proto109["m_columns"][] = "Department";
$proto109["m_columns"][] = "Minor";
$proto109["m_columns"][] = "Major";
$proto109["m_columns"][] = "Skills";
$proto109["m_columns"][] = "English Proficiency Level";
$proto109["m_columns"][] = "Industry Specific Skills";
$proto109["m_columns"][] = "IT Related Skills";
$proto109["m_columns"][] = "Certifications";
$proto109["m_columns"][] = "Year of graduation";
$proto109["m_columns"][] = "Work Experience";
$proto109["m_columns"][] = "Joined Dereja Services";
$proto109["m_columns"][] = "Dereja Services";
$proto109["m_columns"][] = "Dereja Training Services";
$proto109["m_columns"][] = "Dereja Event Services";
$proto109["m_columns"][] = "Dereja web profile completion";
$proto109["m_columns"][] = "Dereja Information Source";
$proto109["m_columns"][] = "Training Organizer";
$proto109["m_columns"][] = "Training Type";
$proto109["m_columns"][] = "Program Area";
$proto109["m_columns"][] = "Training City Town";
$proto109["m_columns"][] = "Training Venue";
$proto109["m_columns"][] = "Training start date";
$proto109["m_columns"][] = "Training end date";
$proto109["m_columns"][] = "Training Title";
$proto109["m_columns"][] = "Participant Profession";
$proto109["m_columns"][] = "Participant Field of Study";
$proto109["m_columns"][] = "Participant Facility or Organization Type";
$proto109["m_columns"][] = "Participant Organization Name";
$proto109["m_columns"][] = "Participant Home Address";
$proto109["m_columns"][] = "Disablity Status";
$proto109["m_columns"][] = "Pre-Test Score";
$proto109["m_columns"][] = "Skill Test";
$proto109["m_columns"][] = "Post-Test Score";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "candidate_profile";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "candidate_profile";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="candidate_profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidate_profile = createSqlQuery_candidate_profile();


	
		;

																																																			

$tdatacandidate_profile[".sqlquery"] = $queryData_candidate_profile;



$tableEvents["candidate_profile"] = new eventsBase;
$tdatacandidate_profile[".hasEvents"] = false;

?>