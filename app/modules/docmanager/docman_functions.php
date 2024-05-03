<?php

define("ROOT_FOLDER", "<span class='glyphicon glyphicon-home'></span>");
define("ROOT_FOLDER_ID", 0);
define("HASH_LENGTH",25);

class DocTFolder
{
    public $hash;
	public $name;
	
	public function __construct($hash, $name) {
		$this->hash = $hash;
		$this->name = $name;
	}
}

function formatBytes($size, $precision = 2)
{
	if (strlen($size)==0) return "";
    $base = log($size) / log(1024);
    $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');   

    return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
}


function delRecursive($id) 
{
	global $conn;
	if ($id=="") 
		return;
		
    $qlist = db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("parent_folder_id")."=".$id, $conn);
	while( $curitem = db_fetch_array($qlist) ) 
	{
       	delRecursive($curitem['id']);
    }
    
	// delete physical file
	
	$list = db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$id, $conn);
	if ($item=db_fetch_array($list)) 
	{
		if ($item['file_type']=='file') 
		{
			$fileArray = my_json_decode($item["file"]);
			$_SESSION["deletedFiles"]++;
			if (file_exists($fileArray[0]["name"]))
				unlink($fileArray[0]["name"]);
		}
	}
	
	// delete record in the database
	db_query("DELETE FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$id, $conn);
	
}

function getBreadcrumbs() 
{
	// get breadcrumbs menu from $_SESSION["path"] array
	// add root folder element manually if not a shared link user	

	$str="";
	
	// do not display breadcrumbs menu if only one element is there
	if (count($_SESSION["path"])<1 || (count($_SESSION["path"])==1 && strlen($_SESSION["hash"])))
		return "";
		
	global $conn;
	$str="";
	$folderid = $_SESSION["current_folder"];
	while ($folderid!=0) 
	{
		$list=db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$folderid, $conn);
		if ($curitem=db_fetch_array($list)) 
		{
			$str=" / <a href=".projectURL() . GetTableLink( "doc_files", "list" )."?hash=".$curitem["hash"].">".$curitem["name"]."</a>".$str;
			$folderid=$curitem["parent_folder_id"];
		}
		else 
		{
			$folderid=0;  // error in directory structure
		}
	}
	
	if (strlen($_SESSION["hash"])==0)
		$str = "<li><a href=".projectURL() . GetTableLink( "doc_files", "list" )."?folder=0>".ROOT_FOLDER."</a><li>".$str;
		
	return $str;
}

/**
 * get breadcrumbs menu from the database
 * add root folder element manually if not a shared link user
 */
