<?php
$tdatacalusers = array();
$tdatacalusers[".searchableFields"] = array();
$tdatacalusers[".ShortName"] = "calusers";
$tdatacalusers[".OwnerID"] = "";
$tdatacalusers[".OriginalTable"] = "calusers";


$tdatacalusers[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacalusers[".originalPagesByType"] = $tdatacalusers[".pagesByType"];
$tdatacalusers[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacalusers[".originalPages"] = $tdatacalusers[".pages"];
$tdatacalusers[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacalusers[".originalDefaultPages"] = $tdatacalusers[".defaultPages"];

//	field labels
$fieldLabelscalusers = array();
$fieldToolTipscalusers = array();
$pageTitlescalusers = array();
$placeHolderscalusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalusers["English"] = array();
	$fieldToolTipscalusers["English"] = array();
	$placeHolderscalusers["English"] = array();
	$pageTitlescalusers["English"] = array();
	$fieldLabelscalusers["English"]["id"] = "Id";
	$fieldToolTipscalusers["English"]["id"] = "";
	$placeHolderscalusers["English"]["id"] = "";
	$fieldLabelscalusers["English"]["username"] = "Username";
	$fieldToolTipscalusers["English"]["username"] = "";
	$placeHolderscalusers["English"]["username"] = "";
	$fieldLabelscalusers["English"]["password"] = "Password";
	$fieldToolTipscalusers["English"]["password"] = "";
	$placeHolderscalusers["English"]["password"] = "";
	$fieldLabelscalusers["English"]["email"] = "Email";
	$fieldToolTipscalusers["English"]["email"] = "";
	$placeHolderscalusers["English"]["email"] = "";
	$fieldLabelscalusers["English"]["reset_token"] = "Reset Token";
	$fieldToolTipscalusers["English"]["reset_token"] = "";
	$placeHolderscalusers["English"]["reset_token"] = "";
	$fieldLabelscalusers["English"]["reset_date"] = "Reset Date";
	$fieldToolTipscalusers["English"]["reset_date"] = "";
	$placeHolderscalusers["English"]["reset_date"] = "";
	if (count($fieldToolTipscalusers["English"]))
		$tdatacalusers[".isUseToolTips"] = true;
}


	$tdatacalusers[".NCSearch"] = true;



$tdatacalusers[".shortTableName"] = "calusers";
$tdatacalusers[".nSecOptions"] = 0;

$tdatacalusers[".mainTableOwnerID"] = "";
$tdatacalusers[".entityType"] = 0;
$tdatacalusers[".connId"] = "project_at_localhost";


$tdatacalusers[".strOriginalTableName"] = "calusers";

	



$tdatacalusers[".showAddInPopup"] = false;

$tdatacalusers[".showEditInPopup"] = false;

$tdatacalusers[".showViewInPopup"] = false;

$tdatacalusers[".listAjax"] = false;
//	temporary
//$tdatacalusers[".listAjax"] = false;

	$tdatacalusers[".audit"] = false;

	$tdatacalusers[".locking"] = false;


$pages = $tdatacalusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalusers[".edit"] = true;
	$tdatacalusers[".afterEditAction"] = 1;
	$tdatacalusers[".closePopupAfterEdit"] = 1;
	$tdatacalusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalusers[".add"] = true;
$tdatacalusers[".afterAddAction"] = 1;
$tdatacalusers[".closePopupAfterAdd"] = 1;
$tdatacalusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalusers[".list"] = true;
}



$tdatacalusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalusers[".printFriendly"] = true;
}



$tdatacalusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalusers[".isUseAjaxSuggest"] = true;



																								

$tdatacalusers[".ajaxCodeSnippetAdded"] = false;

$tdatacalusers[".buttonsAdded"] = false;

$tdatacalusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalusers[".isUseTimeForSearch"] = false;


$tdatacalusers[".badgeColor"] = "CD853F";


$tdatacalusers[".allSearchFields"] = array();
$tdatacalusers[".filterFields"] = array();
$tdatacalusers[".requiredSearchFields"] = array();

$tdatacalusers[".googleLikeFields"] = array();
$tdatacalusers[".googleLikeFields"][] = "id";
$tdatacalusers[".googleLikeFields"][] = "username";
$tdatacalusers[".googleLikeFields"][] = "password";
$tdatacalusers[".googleLikeFields"][] = "email";



$tdatacalusers[".tableType"] = "list";

$tdatacalusers[".printerPageOrientation"] = 0;
$tdatacalusers[".nPrinterPageScale"] = 100;

$tdatacalusers[".nPrinterSplitRecords"] = 40;

$tdatacalusers[".geocodingEnabled"] = false;










$tdatacalusers[".pageSize"] = 20;

$tdatacalusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalusers[".strOrderBy"] = $tstrOrderBy;

$tdatacalusers[".orderindexes"] = array();


$tdatacalusers[".sqlHead"] = "SELECT id,  username,  password,  email,  reset_token,  reset_date";
$tdatacalusers[".sqlFrom"] = "FROM calusers";
$tdatacalusers[".sqlWhereExpr"] = "";
$tdatacalusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalusers[".arrGroupsPerPage"] = $arrGPP;

$tdatacalusers[".highlightSearchResults"] = true;

$tableKeyscalusers = array();
$tableKeyscalusers[] = "id";
$tdatacalusers[".Keys"] = $tableKeyscalusers;


$tdatacalusers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","id");
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


	$tdatacalusers["id"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatacalusers["username"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatacalusers["password"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatacalusers["email"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "email";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","reset_token");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["FullName"] = "reset_token";

	
	
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


	$tdatacalusers["reset_token"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "calusers";
	$fdata["Label"] = GetFieldLabel("calusers","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["FullName"] = "reset_date";

	
	
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


	$tdatacalusers["reset_date"] = $fdata;
		$tdatacalusers[".searchableFields"][] = "reset_date";


$tables_data["calusers"]=&$tdatacalusers;
$field_labels["calusers"] = &$fieldLabelscalusers;
$fieldToolTips["calusers"] = &$fieldToolTipscalusers;
$placeHolders["calusers"] = &$placeHolderscalusers;
$page_titles["calusers"] = &$pageTitlescalusers;


changeTextControlsToDate( "calusers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calusers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calusers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  username,  password,  email,  reset_token,  reset_date";
$proto0["m_strFrom"] = "FROM calusers";
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
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "calusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "calusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "calusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto14["m_sql"] = "reset_token";
$proto14["m_srcTableName"] = "calusers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "calusers",
	"m_srcTableName" => "calusers"
));

$proto16["m_sql"] = "reset_date";
$proto16["m_srcTableName"] = "calusers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "calusers";
$proto19["m_srcTableName"] = "calusers";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "username";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "calusers";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "calusers";
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
$proto0["m_srcTableName"]="calusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calusers = createSqlQuery_calusers();


	
		;

						

$tdatacalusers[".sqlquery"] = $queryData_calusers;



$tdatacalusers[".hasEvents"] = false;

?>