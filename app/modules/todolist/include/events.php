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


		$this->events["ModifyMenuItem"]=true;

		$this->events["AfterSuccessfulRegistration"]=true;


//	onscreen events
		$this->events["boards_sections"] = true;
		$this->events["save_board"] = true;
		$this->events["board_sections_view"] = true;
		$this->events["board_message"] = true;
		$this->events["div_boardname"] = true;
		$this->events["home"] = true;
		$this->events["Close1"] = true;
		$this->events["todocards_color"] = true;
		$this->events["calcalendar_snippet"] = true;
		$this->events["calcalendar_snippet2"] = true;
		$this->events["calcalendar_snippet1"] = true;
		$this->events["calglobals_snippet"] = true;
		$this->events["anygantt"] = true;
		$this->events["calcalendar_color"] = true;
		$this->events["todocards_color_edit"] = true;
		$this->events["todoboards_search"] = true;
		$this->events["todoboards_snippet"] = true;
		$this->events["_global__snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		header("Location:todoboards_list.php");
exit();

;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		if(Security::getUserName()=="Guest" || Security::getUserName()=="")
	return false;
else
	return true;
;
} // function ModifyMenuItem

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, $pageObject)
{

		
			global $cUserNameField;
DB::Insert("todoboards", array("boardname"=>GetCustomLabel("boardname_start"), "userid"=>$userdata[$cUserNameField]));
$bid = DB::LastId();
DB::Insert("todolists", array("listname"=>GetCustomLabel("listname_start1"), "listorder"=>1, "boardid"=>$bid));
$id1 = DB::LastId();
DB::Insert("todolists", array("listname"=>GetCustomLabel("listname_start2"), "listorder"=>2, "boardid"=>$bid));
$id2 = DB::LastId();
DB::Insert("todolists", array("listname"=>GetCustomLabel("listname_start3"), "listorder"=>3, "boardid"=>$bid));

DB::Insert("todocards", array("boardid"=>$bid, "listid"=>$id2, "cardname"=>GetCustomLabel("start_cardname1"), "categoryid"=>1, "duedate"=>date("Y-m-d",strtotime(now())+60*60*24*90), "ownerid"=>$userdata[$cUserNameField]));
DB::Insert("todocards", array("boardid"=>$bid, "listid"=>$id1, "cardname"=>GetCustomLabel("start_cardname2"), "categoryid"=>2, "duedate"=>date("Y-m-d",strtotime(now())+60*60*24*90), "ownerid"=>$userdata[$cUserNameField]));
;
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_boards_sections(&$params)
	{
	// Put your code here.
echo "<div id='myKanban'></div>";

echo "<div class='kanban_menu_div_assign' id='menuassign'>";
echo "<div class='kanban_menu_x' onclick='$(\"#menuassign\").hide();'>x</div>";
echo "<div class='kanban_menu_assign_header'>".GetCustomLabel("change_category")."</div>";
$rs = DB::Query("select * from ".addTableWrappers("todocategories")." order by ".addFieldWrappers("id"));
echo "<div class=row_assign val='0'>&nbsp;None</div>";
while($data = $rs->fetchAssoc())
	echo "<div class=row_assign val='".$data["id"]."'><span style='background-color:".$data["color"].";padding-right:20px'>&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;".$data["name"]."</div>";
echo "</div>";

	;
}
	function event_save_board(&$params)
	{
	// Put your code here.
echo "<div><button id='saveBoards' class='btn btn-default'>Save Board</button></div>";
	;
}
	function event_board_sections_view(&$params)
	{
	if(postvalue("editid1")){
	$id = postvalue("editid1");
	$rs = DB::Query("select * from ".addFieldWrappers("todolists")." where ".addFieldWrappers("boardid")."=".$id." order by ".addFieldWrappers("listorder"));
	$res = "<table width=100% cellpadding=5px cellpadding=5px border=0><tr>";
	while($data = $rs->fetchAssoc()){
		$res.= "<td style='vertical-align:top;'>";
		$res.= "<div class='kanban-board' style='width: 200px; margin-left: 10px; margin-right: 10px;border:1px solid black;'>";
		$res.= "<header class='kanban-board-header'>";
		$res.= "<div class='kanban-title-board' style='padding-left:10px;'>".$data["listname"]."</div>";
		$res.= "</header>";
		$res.= "<main class='kanban-drag'>";
		$rs2 = DB::Query("select * from ".addFieldWrappers("todocards")." where ".addFieldWrappers("listid")." = ".$data["id"]." order by ".addFieldWrappers("id"));
		while($data2 = $rs2->fetchAssoc()){
			$res.= "<div class='kanban-item' style='padding-left:10px;padding-bottom:5px;padding-top:5px'>";
			$res.= "<span style='width:145px; display:inline-block;'>".$data2["cardname"]."</span>";
			$res.= "</div>";
		}
		$res.= "</main>";
		$res.= "</div>";
		$res.= "</td>";
	}
	$res.= "</tr></table>";
	echo $res;
}
	;
}
	function event_board_message(&$params)
	{
	// Put your code here.
echo "<div id='smessage' class='smessage'>";
if(postvalue("a") == "add")
	echo "Board saved";
echo "</div>";
echo "<input type='hidden' id='copyid' value='".postvalue("copyid1")."'>";
	;
}
	function event_div_boardname(&$params)
	{
	// Put your code here.
echo "<span id=div_boardname class='div_boardname'></span>";
	;
}
	function event_home(&$params)
	{
	// Put your code here.
echo "<span class='glyphicon glyphicon-home home'></span>";
	;
}
	function event_Close1(&$params)
	{
	// Put your code here.
echo "<a href='#' class='btn btn-default' id='closepopup'>".GetCustomLabel("close")."</a>";
	;
}
	function event_todocards_color(&$params)
	{
	// Put your code here.
echo "<div style='float:left;margin-left:15px;'><b>".GetCustomLabel("category")."</b>&nbsp;&nbsp;</div><div id=categoryid class='categoryid' style='width:15px;height:20px;margin-left:80px;'>&nbsp;&nbsp;&nbsp;</div>";
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
	function event_anygantt(&$params)
	{
	echo "<div id='container' style='width:100%;height:600px;'></div>";
	;
}
	function event_calcalendar_color(&$params)
	{
	// Put your code here.
echo "<div style='float:left;margin-left:15px;'><b>Category</b>&nbsp;&nbsp;</div><div id=categoryid class='categoryid' style='width:15px;height:20px;margin-left:80px;'>&nbsp;&nbsp;&nbsp;</div>";
	;
}
	function event_todocards_color_edit(&$params)
	{
	// Put your code here.
echo "<div style='float:left;'><b>".GetCustomLabel("category")."</b>&nbsp;&nbsp;</div><div id=categoryid class='categoryid' style='width:15px;height:20px;margin-left:70px;'>&nbsp;&nbsp;&nbsp;</div>";
	;
}
	function event_todoboards_search(&$params)
	{
	echo '<span data-itemtype="simple_search" data-itemid="simple_search" class="form-group">
<div class="input-group">
	<input type="search" class="form-control" name="ctlSearchFor" id="ctlSearchFor" autocomplete="off" placeholder="search" value="" size="25">
	<span class="input-group-btn">
		<button class="btn btn-default" id="showAll" title="Show all">
			<span class="glyphicon glyphicon-remove"></span>
		</button>
	<button id="searchButtTop" title="Search" class="btn btn-primary">
		<span class="glyphicon glyphicon-search"></span>
	</button>
	</span>
</div>
</span>';
	;
}
	function event_todoboards_snippet(&$params)
	{
	// Put your code here.
echo "Your message";
	;
}
	function event__global__snippet(&$params)
	{
	// Put your code here.
echo "<p id='customheader' align=center>Use <b>admin/admin</b> to login.<br>This header can be found in Header item on the Editor screen.</p>";
	;
}




}
?>