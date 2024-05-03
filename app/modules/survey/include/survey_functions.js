TEXT_FIELD_REQUIRED = Runner.getCustomLabel("TEXT_FIELD_REQUIRED");
TEXT_FIELD_NUMBER = Runner.getCustomLabel("TEXT_FIELD_NUMBER");
TEXT_FIELD_DATE = Runner.getCustomLabel("TEXT_FIELD_DATE");
TEXT_ERROR = Runner.getCustomLabel("TEXT_ERROR");
TEXT_FIELD_ISINTEGER = Runner.getCustomLabel("TEXT_FIELD_ISINTEGER");
TEXT_REGEXP = Runner.getCustomLabel("TEXT_REGEXP");
function survey_validation(locat)
{
	var valid = true;
	var first_error = 0;
	$("[fieldtype]").each(function(){
		id = $(this).attr("name").replace("question","");
		type = $(this).attr("fieldtype");
		value = $(this).val();
		regex = $(this).attr("regexp");
		globalDateFormat = $("#format_date").val();
		if(type == "E") {
			locale_dateformat = 0;
		}
		if (type == "N"){
			isint = $(this).attr("isint");
		}
		if($(this).is(":visible")){
			switch(true)
			{
				case $(this).attr("req") == 1 && (value == "" || value==undefined ||  value == "-other-" && type == "D") && type != "M" && type != "R" && type != "P" && type != "A" && type != "U" && type != "X":
					if(type == "D" && value == "-other-" && $("#question"+id+"other").val() != "")
					{
						$("#error"+id).html("");
						break;
					}
					if(locat != "prev")
						$("#error"+id).html(TEXT_FIELD_REQUIRED);
					if(first_error == 0)
						first_error = id;
					valid = false;
					break;
				case type == "N" && (!(!isNaN(parseFloat(value)) && isFinite(value)) || !IsInteger(id,isint)) && value!="" :
					if(locat != "prev")
						$("#error"+id).html(TEXT_FIELD_NUMBER);
					if(first_error == 0)
						first_error = id;
					valid = false;
					break;
				case type == "E" && !IsDate(value, locale_dateformat) && value!="":
					if(globalDateFormat) {
						valid = true;
						break;
					}	
					if(locat != "prev" && !globalDateFormat)
						$("#error"+id).html(TEXT_FIELD_DATE);
					if(first_error == 0)
						first_error = id;
					valid = false;
					break;
				case (type == "M" || type == "R" || type == "P") && $(this).attr("req") == 1:
					valid_M = false;
					$("input[id^=question"+id+"_]").each(function(){
						if($(this).prop('checked')==true)
							valid_M = true;
					});
					if($("#question"+id+"othertext").prop('checked')==true && $("#question"+id+"other").val() != "")
						valid_M = true;
					if(!valid_M)
					{
						if(locat != "prev")
							$("#error"+id).html(TEXT_FIELD_REQUIRED);
						if(first_error == 0)
							first_error = id;
						valid = false;
					}
					else
						$("#error"+id).html("");
					break;
				case (type == "A" && $(this).attr("req") == 1):
					valid_M = Array();
					i = 0;
					while(true)
					{
						valid_M[i] = false;
						$("input[id^=question"+id+"_][row="+i+"]").each(function(){
							if($(this)[0].checked)
								valid_M[i] = true;
						});
						i++;
						if($("input[id^=question"+id+"_][row="+i+"]").length==0)
							break;
					}
					valid_row = true;
					for(i=0;i<valid_M.length;i++)
						if(valid_M[i] == false)
						{
							valid_row = false;
							if(locat != "prev")
								$("th.qhead")[i].style.color="red";
						}
						else
							$("th.qhead")[i].style.color="black";
					if(!valid_row)
					{
						if(locat != "prev")
							$("#error"+id).html(TEXT_FIELD_REQUIRED);
						if(first_error == 0)
							first_error = id;
						valid = false;
					}
					else
						$("#error"+id).html("");
					break;
				case (type == "U") && $(this).attr("req") == 1 && $(this).find("table").find("tr.template-download").length == 0:
					if(locat != "prev")
						$("#error"+id).html(TEXT_FIELD_REQUIRED);
					if(first_error == 0)
						first_error = id;
					valid = false;
					break;
				case type == "X" && $(this).attr("req") == 1:
					valid_x = false;
					if($("#question"+id).prop('checked')==true)
							valid_x = true;
					if(!valid_x)
					{
						valid = false;
						if(locat != "prev")
							$("#error"+id).html(TEXT_FIELD_REQUIRED);
						if(first_error == 0)
							first_error = id;
					}
					break;
				default:
					$("#error"+id).html("");
			}
		}
		if(regex)
		{
			if(!validRegExp(value,regex))
			{
				if(first_error == 0)
					first_error = id;
				if(locat != "prev")
					$("#error"+id).html(TEXT_REGEXP);
				valid = false;
			}
		}
	});
	if(locat == "prev" && !valid)
	{
		$("#error").val("ok");
		valid = true;
	}
	if(valid)
	{
		$("#locat").val(locat);
		$("#surveyform").submit();
		return true;
	}
	//else
	//	document.location.href='#question'+first_error+'error';
}

