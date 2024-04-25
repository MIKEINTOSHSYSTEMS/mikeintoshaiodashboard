<?php
$tdatadereja_training_services = array();
$tdatadereja_training_services[".searchableFields"] = array();
$tdatadereja_training_services[".ShortName"] = "dereja_training_services";
$tdatadereja_training_services[".OwnerID"] = "";
$tdatadereja_training_services[".OriginalTable"] = "dereja_training_services";


$tdatadereja_training_services[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_training_services[".originalPagesByType"] = $tdatadereja_training_services[".pagesByType"];
$tdatadereja_training_services[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_training_services[".originalPages"] = $tdatadereja_training_services[".pages"];
$tdatadereja_training_services[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_training_services[".originalDefaultPages"] = $tdatadereja_training_services[".defaultPages"];

//	field labels
$fieldLabelsdereja_training_services = array();
$fieldToolTipsdereja_training_services = array();
$pageTitlesdereja_training_services = array();
$placeHoldersdereja_training_services = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_training_services["English"] = array();
	$fieldToolTipsdereja_training_services["English"] = array();
	$placeHoldersdereja_training_services["English"] = array();
	$pageTitlesdereja_training_services["English"] = array();
	$fieldLabelsdereja_training_services["English"]["TrainingServiceID"] = "Training Service ID";
	$fieldToolTipsdereja_training_services["English"]["TrainingServiceID"] = "";
	$placeHoldersdereja_training_services["English"]["TrainingServiceID"] = "";
	$fieldLabelsdereja_training_services["English"]["ServiceID"] = "Service ID";
	$fieldToolTipsdereja_training_services["English"]["ServiceID"] = "";
	$placeHoldersdereja_training_services["English"]["ServiceID"] = "";
	$fieldLabelsdereja_training_services["English"]["TrainingID"] = "Training ID";
	$fieldToolTipsdereja_training_services["English"]["TrainingID"] = "";
	$placeHoldersdereja_training_services["English"]["TrainingID"] = "";
	if (count($fieldToolTipsdereja_training_services["English"]))
		$tdatadereja_training_services[".isUseToolTips"] = true;
}


	$tdatadereja_training_services[".NCSearch"] = true;



$tdatadereja_training_services[".shortTableName"] = "dereja_training_services";
$tdatadereja_training_services[".nSecOptions"] = 0;

$tdatadereja_training_services[".mainTableOwnerID"] = "";
$tdatadereja_training_services[".entityType"] = 0;
$tdatadereja_training_services[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_training_services[".strOriginalTableName"] = "dereja_training_services";

	



$tdatadereja_training_services[".showAddInPopup"] = false;

$tdatadereja_training_services[".showEditInPopup"] = false;

$tdatadereja_training_services[".showViewInPopup"] = false;

$tdatadereja_training_services[".listAjax"] = false;
//	temporary
//$tdatadereja_training_services[".listAjax"] = false;

	$tdatadereja_training_services[".audit"] = true;

	$tdatadereja_training_services[".locking"] = false;


$pages = $tdatadereja_training_services[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_training_services[".edit"] = true;
	$tdatadereja_training_services[".afterEditAction"] = 1;
	$tdatadereja_training_services[".closePopupAfterEdit"] = 1;
	$tdatadereja_training_services[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_training_services[".add"] = true;
$tdatadereja_training_services[".afterAddAction"] = 1;
$tdatadereja_training_services[".closePopupAfterAdd"] = 1;
$tdatadereja_training_services[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_training_services[".list"] = true;
}



$tdatadereja_training_services[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_training_services[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_training_services[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_training_services[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_training_services[".printFriendly"] = true;
}



$tdatadereja_training_services[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_training_services[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_training_services[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_training_services[".isUseAjaxSuggest"] = true;



									

$tdatadereja_training_services[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_training_services[".buttonsAdded"] = false;

$tdatadereja_training_services[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_training_services[".isUseTimeForSearch"] = false;


$tdatadereja_training_services[".badgeColor"] = "D2AF80";


$tdatadereja_training_services[".allSearchFields"] = array();
$tdatadereja_training_services[".filterFields"] = array();
$tdatadereja_training_services[".requiredSearchFields"] = array();

$tdatadereja_training_services[".googleLikeFields"] = array();
$tdatadereja_training_services[".googleLikeFields"][] = "TrainingServiceID";
$tdatadereja_training_services[".googleLikeFields"][] = "ServiceID";
$tdatadereja_training_services[".googleLikeFields"][] = "TrainingID";



$tdatadereja_training_services[".tableType"] = "list";

$tdatadereja_training_services[".printerPageOrientation"] = 0;
$tdatadereja_training_services[".nPrinterPageScale"] = 100;

$tdatadereja_training_services[".nPrinterSplitRecords"] = 40;

$tdatadereja_training_services[".geocodingEnabled"] = false;










$tdatadereja_training_services[".pageSize"] = 20;

$tdatadereja_training_services[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadereja_training_services[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_training_services[".orderindexes"] = array();


$tdatadereja_training_services[".sqlHead"] = "SELECT TrainingServiceID,  	ServiceID,  	TrainingID";
$tdatadereja_training_services[".sqlFrom"] = "FROM dereja_training_services";
$tdatadereja_training_services[".sqlWhereExpr"] = "";
$tdatadereja_training_services[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_training_services[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_training_services[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_training_services[".highlightSearchResults"] = true;

$tableKeysdereja_training_services = array();
$tableKeysdereja_training_services[] = "TrainingServiceID";
$tdatadereja_training_services[".Keys"] = $tableKeysdereja_training_services;


$tdatadereja_training_services[".hideMobileList"] = array();




//	TrainingServiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingServiceID";
	$fdata["GoodName"] = "TrainingServiceID";
	$fdata["ownerTable"] = "dereja_training_services";
	$fdata["Label"] = GetFieldLabel("dereja_training_services","TrainingServiceID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TrainingServiceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingServiceID";

	
	
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


	$tdatadereja_training_services["TrainingServiceID"] = $fdata;
		$tdatadereja_training_services[".searchableFields"][] = "TrainingServiceID";
//	ServiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ServiceID";
	$fdata["GoodName"] = "ServiceID";
	$fdata["ownerTable"] = "dereja_training_services";
	$fdata["Label"] = GetFieldLabel("dereja_training_services","ServiceID");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dereja_services";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ServiceID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ServiceName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatadereja_training_services["ServiceID"] = $fdata;
		$tdatadereja_training_services[".searchableFields"][] = "ServiceID";
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "dereja_training_services";
	$fdata["Label"] = GetFieldLabel("dereja_training_services","TrainingID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TrainingID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "trainings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingTitle";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatadereja_training_services["TrainingID"] = $fdata;
		$tdatadereja_training_services[".searchableFields"][] = "TrainingID";


$tables_data["dereja_training_services"]=&$tdatadereja_training_services;
$field_labels["dereja_training_services"] = &$fieldLabelsdereja_training_services;
$fieldToolTips["dereja_training_services"] = &$fieldToolTipsdereja_training_services;
$placeHolders["dereja_training_services"] = &$placeHoldersdereja_training_services;
$page_titles["dereja_training_services"] = &$pageTitlesdereja_training_services;


changeTextControlsToDate( "dereja_training_services" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dereja_training_services"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dereja_training_services"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dereja_services";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dereja_services";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dereja_services";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dereja_training_services"][0] = $masterParams;
				$masterTablesData["dereja_training_services"][0]["masterKeys"] = array();
	$masterTablesData["dereja_training_services"][0]["masterKeys"][]="ServiceID";
				$masterTablesData["dereja_training_services"][0]["detailKeys"] = array();
	$masterTablesData["dereja_training_services"][0]["detailKeys"][]="ServiceID";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="trainings";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="trainings";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "trainings1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dereja_training_services"][1] = $masterParams;
				$masterTablesData["dereja_training_services"][1]["masterKeys"] = array();
	$masterTablesData["dereja_training_services"][1]["masterKeys"][]="TrainingID";
				$masterTablesData["dereja_training_services"][1]["detailKeys"] = array();
	$masterTablesData["dereja_training_services"][1]["detailKeys"][]="TrainingID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_training_services()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingServiceID,  	ServiceID,  	TrainingID";
$proto0["m_strFrom"] = "FROM dereja_training_services";
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
	"m_strName" => "TrainingServiceID",
	"m_strTable" => "dereja_training_services",
	"m_srcTableName" => "dereja_training_services"
));

$proto6["m_sql"] = "TrainingServiceID";
$proto6["m_srcTableName"] = "dereja_training_services";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ServiceID",
	"m_strTable" => "dereja_training_services",
	"m_srcTableName" => "dereja_training_services"
));

$proto8["m_sql"] = "ServiceID";
$proto8["m_srcTableName"] = "dereja_training_services";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "dereja_training_services",
	"m_srcTableName" => "dereja_training_services"
));

$proto10["m_sql"] = "TrainingID";
$proto10["m_srcTableName"] = "dereja_training_services";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dereja_training_services";
$proto13["m_srcTableName"] = "dereja_training_services";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TrainingServiceID";
$proto13["m_columns"][] = "ServiceID";
$proto13["m_columns"][] = "TrainingID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dereja_training_services";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dereja_training_services";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dereja_training_services";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_training_services = createSqlQuery_dereja_training_services();


	
																								;

			

$tdatadereja_training_services[".sqlquery"] = $queryData_dereja_training_services;



$tdatadereja_training_services[".hasEvents"] = false;

?>