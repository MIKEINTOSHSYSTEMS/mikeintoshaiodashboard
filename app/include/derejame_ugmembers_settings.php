<?php
$tdataderejame_ugmembers = array();
$tdataderejame_ugmembers[".searchableFields"] = array();
$tdataderejame_ugmembers[".ShortName"] = "derejame_ugmembers";
$tdataderejame_ugmembers[".OwnerID"] = "";
$tdataderejame_ugmembers[".OriginalTable"] = "derejame_ugmembers";


$tdataderejame_ugmembers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataderejame_ugmembers[".originalPagesByType"] = $tdataderejame_ugmembers[".pagesByType"];
$tdataderejame_ugmembers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataderejame_ugmembers[".originalPages"] = $tdataderejame_ugmembers[".pages"];
$tdataderejame_ugmembers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataderejame_ugmembers[".originalDefaultPages"] = $tdataderejame_ugmembers[".defaultPages"];

//	field labels
$fieldLabelsderejame_ugmembers = array();
$fieldToolTipsderejame_ugmembers = array();
$pageTitlesderejame_ugmembers = array();
$placeHoldersderejame_ugmembers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsderejame_ugmembers["English"] = array();
	$fieldToolTipsderejame_ugmembers["English"] = array();
	$placeHoldersderejame_ugmembers["English"] = array();
	$pageTitlesderejame_ugmembers["English"] = array();
	$fieldLabelsderejame_ugmembers["English"]["UserName"] = "User Name";
	$fieldToolTipsderejame_ugmembers["English"]["UserName"] = "";
	$placeHoldersderejame_ugmembers["English"]["UserName"] = "";
	$fieldLabelsderejame_ugmembers["English"]["GroupID"] = "Group ID";
	$fieldToolTipsderejame_ugmembers["English"]["GroupID"] = "";
	$placeHoldersderejame_ugmembers["English"]["GroupID"] = "";
	if (count($fieldToolTipsderejame_ugmembers["English"]))
		$tdataderejame_ugmembers[".isUseToolTips"] = true;
}


	$tdataderejame_ugmembers[".NCSearch"] = true;



$tdataderejame_ugmembers[".shortTableName"] = "derejame_ugmembers";
$tdataderejame_ugmembers[".nSecOptions"] = 0;

$tdataderejame_ugmembers[".mainTableOwnerID"] = "";
$tdataderejame_ugmembers[".entityType"] = 0;
$tdataderejame_ugmembers[".connId"] = "deredevatderejadevmerqconsulta";


$tdataderejame_ugmembers[".strOriginalTableName"] = "derejame_ugmembers";

	



$tdataderejame_ugmembers[".showAddInPopup"] = false;

$tdataderejame_ugmembers[".showEditInPopup"] = false;

$tdataderejame_ugmembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataderejame_ugmembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataderejame_ugmembers[".listAjax"] = false;
//	temporary
$tdataderejame_ugmembers[".listAjax"] = false;

	$tdataderejame_ugmembers[".audit"] = false;

	$tdataderejame_ugmembers[".locking"] = false;


$pages = $tdataderejame_ugmembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataderejame_ugmembers[".edit"] = true;
	$tdataderejame_ugmembers[".afterEditAction"] = 1;
	$tdataderejame_ugmembers[".closePopupAfterEdit"] = 1;
	$tdataderejame_ugmembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataderejame_ugmembers[".add"] = true;
$tdataderejame_ugmembers[".afterAddAction"] = 1;
$tdataderejame_ugmembers[".closePopupAfterAdd"] = 1;
$tdataderejame_ugmembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataderejame_ugmembers[".list"] = true;
}



$tdataderejame_ugmembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataderejame_ugmembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataderejame_ugmembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataderejame_ugmembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataderejame_ugmembers[".printFriendly"] = true;
}



