<?php
$tdatadereja_schema_fields = array();
$tdatadereja_schema_fields[".searchableFields"] = array();
$tdatadereja_schema_fields[".ShortName"] = "dereja_schema_fields";
$tdatadereja_schema_fields[".OwnerID"] = "";
$tdatadereja_schema_fields[".OriginalTable"] = "dereja_schema_fields";


$tdatadereja_schema_fields[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_schema_fields[".originalPagesByType"] = $tdatadereja_schema_fields[".pagesByType"];
$tdatadereja_schema_fields[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_schema_fields[".originalPages"] = $tdatadereja_schema_fields[".pages"];
$tdatadereja_schema_fields[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_schema_fields[".originalDefaultPages"] = $tdatadereja_schema_fields[".defaultPages"];

//	field labels
$fieldLabelsdereja_schema_fields = array();
$fieldToolTipsdereja_schema_fields = array();
$pageTitlesdereja_schema_fields = array();
$placeHoldersdereja_schema_fields = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_schema_fields["English"] = array();
	$fieldToolTipsdereja_schema_fields["English"] = array();
	$placeHoldersdereja_schema_fields["English"] = array();
	$pageTitlesdereja_schema_fields["English"] = array();
	$fieldLabelsdereja_schema_fields["English"]["id"] = "Id";
	$fieldToolTipsdereja_schema_fields["English"]["id"] = "";
	$placeHoldersdereja_schema_fields["English"]["id"] = "";
	$fieldLabelsdereja_schema_fields["English"]["table_name"] = "Table Name";
	$fieldToolTipsdereja_schema_fields["English"]["table_name"] = "";
	$placeHoldersdereja_schema_fields["English"]["table_name"] = "";
	$fieldLabelsdereja_schema_fields["English"]["field_name"] = "Field Name";
	$fieldToolTipsdereja_schema_fields["English"]["field_name"] = "";
	$placeHoldersdereja_schema_fields["English"]["field_name"] = "";
	$fieldLabelsdereja_schema_fields["English"]["field_label"] = "Field Label";
	$fieldToolTipsdereja_schema_fields["English"]["field_label"] = "";
	$placeHoldersdereja_schema_fields["English"]["field_label"] = "";
	if (count($fieldToolTipsdereja_schema_fields["English"]))
		$tdatadereja_schema_fields[".isUseToolTips"] = true;
}


	$tdatadereja_schema_fields[".NCSearch"] = true;



$tdatadereja_schema_fields[".shortTableName"] = "dereja_schema_fields";
$tdatadereja_schema_fields[".nSecOptions"] = 0;

$tdatadereja_schema_fields[".mainTableOwnerID"] = "";
$tdatadereja_schema_fields[".entityType"] = 0;
$tdatadereja_schema_fields[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_schema_fields[".strOriginalTableName"] = "dereja_schema_fields";

	



$tdatadereja_schema_fields[".showAddInPopup"] = false;

$tdatadereja_schema_fields[".showEditInPopup"] = false;

$tdatadereja_schema_fields[".showViewInPopup"] = false;

$tdatadereja_schema_fields[".listAjax"] = false;
//	temporary
//$tdatadereja_schema_fields[".listAjax"] = false;

	$tdatadereja_schema_fields[".audit"] = false;

	$tdatadereja_schema_fields[".locking"] = false;


$pages = $tdatadereja_schema_fields[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_schema_fields[".edit"] = true;
	$tdatadereja_schema_fields[".afterEditAction"] = 1;
	$tdatadereja_schema_fields[".closePopupAfterEdit"] = 1;
	$tdatadereja_schema_fields[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_schema_fields[".add"] = true;
$tdatadereja_schema_fields[".afterAddAction"] = 1;
$tdatadereja_schema_fields[".closePopupAfterAdd"] = 1;
$tdatadereja_schema_fields[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_schema_fields[".list"] = true;
}



$tdatadereja_schema_fields[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_schema_fields[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_schema_fields[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_schema_fields[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_schema_fields[".printFriendly"] = true;
}



$tdatadereja_schema_fields[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_schema_fields[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_schema_fields[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_schema_fields[".isUseAjaxSuggest"] = true;



												

$tdatadereja_schema_fields[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_schema_fields[".buttonsAdded"] = false;

$tdatadereja_schema_fields[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_schema_fields[".isUseTimeForSearch"] = false;


$tdatadereja_schema_fields[".badgeColor"] = "DB7093";


$tdatadereja_schema_fields[".allSearchFields"] = array();
$tdatadereja_schema_fields[".filterFields"] = array();
$tdatadereja_schema_fields[".requiredSearchFields"] = array();

$tdatadereja_schema_fields[".googleLikeFields"] = array();
$tdatadereja_schema_fields[".googleLikeFields"][] = "id";
$tdatadereja_schema_fields[".googleLikeFields"][] = "table_name";
$tdatadereja_schema_fields[".googleLikeFields"][] = "field_name";
$tdatadereja_schema_fields[".googleLikeFields"][] = "field_label";



$tdatadereja_schema_fields[".tableType"] = "list";

$tdatadereja_schema_fields[".printerPageOrientation"] = 0;
$tdatadereja_schema_fields[".nPrinterPageScale"] = 100;

$tdatadereja_schema_fields[".nPrinterSplitRecords"] = 40;

$tdatadereja_schema_fields[".geocodingEnabled"] = false;




$tdatadereja_schema_fields[".isDisplayLoading"] = true;






$tdatadereja_schema_fields[".pageSize"] = 20;

$tdatadereja_schema_fields[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadereja_schema_fields[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_schema_fields[".orderindexes"] = array();


$tdatadereja_schema_fields[".sqlHead"] = "SELECT id,  	table_name,  	field_name,  	field_label";
$tdatadereja_schema_fields[".sqlFrom"] = "FROM dereja_schema_fields";
$tdatadereja_schema_fields[".sqlWhereExpr"] = "";
$tdatadereja_schema_fields[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_schema_fields[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_schema_fields[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_schema_fields[".highlightSearchResults"] = true;

$tableKeysdereja_schema_fields = array();
$tableKeysdereja_schema_fields[] = "id";
$tdatadereja_schema_fields[".Keys"] = $tableKeysdereja_schema_fields;


$tdatadereja_schema_fields[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dereja_schema_fields";
	$fdata["Label"] = GetFieldLabel("dereja_schema_fields","id");
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


	$tdatadereja_schema_fields["id"] = $fdata;
		$tdatadereja_schema_fields[".searchableFields"][] = "id";
//	table_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table_name";
	$fdata["GoodName"] = "table_name";
	$fdata["ownerTable"] = "dereja_schema_fields";
	$fdata["Label"] = GetFieldLabel("dereja_schema_fields","table_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table_name";

		$fdata["sourceSingle"] = "table_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "table_name";

	
	
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
	$edata["LookupTable"] = "dereja_tables";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "table_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "table_name";

	

	
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


	$tdatadereja_schema_fields["table_name"] = $fdata;
		$tdatadereja_schema_fields[".searchableFields"][] = "table_name";
//	field_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "field_name";
	$fdata["GoodName"] = "field_name";
	$fdata["ownerTable"] = "dereja_schema_fields";
	$fdata["Label"] = GetFieldLabel("dereja_schema_fields","field_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_name";

		$fdata["sourceSingle"] = "field_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_name";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_schema_fields["field_name"] = $fdata;
		$tdatadereja_schema_fields[".searchableFields"][] = "field_name";
//	field_label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "field_label";
	$fdata["GoodName"] = "field_label";
	$fdata["ownerTable"] = "dereja_schema_fields";
	$fdata["Label"] = GetFieldLabel("dereja_schema_fields","field_label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "field_label";

		$fdata["sourceSingle"] = "field_label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_label";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadereja_schema_fields["field_label"] = $fdata;
		$tdatadereja_schema_fields[".searchableFields"][] = "field_label";


$tables_data["dereja_schema_fields"]=&$tdatadereja_schema_fields;
$field_labels["dereja_schema_fields"] = &$fieldLabelsdereja_schema_fields;
$fieldToolTips["dereja_schema_fields"] = &$fieldToolTipsdereja_schema_fields;
$placeHolders["dereja_schema_fields"] = &$placeHoldersdereja_schema_fields;
$page_titles["dereja_schema_fields"] = &$pageTitlesdereja_schema_fields;


changeTextControlsToDate( "dereja_schema_fields" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dereja_schema_fields"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dereja_schema_fields"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dereja_tables";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dereja_tables";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dereja_tables";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dereja_schema_fields"][0] = $masterParams;
				$masterTablesData["dereja_schema_fields"][0]["masterKeys"] = array();
	$masterTablesData["dereja_schema_fields"][0]["masterKeys"][]="table_name";
				$masterTablesData["dereja_schema_fields"][0]["detailKeys"] = array();
	$masterTablesData["dereja_schema_fields"][0]["detailKeys"][]="table_name";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_schema_fields()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	table_name,  	field_name,  	field_label";
$proto0["m_strFrom"] = "FROM dereja_schema_fields";
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
	"m_strTable" => "dereja_schema_fields",
	"m_srcTableName" => "dereja_schema_fields"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dereja_schema_fields";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table_name",
	"m_strTable" => "dereja_schema_fields",
	"m_srcTableName" => "dereja_schema_fields"
));

$proto8["m_sql"] = "table_name";
$proto8["m_srcTableName"] = "dereja_schema_fields";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "field_name",
	"m_strTable" => "dereja_schema_fields",
	"m_srcTableName" => "dereja_schema_fields"
));

$proto10["m_sql"] = "field_name";
$proto10["m_srcTableName"] = "dereja_schema_fields";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "field_label",
	"m_strTable" => "dereja_schema_fields",
	"m_srcTableName" => "dereja_schema_fields"
));

$proto12["m_sql"] = "field_label";
$proto12["m_srcTableName"] = "dereja_schema_fields";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "dereja_schema_fields";
$proto15["m_srcTableName"] = "dereja_schema_fields";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "table_name";
$proto15["m_columns"][] = "field_name";
$proto15["m_columns"][] = "field_label";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "dereja_schema_fields";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "dereja_schema_fields";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dereja_schema_fields";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_schema_fields = createSqlQuery_dereja_schema_fields();


	
																								;

				

$tdatadereja_schema_fields[".sqlquery"] = $queryData_dereja_schema_fields;



$tdatadereja_schema_fields[".hasEvents"] = false;

?>