function valid_onthefly(id,type,req,regex)
{
	globalDateFormat = $("#format_date").val();
	switch(true)
	{
		case (type != "A" && type != "M" && type != "P" && type != "R"):
			if(type == "O")
			{
				value = $("#question"+id+"other")[0].value;
				check = $("#question"+id+"othertext").prop('checked');
				if(check == undefined)
					check ='checked';
			}
			else
			{
				value = $("#question"+id)[0].value;
				check = "";
			}
			break;
		case type == "A":
			valid_M = Array();
			i = 0;
			while(true)
			{
				valid_M[i] = false;
				$("input[id^=question"+id+"_][row="+i+"]").each(function(){
					if($(this)[0].checked)
						valid_M[i] = true;
				});
				i++;
				if($("input[id^=question"+id+"_][row="+i+"]").length==0)
					break;
			}
			valid_row = true;
			for(i=0;i<valid_M.length;i++)
				if(valid_M[i] == false)
				{
					valid_row = false;
					//$("th.qhead")[i].style.color="red";
				}
				else
					$("th.qhead")[i].style.color="black";
			if(valid_row)
				$("#error"+id).html("");
			return;
			break;
		case type == "M" || type == "P" || type == "R":
			valid_M = false;
			$("input[id^=question"+id+"_]").each(function(){
				if($(this)[0].checked)
					valid_M = true;
			});
			if(valid_M)
				$("#error"+id).html("");
			return;
			break;
	}
	
	if(type == "E")
		locale_dateformat = 0;
	if (globalDateFormat)
		return;
	switch(true)
	{
		case (type == "N" && !(!isNaN(parseFloat(value)) && isFinite(value)) && value!=""):
			$("#error"+id).html(TEXT_FIELD_NUMBER);
			break;
		case (type == "E" && !IsDate(value, locale_dateformat)) && value!="":
			$("#error"+id).html(TEXT_FIELD_DATE);
			break;
		default:
			$("#error"+id).html("");
	}
	
	if(regex)
	{
		if(!validRegExp(value,regex) && $("#error"+id).html() == "")
			$("#error"+id).html(TEXT_REGEXP);
		else
			$("#error"+id).html("");
	}
	
}
function IsInteger(id,int_only)
{
	if (int_only==0)
		return true;
	if(int_only == '1' && $("#error"+id).html() == "")
	{
		s = $("#question"+id).val();
		if((s.toString().search(/^-?[0-9]+$/) != 0) && s != ""){
			$("#error"+id).html(TEXT_FIELD_ISINTEGER);
			return false;
		} else {
			$("#error"+id).html("");
			return true;
		}
	}
	
}
function IsDate(sVal, locale_dateformat)
{
	var fmt = "";
	switch (locale_dateformat){
		case 0 :
			fmt="MDY";
		break;
		case 1 : 
			fmt="DMY";
		break;	
		default:
			fmt="YMD";
		break;				
	};
	if(!isValidDate(sVal,fmt)){ 
		return false;	
	}else{
		return true;
	}
}
	
