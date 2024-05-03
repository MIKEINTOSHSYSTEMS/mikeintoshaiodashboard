<?php
$tdatasv_groups = array();
$tdatasv_groups[".searchableFields"] = array();
$tdatasv_groups[".ShortName"] = "sv_groups";
$tdatasv_groups[".OwnerID"] = "";
$tdatasv_groups[".OriginalTable"] = "sv_groups";


$tdatasv_groups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasv_groups[".originalPagesByType"] = $tdatasv_groups[".pagesByType"];
$tdatasv_groups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasv_groups[".originalPages"] = $tdatasv_groups[".pages"];
$tdatasv_groups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasv_groups[".originalDefaultPages"] = $tdatasv_groups[".defaultPages"];

//	field labels
$fieldLabelssv_groups = array();
$fieldToolTipssv_groups = array();
$pageTitlessv_groups = array();
$placeHolderssv_groups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_groups["English"] = array();
	$fieldToolTipssv_groups["English"] = array();
	$placeHolderssv_groups["English"] = array();
	$pageTitlessv_groups["English"] = array();
	$fieldLabelssv_groups["English"]["id"] = "ID";
	$fieldToolTipssv_groups["English"]["id"] = "";
	$placeHolderssv_groups["English"]["id"] = "";
	$fieldLabelssv_groups["English"]["sid"] = "Sid";
	$fieldToolTipssv_groups["English"]["sid"] = "";
	$placeHolderssv_groups["English"]["sid"] = "";
	$fieldLabelssv_groups["English"]["name"] = "Name";
	$fieldToolTipssv_groups["English"]["name"] = "";
	$placeHolderssv_groups["English"]["name"] = "";
	$fieldLabelssv_groups["English"]["sortorder"] = "Sortorder";
	$fieldToolTipssv_groups["English"]["sortorder"] = "";
	$placeHolderssv_groups["English"]["sortorder"] = "";
	$fieldLabelssv_groups["English"]["description"] = "Description";
	$fieldToolTipssv_groups["English"]["description"] = "";
	$placeHolderssv_groups["English"]["description"] = "";
	if (count($fieldToolTipssv_groups["English"]))
		$tdatasv_groups[".isUseToolTips"] = true;
}


	$tdatasv_groups[".NCSearch"] = true;



$tdatasv_groups[".shortTableName"] = "sv_groups";
$tdatasv_groups[".nSecOptions"] = 0;

$tdatasv_groups[".mainTableOwnerID"] = "";
$tdatasv_groups[".entityType"] = 1;
$tdatasv_groups[".connId"] = "project_at_localhost";


$tdatasv_groups[".strOriginalTableName"] = "sv_groups";

	



$tdatasv_groups[".showAddInPopup"] = false;

$tdatasv_groups[".showEditInPopup"] = true;

$tdatasv_groups[".showViewInPopup"] = false;

$tdatasv_groups[".listAjax"] = false;
//	temporary
//$tdatasv_groups[".listAjax"] = false;

	$tdatasv_groups[".audit"] = false;

	$tdatasv_groups[".locking"] = false;


$pages = $tdatasv_groups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_groups[".edit"] = true;
	$tdatasv_groups[".afterEditAction"] = 1;
	$tdatasv_groups[".closePopupAfterEdit"] = 1;
	$tdatasv_groups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_groups[".add"] = true;
$tdatasv_groups[".afterAddAction"] = 1;
$tdatasv_groups[".closePopupAfterAdd"] = 1;
$tdatasv_groups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_groups[".list"] = true;
}

$tdatasv_groups[".updateSelected"] = true;


$tdatasv_groups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_groups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_groups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_groups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_groups[".printFriendly"] = true;
}



$tdatasv_groups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_groups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_groups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_groups[".isUseAjaxSuggest"] = true;



																		

$tdatasv_groups[".ajaxCodeSnippetAdded"] = false;

$tdatasv_groups[".buttonsAdded"] = false;

