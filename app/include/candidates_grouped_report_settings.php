<?php
$tdatacandidates_grouped_report = array();
$tdatacandidates_grouped_report[".searchableFields"] = array();
$tdatacandidates_grouped_report[".ShortName"] = "candidates_grouped_report";
$tdatacandidates_grouped_report[".OwnerID"] = "";
$tdatacandidates_grouped_report[".OriginalTable"] = "candidates";


$tdatacandidates_grouped_report[".pagesByType"] = my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacandidates_grouped_report[".originalPagesByType"] = $tdatacandidates_grouped_report[".pagesByType"];
$tdatacandidates_grouped_report[".pages"] = types2pages( my_json_decode( "{\"masterreport\":[\"masterreport\"],\"masterrprint\":[\"masterrprint\"],\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacandidates_grouped_report[".originalPages"] = $tdatacandidates_grouped_report[".pages"];
$tdatacandidates_grouped_report[".defaultPages"] = my_json_decode( "{\"masterreport\":\"masterreport\",\"masterrprint\":\"masterrprint\",\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacandidates_grouped_report[".originalDefaultPages"] = $tdatacandidates_grouped_report[".defaultPages"];

//	field labels
$fieldLabelscandidates_grouped_report = array();
$fieldToolTipscandidates_grouped_report = array();
$pageTitlescandidates_grouped_report = array();
$placeHolderscandidates_grouped_report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidates_grouped_report["English"] = array();
	$fieldToolTipscandidates_grouped_report["English"] = array();
	$placeHolderscandidates_grouped_report["English"] = array();
	$pageTitlescandidates_grouped_report["English"] = array();
	$fieldLabelscandidates_grouped_report["English"]["First_Name"] = "First Name";
	$fieldToolTipscandidates_grouped_report["English"]["First_Name"] = "";
	$placeHolderscandidates_grouped_report["English"]["First_Name"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipscandidates_grouped_report["English"]["Middle_Name"] = "";
	$placeHolderscandidates_grouped_report["English"]["Middle_Name"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Last_Name"] = "Last Name";
	$fieldToolTipscandidates_grouped_report["English"]["Last_Name"] = "";
	$placeHolderscandidates_grouped_report["English"]["Last_Name"] = "";
	$fieldLabelscandidates_grouped_report["English"]["DOB"] = "DOB";
	$fieldToolTipscandidates_grouped_report["English"]["DOB"] = "";
	$placeHolderscandidates_grouped_report["English"]["DOB"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Region"] = "Region";
	$fieldToolTipscandidates_grouped_report["English"]["Region"] = "";
	$placeHolderscandidates_grouped_report["English"]["Region"] = "";
	$fieldLabelscandidates_grouped_report["English"]["City"] = "City";
	$fieldToolTipscandidates_grouped_report["English"]["City"] = "";
	$placeHolderscandidates_grouped_report["English"]["City"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Sub_City"] = "Sub City";
	$fieldToolTipscandidates_grouped_report["English"]["Sub_City"] = "";
	$placeHolderscandidates_grouped_report["English"]["Sub_City"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Zone"] = "Zone";
	$fieldToolTipscandidates_grouped_report["English"]["Zone"] = "";
	$placeHolderscandidates_grouped_report["English"]["Zone"] = "";
	$fieldLabelscandidates_grouped_report["English"]["House_No"] = "House No";
	$fieldToolTipscandidates_grouped_report["English"]["House_No"] = "";
	$placeHolderscandidates_grouped_report["English"]["House_No"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipscandidates_grouped_report["English"]["Phone_Number"] = "";
	$placeHolderscandidates_grouped_report["English"]["Phone_Number"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Phone_Number_Alternate"] = "Phone Number Alternate";
	$fieldToolTipscandidates_grouped_report["English"]["Phone_Number_Alternate"] = "";
	$placeHolderscandidates_grouped_report["English"]["Phone_Number_Alternate"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Email_Address"] = "Email Address";
	$fieldToolTipscandidates_grouped_report["English"]["Email_Address"] = "";
	$placeHolderscandidates_grouped_report["English"]["Email_Address"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipscandidates_grouped_report["English"]["Disability_Type"] = "";
	$placeHolderscandidates_grouped_report["English"]["Disability_Type"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipscandidates_grouped_report["English"]["Disability_Type_Other"] = "";
	$placeHolderscandidates_grouped_report["English"]["Disability_Type_Other"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Institution_Type"] = "Institution Type";
	$fieldToolTipscandidates_grouped_report["English"]["Institution_Type"] = "";
	$placeHolderscandidates_grouped_report["English"]["Institution_Type"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Institution_Name"] = "Institution Name";
	$fieldToolTipscandidates_grouped_report["English"]["Institution_Name"] = "";
	$placeHolderscandidates_grouped_report["English"]["Institution_Name"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Education_Level"] = "Education Level";
	$fieldToolTipscandidates_grouped_report["English"]["Education_Level"] = "";
	$placeHolderscandidates_grouped_report["English"]["Education_Level"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Department"] = "Department";
	$fieldToolTipscandidates_grouped_report["English"]["Department"] = "";
	$placeHolderscandidates_grouped_report["English"]["Department"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Minor"] = "Minor";
	$fieldToolTipscandidates_grouped_report["English"]["Minor"] = "";
	$placeHolderscandidates_grouped_report["English"]["Minor"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Major"] = "Major";
	$fieldToolTipscandidates_grouped_report["English"]["Major"] = "";
	$placeHolderscandidates_grouped_report["English"]["Major"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Enrollement_Type"] = "Enrollement Type";
	$fieldToolTipscandidates_grouped_report["English"]["Enrollement_Type"] = "";
	$placeHolderscandidates_grouped_report["English"]["Enrollement_Type"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Skills"] = "Skills";
	$fieldToolTipscandidates_grouped_report["English"]["Skills"] = "";
	$placeHolderscandidates_grouped_report["English"]["Skills"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Languages"] = "Languages";
	$fieldToolTipscandidates_grouped_report["English"]["Languages"] = "";
	$placeHolderscandidates_grouped_report["English"]["Languages"] = "";
	$fieldLabelscandidates_grouped_report["English"]["English_Proficiency_Level"] = "English Proficiency Level";
	$fieldToolTipscandidates_grouped_report["English"]["English_Proficiency_Level"] = "";
	$placeHolderscandidates_grouped_report["English"]["English_Proficiency_Level"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Industry_Specific_Skills"] = "Industry Specific Skills";
	$fieldToolTipscandidates_grouped_report["English"]["Industry_Specific_Skills"] = "";
	$placeHolderscandidates_grouped_report["English"]["Industry_Specific_Skills"] = "";
	$fieldLabelscandidates_grouped_report["English"]["IT_Related_Skills"] = "IT Related Skills";
	$fieldToolTipscandidates_grouped_report["English"]["IT_Related_Skills"] = "";
	$placeHolderscandidates_grouped_report["English"]["IT_Related_Skills"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Certifications"] = "Certifications";
	$fieldToolTipscandidates_grouped_report["English"]["Certifications"] = "";
	$placeHolderscandidates_grouped_report["English"]["Certifications"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Year_of_graduation"] = "Year Of Graduation";
	$fieldToolTipscandidates_grouped_report["English"]["Year_of_graduation"] = "";
	$placeHolderscandidates_grouped_report["English"]["Year_of_graduation"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Field_Of_Study"] = "Field Of Study";
	$fieldToolTipscandidates_grouped_report["English"]["Field_Of_Study"] = "";
	$placeHolderscandidates_grouped_report["English"]["Field_Of_Study"] = "";
	$fieldLabelscandidates_grouped_report["English"]["GPA"] = "GPA";
	$fieldToolTipscandidates_grouped_report["English"]["GPA"] = "";
	$placeHolderscandidates_grouped_report["English"]["GPA"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Intervention"] = "Intervention";
	$fieldToolTipscandidates_grouped_report["English"]["Intervention"] = "";
	$placeHolderscandidates_grouped_report["English"]["Intervention"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Campaign"] = "Campaign";
	$fieldToolTipscandidates_grouped_report["English"]["Campaign"] = "";
	$placeHolderscandidates_grouped_report["English"]["Campaign"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Attend_Employability_Skill"] = "Attend Employability Skill";
	$fieldToolTipscandidates_grouped_report["English"]["Attend_Employability_Skill"] = "";
	$placeHolderscandidates_grouped_report["English"]["Attend_Employability_Skill"] = "";
	$fieldLabelscandidates_grouped_report["English"]["DAAP_enrolled_1st_Round"] = "DAAP Enrolled 1st Round";
	$fieldToolTipscandidates_grouped_report["English"]["DAAP_enrolled_1st_Round"] = "";
	$placeHolderscandidates_grouped_report["English"]["DAAP_enrolled_1st_Round"] = "";
	$fieldLabelscandidates_grouped_report["English"]["DAAP_Completed"] = "DAAP Completed";
	$fieldToolTipscandidates_grouped_report["English"]["DAAP_Completed"] = "";
	$placeHolderscandidates_grouped_report["English"]["DAAP_Completed"] = "";
	$fieldLabelscandidates_grouped_report["English"]["DAAP_Completed_Courses"] = "DAAP Completed Courses";
	$fieldToolTipscandidates_grouped_report["English"]["DAAP_Completed_Courses"] = "";
	$placeHolderscandidates_grouped_report["English"]["DAAP_Completed_Courses"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Job_Fair_Clinic"] = "Job Fair Clinic";
	$fieldToolTipscandidates_grouped_report["English"]["Job_Fair_Clinic"] = "";
	$placeHolderscandidates_grouped_report["English"]["Job_Fair_Clinic"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Job_Fair"] = "Job Fair";
	$fieldToolTipscandidates_grouped_report["English"]["Job_Fair"] = "";
	$placeHolderscandidates_grouped_report["English"]["Job_Fair"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Exit_Exam_Score"] = "Exit Exam Score";
	$fieldToolTipscandidates_grouped_report["English"]["Exit_Exam_Score"] = "";
	$placeHolderscandidates_grouped_report["English"]["Exit_Exam_Score"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Exit_Exam_Status"] = "Exit Exam Status";
	$fieldToolTipscandidates_grouped_report["English"]["Exit_Exam_Status"] = "";
	$placeHolderscandidates_grouped_report["English"]["Exit_Exam_Status"] = "";
	$fieldLabelscandidates_grouped_report["English"]["DAAP_enrolled_2nd_Round"] = "DAAP Enrolled 2nd Round";
	$fieldToolTipscandidates_grouped_report["English"]["DAAP_enrolled_2nd_Round"] = "";
	$placeHolderscandidates_grouped_report["English"]["DAAP_enrolled_2nd_Round"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Upload_on_Tracker"] = "Upload On Tracker";
	$fieldToolTipscandidates_grouped_report["English"]["Upload_on_Tracker"] = "";
	$placeHolderscandidates_grouped_report["English"]["Upload_on_Tracker"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Work_Experience"] = "Work Experience";
	$fieldToolTipscandidates_grouped_report["English"]["Work_Experience"] = "";
	$placeHolderscandidates_grouped_report["English"]["Work_Experience"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Joined_Dereja_Services"] = "Joined Dereja Services";
	$fieldToolTipscandidates_grouped_report["English"]["Joined_Dereja_Services"] = "";
	$placeHolderscandidates_grouped_report["English"]["Joined_Dereja_Services"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Dereja_Services"] = "Dereja Services";
	$fieldToolTipscandidates_grouped_report["English"]["Dereja_Services"] = "";
	$placeHolderscandidates_grouped_report["English"]["Dereja_Services"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Dereja_Training_Services"] = "Dereja Training Services";
	$fieldToolTipscandidates_grouped_report["English"]["Dereja_Training_Services"] = "";
	$placeHolderscandidates_grouped_report["English"]["Dereja_Training_Services"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Dereja_Event_Services"] = "Dereja Event Services";
	$fieldToolTipscandidates_grouped_report["English"]["Dereja_Event_Services"] = "";
	$placeHolderscandidates_grouped_report["English"]["Dereja_Event_Services"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Dereja_web_profile_completion"] = "Dereja Web Profile Completion";
	$fieldToolTipscandidates_grouped_report["English"]["Dereja_web_profile_completion"] = "";
	$placeHolderscandidates_grouped_report["English"]["Dereja_web_profile_completion"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Dereja_Information_Source"] = "Dereja Information Source";
	$fieldToolTipscandidates_grouped_report["English"]["Dereja_Information_Source"] = "";
	$placeHolderscandidates_grouped_report["English"]["Dereja_Information_Source"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Employment_Status"] = "Employment Status";
	$fieldToolTipscandidates_grouped_report["English"]["Employment_Status"] = "";
	$placeHolderscandidates_grouped_report["English"]["Employment_Status"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Employment_Company"] = "Employment Company";
	$fieldToolTipscandidates_grouped_report["English"]["Employment_Company"] = "";
	$placeHolderscandidates_grouped_report["English"]["Employment_Company"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Employment_Position"] = "Employment Position";
	$fieldToolTipscandidates_grouped_report["English"]["Employment_Position"] = "";
	$placeHolderscandidates_grouped_report["English"]["Employment_Position"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Remark"] = "Remark";
	$fieldToolTipscandidates_grouped_report["English"]["Remark"] = "";
	$placeHolderscandidates_grouped_report["English"]["Remark"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Age"] = "Age";
	$fieldToolTipscandidates_grouped_report["English"]["Age"] = "";
	$placeHolderscandidates_grouped_report["English"]["Age"] = "";
	$fieldLabelscandidates_grouped_report["English"]["COUNT_CandidateID_"] = "COUNT(Candidate ID)";
	$fieldToolTipscandidates_grouped_report["English"]["COUNT_CandidateID_"] = "";
	$placeHolderscandidates_grouped_report["English"]["COUNT_CandidateID_"] = "";
	$fieldLabelscandidates_grouped_report["English"]["StudentID"] = "Student ID";
	$fieldToolTipscandidates_grouped_report["English"]["StudentID"] = "";
	$placeHolderscandidates_grouped_report["English"]["StudentID"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Sex"] = "Sex";
	$fieldToolTipscandidates_grouped_report["English"]["Sex"] = "";
	$placeHolderscandidates_grouped_report["English"]["Sex"] = "";
	$fieldLabelscandidates_grouped_report["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipscandidates_grouped_report["English"]["Disability_Status"] = "";
	$placeHolderscandidates_grouped_report["English"]["Disability_Status"] = "";
	if (count($fieldToolTipscandidates_grouped_report["English"]))
		$tdatacandidates_grouped_report[".isUseToolTips"] = true;
}


	$tdatacandidates_grouped_report[".NCSearch"] = true;



$tdatacandidates_grouped_report[".shortTableName"] = "candidates_grouped_report";
$tdatacandidates_grouped_report[".nSecOptions"] = 0;

$tdatacandidates_grouped_report[".mainTableOwnerID"] = "";
$tdatacandidates_grouped_report[".entityType"] = 2;
$tdatacandidates_grouped_report[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidates_grouped_report[".strOriginalTableName"] = "candidates";

	



$tdatacandidates_grouped_report[".showAddInPopup"] = false;

$tdatacandidates_grouped_report[".showEditInPopup"] = false;

$tdatacandidates_grouped_report[".showViewInPopup"] = false;

$tdatacandidates_grouped_report[".listAjax"] = false;
//	temporary
//$tdatacandidates_grouped_report[".listAjax"] = false;

	$tdatacandidates_grouped_report[".audit"] = false;

	$tdatacandidates_grouped_report[".locking"] = false;


$pages = $tdatacandidates_grouped_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidates_grouped_report[".edit"] = true;
	$tdatacandidates_grouped_report[".afterEditAction"] = 1;
	$tdatacandidates_grouped_report[".closePopupAfterEdit"] = 1;
	$tdatacandidates_grouped_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidates_grouped_report[".add"] = true;
$tdatacandidates_grouped_report[".afterAddAction"] = 1;
$tdatacandidates_grouped_report[".closePopupAfterAdd"] = 1;
$tdatacandidates_grouped_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidates_grouped_report[".list"] = true;
}



$tdatacandidates_grouped_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidates_grouped_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidates_grouped_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidates_grouped_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidates_grouped_report[".printFriendly"] = true;
}



$tdatacandidates_grouped_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidates_grouped_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidates_grouped_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidates_grouped_report[".isUseAjaxSuggest"] = true;



			

$tdatacandidates_grouped_report[".ajaxCodeSnippetAdded"] = false;

$tdatacandidates_grouped_report[".buttonsAdded"] = false;

$tdatacandidates_grouped_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidates_grouped_report[".isUseTimeForSearch"] = false;


$tdatacandidates_grouped_report[".badgeColor"] = "1E90FF";


$tdatacandidates_grouped_report[".allSearchFields"] = array();
$tdatacandidates_grouped_report[".filterFields"] = array();
$tdatacandidates_grouped_report[".requiredSearchFields"] = array();

$tdatacandidates_grouped_report[".googleLikeFields"] = array();
$tdatacandidates_grouped_report[".googleLikeFields"][] = "COUNT(CandidateID)";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "StudentID";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "First_Name";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Middle_Name";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Last_Name";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Sex";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Age";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "DOB";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Region";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "City";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Sub_City";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Zone";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "House_No";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Phone_Number";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Phone_Number_Alternate";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Email_Address";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Disability_Status";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Disability_Type";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Disability_Type_Other";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Institution_Type";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Institution_Name";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Education_Level";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Department";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Minor";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Major";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Enrollement_Type";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Skills";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Languages";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "English_Proficiency_Level";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Industry_Specific_Skills";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "IT_Related_Skills";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Certifications";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Year_of_graduation";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Field_Of_Study";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "GPA";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Intervention";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Campaign";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Attend_Employability_Skill";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "DAAP_enrolled_1st Round";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "DAAP_Completed";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "DAAP_Completed_Courses";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Job_Fair_Clinic";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Job_Fair";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Exit_Exam_Score";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Exit_Exam_Status";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "DAAP_enrolled_2nd_Round";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Upload_on_Tracker";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Work_Experience";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Joined_Dereja_Services";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Dereja_Services";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Dereja_Training_Services";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Dereja_Event_Services";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Dereja_web_profile_completion";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Dereja_Information_Source";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Employment_Status";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Employment_Company";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Employment_Position";
$tdatacandidates_grouped_report[".googleLikeFields"][] = "Remark";



$tdatacandidates_grouped_report[".tableType"] = "report";

$tdatacandidates_grouped_report[".printerPageOrientation"] = 0;
$tdatacandidates_grouped_report[".nPrinterPageScale"] = 100;

$tdatacandidates_grouped_report[".nPrinterSplitRecords"] = 40;

$tdatacandidates_grouped_report[".geocodingEnabled"] = false;

//report settings

$tdatacandidates_grouped_report[".reportPrintGroupsPerPage"] = 3;
$tdatacandidates_grouped_report[".reportPrintRecordsPerPage"] = 40;

$tdatacandidates_grouped_report[".pageSizeGroups"] = 5;
$tdatacandidates_grouped_report[".pageSizeRecords"] = 20;


//end of report settings



$tdatacandidates_grouped_report[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatacandidates_grouped_report[".strOrderBy"] = $tstrOrderBy;

$tdatacandidates_grouped_report[".orderindexes"] = array();


$tdatacandidates_grouped_report[".sqlHead"] = "SELECT COUNT(CandidateID) AS `COUNT(CandidateID)`,  StudentID,  First_Name,  Middle_Name,  Last_Name,  Sex,  TIMESTAMPDIFF(YEAR, DOB, CURDATE()) AS Age,  DOB,  Region,  City,  Sub_City,  `Zone`,  House_No,  Phone_Number,  Phone_Number_Alternate,  Email_Address,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Institution_Type,  Institution_Name,  Education_Level,  Department,  Minor,  Major,  Enrollement_Type,  Skills,  Languages,  English_Proficiency_Level,  Industry_Specific_Skills,  IT_Related_Skills,  Certifications,  Year_of_graduation,  Field_Of_Study,  GPA,  Intervention,  Campaign,  Attend_Employability_Skill,  `DAAP_enrolled_1st Round`,  DAAP_Completed,  DAAP_Completed_Courses,  Job_Fair_Clinic,  Job_Fair,  Exit_Exam_Score,  Exit_Exam_Status,  DAAP_enrolled_2nd_Round,  Upload_on_Tracker,  Work_Experience,  Joined_Dereja_Services,  Dereja_Services,  Dereja_Training_Services,  Dereja_Event_Services,  Dereja_web_profile_completion,  Dereja_Information_Source,  Employment_Status,  Employment_Company,  Employment_Position,  Remark";
$tdatacandidates_grouped_report[".sqlFrom"] = "FROM candidates";
$tdatacandidates_grouped_report[".sqlWhereExpr"] = "";
$tdatacandidates_grouped_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidates_grouped_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidates_grouped_report[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidates_grouped_report[".highlightSearchResults"] = true;

$tableKeyscandidates_grouped_report = array();
$tdatacandidates_grouped_report[".Keys"] = $tableKeyscandidates_grouped_report;


$tdatacandidates_grouped_report[".hideMobileList"] = array();




//	COUNT(CandidateID)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COUNT(CandidateID)";
	$fdata["GoodName"] = "COUNT_CandidateID_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","COUNT_CandidateID_");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "COUNT(CandidateID)";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(CandidateID)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["COUNT(CandidateID)"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "COUNT(CandidateID)";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","StudentID");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["StudentID"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "StudentID";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","First_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["First_Name"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Middle_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Middle_Name"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Last_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Last_Name"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Last_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Sex");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Sex"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Sex";
//	Age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Age";
	$fdata["GoodName"] = "Age";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Age");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Age"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Age";
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","DOB");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["DOB"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Region");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Region"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","City");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CityName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CityName";

	

	
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


	$tdatacandidates_grouped_report["City"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "City";
//	Sub_City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Sub_City";
	$fdata["GoodName"] = "Sub_City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Sub_City");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sub_cities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SubCityName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SubCityName";

	

	
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


	$tdatacandidates_grouped_report["Sub_City"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Sub_City";
//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Zone");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Zone"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Zone";
//	House_No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "House_No";
	$fdata["GoodName"] = "House_No";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","House_No");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["House_No"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "House_No";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Phone_Number");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Phone_Number"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Phone_Number";
//	Phone_Number_Alternate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Phone_Number_Alternate";
	$fdata["GoodName"] = "Phone_Number_Alternate";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Phone_Number_Alternate");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Phone_Number_Alternate"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Phone_Number_Alternate";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Email_Address");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Email_Address"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Email_Address";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Disability_Status");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Disability_Status"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Disability_Type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Disability_Types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DisabilityID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Disability_Type";

	

	
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


	$tdatacandidates_grouped_report["Disability_Type"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Disability_Type_Other");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Disability_Type_Other"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Disability_Type_Other";
//	Institution_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Institution_Type";
	$fdata["GoodName"] = "Institution_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Institution_Type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "institution_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "InstitutionTypeName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "InstitutionTypeName";

	

	
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


	$tdatacandidates_grouped_report["Institution_Type"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Institution_Type";
//	Institution_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Institution_Name";
	$fdata["GoodName"] = "Institution_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Institution_Name");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Institution_Name"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Institution_Name";
//	Education_Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Education_Level";
	$fdata["GoodName"] = "Education_Level";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Education_Level");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "education_levels";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EducationLevelName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EducationLevelName";

	

	
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


	$tdatacandidates_grouped_report["Education_Level"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Education_Level";
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Department");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "departments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DepartmentName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DepartmentName";

	

	
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


	$tdatacandidates_grouped_report["Department"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Department";
//	Minor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Minor";
	$fdata["GoodName"] = "Minor";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Minor");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "minor_major";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MinorName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "MinorName";

	

	
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


	$tdatacandidates_grouped_report["Minor"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Minor";
//	Major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Major";
	$fdata["GoodName"] = "Major";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Major");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "minor_major";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MajorName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "MajorName";

	

	
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


	$tdatacandidates_grouped_report["Major"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Major";
//	Enrollement_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Enrollement_Type";
	$fdata["GoodName"] = "Enrollement_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Enrollement_Type");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Enrollement_Type"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Enrollement_Type";
//	Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Skills";
	$fdata["GoodName"] = "Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Skills");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "skills";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "SkillName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SkillName";

	

	
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


	$tdatacandidates_grouped_report["Skills"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Skills";
//	Languages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Languages";
	$fdata["GoodName"] = "Languages";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Languages");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Languages";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "Language_Name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Language_Name";

	

	
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


	$tdatacandidates_grouped_report["Languages"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Languages";
//	English_Proficiency_Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "English_Proficiency_Level";
	$fdata["GoodName"] = "English_Proficiency_Level";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","English_Proficiency_Level");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["English_Proficiency_Level"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "English_Proficiency_Level";
//	Industry_Specific_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Industry_Specific_Skills";
	$fdata["GoodName"] = "Industry_Specific_Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Industry_Specific_Skills");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "industry_specific_skills";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "SkillName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SkillName";

	

	
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


	$tdatacandidates_grouped_report["Industry_Specific_Skills"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Industry_Specific_Skills";
//	IT_Related_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "IT_Related_Skills";
	$fdata["GoodName"] = "IT_Related_Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","IT_Related_Skills");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "it_related_skills";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "SkillName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SkillName";

	

	
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


	$tdatacandidates_grouped_report["IT_Related_Skills"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "IT_Related_Skills";
//	Certifications
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Certifications";
	$fdata["GoodName"] = "Certifications";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Certifications");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Certifications";

		$fdata["sourceSingle"] = "Certifications";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Certifications";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Certifications"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Certifications";
//	Year_of_graduation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Year_of_graduation";
	$fdata["GoodName"] = "Year_of_graduation";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Year_of_graduation");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Year_of_graduation"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Year_of_graduation";
//	Field_Of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Field_Of_Study";
	$fdata["GoodName"] = "Field_Of_Study";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Field_Of_Study");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Field_Of_Study"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Field_Of_Study";
//	GPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "GPA";
	$fdata["GoodName"] = "GPA";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","GPA");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "GPA";

		$fdata["sourceSingle"] = "GPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GPA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["GPA"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "GPA";
//	Intervention
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Intervention";
	$fdata["GoodName"] = "Intervention";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Intervention");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Intervention"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Intervention";
//	Campaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Campaign";
	$fdata["GoodName"] = "Campaign";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Campaign");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Campaign"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Campaign";
//	Attend_Employability_Skill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Attend_Employability_Skill";
	$fdata["GoodName"] = "Attend_Employability_Skill";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Attend_Employability_Skill");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Attend_Employability_Skill"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Attend_Employability_Skill";
//	DAAP_enrolled_1st Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "DAAP_enrolled_1st Round";
	$fdata["GoodName"] = "DAAP_enrolled_1st_Round";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","DAAP_enrolled_1st_Round");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["DAAP_enrolled_1st Round"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "DAAP_enrolled_1st Round";
//	DAAP_Completed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "DAAP_Completed";
	$fdata["GoodName"] = "DAAP_Completed";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","DAAP_Completed");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["DAAP_Completed"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "DAAP_Completed";
//	DAAP_Completed_Courses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DAAP_Completed_Courses";
	$fdata["GoodName"] = "DAAP_Completed_Courses";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","DAAP_Completed_Courses");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "TrainingTitle";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TrainingTitle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacandidates_grouped_report["DAAP_Completed_Courses"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "DAAP_Completed_Courses";
//	Job_Fair_Clinic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Job_Fair_Clinic";
	$fdata["GoodName"] = "Job_Fair_Clinic";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Job_Fair_Clinic");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Job_Fair_Clinic"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Job_Fair_Clinic";
//	Job_Fair
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Job_Fair";
	$fdata["GoodName"] = "Job_Fair";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Job_Fair");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Job_Fair"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Job_Fair";
//	Exit_Exam_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Exit_Exam_Score";
	$fdata["GoodName"] = "Exit_Exam_Score";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Exit_Exam_Score");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Exit_Exam_Score";

		$fdata["sourceSingle"] = "Exit_Exam_Score";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Exit_Exam_Score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Exit_Exam_Score"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Exit_Exam_Score";
//	Exit_Exam_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Exit_Exam_Status";
	$fdata["GoodName"] = "Exit_Exam_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Exit_Exam_Status");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["LookupValues"][] = "Pass";
	$edata["LookupValues"][] = "Fail";

	
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


	$tdatacandidates_grouped_report["Exit_Exam_Status"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Exit_Exam_Status";
//	DAAP_enrolled_2nd_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "DAAP_enrolled_2nd_Round";
	$fdata["GoodName"] = "DAAP_enrolled_2nd_Round";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","DAAP_enrolled_2nd_Round");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["DAAP_enrolled_2nd_Round"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "DAAP_enrolled_2nd_Round";
//	Upload_on_Tracker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Upload_on_Tracker";
	$fdata["GoodName"] = "Upload_on_Tracker";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Upload_on_Tracker");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Upload_on_Tracker"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Upload_on_Tracker";
//	Work_Experience
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Work_Experience";
	$fdata["GoodName"] = "Work_Experience";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Work_Experience");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Work_Experience";

		$fdata["sourceSingle"] = "Work_Experience";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Work_Experience";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Work_Experience"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Work_Experience";
//	Joined_Dereja_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Joined_Dereja_Services";
	$fdata["GoodName"] = "Joined_Dereja_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Joined_Dereja_Services");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Joined_Dereja_Services"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Joined_Dereja_Services";
//	Dereja_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Dereja_Services";
	$fdata["GoodName"] = "Dereja_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Dereja_Services");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dereja_services";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "ServiceName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ServiceName";

	

	
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


	$tdatacandidates_grouped_report["Dereja_Services"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Dereja_Services";
//	Dereja_Training_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Dereja_Training_Services";
	$fdata["GoodName"] = "Dereja_Training_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Dereja_Training_Services");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "TrainingTitle";
	$edata["LinkFieldType"] = 0;
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


	$tdatacandidates_grouped_report["Dereja_Training_Services"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Dereja_Training_Services";
//	Dereja_Event_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Dereja_Event_Services";
	$fdata["GoodName"] = "Dereja_Event_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Dereja_Event_Services");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "events";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "EventName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "EventName";

	

	
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


	$tdatacandidates_grouped_report["Dereja_Event_Services"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Dereja_Event_Services";
//	Dereja_web_profile_completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Dereja_web_profile_completion";
	$fdata["GoodName"] = "Dereja_web_profile_completion";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Dereja_web_profile_completion");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Dereja_web_profile_completion"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Dereja_web_profile_completion";
//	Dereja_Information_Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Dereja_Information_Source";
	$fdata["GoodName"] = "Dereja_Information_Source";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Dereja_Information_Source");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dereja_information_sources";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "SourceName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SourceName";

	

	
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


	$tdatacandidates_grouped_report["Dereja_Information_Source"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Dereja_Information_Source";
//	Employment_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Employment_Status";
	$fdata["GoodName"] = "Employment_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Employment_Status");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["LookupValues"][] = "Employed";
	$edata["LookupValues"][] = "Self  Employed";

	
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


	$tdatacandidates_grouped_report["Employment_Status"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Employment_Status";
//	Employment_Company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Employment_Company";
	$fdata["GoodName"] = "Employment_Company";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Employment_Company");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Companies";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CompanyName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CompanyName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacandidates_grouped_report["Employment_Company"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Employment_Company";
//	Employment_Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Employment_Position";
	$fdata["GoodName"] = "Employment_Position";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Employment_Position");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Jobs";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "JobPosition";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "JobPosition";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacandidates_grouped_report["Employment_Position"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Employment_Position";
//	Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Remark";
	$fdata["GoodName"] = "Remark";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_grouped_report","Remark");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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


	$tdatacandidates_grouped_report["Remark"] = $fdata;
		$tdatacandidates_grouped_report[".searchableFields"][] = "Remark";


$tables_data["candidates_grouped_report"]=&$tdatacandidates_grouped_report;
$field_labels["candidates_grouped_report"] = &$fieldLabelscandidates_grouped_report;
$fieldToolTips["candidates_grouped_report"] = &$fieldToolTipscandidates_grouped_report;
$placeHolders["candidates_grouped_report"] = &$placeHolderscandidates_grouped_report;
$page_titles["candidates_grouped_report"] = &$pageTitlescandidates_grouped_report;


changeTextControlsToDate( "candidates_grouped_report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidates_grouped_report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidates_grouped_report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidates_grouped_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(CandidateID) AS `COUNT(CandidateID)`,  StudentID,  First_Name,  Middle_Name,  Last_Name,  Sex,  TIMESTAMPDIFF(YEAR, DOB, CURDATE()) AS Age,  DOB,  Region,  City,  Sub_City,  `Zone`,  House_No,  Phone_Number,  Phone_Number_Alternate,  Email_Address,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Institution_Type,  Institution_Name,  Education_Level,  Department,  Minor,  Major,  Enrollement_Type,  Skills,  Languages,  English_Proficiency_Level,  Industry_Specific_Skills,  IT_Related_Skills,  Certifications,  Year_of_graduation,  Field_Of_Study,  GPA,  Intervention,  Campaign,  Attend_Employability_Skill,  `DAAP_enrolled_1st Round`,  DAAP_Completed,  DAAP_Completed_Courses,  Job_Fair_Clinic,  Job_Fair,  Exit_Exam_Score,  Exit_Exam_Status,  DAAP_enrolled_2nd_Round,  Upload_on_Tracker,  Work_Experience,  Joined_Dereja_Services,  Dereja_Services,  Dereja_Training_Services,  Dereja_Event_Services,  Dereja_web_profile_completion,  Dereja_Information_Source,  Employment_Status,  Employment_Company,  Employment_Position,  Remark";
$proto0["m_strFrom"] = "FROM candidates";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_COUNT";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "COUNT(CandidateID)";
$proto6["m_srcTableName"] = "candidates_grouped_report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "COUNT(CandidateID)";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto9["m_sql"] = "StudentID";
$proto9["m_srcTableName"] = "candidates_grouped_report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto11["m_sql"] = "First_Name";
$proto11["m_srcTableName"] = "candidates_grouped_report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto13["m_sql"] = "Middle_Name";
$proto13["m_srcTableName"] = "candidates_grouped_report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto15["m_sql"] = "Last_Name";
$proto15["m_srcTableName"] = "candidates_grouped_report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto17["m_sql"] = "Sex";
$proto17["m_srcTableName"] = "candidates_grouped_report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_CUSTOM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "YEAR"
));

$proto20["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DOB"
));

$proto20["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CURDATE()"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "TIMESTAMPDIFF";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "TIMESTAMPDIFF(YEAR, DOB, CURDATE())";
$proto19["m_srcTableName"] = "candidates_grouped_report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Age";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto24["m_sql"] = "DOB";
$proto24["m_srcTableName"] = "candidates_grouped_report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto26["m_sql"] = "Region";
$proto26["m_srcTableName"] = "candidates_grouped_report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto28["m_sql"] = "City";
$proto28["m_srcTableName"] = "candidates_grouped_report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Sub_City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto30["m_sql"] = "Sub_City";
$proto30["m_srcTableName"] = "candidates_grouped_report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto32["m_sql"] = "`Zone`";
$proto32["m_srcTableName"] = "candidates_grouped_report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "House_No",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto34["m_sql"] = "House_No";
$proto34["m_srcTableName"] = "candidates_grouped_report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto36["m_sql"] = "Phone_Number";
$proto36["m_srcTableName"] = "candidates_grouped_report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number_Alternate",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto38["m_sql"] = "Phone_Number_Alternate";
$proto38["m_srcTableName"] = "candidates_grouped_report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto40["m_sql"] = "Email_Address";
$proto40["m_srcTableName"] = "candidates_grouped_report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto42["m_sql"] = "Disability_Status";
$proto42["m_srcTableName"] = "candidates_grouped_report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto44["m_sql"] = "Disability_Type";
$proto44["m_srcTableName"] = "candidates_grouped_report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto46["m_sql"] = "Disability_Type_Other";
$proto46["m_srcTableName"] = "candidates_grouped_report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto48["m_sql"] = "Institution_Type";
$proto48["m_srcTableName"] = "candidates_grouped_report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto50["m_sql"] = "Institution_Name";
$proto50["m_srcTableName"] = "candidates_grouped_report";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Education_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto52["m_sql"] = "Education_Level";
$proto52["m_srcTableName"] = "candidates_grouped_report";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto54["m_sql"] = "Department";
$proto54["m_srcTableName"] = "candidates_grouped_report";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Minor",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto56["m_sql"] = "Minor";
$proto56["m_srcTableName"] = "candidates_grouped_report";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto58["m_sql"] = "Major";
$proto58["m_srcTableName"] = "candidates_grouped_report";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Enrollement_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto60["m_sql"] = "Enrollement_Type";
$proto60["m_srcTableName"] = "candidates_grouped_report";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto62["m_sql"] = "Skills";
$proto62["m_srcTableName"] = "candidates_grouped_report";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Languages",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto64["m_sql"] = "Languages";
$proto64["m_srcTableName"] = "candidates_grouped_report";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "English_Proficiency_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto66["m_sql"] = "English_Proficiency_Level";
$proto66["m_srcTableName"] = "candidates_grouped_report";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Industry_Specific_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto68["m_sql"] = "Industry_Specific_Skills";
$proto68["m_srcTableName"] = "candidates_grouped_report";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "IT_Related_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto70["m_sql"] = "IT_Related_Skills";
$proto70["m_srcTableName"] = "candidates_grouped_report";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Certifications",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto72["m_sql"] = "Certifications";
$proto72["m_srcTableName"] = "candidates_grouped_report";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Year_of_graduation",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto74["m_sql"] = "Year_of_graduation";
$proto74["m_srcTableName"] = "candidates_grouped_report";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Field_Of_Study",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto76["m_sql"] = "Field_Of_Study";
$proto76["m_srcTableName"] = "candidates_grouped_report";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "GPA",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto78["m_sql"] = "GPA";
$proto78["m_srcTableName"] = "candidates_grouped_report";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Intervention",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto80["m_sql"] = "Intervention";
$proto80["m_srcTableName"] = "candidates_grouped_report";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Campaign",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto82["m_sql"] = "Campaign";
$proto82["m_srcTableName"] = "candidates_grouped_report";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Attend_Employability_Skill",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto84["m_sql"] = "Attend_Employability_Skill";
$proto84["m_srcTableName"] = "candidates_grouped_report";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_1st Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto86["m_sql"] = "`DAAP_enrolled_1st Round`";
$proto86["m_srcTableName"] = "candidates_grouped_report";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto88["m_sql"] = "DAAP_Completed";
$proto88["m_srcTableName"] = "candidates_grouped_report";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed_Courses",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto90["m_sql"] = "DAAP_Completed_Courses";
$proto90["m_srcTableName"] = "candidates_grouped_report";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Fair_Clinic",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto92["m_sql"] = "Job_Fair_Clinic";
$proto92["m_srcTableName"] = "candidates_grouped_report";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Fair",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto94["m_sql"] = "Job_Fair";
$proto94["m_srcTableName"] = "candidates_grouped_report";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Score",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto96["m_sql"] = "Exit_Exam_Score";
$proto96["m_srcTableName"] = "candidates_grouped_report";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto98["m_sql"] = "Exit_Exam_Status";
$proto98["m_srcTableName"] = "candidates_grouped_report";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_2nd_Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto100["m_sql"] = "DAAP_enrolled_2nd_Round";
$proto100["m_srcTableName"] = "candidates_grouped_report";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Upload_on_Tracker",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto102["m_sql"] = "Upload_on_Tracker";
$proto102["m_srcTableName"] = "candidates_grouped_report";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Work_Experience",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto104["m_sql"] = "Work_Experience";
$proto104["m_srcTableName"] = "candidates_grouped_report";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Joined_Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto106["m_sql"] = "Joined_Dereja_Services";
$proto106["m_srcTableName"] = "candidates_grouped_report";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto108["m_sql"] = "Dereja_Services";
$proto108["m_srcTableName"] = "candidates_grouped_report";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Training_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto110["m_sql"] = "Dereja_Training_Services";
$proto110["m_srcTableName"] = "candidates_grouped_report";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Event_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto112["m_sql"] = "Dereja_Event_Services";
$proto112["m_srcTableName"] = "candidates_grouped_report";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_web_profile_completion",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto114["m_sql"] = "Dereja_web_profile_completion";
$proto114["m_srcTableName"] = "candidates_grouped_report";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Information_Source",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto116["m_sql"] = "Dereja_Information_Source";
$proto116["m_srcTableName"] = "candidates_grouped_report";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto118["m_sql"] = "Employment_Status";
$proto118["m_srcTableName"] = "candidates_grouped_report";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Company",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto120["m_sql"] = "Employment_Company";
$proto120["m_srcTableName"] = "candidates_grouped_report";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Position",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto122["m_sql"] = "Employment_Position";
$proto122["m_srcTableName"] = "candidates_grouped_report";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Remark",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto124["m_sql"] = "Remark";
$proto124["m_srcTableName"] = "candidates_grouped_report";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto126=array();
$proto126["m_link"] = "SQLL_MAIN";
			$proto127=array();
$proto127["m_strName"] = "candidates";
$proto127["m_srcTableName"] = "candidates_grouped_report";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "CandidateID";
$proto127["m_columns"][] = "StudentID";
$proto127["m_columns"][] = "First_Name";
$proto127["m_columns"][] = "Middle_Name";
$proto127["m_columns"][] = "Last_Name";
$proto127["m_columns"][] = "Sex";
$proto127["m_columns"][] = "DOB";
$proto127["m_columns"][] = "Region";
$proto127["m_columns"][] = "City";
$proto127["m_columns"][] = "Sub_City";
$proto127["m_columns"][] = "Zone";
$proto127["m_columns"][] = "Woreda";
$proto127["m_columns"][] = "Kebele";
$proto127["m_columns"][] = "House_No";
$proto127["m_columns"][] = "Phone_Number";
$proto127["m_columns"][] = "Phone_Number_Alternate";
$proto127["m_columns"][] = "Email_Address";
$proto127["m_columns"][] = "Disability_Status";
$proto127["m_columns"][] = "Disability_Type";
$proto127["m_columns"][] = "Disability_Type_Other";
$proto127["m_columns"][] = "Institution_Type";
$proto127["m_columns"][] = "Institution_Name";
$proto127["m_columns"][] = "Education_Level";
$proto127["m_columns"][] = "Department";
$proto127["m_columns"][] = "Minor";
$proto127["m_columns"][] = "Major";
$proto127["m_columns"][] = "Enrollement_Type";
$proto127["m_columns"][] = "Skills";
$proto127["m_columns"][] = "Languages";
$proto127["m_columns"][] = "English_Proficiency_Level";
$proto127["m_columns"][] = "Industry_Specific_Skills";
$proto127["m_columns"][] = "IT_Related_Skills";
$proto127["m_columns"][] = "Certifications";
$proto127["m_columns"][] = "Year_of_graduation";
$proto127["m_columns"][] = "Field_Of_Study";
$proto127["m_columns"][] = "GPA";
$proto127["m_columns"][] = "Intervention";
$proto127["m_columns"][] = "Campaign";
$proto127["m_columns"][] = "Attend_Employability_Skill";
$proto127["m_columns"][] = "DAAP_enrolled_1st Round";
$proto127["m_columns"][] = "DAAP_Completed";
$proto127["m_columns"][] = "DAAP_Completed_Courses";
$proto127["m_columns"][] = "Job_Fair_Clinic";
$proto127["m_columns"][] = "Job_Fair";
$proto127["m_columns"][] = "Exit_Exam_Score";
$proto127["m_columns"][] = "Exit_Exam_Status";
$proto127["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto127["m_columns"][] = "Upload_on_Tracker";
$proto127["m_columns"][] = "Upload_on_Website";
$proto127["m_columns"][] = "Work_Experience";
$proto127["m_columns"][] = "Joined_Dereja_Services";
$proto127["m_columns"][] = "Dereja_Services";
$proto127["m_columns"][] = "Program_In_Dereja";
$proto127["m_columns"][] = "Dereja_Training_Services";
$proto127["m_columns"][] = "Training_Start_Date";
$proto127["m_columns"][] = "Training_End_Date";
$proto127["m_columns"][] = "Dereja_Event_Services";
$proto127["m_columns"][] = "Event_Start_Date";
$proto127["m_columns"][] = "Event_End_Date";
$proto127["m_columns"][] = "Event_Participant_Type";
$proto127["m_columns"][] = "Dereja_web_profile_completion";
$proto127["m_columns"][] = "Dereja_Information_Source";
$proto127["m_columns"][] = "Employment_Status";
$proto127["m_columns"][] = "Employment_Company";
$proto127["m_columns"][] = "Employer_Sector";
$proto127["m_columns"][] = "Employment_Position";
$proto127["m_columns"][] = "Salary";
$proto127["m_columns"][] = "Career_Level_Of_Payment";
$proto127["m_columns"][] = "Placement_Type";
$proto127["m_columns"][] = "Placement_Duration";
$proto127["m_columns"][] = "Remark";
$proto127["m_columns"][] = "candidate_data";
$proto127["m_columns"][] = "Date";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "candidates";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "candidates_grouped_report";
$proto128=array();
$proto128["m_sql"] = "";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto130=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto130["m_column"]=$obj;
$obj = new SQLGroupByItem($proto130);

$proto0["m_groupby"][]=$obj;
												$proto132=array();
						$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto132["m_column"]=$obj;
$obj = new SQLGroupByItem($proto132);

$proto0["m_groupby"][]=$obj;
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto134["m_column"]=$obj;
$obj = new SQLGroupByItem($proto134);

$proto0["m_groupby"][]=$obj;
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto0["m_groupby"][]=$obj;
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto138["m_column"]=$obj;
$obj = new SQLGroupByItem($proto138);

$proto0["m_groupby"][]=$obj;
												$proto140=array();
						$proto141=array();
$proto141["m_functiontype"] = "SQLF_CUSTOM";
$proto141["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "YEAR"
));

$proto141["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DOB"
));

$proto141["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CURDATE()"
));

$proto141["m_arguments"][]=$obj;
$proto141["m_strFunctionName"] = "TIMESTAMPDIFF";
$obj = new SQLFunctionCall($proto141);

$proto140["m_column"]=$obj;
$obj = new SQLGroupByItem($proto140);

$proto0["m_groupby"][]=$obj;
												$proto145=array();
						$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto145["m_column"]=$obj;
$obj = new SQLGroupByItem($proto145);

$proto0["m_groupby"][]=$obj;
												$proto147=array();
						$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto147["m_column"]=$obj;
$obj = new SQLGroupByItem($proto147);

$proto0["m_groupby"][]=$obj;
												$proto149=array();
						$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto149["m_column"]=$obj;
$obj = new SQLGroupByItem($proto149);

$proto0["m_groupby"][]=$obj;
												$proto151=array();
						$obj = new SQLField(array(
	"m_strName" => "Sub_City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto151["m_column"]=$obj;
$obj = new SQLGroupByItem($proto151);

$proto0["m_groupby"][]=$obj;
												$proto153=array();
						$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto153["m_column"]=$obj;
$obj = new SQLGroupByItem($proto153);

$proto0["m_groupby"][]=$obj;
												$proto155=array();
						$obj = new SQLField(array(
	"m_strName" => "House_No",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto155["m_column"]=$obj;
$obj = new SQLGroupByItem($proto155);

$proto0["m_groupby"][]=$obj;
												$proto157=array();
						$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto157["m_column"]=$obj;
$obj = new SQLGroupByItem($proto157);

$proto0["m_groupby"][]=$obj;
												$proto159=array();
						$obj = new SQLField(array(
	"m_strName" => "Phone_Number_Alternate",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto159["m_column"]=$obj;
$obj = new SQLGroupByItem($proto159);

$proto0["m_groupby"][]=$obj;
												$proto161=array();
						$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto161["m_column"]=$obj;
$obj = new SQLGroupByItem($proto161);

$proto0["m_groupby"][]=$obj;
												$proto163=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto163["m_column"]=$obj;
$obj = new SQLGroupByItem($proto163);

$proto0["m_groupby"][]=$obj;
												$proto165=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto165["m_column"]=$obj;
$obj = new SQLGroupByItem($proto165);

$proto0["m_groupby"][]=$obj;
												$proto167=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto167["m_column"]=$obj;
$obj = new SQLGroupByItem($proto167);

$proto0["m_groupby"][]=$obj;
												$proto169=array();
						$obj = new SQLField(array(
	"m_strName" => "Institution_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto169["m_column"]=$obj;
$obj = new SQLGroupByItem($proto169);

$proto0["m_groupby"][]=$obj;
												$proto171=array();
						$obj = new SQLField(array(
	"m_strName" => "Institution_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto171["m_column"]=$obj;
$obj = new SQLGroupByItem($proto171);

$proto0["m_groupby"][]=$obj;
												$proto173=array();
						$obj = new SQLField(array(
	"m_strName" => "Education_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto173["m_column"]=$obj;
$obj = new SQLGroupByItem($proto173);

$proto0["m_groupby"][]=$obj;
												$proto175=array();
						$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto175["m_column"]=$obj;
$obj = new SQLGroupByItem($proto175);

$proto0["m_groupby"][]=$obj;
												$proto177=array();
						$obj = new SQLField(array(
	"m_strName" => "Minor",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto177["m_column"]=$obj;
$obj = new SQLGroupByItem($proto177);

$proto0["m_groupby"][]=$obj;
												$proto179=array();
						$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto179["m_column"]=$obj;
$obj = new SQLGroupByItem($proto179);

$proto0["m_groupby"][]=$obj;
												$proto181=array();
						$obj = new SQLField(array(
	"m_strName" => "Enrollement_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto181["m_column"]=$obj;
$obj = new SQLGroupByItem($proto181);

$proto0["m_groupby"][]=$obj;
												$proto183=array();
						$obj = new SQLField(array(
	"m_strName" => "Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto183["m_column"]=$obj;
$obj = new SQLGroupByItem($proto183);

$proto0["m_groupby"][]=$obj;
												$proto185=array();
						$obj = new SQLField(array(
	"m_strName" => "Languages",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto185["m_column"]=$obj;
$obj = new SQLGroupByItem($proto185);

$proto0["m_groupby"][]=$obj;
												$proto187=array();
						$obj = new SQLField(array(
	"m_strName" => "English_Proficiency_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto187["m_column"]=$obj;
$obj = new SQLGroupByItem($proto187);

$proto0["m_groupby"][]=$obj;
												$proto189=array();
						$obj = new SQLField(array(
	"m_strName" => "Industry_Specific_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto189["m_column"]=$obj;
$obj = new SQLGroupByItem($proto189);

$proto0["m_groupby"][]=$obj;
												$proto191=array();
						$obj = new SQLField(array(
	"m_strName" => "IT_Related_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto191["m_column"]=$obj;
$obj = new SQLGroupByItem($proto191);

$proto0["m_groupby"][]=$obj;
												$proto193=array();
						$obj = new SQLField(array(
	"m_strName" => "Certifications",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto193["m_column"]=$obj;
$obj = new SQLGroupByItem($proto193);

$proto0["m_groupby"][]=$obj;
												$proto195=array();
						$obj = new SQLField(array(
	"m_strName" => "Year_of_graduation",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto195["m_column"]=$obj;
$obj = new SQLGroupByItem($proto195);

$proto0["m_groupby"][]=$obj;
												$proto197=array();
						$obj = new SQLField(array(
	"m_strName" => "Field_Of_Study",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto197["m_column"]=$obj;
$obj = new SQLGroupByItem($proto197);

$proto0["m_groupby"][]=$obj;
												$proto199=array();
						$obj = new SQLField(array(
	"m_strName" => "GPA",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto199["m_column"]=$obj;
$obj = new SQLGroupByItem($proto199);

$proto0["m_groupby"][]=$obj;
												$proto201=array();
						$obj = new SQLField(array(
	"m_strName" => "Intervention",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto201["m_column"]=$obj;
$obj = new SQLGroupByItem($proto201);

$proto0["m_groupby"][]=$obj;
												$proto203=array();
						$obj = new SQLField(array(
	"m_strName" => "Campaign",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto203["m_column"]=$obj;
$obj = new SQLGroupByItem($proto203);

$proto0["m_groupby"][]=$obj;
												$proto205=array();
						$obj = new SQLField(array(
	"m_strName" => "Attend_Employability_Skill",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto205["m_column"]=$obj;
$obj = new SQLGroupByItem($proto205);

$proto0["m_groupby"][]=$obj;
												$proto207=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_1st Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto207["m_column"]=$obj;
$obj = new SQLGroupByItem($proto207);

$proto0["m_groupby"][]=$obj;
												$proto209=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto209["m_column"]=$obj;
$obj = new SQLGroupByItem($proto209);

$proto0["m_groupby"][]=$obj;
												$proto211=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed_Courses",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto211["m_column"]=$obj;
$obj = new SQLGroupByItem($proto211);

$proto0["m_groupby"][]=$obj;
												$proto213=array();
						$obj = new SQLField(array(
	"m_strName" => "Job_Fair_Clinic",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto213["m_column"]=$obj;
$obj = new SQLGroupByItem($proto213);

$proto0["m_groupby"][]=$obj;
												$proto215=array();
						$obj = new SQLField(array(
	"m_strName" => "Job_Fair",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto215["m_column"]=$obj;
$obj = new SQLGroupByItem($proto215);

$proto0["m_groupby"][]=$obj;
												$proto217=array();
						$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Score",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto217["m_column"]=$obj;
$obj = new SQLGroupByItem($proto217);

$proto0["m_groupby"][]=$obj;
												$proto219=array();
						$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto219["m_column"]=$obj;
$obj = new SQLGroupByItem($proto219);

$proto0["m_groupby"][]=$obj;
												$proto221=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_2nd_Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto221["m_column"]=$obj;
$obj = new SQLGroupByItem($proto221);

$proto0["m_groupby"][]=$obj;
												$proto223=array();
						$obj = new SQLField(array(
	"m_strName" => "Upload_on_Tracker",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto223["m_column"]=$obj;
$obj = new SQLGroupByItem($proto223);

$proto0["m_groupby"][]=$obj;
												$proto225=array();
						$obj = new SQLField(array(
	"m_strName" => "Work_Experience",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto225["m_column"]=$obj;
$obj = new SQLGroupByItem($proto225);

$proto0["m_groupby"][]=$obj;
												$proto227=array();
						$obj = new SQLField(array(
	"m_strName" => "Joined_Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto227["m_column"]=$obj;
$obj = new SQLGroupByItem($proto227);

$proto0["m_groupby"][]=$obj;
												$proto229=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto229["m_column"]=$obj;
$obj = new SQLGroupByItem($proto229);

$proto0["m_groupby"][]=$obj;
												$proto231=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Training_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto231["m_column"]=$obj;
$obj = new SQLGroupByItem($proto231);

$proto0["m_groupby"][]=$obj;
												$proto233=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Event_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto233["m_column"]=$obj;
$obj = new SQLGroupByItem($proto233);

$proto0["m_groupby"][]=$obj;
												$proto235=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_web_profile_completion",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto235["m_column"]=$obj;
$obj = new SQLGroupByItem($proto235);

$proto0["m_groupby"][]=$obj;
												$proto237=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Information_Source",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto237["m_column"]=$obj;
$obj = new SQLGroupByItem($proto237);

$proto0["m_groupby"][]=$obj;
												$proto239=array();
						$obj = new SQLField(array(
	"m_strName" => "Employment_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto239["m_column"]=$obj;
$obj = new SQLGroupByItem($proto239);

$proto0["m_groupby"][]=$obj;
												$proto241=array();
						$obj = new SQLField(array(
	"m_strName" => "Employment_Company",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto241["m_column"]=$obj;
$obj = new SQLGroupByItem($proto241);

$proto0["m_groupby"][]=$obj;
												$proto243=array();
						$obj = new SQLField(array(
	"m_strName" => "Employment_Position",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto243["m_column"]=$obj;
$obj = new SQLGroupByItem($proto243);

$proto0["m_groupby"][]=$obj;
												$proto245=array();
						$obj = new SQLField(array(
	"m_strName" => "Remark",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_grouped_report"
));

$proto245["m_column"]=$obj;
$obj = new SQLGroupByItem($proto245);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="candidates_grouped_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidates_grouped_report = createSqlQuery_candidates_grouped_report();


	
																								;

																																																										

$tdatacandidates_grouped_report[".sqlquery"] = $queryData_candidates_grouped_report;



$tdatacandidates_grouped_report[".hasEvents"] = false;

?>