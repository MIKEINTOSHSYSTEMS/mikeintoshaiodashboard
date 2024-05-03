<?php
$tdataprofile = array();
$tdataprofile[".searchableFields"] = array();
$tdataprofile[".ShortName"] = "profile";
$tdataprofile[".OwnerID"] = "";
$tdataprofile[".OriginalTable"] = "forumusers_data";


$tdataprofile[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprofile[".originalPagesByType"] = $tdataprofile[".pagesByType"];
$tdataprofile[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprofile[".originalPages"] = $tdataprofile[".pages"];
$tdataprofile[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprofile[".originalDefaultPages"] = $tdataprofile[".defaultPages"];

//	field labels
$fieldLabelsprofile = array();
$fieldToolTipsprofile = array();
$pageTitlesprofile = array();
$placeHoldersprofile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprofile["English"] = array();
	$fieldToolTipsprofile["English"] = array();
	$placeHoldersprofile["English"] = array();
	$pageTitlesprofile["English"] = array();
	$fieldLabelsprofile["English"]["id"] = "Id";
	$fieldToolTipsprofile["English"]["id"] = "";
	$placeHoldersprofile["English"]["id"] = "";
	$fieldLabelsprofile["English"]["joined"] = "Joined";
	$fieldToolTipsprofile["English"]["joined"] = "";
	$placeHoldersprofile["English"]["joined"] = "";
	$fieldLabelsprofile["English"]["image"] = "Image";
	$fieldToolTipsprofile["English"]["image"] = "";
	$placeHoldersprofile["English"]["image"] = "";
	$fieldLabelsprofile["English"]["userid"] = "Userid";
	$fieldToolTipsprofile["English"]["userid"] = "";
	$placeHoldersprofile["English"]["userid"] = "";
	$fieldLabelsprofile["English"]["username"] = "Username";
	$fieldToolTipsprofile["English"]["username"] = "";
	$placeHoldersprofile["English"]["username"] = "";
	if (count($fieldToolTipsprofile["English"]))
		$tdataprofile[".isUseToolTips"] = true;
}


	$tdataprofile[".NCSearch"] = true;



$tdataprofile[".shortTableName"] = "profile";
$tdataprofile[".nSecOptions"] = 0;

$tdataprofile[".mainTableOwnerID"] = "";
$tdataprofile[".entityType"] = 1;
$tdataprofile[".connId"] = "project_at_localhost";


$tdataprofile[".strOriginalTableName"] = "forumusers_data";

	



$tdataprofile[".showAddInPopup"] = false;

$tdataprofile[".showEditInPopup"] = false;

$tdataprofile[".showViewInPopup"] = false;

$tdataprofile[".listAjax"] = false;
//	temporary
//$tdataprofile[".listAjax"] = false;

	$tdataprofile[".audit"] = false;

	$tdataprofile[".locking"] = false;


$pages = $tdataprofile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprofile[".edit"] = true;
	$tdataprofile[".afterEditAction"] = 1;
	$tdataprofile[".closePopupAfterEdit"] = 1;
	$tdataprofile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprofile[".add"] = true;
$tdataprofile[".afterAddAction"] = 1;
$tdataprofile[".closePopupAfterAdd"] = 1;
$tdataprofile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprofile[".list"] = true;
}



$tdataprofile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprofile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprofile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprofile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprofile[".printFriendly"] = true;
}



$tdataprofile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprofile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprofile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprofile[".isUseAjaxSuggest"] = true;



															

$tdataprofile[".ajaxCodeSnippetAdded"] = false;

$tdataprofile[".buttonsAdded"] = false;

