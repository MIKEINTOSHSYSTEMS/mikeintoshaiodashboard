<?php
$tdataindustry_specific_skills = array();
$tdataindustry_specific_skills[".searchableFields"] = array();
$tdataindustry_specific_skills[".ShortName"] = "industry_specific_skills";
$tdataindustry_specific_skills[".OwnerID"] = "";
$tdataindustry_specific_skills[".OriginalTable"] = "industry_specific_skills";


$tdataindustry_specific_skills[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataindustry_specific_skills[".originalPagesByType"] = $tdataindustry_specific_skills[".pagesByType"];
$tdataindustry_specific_skills[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataindustry_specific_skills[".originalPages"] = $tdataindustry_specific_skills[".pages"];
$tdataindustry_specific_skills[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataindustry_specific_skills[".originalDefaultPages"] = $tdataindustry_specific_skills[".defaultPages"];

//	field labels
$fieldLabelsindustry_specific_skills = array();
$fieldToolTipsindustry_specific_skills = array();
$pageTitlesindustry_specific_skills = array();
$placeHoldersindustry_specific_skills = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsindustry_specific_skills["English"] = array();
	$fieldToolTipsindustry_specific_skills["English"] = array();
	$placeHoldersindustry_specific_skills["English"] = array();
	$pageTitlesindustry_specific_skills["English"] = array();
	$fieldLabelsindustry_specific_skills["English"]["SkillID"] = "Skill ID";
	$fieldToolTipsindustry_specific_skills["English"]["SkillID"] = "";
	$placeHoldersindustry_specific_skills["English"]["SkillID"] = "";
	$fieldLabelsindustry_specific_skills["English"]["SkillName"] = "Skill Name";
	$fieldToolTipsindustry_specific_skills["English"]["SkillName"] = "";
	$placeHoldersindustry_specific_skills["English"]["SkillName"] = "";
	if (count($fieldToolTipsindustry_specific_skills["English"]))
		$tdataindustry_specific_skills[".isUseToolTips"] = true;
}


	$tdataindustry_specific_skills[".NCSearch"] = true;



$tdataindustry_specific_skills[".shortTableName"] = "industry_specific_skills";
$tdataindustry_specific_skills[".nSecOptions"] = 0;

$tdataindustry_specific_skills[".mainTableOwnerID"] = "";
$tdataindustry_specific_skills[".entityType"] = 0;
$tdataindustry_specific_skills[".connId"] = "deredevatderejadevmerqconsulta";


$tdataindustry_specific_skills[".strOriginalTableName"] = "industry_specific_skills";

	



$tdataindustry_specific_skills[".showAddInPopup"] = false;

$tdataindustry_specific_skills[".showEditInPopup"] = false;

$tdataindustry_specific_skills[".showViewInPopup"] = false;

$tdataindustry_specific_skills[".listAjax"] = false;
//	temporary
//$tdataindustry_specific_skills[".listAjax"] = false;

	$tdataindustry_specific_skills[".audit"] = true;

	$tdataindustry_specific_skills[".locking"] = false;


$pages = $tdataindustry_specific_skills[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataindustry_specific_skills[".edit"] = true;
	$tdataindustry_specific_skills[".afterEditAction"] = 1;
	$tdataindustry_specific_skills[".closePopupAfterEdit"] = 1;
	$tdataindustry_specific_skills[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataindustry_specific_skills[".add"] = true;
$tdataindustry_specific_skills[".afterAddAction"] = 1;
$tdataindustry_specific_skills[".closePopupAfterAdd"] = 1;
$tdataindustry_specific_skills[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataindustry_specific_skills[".list"] = true;
}



$tdataindustry_specific_skills[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataindustry_specific_skills[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataindustry_specific_skills[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataindustry_specific_skills[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataindustry_specific_skills[".printFriendly"] = true;
}



$tdataindustry_specific_skills[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataindustry_specific_skills[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataindustry_specific_skills[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataindustry_specific_skills[".isUseAjaxSuggest"] = true;



			

$tdataindustry_specific_skills[".ajaxCodeSnippetAdded"] = false;

$tdataindustry_specific_skills[".buttonsAdded"] = false;

$tdataindustry_specific_skills[".addPageEvents"] = false;

// use timepicker for search panel
$tdataindustry_specific_skills[".isUseTimeForSearch"] = false;


$tdataindustry_specific_skills[".badgeColor"] = "E07878";


$tdataindustry_specific_skills[".allSearchFields"] = array();
$tdataindustry_specific_skills[".filterFields"] = array();
$tdataindustry_specific_skills[".requiredSearchFields"] = array();

$tdataindustry_specific_skills[".googleLikeFields"] = array();
$tdataindustry_specific_skills[".googleLikeFields"][] = "SkillID";
$tdataindustry_specific_skills[".googleLikeFields"][] = "SkillName";



$tdataindustry_specific_skills[".tableType"] = "list";

$tdataindustry_specific_skills[".printerPageOrientation"] = 0;
$tdataindustry_specific_skills[".nPrinterPageScale"] = 100;

$tdataindustry_specific_skills[".nPrinterSplitRecords"] = 40;

$tdataindustry_specific_skills[".geocodingEnabled"] = false;










$tdataindustry_specific_skills[".pageSize"] = 20;

$tdataindustry_specific_skills[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataindustry_specific_skills[".strOrderBy"] = $tstrOrderBy;

$tdataindustry_specific_skills[".orderindexes"] = array();


$tdataindustry_specific_skills[".sqlHead"] = "SELECT SkillID,  	SkillName";
$tdataindustry_specific_skills[".sqlFrom"] = "FROM industry_specific_skills";
$tdataindustry_specific_skills[".sqlWhereExpr"] = "";
$tdataindustry_specific_skills[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataindustry_specific_skills[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataindustry_specific_skills[".arrGroupsPerPage"] = $arrGPP;

$tdataindustry_specific_skills[".highlightSearchResults"] = true;

$tableKeysindustry_specific_skills = array();
$tableKeysindustry_specific_skills[] = "SkillID";
$tdataindustry_specific_skills[".Keys"] = $tableKeysindustry_specific_skills;


$tdataindustry_specific_skills[".hideMobileList"] = array();




//	SkillID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SkillID";
	$fdata["GoodName"] = "SkillID";
	$fdata["ownerTable"] = "industry_specific_skills";
	$fdata["Label"] = GetFieldLabel("industry_specific_skills","SkillID");
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


	$tdataindustry_specific_skills["SkillID"] = $fdata;
		$tdataindustry_specific_skills[".searchableFields"][] = "SkillID";
//	SkillName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SkillName";
	$fdata["GoodName"] = "SkillName";
	$fdata["ownerTable"] = "industry_specific_skills";
	$fdata["Label"] = GetFieldLabel("industry_specific_skills","SkillName");
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


	$tdataindustry_specific_skills["SkillName"] = $fdata;
		$tdataindustry_specific_skills[".searchableFields"][] = "SkillName";


$tables_data["industry_specific_skills"]=&$tdataindustry_specific_skills;
$field_labels["industry_specific_skills"] = &$fieldLabelsindustry_specific_skills;
$fieldToolTips["industry_specific_skills"] = &$fieldToolTipsindustry_specific_skills;
$placeHolders["industry_specific_skills"] = &$placeHoldersindustry_specific_skills;
$page_titles["industry_specific_skills"] = &$pageTitlesindustry_specific_skills;


changeTextControlsToDate( "industry_specific_skills" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["industry_specific_skills"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["industry_specific_skills"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_industry_specific_skills()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SkillID,  	SkillName";
$proto0["m_strFrom"] = "FROM industry_specific_skills";
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
	"m_strTable" => "industry_specific_skills",
	"m_srcTableName" => "industry_specific_skills"
));

$proto6["m_sql"] = "SkillID";
$proto6["m_srcTableName"] = "industry_specific_skills";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SkillName",
	"m_strTable" => "industry_specific_skills",
	"m_srcTableName" => "industry_specific_skills"
));

$proto8["m_sql"] = "SkillName";
$proto8["m_srcTableName"] = "industry_specific_skills";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "industry_specific_skills";
$proto11["m_srcTableName"] = "industry_specific_skills";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "SkillID";
$proto11["m_columns"][] = "SkillName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "industry_specific_skills";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "industry_specific_skills";
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
$proto0["m_srcTableName"]="industry_specific_skills";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_industry_specific_skills = createSqlQuery_industry_specific_skills();


	
																								;

		

$tdataindustry_specific_skills[".sqlquery"] = $queryData_industry_specific_skills;



$tdataindustry_specific_skills[".hasEvents"] = false;

?>