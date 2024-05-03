var url = location.href;
$("body").click(function(e){
	$("#select_users_menu").remove();
	var cl = e.target.getAttribute("class");
	if(cl == null || cl.indexOf("bi-") == -1 && cl.indexOf("_grchat_") == -1){
		$("[class^=group_actions_]").hide();
		$("[class^=caret_up_grchat]").show();
		$("[class^=caret_down_grchat]").hide();
	}
	if(cl!="div_search_suggest" && cl!="suggest_result"){
		$(".div_search_suggest").hide();
	}
});
$( document ).ready(function(){
	if(startChatInterval(url)){
		$.post(Runner.pages.getUrl("chat_history","add"),{
			a: "getsettings"
		})
		.done(function(res){
			var out = JSON.parse(res);
			if(out["period"])
				window.timerId = setInterval(chatinfo, out["period"]);
		});
	}
});

function startChatInterval(url){
		if(window.timerId == undefined && url.indexOf("login")==-1 && ($("#chat_notification").length>0 || url.indexOf("chat_history")!=-1))
			return true;
		else
			return false;
}

function chatinfo(isStart = "false"){
	var userid=0;
	if(isStart=="true")
		$("#chat_messages").html("");
	var search = $("#search_input").val();
	var anchor = $("#save_anchor").val();
	var searchanchor = $("#searchanchor").val();
	if(window.isType)
		userid = $(".td_users_selected").attr("userid");
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "getchatinfo",
		isType: userid,
		search: search,
		anchor: anchor,
		searchanchor: searchanchor,
		isStart: isStart,
		url: location.href
	})
	.done(function(res){
		txt = JSON.parse(res);
		$("#searchanchor").val("");
		var lastAnchor = $(".message_block:last").attr("anchor");
		if(txt["noti"]=='setNotification'){
			$("#chat_notification").show();
			$("#noticnt").html(txt["noticnt"]);
		}
		showIsRead(txt);
		deleteMessage(txt["delete"]);
		editMessage(txt["edit"]);
		if(txt["typing"]){
			if($(".typinginput").length==0)
				$("<div id='searching-ellipsis' class='typinginput'>"+txt["typing"]+" "+Runner.getCustomLabel("typing_id")+"<span>.</span><span>.</span><span>.</span></div>").insertAfter($("#write_text"));
			else
				$(".typinginput").html(txt["typing"]+" "+Runner.getCustomLabel("typing_id")+"<span>.</span><span>.</span><span>.</span>");
		}
		else
			$(".typinginput").remove();

		la = insertMessages(txt,isStart);
		if(la)
			lastAnchor = la;
		if(txt["usermenu"])
			showMenu(txt["usermenu"]);
		if(txt["groupmenu"])
			showGroupMenu(txt["groupmenu"]);
		
	//$("#chat_usermenu").html(txt["usermenu"]);
	
		$("td[userid]").removeClass("td_users_selected");
		$("[userid='"+txt["targetid"]+"']").addClass("td_users_selected");
		if(txt["search_result"]){
			$("[data-itemid='current_username']").hide();
			$("[data-itemid='search_result']").show();
			$("#search_result").html(txt["search_result"]);
			$("#search_result").show();
		}
		else{
			$("[data-itemid='current_username']").show();
			$("[data-itemid='search_result']").hide();
			$("#search_result").hide();
		}
		
		$.each(txt["currentUserNameStatus"], function(i,val){
			key = Object.keys(val)[0];
			$("#headerstatus"+key).removeClass("online").removeClass("offline_header").addClass(val[key]);
		});
		setUserMenuActions();
		setActions();
		if(lastAnchor != $(".message_block:last").attr("anchor"))
			scrollBottom();


		initVideoButton(txt["isVideo"]);
		if(txt["isVideoCall"] == 1)
			answerVideo(txt["video"]);
		if(txt["isVideoCall"] == 2)
			cancelVideoPopup(txt["video"]);
		if(txt["isVideoCall"] == 3)
			createVideoPopup();
	});
}