function getBreadcrumbsByID($folderid) 
{
	global $conn;
	$str = "";
	$isEnableBreadcrumbs = true;
	$dropdown = "";
	$res = "";	
	$id_drop = "id='menu_dd'";
	if( $folderid != 0 ){
		$tmpSQL = db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$folderid, $conn);
		if( $tmpData = db_fetch_array($tmpSQL) ) {
			$pfolder = $tmpData["parent_folder_id"];
			$_where = "and ".AddFieldWrappers("parent_folder_id")."=".$pfolder;
			if($_SESSION["UserID"] == "Guest")
				$_where.= " and ".AddFieldWrappers("share_type")." = 3";
			if($_SESSION["user_type"]!="admin" && $_SESSION["UserID"] != "Guest" && strlen($_SESSION["UserID"])>0){
				$ownerID = " and (".AddFieldWrappers("ownerid")." = ".$_SESSION["user_id"]." or ".getSharingWhere().")";
				if(in_array($_SESSION["user_id"],explode(",",$tmpData["share_startPoint"])) || $_SESSION["user_id"]==$tmpData["share_startPoint"] || $tmpData["parent_folder_id"]==0){
					$_where = " and (".AddFieldWrappers("parent_folder_id")."=0 or ".getStartPoint().")";
				}
			}
			$qwery = "SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("file_type")."='folder' ".$_where." and ".AddFieldWrappers("id")."<>".$folderid.$ownerID;
			$tmpRS1 = db_query($qwery, $conn);
			while( $tmpData1 = db_fetch_array($tmpRS1) ) {
				$res.="<li>
				<a href='doc_files_list.php?hash=".$tmpData1["hash"]."'>".$tmpData1["name"]."</a>
				</li>";
			}
			if($res){
				$str2="<ul id='submenu_dd' class='dropdown-menu' style='display:none'>".$res."</ul>";
				$dropdown = "&nbsp;<span class='caret'></span>";
			}
		}
	}
	while( $folderid != 0 /*&& ( !count( $_SESSION["path_folder"] ) || in_array($folderid, $_SESSION["path_folder"]) )*/ ) 
	{	
		$list = db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$folderid, $conn);
		if( $curitem = db_fetch_array($list)) 
		{
			if(in_array($folderid, $_SESSION["path_folder"])){
				if($dropdown)
					$hash = "#";
				else
					$hash = projectURL() . GetTableLink( "doc_files", "list" )."?hash=".$curitem["hash"];
				if($_SESSION["UserID"]!="Guest" || $_SESSION["UserID"]=="Guest" && $isEnableBreadcrumbs)
					$str = "&nbsp;&nbsp;<font color='#cccccc'>/</font>&nbsp;&nbsp;<a ".$id_drop." href=".$hash.">".$curitem["name"].$dropdown."</a>".$str;
				if($folderid == $_SESSION["guest_startFolder"])
					$isEnableBreadcrumbs = false;
			}
			$folderid = $curitem["parent_folder_id"];
			$dropdown = "";
			$id_drop = "";
		}
		else 
		{
			$folderid = 0;  // error in directory structure
		}
	}

	if( $_SESSION["UserID"] != "Guest" )
		$str = "<a class='dropdown' href=".projectURL() . GetTableLink( "doc_files", "list" )."?folder=0>".ROOT_FOLDER."</a>".$str.$str2;
	else
		$str = substr($str, 48).$str2;
	
	return $str;
}

function setPathFolder($folder_id)
{
	if(!$_SESSION["path_folder"])
		$_SESSION["path_folder"] = array();
	if(!in_array($folder_id,$_SESSION["path_folder"]))
		$_SESSION["path_folder"][] = $folder_id;
}

function setPathFile($file_id)
{
	if(!$_SESSION["path_file"])
		$_SESSION["path_file"] = array();
	if(!in_array($file_id,$_SESSION["path_file"]))
		$_SESSION["path_file"][] = $file_id;
}

