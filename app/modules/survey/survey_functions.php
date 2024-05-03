<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");



define("OTHER", "-other-");

function hasSubquestions($type)
{
$simple = array('T','L','U','S','N','E','X');
return !in_array($type, $simple);
}

function hasAnswerOptions($type)
{
return $type == 'A';  // List with options
}

function buildQuestionText($question, $required, $id, $type)
{
$text="";
if ($type == "X") {
	$text .= '<a name="question'.$id.'error"></a><div class="qtext qtext_checkbox">'.$question;
}
else {
	$text .= '<a name="question'.$id.'error"></a><div class="qtext">'.$question;
}
if ($required)
	$text .= '<span class="asterisk">*</span>';
$text .= '</div>';

return $text;
}

function buildInputControl($id, $type, $settings, $format)
{

global $dal, $locale_info;
$text='<script type="text/javascript" sr'.'c="/include/jquery-ui-1.9.2.custom.js"></script>'.
'<script type="text/javascript" sr'.'c="/include/fileupload/load-image.min.js"></script>'.
'<script type="text/javascript" sr'.'c="/include/fileupload/jquery.iframe-transport.js"></script>'.
'<script type="text/javascript" sr'.'c="/include/fileupload/jquery.xdr-transport.js"></script>'.
'<script type="text/javascript" sr'.'c="/include/fileupload/jquery.fileupload.js"></script>'.
'<script type="text/javascript" sr'.'c="/include/fileupload/jquery.fileupload-ui.js"></script>'.
'<script type="text/javascript" sr'.'c="/include/fileupload/tmpl.js"></script>'.
'<link REL="stylesheet" href="/css/bootstrap-datepicker.css" type="text/css">'.
'<link rel="stylesheet" href="/css/jquery.fileupload-ui.css">';
$req = 0;
$regexp	= '';
if ($settings["required"])
	$req = 1;
if ($settings["regexp"])
	$regexp = $settings["regexp"];

switch ($type) {
case 'T':                 // text
	$text = '<div class="qinput text"><input class="form-control" type="text" ';
	if ($settings['max_length'])
		$text.='maxlength="'.$settings['max_length'].'" ';
	
	$text .= getTooltipHtml($settings["help"],$settings["helporientation"],$format).' id="question'.$id.'" name="question'.$id.'" value="'.getValue($id,0,'').'" regexp="'.$regexp.'" req="'.$req.'" fieldtype="T" onkeyup="valid_onthefly('.$id.',\'T\',\''.$req.'\',\''.$regexp.'\');"/></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
case 'E':                 // date field
	$value = getValue($id,0,'');
	$rs = CustomQuery("select ".AddTableWrappers("fd").".".AddFieldWrappers("format").",".AddTableWrappers("sv").".".AddFieldWrappers("id")." from ".AddTableWrappers("sv_surveys")." ".AddTableWrappers("sv")." left join ".AddTableWrappers("sv_format_date")." ".AddTableWrappers("fd")." on ".AddTableWrappers("sv").".".AddFieldWrappers("date_format")."=".AddTableWrappers("fd").".".AddFieldWrappers("id")." where ".AddTableWrappers("sv").".".AddFieldWrappers("id")."=".$_SESSION["sid"]);
	$format_date = "";
	$valueHidden = $value;
	if($valueHidden == "0000-00-00")
		$valueHidden = "null";
	if($data = db_fetch_array($rs)) 
		$format_date = $data["format"];
	if($value == "0000-00-00")
		$value = null;
	else
	{
		if($format_date && $value)
			$value = date($format_date, strtotime($value));
		}
	$disabl = "";
	if($format_date)
		$disabl = "readonly";
	else
	{
		if($valueHidden)
			$value = date("m/d/Y", strtotime($valueHidden));
	}
	if($format_date)
		$dFormat="yyyy-mm-dd";
	else {
		$dFormat="m/d/yy";
		if ($valueHidden){
			$valueHidden = date($dFormat, strtotime($valueHidden));
		}
	}
	$text = '<div class="input-group date" data-provide="datepicker" data-date-format="'.$dFormat.'">
				<input type="text" '.$disabl.' class="form-control" id="question'.$id.'" name="question'.$id.'" '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).' value="'.$value.'" regexp="'.$regexp.'" req="'.$req.'" fieldtype="E" onchange="valid_onthefly('.$id.',\'E\',\''.$req.'\',\''.$regexp.'\');
				dateFormat($(this).val(),\''.$format_date.'\','.$id.');"/>
				<input type="hidden" id="question'.$id.'hidden" name="question'.$id.'hidden" value="'.$valueHidden.'" regexp="'.$regexp.'" req="'.$req.'" fieldtype="E" />
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-th"></span>
				</div>
			</div>
			';
	$text .= buildInputControlFull($id,$settings,$format);
case 'S':                 // simple text displayed, no question
	
	break;
case 'U':                 // file upload
	$text.= '<div class="qinput"><div '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'id="question'.$id.'" name="question'.$id.'" req="'.$req.'" fieldtype="U">
			<div class="row">
            <div class="span16 fileupload-buttonbar">
                <span class="btn success fileinput-button">
                    <span>'.GetCustomLabel("add_files").'....</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn primary start">'.GetCustomLabel("start").'</button>
                <button type="reset" class="btn info cancel" style="display:none;">'.GetCustomLabel("cancel").'</button>
				<button type="button" class="btn danger delete" style="display:none;">'.GetCustomLabel("delete").'</button>
                <input type="checkbox" class="toggle" style="display:none;">
				<input type="hidden" style="display:none;" name=uploadid value='.$id.'>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="span16">
                <table class="zebra-striped"><tbody class="files"></tbody></table>
            </div>
        </div>
    </div></div>';
	
	if (!$settings['file_extensions'] || ($settings['file_extensions']=='')){
		$settings['file_extensions'] = '';
	}
	
	if (!$settings['max_num_of_files'] || ($settings['max_num_of_files']=='')){
		$settings['max_num_of_files'] = 10;
	}
	
	if (!$settings['max_file_size'] || ($settings['max_file_size']=='')){
		$settings['max_file_size'] = 5000;
	}
	
	$settings['max_file_size'] = $settings['max_file_size'] * 1024;
	
	$text .= '<script>
			$(document).ready(function() {';
	$text .= '	var fileCtrl = $("#question'.$id.'");
				fileCtrl.fileupload();
				$.getJSON("'.GetTableLink("uploader", "", "id=".$id).'", function (files) {
					var fu = fileCtrl.data(\'fileupload\');
					fu._adjustMaxNumberOfFiles(-files.length);
					fu._renderDownload(files)
						.appendTo($(".files",fileCtrl))
						.fadeIn(function () {
							$(".delete").css("display","inline");
							$(".toggle").css("display","inline");
							// Fix for IE7 and lower:
							$(this).show();
						});
				});
				fileCtrl.fileupload(
					"option",
					"url",
					"'.GetTableLink("uploader", "", "").'"
				);
				fileCtrl.fileupload("option", {
					formData:[{name:"sid",value:'.$_SESSION['sid'].'},
							{name:"qid",value:'.$id.'}	
							]
				});
				
				fileCtrl.fileupload("option", {
					maxFileSize: '.$settings['max_file_size'].',
					maxNumberOfFiles: '.$settings['max_num_of_files'].'
				});
				
				
				';
				
	if ($settings['file_extensions']!='') {
		$extArr = explode(',',$settings['file_extensions']);
		$extStr = '';
		foreach($extArr as $ext){
			$extStr .= trim($ext).'|';
		}
		substr($extStr, 0, strlen($extStr)-1);
		
		$text .= '
				fileCtrl.fileupload("option", {
					acceptFileTypes: /(\.|\/)('.$extStr.')$/i});';
	}
	$text .= '});
			</script>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
case 'L':                 // long text, textarea
	$text = '<div class="qinput"><textarea class="form-control" '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'id="question'.$id.'" regexp="'.$regexp.'" name="question'.$id.'" req="'.$req.'" fieldtype="L" onkeyup="valid_onthefly('.$id.',\'L\',\''.$req.'\',\''.$regexp.'\');">'.getValue($id,0,'').'</textarea></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
case 'N':                 // number
	$maxlen = "";
	if ($settings["max_length"]>0){
		$maxlen .= ' maxlength="'.$settings["max_length"].'" ';
	}
	$text = '<div class="qinput number"><input class="form-control" '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'type="text" '.$maxlen.' regexp="'.$regexp.'" id="question'.$id.'" name="question'.$id.'" value="'.getValue($id,0,'').'" req="'.$req.'" isint="'.$settings["int_only"].'" fieldtype="N"/ onkeyup="valid_onthefly('.$id.',\'N\',\''.$req.'\',\''.$regexp.'\');IsInteger('.$id.',\''.$settings["int_only"].'\');"></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
case 'D':                 // dropdown box
	// get options
	
	$text = '<div class="qinput dropdown"><select class="form-control" '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'id="question'.$id.'" name="question'.$id.'" onchange="showhideother(this.name,this.value); valid_onthefly('.$id.',\'D\',\''.$req.'\',\'\');" req="'.$req.'" fieldtype="D" />
	<option value="">'.GetCustomLabel("please_select").'</option>';
	$value = getValue($id,0,'');
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));


	while ($data = db_fetch_array($rs)) {
		$sel = "";
		if($value == $data["id"])
			$sel = "selected";
		$text .= '<option value="'.$data["id"].'" '.$sel.'>'. $data["text"] .'</option>';
	}
	
	// 'Other' option enabled?
	$other_hidden = "display:none;";
	$sel = "";
	if($value === OTHER)
	{
		$sel = "selected";
		$other_hidden = "";
	}
	if ($settings["other"]) {
		$text .= '<option value="'.OTHER.'" '.$sel.'>'.GetCustomLabel("other").'</option>';
	}
	$sel = "";
	if($value == -1)
		$sel = "selected";
	// if not required add 'No answer' option
	if (!$settings["required"])
		$text .= '<option value="-1"'.$sel.'>'.GetCustomLabel("no_answer").'</option>';
		
	$text.='</select>';
	
	// add 'other' text box
	if ($settings["other"]) {
	$text.= '<input type="text" value="'.getValue($id,0,'other').'" id="question'.$id.'other" name="question'.$id.'other" style="margin-left: 10px; width: 200px; '.$other_hidden.'" alt="Other answer" onkeyup="valid_onthefly('.$id.',\'O\',\'1\',\'\');"/>';
	}
	
	$text .= '</div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
case 'R':                 // radio-buttons
	// get options
	
	$text = '<div class="qinput radio"><ul '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'req="'.$req.'" fieldtype="R" name="question'.$id.'">';
	$value = getValue($id,0,'');
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	while ($data = db_fetch_array($rs)) {
		$check = "";
		if($value == $data["id"])
			$check = "checked";
		$text .= '<li><input type="radio" '.$check.' name="question'.$id.'" id="question'.$id.'_'.$data["id"].'" value="'.$data["id"].'" onclick="valid_onthefly('.$id.',\'R\',\''.$req.'\',\'\');"/>';
		$text .= '<label for="question'.$id.'_'.$data["id"].'">'.$data["text"].'</label></li>';
	}

	// 'Other' option enabled?
	if ($settings["other"]) {
		$check = "";
		if($value === OTHER)
			$check = "checked";
		$text.= '<li><input type="radio" name="question'.$id.'" '.$check.' id="question'.$id.'othertext" value="'.OTHER.'"/>';
		$text.= '<label for="question'.$id.'">'.GetCustomLabel("other").'</label>';	
		$text.= otherInputBox($id, $value);
		$text.='</li>';
	}
	
	// if not required add 'No answer' option
	if (!$settings["required"]) {
		$check = "";
		if($value == -1 || $value == "")
			$check = "checked";
		$text .= '<li><input type="radio" name="question'.$id.'" id="question'.$id.'_'.$data["id"].'" value="-1" '.$check.' />';
		$text .= '<label for="question'.$id.'_'.$data["id"].'">'.GetCustomLabel("no_answer").'</label></li>';
	}

	$text .= '</ul></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;

case 'A':                 // list with options (radio-buttons matrix)
	
	// get answer options
	$options = array();
	$rs1 = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_answer_options")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	while ($data1 = db_fetch_array($rs1)) {
		$options[$data1["id"]]=$data1["text"];
	}
	
	$text = buildOptionsList($id, $options, $req, $settings, $format);
	
	$text .= buildInputControlFull($id,$settings,$format);
	break;
	
case 'B':              	// list with 1-5 options
case 'C':				// list with 1-10 options

	$options = array();
	$count = $type == 'B' ? 5 : 10;
	for ($i=1;$i<=$count;$i++)
	{
		$options[$i]=$i;	
	}
	
	$text = buildOptionsList($id, $options, $req, $settings, $format);
	$text .= buildInputControlFull($id,$settings,$format);
	break;	
	
case 'M': 				// multiple choice, set of check boxes
	// get options
	
	$text = '<div class="qinput checkboxes"><ul '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'name="question'.$id.'" fieldtype="M" req="'.$req.'">';
	
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	while ($data = db_fetch_array($rs)) {
		$value = getValue($id,$data["id"],'');
		$check = "";
		if($value == $data["id"])
			$check = "checked";
		$text .= '<li>&nbsp;<input type="checkbox" '.$check.' name="question'.$id.'_'.$data["id"].'" id="question'.$id.'_'.$data["id"].'" value="'.$data["id"].'" onclick="valid_onthefly('.$id.',\'M\',\''.$req.'\',\'\');"/>';
		$text .= '&nbsp;&nbsp;<label for="question'.$id.'_'.$data["id"].'">'.$data["text"].'</label></li>';
	}

	// 'Other' option enabled?
	$other_hidden = "style='display:none;'";
	if ($settings["other"]) {
		$value = getValue($id,0,'other');
		$check = "";
		if($value){
			$other_hidden = "";
			$check = "checked";
		}
		$text.= '<li><input type="checkbox" '.$check.' name="question'.$id.'" id="question'.$id.'othertext" onclick="showhideothercheck(this.name);" value="'.OTHER.'"/>';
		$text.= '&nbsp;&nbsp;<label for="question'.$id.'">'.GetCustomLabel("other").'</label>';	
		$text .= '&nbsp;&nbsp;<input type="text" class="other  form-control" id="question'.$id.'other" name="question'.$id.'other" '.$other_hidden.' alt="Other answer" value="'.$value.'"
		onkeyup="$(\'#question'.$id.'othertext\').attr(\'checked\',\'checked\');valid_onthefly('.$id.',\'O\',\'1\',\'\');" />';
		$text.='</li>';
	}
	
	$text .= '</ul></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
	
case 'P': 		// multiple choice with comments, set of check boxes, each with a text box
	// get options
	
	$text = '<div class="qinput checkboxes"><ul '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'fieldtype="P" req="'.$req.'" name="question'.$id.'">';
	
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));

	while ($data = db_fetch_array($rs)) {
		$value = getValue($id,$data["id"],"");
		$check = "";
		if($value == $data["id"])
			$check = "checked";
		$text .= '<li><span class="option"><input type="checkbox" '.$check.' name="question'.$id.'_'.$data["id"].'" id="question'.$id.'_'.$data["id"].'" value="'.$data["id"].'" onclick="valid_onthefly('.$id.',\'P\',\''.$req.'\',\'\');"/>';
		$text .= '&nbsp;&nbsp;<label for="question'.$id.'_'.$data["id"].'">'.$data["text"].'</label></span><span class="comment">';
		$text .= '&nbsp;&nbsp;<input type="text" class="other form-control" value="'.getValue($id,$data["id"],"comment").'" name="question'.$id.'_'.$data["id"].'comment" id="question'.$id.'_'.$data["id"].'comment" 
					onkeyup="$(\'#question'.$id.'_'.$data["id"].'\').attr(\'checked\',\'checked\');"></span></li>';
	}

	// 'Other' option enabled?
	if ($settings["other"]) {
		$value = getValue($id,0,"other");
		$check = "";
		if($value === "0")
			$check = "checked";
		$text.= '<li><span class="option"><input type="checkbox" '.$check.' name="question'.$id.'" id="question'.$id.'othertext" value="'.OTHER.'"/>';
		$text.= '&nbsp;&nbsp;<label for="question'.$id.'_'.$data["id"].'">Other</label></span><span class="comment">';	
		$text.= '&nbsp;&nbsp;<input type="text" class="other form-control" id="question'.$id.'other" name="question'.$id.'other" alt="'.GetCustomLabel("other_answer").'" value="'.$value = getValue($id,0,"comment").'"
				onkeyup="$(\'#question'.$id.'othertext\').attr(\'checked\',\'checked\');valid_onthefly('.$id.',\'O\',\'1\',\'\');" /></span></li>';
	}
	
	$text .= '</ul></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;

case 'X': 		// check box
	$value = getValue($id,'',0);
	$check = "";
	if($value)
		$check = "checked";
	$text = '<div id="error'.$id.'" class="error"></div>';
	$text .= '<div class="qinput checkboxes"><input fieldtype="X" '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).' type="checkbox" '.$check.' name="question'.$id.'" req="'.$req.'" id="question'.$id.'" value="'.$id.'" onclick="valid_onthefly('.$id.',\'X\',\''.$req.'\',\'\');"/></div>';
	break;

	
