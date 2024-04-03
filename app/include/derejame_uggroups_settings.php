<?php
$tdataderejame_uggroups = array();
$tdataderejame_uggroups[".searchableFields"] = array();
$tdataderejame_uggroups[".ShortName"] = "derejame_uggroups";
$tdataderejame_uggroups[".OwnerID"] = "";
$tdataderejame_uggroups[".OriginalTable"] = "derejame_uggroups";


$tdataderejame_uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataderejame_uggroups[".originalPagesByType"] = $tdataderejame_uggroups[".pagesByType"];
$tdataderejame_uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataderejame_uggroups[".originalPages"] = $tdataderejame_uggroups[".pages"];
$tdataderejame_uggroups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataderejame_uggroups[".originalDefaultPages"] = $tdataderejame_uggroups[".defaultPages"];

//	field labels
$fieldLabelsderejame_uggroups = array();
$fieldToolTipsderejame_uggroups = array();
$pageTitlesderejame_uggroups = array();
$placeHoldersderejame_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsderejame_uggroups["English"] = array();
	$fieldToolTipsderejame_uggroups["English"] = array();
	$placeHoldersderejame_uggroups["English"] = array();
	$pageTitlesderejame_uggroups["English"] = array();
	$fieldLabelsderejame_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipsderejame_uggroups["English"]["GroupID"] = "";
	$placeHoldersderejame_uggroups["English"]["GroupID"] = "";
	$fieldLabelsderejame_uggroups["English"]["Label"] = "Label";
	$fieldToolTipsderejame_uggroups["English"]["Label"] = "";
	$placeHoldersderejame_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipsderejame_uggroups["English"]))
		$tdataderejame_uggroups[".isUseToolTips"] = true;
}


	$tdataderejame_uggroups[".NCSearch"] = true;



$tdataderejame_uggroups[".shortTableName"] = "derejame_uggroups";
$tdataderejame_uggroups[".nSecOptions"] = 0;

$tdataderejame_uggroups[".mainTableOwnerID"] = "";
$tdataderejame_uggroups[".entityType"] = 0;
$tdataderejame_uggroups[".connId"] = "deredevatderejadevmerqconsulta";


$tdataderejame_uggroups[".strOriginalTableName"] = "derejame_uggroups";

	



$tdataderejame_uggroups[".showAddInPopup"] = false;

$tdataderejame_uggroups[".showEditInPopup"] = false;

$tdataderejame_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataderejame_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataderejame_uggroups[".listAjax"] = false;
//	temporary
$tdataderejame_uggroups[".listAjax"] = false;

	$tdataderejame_uggroups[".audit"] = false;

	$tdataderejame_uggroups[".locking"] = false;


$pages = $tdataderejame_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataderejame_uggroups[".edit"] = true;
	$tdataderejame_uggroups[".afterEditAction"] = 1;
	$tdataderejame_uggroups[".closePopupAfterEdit"] = 1;
	$tdataderejame_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataderejame_uggroups[".add"] = true;
$tdataderejame_uggroups[".afterAddAction"] = 1;
$tdataderejame_uggroups[".closePopupAfterAdd"] = 1;
$tdataderejame_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataderejame_uggroups[".list"] = true;
}



$tdataderejame_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataderejame_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataderejame_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataderejame_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataderejame_uggroups[".printFriendly"] = true;
}



$tdataderejame_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataderejame_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataderejame_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataderejame_uggroups[".isUseAjaxSuggest"] = true;

$tdataderejame_uggroups[".rowHighlite"] = true;





$tdataderejame_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdataderejame_uggroups[".buttonsAdded"] = false;

$tdataderejame_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdataderejame_uggroups[".isUseTimeForSearch"] = false;


$tdataderejame_uggroups[".badgeColor"] = "DAA520";


$tdataderejame_uggroups[".allSearchFields"] = array();
$tdataderejame_uggroups[".filterFields"] = array();
$tdataderejame_uggroups[".requiredSearchFields"] = array();

$tdataderejame_uggroups[".googleLikeFields"] = array();
$tdataderejame_uggroups[".googleLikeFields"][] = "GroupID";
$tdataderejame_uggroups[".googleLikeFields"][] = "Label";



$tdataderejame_uggroups[".tableType"] = "list";

$tdataderejame_uggroups[".printerPageOrientation"] = 0;
$tdataderejame_uggroups[".nPrinterPageScale"] = 100;

$tdataderejame_uggroups[".nPrinterSplitRecords"] = 40;

$tdataderejame_uggroups[".geocodingEnabled"] = false;










$tdataderejame_uggroups[".pageSize"] = 20;

$tdataderejame_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataderejame_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdataderejame_uggroups[".orderindexes"] = array();


$tdataderejame_uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdataderejame_uggroups[".sqlFrom"] = "FROM derejame_uggroups";
$tdataderejame_uggroups[".sqlWhereExpr"] = "";
$tdataderejame_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataderejame_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataderejame_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdataderejame_uggroups[".highlightSearchResults"] = true;

$tableKeysderejame_uggroups = array();
$tableKeysderejame_uggroups[] = "GroupID";
$tdataderejame_uggroups[".Keys"] = $tableKeysderejame_uggroups;


$tdataderejame_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "derejame_uggroups";
	$fdata["Label"] = GetFieldLabel("derejame_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdataderejame_uggroups["GroupID"] = $fdata;
		$tdataderejame_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "derejame_uggroups";
	$fdata["Label"] = GetFieldLabel("derejame_uggroups","Label");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Label";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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


	$tdataderejame_uggroups["Label"] = $fdata;
		$tdataderejame_uggroups[".searchableFields"][] = "Label";


$tables_data["derejame_uggroups"]=&$tdataderejame_uggroups;
$field_labels["derejame_uggroups"] = &$fieldLabelsderejame_uggroups;
$fieldToolTips["derejame_uggroups"] = &$fieldToolTipsderejame_uggroups;
$placeHolders["derejame_uggroups"] = &$placeHoldersderejame_uggroups;
$page_titles["derejame_uggroups"] = &$pageTitlesderejame_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["derejame_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["derejame_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_derejame_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM derejame_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "derejame_uggroups",
	"m_srcTableName" => "derejame_uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "derejame_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "derejame_uggroups",
	"m_srcTableName" => "derejame_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "derejame_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "derejame_uggroups";
$proto11["m_srcTableName"] = "derejame_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "derejame_uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "derejame_uggroups";
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
$proto0["m_srcTableName"]="derejame_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_derejame_uggroups = createSqlQuery_derejame_uggroups();


	
		;

		

$tdataderejame_uggroups[".sqlquery"] = $queryData_derejame_uggroups;



$tableEvents["derejame_uggroups"] = new eventsBase;
$tdataderejame_uggroups[".hasEvents"] = false;

?>