<?php
class SurveyUploadHandler extends UploadHandler
{

	
	function __construct() {
		UploadHandler::__construct();
        $this->options['script_url'] = $this->getFullUrl().'/uploader.php';
        $this->options['upload_dir'] = getabspath('upload/surveys/');
        $this->options['upload_url'] = $this->getFullUrl().'/upload/surveys/';
        $this->options['param_name'] = 'files';
            // The php.ini settings upload_max_filesize and post_max_size
            // take precedence over the following max_file_size setting:
            // Set the following option to false to enable non-multipart uploads:
        $this->options['discard_aborted_uploads'] = true;
    }
	function buildUserFile($file)
    {
		$origname = $file["name"];
		$p = strrpos($origname,"/");
		if( $p )
			$origname = substr($origname,$p+1);
	    $userFile = array();
        $userFile["name"] = $file["usrName"];
		$userFile["origname"] = $origname;
        $userFile["size"] = $file["size"];
        $userFile["type"] = $file["type"];
        $userFile["isImg"] = CheckImageExtension($file["name"]) != false;
		$userFile["delete_url"] = $this->options['script_url'].'?file='.rawurlencode($file["name"]).'&sid='.rawurlencode($_SESSION['sid']);
        $userFile["delete_type"] = 'DELETE';
        if($file["error"])
        	$userFile["error"] = $file["error"];
        $hasThumbnail = $file["thumbnail"] != "";
		$userFile["url"] = GetTableLink("get_file", "", "filename=".rawurlencode(trim(basename($file["name"],"")))."&origname=".rawurlencode($file["usrName"]).'&sid='.rawurlencode($_SESSION['sid']));
        return $userFile;
    }
	function get_file_object($file_name) {
        $file_path = $this->pSet->getUploadFolder($this->field).$file_name;
        if (is_file($file_path) && $file_name[0] !== '.') {
            $file = array();
            $file["error"] = false;
            $file["name"] = $file_path;
            $file["usrName"] = $file_name;
            $path_parts = $this->pathinfo_local($file_name);
            $file["type"] = getContentTypeByExtension($path_parts["extension"]);
            $file["size"] = filesize($file_path);
            $file["url"] = rawurlencode($file_path);
            $file["thumbnail"] = "";
			$file["delete_url"] = $this->options['script_url']
                .'?file='.rawurlencode($file["name"]).'&sid='.rawurlencode($_SESSION['sid']);
            $file["delete_type"] = 'DELETE';

            foreach($this->options['image_versions'] as $version => $options) {
				if ($file_path)
				{
					$thumbPath = $this->pSet->getUploadFolder($this->field).$this->pSet->getStrThumbnail($this->field).$file_name;
					if(is_file(getabspath($thumbPath)))
					{
						$file["thumbnail"] = $thumbPath;
						$path_parts = $this->pathinfo_local($thumbPath);
						$file["thumbnail_type"] = getContentTypeByExtension($path_parts["extension"]);
						$file["thumbnail_size"] = filesize(getabspath($thumbPath));
					}
					else
					{
						$file["thumbnail"] = $file_path;
						$file["thumbnail_type"] = $file["type"];
						$file["thumbnail_size"] = $file["size"];
					}
				}				
            }
            $this->set_file_delete_url($file);
            return $file;
        }
        return null;
    }
	function get_file_objects() {
		$id=$_REQUEST["id"];
		$files = getValue($id,0,'');
		$ofiles = getValue($id,0,'files');
		$arrfiles = explode(", ",$files);
		$arrofiles = explode(", ",$ofiles);
		$dir = $this->options['upload_dir'].$_SESSION['sid'].'/files/';
		$out = array();
		foreach($arrfiles as $key=>$value)
		{
			 $file = $this->get_file_object($value);
			 if($file)
			 {
				$file["name"] = $arrofiles[$key];
				$file["url"] = GetTableLink("get_file", "", "filename=".$arrfiles[$key]."&origname=".$arrofiles[$key]."&sid=".$_SESSION["sid"]);
				$out[] = $file;
				
			 }
		}
		return $out;
    }
	function delete() {
        $file_name = isset($_REQUEST['file']) ?
            basename(db_stripslashesbinaryAccess($_REQUEST['file'])) : null;
        $file_path = $this->options['upload_dir'].$_REQUEST['sid'].'/files/'.$file_name;
		$success = is_file($file_path) && $file_name[0] !== '.' && unlink($file_path);
        header('Content-type: application/json');
        echo my_json_encode($success);
    }
}

class SurveyPSettings extends ProjectSettings
{
	function getUploadFolder($field, $fileData = array())
	{
		return $this->getFinalUploadFolder("", "");
	}
	
	function getStrThumbnail($field)
	{
		return true;
	}
	
	function getFinalUploadFolder($field, $fileInfo = array())
	{
		if (!file_exists(getabspath('upload/surveys/'.$_SESSION['sid']."/")))
			mkdir(getabspath('upload/surveys/'.$_SESSION['sid']),0777);
		if (!file_exists(getabspath('upload/surveys/'.$_SESSION['sid']."/files/")))
			mkdir(getabspath('upload/surveys/'.$_SESSION['sid']."/files/"),0777);
		return getabspath('upload/surveys/'.$_SESSION['sid']."/files/");
	}
	
	function isMakeDirectoryNeeded($field)
	{
		return false;
	}
}
?>