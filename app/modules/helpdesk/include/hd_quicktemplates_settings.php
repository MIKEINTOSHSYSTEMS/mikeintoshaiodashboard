<?php
$tdatahd_quicktemplates = array();
$tdatahd_quicktemplates[".searchableFields"] = array();
$tdatahd_quicktemplates[".ShortName"] = "hd_quicktemplates";
$tdatahd_quicktemplates[".OwnerID"] = "";
$tdatahd_quicktemplates[".OriginalTable"] = "hd_quicktemplates";


$tdatahd_quicktemplates[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahd_quicktemplates[".originalPagesByType"] = $tdatahd_quicktemplates[".pagesByType"];
$tdatahd_quicktemplates[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahd_quicktemplates[".originalPages"] = $tdatahd_quicktemplates[".pages"];
$tdatahd_quicktemplates[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahd_quicktemplates[".originalDefaultPages"] = $tdatahd_quicktemplates[".defaultPages"];

//	field labels
$fieldLabelshd_quicktemplates = array();
$fieldToolTipshd_quicktemplates = array();
$pageTitleshd_quicktemplates = array();
$placeHoldershd_quicktemplates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_quicktemplates["English"] = array();
	$fieldToolTipshd_quicktemplates["English"] = array();
	$placeHoldershd_quicktemplates["English"] = array();
	$pageTitleshd_quicktemplates["English"] = array();
	$fieldLabelshd_quicktemplates["English"]["id"] = "Id";
	$fieldToolTipshd_quicktemplates["English"]["id"] = "";
	$placeHoldershd_quicktemplates["English"]["id"] = "";
	$fieldLabelshd_quicktemplates["English"]["name"] = "Insert letters";
	$fieldToolTipshd_quicktemplates["English"]["name"] = "";
	$placeHoldershd_quicktemplates["English"]["name"] = "";
	$fieldLabelshd_quicktemplates["English"]["title"] = "Template name";
	$fieldToolTipshd_quicktemplates["English"]["title"] = "";
	$placeHoldershd_quicktemplates["English"]["title"] = "";
	$fieldLabelshd_quicktemplates["English"]["template_content"] = "Full template";
	$fieldToolTipshd_quicktemplates["English"]["template_content"] = "";
	$placeHoldershd_quicktemplates["English"]["template_content"] = "";
	if (count($fieldToolTipshd_quicktemplates["English"]))
		$tdatahd_quicktemplates[".isUseToolTips"] = true;
}


	$tdatahd_quicktemplates[".NCSearch"] = true;



$tdatahd_quicktemplates[".shortTableName"] = "hd_quicktemplates";
$tdatahd_quicktemplates[".nSecOptions"] = 0;

$tdatahd_quicktemplates[".mainTableOwnerID"] = "";
$tdatahd_quicktemplates[".entityType"] = 0;
$tdatahd_quicktemplates[".connId"] = "project_at_localhost";


$tdatahd_quicktemplates[".strOriginalTableName"] = "hd_quicktemplates";

	



$tdatahd_quicktemplates[".showAddInPopup"] = false;

$tdatahd_quicktemplates[".showEditInPopup"] = false;

$tdatahd_quicktemplates[".showViewInPopup"] = false;

$tdatahd_quicktemplates[".listAjax"] = false;
//	temporary
//$tdatahd_quicktemplates[".listAjax"] = false;

	$tdatahd_quicktemplates[".audit"] = false;

	$tdatahd_quicktemplates[".locking"] = false;


$pages = $tdatahd_quicktemplates[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_quicktemplates[".edit"] = true;
	$tdatahd_quicktemplates[".afterEditAction"] = 1;
	$tdatahd_quicktemplates[".closePopupAfterEdit"] = 1;
	$tdatahd_quicktemplates[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_quicktemplates[".add"] = true;
$tdatahd_quicktemplates[".afterAddAction"] = 1;
$tdatahd_quicktemplates[".closePopupAfterAdd"] = 1;
$tdatahd_quicktemplates[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_quicktemplates[".list"] = true;
}



$tdatahd_quicktemplates[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_quicktemplates[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_quicktemplates[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_quicktemplates[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_quicktemplates[".printFriendly"] = true;
}



$tdatahd_quicktemplates[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_quicktemplates[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_quicktemplates[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_quicktemplates[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_quicktemplates[".ajaxCodeSnippetAdded"] = false;

$tdatahd_quicktemplates[".buttonsAdded"] = false;

$tdatahd_quicktemplates[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_quicktemplates[".isUseTimeForSearch"] = false;


$tdatahd_quicktemplates[".badgeColor"] = "5F9EA0";


$tdatahd_quicktemplates[".allSearchFields"] = array();
$tdatahd_quicktemplates[".filterFields"] = array();
$tdatahd_quicktemplates[".requiredSearchFields"] = array();

$tdatahd_quicktemplates[".googleLikeFields"] = array();
$tdatahd_quicktemplates[".googleLikeFields"][] = "id";
$tdatahd_quicktemplates[".googleLikeFields"][] = "name";
$tdatahd_quicktemplates[".googleLikeFields"][] = "title";
$tdatahd_quicktemplates[".googleLikeFields"][] = "template_content";



$tdatahd_quicktemplates[".tableType"] = "list";

$tdatahd_quicktemplates[".printerPageOrientation"] = 0;
$tdatahd_quicktemplates[".nPrinterPageScale"] = 100;

$tdatahd_quicktemplates[".nPrinterSplitRecords"] = 40;

$tdatahd_quicktemplates[".geocodingEnabled"] = false;










$tdatahd_quicktemplates[".pageSize"] = 20;

$tdatahd_quicktemplates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_quicktemplates[".strOrderBy"] = $tstrOrderBy;

$tdatahd_quicktemplates[".orderindexes"] = array();


$tdatahd_quicktemplates[".sqlHead"] = "SELECT id,  name,  title,  template_content";
$tdatahd_quicktemplates[".sqlFrom"] = "FROM hd_quicktemplates";
$tdatahd_quicktemplates[".sqlWhereExpr"] = "";
$tdatahd_quicktemplates[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_quicktemplates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_quicktemplates[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_quicktemplates[".highlightSearchResults"] = true;

$tableKeyshd_quicktemplates = array();
$tableKeyshd_quicktemplates[] = "id";
$tdatahd_quicktemplates[".Keys"] = $tableKeyshd_quicktemplates;


$tdatahd_quicktemplates[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_quicktemplates";
	$fdata["Label"] = GetFieldLabel("hd_quicktemplates","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatahd_quicktemplates["id"] = $fdata;
		$tdatahd_quicktemplates[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "hd_quicktemplates";
	$fdata["Label"] = GetFieldLabel("hd_quicktemplates","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatahd_quicktemplates["name"] = $fdata;
		$tdatahd_quicktemplates[".searchableFields"][] = "name";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "hd_quicktemplates";
	$fdata["Label"] = GetFieldLabel("hd_quicktemplates","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatahd_quicktemplates["title"] = $fdata;
		$tdatahd_quicktemplates[".searchableFields"][] = "title";
//	template_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "template_content";
	$fdata["GoodName"] = "template_content";
	$fdata["ownerTable"] = "hd_quicktemplates";
	$fdata["Label"] = GetFieldLabel("hd_quicktemplates","template_content");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "template_content";

		$fdata["sourceSingle"] = "template_content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_content";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatahd_quicktemplates["template_content"] = $fdata;
		$tdatahd_quicktemplates[".searchableFields"][] = "template_content";


$tables_data["hd_quicktemplates"]=&$tdatahd_quicktemplates;
$field_labels["hd_quicktemplates"] = &$fieldLabelshd_quicktemplates;
$fieldToolTips["hd_quicktemplates"] = &$fieldToolTipshd_quicktemplates;
$placeHolders["hd_quicktemplates"] = &$placeHoldershd_quicktemplates;
$page_titles["hd_quicktemplates"] = &$pageTitleshd_quicktemplates;


changeTextControlsToDate( "hd_quicktemplates" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_quicktemplates"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_quicktemplates"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_quicktemplates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  title,  template_content";
$proto0["m_strFrom"] = "FROM hd_quicktemplates";
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
	"m_strName" => "id",
	"m_strTable" => "hd_quicktemplates",
	"m_srcTableName" => "hd_quicktemplates"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_quicktemplates";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "hd_quicktemplates",
	"m_srcTableName" => "hd_quicktemplates"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "hd_quicktemplates";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "hd_quicktemplates",
	"m_srcTableName" => "hd_quicktemplates"
));

$proto10["m_sql"] = "title";
$proto10["m_srcTableName"] = "hd_quicktemplates";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "template_content",
	"m_strTable" => "hd_quicktemplates",
	"m_srcTableName" => "hd_quicktemplates"
));

$proto12["m_sql"] = "template_content";
$proto12["m_srcTableName"] = "hd_quicktemplates";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "hd_quicktemplates";
$proto15["m_srcTableName"] = "hd_quicktemplates";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "title";
$proto15["m_columns"][] = "template_content";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "hd_quicktemplates";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "hd_quicktemplates";
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
$proto0["m_srcTableName"]="hd_quicktemplates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_quicktemplates = createSqlQuery_hd_quicktemplates();


	
		;

				

$tdatahd_quicktemplates[".sqlquery"] = $queryData_hd_quicktemplates;



include_once(getabspath("include/hd_quicktemplates_events.php"));
$tdatahd_quicktemplates[".hasEvents"] = true;

?>