<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

$tdataDashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdataDashboard[".originalPagesByType"] = $tdataDashboard[".pagesByType"];
$tdataDashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdataDashboard[".originalPages"] = $tdataDashboard[".pages"];
$tdataDashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdataDashboard[".originalDefaultPages"] = $tdataDashboard[".defaultPages"];


//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
	$fieldLabelsDashboard["English"]["forumtopics_view_topic"] = "Forumtopics View Topic";
	$fieldLabelsDashboard["English"]["forumtopics_view_startedby"] = "Forumtopics View Startedby";
	$fieldLabelsDashboard["English"]["forumtopics_view_startedby2"] = "Forumtopics View Startedby2";
	$fieldLabelsDashboard["English"]["forumtopics_view_id"] = "Forumtopics View Id";
	$fieldLabelsDashboard["English"]["forumtopics_view_categoryid"] = "Forumtopics View Categoryid";
	$fieldLabelsDashboard["English"]["forumtopics_view_views"] = "Forumtopics View Views";
	$fieldLabelsDashboard["English"]["forumtopics_view_activity"] = "Forumtopics View Activity";
	$fieldLabelsDashboard["English"]["forumtopics_view_pinned"] = "Forumtopics View Pinned";
	$fieldLabelsDashboard["English"]["forumtopics_view_color"] = "Forumtopics View Color";
	$fieldLabelsDashboard["English"]["forumtopics_view_created"] = "Forumtopics View Created";
	$fieldLabelsDashboard["English"]["forumsubscribers_dash_id"] = "Forumsubscribers Dash Id";
	$fieldLabelsDashboard["English"]["forumsubscribers_dash_userid"] = "Forumsubscribers Dash Userid";
	$fieldLabelsDashboard["English"]["forumsubscribers_dash_topicid"] = "Forumsubscribers Dash Topicid";
	$fieldLabelsDashboard["English"]["forumsubscribers_dash_topic"] = "Forumsubscribers Dash Topic";
	$fieldLabelsDashboard["English"]["forumsubscribers_dash_name"] = "Forumsubscribers Dash Name";
}

/*
//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"topic" );
$tdataDashboard[".searchFields"]["forumtopics_view_topic"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"startedby" );
$tdataDashboard[".searchFields"]["forumtopics_view_startedby"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"startedby2" );
$tdataDashboard[".searchFields"]["forumtopics_view_startedby2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"id" );
$tdataDashboard[".searchFields"]["forumtopics_view_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"categoryid" );
$tdataDashboard[".searchFields"]["forumtopics_view_categoryid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"views" );
$tdataDashboard[".searchFields"]["forumtopics_view_views"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"activity" );
$tdataDashboard[".searchFields"]["forumtopics_view_activity"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"pinned" );
$tdataDashboard[".searchFields"]["forumtopics_view_pinned"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"color" );
$tdataDashboard[".searchFields"]["forumtopics_view_color"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumtopics_view", "field"=>"created" );
$tdataDashboard[".searchFields"]["forumtopics_view_created"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumsubscribers_dash", "field"=>"id" );
$tdataDashboard[".searchFields"]["forumsubscribers_dash_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumsubscribers_dash", "field"=>"userid" );
$tdataDashboard[".searchFields"]["forumsubscribers_dash_userid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumsubscribers_dash", "field"=>"topicid" );
$tdataDashboard[".searchFields"]["forumsubscribers_dash_topicid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumsubscribers_dash", "field"=>"topic" );
$tdataDashboard[".searchFields"]["forumsubscribers_dash_topic"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"forumsubscribers_dash", "field"=>"name" );
$tdataDashboard[".searchFields"]["forumsubscribers_dash_name"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_topic";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_startedby";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_startedby2";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_id";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_categoryid";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_views";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_activity";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_pinned";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_color";
$tdataDashboard[".allSearchFields"][] = "forumtopics_view_created";
$tdataDashboard[".allSearchFields"][] = "forumsubscribers_dash_id";
$tdataDashboard[".allSearchFields"][] = "forumsubscribers_dash_userid";
$tdataDashboard[".allSearchFields"][] = "forumsubscribers_dash_topicid";
$tdataDashboard[".allSearchFields"][] = "forumsubscribers_dash_topic";
$tdataDashboard[".allSearchFields"][] = "forumsubscribers_dash_name";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_topic";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_startedby";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_startedby2";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_id";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_categoryid";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_views";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_activity";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_pinned";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_color";
$tdataDashboard[".googleLikeFields"][] = "forumtopics_view_created";
$tdataDashboard[".googleLikeFields"][] = "forumsubscribers_dash_id";
$tdataDashboard[".googleLikeFields"][] = "forumsubscribers_dash_userid";
$tdataDashboard[".googleLikeFields"][] = "forumsubscribers_dash_topicid";
$tdataDashboard[".googleLikeFields"][] = "forumsubscribers_dash_topic";
$tdataDashboard[".googleLikeFields"][] = "forumsubscribers_dash_name";
*/

/*
$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "forumtopics_view_list", "table" => "forumtopics_view",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Dashboard_snippet", "table" => "Dashboard",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet";


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "forumsubscribers_dash_list", "table" => "forumsubscribers_dash",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "forumreplies_chart_chart", "table" => "forumreplies_chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdataDashboard[".dashElements"][] = $dbelement;
*/
$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;





include_once(getabspath("include/Dashboard_events.php"));
$tdataDashboard[".hasEvents"] = true;


$tdataDashboard[".tableType"] = "dashboard";


					
$tdataDashboard[".addPageEvents"] = false;

$tdataDashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>