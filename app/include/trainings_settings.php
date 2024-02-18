<?php
$tdatatrainings = array();
$tdatatrainings[".searchableFields"] = array();
$tdatatrainings[".ShortName"] = "trainings";
$tdatatrainings[".OwnerID"] = "";
$tdatatrainings[".OriginalTable"] = "Trainings";


$tdatatrainings[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatrainings[".originalPagesByType"] = $tdatatrainings[".pagesByType"];
$tdatatrainings[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatrainings[".originalPages"] = $tdatatrainings[".pages"];
$tdatatrainings[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatrainings[".originalDefaultPages"] = $tdatatrainings[".defaultPages"];

//	field labels
$fieldLabelstrainings = array();
$fieldToolTipstrainings = array();
$pageTitlestrainings = array();
$placeHolderstrainings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrainings["English"] = array();
	$fieldToolTipstrainings["English"] = array();
	$placeHolderstrainings["English"] = array();
	$pageTitlestrainings["English"] = array();
	$fieldLabelstrainings["English"]["TrainingTitleID"] = "Training Title ID";
	$fieldToolTipstrainings["English"]["TrainingTitleID"] = "";
	$placeHolderstrainings["English"]["TrainingTitleID"] = "";
	$fieldLabelstrainings["English"]["SetTrainingName"] = "Set Training Name";
	$fieldToolTipstrainings["English"]["SetTrainingName"] = "";
	$placeHolderstrainings["English"]["SetTrainingName"] = "";
	if (count($fieldToolTipstrainings["English"]))
		$tdatatrainings[".isUseToolTips"] = true;
}


	$tdatatrainings[".NCSearch"] = true;



$tdatatrainings[".shortTableName"] = "trainings";
$tdatatrainings[".nSecOptions"] = 0;

$tdatatrainings[".mainTableOwnerID"] = "";
$tdatatrainings[".entityType"] = 0;
$tdatatrainings[".connId"] = "deredevatderejadevmerqconsulta";


$tdatatrainings[".strOriginalTableName"] = "Trainings";

	



$tdatatrainings[".showAddInPopup"] = false;

$tdatatrainings[".showEditInPopup"] = false;

$tdatatrainings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatrainings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatrainings[".listAjax"] = false;
//	temporary
$tdatatrainings[".listAjax"] = false;

	$tdatatrainings[".audit"] = false;

	$tdatatrainings[".locking"] = false;


$pages = $tdatatrainings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrainings[".edit"] = true;
	$tdatatrainings[".afterEditAction"] = 1;
	$tdatatrainings[".closePopupAfterEdit"] = 1;
	$tdatatrainings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrainings[".add"] = true;
$tdatatrainings[".afterAddAction"] = 1;
$tdatatrainings[".closePopupAfterAdd"] = 1;
$tdatatrainings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrainings[".list"] = true;
}



$tdatatrainings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrainings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrainings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrainings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrainings[".printFriendly"] = true;
}



$tdatatrainings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrainings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrainings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrainings[".isUseAjaxSuggest"] = true;

$tdatatrainings[".rowHighlite"] = true;





$tdatatrainings[".ajaxCodeSnippetAdded"] = false;

$tdatatrainings[".buttonsAdded"] = false;

$tdatatrainings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrainings[".isUseTimeForSearch"] = false;


$tdatatrainings[".badgeColor"] = "00C2C5";


$tdatatrainings[".allSearchFields"] = array();
$tdatatrainings[".filterFields"] = array();
$tdatatrainings[".requiredSearchFields"] = array();

$tdatatrainings[".googleLikeFields"] = array();
$tdatatrainings[".googleLikeFields"][] = "TrainingTitleID";
$tdatatrainings[".googleLikeFields"][] = "SetTrainingName";



$tdatatrainings[".tableType"] = "list";

$tdatatrainings[".printerPageOrientation"] = 0;
$tdatatrainings[".nPrinterPageScale"] = 100;

$tdatatrainings[".nPrinterSplitRecords"] = 40;

$tdatatrainings[".geocodingEnabled"] = false;




$tdatatrainings[".isDisplayLoading"] = true;






$tdatatrainings[".pageSize"] = 20;

$tdatatrainings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatrainings[".strOrderBy"] = $tstrOrderBy;

$tdatatrainings[".orderindexes"] = array();


$tdatatrainings[".sqlHead"] = "SELECT TrainingTitleID,  	SetTrainingName";
$tdatatrainings[".sqlFrom"] = "FROM Trainings";
$tdatatrainings[".sqlWhereExpr"] = "";
$tdatatrainings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrainings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrainings[".arrGroupsPerPage"] = $arrGPP;

$tdatatrainings[".highlightSearchResults"] = true;

$tableKeystrainings = array();
$tableKeystrainings[] = "TrainingTitleID";
$tdatatrainings[".Keys"] = $tableKeystrainings;


$tdatatrainings[".hideMobileList"] = array();




//	TrainingTitleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingTitleID";
	$fdata["GoodName"] = "TrainingTitleID";
	$fdata["ownerTable"] = "Trainings";
	$fdata["Label"] = GetFieldLabel("Trainings","TrainingTitleID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TrainingTitleID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrainingTitleID";

	
	
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


	$tdatatrainings["TrainingTitleID"] = $fdata;
		$tdatatrainings[".searchableFields"][] = "TrainingTitleID";
//	SetTrainingName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SetTrainingName";
	$fdata["GoodName"] = "SetTrainingName";
	$fdata["ownerTable"] = "Trainings";
	$fdata["Label"] = GetFieldLabel("Trainings","SetTrainingName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SetTrainingName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SetTrainingName";

	
	
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


	$tdatatrainings["SetTrainingName"] = $fdata;
		$tdatatrainings[".searchableFields"][] = "SetTrainingName";


$tables_data["Trainings"]=&$tdatatrainings;
$field_labels["Trainings"] = &$fieldLabelstrainings;
$fieldToolTips["Trainings"] = &$fieldToolTipstrainings;
$placeHolders["Trainings"] = &$placeHolderstrainings;
$page_titles["Trainings"] = &$pageTitlestrainings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Trainings"] = array();
//	training_profile
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="training_profile";
		$detailsParam["dOriginalTable"] = "training_profile";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_profile";
	$detailsParam["dCaptionTable"] = GetTableCaption("training_profile");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Trainings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Trainings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Trainings"][$dIndex]["masterKeys"][]="SetTrainingName";

				$detailsTablesData["Trainings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Trainings"][$dIndex]["detailKeys"][]="Training Title";

// tables which are master tables for current table (detail)
$masterTablesData["Trainings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trainings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingTitleID,  	SetTrainingName";
$proto0["m_strFrom"] = "FROM Trainings";
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
	"m_strName" => "TrainingTitleID",
	"m_strTable" => "Trainings",
	"m_srcTableName" => "Trainings"
));

$proto6["m_sql"] = "TrainingTitleID";
$proto6["m_srcTableName"] = "Trainings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SetTrainingName",
	"m_strTable" => "Trainings",
	"m_srcTableName" => "Trainings"
));

$proto8["m_sql"] = "SetTrainingName";
$proto8["m_srcTableName"] = "Trainings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Trainings";
$proto11["m_srcTableName"] = "Trainings";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TrainingTitleID";
$proto11["m_columns"][] = "SetTrainingName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Trainings";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Trainings";
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
$proto0["m_srcTableName"]="Trainings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trainings = createSqlQuery_trainings();


	
		;

		

$tdatatrainings[".sqlquery"] = $queryData_trainings;



$tableEvents["Trainings"] = new eventsBase;
$tdatatrainings[".hasEvents"] = false;

?>