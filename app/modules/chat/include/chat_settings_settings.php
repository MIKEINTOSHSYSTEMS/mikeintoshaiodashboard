<?php
$tdatachat_settings = array();
$tdatachat_settings[".searchableFields"] = array();
$tdatachat_settings[".ShortName"] = "chat_settings";
$tdatachat_settings[".OwnerID"] = "";
$tdatachat_settings[".OriginalTable"] = "chat_settings";


$tdatachat_settings[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdatachat_settings[".originalPagesByType"] = $tdatachat_settings[".pagesByType"];
$tdatachat_settings[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdatachat_settings[".originalPages"] = $tdatachat_settings[".pages"];
$tdatachat_settings[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdatachat_settings[".originalDefaultPages"] = $tdatachat_settings[".defaultPages"];

//	field labels
$fieldLabelschat_settings = array();
$fieldToolTipschat_settings = array();
$pageTitleschat_settings = array();
$placeHolderschat_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschat_settings["English"] = array();
	$fieldToolTipschat_settings["English"] = array();
	$placeHolderschat_settings["English"] = array();
	$pageTitleschat_settings["English"] = array();
	$fieldLabelschat_settings["English"]["id"] = "Id";
	$fieldToolTipschat_settings["English"]["id"] = "";
	$placeHolderschat_settings["English"]["id"] = "";
	$fieldLabelschat_settings["English"]["timeperiod"] = "Refresh time period in seconds";
	$fieldToolTipschat_settings["English"]["timeperiod"] = "";
	$placeHolderschat_settings["English"]["timeperiod"] = "";
	$fieldLabelschat_settings["English"]["findusers"] = "Search and add users on the chat page";
	$fieldToolTipschat_settings["English"]["findusers"] = "";
	$placeHolderschat_settings["English"]["findusers"] = "";
	$fieldLabelschat_settings["English"]["soundpath"] = "Notification Sound";
	$fieldToolTipschat_settings["English"]["soundpath"] = "";
	$placeHolderschat_settings["English"]["soundpath"] = "";
	$fieldLabelschat_settings["English"]["soundenable"] = "Allow sending audio messages";
	$fieldToolTipschat_settings["English"]["soundenable"] = "";
	$placeHolderschat_settings["English"]["soundenable"] = "";
	$fieldLabelschat_settings["English"]["videoenable"] = "Allow create video chat";
	$fieldToolTipschat_settings["English"]["videoenable"] = "";
	$placeHolderschat_settings["English"]["videoenable"] = "";
	$fieldLabelschat_settings["English"]["provider"] = "Select your provider";
	$fieldToolTipschat_settings["English"]["provider"] = "";
	$placeHolderschat_settings["English"]["provider"] = "";
	$fieldLabelschat_settings["English"]["RC_ClientID"] = "Client ID";
	$fieldToolTipschat_settings["English"]["RC_ClientID"] = "";
	$placeHolderschat_settings["English"]["RC_ClientID"] = "";
	$fieldLabelschat_settings["English"]["RC_ClientSecret"] = "Client Secret";
	$fieldToolTipschat_settings["English"]["RC_ClientSecret"] = "";
	$placeHolderschat_settings["English"]["RC_ClientSecret"] = "";
	$fieldLabelschat_settings["English"]["RC_Account"] = "Account";
	$fieldToolTipschat_settings["English"]["RC_Account"] = "";
	$placeHolderschat_settings["English"]["RC_Account"] = "";
	$fieldLabelschat_settings["English"]["RC_Password"] = "Password";
	$fieldToolTipschat_settings["English"]["RC_Password"] = "";
	$placeHolderschat_settings["English"]["RC_Password"] = "";
	$fieldLabelschat_settings["English"]["Z_APIKey"] = "API Key";
	$fieldToolTipschat_settings["English"]["Z_APIKey"] = "";
	$placeHolderschat_settings["English"]["Z_APIKey"] = "";
	$fieldLabelschat_settings["English"]["Z_APISecret"] = "API Secret";
	$fieldToolTipschat_settings["English"]["Z_APISecret"] = "";
	$placeHolderschat_settings["English"]["Z_APISecret"] = "";
	$fieldLabelschat_settings["English"]["saveInCloud"] = "Save video to the cloud";
	$fieldToolTipschat_settings["English"]["saveInCloud"] = "";
	$placeHolderschat_settings["English"]["saveInCloud"] = "";
	$fieldLabelschat_settings["English"]["Z_Token"] = "API Token";
	$fieldToolTipschat_settings["English"]["Z_Token"] = "";
	$placeHolderschat_settings["English"]["Z_Token"] = "";
	$fieldLabelschat_settings["English"]["timezone"] = "Timezone";
	$fieldToolTipschat_settings["English"]["timezone"] = "";
	$placeHolderschat_settings["English"]["timezone"] = "";
	$fieldLabelschat_settings["English"]["RC_APIServerURL"] = "API Server URL";
	$fieldToolTipschat_settings["English"]["RC_APIServerURL"] = "";
	$placeHolderschat_settings["English"]["RC_APIServerURL"] = "";
	$fieldLabelschat_settings["English"]["MS_ClientID"] = "Client ID";
	$fieldToolTipschat_settings["English"]["MS_ClientID"] = "";
	$placeHolderschat_settings["English"]["MS_ClientID"] = "";
	$fieldLabelschat_settings["English"]["MS_ClientSecret"] = "Client Secret";
	$fieldToolTipschat_settings["English"]["MS_ClientSecret"] = "";
	$placeHolderschat_settings["English"]["MS_ClientSecret"] = "";
	$fieldLabelschat_settings["English"]["MS_TenantID"] = "Tenant ID";
	$fieldToolTipschat_settings["English"]["MS_TenantID"] = "";
	$placeHolderschat_settings["English"]["MS_TenantID"] = "";
	$fieldLabelschat_settings["English"]["G_ClientID"] = "Client ID";
	$fieldToolTipschat_settings["English"]["G_ClientID"] = "";
	$placeHolderschat_settings["English"]["G_ClientID"] = "";
	$fieldLabelschat_settings["English"]["G_ClientSecret"] = "Client Secret";
	$fieldToolTipschat_settings["English"]["G_ClientSecret"] = "";
	$placeHolderschat_settings["English"]["G_ClientSecret"] = "";
	$fieldLabelschat_settings["English"]["G_APIKey"] = "API Key";
	$fieldToolTipschat_settings["English"]["G_APIKey"] = "";
	$placeHolderschat_settings["English"]["G_APIKey"] = "";
	$fieldLabelschat_settings["English"]["WB_ClientID"] = "Client ID";
	$fieldToolTipschat_settings["English"]["WB_ClientID"] = "";
	$placeHolderschat_settings["English"]["WB_ClientID"] = "";
	$fieldLabelschat_settings["English"]["WB_ClientSecret"] = "Client Secret";
	$fieldToolTipschat_settings["English"]["WB_ClientSecret"] = "";
	$placeHolderschat_settings["English"]["WB_ClientSecret"] = "";
	$pageTitleschat_settings["English"]["edit"] = "Settings";
	if (count($fieldToolTipschat_settings["English"]))
		$tdatachat_settings[".isUseToolTips"] = true;
}


	$tdatachat_settings[".NCSearch"] = true;



$tdatachat_settings[".shortTableName"] = "chat_settings";
$tdatachat_settings[".nSecOptions"] = 0;

$tdatachat_settings[".mainTableOwnerID"] = "";
$tdatachat_settings[".entityType"] = 0;
$tdatachat_settings[".connId"] = "project_at_localhost";


$tdatachat_settings[".strOriginalTableName"] = "chat_settings";

	



$tdatachat_settings[".showAddInPopup"] = false;

$tdatachat_settings[".showEditInPopup"] = false;

$tdatachat_settings[".showViewInPopup"] = false;

$tdatachat_settings[".listAjax"] = false;
//	temporary
//$tdatachat_settings[".listAjax"] = false;

	$tdatachat_settings[".audit"] = false;

	$tdatachat_settings[".locking"] = false;


$pages = $tdatachat_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachat_settings[".edit"] = true;
	$tdatachat_settings[".afterEditAction"] = 1;
	$tdatachat_settings[".closePopupAfterEdit"] = 1;
	$tdatachat_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachat_settings[".add"] = true;
$tdatachat_settings[".afterAddAction"] = 1;
$tdatachat_settings[".closePopupAfterAdd"] = 1;
$tdatachat_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachat_settings[".list"] = true;
}



$tdatachat_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachat_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachat_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachat_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachat_settings[".printFriendly"] = true;
}



