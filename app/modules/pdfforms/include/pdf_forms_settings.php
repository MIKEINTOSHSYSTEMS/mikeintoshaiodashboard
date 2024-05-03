<?php
$tdatapdf_forms = array();
$tdatapdf_forms[".searchableFields"] = array();
$tdatapdf_forms[".ShortName"] = "pdf_forms";
$tdatapdf_forms[".OwnerID"] = "";
$tdatapdf_forms[".OriginalTable"] = "pdf_forms";


$tdatapdf_forms[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatapdf_forms[".originalPagesByType"] = $tdatapdf_forms[".pagesByType"];
$tdatapdf_forms[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatapdf_forms[".originalPages"] = $tdatapdf_forms[".pages"];
$tdatapdf_forms[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatapdf_forms[".originalDefaultPages"] = $tdatapdf_forms[".defaultPages"];

//	field labels
$fieldLabelspdf_forms = array();
$fieldToolTipspdf_forms = array();
$pageTitlespdf_forms = array();
$placeHolderspdf_forms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_forms["English"] = array();
	$fieldToolTipspdf_forms["English"] = array();
	$placeHolderspdf_forms["English"] = array();
	$pageTitlespdf_forms["English"] = array();
	$fieldLabelspdf_forms["English"]["id"] = "Id";
	$fieldToolTipspdf_forms["English"]["id"] = "";
	$placeHolderspdf_forms["English"]["id"] = "";
	$fieldLabelspdf_forms["English"]["formname"] = "Form Name";
	$fieldToolTipspdf_forms["English"]["formname"] = "";
	$placeHolderspdf_forms["English"]["formname"] = "";
	$fieldLabelspdf_forms["English"]["formfile"] = "PDF Form File";
	$fieldToolTipspdf_forms["English"]["formfile"] = "";
	$placeHolderspdf_forms["English"]["formfile"] = "";
	$fieldLabelspdf_forms["English"]["sqlquery"] = "Sql Query";
	$fieldToolTipspdf_forms["English"]["sqlquery"] = "";
	$placeHolderspdf_forms["English"]["sqlquery"] = "";
	$fieldLabelspdf_forms["English"]["pdffile"] = "Completed PDF Form";
	$fieldToolTipspdf_forms["English"]["pdffile"] = "";
	$placeHolderspdf_forms["English"]["pdffile"] = "";
	$fieldLabelspdf_forms["English"]["multifields"] = "Allow using field more than once";
	$fieldToolTipspdf_forms["English"]["multifields"] = "";
	$placeHolderspdf_forms["English"]["multifields"] = "";
	$pageTitlespdf_forms["English"]["add"] = "Add PDF Form";
	if (count($fieldToolTipspdf_forms["English"]))
		$tdatapdf_forms[".isUseToolTips"] = true;
}


	$tdatapdf_forms[".NCSearch"] = true;



$tdatapdf_forms[".shortTableName"] = "pdf_forms";
$tdatapdf_forms[".nSecOptions"] = 0;

$tdatapdf_forms[".mainTableOwnerID"] = "";
$tdatapdf_forms[".entityType"] = 0;
$tdatapdf_forms[".connId"] = "project_at_localhost";


$tdatapdf_forms[".strOriginalTableName"] = "pdf_forms";

	



$tdatapdf_forms[".showAddInPopup"] = false;

$tdatapdf_forms[".showEditInPopup"] = false;

$tdatapdf_forms[".showViewInPopup"] = false;

$tdatapdf_forms[".listAjax"] = false;
//	temporary
//$tdatapdf_forms[".listAjax"] = false;

	$tdatapdf_forms[".audit"] = false;

	$tdatapdf_forms[".locking"] = false;


$pages = $tdatapdf_forms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapdf_forms[".edit"] = true;
	$tdatapdf_forms[".afterEditAction"] = 1;
	$tdatapdf_forms[".closePopupAfterEdit"] = 1;
	$tdatapdf_forms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapdf_forms[".add"] = true;
$tdatapdf_forms[".afterAddAction"] = 1;
$tdatapdf_forms[".closePopupAfterAdd"] = 1;
$tdatapdf_forms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapdf_forms[".list"] = true;
}



$tdatapdf_forms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapdf_forms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapdf_forms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapdf_forms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapdf_forms[".printFriendly"] = true;
}



$tdatapdf_forms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapdf_forms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapdf_forms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapdf_forms[".isUseAjaxSuggest"] = true;



								
					

$tdatapdf_forms[".ajaxCodeSnippetAdded"] = false;

$tdatapdf_forms[".buttonsAdded"] = true;

