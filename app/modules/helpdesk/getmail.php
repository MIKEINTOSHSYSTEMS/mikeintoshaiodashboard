<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include_once("emailreader_functions.php");
	include_once('include/dbcommon.php');
	include_once('classes/datasource/datasource.php');
	
	include_once('helpdesk_functions.php');
	set_time_limit (600);
	error_reporting(E_ALL ^ E_NOTICE);
//	error_reporting(0);
	restore_error_handler();
	restore_error_handler();
	define("LIMIT_MESSAGES", "1000");
	
    include_once('fetch/Server.php');
	include_once('fetch/Message.php');
	include_once('fetch/Attachment.php');
	
	$servers=0;
	$rsset=DB::Select("hd_settings");
	$dataset = $rsset->fetchAssoc();
	$folder = $dataset["attachment_folder"];
	// main loop
	// get all mail servers 

	$_SESSION["emaildays"] = $dataset["emaildays"];
	$_SESSION["emailfolder"] = $dataset["folder"];

	//fetch INBOX emails only

	

	$rs = DB::Select("hd_servers");
	while ($data = db_fetch_array($rs)) {
		if( $data["lastconnect"] ){
			$lastconnect = new DateTime($data["lastconnect"]);  
			$afterLastSendMinutes = (time() - $lastconnect->getTimestamp())/60;
			if( $afterLastSendMinutes < intval($data["interval"]) )
				continue;

		}
		$servers++;
		// get last LIMIT_MESSAGES email ids for the current mail server
		$dataSource = getDbTableDataSource( "hd_messages", DB::CurrentConnectionId() );
		$dc = new DsCommand();
		$dc->reccount = LIMIT_MESSAGES;
		$rsIDs = $dataSource->getList( $dc );

		$ids=array();
		while ( $dataIDs = $rsIDs->fetchAssoc() ) {
			$ids[$dataIDs["message_id"]]="";
		}
		
		// connect to mail server
		$server = new \Fetch\Server($data["server"],$data["port"]);
		$server->setAuthentication($data["user"],$data["password"]);
		$server->setFlag("novalidate-cert");

		$messages = $server->getMessages(LIMIT_MESSAGES, $ids);
		echo $data["server"] . ": messages: ".count($messages)."<br>";
		
		// process messages
		foreach ($messages as $message) {
			$areply = "";
			$headers = $message->getHeaders();
			if(!isset($headers->message_id))
				continue;
			if (array_key_exists($headers->message_id, $ids)) {
				echo "Message ".htmlspecialchars($headers->message_id)." already exists<br>";
			}
			else {
				echo "Saving message ".htmlspecialchars($headers->message_id)."<br>";
				writeToDB($data["id"], $message, $folder);
			}
			// delete message?
			if ($data["leave_copy"]!=1)
				$message->delete();
		}
		$server->expunge();
		$currentDateTimeForDb = localdatetime2db( runner_date_format("m-d-y H:i:s") );
		DB::Update("hd_servers",array("lastconnect" =>$currentDateTimeForDb),array("id" => $data["id"]));	
	}
	
	if ($servers==0)
		echo "Nothing to do now";