function setActions(){
	$(".message_block:not(.message_block_search)").each(function(){
		$(this).bind("mouseover", function(){
			$(".message_block").css("background-color","#f2f2f2");
			$(this).css("background-color","#ececec");
			if($(this).hasClass("addpoint")){
				var id = $(this).attr("anchor");
				var el = $(this).find(".action_point");
				var pos = $(el).position();
				var l = (parseInt(pos.left)-270)+"px";
				var t = (parseInt(pos.top)-40)+"px"
				$(".actions").css("left", l);
				$(".actions").css("top", t);
				$(".actions").css("display","block");
				$("#act_delete").unbind().bind("click",function(){
					var mess = "<div>"+Runner.getCustomLabel("delete_message_undone")+"</div>";
					var txt = $("[anchor="+id+"]");
					//txt = $(txt).find(".message_author:not(:first-child)").remove();
					mess+="<div class='delete_message'>"+txt.html()+"</div>";
					var popup = Runner.displayPopup( {
						html: mess,
						header: "<span style='font-size: large;'><b>Delete message</b></span>",
						footer: '<button class="btn btn-default" onclick=\'$(".close").click();return false;\'>'+Runner.getCustomLabel("cancel")+'</button>&nbsp<button class="btn delButton" onclick="delPopupMessage('+id+');">'+Runner.getCustomLabel("delete")+'</button>',
					});
				});
				$("#act_edit").unbind().bind("click",function(){
					$.post(Runner.pages.getUrl("chat_history","add"), {
						a: "getMessById",
						id: id
					})
					.done(function(res){
						$("[anchor="+id+"]").hide();
						ctrl = "<div id='editMessPopup'><div><textarea rows=2 class='form-control' id='edit_text'>"+res+"</textarea></div>";
						ctrl+= "<div id='edit_button'><button class='btn btn-default' onclick=\"$('#editMessPopup').remove();$('[anchor="+id+"]').show();return false;\">"+Runner.getCustomLabel("cancel")+"</button>&nbsp;";
						ctrl+= "<button class='btn btn-primary' onclick=\"editPopupMessage("+id+");\">"+Runner.getCustomLabel("save_change")+"</button></div></div>";
						$(ctrl).insertAfter($("[anchor="+id+"]"));
					});
					
				});
			}
			else
				$(".actions").css("display","none");
		});
	});
	$("body").bind("mouseout", function(e){
		var t = $(e.target).attr("class");
		if(t!="message_block addpoint" && t!="actions" && t!="action_row"){
			$(".message_block").css("background-color","#f2f2f2");
			$(".actions").css("display","none");
		}
	});
}
function editPopupMessage(id){
	$(".addpoint").show();
	var txt = $("#edit_text").val();
	$("#editMessPopup").remove();
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "edit_record",
		rid: id,
		text: txt
	})
	.done(function(res){
		$("[anchor="+id+"]").find(".message_author").html(txt);
		$(".actions").css("display","none");
		$(".close").click();
		return false;
	});
	return false;
}
function delPopupMessage(id,txt){
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "delete_record",
		rid: id
	})
	.done(function(res){
		$("[anchor="+id+"]").remove();
		$(".actions").css("display","none");
		$(".close").click();
		return false;
	});
	return false;
}

function setUserMenuActions(){
	$("td[userid]").each(function(){
		$(this).unbind().bind("click", function(){
			if($(this).hasClass("td_users_selected"))
				return false;
			$("#select_users_menu").remove();
			var userid = $(this).attr("userid");
			$.post(Runner.pages.getUrl("chat_history","add"),{
				a:"setActivity",
				targetid: userid
			})
			.done(function(out){
				res = JSON.parse(out);
				txt = res["headertext"];
				//location.reload();
				window.scroll = 1;
				$("#search_input").val("");
				$("#search_input_tmp").val("");
				$("td[userid]").removeClass("td_users_selected");
				$("td[userid='"+userid+"']").addClass("td_users_selected");
				$("#write_text").val("");
				chatinfo("true");
				if(!$("#searchanchor").val())
					scrollBottom();
				$("[data-itemid='current_username']").html(txt);
				setActionGroupMenu();
				setDeleteChat();
				setLeaveChat();
				setRenameChat();
				initVideoButton(res["isVideo"]);
			});
		});
	});
}

function showPictureInPopup(usrName,id){
	var popup = Runner.displayPopup( {
      html: "<img width=950px src='mfhandler.php?file="+usrName+"&table=chat_files&field=files&pageType=list&page=list&key1="+id+"'>",
		width:1000,
		height:800,
		footer: '<a type="button" class="btn btn-primary" href="#" onclick="window.popup.close();return false;">'+Runner.getCustomLabel("close_window")+'</a>',
		afterCreate: function(popup) {
			window.popup = popup;
		}
	});
}

