<?php

function getMenuNodes_DerejaMenuSet($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["DerejaMenuSet"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Dashboard";
	$menuNode["href"] = "../index.php";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-dashboard";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dashboard";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Charts & Report Tables";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-area-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Charts & Report Tables";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Home Dashboard";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Home";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Dashboard");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-tachometer";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Home Dashboard";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "Reporting Data Grid";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "AIO_Reporting_Dashboard";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Dashboard");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-th";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reporting Data Grid";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "";
	$menuNode["href"] = "";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "{04AFFBE6-86C0-47b0-ADD3-BA7FA19CA6FC}";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("WebReports");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-pie-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Web Reports";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "6";
	$menuNode["name"] = "Candidates Report";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-table";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Report";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "7";
	$menuNode["name"] = "Candidates Dashboard";
	$menuNode["href"] = "./test.php";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Candidates_Dashboard_Data";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-dashboard";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Dashboard";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "8";
	$menuNode["name"] = "Candidates Tabular Report";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates_view";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-table";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Tabular Report";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "9";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates_by_region";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-bar-chart-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates By Region";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "10";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates_by_sex_age_disability";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-area-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates By Sex Age Disability";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "11";
	$menuNode["name"] = "Candidates Report Chart";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates_reports";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-line-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Report Chart";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "12";
	$menuNode["name"] = "Candidates Cross Tab";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates_view";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-list-alt";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Cross Tab";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "13";
	$menuNode["name"] = "Candidates Summary";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Candidates_Summary";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-slideshare";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Summary";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "14";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates_aggrigated";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-sort-amount-desc";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Candidates Aggrigated";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "15";
	$menuNode["name"] = "Events Report";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-table";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Events Report";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "16";
	$menuNode["name"] = "Events Dashboards";
		$menuNode["href"] = "external.php?url=".rawurlencode("../test.php");
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "15";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Events_Participant_Dashboard";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-calendar";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Events Dashboards";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "17";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "event_participants";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "15";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-calendar-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Event Participants";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "18";
	$menuNode["name"] = "Event Participants Chart";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "event_participants_by_events";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "15";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-bar-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Event Participants Chart";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "19";
	$menuNode["name"] = "Event Participants Report";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "event_participants_view";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "15";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-table";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Event Participants Report";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "20";
	$menuNode["name"] = "Trainings Report";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-table";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trainings Report";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "21";
	$menuNode["name"] = "Trainings Dashboards";
	$menuNode["href"] = "../test.php";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "20";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Trainings_Participant_Dashboard";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-pied-piper-alt";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trainings Dashboards";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "22";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_participants";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "20";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-pied-piper-alt";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Participants";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "23";
	$menuNode["name"] = "Training Participants Chart";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_participants_by_trainings";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "20";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-bar-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Participants Chart";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "24";
	$menuNode["name"] = "Training Participants Report";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_participants_view";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "20";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-wpforms";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Participants Report";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "25";
	$menuNode["name"] = "Employments";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "2";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-suitcase";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Employments";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "26";
	$menuNode["name"] = "Employments Dashboard";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Employment_Tracking_Dashboard";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-briefcase";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Employments Dashboard";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "27";
	$menuNode["name"] = "Employment Tracker";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Candidate_Employment_Tracker";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-suitcase";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Employment Tracker";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "28";
	$menuNode["name"] = "Performance Monitoring";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-balance-scale";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Performance Monitoring";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "29";
	$menuNode["name"] = "Performance Indicators Chart";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "performance_indicators_view";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "28";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Chart");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-bar-chart";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Performance Indicators Chart";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "30";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Performance_Overview";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "28";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-list-alt";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Performance Overview";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "31";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "performance_indicators";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "28";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-info-circle";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Performance Indicators";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "32";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "performance_tracking";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "28";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-road";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Performance Tracking";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "33";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "performance_years";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "28";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-calendar";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Performance Years";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "34";
	$menuNode["name"] = "Data Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-database";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Data Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "35";
	$menuNode["name"] = "Data Entry";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-plus";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Data Entry";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "36";
	$menuNode["name"] = "Master Candidates";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "candidates";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "35";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-users";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Master Candidates";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "37";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "website_data";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "35";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-internet-explorer";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Website Data";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "38";
	$menuNode["name"] = "Dereja Academy LMS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dereja_academy_lms";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "35";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-book";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dereja Academy LMS";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "39";
	$menuNode["name"] = "Event Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-calendar-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Event Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "40";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "events";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "39";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Events";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "41";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dereja_event_services";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "39";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dereja Event Services";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "42";
	$menuNode["name"] = "Training Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-institution";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "43";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "trainings";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trainings";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "44";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_types";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Types";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "45";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_organizers";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Organizers";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "46";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_venues";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training Venues";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "47";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "training_city_towns";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Training City Towns";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "48";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Trainer";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trainer";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "49";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dereja_training_services";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "42";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dereja Training Services";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "50";
	$menuNode["name"] = "Employment Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-briefcase";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Employment Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "51";
	$menuNode["name"] = "Jobs Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "50";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Jobs Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "52";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Jobs";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "51";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Jobs";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "53";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Job_Categories";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "51";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Job Categories";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "54";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Job_Types";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "51";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Job Types";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "55";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Job_Fair";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "51";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Job Fair";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "56";
	$menuNode["name"] = "Company Profiles";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "50";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-creative-commons";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Company Profiles";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "57";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Companies";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "56";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Companies";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "58";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "CompanySectors";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "56";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Company Sectors";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "59";
	$menuNode["name"] = "Assessments";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-file-text-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Assessments";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "60";
	$menuNode["name"] = "Career Compass";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "59";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Career Compass";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "61";
	$menuNode["name"] = "Career Compass Assessments";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "60";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Career_Compass_Assessments";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-compass";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Career Compass Assessments";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "62";
	$menuNode["name"] = "Career Compass Submissions";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "60";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Career_Compass_Submissions";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-list-ol";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Career Compass Submissions";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "63";
	$menuNode["name"] = "Forms Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-wpforms";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Forms Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "64";
	$menuNode["name"] = "Survey Froms";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "63";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Survey_Forms";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-pencil-square-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Survey Froms";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "65";
	$menuNode["name"] = "Form Submissions";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "63";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Form_Submissions";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-send";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Form Submissions";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "66";
	$menuNode["name"] = "Forms Administration";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "63";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Forms_Management";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-wpforms";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Forms Administration";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "67";
	$menuNode["name"] = "Survey Management";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "63";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Survey";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-wpforms";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Survey Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "68";
	$menuNode["name"] = "Indicators";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-info-circle";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Indicators";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "69";
	$menuNode["name"] = "Indicators Dashboard";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dashboards";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "68";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "AIO_Indicators_Aggregated";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-info";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Indicators Dashboard";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "70";
	$menuNode["name"] = "Indicators Target";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "indicator_targets";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "68";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-bullseye";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Indicators Target";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "71";
	$menuNode["name"] = "Variables Managment";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "34";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-code";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Variables Managment";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "72";
	$menuNode["name"] = "Education";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "71";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-graduation-cap";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Education";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "73";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "departments";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Departments";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "74";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "education_levels";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Education Levels";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "75";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "industry_specific_skills";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Industry Specific Skills";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "76";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "institution_types";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Institution Types";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "77";
	$menuNode["name"] = "IT Related Skills";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "it_related_skills";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "IT Related Skills";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "78";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "minor_major";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Minor Major";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "79";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "participant_organization_types";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Participant Organization Types";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "80";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "professions";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Professions";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "81";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "skills";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Skills";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "82";
	$menuNode["name"] = "Disability";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "71";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-hard-of-hearing";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Disability";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "83";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Disability_Types";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "82";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-blind";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Disability Types";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "84";
	$menuNode["name"] = "Localizations Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "71";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-language";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Localizations Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "85";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "regions";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Regions";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "86";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cities";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "87";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "sub_cities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Sub Cities";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "88";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "zones";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Zones";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "89";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Languages";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Languages";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "90";
	$menuNode["name"] = "Dereja Variables";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "71";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-first-order";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dereja Variables";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "91";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dereja_information_sources";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "90";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dereja Information Sources";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "92";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "dereja_services";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "90";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dereja Services";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "93";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "program_areas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "90";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Program Areas";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "94";
	$menuNode["name"] = "Utilities";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-tasks";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Utilities";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "95";
	$menuNode["name"] = "Chat";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Chat";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-comments";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Chat";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "96";
	$menuNode["name"] = "Document Manager";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "document_manager";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-files-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Document Manager";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "97";
	$menuNode["name"] = "Project Manager";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Project_Manager";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-braille";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Project Manager";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "98";
	$menuNode["name"] = "Knowledge Base";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "knowledge_base";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-book";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Knowledge Base";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "99";
	$menuNode["name"] = "Settings";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-gear";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Settings";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "100";
	$menuNode["name"] = "KB Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "99";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-book";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "KB Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "101";
	$menuNode["name"] = "Main";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "main";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "100";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Main";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "102";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "kbarticles";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "100";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Articles";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "103";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "kbcategories";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "100";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Categories";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "104";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "kbcomments";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "100";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Comments";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "105";
	$menuNode["name"] = "Reports Administration";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "99";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-table";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Reports Administration";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "106";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "webreport_admin";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "105";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Webreport Admin";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "107";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "webreport_sql";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "105";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Webreport Sql";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "108";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "webreport_style";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "105";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Webreport Style";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "109";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "webreports";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "105";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Webreports";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "110";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "webreports_view";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "105";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Webreports View";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "111";
	$menuNode["name"] = "User Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "99";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-user-plus";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "User Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "112";
	$menuNode["name"] = "System Users";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "users";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "111";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-users";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "System Users";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "113";
	$menuNode["name"] = "System Users Audit Log";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "derejame_audit";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "111";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-list-alt";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "System Users Audit Log";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "114";
	$menuNode["name"] = "Msc";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "99";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-plus-square-o";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Msc";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "115";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "admin_comments";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "114";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Admin Comments";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "116";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "faicons";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "114";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Faicons";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "117";
	$menuNode["name"] = "Database Management";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "99";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-database";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Database Management";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "118";
	$menuNode["name"] = "Main Database Backup";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "database_backup";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "117";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-database";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Main Database Backup";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "119";
	$menuNode["name"] = "MB Database Backup";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "database_backup";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "117";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "MB_Database_Backup";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-database";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "MB Database Backup";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "120";
	$menuNode["name"] = "Forms Database Backup";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "database_backup";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "117";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "Forms_Database_Backup";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-database";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Forms Database Backup";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "121";
	$menuNode["name"] = "System Settings";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "99";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-gear";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "System Settings";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "122";
	$menuNode["name"] = "Fields Settings";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "settings";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "121";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-text-width";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Fields Settings";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "123";
	$menuNode["name"] = "-------";
	$menuNode["href"] = "";
	$menuNode["type"] = "Separator";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "-------";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "124";
	$menuNode["name"] = "Knowledge Base";
	$menuNode["href"] = "./modules/knowledgebase/main_list.php";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "list";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-book";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Knowledge Base";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "125";
	$menuNode["name"] = "Help Desk";
	$menuNode["href"] = "./modules/helpdesk/menu.php";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "list";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-question-circle";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Help Desk";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "126";
	$menuNode["name"] = "System Usability Survey";
	$menuNode["href"] = "../backend/forms/app/form?id=11";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "list";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-wpforms";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "System Usability Survey";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "127";
	$menuNode["name"] = "-------";
	$menuNode["href"] = "";
	$menuNode["type"] = "Separator";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "-------";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "128";
	$menuNode["name"] = "AI Data Assistant";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "utilities";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "merq_ai_data_assistant";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-wechat";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "AI Data Assistant";



	$menuNodesObject->menuNodes["DerejaMenuSet"][] = $menuNode;
}
?>