default:                
	$text = '<div class="qinput text"><input class="form-control" '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).' type="text" id="" name="question'.$id.'" value="'.getValue($id,0,"").'" req="'.$req.'" fieldtype="defailt"/></div>';
	$text .= buildInputControlFull($id,$settings,$format);
	break;
	
	}
if ($type != "X") {
	$text.= '<div id="error'.$id.'" class="error"></div>';	
}
	
return $text;

}
function buildOptionsList($id, $options, $req, $settings, $format)
{
	// get subquestions
	$text = '<div class="qinput list"><table '.getTooltipHtml($settings["help"],$settings["helporientation"],$format).'name="question'.$id.'" fieldtype="A" req="'.$req.'"><thead><tr><td></td>';
	
	// answer options as table headers
	foreach ($options as $oid => $ovalue)
	{
		$text .="<th class='list_head'>".$ovalue."</th>";
	}
	
	$text .= "</tr></thead><tbody>";
	$odd=true;	
	
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	$i = 0;
	while ($data = db_fetch_array($rs)) {
	
		$class = $odd ? "odd" : "even";
		$odd = !$odd;
		$text .= '<tr class="'.$class.'"><th class="qhead">'.$data["text"].'</th>';
		$value = getValue($id,$data["id"],"");
		foreach ($options as $oid => $ovalue)
		{
			$check = "";
			if($value == $oid)
				$check = "checked";
			$text .='<td class=\'list_td\'><input type="radio" '.$check.' name="question'.$id.'_'.$data["id"].'" id="question'.$id.'_'.$data["id"].'" value="'.$oid.'"/ row='.$i.' onclick="valid_onthefly(\''.$id.'\',\'A\',\''.$req.'\',\'\');"></td>';
		}
		$i++;
		$text .= '</tr>';
	}


	$text .= '</tbody></table></div>';
	
	return $text;
}

