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

		$this->events["BeforeRegister"]=true;


//	onscreen events
		$this->events["regions_map"] = true;
		$this->events["regions_map1"] = true;
		$this->events["regions_map2"] = true;
		$this->events["catefory_list"] = true;
		$this->events["category_select"] = true;
		$this->events["category_title"] = true;
		$this->events["helpfull"] = true;
		$this->events["login_header"] = true;
		$this->events["main_snippet"] = true;
		$this->events["_global__snippet"] = true;
		$this->events["_global__snippet1"] = true;
		$this->events["dashboard_pages_snippet"] = true;
		$this->events["utilities_snippet"] = true;
		$this->events["utilities_snippet1"] = true;
		$this->events["utilities_snippet2"] = true;
		$this->events["utilities_snippet3"] = true;
		$this->events["utilities_snippet4"] = true;
		$this->events["survey_form_lists"] = true;
		$this->events["Form_Submissions"] = true;
		$this->events["utilities_snippet5"] = true;
		$this->events["career_compass_submissions"] = true;
		$this->events["utilities_snippet6"] = true;
		$this->events["_global__snippet_apikey"] = true;



		}

//	handlers

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		

//**********  Redirect to another page  ************
header("Location: dashboards_list.php?menuItemId=1");
exit();



// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$message, $pageObject)
{

		

// Place event code here.

$api_key = getPasswordHash ($userdata["id"].$userdata["username"]);
$userdata["api_key"] = $api_key;
$_SESSION["apikey"] = $api_key;

return true;

;
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

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
	function event__global__snippet(&$params)
	{
	// Put your code here.
echo '<IFRAME SRC="hello.html" WIDTH=450 HEIGHT=100>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">link</A>

you to the file.

</IFRAME>';
	;
}
	function event__global__snippet1(&$params)
	{
	// Put your code here.
echo '<IFRAME SRC="https://derejademo.merqconsultancy.org/public/dashboard/7fe22d0e-2524-49c9-bab8-4073fb257913" WIDTH=450 HEIGHT=100>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">link</A>

you to the file.

</IFRAME>';
	;
}
	function event_dashboard_pages_snippet(&$params)
	{
	echo '<IFRAME SRC="https://derejademo.merqconsultancy.org/public/dashboard/7fe22d0e-2524-49c9-bab8-4073fb257913" WIDTH=100% HEIGHT=100%>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">link</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet(&$params)
	{
	echo '<IFRAME SRC="./modules/chat/chat_history_add.php" WIDTH=100% HEIGHT=900px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">link</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet1(&$params)
	{
	echo '<IFRAME SRC="./modules/todolist/todoboards_list.php" WIDTH=100% HEIGHT=900px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet2(&$params)
	{
	echo '<IFRAME SRC="./modules/docmanager/doc_files_list.php" WIDTH=100% HEIGHT=900px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet3(&$params)
	{
	echo '<IFRAME SRC="./modules/knowledgebase/main_list.php" WIDTH=100% HEIGHT=900px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet4(&$params)
	{
	echo '<IFRAME SRC="./modules/survey/login.php" WIDTH=100% HEIGHT=900px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_survey_form_lists(&$params)
	{
	echo '<IFRAME SRC="./modules/survey/lists/index.php" WIDTH=100% HEIGHT=4000px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_Form_Submissions(&$params)
	{
	echo '<IFRAME SRC="./modules/survey/lists/submissions/form_submissions.php" WIDTH=100% HEIGHT=1350px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet5(&$params)
	{
	echo '<IFRAME SRC="./modules/survey/lists/assessments/career_compass/career_compass.php" WIDTH=100% HEIGHT=5000px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_career_compass_submissions(&$params)
	{
	echo '<IFRAME SRC="./modules/survey/lists/assessments/career_compass/views/careercompass.php" WIDTH=100% HEIGHT=1350px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">MERQ Consultancy</A>

you to the file.

</IFRAME>';

	;
}
	function event_utilities_snippet6(&$params)
	{
	echo '<IFRAME SRC="https://me.dereja.com:8502" WIDTH=100% HEIGHT=900px>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../test.php">link</A>

you to the file.

</IFRAME>';
	;
}
	function event__global__snippet_apikey(&$params)
	{
	
// Put your code here.
echo "Your API Key is: ".$_SESSION["apikey"];
	;
}

	function event_regions_map(&$params)
	{
		$mapSettings['id'] = "regions_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["RegionName"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitude";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitude";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}
	function event_regions_map1(&$params)
	{
		$mapSettings['id'] = "regions_map1";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["RegionName"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["Lat"] = "Latitude";

// name of field in table that used as longitude for map
$mapSettings["Lng"] = "Longitude";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}
	function event_regions_map2(&$params)
	{
		$mapSettings['id'] = "regions_map2";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "RegionName";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}



}
?>