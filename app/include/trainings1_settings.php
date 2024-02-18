<?php
$tdatatrainings1 = array();
$tdatatrainings1[".searchableFields"] = array();
$tdatatrainings1[".ShortName"] = "trainings1";
$tdatatrainings1[".OwnerID"] = "";
$tdatatrainings1[".OriginalTable"] = "trainings";


$tdatatrainings1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatrainings1[".originalPagesByType"] = $tdatatrainings1[".pagesByType"];
$tdatatrainings1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatrainings1[".originalPages"] = $tdatatrainings1[".pages"];
$tdatatrainings1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatrainings1[".originalDefaultPages"] = $tdatatrainings1[".defaultPages"];

//	field labels
$fieldLabelstrainings1 = array();
$fieldToolTipstrainings1 = array();
$pageTitlestrainings1 = array();
$placeHolderstrainings1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrainings1["English"] = array();
	$fieldToolTipstrainings1["English"] = array();
	$placeHolderstrainings1["English"] = array();
	$pageTitlestrainings1["English"] = array();
	$fieldLabelstrainings1["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstrainings1["English"]["TrainingID"] = "";
	$placeHolderstrainings1["English"]["TrainingID"] = "";
	$fieldLabelstrainings1["English"]["TrainingTitle"] = "Training Title";
	$fieldToolTipstrainings1["English"]["TrainingTitle"] = "";
	$placeHolderstrainings1["English"]["TrainingTitle"] = "";
	if (count($fieldToolTipstrainings1["English"]))
		$tdatatrainings1[".isUseToolTips"] = true;
}


	$tdatatrainings1[".NCSearch"] = true;



$tdatatrainings1[".shortTableName"] = "trainings1";
$tdatatrainings1[".nSecOptions"] = 0;

$tdatatrainings1[".mainTableOwnerID"] = "";
$tdatatrainings1[".entityType"] = 0;
$tdatatrainings1[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatrainings1[".strOriginalTableName"] = "trainings";

	



$tdatatrainings1[".showAddInPopup"] = false;

$tdatatrainings1[".showEditInPopup"] = false;

$tdatatrainings1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatrainings1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatrainings1[".listAjax"] = false;
//	temporary
$tdatatrainings1[".listAjax"] = false;

	$tdatatrainings1[".audit"] = false;

	$tdatatrainings1[".locking"] = false;


$pages = $tdatatrainings1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrainings1[".edit"] = true;
	$tdatatrainings1[".afterEditAction"] = 1;
	$tdatatrainings1[".closePopupAfterEdit"] = 1;
	$tdatatrainings1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrainings1[".add"] = true;
$tdatatrainings1[".afterAddAction"] = 1;
$tdatatrainings1[".closePopupAfterAdd"] = 1;
$tdatatrainings1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrainings1[".list"] = true;
}



$tdatatrainings1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrainings1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrainings1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrainings1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrainings1[".printFriendly"] = true;
}



$tdatatrainings1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrainings1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrainings1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrainings1[".isUseAjaxSuggest"] = true;

$tdatatrainings1[".rowHighlite"] = true;





$tdatatrainings1[".ajaxCodeSnippetAdded"] = false;

$tdatatrainings1[".buttonsAdded"] = false;

$tdatatrainings1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrainings1[".isUseTimeForSearch"] = false;


$tdatatrainings1[".badgeColor"] = "00C2C5";


$tdatatrainings1[".allSearchFields"] = array();
$tdatatrainings1[".filterFields"] = array();
$tdatatrainings1[".requiredSearchFields"] = array();

$tdatatrainings1[".googleLikeFields"] = array();
$tdatatrainings1[".googleLikeFields"][] = "TrainingID";
$tdatatrainings1[".googleLikeFields"][] = "TrainingTitle";



$tdatatrainings1[".tableType"] = "list";

$tdatatrainings1[".printerPageOrientation"] = 0;
$tdatatrainings1[".nPrinterPageScale"] = 100;

$tdatatrainings1[".nPrinterSplitRecords"] = 40;

$tdatatrainings1[".geocodingEnabled"] = false;




$tdatatrainings1[".isDisplayLoading"] = true;






$tdatatrainings1[".pageSize"] = 20;

$tdatatrainings1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatrainings1[".strOrderBy"] = $tstrOrderBy;

$tdatatrainings1[".orderindexes"] = array();


$tdatatrainings1[".sqlHead"] = "SELECT TrainingID,  	TrainingTitle";
$tdatatrainings1[".sqlFrom"] = "FROM trainings";
$tdatatrainings1[".sqlWhereExpr"] = "";
$tdatatrainings1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrainings1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrainings1[".arrGroupsPerPage"] = $arrGPP;

$tdatatrainings1[".highlightSearchResults"] = true;

$tableKeystrainings1 = array();
$tdatatrainings1[".Keys"] = $tableKeystrainings1;


$tdatatrainings1[".hideMobileList"] = array();




//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TrainingID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatrainings1["TrainingID"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TrainingID";
//	TrainingTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TrainingTitle";
	$fdata["GoodName"] = "TrainingTitle";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","TrainingTitle");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TrainingTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingTitle";

	
	
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


	$tdatatrainings1["TrainingTitle"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "TrainingTitle";


$tables_data["trainings"]=&$tdatatrainings1;
$field_labels["trainings"] = &$fieldLabelstrainings1;
$fieldToolTips["trainings"] = &$fieldToolTipstrainings1;
$placeHolders["trainings"] = &$placeHolderstrainings1;
$page_titles["trainings"] = &$pageTitlestrainings1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["trainings"] = array();
//	training_participants
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="training_participants";
		$detailsParam["dOriginalTable"] = "training_participants";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participants";
	$detailsParam["dCaptionTable"] = GetTableCaption("training_participants");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["trainings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["trainings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["trainings"][$dIndex]["masterKeys"][]="TrainingID";

				$detailsTablesData["trainings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["trainings"][$dIndex]["detailKeys"][]="TrainingID";

// tables which are master tables for current table (detail)
$masterTablesData["trainings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trainings1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,  	TrainingTitle";
$proto0["m_strFrom"] = "FROM trainings";
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
	"m_strName" => "TrainingID",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto6["m_sql"] = "TrainingID";
$proto6["m_srcTableName"] = "trainings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto8["m_sql"] = "TrainingTitle";
$proto8["m_srcTableName"] = "trainings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "trainings";
$proto11["m_srcTableName"] = "trainings";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TrainingID";
$proto11["m_columns"][] = "TrainingTitle";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "trainings";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "trainings";
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
$proto0["m_srcTableName"]="trainings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trainings1 = createSqlQuery_trainings1();


	
		;

		

$tdatatrainings1[".sqlquery"] = $queryData_trainings1;



$tableEvents["trainings"] = new eventsBase;
$tdatatrainings1[".hasEvents"] = false;

?>