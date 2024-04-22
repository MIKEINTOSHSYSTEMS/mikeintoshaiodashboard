<?php
$tdatatraining_organizers = array();
$tdatatraining_organizers[".searchableFields"] = array();
$tdatatraining_organizers[".ShortName"] = "training_organizers";
$tdatatraining_organizers[".OwnerID"] = "";
$tdatatraining_organizers[".OriginalTable"] = "training_organizers";


$tdatatraining_organizers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_organizers[".originalPagesByType"] = $tdatatraining_organizers[".pagesByType"];
$tdatatraining_organizers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_organizers[".originalPages"] = $tdatatraining_organizers[".pages"];
$tdatatraining_organizers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_organizers[".originalDefaultPages"] = $tdatatraining_organizers[".defaultPages"];

//	field labels
$fieldLabelstraining_organizers = array();
$fieldToolTipstraining_organizers = array();
$pageTitlestraining_organizers = array();
$placeHolderstraining_organizers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_organizers["English"] = array();
	$fieldToolTipstraining_organizers["English"] = array();
	$placeHolderstraining_organizers["English"] = array();
	$pageTitlestraining_organizers["English"] = array();
	$fieldLabelstraining_organizers["English"]["OrganizerID"] = "Organizer ID";
	$fieldToolTipstraining_organizers["English"]["OrganizerID"] = "";
	$placeHolderstraining_organizers["English"]["OrganizerID"] = "";
	$fieldLabelstraining_organizers["English"]["OrganizerName"] = "Organizer Name";
	$fieldToolTipstraining_organizers["English"]["OrganizerName"] = "";
	$placeHolderstraining_organizers["English"]["OrganizerName"] = "";
	if (count($fieldToolTipstraining_organizers["English"]))
		$tdatatraining_organizers[".isUseToolTips"] = true;
}


	$tdatatraining_organizers[".NCSearch"] = true;



$tdatatraining_organizers[".shortTableName"] = "training_organizers";
$tdatatraining_organizers[".nSecOptions"] = 0;

$tdatatraining_organizers[".mainTableOwnerID"] = "";
$tdatatraining_organizers[".entityType"] = 0;
$tdatatraining_organizers[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatraining_organizers[".strOriginalTableName"] = "training_organizers";

	



$tdatatraining_organizers[".showAddInPopup"] = false;

$tdatatraining_organizers[".showEditInPopup"] = false;

$tdatatraining_organizers[".showViewInPopup"] = false;

$tdatatraining_organizers[".listAjax"] = false;
//	temporary
//$tdatatraining_organizers[".listAjax"] = false;

	$tdatatraining_organizers[".audit"] = false;

	$tdatatraining_organizers[".locking"] = false;


$pages = $tdatatraining_organizers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_organizers[".edit"] = true;
	$tdatatraining_organizers[".afterEditAction"] = 1;
	$tdatatraining_organizers[".closePopupAfterEdit"] = 1;
	$tdatatraining_organizers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_organizers[".add"] = true;
$tdatatraining_organizers[".afterAddAction"] = 1;
$tdatatraining_organizers[".closePopupAfterAdd"] = 1;
$tdatatraining_organizers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_organizers[".list"] = true;
}



$tdatatraining_organizers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_organizers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_organizers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_organizers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_organizers[".printFriendly"] = true;
}



$tdatatraining_organizers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_organizers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_organizers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_organizers[".isUseAjaxSuggest"] = true;



			

