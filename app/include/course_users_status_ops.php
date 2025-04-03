<?php
$topscourse_users_status = array();
			$topscourse_users_status["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "?endpoint=courses&all=true&only_ids=true&auto_fetch_details=true",
		"payload" => "[]"
	);
	$tables_data["Course_Users_Status"][".operations"] = &$topscourse_users_status;
?>