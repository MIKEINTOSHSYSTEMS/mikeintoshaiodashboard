<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_sv_surveys  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeShowList"]=true;


		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;



	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		if(postvalue("act") == "activate"){
	$respJSON = array();
	if (postvalue("type")=='activate')
		$respJSON['html'] = myfile_get_contents(getabspath('templates/activate_survey.htm'), 'r');
	else 
		$respJSON['html'] = myfile_get_contents(getabspath('templates/deactivate_survey.htm'), 'r');

	echo my_json_encode($respJSON);
	exit();
}
if ($_GET["a"]=="activate" || $_GET["a"]=="deactivate")
{
	$rss=CustomQuery("select ".AddFieldWrappers("active")." from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")." = " . $_GET["sid"]);
	$data = db_fetch_array($rss);
	if (!$data)
		return;
	$active=$data["active"];
}

if ($_GET["a"]=="activate" && !$active)
{
	activateSurvey($_GET["sid"], $_GET["archivename"]);
}
elseif ($_GET["a"]=="deactivate" && $active==1)
{
	deactivateSurvey($_GET["sid"], $_GET["archivename"]);
}


;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, $pageObject)
{

		if ($_SESSION['UserID']=='Guest'){
	if($strWhereClause)
		$strWhereClause = '('.$strWhereClause.') and '.AddFieldWrappers("active").' = 1 ';
	else
		$strWhereClause =' '.AddFieldWrappers("active").' = 1 ';
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddJSFile("include/survey_functions.js");

if ($_SESSION['UserID']=='Guest') {
	$xt->assign('view_column',false);
}

if (!$pageObject->rowsFound){
	$xt->assign("message", "There are no available surveys");
}

;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
$values['created']=mydate("Y-n-j","");

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		

global $dal;
$dal->Table('sv_groups')->name=GetCustomLabel("name");
$dal->Table('sv_groups')->description=GetCustomLabel("description");
$dal->Table('sv_groups')->sid=$keys['id'];
$dal->Table('sv_groups')->sortorder=1;
$dal->Table('sv_groups')->Add();


// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>