<?php
include("include/dbcommon.php");
$rs = DB::Query("select * from mtsettings");
$data = $rs->fetchAssoc();

$rs2 = DB::Select("mttimezone", array("id"=>$data["timezone"]));
$data2 = $rs2->fetchAssoc();
if($data["provider"] == "Ring Central")
	$timezone = $data2["rc"];
else
	$timezone = $data2["zoom"];

date_default_timezone_set($timezone);

global $twilioSID, $twilioAuth, $twilioNumber;
echo "Starting ...<br>";
$rv = DB::Query("select * from ".addTableWrappers("mtmeetings")." where ".addFieldWrappers("schedule")."<>'' and ".addFieldWrappers("notitime")."<>'' and ".addFieldWrappers("notisend")."=0");
while($values = $rv->fetchAssoc()){
	$notidate = date("Y-m-d",strtotime($values["schedule"]));
	$notidate = strtotime($notidate)+$values["notiday"]*24*60*60;
	$notidate = date("Y-m-d",$notidate)." ".$values["notitime"];
	if(strtotime($notidate)<=strtotime(date("Y-m-d H:i:s")) && strtotime($values["schedule"])>=strtotime(date("Y-m-d H:i:s"))){
		$dt="";
		$dt = date("m/d/Y h:i:s", strtotime($values["schedule"]));
		$rs = DB::Select("mtsettings");
		$data = $rs->fetchAssoc();
		if($data["emailfield"]){
			$email = "";
			$rs2 = DB::Query("select * from ".addTableWrappers($data["userstable"])." where ".addFieldWrappers($data["idfield"])." in (".$values["users"].",0) and ".addFieldWrappers($data["idfield"])."<>".$values["ownerid"]);
			while($data2 = $rs2->fetchAssoc()){
				if($email)
					$email.=",";
				$email.=$data2[$data["emailfield"]];
			}
			if($email){
				$subject = $values["subj"];
				$body = $values["email"]."\r\n";
				if($dt)
					$body.= "Schedule: ".$dt."\r\n";
				$body.= $values["joinlink"];
				$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $body));
			}
			$rs2 = DB::Query("select * from ".addTableWrappers($data["userstable"])." where ".addFieldWrappers($data["idfield"])."=".$values["ownerid"]);
			$data2 = $rs2->fetchAssoc();
			$email=$data2[$data["emailfield"]];
			$subject = $values["subj"];
			$body = $values["email"]."\r\n";
			if($dt)
				$body.= "Schedule: ".$dt."\r\n";
			$body.= $values["createlink"];

			$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $body));
		}
		if($data["phonefield"]){
			$number = "";
			$sms = $values["sms"]." ";
			if($dt)
				$sms.= "Schedule: ".$dt.",";
			$sms.= $values["joinlink"];
			$rs2 = DB::Query("select * from ".addTableWrappers($data["userstable"])." where ".addFieldWrappers($data["idfield"])." in (".$values["users"].",0) and ".addFieldWrappers($data["idfield"])."<>".$values["ownerid"]);
			while($data2 = $rs2->fetchAssoc()){
				$number = $data2[$data["phonefield"]];
				if($number)
					$ret = runner_sms($number, $sms);
			}
			$sms = $values["sms"]." ";
			if($dt)
				$sms.= "Schedule: ".$dt.",";
			$sms.= $values["createlink"];
			$rs2 = DB::Query("select * from ".addTableWrappers($data["userstable"])." where ".addFieldWrappers($data["idfield"])."=".$values["ownerid"]);
			$data2 = $rs2->fetchAssoc();
			$number = $data2[$data["phonefield"]];
			if($number)
				$ret = runner_sms($number, $sms);
		}
		DB::Update("mtmeetings", array("notisend"=>1), array("id"=>$values["id"]));
		echo "Meetind name: ".$values["name"]." ".$values["schedule"]."<br>";
	}
}	
echo "Finish";
?>