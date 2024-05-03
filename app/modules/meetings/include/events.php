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
		$this->events["mtmeetings_snippet"] = true;
		$this->events["create_meeting"] = true;
		$this->events["join_meeting"] = true;
		$this->events["clink"] = true;
		$this->events["jlink"] = true;
		$this->events["calcalendar_snippet"] = true;
		$this->events["calcalendar_snippet2"] = true;
		$this->events["calcalendar_snippet1"] = true;
		$this->events["calglobals_snippet"] = true;
		$this->events["Close"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		header("Location: calcalendar_list.php");
die();

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		header("Location: calcalendar_list.php");
die();
;
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_mtmeetings_snippet(&$params)
	{
	echo $_SESSION["fillSettings"];
	;
}
	function event_create_meeting(&$params)
	{
	if($_SESSION["createmeeting"])
echo $_SESSION["createmeeting"];
	;
}
	function event_join_meeting(&$params)
	{
	echo $_SESSION["joinmeeting"];
	;
}
	function event_clink(&$params)
	{
	echo $_SESSION["clink"];
	;
}
	function event_jlink(&$params)
	{
	// Put your code here.
echo $_SESSION["jlink"];
	;
}
	function event_calcalendar_snippet(&$params)
	{
	echo "<div id='calendar'></div>";
	;
}
	function event_calcalendar_snippet2(&$params)
	{
	?>
<script>
<?php
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsEdit($_REQUEST["editid1"]);
?>
</script>
<?php
	;
}
	function event_calcalendar_snippet1(&$params)
	{
	?>
<script>
<?php
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsAdd();
?>
</script>
<?php
	;
}
	function event_calglobals_snippet(&$params)
	{
	?>
<script>
<?php
calendar_outputTimeFieldsEdit(-1);
?>
</script>
<?php
	;
}
	function event_Close(&$params)
	{
	echo "<a href='#' class='btn btn-default' id='closepopup'>".GetCustomLabel("close")."</a>";
	;
}




}
?>