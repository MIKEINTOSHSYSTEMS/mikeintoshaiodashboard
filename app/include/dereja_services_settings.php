<?php
$tdatadereja_services = array();
$tdatadereja_services[".searchableFields"] = array();
$tdatadereja_services[".ShortName"] = "dereja_services";
$tdatadereja_services[".OwnerID"] = "";
$tdatadereja_services[".OriginalTable"] = "dereja_services";


$tdatadereja_services[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_services[".originalPagesByType"] = $tdatadereja_services[".pagesByType"];
$tdatadereja_services[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_services[".originalPages"] = $tdatadereja_services[".pages"];
$tdatadereja_services[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_services[".originalDefaultPages"] = $tdatadereja_services[".defaultPages"];

//	field labels
$fieldLabelsdereja_services = array();
$fieldToolTipsdereja_services = array();
$pageTitlesdereja_services = array();
$placeHoldersdereja_services = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_services["English"] = array();
	$fieldToolTipsdereja_services["English"] = array();
	$placeHoldersdereja_services["English"] = array();
	$pageTitlesdereja_services["English"] = array();
	$fieldLabelsdereja_services["English"]["ServiceID"] = "Service ID";
	$fieldToolTipsdereja_services["English"]["ServiceID"] = "";
	$placeHoldersdereja_services["English"]["ServiceID"] = "";
	$fieldLabelsdereja_services["English"]["ServiceName"] = "Service Name";
	$fieldToolTipsdereja_services["English"]["ServiceName"] = "";
	$placeHoldersdereja_services["English"]["ServiceName"] = "";
	if (count($fieldToolTipsdereja_services["English"]))
		$tdatadereja_services[".isUseToolTips"] = true;
}


	$tdatadereja_services[".NCSearch"] = true;



$tdatadereja_services[".shortTableName"] = "dereja_services";
$tdatadereja_services[".nSecOptions"] = 0;

$tdatadereja_services[".mainTableOwnerID"] = "";
$tdatadereja_services[".entityType"] = 0;
$tdatadereja_services[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_services[".strOriginalTableName"] = "dereja_services";

	



$tdatadereja_services[".showAddInPopup"] = false;

$tdatadereja_services[".showEditInPopup"] = false;

$tdatadereja_services[".showViewInPopup"] = false;

$tdatadereja_services[".listAjax"] = false;
//	temporary
//$tdatadereja_services[".listAjax"] = false;

	$tdatadereja_services[".audit"] = false;

	$tdatadereja_services[".locking"] = false;


$pages = $tdatadereja_services[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_services[".edit"] = true;
	$tdatadereja_services[".afterEditAction"] = 1;
	$tdatadereja_services[".closePopupAfterEdit"] = 1;
	$tdatadereja_services[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_services[".add"] = true;
$tdatadereja_services[".afterAddAction"] = 1;
$tdatadereja_services[".closePopupAfterAdd"] = 1;
$tdatadereja_services[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_services[".list"] = true;
}



$tdatadereja_services[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_services[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_services[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_services[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_services[".printFriendly"] = true;
}



$tdatadereja_services[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_services[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_services[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_services[".isUseAjaxSuggest"] = true;





$tdatadereja_services[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_services[".buttonsAdded"] = false;

$tdatadereja_services[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_services[".isUseTimeForSearch"] = false;


$tdatadereja_services[".badgeColor"] = "BC8F8F";


$tdatadereja_services[".allSearchFields"] = array();
$tdatadereja_services[".filterFields"] = array();
$tdatadereja_services[".requiredSearchFields"] = array();

$tdatadereja_services[".googleLikeFields"] = array();
$tdatadereja_services[".googleLikeFields"][] = "ServiceID";
$tdatadereja_services[".googleLikeFields"][] = "ServiceName";



$tdatadereja_services[".tableType"] = "list";

$tdatadereja_services[".printerPageOrientation"] = 0;
$tdatadereja_services[".nPrinterPageScale"] = 100;

$tdatadereja_services[".nPrinterSplitRecords"] = 40;

$tdatadereja_services[".geocodingEnabled"] = false;










$tdatadereja_services[".pageSize"] = 20;

$tdatadereja_services[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadereja_services[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_services[".orderindexes"] = array();


$tdatadereja_services[".sqlHead"] = "SELECT ServiceID,  	ServiceName";
$tdatadereja_services[".sqlFrom"] = "FROM dereja_services";
$tdatadereja_services[".sqlWhereExpr"] = "";
$tdatadereja_services[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_services[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_services[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_services[".highlightSearchResults"] = true;

$tableKeysdereja_services = array();
$tableKeysdereja_services[] = "ServiceID";
$tdatadereja_services[".Keys"] = $tableKeysdereja_services;


$tdatadereja_services[".hideMobileList"] = array();




//	ServiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ServiceID";
	$fdata["GoodName"] = "ServiceID";
	$fdata["ownerTable"] = "dereja_services";
	$fdata["Label"] = GetFieldLabel("dereja_services","ServiceID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ServiceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ServiceID";

	
	
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


	$tdatadereja_services["ServiceID"] = $fdata;
		$tdatadereja_services[".searchableFields"][] = "ServiceID";
//	ServiceName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ServiceName";
	$fdata["GoodName"] = "ServiceName";
	$fdata["ownerTable"] = "dereja_services";
	$fdata["Label"] = GetFieldLabel("dereja_services","ServiceName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ServiceName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ServiceName";

	
	
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


	$tdatadereja_services["ServiceName"] = $fdata;
		$tdatadereja_services[".searchableFields"][] = "ServiceName";


$tables_data["dereja_services"]=&$tdatadereja_services;
$field_labels["dereja_services"] = &$fieldLabelsdereja_services;
$fieldToolTips["dereja_services"] = &$fieldToolTipsdereja_services;
$placeHolders["dereja_services"] = &$placeHoldersdereja_services;
$page_titles["dereja_services"] = &$pageTitlesdereja_services;


changeTextControlsToDate( "dereja_services" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dereja_services"] = array();
//	dereja_event_services
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dereja_event_services";
		$detailsParam["dOriginalTable"] = "dereja_event_services";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dereja_event_services";
	$detailsParam["dCaptionTable"] = GetTableCaption("dereja_event_services");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dereja_services"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dereja_services"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dereja_services"][$dIndex]["masterKeys"][]="ServiceID";

				$detailsTablesData["dereja_services"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dereja_services"][$dIndex]["detailKeys"][]="ServiceID";
//	dereja_training_services
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dereja_training_services";
		$detailsParam["dOriginalTable"] = "dereja_training_services";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dereja_training_services";
	$detailsParam["dCaptionTable"] = GetTableCaption("dereja_training_services");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dereja_services"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dereja_services"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dereja_services"][$dIndex]["masterKeys"][]="ServiceID";

				$detailsTablesData["dereja_services"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dereja_services"][$dIndex]["detailKeys"][]="ServiceID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dereja_services"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_services()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ServiceID,  	ServiceName";
$proto0["m_strFrom"] = "FROM dereja_services";
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
	"m_strName" => "ServiceID",
	"m_strTable" => "dereja_services",
	"m_srcTableName" => "dereja_services"
));

$proto6["m_sql"] = "ServiceID";
$proto6["m_srcTableName"] = "dereja_services";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ServiceName",
	"m_strTable" => "dereja_services",
	"m_srcTableName" => "dereja_services"
));

$proto8["m_sql"] = "ServiceName";
$proto8["m_srcTableName"] = "dereja_services";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "dereja_services";
$proto11["m_srcTableName"] = "dereja_services";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ServiceID";
$proto11["m_columns"][] = "ServiceName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "dereja_services";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "dereja_services";
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
$proto0["m_srcTableName"]="dereja_services";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_services = createSqlQuery_dereja_services();


	
																								;

		

$tdatadereja_services[".sqlquery"] = $queryData_dereja_services;



$tdatadereja_services[".hasEvents"] = false;

?>