function getValue($id,$subid,$other)
{
	//global $dal;
	global $conn;
//	$rs = db_query("select * from sv_questions where id=".$id,$conn);
	$rs = CustomQuery("select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("id")."=".$id);
	if($data = db_fetch_array($rs))
	{
		$prefix = $data["sid"]."X".$data["group_id"]."X".$id;	
		if($subid>0)
			$prefix.="X".$subid;
		if($other!="")
			$prefix.=$other;
		$rs = CustomQuery("select ".AddFieldWrappers($prefix)." from ".AddTableWrappers(getSurveyTable($data["sid"]))." where ".AddFieldWrappers("hash")."='".$_SESSION["hash"]."'");
		//$rs = db_query("select ".$prefix." from ".getSurveyTable($data["sid"])." where hash='".$_SESSION["hash"]."'",$conn);
		if($data = db_fetch_array($rs))
			return $data[$prefix];
		
	}
	else
		return null;
}

function activateSurvey($sid, $archivename)
{
	//$rs1 = CustomQuery("show tables like '".getSurveyTable($sid)."'");
//	$arrTables = db_gettablelist();
//	foreach($arrTables as $tablen)
//	{
//		if ($tablen == getSurveyTable($sid)) {
//			deactivateSurvey($sid, $archivename);
//		}
//	}
	
	// build 'create table' statement
	if(GetDatabaseType()==0) //MySQL
		$sql = "CREATE TABLE ".AddTableWrappers(getSurveyTable($sid))." (".AddFieldWrappers("id")." int NOT NULL AUTO_INCREMENT, ".AddFieldWrappers("created")." datetime, ".AddFieldWrappers("ip")." varchar(50), ".AddFieldWrappers("lastpage")." int(11), ".AddFieldWrappers("hash")." varchar(100), ".AddFieldWrappers("answer")." int(11), ".AddFieldWrappers("userID")." varchar(200), ".AddFieldWrappers("submit")." int(11), ";
	else if(GetDatabaseType()==3) //Access
		$sql = "CREATE TABLE ".AddTableWrappers(getSurveyTable($sid))." (".AddFieldWrappers("id")." COUNTER PRIMARY KEY, ".AddFieldWrappers("created")." datetime, ".AddFieldWrappers("ip")." text(50), ".AddFieldWrappers("lastpage")." int, ".AddFieldWrappers("hash")." text(100), ".AddFieldWrappers("answer")." int, ".AddFieldWrappers("userID")." text(200), ".AddFieldWrappers("submit")." int, ";
	else if(GetDatabaseType()==2) //MSSQL
		$sql = "CREATE TABLE ".AddTableWrappers(getSurveyTable($sid))." (".AddFieldWrappers("id")." INT IDENTITY PRIMARY KEY, ".AddFieldWrappers("created")." datetime, ".AddFieldWrappers("ip")." varchar(50), ".AddFieldWrappers("lastpage")." int, ".AddFieldWrappers("hash")." varchar(100), ".AddFieldWrappers("answer")." int, ".AddFieldWrappers("userID")." varchar(200), ".AddFieldWrappers("submit")." int, ";
	else if(GetDatabaseType()==1) //Oracle
		$sql = "CREATE TABLE ".AddTableWrappers(getSurveyTable($sid))." (".AddFieldWrappers("id")." NUMBER(10) PRIMARY KEY, ".AddFieldWrappers("created")." date, ".AddFieldWrappers("ip")." varchar2(50), ".AddFieldWrappers("lastpage")." NUMBER(11), ".AddFieldWrappers("hash")." varchar2(100), ".AddFieldWrappers("answer")." NUMBER(11), ".AddFieldWrappers("userID")." varchar2(200), ".AddFieldWrappers("submit")." int, ";
	else if(GetDatabaseType()==4) //Postgre
		$sql = "CREATE TABLE ".AddTableWrappers(getSurveyTable($sid))." (".AddFieldWrappers("id")." SERIAL PRIMARY KEY, ".AddFieldWrappers("created")." TIMESTAMP, ".AddFieldWrappers("ip")." varchar(50), ".AddFieldWrappers("lastpage")." INTEGER, ".AddFieldWrappers("hash")." varchar(100), ".AddFieldWrappers("answer")." varchar(200), ".AddFieldWrappers("userID")." INTEGER, ".AddFieldWrappers("submit")." INTEGER, ";
		
	// get list of questions

	$rs = CustomQuery("select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("sid")."=".$sid." order by ".AddFieldWrappers("group_id").",".AddFieldWrappers("id"));
	while ($data = db_fetch_array($rs)) {
		
		$field=getFieldDef($sid,$data["id"],$data["group_id"],$data["type"],$data["other"]);
		if ($field) {
			$sql.=$field;
			$sql.=", ";
		}
	}
	if(GetDatabaseType()==0)
	{
		$sql.="PRIMARY KEY (id) )";
	}
	else
	{
		$sql=substr($sql,0,-2);
		$sql.=")";
	}
//	deactivateSurvey($sid, $archivename);
	set_error_handler("survey_handle_error");	
	
	CustomQuery($sql);
	if(GetDatabaseType()==1)
	{
		CustomQuery("CREATE SEQUENCE ".AddTableWrappers("S_".getSurveyTable($sid))." INCREMENT BY 1 START WITH 1 MINVALUE 0 NOCYCLE NOCACHE NOORDER");
		$str="CREATE OR REPLACE TRIGGER ".AddTableWrappers("tr_".getSurveyTable($sid))." BEFORE INSERT ON ".AddTableWrappers(getSurveyTable($sid))." FOR EACH ROW ";
		$str.="BEGIN if :new.".AddFieldWrappers("id")." is null then ";
		$str.="Select ".AddTableWrappers("S_".getSurveyTable($sid)).".NextVal into :new.".AddFieldWrappers("id")." from dual; ";
		$str.="end if;END;";
		CustomQuery($str);
	}
	restore_error_handler();
	
	
	// set `active` field to 1
	CustomQuery("update ".AddTableWrappers("sv_surveys")." set ".AddFieldWrappers("active")."=1 where ".AddFieldWrappers("id")."=".$sid);
}

function deactivateSurvey($sid, $archivename)
{
	set_error_handler("survey_handle_error");	
	// rename table
	if(GetDatabaseType()==0) //MySQL
		CustomQuery("RENAME TABLE ".AddTableWrappers(getSurveyTable($sid))." TO ".AddTableWrappers($archivename));
	else if(GetDatabaseType()==3) //Access
	{
		CustomQuery("SELECT * INTO ".AddTableWrappers($archivename)." FROM ".AddTableWrappers(getSurveyTable($sid)));
		CustomQuery("DROP TABLE ".AddTableWrappers(getSurveyTable($sid)));
	}
	else if(GetDatabaseType()==2) //MSSQL
		CustomQuery("sp_rename ".AddTableWrappers(getSurveyTable($sid)).", ".AddTableWrappers($archivename));
	else if(GetDatabaseType()==1) //Oracle
	{
		CustomQuery("DROP SEQUENCE ".AddTableWrappers("S_".getSurveyTable($sid)));
		CustomQuery("DROP TRIGGER ".AddTableWrappers("tr_".getSurveyTable($sid)));
		CustomQuery("ALTER TABLE ".AddTableWrappers(getSurveyTable($sid))." RENAME TO ".AddTableWrappers($archivename));
	}
	else if(GetDatabaseType()==4) //Postgre
		CustomQuery("ALTER TABLE ".AddTableWrappers(getSurveyTable($sid))." RENAME TO ".AddTableWrappers($archivename));
	restore_error_handler();
	
	
	// set `active` field to 0
	CustomQuery("update ".AddTableWrappers("sv_surveys")." set ".AddFieldWrappers("active")."=0 where ".AddFieldWrappers("id")."=".$sid);

}

function saveAnswer($sid)
{
	$insertFields = "";
	$insertValues = "";
	$_where = "";
	$rs3 = CustomQuery("select ".AddFieldWrappers("format")." from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")."=".$sid);
	$data3 = db_fetch_array($rs3);
	$format2 = "";
	if ($data3)
		$format2 = $data3["format"];
	$rs = CustomQuery("select ".AddFieldWrappers("id")." as ".AddFieldWrappers("cid")." from ".AddTableWrappers("sv_survey_".$sid)." where ".AddFieldWrappers("hash")."='".$_SESSION["hash"]."'");
	$sv_exist = false;
	if($data = db_fetch_array($rs))
		$sv_exist = true;
	
	if(($_SESSION["page"] > 1 || $_REQUEST["locat"] == "prev" || $sv_exist) && $format2!='A')
	{
		$rs = CustomQuery("select * from ".AddTableWrappers("sv_survey_".$sid)." where ".AddFieldWrappers("hash")."='".$_SESSION["hash"]."'");
		$data2 = db_fetch_array($rs);
		$lastpage = $data2["lastpage"];
		$answer = $data2["answer"];
		$i = 0;
		if($_REQUEST["error"] == "")
		{
			$format = "";
			$rs3 = CustomQuery("select ".AddFieldWrappers("format")." from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")."=".$sid);
			$data3 = db_fetch_array($rs3);
			if ($data3)
				$format = $data3["format"];
		
			$rs=CustomQuery("select ".AddTableWrappers("q").".*,".AddTableWrappers("gr").".".AddFieldWrappers("name").",".AddTableWrappers("gr").".".AddFieldWrappers("description").", ".AddTableWrappers("gr").".".AddFieldWrappers("id")." as ".AddFieldWrappers("gid")." from ".AddTableWrappers("sv_questions")." ".AddTableWrappers("q")."
			inner join ".AddTableWrappers("sv_groups")." ".AddTableWrappers("gr")." on ".AddTableWrappers("gr").".".AddFieldWrappers("id")."=".AddTableWrappers("q").".".AddFieldWrappers("group_id")."
			where ".AddTableWrappers("q").".".AddFieldWrappers("sid")."=".$sid."
			order by ".AddTableWrappers("gr").".".AddFieldWrappers("sortorder").",".AddTableWrappers("q").".".AddFieldWrappers("sortorder"));
			$num_group = 0;
			$num_question = 0;
			$group_name = "";
			$id = 0;
			while($data=db_fetch_array($rs))
			{
				$arrAnswers = getAnswerArray($data["id"], $_SESSION["hash"]);
				$scenario = getScenarioResult($data["id"], $arrAnswers);
				if(!$scenario["qhide"]){
					if ($group_name!=$data["name"])
					{	
						$group_name=$data["name"];
						$num_group++;
					}
					$num_question++;
					if($format == 'G' && $lastpage+1 == $num_group)
						$id = $data["group_id"];
					if($format == 'Q' && $lastpage+1 == $num_question)
						$id = $data["id"];
				}
			}
			
			if($format == "G")
				$_where = " and ".AddFieldWrappers("group_id")." = ".$id;
			if($format == "Q")
				$_where = " and ".AddFieldWrappers("id")." = ".$id;
			
			$rs = CustomQuery("select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("sid")."=".$sid.$_where." order by ".AddFieldWrappers("group_id").",".AddFieldWrappers("id"));
			while ($data = db_fetch_array($rs)) {
				if($_POST["uploadid"] != $data["id"] && $data["type"]=="U")
					continue;
				$field=getFieldUpdate($sid,$data["id"],$data["group_id"],$data["type"],$data["other"]);
				if($field != "")
				{
					if($insertFields != "")
						$insertFields.= ", ";
					$insertFields.=$field;
				}	
				$i++;			
			}
		}
		if(!postvalue("totalpage")){
			if($insertFields)
				$insertFields.= ", ".AddFieldWrappers("lastpage")." = ".$_SESSION["page"];
			else
				$insertFields = AddFieldWrappers("lastpage")." = ".$_SESSION["page"];
		}
		if($insertFields != "")
			$insertFields.= ", ";
		//to calculate count of answers, if we click: "Next->Prev->Next->Prev" (bug #6063)
		if($answer<=$_REQUEST["page"])
			$answer = $_REQUEST["page"];
		$sql = "UPDATE ".AddTableWrappers(getSurveyTable($sid))." set ".$insertFields."".AddFieldWrappers("answer")." = ".$answer." where ".AddFieldWrappers("hash")." = '".$_SESSION["hash"]."'";
		CustomQuery($sql);
	}
	else
	{
		$rs3 = CustomQuery("select ".AddFieldWrappers("format")." from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")."=".$sid);
		$data3 = db_fetch_array($rs3);
		if ($data3)
			$format = $data3["format"];
		$answer = 1;
		$rs = CustomQuery("select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("sid")."=".$sid." order by ".AddFieldWrappers("group_id").",".AddFieldWrappers("id"));
				$grid = 0;
		$qid = 0;
		$i = 0;
		while ($data = db_fetch_array($rs)) {
			if($_POST["uploadid"] != $data["id"] && $data["type"]=="U")
				continue;
			$field=getFieldAdd($sid,$data["id"],$data["group_id"],$data["type"],$data["other"]);
			if($grid == 0)
			{
				$grid = $data["group_id"];
				$qid = $data["id"];
			}
			if($field[0] != "")
			{
				$insertFields.=$field[0].", ";
				$insertValues.=$field[1].", ";
			}
			$i++;
		}
		$insertFields.=AddFieldWrappers("created");
		$insertValues.="'".date("Y-m-d H:i:s")."'";
		
		$rs = CustomQuery("select * from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")."=".$sid);
		$data = db_fetch_array($rs);
		if($data["ipaddr"] == 1)
		{
			$insertFields.=", ".AddFieldWrappers("ip");
			$insertValues.=", '".$_SERVER['REMOTE_ADDR']."'";
		}
		
		$format = "";
		$rs3 = CustomQuery("select ".AddFieldWrappers("format")." from ".AddTableWrappers("sv_surveys")." where ".AddFieldWrappers("id")."=".$sid);
		$data3 = db_fetch_array($rs3);
		if ($data3)
			$format = $data3["format"];
		if(!postvalue("totalpage"))
			$lastpage = 1;
		else
			$lastpage = 0;
		$insertFields.=", ".AddFieldWrappers("lastpage").", ".AddFieldWrappers("hash").", ".AddFieldWrappers("answer").", ".AddFieldWrappers("userID");
		if(Security::isGuest()){
			$uid = 0;
		}
		else{
			$udata = Security::currentUserData();
			$uid = $udata["id"];
			if(!$uid)
				$uid = $udata["cn"];
		}
		if(!$uid)
			$uid=0;
		$insertValues.=", ".$lastpage.", '".$_SESSION["hash"]."',".$answer.", '".$uid."'";
		$sql="delete from ".AddTableWrappers(getSurveyTable($sid))." where ".AddFieldWrappers("hash")."='".$_SESSION["hash"]."'";
		CustomQuery($sql);
		$sql = "INSERT INTO ".AddTableWrappers(getSurveyTable($sid))." (".$insertFields.") VALUES (".$insertValues.")";
		CustomQuery($sql);
	}
}
function getFieldAdd($sid,$id,$group,$type,$other)
{
	global $locale_info;
	$prefix = $sid."X".$group."X".$id;
	$text = array("","");
	
	switch ($type) {
	case 'T':
	case 'L':
		$text[0] = AddFieldWrappers($prefix);
		if ($_POST["question".$id]){
			$text[1] = "'".db_addslashes($_POST["question".$id])."'";
		}
		else {
			$text[1] = "null";
		}
		break;
	case 'E':
		$text[0] = AddFieldWrappers($prefix);
		if($_POST["format_date"])
			$date = simpledate2db($_POST["question".$id."hidden"],2);
		else
			$date = simpledate2db($_POST["question".$id],$locale_info["LOCALE_IDATE"]);
		if($date == "")
			$text[1] = "null";
		else
			$text[1] = "'".$date."'";
		break;
	case 'S':                 // simple text displayed, no question
		break;
	case 'U':                 // file upload
		$arr = $_POST["question"];
		$orig = $_POST["question_origname"];
		if(count($arr) == 0)
			break;
		$text[0] = AddFieldWrappers($prefix).", ".AddFieldWrappers($prefix."filecount").", ".AddFieldWrappers($prefix."files");
		$text[1]="'";
		foreach($arr as $value)
			$text[1].= db_addslashes($value).", ";
		$text[1]=substr($text[1],0,-2);
		$text[1].="', ".count($arr).", '";
		foreach($orig as $value)
			$text[1].= db_addslashes($value).", ";
		$text[1].="'";
		break;
	case 'N':                 // number
		$text[0] = AddFieldWrappers($prefix);
		if(is_numeric($_POST["question".$id]))
			$text[1] = $_POST["question".$id];
		else
			$text[1] = 'null';
		break;
	case 'D':
	case 'R':                 // dropdown box, radio buttons
		if($_POST["question".$id] == "")
			break;
		$text[0] = AddFieldWrappers($prefix);
		if ($other && $_POST["question".$id] == OTHER)
		{
			$text[0].= ", ".AddFieldWrappers($prefix."other");
			$text[1].= "'".OTHER."', '".db_addslashes($_POST["question".$id."other"])."'";
		}
		else
			$text[1] = $_POST["question".$id];
			
		break;
	case 'A':
	case 'B':
	case 'C':                 // list with options (radio-buttons matrix), list with 5 or 10 options
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			$text[0].=AddFieldWrappers($prefix . "X" . $value).", ";
			if($_POST["question".$id."_".$value])
				$text[1].=$_POST["question".$id."_".$value].", ";
			else
				$text[1].="null, ";
		}
		$text[0]=substr($text[0],0,-2);
		$text[1]=substr($text[1],0,-2);
		break;
		
	case 'M': 				// multiple choice, set of check boxes
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			$text[0].=AddFieldWrappers($prefix . "X" . $value).", ";
			if($_POST["question".$id."_".$value])
				$text[1].=$_POST["question".$id."_".$value].", ";
			else
				$text[1].="null, ";
		}
		if ($other){
			$text[0].=AddFieldWrappers($prefix."other").", "; 
			$text[1].=" '".db_addslashes($_POST["question".$id."other"])."', ";
		}
		$text[0]=substr($text[0],0,-2);
		$text[1]=substr($text[1],0,-2);
		break;
	
	case 'P': 		// multiple choice with comments, set of check boxes, each with a text box
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			$text[0].=AddFieldWrappers($prefix . "X" . $value).", ";
			if($_POST["question".$id."_".$value])
				$text[1].=$_POST["question".$id."_".$value].", ";
			else
				$text[1].="null, ";
			$text[0].=AddFieldWrappers($prefix . "X" . $value."comment").", ";
			$text[1].="'".db_addslashes($_POST["question".$id."_".$value."comment"])."', ";
			
		}
		if ($other && $_POST["question".$id] == OTHER)
		{
			$text[0].=AddFieldWrappers($prefix."other").", ".AddFieldWrappers($prefix."comment").", ";
			$text[1].="'0', '".db_addslashes($_POST["question".$id."other"])."', ";
		}
		$text[0]=substr($text[0],0,-2);
		$text[1]=substr($text[1],0,-2);
		break;
	case 'X':
		$text[0].=AddFieldWrappers($prefix);
		if(is_numeric($_POST["question".$id]))
			$text[1] = $_POST["question".$id];
		else
			$text[1] = 'null';
		break;
	default:
		$text[0] = AddFieldWrappers($prefix);
		$text[1] = "'".db_addslashes($_POST["question".$id])."'";
		
	}
	return $text;

}

