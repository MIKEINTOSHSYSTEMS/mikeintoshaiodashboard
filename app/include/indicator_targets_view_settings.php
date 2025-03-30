<?php
$tdataindicator_targets_view = array();
$tdataindicator_targets_view[".searchableFields"] = array();
$tdataindicator_targets_view[".ShortName"] = "indicator_targets_view";
$tdataindicator_targets_view[".OwnerID"] = "";
$tdataindicator_targets_view[".OriginalTable"] = "indicator_targets";


$tdataindicator_targets_view[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataindicator_targets_view[".originalPagesByType"] = $tdataindicator_targets_view[".pagesByType"];
$tdataindicator_targets_view[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataindicator_targets_view[".originalPages"] = $tdataindicator_targets_view[".pages"];
$tdataindicator_targets_view[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataindicator_targets_view[".originalDefaultPages"] = $tdataindicator_targets_view[".defaultPages"];

//	field labels
$fieldLabelsindicator_targets_view = array();
$fieldToolTipsindicator_targets_view = array();
$pageTitlesindicator_targets_view = array();
$placeHoldersindicator_targets_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindicator_targets_view["English"] = array();
	$fieldToolTipsindicator_targets_view["English"] = array();
	$placeHoldersindicator_targets_view["English"] = array();
	$pageTitlesindicator_targets_view["English"] = array();
	$fieldLabelsindicator_targets_view["English"]["IndicatorName"] = "Indicator Name";
	$fieldToolTipsindicator_targets_view["English"]["IndicatorName"] = "";
	$placeHoldersindicator_targets_view["English"]["IndicatorName"] = "";
	$fieldLabelsindicator_targets_view["English"]["IndicatorDescription"] = "Indicators";
	$fieldToolTipsindicator_targets_view["English"]["IndicatorDescription"] = "";
	$placeHoldersindicator_targets_view["English"]["IndicatorDescription"] = "";
	$fieldLabelsindicator_targets_view["English"]["IndicatorValue"] = "Indicator Value";
	$fieldToolTipsindicator_targets_view["English"]["IndicatorValue"] = "";
	$placeHoldersindicator_targets_view["English"]["IndicatorValue"] = "";
	$fieldLabelsindicator_targets_view["English"]["IndicatorTarget"] = "Indicator Target";
	$fieldToolTipsindicator_targets_view["English"]["IndicatorTarget"] = "";
	$placeHoldersindicator_targets_view["English"]["IndicatorTarget"] = "";
	$fieldLabelsindicator_targets_view["English"]["IndicatorID"] = "Indicator ID";
	$fieldToolTipsindicator_targets_view["English"]["IndicatorID"] = "";
	$placeHoldersindicator_targets_view["English"]["IndicatorID"] = "";
	if (count($fieldToolTipsindicator_targets_view["English"]))
		$tdataindicator_targets_view[".isUseToolTips"] = true;
}


	$tdataindicator_targets_view[".NCSearch"] = true;

	$tdataindicator_targets_view[".ChartRefreshTime"] = 0;


$tdataindicator_targets_view[".shortTableName"] = "indicator_targets_view";
$tdataindicator_targets_view[".nSecOptions"] = 0;

$tdataindicator_targets_view[".mainTableOwnerID"] = "";
$tdataindicator_targets_view[".entityType"] = 3;
$tdataindicator_targets_view[".connId"] = "deredevatderejadevmerqconsulta";


$tdataindicator_targets_view[".strOriginalTableName"] = "indicator_targets";

	



$tdataindicator_targets_view[".showAddInPopup"] = false;

$tdataindicator_targets_view[".showEditInPopup"] = false;

$tdataindicator_targets_view[".showViewInPopup"] = false;

$tdataindicator_targets_view[".listAjax"] = false;
//	temporary
//$tdataindicator_targets_view[".listAjax"] = false;

	$tdataindicator_targets_view[".audit"] = false;

	$tdataindicator_targets_view[".locking"] = false;


$pages = $tdataindicator_targets_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindicator_targets_view[".edit"] = true;
	$tdataindicator_targets_view[".afterEditAction"] = 1;
	$tdataindicator_targets_view[".closePopupAfterEdit"] = 1;
	$tdataindicator_targets_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindicator_targets_view[".add"] = true;
$tdataindicator_targets_view[".afterAddAction"] = 1;
$tdataindicator_targets_view[".closePopupAfterAdd"] = 1;
$tdataindicator_targets_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindicator_targets_view[".list"] = true;
}



$tdataindicator_targets_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindicator_targets_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindicator_targets_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindicator_targets_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindicator_targets_view[".printFriendly"] = true;
}



