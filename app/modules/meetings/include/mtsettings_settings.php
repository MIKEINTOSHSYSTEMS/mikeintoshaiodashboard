<?php
$tdatamtsettings = array();
$tdatamtsettings[".searchableFields"] = array();
$tdatamtsettings[".ShortName"] = "mtsettings";
$tdatamtsettings[".OwnerID"] = "";
$tdatamtsettings[".OriginalTable"] = "mtsettings";


$tdatamtsettings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatamtsettings[".originalPagesByType"] = $tdatamtsettings[".pagesByType"];
$tdatamtsettings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatamtsettings[".originalPages"] = $tdatamtsettings[".pages"];
$tdatamtsettings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatamtsettings[".originalDefaultPages"] = $tdatamtsettings[".defaultPages"];

//	field labels
$fieldLabelsmtsettings = array();
$fieldToolTipsmtsettings = array();
$pageTitlesmtsettings = array();
$placeHoldersmtsettings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmtsettings["English"] = array();
	$fieldToolTipsmtsettings["English"] = array();
	$placeHoldersmtsettings["English"] = array();
	$pageTitlesmtsettings["English"] = array();
	$fieldLabelsmtsettings["English"]["id"] = "Id";
	$fieldToolTipsmtsettings["English"]["id"] = "";
	$placeHoldersmtsettings["English"]["id"] = "";
	$fieldLabelsmtsettings["English"]["provider"] = "Provider name";
	$fieldToolTipsmtsettings["English"]["provider"] = "";
	$placeHoldersmtsettings["English"]["provider"] = "";
	$fieldLabelsmtsettings["English"]["RC_ClientID"] = "Client ID";
	$fieldToolTipsmtsettings["English"]["RC_ClientID"] = "";
	$placeHoldersmtsettings["English"]["RC_ClientID"] = "";
	$fieldLabelsmtsettings["English"]["RC_ClientSecret"] = "Client Secret";
	$fieldToolTipsmtsettings["English"]["RC_ClientSecret"] = "";
	$placeHoldersmtsettings["English"]["RC_ClientSecret"] = "";
	$fieldLabelsmtsettings["English"]["RC_Account"] = "Account";
	$fieldToolTipsmtsettings["English"]["RC_Account"] = "";
	$placeHoldersmtsettings["English"]["RC_Account"] = "";
	$fieldLabelsmtsettings["English"]["RC_Password"] = "Password";
	$fieldToolTipsmtsettings["English"]["RC_Password"] = "";
	$placeHoldersmtsettings["English"]["RC_Password"] = "";
	$fieldLabelsmtsettings["English"]["Z_APIKey"] = "API Key";
	$fieldToolTipsmtsettings["English"]["Z_APIKey"] = "";
	$placeHoldersmtsettings["English"]["Z_APIKey"] = "";
	$fieldLabelsmtsettings["English"]["Z_APISecret"] = "API Secret";
	$fieldToolTipsmtsettings["English"]["Z_APISecret"] = "";
	$placeHoldersmtsettings["English"]["Z_APISecret"] = "";
	$fieldLabelsmtsettings["English"]["saveInCloud"] = "Save video to the cloud";
	$fieldToolTipsmtsettings["English"]["saveInCloud"] = "";
	$placeHoldersmtsettings["English"]["saveInCloud"] = "";
	$fieldLabelsmtsettings["English"]["userstable"] = "Table name";
	$fieldToolTipsmtsettings["English"]["userstable"] = "";
	$placeHoldersmtsettings["English"]["userstable"] = "";
	$fieldLabelsmtsettings["English"]["emailfield"] = "Email field";
	$fieldToolTipsmtsettings["English"]["emailfield"] = "";
	$placeHoldersmtsettings["English"]["emailfield"] = "";
	$fieldLabelsmtsettings["English"]["phonefield"] = "Phone field";
	$fieldToolTipsmtsettings["English"]["phonefield"] = "";
	$placeHoldersmtsettings["English"]["phonefield"] = "";
	$fieldLabelsmtsettings["English"]["namefield"] = "Name field";
	$fieldToolTipsmtsettings["English"]["namefield"] = "";
	$placeHoldersmtsettings["English"]["namefield"] = "";
	$fieldLabelsmtsettings["English"]["Z_Token"] = "API Token";
	$fieldToolTipsmtsettings["English"]["Z_Token"] = "";
	$placeHoldersmtsettings["English"]["Z_Token"] = "";
	$fieldLabelsmtsettings["English"]["idfield"] = "ID field";
	$fieldToolTipsmtsettings["English"]["idfield"] = "";
	$placeHoldersmtsettings["English"]["idfield"] = "";
	$fieldLabelsmtsettings["English"]["timezone"] = "Timezone";
	$fieldToolTipsmtsettings["English"]["timezone"] = "";
	$placeHoldersmtsettings["English"]["timezone"] = "";
	$fieldLabelsmtsettings["English"]["RC_APIServerURL"] = "API Server URL";
	$fieldToolTipsmtsettings["English"]["RC_APIServerURL"] = "";
	$placeHoldersmtsettings["English"]["RC_APIServerURL"] = "";
	$fieldLabelsmtsettings["English"]["MS_ClientID"] = "Client ID";
	$fieldToolTipsmtsettings["English"]["MS_ClientID"] = "";
	$placeHoldersmtsettings["English"]["MS_ClientID"] = "";
	$fieldLabelsmtsettings["English"]["MS_ClientSecret"] = "Client Secret";
	$fieldToolTipsmtsettings["English"]["MS_ClientSecret"] = "";
	$placeHoldersmtsettings["English"]["MS_ClientSecret"] = "";
	$fieldLabelsmtsettings["English"]["MS_TenantID"] = "Tenant ID";
	$fieldToolTipsmtsettings["English"]["MS_TenantID"] = "";
	$placeHoldersmtsettings["English"]["MS_TenantID"] = "";
	$fieldLabelsmtsettings["English"]["G_ClientID"] = "Client ID";
	$fieldToolTipsmtsettings["English"]["G_ClientID"] = "";
	$placeHoldersmtsettings["English"]["G_ClientID"] = "";
	$fieldLabelsmtsettings["English"]["G_ClientSecret"] = "Client Secret";
	$fieldToolTipsmtsettings["English"]["G_ClientSecret"] = "";
	$placeHoldersmtsettings["English"]["G_ClientSecret"] = "";
	$fieldLabelsmtsettings["English"]["G_APIKey"] = "API Key";
	$fieldToolTipsmtsettings["English"]["G_APIKey"] = "";
	$placeHoldersmtsettings["English"]["G_APIKey"] = "";
	$fieldLabelsmtsettings["English"]["WB_ClientSecret"] = "Client Secret";
	$fieldToolTipsmtsettings["English"]["WB_ClientSecret"] = "";
	$placeHoldersmtsettings["English"]["WB_ClientSecret"] = "";
	$fieldLabelsmtsettings["English"]["WB_ClientID"] = "Client ID";
	$fieldToolTipsmtsettings["English"]["WB_ClientID"] = "";
	$placeHoldersmtsettings["English"]["WB_ClientID"] = "";
	$pageTitlesmtsettings["English"]["edit"] = "Settings";
	if (count($fieldToolTipsmtsettings["English"]))
		$tdatamtsettings[".isUseToolTips"] = true;
}


	$tdatamtsettings[".NCSearch"] = true;



