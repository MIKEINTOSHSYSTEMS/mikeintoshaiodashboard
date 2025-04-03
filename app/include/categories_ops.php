<?php
$topscategories = array();
			$topscategories["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "?endpoint=categories",
		"payload" => "[]"
	);
	$tables_data["Categories"][".operations"] = &$topscategories;
?>