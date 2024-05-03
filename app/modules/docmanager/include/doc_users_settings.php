<?php
$tdatadoc_users = array();
$tdatadoc_users[".searchableFields"] = array();
$tdatadoc_users[".ShortName"] = "doc_users";
$tdatadoc_users[".OwnerID"] = "";
$tdatadoc_users[".OriginalTable"] = "doc_users";


$tdatadoc_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadoc_users[".originalPagesByType"] = $tdatadoc_users[".pagesByType"];
$tdatadoc_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadoc_users[".originalPages"] = $tdatadoc_users[".pages"];
$tdatadoc_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatadoc_users[".originalDefaultPages"] = $tdatadoc_users[".defaultPages"];

//	field labels
$fieldLabelsdoc_users = array();
$fieldToolTipsdoc_users = array();
$pageTitlesdoc_users = array();
$placeHoldersdoc_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdoc_users["English"] = array();
	$fieldToolTipsdoc_users["English"] = array();
	$placeHoldersdoc_users["English"] = array();
	$pageTitlesdoc_users["English"] = array();
	$fieldLabelsdoc_users["English"]["id"] = "Id";
	$fieldToolTipsdoc_users["English"]["id"] = "";
	$placeHoldersdoc_users["English"]["id"] = "";
	$fieldLabelsdoc_users["English"]["email"] = "Email";
	$fieldToolTipsdoc_users["English"]["email"] = "";
	$placeHoldersdoc_users["English"]["email"] = "";
	$fieldLabelsdoc_users["English"]["password"] = "Password";
	$fieldToolTipsdoc_users["English"]["password"] = "";
	$placeHoldersdoc_users["English"]["password"] = "";
	$fieldLabelsdoc_users["English"]["usertype"] = "Usertype";
	$fieldToolTipsdoc_users["English"]["usertype"] = "";
	$placeHoldersdoc_users["English"]["usertype"] = "";
	$fieldLabelsdoc_users["English"]["name"] = "Name";
	$fieldToolTipsdoc_users["English"]["name"] = "";
	$placeHoldersdoc_users["English"]["name"] = "";
	$fieldLabelsdoc_users["English"]["reset_token"] = "Reset Token";
	$fieldToolTipsdoc_users["English"]["reset_token"] = "";
	$placeHoldersdoc_users["English"]["reset_token"] = "";
	$fieldLabelsdoc_users["English"]["reset_date"] = "Reset Date";
	$fieldToolTipsdoc_users["English"]["reset_date"] = "";
	$placeHoldersdoc_users["English"]["reset_date"] = "";
	if (count($fieldToolTipsdoc_users["English"]))
		$tdatadoc_users[".isUseToolTips"] = true;
}


	$tdatadoc_users[".NCSearch"] = true;



$tdatadoc_users[".shortTableName"] = "doc_users";
$tdatadoc_users[".nSecOptions"] = 0;

$tdatadoc_users[".mainTableOwnerID"] = "";
$tdatadoc_users[".entityType"] = 0;
$tdatadoc_users[".connId"] = "project_at_localhost";


$tdatadoc_users[".strOriginalTableName"] = "doc_users";

		 



$tdatadoc_users[".showAddInPopup"] = false;

$tdatadoc_users[".showEditInPopup"] = false;

$tdatadoc_users[".showViewInPopup"] = false;

$tdatadoc_users[".listAjax"] = false;
//	temporary
//$tdatadoc_users[".listAjax"] = false;

	$tdatadoc_users[".audit"] = false;

	$tdatadoc_users[".locking"] = false;


$pages = $tdatadoc_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadoc_users[".edit"] = true;
	$tdatadoc_users[".afterEditAction"] = 1;
	$tdatadoc_users[".closePopupAfterEdit"] = 1;
	$tdatadoc_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadoc_users[".add"] = true;
$tdatadoc_users[".afterAddAction"] = 1;
$tdatadoc_users[".closePopupAfterAdd"] = 1;
$tdatadoc_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadoc_users[".list"] = true;
}



$tdatadoc_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadoc_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadoc_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadoc_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadoc_users[".printFriendly"] = true;
}



$tdatadoc_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadoc_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadoc_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadoc_users[".isUseAjaxSuggest"] = true;



															

$tdatadoc_users[".ajaxCodeSnippetAdded"] = false;

