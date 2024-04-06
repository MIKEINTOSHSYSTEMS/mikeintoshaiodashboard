<?php
$tdatatraining_venues = array();
$tdatatraining_venues[".searchableFields"] = array();
$tdatatraining_venues[".ShortName"] = "training_venues";
$tdatatraining_venues[".OwnerID"] = "";
$tdatatraining_venues[".OriginalTable"] = "training_venues";


$tdatatraining_venues[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_venues[".originalPagesByType"] = $tdatatraining_venues[".pagesByType"];
$tdatatraining_venues[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_venues[".originalPages"] = $tdatatraining_venues[".pages"];
$tdatatraining_venues[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_venues[".originalDefaultPages"] = $tdatatraining_venues[".defaultPages"];

//	field labels
$fieldLabelstraining_venues = array();
$fieldToolTipstraining_venues = array();
$pageTitlestraining_venues = array();
$placeHolderstraining_venues = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_venues["English"] = array();
	$fieldToolTipstraining_venues["English"] = array();
	$placeHolderstraining_venues["English"] = array();
	$pageTitlestraining_venues["English"] = array();
	$fieldLabelstraining_venues["English"]["VenueID"] = "Venue ID";
	$fieldToolTipstraining_venues["English"]["VenueID"] = "";
	$placeHolderstraining_venues["English"]["VenueID"] = "";
	$fieldLabelstraining_venues["English"]["VenueName"] = "Venue Name";
	$fieldToolTipstraining_venues["English"]["VenueName"] = "";
	$placeHolderstraining_venues["English"]["VenueName"] = "";
	if (count($fieldToolTipstraining_venues["English"]))
		$tdatatraining_venues[".isUseToolTips"] = true;
}


	$tdatatraining_venues[".NCSearch"] = true;



$tdatatraining_venues[".shortTableName"] = "training_venues";
$tdatatraining_venues[".nSecOptions"] = 0;

$tdatatraining_venues[".mainTableOwnerID"] = "";
$tdatatraining_venues[".entityType"] = 0;
$tdatatraining_venues[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_venues[".strOriginalTableName"] = "training_venues";

	



$tdatatraining_venues[".showAddInPopup"] = false;

$tdatatraining_venues[".showEditInPopup"] = false;

$tdatatraining_venues[".showViewInPopup"] = false;

$tdatatraining_venues[".listAjax"] = false;
//	temporary
//$tdatatraining_venues[".listAjax"] = false;

	$tdatatraining_venues[".audit"] = false;

	$tdatatraining_venues[".locking"] = false;


$pages = $tdatatraining_venues[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_venues[".edit"] = true;
	$tdatatraining_venues[".afterEditAction"] = 1;
	$tdatatraining_venues[".closePopupAfterEdit"] = 1;
	$tdatatraining_venues[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_venues[".add"] = true;
$tdatatraining_venues[".afterAddAction"] = 1;
$tdatatraining_venues[".closePopupAfterAdd"] = 1;
$tdatatraining_venues[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_venues[".list"] = true;
}



$tdatatraining_venues[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_venues[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_venues[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_venues[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_venues[".printFriendly"] = true;
}



$tdatatraining_venues[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_venues[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_venues[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_venues[".isUseAjaxSuggest"] = true;





$tdatatraining_venues[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_venues[".buttonsAdded"] = false;

$tdatatraining_venues[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_venues[".isUseTimeForSearch"] = false;


$tdatatraining_venues[".badgeColor"] = "BC8F8F";


$tdatatraining_venues[".allSearchFields"] = array();
$tdatatraining_venues[".filterFields"] = array();
$tdatatraining_venues[".requiredSearchFields"] = array();

$tdatatraining_venues[".googleLikeFields"] = array();
$tdatatraining_venues[".googleLikeFields"][] = "VenueID";
$tdatatraining_venues[".googleLikeFields"][] = "VenueName";



$tdatatraining_venues[".tableType"] = "list";

$tdatatraining_venues[".printerPageOrientation"] = 0;
$tdatatraining_venues[".nPrinterPageScale"] = 100;

$tdatatraining_venues[".nPrinterSplitRecords"] = 40;

$tdatatraining_venues[".geocodingEnabled"] = false;










$tdatatraining_venues[".pageSize"] = 20;

$tdatatraining_venues[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_venues[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_venues[".orderindexes"] = array();


$tdatatraining_venues[".sqlHead"] = "SELECT VenueID,  	VenueName";
$tdatatraining_venues[".sqlFrom"] = "FROM training_venues";
$tdatatraining_venues[".sqlWhereExpr"] = "";
$tdatatraining_venues[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_venues[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_venues[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_venues[".highlightSearchResults"] = true;

$tableKeystraining_venues = array();
$tableKeystraining_venues[] = "VenueID";
$tdatatraining_venues[".Keys"] = $tableKeystraining_venues;


$tdatatraining_venues[".hideMobileList"] = array();




//	VenueID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VenueID";
	$fdata["GoodName"] = "VenueID";
	$fdata["ownerTable"] = "training_venues";
	$fdata["Label"] = GetFieldLabel("training_venues","VenueID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "VenueID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VenueID";

	
	
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


	$tdatatraining_venues["VenueID"] = $fdata;
		$tdatatraining_venues[".searchableFields"][] = "VenueID";
//	VenueName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VenueName";
	$fdata["GoodName"] = "VenueName";
	$fdata["ownerTable"] = "training_venues";
	$fdata["Label"] = GetFieldLabel("training_venues","VenueName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "VenueName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VenueName";

	
	
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


	$tdatatraining_venues["VenueName"] = $fdata;
		$tdatatraining_venues[".searchableFields"][] = "VenueName";


$tables_data["training_venues"]=&$tdatatraining_venues;
$field_labels["training_venues"] = &$fieldLabelstraining_venues;
$fieldToolTips["training_venues"] = &$fieldToolTipstraining_venues;
$placeHolders["training_venues"] = &$placeHolderstraining_venues;
$page_titles["training_venues"] = &$pageTitlestraining_venues;


changeTextControlsToDate( "training_venues" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_venues"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_venues"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_venues()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "VenueID,  	VenueName";
$proto0["m_strFrom"] = "FROM training_venues";
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
	"m_strName" => "VenueID",
	"m_strTable" => "training_venues",
	"m_srcTableName" => "training_venues"
));

$proto6["m_sql"] = "VenueID";
$proto6["m_srcTableName"] = "training_venues";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VenueName",
	"m_strTable" => "training_venues",
	"m_srcTableName" => "training_venues"
));

$proto8["m_sql"] = "VenueName";
$proto8["m_srcTableName"] = "training_venues";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "training_venues";
$proto11["m_srcTableName"] = "training_venues";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "VenueID";
$proto11["m_columns"][] = "VenueName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "training_venues";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "training_venues";
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
$proto0["m_srcTableName"]="training_venues";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_venues = createSqlQuery_training_venues();


	
																								;

		

$tdatatraining_venues[".sqlquery"] = $queryData_training_venues;



$tdatatraining_venues[".hasEvents"] = false;

?>