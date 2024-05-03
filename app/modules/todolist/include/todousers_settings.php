<?php
$tdatatodousers = array();
$tdatatodousers[".searchableFields"] = array();
$tdatatodousers[".ShortName"] = "todousers";
$tdatatodousers[".OwnerID"] = "";
$tdatatodousers[".OriginalTable"] = "todousers";


$tdatatodousers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatodousers[".originalPagesByType"] = $tdatatodousers[".pagesByType"];
$tdatatodousers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatodousers[".originalPages"] = $tdatatodousers[".pages"];
$tdatatodousers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatodousers[".originalDefaultPages"] = $tdatatodousers[".defaultPages"];

//	field labels
$fieldLabelstodousers = array();
$fieldToolTipstodousers = array();
$pageTitlestodousers = array();
$placeHolderstodousers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstodousers["English"] = array();
	$fieldToolTipstodousers["English"] = array();
	$placeHolderstodousers["English"] = array();
	$pageTitlestodousers["English"] = array();
	$fieldLabelstodousers["English"]["id"] = "Id";
	$fieldToolTipstodousers["English"]["id"] = "";
	$placeHolderstodousers["English"]["id"] = "";
	$fieldLabelstodousers["English"]["username"] = "Username";
	$fieldToolTipstodousers["English"]["username"] = "";
	$placeHolderstodousers["English"]["username"] = "";
	$fieldLabelstodousers["English"]["password"] = "Password";
	$fieldToolTipstodousers["English"]["password"] = "";
	$placeHolderstodousers["English"]["password"] = "";
	$fieldLabelstodousers["English"]["fullname"] = "Fullname";
	$fieldToolTipstodousers["English"]["fullname"] = "";
	$placeHolderstodousers["English"]["fullname"] = "";
	$fieldLabelstodousers["English"]["avatar"] = "Avatar";
	$fieldToolTipstodousers["English"]["avatar"] = "";
	$placeHolderstodousers["English"]["avatar"] = "";
	$fieldLabelstodousers["English"]["daystoadd"] = "Daystoadd";
	$fieldToolTipstodousers["English"]["daystoadd"] = "";
	$placeHolderstodousers["English"]["daystoadd"] = "";
	$fieldLabelstodousers["English"]["email"] = "Email";
	$fieldToolTipstodousers["English"]["email"] = "";
	$placeHolderstodousers["English"]["email"] = "";
	$fieldLabelstodousers["English"]["reset_token"] = "Reset Token";
	$fieldToolTipstodousers["English"]["reset_token"] = "";
	$placeHolderstodousers["English"]["reset_token"] = "";
	$fieldLabelstodousers["English"]["reset_date"] = "Reset Date";
	$fieldToolTipstodousers["English"]["reset_date"] = "";
	$placeHolderstodousers["English"]["reset_date"] = "";
	if (count($fieldToolTipstodousers["English"]))
		$tdatatodousers[".isUseToolTips"] = true;
}


	$tdatatodousers[".NCSearch"] = true;



$tdatatodousers[".shortTableName"] = "todousers";
$tdatatodousers[".nSecOptions"] = 0;

$tdatatodousers[".mainTableOwnerID"] = "";
$tdatatodousers[".entityType"] = 0;
$tdatatodousers[".connId"] = "project_at_localhost";


$tdatatodousers[".strOriginalTableName"] = "todousers";

	



$tdatatodousers[".showAddInPopup"] = false;

$tdatatodousers[".showEditInPopup"] = false;

$tdatatodousers[".showViewInPopup"] = false;

$tdatatodousers[".listAjax"] = false;
//	temporary
//$tdatatodousers[".listAjax"] = false;

	$tdatatodousers[".audit"] = false;

	$tdatatodousers[".locking"] = false;


$pages = $tdatatodousers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatodousers[".edit"] = true;
	$tdatatodousers[".afterEditAction"] = 1;
	$tdatatodousers[".closePopupAfterEdit"] = 1;
	$tdatatodousers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatodousers[".add"] = true;
$tdatatodousers[".afterAddAction"] = 1;
$tdatatodousers[".closePopupAfterAdd"] = 1;
$tdatatodousers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatodousers[".list"] = true;
}



$tdatatodousers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatodousers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatodousers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatodousers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatodousers[".printFriendly"] = true;
}



$tdatatodousers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatodousers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatodousers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatodousers[".isUseAjaxSuggest"] = true;



																								

$tdatatodousers[".ajaxCodeSnippetAdded"] = false;

$tdatatodousers[".buttonsAdded"] = false;

$tdatatodousers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatodousers[".isUseTimeForSearch"] = false;