function getFieldUpdate($sid,$id,$group,$type,$other)
{
	global $locale_info;
	$prefix = $sid."X".$group."X".$id;
	$text = "";
	
	switch ($type) {
	case 'T':
	case 'L':
		if (isset($_POST["question".$id]))
			$text = AddFieldWrappers($prefix)." = '".db_addslashes($_POST["question".$id])."'";
		else 
			$text = AddFieldWrappers($prefix)." = 'null'";
		break;
	case 'E':
		if($_POST["format_date"])
			$date = simpledate2db($_POST["question".$id."hidden"],2);
		else
			$date = simpledate2db($_POST["question".$id],$locale_info["LOCALE_IDATE"]);
			
		if($date != "")
			$text = AddFieldWrappers($prefix)." = '".$date."'";
		else
			$text = AddFieldWrappers($prefix)." = null";
		break;
	case 'S':                 // simple text displayed, no question
		break;
	case 'U':                 // file upload
		//get uploaded files
		$files = getValue($id,0,''); 
		$ofiles = getValue($id,0,'files');
		$arrfiles = array();
		$arrofiles = array();
		if ($files){
			$arrfiles = explode(", ",$files);
			$arrofiles = explode(", ",$ofiles);
		}
		if ($_POST["question_origname"]){
			
			$arr = array_unique(array_merge($arrfiles,$_POST["question"]));
			$orig = array_unique(array_merge($arrofiles,$_POST["question_origname"]));
			$difforig = array_unique(array_diff($arrofiles,$_POST["question_origname"])); 
			foreach($difforig as $key=>$value)
			{
				if( in_array($value, $orig) )
				{
					unset($arr[$key]);
					unset($orig[$key]);
				}
			}
		}
		else {
			$arr = array();
			$orig = array(); 
		}
		//if(count($arr) == 0)
		//	break;
		$file_count = 0;
		$text_files = "";
		$text_origfiles = "";
		foreach($orig as $key=>$value) {
			$file_path = getabspath('upload/surveys/').$sid.'/files/'.$arr[$key];
			if (is_file($file_path)){
				$text_files.= $arr[$key].", ";
				$text_origfiles.= $value.", ";
				$file_count++;
			}
		}
		if ($text_files!=""){
			$text_files = substr($text_files,0, -2);
			$text_origfiles = substr($text_origfiles,0, -2);
		}
		$text = AddFieldWrappers($prefix)." = '".db_addslashes($text_files)."', ".AddFieldWrappers($prefix."files")." = '".db_addslashes($text_origfiles)."', ";
		$text.= AddFieldWrappers($prefix."filecount")." = ".$file_count;
		break;
	case 'X':					// checkbox
	case 'N':                 // number
		if($_POST["question".$id])
			$text = AddFieldWrappers($prefix)." = ".$_POST["question".$id];
		else
			$text = AddFieldWrappers($prefix)." = null";
		break;
	case 'D':
	case 'R':                 // dropdown box, radio buttons
		if($_POST["question".$id] == "")
			break;
		$text = AddFieldWrappers($prefix)." = ".$_POST["question".$id];
		if ($other && $_POST["question".$id] == OTHER)
		{
			$text= AddFieldWrappers($prefix)." = '".OTHER."', ".AddFieldWrappers($prefix."other")." = '".db_addslashes($_POST["question".$id."other"])."'";
		}
			
		break;
	case 'A':
	case 'B':
	case 'C':                 // list with options (radio-buttons matrix), list with 5 or 10 options
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			$text.=AddFieldWrappers($prefix . "X" . $value)." = ";
			if($_POST["question".$id."_".$value])
				$text.=$_POST["question".$id."_".$value].", ";
			else
				$text.="null, ";
		}
		$text=substr($text,0,-2);
		break;
		
	case 'M': 				// multiple choice, set of check boxes
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			$text.=AddFieldWrappers($prefix . "X" . $value)." = ";
			if($_POST["question".$id."_".$value])
				$text.=$_POST["question".$id."_".$value].", ";
			else
				$text.="null, ";
		}
		
		if ($other)
			$text.=AddFieldWrappers($prefix."other")."='".db_addslashes($_POST["question".$id."other"])."', "; 
		$text=substr($text,0,-2);
		break;
	
	case 'P': 		// multiple choice with comments, set of check boxes, each with a text box
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			$text.=AddFieldWrappers($prefix . "X" . $value)." = ";
			if($_POST["question".$id."_".$value])
				$text.=$_POST["question".$id."_".$value].", ";
			else
				$text.="null, ";
			$text.=AddFieldWrappers($prefix . "X" . $value."comment")." = ";
			$text.="'".db_addslashes($_POST["question".$id."_".$value."comment"])."', ";
			
		}
		if ($other)
		{
			$oth = "null";
			if($_POST["question".$id] == OTHER)
				$oth = 0;
			$text.=AddFieldWrappers($prefix."other")." = '".$oth."', ".AddFieldWrappers($prefix."comment")." = '".db_addslashes($_POST["question".$id."other"])."', ";
		}
		$text=substr($text,0,-2);
		break;
	default:
		$text = AddFieldWrappers($prefix) ." = '".db_addslashes($_POST["question".$id])."'";
		
	}
	return $text;

}

function otherInputBox($id, $value)
{
	$value_other = "";
	if($value === OTHER)
		$value_other = getValue($id,0,'other');
	$text = '<input type="text" class="other  form-control" id="question'.$id.'other" name="question'.$id.'other" 
		alt="'.GetCustomLabel("other_answer").'" value="'.$value_other.'"
		onkeyup="$(\'#question'.$id.'othertext\').attr(\'checked\',\'checked\');valid_onthefly('.$id.',\'O\',\'1\',\'\');" />';
	
	return $text;
}

function getSurveyTable($sid)
{
	return "sv_survey_".$sid;
}

function getArchiveSurveyTable($sid)
{
	return "sv_survey_old_".$sid."_".date("YmdHis");
}

