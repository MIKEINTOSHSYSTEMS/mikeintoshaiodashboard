<?php
$tdatapdf_users = array();
$tdatapdf_users[".searchableFields"] = array();
$tdatapdf_users[".ShortName"] = "pdf_users";
$tdatapdf_users[".OwnerID"] = "";
$tdatapdf_users[".OriginalTable"] = "pdf_users";


$tdatapdf_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatapdf_users[".originalPagesByType"] = $tdatapdf_users[".pagesByType"];
$tdatapdf_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatapdf_users[".originalPages"] = $tdatapdf_users[".pages"];
$tdatapdf_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatapdf_users[".originalDefaultPages"] = $tdatapdf_users[".defaultPages"];

//	field labels
$fieldLabelspdf_users = array();
$fieldToolTipspdf_users = array();
$pageTitlespdf_users = array();
$placeHolderspdf_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspdf_users["English"] = array();
	$fieldToolTipspdf_users["English"] = array();
	$placeHolderspdf_users["English"] = array();
	$pageTitlespdf_users["English"] = array();
	$fieldLabelspdf_users["English"]["id"] = "Id";
	$fieldToolTipspdf_users["English"]["id"] = "";
	$placeHolderspdf_users["English"]["id"] = "";
	$fieldLabelspdf_users["English"]["username"] = "Username";
	$fieldToolTipspdf_users["English"]["username"] = "";
	$placeHolderspdf_users["English"]["username"] = "";
	$fieldLabelspdf_users["English"]["password"] = "Password";
	$fieldToolTipspdf_users["English"]["password"] = "";
	$placeHolderspdf_users["English"]["password"] = "";
	$fieldLabelspdf_users["English"]["email"] = "Email";
	$fieldToolTipspdf_users["English"]["email"] = "";
	$placeHolderspdf_users["English"]["email"] = "";
	$fieldLabelspdf_users["English"]["reset_token"] = "Reset Token";
	$fieldToolTipspdf_users["English"]["reset_token"] = "";
	$placeHolderspdf_users["English"]["reset_token"] = "";
	$fieldLabelspdf_users["English"]["reset_date"] = "Reset Date";
	$fieldToolTipspdf_users["English"]["reset_date"] = "";
	$placeHolderspdf_users["English"]["reset_date"] = "";
	if (count($fieldToolTipspdf_users["English"]))
		$tdatapdf_users[".isUseToolTips"] = true;
}


	$tdatapdf_users[".NCSearch"] = true;



$tdatapdf_users[".shortTableName"] = "pdf_users";
$tdatapdf_users[".nSecOptions"] = 0;

$tdatapdf_users[".mainTableOwnerID"] = "";
$tdatapdf_users[".entityType"] = 0;
$tdatapdf_users[".connId"] = "project_at_localhost";


$tdatapdf_users[".strOriginalTableName"] = "pdf_users";

	



$tdatapdf_users[".showAddInPopup"] = false;

$tdatapdf_users[".showEditInPopup"] = false;

$tdatapdf_users[".showViewInPopup"] = false;

$tdatapdf_users[".listAjax"] = false;
//	temporary
//$tdatapdf_users[".listAjax"] = false;

	$tdatapdf_users[".audit"] = false;

	$tdatapdf_users[".locking"] = false;


$pages = $tdatapdf_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapdf_users[".edit"] = true;
	$tdatapdf_users[".afterEditAction"] = 1;
	$tdatapdf_users[".closePopupAfterEdit"] = 1;
	$tdatapdf_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapdf_users[".add"] = true;
$tdatapdf_users[".afterAddAction"] = 1;
$tdatapdf_users[".closePopupAfterAdd"] = 1;
$tdatapdf_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapdf_users[".list"] = true;
}



$tdatapdf_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapdf_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapdf_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapdf_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapdf_users[".printFriendly"] = true;
}



$tdatapdf_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapdf_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapdf_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapdf_users[".isUseAjaxSuggest"] = true;



												

$tdatapdf_users[".ajaxCodeSnippetAdded"] = false;

$tdatapdf_users[".buttonsAdded"] = false;

$tdatapdf_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapdf_users[".isUseTimeForSearch"] = false;


$tdatapdf_users[".badgeColor"] = "E07878";


$tdatapdf_users[".allSearchFields"] = array();
$tdatapdf_users[".filterFields"] = array();
$tdatapdf_users[".requiredSearchFields"] = array();