$tdatatodousers[".badgeColor"] = "3CB371";


$tdatatodousers[".allSearchFields"] = array();
$tdatatodousers[".filterFields"] = array();
$tdatatodousers[".requiredSearchFields"] = array();

$tdatatodousers[".googleLikeFields"] = array();
$tdatatodousers[".googleLikeFields"][] = "id";
$tdatatodousers[".googleLikeFields"][] = "username";
$tdatatodousers[".googleLikeFields"][] = "password";
$tdatatodousers[".googleLikeFields"][] = "fullname";
$tdatatodousers[".googleLikeFields"][] = "avatar";
$tdatatodousers[".googleLikeFields"][] = "daystoadd";



$tdatatodousers[".tableType"] = "list";

$tdatatodousers[".printerPageOrientation"] = 0;
$tdatatodousers[".nPrinterPageScale"] = 100;

$tdatatodousers[".nPrinterSplitRecords"] = 40;

$tdatatodousers[".geocodingEnabled"] = false;










$tdatatodousers[".pageSize"] = 20;

$tdatatodousers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatodousers[".strOrderBy"] = $tstrOrderBy;

$tdatatodousers[".orderindexes"] = array();


$tdatatodousers[".sqlHead"] = "SELECT id,  username,  password,  fullname,  avatar,  daystoadd,  email,  reset_token,  reset_date";
$tdatatodousers[".sqlFrom"] = "FROM todousers";
$tdatatodousers[".sqlWhereExpr"] = "";
$tdatatodousers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatodousers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatodousers[".arrGroupsPerPage"] = $arrGPP;

$tdatatodousers[".highlightSearchResults"] = true;

$tableKeystodousers = array();
$tableKeystodousers[] = "id";
$tdatatodousers[".Keys"] = $tableKeystodousers;


$tdatatodousers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","id");
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


	$tdatatodousers["id"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","username");
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


	$tdatatodousers["username"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","password");
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


	$tdatatodousers["password"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "password";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","fullname");
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


	$tdatatodousers["fullname"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "fullname";
//	avatar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "avatar";
	$fdata["GoodName"] = "avatar";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","avatar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "avatar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avatar";

	
	
				$fdata["UploadFolder"] = "files";

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


	$tdatatodousers["avatar"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "avatar";
//	daystoadd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "daystoadd";
	$fdata["GoodName"] = "daystoadd";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","daystoadd");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "daystoadd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "daystoadd";

	
	
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


	$tdatatodousers["daystoadd"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "daystoadd";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","email");
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


	$tdatatodousers["email"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "email";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","reset_token");
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


	$tdatatodousers["reset_token"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "todousers";
	$fdata["Label"] = GetFieldLabel("todousers","reset_date");
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


	$tdatatodousers["reset_date"] = $fdata;
		$tdatatodousers[".searchableFields"][] = "reset_date";


$tables_data["todousers"]=&$tdatatodousers;
$field_labels["todousers"] = &$fieldLabelstodousers;
$fieldToolTips["todousers"] = &$fieldToolTipstodousers;
$placeHolders["todousers"] = &$placeHolderstodousers;
$page_titles["todousers"] = &$pageTitlestodousers;


changeTextControlsToDate( "todousers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["todousers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["todousers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_todousers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  username,  password,  fullname,  avatar,  daystoadd,  email,  reset_token,  reset_date";
$proto0["m_strFrom"] = "FROM todousers";
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
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "todousers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "todousers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "todousers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto12["m_sql"] = "fullname";
$proto12["m_srcTableName"] = "todousers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "avatar",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto14["m_sql"] = "avatar";
$proto14["m_srcTableName"] = "todousers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "daystoadd",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto16["m_sql"] = "daystoadd";
$proto16["m_srcTableName"] = "todousers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "todousers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto20["m_sql"] = "reset_token";
$proto20["m_srcTableName"] = "todousers";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "todousers",
	"m_srcTableName" => "todousers"
));

$proto22["m_sql"] = "reset_date";
$proto22["m_srcTableName"] = "todousers";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "todousers";
$proto25["m_srcTableName"] = "todousers";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "username";
$proto25["m_columns"][] = "password";
$proto25["m_columns"][] = "fullname";
$proto25["m_columns"][] = "avatar";
$proto25["m_columns"][] = "daystoadd";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "reset_token";
$proto25["m_columns"][] = "reset_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "todousers";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "todousers";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="todousers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_todousers = createSqlQuery_todousers();


	
		;

									

$tdatatodousers[".sqlquery"] = $queryData_todousers;



$tdatatodousers[".hasEvents"] = false;

?>