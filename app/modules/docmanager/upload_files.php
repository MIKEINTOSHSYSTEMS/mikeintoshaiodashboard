<?php

include("include/dbcommon.php");

// simple file upload
// save files, save file info in session variable $_SESSION["pending_files"]

if (!empty($_FILES)) 
{    
	$path_parts = doc_pathinfo_local($_FILES['file']['name']);
	$isCatStr = DBLookup("select ".AddFieldWrappers("isStructure")." from ".AddTableWrappers("doc_settings"));
	if($isCatStr){
		if(!myfile_exists($_SESSION["mkdirForFiles"]))
			mkdir($_SESSION["mkdirForFiles"], 0700, true);
		$newOrigName = $path_parts["filename"].'.'.$path_parts["extension"];
		$newName = $path_parts["filename"]."_".generatePassword(8).'.'.$path_parts["extension"];
		if(!isAbsolutePath($_SESSION["mkdirForFiles"])){
			$targetFile =  getabspath($_SESSION["mkdirForFiles"])."/". $newName; 
			$pathNewOrigName = getabspath($_SESSION["mkdirForFiles"]."/".$newOrigName);
		}
		else{
			$targetFile =  $_SESSION["mkdirForFiles"]."/". $newName; 
			$pathNewOrigName = $_SESSION["mkdirForFiles"]."/".$newOrigName;
		}
		
		if(file_exists($pathNewOrigName)){
			$isFound = false;
			$i = 2;
			while(!$isFound){
				$newFName = $path_parts["filename"].'('.$i.').'.$path_parts["extension"];
				if(!isAbsolutePath($_SESSION["mkdirForFiles"]))
					$pathNewFName = getabspath($_SESSION["mkdirForFiles"]."/".$newFName);
				else
					$pathNewFName = $_SESSION["mkdirForFiles"]."/".$newFName;
				if(file_exists($pathNewFName))
					$i++;
				else
					$isFound = true;
				
			}
			$_SESSION["dublArray"][] = array("usrName"=>$_FILES['file']['name'], "name"=>$targetFile, "size"=>$_FILES['file']['size'], "type"=>$_FILES['file']['type'], "newName" => $newFName);
		}
	}
	else{
		$newName = $path_parts["filename"]."_".generatePassword(8).'.'.$path_parts["extension"];
		$targetFile =  $_SESSION["upload_path"]."/". $newName; 
	}
	
    upload_File($_FILES['file'],$targetFile); 
		
	$_SESSION["pending_files"][] = array("usrName"=>$_FILES['file']['name'], "name"=>$targetFile, "size"=>$_FILES['file']['size'] , "type"=>$_FILES['file']['type'] );
}

if ($_POST["fileToDelete"]) 
{	
	$indToRemove = array();		
	foreach ($_SESSION["pending_files"] as $ind=>$file) 
	{
		if ($file["usrName"] == $_POST["fileToDelete"]) 
		{
			if (file_exists($file["name"])) 
				unlink( $file["name"] );
			
			$indToRemove[] = $ind;
		}
	}

	foreach ($indToRemove as $ind) 
	{
		unset( $_SESSION["pending_files"][$ind] );
	}
}

?>