<?php
$tdatatrainings1 = array();
$tdatatrainings1[".searchableFields"] = array();
$tdatatrainings1[".ShortName"] = "trainings1";
$tdatatrainings1[".OwnerID"] = "";
$tdatatrainings1[".OriginalTable"] = "trainings";


$tdatatrainings1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatrainings1[".originalPagesByType"] = $tdatatrainings1[".pagesByType"];
$tdatatrainings1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatrainings1[".originalPages"] = $tdatatrainings1[".pages"];
$tdatatrainings1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
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
	$fieldLabelstrainings1["English"]["Training_Start_Date"] = "Training Start Date";
	$fieldToolTipstrainings1["English"]["Training_Start_Date"] = "";
	$placeHolderstrainings1["English"]["Training_Start_Date"] = "";
	$fieldLabelstrainings1["English"]["Training_End_Date"] = "Training End Date";
	$fieldToolTipstrainings1["English"]["Training_End_Date"] = "";
	$placeHolderstrainings1["English"]["Training_End_Date"] = "";
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
$tdatatrainings1[".googleLikeFields"][] = "Training_Start_Date";
$tdatatrainings1[".googleLikeFields"][] = "Training_End_Date";
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


$tdatatrainings1[".sqlHead"] = "SELECT TrainingID,  	Training_Start_Date,  	Training_End_Date,  	TrainingTitle";
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
$tableKeystrainings1[] = "TrainingID";
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
//	Training_Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Training_Start_Date";
	$fdata["GoodName"] = "Training_Start_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","Training_Start_Date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Training_Start_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_Start_Date";

	
	
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


	$tdatatrainings1["Training_Start_Date"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "Training_Start_Date";
//	Training_End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Training_End_Date";
	$fdata["GoodName"] = "Training_End_Date";
	$fdata["ownerTable"] = "trainings";
	$fdata["Label"] = GetFieldLabel("trainings","Training_End_Date");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Training_End_Date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Training_End_Date";

	
	
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


	$tdatatrainings1["Training_End_Date"] = $fdata;
		$tdatatrainings1[".searchableFields"][] = "Training_End_Date";
//	TrainingTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
$proto0["m_strFieldList"] = "TrainingID,  	Training_Start_Date,  	Training_End_Date,  	TrainingTitle";
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
	"m_strName" => "Training_Start_Date",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto8["m_sql"] = "Training_Start_Date";
$proto8["m_srcTableName"] = "trainings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_End_Date",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto10["m_sql"] = "Training_End_Date";
$proto10["m_srcTableName"] = "trainings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingTitle",
	"m_strTable" => "trainings",
	"m_srcTableName" => "trainings"
));

$proto12["m_sql"] = "TrainingTitle";
$proto12["m_srcTableName"] = "trainings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "trainings";
$proto15["m_srcTableName"] = "trainings";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TrainingID";
$proto15["m_columns"][] = "Training_Start_Date";
$proto15["m_columns"][] = "Training_End_Date";
$proto15["m_columns"][] = "TrainingTitle";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "trainings";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "trainings";
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