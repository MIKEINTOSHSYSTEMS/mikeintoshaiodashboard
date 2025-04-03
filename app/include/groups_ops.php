<?php
$topsgroups = array();
			$topsgroups["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "?endpoint=groups",
		"payload" => "[]"
	);
	$tables_data["Groups"][".operations"] = &$topsgroups;
?>