function isValidDate(dateStr, format)
{
	if (format == null) 
		format = "MDY"; 
	format = format.toUpperCase();
	if (format.length != 3)  
		format = "MDY"; 
	if ((format.indexOf("M") == -1) || (format.indexOf("D") == -1) || (format.indexOf("Y") == -1) ) 
		format = "MDY"; 
	if (format.substring(0, 1) == "Y") 
	{ // If the year is first
		var reg1 = /^\d{2}(\-|\/|\.)\d{1,2}\1\d{1,2}$/;
		var reg2 = /^\d{4}(\-|\/|\.)\d{1,2}\1\d{1,2}$/;
	} 
	// If the year is second
	else if (format.substring(1, 2) == "Y"){ 
		var reg1 = /^\d{1,2}(\-|\/|\.)\d{2}\1\d{1,2}$/;
		var reg2 = /^\d{1,2}(\-|\/|\.)\d{4}\1\d{1,2}$/;
	// The year must be third
	}else{ 
			var reg1 = /^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{2}$/;
			var reg2 = /^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$/;
		}
	// If it doesn't conform to the right format (with either a 2 digit year or 4 digit year), fail
	if ((reg1.test(dateStr) == false) && (reg2.test(dateStr) == false)) 
		return false; 
	var parts = dateStr.split(RegExp.$1); // Split into 3 parts based on what the divider was
	// Check to see if the 3 parts end up making a valid date
	if (format.substring(0, 1) == "M") 
		var mm = parts[0];  
	else if (format.substring(1, 2) == "M") 
		var mm = parts[1];  
	else	
		var mm = parts[2]; 
	if (format.substring(0, 1) == "D") 
		var dd = parts[0];  
	else if (format.substring(1, 2) == "D") 
		var dd = parts[1]; 
	else	
		var dd = parts[2]; 
	if (format.substring(0, 1) == "Y") 
		var yy = parts[0];  
	else if (format.substring(1, 2) == "Y") 
		var yy = parts[1];  
	else 
		var yy = parts[2]; 
	if (parseFloat(yy) <= 50) 
		yy = (parseFloat(yy) + 2000).toString();
	if (parseFloat(yy) <= 99) 
		yy = (parseFloat(yy) + 1900).toString(); 
	var dt = new Date(parseFloat(yy), parseFloat(mm)-1, parseFloat(dd), 0, 0, 0, 0);
	if (parseFloat(dd) != dt.getDate()) 
		return false; 
	if (parseFloat(mm)-1 != dt.getMonth()) 
		return false; 
   return true;
}

/*function assignHandlers(pageObj, pageid)
{
	ctrlType = Runner.getControl(pageid, 'type');
	ctrlType.on('change', function(e){
		var type=this.getValue();
		loadImage('');
		showHideQuestionOptions(pageObj, type);
	});
	$(ctrlType.optionsDOM).each(function(){
		$(this).bind('mousemove', function(e){
			loadImage(e.target.value);
		});
		//console.log('123');
		$(this).bind('mouseover', function(e){
		//	console.log('over');
			loadImage(e.target.value);
		});
		$(this).bind('mouseout', function(e){
		//	console.log('out');
			loadImage(e.target.value);
		});
	});
}

function loadImage(type){
	//console.log('load ',type);
	if (type!=''){
		$("#imgType").attr("src","./images/survey/survey_" + type + ".png"); 
		$("#divImgType").css('display','block');	
	}
	else {
		$("#divImgType").css('display','none');
	}
}*/
function assignHandlers(pageObj, pageid)
{
	ctrlType = Runner.getControl(pageid, 'type');
	ctrlType.on('change', function(e){
		var type=this.getValue();
		//loadImage(type);
		showHideQuestionOptions(pageObj, type);
	});
}

function loadImage(type){
	if (type!=''){
		$("#imgType").attr("src","./images/survey/survey_" + type + ".png"); 
		$("#imgType").css('display','block');	
	}
	else {
		$("#imgType").css('display','none');
	}
}

