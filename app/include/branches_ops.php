<?php
$topsbranches = array();
			$topsbranches["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "?endpoint=branches",
		"payload" => "[]"
	);
	$tables_data["Branches"][".operations"] = &$topsbranches;
?>