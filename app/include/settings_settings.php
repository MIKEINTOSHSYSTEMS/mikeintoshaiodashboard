<?php
$tdatasettings = array();
$tdatasettings[".searchableFields"] = array();
$tdatasettings[".ShortName"] = "settings";
$tdatasettings[".OwnerID"] = "";
$tdatasettings[".OriginalTable"] = "settings";


$tdatasettings[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasettings[".originalPagesByType"] = $tdatasettings[".pagesByType"];
$tdatasettings[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasettings[".originalPages"] = $tdatasettings[".pages"];
$tdatasettings[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatasettings[".originalDefaultPages"] = $tdatasettings[".defaultPages"];

//	field labels
$fieldLabelssettings = array();
$fieldToolTipssettings = array();
$pageTitlessettings = array();
$placeHolderssettings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssettings["English"] = array();
	$fieldToolTipssettings["English"] = array();
	$placeHolderssettings["English"] = array();
	$pageTitlessettings["English"] = array();
	$fieldLabelssettings["English"]["id"] = "Id";
	$fieldToolTipssettings["English"]["id"] = "";
	$placeHolderssettings["English"]["id"] = "";
	$fieldLabelssettings["English"]["tablename"] = "Tablename";
	$fieldToolTipssettings["English"]["tablename"] = "";
	$placeHolderssettings["English"]["tablename"] = "";
	$fieldLabelssettings["English"]["field"] = "Field";
	$fieldToolTipssettings["English"]["field"] = "";
	$placeHolderssettings["English"]["field"] = "";
	$fieldLabelssettings["English"]["label"] = "Label";
	$fieldToolTipssettings["English"]["label"] = "";
	$placeHolderssettings["English"]["label"] = "";
	$fieldLabelssettings["English"]["visible"] = "Visible";
	$fieldToolTipssettings["English"]["visible"] = "";
	$placeHolderssettings["English"]["visible"] = "";
	$fieldLabelssettings["English"]["readonly"] = "Readonly";
	$fieldToolTipssettings["English"]["readonly"] = "";
	$placeHolderssettings["English"]["readonly"] = "";
	$fieldLabelssettings["English"]["required"] = "Required";
	$fieldToolTipssettings["English"]["required"] = "";
	$placeHolderssettings["English"]["required"] = "";
	if (count($fieldToolTipssettings["English"]))
		$tdatasettings[".isUseToolTips"] = true;
}


	$tdatasettings[".NCSearch"] = true;



$tdatasettings[".shortTableName"] = "settings";
$tdatasettings[".nSecOptions"] = 0;

$tdatasettings[".mainTableOwnerID"] = "";
$tdatasettings[".entityType"] = 0;
$tdatasettings[".connId"] = "deredevatderejadevmerqconsulta";


$tdatasettings[".strOriginalTableName"] = "settings";

	



$tdatasettings[".showAddInPopup"] = false;

$tdatasettings[".showEditInPopup"] = false;

$tdatasettings[".showViewInPopup"] = false;

$tdatasettings[".listAjax"] = false;
//	temporary
//$tdatasettings[".listAjax"] = false;

	$tdatasettings[".audit"] = true;

	$tdatasettings[".locking"] = false;


$pages = $tdatasettings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasettings[".edit"] = true;
	$tdatasettings[".afterEditAction"] = 1;
	$tdatasettings[".closePopupAfterEdit"] = 1;
	$tdatasettings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasettings[".add"] = true;
$tdatasettings[".afterAddAction"] = 1;
$tdatasettings[".closePopupAfterAdd"] = 1;
$tdatasettings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasettings[".list"] = true;
}



$tdatasettings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasettings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasettings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasettings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasettings[".printFriendly"] = true;
}



$tdatasettings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasettings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasettings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasettings[".isUseAjaxSuggest"] = true;



						

$tdatasettings[".ajaxCodeSnippetAdded"] = false;

$tdatasettings[".buttonsAdded"] = false;

$tdatasettings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasettings[".isUseTimeForSearch"] = false;


$tdatasettings[".badgeColor"] = "DB7093";


$tdatasettings[".allSearchFields"] = array();
$tdatasettings[".filterFields"] = array();
$tdatasettings[".requiredSearchFields"] = array();

$tdatasettings[".googleLikeFields"] = array();
$tdatasettings[".googleLikeFields"][] = "id";
$tdatasettings[".googleLikeFields"][] = "tablename";
$tdatasettings[".googleLikeFields"][] = "field";
$tdatasettings[".googleLikeFields"][] = "label";
$tdatasettings[".googleLikeFields"][] = "visible";
$tdatasettings[".googleLikeFields"][] = "readonly";
$tdatasettings[".googleLikeFields"][] = "required";



$tdatasettings[".tableType"] = "list";

$tdatasettings[".printerPageOrientation"] = 0;
$tdatasettings[".nPrinterPageScale"] = 100;

$tdatasettings[".nPrinterSplitRecords"] = 40;

$tdatasettings[".geocodingEnabled"] = false;




$tdatasettings[".isDisplayLoading"] = true;






