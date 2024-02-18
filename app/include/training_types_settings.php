<?php
$tdatatraining_types = array();
$tdatatraining_types[".searchableFields"] = array();
$tdatatraining_types[".ShortName"] = "training_types";
$tdatatraining_types[".OwnerID"] = "";
$tdatatraining_types[".OriginalTable"] = "training_types";


$tdatatraining_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_types[".originalPagesByType"] = $tdatatraining_types[".pagesByType"];
$tdatatraining_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_types[".originalPages"] = $tdatatraining_types[".pages"];
$tdatatraining_types[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_types[".originalDefaultPages"] = $tdatatraining_types[".defaultPages"];

//	field labels
$fieldLabelstraining_types = array();
$fieldToolTipstraining_types = array();
$pageTitlestraining_types = array();
$placeHolderstraining_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_types["English"] = array();
	$fieldToolTipstraining_types["English"] = array();
	$placeHolderstraining_types["English"] = array();
	$pageTitlestraining_types["English"] = array();
	$fieldLabelstraining_types["English"]["TypeID"] = "Type ID";
	$fieldToolTipstraining_types["English"]["TypeID"] = "";
	$placeHolderstraining_types["English"]["TypeID"] = "";
	$fieldLabelstraining_types["English"]["TypeName"] = "Type Name";
	$fieldToolTipstraining_types["English"]["TypeName"] = "";
	$placeHolderstraining_types["English"]["TypeName"] = "";
	if (count($fieldToolTipstraining_types["English"]))
		$tdatatraining_types[".isUseToolTips"] = true;
}


	$tdatatraining_types[".NCSearch"] = true;



$tdatatraining_types[".shortTableName"] = "training_types";
$tdatatraining_types[".nSecOptions"] = 0;

$tdatatraining_types[".mainTableOwnerID"] = "";
$tdatatraining_types[".entityType"] = 0;
$tdatatraining_types[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_types[".strOriginalTableName"] = "training_types";

	



$tdatatraining_types[".showAddInPopup"] = false;

$tdatatraining_types[".showEditInPopup"] = false;

$tdatatraining_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatraining_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatraining_types[".listAjax"] = false;
//	temporary
$tdatatraining_types[".listAjax"] = false;

	$tdatatraining_types[".audit"] = false;

	$tdatatraining_types[".locking"] = false;


$pages = $tdatatraining_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_types[".edit"] = true;
	$tdatatraining_types[".afterEditAction"] = 1;
	$tdatatraining_types[".closePopupAfterEdit"] = 1;
	$tdatatraining_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_types[".add"] = true;
$tdatatraining_types[".afterAddAction"] = 1;
$tdatatraining_types[".closePopupAfterAdd"] = 1;
$tdatatraining_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_types[".list"] = true;
}



$tdatatraining_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_types[".printFriendly"] = true;
}



$tdatatraining_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_types[".isUseAjaxSuggest"] = true;

$tdatatraining_types[".rowHighlite"] = true;





$tdatatraining_types[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_types[".buttonsAdded"] = false;

$tdatatraining_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_types[".isUseTimeForSearch"] = false;


$tdatatraining_types[".badgeColor"] = "B22222";


$tdatatraining_types[".allSearchFields"] = array();
$tdatatraining_types[".filterFields"] = array();
$tdatatraining_types[".requiredSearchFields"] = array();

$tdatatraining_types[".googleLikeFields"] = array();
$tdatatraining_types[".googleLikeFields"][] = "TypeID";
$tdatatraining_types[".googleLikeFields"][] = "TypeName";



$tdatatraining_types[".tableType"] = "list";

$tdatatraining_types[".printerPageOrientation"] = 0;
$tdatatraining_types[".nPrinterPageScale"] = 100;

$tdatatraining_types[".nPrinterSplitRecords"] = 40;

$tdatatraining_types[".geocodingEnabled"] = false;










$tdatatraining_types[".pageSize"] = 20;

$tdatatraining_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatraining_types[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_types[".orderindexes"] = array();


$tdatatraining_types[".sqlHead"] = "SELECT TypeID,  	TypeName";
$tdatatraining_types[".sqlFrom"] = "FROM training_types";
$tdatatraining_types[".sqlWhereExpr"] = "";
$tdatatraining_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_types[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_types[".highlightSearchResults"] = true;

$tableKeystraining_types = array();
$tableKeystraining_types[] = "TypeID";
$tdatatraining_types[".Keys"] = $tableKeystraining_types;


$tdatatraining_types[".hideMobileList"] = array();




//	TypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TypeID";
	$fdata["GoodName"] = "TypeID";
	$fdata["ownerTable"] = "training_types";
	$fdata["Label"] = GetFieldLabel("training_types","TypeID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeID";

	
	
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


	$tdatatraining_types["TypeID"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "TypeID";
//	TypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TypeName";
	$fdata["GoodName"] = "TypeName";
	$fdata["ownerTable"] = "training_types";
	$fdata["Label"] = GetFieldLabel("training_types","TypeName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TypeName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeName";

	
	
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


	$tdatatraining_types["TypeName"] = $fdata;
		$tdatatraining_types[".searchableFields"][] = "TypeName";


$tables_data["training_types"]=&$tdatatraining_types;
$field_labels["training_types"] = &$fieldLabelstraining_types;
$fieldToolTips["training_types"] = &$fieldToolTipstraining_types;
$placeHolders["training_types"] = &$placeHolderstraining_types;
$page_titles["training_types"] = &$pageTitlestraining_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["training_types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["training_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TypeID,  	TypeName";
$proto0["m_strFrom"] = "FROM training_types";
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
	"m_strName" => "TypeID",
	"m_strTable" => "training_types",
	"m_srcTableName" => "training_types"
));

$proto6["m_sql"] = "TypeID";
$proto6["m_srcTableName"] = "training_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeName",
	"m_strTable" => "training_types",
	"m_srcTableName" => "training_types"
));

$proto8["m_sql"] = "TypeName";
$proto8["m_srcTableName"] = "training_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "training_types";
$proto11["m_srcTableName"] = "training_types";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TypeID";
$proto11["m_columns"][] = "TypeName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "training_types";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "training_types";
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
$proto0["m_srcTableName"]="training_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_types = createSqlQuery_training_types();


	
		;

		

$tdatatraining_types[".sqlquery"] = $queryData_training_types;



$tableEvents["training_types"] = new eventsBase;
$tdatatraining_types[".hasEvents"] = false;

?>