$tdatapdf_forms[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapdf_forms[".isUseTimeForSearch"] = false;


$tdatapdf_forms[".badgeColor"] = "E8926F";


$tdatapdf_forms[".allSearchFields"] = array();
$tdatapdf_forms[".filterFields"] = array();
$tdatapdf_forms[".requiredSearchFields"] = array();

$tdatapdf_forms[".googleLikeFields"] = array();
$tdatapdf_forms[".googleLikeFields"][] = "id";
$tdatapdf_forms[".googleLikeFields"][] = "formname";
$tdatapdf_forms[".googleLikeFields"][] = "sqlquery";
$tdatapdf_forms[".googleLikeFields"][] = "formfile";
$tdatapdf_forms[".googleLikeFields"][] = "pdffile";
$tdatapdf_forms[".googleLikeFields"][] = "multifields";



$tdatapdf_forms[".tableType"] = "list";

$tdatapdf_forms[".printerPageOrientation"] = 0;
$tdatapdf_forms[".nPrinterPageScale"] = 100;

$tdatapdf_forms[".nPrinterSplitRecords"] = 40;

$tdatapdf_forms[".geocodingEnabled"] = false;










$tdatapdf_forms[".pageSize"] = 20;

$tdatapdf_forms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapdf_forms[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_forms[".orderindexes"] = array();


$tdatapdf_forms[".sqlHead"] = "SELECT id,  	formname,  	sqlquery,  	formfile,  	pdffile,  	multifields";
$tdatapdf_forms[".sqlFrom"] = "FROM pdf_forms";
$tdatapdf_forms[".sqlWhereExpr"] = "";
$tdatapdf_forms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_forms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_forms[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_forms[".highlightSearchResults"] = true;

$tableKeyspdf_forms = array();
$tableKeyspdf_forms[] = "id";
$tdatapdf_forms[".Keys"] = $tableKeyspdf_forms;


$tdatapdf_forms[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pdf_forms";
	$fdata["Label"] = GetFieldLabel("pdf_forms","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatapdf_forms["id"] = $fdata;
		$tdatapdf_forms[".searchableFields"][] = "id";
//	formname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "formname";
	$fdata["GoodName"] = "formname";
	$fdata["ownerTable"] = "pdf_forms";
	$fdata["Label"] = GetFieldLabel("pdf_forms","formname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "formname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formname";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatapdf_forms["formname"] = $fdata;
		$tdatapdf_forms[".searchableFields"][] = "formname";
//	sqlquery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sqlquery";
	$fdata["GoodName"] = "sqlquery";
	$fdata["ownerTable"] = "pdf_forms";
	$fdata["Label"] = GetFieldLabel("pdf_forms","sqlquery");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sqlquery";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sqlquery";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "editing_sql_query", "type" => "editing" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdatapdf_forms["sqlquery"] = $fdata;
		$tdatapdf_forms[".searchableFields"][] = "sqlquery";
//	formfile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "formfile";
	$fdata["GoodName"] = "formfile";
	$fdata["ownerTable"] = "pdf_forms";
	$fdata["Label"] = GetFieldLabel("pdf_forms","formfile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "formfile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formfile";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapdf_forms["formfile"] = $fdata;
		$tdatapdf_forms[".searchableFields"][] = "formfile";
//	pdffile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pdffile";
	$fdata["GoodName"] = "pdffile";
	$fdata["ownerTable"] = "pdf_forms";
	$fdata["Label"] = GetFieldLabel("pdf_forms","pdffile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pdffile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdffile";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapdf_forms["pdffile"] = $fdata;
		$tdatapdf_forms[".searchableFields"][] = "pdffile";
//	multifields
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "multifields";
	$fdata["GoodName"] = "multifields";
	$fdata["ownerTable"] = "pdf_forms";
	$fdata["Label"] = GetFieldLabel("pdf_forms","multifields");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "multifields";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "multifields";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatapdf_forms["multifields"] = $fdata;
		$tdatapdf_forms[".searchableFields"][] = "multifields";


$tables_data["pdf_forms"]=&$tdatapdf_forms;
$field_labels["pdf_forms"] = &$fieldLabelspdf_forms;
$fieldToolTips["pdf_forms"] = &$fieldToolTipspdf_forms;
$placeHolders["pdf_forms"] = &$placeHolderspdf_forms;
$page_titles["pdf_forms"] = &$pageTitlespdf_forms;


changeTextControlsToDate( "pdf_forms" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pdf_forms"] = array();
//	pdf_formfields
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pdf_formfields";
		$detailsParam["dOriginalTable"] = "pdf_formfields";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pdf_formfields";
	$detailsParam["dCaptionTable"] = GetTableCaption("pdf_formfields");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pdf_forms"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pdf_forms"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pdf_forms"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["pdf_forms"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pdf_forms"][$dIndex]["detailKeys"][]="formid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pdf_forms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pdf_forms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	formname,  	sqlquery,  	formfile,  	pdffile,  	multifields";
$proto0["m_strFrom"] = "FROM pdf_forms";
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
	"m_strName" => "id",
	"m_strTable" => "pdf_forms",
	"m_srcTableName" => "pdf_forms"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pdf_forms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "formname",
	"m_strTable" => "pdf_forms",
	"m_srcTableName" => "pdf_forms"
));

$proto8["m_sql"] = "formname";
$proto8["m_srcTableName"] = "pdf_forms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sqlquery",
	"m_strTable" => "pdf_forms",
	"m_srcTableName" => "pdf_forms"
));

$proto10["m_sql"] = "sqlquery";
$proto10["m_srcTableName"] = "pdf_forms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "formfile",
	"m_strTable" => "pdf_forms",
	"m_srcTableName" => "pdf_forms"
));

$proto12["m_sql"] = "formfile";
$proto12["m_srcTableName"] = "pdf_forms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pdffile",
	"m_strTable" => "pdf_forms",
	"m_srcTableName" => "pdf_forms"
));

$proto14["m_sql"] = "pdffile";
$proto14["m_srcTableName"] = "pdf_forms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "multifields",
	"m_strTable" => "pdf_forms",
	"m_srcTableName" => "pdf_forms"
));

$proto16["m_sql"] = "multifields";
$proto16["m_srcTableName"] = "pdf_forms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "pdf_forms";
$proto19["m_srcTableName"] = "pdf_forms";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "formname";
$proto19["m_columns"][] = "sqlquery";
$proto19["m_columns"][] = "formfile";
$proto19["m_columns"][] = "pdffile";
$proto19["m_columns"][] = "multifields";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "pdf_forms";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "pdf_forms";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pdf_forms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_forms = createSqlQuery_pdf_forms();


	
		;

						

$tdatapdf_forms[".sqlquery"] = $queryData_pdf_forms;



include_once(getabspath("include/pdf_forms_events.php"));
$tdatapdf_forms[".hasEvents"] = true;

?>