$tdatasv_groups[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasv_groups[".isUseTimeForSearch"] = false;


$tdatasv_groups[".badgeColor"] = "6DA5C8";


$tdatasv_groups[".allSearchFields"] = array();
$tdatasv_groups[".filterFields"] = array();
$tdatasv_groups[".requiredSearchFields"] = array();

$tdatasv_groups[".googleLikeFields"] = array();
$tdatasv_groups[".googleLikeFields"][] = "id";
$tdatasv_groups[".googleLikeFields"][] = "sid";
$tdatasv_groups[".googleLikeFields"][] = "name";
$tdatasv_groups[".googleLikeFields"][] = "sortorder";
$tdatasv_groups[".googleLikeFields"][] = "description";



$tdatasv_groups[".tableType"] = "list";

$tdatasv_groups[".printerPageOrientation"] = 0;
$tdatasv_groups[".nPrinterPageScale"] = 100;

$tdatasv_groups[".nPrinterSplitRecords"] = 40;

$tdatasv_groups[".geocodingEnabled"] = false;










$tdatasv_groups[".pageSize"] = 20;

$tdatasv_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_groups[".strOrderBy"] = $tstrOrderBy;

$tdatasv_groups[".orderindexes"] = array();


$tdatasv_groups[".sqlHead"] = "SELECT id,  sid,  name,  sortorder,  description";
$tdatasv_groups[".sqlFrom"] = "FROM sv_groups";
$tdatasv_groups[".sqlWhereExpr"] = "";
$tdatasv_groups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_groups[".highlightSearchResults"] = true;

$tableKeyssv_groups = array();
$tableKeyssv_groups[] = "id";
$tdatasv_groups[".Keys"] = $tableKeyssv_groups;


$tdatasv_groups[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_groups","id");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_groups["id"] = $fdata;
		$tdatasv_groups[".searchableFields"][] = "id";
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_groups","sid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_groups["sid"] = $fdata;
		$tdatasv_groups[".searchableFields"][] = "sid";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_groups","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatasv_groups["name"] = $fdata;
		$tdatasv_groups[".searchableFields"][] = "name";
//	sortorder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sortorder";
	$fdata["GoodName"] = "sortorder";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_groups","sortorder");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sortorder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sortorder";

	
	
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


	$tdatasv_groups["sortorder"] = $fdata;
		$tdatasv_groups[".searchableFields"][] = "sortorder";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "sv_groups";
	$fdata["Label"] = GetFieldLabel("sv_groups","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatasv_groups["description"] = $fdata;
		$tdatasv_groups[".searchableFields"][] = "description";


$tables_data["sv_groups"]=&$tdatasv_groups;
$field_labels["sv_groups"] = &$fieldLabelssv_groups;
$fieldToolTips["sv_groups"] = &$fieldToolTipssv_groups;
$placeHolders["sv_groups"] = &$placeHolderssv_groups;
$page_titles["sv_groups"] = &$pageTitlessv_groups;


changeTextControlsToDate( "sv_groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_groups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_groups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  sid,  name,  sortorder,  description";
$proto0["m_strFrom"] = "FROM sv_groups";
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
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_groups"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_groups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_groups"
));

$proto8["m_sql"] = "sid";
$proto8["m_srcTableName"] = "sv_groups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_groups"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "sv_groups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sortorder",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_groups"
));

$proto12["m_sql"] = "sortorder";
$proto12["m_srcTableName"] = "sv_groups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "sv_groups",
	"m_srcTableName" => "sv_groups"
));

$proto14["m_sql"] = "description";
$proto14["m_srcTableName"] = "sv_groups";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "sv_groups";
$proto17["m_srcTableName"] = "sv_groups";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "sid";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "sortorder";
$proto17["m_columns"][] = "description";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "sv_groups";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "sv_groups";
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
$proto0["m_srcTableName"]="sv_groups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_groups = createSqlQuery_sv_groups();


	
		;

					

$tdatasv_groups[".sqlquery"] = $queryData_sv_groups;



include_once(getabspath("include/sv_groups_events.php"));
$tdatasv_groups[".hasEvents"] = true;

?>