$tdatadoc_users[".buttonsAdded"] = false;

$tdatadoc_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadoc_users[".isUseTimeForSearch"] = false;


$tdatadoc_users[".badgeColor"] = "008B8B";


$tdatadoc_users[".allSearchFields"] = array();
$tdatadoc_users[".filterFields"] = array();
$tdatadoc_users[".requiredSearchFields"] = array();

$tdatadoc_users[".googleLikeFields"] = array();
$tdatadoc_users[".googleLikeFields"][] = "id";
$tdatadoc_users[".googleLikeFields"][] = "email";
$tdatadoc_users[".googleLikeFields"][] = "password";
$tdatadoc_users[".googleLikeFields"][] = "usertype";
$tdatadoc_users[".googleLikeFields"][] = "name";



$tdatadoc_users[".tableType"] = "list";

$tdatadoc_users[".printerPageOrientation"] = 0;
$tdatadoc_users[".nPrinterPageScale"] = 100;

$tdatadoc_users[".nPrinterSplitRecords"] = 40;

$tdatadoc_users[".geocodingEnabled"] = false;










$tdatadoc_users[".pageSize"] = 20;

$tdatadoc_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadoc_users[".strOrderBy"] = $tstrOrderBy;

$tdatadoc_users[".orderindexes"] = array();


$tdatadoc_users[".sqlHead"] = "SELECT id,  email,  password,  usertype,  name,  reset_token,  reset_date";
$tdatadoc_users[".sqlFrom"] = "FROM doc_users";
$tdatadoc_users[".sqlWhereExpr"] = "";
$tdatadoc_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadoc_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadoc_users[".arrGroupsPerPage"] = $arrGPP;

$tdatadoc_users[".highlightSearchResults"] = true;

$tableKeysdoc_users = array();
$tableKeysdoc_users[] = "id";
$tdatadoc_users[".Keys"] = $tableKeysdoc_users;


$tdatadoc_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","id");
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


	$tdatadoc_users["id"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "id";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","email");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "email";

	
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


	$tdatadoc_users["email"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "email";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","password");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatadoc_users["password"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "password";
//	usertype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usertype";
	$fdata["GoodName"] = "usertype";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","usertype");
	$fdata["FieldType"] = 200;


	
	
										

		$fdata["strField"] = "usertype";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usertype";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "user";
	$edata["LookupValues"][] = "admin";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadoc_users["usertype"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "usertype";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","name");
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatadoc_users["name"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "name";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","reset_token");
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


	$tdatadoc_users["reset_token"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "doc_users";
	$fdata["Label"] = GetFieldLabel("doc_users","reset_date");
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


	$tdatadoc_users["reset_date"] = $fdata;
		$tdatadoc_users[".searchableFields"][] = "reset_date";


$tables_data["doc_users"]=&$tdatadoc_users;
$field_labels["doc_users"] = &$fieldLabelsdoc_users;
$fieldToolTips["doc_users"] = &$fieldToolTipsdoc_users;
$placeHolders["doc_users"] = &$placeHoldersdoc_users;
$page_titles["doc_users"] = &$pageTitlesdoc_users;


changeTextControlsToDate( "doc_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["doc_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["doc_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_doc_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  email,  password,  usertype,  name,  reset_token,  reset_date";
$proto0["m_strFrom"] = "FROM doc_users";
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
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "doc_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto8["m_sql"] = "email";
$proto8["m_srcTableName"] = "doc_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "doc_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usertype",
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto12["m_sql"] = "usertype";
$proto12["m_srcTableName"] = "doc_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto14["m_sql"] = "name";
$proto14["m_srcTableName"] = "doc_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto16["m_sql"] = "reset_token";
$proto16["m_srcTableName"] = "doc_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "doc_users",
	"m_srcTableName" => "doc_users"
));

$proto18["m_sql"] = "reset_date";
$proto18["m_srcTableName"] = "doc_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "doc_users";
$proto21["m_srcTableName"] = "doc_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "usertype";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "reset_token";
$proto21["m_columns"][] = "reset_date";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "doc_users";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "doc_users";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="doc_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_doc_users = createSqlQuery_doc_users();


	
					
;

							

$tdatadoc_users[".sqlquery"] = $queryData_doc_users;



include_once(getabspath("include/doc_users_events.php"));
$tdatadoc_users[".hasEvents"] = true;

?>