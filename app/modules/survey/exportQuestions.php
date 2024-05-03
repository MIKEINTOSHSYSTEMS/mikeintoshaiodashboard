<?php
include("include/dbcommon.php");
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");



$sid = postvalue("sid");
$qid = postvalue("qid");
$p_exp = postvalue("exp");

$wh = "";
if($qid!=0)
	$wh = " where ".AddFieldWrappers("id")."=".$qid;

if(!$sid)
	exit();


$rss2=CustomQuery("select * from ".AddTableWrappers("sv_survey_".$sid).$wh);
$ii=0;
while($data2=db_fetch_array($rss2)){
	$rss=CustomQuery("select ".AddTableWrappers("q").".*,".AddTableWrappers("gr").".".AddFieldWrappers("name").",".AddTableWrappers("gr").".".AddFieldWrappers("description")." from ".AddTableWrappers("sv_questions")." ".AddTableWrappers("q")."
	inner join ".AddTableWrappers("sv_groups")." ".AddTableWrappers("gr")." on ".AddTableWrappers("gr").".".AddFieldWrappers("id")."=".AddTableWrappers("q").".".AddFieldWrappers("group_id")."
	where ".AddTableWrappers("q").".".AddFieldWrappers("sid")."=".$sid."
	order by ".AddTableWrappers("gr").".".AddFieldWrappers("sortorder").",".AddTableWrappers("q").".".AddFieldWrappers("sortorder"));
	$header=array();
	while($data=db_fetch_array($rss)){
		$header[]=	$data["question"];
		$fields[$ii][] = exportBuildViewControl($data2, $data["type"],$data["id"], $data["group_id"],$sid);
	}
	$ii++;
}

$fieldsData[]=$header;
foreach($fields as $val)
	$fieldsData[]=$val;

if($p_exp == "csv")
	ExportToCSV($fieldsData);
else
	ExportToExcel($fieldsData);

function ExportToCSV($fields){
	$res = "";
	foreach($fields as $row){
		foreach($row as $val){
			$res.= "\"".$val."\",";
		}
		$res=substr($res,0,-1)."\r\n";
	}
	header("Content-Type: text/csv");
	header("Content-Disposition: attachment;Filename=Survey".runner_date_format("YmdHis").".csv");
	echo $res;
}

function ExportToExcelASP($fields){
	$res = "";
	foreach($fields as $row){
		$res.="<tr>";
		foreach($row as $val){
			$res.= "<td>".$val."</td>";
		}
		$res.="</tr>";
	}
	header("Content-Type: application/vnd.ms-excel;");
	header("Content-Disposition: attachment;Filename=Survey".runner_date_format("YmdHis").".xls");
	echo "<html>";
	echo "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
	echo "<meta http-equiv='Content-Type' content='text/html; charset=8'>";
	echo "<body>";
	echo "<table border=1>";
	echo $res;
	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToExcel($fields){
	require_once('plugins/PHPExcel.php');
	require_once('plugins/PHPExcel/Writer/Excel5.php');
	$xls = new PHPExcel();
	$xls->setActiveSheetIndex(0);
	$sheet = $xls->getActiveSheet();
	$row=1;
	foreach($fields as $rows){
		$col=0;
		foreach($rows as $val){
			//echo $row."-".$col."-".$val;
			$sheet->setCellValueByColumnAndRow($col,$row,$val);
			$col++;
		}
		$row++;
	}
	header ( "Content-type: application/vnd.ms-excel" );
	header ( "Content-Disposition: attachment; filename=Survey".runner_date_format("YmdHis").".xls" );

	$objWriter = new PHPExcel_Writer_Excel5($xls);
	$objWriter->save('php://output');
}


function exportBuildViewControl($data, $type, $id, $grid, $sid)
{
	$text="";
switch ($type) 
{	
	case 'T':                 // text
	case 'S':                 // simple text displayed, no question
	case 'L':                 // long text, textarea
	case 'N':   
		$text = $data[$sid."X".$grid."X".$id];
		break;
	case 'E':
		$rs = CustomQuery("select ".AddTableWrappers("fd").".".AddFieldWrappers("format")." from (".AddTableWrappers("sv_questions")." ".AddTableWrappers("sq")." inner join ".AddTableWrappers("sv_surveys")." ".AddTableWrappers("ss")." on ".AddTableWrappers("sq").".".AddFieldWrappers("sid")."=".AddTableWrappers("ss").".".AddFieldWrappers("id").") inner join ".AddTableWrappers("sv_format_date")." ".AddTableWrappers("fd")." on ".AddTableWrappers("ss").".".AddFieldWrappers("date_format")."=".AddTableWrappers("fd").".".AddFieldWrappers("id")." where ".AddTableWrappers("sq").".".AddFieldWrappers("id")."=".$id);
		$format_date = "";
		if($data1 = db_fetch_array($rs)) 
			$format_date = $data1["format"];
		if(!$format_date)
			$format_date = "m/d/y";
		if ($data[$sid."X".$grid."X".$id]) {
			$text = runner_date_format($format_date, strtotime($data[$sid."X".$grid."X".$id]));
		}
		break;
	case 'U':                 // file upload
		$origfiles = explode(",",$data[$sid."X".$grid."X".$id."files"]);
		$files = explode(",",$data[$sid."X".$grid."X".$id]);
		$text = '';
		foreach($files as $ind=>$value)
			$text.= trim($origfiles[$ind]).'  ';
		break;
	case "D":
	case "R":
		if($data[$sid."X".$grid."X".$id] && $data[$sid."X".$grid."X".$id]!="-other-")
		{
			$rs = CustomQuery("select ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("id")."=".$data[$sid."X".$grid."X".$id]);
			if($data1 = db_fetch_array($rs))
				$text = $data1["text"];
		}
		else
		{
			if ($data[$sid."X".$grid."X".$id."other"]){
				$text = 'Other    '.$data[$sid."X".$grid."X".$id."other"];
			}
		}
		break;
	case "M":
		$text = '';
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id);
		while ($data1 = db_fetch_array($rs))
		{
			if(!is_null($data[$sid."X".$grid."X".$id."X".$data1["id"]]))
				$text.=$data1["text"]."   ";
		}
		if ($data[$sid."X".$grid."X".$id."other"]){
			$text .= 'Other    '.$data[$sid."X".$grid."X".$id."other"];
		}
		break;
	case "P":
		$text = '';
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id);
		while ($data1 = db_fetch_array($rs))
		{
			if(!is_null($data[$sid."X".$grid."X".$id."X".$data1["id"]]))
			{
				$text.=$data1["text"];
				if(!is_null($data[$sid."X".$grid."X".$id."X".$data1["id"]."comment"]))
				$text.=" ".$data[$sid."X".$grid."X".$id."X".$data1["id"]."comment"];
				$text.="   ";
			}
		}
		if($data[$sid."X".$grid."X".$id."other"]==0 && $data[$sid."X".$grid."X".$id."comment"])
		{
			$text.="Other";
			$text.=" ".$data[$sid."X".$grid."X".$id."comment"];
			$text.="   ";
		}
		break;
	case 'C':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id);
		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]]=$data1["text"];
		}
		$text='';
		foreach($options as $ind=>$value)
		{
			if(isset($data[$sid."X".$grid."X".$id."X".$ind]))
				$text.=$value." ".$data[$sid."X".$grid."X".$id."X".$ind]."   ";
		}
		break;
	case 'B':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id);
		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]]=$data1["text"];
		}
		$text='';
		foreach($options as $ind=>$value)
		{
			
			if(isset($data[$sid."X".$grid."X".$id."X".$ind]))
				$text.=$value." ".$data[$sid."X".$grid."X".$id."X".$ind]."   ";
		}
		break;
	case 'A':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id);
		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]]=$data1["text"];
		}
		$answer = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_answer_options")." where ".AddFieldWrappers("question_id")."=".$id);
		while ($data1 = db_fetch_array($rs)) {
			$answer[$data1["id"]]=$data1["text"];
		}
		$text='';
		foreach($options as $ind=>$value)
		{
			if(isset($answer[$data[$sid."X".$grid."X".$id."X".$ind]]))
				$text.=$value." ".$answer[$data[$sid."X".$grid."X".$id."X".$ind]]."   ";
		}
		break;
	case 'X':   
		if($data[$sid."X".$grid."X".$id])
			$check = "on";
		else
			$check = "off";
		$text = $check;
		break;
}	
return $text;

}
?>
