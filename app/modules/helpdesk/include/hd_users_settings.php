<?php
$tdatahd_users = array();
$tdatahd_users[".searchableFields"] = array();
$tdatahd_users[".ShortName"] = "hd_users";
$tdatahd_users[".OwnerID"] = "";
$tdatahd_users[".OriginalTable"] = "hd_users";


$tdatahd_users[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahd_users[".originalPagesByType"] = $tdatahd_users[".pagesByType"];
$tdatahd_users[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahd_users[".originalPages"] = $tdatahd_users[".pages"];
$tdatahd_users[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatahd_users[".originalDefaultPages"] = $tdatahd_users[".defaultPages"];

//	field labels
$fieldLabelshd_users = array();
$fieldToolTipshd_users = array();
$pageTitleshd_users = array();
$placeHoldershd_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshd_users["English"] = array();
	$fieldToolTipshd_users["English"] = array();
	$placeHoldershd_users["English"] = array();
	$pageTitleshd_users["English"] = array();
	$fieldLabelshd_users["English"]["id"] = "Email";
	$fieldToolTipshd_users["English"]["id"] = "";
	$placeHoldershd_users["English"]["id"] = "";
	$fieldLabelshd_users["English"]["username"] = "Email";
	$fieldToolTipshd_users["English"]["username"] = "";
	$placeHoldershd_users["English"]["username"] = "";
	$fieldLabelshd_users["English"]["password"] = "Password";
	$fieldToolTipshd_users["English"]["password"] = "";
	$placeHoldershd_users["English"]["password"] = "";
	$fieldLabelshd_users["English"]["usertype"] = "Usertype";
	$fieldToolTipshd_users["English"]["usertype"] = "";
	$placeHoldershd_users["English"]["usertype"] = "";
	$fieldLabelshd_users["English"]["fullname"] = "Fullname";
	$fieldToolTipshd_users["English"]["fullname"] = "";
	$placeHoldershd_users["English"]["fullname"] = "";
	$fieldLabelshd_users["English"]["supporterView"] = "Access rights";
	$fieldToolTipshd_users["English"]["supporterView"] = "";
	$placeHoldershd_users["English"]["supporterView"] = "";
	if (count($fieldToolTipshd_users["English"]))
		$tdatahd_users[".isUseToolTips"] = true;
}


	$tdatahd_users[".NCSearch"] = true;



$tdatahd_users[".shortTableName"] = "hd_users";
$tdatahd_users[".nSecOptions"] = 0;

$tdatahd_users[".mainTableOwnerID"] = "";
$tdatahd_users[".entityType"] = 0;
$tdatahd_users[".connId"] = "project_at_localhost";


$tdatahd_users[".strOriginalTableName"] = "hd_users";

	



$tdatahd_users[".showAddInPopup"] = false;

$tdatahd_users[".showEditInPopup"] = false;

$tdatahd_users[".showViewInPopup"] = false;

$tdatahd_users[".listAjax"] = false;
//	temporary
//$tdatahd_users[".listAjax"] = false;

	$tdatahd_users[".audit"] = false;

	$tdatahd_users[".locking"] = false;


$pages = $tdatahd_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahd_users[".edit"] = true;
	$tdatahd_users[".afterEditAction"] = 1;
	$tdatahd_users[".closePopupAfterEdit"] = 1;
	$tdatahd_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahd_users[".add"] = true;
$tdatahd_users[".afterAddAction"] = 1;
$tdatahd_users[".closePopupAfterAdd"] = 1;
$tdatahd_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahd_users[".list"] = true;
}



$tdatahd_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahd_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahd_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahd_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahd_users[".printFriendly"] = true;
}



$tdatahd_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahd_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahd_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahd_users[".isUseAjaxSuggest"] = true;



																																													

$tdatahd_users[".ajaxCodeSnippetAdded"] = false;

$tdatahd_users[".buttonsAdded"] = false;

