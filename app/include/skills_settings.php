<?php
$tdataskills = array();
$tdataskills[".searchableFields"] = array();
$tdataskills[".ShortName"] = "skills";
$tdataskills[".OwnerID"] = "";
$tdataskills[".OriginalTable"] = "skills";


$tdataskills[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataskills[".originalPagesByType"] = $tdataskills[".pagesByType"];
$tdataskills[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataskills[".originalPages"] = $tdataskills[".pages"];
$tdataskills[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataskills[".originalDefaultPages"] = $tdataskills[".defaultPages"];

//	field labels
$fieldLabelsskills = array();
$fieldToolTipsskills = array();
$pageTitlesskills = array();
$placeHoldersskills = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsskills["English"] = array();
	$fieldToolTipsskills["English"] = array();
	$placeHoldersskills["English"] = array();
	$pageTitlesskills["English"] = array();
	$fieldLabelsskills["English"]["SkillID"] = "Skill ID";
	$fieldToolTipsskills["English"]["SkillID"] = "";
	$placeHoldersskills["English"]["SkillID"] = "";
	$fieldLabelsskills["English"]["SkillName"] = "Skill Name";
	$fieldToolTipsskills["English"]["SkillName"] = "";
	$placeHoldersskills["English"]["SkillName"] = "";
	if (count($fieldToolTipsskills["English"]))
		$tdataskills[".isUseToolTips"] = true;
}


	$tdataskills[".NCSearch"] = true;



$tdataskills[".shortTableName"] = "skills";
$tdataskills[".nSecOptions"] = 0;

$tdataskills[".mainTableOwnerID"] = "";
$tdataskills[".entityType"] = 0;
$tdataskills[".connId"] = "deredevatderejadevmerqconsulta";


$tdataskills[".strOriginalTableName"] = "skills";

	



$tdataskills[".showAddInPopup"] = false;

$tdataskills[".showEditInPopup"] = false;

$tdataskills[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataskills[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataskills[".listAjax"] = false;
//	temporary
$tdataskills[".listAjax"] = false;

	$tdataskills[".audit"] = false;

	$tdataskills[".locking"] = false;


$pages = $tdataskills[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataskills[".edit"] = true;
	$tdataskills[".afterEditAction"] = 1;
	$tdataskills[".closePopupAfterEdit"] = 1;
	$tdataskills[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataskills[".add"] = true;
$tdataskills[".afterAddAction"] = 1;
$tdataskills[".closePopupAfterAdd"] = 1;
$tdataskills[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataskills[".list"] = true;
}



$tdataskills[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataskills[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataskills[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataskills[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataskills[".printFriendly"] = true;
}



$tdataskills[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataskills[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataskills[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataskills[".isUseAjaxSuggest"] = true;

$tdataskills[".rowHighlite"] = true;





$tdataskills[".ajaxCodeSnippetAdded"] = false;

$tdataskills[".buttonsAdded"] = false;

$tdataskills[".addPageEvents"] = false;

// use timepicker for search panel
$tdataskills[".isUseTimeForSearch"] = false;


$tdataskills[".badgeColor"] = "D2691E";


$tdataskills[".allSearchFields"] = array();
$tdataskills[".filterFields"] = array();
$tdataskills[".requiredSearchFields"] = array();

$tdataskills[".googleLikeFields"] = array();
$tdataskills[".googleLikeFields"][] = "SkillID";
$tdataskills[".googleLikeFields"][] = "SkillName";



$tdataskills[".tableType"] = "list";

$tdataskills[".printerPageOrientation"] = 0;
$tdataskills[".nPrinterPageScale"] = 100;

$tdataskills[".nPrinterSplitRecords"] = 40;

$tdataskills[".geocodingEnabled"] = false;










$tdataskills[".pageSize"] = 20;

$tdataskills[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataskills[".strOrderBy"] = $tstrOrderBy;

$tdataskills[".orderindexes"] = array();


$tdataskills[".sqlHead"] = "SELECT SkillID,  	SkillName";
$tdataskills[".sqlFrom"] = "FROM skills";
$tdataskills[".sqlWhereExpr"] = "";
$tdataskills[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataskills[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataskills[".arrGroupsPerPage"] = $arrGPP;

$tdataskills[".highlightSearchResults"] = true;

$tableKeysskills = array();
$tableKeysskills[] = "SkillID";
$tdataskills[".Keys"] = $tableKeysskills;


$tdataskills[".hideMobileList"] = array();




//	SkillID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SkillID";
	$fdata["GoodName"] = "SkillID";
	$fdata["ownerTable"] = "skills";
	$fdata["Label"] = GetFieldLabel("skills","SkillID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "SkillID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SkillID";

	
	
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


	$tdataskills["SkillID"] = $fdata;
		$tdataskills[".searchableFields"][] = "SkillID";
//	SkillName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SkillName";
	$fdata["GoodName"] = "SkillName";
	$fdata["ownerTable"] = "skills";
	$fdata["Label"] = GetFieldLabel("skills","SkillName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SkillName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SkillName";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataskills["SkillName"] = $fdata;
		$tdataskills[".searchableFields"][] = "SkillName";


$tables_data["skills"]=&$tdataskills;
$field_labels["skills"] = &$fieldLabelsskills;
$fieldToolTips["skills"] = &$fieldToolTipsskills;
$placeHolders["skills"] = &$placeHoldersskills;
$page_titles["skills"] = &$pageTitlesskills;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["skills"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["skills"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_skills()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SkillID,  	SkillName";
$proto0["m_strFrom"] = "FROM skills";
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
	"m_strName" => "SkillID",
	"m_strTable" => "skills",
	"m_srcTableName" => "skills"
));

$proto6["m_sql"] = "SkillID";
$proto6["m_srcTableName"] = "skills";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SkillName",
	"m_strTable" => "skills",
	"m_srcTableName" => "skills"
));

$proto8["m_sql"] = "SkillName";
$proto8["m_srcTableName"] = "skills";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "skills";
$proto11["m_srcTableName"] = "skills";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "SkillID";
$proto11["m_columns"][] = "SkillName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "skills";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "skills";
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
$proto0["m_srcTableName"]="skills";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_skills = createSqlQuery_skills();


	
		;

		

$tdataskills[".sqlquery"] = $queryData_skills;



$tableEvents["skills"] = new eventsBase;
$tdataskills[".hasEvents"] = false;

?>