function searchPanel(){
	search = $("#search_input_tmp").val();
	if(search){
		$("#search_input").val(search);
		$("#search_showall").show();
	}
	$("#search_button").unbind().bind("click", function(){
		window.scroll = 1;
		var txt = $("#search_input_tmp").val();
		$("#search_input").val(txt);
		if(!txt)
			return false;
		$("#search_showall").show();
		chatinfo("true");
		//scrollBottom();
	});
	$("#search_showall").unbind().bind("click", function(){
		$("#search_input").val("");
		$("#search_input_tmp").val("");
		$("#search_showall").hide();
		$("#search_result").hide();
		chatinfo("true");
		scrollBottom();
	});
	$("#search_input_tmp").keypress(function(e) {
		if(e.keyCode == '13' && $("#search_input_txt").val()!=""){
			$("#search_button").click();
			return false;
		}
	});
}

function scrollBottom(anchor = ""){
	setTimeout(function(){
		var msg = $("#chat_messages");
		if(!anchor){
			msg.scrollTop(msg.prop('scrollHeight') - msg.innerHeight());
		}
		else{
			if($('[anchor='+anchor+']').length>0){
				var anch = $('[anchor='+anchor+']').offset().top;
				msg.scrollTop(anch - 120);
			}
		}
	},500);
}

function clickAnchor(anchor, targetid){
	window.scroll = 1;
	$("#search_input").val("");
	$("#search_input_tmp").val("");
	$("#searchanchor").val(anchor);
	$("#search_showall").hide();
	$("td[userid='"+targetid+"']").click();
	//scrollBottom(anchor);
}

function show_files(obj){
	if($(obj).closest("div").next("div").css("display") == "none")
		$(obj).closest("div").next("div").show();
	else
		$(obj).closest("div").next("div").hide();
}

function select_users_popup(){
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a:"getMobileUsers"
	})
	.done(function(res){
		var el = "<ul id='select_users_menu' class='dropdown-menu'>"+res+"</ul>";
		$(el).insertAfter($("[id^=select_user_button]"));
		$("#select_users_menu").show();
		setUserMenuActions();

	});
}

function showIsRead(txt){
	var isRead = txt["isread"];
	$("[class^=not_read]").each(function(){
		id = $(this).attr("class").replace("not_read","");
		if(isRead[id] == 2)
			$(".not_read"+id).css("color","#48D1CC");
		if(isRead[id] == 3){
			$(".not_read"+id).css("color","#48D1CC");
			$(".not_read"+id).html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18"><path fill="currentColor" d="M17.394 5.035l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0l-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg>');
		}
	});
}

function insertMessages(txt,isStart){
	var cmess = "", lastAnchor = "";
	$.each(txt["msg"], function(key, val){
		if($("[anchor="+key+"]").length == 0)
			cmess+=val;
	});
	if(!cmess)
		return lastAnchor;
	if(isStart=="true"){
		$("#chat_messages").html(cmess);
		lastAnchor = $(".message_block:last").attr("anchor");
	}
	else{
		if($(".message_block").length>0)
			$(cmess).insertAfter($(".message_block:last"));
		else
			$("#chat_messages").html(cmess);
	}
	return lastAnchor;
}

function showMenu(menu){
	if(menu["menu"] == undefined){
		var isTyping = 0, usernames = "";
		$.each(menu, function(key,elem){
			if(!$("#userIsOnline_"+key).hasClass(elem["status"])){
				if(elem["status"] == "online"){
					$("#userIsOnline_"+key).removeClass("offline");
					$("#userIsOnline_"+key).addClass("online");
				}
				else{
					$("#userIsOnline_"+key).removeClass("online");
					$("#userIsOnline_"+key).addClass("offline");
				}
			}
			if(elem["typing"]!="0"){
				$(".isTyping"+key).show();
				$("#menuusername"+key).hide();
				if(usernames.length>0)
					usernames+=", ";
				usernames+= elem["username"];
				isTyping = 1;
			}
			else{
				$(".isTyping"+key).hide();
				$("#menuusername"+key).show();
			}
			if(elem["notify"] && $("[userid='"+key+"']").find(".indicator").html()!=elem["notify"])
				chatBeep();
			$("[userid='"+key+"']").find(".indicator").remove();
			if(elem["notify"])
				$("<div class='indicator'>"+elem["notify"]+"</div>").insertAfter($("#menuusername"+key));
		});
		if(isTyping){
			if($(".typinginput1").length==0){
				$("<div class='typinginput1' id='searching-ellipsis'>"+usernames+" "+Runner.getCustomLabel("typing_id")+"<span>.</span><span>.</span><span>.</span></div>").insertAfter($("#write_text"));
			}
			else{
				$(".typinginput1").html(usernames+" "+Runner.getCustomLabel("typing_id")+"<span>.</span><span>.</span><span>.</span>");
			}
		}
		else{
			$(".typinginput1").remove();
		}
	}
	else
		$("#chat_usermenu").html(menu["menu"]);
}

