<?php
$tdatatraining_city_towns = array();
$tdatatraining_city_towns[".searchableFields"] = array();
$tdatatraining_city_towns[".ShortName"] = "training_city_towns";
$tdatatraining_city_towns[".OwnerID"] = "";
$tdatatraining_city_towns[".OriginalTable"] = "training_city_towns";


$tdatatraining_city_towns[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_city_towns[".originalPagesByType"] = $tdatatraining_city_towns[".pagesByType"];
$tdatatraining_city_towns[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_city_towns[".originalPages"] = $tdatatraining_city_towns[".pages"];
$tdatatraining_city_towns[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_city_towns[".originalDefaultPages"] = $tdatatraining_city_towns[".defaultPages"];

//	field labels
$fieldLabelstraining_city_towns = array();
$fieldToolTipstraining_city_towns = array();
$pageTitlestraining_city_towns = array();
$placeHolderstraining_city_towns = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_city_towns["English"] = array();
	$fieldToolTipstraining_city_towns["English"] = array();
	$placeHolderstraining_city_towns["English"] = array();
	$pageTitlestraining_city_towns["English"] = array();
	$fieldLabelstraining_city_towns["English"]["CityTownID"] = "City Town ID";
	$fieldToolTipstraining_city_towns["English"]["CityTownID"] = "";
	$placeHolderstraining_city_towns["English"]["CityTownID"] = "";
	$fieldLabelstraining_city_towns["English"]["CityTownName"] = "City Town Name";
	$fieldToolTipstraining_city_towns["English"]["CityTownName"] = "";
	$placeHolderstraining_city_towns["English"]["CityTownName"] = "";
	if (count($fieldToolTipstraining_city_towns["English"]))
		$tdatatraining_city_towns[".isUseToolTips"] = true;
}


	$tdatatraining_city_towns[".NCSearch"] = true;



$tdatatraining_city_towns[".shortTableName"] = "training_city_towns";
$tdatatraining_city_towns[".nSecOptions"] = 0;

$tdatatraining_city_towns[".mainTableOwnerID"] = "";
$tdatatraining_city_towns[".entityType"] = 0;
$tdatatraining_city_towns[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_city_towns[".strOriginalTableName"] = "training_city_towns";

	



$tdatatraining_city_towns[".showAddInPopup"] = false;

$tdatatraining_city_towns[".showEditInPopup"] = false;

$tdatatraining_city_towns[".showViewInPopup"] = false;

$tdatatraining_city_towns[".listAjax"] = false;
//	temporary
//$tdatatraining_city_towns[".listAjax"] = false;

	$tdatatraining_city_towns[".audit"] = true;

	$tdatatraining_city_towns[".locking"] = false;


$pages = $tdatatraining_city_towns[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_city_towns[".edit"] = true;
	$tdatatraining_city_towns[".afterEditAction"] = 1;
	$tdatatraining_city_towns[".closePopupAfterEdit"] = 1;
	$tdatatraining_city_towns[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_city_towns[".add"] = true;
$tdatatraining_city_towns[".afterAddAction"] = 1;
$tdatatraining_city_towns[".closePopupAfterAdd"] = 1;
$tdatatraining_city_towns[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_city_towns[".list"] = true;
}



$tdatatraining_city_towns[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_city_towns[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_city_towns[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_city_towns[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_city_towns[".printFriendly"] = true;
}



$tdatatraining_city_towns[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_city_towns[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_city_towns[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_city_towns[".isUseAjaxSuggest"] = true;



			

$tdatatraining_city_towns[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_city_towns[".buttonsAdded"] = false;

$tdatatraining_city_towns[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_city_towns[".isUseTimeForSearch"] = false;


$tdatatraining_city_towns[".badgeColor"] = "EDCA00";


$tdatatraining_city_towns[".allSearchFields"] = array();
$tdatatraining_city_towns[".filterFields"] = array();
$tdatatraining_city_towns[".requiredSearchFields"] = array();

$tdatatraining_city_towns[".googleLikeFields"] = array();
$tdatatraining_city_towns[".googleLikeFields"][] = "CityTownID";
$tdatatraining_city_towns[".googleLikeFields"][] = "CityTownName";



$tdatatraining_city_towns[".tableType"] = "list";

$tdatatraining_city_towns[".printerPageOrientation"] = 0;
$tdatatraining_city_towns[".nPrinterPageScale"] = 100;

$tdatatraining_city_towns[".nPrinterSplitRecords"] = 40;

$tdatatraining_city_towns[".geocodingEnabled"] = false;










$tdatatraining_city_towns[".pageSize"] = 20;

$tdatatraining_city_towns[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_city_towns[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_city_towns[".orderindexes"] = array();


$tdatatraining_city_towns[".sqlHead"] = "SELECT CityTownID,  	CityTownName";
$tdatatraining_city_towns[".sqlFrom"] = "FROM training_city_towns";
$tdatatraining_city_towns[".sqlWhereExpr"] = "";
$tdatatraining_city_towns[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_city_towns[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_city_towns[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_city_towns[".highlightSearchResults"] = true;

$tableKeystraining_city_towns = array();
$tableKeystraining_city_towns[] = "CityTownID";
$tdatatraining_city_towns[".Keys"] = $tableKeystraining_city_towns;


$tdatatraining_city_towns[".hideMobileList"] = array();




//	CityTownID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CityTownID";
	$fdata["GoodName"] = "CityTownID";
	$fdata["ownerTable"] = "training_city_towns";
	$fdata["Label"] = GetFieldLabel("training_city_towns","CityTownID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CityTownID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CityTownID";

	
	
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


	$tdatatraining_city_towns["CityTownID"] = $fdata;
		$tdatatraining_city_towns[".searchableFields"][] = "CityTownID";
//	CityTownName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CityTownName";
	$fdata["GoodName"] = "CityTownName";
	$fdata["ownerTable"] = "training_city_towns";
	$fdata["Label"] = GetFieldLabel("training_city_towns","CityTownName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CityTownName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CityTownName";

	
	
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


	$tdatatraining_city_towns["CityTownName"] = $fdata;
		$tdatatraining_city_towns[".searchableFields"][] = "CityTownName";


$tables_data["training_city_towns"]=&$tdatatraining_city_towns;
$field_labels["training_city_towns"] = &$fieldLabelstraining_city_towns;
$fieldToolTips["training_city_towns"] = &$fieldToolTipstraining_city_towns;
$placeHolders["training_city_towns"] = &$placeHolderstraining_city_towns;
$page_titles["training_city_towns"] = &$pageTitlestraining_city_towns;


changeTextControlsToDate( "training_city_towns" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_city_towns"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_city_towns"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_city_towns()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CityTownID,  	CityTownName";
$proto0["m_strFrom"] = "FROM training_city_towns";
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
	"m_strName" => "CityTownID",
	"m_strTable" => "training_city_towns",
	"m_srcTableName" => "training_city_towns"
));

$proto6["m_sql"] = "CityTownID";
$proto6["m_srcTableName"] = "training_city_towns";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CityTownName",
	"m_strTable" => "training_city_towns",
	"m_srcTableName" => "training_city_towns"
));

$proto8["m_sql"] = "CityTownName";
$proto8["m_srcTableName"] = "training_city_towns";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "training_city_towns";
$proto11["m_srcTableName"] = "training_city_towns";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "CityTownID";
$proto11["m_columns"][] = "CityTownName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "training_city_towns";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "training_city_towns";
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
$proto0["m_srcTableName"]="training_city_towns";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_city_towns = createSqlQuery_training_city_towns();


	
																								;

		

$tdatatraining_city_towns[".sqlquery"] = $queryData_training_city_towns;



$tdatatraining_city_towns[".hasEvents"] = false;

?>