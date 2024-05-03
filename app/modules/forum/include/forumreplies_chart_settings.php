<?php
$tdataforumreplies_chart = array();
$tdataforumreplies_chart[".searchableFields"] = array();
$tdataforumreplies_chart[".ShortName"] = "forumreplies_chart";
$tdataforumreplies_chart[".OwnerID"] = "";
$tdataforumreplies_chart[".OriginalTable"] = "forumreplies";


$tdataforumreplies_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataforumreplies_chart[".originalPagesByType"] = $tdataforumreplies_chart[".pagesByType"];
$tdataforumreplies_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataforumreplies_chart[".originalPages"] = $tdataforumreplies_chart[".pages"];
$tdataforumreplies_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataforumreplies_chart[".originalDefaultPages"] = $tdataforumreplies_chart[".defaultPages"];

//	field labels
$fieldLabelsforumreplies_chart = array();
$fieldToolTipsforumreplies_chart = array();
$pageTitlesforumreplies_chart = array();
$placeHoldersforumreplies_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforumreplies_chart["English"] = array();
	$fieldToolTipsforumreplies_chart["English"] = array();
	$placeHoldersforumreplies_chart["English"] = array();
	$pageTitlesforumreplies_chart["English"] = array();
	$fieldLabelsforumreplies_chart["English"]["topicid"] = "Topicid";
	$fieldToolTipsforumreplies_chart["English"]["topicid"] = "";
	$placeHoldersforumreplies_chart["English"]["topicid"] = "";
	$fieldLabelsforumreplies_chart["English"]["cnt"] = "";
	$fieldToolTipsforumreplies_chart["English"]["cnt"] = "";
	$placeHoldersforumreplies_chart["English"]["cnt"] = "";
	$fieldLabelsforumreplies_chart["English"]["displayname"] = "Username";
	$fieldToolTipsforumreplies_chart["English"]["displayname"] = "";
	$placeHoldersforumreplies_chart["English"]["displayname"] = "";
	if (count($fieldToolTipsforumreplies_chart["English"]))
		$tdataforumreplies_chart[".isUseToolTips"] = true;
}


	$tdataforumreplies_chart[".NCSearch"] = true;

	$tdataforumreplies_chart[".ChartRefreshTime"] = 0;


$tdataforumreplies_chart[".shortTableName"] = "forumreplies_chart";
$tdataforumreplies_chart[".nSecOptions"] = 0;

$tdataforumreplies_chart[".mainTableOwnerID"] = "";
$tdataforumreplies_chart[".entityType"] = 3;
$tdataforumreplies_chart[".connId"] = "project_at_localhost";


$tdataforumreplies_chart[".strOriginalTableName"] = "forumreplies";

	



$tdataforumreplies_chart[".showAddInPopup"] = false;

$tdataforumreplies_chart[".showEditInPopup"] = false;

$tdataforumreplies_chart[".showViewInPopup"] = false;

$tdataforumreplies_chart[".listAjax"] = false;
//	temporary
//$tdataforumreplies_chart[".listAjax"] = false;

	$tdataforumreplies_chart[".audit"] = false;

	$tdataforumreplies_chart[".locking"] = false;


$pages = $tdataforumreplies_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforumreplies_chart[".edit"] = true;
	$tdataforumreplies_chart[".afterEditAction"] = 1;
	$tdataforumreplies_chart[".closePopupAfterEdit"] = 1;
	$tdataforumreplies_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforumreplies_chart[".add"] = true;
$tdataforumreplies_chart[".afterAddAction"] = 1;
$tdataforumreplies_chart[".closePopupAfterAdd"] = 1;
$tdataforumreplies_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforumreplies_chart[".list"] = true;
}



$tdataforumreplies_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforumreplies_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforumreplies_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforumreplies_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforumreplies_chart[".printFriendly"] = true;
}



$tdataforumreplies_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforumreplies_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforumreplies_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforumreplies_chart[".isUseAjaxSuggest"] = true;



															

$tdataforumreplies_chart[".ajaxCodeSnippetAdded"] = false;

$tdataforumreplies_chart[".buttonsAdded"] = false;

$tdataforumreplies_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataforumreplies_chart[".isUseTimeForSearch"] = false;


$tdataforumreplies_chart[".badgeColor"] = "1E90FF";


$tdataforumreplies_chart[".allSearchFields"] = array();
$tdataforumreplies_chart[".filterFields"] = array();
$tdataforumreplies_chart[".requiredSearchFields"] = array();

$tdataforumreplies_chart[".googleLikeFields"] = array();
$tdataforumreplies_chart[".googleLikeFields"][] = "topicid";
$tdataforumreplies_chart[".googleLikeFields"][] = "cnt";
$tdataforumreplies_chart[".googleLikeFields"][] = "displayname";



$tdataforumreplies_chart[".tableType"] = "chart";

$tdataforumreplies_chart[".printerPageOrientation"] = 0;
$tdataforumreplies_chart[".nPrinterPageScale"] = 100;

$tdataforumreplies_chart[".nPrinterSplitRecords"] = 40;

$tdataforumreplies_chart[".geocodingEnabled"] = false;



// chart settings
$tdataforumreplies_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdataforumreplies_chart[".strOrderBy"] = $tstrOrderBy;

$tdataforumreplies_chart[".orderindexes"] = array();


$tdataforumreplies_chart[".sqlHead"] = "select r.topicid,  COUNT(r.id) AS cnt,  u.username AS displayname";
$tdataforumreplies_chart[".sqlFrom"] = "FROM forumreplies AS r  LEFT OUTER JOIN forumusers_data AS u ON u.userid = r.userid";
$tdataforumreplies_chart[".sqlWhereExpr"] = "";
$tdataforumreplies_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforumreplies_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforumreplies_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataforumreplies_chart[".highlightSearchResults"] = true;