function showGroupMenu(menu){
	if(menu["menu"]== undefined){
		var isTyping = 0;
		var menuArr = [];
		$.each(menu, function(key,elem){
			menuArr.push(key);
			$("#menuusername"+key).html(elem["name"]);
			if(elem["typing"]!="0"){
				$(".isTyping"+key).show();
				$("#menuusername"+key).hide();
				isTyping = 1;
			}
			else{
				$(".isTyping"+key).hide();
				$("#menuusername"+key).show();
			}
			if(elem["notify"] && $("[userid='"+key+"']").find(".indicator").html()!=elem["notify"])
				chatBeep();
			$("[userid='"+key+"']").find(".indicator").remove();
			if(elem["notify"])
				$("<div class='indicator'>"+elem["notify"]+"</div>").insertAfter($("#menuusername"+key));
			
		});
		$.each($("td.td_groups"), function(k,e){
			if(!inArray($(this).attr("userid"),menuArr))
				$(this).remove();
		});

		if(isTyping){
			if($(".typinginput2").length==0)
				$("<div class='typinginput2' id='searching-ellipsis'>"+Runner.getCustomLabel("typing_id")+"<span>.</span><span>.</span><span>.</span></div>").insertAfter($("#write_text"));
			else
				$(".typinginput2").html(Runner.getCustomLabel("typing_id")+"<span>.</span><span>.</span><span>.</span>");
		}
		else{
			$(".typinginput2").remove();
		}
	}
	else
		$("#chat_groupmenu").html(menu["menu"]);
}

function deleteMessage(arr){
	$.each(arr, function(i,v){
		$("[anchor='"+v+"']").remove();
	});
}

function editMessage(arr){
	$.each(arr, function(i,v){
		$.post(Runner.pages.getUrl("chat_history","add"),{
			a: "getMessById",
			id: v
		})
		.done(function(res){
			$("[anchor='"+v+"']").find(".message_author").html(res);
		});
	});
}

function chatBeep(){
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a:"getsound"
	})
	.done(function(soundpath){
		if(soundpath){
			var sound = new Howl({
				src: ["sound/"+soundpath],
				volume: 1
			});
			 sound.play();
		}
	});
}

function Add_Channel(){
	var popup = Runner.displayPopup( {
		url: Runner.pages.getUrl("chat_groups","add"),
		width: 400,
		height: 430,
		header: '<h2>Add Group Chat</h2>'
	});
}

function setDeleteChat(){
	$("#delete_chat").unbind().bind("click", function(){
		var popup = Runner.displayPopup( {
      html: "Do you really want to delete this chat?",
      header: '<h2>Delete chat</h2>',
		width: 400,
		height: 170,
		afterCreate: function(popup) {
			window.win = popup;
		},
		footer: '<a type="button" class="btn btn-primary" href="javascript:void(0);" onclick="popupActionChat(\'delete_chat\');window.win.close();return false;">'+Runner.getCustomLabel("yes")+'</a>&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default" href="javascript:void(0);" onclick="window.win.close();return false;">'+Runner.getCustomLabel("no")+'</a>',
		});
	});
}
function setLeaveChat(){
	$("#leave_chat").unbind().bind("click", function(){
		var popup = Runner.displayPopup( {
      html: "Do you really want to leave this chat?",
      header: '<h2>Leave chat</h2>',
		width: 400,
		height: 170,
		afterCreate: function(popup) {
			window.win = popup;
		},
		footer: '<a type="button" class="btn btn-primary" href="javascript:void(0);" onclick="popupActionChat(\'leave_chat\');window.win.close();return false;">'+Runner.getCustomLabel("yes")+'</a>&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default" href="javascript:void(0);" onclick="window.win.close();return false;">'+Runner.getCustomLabel("no")+'</a>',
		});
	});
}
function setRenameChat(){
	$("#rename_chat").unbind().bind("click", function(){
		var id = $("td.td_users_selected").attr("userid").replace("G","");
		var popup = Runner.displayPopup( {
			url: Runner.pages.getUrl("chat_groups","edit")+"?editid1="+id,
			header: '<h2>Manage chat</h2>',
			width: 450,
			height: 470,
			afterCreate: function(popup) {
				window.win = popup;
			},
			footer: '<a type="button" class="btn btn-primary" href="javascript:void(0);" onclick="saveGroupChat();">'+Runner.getCustomLabel("save")+'</a>&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default" href="javascript:void(0);" onclick="window.win.close();return false;">'+Runner.getCustomLabel("close")+'</a>',
		});
	});
}
function popupActionChat(param){
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a:param
	})
	.done(function(res){
		var href = location.href;
		var p = href.indexOf("?");
		if(p !=- 1)
			href = href.substr(0,p);
		location.href = href;
	});
}