function getPathArray($folder_id) 
{
	global $conn;
	$arr = array();

	while ($folder_id) 
	{
		$rs = db_query("select ".AddFieldWrappers("id").", ".AddFieldWrappers("name").", ".AddFieldWrappers("parent_folder_id").", ".AddFieldWrappers("hash")." from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("file_type")."='folder' and ".AddFieldWrappers("id")."=".$folder_id, $conn);
		$data = db_fetch_array($rs);
		if ($data) 
		{
			$f = new DocTFolder($data["hash"], $data["name"]);
			$arr[$data["id"]] = $f;
			$folder_id=$data["parent_folder_id"];
		}
		else 
		{
			$folder_id=0;
		}
		
		// shared link user
		// we have to stop at the original shared folder
		if ($_SESSION["hash"]==$data["hash"]) 
			return $arr;
	}

	return $arr;
}

function getFolderInfo($folder_id) 
{
	$arr = array();
	global $conn;
	$rs = db_query("select ".AddFieldWrappers("file_type").",count(".AddFieldWrappers("file_type").") as ".AddFieldWrappers("c")." from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("parent_folder_id")."=".$folder_id." group by ".AddFieldWrappers("file_type"), $conn);
	while ($data = db_fetch_array($rs)) 
	{
		$arr[$data["file_type"]]=$data["c"];
	}
	
	return $arr;
}

function addS($num) 
{
	return $num % 10 == 1 ? "" : "s";
}

function doc_pathinfo_local($path)
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

function deletePendingFiles($files) 
{
	if( !is_array($files) )
		return;
		
	foreach($files as $file) 
	{
		if (file_exists($file["name"]))
			unlink($file["name"]);
	
	}
}

function getSharingWhere(){
	return  "(".AddFieldWrappers("share_users")." LIKE '%,".$_SESSION["user_id"].",%' OR ".
	  AddFieldWrappers("share_users")." LIKE '".$_SESSION["user_id"].",%' OR ".
	  AddFieldWrappers("share_users")." LIKE '%,".$_SESSION["user_id"]."' OR ".
			AddFieldWrappers("share_users")."='".$_SESSION["user_id"]."')";
}
function setChildrenRights($id,$data){
	$folderSQL = "select * from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("parent_folder_id")." = ".$id;
	$folderRs = CustomQuery($folderSQL);
	while($folderData = db_fetch_array($folderRs))
	{
		/*$users = $folderData["share_users"];
		if($users)
			$users.=",".$data["share_users"];
		else
			$users =$data["share_users"];
		$arr = explode(",",$users);
		$arr = array_unique($arr);
		$users = implode(",",$arr);
		$users = $data["share_users"];*/
		$str = "update ".AddTableWrappers("doc_files")." set ".AddFieldWrappers("share_ro")."='".$data["share_ro"]."', ".AddFieldWrappers("share_type")."=".$data["share_type"].", ".AddFieldWrappers("share_users")."='".$data["share_users"]."' where ".AddFieldWrappers("id")."=".$folderData["id"];
		CustomQuery($str);
		if($folderData["file_type"]=="folder")
			setChildrenRights($folderData["id"], $data);
	}
}
function resetChildrenRights($id,$data){
	$folderSQL = "select * from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("parent_folder_id")." = ".$id;
	$folderRs = CustomQuery($folderSQL);
	while($folderData = db_fetch_array($folderRs))
	{
		$str = "update ".AddTableWrappers("doc_files")." set ".AddFieldWrappers("share_ro")."=null, ".AddFieldWrappers("share_type")."=null, ".AddFieldWrappers("share_users")."=null, ".AddFieldWrappers("share_startPoint")."=null, ".AddFieldWrappers("share_needDate")."=null, ".AddFieldWrappers("share_date")."=null, ".AddFieldWrappers("downloads")."=null where ".AddFieldWrappers("id")."=".$folderData["id"];
		CustomQuery($str);
		if($folderData["file_type"]=="folder")
			resetChildrenRights($folderData["id"], $data);
	}
}
function getStartPoint(){
	return  "(".AddFieldWrappers("share_startPoint")." LIKE '%,".$_SESSION["user_id"].",%' OR ".
	  AddFieldWrappers("share_startPoint")." LIKE '".$_SESSION["user_id"].",%' OR ".
	  AddFieldWrappers("share_startPoint")." LIKE '%,".$_SESSION["user_id"]."' OR ".
			AddFieldWrappers("share_startPoint")."='".$_SESSION["user_id"]."')";
}
function getSearchPath($fid){
	if($fid==0){
		$fpath = "home";
		$param = "folder=0";
		$fcont = "home";
	}
	else{
		$fcont = "";
		$fpath = "";
		while( $fid > 0 ){
			$strSQL = "select * from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("id")."=".$fid;
			$rs = CustomQuery($strSQL);
			if($data = db_fetch_array($rs)){
				if($data["ownerid"]!=$_SESSION["user_id"]){
					$arr = explode(",",$data["share_users"]);
					$inarray = false;
					if(in_array($_SESSION["user_id"],$arr))
						$inarray = true;
				}
				else
					$inarray = true;
				if($inarray || $_SESSION["user_type"]=="admin"){
					if(!$fpath){
						$fpath = $data["name"];
						$param = "hash=".$data["hash"];
					}
					if($fcont)
						$fcont = $data["name"]."/".$fcont;
					else
						$fcont = $data["name"];
				}
				if($fid == $data["parent_folder_id"])
					$fid = 0;
				else
					$fid = $data["parent_folder_id"];
			}
			else
				$fid = 0;
		}
		$fcont="home/".$fcont;
	}
	$res = "<br><span style='font-size:12px'>(&nbsp;<a href='doc_files_list.php?".$param."&a=showall' title='".$fcont."'>";
	$res.= $fpath."</a>&nbsp;)</span>";
	return $res;
}
function getFullPathToFolder($folderid) 
{
	global $conn;
	$str = "";
	$isEnableBreadcrumbs = true;
	$res = "";	
	if( $folderid != 0 ){
		$tmpSQL = db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$folderid, $conn);
		if( $tmpData = db_fetch_array($tmpSQL) ) {
			$pfolder = $tmpData["parent_folder_id"];
			$_where = "and ".AddFieldWrappers("parent_folder_id")."=".$pfolder;
			if($_SESSION["UserID"] == "Guest")
				$_where.= " and ".AddFieldWrappers("share_type")." = 3";
			if($_SESSION["user_type"]!="admin" && $_SESSION["UserID"] != "Guest" && strlen($_SESSION["UserID"])>0){
				$ownerID = " and (".AddFieldWrappers("ownerid")." = ".$_SESSION["user_id"]." or ".getSharingWhere().")";
				if(in_array($_SESSION["user_id"],explode(",",$tmpData["share_startPoint"])) || $_SESSION["user_id"]==$tmpData["share_startPoint"] || $tmpData["parent_folder_id"]==0){
					$_where = " and (".AddFieldWrappers("parent_folder_id")."=0 or ".getStartPoint().")";
				}
			}
			$qwery = "SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("file_type")."='folder' ".$_where." and ".AddFieldWrappers("id")."<>".$folderid.$ownerID;
			$tmpRS1 = db_query($qwery, $conn);
			while( $tmpData1 = db_fetch_array($tmpRS1) ) {
				$res.=$tmpData1;
			}
			if($res){
				$str2=$res;
			}
		}
	}
	while( $folderid != 0 /*&& ( !count( $_SESSION["path_folder"] ) || in_array($folderid, $_SESSION["path_folder"]) )*/ ) 
	{	
		$list = db_query("SELECT * FROM ".AddTableWrappers("doc_files")." WHERE ".AddFieldWrappers("id")."=".$folderid, $conn);
		if( $curitem = db_fetch_array($list)) 
		{
			if(in_array($folderid, $_SESSION["path_folder"])){
				if($_SESSION["UserID"]!="Guest" || $_SESSION["UserID"]=="Guest" && $isEnableBreadcrumbs)
					$str = "/".$curitem["name"].$str;
				if($folderid == $_SESSION["guest_startFolder"])
					$isEnableBreadcrumbs = false;
			}
			$folderid = $curitem["parent_folder_id"];
			$dropdown = "";
			$id_drop = "";
		}
		else 
		{
			$folderid = 0;  // error in directory structure
		}
	}

	if( $_SESSION["UserID"] != "Guest" )
		$str = $str.$str2;
	else
		$str = substr($str, 48).$str2;
	
	return $str;
}
function docman_rmdir($path){
	rmdir($path);
}
function docman_rename($oldfile, $newfile){
	rename($oldfile, $newfile);
}
function isOwner($fid){
	if(!$fid)
		return $_SESSION["user_id"];
	$pFolder = DBLookup("select ".AddFieldWrappers("parent_folder_id")." from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("id")."=".$fid);
	if($pFolder!=0)
		return isOwner($pFolder);
	$oid = DBLookup("select ".AddFieldWrappers("ownerid")." from ".AddTableWrappers("doc_files")." where ".AddFieldWrappers("id")."=".$fid);
	if(!$oid)
		$oid = $_SESSION["user_id"];
	return $oid;
}
?>