function getFieldDef($sid,$id,$group,$type,$other)
{
	$prefix = $sid."X".$group."X".$id;
	$text = "";
	
	switch ($type) {
	case 'T':
	case 'L':                 // text, long text
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " text";
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " memo"; 
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " text";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " CLOB";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " text"; 
		break;
	case 'E':                 // date field
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " date"; 
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " datetime"; 
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " datetime";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " date";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " TIMESTAMP"; 
		break;
	case 'S':                 // simple text displayed, no question
		break;
	case 'U':                 // file upload
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " text, ".AddFieldWrappers($prefix."filecount")." int, ".AddFieldWrappers($prefix."files")." text";
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " memo, ".AddFieldWrappers($prefix."filecount")." int, ".AddFieldWrappers($prefix."files")." memo";
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " text, ".AddFieldWrappers($prefix."filecount")." int, ".AddFieldWrappers($prefix."files")." text";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " CLOB, ".AddFieldWrappers($prefix."filecount")." NUMBER(11), ".AddFieldWrappers($prefix."files")." CLOB";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " text, ".AddFieldWrappers($prefix."filecount")." INTEGER, ".AddFieldWrappers($prefix."files")." text";
		break;
	case 'X':
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " int"; 	
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " int"; 
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " int";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " NUMBER(11)";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " integer"; 
		break;
	case 'N':                 // number
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " double"; 
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " double"; 
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " float";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " NUMBER(11,4)";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " float"; 
		//$text = $prefix . " double"; 
		break;
	case 'D':
	case 'R':                 // dropdown box, radio buttons
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " varchar(10)"; 
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " text(10)"; 
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " varchar(10)";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " varchar2(10)";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " varchar(10)"; 

		if ($other)
		{
			if(GetDatabaseType()==0) //MySQL
				$text.=", ".AddFieldWrappers($prefix."other")." text";
			else if(GetDatabaseType()==3) //Access
				$text.=", ".AddFieldWrappers($prefix."other")." memo"; 
			else if(GetDatabaseType()==2) //MSSQL
				$text.=", ".AddFieldWrappers($prefix."other")." text";
			else if(GetDatabaseType()==1) //Oracle
				$text.=", ".AddFieldWrappers($prefix."other")." CLOB";
			else if(GetDatabaseType()==4) //Postgre
				$text.=", ".AddFieldWrappers($prefix."other")." text"; 
		}
		break;
	case 'A':
	case 'B':
	case 'C':                 // list with options (radio-buttons matrix), list with 5 or 10 options
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			if(GetDatabaseType()==0) //MySQL
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==3) //Access
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==2) //MSSQL
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==1) //Oracle
				$text .= AddFieldWrappers($prefix . "X" . $value) . " NUMBER(11), ";
			else if(GetDatabaseType()==4) //Postgre
				$text .= AddFieldWrappers($prefix . "X" . $value) . " INTEGER, ";
		}
		$text=substr($text,0,-2);
		break;
		
	case 'M': 				// multiple choice, set of check boxes
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			if(GetDatabaseType()==0) //MySQL
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==3) //Access
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==2) //MSSQL
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==1) //Oracle
				$text .= AddFieldWrappers($prefix . "X" . $value) . " NUMBER(11), ";
			else if(GetDatabaseType()==4) //Postgre
				$text .= AddFieldWrappers($prefix . "X" . $value) . " INTEGER, ";
			//$text .= $prefix . "X" . $value . " int, ";
		}
		
		if ($other)
		{
			if(GetDatabaseType()==0) //MySQL
				$text.=" ".AddFieldWrappers($prefix."other")." text";
			else if(GetDatabaseType()==3) //Access
				$text.=" ".AddFieldWrappers($prefix."other")." memo"; 
			else if(GetDatabaseType()==2) //MSSQL
				$text.=" ".AddFieldWrappers($prefix."other")." text";
			else if(GetDatabaseType()==1) //Oracle
				$text.=" ".AddFieldWrappers($prefix."other")." CLOB";
			else if(GetDatabaseType()==4) //Postgre
				$text.=" ".AddFieldWrappers($prefix."other")." text"; 
			//$text.=" ".$prefix."other text"; 
		}
		else 
			if($text)
				$text=substr($text,0,-2);
		break;
	
	case 'P': 		// multiple choice with comments, set of check boxes, each with a text box
		$arr = getSubquestions($id);
		foreach ($arr as $i => $value)
		{
			if(GetDatabaseType()==0) //MySQL
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";	
			else if(GetDatabaseType()==3) //Access
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==2) //MSSQL
				$text .= AddFieldWrappers($prefix . "X" . $value) . " int, ";
			else if(GetDatabaseType()==1) //Oracle
				$text .= AddFieldWrappers($prefix . "X" . $value) . " NUMBER(11), ";
			else if(GetDatabaseType()==4) //Postgre
				$text .= AddFieldWrappers($prefix . "X" . $value) . " INTEGER, ";
			//$text .= $prefix . "X" . $value . " int,";
			
			if(GetDatabaseType()==0) //MySQL
				$text.=AddFieldWrappers($prefix . "X" . $value."comment")." text, ";
			else if(GetDatabaseType()==3) //Access
				$text.=AddFieldWrappers($prefix . "X" . $value."comment")." memo, "; 
			else if(GetDatabaseType()==2) //MSSQL
				$text.=AddFieldWrappers($prefix . "X" . $value."comment")." text, ";
			else if(GetDatabaseType()==1) //Oracle
				$text.=AddFieldWrappers($prefix . "X" . $value."comment")." CLOB, ";
			else if(GetDatabaseType()==4) //Postgre
				$text.=AddFieldWrappers($prefix . "X" . $value."comment")." text, "; 
			//$text .= $prefix . "X" . $value . "comment text, ";
		}
		
		if ($other)
		{
			if(GetDatabaseType()==0) //MySQL
				$text.=" ".AddFieldWrappers($prefix."other")." text, ";
			else if(GetDatabaseType()==3) //Access
				$text.=" ".AddFieldWrappers($prefix."other")." memo, "; 
			else if(GetDatabaseType()==2) //MSSQL
				$text.=" ".AddFieldWrappers($prefix."other")." text, ";
			else if(GetDatabaseType()==1) //Oracle
				$text.=" ".AddFieldWrappers($prefix."other")." CLOB, ";
			else if(GetDatabaseType()==4) //Postgre
				$text.=" ".AddFieldWrappers($prefix."other")." text, "; 
			//$text.=" ".$prefix."other text, "; 
			if(GetDatabaseType()==0) //MySQL
				$text.=AddFieldWrappers($prefix."comment")." text";
			else if(GetDatabaseType()==3) //Access
				$text.=AddFieldWrappers($prefix."comment")." memo"; 
			else if(GetDatabaseType()==2) //MSSQL
				$text.=AddFieldWrappers($prefix."comment")." text";
			else if(GetDatabaseType()==1) //Oracle
				$text.=AddFieldWrappers($prefix."comment")." CLOB";
			else if(GetDatabaseType()==4) //Postgre
				$text.=AddFieldWrappers($prefix."comment")." text"; 
			//$text.=$prefix."comment text"; 
		}
		else {
			if($text)
				$text=substr($text,0,-2);
		}
		break;
	default:
		if(GetDatabaseType()==0) //MySQL
			$text = AddFieldWrappers($prefix) . " text";
		else if(GetDatabaseType()==3) //Access
			$text = AddFieldWrappers($prefix) . " memo"; 
		else if(GetDatabaseType()==2) //MSSQL
			$text = AddFieldWrappers($prefix) . " text";
		else if(GetDatabaseType()==1) //Oracle
			$text = AddFieldWrappers($prefix) . " CLOB";
		else if(GetDatabaseType()==4) //Postgre
			$text = AddFieldWrappers($prefix) . " text"; 
	}
	return $text;

}

function getSubquestions($questionid)
{
	$arr=array();
	$rs = CustomQuery("select ".AddFieldWrappers("id")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$questionid);
	$i=0;
	while ($data = db_fetch_array($rs)) 
		$arr[$i++]=$data["id"];
	return $arr;
}

function buildViewControl($data, $type, $id, $grid)
{
	$text="";
switch ($type) 
{	
	case 'T':                 // text
	case 'S':                 // simple text displayed, no question
	case 'L':                 // long text, textarea
	case 'N':   
		$text = '<div class="qinput text">'.$data[$_SESSION["sid"]."X".$grid."X".$id].'</div>';
		break;
	case 'E':
		$rs = CustomQuery("select ".AddTableWrappers("fd").".".AddFieldWrappers("format")." from (".AddTableWrappers("sv_questions")." ".AddTableWrappers("sq")." inner join ".AddTableWrappers("sv_surveys")." ".AddTableWrappers("ss")." on ".AddTableWrappers("sq").".".AddFieldWrappers("sid")."=".AddTableWrappers("ss").".".AddFieldWrappers("id").") inner join ".AddTableWrappers("sv_format_date")." ".AddTableWrappers("fd")." on ".AddTableWrappers("ss").".".AddFieldWrappers("date_format")."=".AddTableWrappers("fd").".".AddFieldWrappers("id")." where ".AddTableWrappers("sq").".".AddFieldWrappers("id")."=".$id);
		$format_date = "";
		if($data1 = db_fetch_array($rs)) 
			$format_date = $data1["format"];
		if(!$format_date)
			$format_date = "m/d/y";
		if ($data[$_SESSION["sid"]."X".$grid."X".$id]) {
			$text = '<div class="qinput text">'.date($format_date, strtotime($data[$_SESSION["sid"]."X".$grid."X".$id])).'</div>';
		}
		break;
	case 'U':                 // file upload
		$origfiles = explode(",",$data[$_SESSION["sid"]."X".$grid."X".$id."files"]);
		$files = explode(",",$data[$_SESSION["sid"]."X".$grid."X".$id]);
		$text = '<div class="qinput text">';
		foreach($files as $ind=>$value)
			$text.= '<a href="'.GetTableLink("get_file", "", 'filename='.trim($value).'&origname='.trim($origfiles[$ind]).'&sid='.$_SESSION["sid"]).'">'.trim($origfiles[$ind]).'</a>&nbsp;&nbsp;';
		$text.= '</div>';
		break;
	case "D":
	case "R":
		if($data[$_SESSION["sid"]."X".$grid."X".$id]!=0)
		{
			$rs = CustomQuery("select ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("id")."=".$data[$_SESSION["sid"]."X".$grid."X".$id]);
			if($data1 = db_fetch_array($rs))
				$text = '<div class="qinput text">'.$data1["text"].'</div>';
		}
		else
		{
			if ($data[$_SESSION["sid"]."X".$grid."X".$id."other"]){
				$text = '<div class="qinput text">Other&nbsp;&nbsp;&nbsp;&nbsp;'.$data[$_SESSION["sid"]."X".$grid."X".$id."other"].'</div>';
			}
		}
		break;
	case "M":
		$text = '<div class="qinput text">';
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data1 = db_fetch_array($rs))
		{
			if(!is_null($data[$_SESSION["sid"]."X".$grid."X".$id."X".$data1["id"]]))
				$text.=$data1["text"]."<br>";
		}
		if ($data[$_SESSION["sid"]."X".$grid."X".$id."other"]){
			$text .= 'Other&nbsp;&nbsp;&nbsp;&nbsp;'.$data[$_SESSION["sid"]."X".$grid."X".$id."other"];
		}
		$text.='</div>';
		break;
	case "P":
		$text = '<div class="qinput text">';
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data1 = db_fetch_array($rs))
		{
			if(!is_null($data[$_SESSION["sid"]."X".$grid."X".$id."X".$data1["id"]]))
			{
				$text.=$data1["text"];
				if(!is_null($data[$_SESSION["sid"]."X".$grid."X".$id."X".$data1["id"]."comment"]))
				$text.="&nbsp;&nbsp;&nbsp;&nbsp;".$data[$_SESSION["sid"]."X".$grid."X".$id."X".$data1["id"]."comment"];
				$text.="<br>";
			}
		}
		if($data[$_SESSION["sid"]."X".$grid."X".$id."other"]==0 && $data[$_SESSION["sid"]."X".$grid."X".$id."comment"])
		{
			$text.="Other";
			$text.="&nbsp;&nbsp;&nbsp;&nbsp;".$data[$_SESSION["sid"]."X".$grid."X".$id."comment"];
			$text.="<br>";
		}
		$text.='</div>';
		break;
	case 'C':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]]=$data1["text"];
		}
		$text='<div class="qinput text"><table cellpadding=0 cellspacing=0 border=0>';
		foreach($options as $ind=>$value)
		{
			if(isset($data[$_SESSION["sid"]."X".$grid."X".$id."X".$ind]))
				$text.="<tr><td style='text-align:left'>".$value."&nbsp;&nbsp;&nbsp;&nbsp;</td><td style='text-align:left'>".$data[$_SESSION["sid"]."X".$grid."X".$id."X".$ind]."</td</tr>";
		}
		$text.='</table></div>';
		break;
	case 'B':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]]=$data1["text"];
		}
		$text='<div class="qinput text"><table cellpadding=0 cellspacing=0 border=0>';
		foreach($options as $ind=>$value)
		{
			
			if(isset($data[$_SESSION["sid"]."X".$grid."X".$id."X".$ind]))
				$text.="<tr><td style='text-align:left'>".$value."&nbsp;&nbsp;&nbsp;&nbsp;</td><td style='text-align:left'>".$data[$_SESSION["sid"]."X".$grid."X".$id."X".$ind]."</td</tr>";
		}
		$text.='</table></div>';
		break;
	case 'A':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]]=$data1["text"];
		}
		$answer = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_answer_options")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data1 = db_fetch_array($rs)) {
			$answer[$data1["id"]]=$data1["text"];
		}
		$text='<div class="qinput text"><table cellpadding=0 cellspacing=0 border=0>';
		foreach($options as $ind=>$value)
		{
			if(isset($answer[$data[$_SESSION["sid"]."X".$grid."X".$id."X".$ind]]))
				$text.="<tr><td style='text-align:left'>".$value."&nbsp;&nbsp;&nbsp;&nbsp;</td><td style='text-align:left'>".$answer[$data[$_SESSION["sid"]."X".$grid."X".$id."X".$ind]]."</td</tr>";
		}
		$text.='</table></div>';
		break;
	case 'X':   
		if($data[$_SESSION["sid"]."X".$grid."X".$id])
			$check = "on";
		else
			$check = "off";
		$text = '<div class="qinput text">'.$check.'</div>';
		break;
}	
return $text;

}

