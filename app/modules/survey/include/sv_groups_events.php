<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_sv_groups  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
// populate survey id and sort order
$values['sid']=$_SESSION["sv_questions_masterkey1"];

if (!$values['sortorder'] || $values['sortorder']==0)
{
	$rss = CustomQuery("select max(".AddFieldWrappers("sortorder").")+1 as ".AddFieldWrappers("m")." from ".AddTableWrappers("sv_groups")." where ".AddFieldWrappers("sid")."=".$_SESSION["sv_questions_masterkey1"]);
	$data = db_fetch_array($rss);
	$values['sortorder']=$data['m'];
}
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$pageObject->setProxyValue('saved', true);  
$pageObject->stopPRG = true;


// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>