$tdataderejame_ugmembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataderejame_ugmembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataderejame_ugmembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataderejame_ugmembers[".isUseAjaxSuggest"] = true;

$tdataderejame_ugmembers[".rowHighlite"] = true;





$tdataderejame_ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdataderejame_ugmembers[".buttonsAdded"] = false;

$tdataderejame_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataderejame_ugmembers[".isUseTimeForSearch"] = false;


$tdataderejame_ugmembers[".badgeColor"] = "1E90FF";


$tdataderejame_ugmembers[".allSearchFields"] = array();
$tdataderejame_ugmembers[".filterFields"] = array();
$tdataderejame_ugmembers[".requiredSearchFields"] = array();

$tdataderejame_ugmembers[".googleLikeFields"] = array();
$tdataderejame_ugmembers[".googleLikeFields"][] = "UserName";
$tdataderejame_ugmembers[".googleLikeFields"][] = "GroupID";



$tdataderejame_ugmembers[".tableType"] = "list";

$tdataderejame_ugmembers[".printerPageOrientation"] = 0;
$tdataderejame_ugmembers[".nPrinterPageScale"] = 100;

$tdataderejame_ugmembers[".nPrinterSplitRecords"] = 40;

$tdataderejame_ugmembers[".geocodingEnabled"] = false;










$tdataderejame_ugmembers[".pageSize"] = 20;

$tdataderejame_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataderejame_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdataderejame_ugmembers[".orderindexes"] = array();


$tdataderejame_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID";
$tdataderejame_ugmembers[".sqlFrom"] = "FROM derejame_ugmembers";
$tdataderejame_ugmembers[".sqlWhereExpr"] = "";
$tdataderejame_ugmembers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataderejame_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataderejame_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdataderejame_ugmembers[".highlightSearchResults"] = true;

$tableKeysderejame_ugmembers = array();
$tableKeysderejame_ugmembers[] = "UserName";
$tableKeysderejame_ugmembers[] = "GroupID";
$tdataderejame_ugmembers[".Keys"] = $tableKeysderejame_ugmembers;


$tdataderejame_ugmembers[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "derejame_ugmembers";
	$fdata["Label"] = GetFieldLabel("derejame_ugmembers","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UserName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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


	$tdataderejame_ugmembers["UserName"] = $fdata;
		$tdataderejame_ugmembers[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "derejame_ugmembers";
	$fdata["Label"] = GetFieldLabel("derejame_ugmembers","GroupID");
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


	$tdataderejame_ugmembers["GroupID"] = $fdata;
		$tdataderejame_ugmembers[".searchableFields"][] = "GroupID";


$tables_data["derejame_ugmembers"]=&$tdataderejame_ugmembers;
$field_labels["derejame_ugmembers"] = &$fieldLabelsderejame_ugmembers;
$fieldToolTips["derejame_ugmembers"] = &$fieldToolTipsderejame_ugmembers;
$placeHolders["derejame_ugmembers"] = &$placeHoldersderejame_ugmembers;
$page_titles["derejame_ugmembers"] = &$pageTitlesderejame_ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["derejame_ugmembers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["derejame_ugmembers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_derejame_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID";
$proto0["m_strFrom"] = "FROM derejame_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "derejame_ugmembers",
	"m_srcTableName" => "derejame_ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "derejame_ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "derejame_ugmembers",
	"m_srcTableName" => "derejame_ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "derejame_ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "derejame_ugmembers";
$proto11["m_srcTableName"] = "derejame_ugmembers";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "UserName";
$proto11["m_columns"][] = "GroupID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "derejame_ugmembers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "derejame_ugmembers";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="derejame_ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_derejame_ugmembers = createSqlQuery_derejame_ugmembers();


	
		;

		

$tdataderejame_ugmembers[".sqlquery"] = $queryData_derejame_ugmembers;



$tableEvents["derejame_ugmembers"] = new eventsBase;
$tdataderejame_ugmembers[".hasEvents"] = false;

?>