function clean($str) {
    $str = preg_replace('/&(?!#[0-9]+;)/s', '&amp;', $str);
        $str = str_replace(array('<', '>', '"'), array('&lt;', '&gt;', '&quot;'), $str);
        $str = nl2br($str);  // I added this line
        return $str;
  } // clean
  
function getTooltipHtml($help,$orientation="R",$format="A")
{
	if ($help && $orientation=="R"){
		
		return ' class="titleHintBox" tooltip="'.clean($help).'" ';
	}
	else 	
		return '';
}

function buildPreviewControl($id, $type, $settings) {
global $locale_info;
$text="";
$req = 0;
$regexp	= '';
if ($settings["required"])
	$req = 1;
if ($settings["regexp"])
	$regexp = $settings["regexp"];

switch ($type) {
case 'T':                 // text
	$text = '<div class="qinput text"><input type="text" ';
	if ($settings['max_length'])
		$text.='maxlength="'.$settings['max_length'].'" ';
	
	$text .= getTooltipHtml($settings["help"]).' id="question'.$id.'" name="question'.$id.'"  regexp="'.$regexp.'" req="'.$req.'" fieldtype="T" /></div>';
	break;
case 'E':                 // date field
	$text = '
	<div class="input-group qinput date" data-provide="datepicker">
    <input type="text" class="form-control datepicker3" id="question'.$id.'" name="question'.$id.'" readonly="readonly"  value="" regexp="'.$regexp.'" req="'.$req.'" fieldtype="E" />
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>';
	
case 'S':                 // simple text displayed, no question
	
	break;
case 'U':                 // file upload
	$text.= '<div class="qinput"><div '.getTooltipHtml($settings["help"]).'id="question'.$id.'" name="question'.$id.'" req="'.$req.'" fieldtype="U">
			<div class="row">
            <div class="span16 fileupload-buttonbar">
                <span class="btn success fileinput-button">
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn primary start">'.GetCustomLabel("start").'</button>
                <button type="reset" class="btn info cancel">'.GetCustomLabel("cancel").'</button>
                <button type="button" class="btn danger delete">'.GetCustomLabel("delete").'</button>
                <input type="checkbox" class="toggle">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="span16">
                <table class="zebra-striped"><tbody class="files"></tbody></table>
            </div>
        </div>
    </div></div>';
	
	if (!$settings['file_extensions'] || ($settings['file_extensions']=='')){
		$settings['file_extensions'] = '';
	}
	
	if (!$settings['max_num_of_files'] || ($settings['max_num_of_files']=='')){
		$settings['max_num_of_files'] = 10;
	}
	
	if (!$settings['max_file_size'] || ($settings['max_file_size']=='')){
		$settings['max_file_size'] = 5000;
	}
	
	$settings['max_file_size'] = $settings['max_file_size'] * 1024;
	
	$text .= '<script>
			$(function() {';
	$text .= '	var fileCtrl = $("#question'.$id.'");
				fileCtrl.fileupload();
				$.getJSON("'.GetTableLink("uploader", "", "id=".$id).'", function (files) {
					var fu = fileCtrl.data(\'fileupload\');
					fu._adjustMaxNumberOfFiles(-files.length);
					fu._renderDownload(files)
						.appendTo($(".files",fileCtrl))
						.fadeIn(function () {
							// Fix for IE7 and lower:
							$(this).show();
						});
				});
				fileCtrl.fileupload(
					"option",
					"url",
					"'.GetTableLink("uploader", "", "").'"
				);
				';
				
	if ($settings['file_extensions']!='') {
		$extArr = explode(',',$settings['file_extensions']);
		$extStr = '';
		foreach($extArr as $ext){
			$extStr .= trim($ext).'|';
		}
		substr($extStr, 0, strlen($extStr)-1);
		
		$text .= '
				fileCtrl.fileupload("option", {
					acceptFileTypes: /(\.|\/)('.$extStr.')$/i});';
	}
	$text .= '});
			</script>';
	break;
case 'L':                 // long text, textarea
	$text = '<div class="qinput"><textarea class="form-control" '.getTooltipHtml($settings["help"]).'id="question'.$id.'" regexp="'.$regexp.'" name="question'.$id.'" req="'.$req.'" fieldtype="L" onkeyup="valid_onthefly('.$id.',\'L\',\''.$req.'\',\''.$regexp.'\');">&nbsp;</textarea></div>';
	break;
case 'N':                 // number
	$maxlen = "";
	if ($settings["max_length"]>0){
		$maxlen .= ' maxlength="'.$settings["max_length"].'" ';
	}
	$text = '<div class="qinput number"><input class="form-control" '.getTooltipHtml($settings["help"]).'type="text" '.$maxlen.' regexp="'.$regexp.'" id="question'.$id.'" name="question'.$id.'"  req="'.$req.'" isint="'.$settings["int_only"].'" fieldtype="N"/ ></div>';
	break;
case 'D':                 // dropdown box
	// get options
	
	$text = '<div class="qinput dropdown"><select class="form-control" '.getTooltipHtml($settings["help"]).'id="question'.$id.'" name="question'.$id.'" onchange="showhideother(this.name,this.value); valid_onthefly('.$id.',\'D\',\''.$req.'\',\'\');" req="'.$req.'" fieldtype="D" />
	<option value="">Please select</option>';
	$value = -1;
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	//."  order by ".AddFieldWrappers("sortorder"));
	//Gerber added
	while ($data = db_fetch_array($rs)) {
		$sel = "";
		if($value == $data["id"])
			$sel = "selected";
		$text .= '<option value="'.$data["id"].'" '.$sel.'>'. $data["text"] .'</option>';
	}
	
	// 'Other' option enabled?
	$other_hidden = "display:none;";
	$sel = "";
	if($value === OTHER)
	{
		$sel = "selected";
		$other_hidden = "";
	}
	if ($settings["other"]) {
		$text .= '<option value="'.OTHER.'" '.$sel.'>'.GetCustomLabel('other').'</option>';
	}
	$sel = "";
	if($value == -1)
		$sel = "selected";
	// if not required add 'No answer' option
	if (!$settings["required"])
		$text .= '<option value="-1"'.$sel.'>'.GetCustomLabel('no_answer').'</option>';
		
	$text.='</select>';
	
	// add 'other' text box
	if ($settings["other"]) {
	$text.= '<input type="text"  id="question'.$id.'other" name="question'.$id.'other" style="margin-left: 10px; width: 200px; '.$other_hidden.'" alt="'.GetCustomLabel('other_answer').'" onkeyup="valid_onthefly('.$id.',\'O\',\'1\',\'\');"/>';
	}
	
	$text .= '</div>';
	
	break;
case 'R':                 // radio-buttons
	// get options
	
	$text = '<div class="qinput radio"><ul '.getTooltipHtml($settings["help"]).'req="'.$req.'" fieldtype="R" name="question'.$id.'">';
	$value = -1;
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
		while ($data = db_fetch_array($rs)) {
		$check = "";
		if($value == $data["id"])
			$check = "checked";
		$text .= '<li><input type="radio" '.$check.' name="question'.$id.'" id="question'.$id.'_'.$data["id"].'" value="'.$data["id"].'" onclick="valid_onthefly('.$id.',\'R\',\''.$req.'\',\'\');"/>';
		$text .= '<label for="question'.$id.'_'.$data["id"].'">'.$data["text"].'</label></li>';
	}

	// 'Other' option enabled?
	if ($settings["other"]) {
		$check = "";
		if($value === OTHER)
			$check = "checked";
		$text.= '<li><input type="radio" name="question'.$id.'" '.$check.' id="question'.$id.'othertext" value="'.OTHER.'"/>';
		$text.= '<label for="question'.$id.'">'.GetCustomLabel('other').'</label>';	
		$text.= otherInputBox($id, $value);
		$text.='</li>';
	}
	
	// if not required add 'No answer' option
	if (!$settings["required"]) {
		$check = "";
		if($value == -1 || $value == "")
			$check = "checked";
		$text .= '<li><input type="radio" name="question'.$id.'" id="question'.$id.'_'.$data["id"].'" value="-1" '.$check.' />';
		$text .= '<label for="question'.$id.'_'.$data["id"].'">'.GetCustomLabel('no_answer').'</label></li>';
	}

	$text .= '</ul></div>';
	
	break;

case 'A':                 // list with options (radio-buttons matrix)
	
	// get answer options
	$options = array();
	$rs1 = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_answer_options")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	while ($data1 = db_fetch_array($rs1)) {
		$options[$data1["id"]]=$data1["text"];
	}
	
	$text = buildPreviewOptionsList($id, $options, $req, $settings["help"]);
	
	
	break;
	
case 'B':              	// list with 1-5 options
case 'C':				// list with 1-10 options 

	$options = array();
	$count = $type == 'B' ? 5 : 10;
	for ($i=1;$i<=$count;$i++)
	{
		$options[$i]=$i;	
	}
	
	$text = buildPreviewOptionsList($id, $options, $req, $settings["help"]);
	
	break;	
	
case 'M': 				// multiple choice, set of check boxes
	// get options
	
	$text = '<div class="qinput checkboxes"><ul '.getTooltipHtml($settings["help"]).'name="question'.$id.'" fieldtype="M" req="'.$req.'">';
	
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));

	while ($data = db_fetch_array($rs)) {
		$value = 0;
		$check = "";
		if($value == $data["id"])
			$check = "checked";
		$text .= '<li><input type="checkbox" '.$check.' name="question'.$id.'_'.$data["id"].'" id="question'.$id.'_'.$data["id"].'" value="'.$data["id"].'" onclick="valid_onthefly('.$id.',\'M\',\''.$req.'\',\'\');"/>';
		$text .= '<label for="question'.$id.'_'.$data["id"].'">'.$data["text"].'</label></li>';
	}

	// 'Other' option enabled?
	$other_hidden = "style='display:none;'";
	if ($settings["other"]) {
		$value = '';
		$check = "";
		if($value){
			$other_hidden = "";
			$check = "checked";
		}
		$text.= '<li><input type="checkbox" '.$check.' name="question'.$id.'" id="question'.$id.'othertext" onclick="showhideothercheck(this.name);" value="'.OTHER.'"/>';
		$text.= '<label for="question'.$id.'">Other</label>';	
		$text .= '<input type="text" class="other  form-control" id="question'.$id.'other" name="question'.$id.'other" '.$other_hidden.' alt="Other answer" value="'.$value.'"
		onkeyup="$(\'#question'.$id.'othertext\').attr(\'checked\',\'checked\');valid_onthefly('.$id.',\'O\',\'1\',\'\');" />';
		$text.='</li>';
	}
	
	$text .= '</ul></div>';
	
	break;
	
case 'P': 		// multiple choice with comments, set of check boxes, each with a text box
	// get options
	
	$text = '<div class="qinput checkboxes"><ul '.getTooltipHtml($settings["help"]).'fieldtype="P" req="'.$req.'" name="question'.$id.'">';
	
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));

	while ($data = db_fetch_array($rs)) {
		$value = 0;
		$check = "";
		if($value == $data["id"])
			$check = "checked";
		$text .= '<li><span class="option"><input type="checkbox" '.$check.' name="question'.$id.'_'.$data["id"].'" id="question'.$id.'_'.$data["id"].'" value="'.$data["id"].'" onclick="valid_onthefly('.$id.',\'P\',\''.$req.'\',\'\');"/>';
		$text .= '<label for="question'.$id.'_'.$data["id"].'">'.$data["text"].'</label></span><span class="comment">';
		$text .= '<input type="text" class="other  form-control"  name="question'.$id.'_'.$data["id"].'comment" id="question'.$id.'_'.$data["id"].'comment" 
					onkeyup="$(\'#question'.$id.'_'.$data["id"].'\').attr(\'checked\',\'checked\');"></span></li>';
	}

	// 'Other' option enabled?
	if ($settings["other"]) {
		$value = '';
		$check = "";
		if($value === "0")
			$check = "checked";
		$text.= '<li><span class="option"><input type="checkbox" '.$check.' name="question'.$id.'" id="question'.$id.'othertext" value="'.OTHER.'"/>';
		$text.= '<label for="question'.$id.'_'.$data["id"].'">Other</label></span><span class="comment">';	
		$text.= '<input type="text" class="other  form-control" id="question'.$id.'other" name="question'.$id.'other" alt="Other answer"
				onkeyup="$(\'#question'.$id.'othertext\').attr(\'checked\',\'checked\');valid_onthefly('.$id.',\'O\',\'1\',\'\');" /></span></li>';
	}
	
	$text .= '</ul></div>';
	
	break;