function showHideQuestionOptions(pageObj, type)
{
	
	// text, number and file upload have additional options
	var tabs = pageObj.getTabs();
	if (type!='T' && type!='N' && type!='U' )
	{
		tabs.activate(0);
		if (tabs.bodyElement(1).length!=0) 	
		{
			window.tabSettings = true;
			tabs.hide(1);
		}
	}
	else if (tabs.bodyElement(1).length==1 && window.tabSettings)
	{
		tabs.show(1);
	}

	// file upload?
	if (type!='N') {
		pageObj.hideField('int_only');
	}
	else {
		pageObj.showField('int_only');
	}

	if (type!='T' && type!='N') {
		pageObj.hideField('max_length');
	}
	else {
		pageObj.showField('max_length');
	}

	if (type!='U') {
		pageObj.hideField('file_extensions');
		pageObj.hideField('max_num_of_files');
		pageObj.hideField('max_file_size');
	}
	else {
		pageObj.showField('file_extensions');
		pageObj.showField('max_num_of_files');
		pageObj.showField('max_file_size');
	}
	
	if (type!='E') {
		pageObj.hideField('format_date');
	}
	else {
		pageObj.showField('format_date');
		$("select[id^='value_format_date']").find(':first').text("Default - mm/dd/yy");
	}
	
	if (type == 'D' || type == 'M' || type == 'P' || type == 'R'){
		pageObj.showField('other');
	}
	else {
		pageObj.hideField('other');
	}

}


function showhideothercheck(name){
	var id= '#'+name+'othertext';
	
	if ($(id).prop('checked')){
		$('#'+name+'other').css('display',''); 
		$('#'+name+'other').focus();
	}
	else {
		$('#'+name+'other').css('display','none');
		$('#'+name+'other').val('');
	}
}

function showhideother(name, value)
	{
		var id= '#'+name+'other';
		if (value == "-other-")
		{
			$(id).css('display','');
			$(id).focus();
		}
		else
		{
			$(id).css('display','none');
			$(id).val('');

		}
	}

function initToolTips()
{

	if (!$('#shiny_box').length){
		var div = document.createElement('DIV');
		$(div).css('display', 'none').attr('id', 'shiny_box').addClass('shiny_box').addClass('_hintBox').appendTo(document.body);
		$(document.createElement('DIV')).addClass('shiny_box_body').appendTo(div);
	}

	$(".titleHintBox").each(function(){
		$(this).inputHintBox({div:$('#shiny_box'), 
			div_sub:'.shiny_box_body', 
			html:$(this).attr('tooltip'), 
			incrementLeft:25, 
			incrementTop: $(this).get(0).tagName.toUpperCase()=='TABLE' ? 40 : 0 });
	});
	  
}

function validRegExp(sVal, regExpParams)
{
	var re = new RegExp(regExpParams);
	// test against regExp
	if(sVal.length != 0 && (!re.test(sVal) || re.exec(sVal)[0] != sVal)){
		// return error text
		return false;
	}else{
		return true;
	}
}

function showHideFullQuest(id){
	if ($("#fullquest"+id).hasClass("hidefull")){
		$("#fullquest"+id).removeClass("hidefull").addClass("showfull");
	}
	else {
		$("#fullquest"+id).addClass("hidefull").removeClass("showfull");
	}
}

function Save_for_later(uid,link){


	var url = window.location.href;
	p = url.indexOf("?");
	if(p>-1)
		url = url.substr(0,p);
	url = url+link;		
	if(uid!='Guest' && uid!="")
		url+="&userid="+uid;
	var html = "<div style='text-align:center;padding:7px' id='urlmess'>"+url+"</div>";
	html+= "<div style='text-align:center;padding:7px'>"+Runner.getCustomLabel("email")+":&nbsp;<input type='text' id='email' value='' size=40></div>";
	html+= "<div id='emailerror' style='text-align:center;padding:7px;font-size:11px;color:red;'></div>";


	var win = Runner.displayPopup( {
		html: html,
		width: 550,
 		height: 250,
		header: Runner.getCustomLabel("send_email"),
		footer: "<input type='button' id='psend' class='btn btn-primary' value='Send'>&nbsp;&nbsp;<input id='pclose' type='button' class='btn btn-default' value='Close'>",
		afterCreate: function(win){
			$("#pclose").bind("click", function(){
				win.destroy();
				return false;
			});
			$("#psend").bind("click", function(){
				sendEmail($("#email").val(),url, win);
				return false;
			})
		}
	});

	
}