$tdatamtsettings[".shortTableName"] = "mtsettings";
$tdatamtsettings[".nSecOptions"] = 0;

$tdatamtsettings[".mainTableOwnerID"] = "";
$tdatamtsettings[".entityType"] = 0;
$tdatamtsettings[".connId"] = "project_at_localhost";


$tdatamtsettings[".strOriginalTableName"] = "mtsettings";

	



$tdatamtsettings[".showAddInPopup"] = false;

$tdatamtsettings[".showEditInPopup"] = false;

$tdatamtsettings[".showViewInPopup"] = false;

$tdatamtsettings[".listAjax"] = false;
//	temporary
//$tdatamtsettings[".listAjax"] = false;

	$tdatamtsettings[".audit"] = false;

	$tdatamtsettings[".locking"] = false;


$pages = $tdatamtsettings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamtsettings[".edit"] = true;
	$tdatamtsettings[".afterEditAction"] = 1;
	$tdatamtsettings[".closePopupAfterEdit"] = 1;
	$tdatamtsettings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamtsettings[".add"] = true;
$tdatamtsettings[".afterAddAction"] = 1;
$tdatamtsettings[".closePopupAfterAdd"] = 1;
$tdatamtsettings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamtsettings[".list"] = true;
}



$tdatamtsettings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamtsettings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamtsettings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamtsettings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamtsettings[".printFriendly"] = true;
}



