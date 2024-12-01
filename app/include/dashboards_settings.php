<?php
$tdatadashboards = array();
$tdatadashboards[".searchableFields"] = array();
$tdatadashboards[".ShortName"] = "dashboards";
$tdatadashboards[".OwnerID"] = "";
$tdatadashboards[".OriginalTable"] = "dashboards";


$tdatadashboards[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"AIO_Dashboard\",\"AIO_Indicators_Aggregated\",\"Candidates_Dashboard_Data\",\"Candidates_Summary\",\"Employment_Tracking_Dashboard\",\"Events_Participant_Dashboard\",\"Forms_Management\",\"Trainings_Participant_Dashboard\",\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadashboards[".originalPagesByType"] = $tdatadashboards[".pagesByType"];
$tdatadashboards[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"AIO_Dashboard\",\"AIO_Indicators_Aggregated\",\"Candidates_Dashboard_Data\",\"Candidates_Summary\",\"Employment_Tracking_Dashboard\",\"Events_Participant_Dashboard\",\"Forms_Management\",\"Trainings_Participant_Dashboard\",\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadashboards[".originalPages"] = $tdatadashboards[".pages"];
$tdatadashboards[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"AIO_Dashboard\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadashboards[".originalDefaultPages"] = $tdatadashboards[".defaultPages"];

//	field labels
$fieldLabelsdashboards = array();
$fieldToolTipsdashboards = array();
$pageTitlesdashboards = array();
$placeHoldersdashboards = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboards["English"] = array();
	$fieldToolTipsdashboards["English"] = array();
	$placeHoldersdashboards["English"] = array();
	$pageTitlesdashboards["English"] = array();
	$fieldLabelsdashboards["English"]["dashboard_commentid"] = "Dashboard Commentid";
	$fieldToolTipsdashboards["English"]["dashboard_commentid"] = "";
	$placeHoldersdashboards["English"]["dashboard_commentid"] = "";
	$fieldLabelsdashboards["English"]["dashboard_comment"] = "Dashboard Comment";
	$fieldToolTipsdashboards["English"]["dashboard_comment"] = "";
	$placeHoldersdashboards["English"]["dashboard_comment"] = "";
	$fieldLabelsdashboards["English"]["dashboard_commentdate"] = "Dashboard Commentdate";
	$fieldToolTipsdashboards["English"]["dashboard_commentdate"] = "";
	$placeHoldersdashboards["English"]["dashboard_commentdate"] = "";
	$fieldLabelsdashboards["English"]["dashboard_userdetails"] = "Dashboard Userdetails";
	$fieldToolTipsdashboards["English"]["dashboard_userdetails"] = "";
	$placeHoldersdashboards["English"]["dashboard_userdetails"] = "";
	$fieldLabelsdashboards["English"]["dashboard_commentfiles"] = "Dashboard Commentfiles";
	$fieldToolTipsdashboards["English"]["dashboard_commentfiles"] = "";
	$placeHoldersdashboards["English"]["dashboard_commentfiles"] = "";
	$pageTitlesdashboards["English"]["add"] = " Add new comment";
	$pageTitlesdashboards["English"]["edit"] = "Dashboard Comments, Edit [{%dashboard_commentid}]";
	if (count($fieldToolTipsdashboards["English"]))
		$tdatadashboards[".isUseToolTips"] = true;
}


	$tdatadashboards[".NCSearch"] = true;



$tdatadashboards[".shortTableName"] = "dashboards";
$tdatadashboards[".nSecOptions"] = 0;

$tdatadashboards[".mainTableOwnerID"] = "";
$tdatadashboards[".entityType"] = 0;
$tdatadashboards[".connId"] = "deredevatderejadevmerqconsulta";


$tdatadashboards[".strOriginalTableName"] = "dashboards";

	



$tdatadashboards[".showAddInPopup"] = false;

$tdatadashboards[".showEditInPopup"] = false;

$tdatadashboards[".showViewInPopup"] = false;

$tdatadashboards[".listAjax"] = false;
//	temporary
//$tdatadashboards[".listAjax"] = false;

	$tdatadashboards[".audit"] = true;

	$tdatadashboards[".locking"] = false;


$pages = $tdatadashboards[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadashboards[".edit"] = true;
	$tdatadashboards[".afterEditAction"] = 1;
	$tdatadashboards[".closePopupAfterEdit"] = 1;
	$tdatadashboards[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadashboards[".add"] = true;
$tdatadashboards[".afterAddAction"] = 1;
$tdatadashboards[".closePopupAfterAdd"] = 1;
$tdatadashboards[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadashboards[".list"] = true;
}



$tdatadashboards[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadashboards[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadashboards[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadashboards[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadashboards[".printFriendly"] = true;
}



$tdatadashboards[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadashboards[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadashboards[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadashboards[".isUseAjaxSuggest"] = true;



			

$tdatadashboards[".ajaxCodeSnippetAdded"] = false;

$tdatadashboards[".buttonsAdded"] = false;

$tdatadashboards[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadashboards[".isUseTimeForSearch"] = false;


$tdatadashboards[".badgeColor"] = "6DA5C8";


$tdatadashboards[".allSearchFields"] = array();
$tdatadashboards[".filterFields"] = array();
$tdatadashboards[".requiredSearchFields"] = array();

$tdatadashboards[".googleLikeFields"] = array();
$tdatadashboards[".googleLikeFields"][] = "dashboard_commentid";
$tdatadashboards[".googleLikeFields"][] = "dashboard_comment";
$tdatadashboards[".googleLikeFields"][] = "dashboard_commentdate";
$tdatadashboards[".googleLikeFields"][] = "dashboard_userdetails";
$tdatadashboards[".googleLikeFields"][] = "dashboard_commentfiles";



$tdatadashboards[".tableType"] = "list";

$tdatadashboards[".printerPageOrientation"] = 0;
$tdatadashboards[".nPrinterPageScale"] = 100;

$tdatadashboards[".nPrinterSplitRecords"] = 40;

$tdatadashboards[".geocodingEnabled"] = false;




$tdatadashboards[".isDisplayLoading"] = true;






$tdatadashboards[".pageSize"] = 20;

$tdatadashboards[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadashboards[".strOrderBy"] = $tstrOrderBy;

$tdatadashboards[".orderindexes"] = array();


$tdatadashboards[".sqlHead"] = "SELECT dashboard_commentid,  	dashboard_comment,  	dashboard_commentdate,  	dashboard_userdetails,  	dashboard_commentfiles";
$tdatadashboards[".sqlFrom"] = "FROM dashboards";
$tdatadashboards[".sqlWhereExpr"] = "";
$tdatadashboards[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadashboards[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadashboards[".arrGroupsPerPage"] = $arrGPP;

$tdatadashboards[".highlightSearchResults"] = true;

$tableKeysdashboards = array();
$tableKeysdashboards[] = "dashboard_commentid";
$tdatadashboards[".Keys"] = $tableKeysdashboards;


$tdatadashboards[".hideMobileList"] = array();




//	dashboard_commentid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dashboard_commentid";
	$fdata["GoodName"] = "dashboard_commentid";
	$fdata["ownerTable"] = "dashboards";
	$fdata["Label"] = GetFieldLabel("dashboards","dashboard_commentid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "dashboard_commentid";

		$fdata["sourceSingle"] = "dashboard_commentid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_commentid";

	
	
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


	$tdatadashboards["dashboard_commentid"] = $fdata;
		$tdatadashboards[".searchableFields"][] = "dashboard_commentid";
//	dashboard_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dashboard_comment";
	$fdata["GoodName"] = "dashboard_comment";
	$fdata["ownerTable"] = "dashboards";
	$fdata["Label"] = GetFieldLabel("dashboards","dashboard_comment");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_comment";

		$fdata["sourceSingle"] = "dashboard_comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_comment";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 400;
			$edata["nCols"] = 200;

	
	
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


	$tdatadashboards["dashboard_comment"] = $fdata;
		$tdatadashboards[".searchableFields"][] = "dashboard_comment";
//	dashboard_commentdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dashboard_commentdate";
	$fdata["GoodName"] = "dashboard_commentdate";
	$fdata["ownerTable"] = "dashboards";
	$fdata["Label"] = GetFieldLabel("dashboards","dashboard_commentdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "dashboard_commentdate";

		$fdata["sourceSingle"] = "dashboard_commentdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_commentdate";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadashboards["dashboard_commentdate"] = $fdata;
		$tdatadashboards[".searchableFields"][] = "dashboard_commentdate";
//	dashboard_userdetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dashboard_userdetails";
	$fdata["GoodName"] = "dashboard_userdetails";
	$fdata["ownerTable"] = "dashboards";
	$fdata["Label"] = GetFieldLabel("dashboards","dashboard_userdetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_userdetails";

		$fdata["sourceSingle"] = "dashboard_userdetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_userdetails";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadashboards["dashboard_userdetails"] = $fdata;
		$tdatadashboards[".searchableFields"][] = "dashboard_userdetails";
//	dashboard_commentfiles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dashboard_commentfiles";
	$fdata["GoodName"] = "dashboard_commentfiles";
	$fdata["ownerTable"] = "dashboards";
	$fdata["Label"] = GetFieldLabel("dashboards","dashboard_commentfiles");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dashboard_commentfiles";

		$fdata["sourceSingle"] = "dashboard_commentfiles";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dashboard_commentfiles";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files/dashboardfiles";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("doc");
						$edata["acceptFileTypesHtml"] = ".doc";
			$edata["acceptFileTypes"][] = strtoupper("docx");
						$edata["acceptFileTypesHtml"] .= ",.docx";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] .= ",.pdf";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";
			$edata["acceptFileTypes"][] = strtoupper("rtf");
						$edata["acceptFileTypesHtml"] .= ",.rtf";
			$edata["acceptFileTypes"][] = strtoupper("txt");
						$edata["acceptFileTypesHtml"] .= ",.txt";

		$edata["maxNumberOfFiles"] = 4;

		$edata["maxFileSize"] = 1024;

		$edata["maxTotalFilesSize"] = 4096;

	
	
	
	
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


	$tdatadashboards["dashboard_commentfiles"] = $fdata;
		$tdatadashboards[".searchableFields"][] = "dashboard_commentfiles";


$tables_data["dashboards"]=&$tdatadashboards;
$field_labels["dashboards"] = &$fieldLabelsdashboards;
$fieldToolTips["dashboards"] = &$fieldToolTipsdashboards;
$placeHolders["dashboards"] = &$placeHoldersdashboards;
$page_titles["dashboards"] = &$pageTitlesdashboards;


changeTextControlsToDate( "dashboards" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dashboards"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dashboards"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dashboards()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dashboard_commentid,  	dashboard_comment,  	dashboard_commentdate,  	dashboard_userdetails,  	dashboard_commentfiles";
$proto0["m_strFrom"] = "FROM dashboards";
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
	"m_strName" => "dashboard_commentid",
	"m_strTable" => "dashboards",
	"m_srcTableName" => "dashboards"
));

$proto6["m_sql"] = "dashboard_commentid";
$proto6["m_srcTableName"] = "dashboards";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_comment",
	"m_strTable" => "dashboards",
	"m_srcTableName" => "dashboards"
));

$proto8["m_sql"] = "dashboard_comment";
$proto8["m_srcTableName"] = "dashboards";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_commentdate",
	"m_strTable" => "dashboards",
	"m_srcTableName" => "dashboards"
));

$proto10["m_sql"] = "dashboard_commentdate";
$proto10["m_srcTableName"] = "dashboards";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_userdetails",
	"m_strTable" => "dashboards",
	"m_srcTableName" => "dashboards"
));

$proto12["m_sql"] = "dashboard_userdetails";
$proto12["m_srcTableName"] = "dashboards";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dashboard_commentfiles",
	"m_strTable" => "dashboards",
	"m_srcTableName" => "dashboards"
));

$proto14["m_sql"] = "dashboard_commentfiles";
$proto14["m_srcTableName"] = "dashboards";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dashboards";
$proto17["m_srcTableName"] = "dashboards";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "dashboard_commentid";
$proto17["m_columns"][] = "dashboard_comment";
$proto17["m_columns"][] = "dashboard_commentdate";
$proto17["m_columns"][] = "dashboard_userdetails";
$proto17["m_columns"][] = "dashboard_commentfiles";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dashboards";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dashboards";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dashboards";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dashboards = createSqlQuery_dashboards();


	
																								;

					

$tdatadashboards[".sqlquery"] = $queryData_dashboards;



$tdatadashboards[".hasEvents"] = false;

?>