function sendEmail(cemail, purl, win){
	if(cemail){
		$.get("response_add.php", {
			act:"email",
			email:cemail,
			url:purl
		})
		.done(function(txt){
			if(txt)
				$("#emailerror").html(txt);
			else
				win.destroy();
		});
	}
	return;
}

function initScenarios(p_hash){
	
	$('*[id^=question]').change(function(){
		resQid = [];
		qid = makeID(this);
		$('*[id^=question]').each(function(){
			if($(this).css('display')!='none'){
				ind = makeID(this);
				resQid[ind]=typeQid(this,ind);
			}
		});
		ajax_response(qid,resQid);
	});
	$('input[id$=hidden]').change(function(){
		resQid = [];
		qid = makeID(this);
		$('input[id$=hidden]').each(function(){
			if($(this).css('display')=='none'){
				ind = makeID(this);
				resQid[ind]=typeQid(this,ind);
			}
		});
		ajax_response(qid,resQid);
	});


	var makeID = function(obj){
		id = $(obj).attr('id').replace('question','');
		id = id.replace('hidden','');
		id = id.replace('othertext','');
		id = id.replace('other','');
		if($(obj).attr('type')=='radio'){
			id = $(obj).attr('name').replace('question','');
		}	
		if(id.indexOf("_")>-1){
			var p = id.indexOf("_");
			id = id.substr(0,p);
		}
		return id;
	};


	var typeQid = function(obj,id){
		if($(obj).attr('fieldtype')=='D')
			res = $('#question'+id+' option:selected').text();
		else if($(obj).attr('fieldtype')=='X')
			res = $(obj).prop('checked');
		else if($(obj).attr('type')=='radio'){
			idch = $('input[id^=question'+id+'_]:checked').attr('id');
			if(idch==undefined)
				res = $('#question'+id+'other').val();
			else
				res = $('label[for='+idch+']').text();
		}
		else
			res = $(obj).val();
		return res;
	}

	var ajax_response = function(id,res){
		$.post('response_add.php',{
		act:'scenario',
		qid:id,
		hash:p_hash,
		qids: JSON.stringify(res)
		})
		.done(function(res){
			res=jQuery.parseJSON(res);
			if(res != null && res !== undefined){
				res.forEach(function(txt){
					if(txt != null){
						if(txt['qhide']){
							var elem = $('#quest_scen'+txt['qid']);
							$(elem).hide();
							$(elem).next("div").hide();
						}
						else{
							var elem = $('#quest_scen'+txt['qid']);
							$(elem).show();
							$(elem).next("div").show();
						}
					}
				});
			}
		});
	}
}

