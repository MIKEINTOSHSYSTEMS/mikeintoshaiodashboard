<?php
require_once("include/dbcommon.php");
$rs = DB::Select("forumtopics");
while( $data = $rs->fetchAssoc() ){
    $topic_link = GetTableLink("forumreplies","list", "mastertable=forumtopics&masterkey1=".$data["id"]);
    echo projectURL().$topic_link."<br>";
}
?>