$tdatapdf_users[".googleLikeFields"] = array();
$tdatapdf_users[".googleLikeFields"][] = "id";
$tdatapdf_users[".googleLikeFields"][] = "username";
$tdatapdf_users[".googleLikeFields"][] = "password";
$tdatapdf_users[".googleLikeFields"][] = "email";



$tdatapdf_users[".tableType"] = "list";

$tdatapdf_users[".printerPageOrientation"] = 0;
$tdatapdf_users[".nPrinterPageScale"] = 100;

$tdatapdf_users[".nPrinterSplitRecords"] = 40;

$tdatapdf_users[".geocodingEnabled"] = false;










$tdatapdf_users[".pageSize"] = 20;

$tdatapdf_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapdf_users[".strOrderBy"] = $tstrOrderBy;

$tdatapdf_users[".orderindexes"] = array();


$tdatapdf_users[".sqlHead"] = "SELECT id,  	username,  	password,  	email,  	reset_token,  	reset_date";
$tdatapdf_users[".sqlFrom"] = "FROM pdf_users";
$tdatapdf_users[".sqlWhereExpr"] = "";
$tdatapdf_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapdf_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapdf_users[".arrGroupsPerPage"] = $arrGPP;

$tdatapdf_users[".highlightSearchResults"] = true;

$tableKeyspdf_users = array();
$tableKeyspdf_users[] = "id";
$tdatapdf_users[".Keys"] = $tableKeyspdf_users;


$tdatapdf_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pdf_users";
	$fdata["Label"] = GetFieldLabel("pdf_users","id");
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


	$tdatapdf_users["id"] = $fdata;
		$tdatapdf_users[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "pdf_users";
	$fdata["Label"] = GetFieldLabel("pdf_users","username");
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


	$tdatapdf_users["username"] = $fdata;
		$tdatapdf_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "pdf_users";
	$fdata["Label"] = GetFieldLabel("pdf_users","password");
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


	$tdatapdf_users["password"] = $fdata;
		$tdatapdf_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "pdf_users";
	$fdata["Label"] = GetFieldLabel("pdf_users","email");
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


	$tdatapdf_users["email"] = $fdata;
		$tdatapdf_users[".searchableFields"][] = "email";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "pdf_users";
	$fdata["Label"] = GetFieldLabel("pdf_users","reset_token");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatapdf_users["reset_token"] = $fdata;
		$tdatapdf_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "pdf_users";
	$fdata["Label"] = GetFieldLabel("pdf_users","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
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


	$tdatapdf_users["reset_date"] = $fdata;
		$tdatapdf_users[".searchableFields"][] = "reset_date";


$tables_data["pdf_users"]=&$tdatapdf_users;
$field_labels["pdf_users"] = &$fieldLabelspdf_users;
$fieldToolTips["pdf_users"] = &$fieldToolTipspdf_users;
$placeHolders["pdf_users"] = &$placeHolderspdf_users;
$page_titles["pdf_users"] = &$pageTitlespdf_users;


changeTextControlsToDate( "pdf_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pdf_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pdf_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pdf_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	username,  	password,  	email,  	reset_token,  	reset_date";
$proto0["m_strFrom"] = "FROM pdf_users";
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
	"m_strTable" => "pdf_users",
	"m_srcTableName" => "pdf_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pdf_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "pdf_users",
	"m_srcTableName" => "pdf_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "pdf_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "pdf_users",
	"m_srcTableName" => "pdf_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "pdf_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "pdf_users",
	"m_srcTableName" => "pdf_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "pdf_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "pdf_users",
	"m_srcTableName" => "pdf_users"
));

$proto14["m_sql"] = "reset_token";
$proto14["m_srcTableName"] = "pdf_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "pdf_users",
	"m_srcTableName" => "pdf_users"
));

$proto16["m_sql"] = "reset_date";
$proto16["m_srcTableName"] = "pdf_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "pdf_users";
$proto19["m_srcTableName"] = "pdf_users";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "username";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "pdf_users";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "pdf_users";
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
$proto0["m_srcTableName"]="pdf_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pdf_users = createSqlQuery_pdf_users();


	
		;

						

$tdatapdf_users[".sqlquery"] = $queryData_pdf_users;



$tdatapdf_users[".hasEvents"] = false;

?>