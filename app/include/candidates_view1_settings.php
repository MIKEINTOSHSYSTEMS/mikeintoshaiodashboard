<?php
$tdatacandidates_view1 = array();
$tdatacandidates_view1[".searchableFields"] = array();
$tdatacandidates_view1[".ShortName"] = "candidates_view1";
$tdatacandidates_view1[".OwnerID"] = "";
$tdatacandidates_view1[".OriginalTable"] = "candidates";


$tdatacandidates_view1[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatacandidates_view1[".originalPagesByType"] = $tdatacandidates_view1[".pagesByType"];
$tdatacandidates_view1[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatacandidates_view1[".originalPages"] = $tdatacandidates_view1[".pages"];
$tdatacandidates_view1[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatacandidates_view1[".originalDefaultPages"] = $tdatacandidates_view1[".defaultPages"];

//	field labels
$fieldLabelscandidates_view1 = array();
$fieldToolTipscandidates_view1 = array();
$pageTitlescandidates_view1 = array();
$placeHolderscandidates_view1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidates_view1["English"] = array();
	$fieldToolTipscandidates_view1["English"] = array();
	$placeHolderscandidates_view1["English"] = array();
	$pageTitlescandidates_view1["English"] = array();
	$fieldLabelscandidates_view1["English"]["Sex"] = "Sex";
	$fieldToolTipscandidates_view1["English"]["Sex"] = "";
	$placeHolderscandidates_view1["English"]["Sex"] = "";
	$fieldLabelscandidates_view1["English"]["count"] = "Count";
	$fieldToolTipscandidates_view1["English"]["count"] = "";
	$placeHolderscandidates_view1["English"]["count"] = "";
	if (count($fieldToolTipscandidates_view1["English"]))
		$tdatacandidates_view1[".isUseToolTips"] = true;
}


	$tdatacandidates_view1[".NCSearch"] = true;

	$tdatacandidates_view1[".ChartRefreshTime"] = 0;


$tdatacandidates_view1[".shortTableName"] = "candidates_view1";
$tdatacandidates_view1[".nSecOptions"] = 0;

$tdatacandidates_view1[".mainTableOwnerID"] = "";
$tdatacandidates_view1[".entityType"] = 3;
$tdatacandidates_view1[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidates_view1[".strOriginalTableName"] = "candidates";

	



$tdatacandidates_view1[".showAddInPopup"] = false;

$tdatacandidates_view1[".showEditInPopup"] = false;

$tdatacandidates_view1[".showViewInPopup"] = false;

$tdatacandidates_view1[".listAjax"] = false;
//	temporary
//$tdatacandidates_view1[".listAjax"] = false;

	$tdatacandidates_view1[".audit"] = false;

	$tdatacandidates_view1[".locking"] = false;


$pages = $tdatacandidates_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidates_view1[".edit"] = true;
	$tdatacandidates_view1[".afterEditAction"] = 1;
	$tdatacandidates_view1[".closePopupAfterEdit"] = 1;
	$tdatacandidates_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidates_view1[".add"] = true;
$tdatacandidates_view1[".afterAddAction"] = 1;
$tdatacandidates_view1[".closePopupAfterAdd"] = 1;
$tdatacandidates_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidates_view1[".list"] = true;
}



$tdatacandidates_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidates_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidates_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidates_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidates_view1[".printFriendly"] = true;
}



$tdatacandidates_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidates_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidates_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidates_view1[".isUseAjaxSuggest"] = true;



			

$tdatacandidates_view1[".ajaxCodeSnippetAdded"] = false;

$tdatacandidates_view1[".buttonsAdded"] = false;

$tdatacandidates_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidates_view1[".isUseTimeForSearch"] = false;


$tdatacandidates_view1[".badgeColor"] = "8FBC8B";


$tdatacandidates_view1[".allSearchFields"] = array();
$tdatacandidates_view1[".filterFields"] = array();
$tdatacandidates_view1[".requiredSearchFields"] = array();

$tdatacandidates_view1[".googleLikeFields"] = array();
$tdatacandidates_view1[".googleLikeFields"][] = "Sex";
$tdatacandidates_view1[".googleLikeFields"][] = "count";



$tdatacandidates_view1[".tableType"] = "chart";

$tdatacandidates_view1[".printerPageOrientation"] = 0;
$tdatacandidates_view1[".nPrinterPageScale"] = 100;

$tdatacandidates_view1[".nPrinterSplitRecords"] = 40;

$tdatacandidates_view1[".geocodingEnabled"] = false;



// chart settings
$tdatacandidates_view1[".chartType"] = "Combined";
// end of chart settings

$tdatacandidates_view1[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY
  `candidates`.`Sex` ASC";
$tdatacandidates_view1[".strOrderBy"] = $tstrOrderBy;

$tdatacandidates_view1[".orderindexes"] = array();
	$tdatacandidates_view1[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Sex");



$tdatacandidates_view1[".sqlHead"] = "SELECT `candidates`.`Sex` AS `Sex`,    COUNT(*) AS `count`";
$tdatacandidates_view1[".sqlFrom"] = "FROM    `candidates`";
$tdatacandidates_view1[".sqlWhereExpr"] = "";
$tdatacandidates_view1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidates_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidates_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidates_view1[".highlightSearchResults"] = true;

$tableKeyscandidates_view1 = array();
$tdatacandidates_view1[".Keys"] = $tableKeyscandidates_view1;


$tdatacandidates_view1[".hideMobileList"] = array();




//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_view1","Sex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sex";

		$fdata["sourceSingle"] = "Sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`candidates`.`Sex`";

	
	
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


	$tdatacandidates_view1["Sex"] = $fdata;
		$tdatacandidates_view1[".searchableFields"][] = "Sex";
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_view1","count");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "count";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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


	$tdatacandidates_view1["count"] = $fdata;
		$tdatacandidates_view1[".searchableFields"][] = "count";

$tdatacandidates_view1[".groupChart"] = true;
$tdatacandidates_view1[".chartLabelInterval"] = 0;
$tdatacandidates_view1[".chartLabelField"] = "Sex";
$tdatacandidates_view1[".chartSeries"] = array();
$tdatacandidates_view1[".chartSeries"][] = array(
	"field" => "count",
	"total" => "COUNT"
);
	$tdatacandidates_view1[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">candidates_view1</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdatacandidates_view1[".chartXml"] .= '<attr value="0">
			<attr value="name">count</attr>';
	$tdatacandidates_view1[".chartXml"] .= '</attr>';
	$tdatacandidates_view1[".chartXml"] .= '<attr value="1">
		<attr value="name">Sex</attr>
	</attr>';
	$tdatacandidates_view1[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacandidates_view1[".chartXml"] .= '<attr value="head">'.xmlencode("Number of Candidates By Gender").'</attr>
<attr value="foot">'.xmlencode("Candidates By Sex").'</attr>
<attr value="y_axis_label">'.xmlencode("GPA").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatacandidates_view1[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacandidates_view1[".chartXml"] .= '<attr value="0">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_view1","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_view1[".chartXml"] .= '<attr value="1">
		<attr value="name">count</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_view1","count")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacandidates_view1[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">candidates_view1</attr>
<attr value="short_table_name">candidates_view1</attr>
</attr>

</chart>';

$tables_data["candidates_view1"]=&$tdatacandidates_view1;
$field_labels["candidates_view1"] = &$fieldLabelscandidates_view1;
$fieldToolTips["candidates_view1"] = &$fieldToolTipscandidates_view1;
$placeHolders["candidates_view1"] = &$placeHolderscandidates_view1;
$page_titles["candidates_view1"] = &$pageTitlescandidates_view1;


changeTextControlsToDate( "candidates_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidates_view1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidates_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidates_view1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`candidates`.`Sex` AS `Sex`,    COUNT(*) AS `count`";
$proto0["m_strFrom"] = "FROM    `candidates`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY    `candidates`.`Sex` ASC";
	
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
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_view1"
));

$proto6["m_sql"] = "`candidates`.`Sex`";
$proto6["m_srcTableName"] = "candidates_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Sex";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "COUNT(*)";
$proto8["m_srcTableName"] = "candidates_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "count";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "candidates";
$proto12["m_srcTableName"] = "candidates_view1";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "CandidateID";
$proto12["m_columns"][] = "StudentID";
$proto12["m_columns"][] = "First_Name";
$proto12["m_columns"][] = "Middle_Name";
$proto12["m_columns"][] = "Last_Name";
$proto12["m_columns"][] = "Sex";
$proto12["m_columns"][] = "DOB";
$proto12["m_columns"][] = "Region";
$proto12["m_columns"][] = "City";
$proto12["m_columns"][] = "Sub_City";
$proto12["m_columns"][] = "Zone";
$proto12["m_columns"][] = "House_No";
$proto12["m_columns"][] = "Phone_Number";
$proto12["m_columns"][] = "Phone_Number_Alternate";
$proto12["m_columns"][] = "Email_Address";
$proto12["m_columns"][] = "Disability_Status";
$proto12["m_columns"][] = "Disability_Type";
$proto12["m_columns"][] = "Disability_Type_Other";
$proto12["m_columns"][] = "Institution_Type";
$proto12["m_columns"][] = "Institution_Name";
$proto12["m_columns"][] = "Education_Level";
$proto12["m_columns"][] = "Department";
$proto12["m_columns"][] = "Minor";
$proto12["m_columns"][] = "Major";
$proto12["m_columns"][] = "Enrollement_Type";
$proto12["m_columns"][] = "Skills";
$proto12["m_columns"][] = "Languages";
$proto12["m_columns"][] = "English_Proficiency_Level";
$proto12["m_columns"][] = "Industry_Specific_Skills";
$proto12["m_columns"][] = "IT_Related_Skills";
$proto12["m_columns"][] = "Certifications";
$proto12["m_columns"][] = "Year_of_graduation";
$proto12["m_columns"][] = "Field_Of_Study";
$proto12["m_columns"][] = "GPA";
$proto12["m_columns"][] = "Intervention";
$proto12["m_columns"][] = "Campaign";
$proto12["m_columns"][] = "Attend_Employability_Skill";
$proto12["m_columns"][] = "DAAP_enrolled_1st Round";
$proto12["m_columns"][] = "DAAP_Completed";
$proto12["m_columns"][] = "DAAP_Completed_Courses";
$proto12["m_columns"][] = "Job_Fair_Clinic";
$proto12["m_columns"][] = "Job_Fair";
$proto12["m_columns"][] = "Exit_Exam_Score";
$proto12["m_columns"][] = "Exit_Exam_Status";
$proto12["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto12["m_columns"][] = "Upload_on_Tracker";
$proto12["m_columns"][] = "Work_Experience";
$proto12["m_columns"][] = "Joined_Dereja_Services";
$proto12["m_columns"][] = "Dereja_Services";
$proto12["m_columns"][] = "Dereja_Training_Services";
$proto12["m_columns"][] = "Dereja_Event_Services";
$proto12["m_columns"][] = "Dereja_web_profile_completion";
$proto12["m_columns"][] = "Dereja_Information_Source";
$proto12["m_columns"][] = "Employment_Status";
$proto12["m_columns"][] = "Employment_Company";
$proto12["m_columns"][] = "Employment_Position";
$proto12["m_columns"][] = "Remark";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "`candidates`";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "candidates_view1";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_view1"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_view1"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 1;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="candidates_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidates_view1 = createSqlQuery_candidates_view1();


	
																								;

		

$tdatacandidates_view1[".sqlquery"] = $queryData_candidates_view1;



$tdatacandidates_view1[".hasEvents"] = false;

?>