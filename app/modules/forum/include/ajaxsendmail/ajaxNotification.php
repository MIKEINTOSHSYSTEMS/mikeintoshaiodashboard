<?php
include_once "../dbcommon.php";
if( !Security::isLoggedIn() || !isset($_GET["step"]) || !isset($_GET["topicid"])) exit();
$step = intval($_GET["step"]); 
$result = sendMailsAfterNewTopicByStep($step,$_GET["topicid"]);
$resultArr = array("count" => $result );
print my_json_encode( $resultArr );

?>