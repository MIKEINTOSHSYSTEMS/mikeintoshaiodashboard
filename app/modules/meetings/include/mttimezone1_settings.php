<?php
$tdatamttimezone1 = array();
$tdatamttimezone1[".searchableFields"] = array();
$tdatamttimezone1[".ShortName"] = "mttimezone1";
$tdatamttimezone1[".OwnerID"] = "";
$tdatamttimezone1[".OriginalTable"] = "mttimezone";


$tdatamttimezone1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatamttimezone1[".originalPagesByType"] = $tdatamttimezone1[".pagesByType"];
$tdatamttimezone1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatamttimezone1[".originalPages"] = $tdatamttimezone1[".pages"];
$tdatamttimezone1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatamttimezone1[".originalDefaultPages"] = $tdatamttimezone1[".defaultPages"];

//	field labels
$fieldLabelsmttimezone1 = array();
$fieldToolTipsmttimezone1 = array();
$pageTitlesmttimezone1 = array();
$placeHoldersmttimezone1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmttimezone1["English"] = array();
	$fieldToolTipsmttimezone1["English"] = array();
	$placeHoldersmttimezone1["English"] = array();
	$pageTitlesmttimezone1["English"] = array();
	$fieldLabelsmttimezone1["English"]["id"] = "Id";
	$fieldToolTipsmttimezone1["English"]["id"] = "";
	$placeHoldersmttimezone1["English"]["id"] = "";
	$fieldLabelsmttimezone1["English"]["name"] = "Zone Name";
	$fieldToolTipsmttimezone1["English"]["name"] = "";
	$placeHoldersmttimezone1["English"]["name"] = "";
	$fieldLabelsmttimezone1["English"]["zoom"] = "Zoom";
	$fieldToolTipsmttimezone1["English"]["zoom"] = "";
	$placeHoldersmttimezone1["English"]["zoom"] = "";
	$fieldLabelsmttimezone1["English"]["rc"] = "Rc";
	$fieldToolTipsmttimezone1["English"]["rc"] = "";
	$placeHoldersmttimezone1["English"]["rc"] = "";
	$fieldLabelsmttimezone1["English"]["order"] = "Order";
	$fieldToolTipsmttimezone1["English"]["order"] = "";
	$placeHoldersmttimezone1["English"]["order"] = "";
	if (count($fieldToolTipsmttimezone1["English"]))
		$tdatamttimezone1[".isUseToolTips"] = true;
}


	$tdatamttimezone1[".NCSearch"] = true;



$tdatamttimezone1[".shortTableName"] = "mttimezone1";
$tdatamttimezone1[".nSecOptions"] = 0;

$tdatamttimezone1[".mainTableOwnerID"] = "";
$tdatamttimezone1[".entityType"] = 0;
$tdatamttimezone1[".connId"] = "project_at_localhost";


$tdatamttimezone1[".strOriginalTableName"] = "mttimezone";

	



$tdatamttimezone1[".showAddInPopup"] = false;

$tdatamttimezone1[".showEditInPopup"] = false;

$tdatamttimezone1[".showViewInPopup"] = false;

$tdatamttimezone1[".listAjax"] = false;
//	temporary
//$tdatamttimezone1[".listAjax"] = false;

	$tdatamttimezone1[".audit"] = false;

	$tdatamttimezone1[".locking"] = false;


$pages = $tdatamttimezone1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamttimezone1[".edit"] = true;
	$tdatamttimezone1[".afterEditAction"] = 1;
	$tdatamttimezone1[".closePopupAfterEdit"] = 1;
	$tdatamttimezone1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamttimezone1[".add"] = true;
$tdatamttimezone1[".afterAddAction"] = 1;
$tdatamttimezone1[".closePopupAfterAdd"] = 1;
$tdatamttimezone1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamttimezone1[".list"] = true;
}



$tdatamttimezone1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamttimezone1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamttimezone1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamttimezone1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamttimezone1[".printFriendly"] = true;
}



$tdatamttimezone1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamttimezone1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamttimezone1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamttimezone1[".isUseAjaxSuggest"] = true;



																								

$tdatamttimezone1[".ajaxCodeSnippetAdded"] = false;

$tdatamttimezone1[".buttonsAdded"] = false;

$tdatamttimezone1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamttimezone1[".isUseTimeForSearch"] = false;


$tdatamttimezone1[".badgeColor"] = "DB7093";


$tdatamttimezone1[".allSearchFields"] = array();
$tdatamttimezone1[".filterFields"] = array();
$tdatamttimezone1[".requiredSearchFields"] = array();

