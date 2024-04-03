<?php
$tdataderejame_ugrights = array();
$tdataderejame_ugrights[".searchableFields"] = array();
$tdataderejame_ugrights[".ShortName"] = "derejame_ugrights";
$tdataderejame_ugrights[".OwnerID"] = "";
$tdataderejame_ugrights[".OriginalTable"] = "derejame_ugrights";


$tdataderejame_ugrights[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataderejame_ugrights[".originalPagesByType"] = $tdataderejame_ugrights[".pagesByType"];
$tdataderejame_ugrights[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataderejame_ugrights[".originalPages"] = $tdataderejame_ugrights[".pages"];
$tdataderejame_ugrights[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataderejame_ugrights[".originalDefaultPages"] = $tdataderejame_ugrights[".defaultPages"];

//	field labels
$fieldLabelsderejame_ugrights = array();
$fieldToolTipsderejame_ugrights = array();
$pageTitlesderejame_ugrights = array();
$placeHoldersderejame_ugrights = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsderejame_ugrights["English"] = array();
	$fieldToolTipsderejame_ugrights["English"] = array();
	$placeHoldersderejame_ugrights["English"] = array();
	$pageTitlesderejame_ugrights["English"] = array();
	$fieldLabelsderejame_ugrights["English"]["TableName"] = "Table Name";
	$fieldToolTipsderejame_ugrights["English"]["TableName"] = "";
	$placeHoldersderejame_ugrights["English"]["TableName"] = "";
	$fieldLabelsderejame_ugrights["English"]["GroupID"] = "Group ID";
	$fieldToolTipsderejame_ugrights["English"]["GroupID"] = "";
	$placeHoldersderejame_ugrights["English"]["GroupID"] = "";
	$fieldLabelsderejame_ugrights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipsderejame_ugrights["English"]["AccessMask"] = "";
	$placeHoldersderejame_ugrights["English"]["AccessMask"] = "";
	$fieldLabelsderejame_ugrights["English"]["Page"] = "Page";
	$fieldToolTipsderejame_ugrights["English"]["Page"] = "";
	$placeHoldersderejame_ugrights["English"]["Page"] = "";
	if (count($fieldToolTipsderejame_ugrights["English"]))
		$tdataderejame_ugrights[".isUseToolTips"] = true;
}


	$tdataderejame_ugrights[".NCSearch"] = true;



$tdataderejame_ugrights[".shortTableName"] = "derejame_ugrights";
$tdataderejame_ugrights[".nSecOptions"] = 0;

$tdataderejame_ugrights[".mainTableOwnerID"] = "";
$tdataderejame_ugrights[".entityType"] = 1;
$tdataderejame_ugrights[".connId"] = "deredevatderejadevmerqconsulta";


$tdataderejame_ugrights[".strOriginalTableName"] = "derejame_ugrights";

	



$tdataderejame_ugrights[".showAddInPopup"] = false;

$tdataderejame_ugrights[".showEditInPopup"] = false;

$tdataderejame_ugrights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataderejame_ugrights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataderejame_ugrights[".listAjax"] = false;
//	temporary
$tdataderejame_ugrights[".listAjax"] = false;

	$tdataderejame_ugrights[".audit"] = false;

	$tdataderejame_ugrights[".locking"] = false;


$pages = $tdataderejame_ugrights[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataderejame_ugrights[".edit"] = true;
	$tdataderejame_ugrights[".afterEditAction"] = 1;
	$tdataderejame_ugrights[".closePopupAfterEdit"] = 1;
	$tdataderejame_ugrights[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataderejame_ugrights[".add"] = true;
$tdataderejame_ugrights[".afterAddAction"] = 1;
$tdataderejame_ugrights[".closePopupAfterAdd"] = 1;
$tdataderejame_ugrights[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataderejame_ugrights[".list"] = true;
}



$tdataderejame_ugrights[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataderejame_ugrights[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataderejame_ugrights[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataderejame_ugrights[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataderejame_ugrights[".printFriendly"] = true;
}



$tdataderejame_ugrights[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataderejame_ugrights[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataderejame_ugrights[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataderejame_ugrights[".isUseAjaxSuggest"] = true;

$tdataderejame_ugrights[".rowHighlite"] = true;





$tdataderejame_ugrights[".ajaxCodeSnippetAdded"] = false;

$tdataderejame_ugrights[".buttonsAdded"] = false;

$tdataderejame_ugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdataderejame_ugrights[".isUseTimeForSearch"] = false;


$tdataderejame_ugrights[".badgeColor"] = "BC8F8F";


$tdataderejame_ugrights[".allSearchFields"] = array();
$tdataderejame_ugrights[".filterFields"] = array();
$tdataderejame_ugrights[".requiredSearchFields"] = array();

$tdataderejame_ugrights[".googleLikeFields"] = array();
$tdataderejame_ugrights[".googleLikeFields"][] = "TableName";
$tdataderejame_ugrights[".googleLikeFields"][] = "GroupID";
$tdataderejame_ugrights[".googleLikeFields"][] = "AccessMask";
$tdataderejame_ugrights[".googleLikeFields"][] = "Page";



$tdataderejame_ugrights[".tableType"] = "list";

$tdataderejame_ugrights[".printerPageOrientation"] = 0;
$tdataderejame_ugrights[".nPrinterPageScale"] = 100;

$tdataderejame_ugrights[".nPrinterSplitRecords"] = 40;

$tdataderejame_ugrights[".geocodingEnabled"] = false;










$tdataderejame_ugrights[".pageSize"] = 20;

$tdataderejame_ugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataderejame_ugrights[".strOrderBy"] = $tstrOrderBy;

$tdataderejame_ugrights[".orderindexes"] = array();


$tdataderejame_ugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask,  	Page";
$tdataderejame_ugrights[".sqlFrom"] = "FROM derejame_ugrights";
$tdataderejame_ugrights[".sqlWhereExpr"] = "";
$tdataderejame_ugrights[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataderejame_ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataderejame_ugrights[".arrGroupsPerPage"] = $arrGPP;

$tdataderejame_ugrights[".highlightSearchResults"] = true;

$tableKeysderejame_ugrights = array();
$tableKeysderejame_ugrights[] = "TableName";
$tableKeysderejame_ugrights[] = "GroupID";
$tdataderejame_ugrights[".Keys"] = $tableKeysderejame_ugrights;


$tdataderejame_ugrights[".hideMobileList"] = array();




//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "derejame_ugrights";
	$fdata["Label"] = GetFieldLabel("derejame_ugrights","TableName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TableName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

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


	$tdataderejame_ugrights["TableName"] = $fdata;
		$tdataderejame_ugrights[".searchableFields"][] = "TableName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "derejame_ugrights";
	$fdata["Label"] = GetFieldLabel("derejame_ugrights","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "GroupID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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

	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataderejame_ugrights["GroupID"] = $fdata;
		$tdataderejame_ugrights[".searchableFields"][] = "GroupID";
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "derejame_ugrights";
	$fdata["Label"] = GetFieldLabel("derejame_ugrights","AccessMask");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AccessMask";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdataderejame_ugrights["AccessMask"] = $fdata;
		$tdataderejame_ugrights[".searchableFields"][] = "AccessMask";
//	Page
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Page";
	$fdata["GoodName"] = "Page";
	$fdata["ownerTable"] = "derejame_ugrights";
	$fdata["Label"] = GetFieldLabel("derejame_ugrights","Page");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Page";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Page";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataderejame_ugrights["Page"] = $fdata;
		$tdataderejame_ugrights[".searchableFields"][] = "Page";


$tables_data["derejame_ugrights"]=&$tdataderejame_ugrights;
$field_labels["derejame_ugrights"] = &$fieldLabelsderejame_ugrights;
$fieldToolTips["derejame_ugrights"] = &$fieldToolTipsderejame_ugrights;
$placeHolders["derejame_ugrights"] = &$placeHoldersderejame_ugrights;
$page_titles["derejame_ugrights"] = &$pageTitlesderejame_ugrights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["derejame_ugrights"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["derejame_ugrights"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_derejame_ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask,  	Page";
$proto0["m_strFrom"] = "FROM derejame_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "derejame_ugrights",
	"m_srcTableName" => "derejame_ugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "derejame_ugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "derejame_ugrights",
	"m_srcTableName" => "derejame_ugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "derejame_ugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "derejame_ugrights",
	"m_srcTableName" => "derejame_ugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "derejame_ugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Page",
	"m_strTable" => "derejame_ugrights",
	"m_srcTableName" => "derejame_ugrights"
));

$proto12["m_sql"] = "Page";
$proto12["m_srcTableName"] = "derejame_ugrights";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "derejame_ugrights";
$proto15["m_srcTableName"] = "derejame_ugrights";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TableName";
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "AccessMask";
$proto15["m_columns"][] = "Page";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "derejame_ugrights";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "derejame_ugrights";
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
$proto0["m_srcTableName"]="derejame_ugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_derejame_ugrights = createSqlQuery_derejame_ugrights();


	
		;

				

$tdataderejame_ugrights[".sqlquery"] = $queryData_derejame_ugrights;



$tableEvents["derejame_ugrights"] = new eventsBase;
$tdataderejame_ugrights[".hasEvents"] = false;

?>