function showActivWin(type, sid, archiveName){
	var ajaxRequestUrl = "sv_surveys_list.php";
	var reqParams = {
		'act': 'activate',
		'type': type,
		'sid': sid,
		'archiveName': archiveName
	};
	$.getJSON(ajaxRequestUrl, reqParams, function(ctrlsJSON){
		if  (reqParams.type == 'activate') 
			var title = 'Activate survey ('+reqParams.sid+')';
		else
			var title = 'Deactivate survey ('+reqParams.sid+')'; 
		if (reqParams.type == 'activate') {
			var height = 560;
			title_button = "Activate";
			var href = 'sv_surveys_list.php?a=activate&sid=' +reqParams.sid+'&archivename='+ reqParams.archiveName;
		}
		else {
			var height = 450;
			title_button = "Deactivate";
			$(".archivename").html('<b>'+reqParams.archiveName+'</b>');
			var href = 'sv_surveys_list.php?a=deactivate&sid=' +reqParams.sid+'&archivename='+ reqParams.archiveName;
		}
		
		var win = Runner.displayPopup( {
			width: 595,
			height:height,
			html: ctrlsJSON.html,
			header: '<span style="color: black;" dir="ltr">'+title+'</span>',
			footer: '<a id="activBtn" type="button" class="btn btn-primary" href="#">'+title_button+'</a>&nbsp;&nbsp;<a id="closeWin" type="button" class="btn btn-default" href="#">Cancel</a>',
			afterCreate: function(win) {
				$('#closeWin').bind("click", function(){
					win.destroy();
					return false;
				});
				

				$('#activBtn').bind("click", function(){
					$.ajax({
						url: href, 
						type: "GET",
						dataType: "json"
					});
					win.destroy();
					location.reload();
					return false;
				});
			}
		});
		return true;
	});
}
function dateFormat(sdate,format_date,id)
{
	$(".dropdown-menu").hide();
	$("#question"+id+"hidden").val(sdate);
	$.post("response_add.php",
	{
		value: sdate,
		a: "getdate",
		format_date: format_date,
		act: "ajax",
		rnd: (new Date().getTime())
	})
	.done(function(msg){
		$("#question"+id+"").val(msg);
	});
}
function sv_exportLink(qid,sid){
	var win = Runner.displayPopup( {
		width: 200,
		height:170,
		html: '<div style="width:100%; text-align:center;"><input type=radio id=exportType name=exportType value="xls" checked>Excel&nbsp;&nbsp;&nbsp;<input type=radio id=exportType name=exportType value="csv">CSV</div>',
		header: 'Export to ...',
		footer: '<a type="button" class="btn btn-primary" href="#" id=exportWin>Export</a>&nbsp;&nbsp;<a id="closeWin" type="button" class="btn btn-default" href="#">Close</a>',
		afterCreate: function(win) {
			$('#closeWin').bind("click", function(){
				win.destroy();
			});
			$('#exportWin').bind("click", function(){
				location.href="exportQuestions.php?sid="+sid+"&qid="+qid+"&exp="+$("#exportType:checked").val();
				return false;
			});
		}
	});
}
function exportButton(butt_typeqid,sid){
	window.location.href="exportQuestions.php?sid="+sid+"&qid="+qid+"&exp="+butt_type;
}

function showReorder(type, sid)
{

	$(".rnr-dpreviewrow").remove();

	$.post("sv_questions_list.php", {
		type: type,
		sid: sid,
		a: "reorder"
	})
	.done(function(ctrlsJSON){
		var title = '';
		if  (type == 'group') 
			title = 'Re-order Groups';
		else
			title = 'Re-order Questions'; 
		ctrlsJSON = JSON.parse(ctrlsJSON);
		window.popup = Runner.displayPopup({
			
			width: 500,
			height: 300,
			header: '<span style="color: black;" dir="ltr">'+title+'</span>',
			footer: '<a id="bSave" class="btn btn-primary" type=button href="#">Save</a>&nbsp;&nbsp;<a class="btn btn-default" href=# onclick="window.popup.destroy()" type=button href="#">Close</a>',
			html: ctrlsJSON.html,
			afterCreate: function(win) {
				$('#closeWin').bind("click", function(){
					location.reload(); 
					return false;
				});

				Runner.util.ScriptLoader.onFilesLoaded( function(){$( '#sortable' ).sortable({
						revert: true
					});
					$( 'ul, li').disableSelection();}, this);
				Runner.util.ScriptLoader.load();

				$('#bSave').bind("click", function(){
					attr="";
					$("li.ui-state-default").each(function(){
						attr=attr+$(this).attr("id")+",";
					});
					locat =  location.href+"&type="+type+"&attr="+attr;
					locat = locat.replace("#","");
					window.location = locat;
					return false;
				});
			}
		}); 
	});
}


function showEditGroup(grId) 
{
	window.popup = Runner.displayPopup({
		width: 600,
		height: 400,
		header: '<span style="color: black;" dir="ltr">Edit Group</span>',
		url: 'sv_groups_edit.php?editid1='+grId,
		title: 'Edit Group',
		footer: "<a type=button class='btn btn-primary' id=bSave>Save</a>&nbsp;&nbsp;&nbsp;<a type=button class='btn btn-default' onclick='window.popup.destroy();return false;'>Close</a>",
		afterCreate: function(win) {
			$("#bSave").bind("click",function(){
				$("#popupIframe1").get(0).contentWindow.$( "#saveButton1" ).trigger("click");
			});
		}
	});
}