$tdatamttimezone1[".googleLikeFields"] = array();
$tdatamttimezone1[".googleLikeFields"][] = "id";
$tdatamttimezone1[".googleLikeFields"][] = "zoom";
$tdatamttimezone1[".googleLikeFields"][] = "name";
$tdatamttimezone1[".googleLikeFields"][] = "rc";
$tdatamttimezone1[".googleLikeFields"][] = "order";



$tdatamttimezone1[".tableType"] = "list";

$tdatamttimezone1[".printerPageOrientation"] = 0;
$tdatamttimezone1[".nPrinterPageScale"] = 100;

$tdatamttimezone1[".nPrinterSplitRecords"] = 40;

$tdatamttimezone1[".geocodingEnabled"] = false;










$tdatamttimezone1[".pageSize"] = 20;

$tdatamttimezone1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamttimezone1[".strOrderBy"] = $tstrOrderBy;

$tdatamttimezone1[".orderindexes"] = array();


$tdatamttimezone1[".sqlHead"] = "SELECT id,  zoom,  name,  rc,  `order`";
$tdatamttimezone1[".sqlFrom"] = "FROM mttimezone";
$tdatamttimezone1[".sqlWhereExpr"] = "";
$tdatamttimezone1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamttimezone1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamttimezone1[".arrGroupsPerPage"] = $arrGPP;

$tdatamttimezone1[".highlightSearchResults"] = true;

$tableKeysmttimezone1 = array();
$tableKeysmttimezone1[] = "id";
$tdatamttimezone1[".Keys"] = $tableKeysmttimezone1;


$tdatamttimezone1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mttimezone";
	$fdata["Label"] = GetFieldLabel("mttimezone","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
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


	$tdatamttimezone1["id"] = $fdata;
		$tdatamttimezone1[".searchableFields"][] = "id";
//	zoom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "zoom";
	$fdata["GoodName"] = "zoom";
	$fdata["ownerTable"] = "mttimezone";
	$fdata["Label"] = GetFieldLabel("mttimezone","zoom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "zoom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zoom";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamttimezone1["zoom"] = $fdata;
		$tdatamttimezone1[".searchableFields"][] = "zoom";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mttimezone";
	$fdata["Label"] = GetFieldLabel("mttimezone","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamttimezone1["name"] = $fdata;
		$tdatamttimezone1[".searchableFields"][] = "name";
//	rc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rc";
	$fdata["GoodName"] = "rc";
	$fdata["ownerTable"] = "mttimezone";
	$fdata["Label"] = GetFieldLabel("mttimezone","rc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamttimezone1["rc"] = $fdata;
		$tdatamttimezone1[".searchableFields"][] = "rc";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "mttimezone";
	$fdata["Label"] = GetFieldLabel("mttimezone","order");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "order";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`order`";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatamttimezone1["order"] = $fdata;
		$tdatamttimezone1[".searchableFields"][] = "order";


$tables_data["mttimezone"]=&$tdatamttimezone1;
$field_labels["mttimezone"] = &$fieldLabelsmttimezone1;
$fieldToolTips["mttimezone"] = &$fieldToolTipsmttimezone1;
$placeHolders["mttimezone"] = &$placeHoldersmttimezone1;
$page_titles["mttimezone"] = &$pageTitlesmttimezone1;


changeTextControlsToDate( "mttimezone" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mttimezone"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mttimezone"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mttimezone1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  zoom,  name,  rc,  `order`";
$proto0["m_strFrom"] = "FROM mttimezone";
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
	"m_strTable" => "mttimezone",
	"m_srcTableName" => "mttimezone"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mttimezone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "zoom",
	"m_strTable" => "mttimezone",
	"m_srcTableName" => "mttimezone"
));

$proto8["m_sql"] = "zoom";
$proto8["m_srcTableName"] = "mttimezone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mttimezone",
	"m_srcTableName" => "mttimezone"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "mttimezone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rc",
	"m_strTable" => "mttimezone",
	"m_srcTableName" => "mttimezone"
));

$proto12["m_sql"] = "rc";
$proto12["m_srcTableName"] = "mttimezone";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "mttimezone",
	"m_srcTableName" => "mttimezone"
));

$proto14["m_sql"] = "`order`";
$proto14["m_srcTableName"] = "mttimezone";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "mttimezone";
$proto17["m_srcTableName"] = "mttimezone";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "zoom";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "rc";
$proto17["m_columns"][] = "order";
$proto17["m_columns"][] = "dotnet";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "mttimezone";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "mttimezone";
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
$proto0["m_srcTableName"]="mttimezone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mttimezone1 = createSqlQuery_mttimezone1();


	
		;

					

$tdatamttimezone1[".sqlquery"] = $queryData_mttimezone1;



$tdatamttimezone1[".hasEvents"] = false;

?>