$tableKeysforumreplies_chart = array();
$tdataforumreplies_chart[".Keys"] = $tableKeysforumreplies_chart;


$tdataforumreplies_chart[".hideMobileList"] = array();




//	topicid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "topicid";
	$fdata["GoodName"] = "topicid";
	$fdata["ownerTable"] = "forumreplies";
	$fdata["Label"] = GetFieldLabel("forumreplies_chart","topicid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "topicid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r.topicid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataforumreplies_chart["topicid"] = $fdata;
		$tdataforumreplies_chart[".searchableFields"][] = "topicid";
//	cnt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cnt";
	$fdata["GoodName"] = "cnt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("forumreplies_chart","cnt");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cnt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(r.id)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataforumreplies_chart["cnt"] = $fdata;
		$tdataforumreplies_chart[".searchableFields"][] = "cnt";
//	displayname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "displayname";
	$fdata["GoodName"] = "displayname";
	$fdata["ownerTable"] = "forumusers_data";
	$fdata["Label"] = GetFieldLabel("forumreplies_chart","displayname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataforumreplies_chart["displayname"] = $fdata;
		$tdataforumreplies_chart[".searchableFields"][] = "displayname";

$tdataforumreplies_chart[".chartLabelField"] = "displayname";
$tdataforumreplies_chart[".chartSeries"] = array();
$tdataforumreplies_chart[".chartSeries"][] = array(
	"field" => "cnt",
	"total" => ""
);
	$tdataforumreplies_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">forumreplies_chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataforumreplies_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">cnt</attr>';
	$tdataforumreplies_chart[".chartXml"] .= '</attr>';
	$tdataforumreplies_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">displayname</attr>
	</attr>';
	$tdataforumreplies_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataforumreplies_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Number of posts by users").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("topicid").'</attr>


<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataforumreplies_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataforumreplies_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">topicid</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("forumreplies_chart","topicid")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataforumreplies_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">cnt</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("forumreplies_chart","cnt")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataforumreplies_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">displayname</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("forumreplies_chart","displayname")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataforumreplies_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">forumreplies_chart</attr>
<attr value="short_table_name">forumreplies_chart</attr>
</attr>

</chart>';

$tables_data["forumreplies_chart"]=&$tdataforumreplies_chart;
$field_labels["forumreplies_chart"] = &$fieldLabelsforumreplies_chart;
$fieldToolTips["forumreplies_chart"] = &$fieldToolTipsforumreplies_chart;
$placeHolders["forumreplies_chart"] = &$placeHoldersforumreplies_chart;
$page_titles["forumreplies_chart"] = &$pageTitlesforumreplies_chart;


changeTextControlsToDate( "forumreplies_chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forumreplies_chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forumreplies_chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forumreplies_chart()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "r.topicid,  COUNT(r.id) AS cnt,  u.username AS displayname";
$proto0["m_strFrom"] = "FROM forumreplies AS r  LEFT OUTER JOIN forumusers_data AS u ON u.userid = r.userid";
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
	"m_strName" => "topicid",
	"m_strTable" => "r",
	"m_srcTableName" => "forumreplies_chart"
));

$proto6["m_sql"] = "r.topicid";
$proto6["m_srcTableName"] = "forumreplies_chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "r",
	"m_srcTableName" => "forumreplies_chart"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "COUNT(r.id)";
$proto8["m_srcTableName"] = "forumreplies_chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "cnt";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "u",
	"m_srcTableName" => "forumreplies_chart"
));

$proto11["m_sql"] = "u.username";
$proto11["m_srcTableName"] = "forumreplies_chart";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "displayname";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "forumreplies";
$proto14["m_srcTableName"] = "forumreplies_chart";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "topicid";
$proto14["m_columns"][] = "userid";
$proto14["m_columns"][] = "reply";
$proto14["m_columns"][] = "created";
$proto14["m_columns"][] = "id";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "forumreplies AS r";
$proto13["m_alias"] = "r";
$proto13["m_srcTableName"] = "forumreplies_chart";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
												$proto17=array();
$proto17["m_link"] = "SQLL_LEFTJOIN";
			$proto18=array();
$proto18["m_strName"] = "forumusers_data";
$proto18["m_srcTableName"] = "forumreplies_chart";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "scheme";
$proto18["m_columns"][] = "last_activity";
$proto18["m_columns"][] = "last_login";
$proto18["m_columns"][] = "joined";
$proto18["m_columns"][] = "usertype";
$proto18["m_columns"][] = "image";
$proto18["m_columns"][] = "userid";
$proto18["m_columns"][] = "username";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "LEFT OUTER JOIN forumusers_data AS u ON u.userid = r.userid";
$proto17["m_alias"] = "u";
$proto17["m_srcTableName"] = "forumreplies_chart";
$proto19=array();
$proto19["m_sql"] = "u.userid = r.userid";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "u",
	"m_srcTableName" => "forumreplies_chart"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= r.userid";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "r",
	"m_srcTableName" => "forumreplies_chart"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "topicid",
	"m_strTable" => "r",
	"m_srcTableName" => "forumreplies_chart"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="forumreplies_chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forumreplies_chart = createSqlQuery_forumreplies_chart();


	
																;

			

$tdataforumreplies_chart[".sqlquery"] = $queryData_forumreplies_chart;



$tdataforumreplies_chart[".hasEvents"] = false;

?>