$tdatachat_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachat_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachat_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachat_settings[".isUseAjaxSuggest"] = true;



																							
				
											

$tdatachat_settings[".ajaxCodeSnippetAdded"] = false;

$tdatachat_settings[".buttonsAdded"] = true;

$tdatachat_settings[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachat_settings[".isUseTimeForSearch"] = false;


$tdatachat_settings[".badgeColor"] = "DAA520";


$tdatachat_settings[".allSearchFields"] = array();
$tdatachat_settings[".filterFields"] = array();
$tdatachat_settings[".requiredSearchFields"] = array();

$tdatachat_settings[".googleLikeFields"] = array();
$tdatachat_settings[".googleLikeFields"][] = "id";
$tdatachat_settings[".googleLikeFields"][] = "timeperiod";
$tdatachat_settings[".googleLikeFields"][] = "findusers";
$tdatachat_settings[".googleLikeFields"][] = "soundpath";
$tdatachat_settings[".googleLikeFields"][] = "soundenable";
$tdatachat_settings[".googleLikeFields"][] = "videoenable";
$tdatachat_settings[".googleLikeFields"][] = "provider";
$tdatachat_settings[".googleLikeFields"][] = "RC_ClientID";
$tdatachat_settings[".googleLikeFields"][] = "RC_ClientSecret";
$tdatachat_settings[".googleLikeFields"][] = "RC_Account";
$tdatachat_settings[".googleLikeFields"][] = "RC_Password";
$tdatachat_settings[".googleLikeFields"][] = "Z_APIKey";
$tdatachat_settings[".googleLikeFields"][] = "Z_APISecret";
$tdatachat_settings[".googleLikeFields"][] = "saveInCloud";
$tdatachat_settings[".googleLikeFields"][] = "Z_Token";
$tdatachat_settings[".googleLikeFields"][] = "timezone";
$tdatachat_settings[".googleLikeFields"][] = "RC_APIServerURL";
$tdatachat_settings[".googleLikeFields"][] = "MS_ClientID";
$tdatachat_settings[".googleLikeFields"][] = "MS_ClientSecret";
$tdatachat_settings[".googleLikeFields"][] = "MS_TenantID";
$tdatachat_settings[".googleLikeFields"][] = "G_ClientID";
$tdatachat_settings[".googleLikeFields"][] = "G_ClientSecret";
$tdatachat_settings[".googleLikeFields"][] = "G_APIKey";
$tdatachat_settings[".googleLikeFields"][] = "WB_ClientID";
$tdatachat_settings[".googleLikeFields"][] = "WB_ClientSecret";



$tdatachat_settings[".tableType"] = "list";

$tdatachat_settings[".printerPageOrientation"] = 0;
$tdatachat_settings[".nPrinterPageScale"] = 100;

$tdatachat_settings[".nPrinterSplitRecords"] = 40;

$tdatachat_settings[".geocodingEnabled"] = false;










$tdatachat_settings[".pageSize"] = 20;

$tdatachat_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachat_settings[".strOrderBy"] = $tstrOrderBy;

$tdatachat_settings[".orderindexes"] = array();


$tdatachat_settings[".sqlHead"] = "SELECT id,  timeperiod,  findusers,  soundpath,  soundenable,  videoenable,  provider,  RC_ClientID,  RC_ClientSecret,  RC_Account,  RC_Password,  Z_APIKey,  Z_APISecret,  saveInCloud,  Z_Token,  timezone,  RC_APIServerURL,  MS_ClientID,  MS_ClientSecret,  MS_TenantID,  G_ClientID,  G_ClientSecret,  G_APIKey,  WB_ClientID,  WB_ClientSecret";
$tdatachat_settings[".sqlFrom"] = "FROM chat_settings";
$tdatachat_settings[".sqlWhereExpr"] = "";
$tdatachat_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachat_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachat_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatachat_settings[".highlightSearchResults"] = true;

$tableKeyschat_settings = array();
$tableKeyschat_settings[] = "id";
$tdatachat_settings[".Keys"] = $tableKeyschat_settings;


$tdatachat_settings[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","id");
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


	$tdatachat_settings["id"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "id";
//	timeperiod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "timeperiod";
	$fdata["GoodName"] = "timeperiod";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","timeperiod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "timeperiod";

		$fdata["sourceSingle"] = "timeperiod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeperiod";

	
	
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


	$tdatachat_settings["timeperiod"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "timeperiod";
//	findusers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "findusers";
	$fdata["GoodName"] = "findusers";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","findusers");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "findusers";

		$fdata["sourceSingle"] = "findusers";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "findusers";

	
	
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


	$tdatachat_settings["findusers"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "findusers";
//	soundpath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "soundpath";
	$fdata["GoodName"] = "soundpath";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","soundpath");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "soundpath";

		$fdata["sourceSingle"] = "soundpath";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "soundpath";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "sound";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatachat_settings["soundpath"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "soundpath";
//	soundenable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "soundenable";
	$fdata["GoodName"] = "soundenable";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","soundenable");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "soundenable";

		$fdata["sourceSingle"] = "soundenable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "soundenable";

	
	
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


	$tdatachat_settings["soundenable"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "soundenable";
//	videoenable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "videoenable";
	$fdata["GoodName"] = "videoenable";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","videoenable");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "videoenable";

		$fdata["sourceSingle"] = "videoenable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "videoenable";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "check_video", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdatachat_settings["videoenable"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "videoenable";
//	provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "provider";
	$fdata["GoodName"] = "provider";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider";

		$fdata["sourceSingle"] = "provider";

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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "select_provider", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


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


	$tdatachat_settings["provider"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "provider";
//	RC_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RC_ClientID";
	$fdata["GoodName"] = "RC_ClientID";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","RC_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_ClientID";

		$fdata["sourceSingle"] = "RC_ClientID";

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


	$tdatachat_settings["RC_ClientID"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "RC_ClientID";
//	RC_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RC_ClientSecret";
	$fdata["GoodName"] = "RC_ClientSecret";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","RC_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_ClientSecret";

		$fdata["sourceSingle"] = "RC_ClientSecret";

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


	$tdatachat_settings["RC_ClientSecret"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "RC_ClientSecret";
//	RC_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RC_Account";
	$fdata["GoodName"] = "RC_Account";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","RC_Account");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_Account";

		$fdata["sourceSingle"] = "RC_Account";

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


	$tdatachat_settings["RC_Account"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "RC_Account";
//	RC_Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RC_Password";
	$fdata["GoodName"] = "RC_Password";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","RC_Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_Password";

		$fdata["sourceSingle"] = "RC_Password";

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


	$tdatachat_settings["RC_Password"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "RC_Password";
//	Z_APIKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Z_APIKey";
	$fdata["GoodName"] = "Z_APIKey";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","Z_APIKey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Z_APIKey";

		$fdata["sourceSingle"] = "Z_APIKey";

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


	$tdatachat_settings["Z_APIKey"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "Z_APIKey";
//	Z_APISecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Z_APISecret";
	$fdata["GoodName"] = "Z_APISecret";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","Z_APISecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Z_APISecret";

		$fdata["sourceSingle"] = "Z_APISecret";

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


	$tdatachat_settings["Z_APISecret"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "Z_APISecret";
//	saveInCloud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "saveInCloud";
	$fdata["GoodName"] = "saveInCloud";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","saveInCloud");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "saveInCloud";

		$fdata["sourceSingle"] = "saveInCloud";

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


	$tdatachat_settings["saveInCloud"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "saveInCloud";
//	Z_Token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Z_Token";
	$fdata["GoodName"] = "Z_Token";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","Z_Token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Z_Token";

		$fdata["sourceSingle"] = "Z_Token";

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


	$tdatachat_settings["Z_Token"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "Z_Token";
//	timezone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "timezone";
	$fdata["GoodName"] = "timezone";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","timezone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "timezone";

		$fdata["sourceSingle"] = "timezone";

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
	$edata["LookupTable"] = "chat_timezone";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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


	$tdatachat_settings["timezone"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "timezone";
//	RC_APIServerURL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RC_APIServerURL";
	$fdata["GoodName"] = "RC_APIServerURL";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","RC_APIServerURL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RC_APIServerURL";

		$fdata["sourceSingle"] = "RC_APIServerURL";

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


	$tdatachat_settings["RC_APIServerURL"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "RC_APIServerURL";
//	MS_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "MS_ClientID";
	$fdata["GoodName"] = "MS_ClientID";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","MS_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS_ClientID";

		$fdata["sourceSingle"] = "MS_ClientID";

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


	$tdatachat_settings["MS_ClientID"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "MS_ClientID";
//	MS_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "MS_ClientSecret";
	$fdata["GoodName"] = "MS_ClientSecret";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","MS_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS_ClientSecret";

		$fdata["sourceSingle"] = "MS_ClientSecret";

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


	$tdatachat_settings["MS_ClientSecret"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "MS_ClientSecret";
//	MS_TenantID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "MS_TenantID";
	$fdata["GoodName"] = "MS_TenantID";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","MS_TenantID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MS_TenantID";

		$fdata["sourceSingle"] = "MS_TenantID";

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


	$tdatachat_settings["MS_TenantID"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "MS_TenantID";
//	G_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "G_ClientID";
	$fdata["GoodName"] = "G_ClientID";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","G_ClientID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "G_ClientID";

		$fdata["sourceSingle"] = "G_ClientID";

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


	$tdatachat_settings["G_ClientID"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "G_ClientID";
//	G_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "G_ClientSecret";
	$fdata["GoodName"] = "G_ClientSecret";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","G_ClientSecret");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "G_ClientSecret";

		$fdata["sourceSingle"] = "G_ClientSecret";

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


	$tdatachat_settings["G_ClientSecret"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "G_ClientSecret";
//	G_APIKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "G_APIKey";
	$fdata["GoodName"] = "G_APIKey";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","G_APIKey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "G_APIKey";

		$fdata["sourceSingle"] = "G_APIKey";

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


	$tdatachat_settings["G_APIKey"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "G_APIKey";
//	WB_ClientID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "WB_ClientID";
	$fdata["GoodName"] = "WB_ClientID";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","WB_ClientID");
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


	$tdatachat_settings["WB_ClientID"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "WB_ClientID";
//	WB_ClientSecret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "WB_ClientSecret";
	$fdata["GoodName"] = "WB_ClientSecret";
	$fdata["ownerTable"] = "chat_settings";
	$fdata["Label"] = GetFieldLabel("chat_settings","WB_ClientSecret");
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


	$tdatachat_settings["WB_ClientSecret"] = $fdata;
		$tdatachat_settings[".searchableFields"][] = "WB_ClientSecret";


$tables_data["chat_settings"]=&$tdatachat_settings;
$field_labels["chat_settings"] = &$fieldLabelschat_settings;
$fieldToolTips["chat_settings"] = &$fieldToolTipschat_settings;
$placeHolders["chat_settings"] = &$placeHolderschat_settings;
$page_titles["chat_settings"] = &$pageTitleschat_settings;


changeTextControlsToDate( "chat_settings" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["chat_settings"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["chat_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chat_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  timeperiod,  findusers,  soundpath,  soundenable,  videoenable,  provider,  RC_ClientID,  RC_ClientSecret,  RC_Account,  RC_Password,  Z_APIKey,  Z_APISecret,  saveInCloud,  Z_Token,  timezone,  RC_APIServerURL,  MS_ClientID,  MS_ClientSecret,  MS_TenantID,  G_ClientID,  G_ClientSecret,  G_APIKey,  WB_ClientID,  WB_ClientSecret";
$proto0["m_strFrom"] = "FROM chat_settings";
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
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chat_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "timeperiod",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto8["m_sql"] = "timeperiod";
$proto8["m_srcTableName"] = "chat_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "findusers",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto10["m_sql"] = "findusers";
$proto10["m_srcTableName"] = "chat_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "soundpath",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto12["m_sql"] = "soundpath";
$proto12["m_srcTableName"] = "chat_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "soundenable",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto14["m_sql"] = "soundenable";
$proto14["m_srcTableName"] = "chat_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "videoenable",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto16["m_sql"] = "videoenable";
$proto16["m_srcTableName"] = "chat_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "provider",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto18["m_sql"] = "provider";
$proto18["m_srcTableName"] = "chat_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_ClientID",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto20["m_sql"] = "RC_ClientID";
$proto20["m_srcTableName"] = "chat_settings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_ClientSecret",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto22["m_sql"] = "RC_ClientSecret";
$proto22["m_srcTableName"] = "chat_settings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_Account",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto24["m_sql"] = "RC_Account";
$proto24["m_srcTableName"] = "chat_settings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_Password",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto26["m_sql"] = "RC_Password";
$proto26["m_srcTableName"] = "chat_settings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Z_APIKey",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto28["m_sql"] = "Z_APIKey";
$proto28["m_srcTableName"] = "chat_settings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Z_APISecret",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto30["m_sql"] = "Z_APISecret";
$proto30["m_srcTableName"] = "chat_settings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "saveInCloud",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto32["m_sql"] = "saveInCloud";
$proto32["m_srcTableName"] = "chat_settings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Z_Token",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto34["m_sql"] = "Z_Token";
$proto34["m_srcTableName"] = "chat_settings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "timezone",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto36["m_sql"] = "timezone";
$proto36["m_srcTableName"] = "chat_settings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RC_APIServerURL",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto38["m_sql"] = "RC_APIServerURL";
$proto38["m_srcTableName"] = "chat_settings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "MS_ClientID",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto40["m_sql"] = "MS_ClientID";
$proto40["m_srcTableName"] = "chat_settings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "MS_ClientSecret",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto42["m_sql"] = "MS_ClientSecret";
$proto42["m_srcTableName"] = "chat_settings";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "MS_TenantID",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto44["m_sql"] = "MS_TenantID";
$proto44["m_srcTableName"] = "chat_settings";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "G_ClientID",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto46["m_sql"] = "G_ClientID";
$proto46["m_srcTableName"] = "chat_settings";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "G_ClientSecret",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto48["m_sql"] = "G_ClientSecret";
$proto48["m_srcTableName"] = "chat_settings";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "G_APIKey",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto50["m_sql"] = "G_APIKey";
$proto50["m_srcTableName"] = "chat_settings";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "WB_ClientID",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto52["m_sql"] = "WB_ClientID";
$proto52["m_srcTableName"] = "chat_settings";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "WB_ClientSecret",
	"m_strTable" => "chat_settings",
	"m_srcTableName" => "chat_settings"
));

$proto54["m_sql"] = "WB_ClientSecret";
$proto54["m_srcTableName"] = "chat_settings";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "chat_settings";
$proto57["m_srcTableName"] = "chat_settings";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "timeperiod";
$proto57["m_columns"][] = "findusers";
$proto57["m_columns"][] = "soundpath";
$proto57["m_columns"][] = "soundenable";
$proto57["m_columns"][] = "videoenable";
$proto57["m_columns"][] = "provider";
$proto57["m_columns"][] = "RC_ClientID";
$proto57["m_columns"][] = "RC_ClientSecret";
$proto57["m_columns"][] = "RC_Account";
$proto57["m_columns"][] = "RC_Password";
$proto57["m_columns"][] = "Z_APIKey";
$proto57["m_columns"][] = "Z_APISecret";
$proto57["m_columns"][] = "saveInCloud";
$proto57["m_columns"][] = "Z_Token";
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
$proto56["m_sql"] = "chat_settings";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "chat_settings";
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
$proto0["m_srcTableName"]="chat_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chat_settings = createSqlQuery_chat_settings();


	
		;

																									

$tdatachat_settings[".sqlquery"] = $queryData_chat_settings;



include_once(getabspath("include/chat_settings_events.php"));
$tdatachat_settings[".hasEvents"] = true;

?>