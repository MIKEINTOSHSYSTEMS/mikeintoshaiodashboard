<?php
$tdatadereja_event_services = array();
$tdatadereja_event_services[".searchableFields"] = array();
$tdatadereja_event_services[".ShortName"] = "dereja_event_services";
$tdatadereja_event_services[".OwnerID"] = "";
$tdatadereja_event_services[".OriginalTable"] = "dereja_event_services";


$tdatadereja_event_services[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadereja_event_services[".originalPagesByType"] = $tdatadereja_event_services[".pagesByType"];
$tdatadereja_event_services[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadereja_event_services[".originalPages"] = $tdatadereja_event_services[".pages"];
$tdatadereja_event_services[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadereja_event_services[".originalDefaultPages"] = $tdatadereja_event_services[".defaultPages"];

//	field labels
$fieldLabelsdereja_event_services = array();
$fieldToolTipsdereja_event_services = array();
$pageTitlesdereja_event_services = array();
$placeHoldersdereja_event_services = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdereja_event_services["English"] = array();
	$fieldToolTipsdereja_event_services["English"] = array();
	$placeHoldersdereja_event_services["English"] = array();
	$pageTitlesdereja_event_services["English"] = array();
	$fieldLabelsdereja_event_services["English"]["EventServiceID"] = "Event Service ID";
	$fieldToolTipsdereja_event_services["English"]["EventServiceID"] = "";
	$placeHoldersdereja_event_services["English"]["EventServiceID"] = "";
	$fieldLabelsdereja_event_services["English"]["ServiceID"] = "Service ID";
	$fieldToolTipsdereja_event_services["English"]["ServiceID"] = "";
	$placeHoldersdereja_event_services["English"]["ServiceID"] = "";
	$fieldLabelsdereja_event_services["English"]["EventID"] = "Event ID";
	$fieldToolTipsdereja_event_services["English"]["EventID"] = "";
	$placeHoldersdereja_event_services["English"]["EventID"] = "";
	if (count($fieldToolTipsdereja_event_services["English"]))
		$tdatadereja_event_services[".isUseToolTips"] = true;
}


	$tdatadereja_event_services[".NCSearch"] = true;



$tdatadereja_event_services[".shortTableName"] = "dereja_event_services";
$tdatadereja_event_services[".nSecOptions"] = 0;

$tdatadereja_event_services[".mainTableOwnerID"] = "";
$tdatadereja_event_services[".entityType"] = 0;
$tdatadereja_event_services[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadereja_event_services[".strOriginalTableName"] = "dereja_event_services";

	



$tdatadereja_event_services[".showAddInPopup"] = false;

$tdatadereja_event_services[".showEditInPopup"] = false;

$tdatadereja_event_services[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadereja_event_services[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadereja_event_services[".listAjax"] = false;
//	temporary
$tdatadereja_event_services[".listAjax"] = false;

	$tdatadereja_event_services[".audit"] = false;

	$tdatadereja_event_services[".locking"] = false;


$pages = $tdatadereja_event_services[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadereja_event_services[".edit"] = true;
	$tdatadereja_event_services[".afterEditAction"] = 1;
	$tdatadereja_event_services[".closePopupAfterEdit"] = 1;
	$tdatadereja_event_services[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadereja_event_services[".add"] = true;
$tdatadereja_event_services[".afterAddAction"] = 1;
$tdatadereja_event_services[".closePopupAfterAdd"] = 1;
$tdatadereja_event_services[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadereja_event_services[".list"] = true;
}



$tdatadereja_event_services[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadereja_event_services[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadereja_event_services[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadereja_event_services[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadereja_event_services[".printFriendly"] = true;
}



$tdatadereja_event_services[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadereja_event_services[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadereja_event_services[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadereja_event_services[".isUseAjaxSuggest"] = true;

$tdatadereja_event_services[".rowHighlite"] = true;





$tdatadereja_event_services[".ajaxCodeSnippetAdded"] = false;

$tdatadereja_event_services[".buttonsAdded"] = false;

$tdatadereja_event_services[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadereja_event_services[".isUseTimeForSearch"] = false;


$tdatadereja_event_services[".badgeColor"] = "EDCA00";


$tdatadereja_event_services[".allSearchFields"] = array();
$tdatadereja_event_services[".filterFields"] = array();
$tdatadereja_event_services[".requiredSearchFields"] = array();

$tdatadereja_event_services[".googleLikeFields"] = array();
$tdatadereja_event_services[".googleLikeFields"][] = "EventServiceID";
$tdatadereja_event_services[".googleLikeFields"][] = "ServiceID";
$tdatadereja_event_services[".googleLikeFields"][] = "EventID";



$tdatadereja_event_services[".tableType"] = "list";

$tdatadereja_event_services[".printerPageOrientation"] = 0;
$tdatadereja_event_services[".nPrinterPageScale"] = 100;

$tdatadereja_event_services[".nPrinterSplitRecords"] = 40;

$tdatadereja_event_services[".geocodingEnabled"] = false;










$tdatadereja_event_services[".pageSize"] = 20;

$tdatadereja_event_services[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadereja_event_services[".strOrderBy"] = $tstrOrderBy;

$tdatadereja_event_services[".orderindexes"] = array();


$tdatadereja_event_services[".sqlHead"] = "SELECT EventServiceID,  	ServiceID,  	EventID";
$tdatadereja_event_services[".sqlFrom"] = "FROM dereja_event_services";
$tdatadereja_event_services[".sqlWhereExpr"] = "";
$tdatadereja_event_services[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadereja_event_services[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadereja_event_services[".arrGroupsPerPage"] = $arrGPP;

$tdatadereja_event_services[".highlightSearchResults"] = true;

$tableKeysdereja_event_services = array();
$tableKeysdereja_event_services[] = "EventServiceID";
$tdatadereja_event_services[".Keys"] = $tableKeysdereja_event_services;


$tdatadereja_event_services[".hideMobileList"] = array();




//	EventServiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventServiceID";
	$fdata["GoodName"] = "EventServiceID";
	$fdata["ownerTable"] = "dereja_event_services";
	$fdata["Label"] = GetFieldLabel("dereja_event_services","EventServiceID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EventServiceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventServiceID";

	
	
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


	$tdatadereja_event_services["EventServiceID"] = $fdata;
		$tdatadereja_event_services[".searchableFields"][] = "EventServiceID";
//	ServiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ServiceID";
	$fdata["GoodName"] = "ServiceID";
	$fdata["ownerTable"] = "dereja_event_services";
	$fdata["Label"] = GetFieldLabel("dereja_event_services","ServiceID");
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

	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatadereja_event_services["ServiceID"] = $fdata;
		$tdatadereja_event_services[".searchableFields"][] = "ServiceID";
//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "dereja_event_services";
	$fdata["Label"] = GetFieldLabel("dereja_event_services","EventID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "EventID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventID";

	
	
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
	$edata["LookupTable"] = "events";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "EventID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "EventName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
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


	$tdatadereja_event_services["EventID"] = $fdata;
		$tdatadereja_event_services[".searchableFields"][] = "EventID";


$tables_data["dereja_event_services"]=&$tdatadereja_event_services;
$field_labels["dereja_event_services"] = &$fieldLabelsdereja_event_services;
$fieldToolTips["dereja_event_services"] = &$fieldToolTipsdereja_event_services;
$placeHolders["dereja_event_services"] = &$placeHoldersdereja_event_services;
$page_titles["dereja_event_services"] = &$pageTitlesdereja_event_services;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dereja_event_services"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dereja_event_services"] = array();



	
				$strOriginalDetailsTable="events";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="events";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "events1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dereja_event_services"][0] = $masterParams;
				$masterTablesData["dereja_event_services"][0]["masterKeys"] = array();
	$masterTablesData["dereja_event_services"][0]["masterKeys"][]="EventID";
				$masterTablesData["dereja_event_services"][0]["detailKeys"] = array();
	$masterTablesData["dereja_event_services"][0]["detailKeys"][]="EventID";
		
	
				$strOriginalDetailsTable="dereja_services";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dereja_services";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dereja_services";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dereja_event_services"][1] = $masterParams;
				$masterTablesData["dereja_event_services"][1]["masterKeys"] = array();
	$masterTablesData["dereja_event_services"][1]["masterKeys"][]="ServiceID";
				$masterTablesData["dereja_event_services"][1]["detailKeys"] = array();
	$masterTablesData["dereja_event_services"][1]["detailKeys"][]="ServiceID";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dereja_event_services()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventServiceID,  	ServiceID,  	EventID";
$proto0["m_strFrom"] = "FROM dereja_event_services";
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
	"m_strName" => "EventServiceID",
	"m_strTable" => "dereja_event_services",
	"m_srcTableName" => "dereja_event_services"
));

$proto6["m_sql"] = "EventServiceID";
$proto6["m_srcTableName"] = "dereja_event_services";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ServiceID",
	"m_strTable" => "dereja_event_services",
	"m_srcTableName" => "dereja_event_services"
));

$proto8["m_sql"] = "ServiceID";
$proto8["m_srcTableName"] = "dereja_event_services";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EventID",
	"m_strTable" => "dereja_event_services",
	"m_srcTableName" => "dereja_event_services"
));

$proto10["m_sql"] = "EventID";
$proto10["m_srcTableName"] = "dereja_event_services";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dereja_event_services";
$proto13["m_srcTableName"] = "dereja_event_services";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "EventServiceID";
$proto13["m_columns"][] = "ServiceID";
$proto13["m_columns"][] = "EventID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dereja_event_services";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dereja_event_services";
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
$proto0["m_srcTableName"]="dereja_event_services";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dereja_event_services = createSqlQuery_dereja_event_services();


	
		;

			

$tdatadereja_event_services[".sqlquery"] = $queryData_dereja_event_services;



$tableEvents["dereja_event_services"] = new eventsBase;
$tdatadereja_event_services[".hasEvents"] = false;

?>