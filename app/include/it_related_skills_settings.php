<?php
$tdatait_related_skills = array();
$tdatait_related_skills[".searchableFields"] = array();
$tdatait_related_skills[".ShortName"] = "it_related_skills";
$tdatait_related_skills[".OwnerID"] = "";
$tdatait_related_skills[".OriginalTable"] = "it_related_skills";


$tdatait_related_skills[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatait_related_skills[".originalPagesByType"] = $tdatait_related_skills[".pagesByType"];
$tdatait_related_skills[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatait_related_skills[".originalPages"] = $tdatait_related_skills[".pages"];
$tdatait_related_skills[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatait_related_skills[".originalDefaultPages"] = $tdatait_related_skills[".defaultPages"];

//	field labels
$fieldLabelsit_related_skills = array();
$fieldToolTipsit_related_skills = array();
$pageTitlesit_related_skills = array();
$placeHoldersit_related_skills = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsit_related_skills["English"] = array();
	$fieldToolTipsit_related_skills["English"] = array();
	$placeHoldersit_related_skills["English"] = array();
	$pageTitlesit_related_skills["English"] = array();
	$fieldLabelsit_related_skills["English"]["SkillID"] = "Skill ID";
	$fieldToolTipsit_related_skills["English"]["SkillID"] = "";
	$placeHoldersit_related_skills["English"]["SkillID"] = "";
	$fieldLabelsit_related_skills["English"]["SkillName"] = "Skill Name";
	$fieldToolTipsit_related_skills["English"]["SkillName"] = "";
	$placeHoldersit_related_skills["English"]["SkillName"] = "";
	if (count($fieldToolTipsit_related_skills["English"]))
		$tdatait_related_skills[".isUseToolTips"] = true;
}


	$tdatait_related_skills[".NCSearch"] = true;



$tdatait_related_skills[".shortTableName"] = "it_related_skills";
$tdatait_related_skills[".nSecOptions"] = 0;

$tdatait_related_skills[".mainTableOwnerID"] = "";
$tdatait_related_skills[".entityType"] = 0;
$tdatait_related_skills[".connId"] = "deredevatderejadevmerqconsulta";


$tdatait_related_skills[".strOriginalTableName"] = "it_related_skills";

	



$tdatait_related_skills[".showAddInPopup"] = false;

$tdatait_related_skills[".showEditInPopup"] = false;

$tdatait_related_skills[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatait_related_skills[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatait_related_skills[".listAjax"] = false;
//	temporary
$tdatait_related_skills[".listAjax"] = false;

	$tdatait_related_skills[".audit"] = false;

	$tdatait_related_skills[".locking"] = false;


$pages = $tdatait_related_skills[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatait_related_skills[".edit"] = true;
	$tdatait_related_skills[".afterEditAction"] = 1;
	$tdatait_related_skills[".closePopupAfterEdit"] = 1;
	$tdatait_related_skills[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatait_related_skills[".add"] = true;
$tdatait_related_skills[".afterAddAction"] = 1;
$tdatait_related_skills[".closePopupAfterAdd"] = 1;
$tdatait_related_skills[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatait_related_skills[".list"] = true;
}



$tdatait_related_skills[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatait_related_skills[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatait_related_skills[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatait_related_skills[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatait_related_skills[".printFriendly"] = true;
}



$tdatait_related_skills[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatait_related_skills[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatait_related_skills[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatait_related_skills[".isUseAjaxSuggest"] = true;

$tdatait_related_skills[".rowHighlite"] = true;





$tdatait_related_skills[".ajaxCodeSnippetAdded"] = false;

$tdatait_related_skills[".buttonsAdded"] = false;

$tdatait_related_skills[".addPageEvents"] = false;

// use timepicker for search panel
$tdatait_related_skills[".isUseTimeForSearch"] = false;


$tdatait_related_skills[".badgeColor"] = "EDCA00";


$tdatait_related_skills[".allSearchFields"] = array();
$tdatait_related_skills[".filterFields"] = array();
$tdatait_related_skills[".requiredSearchFields"] = array();

$tdatait_related_skills[".googleLikeFields"] = array();
$tdatait_related_skills[".googleLikeFields"][] = "SkillID";
$tdatait_related_skills[".googleLikeFields"][] = "SkillName";



$tdatait_related_skills[".tableType"] = "list";

$tdatait_related_skills[".printerPageOrientation"] = 0;
$tdatait_related_skills[".nPrinterPageScale"] = 100;

$tdatait_related_skills[".nPrinterSplitRecords"] = 40;

$tdatait_related_skills[".geocodingEnabled"] = false;










$tdatait_related_skills[".pageSize"] = 20;

$tdatait_related_skills[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatait_related_skills[".strOrderBy"] = $tstrOrderBy;

$tdatait_related_skills[".orderindexes"] = array();


$tdatait_related_skills[".sqlHead"] = "SELECT SkillID,  	SkillName";
$tdatait_related_skills[".sqlFrom"] = "FROM it_related_skills";
$tdatait_related_skills[".sqlWhereExpr"] = "";
$tdatait_related_skills[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatait_related_skills[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatait_related_skills[".arrGroupsPerPage"] = $arrGPP;

$tdatait_related_skills[".highlightSearchResults"] = true;

$tableKeysit_related_skills = array();
$tableKeysit_related_skills[] = "SkillID";
$tdatait_related_skills[".Keys"] = $tableKeysit_related_skills;


$tdatait_related_skills[".hideMobileList"] = array();




//	SkillID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SkillID";
	$fdata["GoodName"] = "SkillID";
	$fdata["ownerTable"] = "it_related_skills";
	$fdata["Label"] = GetFieldLabel("it_related_skills","SkillID");
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


	$tdatait_related_skills["SkillID"] = $fdata;
		$tdatait_related_skills[".searchableFields"][] = "SkillID";
//	SkillName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SkillName";
	$fdata["GoodName"] = "SkillName";
	$fdata["ownerTable"] = "it_related_skills";
	$fdata["Label"] = GetFieldLabel("it_related_skills","SkillName");
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


	$tdatait_related_skills["SkillName"] = $fdata;
		$tdatait_related_skills[".searchableFields"][] = "SkillName";


$tables_data["it_related_skills"]=&$tdatait_related_skills;
$field_labels["it_related_skills"] = &$fieldLabelsit_related_skills;
$fieldToolTips["it_related_skills"] = &$fieldToolTipsit_related_skills;
$placeHolders["it_related_skills"] = &$placeHoldersit_related_skills;
$page_titles["it_related_skills"] = &$pageTitlesit_related_skills;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["it_related_skills"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["it_related_skills"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_it_related_skills()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SkillID,  	SkillName";
$proto0["m_strFrom"] = "FROM it_related_skills";
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
	"m_strTable" => "it_related_skills",
	"m_srcTableName" => "it_related_skills"
));

$proto6["m_sql"] = "SkillID";
$proto6["m_srcTableName"] = "it_related_skills";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SkillName",
	"m_strTable" => "it_related_skills",
	"m_srcTableName" => "it_related_skills"
));

$proto8["m_sql"] = "SkillName";
$proto8["m_srcTableName"] = "it_related_skills";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "it_related_skills";
$proto11["m_srcTableName"] = "it_related_skills";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "SkillID";
$proto11["m_columns"][] = "SkillName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "it_related_skills";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "it_related_skills";
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
$proto0["m_srcTableName"]="it_related_skills";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_it_related_skills = createSqlQuery_it_related_skills();


	
		;

		

$tdatait_related_skills[".sqlquery"] = $queryData_it_related_skills;



$tableEvents["it_related_skills"] = new eventsBase;
$tdatait_related_skills[".hasEvents"] = false;

?>