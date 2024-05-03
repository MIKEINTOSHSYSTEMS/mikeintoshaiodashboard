<?php 
/*
$res = saveFormToDisk("formname",array("id" => "1"),"c:/userpath/output_filename.pdf");
echo $res;

$res = showFormInBrowser("formname",array("id" => "1"),"temp_filename.pdf");
echo $res;

$res = sendFormtoEmail("formname",array("id" => "1"),"temp_filename.pdf",array("email"=>"email@test.com", "subject"=>"Subject", "body"=>"Body"));
echo $res;

*/

function saveFormToDisk($formname, $keys, $pathfile){
	if(!formname)
		return "Form '".$formname."' not found";
	if(!pathfile)
		return "Output file not found";
	$rsform = DB::Select("pdf_forms", array("formname"=>str_replace("'","\'",$formname)."'"));
	if($dataform = $rsform->fetchAssoc()){
		$rs = DB::Select("pdf_formoptions");
		$data = $rs->fetchAssoc();
		$pdftkpath = getabspath($data["pdfpath"]);
		
		$arr = my_json_decode($dataform["formfile"]);
		$filename = $arr[0]["name"];
		
		$_where = "";
		foreach($keys as $k=>$v){
			if($_where)
				$_where." and ";
			$_where.= $k."=".$v;
		}
		$sqlquery = $dataform["sqlquery"];
		$p = strpos($sqlquery," where ");
		if($p > 0)
			$sqlquery = substr($sqlquery,0,$p);
		if($_where)
			$sqlquery.= " where ".$_where;
		
		$sqlrs = DB::Query($sqlquery);
		$sqldata = $sqlrs->fetchAssoc();
		
		$fdf = "%FDF-1.2
		1 0 obj<</FDF<< /Fields[";

		$rs = DB::Select("pdf_formfields",array("formid"=>$dataform["id"]));
		while($data = $rs->fetchAssoc()){
			if($data["fieldsql"]){
				$val = $sqldata[$data["fieldsql"]];
				if($data["cboxon"] && $data["cboxoff"]){
					$val = $data["cboxoff"];
					if($sqldata[$data["fieldsql"]])
						$val = $data["cboxon"];
				}
				$fdf.= "<</T(".trim($data["fieldform"]).")/V(".trim($val).")>>";
			}
		}
		$fdf.= "
			] >> >>
		endobj
		trailer
		<</Root 1 0 R>>
		%%EOF";
		
		file_put_contents(getabspath("templates_c/fdf".$dataform["id"].".fdf"), $fdf);
		exec($pdftkpath." \"".getabspath($filename)."\" fill_form \"".getabspath("templates_c/fdf".$dataform["id"]).".fdf\" output \"".$pathfile."\" flatten");
	}
	else
		return "Form '".$formname."' not found";
}
function showFormInBrowser($formname, $keys, $pathfile){
	if(!formname)
		return "Form '".$formname."' not found";
	if(!pathfile)
		return "Output file name not found";
	$rsform = DB::Select("pdf_forms",array("formname "=>str_replace("'","\'",$formname)));
	if($dataform = $rsform->fetchAssoc()){
		$rs = DB::Select("pdf_formoptions");
		$data = $rs->fetchAssoc();
		$pdftkpath = getabspath($data["pdfpath"]);
		
		$arr = my_json_decode($dataform["formfile"]);
		$filename = $arr[0]["name"];
		
		$_where = "";
		foreach($keys as $k=>$v){
			if($_where)
				$_where." and ";
			$_where.= $k."=".$v;
		}
		$sqlquery = $dataform["sqlquery"];
		$p = strpos($sqlquery," where ");
		if($p > 0)
			$sqlquery = substr($sqlquery,0,$p);
		if($_where)
			$sqlquery.= " where ".$_where;
		
		$sqlrs = DB::Query($sqlquery);
		$sqldata = $sqlrs->fetchAssoc();
		
		$fdf = "%FDF-1.2
		1 0 obj<</FDF<< /Fields[";

		$rs = DB::Select("pdf_formfields",array("formid"=>$dataform["id"]));
		while($data = $rs->fetchAssoc()){
			if($data["fieldsql"]){
				$val = $sqldata[$data["fieldsql"]];
				if($data["cboxon"] && $data["cboxoff"]){
					$val = $data["cboxoff"];
					if($sqldata[$data["fieldsql"]])
						$val = $data["cboxon"];
				}
				$fdf.= "<</T(".trim($data["fieldform"]).")/V(".trim($val).")>>";
			}
		}
		$fdf.= "
			] >> >>
		endobj
		trailer
		<</Root 1 0 R>>
		%%EOF";
		
		file_put_contents(getabspath("templates_c/fdf".$dataform["id"].".fdf"), $fdf);
		exec($pdftkpath." \"".getabspath($filename)."\" fill_form \"".getabspath("templates_c/fdf".$dataform["id"]).".fdf\" output \"".getabspath("templates_c/".$pathfile)."\" flatten");
		
		$url = getabspath("templates_c/".$pathfile);
		$content = file_get_contents($url);
		header('Content-Type: application/pdf');
		header('Content-Length: ' . strlen($content));
		header('Content-Disposition: inline; filename="YourFileName.pdf"');
		header('Cache-Control: private, max-age=0, must-revalidate');
		header('Pragma: public');
		die($content);
	}
	else
		return "Form '".$formname."' not found";
}
function sendFormtoEmail($formname, $keys, $pathfile, $emailopt){
	if(!formname)
		return "Form '".$formname."' not found";
	if(!pathfile)
		return "Output file name not found";
	if(!$emailopt["email"])
		return "Email not found";
	$rsform = DB::Select("pdf_forms", array("formname"=>str_replace("'","\'",$formname)));
	if($dataform = $rsform->fetchAssoc()){
		$rs = DB::Select("pdf_formoptions");
		$data = $rs->fetchAssoc();
		$pdftkpath = getabspath($data["pdfpath"]);
		
		$arr = my_json_decode($dataform["formfile"]);
		$filename = $arr[0]["name"];
		
		$_where = "";
		foreach($keys as $k=>$v){
			if($_where)
				$_where." and ";
			$_where.= $k."=".$v;
		}
		$sqlquery = $dataform["sqlquery"];
		$p = strpos($sqlquery," where ");
		if($p > 0)
			$sqlquery = substr($sqlquery,0,$p);
		if($_where)
			$sqlquery.= " where ".$_where;
		
		$sqlrs = DB::Query($sqlquery);
		$sqldata = $sqlrs->fetchAssoc();
		
		$fdf = "%FDF-1.2
		1 0 obj<</FDF<< /Fields[";

		$rs = DB::Select("pdf_formfields", array("formid"=>$dataform["id"]));
		while($data = $rs->fetchAssoc()){
			if($data["fieldsql"]){
				$val = $sqldata[$data["fieldsql"]];
				if($data["cboxon"] && $data["cboxoff"]){
					$val = $data["cboxoff"];
					if($sqldata[$data["fieldsql"]])
						$val = $data["cboxon"];
				}
				$fdf.= "<</T(".trim($data["fieldform"]).")/V(".trim($val).")>>";
			}
		}
		$fdf.= "
			] >> >>
		endobj
		trailer
		<</Root 1 0 R>>
		%%EOF";
		
		file_put_contents(getabspath("templates_c/fdf".$dataform["id"].".fdf"), $fdf);
		exec($pdftkpath." \"".getabspath($filename)."\" fill_form \"".getabspath("templates_c/fdf".$dataform["id"]).".fdf\" output \"".getabspath("templates_c/".$pathfile)."\" flatten");

		$email=$emailopt["email"];
		$msg=$emailopt["body"];
		$subject=$emailopt["subject"];
		$attachments = array();
		$attachments =  array(array('path' => getabspath("templates_c/".$pathfile)));
		$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'attachments' => $attachments));
		if(!$ret["mailed"])
			return $ret["message"];
	}
	else
		return "Form '".$formname."' not found";
}
?>