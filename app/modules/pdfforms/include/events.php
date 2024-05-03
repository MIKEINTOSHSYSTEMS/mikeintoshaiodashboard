<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeProcessMenu"]=true;


//	onscreen events
		$this->events["forms_myquery"] = true;
		$this->events["Make_PDF"] = true;
		$this->events["pdffile_shippet"] = true;
		$this->events["SQL_Field_Name"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		header("Location:pdf_forms_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		header("Location:pdf_forms_list.php");
exit();
;
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_forms_myquery(&$params)
	{
	echo "<a class=\"various fancybox.iframe\" id=\"sql_query\" href=\"myquery.php?ie=UTF-8&amp;iframe\"></a>";
	;
}
	function event_Make_PDF(&$params)
	{
	echo "<a type='button' title='' class='btn btn-primary' id='pdfButton'>".GetCustomLabel("makePdf")."</a>";
	;
}
	function event_pdffile_shippet(&$params)
	{
	$rs = DB::Select("pdf_forms", array("id"=>postvalue("editid1")));
$data = $rs->fetchAssoc();
echo GetCustomLabel("completed_pdf_form").":&nbsp;<span id=pdffilename><a target=_blank href=".$data["pdffile"].">".$data["pdffile"]."</a></span>";
	;
}
	function event_SQL_Field_Name(&$params)
	{
	// Put your code here.
echo "<b>".GetCustomLabel("sql_field_name")."</b>";
	;
}




}
?>