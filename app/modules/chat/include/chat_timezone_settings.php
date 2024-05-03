<?php
$tdatachat_timezone = array();
$tdatachat_timezone[".searchableFields"] = array();
$tdatachat_timezone[".ShortName"] = "chat_timezone";
$tdatachat_timezone[".OwnerID"] = "";
$tdatachat_timezone[".OriginalTable"] = "chat_timezone";


$tdatachat_timezone[".pagesByType"] = my_json_decode( "{}" );
$tdatachat_timezone[".originalPagesByType"] = $tdatachat_timezone[".pagesByType"];
$tdatachat_timezone[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatachat_timezone[".originalPages"] = $tdatachat_timezone[".pages"];
$tdatachat_timezone[".defaultPages"] = my_json_decode( "{}" );
$tdatachat_timezone[".originalDefaultPages"] = $tdatachat_timezone[".defaultPages"];

//	field labels
$fieldLabelschat_timezone = array();
$fieldToolTipschat_timezone = array();
$pageTitleschat_timezone = array();
$placeHolderschat_timezone = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_timezone["English"] = array();
	$fieldToolTipschat_timezone["English"] = array();
	$placeHolderschat_timezone["English"] = array();
	$pageTitleschat_timezone["English"] = array();
	$fieldLabelschat_timezone["English"]["id"] = "Id";
	$fieldToolTipschat_timezone["English"]["id"] = "";
	$placeHolderschat_timezone["English"]["id"] = "";
	$fieldLabelschat_timezone["English"]["zoom"] = "Zoom";
	$fieldToolTipschat_timezone["English"]["zoom"] = "";
	$placeHolderschat_timezone["English"]["zoom"] = "";
	$fieldLabelschat_timezone["English"]["name"] = "Name";
	$fieldToolTipschat_timezone["English"]["name"] = "";
	$placeHolderschat_timezone["English"]["name"] = "";
	$fieldLabelschat_timezone["English"]["rc"] = "Rc";
	$fieldToolTipschat_timezone["English"]["rc"] = "";
	$placeHolderschat_timezone["English"]["rc"] = "";
	$fieldLabelschat_timezone["English"]["order"] = "Order";
	$fieldToolTipschat_timezone["English"]["order"] = "";
	$placeHolderschat_timezone["English"]["order"] = "";
	$fieldLabelschat_timezone["English"]["dotnet"] = "Dotnet";
	$fieldToolTipschat_timezone["English"]["dotnet"] = "";
	$placeHolderschat_timezone["English"]["dotnet"] = "";
	if (count($fieldToolTipschat_timezone["English"]))
		$tdatachat_timezone[".isUseToolTips"] = true;
}


	$tdatachat_timezone[".NCSearch"] = true;



$tdatachat_timezone[".shortTableName"] = "chat_timezone";
$tdatachat_timezone[".nSecOptions"] = 0;

$tdatachat_timezone[".mainTableOwnerID"] = "";
$tdatachat_timezone[".entityType"] = 0;
$tdatachat_timezone[".connId"] = "project_at_localhost";


$tdatachat_timezone[".strOriginalTableName"] = "chat_timezone";

	



$tdatachat_timezone[".showAddInPopup"] = false;

$tdatachat_timezone[".showEditInPopup"] = false;

$tdatachat_timezone[".showViewInPopup"] = false;

$tdatachat_timezone[".listAjax"] = false;
//	temporary
//$tdatachat_timezone[".listAjax"] = false;

	$tdatachat_timezone[".audit"] = false;

	$tdatachat_timezone[".locking"] = false;


