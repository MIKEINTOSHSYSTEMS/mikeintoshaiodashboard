<?php
$tdatasv_users = array();
$tdatasv_users[".searchableFields"] = array();
$tdatasv_users[".ShortName"] = "sv_users";
$tdatasv_users[".OwnerID"] = "";
$tdatasv_users[".OriginalTable"] = "sv_users";


$tdatasv_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasv_users[".originalPagesByType"] = $tdatasv_users[".pagesByType"];
$tdatasv_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasv_users[".originalPages"] = $tdatasv_users[".pages"];
$tdatasv_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatasv_users[".originalDefaultPages"] = $tdatasv_users[".defaultPages"];

//	field labels
$fieldLabelssv_users = array();
$fieldToolTipssv_users = array();
$pageTitlessv_users = array();
$placeHolderssv_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssv_users["English"] = array();
	$fieldToolTipssv_users["English"] = array();
	$placeHolderssv_users["English"] = array();
	$pageTitlessv_users["English"] = array();
	$fieldLabelssv_users["English"]["id"] = "Id";
	$fieldToolTipssv_users["English"]["id"] = "";
	$placeHolderssv_users["English"]["id"] = "";
	$fieldLabelssv_users["English"]["username"] = "Username";
	$fieldToolTipssv_users["English"]["username"] = "";
	$placeHolderssv_users["English"]["username"] = "";
	$fieldLabelssv_users["English"]["password"] = "Password";
	$fieldToolTipssv_users["English"]["password"] = "";
	$placeHolderssv_users["English"]["password"] = "";
	$fieldLabelssv_users["English"]["reset_token"] = "Reset Token";
	$fieldToolTipssv_users["English"]["reset_token"] = "";
	$placeHolderssv_users["English"]["reset_token"] = "";
	$fieldLabelssv_users["English"]["reset_date"] = "Reset Date";
	$fieldToolTipssv_users["English"]["reset_date"] = "";
	$placeHolderssv_users["English"]["reset_date"] = "";
	$fieldLabelssv_users["English"]["email"] = "Email";
	$fieldToolTipssv_users["English"]["email"] = "";
	$placeHolderssv_users["English"]["email"] = "";
	if (count($fieldToolTipssv_users["English"]))
		$tdatasv_users[".isUseToolTips"] = true;
}


	$tdatasv_users[".NCSearch"] = true;



$tdatasv_users[".shortTableName"] = "sv_users";
$tdatasv_users[".nSecOptions"] = 0;

$tdatasv_users[".mainTableOwnerID"] = "";
$tdatasv_users[".entityType"] = 0;
$tdatasv_users[".connId"] = "project_at_localhost";


$tdatasv_users[".strOriginalTableName"] = "sv_users";

	



$tdatasv_users[".showAddInPopup"] = false;

$tdatasv_users[".showEditInPopup"] = false;

$tdatasv_users[".showViewInPopup"] = false;

$tdatasv_users[".listAjax"] = false;
//	temporary
//$tdatasv_users[".listAjax"] = false;

	$tdatasv_users[".audit"] = false;

	$tdatasv_users[".locking"] = false;


$pages = $tdatasv_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasv_users[".edit"] = true;
	$tdatasv_users[".afterEditAction"] = 1;
	$tdatasv_users[".closePopupAfterEdit"] = 1;
	$tdatasv_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasv_users[".add"] = true;
$tdatasv_users[".afterAddAction"] = 1;
$tdatasv_users[".closePopupAfterAdd"] = 1;
$tdatasv_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasv_users[".list"] = true;
}

$tdatasv_users[".updateSelected"] = true;


$tdatasv_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasv_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasv_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasv_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasv_users[".printFriendly"] = true;
}



$tdatasv_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasv_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasv_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasv_users[".isUseAjaxSuggest"] = true;



																		

$tdatasv_users[".ajaxCodeSnippetAdded"] = false;

$tdatasv_users[".buttonsAdded"] = false;

$tdatasv_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasv_users[".isUseTimeForSearch"] = false;


$tdatasv_users[".badgeColor"] = "E07878";


$tdatasv_users[".allSearchFields"] = array();
$tdatasv_users[".filterFields"] = array();
$tdatasv_users[".requiredSearchFields"] = array();