function writeToDB($server_id, $message, $folder) {
	
	global $dal;

	// save attachments to $folder
	$files = array();
	$attachments = $message->getAttachments();
	if ($attachments) {
		foreach ($attachments as $attachment) {
		

			$filename=$attachment->getFilename();
			if($filename){
				$path_parts = er_pathinfo_local($filename);
				$ext = "";
				if(array_key_exists("extension",$path_parts))
					$ext =  $path_parts["extension"];
				$newName=$folder."/".$path_parts["filename"]."_".generatePassword(8).'.'.$ext;
				$attachment->saveAs($newName);
			
				if(file_exists(getabspath($newName)))
					$files[] = array("usrName"=>$filename, "name"=>$newName, "size"=>filesize($newName) , "type"=> getContentTypeByExtension(substr($filename, -4)) );
			}

	
		}
	}

	$created = date("Y-m-d H:i:s");
	$headers = $message->getHeaders();
	$from=$message->getFrom();
	$to=$message->getTo();
	$cc=$message->getCC();
	$bcc=$message->getBCC();
	$subject = decodeMimeStr($message->getSubject());
	
	$ticketid = "";
	$clientid = null;
	if(isset($from[0]) && isset($from[0]["address"]))
	{
		$unamefield = GetUserNameField();
		$client_data = DB::Select($_SESSION["user_table_for_query"],array($unamefield => decodeMimeStr($from[0]["address"])))->fetchAssoc();
		$clientid = $client_data[$_SESSION["user_keyfield_for_query"]];
	}
	
	if(strlen($subject)>9){
	if(substr($subject,-10,4) == "DSS-"){
			$dss = substr($subject,-10);
			$ticketid = DBLookup("select ".AddFieldWrappers("ticketid")." from ".AddTableWrappers("hd_messages")." where ".AddFieldWrappers("subject")." LIKE '%".$dss."'");
			if($ticketid)
				$clientid = DBLookup("select ".AddFieldWrappers("clientid")." from ".AddTableWrappers("hd_tickets")." where ".AddFieldWrappers("id")."=".$ticketid);
		}
	}
	$data = array();
	$data["created"] = $created;
	$data["subject"] = $subject;
	$data["statusid"] = 1;
	$data["priorityid"] = 3;
	$data["folderid"] = 1;
	$data["directionid"] = 1;
	$data["ticketemail"] = decodeMimeStr($from[0]["address"]);
	$data["clientid"] = $clientid;
	if(!$ticketid){
		DB::Insert("hd_tickets", $data );
		$ticketid = DB::LastId();
	}
	else{
		$keysvalue["id"] = $ticketid;
		DB::Update("hd_tickets", $data, $keysvalue );
	}
	$fromEmail = DBLookup("select ".AddFieldWrappers("fromEmail")." from ".AddTableWrappers("hd_settings"));
	$fromName = DBLookup("select ".AddFieldWrappers("fromName")." from ".AddTableWrappers("hd_settings"));
	
	$data = array();
	$data["created"]=$created;
	$data["attachment"]= $files ? my_json_encode($files) : "";
	$body = cleanBody(decodeMimeStr($message->getMessageBody(true)));
	$data["body"]=processInlineImages($body, $message);  
	$data["to_email"]=decodeMimeStr($to[0]["address"]);
	if($fromEmail == $data["to_email"])
		$data["to_name"] = $fromName;
	else{
		if(isset($to[0]["name"]))
			$data["to_name"] = decodeMimeStr($to[0]["name"]);
	}
	$data["message_id"]=decodeMimeStr($headers->message_id);
	$data["subject"]=$subject;
	$data["maildate"]= date("Y-m-d H:i:s",strtotime($headers->date));
	$data["from_email"]= (isset($from[0]) && isset($from[0]["address"]))?decodeMimeStr($from[0]["address"]):"";
	$data["from_name"]= (isset($from[0]) && isset($from[0]["name"]))?decodeMimeStr($from[0]["name"]):""; 
	$data["cc"]= (isset($cc[0]) && isset($cc[0]["address"]))?decodeMimeStr($cc[0]["address"]):""; 
	$data["bcc"]= (isset($bcc[0]) && isset($bcc[0]["address"]))?decodeMimeStr($bcc[0]["address"]):""; 
	$data["server_id"]= $server_id;
	$data["ticketid"]= $ticketid;
	$data["statusid"] = 1;
	$data["directionid"]= 1;
	DB::Insert("hd_messages", $data );

	DB::Exec("update ".AddTableWrappers("hd_folders")." set ".AddFieldWrappers("lastticket")."='".$created."' where ".AddFieldWrappers("id")."=1");

	processEmail(array("from"=>decodeMimeStr($from[0]["address"]),"subject"=>decodeMimeStr($message->getSubject()),"body"=>processInlineImages($body, $message),"attachments"=>$files ? my_json_encode($files) : ""));

}

function decodeMimeStr($string, $charset="UTF-8" ) 
{ 
      $newString = ''; 
      $elements=imap_mime_header_decode($string); 
      for($i=0;$i<count($elements);$i++) 
      { 
        if ($elements[$i]->charset == 'default') 
          $elements[$i]->charset = $charset; 
        $newString .= iconv($elements[$i]->charset, $charset, $elements[$i]->text); 
      } 
      return $newString; 
} 

function er_pathinfo_local($path)
{
	$ret = pathinfo($path);
	if(!isset($ret["filename"]))
	{
		$extlen = strlen($ret['extension']);
		if($extlen)
			++$extlen;
		$ret["filename"] = substr($ret["basename"],0, strlen($ret["basename"]) - $extlen);
	}
	return $ret;
}

function cleanBody($input) {
$input = preg_replace('/<head>(.*)<\/head>/is', '', $input);

return $input;
}

function processInlineImages($body, $message) {

$regex='/<img(.*?)cid:([^"]+)"/s';
preg_match_all($regex, $body, $matches);
$attachments = $message->getAttachments();
if(is_array($attachments)){
	for ($i=0; $i<count($matches[2]);$i++) {
		foreach ($attachments as $attachment) {
			if ($matches[2][$i]==$attachment->getID()) {
				$imgstr="file.php?file=".$attachment->getFilename()."&table=hd_messages&field=attachment&pageType=view&key1=%%id%%&nodisp=1";
				$body=str_replace($matches[2][$i],$imgstr,$body);
				}
			}
	}
}

$body = str_replace("cid:","",$body);
return $body;

}


?>