function setGroupActionsPopup(el, param){
	var cl = ".group_actions_"+$(el).attr("owner");
	var pos = $(el).closest("td").position();
	
	if(!$(el).closest("td").attr("class"))
		$(cl).css("margin-top","15px");
	var l = (parseInt(pos.left)+10)+"px";
	var t = (parseInt(pos.top)+30)+"px"
	$(cl).css("left", l);
	$(cl).css("top", t);
	$(cl).css("display","block");
	if(param)
		$(cl).show();
	else
		$(cl).hide();
}
function initGroupPopup(){
	$("[class^=caret_up_grchat]").show();
	$("[class^=caret_down_grchat]").hide();
	$(".group_actions_admin").hide();
	$(".group_actions_user").hide();
}
function saveGroupChat(){
	$("#popupIframe1").contents().find("[id^=saveButton]")[0].click();
}
function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return true;
    }
    return false;
}
function setActionGroupMenu(){
	$(".header_groupname_edit").click(function(){
		var id = $(this).attr("rid");
		initGroupPopup();
		setGroupActionsPopup(this,true);
	});
}

const recordAudio = () =>
  new Promise(async resolve => {
	 const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
	 const mediaRecorder = new MediaRecorder(stream);
	 const audioChunks = [];

	 mediaRecorder.addEventListener("dataavailable", event => {
		audioChunks.push(event.data);
	 });

	 const start = () => mediaRecorder.start();

	 const stop = () =>
		new Promise(resolve => {
		  mediaRecorder.addEventListener("stop", () => {
			 const audioBlob = new Blob(audioChunks, { type: "audio/mpeg" });
			 const audioUrl = URL.createObjectURL(audioBlob);
			 const audio = new Audio(audioUrl);
			 const play = () => audio.play();
			 resolve({ audioBlob, audioUrl, play });
		  });

		  mediaRecorder.stop();
		});

	 resolve({ start, stop });
  });

const sleep = time => new Promise(resolve => setTimeout(resolve, time));

const startRecording = async () => {
	window.recorder = await recordAudio();
	window.recorder.start();

	var popup = Runner.displayPopup( {
		html: Runner.getCustomLabel("stop_audio")+"<br><br><div><img width='80px' src='images/call_sound.gif'></div><a type='button' style='font-size:22px;' class='btn btn-default' href='javascript:void(0);' onclick='window.popup.close();$(\"[id^=stopAudio_]\").click();return false;'><span class='fa fa-microphone-slash'></span></a>",
		width: "170px",
		height: "230px",
		afterCreate: function(popup) {
			window.popup = popup;
			$(".modal-header").hide();
			$(".modal-body").css("text-align","center").css("height","230px");
			$(".modal-footer").hide();
			$(".modal-content").css("height","230px");
	}
	});
};

