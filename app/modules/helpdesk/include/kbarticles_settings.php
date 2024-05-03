<?php
$tdatakbarticles = array();
$tdatakbarticles[".searchableFields"] = array();
$tdatakbarticles[".ShortName"] = "kbarticles";
$tdatakbarticles[".OwnerID"] = "";
$tdatakbarticles[".OriginalTable"] = "kbarticles";


$tdatakbarticles[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakbarticles[".originalPagesByType"] = $tdatakbarticles[".pagesByType"];
$tdatakbarticles[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakbarticles[".originalPages"] = $tdatakbarticles[".pages"];
$tdatakbarticles[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakbarticles[".originalDefaultPages"] = $tdatakbarticles[".defaultPages"];

//	field labels
$fieldLabelskbarticles = array();
$fieldToolTipskbarticles = array();
$pageTitleskbarticles = array();
$placeHolderskbarticles = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskbarticles["English"] = array();
	$fieldToolTipskbarticles["English"] = array();
	$placeHolderskbarticles["English"] = array();
	$pageTitleskbarticles["English"] = array();
	$fieldLabelskbarticles["English"]["approved"] = "Approved";
	$fieldToolTipskbarticles["English"]["approved"] = "";
	$placeHolderskbarticles["English"]["approved"] = "";
	$fieldLabelskbarticles["English"]["ArticleID"] = "Article ID";
	$fieldToolTipskbarticles["English"]["ArticleID"] = "";
	$placeHolderskbarticles["English"]["ArticleID"] = "";
	$fieldLabelskbarticles["English"]["Category"] = "Category";
	$fieldToolTipskbarticles["English"]["Category"] = "";
	$placeHolderskbarticles["English"]["Category"] = "";
	$fieldLabelskbarticles["English"]["DateCreated"] = "Date Created";
	$fieldToolTipskbarticles["English"]["DateCreated"] = "";
	$placeHolderskbarticles["English"]["DateCreated"] = "";
	$fieldLabelskbarticles["English"]["Problem"] = "Problem";
	$fieldToolTipskbarticles["English"]["Problem"] = "";
	$placeHolderskbarticles["English"]["Problem"] = "";
	$fieldLabelskbarticles["English"]["Solution"] = "Solution";
	$fieldToolTipskbarticles["English"]["Solution"] = "";
	$placeHolderskbarticles["English"]["Solution"] = "";
	$fieldLabelskbarticles["English"]["Title"] = "Title";
	$fieldToolTipskbarticles["English"]["Title"] = "";
	$placeHolderskbarticles["English"]["Title"] = "";
	$fieldLabelskbarticles["English"]["Views"] = "Views";
	$fieldToolTipskbarticles["English"]["Views"] = "";
	$placeHolderskbarticles["English"]["Views"] = "";
	$fieldLabelskbarticles["English"]["ArticleID2"] = "Article ID2";
	$fieldToolTipskbarticles["English"]["ArticleID2"] = "";
	$placeHolderskbarticles["English"]["ArticleID2"] = "";
	$fieldLabelskbarticles["English"]["ArticleIDedit"] = "Article IDedit";
	$fieldToolTipskbarticles["English"]["ArticleIDedit"] = "";
	$placeHolderskbarticles["English"]["ArticleIDedit"] = "";
	$fieldLabelskbarticles["English"]["keyworlds"] = "Keyworlds (space - delimited)";
	$fieldToolTipskbarticles["English"]["keyworlds"] = "";
	$placeHolderskbarticles["English"]["keyworlds"] = "";
	if (count($fieldToolTipskbarticles["English"]))
		$tdatakbarticles[".isUseToolTips"] = true;
}


	$tdatakbarticles[".NCSearch"] = true;



$tdatakbarticles[".shortTableName"] = "kbarticles";
$tdatakbarticles[".nSecOptions"] = 0;

$tdatakbarticles[".mainTableOwnerID"] = "";
$tdatakbarticles[".entityType"] = 0;
$tdatakbarticles[".connId"] = "project_at_localhost";


$tdatakbarticles[".strOriginalTableName"] = "kbarticles";

	



$tdatakbarticles[".showAddInPopup"] = false;

$tdatakbarticles[".showEditInPopup"] = false;

$tdatakbarticles[".showViewInPopup"] = false;

$tdatakbarticles[".listAjax"] = false;
//	temporary
//$tdatakbarticles[".listAjax"] = false;

	$tdatakbarticles[".audit"] = false;

	$tdatakbarticles[".locking"] = false;


$pages = $tdatakbarticles[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakbarticles[".edit"] = true;
	$tdatakbarticles[".afterEditAction"] = 1;
	$tdatakbarticles[".closePopupAfterEdit"] = 1;
	$tdatakbarticles[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakbarticles[".add"] = true;
$tdatakbarticles[".afterAddAction"] = 1;
$tdatakbarticles[".closePopupAfterAdd"] = 1;
$tdatakbarticles[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakbarticles[".list"] = true;
}



$tdatakbarticles[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakbarticles[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakbarticles[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakbarticles[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakbarticles[".printFriendly"] = true;
}



$tdatakbarticles[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakbarticles[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakbarticles[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakbarticles[".isUseAjaxSuggest"] = true;



																																													

$tdatakbarticles[".ajaxCodeSnippetAdded"] = false;

$tdatakbarticles[".buttonsAdded"] = false;

$tdatakbarticles[".addPageEvents"] = true;

// use timepicker for search panel
$tdatakbarticles[".isUseTimeForSearch"] = false;


$tdatakbarticles[".badgeColor"] = "6493EA";


$tdatakbarticles[".allSearchFields"] = array();
$tdatakbarticles[".filterFields"] = array();
$tdatakbarticles[".requiredSearchFields"] = array();

$tdatakbarticles[".googleLikeFields"] = array();
$tdatakbarticles[".googleLikeFields"][] = "approved";
$tdatakbarticles[".googleLikeFields"][] = "ArticleID";
$tdatakbarticles[".googleLikeFields"][] = "ArticleID2";
$tdatakbarticles[".googleLikeFields"][] = "ArticleIDedit";
$tdatakbarticles[".googleLikeFields"][] = "Category";
$tdatakbarticles[".googleLikeFields"][] = "DateCreated";
$tdatakbarticles[".googleLikeFields"][] = "Problem";
$tdatakbarticles[".googleLikeFields"][] = "Solution";
$tdatakbarticles[".googleLikeFields"][] = "Title";
$tdatakbarticles[".googleLikeFields"][] = "Views";
$tdatakbarticles[".googleLikeFields"][] = "keyworlds";



$tdatakbarticles[".tableType"] = "list";

$tdatakbarticles[".printerPageOrientation"] = 0;
$tdatakbarticles[".nPrinterPageScale"] = 100;

$tdatakbarticles[".nPrinterSplitRecords"] = 40;

$tdatakbarticles[".geocodingEnabled"] = false;










$tdatakbarticles[".pageSize"] = 20;

$tdatakbarticles[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakbarticles[".strOrderBy"] = $tstrOrderBy;

$tdatakbarticles[".orderindexes"] = array();


$tdatakbarticles[".sqlHead"] = "SELECT approved,  ArticleID,  ArticleID AS ArticleID2,  ArticleID AS ArticleIDedit,  Category,  DateCreated,  Problem,  Solution,  Title,  Views,  keyworlds";
$tdatakbarticles[".sqlFrom"] = "FROM kbarticles";
$tdatakbarticles[".sqlWhereExpr"] = "";
$tdatakbarticles[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakbarticles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakbarticles[".arrGroupsPerPage"] = $arrGPP;

$tdatakbarticles[".highlightSearchResults"] = true;

$tableKeyskbarticles = array();
$tableKeyskbarticles[] = "ArticleID";
$tdatakbarticles[".Keys"] = $tableKeyskbarticles;


$tdatakbarticles[".hideMobileList"] = array();




//	approved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "approved";
	$fdata["GoodName"] = "approved";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","approved");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approved";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "approved";

	
	
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


	$tdatakbarticles["approved"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "approved";
//	ArticleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ArticleID";
	$fdata["GoodName"] = "ArticleID";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","ArticleID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ArticleID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ArticleID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatakbarticles["ArticleID"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "ArticleID";
//	ArticleID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ArticleID2";
	$fdata["GoodName"] = "ArticleID2";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","ArticleID2");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ArticleID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ArticleID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatakbarticles["ArticleID2"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "ArticleID2";
//	ArticleIDedit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ArticleIDedit";
	$fdata["GoodName"] = "ArticleIDedit";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","ArticleIDedit");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ArticleID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ArticleID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatakbarticles["ArticleIDedit"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "ArticleIDedit";
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","Category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
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
	$edata["LookupTable"] = "kbcategories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Category";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Category";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatakbarticles["Category"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "Category";
//	DateCreated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DateCreated";
	$fdata["GoodName"] = "DateCreated";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","DateCreated");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "DateCreated";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateCreated";

	
	
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


	$tdatakbarticles["DateCreated"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "DateCreated";
//	Problem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Problem";
	$fdata["GoodName"] = "Problem";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","Problem");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Problem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Problem";

	
	
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


	$tdatakbarticles["Problem"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "Problem";
//	Solution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Solution";
	$fdata["GoodName"] = "Solution";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","Solution");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Solution";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Solution";

	
	
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


	$tdatakbarticles["Solution"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "Solution";
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","Title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatakbarticles["Title"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "Title";
//	Views
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Views";
	$fdata["GoodName"] = "Views";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","Views");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Views";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Views";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatakbarticles["Views"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "Views";
//	keyworlds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "keyworlds";
	$fdata["GoodName"] = "keyworlds";
	$fdata["ownerTable"] = "kbarticles";
	$fdata["Label"] = GetFieldLabel("kbarticles","keyworlds");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "keyworlds";

		$fdata["sourceSingle"] = "keyworlds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "keyworlds";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatakbarticles["keyworlds"] = $fdata;
		$tdatakbarticles[".searchableFields"][] = "keyworlds";


$tables_data["kbarticles"]=&$tdatakbarticles;
$field_labels["kbarticles"] = &$fieldLabelskbarticles;
$fieldToolTips["kbarticles"] = &$fieldToolTipskbarticles;
$placeHolders["kbarticles"] = &$placeHolderskbarticles;
$page_titles["kbarticles"] = &$pageTitleskbarticles;


changeTextControlsToDate( "kbarticles" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["kbarticles"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["kbarticles"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kbarticles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "approved,  ArticleID,  ArticleID AS ArticleID2,  ArticleID AS ArticleIDedit,  Category,  DateCreated,  Problem,  Solution,  Title,  Views,  keyworlds";
$proto0["m_strFrom"] = "FROM kbarticles";
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
	"m_strName" => "approved",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto6["m_sql"] = "approved";
$proto6["m_srcTableName"] = "kbarticles";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ArticleID",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto8["m_sql"] = "ArticleID";
$proto8["m_srcTableName"] = "kbarticles";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ArticleID",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto10["m_sql"] = "ArticleID";
$proto10["m_srcTableName"] = "kbarticles";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "ArticleID2";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ArticleID",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto12["m_sql"] = "ArticleID";
$proto12["m_srcTableName"] = "kbarticles";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "ArticleIDedit";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto14["m_sql"] = "Category";
$proto14["m_srcTableName"] = "kbarticles";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DateCreated",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto16["m_sql"] = "DateCreated";
$proto16["m_srcTableName"] = "kbarticles";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Problem",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto18["m_sql"] = "Problem";
$proto18["m_srcTableName"] = "kbarticles";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Solution",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto20["m_sql"] = "Solution";
$proto20["m_srcTableName"] = "kbarticles";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto22["m_sql"] = "Title";
$proto22["m_srcTableName"] = "kbarticles";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Views",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto24["m_sql"] = "Views";
$proto24["m_srcTableName"] = "kbarticles";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "keyworlds",
	"m_strTable" => "kbarticles",
	"m_srcTableName" => "kbarticles"
));

$proto26["m_sql"] = "keyworlds";
$proto26["m_srcTableName"] = "kbarticles";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "kbarticles";
$proto29["m_srcTableName"] = "kbarticles";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "approved";
$proto29["m_columns"][] = "ArticleID";
$proto29["m_columns"][] = "Category";
$proto29["m_columns"][] = "DateCreated";
$proto29["m_columns"][] = "Problem";
$proto29["m_columns"][] = "Solution";
$proto29["m_columns"][] = "Title";
$proto29["m_columns"][] = "Views";
$proto29["m_columns"][] = "keyworlds";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "kbarticles";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "kbarticles";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="kbarticles";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kbarticles = createSqlQuery_kbarticles();


	
		;

											

$tdatakbarticles[".sqlquery"] = $queryData_kbarticles;



include_once(getabspath("include/kbarticles_events.php"));
$tdatakbarticles[".hasEvents"] = true;

$query = &$queryData_kbarticles;
$table = "kbarticles";
// here goes EVENT_INIT_TABLE event
if(!$_SESSION["Knowledge_Base_Integration"]){
	HeaderRedirect("hd_tickets","list","f=(folderid~equals~1)");
	die();
}
;
unset($query);
?>