$tdatasv_users[".googleLikeFields"] = array();
$tdatasv_users[".googleLikeFields"][] = "id";
$tdatasv_users[".googleLikeFields"][] = "username";
$tdatasv_users[".googleLikeFields"][] = "password";



$tdatasv_users[".tableType"] = "list";

$tdatasv_users[".printerPageOrientation"] = 0;
$tdatasv_users[".nPrinterPageScale"] = 100;

$tdatasv_users[".nPrinterSplitRecords"] = 40;

$tdatasv_users[".geocodingEnabled"] = false;










$tdatasv_users[".pageSize"] = 20;

$tdatasv_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasv_users[".strOrderBy"] = $tstrOrderBy;

$tdatasv_users[".orderindexes"] = array();


$tdatasv_users[".sqlHead"] = "SELECT id,  username,  password,  reset_token,  reset_date,  email";
$tdatasv_users[".sqlFrom"] = "FROM sv_users";
$tdatasv_users[".sqlWhereExpr"] = "";
$tdatasv_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasv_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasv_users[".arrGroupsPerPage"] = $arrGPP;

$tdatasv_users[".highlightSearchResults"] = true;

$tableKeyssv_users = array();
$tableKeyssv_users[] = "id";
$tdatasv_users[".Keys"] = $tableKeyssv_users;


$tdatasv_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sv_users";
	$fdata["Label"] = GetFieldLabel("sv_users","id");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatasv_users["id"] = $fdata;
		$tdatasv_users[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "sv_users";
	$fdata["Label"] = GetFieldLabel("sv_users","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasv_users["username"] = $fdata;
		$tdatasv_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "sv_users";
	$fdata["Label"] = GetFieldLabel("sv_users","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
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


	$tdatasv_users["password"] = $fdata;
		$tdatasv_users[".searchableFields"][] = "password";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "sv_users";
	$fdata["Label"] = GetFieldLabel("sv_users","reset_token");
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


	$tdatasv_users["reset_token"] = $fdata;
		$tdatasv_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "sv_users";
	$fdata["Label"] = GetFieldLabel("sv_users","reset_date");
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


	$tdatasv_users["reset_date"] = $fdata;
		$tdatasv_users[".searchableFields"][] = "reset_date";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sv_users";
	$fdata["Label"] = GetFieldLabel("sv_users","email");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

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


	$tdatasv_users["email"] = $fdata;
		$tdatasv_users[".searchableFields"][] = "email";


$tables_data["sv_users"]=&$tdatasv_users;
$field_labels["sv_users"] = &$fieldLabelssv_users;
$fieldToolTips["sv_users"] = &$fieldToolTipssv_users;
$placeHolders["sv_users"] = &$placeHolderssv_users;
$page_titles["sv_users"] = &$pageTitlessv_users;


changeTextControlsToDate( "sv_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sv_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sv_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sv_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  username,  password,  reset_token,  reset_date,  email";
$proto0["m_strFrom"] = "FROM sv_users";
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
	"m_strTable" => "sv_users",
	"m_srcTableName" => "sv_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sv_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "sv_users",
	"m_srcTableName" => "sv_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "sv_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "sv_users",
	"m_srcTableName" => "sv_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "sv_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "sv_users",
	"m_srcTableName" => "sv_users"
));

$proto12["m_sql"] = "reset_token";
$proto12["m_srcTableName"] = "sv_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "sv_users",
	"m_srcTableName" => "sv_users"
));

$proto14["m_sql"] = "reset_date";
$proto14["m_srcTableName"] = "sv_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sv_users",
	"m_srcTableName" => "sv_users"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "sv_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "sv_users";
$proto19["m_srcTableName"] = "sv_users";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "username";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_date";
$proto19["m_columns"][] = "email";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "sv_users";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "sv_users";
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
$proto0["m_srcTableName"]="sv_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sv_users = createSqlQuery_sv_users();


	
		;

						

$tdatasv_users[".sqlquery"] = $queryData_sv_users;



include_once(getabspath("include/sv_users_events.php"));
$tdatasv_users[".hasEvents"] = true;

?>