case 'X': 		// check box
	$value = '';
	$check = "";
	if($value)
		$check = "checked";
	$text = '<div id="error'.$id.'" class="error"></div>';
	$text .= '<div class="qinput checkboxes"><input fieldtype="X" '.getTooltipHtml($settings["help"]).' type="checkbox" '.$check.' name="question'.$id.'" req="'.$req.'" id="question'.$id.'" value="'.$id.'" onclick="valid_onthefly('.$id.',\'X\',\''.$req.'\',\'\');"/></div>';
	
	break;

	
default:                
	$text = '<div class="qinput text"><input class="form-control" '.getTooltipHtml($settings["help"]).' type="text" id="" name="question'.$id.'"  req="'.$req.'" fieldtype="defailt"/></div>';
	break;
	
	}
if ($type != "X") {
	$text.= '<div id="error'.$id.'" class="error"></div>';	
}
	
return $text;

}

function buildPreviewOptionsList($id, $options, $req, $help) {
	// get subquestions
	$text = '<div class="qinput list"><table '.getTooltipHtml($help).'name="question'.$id.'" fieldtype="A" req="'.$req.'"><thead><tr><td></td>';
	
	// answer options as table headers
	foreach ($options as $oid => $ovalue)
	{
		$text .="<th>".$ovalue."</th>";
	}
	
	$text .= "</tr></thead><tbody>";
	$odd=true;	
	
	$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$id."  order by ".AddFieldWrappers("sortorder"));
	//Gerber added:."  order by ".AddFieldWrappers("sortorder"));
	
	$i = 0;
	while ($data = db_fetch_array($rs)) {
	
		$class = $odd ? "odd" : "even";
		$odd = !$odd;
		$text .= '<tr class="'.$class.'"><th class="qhead">'.$data["text"].'</th>';
		foreach ($options as $oid => $ovalue)
		{
			$check = "";
			$text .='<td><input type="radio" '.$check.' name="question'.$id.'_'.$data["id"].'" id="question'.$id.'_'.$data["id"].'" value="'.$oid.'"/ row='.$i.' ></td>';
		}
		$i++;
		$text .= '</tr>';
	}
	$text .= '</tbody></table></div>';
	
	return $text;
}

function buildInputControlFull($id, $settings, $format){
	if ($settings["help"] && ($settings["helporientation"]=="U")) {
		$text = "<div id='fullquest".$id."' class='hidefull'>".$settings["help"]."</div>";
		return $text;
	}
	return '';
}

function buildInputControlFullImg($id, $settings, $format){
	if ($settings["help"] && ($settings["helporientation"]=="U")) {
		$text = "<img src='/images/quest_off.gif' title='".GetCustomLabel('click_to_show_description')."' class='btnfullquest' onclick='showHideFullQuest(".$id.");return;'><br>";
		return $text;
	}
	return '';
}

function buildViewControlStats($qid,$type,$grid,$setting){
$text = "<table><tr><td>'".GetCustomLabel('answer')."'</td><td>'".GetCustomLabel('count')."'</td><td>'".GetCustomLabel('percentage')."'</td></tr>";
$countA = 0;
$countAll = 0;
switch ($type) {
case 'U':
case 'S':
case 'E':
		$text .= '<tr><td colspan="3">"'.GetCustomLabel('no_calculate').'"</td></tr>';
		break;
case 'T':  
case 'N':
case 'L':
case 'X': 
		$rs2=CustomQuery("select ".AddFieldWrappers($_SESSION["sid"]."X".$grid."X".$qid)." from ".AddTableWrappers("sv_survey_".$_SESSION["sid"])." where ".AddFieldWrappers("submit")."=1");
		
		while ($data2=db_fetch_array($rs2)){
			$countAll++;
			if (!is_null($data2[$_SESSION["sid"]."X".$grid."X".$qid])){
				$countA++;
			}
		}
		$text .= '<tr><td>'.GetCustomLabel('answer').'</td><td>'.$countA."</td><td>".floor(($countA*100)/$countAll)."%</td></tr>";
		$text .= '<tr><td>'.GetCustomLabel('no_answer').'</td><td>'.($countAll - $countA)."</td><td>".floor((($countAll - $countA)*100)/$countAll)."%</td></tr>";
		break;
case 'D': 
		/*$countN = 0;
		$rs = CustomQuery("select id, text from sv_question_details where question_id=".$qid);
		$options = array();
		while($data1 = db_fetch_array($rs)){
			$options[$data1["id"]]=array('text' => $data1["text"], 'count' => 0);
		}
		$rs2=CustomQuery("select * from sv_survey_".$_SESSION["sid"]);
		while ($data2=db_fetch_array($rs2)){
			$countAll++;
			if ($data2[$_SESSION["sid"]."X".$grid."X".$qid] != ""){
				$options[$data2[$_SESSION["sid"]."X".$grid."X".$qid]]['count']++;
			}
			else{
				$countN++;
			}
			
			if (isset($data2[$_SESSION["sid"]."X".$grid."X".$qid."other"])){
				$options['other']['text'] = "Other";
				$options['other']['count'] = 0;
				if ($data2[$_SESSION["sid"]."X".$grid."X".$qid."other"] !="")
					$options['other']['count']++;
			}
		}
		foreach ($options as $opt){
			$text .= '<tr><td>'.$opt["text"].'</td><td>'.$opt["count"].'</td><td>'.floor(($opt["count"]*100)/$countAll).'%</td></tr>';
		}
		$text .= '<tr><td>No answer</td><td>'.$countN.'</td><td>'.floor(($countN*100)/$countAll).'%</td></tr>';
		break;*/
case 'R':
		$countN = 0;
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$qid);
		//Gerber added:."  order by ".AddFieldWrappers("sortorder"));
		$options = array();
		while($data1 = db_fetch_array($rs)){
			$options[$data1["id"]]=array('text' => $data1["text"], 'count' => 0);
		}
		$rs2=CustomQuery("select * from ".AddTableWrappers("sv_survey_".$_SESSION["sid"])." where ".AddFieldWrappers("submit")."=1");
		while ($data2=db_fetch_array($rs2)){
			$countAll++;
			if ($data2[$_SESSION["sid"]."X".$grid."X".$qid] != ""){
				$options[$data2[$_SESSION["sid"]."X".$grid."X".$qid]]['count']++;
			}
			else{
				$countN++;
			}
		}
		foreach ($options as $key=>$opt){
			
			if ($key>0) {
				$text .= '<tr><td>'.$opt["text"].'</td><td>'.$opt["count"].'</td><td>'.floor(($opt["count"]*100)/$countAll).'%</td></tr>';
			}
			if ($key==-1){
				$text .= '<tr><td>'.GetCustomLabel('no_answer').'</td><td>'.$opt["count"].'</td><td>'.floor(($opt["count"]*100)/$countAll).'%</td></tr>';
			}
			if ($key==OTHER){
				$text .= '<tr><td>'.GetCustomLabel('other').'</td><td>'.$opt["count"].'</td><td>'.floor(($opt["count"]*100)/$countAll).'%</td></tr>';
			}
		}
		$text .= '<tr><td>'.GetCustomLabel('no_answer').'</td><td>'.$countN.'</td><td>'.floor(($countN*100)/$countAll).'%</td></tr>';
		break;
case 'M':
		$countN = 0;
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$qid);

		$options = array();
		while($data1 = db_fetch_array($rs)){
			$options[$data1["id"]]=array('text' => $data1["text"], 'count' => 0);
		}
		$options['other']['text'] = GetCustomLabel('other');
		$options['other']['count'] = 0;
		$rs2=CustomQuery("select * from ".AddTableWrappers("sv_survey_".$_SESSION["sid"])." where ".AddFieldWrappers("submit")."=1");
		while ($data2=db_fetch_array($rs2)){
			$countAll++;
			$countNOpt = 0;
			foreach($options as $key=>$val){
				if ($data2[$_SESSION["sid"]."X".$grid."X".$qid."X".$key] != "" && $key !="other"){
					$options[$data2[$_SESSION["sid"]."X".$grid."X".$qid."X".$key]]['count']++;
				}
				else if (isset($data2[$_SESSION["sid"]."X".$grid."X".$qid."other"]) && $key =="other"){
					if ($data2[$_SESSION["sid"]."X".$grid."X".$qid."other"] !=""){
						$options['other']['count']++;
					}
					else {
						$countNOpt++;
					}
				}
				else {
					$countNOpt++;
				}
			}
					
			if ($countNOpt==sizeof($options))
				$countN++;
						
			
		}
		foreach ($options as $opt){
			$text .= '<tr><td>'.$opt["text"].'</td><td>'.$opt["count"].'</td><td>'.floor(($opt["count"]*100)/$countAll).'%</td></tr>';
		}
		$text .= '<tr><td>'.GetCustomLabel('no_answer').'</td><td>'.$countN .'</td><td>'.floor(($countN*100)/$countAll).'%</td></tr>';
		break;
