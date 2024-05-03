<?php

include("include/dbcommon.php");

// Put your code here.
require_once('CreateZipFile.php');
$zip = new CreateZipFile;
$hasFiles=false;
$path="";
global $conn;

foreach ($_SESSION["zipfiles"] as $record)
{
	$hasFiles=true;
	if ($record["file_type"]=="file") {
		$fileArray = my_json_decode($record["file"]);
		if (file_exists($fileArray[0]["name"])) {
			$zip->addFile(myfile_get_contents($fileArray[0]["name"]), $fileArray[0]["usrName"]);  	
			$id = $record["id"];
			$list=db_query("SELECT ".AddFieldWrappers("downloads")." FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$id, $conn);
			$curitem = db_fetch_array($list);
			$downloads = 1;
			if($curitem["downloads"])
				$downloads = $curitem["downloads"] + 1;
			db_query("update ".AddTableWrappers("doc_files")." set ".AddFieldWrappers("downloads")." = ".$downloads." WHERE ".AddFieldWrappers("id")."=".$id, $conn);
		}
	}
	else if ($record["file_type"]=="folder") {
		addZipFolder($record["id"], $record["name"], $path );
	}
	
}

if ($hasFiles) {
	header('Content-disposition: attachment; filename='.'selected.zip'.'');
	header('Content-type: application/octetstream');
	echo $zip->getZippedfile();
}

unset($_SESSION["zipfiles"]);

function addZipFolder($id, $folder, $path ) {
	global $zip, $conn;
	$path = addFolderToPath($path, $folder);
	
    $list=db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("parent_folder_id")."=".$id, $conn);
	while($curitem=db_fetch_array($list)) {
			if ($curitem['file_type']=='file') {
				$fileArray = my_json_decode($curitem["file"]);
				if (file_exists($fileArray[0]["name"])) 
					$zip->addFile(file_get_contents($fileArray[0]["name"]), $path.$fileArray[0]["usrName"]);
			}
			else if ($curitem['file_type']=='folder') {
				addZipFolder($curitem['id'], $curitem['name'], $path );
			}
         }


}

function addFolderToPath($path, $folder) {
	return $path.$folder."/";
	
}

?>