$tdatatraining_organizers[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_organizers[".buttonsAdded"] = false;

$tdatatraining_organizers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_organizers[".isUseTimeForSearch"] = false;


$tdatatraining_organizers[".badgeColor"] = "DAA520";


$tdatatraining_organizers[".allSearchFields"] = array();
$tdatatraining_organizers[".filterFields"] = array();
$tdatatraining_organizers[".requiredSearchFields"] = array();

$tdatatraining_organizers[".googleLikeFields"] = array();
$tdatatraining_organizers[".googleLikeFields"][] = "OrganizerID";
$tdatatraining_organizers[".googleLikeFields"][] = "OrganizerName";



$tdatatraining_organizers[".tableType"] = "list";

$tdatatraining_organizers[".printerPageOrientation"] = 0;
$tdatatraining_organizers[".nPrinterPageScale"] = 100;

$tdatatraining_organizers[".nPrinterSplitRecords"] = 40;

$tdatatraining_organizers[".geocodingEnabled"] = false;










$tdatatraining_organizers[".pageSize"] = 20;

$tdatatraining_organizers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_organizers[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_organizers[".orderindexes"] = array();


$tdatatraining_organizers[".sqlHead"] = "SELECT OrganizerID,  	OrganizerName";
$tdatatraining_organizers[".sqlFrom"] = "FROM training_organizers";
$tdatatraining_organizers[".sqlWhereExpr"] = "";
$tdatatraining_organizers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_organizers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_organizers[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_organizers[".highlightSearchResults"] = true;

$tableKeystraining_organizers = array();
$tableKeystraining_organizers[] = "OrganizerID";
$tdatatraining_organizers[".Keys"] = $tableKeystraining_organizers;


$tdatatraining_organizers[".hideMobileList"] = array();




//	OrganizerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OrganizerID";
	$fdata["GoodName"] = "OrganizerID";
	$fdata["ownerTable"] = "training_organizers";
	$fdata["Label"] = GetFieldLabel("training_organizers","OrganizerID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OrganizerID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrganizerID";

	
	
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


	$tdatatraining_organizers["OrganizerID"] = $fdata;
		$tdatatraining_organizers[".searchableFields"][] = "OrganizerID";
//	OrganizerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrganizerName";
	$fdata["GoodName"] = "OrganizerName";
	$fdata["ownerTable"] = "training_organizers";
	$fdata["Label"] = GetFieldLabel("training_organizers","OrganizerName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OrganizerName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrganizerName";

	
	
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


	$tdatatraining_organizers["OrganizerName"] = $fdata;
		$tdatatraining_organizers[".searchableFields"][] = "OrganizerName";


$tables_data["training_organizers"]=&$tdatatraining_organizers;
$field_labels["training_organizers"] = &$fieldLabelstraining_organizers;
$fieldToolTips["training_organizers"] = &$fieldToolTipstraining_organizers;
$placeHolders["training_organizers"] = &$placeHolderstraining_organizers;
$page_titles["training_organizers"] = &$pageTitlestraining_organizers;


changeTextControlsToDate( "training_organizers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training_organizers"] = array();
//	Trainer
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Trainer";
		$detailsParam["dOriginalTable"] = "Trainer";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "trainer";
	$detailsParam["dCaptionTable"] = GetTableCaption("Trainer");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["training_organizers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["training_organizers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["training_organizers"][$dIndex]["masterKeys"][]="OrganizerID";

				$detailsTablesData["training_organizers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["training_organizers"][$dIndex]["detailKeys"][]="OrganizerID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training_organizers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_organizers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OrganizerID,  	OrganizerName";
$proto0["m_strFrom"] = "FROM training_organizers";
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
	"m_strName" => "OrganizerID",
	"m_strTable" => "training_organizers",
	"m_srcTableName" => "training_organizers"
));

$proto6["m_sql"] = "OrganizerID";
$proto6["m_srcTableName"] = "training_organizers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OrganizerName",
	"m_strTable" => "training_organizers",
	"m_srcTableName" => "training_organizers"
));

$proto8["m_sql"] = "OrganizerName";
$proto8["m_srcTableName"] = "training_organizers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "training_organizers";
$proto11["m_srcTableName"] = "training_organizers";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "OrganizerID";
$proto11["m_columns"][] = "OrganizerName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "training_organizers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "training_organizers";
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
$proto0["m_srcTableName"]="training_organizers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_organizers = createSqlQuery_training_organizers();


	
																								;

		

$tdatatraining_organizers[".sqlquery"] = $queryData_training_organizers;



$tdatatraining_organizers[".hasEvents"] = false;

?>