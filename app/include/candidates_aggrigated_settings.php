<?php
$tdatacandidates_aggrigated = array();
$tdatacandidates_aggrigated[".searchableFields"] = array();
$tdatacandidates_aggrigated[".ShortName"] = "candidates_aggrigated";
$tdatacandidates_aggrigated[".OwnerID"] = "";
$tdatacandidates_aggrigated[".OriginalTable"] = "candidates";


$tdatacandidates_aggrigated[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterchart\":[\"masterchart\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacandidates_aggrigated[".originalPagesByType"] = $tdatacandidates_aggrigated[".pagesByType"];
$tdatacandidates_aggrigated[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterchart\":[\"masterchart\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacandidates_aggrigated[".originalPages"] = $tdatacandidates_aggrigated[".pages"];
$tdatacandidates_aggrigated[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"export\":\"export\",\"list\":\"list\",\"masterchart\":\"masterchart\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacandidates_aggrigated[".originalDefaultPages"] = $tdatacandidates_aggrigated[".defaultPages"];

//	field labels
$fieldLabelscandidates_aggrigated = array();
$fieldToolTipscandidates_aggrigated = array();
$pageTitlescandidates_aggrigated = array();
$placeHolderscandidates_aggrigated = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidates_aggrigated["English"] = array();
	$fieldToolTipscandidates_aggrigated["English"] = array();
	$placeHolderscandidates_aggrigated["English"] = array();
	$pageTitlescandidates_aggrigated["English"] = array();
	$fieldLabelscandidates_aggrigated["English"]["Sex"] = "Sex";
	$fieldToolTipscandidates_aggrigated["English"]["Sex"] = "";
	$placeHolderscandidates_aggrigated["English"]["Sex"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipscandidates_aggrigated["English"]["Disability_Status"] = "";
	$placeHolderscandidates_aggrigated["English"]["Disability_Status"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Age"] = "Age";
	$fieldToolTipscandidates_aggrigated["English"]["Age"] = "";
	$placeHolderscandidates_aggrigated["English"]["Age"] = "";
	$fieldLabelscandidates_aggrigated["English"]["candidates"] = "Candidates";
	$fieldToolTipscandidates_aggrigated["English"]["candidates"] = "";
	$placeHolderscandidates_aggrigated["English"]["candidates"] = "";
	$fieldLabelscandidates_aggrigated["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipscandidates_aggrigated["English"]["CandidateID"] = "";
	$placeHolderscandidates_aggrigated["English"]["CandidateID"] = "";
	$fieldLabelscandidates_aggrigated["English"]["StudentID"] = "Student ID";
	$fieldToolTipscandidates_aggrigated["English"]["StudentID"] = "";
	$placeHolderscandidates_aggrigated["English"]["StudentID"] = "";
	$fieldLabelscandidates_aggrigated["English"]["First_Name"] = "First Name";
	$fieldToolTipscandidates_aggrigated["English"]["First_Name"] = "";
	$placeHolderscandidates_aggrigated["English"]["First_Name"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipscandidates_aggrigated["English"]["Middle_Name"] = "";
	$placeHolderscandidates_aggrigated["English"]["Middle_Name"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Last_Name"] = "Last Name";
	$fieldToolTipscandidates_aggrigated["English"]["Last_Name"] = "";
	$placeHolderscandidates_aggrigated["English"]["Last_Name"] = "";
	$fieldLabelscandidates_aggrigated["English"]["DOB"] = "DOB";
	$fieldToolTipscandidates_aggrigated["English"]["DOB"] = "";
	$placeHolderscandidates_aggrigated["English"]["DOB"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Region"] = "Region";
	$fieldToolTipscandidates_aggrigated["English"]["Region"] = "";
	$placeHolderscandidates_aggrigated["English"]["Region"] = "";
	$fieldLabelscandidates_aggrigated["English"]["City"] = "City";
	$fieldToolTipscandidates_aggrigated["English"]["City"] = "";
	$placeHolderscandidates_aggrigated["English"]["City"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Sub_City"] = "Sub City";
	$fieldToolTipscandidates_aggrigated["English"]["Sub_City"] = "";
	$placeHolderscandidates_aggrigated["English"]["Sub_City"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Zone"] = "Zone";
	$fieldToolTipscandidates_aggrigated["English"]["Zone"] = "";
	$placeHolderscandidates_aggrigated["English"]["Zone"] = "";
	$fieldLabelscandidates_aggrigated["English"]["House_No"] = "House No";
	$fieldToolTipscandidates_aggrigated["English"]["House_No"] = "";
	$placeHolderscandidates_aggrigated["English"]["House_No"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipscandidates_aggrigated["English"]["Phone_Number"] = "";
	$placeHolderscandidates_aggrigated["English"]["Phone_Number"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Phone_Number_Alternate"] = "Phone Number Alternate";
	$fieldToolTipscandidates_aggrigated["English"]["Phone_Number_Alternate"] = "";
	$placeHolderscandidates_aggrigated["English"]["Phone_Number_Alternate"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Email_Address"] = "Email Address";
	$fieldToolTipscandidates_aggrigated["English"]["Email_Address"] = "";
	$placeHolderscandidates_aggrigated["English"]["Email_Address"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipscandidates_aggrigated["English"]["Disability_Type"] = "";
	$placeHolderscandidates_aggrigated["English"]["Disability_Type"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipscandidates_aggrigated["English"]["Disability_Type_Other"] = "";
	$placeHolderscandidates_aggrigated["English"]["Disability_Type_Other"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Institution_Type"] = "Institution Type";
	$fieldToolTipscandidates_aggrigated["English"]["Institution_Type"] = "";
	$placeHolderscandidates_aggrigated["English"]["Institution_Type"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Institution_Name"] = "Institution Name";
	$fieldToolTipscandidates_aggrigated["English"]["Institution_Name"] = "";
	$placeHolderscandidates_aggrigated["English"]["Institution_Name"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Education_Level"] = "Education Level";
	$fieldToolTipscandidates_aggrigated["English"]["Education_Level"] = "";
	$placeHolderscandidates_aggrigated["English"]["Education_Level"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Department"] = "Department";
	$fieldToolTipscandidates_aggrigated["English"]["Department"] = "";
	$placeHolderscandidates_aggrigated["English"]["Department"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Minor"] = "Minor";
	$fieldToolTipscandidates_aggrigated["English"]["Minor"] = "";
	$placeHolderscandidates_aggrigated["English"]["Minor"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Major"] = "Major";
	$fieldToolTipscandidates_aggrigated["English"]["Major"] = "";
	$placeHolderscandidates_aggrigated["English"]["Major"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Enrollement_Type"] = "Enrollement Type";
	$fieldToolTipscandidates_aggrigated["English"]["Enrollement_Type"] = "";
	$placeHolderscandidates_aggrigated["English"]["Enrollement_Type"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Skills"] = "Skills";
	$fieldToolTipscandidates_aggrigated["English"]["Skills"] = "";
	$placeHolderscandidates_aggrigated["English"]["Skills"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Languages"] = "Languages";
	$fieldToolTipscandidates_aggrigated["English"]["Languages"] = "";
	$placeHolderscandidates_aggrigated["English"]["Languages"] = "";
	$fieldLabelscandidates_aggrigated["English"]["English_Proficiency_Level"] = "English Proficiency Level";
	$fieldToolTipscandidates_aggrigated["English"]["English_Proficiency_Level"] = "";
	$placeHolderscandidates_aggrigated["English"]["English_Proficiency_Level"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Industry_Specific_Skills"] = "Industry Specific Skills";
	$fieldToolTipscandidates_aggrigated["English"]["Industry_Specific_Skills"] = "";
	$placeHolderscandidates_aggrigated["English"]["Industry_Specific_Skills"] = "";
	$fieldLabelscandidates_aggrigated["English"]["IT_Related_Skills"] = "IT Related Skills";
	$fieldToolTipscandidates_aggrigated["English"]["IT_Related_Skills"] = "";
	$placeHolderscandidates_aggrigated["English"]["IT_Related_Skills"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Certifications"] = "Certifications";
	$fieldToolTipscandidates_aggrigated["English"]["Certifications"] = "";
	$placeHolderscandidates_aggrigated["English"]["Certifications"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Year_of_graduation"] = "Year Of Graduation";
	$fieldToolTipscandidates_aggrigated["English"]["Year_of_graduation"] = "";
	$placeHolderscandidates_aggrigated["English"]["Year_of_graduation"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Field_Of_Study"] = "Field Of Study";
	$fieldToolTipscandidates_aggrigated["English"]["Field_Of_Study"] = "";
	$placeHolderscandidates_aggrigated["English"]["Field_Of_Study"] = "";
	$fieldLabelscandidates_aggrigated["English"]["GPA"] = "GPA";
	$fieldToolTipscandidates_aggrigated["English"]["GPA"] = "";
	$placeHolderscandidates_aggrigated["English"]["GPA"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Intervention"] = "Intervention";
	$fieldToolTipscandidates_aggrigated["English"]["Intervention"] = "";
	$placeHolderscandidates_aggrigated["English"]["Intervention"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Campaign"] = "Campaign";
	$fieldToolTipscandidates_aggrigated["English"]["Campaign"] = "";
	$placeHolderscandidates_aggrigated["English"]["Campaign"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Attend_Employability_Skill"] = "Attend Employability Skill";
	$fieldToolTipscandidates_aggrigated["English"]["Attend_Employability_Skill"] = "";
	$placeHolderscandidates_aggrigated["English"]["Attend_Employability_Skill"] = "";
	$fieldLabelscandidates_aggrigated["English"]["DAAP_enrolled_1st_Round"] = "DAAP Enrolled 1st Round";
	$fieldToolTipscandidates_aggrigated["English"]["DAAP_enrolled_1st_Round"] = "";
	$placeHolderscandidates_aggrigated["English"]["DAAP_enrolled_1st_Round"] = "";
	$fieldLabelscandidates_aggrigated["English"]["DAAP_Completed"] = "DAAP Completed";
	$fieldToolTipscandidates_aggrigated["English"]["DAAP_Completed"] = "";
	$placeHolderscandidates_aggrigated["English"]["DAAP_Completed"] = "";
	$fieldLabelscandidates_aggrigated["English"]["DAAP_Completed_Courses"] = "DAAP Completed Courses";
	$fieldToolTipscandidates_aggrigated["English"]["DAAP_Completed_Courses"] = "";
	$placeHolderscandidates_aggrigated["English"]["DAAP_Completed_Courses"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Job_Fair_Clinic"] = "Job Fair Clinic";
	$fieldToolTipscandidates_aggrigated["English"]["Job_Fair_Clinic"] = "";
	$placeHolderscandidates_aggrigated["English"]["Job_Fair_Clinic"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Job_Fair"] = "Job Fair";
	$fieldToolTipscandidates_aggrigated["English"]["Job_Fair"] = "";
	$placeHolderscandidates_aggrigated["English"]["Job_Fair"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Exit_Exam_Score"] = "Exit Exam Score";
	$fieldToolTipscandidates_aggrigated["English"]["Exit_Exam_Score"] = "";
	$placeHolderscandidates_aggrigated["English"]["Exit_Exam_Score"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Exit_Exam_Status"] = "Exit Exam Status";
	$fieldToolTipscandidates_aggrigated["English"]["Exit_Exam_Status"] = "";
	$placeHolderscandidates_aggrigated["English"]["Exit_Exam_Status"] = "";
	$fieldLabelscandidates_aggrigated["English"]["DAAP_enrolled_2nd_Round"] = "DAAP Enrolled 2nd Round";
	$fieldToolTipscandidates_aggrigated["English"]["DAAP_enrolled_2nd_Round"] = "";
	$placeHolderscandidates_aggrigated["English"]["DAAP_enrolled_2nd_Round"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Upload_on_Tracker"] = "Upload On Tracker";
	$fieldToolTipscandidates_aggrigated["English"]["Upload_on_Tracker"] = "";
	$placeHolderscandidates_aggrigated["English"]["Upload_on_Tracker"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Work_Experience"] = "Work Experience";
	$fieldToolTipscandidates_aggrigated["English"]["Work_Experience"] = "";
	$placeHolderscandidates_aggrigated["English"]["Work_Experience"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Joined_Dereja_Services"] = "Joined Dereja Services";
	$fieldToolTipscandidates_aggrigated["English"]["Joined_Dereja_Services"] = "";
	$placeHolderscandidates_aggrigated["English"]["Joined_Dereja_Services"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Dereja_Services"] = "Dereja Services";
	$fieldToolTipscandidates_aggrigated["English"]["Dereja_Services"] = "";
	$placeHolderscandidates_aggrigated["English"]["Dereja_Services"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Dereja_Training_Services"] = "Dereja Training Services";
	$fieldToolTipscandidates_aggrigated["English"]["Dereja_Training_Services"] = "";
	$placeHolderscandidates_aggrigated["English"]["Dereja_Training_Services"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Dereja_Event_Services"] = "Dereja Event Services";
	$fieldToolTipscandidates_aggrigated["English"]["Dereja_Event_Services"] = "";
	$placeHolderscandidates_aggrigated["English"]["Dereja_Event_Services"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Dereja_web_profile_completion"] = "Dereja Web Profile Completion";
	$fieldToolTipscandidates_aggrigated["English"]["Dereja_web_profile_completion"] = "";
	$placeHolderscandidates_aggrigated["English"]["Dereja_web_profile_completion"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Dereja_Information_Source"] = "Dereja Information Source";
	$fieldToolTipscandidates_aggrigated["English"]["Dereja_Information_Source"] = "";
	$placeHolderscandidates_aggrigated["English"]["Dereja_Information_Source"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Employment_Status"] = "Employment Status";
	$fieldToolTipscandidates_aggrigated["English"]["Employment_Status"] = "";
	$placeHolderscandidates_aggrigated["English"]["Employment_Status"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Employment_Company"] = "Employment Company";
	$fieldToolTipscandidates_aggrigated["English"]["Employment_Company"] = "";
	$placeHolderscandidates_aggrigated["English"]["Employment_Company"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Employment_Position"] = "Employment Position";
	$fieldToolTipscandidates_aggrigated["English"]["Employment_Position"] = "";
	$placeHolderscandidates_aggrigated["English"]["Employment_Position"] = "";
	$fieldLabelscandidates_aggrigated["English"]["Remark"] = "Remark";
	$fieldToolTipscandidates_aggrigated["English"]["Remark"] = "";
	$placeHolderscandidates_aggrigated["English"]["Remark"] = "";
	if (count($fieldToolTipscandidates_aggrigated["English"]))
		$tdatacandidates_aggrigated[".isUseToolTips"] = true;
}


	$tdatacandidates_aggrigated[".NCSearch"] = true;



$tdatacandidates_aggrigated[".shortTableName"] = "candidates_aggrigated";
$tdatacandidates_aggrigated[".nSecOptions"] = 0;

$tdatacandidates_aggrigated[".mainTableOwnerID"] = "";
$tdatacandidates_aggrigated[".entityType"] = 1;
$tdatacandidates_aggrigated[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidates_aggrigated[".strOriginalTableName"] = "candidates";

	



$tdatacandidates_aggrigated[".showAddInPopup"] = false;

$tdatacandidates_aggrigated[".showEditInPopup"] = false;

$tdatacandidates_aggrigated[".showViewInPopup"] = false;

$tdatacandidates_aggrigated[".listAjax"] = false;
//	temporary
//$tdatacandidates_aggrigated[".listAjax"] = false;

	$tdatacandidates_aggrigated[".audit"] = true;

	$tdatacandidates_aggrigated[".locking"] = false;


$pages = $tdatacandidates_aggrigated[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidates_aggrigated[".edit"] = true;
	$tdatacandidates_aggrigated[".afterEditAction"] = 1;
	$tdatacandidates_aggrigated[".closePopupAfterEdit"] = 1;
	$tdatacandidates_aggrigated[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidates_aggrigated[".add"] = true;
$tdatacandidates_aggrigated[".afterAddAction"] = 1;
$tdatacandidates_aggrigated[".closePopupAfterAdd"] = 1;
$tdatacandidates_aggrigated[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidates_aggrigated[".list"] = true;
}



$tdatacandidates_aggrigated[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidates_aggrigated[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidates_aggrigated[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidates_aggrigated[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidates_aggrigated[".printFriendly"] = true;
}



$tdatacandidates_aggrigated[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidates_aggrigated[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidates_aggrigated[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidates_aggrigated[".isUseAjaxSuggest"] = true;



			

$tdatacandidates_aggrigated[".ajaxCodeSnippetAdded"] = false;

$tdatacandidates_aggrigated[".buttonsAdded"] = false;

$tdatacandidates_aggrigated[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidates_aggrigated[".isUseTimeForSearch"] = false;


$tdatacandidates_aggrigated[".badgeColor"] = "7B68EE";


$tdatacandidates_aggrigated[".allSearchFields"] = array();
$tdatacandidates_aggrigated[".filterFields"] = array();
$tdatacandidates_aggrigated[".requiredSearchFields"] = array();

$tdatacandidates_aggrigated[".googleLikeFields"] = array();
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Age";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Sex";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Disability_Status";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "candidates";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "CandidateID";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "StudentID";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "First_Name";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Middle_Name";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Last_Name";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "DOB";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Region";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "City";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Sub_City";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Zone";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "House_No";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Phone_Number";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Phone_Number_Alternate";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Email_Address";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Disability_Type";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Disability_Type_Other";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Institution_Type";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Institution_Name";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Education_Level";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Department";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Minor";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Major";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Enrollement_Type";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Skills";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Languages";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "English_Proficiency_Level";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Industry_Specific_Skills";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "IT_Related_Skills";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Certifications";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Year_of_graduation";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Field_Of_Study";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "GPA";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Intervention";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Campaign";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Attend_Employability_Skill";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "DAAP_enrolled_1st Round";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "DAAP_Completed";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "DAAP_Completed_Courses";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Job_Fair_Clinic";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Job_Fair";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Exit_Exam_Score";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Exit_Exam_Status";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "DAAP_enrolled_2nd_Round";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Upload_on_Tracker";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Work_Experience";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Joined_Dereja_Services";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Dereja_Services";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Dereja_Training_Services";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Dereja_Event_Services";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Dereja_web_profile_completion";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Dereja_Information_Source";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Employment_Status";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Employment_Company";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Employment_Position";
$tdatacandidates_aggrigated[".googleLikeFields"][] = "Remark";



$tdatacandidates_aggrigated[".tableType"] = "list";

$tdatacandidates_aggrigated[".printerPageOrientation"] = 0;
$tdatacandidates_aggrigated[".nPrinterPageScale"] = 100;

$tdatacandidates_aggrigated[".nPrinterSplitRecords"] = 40;

$tdatacandidates_aggrigated[".geocodingEnabled"] = false;




$tdatacandidates_aggrigated[".isDisplayLoading"] = true;






$tdatacandidates_aggrigated[".pageSize"] = 20;

$tdatacandidates_aggrigated[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Age, Sex, Disability_Status";
$tdatacandidates_aggrigated[".strOrderBy"] = $tstrOrderBy;

$tdatacandidates_aggrigated[".orderindexes"] = array();


$tdatacandidates_aggrigated[".sqlHead"] = "SELECT TIMESTAMPDIFF(YEAR, DOB, CURDATE()) AS Age,  Sex,  Disability_Status,  COUNT(*) AS candidates,  CandidateID,  StudentID,  First_Name,  Middle_Name,  Last_Name,  DOB,  Region,  City,  Sub_City,  `Zone`,  House_No,  Phone_Number,  Phone_Number_Alternate,  Email_Address,  Disability_Type,  Disability_Type_Other,  Institution_Type,  Institution_Name,  Education_Level,  Department,  Minor,  Major,  Enrollement_Type,  Skills,  Languages,  English_Proficiency_Level,  Industry_Specific_Skills,  IT_Related_Skills,  Certifications,  Year_of_graduation,  Field_Of_Study,  GPA,  Intervention,  Campaign,  Attend_Employability_Skill,  `DAAP_enrolled_1st Round`,  DAAP_Completed,  DAAP_Completed_Courses,  Job_Fair_Clinic,  Job_Fair,  Exit_Exam_Score,  Exit_Exam_Status,  DAAP_enrolled_2nd_Round,  Upload_on_Tracker,  Work_Experience,  Joined_Dereja_Services,  Dereja_Services,  Dereja_Training_Services,  Dereja_Event_Services,  Dereja_web_profile_completion,  Dereja_Information_Source,  Employment_Status,  Employment_Company,  Employment_Position,  Remark";
$tdatacandidates_aggrigated[".sqlFrom"] = "FROM candidates";
$tdatacandidates_aggrigated[".sqlWhereExpr"] = "";
$tdatacandidates_aggrigated[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidates_aggrigated[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidates_aggrigated[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidates_aggrigated[".highlightSearchResults"] = true;

$tableKeyscandidates_aggrigated = array();
$tdatacandidates_aggrigated[".Keys"] = $tableKeyscandidates_aggrigated;


$tdatacandidates_aggrigated[".hideMobileList"] = array();




//	Age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Age";
	$fdata["GoodName"] = "Age";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Age");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Age";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMESTAMPDIFF(YEAR, DOB, CURDATE())";

	
	
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


	$tdatacandidates_aggrigated["Age"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Age";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

		$fdata["sourceSingle"] = "Sex";

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


	$tdatacandidates_aggrigated["Sex"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Sex";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Disability_Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Disability_Status";

		$fdata["sourceSingle"] = "Disability_Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Status";

	
	
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


	$tdatacandidates_aggrigated["Disability_Status"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Disability_Status";
//	candidates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "candidates";
	$fdata["GoodName"] = "candidates";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","candidates");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "candidates";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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


	$tdatacandidates_aggrigated["candidates"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "candidates";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","CandidateID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CandidateID";

		$fdata["sourceSingle"] = "CandidateID";

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


	$tdatacandidates_aggrigated["CandidateID"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","StudentID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "StudentID";

		$fdata["sourceSingle"] = "StudentID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StudentID";

	
	
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


	$tdatacandidates_aggrigated["StudentID"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "StudentID";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","First_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "First_Name";

		$fdata["sourceSingle"] = "First_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "First_Name";

	
	
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


	$tdatacandidates_aggrigated["First_Name"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Middle_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Middle_Name";

		$fdata["sourceSingle"] = "Middle_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Middle_Name";

	
	
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


	$tdatacandidates_aggrigated["Middle_Name"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Last_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Last_Name";

		$fdata["sourceSingle"] = "Last_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Last_Name";

	
	
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


	$tdatacandidates_aggrigated["Last_Name"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Last_Name";
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","DOB");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "DOB";

		$fdata["sourceSingle"] = "DOB";

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


	$tdatacandidates_aggrigated["DOB"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Region");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Region";

		$fdata["sourceSingle"] = "Region";

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


	$tdatacandidates_aggrigated["Region"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "City";

		$fdata["sourceSingle"] = "City";

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


	$tdatacandidates_aggrigated["City"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "City";
//	Sub_City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Sub_City";
	$fdata["GoodName"] = "Sub_City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Sub_City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sub_City";

		$fdata["sourceSingle"] = "Sub_City";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sub_City";

	
	
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


	$tdatacandidates_aggrigated["Sub_City"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Sub_City";
//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Zone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Zone";

		$fdata["sourceSingle"] = "Zone";

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


	$tdatacandidates_aggrigated["Zone"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Zone";
//	House_No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "House_No";
	$fdata["GoodName"] = "House_No";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","House_No");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "House_No";

		$fdata["sourceSingle"] = "House_No";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "House_No";

	
	
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


	$tdatacandidates_aggrigated["House_No"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "House_No";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Phone_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone_Number";

		$fdata["sourceSingle"] = "Phone_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone_Number";

	
	
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


	$tdatacandidates_aggrigated["Phone_Number"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Phone_Number";
//	Phone_Number_Alternate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Phone_Number_Alternate";
	$fdata["GoodName"] = "Phone_Number_Alternate";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Phone_Number_Alternate");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone_Number_Alternate";

		$fdata["sourceSingle"] = "Phone_Number_Alternate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone_Number_Alternate";

	
	
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


	$tdatacandidates_aggrigated["Phone_Number_Alternate"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Phone_Number_Alternate";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Email_Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email_Address";

		$fdata["sourceSingle"] = "Email_Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email_Address";

	
	
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


	$tdatacandidates_aggrigated["Email_Address"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Email_Address";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Disability_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Disability_Type";

		$fdata["sourceSingle"] = "Disability_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type";

	
	
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


	$tdatacandidates_aggrigated["Disability_Type"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Disability_Type_Other");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Disability_Type_Other";

		$fdata["sourceSingle"] = "Disability_Type_Other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Disability_Type_Other";

	
	
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


	$tdatacandidates_aggrigated["Disability_Type_Other"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Disability_Type_Other";
//	Institution_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Institution_Type";
	$fdata["GoodName"] = "Institution_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Institution_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Institution_Type";

		$fdata["sourceSingle"] = "Institution_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Institution_Type";

	
	
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


	$tdatacandidates_aggrigated["Institution_Type"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Institution_Type";
//	Institution_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Institution_Name";
	$fdata["GoodName"] = "Institution_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Institution_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Institution_Name";

		$fdata["sourceSingle"] = "Institution_Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Institution_Name";

	
	
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


	$tdatacandidates_aggrigated["Institution_Name"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Institution_Name";
//	Education_Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Education_Level";
	$fdata["GoodName"] = "Education_Level";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Education_Level");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Education_Level";

		$fdata["sourceSingle"] = "Education_Level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Education_Level";

	
	
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


	$tdatacandidates_aggrigated["Education_Level"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Education_Level";
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Department");
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


	$tdatacandidates_aggrigated["Department"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Department";
//	Minor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Minor";
	$fdata["GoodName"] = "Minor";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Minor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Minor";

		$fdata["sourceSingle"] = "Minor";

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


	$tdatacandidates_aggrigated["Minor"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Minor";
//	Major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Major";
	$fdata["GoodName"] = "Major";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Major");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Major";

		$fdata["sourceSingle"] = "Major";

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


	$tdatacandidates_aggrigated["Major"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Major";
//	Enrollement_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Enrollement_Type";
	$fdata["GoodName"] = "Enrollement_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Enrollement_Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Enrollement_Type";

		$fdata["sourceSingle"] = "Enrollement_Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Enrollement_Type";

	
	
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


	$tdatacandidates_aggrigated["Enrollement_Type"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Enrollement_Type";
//	Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Skills";
	$fdata["GoodName"] = "Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Skills");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Skills";

		$fdata["sourceSingle"] = "Skills";

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


	$tdatacandidates_aggrigated["Skills"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Skills";
//	Languages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Languages";
	$fdata["GoodName"] = "Languages";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Languages");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Languages";

		$fdata["sourceSingle"] = "Languages";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Languages";

	
	
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


	$tdatacandidates_aggrigated["Languages"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Languages";
//	English_Proficiency_Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "English_Proficiency_Level";
	$fdata["GoodName"] = "English_Proficiency_Level";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","English_Proficiency_Level");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "English_Proficiency_Level";

		$fdata["sourceSingle"] = "English_Proficiency_Level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "English_Proficiency_Level";

	
	
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


	$tdatacandidates_aggrigated["English_Proficiency_Level"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "English_Proficiency_Level";
//	Industry_Specific_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Industry_Specific_Skills";
	$fdata["GoodName"] = "Industry_Specific_Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Industry_Specific_Skills");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Industry_Specific_Skills";

		$fdata["sourceSingle"] = "Industry_Specific_Skills";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Industry_Specific_Skills";

	
	
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


	$tdatacandidates_aggrigated["Industry_Specific_Skills"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Industry_Specific_Skills";
//	IT_Related_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "IT_Related_Skills";
	$fdata["GoodName"] = "IT_Related_Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","IT_Related_Skills");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IT_Related_Skills";

		$fdata["sourceSingle"] = "IT_Related_Skills";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IT_Related_Skills";

	
	
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


	$tdatacandidates_aggrigated["IT_Related_Skills"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "IT_Related_Skills";
//	Certifications
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Certifications";
	$fdata["GoodName"] = "Certifications";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Certifications");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Certifications";

		$fdata["sourceSingle"] = "Certifications";

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


	$tdatacandidates_aggrigated["Certifications"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Certifications";
//	Year_of_graduation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Year_of_graduation";
	$fdata["GoodName"] = "Year_of_graduation";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Year_of_graduation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Year_of_graduation";

		$fdata["sourceSingle"] = "Year_of_graduation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Year_of_graduation";

	
	
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


	$tdatacandidates_aggrigated["Year_of_graduation"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Year_of_graduation";
//	Field_Of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Field_Of_Study";
	$fdata["GoodName"] = "Field_Of_Study";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Field_Of_Study");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Field_Of_Study";

		$fdata["sourceSingle"] = "Field_Of_Study";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Field_Of_Study";

	
	
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


	$tdatacandidates_aggrigated["Field_Of_Study"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Field_Of_Study";
//	GPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "GPA";
	$fdata["GoodName"] = "GPA";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","GPA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "GPA";

		$fdata["sourceSingle"] = "GPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacandidates_aggrigated["GPA"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "GPA";
//	Intervention
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Intervention";
	$fdata["GoodName"] = "Intervention";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Intervention");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Intervention";

		$fdata["sourceSingle"] = "Intervention";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Intervention";

	
	
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


	$tdatacandidates_aggrigated["Intervention"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Intervention";
//	Campaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Campaign";
	$fdata["GoodName"] = "Campaign";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Campaign");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Campaign";

		$fdata["sourceSingle"] = "Campaign";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Campaign";

	
	
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


	$tdatacandidates_aggrigated["Campaign"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Campaign";
//	Attend_Employability_Skill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Attend_Employability_Skill";
	$fdata["GoodName"] = "Attend_Employability_Skill";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Attend_Employability_Skill");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Attend_Employability_Skill";

		$fdata["sourceSingle"] = "Attend_Employability_Skill";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Attend_Employability_Skill";

	
	
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


	$tdatacandidates_aggrigated["Attend_Employability_Skill"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Attend_Employability_Skill";
//	DAAP_enrolled_1st Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "DAAP_enrolled_1st Round";
	$fdata["GoodName"] = "DAAP_enrolled_1st_Round";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","DAAP_enrolled_1st_Round");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DAAP_enrolled_1st Round";

		$fdata["sourceSingle"] = "DAAP_enrolled_1st Round";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DAAP_enrolled_1st Round`";

	
	
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


	$tdatacandidates_aggrigated["DAAP_enrolled_1st Round"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "DAAP_enrolled_1st Round";
//	DAAP_Completed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DAAP_Completed";
	$fdata["GoodName"] = "DAAP_Completed";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","DAAP_Completed");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DAAP_Completed";

		$fdata["sourceSingle"] = "DAAP_Completed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAAP_Completed";

	
	
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


	$tdatacandidates_aggrigated["DAAP_Completed"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "DAAP_Completed";
//	DAAP_Completed_Courses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "DAAP_Completed_Courses";
	$fdata["GoodName"] = "DAAP_Completed_Courses";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","DAAP_Completed_Courses");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DAAP_Completed_Courses";

		$fdata["sourceSingle"] = "DAAP_Completed_Courses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAAP_Completed_Courses";

	
	
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


	$tdatacandidates_aggrigated["DAAP_Completed_Courses"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "DAAP_Completed_Courses";
//	Job_Fair_Clinic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Job_Fair_Clinic";
	$fdata["GoodName"] = "Job_Fair_Clinic";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Job_Fair_Clinic");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Job_Fair_Clinic";

		$fdata["sourceSingle"] = "Job_Fair_Clinic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Job_Fair_Clinic";

	
	
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


	$tdatacandidates_aggrigated["Job_Fair_Clinic"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Job_Fair_Clinic";
//	Job_Fair
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Job_Fair";
	$fdata["GoodName"] = "Job_Fair";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Job_Fair");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Job_Fair";

		$fdata["sourceSingle"] = "Job_Fair";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Job_Fair";

	
	
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


	$tdatacandidates_aggrigated["Job_Fair"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Job_Fair";
//	Exit_Exam_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Exit_Exam_Score";
	$fdata["GoodName"] = "Exit_Exam_Score";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Exit_Exam_Score");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Exit_Exam_Score";

		$fdata["sourceSingle"] = "Exit_Exam_Score";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Exit_Exam_Score";

	
	
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


	$tdatacandidates_aggrigated["Exit_Exam_Score"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Exit_Exam_Score";
//	Exit_Exam_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Exit_Exam_Status";
	$fdata["GoodName"] = "Exit_Exam_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Exit_Exam_Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Exit_Exam_Status";

		$fdata["sourceSingle"] = "Exit_Exam_Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Exit_Exam_Status";

	
	
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


	$tdatacandidates_aggrigated["Exit_Exam_Status"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Exit_Exam_Status";
//	DAAP_enrolled_2nd_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DAAP_enrolled_2nd_Round";
	$fdata["GoodName"] = "DAAP_enrolled_2nd_Round";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","DAAP_enrolled_2nd_Round");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DAAP_enrolled_2nd_Round";

		$fdata["sourceSingle"] = "DAAP_enrolled_2nd_Round";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAAP_enrolled_2nd_Round";

	
	
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


	$tdatacandidates_aggrigated["DAAP_enrolled_2nd_Round"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "DAAP_enrolled_2nd_Round";
//	Upload_on_Tracker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Upload_on_Tracker";
	$fdata["GoodName"] = "Upload_on_Tracker";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Upload_on_Tracker");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Upload_on_Tracker";

		$fdata["sourceSingle"] = "Upload_on_Tracker";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Upload_on_Tracker";

	
	
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


	$tdatacandidates_aggrigated["Upload_on_Tracker"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Upload_on_Tracker";
//	Work_Experience
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Work_Experience";
	$fdata["GoodName"] = "Work_Experience";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Work_Experience");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Work_Experience";

		$fdata["sourceSingle"] = "Work_Experience";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Work_Experience";

	
	
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


	$tdatacandidates_aggrigated["Work_Experience"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Work_Experience";
//	Joined_Dereja_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Joined_Dereja_Services";
	$fdata["GoodName"] = "Joined_Dereja_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Joined_Dereja_Services");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Joined_Dereja_Services";

		$fdata["sourceSingle"] = "Joined_Dereja_Services";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Joined_Dereja_Services";

	
	
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


	$tdatacandidates_aggrigated["Joined_Dereja_Services"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Joined_Dereja_Services";
//	Dereja_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Dereja_Services";
	$fdata["GoodName"] = "Dereja_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Dereja_Services");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dereja_Services";

		$fdata["sourceSingle"] = "Dereja_Services";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dereja_Services";

	
	
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


	$tdatacandidates_aggrigated["Dereja_Services"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Dereja_Services";
//	Dereja_Training_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Dereja_Training_Services";
	$fdata["GoodName"] = "Dereja_Training_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Dereja_Training_Services");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dereja_Training_Services";

		$fdata["sourceSingle"] = "Dereja_Training_Services";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dereja_Training_Services";

	
	
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


	$tdatacandidates_aggrigated["Dereja_Training_Services"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Dereja_Training_Services";
//	Dereja_Event_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Dereja_Event_Services";
	$fdata["GoodName"] = "Dereja_Event_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Dereja_Event_Services");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dereja_Event_Services";

		$fdata["sourceSingle"] = "Dereja_Event_Services";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dereja_Event_Services";

	
	
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


	$tdatacandidates_aggrigated["Dereja_Event_Services"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Dereja_Event_Services";
//	Dereja_web_profile_completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Dereja_web_profile_completion";
	$fdata["GoodName"] = "Dereja_web_profile_completion";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Dereja_web_profile_completion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Dereja_web_profile_completion";

		$fdata["sourceSingle"] = "Dereja_web_profile_completion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dereja_web_profile_completion";

	
	
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


	$tdatacandidates_aggrigated["Dereja_web_profile_completion"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Dereja_web_profile_completion";
//	Dereja_Information_Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Dereja_Information_Source";
	$fdata["GoodName"] = "Dereja_Information_Source";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Dereja_Information_Source");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dereja_Information_Source";

		$fdata["sourceSingle"] = "Dereja_Information_Source";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dereja_Information_Source";

	
	
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


	$tdatacandidates_aggrigated["Dereja_Information_Source"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Dereja_Information_Source";
//	Employment_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Employment_Status";
	$fdata["GoodName"] = "Employment_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Employment_Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Employment_Status";

		$fdata["sourceSingle"] = "Employment_Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employment_Status";

	
	
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


	$tdatacandidates_aggrigated["Employment_Status"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Employment_Status";
//	Employment_Company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Employment_Company";
	$fdata["GoodName"] = "Employment_Company";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Employment_Company");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Employment_Company";

		$fdata["sourceSingle"] = "Employment_Company";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employment_Company";

	
	
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


	$tdatacandidates_aggrigated["Employment_Company"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Employment_Company";
//	Employment_Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Employment_Position";
	$fdata["GoodName"] = "Employment_Position";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Employment_Position");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Employment_Position";

		$fdata["sourceSingle"] = "Employment_Position";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Employment_Position";

	
	
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


	$tdatacandidates_aggrigated["Employment_Position"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Employment_Position";
//	Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Remark";
	$fdata["GoodName"] = "Remark";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_aggrigated","Remark");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Remark";

		$fdata["sourceSingle"] = "Remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remark";

	
	
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


	$tdatacandidates_aggrigated["Remark"] = $fdata;
		$tdatacandidates_aggrigated[".searchableFields"][] = "Remark";


$tables_data["candidates_aggrigated"]=&$tdatacandidates_aggrigated;
$field_labels["candidates_aggrigated"] = &$fieldLabelscandidates_aggrigated;
$fieldToolTips["candidates_aggrigated"] = &$fieldToolTipscandidates_aggrigated;
$placeHolders["candidates_aggrigated"] = &$placeHolderscandidates_aggrigated;
$page_titles["candidates_aggrigated"] = &$pageTitlescandidates_aggrigated;


changeTextControlsToDate( "candidates_aggrigated" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidates_aggrigated"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidates_aggrigated"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidates_aggrigated()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIMESTAMPDIFF(YEAR, DOB, CURDATE()) AS Age,  Sex,  Disability_Status,  COUNT(*) AS candidates,  CandidateID,  StudentID,  First_Name,  Middle_Name,  Last_Name,  DOB,  Region,  City,  Sub_City,  `Zone`,  House_No,  Phone_Number,  Phone_Number_Alternate,  Email_Address,  Disability_Type,  Disability_Type_Other,  Institution_Type,  Institution_Name,  Education_Level,  Department,  Minor,  Major,  Enrollement_Type,  Skills,  Languages,  English_Proficiency_Level,  Industry_Specific_Skills,  IT_Related_Skills,  Certifications,  Year_of_graduation,  Field_Of_Study,  GPA,  Intervention,  Campaign,  Attend_Employability_Skill,  `DAAP_enrolled_1st Round`,  DAAP_Completed,  DAAP_Completed_Courses,  Job_Fair_Clinic,  Job_Fair,  Exit_Exam_Score,  Exit_Exam_Status,  DAAP_enrolled_2nd_Round,  Upload_on_Tracker,  Work_Experience,  Joined_Dereja_Services,  Dereja_Services,  Dereja_Training_Services,  Dereja_Event_Services,  Dereja_web_profile_completion,  Dereja_Information_Source,  Employment_Status,  Employment_Company,  Employment_Position,  Remark";
$proto0["m_strFrom"] = "FROM candidates";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Age, Sex, Disability_Status";
	
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "YEAR"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DOB"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CURDATE()"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "TIMESTAMPDIFF";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "TIMESTAMPDIFF(YEAR, DOB, CURDATE())";
$proto6["m_srcTableName"] = "candidates_aggrigated";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Age";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto11["m_sql"] = "Sex";
$proto11["m_srcTableName"] = "candidates_aggrigated";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto13["m_sql"] = "Disability_Status";
$proto13["m_srcTableName"] = "candidates_aggrigated";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_COUNT";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "COUNT(*)";
$proto15["m_srcTableName"] = "candidates_aggrigated";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "candidates";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto18["m_sql"] = "CandidateID";
$proto18["m_srcTableName"] = "candidates_aggrigated";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto20["m_sql"] = "StudentID";
$proto20["m_srcTableName"] = "candidates_aggrigated";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto22["m_sql"] = "First_Name";
$proto22["m_srcTableName"] = "candidates_aggrigated";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto24["m_sql"] = "Middle_Name";
$proto24["m_srcTableName"] = "candidates_aggrigated";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto26["m_sql"] = "Last_Name";
$proto26["m_srcTableName"] = "candidates_aggrigated";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto28["m_sql"] = "DOB";
$proto28["m_srcTableName"] = "candidates_aggrigated";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto30["m_sql"] = "Region";
$proto30["m_srcTableName"] = "candidates_aggrigated";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto32["m_sql"] = "City";
$proto32["m_srcTableName"] = "candidates_aggrigated";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Sub_City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto34["m_sql"] = "Sub_City";
$proto34["m_srcTableName"] = "candidates_aggrigated";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto36["m_sql"] = "`Zone`";
$proto36["m_srcTableName"] = "candidates_aggrigated";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "House_No",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto38["m_sql"] = "House_No";
$proto38["m_srcTableName"] = "candidates_aggrigated";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto40["m_sql"] = "Phone_Number";
$proto40["m_srcTableName"] = "candidates_aggrigated";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number_Alternate",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto42["m_sql"] = "Phone_Number_Alternate";
$proto42["m_srcTableName"] = "candidates_aggrigated";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto44["m_sql"] = "Email_Address";
$proto44["m_srcTableName"] = "candidates_aggrigated";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto46["m_sql"] = "Disability_Type";
$proto46["m_srcTableName"] = "candidates_aggrigated";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto48["m_sql"] = "Disability_Type_Other";
$proto48["m_srcTableName"] = "candidates_aggrigated";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto50["m_sql"] = "Institution_Type";
$proto50["m_srcTableName"] = "candidates_aggrigated";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto52["m_sql"] = "Institution_Name";
$proto52["m_srcTableName"] = "candidates_aggrigated";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Education_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto54["m_sql"] = "Education_Level";
$proto54["m_srcTableName"] = "candidates_aggrigated";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto56["m_sql"] = "Department";
$proto56["m_srcTableName"] = "candidates_aggrigated";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Minor",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto58["m_sql"] = "Minor";
$proto58["m_srcTableName"] = "candidates_aggrigated";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto60["m_sql"] = "Major";
$proto60["m_srcTableName"] = "candidates_aggrigated";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Enrollement_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto62["m_sql"] = "Enrollement_Type";
$proto62["m_srcTableName"] = "candidates_aggrigated";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto64["m_sql"] = "Skills";
$proto64["m_srcTableName"] = "candidates_aggrigated";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Languages",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto66["m_sql"] = "Languages";
$proto66["m_srcTableName"] = "candidates_aggrigated";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "English_Proficiency_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto68["m_sql"] = "English_Proficiency_Level";
$proto68["m_srcTableName"] = "candidates_aggrigated";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Industry_Specific_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto70["m_sql"] = "Industry_Specific_Skills";
$proto70["m_srcTableName"] = "candidates_aggrigated";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "IT_Related_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto72["m_sql"] = "IT_Related_Skills";
$proto72["m_srcTableName"] = "candidates_aggrigated";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Certifications",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto74["m_sql"] = "Certifications";
$proto74["m_srcTableName"] = "candidates_aggrigated";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Year_of_graduation",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto76["m_sql"] = "Year_of_graduation";
$proto76["m_srcTableName"] = "candidates_aggrigated";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Field_Of_Study",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto78["m_sql"] = "Field_Of_Study";
$proto78["m_srcTableName"] = "candidates_aggrigated";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "GPA",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto80["m_sql"] = "GPA";
$proto80["m_srcTableName"] = "candidates_aggrigated";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Intervention",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto82["m_sql"] = "Intervention";
$proto82["m_srcTableName"] = "candidates_aggrigated";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Campaign",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto84["m_sql"] = "Campaign";
$proto84["m_srcTableName"] = "candidates_aggrigated";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Attend_Employability_Skill",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto86["m_sql"] = "Attend_Employability_Skill";
$proto86["m_srcTableName"] = "candidates_aggrigated";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_1st Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto88["m_sql"] = "`DAAP_enrolled_1st Round`";
$proto88["m_srcTableName"] = "candidates_aggrigated";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto90["m_sql"] = "DAAP_Completed";
$proto90["m_srcTableName"] = "candidates_aggrigated";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed_Courses",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto92["m_sql"] = "DAAP_Completed_Courses";
$proto92["m_srcTableName"] = "candidates_aggrigated";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Fair_Clinic",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto94["m_sql"] = "Job_Fair_Clinic";
$proto94["m_srcTableName"] = "candidates_aggrigated";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Fair",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto96["m_sql"] = "Job_Fair";
$proto96["m_srcTableName"] = "candidates_aggrigated";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Score",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto98["m_sql"] = "Exit_Exam_Score";
$proto98["m_srcTableName"] = "candidates_aggrigated";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto100["m_sql"] = "Exit_Exam_Status";
$proto100["m_srcTableName"] = "candidates_aggrigated";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_2nd_Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto102["m_sql"] = "DAAP_enrolled_2nd_Round";
$proto102["m_srcTableName"] = "candidates_aggrigated";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Upload_on_Tracker",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto104["m_sql"] = "Upload_on_Tracker";
$proto104["m_srcTableName"] = "candidates_aggrigated";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Work_Experience",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto106["m_sql"] = "Work_Experience";
$proto106["m_srcTableName"] = "candidates_aggrigated";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Joined_Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto108["m_sql"] = "Joined_Dereja_Services";
$proto108["m_srcTableName"] = "candidates_aggrigated";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto110["m_sql"] = "Dereja_Services";
$proto110["m_srcTableName"] = "candidates_aggrigated";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Training_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto112["m_sql"] = "Dereja_Training_Services";
$proto112["m_srcTableName"] = "candidates_aggrigated";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Event_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto114["m_sql"] = "Dereja_Event_Services";
$proto114["m_srcTableName"] = "candidates_aggrigated";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_web_profile_completion",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto116["m_sql"] = "Dereja_web_profile_completion";
$proto116["m_srcTableName"] = "candidates_aggrigated";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Information_Source",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto118["m_sql"] = "Dereja_Information_Source";
$proto118["m_srcTableName"] = "candidates_aggrigated";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto120["m_sql"] = "Employment_Status";
$proto120["m_srcTableName"] = "candidates_aggrigated";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Company",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto122["m_sql"] = "Employment_Company";
$proto122["m_srcTableName"] = "candidates_aggrigated";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Position",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto124["m_sql"] = "Employment_Position";
$proto124["m_srcTableName"] = "candidates_aggrigated";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Remark",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto126["m_sql"] = "Remark";
$proto126["m_srcTableName"] = "candidates_aggrigated";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto128=array();
$proto128["m_link"] = "SQLL_MAIN";
			$proto129=array();
$proto129["m_strName"] = "candidates";
$proto129["m_srcTableName"] = "candidates_aggrigated";
$proto129["m_columns"] = array();
$proto129["m_columns"][] = "CandidateID";
$proto129["m_columns"][] = "StudentID";
$proto129["m_columns"][] = "First_Name";
$proto129["m_columns"][] = "Middle_Name";
$proto129["m_columns"][] = "Last_Name";
$proto129["m_columns"][] = "Sex";
$proto129["m_columns"][] = "DOB";
$proto129["m_columns"][] = "Region";
$proto129["m_columns"][] = "City";
$proto129["m_columns"][] = "Sub_City";
$proto129["m_columns"][] = "Zone";
$proto129["m_columns"][] = "Woreda";
$proto129["m_columns"][] = "Kebele";
$proto129["m_columns"][] = "House_No";
$proto129["m_columns"][] = "Phone_Number";
$proto129["m_columns"][] = "Phone_Number_Alternate";
$proto129["m_columns"][] = "Email_Address";
$proto129["m_columns"][] = "Disability_Status";
$proto129["m_columns"][] = "Disability_Type";
$proto129["m_columns"][] = "Disability_Type_Other";
$proto129["m_columns"][] = "Institution_Type";
$proto129["m_columns"][] = "Institution_Name";
$proto129["m_columns"][] = "Education_Level";
$proto129["m_columns"][] = "Department";
$proto129["m_columns"][] = "Minor";
$proto129["m_columns"][] = "Major";
$proto129["m_columns"][] = "Enrollement_Type";
$proto129["m_columns"][] = "Skills";
$proto129["m_columns"][] = "Languages";
$proto129["m_columns"][] = "English_Proficiency_Level";
$proto129["m_columns"][] = "Industry_Specific_Skills";
$proto129["m_columns"][] = "IT_Related_Skills";
$proto129["m_columns"][] = "Certifications";
$proto129["m_columns"][] = "Year_of_graduation";
$proto129["m_columns"][] = "Field_Of_Study";
$proto129["m_columns"][] = "GPA";
$proto129["m_columns"][] = "Intervention";
$proto129["m_columns"][] = "Campaign";
$proto129["m_columns"][] = "Attend_Employability_Skill";
$proto129["m_columns"][] = "DAAP_enrolled_1st Round";
$proto129["m_columns"][] = "DAAP_Completed";
$proto129["m_columns"][] = "DAAP_Completed_Courses";
$proto129["m_columns"][] = "Job_Fair_Clinic";
$proto129["m_columns"][] = "Job_Fair";
$proto129["m_columns"][] = "Exit_Exam_Score";
$proto129["m_columns"][] = "Exit_Exam_Status";
$proto129["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto129["m_columns"][] = "Upload_on_Tracker";
$proto129["m_columns"][] = "Upload_on_Website";
$proto129["m_columns"][] = "Work_Experience";
$proto129["m_columns"][] = "Joined_Dereja_Services";
$proto129["m_columns"][] = "Dereja_Services";
$proto129["m_columns"][] = "Program_In_Dereja";
$proto129["m_columns"][] = "Dereja_Training_Services";
$proto129["m_columns"][] = "Training_Start_Date";
$proto129["m_columns"][] = "Training_End_Date";
$proto129["m_columns"][] = "Dereja_Event_Services";
$proto129["m_columns"][] = "Event_Start_Date";
$proto129["m_columns"][] = "Event_End_Date";
$proto129["m_columns"][] = "Event_Participant_Type";
$proto129["m_columns"][] = "Dereja_web_profile_completion";
$proto129["m_columns"][] = "Dereja_Information_Source";
$proto129["m_columns"][] = "Employment_Status";
$proto129["m_columns"][] = "Employment_Company";
$proto129["m_columns"][] = "Employer_Sector";
$proto129["m_columns"][] = "Employment_Position";
$proto129["m_columns"][] = "Salary";
$proto129["m_columns"][] = "Career_Level_Of_Payment";
$proto129["m_columns"][] = "Placement_Type";
$proto129["m_columns"][] = "Placement_Duration";
$proto129["m_columns"][] = "Remark";
$proto129["m_columns"][] = "candidate_data";
$proto129["m_columns"][] = "Date";
$obj = new SQLTable($proto129);

$proto128["m_table"] = $obj;
$proto128["m_sql"] = "candidates";
$proto128["m_alias"] = "";
$proto128["m_srcTableName"] = "candidates_aggrigated";
$proto130=array();
$proto130["m_sql"] = "";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

$proto128["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto128);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto132=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto132["m_column"]=$obj;
$obj = new SQLGroupByItem($proto132);

$proto0["m_groupby"][]=$obj;
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto134["m_column"]=$obj;
$obj = new SQLGroupByItem($proto134);

$proto0["m_groupby"][]=$obj;
												$proto136=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Age"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto138=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Age"
));

$proto138["m_column"]=$obj;
$proto138["m_bAsc"] = 1;
$proto138["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto138);

$proto0["m_orderby"][]=$obj;					
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto140["m_column"]=$obj;
$proto140["m_bAsc"] = 1;
$proto140["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto140);

$proto0["m_orderby"][]=$obj;					
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_aggrigated"
));

$proto142["m_column"]=$obj;
$proto142["m_bAsc"] = 1;
$proto142["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto142);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="candidates_aggrigated";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidates_aggrigated = createSqlQuery_candidates_aggrigated();


	
																								;

																																																											

$tdatacandidates_aggrigated[".sqlquery"] = $queryData_candidates_aggrigated;



$tdatacandidates_aggrigated[".hasEvents"] = false;

?>