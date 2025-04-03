<?php
$topscourses = array();
			$topscourses["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "?endpoint=courses",
		"payload" => "[]"
	);
	$tables_data["Courses"][".operations"] = &$topscourses;
?>