const stopRecording = async () => {
	const audio = await window.recorder.stop();
	var txt = await audio.audioBlob.arrayBuffer();
	var aid = 0;
	$("[id^=audiorec_]").each(function(){
		aid = $(this).attr("id").replace("audiorec_","");
	});
	aid++;
	var isFirefox = typeof InstallTrigger !== 'undefined';
	if(isFirefox)
		var cssf = "audio_firefox";
	else
		var cssf = "audio_not_firefox";
	var record = "<tr class='template-download fade in'><td colspan=4><audio id='audiorec_"+aid+"' class='audiorec_"+aid+" "+cssf+"' controls='controls' autobuffer='autobuffer'><source src='data:audio/mpeg;base64,"+arrayBufferToBase64(txt)+"' /></audio><span class='audioclose'>X</span></td></tr>";
	var html = $("tbody.files").html();
	html+= record;
	$("tbody.files").html(html);
	
	var html = $("#audio_record").html();
	html+= record;
	$("#audio_record").html(html);

	setChatHeight();

	$(".audioclose").each(function(){
		$(this).unbind().bind("click", function(){
			id = $(this).prev("audio").attr("id");
			$("."+id).closest("tr").remove();
		});
	});
	/*$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "sound",
		blob: arrayBufferToBase64(txt)
	 });*/
};

function arrayBufferToBase64( buffer ) {
    var binary = '';
    var bytes = new Uint8Array( buffer );
    var len = bytes.byteLength;
    for (var i = 0; i < len; i++) {
        binary += String.fromCharCode( bytes[ i ] );
    }
    return window.btoa( binary );
}

function initVideoButton(video_enable){
	var uid = $(".td_users_selected").attr("userid");
	if(uid){
		if(uid.substr(0,1)=="G" || video_enable == '0')
			$("[data-itemid='call_video']").hide();
		else
			$("[data-itemid='call_video']").show();
	}
}


function answerVideo(data){
	var current_user = data["name"];
	var current_icon = data["avatar"];
	sound = new Howl({
		src: ["callVideo.mp3"],
		volume: 1
	});
	sound.play();
	videosound = setInterval(function(){sound.play();},4000);

	var popup = Runner.displayPopup( {
		width: "200px",
		height: "310px",
		html: "<div class='video_popup_img'><img src='"+current_icon+"'></div><div class='video_popup_body'><b>"+current_user+"</b></div><div style='text-align:center'>"+Runner.getCustomLabel("calling_you")+"</div>",
		footer: '<div style="text-align:center"><a href="#" class="btn btn-success b_phone" onclick="answerVideoChat(\''+data["msg"]+'\');return false;"><span class="glyphicon glyphicon-earphone"></span></a><a href="#" class="btn btn-danger b_phone" onclick="cancelVideoChat();return false;"><span class="glyphicon glyphicon-remove"></span></a></div>',
		afterCreate: function(popup) {
			window.popup = popup;
			$(".modal-header").hide();
			$(".modal-content").css("height", "270px");
			$(".modal-body").css("padding-bottom", "0px");
		},
		beforeClose: function(){
			sound.stop();
			clearInterval( videosound );
		}
	});
}

function cancelVideoPopup(data){
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "deleteVideoChat"
	});
	if(window.popup)
		setTimeout(function(){window.popup.close();}, 1000);
}

function cancelVideoChat(){
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "closeVideoChat"
	});
	if(window.popup)
		setTimeout(function(){window.popup.close();}, 1000);
}

function answerVideoChat(link){
	if(window.popup)
		setTimeout(function(){window.popup.close();}, 1000);
	window.open(link,target='_blank');
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "answerCallChat"
	});
}

function createVideoPopup(){
	var link = $("#create_video_chat").val();
	if(window.popup)
		setTimeout(function(){window.popup.close();}, 1000);
	window.open(link,target='_blank');
	$.post(Runner.pages.getUrl("chat_history","add"),{
		a: "closeCallPopup"
	});
}

function setDropZone(){
	var pos = $("#chat_messages").position();
	var aleft = pos["left"];
	var atop = pos["top"];
	var pos = $("[data-itemid='chat_send']").position();
	var k = 0;
	if($(window).width()<770)
		k = 25;
	var aheight = pos["top"] - atop + k;
	var awidth = $(window).width() - aleft;
	$(".rnr-dragndrop-area").css("left",aleft);
	$(".rnr-dragndrop-area").css("top",atop);
	$(".rnr-dragndrop-area").css("width",awidth+"px");
	$(".rnr-dragndrop-area").css("height",aheight+"px");
	$(".rnr-dragndrop-area").css("padding-top",aheight/2+"px");
	$(".rnr-dragndrop-area").html("Drop files here to upload");
	$(".rnr-dragndrop-area").css("text-align","center");
}

function setChatHeight(){
	var h = window.chatMessageHeight - $(".mupload-files").height();
	$("#chat_messages").css("height",h+"px");
}