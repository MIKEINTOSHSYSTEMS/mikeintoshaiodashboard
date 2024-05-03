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

		$this->events["AfterSuccessfulRegistration"]=true;

		$this->events["BeforeShowMenu"]=true;


//	onscreen events
		$this->events["sv_questions_snippet"] = true;
		$this->events["sv_questions_snippet1"] = true;
		$this->events["response_survey"] = true;
		$this->events["sv_title"] = true;
		$this->events["survey_description"] = true;
		$this->events["survey_welcome"] = true;
		$this->events["total_questions"] = true;
		$this->events["progreessbar"] = true;
		$this->events["sv_message"] = true;
		$this->events["survey_end"] = true;
		$this->events["prev"] = true;
		$this->events["next_submit"] = true;
		$this->events["Save_for_later"] = true;
		$this->events["survey_response_view"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		global $cLoginTable, $cUserNameField, $cPasswordField;

if(postvalue("sid") && postvalue("hash") && postvalue("page")){
	$_SESSION["UserID"]="Guest";

	if(postvalue("userid")){
		DB::SetConnection(DB::ConnectionByTable($cLoginTable));
		$rs = DB::Query("select * from ".AddTableWrappers($cLoginTable)." where ".AddFieldWrappers($cUserNameField)." = '".postvalue("userid")."'");
		DB::SetConnection(DB::DefaultConnection());
		$data=$rs->fetchAssoc();
		if($data[$cUserNameField])
			$_SESSION["UserID"]=$data[$cUserNameField];
	}
		
	//$str1="select * from ".AddTableWrappers("sv_survey_".postvalue("sid"))." where ".AddFieldWrappers("hash")."='".postvalue("hash")."'";
	//$rs1=CustomQuery($str1);
	//$data1=db_fetch_array($rs1);
	//$_SESSION["page"] =$data1["lastpage"];
	$_SESSION["page"] = postvalue("page");

	$str1="select * from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")."=".postvalue("sid");
	$rs1=CustomQuery($str1);
	$data1=db_fetch_array($rs1);
	$format = $data1["format"];		
	$num_group = 0;
	$num_question = 0;
	$rss=CustomQuery("select ".AddTableWrappers("q").".*,".AddTableWrappers("gr").".".AddFieldWrappers("name").",".AddTableWrappers("gr").".".AddFieldWrappers("description")." from ".AddTableWrappers("sv_questions")." ".AddTableWrappers("q")." inner join ".AddTableWrappers("sv_groups")." ".AddTableWrappers("gr")." on ".AddTableWrappers("gr").".".AddFieldWrappers("id")."=".AddTableWrappers("q").".".AddFieldWrappers("group_id")." where ".AddTableWrappers("q").".".AddFieldWrappers("sid")."=".postvalue('sid')." order by ".AddTableWrappers("gr").".".AddFieldWrappers("sortorder").",".AddTableWrappers("q").".".AddFieldWrappers("sortorder").",".AddTableWrappers("q").".".AddFieldWrappers("id"));
	$group_name="";
	while($data=db_fetch_array($rss))
	{
		if ($group_name!=$data["name"])
		{
			$group_name=$data["name"];
			$num_group++;
		}
		$num_question++;
	}
	switch($format)
	{
		case "A":
			$_SESSION["total_page"] = 1;
			break;
		case "G":
			$_SESSION["total_page"] = $num_group;
			break;
		case "Q":
			$_SESSION["total_page"] = $num_question;
			break;
	}
	$tp="";
	if(postvalue("totalpage"))
		$tp="&totalpage=".postvalue("totalpage");
	header("Location: response_add.php?page=".postvalue("page")."&hash=".postvalue("hash")."&sid=".postvalue("sid").$tp);
	exit();
}
header("Location: sv_surveys_list.php");
exit();




