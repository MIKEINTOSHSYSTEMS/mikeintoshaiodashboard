<?php
$tdatacandidates_reports = array();
$tdatacandidates_reports[".searchableFields"] = array();
$tdatacandidates_reports[".ShortName"] = "candidates_reports";
$tdatacandidates_reports[".OwnerID"] = "";
$tdatacandidates_reports[".OriginalTable"] = "candidates";


$tdatacandidates_reports[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacandidates_reports[".originalPagesByType"] = $tdatacandidates_reports[".pagesByType"];
$tdatacandidates_reports[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacandidates_reports[".originalPages"] = $tdatacandidates_reports[".pages"];
$tdatacandidates_reports[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacandidates_reports[".originalDefaultPages"] = $tdatacandidates_reports[".defaultPages"];

//	field labels
$fieldLabelscandidates_reports = array();
$fieldToolTipscandidates_reports = array();
$pageTitlescandidates_reports = array();
$placeHolderscandidates_reports = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidates_reports["English"] = array();
	$fieldToolTipscandidates_reports["English"] = array();
	$placeHolderscandidates_reports["English"] = array();
	$pageTitlescandidates_reports["English"] = array();
	$fieldLabelscandidates_reports["English"]["CandidateID"] = "Candidates";
	$fieldToolTipscandidates_reports["English"]["CandidateID"] = "";
	$placeHolderscandidates_reports["English"]["CandidateID"] = "";
	$fieldLabelscandidates_reports["English"]["StudentID"] = "Student ID";
	$fieldToolTipscandidates_reports["English"]["StudentID"] = "";
	$placeHolderscandidates_reports["English"]["StudentID"] = "";
	$fieldLabelscandidates_reports["English"]["First_Name"] = "First Name";
	$fieldToolTipscandidates_reports["English"]["First_Name"] = "";
	$placeHolderscandidates_reports["English"]["First_Name"] = "";
	$fieldLabelscandidates_reports["English"]["Middle_Name"] = "Middle Name";
	$fieldToolTipscandidates_reports["English"]["Middle_Name"] = "";
	$placeHolderscandidates_reports["English"]["Middle_Name"] = "";
	$fieldLabelscandidates_reports["English"]["Last_Name"] = "Last Name";
	$fieldToolTipscandidates_reports["English"]["Last_Name"] = "";
	$placeHolderscandidates_reports["English"]["Last_Name"] = "";
	$fieldLabelscandidates_reports["English"]["Sex"] = "Sex";
	$fieldToolTipscandidates_reports["English"]["Sex"] = "";
	$placeHolderscandidates_reports["English"]["Sex"] = "";
	$fieldLabelscandidates_reports["English"]["DOB"] = "DOB";
	$fieldToolTipscandidates_reports["English"]["DOB"] = "";
	$placeHolderscandidates_reports["English"]["DOB"] = "";
	$fieldLabelscandidates_reports["English"]["Region"] = "Region";
	$fieldToolTipscandidates_reports["English"]["Region"] = "";
	$placeHolderscandidates_reports["English"]["Region"] = "";
	$fieldLabelscandidates_reports["English"]["City"] = "City";
	$fieldToolTipscandidates_reports["English"]["City"] = "";
	$placeHolderscandidates_reports["English"]["City"] = "";
	$fieldLabelscandidates_reports["English"]["Sub_City"] = "Sub City";
	$fieldToolTipscandidates_reports["English"]["Sub_City"] = "";
	$placeHolderscandidates_reports["English"]["Sub_City"] = "";
	$fieldLabelscandidates_reports["English"]["Zone"] = "Zone";
	$fieldToolTipscandidates_reports["English"]["Zone"] = "";
	$placeHolderscandidates_reports["English"]["Zone"] = "";
	$fieldLabelscandidates_reports["English"]["House_No"] = "House No";
	$fieldToolTipscandidates_reports["English"]["House_No"] = "";
	$placeHolderscandidates_reports["English"]["House_No"] = "";
	$fieldLabelscandidates_reports["English"]["Phone_Number"] = "Phone Number";
	$fieldToolTipscandidates_reports["English"]["Phone_Number"] = "";
	$placeHolderscandidates_reports["English"]["Phone_Number"] = "";
	$fieldLabelscandidates_reports["English"]["Phone_Number_Alternate"] = "Phone Number Alternate";
	$fieldToolTipscandidates_reports["English"]["Phone_Number_Alternate"] = "";
	$placeHolderscandidates_reports["English"]["Phone_Number_Alternate"] = "";
	$fieldLabelscandidates_reports["English"]["Email_Address"] = "Email Address";
	$fieldToolTipscandidates_reports["English"]["Email_Address"] = "";
	$placeHolderscandidates_reports["English"]["Email_Address"] = "";
	$fieldLabelscandidates_reports["English"]["Disability_Status"] = "Disability Status";
	$fieldToolTipscandidates_reports["English"]["Disability_Status"] = "";
	$placeHolderscandidates_reports["English"]["Disability_Status"] = "";
	$fieldLabelscandidates_reports["English"]["Disability_Type"] = "Disability Type";
	$fieldToolTipscandidates_reports["English"]["Disability_Type"] = "";
	$placeHolderscandidates_reports["English"]["Disability_Type"] = "";
	$fieldLabelscandidates_reports["English"]["Disability_Type_Other"] = "Disability Type Other";
	$fieldToolTipscandidates_reports["English"]["Disability_Type_Other"] = "";
	$placeHolderscandidates_reports["English"]["Disability_Type_Other"] = "";
	$fieldLabelscandidates_reports["English"]["Institution_Type"] = "Institution Type";
	$fieldToolTipscandidates_reports["English"]["Institution_Type"] = "";
	$placeHolderscandidates_reports["English"]["Institution_Type"] = "";
	$fieldLabelscandidates_reports["English"]["Institution_Name"] = "Institution Name";
	$fieldToolTipscandidates_reports["English"]["Institution_Name"] = "";
	$placeHolderscandidates_reports["English"]["Institution_Name"] = "";
	$fieldLabelscandidates_reports["English"]["Education_Level"] = "Education Level";
	$fieldToolTipscandidates_reports["English"]["Education_Level"] = "";
	$placeHolderscandidates_reports["English"]["Education_Level"] = "";
	$fieldLabelscandidates_reports["English"]["Department"] = "Department";
	$fieldToolTipscandidates_reports["English"]["Department"] = "";
	$placeHolderscandidates_reports["English"]["Department"] = "";
	$fieldLabelscandidates_reports["English"]["Minor"] = "Minor";
	$fieldToolTipscandidates_reports["English"]["Minor"] = "";
	$placeHolderscandidates_reports["English"]["Minor"] = "";
	$fieldLabelscandidates_reports["English"]["Major"] = "Major";
	$fieldToolTipscandidates_reports["English"]["Major"] = "";
	$placeHolderscandidates_reports["English"]["Major"] = "";
	$fieldLabelscandidates_reports["English"]["Enrollement_Type"] = "Enrollement Type";
	$fieldToolTipscandidates_reports["English"]["Enrollement_Type"] = "";
	$placeHolderscandidates_reports["English"]["Enrollement_Type"] = "";
	$fieldLabelscandidates_reports["English"]["Skills"] = "Skills";
	$fieldToolTipscandidates_reports["English"]["Skills"] = "";
	$placeHolderscandidates_reports["English"]["Skills"] = "";
	$fieldLabelscandidates_reports["English"]["Languages"] = "Languages";
	$fieldToolTipscandidates_reports["English"]["Languages"] = "";
	$placeHolderscandidates_reports["English"]["Languages"] = "";
	$fieldLabelscandidates_reports["English"]["English_Proficiency_Level"] = "English Proficiency Level";
	$fieldToolTipscandidates_reports["English"]["English_Proficiency_Level"] = "";
	$placeHolderscandidates_reports["English"]["English_Proficiency_Level"] = "";
	$fieldLabelscandidates_reports["English"]["Industry_Specific_Skills"] = "Industry Specific Skills";
	$fieldToolTipscandidates_reports["English"]["Industry_Specific_Skills"] = "";
	$placeHolderscandidates_reports["English"]["Industry_Specific_Skills"] = "";
	$fieldLabelscandidates_reports["English"]["IT_Related_Skills"] = "IT Related Skills";
	$fieldToolTipscandidates_reports["English"]["IT_Related_Skills"] = "";
	$placeHolderscandidates_reports["English"]["IT_Related_Skills"] = "";
	$fieldLabelscandidates_reports["English"]["Certifications"] = "Certifications";
	$fieldToolTipscandidates_reports["English"]["Certifications"] = "";
	$placeHolderscandidates_reports["English"]["Certifications"] = "";
	$fieldLabelscandidates_reports["English"]["Year_of_graduation"] = "Year Of Graduation";
	$fieldToolTipscandidates_reports["English"]["Year_of_graduation"] = "";
	$placeHolderscandidates_reports["English"]["Year_of_graduation"] = "";
	$fieldLabelscandidates_reports["English"]["Field_Of_Study"] = "Field Of Study";
	$fieldToolTipscandidates_reports["English"]["Field_Of_Study"] = "";
	$placeHolderscandidates_reports["English"]["Field_Of_Study"] = "";
	$fieldLabelscandidates_reports["English"]["GPA"] = "GPA";
	$fieldToolTipscandidates_reports["English"]["GPA"] = "";
	$placeHolderscandidates_reports["English"]["GPA"] = "";
	$fieldLabelscandidates_reports["English"]["Intervention"] = "Intervention";
	$fieldToolTipscandidates_reports["English"]["Intervention"] = "";
	$placeHolderscandidates_reports["English"]["Intervention"] = "";
	$fieldLabelscandidates_reports["English"]["Campaign"] = "Campaign";
	$fieldToolTipscandidates_reports["English"]["Campaign"] = "";
	$placeHolderscandidates_reports["English"]["Campaign"] = "";
	$fieldLabelscandidates_reports["English"]["Attend_Employability_Skill"] = "Attend Employability Skill";
	$fieldToolTipscandidates_reports["English"]["Attend_Employability_Skill"] = "";
	$placeHolderscandidates_reports["English"]["Attend_Employability_Skill"] = "";
	$fieldLabelscandidates_reports["English"]["DAAP_enrolled_1st_Round"] = "DAAP Enrolled 1st Round";
	$fieldToolTipscandidates_reports["English"]["DAAP_enrolled_1st_Round"] = "";
	$placeHolderscandidates_reports["English"]["DAAP_enrolled_1st_Round"] = "";
	$fieldLabelscandidates_reports["English"]["DAAP_Completed"] = "DAAP Completed";
	$fieldToolTipscandidates_reports["English"]["DAAP_Completed"] = "";
	$placeHolderscandidates_reports["English"]["DAAP_Completed"] = "";
	$fieldLabelscandidates_reports["English"]["DAAP_Completed_Courses"] = "DAAP Completed Courses";
	$fieldToolTipscandidates_reports["English"]["DAAP_Completed_Courses"] = "";
	$placeHolderscandidates_reports["English"]["DAAP_Completed_Courses"] = "";
	$fieldLabelscandidates_reports["English"]["Job_Fair_Clinic"] = "Job Fair Clinic";
	$fieldToolTipscandidates_reports["English"]["Job_Fair_Clinic"] = "";
	$placeHolderscandidates_reports["English"]["Job_Fair_Clinic"] = "";
	$fieldLabelscandidates_reports["English"]["Job_Fair"] = "Job Fair";
	$fieldToolTipscandidates_reports["English"]["Job_Fair"] = "";
	$placeHolderscandidates_reports["English"]["Job_Fair"] = "";
	$fieldLabelscandidates_reports["English"]["Exit_Exam_Score"] = "Exit Exam Score";
	$fieldToolTipscandidates_reports["English"]["Exit_Exam_Score"] = "";
	$placeHolderscandidates_reports["English"]["Exit_Exam_Score"] = "";
	$fieldLabelscandidates_reports["English"]["Exit_Exam_Status"] = "Exit Exam Status";
	$fieldToolTipscandidates_reports["English"]["Exit_Exam_Status"] = "";
	$placeHolderscandidates_reports["English"]["Exit_Exam_Status"] = "";
	$fieldLabelscandidates_reports["English"]["DAAP_enrolled_2nd_Round"] = "DAAP Enrolled 2nd Round";
	$fieldToolTipscandidates_reports["English"]["DAAP_enrolled_2nd_Round"] = "";
	$placeHolderscandidates_reports["English"]["DAAP_enrolled_2nd_Round"] = "";
	$fieldLabelscandidates_reports["English"]["Upload_on_Tracker"] = "Upload On Tracker";
	$fieldToolTipscandidates_reports["English"]["Upload_on_Tracker"] = "";
	$placeHolderscandidates_reports["English"]["Upload_on_Tracker"] = "";
	$fieldLabelscandidates_reports["English"]["Work_Experience"] = "Work Experience";
	$fieldToolTipscandidates_reports["English"]["Work_Experience"] = "";
	$placeHolderscandidates_reports["English"]["Work_Experience"] = "";
	$fieldLabelscandidates_reports["English"]["Joined_Dereja_Services"] = "Joined Dereja Services";
	$fieldToolTipscandidates_reports["English"]["Joined_Dereja_Services"] = "";
	$placeHolderscandidates_reports["English"]["Joined_Dereja_Services"] = "";
	$fieldLabelscandidates_reports["English"]["Dereja_Services"] = "Dereja Services";
	$fieldToolTipscandidates_reports["English"]["Dereja_Services"] = "";
	$placeHolderscandidates_reports["English"]["Dereja_Services"] = "";
	$fieldLabelscandidates_reports["English"]["Dereja_Training_Services"] = "Dereja Training Services";
	$fieldToolTipscandidates_reports["English"]["Dereja_Training_Services"] = "";
	$placeHolderscandidates_reports["English"]["Dereja_Training_Services"] = "";
	$fieldLabelscandidates_reports["English"]["Dereja_Event_Services"] = "Dereja Event Services";
	$fieldToolTipscandidates_reports["English"]["Dereja_Event_Services"] = "";
	$placeHolderscandidates_reports["English"]["Dereja_Event_Services"] = "";
	$fieldLabelscandidates_reports["English"]["Dereja_web_profile_completion"] = "Dereja Web Profile Completion";
	$fieldToolTipscandidates_reports["English"]["Dereja_web_profile_completion"] = "";
	$placeHolderscandidates_reports["English"]["Dereja_web_profile_completion"] = "";
	$fieldLabelscandidates_reports["English"]["Dereja_Information_Source"] = "Dereja Information Source";
	$fieldToolTipscandidates_reports["English"]["Dereja_Information_Source"] = "";
	$placeHolderscandidates_reports["English"]["Dereja_Information_Source"] = "";
	$fieldLabelscandidates_reports["English"]["Employment_Status"] = "Employment Status";
	$fieldToolTipscandidates_reports["English"]["Employment_Status"] = "";
	$placeHolderscandidates_reports["English"]["Employment_Status"] = "";
	$fieldLabelscandidates_reports["English"]["Employment_Company"] = "Employment Company";
	$fieldToolTipscandidates_reports["English"]["Employment_Company"] = "";
	$placeHolderscandidates_reports["English"]["Employment_Company"] = "";
	$fieldLabelscandidates_reports["English"]["Employment_Position"] = "Employment Position";
	$fieldToolTipscandidates_reports["English"]["Employment_Position"] = "";
	$placeHolderscandidates_reports["English"]["Employment_Position"] = "";
	$fieldLabelscandidates_reports["English"]["Remark"] = "Remark";
	$fieldToolTipscandidates_reports["English"]["Remark"] = "";
	$placeHolderscandidates_reports["English"]["Remark"] = "";
	if (count($fieldToolTipscandidates_reports["English"]))
		$tdatacandidates_reports[".isUseToolTips"] = true;
}


	$tdatacandidates_reports[".NCSearch"] = true;

	$tdatacandidates_reports[".ChartRefreshTime"] = 0;


$tdatacandidates_reports[".shortTableName"] = "candidates_reports";
$tdatacandidates_reports[".nSecOptions"] = 0;

$tdatacandidates_reports[".mainTableOwnerID"] = "";
$tdatacandidates_reports[".entityType"] = 3;
$tdatacandidates_reports[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidates_reports[".strOriginalTableName"] = "candidates";

	



$tdatacandidates_reports[".showAddInPopup"] = false;

$tdatacandidates_reports[".showEditInPopup"] = false;

$tdatacandidates_reports[".showViewInPopup"] = false;

$tdatacandidates_reports[".listAjax"] = false;
//	temporary
//$tdatacandidates_reports[".listAjax"] = false;

	$tdatacandidates_reports[".audit"] = false;

	$tdatacandidates_reports[".locking"] = false;


$pages = $tdatacandidates_reports[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidates_reports[".edit"] = true;
	$tdatacandidates_reports[".afterEditAction"] = 1;
	$tdatacandidates_reports[".closePopupAfterEdit"] = 1;
	$tdatacandidates_reports[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidates_reports[".add"] = true;
$tdatacandidates_reports[".afterAddAction"] = 1;
$tdatacandidates_reports[".closePopupAfterAdd"] = 1;
$tdatacandidates_reports[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidates_reports[".list"] = true;
}



$tdatacandidates_reports[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidates_reports[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidates_reports[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidates_reports[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidates_reports[".printFriendly"] = true;
}



$tdatacandidates_reports[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidates_reports[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidates_reports[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidates_reports[".isUseAjaxSuggest"] = true;



						

$tdatacandidates_reports[".ajaxCodeSnippetAdded"] = false;

$tdatacandidates_reports[".buttonsAdded"] = false;

$tdatacandidates_reports[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidates_reports[".isUseTimeForSearch"] = false;


$tdatacandidates_reports[".badgeColor"] = "3cb371";


$tdatacandidates_reports[".allSearchFields"] = array();
$tdatacandidates_reports[".filterFields"] = array();
$tdatacandidates_reports[".requiredSearchFields"] = array();

$tdatacandidates_reports[".googleLikeFields"] = array();
$tdatacandidates_reports[".googleLikeFields"][] = "CandidateID";
$tdatacandidates_reports[".googleLikeFields"][] = "StudentID";
$tdatacandidates_reports[".googleLikeFields"][] = "First_Name";
$tdatacandidates_reports[".googleLikeFields"][] = "Middle_Name";
$tdatacandidates_reports[".googleLikeFields"][] = "Last_Name";
$tdatacandidates_reports[".googleLikeFields"][] = "Sex";
$tdatacandidates_reports[".googleLikeFields"][] = "DOB";
$tdatacandidates_reports[".googleLikeFields"][] = "Region";
$tdatacandidates_reports[".googleLikeFields"][] = "City";
$tdatacandidates_reports[".googleLikeFields"][] = "Sub_City";
$tdatacandidates_reports[".googleLikeFields"][] = "Zone";
$tdatacandidates_reports[".googleLikeFields"][] = "House_No";
$tdatacandidates_reports[".googleLikeFields"][] = "Phone_Number";
$tdatacandidates_reports[".googleLikeFields"][] = "Phone_Number_Alternate";
$tdatacandidates_reports[".googleLikeFields"][] = "Email_Address";
$tdatacandidates_reports[".googleLikeFields"][] = "Disability_Status";
$tdatacandidates_reports[".googleLikeFields"][] = "Disability_Type";
$tdatacandidates_reports[".googleLikeFields"][] = "Disability_Type_Other";
$tdatacandidates_reports[".googleLikeFields"][] = "Institution_Type";
$tdatacandidates_reports[".googleLikeFields"][] = "Institution_Name";
$tdatacandidates_reports[".googleLikeFields"][] = "Education_Level";
$tdatacandidates_reports[".googleLikeFields"][] = "Department";
$tdatacandidates_reports[".googleLikeFields"][] = "Minor";
$tdatacandidates_reports[".googleLikeFields"][] = "Major";
$tdatacandidates_reports[".googleLikeFields"][] = "Enrollement_Type";
$tdatacandidates_reports[".googleLikeFields"][] = "Skills";
$tdatacandidates_reports[".googleLikeFields"][] = "Languages";
$tdatacandidates_reports[".googleLikeFields"][] = "English_Proficiency_Level";
$tdatacandidates_reports[".googleLikeFields"][] = "Industry_Specific_Skills";
$tdatacandidates_reports[".googleLikeFields"][] = "IT_Related_Skills";
$tdatacandidates_reports[".googleLikeFields"][] = "Certifications";
$tdatacandidates_reports[".googleLikeFields"][] = "Year_of_graduation";
$tdatacandidates_reports[".googleLikeFields"][] = "Field_Of_Study";
$tdatacandidates_reports[".googleLikeFields"][] = "GPA";
$tdatacandidates_reports[".googleLikeFields"][] = "Intervention";
$tdatacandidates_reports[".googleLikeFields"][] = "Campaign";
$tdatacandidates_reports[".googleLikeFields"][] = "Attend_Employability_Skill";
$tdatacandidates_reports[".googleLikeFields"][] = "DAAP_enrolled_1st Round";
$tdatacandidates_reports[".googleLikeFields"][] = "DAAP_Completed";
$tdatacandidates_reports[".googleLikeFields"][] = "DAAP_Completed_Courses";
$tdatacandidates_reports[".googleLikeFields"][] = "Job_Fair_Clinic";
$tdatacandidates_reports[".googleLikeFields"][] = "Job_Fair";
$tdatacandidates_reports[".googleLikeFields"][] = "Exit_Exam_Score";
$tdatacandidates_reports[".googleLikeFields"][] = "Exit_Exam_Status";
$tdatacandidates_reports[".googleLikeFields"][] = "DAAP_enrolled_2nd_Round";
$tdatacandidates_reports[".googleLikeFields"][] = "Upload_on_Tracker";
$tdatacandidates_reports[".googleLikeFields"][] = "Work_Experience";
$tdatacandidates_reports[".googleLikeFields"][] = "Joined_Dereja_Services";
$tdatacandidates_reports[".googleLikeFields"][] = "Dereja_Services";
$tdatacandidates_reports[".googleLikeFields"][] = "Dereja_Training_Services";
$tdatacandidates_reports[".googleLikeFields"][] = "Dereja_Event_Services";
$tdatacandidates_reports[".googleLikeFields"][] = "Dereja_web_profile_completion";
$tdatacandidates_reports[".googleLikeFields"][] = "Dereja_Information_Source";
$tdatacandidates_reports[".googleLikeFields"][] = "Employment_Status";
$tdatacandidates_reports[".googleLikeFields"][] = "Employment_Company";
$tdatacandidates_reports[".googleLikeFields"][] = "Employment_Position";
$tdatacandidates_reports[".googleLikeFields"][] = "Remark";



$tdatacandidates_reports[".tableType"] = "chart";

$tdatacandidates_reports[".printerPageOrientation"] = 0;
$tdatacandidates_reports[".nPrinterPageScale"] = 100;

$tdatacandidates_reports[".nPrinterSplitRecords"] = 40;

$tdatacandidates_reports[".geocodingEnabled"] = false;



// chart settings
$tdatacandidates_reports[".chartType"] = "Line";
// end of chart settings

$tdatacandidates_reports[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatacandidates_reports[".strOrderBy"] = $tstrOrderBy;

$tdatacandidates_reports[".orderindexes"] = array();


$tdatacandidates_reports[".sqlHead"] = "SELECT CandidateID,  StudentID,  First_Name,  Middle_Name,  Last_Name,  Sex,  DOB,  Region,  City,  Sub_City,  `Zone`,  House_No,  Phone_Number,  Phone_Number_Alternate,  Email_Address,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Institution_Type,  Institution_Name,  Education_Level,  Department,  Minor,  Major,  Enrollement_Type,  Skills,  Languages,  English_Proficiency_Level,  Industry_Specific_Skills,  IT_Related_Skills,  Certifications,  Year_of_graduation,  Field_Of_Study,  GPA,  Intervention,  Campaign,  Attend_Employability_Skill,  `DAAP_enrolled_1st Round`,  DAAP_Completed,  DAAP_Completed_Courses,  Job_Fair_Clinic,  Job_Fair,  Exit_Exam_Score,  Exit_Exam_Status,  DAAP_enrolled_2nd_Round,  Upload_on_Tracker,  Work_Experience,  Joined_Dereja_Services,  Dereja_Services,  Dereja_Training_Services,  Dereja_Event_Services,  Dereja_web_profile_completion,  Dereja_Information_Source,  Employment_Status,  Employment_Company,  Employment_Position,  Remark";
$tdatacandidates_reports[".sqlFrom"] = "FROM candidates";
$tdatacandidates_reports[".sqlWhereExpr"] = "";
$tdatacandidates_reports[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidates_reports[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidates_reports[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidates_reports[".highlightSearchResults"] = true;

$tableKeyscandidates_reports = array();
$tableKeyscandidates_reports[] = "CandidateID";
$tdatacandidates_reports[".Keys"] = $tableKeyscandidates_reports;


$tdatacandidates_reports[".hideMobileList"] = array();




//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","CandidateID");
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


	$tdatacandidates_reports["CandidateID"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "CandidateID";
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","StudentID");
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


	$tdatacandidates_reports["StudentID"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "StudentID";
//	First_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "First_Name";
	$fdata["GoodName"] = "First_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","First_Name");
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


	$tdatacandidates_reports["First_Name"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "First_Name";
//	Middle_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Middle_Name";
	$fdata["GoodName"] = "Middle_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Middle_Name");
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


	$tdatacandidates_reports["Middle_Name"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Middle_Name";
//	Last_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Last_Name";
	$fdata["GoodName"] = "Last_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Last_Name");
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


	$tdatacandidates_reports["Last_Name"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Last_Name";
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Sex");
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


	$tdatacandidates_reports["Sex"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Sex";
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","DOB");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["DOB"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "DOB";
//	Region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Region";
	$fdata["GoodName"] = "Region";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Region");
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


	$tdatacandidates_reports["Region"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Region";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","City");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["City"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "City";
//	Sub_City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Sub_City";
	$fdata["GoodName"] = "Sub_City";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Sub_City");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Sub_City"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Sub_City";
//	Zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Zone";
	$fdata["GoodName"] = "Zone";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Zone");
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


	$tdatacandidates_reports["Zone"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Zone";
//	House_No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "House_No";
	$fdata["GoodName"] = "House_No";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","House_No");
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


	$tdatacandidates_reports["House_No"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "House_No";
//	Phone_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Phone_Number";
	$fdata["GoodName"] = "Phone_Number";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Phone_Number");
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


	$tdatacandidates_reports["Phone_Number"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Phone_Number";
//	Phone_Number_Alternate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Phone_Number_Alternate";
	$fdata["GoodName"] = "Phone_Number_Alternate";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Phone_Number_Alternate");
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


	$tdatacandidates_reports["Phone_Number_Alternate"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Phone_Number_Alternate";
//	Email_Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Email_Address";
	$fdata["GoodName"] = "Email_Address";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Email_Address");
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


	$tdatacandidates_reports["Email_Address"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Email_Address";
//	Disability_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Disability_Status";
	$fdata["GoodName"] = "Disability_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Disability_Status");
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


	$tdatacandidates_reports["Disability_Status"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Disability_Status";
//	Disability_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Disability_Type";
	$fdata["GoodName"] = "Disability_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Disability_Type");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Disability_Type"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Disability_Type";
//	Disability_Type_Other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Disability_Type_Other";
	$fdata["GoodName"] = "Disability_Type_Other";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Disability_Type_Other");
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


	$tdatacandidates_reports["Disability_Type_Other"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Disability_Type_Other";
//	Institution_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Institution_Type";
	$fdata["GoodName"] = "Institution_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Institution_Type");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Institution_Type"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Institution_Type";
//	Institution_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Institution_Name";
	$fdata["GoodName"] = "Institution_Name";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Institution_Name");
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


	$tdatacandidates_reports["Institution_Name"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Institution_Name";
//	Education_Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Education_Level";
	$fdata["GoodName"] = "Education_Level";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Education_Level");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Education_Level"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Education_Level";
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Department");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Department"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Department";
//	Minor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Minor";
	$fdata["GoodName"] = "Minor";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Minor");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Minor"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Minor";
//	Major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Major";
	$fdata["GoodName"] = "Major";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Major");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Major"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Major";
//	Enrollement_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Enrollement_Type";
	$fdata["GoodName"] = "Enrollement_Type";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Enrollement_Type");
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


	$tdatacandidates_reports["Enrollement_Type"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Enrollement_Type";
//	Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Skills";
	$fdata["GoodName"] = "Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Skills");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Skills"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Skills";
//	Languages
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Languages";
	$fdata["GoodName"] = "Languages";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Languages");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Languages"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Languages";
//	English_Proficiency_Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "English_Proficiency_Level";
	$fdata["GoodName"] = "English_Proficiency_Level";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","English_Proficiency_Level");
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


	$tdatacandidates_reports["English_Proficiency_Level"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "English_Proficiency_Level";
//	Industry_Specific_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Industry_Specific_Skills";
	$fdata["GoodName"] = "Industry_Specific_Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Industry_Specific_Skills");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Industry_Specific_Skills"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Industry_Specific_Skills";
//	IT_Related_Skills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "IT_Related_Skills";
	$fdata["GoodName"] = "IT_Related_Skills";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","IT_Related_Skills");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["IT_Related_Skills"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "IT_Related_Skills";
//	Certifications
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Certifications";
	$fdata["GoodName"] = "Certifications";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Certifications");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Certifications"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Certifications";
//	Year_of_graduation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Year_of_graduation";
	$fdata["GoodName"] = "Year_of_graduation";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Year_of_graduation");
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


	$tdatacandidates_reports["Year_of_graduation"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Year_of_graduation";
//	Field_Of_Study
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Field_Of_Study";
	$fdata["GoodName"] = "Field_Of_Study";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Field_Of_Study");
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


	$tdatacandidates_reports["Field_Of_Study"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Field_Of_Study";
//	GPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "GPA";
	$fdata["GoodName"] = "GPA";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","GPA");
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


	$tdatacandidates_reports["GPA"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "GPA";
//	Intervention
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Intervention";
	$fdata["GoodName"] = "Intervention";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Intervention");
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


	$tdatacandidates_reports["Intervention"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Intervention";
//	Campaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Campaign";
	$fdata["GoodName"] = "Campaign";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Campaign");
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


	$tdatacandidates_reports["Campaign"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Campaign";
//	Attend_Employability_Skill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Attend_Employability_Skill";
	$fdata["GoodName"] = "Attend_Employability_Skill";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Attend_Employability_Skill");
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


	$tdatacandidates_reports["Attend_Employability_Skill"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Attend_Employability_Skill";
//	DAAP_enrolled_1st Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DAAP_enrolled_1st Round";
	$fdata["GoodName"] = "DAAP_enrolled_1st_Round";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","DAAP_enrolled_1st_Round");
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


	$tdatacandidates_reports["DAAP_enrolled_1st Round"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "DAAP_enrolled_1st Round";
//	DAAP_Completed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "DAAP_Completed";
	$fdata["GoodName"] = "DAAP_Completed";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","DAAP_Completed");
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


	$tdatacandidates_reports["DAAP_Completed"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "DAAP_Completed";
//	DAAP_Completed_Courses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "DAAP_Completed_Courses";
	$fdata["GoodName"] = "DAAP_Completed_Courses";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","DAAP_Completed_Courses");
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


	$tdatacandidates_reports["DAAP_Completed_Courses"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "DAAP_Completed_Courses";
//	Job_Fair_Clinic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Job_Fair_Clinic";
	$fdata["GoodName"] = "Job_Fair_Clinic";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Job_Fair_Clinic");
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


	$tdatacandidates_reports["Job_Fair_Clinic"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Job_Fair_Clinic";
//	Job_Fair
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Job_Fair";
	$fdata["GoodName"] = "Job_Fair";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Job_Fair");
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


	$tdatacandidates_reports["Job_Fair"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Job_Fair";
//	Exit_Exam_Score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Exit_Exam_Score";
	$fdata["GoodName"] = "Exit_Exam_Score";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Exit_Exam_Score");
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


	$tdatacandidates_reports["Exit_Exam_Score"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Exit_Exam_Score";
//	Exit_Exam_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Exit_Exam_Status";
	$fdata["GoodName"] = "Exit_Exam_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Exit_Exam_Status");
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


	$tdatacandidates_reports["Exit_Exam_Status"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Exit_Exam_Status";
//	DAAP_enrolled_2nd_Round
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DAAP_enrolled_2nd_Round";
	$fdata["GoodName"] = "DAAP_enrolled_2nd_Round";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","DAAP_enrolled_2nd_Round");
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


	$tdatacandidates_reports["DAAP_enrolled_2nd_Round"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "DAAP_enrolled_2nd_Round";
//	Upload_on_Tracker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Upload_on_Tracker";
	$fdata["GoodName"] = "Upload_on_Tracker";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Upload_on_Tracker");
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


	$tdatacandidates_reports["Upload_on_Tracker"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Upload_on_Tracker";
//	Work_Experience
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Work_Experience";
	$fdata["GoodName"] = "Work_Experience";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Work_Experience");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Work_Experience"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Work_Experience";
//	Joined_Dereja_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Joined_Dereja_Services";
	$fdata["GoodName"] = "Joined_Dereja_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Joined_Dereja_Services");
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


	$tdatacandidates_reports["Joined_Dereja_Services"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Joined_Dereja_Services";
//	Dereja_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Dereja_Services";
	$fdata["GoodName"] = "Dereja_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Dereja_Services");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Dereja_Services"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Dereja_Services";
//	Dereja_Training_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Dereja_Training_Services";
	$fdata["GoodName"] = "Dereja_Training_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Dereja_Training_Services");
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


	$tdatacandidates_reports["Dereja_Training_Services"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Dereja_Training_Services";
//	Dereja_Event_Services
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Dereja_Event_Services";
	$fdata["GoodName"] = "Dereja_Event_Services";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Dereja_Event_Services");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Dereja_Event_Services"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Dereja_Event_Services";
//	Dereja_web_profile_completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Dereja_web_profile_completion";
	$fdata["GoodName"] = "Dereja_web_profile_completion";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Dereja_web_profile_completion");
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


	$tdatacandidates_reports["Dereja_web_profile_completion"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Dereja_web_profile_completion";
//	Dereja_Information_Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Dereja_Information_Source";
	$fdata["GoodName"] = "Dereja_Information_Source";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Dereja_Information_Source");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Dereja_Information_Source"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Dereja_Information_Source";
//	Employment_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Employment_Status";
	$fdata["GoodName"] = "Employment_Status";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Employment_Status");
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


	$tdatacandidates_reports["Employment_Status"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Employment_Status";
//	Employment_Company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Employment_Company";
	$fdata["GoodName"] = "Employment_Company";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Employment_Company");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Employment_Company"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Employment_Company";
//	Employment_Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Employment_Position";
	$fdata["GoodName"] = "Employment_Position";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Employment_Position");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatacandidates_reports["Employment_Position"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Employment_Position";
//	Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Remark";
	$fdata["GoodName"] = "Remark";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_reports","Remark");
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


	$tdatacandidates_reports["Remark"] = $fdata;
		$tdatacandidates_reports[".searchableFields"][] = "Remark";

$tdatacandidates_reports[".groupChart"] = true;
$tdatacandidates_reports[".chartLabelInterval"] = 1;
$tdatacandidates_reports[".chartLabelField"] = "Year_of_graduation";
$tdatacandidates_reports[".chartSeries"] = array();
$tdatacandidates_reports[".chartSeries"][] = array(
	"field" => "CandidateID",
	"total" => "COUNT"
);
$tdatacandidates_reports[".chartSeries"][] = array(
	"field" => "Exit_Exam_Score",
	"total" => "COUNT"
);
$tdatacandidates_reports[".chartSeries"][] = array(
	"field" => "GPA",
	"total" => "AVG"
);
	$tdatacandidates_reports[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">candidates_reports</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="0">
			<attr value="name">CandidateID</attr>';
	$tdatacandidates_reports[".chartXml"] .= '</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="1">
			<attr value="name">Exit_Exam_Score</attr>';
	$tdatacandidates_reports[".chartXml"] .= '</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="2">
			<attr value="name">GPA</attr>';
	$tdatacandidates_reports[".chartXml"] .= '</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="3">
		<attr value="name">Year_of_graduation</attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacandidates_reports[".chartXml"] .= '<attr value="head">'.xmlencode("Candidates with Exit Exam Score and GPA By Year Trend").'</attr>
<attr value="foot">'.xmlencode("Year").'</attr>
<attr value="y_axis_label">'.xmlencode("Exam Score and GPA").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatacandidates_reports[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="0">
		<attr value="name">CandidateID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","CandidateID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="1">
		<attr value="name">StudentID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","StudentID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="2">
		<attr value="name">First_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","First_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="3">
		<attr value="name">Middle_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Middle_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="4">
		<attr value="name">Last_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Last_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="5">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="6">
		<attr value="name">DOB</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","DOB")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="7">
		<attr value="name">Region</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Region")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="8">
		<attr value="name">City</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","City")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="9">
		<attr value="name">Sub_City</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Sub_City")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="10">
		<attr value="name">Zone</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Zone")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="11">
		<attr value="name">House_No</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","House_No")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="12">
		<attr value="name">Phone_Number</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Phone_Number")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="13">
		<attr value="name">Phone_Number_Alternate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Phone_Number_Alternate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="14">
		<attr value="name">Email_Address</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Email_Address")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="15">
		<attr value="name">Disability_Status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Disability_Status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="16">
		<attr value="name">Disability_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Disability_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="17">
		<attr value="name">Disability_Type_Other</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Disability_Type_Other")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="18">
		<attr value="name">Institution_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Institution_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="19">
		<attr value="name">Institution_Name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Institution_Name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="20">
		<attr value="name">Education_Level</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Education_Level")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="21">
		<attr value="name">Department</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Department")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="22">
		<attr value="name">Minor</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Minor")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="23">
		<attr value="name">Major</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Major")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="24">
		<attr value="name">Enrollement_Type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Enrollement_Type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="25">
		<attr value="name">Skills</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Skills")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="26">
		<attr value="name">Languages</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Languages")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="27">
		<attr value="name">English_Proficiency_Level</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","English_Proficiency_Level")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="28">
		<attr value="name">Industry_Specific_Skills</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Industry_Specific_Skills")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="29">
		<attr value="name">IT_Related_Skills</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","IT_Related_Skills")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="30">
		<attr value="name">Certifications</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Certifications")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="31">
		<attr value="name">Year_of_graduation</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Year_of_graduation")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="32">
		<attr value="name">Field_Of_Study</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Field_Of_Study")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="33">
		<attr value="name">GPA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","GPA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="34">
		<attr value="name">Intervention</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Intervention")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="35">
		<attr value="name">Campaign</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Campaign")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="36">
		<attr value="name">Attend_Employability_Skill</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Attend_Employability_Skill")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="37">
		<attr value="name">DAAP_enrolled_1st Round</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","DAAP_enrolled_1st_Round")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="38">
		<attr value="name">DAAP_Completed</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","DAAP_Completed")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="39">
		<attr value="name">DAAP_Completed_Courses</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","DAAP_Completed_Courses")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="40">
		<attr value="name">Job_Fair_Clinic</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Job_Fair_Clinic")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="41">
		<attr value="name">Job_Fair</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Job_Fair")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="42">
		<attr value="name">Exit_Exam_Score</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Exit_Exam_Score")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="43">
		<attr value="name">Exit_Exam_Status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Exit_Exam_Status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="44">
		<attr value="name">DAAP_enrolled_2nd_Round</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","DAAP_enrolled_2nd_Round")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="45">
		<attr value="name">Upload_on_Tracker</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Upload_on_Tracker")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="46">
		<attr value="name">Work_Experience</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Work_Experience")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="47">
		<attr value="name">Joined_Dereja_Services</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Joined_Dereja_Services")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="48">
		<attr value="name">Dereja_Services</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Dereja_Services")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="49">
		<attr value="name">Dereja_Training_Services</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Dereja_Training_Services")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="50">
		<attr value="name">Dereja_Event_Services</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Dereja_Event_Services")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="51">
		<attr value="name">Dereja_web_profile_completion</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Dereja_web_profile_completion")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="52">
		<attr value="name">Dereja_Information_Source</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Dereja_Information_Source")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="53">
		<attr value="name">Employment_Status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Employment_Status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="54">
		<attr value="name">Employment_Company</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Employment_Company")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="55">
		<attr value="name">Employment_Position</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Employment_Position")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_reports[".chartXml"] .= '<attr value="56">
		<attr value="name">Remark</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_reports","Remark")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacandidates_reports[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">candidates_reports</attr>
<attr value="short_table_name">candidates_reports</attr>
</attr>

</chart>';

$tables_data["candidates_reports"]=&$tdatacandidates_reports;
$field_labels["candidates_reports"] = &$fieldLabelscandidates_reports;
$fieldToolTips["candidates_reports"] = &$fieldToolTipscandidates_reports;
$placeHolders["candidates_reports"] = &$placeHolderscandidates_reports;
$page_titles["candidates_reports"] = &$pageTitlescandidates_reports;


changeTextControlsToDate( "candidates_reports" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidates_reports"] = array();
//	Candidate_Employment_Tracker
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Candidate_Employment_Tracker";
		$detailsParam["dOriginalTable"] = "Candidate_Employment_Tracker";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "candidate_employment_tracker";
	$detailsParam["dCaptionTable"] = GetTableCaption("Candidate_Employment_Tracker");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["candidates_reports"][$dIndex] = $detailsParam;

	
		$detailsTablesData["candidates_reports"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["candidates_reports"][$dIndex]["masterKeys"][]="CandidateID";

				$detailsTablesData["candidates_reports"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["candidates_reports"][$dIndex]["detailKeys"][]="CandidateID";
//	event_participants
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="event_participants";
		$detailsParam["dOriginalTable"] = "event_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "event_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("event_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["candidates_reports"][$dIndex] = $detailsParam;

	
		$detailsTablesData["candidates_reports"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["candidates_reports"][$dIndex]["masterKeys"][]="CandidateID";

				$detailsTablesData["candidates_reports"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["candidates_reports"][$dIndex]["detailKeys"][]="CandidateID";
//	training_participants
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="training_participants";
		$detailsParam["dOriginalTable"] = "training_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("training_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["candidates_reports"][$dIndex] = $detailsParam;

	
		$detailsTablesData["candidates_reports"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["candidates_reports"][$dIndex]["masterKeys"][]="CandidateID";

				$detailsTablesData["candidates_reports"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["candidates_reports"][$dIndex]["detailKeys"][]="CandidateID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidates_reports"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["candidates_reports"][0] = $masterParams;
				$masterTablesData["candidates_reports"][0]["masterKeys"] = array();
	$masterTablesData["candidates_reports"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["candidates_reports"][0]["detailKeys"] = array();
	$masterTablesData["candidates_reports"][0]["detailKeys"][]="CandidateID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidates_reports()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CandidateID,  StudentID,  First_Name,  Middle_Name,  Last_Name,  Sex,  DOB,  Region,  City,  Sub_City,  `Zone`,  House_No,  Phone_Number,  Phone_Number_Alternate,  Email_Address,  Disability_Status,  Disability_Type,  Disability_Type_Other,  Institution_Type,  Institution_Name,  Education_Level,  Department,  Minor,  Major,  Enrollement_Type,  Skills,  Languages,  English_Proficiency_Level,  Industry_Specific_Skills,  IT_Related_Skills,  Certifications,  Year_of_graduation,  Field_Of_Study,  GPA,  Intervention,  Campaign,  Attend_Employability_Skill,  `DAAP_enrolled_1st Round`,  DAAP_Completed,  DAAP_Completed_Courses,  Job_Fair_Clinic,  Job_Fair,  Exit_Exam_Score,  Exit_Exam_Status,  DAAP_enrolled_2nd_Round,  Upload_on_Tracker,  Work_Experience,  Joined_Dereja_Services,  Dereja_Services,  Dereja_Training_Services,  Dereja_Event_Services,  Dereja_web_profile_completion,  Dereja_Information_Source,  Employment_Status,  Employment_Company,  Employment_Position,  Remark";
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
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto6["m_sql"] = "CandidateID";
$proto6["m_srcTableName"] = "candidates_reports";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto8["m_sql"] = "StudentID";
$proto8["m_srcTableName"] = "candidates_reports";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto10["m_sql"] = "First_Name";
$proto10["m_srcTableName"] = "candidates_reports";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto12["m_sql"] = "Middle_Name";
$proto12["m_srcTableName"] = "candidates_reports";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto14["m_sql"] = "Last_Name";
$proto14["m_srcTableName"] = "candidates_reports";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto16["m_sql"] = "Sex";
$proto16["m_srcTableName"] = "candidates_reports";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto18["m_sql"] = "DOB";
$proto18["m_srcTableName"] = "candidates_reports";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto20["m_sql"] = "Region";
$proto20["m_srcTableName"] = "candidates_reports";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto22["m_sql"] = "City";
$proto22["m_srcTableName"] = "candidates_reports";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Sub_City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto24["m_sql"] = "Sub_City";
$proto24["m_srcTableName"] = "candidates_reports";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto26["m_sql"] = "`Zone`";
$proto26["m_srcTableName"] = "candidates_reports";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "House_No",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto28["m_sql"] = "House_No";
$proto28["m_srcTableName"] = "candidates_reports";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto30["m_sql"] = "Phone_Number";
$proto30["m_srcTableName"] = "candidates_reports";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone_Number_Alternate",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto32["m_sql"] = "Phone_Number_Alternate";
$proto32["m_srcTableName"] = "candidates_reports";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto34["m_sql"] = "Email_Address";
$proto34["m_srcTableName"] = "candidates_reports";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto36["m_sql"] = "Disability_Status";
$proto36["m_srcTableName"] = "candidates_reports";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto38["m_sql"] = "Disability_Type";
$proto38["m_srcTableName"] = "candidates_reports";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto40["m_sql"] = "Disability_Type_Other";
$proto40["m_srcTableName"] = "candidates_reports";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto42["m_sql"] = "Institution_Type";
$proto42["m_srcTableName"] = "candidates_reports";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto44["m_sql"] = "Institution_Name";
$proto44["m_srcTableName"] = "candidates_reports";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Education_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto46["m_sql"] = "Education_Level";
$proto46["m_srcTableName"] = "candidates_reports";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto48["m_sql"] = "Department";
$proto48["m_srcTableName"] = "candidates_reports";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Minor",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto50["m_sql"] = "Minor";
$proto50["m_srcTableName"] = "candidates_reports";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto52["m_sql"] = "Major";
$proto52["m_srcTableName"] = "candidates_reports";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Enrollement_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto54["m_sql"] = "Enrollement_Type";
$proto54["m_srcTableName"] = "candidates_reports";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto56["m_sql"] = "Skills";
$proto56["m_srcTableName"] = "candidates_reports";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Languages",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto58["m_sql"] = "Languages";
$proto58["m_srcTableName"] = "candidates_reports";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "English_Proficiency_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto60["m_sql"] = "English_Proficiency_Level";
$proto60["m_srcTableName"] = "candidates_reports";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Industry_Specific_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto62["m_sql"] = "Industry_Specific_Skills";
$proto62["m_srcTableName"] = "candidates_reports";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "IT_Related_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto64["m_sql"] = "IT_Related_Skills";
$proto64["m_srcTableName"] = "candidates_reports";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Certifications",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto66["m_sql"] = "Certifications";
$proto66["m_srcTableName"] = "candidates_reports";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Year_of_graduation",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto68["m_sql"] = "Year_of_graduation";
$proto68["m_srcTableName"] = "candidates_reports";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Field_Of_Study",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto70["m_sql"] = "Field_Of_Study";
$proto70["m_srcTableName"] = "candidates_reports";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "GPA",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto72["m_sql"] = "GPA";
$proto72["m_srcTableName"] = "candidates_reports";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Intervention",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto74["m_sql"] = "Intervention";
$proto74["m_srcTableName"] = "candidates_reports";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Campaign",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto76["m_sql"] = "Campaign";
$proto76["m_srcTableName"] = "candidates_reports";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Attend_Employability_Skill",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto78["m_sql"] = "Attend_Employability_Skill";
$proto78["m_srcTableName"] = "candidates_reports";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_1st Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto80["m_sql"] = "`DAAP_enrolled_1st Round`";
$proto80["m_srcTableName"] = "candidates_reports";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto82["m_sql"] = "DAAP_Completed";
$proto82["m_srcTableName"] = "candidates_reports";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed_Courses",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto84["m_sql"] = "DAAP_Completed_Courses";
$proto84["m_srcTableName"] = "candidates_reports";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Fair_Clinic",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto86["m_sql"] = "Job_Fair_Clinic";
$proto86["m_srcTableName"] = "candidates_reports";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Fair",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto88["m_sql"] = "Job_Fair";
$proto88["m_srcTableName"] = "candidates_reports";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Score",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto90["m_sql"] = "Exit_Exam_Score";
$proto90["m_srcTableName"] = "candidates_reports";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto92["m_sql"] = "Exit_Exam_Status";
$proto92["m_srcTableName"] = "candidates_reports";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_2nd_Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto94["m_sql"] = "DAAP_enrolled_2nd_Round";
$proto94["m_srcTableName"] = "candidates_reports";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Upload_on_Tracker",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto96["m_sql"] = "Upload_on_Tracker";
$proto96["m_srcTableName"] = "candidates_reports";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Work_Experience",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto98["m_sql"] = "Work_Experience";
$proto98["m_srcTableName"] = "candidates_reports";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Joined_Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto100["m_sql"] = "Joined_Dereja_Services";
$proto100["m_srcTableName"] = "candidates_reports";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto102["m_sql"] = "Dereja_Services";
$proto102["m_srcTableName"] = "candidates_reports";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Training_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto104["m_sql"] = "Dereja_Training_Services";
$proto104["m_srcTableName"] = "candidates_reports";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Event_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto106["m_sql"] = "Dereja_Event_Services";
$proto106["m_srcTableName"] = "candidates_reports";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_web_profile_completion",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto108["m_sql"] = "Dereja_web_profile_completion";
$proto108["m_srcTableName"] = "candidates_reports";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Dereja_Information_Source",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto110["m_sql"] = "Dereja_Information_Source";
$proto110["m_srcTableName"] = "candidates_reports";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto112["m_sql"] = "Employment_Status";
$proto112["m_srcTableName"] = "candidates_reports";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Company",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto114["m_sql"] = "Employment_Company";
$proto114["m_srcTableName"] = "candidates_reports";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Employment_Position",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto116["m_sql"] = "Employment_Position";
$proto116["m_srcTableName"] = "candidates_reports";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Remark",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto118["m_sql"] = "Remark";
$proto118["m_srcTableName"] = "candidates_reports";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto120=array();
$proto120["m_link"] = "SQLL_MAIN";
			$proto121=array();
$proto121["m_strName"] = "candidates";
$proto121["m_srcTableName"] = "candidates_reports";
$proto121["m_columns"] = array();
$proto121["m_columns"][] = "CandidateID";
$proto121["m_columns"][] = "StudentID";
$proto121["m_columns"][] = "First_Name";
$proto121["m_columns"][] = "Middle_Name";
$proto121["m_columns"][] = "Last_Name";
$proto121["m_columns"][] = "Sex";
$proto121["m_columns"][] = "DOB";
$proto121["m_columns"][] = "Region";
$proto121["m_columns"][] = "City";
$proto121["m_columns"][] = "Sub_City";
$proto121["m_columns"][] = "Zone";
$proto121["m_columns"][] = "Woreda";
$proto121["m_columns"][] = "Kebele";
$proto121["m_columns"][] = "House_No";
$proto121["m_columns"][] = "Phone_Number";
$proto121["m_columns"][] = "Phone_Number_Alternate";
$proto121["m_columns"][] = "Email_Address";
$proto121["m_columns"][] = "Disability_Status";
$proto121["m_columns"][] = "Disability_Type";
$proto121["m_columns"][] = "Disability_Type_Other";
$proto121["m_columns"][] = "Institution_Type";
$proto121["m_columns"][] = "Institution_Name";
$proto121["m_columns"][] = "Education_Level";
$proto121["m_columns"][] = "Department";
$proto121["m_columns"][] = "Minor";
$proto121["m_columns"][] = "Major";
$proto121["m_columns"][] = "Enrollement_Type";
$proto121["m_columns"][] = "Skills";
$proto121["m_columns"][] = "Languages";
$proto121["m_columns"][] = "English_Proficiency_Level";
$proto121["m_columns"][] = "Industry_Specific_Skills";
$proto121["m_columns"][] = "IT_Related_Skills";
$proto121["m_columns"][] = "Certifications";
$proto121["m_columns"][] = "Year_of_graduation";
$proto121["m_columns"][] = "Field_Of_Study";
$proto121["m_columns"][] = "GPA";
$proto121["m_columns"][] = "Intervention";
$proto121["m_columns"][] = "Campaign";
$proto121["m_columns"][] = "Attend_Employability_Skill";
$proto121["m_columns"][] = "DAAP_enrolled_1st Round";
$proto121["m_columns"][] = "DAAP_Completed";
$proto121["m_columns"][] = "DAAP_Completed_Courses";
$proto121["m_columns"][] = "Job_Fair_Clinic";
$proto121["m_columns"][] = "Job_Fair";
$proto121["m_columns"][] = "Exit_Exam_Score";
$proto121["m_columns"][] = "Exit_Exam_Status";
$proto121["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto121["m_columns"][] = "Upload_on_Tracker";
$proto121["m_columns"][] = "Upload_on_Website";
$proto121["m_columns"][] = "Work_Experience";
$proto121["m_columns"][] = "Joined_Dereja_Services";
$proto121["m_columns"][] = "Dereja_Services";
$proto121["m_columns"][] = "Dereja_Training_Services";
$proto121["m_columns"][] = "Dereja_Event_Services";
$proto121["m_columns"][] = "Dereja_web_profile_completion";
$proto121["m_columns"][] = "Dereja_Information_Source";
$proto121["m_columns"][] = "Employment_Status";
$proto121["m_columns"][] = "Employment_Company";
$proto121["m_columns"][] = "Employer_Sector";
$proto121["m_columns"][] = "Employment_Position";
$proto121["m_columns"][] = "Salary";
$proto121["m_columns"][] = "Career_Level_Of_Payment";
$proto121["m_columns"][] = "Placement_Type";
$proto121["m_columns"][] = "Placement_Duration";
$proto121["m_columns"][] = "Remark";
$proto121["m_columns"][] = "Date";
$obj = new SQLTable($proto121);

$proto120["m_table"] = $obj;
$proto120["m_sql"] = "candidates";
$proto120["m_alias"] = "";
$proto120["m_srcTableName"] = "candidates_reports";
$proto122=array();
$proto122["m_sql"] = "";
$proto122["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto122["m_column"]=$obj;
$proto122["m_contained"] = array();
$proto122["m_strCase"] = "";
$proto122["m_havingmode"] = false;
$proto122["m_inBrackets"] = false;
$proto122["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto122);

$proto120["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto120);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto124=array();
						$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto124["m_column"]=$obj;
$obj = new SQLGroupByItem($proto124);

$proto0["m_groupby"][]=$obj;
												$proto126=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto126["m_column"]=$obj;
$obj = new SQLGroupByItem($proto126);

$proto0["m_groupby"][]=$obj;
												$proto128=array();
						$obj = new SQLField(array(
	"m_strName" => "First_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto128["m_column"]=$obj;
$obj = new SQLGroupByItem($proto128);

$proto0["m_groupby"][]=$obj;
												$proto130=array();
						$obj = new SQLField(array(
	"m_strName" => "Middle_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto130["m_column"]=$obj;
$obj = new SQLGroupByItem($proto130);

$proto0["m_groupby"][]=$obj;
												$proto132=array();
						$obj = new SQLField(array(
	"m_strName" => "Last_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto132["m_column"]=$obj;
$obj = new SQLGroupByItem($proto132);

$proto0["m_groupby"][]=$obj;
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto134["m_column"]=$obj;
$obj = new SQLGroupByItem($proto134);

$proto0["m_groupby"][]=$obj;
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto136["m_column"]=$obj;
$obj = new SQLGroupByItem($proto136);

$proto0["m_groupby"][]=$obj;
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "Region",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto138["m_column"]=$obj;
$obj = new SQLGroupByItem($proto138);

$proto0["m_groupby"][]=$obj;
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto140["m_column"]=$obj;
$obj = new SQLGroupByItem($proto140);

$proto0["m_groupby"][]=$obj;
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "Sub_City",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto142["m_column"]=$obj;
$obj = new SQLGroupByItem($proto142);

$proto0["m_groupby"][]=$obj;
												$proto144=array();
						$obj = new SQLField(array(
	"m_strName" => "Zone",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto144["m_column"]=$obj;
$obj = new SQLGroupByItem($proto144);

$proto0["m_groupby"][]=$obj;
												$proto146=array();
						$obj = new SQLField(array(
	"m_strName" => "House_No",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto146["m_column"]=$obj;
$obj = new SQLGroupByItem($proto146);

$proto0["m_groupby"][]=$obj;
												$proto148=array();
						$obj = new SQLField(array(
	"m_strName" => "Phone_Number",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto148["m_column"]=$obj;
$obj = new SQLGroupByItem($proto148);

$proto0["m_groupby"][]=$obj;
												$proto150=array();
						$obj = new SQLField(array(
	"m_strName" => "Phone_Number_Alternate",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto150["m_column"]=$obj;
$obj = new SQLGroupByItem($proto150);

$proto0["m_groupby"][]=$obj;
												$proto152=array();
						$obj = new SQLField(array(
	"m_strName" => "Email_Address",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto152["m_column"]=$obj;
$obj = new SQLGroupByItem($proto152);

$proto0["m_groupby"][]=$obj;
												$proto154=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto154["m_column"]=$obj;
$obj = new SQLGroupByItem($proto154);

$proto0["m_groupby"][]=$obj;
												$proto156=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto156["m_column"]=$obj;
$obj = new SQLGroupByItem($proto156);

$proto0["m_groupby"][]=$obj;
												$proto158=array();
						$obj = new SQLField(array(
	"m_strName" => "Disability_Type_Other",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto158["m_column"]=$obj;
$obj = new SQLGroupByItem($proto158);

$proto0["m_groupby"][]=$obj;
												$proto160=array();
						$obj = new SQLField(array(
	"m_strName" => "Institution_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto160["m_column"]=$obj;
$obj = new SQLGroupByItem($proto160);

$proto0["m_groupby"][]=$obj;
												$proto162=array();
						$obj = new SQLField(array(
	"m_strName" => "Institution_Name",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto162["m_column"]=$obj;
$obj = new SQLGroupByItem($proto162);

$proto0["m_groupby"][]=$obj;
												$proto164=array();
						$obj = new SQLField(array(
	"m_strName" => "Education_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto164["m_column"]=$obj;
$obj = new SQLGroupByItem($proto164);

$proto0["m_groupby"][]=$obj;
												$proto166=array();
						$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto166["m_column"]=$obj;
$obj = new SQLGroupByItem($proto166);

$proto0["m_groupby"][]=$obj;
												$proto168=array();
						$obj = new SQLField(array(
	"m_strName" => "Minor",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto168["m_column"]=$obj;
$obj = new SQLGroupByItem($proto168);

$proto0["m_groupby"][]=$obj;
												$proto170=array();
						$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto170["m_column"]=$obj;
$obj = new SQLGroupByItem($proto170);

$proto0["m_groupby"][]=$obj;
												$proto172=array();
						$obj = new SQLField(array(
	"m_strName" => "Enrollement_Type",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto172["m_column"]=$obj;
$obj = new SQLGroupByItem($proto172);

$proto0["m_groupby"][]=$obj;
												$proto174=array();
						$obj = new SQLField(array(
	"m_strName" => "Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto174["m_column"]=$obj;
$obj = new SQLGroupByItem($proto174);

$proto0["m_groupby"][]=$obj;
												$proto176=array();
						$obj = new SQLField(array(
	"m_strName" => "Languages",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto176["m_column"]=$obj;
$obj = new SQLGroupByItem($proto176);

$proto0["m_groupby"][]=$obj;
												$proto178=array();
						$obj = new SQLField(array(
	"m_strName" => "English_Proficiency_Level",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto178["m_column"]=$obj;
$obj = new SQLGroupByItem($proto178);

$proto0["m_groupby"][]=$obj;
												$proto180=array();
						$obj = new SQLField(array(
	"m_strName" => "Industry_Specific_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto180["m_column"]=$obj;
$obj = new SQLGroupByItem($proto180);

$proto0["m_groupby"][]=$obj;
												$proto182=array();
						$obj = new SQLField(array(
	"m_strName" => "IT_Related_Skills",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto182["m_column"]=$obj;
$obj = new SQLGroupByItem($proto182);

$proto0["m_groupby"][]=$obj;
												$proto184=array();
						$obj = new SQLField(array(
	"m_strName" => "Certifications",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto184["m_column"]=$obj;
$obj = new SQLGroupByItem($proto184);

$proto0["m_groupby"][]=$obj;
												$proto186=array();
						$obj = new SQLField(array(
	"m_strName" => "Year_of_graduation",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto186["m_column"]=$obj;
$obj = new SQLGroupByItem($proto186);

$proto0["m_groupby"][]=$obj;
												$proto188=array();
						$obj = new SQLField(array(
	"m_strName" => "Field_Of_Study",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto188["m_column"]=$obj;
$obj = new SQLGroupByItem($proto188);

$proto0["m_groupby"][]=$obj;
												$proto190=array();
						$obj = new SQLField(array(
	"m_strName" => "GPA",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto190["m_column"]=$obj;
$obj = new SQLGroupByItem($proto190);

$proto0["m_groupby"][]=$obj;
												$proto192=array();
						$obj = new SQLField(array(
	"m_strName" => "Intervention",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto192["m_column"]=$obj;
$obj = new SQLGroupByItem($proto192);

$proto0["m_groupby"][]=$obj;
												$proto194=array();
						$obj = new SQLField(array(
	"m_strName" => "Campaign",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto194["m_column"]=$obj;
$obj = new SQLGroupByItem($proto194);

$proto0["m_groupby"][]=$obj;
												$proto196=array();
						$obj = new SQLField(array(
	"m_strName" => "Attend_Employability_Skill",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto196["m_column"]=$obj;
$obj = new SQLGroupByItem($proto196);

$proto0["m_groupby"][]=$obj;
												$proto198=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_1st Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto198["m_column"]=$obj;
$obj = new SQLGroupByItem($proto198);

$proto0["m_groupby"][]=$obj;
												$proto200=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto200["m_column"]=$obj;
$obj = new SQLGroupByItem($proto200);

$proto0["m_groupby"][]=$obj;
												$proto202=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_Completed_Courses",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto202["m_column"]=$obj;
$obj = new SQLGroupByItem($proto202);

$proto0["m_groupby"][]=$obj;
												$proto204=array();
						$obj = new SQLField(array(
	"m_strName" => "Job_Fair_Clinic",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto204["m_column"]=$obj;
$obj = new SQLGroupByItem($proto204);

$proto0["m_groupby"][]=$obj;
												$proto206=array();
						$obj = new SQLField(array(
	"m_strName" => "Job_Fair",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto206["m_column"]=$obj;
$obj = new SQLGroupByItem($proto206);

$proto0["m_groupby"][]=$obj;
												$proto208=array();
						$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Score",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto208["m_column"]=$obj;
$obj = new SQLGroupByItem($proto208);

$proto0["m_groupby"][]=$obj;
												$proto210=array();
						$obj = new SQLField(array(
	"m_strName" => "Exit_Exam_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto210["m_column"]=$obj;
$obj = new SQLGroupByItem($proto210);

$proto0["m_groupby"][]=$obj;
												$proto212=array();
						$obj = new SQLField(array(
	"m_strName" => "DAAP_enrolled_2nd_Round",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto212["m_column"]=$obj;
$obj = new SQLGroupByItem($proto212);

$proto0["m_groupby"][]=$obj;
												$proto214=array();
						$obj = new SQLField(array(
	"m_strName" => "Upload_on_Tracker",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto214["m_column"]=$obj;
$obj = new SQLGroupByItem($proto214);

$proto0["m_groupby"][]=$obj;
												$proto216=array();
						$obj = new SQLField(array(
	"m_strName" => "Work_Experience",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto216["m_column"]=$obj;
$obj = new SQLGroupByItem($proto216);

$proto0["m_groupby"][]=$obj;
												$proto218=array();
						$obj = new SQLField(array(
	"m_strName" => "Joined_Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto218["m_column"]=$obj;
$obj = new SQLGroupByItem($proto218);

$proto0["m_groupby"][]=$obj;
												$proto220=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto220["m_column"]=$obj;
$obj = new SQLGroupByItem($proto220);

$proto0["m_groupby"][]=$obj;
												$proto222=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Training_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto222["m_column"]=$obj;
$obj = new SQLGroupByItem($proto222);

$proto0["m_groupby"][]=$obj;
												$proto224=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Event_Services",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto224["m_column"]=$obj;
$obj = new SQLGroupByItem($proto224);

$proto0["m_groupby"][]=$obj;
												$proto226=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_web_profile_completion",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto226["m_column"]=$obj;
$obj = new SQLGroupByItem($proto226);

$proto0["m_groupby"][]=$obj;
												$proto228=array();
						$obj = new SQLField(array(
	"m_strName" => "Dereja_Information_Source",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto228["m_column"]=$obj;
$obj = new SQLGroupByItem($proto228);

$proto0["m_groupby"][]=$obj;
												$proto230=array();
						$obj = new SQLField(array(
	"m_strName" => "Employment_Status",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto230["m_column"]=$obj;
$obj = new SQLGroupByItem($proto230);

$proto0["m_groupby"][]=$obj;
												$proto232=array();
						$obj = new SQLField(array(
	"m_strName" => "Employment_Company",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto232["m_column"]=$obj;
$obj = new SQLGroupByItem($proto232);

$proto0["m_groupby"][]=$obj;
												$proto234=array();
						$obj = new SQLField(array(
	"m_strName" => "Employment_Position",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto234["m_column"]=$obj;
$obj = new SQLGroupByItem($proto234);

$proto0["m_groupby"][]=$obj;
												$proto236=array();
						$obj = new SQLField(array(
	"m_strName" => "Remark",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_reports"
));

$proto236["m_column"]=$obj;
$obj = new SQLGroupByItem($proto236);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="candidates_reports";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidates_reports = createSqlQuery_candidates_reports();


	
																								;

																																																									

$tdatacandidates_reports[".sqlquery"] = $queryData_candidates_reports;



$tdatacandidates_reports[".hasEvents"] = false;

?>