$pages = $tdatachat_timezone[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_timezone[".edit"] = true;
	$tdatachat_timezone[".afterEditAction"] = 1;
	$tdatachat_timezone[".closePopupAfterEdit"] = 1;
	$tdatachat_timezone[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_timezone[".add"] = true;
$tdatachat_timezone[".afterAddAction"] = 1;
$tdatachat_timezone[".closePopupAfterAdd"] = 1;
$tdatachat_timezone[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_timezone[".list"] = true;
}



$tdatachat_timezone[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_timezone[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_timezone[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_timezone[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_timezone[".printFriendly"] = true;
}



$tdatachat_timezone[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_timezone[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_timezone[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_timezone[".isUseAjaxSuggest"] = true;



																																				

$tdatachat_timezone[".ajaxCodeSnippetAdded"] = false;

$tdatachat_timezone[".buttonsAdded"] = false;

$tdatachat_timezone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachat_timezone[".isUseTimeForSearch"] = false;


$tdatachat_timezone[".badgeColor"] = "B22222";


$tdatachat_timezone[".allSearchFields"] = array();
$tdatachat_timezone[".filterFields"] = array();
$tdatachat_timezone[".requiredSearchFields"] = array();

$tdatachat_timezone[".googleLikeFields"] = array();
$tdatachat_timezone[".googleLikeFields"][] = "id";
$tdatachat_timezone[".googleLikeFields"][] = "zoom";
$tdatachat_timezone[".googleLikeFields"][] = "name";
$tdatachat_timezone[".googleLikeFields"][] = "rc";
$tdatachat_timezone[".googleLikeFields"][] = "order";
$tdatachat_timezone[".googleLikeFields"][] = "dotnet";



$tdatachat_timezone[".tableType"] = "list";

$tdatachat_timezone[".printerPageOrientation"] = 0;
$tdatachat_timezone[".nPrinterPageScale"] = 100;

$tdatachat_timezone[".nPrinterSplitRecords"] = 40;

$tdatachat_timezone[".geocodingEnabled"] = false;










$tdatachat_timezone[".pageSize"] = 20;

$tdatachat_timezone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_timezone[".strOrderBy"] = $tstrOrderBy;

$tdatachat_timezone[".orderindexes"] = array();


$tdatachat_timezone[".sqlHead"] = "SELECT id,  zoom,  name,  rc,  `order`,  dotnet";
$tdatachat_timezone[".sqlFrom"] = "FROM chat_timezone";
$tdatachat_timezone[".sqlWhereExpr"] = "";
$tdatachat_timezone[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_timezone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_timezone[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_timezone[".highlightSearchResults"] = true;

$tableKeyschat_timezone = array();
$tableKeyschat_timezone[] = "id";
$tdatachat_timezone[".Keys"] = $tableKeyschat_timezone;


$tdatachat_timezone[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_timezone";
	$fdata["Label"] = GetFieldLabel("chat_timezone","id");
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


	$tdatachat_timezone["id"] = $fdata;
		$tdatachat_timezone[".searchableFields"][] = "id";
//	zoom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "zoom";
	$fdata["GoodName"] = "zoom";
	$fdata["ownerTable"] = "chat_timezone";
	$fdata["Label"] = GetFieldLabel("chat_timezone","zoom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "zoom";

		$fdata["sourceSingle"] = "zoom";

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


	$tdatachat_timezone["zoom"] = $fdata;
		$tdatachat_timezone[".searchableFields"][] = "zoom";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "chat_timezone";
	$fdata["Label"] = GetFieldLabel("chat_timezone","name");
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


	$tdatachat_timezone["name"] = $fdata;
		$tdatachat_timezone[".searchableFields"][] = "name";
//	rc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rc";
	$fdata["GoodName"] = "rc";
	$fdata["ownerTable"] = "chat_timezone";
	$fdata["Label"] = GetFieldLabel("chat_timezone","rc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rc";

		$fdata["sourceSingle"] = "rc";

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


	$tdatachat_timezone["rc"] = $fdata;
		$tdatachat_timezone[".searchableFields"][] = "rc";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "chat_timezone";
	$fdata["Label"] = GetFieldLabel("chat_timezone","order");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "order";

		$fdata["sourceSingle"] = "order";

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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatachat_timezone["order"] = $fdata;
		$tdatachat_timezone[".searchableFields"][] = "order";
//	dotnet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dotnet";
	$fdata["GoodName"] = "dotnet";
	$fdata["ownerTable"] = "chat_timezone";
	$fdata["Label"] = GetFieldLabel("chat_timezone","dotnet");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dotnet";

		$fdata["sourceSingle"] = "dotnet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dotnet";

	
	
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


	$tdatachat_timezone["dotnet"] = $fdata;
		$tdatachat_timezone[".searchableFields"][] = "dotnet";


$tables_data["chat_timezone"]=&$tdatachat_timezone;
$field_labels["chat_timezone"] = &$fieldLabelschat_timezone;
$fieldToolTips["chat_timezone"] = &$fieldToolTipschat_timezone;
$placeHolders["chat_timezone"] = &$placeHolderschat_timezone;
$page_titles["chat_timezone"] = &$pageTitleschat_timezone;


changeTextControlsToDate( "chat_timezone" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_timezone"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_timezone"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_timezone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  zoom,  name,  rc,  `order`,  dotnet";
$proto0["m_strFrom"] = "FROM chat_timezone";
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
	"m_strTable" => "chat_timezone",
	"m_srcTableName" => "chat_timezone"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_timezone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "zoom",
	"m_strTable" => "chat_timezone",
	"m_srcTableName" => "chat_timezone"
));

$proto8["m_sql"] = "zoom";
$proto8["m_srcTableName"] = "chat_timezone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "chat_timezone",
	"m_srcTableName" => "chat_timezone"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "chat_timezone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rc",
	"m_strTable" => "chat_timezone",
	"m_srcTableName" => "chat_timezone"
));

$proto12["m_sql"] = "rc";
$proto12["m_srcTableName"] = "chat_timezone";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "chat_timezone",
	"m_srcTableName" => "chat_timezone"
));

$proto14["m_sql"] = "`order`";
$proto14["m_srcTableName"] = "chat_timezone";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dotnet",
	"m_strTable" => "chat_timezone",
	"m_srcTableName" => "chat_timezone"
));

$proto16["m_sql"] = "dotnet";
$proto16["m_srcTableName"] = "chat_timezone";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "chat_timezone";
$proto19["m_srcTableName"] = "chat_timezone";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "zoom";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "rc";
$proto19["m_columns"][] = "order";
$proto19["m_columns"][] = "dotnet";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "chat_timezone";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "chat_timezone";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="chat_timezone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_timezone = createSqlQuery_chat_timezone();


	
		;

						

$tdatachat_timezone[".sqlquery"] = $queryData_chat_timezone;



$tdatachat_timezone[".hasEvents"] = false;

?>