$tdataprofile[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofile[".isUseTimeForSearch"] = false;


$tdataprofile[".badgeColor"] = "6DA5C8";


$tdataprofile[".allSearchFields"] = array();
$tdataprofile[".filterFields"] = array();
$tdataprofile[".requiredSearchFields"] = array();

$tdataprofile[".googleLikeFields"] = array();
$tdataprofile[".googleLikeFields"][] = "id";
$tdataprofile[".googleLikeFields"][] = "joined";
$tdataprofile[".googleLikeFields"][] = "image";
$tdataprofile[".googleLikeFields"][] = "userid";
$tdataprofile[".googleLikeFields"][] = "username";



$tdataprofile[".tableType"] = "list";

$tdataprofile[".printerPageOrientation"] = 0;
$tdataprofile[".nPrinterPageScale"] = 100;

$tdataprofile[".nPrinterSplitRecords"] = 40;

$tdataprofile[".geocodingEnabled"] = false;










$tdataprofile[".pageSize"] = 20;

$tdataprofile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprofile[".strOrderBy"] = $tstrOrderBy;

$tdataprofile[".orderindexes"] = array();


$tdataprofile[".sqlHead"] = "SELECT id,  joined,  image,  userid,  username";
$tdataprofile[".sqlFrom"] = "FROM forumusers_data";
$tdataprofile[".sqlWhereExpr"] = "";
$tdataprofile[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofile[".arrGroupsPerPage"] = $arrGPP;

$tdataprofile[".highlightSearchResults"] = true;

$tableKeysprofile = array();
$tableKeysprofile[] = "username";
$tdataprofile[".Keys"] = $tableKeysprofile;


$tdataprofile[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("profile","id");
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


	$tdataprofile["id"] = $fdata;
		$tdataprofile[".searchableFields"][] = "id";
//	joined
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "joined";
	$fdata["GoodName"] = "joined";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("profile","joined");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "joined";

		$fdata["sourceSingle"] = "joined";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "joined";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdataprofile["joined"] = $fdata;
		$tdataprofile[".searchableFields"][] = "joined";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("profile","image");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "image";

		$fdata["sourceSingle"] = "image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "avatars";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 200;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

		
	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataprofile["image"] = $fdata;
		$tdataprofile[".searchableFields"][] = "image";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("profile","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdataprofile["userid"] = $fdata;
		$tdataprofile[".searchableFields"][] = "userid";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("profile","username");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdataprofile["username"] = $fdata;
		$tdataprofile[".searchableFields"][] = "username";


$tables_data["profile"]=&$tdataprofile;
$field_labels["profile"] = &$fieldLabelsprofile;
$fieldToolTips["profile"] = &$fieldToolTipsprofile;
$placeHolders["profile"] = &$placeHoldersprofile;
$page_titles["profile"] = &$pageTitlesprofile;


changeTextControlsToDate( "profile" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["profile"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["profile"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  joined,  image,  userid,  username";
$proto0["m_strFrom"] = "FROM forumusers_data";
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
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "profile"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "joined",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "profile"
));

$proto8["m_sql"] = "joined";
$proto8["m_srcTableName"] = "profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "profile"
));

$proto10["m_sql"] = "image";
$proto10["m_srcTableName"] = "profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "profile"
));

$proto12["m_sql"] = "userid";
$proto12["m_srcTableName"] = "profile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "forumusers_data",
	"m_srcTableName" => "profile"
));

$proto14["m_sql"] = "username";
$proto14["m_srcTableName"] = "profile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "forumusers_data";
$proto17["m_srcTableName"] = "profile";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "scheme";
$proto17["m_columns"][] = "last_activity";
$proto17["m_columns"][] = "last_login";
$proto17["m_columns"][] = "joined";
$proto17["m_columns"][] = "usertype";
$proto17["m_columns"][] = "image";
$proto17["m_columns"][] = "userid";
$proto17["m_columns"][] = "username";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "forumusers_data";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "profile";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_profile = createSqlQuery_profile();


	
																;

					

$tdataprofile[".sqlquery"] = $queryData_profile;



include_once(getabspath("include/profile_events.php"));
$tdataprofile[".hasEvents"] = true;

?>