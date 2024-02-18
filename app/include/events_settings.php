<?php
$tdataevents = array();
$tdataevents[".searchableFields"] = array();
$tdataevents[".ShortName"] = "events";
$tdataevents[".OwnerID"] = "";
$tdataevents[".OriginalTable"] = "Events";


$tdataevents[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevents[".originalPagesByType"] = $tdataevents[".pagesByType"];
$tdataevents[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevents[".originalPages"] = $tdataevents[".pages"];
$tdataevents[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevents[".originalDefaultPages"] = $tdataevents[".defaultPages"];

//	field labels
$fieldLabelsevents = array();
$fieldToolTipsevents = array();
$pageTitlesevents = array();
$placeHoldersevents = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevents["English"] = array();
	$fieldToolTipsevents["English"] = array();
	$placeHoldersevents["English"] = array();
	$pageTitlesevents["English"] = array();
	$fieldLabelsevents["English"]["EventNameID"] = "Event Name ID";
	$fieldToolTipsevents["English"]["EventNameID"] = "";
	$placeHoldersevents["English"]["EventNameID"] = "";
	$fieldLabelsevents["English"]["SetEventName"] = "Set Event Name";
	$fieldToolTipsevents["English"]["SetEventName"] = "";
	$placeHoldersevents["English"]["SetEventName"] = "";
	if (count($fieldToolTipsevents["English"]))
		$tdataevents[".isUseToolTips"] = true;
}


	$tdataevents[".NCSearch"] = true;



$tdataevents[".shortTableName"] = "events";
$tdataevents[".nSecOptions"] = 0;

$tdataevents[".mainTableOwnerID"] = "";
$tdataevents[".entityType"] = 0;
$tdataevents[".connId"] = "deredevatderejadevmerqconsulta";


$tdataevents[".strOriginalTableName"] = "Events";

	



$tdataevents[".showAddInPopup"] = false;

$tdataevents[".showEditInPopup"] = false;

$tdataevents[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevents[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevents[".listAjax"] = false;
//	temporary
$tdataevents[".listAjax"] = false;

	$tdataevents[".audit"] = false;

	$tdataevents[".locking"] = false;


$pages = $tdataevents[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevents[".edit"] = true;
	$tdataevents[".afterEditAction"] = 1;
	$tdataevents[".closePopupAfterEdit"] = 1;
	$tdataevents[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevents[".add"] = true;
$tdataevents[".afterAddAction"] = 1;
$tdataevents[".closePopupAfterAdd"] = 1;
$tdataevents[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevents[".list"] = true;
}



$tdataevents[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevents[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevents[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevents[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevents[".printFriendly"] = true;
}



$tdataevents[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevents[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevents[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevents[".isUseAjaxSuggest"] = true;

$tdataevents[".rowHighlite"] = true;





$tdataevents[".ajaxCodeSnippetAdded"] = false;

$tdataevents[".buttonsAdded"] = false;

$tdataevents[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevents[".isUseTimeForSearch"] = false;


$tdataevents[".badgeColor"] = "DAA520";


$tdataevents[".allSearchFields"] = array();
$tdataevents[".filterFields"] = array();
$tdataevents[".requiredSearchFields"] = array();

$tdataevents[".googleLikeFields"] = array();
$tdataevents[".googleLikeFields"][] = "EventNameID";
$tdataevents[".googleLikeFields"][] = "SetEventName";



$tdataevents[".tableType"] = "list";

$tdataevents[".printerPageOrientation"] = 0;
$tdataevents[".nPrinterPageScale"] = 100;

$tdataevents[".nPrinterSplitRecords"] = 40;

$tdataevents[".geocodingEnabled"] = false;




$tdataevents[".isDisplayLoading"] = true;






$tdataevents[".pageSize"] = 20;

$tdataevents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevents[".strOrderBy"] = $tstrOrderBy;

$tdataevents[".orderindexes"] = array();


$tdataevents[".sqlHead"] = "SELECT EventNameID,  	SetEventName";
$tdataevents[".sqlFrom"] = "FROM Events";
$tdataevents[".sqlWhereExpr"] = "";
$tdataevents[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevents[".arrGroupsPerPage"] = $arrGPP;

$tdataevents[".highlightSearchResults"] = true;

$tableKeysevents = array();
$tableKeysevents[] = "EventNameID";
$tdataevents[".Keys"] = $tableKeysevents;


$tdataevents[".hideMobileList"] = array();




//	EventNameID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventNameID";
	$fdata["GoodName"] = "EventNameID";
	$fdata["ownerTable"] = "Events";
	$fdata["Label"] = GetFieldLabel("Events","EventNameID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "EventNameID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventNameID";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataevents["EventNameID"] = $fdata;
		$tdataevents[".searchableFields"][] = "EventNameID";
//	SetEventName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SetEventName";
	$fdata["GoodName"] = "SetEventName";
	$fdata["ownerTable"] = "Events";
	$fdata["Label"] = GetFieldLabel("Events","SetEventName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SetEventName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SetEventName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataevents["SetEventName"] = $fdata;
		$tdataevents[".searchableFields"][] = "SetEventName";


$tables_data["Events"]=&$tdataevents;
$field_labels["Events"] = &$fieldLabelsevents;
$fieldToolTips["Events"] = &$fieldToolTipsevents;
$placeHolders["Events"] = &$placeHoldersevents;
$page_titles["Events"] = &$pageTitlesevents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Events"] = array();
//	event_profile
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="event_profile";
		$detailsParam["dOriginalTable"] = "event_profile";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "event_profile";
	$detailsParam["dCaptionTable"] = GetTableCaption("event_profile");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Events"][$dIndex]["masterKeys"][]="SetEventName";

				$detailsTablesData["Events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Events"][$dIndex]["detailKeys"][]="Event Name";

// tables which are master tables for current table (detail)
$masterTablesData["Events"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventNameID,  	SetEventName";
$proto0["m_strFrom"] = "FROM Events";
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
	"m_strName" => "EventNameID",
	"m_strTable" => "Events",
	"m_srcTableName" => "Events"
));

$proto6["m_sql"] = "EventNameID";
$proto6["m_srcTableName"] = "Events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SetEventName",
	"m_strTable" => "Events",
	"m_srcTableName" => "Events"
));

$proto8["m_sql"] = "SetEventName";
$proto8["m_srcTableName"] = "Events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Events";
$proto11["m_srcTableName"] = "Events";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "EventNameID";
$proto11["m_columns"][] = "SetEventName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Events";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Events";
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
$proto0["m_srcTableName"]="Events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_events = createSqlQuery_events();


	
		;

		

$tdataevents[".sqlquery"] = $queryData_events;



$tableEvents["Events"] = new eventsBase;
$tdataevents[".hasEvents"] = false;

?>