;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, $pageObject)
{

		global $cLoginTable;
// find id from users table
DB::SetConnection(DB::ConnectionByTable($cLoginTable));
$rs1 = DB::Query("select max(".AddFieldWrappers("id").") as ".AddFieldWrappers("m")." from ".AddTableWrappers($cLoginTable));
DB::SetConnection(DB::DefaultConnection());
if($data1 = $rs1->fetchAssoc()) 
       $id=$data1["m"];

// create a survey with one question
CustomQuery("insert into ".AddTableWrappers("sv_surveys")." (".AddFieldWrappers("format").", ".AddFieldWrappers("title").", ".AddFieldWrappers("userid").") values ('A','My first survey',".$id.")");

// find survey id
$rs2 = CustomQuery("select max(".AddFieldWrappers("id").") as ".AddFieldWrappers("m")." from ".AddTableWrappers("sv_surveys"));
if($data2 = db_fetch_array($rs2)) 
       $sid=$data2["m"];

// add group
CustomQuery("insert into ".AddTableWrappers("sv_groups")." (".AddFieldWrappers("sid").", ".AddFieldWrappers("name").", ".AddFieldWrappers("sortorder").") values (".$sid.",'Group 1',1)");

// find group id
$rs3 = CustomQuery("select max(".AddFieldWrappers("id").") as ".AddFieldWrappers("m")." from ".AddTableWrappers("sv_groups"));
if($data3 = db_fetch_array($rs3)) 
       $gid=$data3["m"];

// add first question
CustomQuery("insert into ".AddTableWrappers("sv_questions")." (".AddFieldWrappers("sid").", ".AddFieldWrappers("group_id").", ".AddFieldWrappers("type").", ".AddFieldWrappers("question").") values (".$sid.",".$gid.",'T','My first question')");
;
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowMenu(&$xt, &$templatefile, $pageObject)
{

		header("Location: sv_surveys_list.php");
die();
;
} // function BeforeShowMenu

		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_sv_questions_snippet(&$params)
	{
	// Put your code here.
echo "{$subheader}";
	;
}
	function event_sv_questions_snippet1(&$params)
	{
	echo "{$grouptext_value}";

	;
}
	function event_response_survey(&$params)
	{
	$res = '<form name="surveyform" id="surveyform" method="post" action="response_add.php'.$_SESSION["sv_page"].'">
						<input type="hidden" name="a" value="added">
						<input type="hidden" name="locat" id="locat" value="">
						<input type="hidden" name="error" id="error" value="">
						<input type="hidden" name="hash" value="'.$_SESSION["hash"].'">
						<input type="hidden" value="'.$_SESSION["format_date"].'" name="format_date" id="format_date">
						<div>';
foreach($_SESSION["rowinfo"]["data"] as $val){
		$res.="	<div>
				<div class='group'><p>".$val["group_name"]."</p>
				<p style='padding-bottom:15px;'>".$val["group_description"]."</p></div>
				<div>&nbsp;</div>
				<div>".$val["questions"]."</div>
			</div>";
}							
$res.= "</div>
					</form>
";
echo $res;
	;
}
	function event_sv_title(&$params)
	{
	echo $_SESSION["survey_title"];
	;
}
	function event_survey_description(&$params)
	{
	// Put your code here.
echo $_SESSION["survey_description"];
	;
}
	function event_survey_welcome(&$params)
	{
	// Put your code here.
echo $_SESSION["survey_welcome"];
	;
}
	function event_total_questions(&$params)
	{
	// Put your code here.
echo $_SESSION["total_questions"];
	;
}
	function event_progreessbar(&$params)
	{
	// Put your code here.
echo $_SESSION["progreessbar_table"];
	;
}
	function event_sv_message(&$params)
	{
	echo $_SESSION["sv_message"];
	;
}
	function event_survey_end(&$params)
	{
	// Put your code here.
echo $_SESSION["survey_end"];
	;
}
	function event_prev(&$params)
	{
	echo "<a class=\"btn btn-default\" type=button onclick='survey_validation(\"prev\");return false;'>".GetCustomLabel("prev")."</a>";
	;
}
	function event_next_submit(&$params)
	{
	// Put your code here.
echo "<a class='btn btn-primary' type=button onclick='survey_validation(\"next\");return false;'>".$_SESSION["buttonname"]."</a>";
	;
}
	function event_Save_for_later(&$params)
	{
	// Put your code here.
echo "<a class=\"btn btn-default\" type=button onclick='Save_for_later(\"\",\"".$_SESSION["sv_page"]."\");return false;'>".GetCustomLabel("save_for_later")."</a>";
	;
}
	function event_survey_response_view(&$params)
	{
	$res = '<div><style>td{ padding:5px}</style>';
foreach($_SESSION["rowinfo"]["data"] as $val){
		$res.="	<div>
				<div class='group'><p>".$val["group_name"]."</p>
				<p style='padding-bottom:15px;'>".$val["group_description"]."</p></div>
				<div>&nbsp;</div>
				<div>".$val["questions"]."</div>
			</div>";
}							
$res.= "</div>";
echo $res;
	;
}




}
?>