$tdatamtsettings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamtsettings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamtsettings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamtsettings[".isUseAjaxSuggest"] = true;



																								

$tdatamtsettings[".ajaxCodeSnippetAdded"] = false;

$tdatamtsettings[".buttonsAdded"] = false;

$tdatamtsettings[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamtsettings[".isUseTimeForSearch"] = false;


$tdatamtsettings[".badgeColor"] = "2F4F4F";


$tdatamtsettings[".allSearchFields"] = array();
$tdatamtsettings[".filterFields"] = array();
$tdatamtsettings[".requiredSearchFields"] = array();

$tdatamtsettings[".googleLikeFields"] = array();
$tdatamtsettings[".googleLikeFields"][] = "id";
$tdatamtsettings[".googleLikeFields"][] = "provider";
$tdatamtsettings[".googleLikeFields"][] = "RC_ClientID";
$tdatamtsettings[".googleLikeFields"][] = "RC_ClientSecret";
$tdatamtsettings[".googleLikeFields"][] = "RC_Account";
$tdatamtsettings[".googleLikeFields"][] = "RC_Password";
$tdatamtsettings[".googleLikeFields"][] = "Z_APIKey";
$tdatamtsettings[".googleLikeFields"][] = "Z_APISecret";
$tdatamtsettings[".googleLikeFields"][] = "saveInCloud";
$tdatamtsettings[".googleLikeFields"][] = "userstable";
$tdatamtsettings[".googleLikeFields"][] = "emailfield";
$tdatamtsettings[".googleLikeFields"][] = "phonefield";
$tdatamtsettings[".googleLikeFields"][] = "namefield";
$tdatamtsettings[".googleLikeFields"][] = "Z_Token";
$tdatamtsettings[".googleLikeFields"][] = "idfield";
$tdatamtsettings[".googleLikeFields"][] = "timezone";
$tdatamtsettings[".googleLikeFields"][] = "RC_APIServerURL";
$tdatamtsettings[".googleLikeFields"][] = "MS_ClientID";
$tdatamtsettings[".googleLikeFields"][] = "MS_ClientSecret";
$tdatamtsettings[".googleLikeFields"][] = "MS_TenantID";
$tdatamtsettings[".googleLikeFields"][] = "G_ClientID";
$tdatamtsettings[".googleLikeFields"][] = "G_ClientSecret";
$tdatamtsettings[".googleLikeFields"][] = "G_APIKey";
$tdatamtsettings[".googleLikeFields"][] = "WB_ClientID";
$tdatamtsettings[".googleLikeFields"][] = "WB_ClientSecret";



$tdatamtsettings[".tableType"] = "list";

$tdatamtsettings[".printerPageOrientation"] = 0;
$tdatamtsettings[".nPrinterPageScale"] = 100;

$tdatamtsettings[".nPrinterSplitRecords"] = 40;

$tdatamtsettings[".geocodingEnabled"] = false;










$tdatamtsettings[".pageSize"] = 20;




$tstrOrderBy = "";
$tdatamtsettings[".strOrderBy"] = $tstrOrderBy;

$tdatamtsettings[".orderindexes"] = array();


$tdatamtsettings[".sqlHead"] = "SELECT id,  provider,  RC_ClientID,  RC_ClientSecret,  RC_Account,  RC_Password,  Z_APIKey,  Z_APISecret,  saveInCloud,  userstable,  emailfield,  phonefield,  namefield,  Z_Token,  idfield,  timezone,  RC_APIServerURL,  MS_ClientID,  MS_ClientSecret,  MS_TenantID,  G_ClientID,  G_ClientSecret,  G_APIKey,  WB_ClientID,  WB_ClientSecret";
$tdatamtsettings[".sqlFrom"] = "FROM mtsettings";
$tdatamtsettings[".sqlWhereExpr"] = "";
$tdatamtsettings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamtsettings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamtsettings[".arrGroupsPerPage"] = $arrGPP;

$tdatamtsettings[".highlightSearchResults"] = true;

$tableKeysmtsettings = array();
$tableKeysmtsettings[] = "id";
$tdatamtsettings[".Keys"] = $tableKeysmtsettings;


$tdatamtsettings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","id");
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


	$tdatamtsettings["id"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "id";
//	provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "provider";
	$fdata["GoodName"] = "provider";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provider";

	
	
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
	$edata["LookupValues"][] = "Zoom";
	$edata["LookupValues"][] = "RingCentral";
	$edata["LookupValues"][] = "Google Meet";
	$edata["LookupValues"][] = "Microsoft Graph";
	$edata["LookupValues"][] = "WEBEX";

	
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


	$tdatamtsettings["provider"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "provider";
//	RC_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RC_ClientID";
	$fdata["GoodName"] = "RC_ClientID";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","RC_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_ClientID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RC_ClientID";

	
	
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


	$tdatamtsettings["RC_ClientID"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "RC_ClientID";
//	RC_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RC_ClientSecret";
	$fdata["GoodName"] = "RC_ClientSecret";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","RC_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_ClientSecret";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RC_ClientSecret";

	
	
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


	$tdatamtsettings["RC_ClientSecret"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "RC_ClientSecret";
//	RC_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RC_Account";
	$fdata["GoodName"] = "RC_Account";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","RC_Account");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_Account";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RC_Account";

	
	
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


	$tdatamtsettings["RC_Account"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "RC_Account";
//	RC_Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RC_Password";
	$fdata["GoodName"] = "RC_Password";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","RC_Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_Password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RC_Password";

	
	
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


	$tdatamtsettings["RC_Password"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "RC_Password";
//	Z_APIKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Z_APIKey";
	$fdata["GoodName"] = "Z_APIKey";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","Z_APIKey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Z_APIKey";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Z_APIKey";

	
	
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


	$tdatamtsettings["Z_APIKey"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "Z_APIKey";
//	Z_APISecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Z_APISecret";
	$fdata["GoodName"] = "Z_APISecret";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","Z_APISecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Z_APISecret";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Z_APISecret";

	
	
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


	$tdatamtsettings["Z_APISecret"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "Z_APISecret";
//	saveInCloud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "saveInCloud";
	$fdata["GoodName"] = "saveInCloud";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","saveInCloud");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "saveInCloud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saveInCloud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatamtsettings["saveInCloud"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "saveInCloud";
//	userstable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "userstable";
	$fdata["GoodName"] = "userstable";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","userstable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userstable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userstable";

	
	
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


	$tdatamtsettings["userstable"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "userstable";
//	emailfield
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "emailfield";
	$fdata["GoodName"] = "emailfield";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","emailfield");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "emailfield";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emailfield";

	
	
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


	$tdatamtsettings["emailfield"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "emailfield";
//	phonefield
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phonefield";
	$fdata["GoodName"] = "phonefield";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","phonefield");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phonefield";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonefield";

	
	
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


	$tdatamtsettings["phonefield"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "phonefield";
//	namefield
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "namefield";
	$fdata["GoodName"] = "namefield";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","namefield");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "namefield";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "namefield";

	
	
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


	$tdatamtsettings["namefield"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "namefield";
//	Z_Token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Z_Token";
	$fdata["GoodName"] = "Z_Token";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","Z_Token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Z_Token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Z_Token";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatamtsettings["Z_Token"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "Z_Token";
//	idfield
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "idfield";
	$fdata["GoodName"] = "idfield";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","idfield");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "idfield";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idfield";

	
	
			
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


	$tdatamtsettings["idfield"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "idfield";
//	timezone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "timezone";
	$fdata["GoodName"] = "timezone";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","timezone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "timezone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timezone";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mttimezone";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
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


	$tdatamtsettings["timezone"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "timezone";
//	RC_APIServerURL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RC_APIServerURL";
	$fdata["GoodName"] = "RC_APIServerURL";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","RC_APIServerURL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_APIServerURL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RC_APIServerURL";

	
	
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


	$tdatamtsettings["RC_APIServerURL"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "RC_APIServerURL";
//	MS_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "MS_ClientID";
	$fdata["GoodName"] = "MS_ClientID";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","MS_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS_ClientID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MS_ClientID";

	
	
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


	$tdatamtsettings["MS_ClientID"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "MS_ClientID";
//	MS_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "MS_ClientSecret";
	$fdata["GoodName"] = "MS_ClientSecret";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","MS_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS_ClientSecret";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MS_ClientSecret";

	
	
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


	$tdatamtsettings["MS_ClientSecret"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "MS_ClientSecret";
//	MS_TenantID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "MS_TenantID";
	$fdata["GoodName"] = "MS_TenantID";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","MS_TenantID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS_TenantID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MS_TenantID";

	
	
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


	$tdatamtsettings["MS_TenantID"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "MS_TenantID";
//	G_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "G_ClientID";
	$fdata["GoodName"] = "G_ClientID";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","G_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "G_ClientID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "G_ClientID";

	
	
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


	$tdatamtsettings["G_ClientID"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "G_ClientID";
//	G_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "G_ClientSecret";
	$fdata["GoodName"] = "G_ClientSecret";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","G_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "G_ClientSecret";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "G_ClientSecret";

	
	
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


	$tdatamtsettings["G_ClientSecret"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "G_ClientSecret";
//	G_APIKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "G_APIKey";
	$fdata["GoodName"] = "G_APIKey";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","G_APIKey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "G_APIKey";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "G_APIKey";

	
	
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


	$tdatamtsettings["G_APIKey"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "G_APIKey";
//	WB_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "WB_ClientID";
	$fdata["GoodName"] = "WB_ClientID";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","WB_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "WB_ClientID";

		$fdata["sourceSingle"] = "WB_ClientID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WB_ClientID";

	
	
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


	$tdatamtsettings["WB_ClientID"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "WB_ClientID";
//	WB_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "WB_ClientSecret";
	$fdata["GoodName"] = "WB_ClientSecret";
	$fdata["ownerTable"] = "mtsettings";
	$fdata["Label"] = GetFieldLabel("mtsettings","WB_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "WB_ClientSecret";

		$fdata["sourceSingle"] = "WB_ClientSecret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WB_ClientSecret";

	
	
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


	$tdatamtsettings["WB_ClientSecret"] = $fdata;
		$tdatamtsettings[".searchableFields"][] = "WB_ClientSecret";


$tables_data["mtsettings"]=&$tdatamtsettings;
$field_labels["mtsettings"] = &$fieldLabelsmtsettings;
$fieldToolTips["mtsettings"] = &$fieldToolTipsmtsettings;
$placeHolders["mtsettings"] = &$placeHoldersmtsettings;
$page_titles["mtsettings"] = &$pageTitlesmtsettings;


changeTextControlsToDate( "mtsettings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mtsettings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mtsettings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mtsettings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  provider,  RC_ClientID,  RC_ClientSecret,  RC_Account,  RC_Password,  Z_APIKey,  Z_APISecret,  saveInCloud,  userstable,  emailfield,  phonefield,  namefield,  Z_Token,  idfield,  timezone,  RC_APIServerURL,  MS_ClientID,  MS_ClientSecret,  MS_TenantID,  G_ClientID,  G_ClientSecret,  G_APIKey,  WB_ClientID,  WB_ClientSecret";
$proto0["m_strFrom"] = "FROM mtsettings";
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
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mtsettings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "provider",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto8["m_sql"] = "provider";
$proto8["m_srcTableName"] = "mtsettings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_ClientID",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto10["m_sql"] = "RC_ClientID";
$proto10["m_srcTableName"] = "mtsettings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_ClientSecret",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto12["m_sql"] = "RC_ClientSecret";
$proto12["m_srcTableName"] = "mtsettings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_Account",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto14["m_sql"] = "RC_Account";
$proto14["m_srcTableName"] = "mtsettings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_Password",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto16["m_sql"] = "RC_Password";
$proto16["m_srcTableName"] = "mtsettings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Z_APIKey",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto18["m_sql"] = "Z_APIKey";
$proto18["m_srcTableName"] = "mtsettings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Z_APISecret",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto20["m_sql"] = "Z_APISecret";
$proto20["m_srcTableName"] = "mtsettings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "saveInCloud",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto22["m_sql"] = "saveInCloud";
$proto22["m_srcTableName"] = "mtsettings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "userstable",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto24["m_sql"] = "userstable";
$proto24["m_srcTableName"] = "mtsettings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "emailfield",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto26["m_sql"] = "emailfield";
$proto26["m_srcTableName"] = "mtsettings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "phonefield",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto28["m_sql"] = "phonefield";
$proto28["m_srcTableName"] = "mtsettings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "namefield",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto30["m_sql"] = "namefield";
$proto30["m_srcTableName"] = "mtsettings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Z_Token",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto32["m_sql"] = "Z_Token";
$proto32["m_srcTableName"] = "mtsettings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "idfield",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto34["m_sql"] = "idfield";
$proto34["m_srcTableName"] = "mtsettings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "timezone",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto36["m_sql"] = "timezone";
$proto36["m_srcTableName"] = "mtsettings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_APIServerURL",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto38["m_sql"] = "RC_APIServerURL";
$proto38["m_srcTableName"] = "mtsettings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "MS_ClientID",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto40["m_sql"] = "MS_ClientID";
$proto40["m_srcTableName"] = "mtsettings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "MS_ClientSecret",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto42["m_sql"] = "MS_ClientSecret";
$proto42["m_srcTableName"] = "mtsettings";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "MS_TenantID",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto44["m_sql"] = "MS_TenantID";
$proto44["m_srcTableName"] = "mtsettings";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "G_ClientID",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto46["m_sql"] = "G_ClientID";
$proto46["m_srcTableName"] = "mtsettings";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "G_ClientSecret",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto48["m_sql"] = "G_ClientSecret";
$proto48["m_srcTableName"] = "mtsettings";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "G_APIKey",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto50["m_sql"] = "G_APIKey";
$proto50["m_srcTableName"] = "mtsettings";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "WB_ClientID",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto52["m_sql"] = "WB_ClientID";
$proto52["m_srcTableName"] = "mtsettings";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "WB_ClientSecret",
	"m_strTable" => "mtsettings",
	"m_srcTableName" => "mtsettings"
));

$proto54["m_sql"] = "WB_ClientSecret";
$proto54["m_srcTableName"] = "mtsettings";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "mtsettings";
$proto57["m_srcTableName"] = "mtsettings";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "provider";
$proto57["m_columns"][] = "RC_ClientID";
$proto57["m_columns"][] = "RC_ClientSecret";
$proto57["m_columns"][] = "RC_Account";
$proto57["m_columns"][] = "RC_Password";
$proto57["m_columns"][] = "Z_APIKey";
$proto57["m_columns"][] = "Z_APISecret";
$proto57["m_columns"][] = "saveInCloud";
$proto57["m_columns"][] = "userstable";
$proto57["m_columns"][] = "emailfield";
$proto57["m_columns"][] = "phonefield";
$proto57["m_columns"][] = "namefield";
$proto57["m_columns"][] = "Z_Token";
$proto57["m_columns"][] = "idfield";
$proto57["m_columns"][] = "timezone";
$proto57["m_columns"][] = "RC_APIServerURL";
$proto57["m_columns"][] = "MS_ClientID";
$proto57["m_columns"][] = "MS_ClientSecret";
$proto57["m_columns"][] = "MS_TenantID";
$proto57["m_columns"][] = "G_ClientID";
$proto57["m_columns"][] = "G_ClientSecret";
$proto57["m_columns"][] = "G_APIKey";
$proto57["m_columns"][] = "WB_ClientID";
$proto57["m_columns"][] = "WB_ClientSecret";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "mtsettings";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "mtsettings";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mtsettings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mtsettings = createSqlQuery_mtsettings();


	
		;

																									

$tdatamtsettings[".sqlquery"] = $queryData_mtsettings;



include_once(getabspath("include/mtsettings_events.php"));
$tdatamtsettings[".hasEvents"] = true;

?>