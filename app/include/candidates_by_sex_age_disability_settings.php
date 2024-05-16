<?php
$tdatacandidates_by_sex_age_disability = array();
$tdatacandidates_by_sex_age_disability[".searchableFields"] = array();
$tdatacandidates_by_sex_age_disability[".ShortName"] = "candidates_by_sex_age_disability";
$tdatacandidates_by_sex_age_disability[".OwnerID"] = "";
$tdatacandidates_by_sex_age_disability[".OriginalTable"] = "candidates";


$tdatacandidates_by_sex_age_disability[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdatacandidates_by_sex_age_disability[".originalPagesByType"] = $tdatacandidates_by_sex_age_disability[".pagesByType"];
$tdatacandidates_by_sex_age_disability[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdatacandidates_by_sex_age_disability[".originalPages"] = $tdatacandidates_by_sex_age_disability[".pages"];
$tdatacandidates_by_sex_age_disability[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdatacandidates_by_sex_age_disability[".originalDefaultPages"] = $tdatacandidates_by_sex_age_disability[".defaultPages"];

//	field labels
$fieldLabelscandidates_by_sex_age_disability = array();
$fieldToolTipscandidates_by_sex_age_disability = array();
$pageTitlescandidates_by_sex_age_disability = array();
$placeHolderscandidates_by_sex_age_disability = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscandidates_by_sex_age_disability["English"] = array();
	$fieldToolTipscandidates_by_sex_age_disability["English"] = array();
	$placeHolderscandidates_by_sex_age_disability["English"] = array();
	$pageTitlescandidates_by_sex_age_disability["English"] = array();
	$fieldLabelscandidates_by_sex_age_disability["English"]["Sex"] = "Sex";
	$fieldToolTipscandidates_by_sex_age_disability["English"]["Sex"] = "";
	$placeHolderscandidates_by_sex_age_disability["English"]["Sex"] = "";
	$fieldLabelscandidates_by_sex_age_disability["English"]["Disabled"] = "Disabled";
	$fieldToolTipscandidates_by_sex_age_disability["English"]["Disabled"] = "";
	$placeHolderscandidates_by_sex_age_disability["English"]["Disabled"] = "";
	$fieldLabelscandidates_by_sex_age_disability["English"]["Not_Disabled"] = "Not Disabled";
	$fieldToolTipscandidates_by_sex_age_disability["English"]["Not_Disabled"] = "";
	$placeHolderscandidates_by_sex_age_disability["English"]["Not_Disabled"] = "";
	$fieldLabelscandidates_by_sex_age_disability["English"]["Age_18_and_Above"] = "Age 18 And Above";
	$fieldToolTipscandidates_by_sex_age_disability["English"]["Age_18_and_Above"] = "";
	$placeHolderscandidates_by_sex_age_disability["English"]["Age_18_and_Above"] = "";
	if (count($fieldToolTipscandidates_by_sex_age_disability["English"]))
		$tdatacandidates_by_sex_age_disability[".isUseToolTips"] = true;
}


	$tdatacandidates_by_sex_age_disability[".NCSearch"] = true;

	$tdatacandidates_by_sex_age_disability[".ChartRefreshTime"] = 0;


$tdatacandidates_by_sex_age_disability[".shortTableName"] = "candidates_by_sex_age_disability";
$tdatacandidates_by_sex_age_disability[".nSecOptions"] = 0;

$tdatacandidates_by_sex_age_disability[".mainTableOwnerID"] = "";
$tdatacandidates_by_sex_age_disability[".entityType"] = 3;
$tdatacandidates_by_sex_age_disability[".connId"] = "deredevatderejadevmerqconsulta";


$tdatacandidates_by_sex_age_disability[".strOriginalTableName"] = "candidates";

	



$tdatacandidates_by_sex_age_disability[".showAddInPopup"] = false;

$tdatacandidates_by_sex_age_disability[".showEditInPopup"] = false;

$tdatacandidates_by_sex_age_disability[".showViewInPopup"] = false;

$tdatacandidates_by_sex_age_disability[".listAjax"] = false;
//	temporary
//$tdatacandidates_by_sex_age_disability[".listAjax"] = false;

	$tdatacandidates_by_sex_age_disability[".audit"] = false;

	$tdatacandidates_by_sex_age_disability[".locking"] = false;


$pages = $tdatacandidates_by_sex_age_disability[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidates_by_sex_age_disability[".edit"] = true;
	$tdatacandidates_by_sex_age_disability[".afterEditAction"] = 1;
	$tdatacandidates_by_sex_age_disability[".closePopupAfterEdit"] = 1;
	$tdatacandidates_by_sex_age_disability[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidates_by_sex_age_disability[".add"] = true;
$tdatacandidates_by_sex_age_disability[".afterAddAction"] = 1;
$tdatacandidates_by_sex_age_disability[".closePopupAfterAdd"] = 1;
$tdatacandidates_by_sex_age_disability[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidates_by_sex_age_disability[".list"] = true;
}



$tdatacandidates_by_sex_age_disability[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidates_by_sex_age_disability[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidates_by_sex_age_disability[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidates_by_sex_age_disability[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidates_by_sex_age_disability[".printFriendly"] = true;
}



$tdatacandidates_by_sex_age_disability[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidates_by_sex_age_disability[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidates_by_sex_age_disability[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidates_by_sex_age_disability[".isUseAjaxSuggest"] = true;



			

$tdatacandidates_by_sex_age_disability[".ajaxCodeSnippetAdded"] = false;

$tdatacandidates_by_sex_age_disability[".buttonsAdded"] = false;

$tdatacandidates_by_sex_age_disability[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidates_by_sex_age_disability[".isUseTimeForSearch"] = false;


$tdatacandidates_by_sex_age_disability[".badgeColor"] = "B22222";


$tdatacandidates_by_sex_age_disability[".allSearchFields"] = array();
$tdatacandidates_by_sex_age_disability[".filterFields"] = array();
$tdatacandidates_by_sex_age_disability[".requiredSearchFields"] = array();

$tdatacandidates_by_sex_age_disability[".googleLikeFields"] = array();
$tdatacandidates_by_sex_age_disability[".googleLikeFields"][] = "Sex";
$tdatacandidates_by_sex_age_disability[".googleLikeFields"][] = "Disabled";
$tdatacandidates_by_sex_age_disability[".googleLikeFields"][] = "Not_Disabled";
$tdatacandidates_by_sex_age_disability[".googleLikeFields"][] = "Age_18_and_Above";



$tdatacandidates_by_sex_age_disability[".tableType"] = "chart";

$tdatacandidates_by_sex_age_disability[".printerPageOrientation"] = 0;
$tdatacandidates_by_sex_age_disability[".nPrinterPageScale"] = 100;

$tdatacandidates_by_sex_age_disability[".nPrinterSplitRecords"] = 40;

$tdatacandidates_by_sex_age_disability[".geocodingEnabled"] = false;



// chart settings
$tdatacandidates_by_sex_age_disability[".chartType"] = "Combined";
// end of chart settings

$tdatacandidates_by_sex_age_disability[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatacandidates_by_sex_age_disability[".strOrderBy"] = $tstrOrderBy;

$tdatacandidates_by_sex_age_disability[".orderindexes"] = array();


$tdatacandidates_by_sex_age_disability[".sqlHead"] = "SELECT Sex,      SUM(CASE WHEN Disability_Status IN ('Yes', 'Disabled') THEN 1 ELSE 0 END) AS Disabled,      SUM(CASE WHEN Disability_Status IN ('Normal', NULL) THEN 1 ELSE 0 END) AS Not_Disabled,      COUNT(CASE WHEN TIMESTAMPDIFF(YEAR, DOB, CURDATE()) >= 18 THEN 1 END) AS Age_18_and_Above";
$tdatacandidates_by_sex_age_disability[".sqlFrom"] = "FROM      candidates";
$tdatacandidates_by_sex_age_disability[".sqlWhereExpr"] = "";
$tdatacandidates_by_sex_age_disability[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidates_by_sex_age_disability[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidates_by_sex_age_disability[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidates_by_sex_age_disability[".highlightSearchResults"] = true;

$tableKeyscandidates_by_sex_age_disability = array();
$tdatacandidates_by_sex_age_disability[".Keys"] = $tableKeyscandidates_by_sex_age_disability;


$tdatacandidates_by_sex_age_disability[".hideMobileList"] = array();




//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "candidates";
	$fdata["Label"] = GetFieldLabel("candidates_by_sex_age_disability","Sex");
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


	$tdatacandidates_by_sex_age_disability["Sex"] = $fdata;
		$tdatacandidates_by_sex_age_disability[".searchableFields"][] = "Sex";
//	Disabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Disabled";
	$fdata["GoodName"] = "Disabled";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_by_sex_age_disability","Disabled");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Disabled";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(CASE WHEN Disability_Status IN ('Yes', 'Disabled') THEN 1 ELSE 0 END)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacandidates_by_sex_age_disability["Disabled"] = $fdata;
		$tdatacandidates_by_sex_age_disability[".searchableFields"][] = "Disabled";
//	Not_Disabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Not_Disabled";
	$fdata["GoodName"] = "Not_Disabled";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_by_sex_age_disability","Not_Disabled");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Not_Disabled";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(CASE WHEN Disability_Status IN ('Normal', NULL) THEN 1 ELSE 0 END)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatacandidates_by_sex_age_disability["Not_Disabled"] = $fdata;
		$tdatacandidates_by_sex_age_disability[".searchableFields"][] = "Not_Disabled";
//	Age_18_and_Above
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Age_18_and_Above";
	$fdata["GoodName"] = "Age_18_and_Above";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("candidates_by_sex_age_disability","Age_18_and_Above");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Age_18_and_Above";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(CASE WHEN TIMESTAMPDIFF(YEAR, DOB, CURDATE()) >= 18 THEN 1 END)";

	
	
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


	$tdatacandidates_by_sex_age_disability["Age_18_and_Above"] = $fdata;
		$tdatacandidates_by_sex_age_disability[".searchableFields"][] = "Age_18_and_Above";

$tdatacandidates_by_sex_age_disability[".chartLabelField"] = "Sex";
$tdatacandidates_by_sex_age_disability[".chartSeries"] = array();
$tdatacandidates_by_sex_age_disability[".chartSeries"][] = array(
	"field" => "Age_18_and_Above",
	"total" => ""
);
$tdatacandidates_by_sex_age_disability[".chartSeries"][] = array(
	"field" => "Disabled",
	"total" => ""
);
$tdatacandidates_by_sex_age_disability[".chartSeries"][] = array(
	"field" => "Not_Disabled",
	"total" => ""
);
	$tdatacandidates_by_sex_age_disability[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">candidates_by_sex_age_disability</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="0">
			<attr value="name">Age_18_and_Above</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="1">
			<attr value="name">Disabled</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="2">
			<attr value="name">Not_Disabled</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="3">
		<attr value="name">Sex</attr>
	</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="head">'.xmlencode("Candidates By Sex Age and Disability Status").'</attr>
<attr value="foot">'.xmlencode("Sex/Gender").'</attr>
<attr value="y_axis_label">'.xmlencode("Candidates").'</attr>


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
<attr value="linestyle">2</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatacandidates_by_sex_age_disability[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="0">
		<attr value="name">Sex</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_by_sex_age_disability","Sex")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="1">
		<attr value="name">Disabled</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_by_sex_age_disability","Disabled")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="2">
		<attr value="name">Not_Disabled</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_by_sex_age_disability","Not_Disabled")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacandidates_by_sex_age_disability[".chartXml"] .= '<attr value="3">
		<attr value="name">Age_18_and_Above</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("candidates_by_sex_age_disability","Age_18_and_Above")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacandidates_by_sex_age_disability[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">candidates_by_sex_age_disability</attr>
<attr value="short_table_name">candidates_by_sex_age_disability</attr>
</attr>

</chart>';

$tables_data["candidates_by_sex_age_disability"]=&$tdatacandidates_by_sex_age_disability;
$field_labels["candidates_by_sex_age_disability"] = &$fieldLabelscandidates_by_sex_age_disability;
$fieldToolTips["candidates_by_sex_age_disability"] = &$fieldToolTipscandidates_by_sex_age_disability;
$placeHolders["candidates_by_sex_age_disability"] = &$placeHolderscandidates_by_sex_age_disability;
$page_titles["candidates_by_sex_age_disability"] = &$pageTitlescandidates_by_sex_age_disability;


changeTextControlsToDate( "candidates_by_sex_age_disability" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["candidates_by_sex_age_disability"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["candidates_by_sex_age_disability"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidates_by_sex_age_disability()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Sex,      SUM(CASE WHEN Disability_Status IN ('Yes', 'Disabled') THEN 1 ELSE 0 END) AS Disabled,      SUM(CASE WHEN Disability_Status IN ('Normal', NULL) THEN 1 ELSE 0 END) AS Not_Disabled,      COUNT(CASE WHEN TIMESTAMPDIFF(YEAR, DOB, CURDATE()) >= 18 THEN 1 END) AS Age_18_and_Above";
$proto0["m_strFrom"] = "FROM      candidates";
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
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_by_sex_age_disability"
));

$proto6["m_sql"] = "Sex";
$proto6["m_srcTableName"] = "candidates_by_sex_age_disability";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Disability_Status IN ('Yes', 'Disabled') THEN 1 ELSE 0 END"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(CASE WHEN Disability_Status IN ('Yes', 'Disabled') THEN 1 ELSE 0 END)";
$proto8["m_srcTableName"] = "candidates_by_sex_age_disability";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Disabled";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_SUM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN Disability_Status IN ('Normal', NULL) THEN 1 ELSE 0 END"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(CASE WHEN Disability_Status IN ('Normal', NULL) THEN 1 ELSE 0 END)";
$proto11["m_srcTableName"] = "candidates_by_sex_age_disability";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Not_Disabled";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN TIMESTAMPDIFF(YEAR, DOB, CURDATE()) >= 18 THEN 1 END"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(CASE WHEN TIMESTAMPDIFF(YEAR, DOB, CURDATE()) >= 18 THEN 1 END)";
$proto14["m_srcTableName"] = "candidates_by_sex_age_disability";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Age_18_and_Above";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "candidates";
$proto18["m_srcTableName"] = "candidates_by_sex_age_disability";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "CandidateID";
$proto18["m_columns"][] = "StudentID";
$proto18["m_columns"][] = "First_Name";
$proto18["m_columns"][] = "Middle_Name";
$proto18["m_columns"][] = "Last_Name";
$proto18["m_columns"][] = "Sex";
$proto18["m_columns"][] = "DOB";
$proto18["m_columns"][] = "Region";
$proto18["m_columns"][] = "City";
$proto18["m_columns"][] = "Sub_City";
$proto18["m_columns"][] = "Zone";
$proto18["m_columns"][] = "House_No";
$proto18["m_columns"][] = "Phone_Number";
$proto18["m_columns"][] = "Phone_Number_Alternate";
$proto18["m_columns"][] = "Email_Address";
$proto18["m_columns"][] = "Disability_Status";
$proto18["m_columns"][] = "Disability_Type";
$proto18["m_columns"][] = "Disability_Type_Other";
$proto18["m_columns"][] = "Institution_Type";
$proto18["m_columns"][] = "Institution_Name";
$proto18["m_columns"][] = "Education_Level";
$proto18["m_columns"][] = "Department";
$proto18["m_columns"][] = "Minor";
$proto18["m_columns"][] = "Major";
$proto18["m_columns"][] = "Enrollement_Type";
$proto18["m_columns"][] = "Skills";
$proto18["m_columns"][] = "Languages";
$proto18["m_columns"][] = "English_Proficiency_Level";
$proto18["m_columns"][] = "Industry_Specific_Skills";
$proto18["m_columns"][] = "IT_Related_Skills";
$proto18["m_columns"][] = "Certifications";
$proto18["m_columns"][] = "Year_of_graduation";
$proto18["m_columns"][] = "Field_Of_Study";
$proto18["m_columns"][] = "GPA";
$proto18["m_columns"][] = "Intervention";
$proto18["m_columns"][] = "Campaign";
$proto18["m_columns"][] = "Attend_Employability_Skill";
$proto18["m_columns"][] = "DAAP_enrolled_1st Round";
$proto18["m_columns"][] = "DAAP_Completed";
$proto18["m_columns"][] = "DAAP_Completed_Courses";
$proto18["m_columns"][] = "Job_Fair_Clinic";
$proto18["m_columns"][] = "Job_Fair";
$proto18["m_columns"][] = "Exit_Exam_Score";
$proto18["m_columns"][] = "Exit_Exam_Status";
$proto18["m_columns"][] = "DAAP_enrolled_2nd_Round";
$proto18["m_columns"][] = "Upload_on_Tracker";
$proto18["m_columns"][] = "Work_Experience";
$proto18["m_columns"][] = "Joined_Dereja_Services";
$proto18["m_columns"][] = "Dereja_Services";
$proto18["m_columns"][] = "Dereja_Training_Services";
$proto18["m_columns"][] = "Dereja_Event_Services";
$proto18["m_columns"][] = "Dereja_web_profile_completion";
$proto18["m_columns"][] = "Dereja_Information_Source";
$proto18["m_columns"][] = "Employment_Status";
$proto18["m_columns"][] = "Employment_Company";
$proto18["m_columns"][] = "Employment_Position";
$proto18["m_columns"][] = "Remark";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "candidates";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "candidates_by_sex_age_disability";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "candidates",
	"m_srcTableName" => "candidates_by_sex_age_disability"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="candidates_by_sex_age_disability";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidates_by_sex_age_disability = createSqlQuery_candidates_by_sex_age_disability();


	
																								;

				

$tdatacandidates_by_sex_age_disability[".sqlquery"] = $queryData_candidates_by_sex_age_disability;



$tdatacandidates_by_sex_age_disability[".hasEvents"] = false;

?>