<?php 
include_once("include/phpfunctions.php");
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$filename= $_GET["filename"];
$origname= $_GET["origname"];
$ext=substr($filename,strlen($filename)-4);
$sid = $_GET["sid"];

if(!$sid || !$filename)
	exit();


if($ext==".asf")
	$ctype = "video/x-ms-asf";
elseif($ext==".avi")
	$ctype = "video/avi";
elseif($ext==".doc")
	$ctype = "application/msword";
elseif($ext==".zip")
	$ctype = "application/zip";
elseif($ext==".xls")
	$ctype = "application/vnd.ms-excel";
elseif($ext==".gif")
	$ctype = "image/gif";
elseif($ext==".jpg" || $ext=="jpeg")
	$ctype = "image/jpeg";
elseif($ext==".wav")
	$ctype = "audio/wav";
elseif($ext==".mp3")
	$ctype = "audio/mpeg3";
elseif($ext==".mpg" || $ext=="mpeg")
	$ctype = "video/mpeg";
elseif($ext==".rtf")
	$ctype = "application/rtf";
elseif($ext==".htm" || $ext=="html")
	$ctype = "text/html";
elseif($ext==".asp")
	$ctype = "text/asp";
else
	$ctype = "application/octet-stream";

$absFileName = getabspath("upload/surveys/".$sid."/files/".$filename);
	
$strfilesize = filesize($absFileName);

header("Content-Type: ".$ctype);
header("Content-Disposition: attachment;Filename=\"".$origname."\"");
header("Cache-Control: private");
header("Content-Length: ".$strfilesize);
printfile($absFileName);

?>