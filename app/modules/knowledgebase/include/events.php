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
		$this->events["BeforeProcessMenu"]=true;

		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events
		$this->events["catefory_list"] = true;
		$this->events["category_select"] = true;
		$this->events["category_title"] = true;
		$this->events["helpfull"] = true;
		$this->events["login_header"] = true;
		$this->events["main_snippet"] = true;



		}

//	handlers

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		header("Location:main_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		header("Location:main_list.php");
exit();
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_catefory_list(&$params)
	{
	$main_link = GetTableLink("main","list")."?page=category&";
$category_rs = DB::Select("kbcategories");
while($category = $category_rs->fetchAssoc() ){
	$link = $main_link."f=(Category~equals~".rawurlencode($category["Category"]).")";
	echo "<div class='category'><a href='".$link."'><i class='fa ".$category["faicon"]."'></i><span>".$category["Category"]."</span><span>".$category["Description"]."</span></a></div>";
}

	;
}
	function event_category_select(&$params)
	{
	$category_rs = DB::Select("kbcategories");
echo "<select class='form-control'>";
echo "<option value=''>All categories</option>";
while( $category = $category_rs->fetchAssoc() ){
		$selected = "";
		if($category["Category"] === $_SESSION["category"])
			$selected = "selected=selected";
		echo "<option value='".rawurlencode($category["Category"])."' ".$selected.">".$category["Category"]."</option>";
}

echo "</select>";
	
	;
}
	function event_category_title(&$params)
	{
	echo $_SESSION["category"];
	;
}
	function event_helpfull(&$params)
	{
	

echo "<span class='helpfultext'>Was this article helpful?</span>";
echo "<span class='buttons'>";
echo "<span data-column='like class='yes fa fa-thumbs-up'>Yes</span>";
echo "<span data-column='dislike' class='no fa fa-thumbs-down'>No</span>";
echo "<span class='feedback fa fa-comment'>Add Comment</span>";
echo "</span>";
echo "<span class='thankyou'>Thank you for your feedback!</span>";
	;
}
	function event_login_header(&$params)
	{
	echo '<div class="alert alert-info" style="text-align:center;background-color:#fffefb;margin-bottom:0px;padding: 5px;">
Use <b>admin/admin</b> to login
</div>';
	;
}
	function event_main_snippet(&$params)
	{
	// Put your code here.
echo '<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
</g>
</svg>
</div>';
	;
}




}
?>