<?php
$tdataevent_participants = array();
$tdataevent_participants[".searchableFields"] = array();
$tdataevent_participants[".ShortName"] = "event_participants";
$tdataevent_participants[".OwnerID"] = "";
$tdataevent_participants[".OriginalTable"] = "event_participants";


$tdataevent_participants[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataevent_participants[".originalPagesByType"] = $tdataevent_participants[".pagesByType"];
$tdataevent_participants[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataevent_participants[".originalPages"] = $tdataevent_participants[".pages"];
$tdataevent_participants[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataevent_participants[".originalDefaultPages"] = $tdataevent_participants[".defaultPages"];

//	field labels
$fieldLabelsevent_participants = array();
$fieldToolTipsevent_participants = array();
$pageTitlesevent_participants = array();
$placeHoldersevent_participants = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevent_participants["English"] = array();
	$fieldToolTipsevent_participants["English"] = array();
	$placeHoldersevent_participants["English"] = array();
	$pageTitlesevent_participants["English"] = array();
	$fieldLabelsevent_participants["English"]["EventID"] = "Event ID";
	$fieldToolTipsevent_participants["English"]["EventID"] = "";
	$placeHoldersevent_participants["English"]["EventID"] = "";
	$fieldLabelsevent_participants["English"]["CandidateID"] = "Candidate ID";
	$fieldToolTipsevent_participants["English"]["CandidateID"] = "";
	$placeHoldersevent_participants["English"]["CandidateID"] = "";
	$fieldLabelsevent_participants["English"]["Event_Start_Date"] = "Event Start Date";
	$fieldToolTipsevent_participants["English"]["Event_Start_Date"] = "";
	$placeHoldersevent_participants["English"]["Event_Start_Date"] = "";
	$fieldLabelsevent_participants["English"]["Event_End_Date"] = "Event End Date";
	$fieldToolTipsevent_participants["English"]["Event_End_Date"] = "";
	$placeHoldersevent_participants["English"]["Event_End_Date"] = "";
	if (count($fieldToolTipsevent_participants["English"]))
		$tdataevent_participants[".isUseToolTips"] = true;
}


	$tdataevent_participants[".NCSearch"] = true;



$tdataevent_participants[".shortTableName"] = "event_participants";
$tdataevent_participants[".nSecOptions"] = 0;

$tdataevent_participants[".mainTableOwnerID"] = "";
$tdataevent_participants[".entityType"] = 0;
$tdataevent_participants[".connId"] = "deredevatderejadevmerqconsulta";


$tdataevent_participants[".strOriginalTableName"] = "event_participants";

	



$tdataevent_participants[".showAddInPopup"] = false;

$tdataevent_participants[".showEditInPopup"] = false;

$tdataevent_participants[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevent_participants[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevent_participants[".listAjax"] = false;
//	temporary
$tdataevent_participants[".listAjax"] = false;

	$tdataevent_participants[".audit"] = false;

	$tdataevent_participants[".locking"] = false;


$pages = $tdataevent_participants[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataevent_participants[".edit"] = true;
	$tdataevent_participants[".afterEditAction"] = 1;
	$tdataevent_participants[".closePopupAfterEdit"] = 1;
	$tdataevent_participants[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataevent_participants[".add"] = true;
$tdataevent_participants[".afterAddAction"] = 1;
$tdataevent_participants[".closePopupAfterAdd"] = 1;
$tdataevent_participants[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataevent_participants[".list"] = true;
}



$tdataevent_participants[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataevent_participants[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataevent_participants[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataevent_participants[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataevent_participants[".printFriendly"] = true;
}



$tdataevent_participants[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataevent_participants[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataevent_participants[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataevent_participants[".isUseAjaxSuggest"] = true;

$tdataevent_participants[".rowHighlite"] = true;





$tdataevent_participants[".ajaxCodeSnippetAdded"] = false;

$tdataevent_participants[".buttonsAdded"] = false;

$tdataevent_participants[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevent_participants[".isUseTimeForSearch"] = false;


$tdataevent_participants[".badgeColor"] = "E67349";


$tdataevent_participants[".allSearchFields"] = array();
$tdataevent_participants[".filterFields"] = array();
$tdataevent_participants[".requiredSearchFields"] = array();

$tdataevent_participants[".googleLikeFields"] = array();
$tdataevent_participants[".googleLikeFields"][] = "EventID";
$tdataevent_participants[".googleLikeFields"][] = "CandidateID";
$tdataevent_participants[".googleLikeFields"][] = "Event_Start_Date";
$tdataevent_participants[".googleLikeFields"][] = "Event_End_Date";



$tdataevent_participants[".tableType"] = "list";

$tdataevent_participants[".printerPageOrientation"] = 0;
$tdataevent_participants[".nPrinterPageScale"] = 100;

$tdataevent_participants[".nPrinterSplitRecords"] = 40;

$tdataevent_participants[".geocodingEnabled"] = false;










$tdataevent_participants[".pageSize"] = 20;

$tdataevent_participants[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevent_participants[".strOrderBy"] = $tstrOrderBy;

$tdataevent_participants[".orderindexes"] = array();


$tdataevent_participants[".sqlHead"] = "SELECT EventID,  	CandidateID,  	Event_Start_Date,  	Event_End_Date";
$tdataevent_participants[".sqlFrom"] = "FROM event_participants";
$tdataevent_participants[".sqlWhereExpr"] = "";
$tdataevent_participants[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevent_participants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevent_participants[".arrGroupsPerPage"] = $arrGPP;

$tdataevent_participants[".highlightSearchResults"] = true;

$tableKeysevent_participants = array();
$tableKeysevent_participants[] = "EventID";
$tableKeysevent_participants[] = "CandidateID";
$tdataevent_participants[".Keys"] = $tableKeysevent_participants;


$tdataevent_participants[".hideMobileList"] = array();




//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","EventID");
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


	$tdataevent_participants["EventID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "EventID";
//	CandidateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CandidateID";
	$fdata["GoodName"] = "CandidateID";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","CandidateID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "CandidateID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CandidateID";

	
	
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
	$edata["LookupTable"] = "candidates";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CandidateID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CandidateID";

	

	
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


	$tdataevent_participants["CandidateID"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "CandidateID";
//	Event_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Event_Start_Date";
	$fdata["GoodName"] = "Event_Start_Date";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_Start_Date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Event_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_Start_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataevent_participants["Event_Start_Date"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_Start_Date";
//	Event_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Event_End_Date";
	$fdata["GoodName"] = "Event_End_Date";
	$fdata["ownerTable"] = "event_participants";
	$fdata["Label"] = GetFieldLabel("event_participants","Event_End_Date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Event_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_End_Date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataevent_participants["Event_End_Date"] = $fdata;
		$tdataevent_participants[".searchableFields"][] = "Event_End_Date";


$tables_data["event_participants"]=&$tdataevent_participants;
$field_labels["event_participants"] = &$fieldLabelsevent_participants;
$fieldToolTips["event_participants"] = &$fieldToolTipsevent_participants;
$placeHolders["event_participants"] = &$placeHoldersevent_participants;
$page_titles["event_participants"] = &$pageTitlesevent_participants;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["event_participants"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["event_participants"] = array();



	
				$strOriginalDetailsTable="candidates";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="candidates";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "candidates";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_participants"][0] = $masterParams;
				$masterTablesData["event_participants"][0]["masterKeys"] = array();
	$masterTablesData["event_participants"][0]["masterKeys"][]="CandidateID";
				$masterTablesData["event_participants"][0]["detailKeys"] = array();
	$masterTablesData["event_participants"][0]["detailKeys"][]="CandidateID";
		
	
				$strOriginalDetailsTable="events";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="events";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "events1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["event_participants"][1] = $masterParams;
				$masterTablesData["event_participants"][1]["masterKeys"] = array();
	$masterTablesData["event_participants"][1]["masterKeys"][]="EventID";
				$masterTablesData["event_participants"][1]["detailKeys"] = array();
	$masterTablesData["event_participants"][1]["detailKeys"][]="EventID";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_event_participants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EventID,  	CandidateID,  	Event_Start_Date,  	Event_End_Date";
$proto0["m_strFrom"] = "FROM event_participants";
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
	"m_strName" => "EventID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto6["m_sql"] = "EventID";
$proto6["m_srcTableName"] = "event_participants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CandidateID",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto8["m_sql"] = "CandidateID";
$proto8["m_srcTableName"] = "event_participants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_Start_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto10["m_sql"] = "Event_Start_Date";
$proto10["m_srcTableName"] = "event_participants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_End_Date",
	"m_strTable" => "event_participants",
	"m_srcTableName" => "event_participants"
));

$proto12["m_sql"] = "Event_End_Date";
$proto12["m_srcTableName"] = "event_participants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "event_participants";
$proto15["m_srcTableName"] = "event_participants";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "EventID";
$proto15["m_columns"][] = "CandidateID";
$proto15["m_columns"][] = "Event_Start_Date";
$proto15["m_columns"][] = "Event_End_Date";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "event_participants";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "event_participants";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="event_participants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_event_participants = createSqlQuery_event_participants();


	
		;

				

$tdataevent_participants[".sqlquery"] = $queryData_event_participants;



$tableEvents["event_participants"] = new eventsBase;
$tdataevent_participants[".hasEvents"] = false;

?>