case 'P':
		$countN = 0;
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$qid);

		$options = array();
		while($data1 = db_fetch_array($rs)){
			$options[$data1["id"]]=array('text' => $data1["text"], 'count' => 0);
		}
		$options['other']['text'] = "Other";
		$options['other']['count'] = 0;
		$rs2=CustomQuery("select * from ".AddTableWrappers("sv_survey_".$_SESSION["sid"])." where ".AddFieldWrappers("submit")."=1");
		while ($data2=db_fetch_array($rs2)){
			$countAll++;
			$countNOpt = 0;
			foreach($options as $key=>$val){
				if ($data2[$_SESSION["sid"]."X".$grid."X".$qid."X".$key] != "" && $key !="other"){
					$options[$data2[$_SESSION["sid"]."X".$grid."X".$qid."X".$key]]['count']++;
				}
				else if (isset($data2[$_SESSION["sid"]."X".$grid."X".$qid."other"]) && $key =="other"){
					if ($data2[$_SESSION["sid"]."X".$grid."X".$qid."comment"] !="")
						$options['other']['count']++;
				}
				else {
					$countNOpt++;
				}
			}
					
			if ($countNOpt==sizeof($options))
				$countN++;
						
			
		}
		foreach ($options as $opt){
			$text .= '<tr><td>'.$opt["text"].'</td><td>'.$opt["count"].'</td><td>'.floor(($opt["count"]*100)/$countAll).'%</td></tr>';
		}
		$text .= '<tr><td>'.GetCustomLabel('no_answer').'</td><td>'.$countN .'</td><td>'.floor(($countN*100)/$countAll).'%</td></tr>';
		break;
case 'A':
case 'B':
case 'C':
		$options = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("question_id")."=".$qid);

		while ($data1 = db_fetch_array($rs)) {
			$options[$data1["id"]] = array('text' => $data1["text"], 'count' => 0);
		}
		$answer = array();
		$rs = CustomQuery("select ".AddFieldWrappers("id").", ".AddFieldWrappers("text")." from ".AddTableWrappers("sv_answer_options")." where ".AddFieldWrappers("question_id")."=".$qid);
		while ($data1 = db_fetch_array($rs)) {
			$answer[$data1["id"]] = array('text' => $data1["text"], 'count' => 0);
		}
		
		$count = 0;
		$countAll = 0;
		$rs2=CustomQuery("select * from ".AddTableWrappers("sv_survey_".$_SESSION["sid"])." where ".AddFieldWrappers("submit")."=1");
		while ($data2 = db_fetch_array($rs2)) {	
			$countAll++;
			$isAnswer = false;
			foreach($options as $ind=>$value){
				if ($data2[$_SESSION["sid"]."X".$grid."X".$qid."X".$ind]>0){
					$isAnswer = true;
					break;
				}
			}
			if ($isAnswer) 
				$count++;
		}
		
		$text .= '<tr><td>'.GetCustomLabel('answer').'</td><td>'.$count.'</td><td>'.floor(($count*100)/$countAll).'%</td></tr>';
		$text .= '<tr><td>'.GetCustomLabel('no_answer').'</td><td>'.($countAll - $count)."</td><td>".floor((($countAll - $count)*100)/$countAll)."%</td></tr>";
		break;
	}
$text .= "</table>";
return $text;
}

function survey_handle_error($errno, $errstr, $errfile, $errline)
{
	return true;
}

function mydate($param, $sec)
{
	if($sec == "")
		return date($param);
	else
		return date($param, $sec);
}

function getAnswerArray($qid, $hash){
	$arrAnswers = array();
	if(!$hash){
		return $arrAnswers;
		exit();
	}
	$str = "select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("id")."=".$qid;
	$rs = CustomQuery($str);
	$data = db_fetch_array($rs);
	$sid = $data["sid"];
	$gid = $data["group_id"];
	
	$str = "select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("sid")."=".$sid;
	$rs = CustomQuery($str);
	
	$connection = getDefaultConnection(); 
	$arr = $connection->getFieldsList("select * from ".addTableWrappers("sv_survey_".$sid)." where 1=0");
	foreach($arr as $value)
		$arrFields[]=$value["fieldname"];
	while($data = db_fetch_array($rs)){
		
		$field_cond = $sid."X".$data["group_id"]."X".$data["id"];
		if(!in_array($field_cond,$arrFields))
			continue;
		$strSurvey = "select ".AddFieldWrappers($field_cond)." as ".AddFieldWrappers("res")." from ".AddTableWrappers("sv_survey_".$sid)." where ".AddFieldWrappers("hash")."='".$hash."'";
		$rsSurvey = CustomQuery($strSurvey);
		if($dataSurvey = db_fetch_array($rsSurvey)){
			if($dataSurvey["res"]=="-other-"){
					$field_cond2 = $sid."X".$data["group_id"]."X".$data["id"]."other";
					if(!in_array($field_cond2,$arrFields))
						continue;
					$strSurvey2 = "select ".AddFieldWrappers($field_cond2)." as ".AddFieldWrappers("res")." from ".AddTableWrappers("sv_survey_".$sid)." where ".AddFieldWrappers("hash")."='".$hash."'";
					$rsSurvey2 = CustomQuery($strSurvey2);
					if($dataSurvey2 = db_fetch_array($rsSurvey2))
						$arrAnswers[$data["id"]] = $dataSurvey2["res"];
			}
			elseif(($data["type"] == "D" || $data["type"] == "R") && $dataSurvey["res"]){
				$strDet = "select * from ".AddTableWrappers("sv_question_details")." where ".AddFieldWrappers("id")."=".$dataSurvey["res"];
				$rsDet = CustomQuery($strDet);
				if($dataDet = db_fetch_array($rsDet)){
					if($dataDet["text"]!="No answer"){
						$arrAnswers[$data["id"]] = $dataDet["text"];
					}
					else{
						$arrAnswers[$data["id"]] = "";
					}
				}
				else{
					$arrAnswers[$data["id"]] = "";
				}
			}
			else
				$arrAnswers[$data["id"]] = $dataSurvey["res"];
		}
	}
	return $arrAnswers;
}

function getScenarioResult($qid, $arrAnswers){
	$str = "select * from ".AddTableWrappers("sv_scenarios")." where ".AddFieldWrappers("qid")."=".$qid;
	$rs = CustomQuery($str);
	$scenario['qhide'] = false;
	$scenario['qid'] = $qid;
	$count=0;
	$str_if=0;
	while($data = db_fetch_array($rs)){
		$answer = $arrAnswers[$data["quest"]];
		$condValue = $data['cond_value'];
		
		$strTmp = "select * from ".AddTableWrappers("sv_questions")." where ".AddFieldWrappers("id")."=".$data["quest"];
		$rsTmp = CustomQuery($strTmp);
		$dataTmp = db_fetch_array($rsTmp);
		$qtype=$dataTmp["type"];
		if( $qtype == "E" ){
			$answer = strtotime($arrAnswers[$data["quest"]]);
			$condValue = strtotime($data['cond_value']);
		}
		if( $qtype == "D" && ($answer=="Please select" || $answer=="No answer") || $qtype == "R" && $answer=="No answer")
			$answer = "";
		if( $qtype == "X" ){
			$answer = false;
			if($arrAnswers[$data["quest"]])
				$answer = true;
			$condValue = false;
			if($data['cond_value'])
				$condValue = true;
		}
		
		if(!is_numeric($answer) || !is_numeric($condValue) || Empty($answer) && $answer!=0 || Empty($condValue) && $condValue!=0){
			if(Empty($answer))
				$answer="";
			elseif(Empty($condValue))
				$condValue="";
			else{
				$answer="'".$answer."'";
				$condValue="'".$condValue."'";
			}
		}
		if( $data["condition"]=="Equals" && $answer==$condValue)
			$str_if++;
		if( $data["condition"]=="Less than" && $answer<$condValue)
			$str_if++;
		if( $data["condition"]=="More than" && $answer>$condValue)
			$str_if++;
		if( $data["condition"]=="Equals or less than" && $answer<=$condValue)
			$str_if++;
		if( $data["condition"]=="Equals or more than" && $answer>=$condValue)
			$str_if++;
		if( $data["condition"]=="Not equals" && $answer!=$condValue)
			$str_if++;
		if( $data["condition"]=="Empty" && $answer=="")
			$str_if++;
		$count++;
	}
	if($str_if==$count && $str_if>0)
		$scenario['qhide']=true;
	return $scenario;
}


function countTotalPage($sid, $hash, $format){
	$num_group = 0;
	$num_question = 0;
	$total_page = 0;
	$rss=CustomQuery("select ".AddTableWrappers("q").".*,".AddTableWrappers("gr").".".AddFieldWrappers("name").",".AddTableWrappers("gr").".".AddFieldWrappers("description")." from ".AddTableWrappers("sv_questions")." ".AddTableWrappers("q")." inner join ".AddTableWrappers("sv_groups")." ".AddTableWrappers("gr")." on ".AddTableWrappers("gr").".".AddFieldWrappers("id")."=".AddTableWrappers("q").".".AddFieldWrappers("group_id")." where ".AddTableWrappers("q").".".AddFieldWrappers("sid")."=".$sid." order by ".AddTableWrappers("gr").".".AddFieldWrappers("sortorder").",".AddTableWrappers("q").".".AddFieldWrappers("sortorder"));
	$group_name="";
	
	while($data=db_fetch_array($rss))
	{
		$arrAnswers = getAnswerArray($data["id"], $hash);
		$scenario = getScenarioResult($data["id"], $arrAnswers);
		if(!$scenario["qhide"]){
			if ($group_name!=$data["name"])
			{
				$group_name=$data["name"];
				$num_group++;
			}
			$num_question++;
		}
	}
	switch($format)
	{
		case "A":
			$total_page = 1;
			break;
		case "G":
			$total_page = $num_group;
			break;
		case "Q":
			$total_page = $num_question;
			break;
	}
	return $total_page;
}
?>