$tdataindicator_targets_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindicator_targets_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindicator_targets_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindicator_targets_view[".isUseAjaxSuggest"] = true;



						

$tdataindicator_targets_view[".ajaxCodeSnippetAdded"] = false;

$tdataindicator_targets_view[".buttonsAdded"] = false;

$tdataindicator_targets_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindicator_targets_view[".isUseTimeForSearch"] = false;


$tdataindicator_targets_view[".badgeColor"] = "1E90FF";


$tdataindicator_targets_view[".allSearchFields"] = array();
$tdataindicator_targets_view[".filterFields"] = array();
$tdataindicator_targets_view[".requiredSearchFields"] = array();

$tdataindicator_targets_view[".googleLikeFields"] = array();
$tdataindicator_targets_view[".googleLikeFields"][] = "IndicatorID";
$tdataindicator_targets_view[".googleLikeFields"][] = "IndicatorName";
$tdataindicator_targets_view[".googleLikeFields"][] = "IndicatorDescription";
$tdataindicator_targets_view[".googleLikeFields"][] = "IndicatorValue";
$tdataindicator_targets_view[".googleLikeFields"][] = "IndicatorTarget";



$tdataindicator_targets_view[".tableType"] = "chart";

$tdataindicator_targets_view[".printerPageOrientation"] = 0;
$tdataindicator_targets_view[".nPrinterPageScale"] = 100;

$tdataindicator_targets_view[".nPrinterSplitRecords"] = 40;

$tdataindicator_targets_view[".geocodingEnabled"] = false;



// chart settings
$tdataindicator_targets_view[".chartType"] = "2DColumn";
// end of chart settings