$tdatahd_users[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahd_users[".isUseTimeForSearch"] = false;


$tdatahd_users[".badgeColor"] = "4169E1";


$tdatahd_users[".allSearchFields"] = array();
$tdatahd_users[".filterFields"] = array();
$tdatahd_users[".requiredSearchFields"] = array();

$tdatahd_users[".googleLikeFields"] = array();
$tdatahd_users[".googleLikeFields"][] = "id";
$tdatahd_users[".googleLikeFields"][] = "username";
$tdatahd_users[".googleLikeFields"][] = "password";
$tdatahd_users[".googleLikeFields"][] = "usertype";
$tdatahd_users[".googleLikeFields"][] = "fullname";
$tdatahd_users[".googleLikeFields"][] = "supporterView";



$tdatahd_users[".tableType"] = "list";

$tdatahd_users[".printerPageOrientation"] = 0;
$tdatahd_users[".nPrinterPageScale"] = 100;

$tdatahd_users[".nPrinterSplitRecords"] = 40;

$tdatahd_users[".geocodingEnabled"] = false;










$tdatahd_users[".pageSize"] = 20;

$tdatahd_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahd_users[".strOrderBy"] = $tstrOrderBy;

$tdatahd_users[".orderindexes"] = array();


$tdatahd_users[".sqlHead"] = "SELECT id,  username,  password,  usertype,  fullname,  supporterView";
$tdatahd_users[".sqlFrom"] = "FROM hd_users";
$tdatahd_users[".sqlWhereExpr"] = "";
$tdatahd_users[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "customers",
	'name' => "Customers",
	'nameType' => 'Text',
	'where' => "usertype = 'customer'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "support",
	'name' => "Support team",
	'nameType' => 'Text',
	'where' => "usertype <> 'customer'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatahd_users[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahd_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahd_users[".arrGroupsPerPage"] = $arrGPP;

$tdatahd_users[".highlightSearchResults"] = true;

$tableKeyshd_users = array();
$tableKeyshd_users[] = "id";
$tdatahd_users[".Keys"] = $tableKeyshd_users;


$tdatahd_users[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hd_users";
	$fdata["Label"] = GetFieldLabel("hd_users","id");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatahd_users["id"] = $fdata;
		$tdatahd_users[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "hd_users";
	$fdata["Label"] = GetFieldLabel("hd_users","username");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatahd_users["username"] = $fdata;
		$tdatahd_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "hd_users";
	$fdata["Label"] = GetFieldLabel("hd_users","password");
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahd_users["password"] = $fdata;
		$tdatahd_users[".searchableFields"][] = "password";
//	usertype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usertype";
	$fdata["GoodName"] = "usertype";
	$fdata["ownerTable"] = "hd_users";
	$fdata["Label"] = GetFieldLabel("hd_users","usertype");
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
	$edata["LookupValues"][] = "customer";
	$edata["LookupValues"][] = "user";
	$edata["LookupValues"][] = "admin";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahd_users["usertype"] = $fdata;
		$tdatahd_users[".searchableFields"][] = "usertype";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "hd_users";
	$fdata["Label"] = GetFieldLabel("hd_users","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatahd_users["fullname"] = $fdata;
		$tdatahd_users[".searchableFields"][] = "fullname";
//	supporterView
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "supporterView";
	$fdata["GoodName"] = "supporterView";
	$fdata["ownerTable"] = "hd_users";
	$fdata["Label"] = GetFieldLabel("hd_users","supporterView");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "supporterView";

		$fdata["sourceSingle"] = "supporterView";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "supporterView";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "View all tickets";
	$edata["LookupValues"][] = "View assigned tickets only";

	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahd_users["supporterView"] = $fdata;
		$tdatahd_users[".searchableFields"][] = "supporterView";


$tables_data["hd_users"]=&$tdatahd_users;
$field_labels["hd_users"] = &$fieldLabelshd_users;
$fieldToolTips["hd_users"] = &$fieldToolTipshd_users;
$placeHolders["hd_users"] = &$placeHoldershd_users;
$page_titles["hd_users"] = &$pageTitleshd_users;


changeTextControlsToDate( "hd_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hd_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hd_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hd_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  username,  password,  usertype,  fullname,  supporterView";
$proto0["m_strFrom"] = "FROM hd_users";
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
	"m_strTable" => "hd_users",
	"m_srcTableName" => "hd_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hd_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "hd_users",
	"m_srcTableName" => "hd_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "hd_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "hd_users",
	"m_srcTableName" => "hd_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "hd_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usertype",
	"m_strTable" => "hd_users",
	"m_srcTableName" => "hd_users"
));

$proto12["m_sql"] = "usertype";
$proto12["m_srcTableName"] = "hd_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "hd_users",
	"m_srcTableName" => "hd_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "hd_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "supporterView",
	"m_strTable" => "hd_users",
	"m_srcTableName" => "hd_users"
));

$proto16["m_sql"] = "supporterView";
$proto16["m_srcTableName"] = "hd_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hd_users";
$proto19["m_srcTableName"] = "hd_users";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "username";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "usertype";
$proto19["m_columns"][] = "fullname";
$proto19["m_columns"][] = "active";
$proto19["m_columns"][] = "last_activity";
$proto19["m_columns"][] = "viewing_page";
$proto19["m_columns"][] = "repling_in";
$proto19["m_columns"][] = "supporterView";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "hd_users";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "hd_users";
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
$proto0["m_srcTableName"]="hd_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hd_users = createSqlQuery_hd_users();


	
		;

						

$tdatahd_users[".sqlquery"] = $queryData_hd_users;



include_once(getabspath("include/hd_users_events.php"));
$tdatahd_users[".hasEvents"] = true;

?>