$tdatasettings[".pageSize"] = 20;

$tdatasettings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasettings[".strOrderBy"] = $tstrOrderBy;

$tdatasettings[".orderindexes"] = array();


$tdatasettings[".sqlHead"] = "SELECT id,  	tablename,  	field,  	`label`,  	visible,  	readonly,  	required";
$tdatasettings[".sqlFrom"] = "FROM settings";
$tdatasettings[".sqlWhereExpr"] = "";
$tdatasettings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasettings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasettings[".arrGroupsPerPage"] = $arrGPP;

$tdatasettings[".highlightSearchResults"] = true;

$tableKeyssettings = array();
$tableKeyssettings[] = "id";
$tdatasettings[".Keys"] = $tableKeyssettings;


$tdatasettings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

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


	$tdatasettings["id"] = $fdata;
		$tdatasettings[".searchableFields"][] = "id";
//	tablename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tablename";
	$fdata["GoodName"] = "tablename";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","tablename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tablename";

		$fdata["sourceSingle"] = "tablename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tablename";

	
	
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
	$edata["LookupTable"] = "dereja_schema_fields";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"field", 'lookupF'=>"field_name");
	$edata["autoCompleteFields"][] = array('masterF'=>"label", 'lookupF'=>"field_label");
	$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "table_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "table_name";

	

	
	$edata["LookupOrderBy"] = "table_name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "field";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "label";

	
	
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


	$tdatasettings["tablename"] = $fdata;
		$tdatasettings[".searchableFields"][] = "tablename";
//	field
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "field";
	$fdata["GoodName"] = "field";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","field");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field";

		$fdata["sourceSingle"] = "field";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field";

	
	
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
	$edata["LookupTable"] = "dereja_schema_fields";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "field_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "field_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "tablename", "lookup" => "table_name" );

	
	

	
	
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


	$tdatasettings["field"] = $fdata;
		$tdatasettings[".searchableFields"][] = "field";
//	label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "label";
	$fdata["GoodName"] = "label";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "label";

		$fdata["sourceSingle"] = "label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`label`";

	
	
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
	$edata["LookupTable"] = "dereja_schema_fields";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "field_label";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "field_label";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "tablename", "lookup" => "table_name" );

	
	

	
	
	
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


	$tdatasettings["label"] = $fdata;
		$tdatasettings[".searchableFields"][] = "label";
//	visible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "visible";
	$fdata["GoodName"] = "visible";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","visible");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "visible";

		$fdata["sourceSingle"] = "visible";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visible";

	
	
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


	$tdatasettings["visible"] = $fdata;
		$tdatasettings[".searchableFields"][] = "visible";
//	readonly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "readonly";
	$fdata["GoodName"] = "readonly";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","readonly");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "readonly";

		$fdata["sourceSingle"] = "readonly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "readonly";

	
	
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


	$tdatasettings["readonly"] = $fdata;
		$tdatasettings[".searchableFields"][] = "readonly";
//	required
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "required";
	$fdata["GoodName"] = "required";
	$fdata["ownerTable"] = "settings";
	$fdata["Label"] = GetFieldLabel("settings","required");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "required";

		$fdata["sourceSingle"] = "required";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "required";

	
	
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


	$tdatasettings["required"] = $fdata;
		$tdatasettings[".searchableFields"][] = "required";


$tables_data["settings"]=&$tdatasettings;
$field_labels["settings"] = &$fieldLabelssettings;
$fieldToolTips["settings"] = &$fieldToolTipssettings;
$placeHolders["settings"] = &$placeHolderssettings;
$page_titles["settings"] = &$pageTitlessettings;


changeTextControlsToDate( "settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	tablename,  	field,  	`label`,  	visible,  	readonly,  	required";
$proto0["m_strFrom"] = "FROM settings";
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
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tablename",
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto8["m_sql"] = "tablename";
$proto8["m_srcTableName"] = "settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "field",
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto10["m_sql"] = "field";
$proto10["m_srcTableName"] = "settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "label",
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto12["m_sql"] = "`label`";
$proto12["m_srcTableName"] = "settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "visible",
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto14["m_sql"] = "visible";
$proto14["m_srcTableName"] = "settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "readonly",
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto16["m_sql"] = "readonly";
$proto16["m_srcTableName"] = "settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "required",
	"m_strTable" => "settings",
	"m_srcTableName" => "settings"
));

$proto18["m_sql"] = "required";
$proto18["m_srcTableName"] = "settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "settings";
$proto21["m_srcTableName"] = "settings";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "tablename";
$proto21["m_columns"][] = "field";
$proto21["m_columns"][] = "label";
$proto21["m_columns"][] = "visible";
$proto21["m_columns"][] = "readonly";
$proto21["m_columns"][] = "required";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "settings";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "settings";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_settings = createSqlQuery_settings();


	
																								;

							

$tdatasettings[".sqlquery"] = $queryData_settings;



include_once(getabspath("include/settings_events.php"));
$tdatasettings[".hasEvents"] = true;

?>