$tdataindicator_targets_view[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdataindicator_targets_view[".strOrderBy"] = $tstrOrderBy;

$tdataindicator_targets_view[".orderindexes"] = array();


$tdataindicator_targets_view[".sqlHead"] = "SELECT IndicatorID,  	IndicatorName,  	IndicatorDescription,  	IndicatorValue,  	IndicatorTarget";
$tdataindicator_targets_view[".sqlFrom"] = "FROM indicator_targets";
$tdataindicator_targets_view[".sqlWhereExpr"] = "";
$tdataindicator_targets_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindicator_targets_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindicator_targets_view[".arrGroupsPerPage"] = $arrGPP;

$tdataindicator_targets_view[".highlightSearchResults"] = true;

$tableKeysindicator_targets_view = array();
$tdataindicator_targets_view[".Keys"] = $tableKeysindicator_targets_view;


$tdataindicator_targets_view[".hideMobileList"] = array();




//	IndicatorID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IndicatorID";
	$fdata["GoodName"] = "IndicatorID";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets_view","IndicatorID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IndicatorID";

		$fdata["sourceSingle"] = "IndicatorID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorID";

	
	
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


	$tdataindicator_targets_view["IndicatorID"] = $fdata;
		$tdataindicator_targets_view[".searchableFields"][] = "IndicatorID";
//	IndicatorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IndicatorName";
	$fdata["GoodName"] = "IndicatorName";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets_view","IndicatorName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IndicatorName";

		$fdata["sourceSingle"] = "IndicatorName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorName";

	
	
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


	$tdataindicator_targets_view["IndicatorName"] = $fdata;
		$tdataindicator_targets_view[".searchableFields"][] = "IndicatorName";
//	IndicatorDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IndicatorDescription";
	$fdata["GoodName"] = "IndicatorDescription";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets_view","IndicatorDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IndicatorDescription";

		$fdata["sourceSingle"] = "IndicatorDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorDescription";

	
	
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


	$tdataindicator_targets_view["IndicatorDescription"] = $fdata;
		$tdataindicator_targets_view[".searchableFields"][] = "IndicatorDescription";
//	IndicatorValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IndicatorValue";
	$fdata["GoodName"] = "IndicatorValue";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets_view","IndicatorValue");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IndicatorValue";

		$fdata["sourceSingle"] = "IndicatorValue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorValue";

	
	
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


	$tdataindicator_targets_view["IndicatorValue"] = $fdata;
		$tdataindicator_targets_view[".searchableFields"][] = "IndicatorValue";
//	IndicatorTarget
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IndicatorTarget";
	$fdata["GoodName"] = "IndicatorTarget";
	$fdata["ownerTable"] = "indicator_targets";
	$fdata["Label"] = GetFieldLabel("indicator_targets_view","IndicatorTarget");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IndicatorTarget";

		$fdata["sourceSingle"] = "IndicatorTarget";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndicatorTarget";

	
	
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


	$tdataindicator_targets_view["IndicatorTarget"] = $fdata;
		$tdataindicator_targets_view[".searchableFields"][] = "IndicatorTarget";

$tdataindicator_targets_view[".chartLabelField"] = "IndicatorDescription";
$tdataindicator_targets_view[".chartSeries"] = array();
$tdataindicator_targets_view[".chartSeries"][] = array(
	"field" => "IndicatorTarget",
	"total" => ""
);
$tdataindicator_targets_view[".chartSeries"][] = array(
	"field" => "IndicatorValue",
	"total" => ""
);
	$tdataindicator_targets_view[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">indicator_targets_view</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="0">
			<attr value="name">IndicatorTarget</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="1">
			<attr value="name">IndicatorValue</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="2">
		<attr value="name">IndicatorDescription</attr>
	</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataindicator_targets_view[".chartXml"] .= '<attr value="head">'.xmlencode("Indicators Value and Target Chart").'</attr>
<attr value="foot">'.xmlencode("Indicators").'</attr>
<attr value="y_axis_label">'.xmlencode("Indicator Targets").'</attr>


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
$tdataindicator_targets_view[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="0">
		<attr value="name">IndicatorID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("indicator_targets_view","IndicatorID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="1">
		<attr value="name">IndicatorName</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("indicator_targets_view","IndicatorName")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="2">
		<attr value="name">IndicatorDescription</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("indicator_targets_view","IndicatorDescription")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="3">
		<attr value="name">IndicatorValue</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("indicator_targets_view","IndicatorValue")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataindicator_targets_view[".chartXml"] .= '<attr value="4">
		<attr value="name">IndicatorTarget</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("indicator_targets_view","IndicatorTarget")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataindicator_targets_view[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">indicator_targets_view</attr>
<attr value="short_table_name">indicator_targets_view</attr>
</attr>

</chart>';

$tables_data["indicator_targets_view"]=&$tdataindicator_targets_view;
$field_labels["indicator_targets_view"] = &$fieldLabelsindicator_targets_view;
$fieldToolTips["indicator_targets_view"] = &$fieldToolTipsindicator_targets_view;
$placeHolders["indicator_targets_view"] = &$placeHoldersindicator_targets_view;
$page_titles["indicator_targets_view"] = &$pageTitlesindicator_targets_view;


changeTextControlsToDate( "indicator_targets_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["indicator_targets_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["indicator_targets_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_indicator_targets_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IndicatorID,  	IndicatorName,  	IndicatorDescription,  	IndicatorValue,  	IndicatorTarget";
$proto0["m_strFrom"] = "FROM indicator_targets";
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
	"m_strName" => "IndicatorID",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets_view"
));

$proto6["m_sql"] = "IndicatorID";
$proto6["m_srcTableName"] = "indicator_targets_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorName",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets_view"
));

$proto8["m_sql"] = "IndicatorName";
$proto8["m_srcTableName"] = "indicator_targets_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorDescription",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets_view"
));

$proto10["m_sql"] = "IndicatorDescription";
$proto10["m_srcTableName"] = "indicator_targets_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorValue",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets_view"
));

$proto12["m_sql"] = "IndicatorValue";
$proto12["m_srcTableName"] = "indicator_targets_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IndicatorTarget",
	"m_strTable" => "indicator_targets",
	"m_srcTableName" => "indicator_targets_view"
));

$proto14["m_sql"] = "IndicatorTarget";
$proto14["m_srcTableName"] = "indicator_targets_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "indicator_targets";
$proto17["m_srcTableName"] = "indicator_targets_view";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IndicatorID";
$proto17["m_columns"][] = "IndicatorName";
$proto17["m_columns"][] = "IndicatorDescription";
$proto17["m_columns"][] = "IndicatorValue";
$proto17["m_columns"][] = "IndicatorTarget";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "indicator_targets";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "indicator_targets_view";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="indicator_targets_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_indicator_targets_view = createSqlQuery_indicator_targets_view();


	
																								;

					

$tdataindicator_targets_view[".sqlquery"] = $queryData_indicator_targets_view;



$tdataindicator_targets_view[".hasEvents"] = false;

?>