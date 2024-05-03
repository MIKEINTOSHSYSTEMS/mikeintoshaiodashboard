	

Runner.pages.PageSettings.addPageEvent('chat_history', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	window.isType = 0;
window.typeID = 0;
window.targetID = proxy["targetid"];
window.scroll = 0;
/*if(proxy["user_select"])
	$("[userid='"+proxy["user_select"]+"']").addClass("td_users_selected");*/
setUserMenuActions();
searchPanel();
chatinfo("true");
scrollBottom();


pageObj.baseParams["editType"] = Runner.pages.constants.ADD_POPUP;
pageObj.form = new Runner.form.BasicForm({
			submitUrl: pageObj.submitUrl,	
			standardSubmit: false,
			isFileUpload: true,
			method: 'POST',
			id: pageObj.pageId,
			baseParams: pageObj.baseParams,
			fieldControls: pageObj.getFormControls(),
			useMultipart: true,
			submitFailed: {
				fn: function( response, formObj, fieldControls ) {
					var ctrl = Runner.getControl(pageid,'tmp_file'); 
					ctrl.reset();
					return false;
					if ( response === -1 ) { //#4511 ? 
						formObj.clearForm();
						pageObj.showError("<< " + Runner.lang.constants.TEXT_INLINE_ERROR + " >>");
					} else {
						Runner.displayGenericAjaxError( response );
					}

					pageObj.fireEvent("afterSave", {success: false, html: response}, formObj, fieldControls, pageObj);
					
					pageObj.enablePageButtonsAfterSaving();
				},
				scope: pageObj
			},
			beforeSubmit: {
				fn: function( formObj ) {
					pageObj.baseParams["msg"] = $("#write_text").val();
					return pageObj.fireEvent("beforeSave", formObj, formObj.fieldControls, pageObj);
				},
				scope: pageObj
			}

});

pageObj.form.on( 'successSubmit', function( respObj, basicForm, fieldControls ) {
	var ctrl = Runner.getControl(pageid,'tmp_file'); 
	ctrl.reset();
	chatinfo();
});

$("body").bind("dragenter", function(e){
	if(e.target.className == "rnr-dragndrop-area" || e.target.className == "rnr-dragtext"){
		$(".rnr-dragtext").html(Runner.getCustomLabel("drop_here"));
		$(".rnr-dragndrop-area").css("background-color","white");
	}
	else{
		$(".rnr-dragtext").html(Runner.getCustomLabel("drag_here"));
		$(".rnr-dragndrop-area").css("background-color","#f8f8f8");
	}
});

$("#write_text").keypress(function(e) {
	window.isType = 1;
    if(e.keyCode == '13' && !e.shiftKey) {
		window.isType = 0;
      $("[id^=Send_]").click();
		$(this).val("");
		return false;
    }
	clearTimeout(window.typeID);
	window.typeID = setTimeout(function(){window.isType=0;},2000);
});

$("#write_text").on("paste", function(e){
	ctrl = Runner.getControl(pageid,'tmp_file');
	ctrl.uploadForm.trigger(e);
});

$("#chat_messages").scroll(function(){
	if(window.scroll == 1){
		window.scroll = 0;
	}
	else{
		$("#save_anchor").val("");
		if($(this).scrollTop()==0 && $("#search_input").val()==""){
			var obj = this;
			$.post(Runner.pages.getUrl("chat_history","add"),{
				a:"scrollmessages"
			})
			.done(function(res){
				var anchor = $(".message_block:first").attr("anchor");
				$("#save_anchor").val(anchor);
				chatinfo("true");
				scrollBottom(anchor);
			});
		}
	}
});

$("#findusersearch").bind("click", function(){
	if($("#finduserinput").val()){
		$.post(Runner.pages.getUrl("chat_history","add"), {
			a: "searchuser",
			text: $("#finduserinput").val()
		})
		.done(function(res){
			$("#finduserclear").show();
			//$("#finduserinput").css("width","160px");
			$("#finduserresults").html(res);
			$(".findusers").unbind().bind("click", function(){
				location.href=Runner.pages.getUrl('chat_history','add')+'?userid='+$(this).attr("uid");
				return false;
			})
		});
	}
});

$("#finduserinput").keyup(function(e) {
	if(e.keyCode == '13' && $("#search_input_txt").val()!=""){
		$("#findusersearch").click();
		return false;
	}
	else{
		var pos = $("#finduserinput").closest("div").position();
		var l = (parseInt(pos.left)+0)+"px";
		var t = (parseInt(pos.top)+39)+"px"
		$(".div_search_suggest").css("left", l);
		$(".div_search_suggest").css("top", t);
		$.post(Runner.pages.getUrl("chat_history","add"), {
			a: "suggest",
			text: $("#finduserinput").val()
		})
		.done(function(res){
			if(res){
				$(".div_search_suggest").html(res);
				$(".div_search_suggest").show();
				$(".suggest_result").each(function(){
					var obj = this;
					$(this).bind("click", function(){
						var uid = $(this).attr("uid").replace("user","");
						location.href=Runner.pages.getUrl('chat_history','add')+'?userid='+uid;
					});
				});
			}
			else{
				$(".div_search_suggest").html("");
				$(".div_search_suggest").hide();
			}
		});
	}
});

setTimeout( function(){
	$("#finduserclear").click(function(){
		$("#finduserinput").css("width","100%");
		$("#finduserclear").hide();
		$("#finduserresults").html("");
		$("#finduserinput").val("");
	});

	$(".caret_up_mess").click(function(){
		$(".caret_up_mess").hide();
		$(".caret_down_mess").show();
		$("#chat_usermenu").hide();
		sessionStorage.setItem('usermenu', 'hide');
	});
	$(".caret_down_mess").click(function(){
		$(".caret_up_mess").show();
		$(".caret_down_mess").hide();
		$("#chat_usermenu").show();
		sessionStorage.setItem('usermenu', 'show');
	});
	$(".caret_up_group").click(function(){
		$(".caret_up_group").hide();
		$(".caret_down_group").show();
		$("#chat_groupmenu").hide();
		sessionStorage.setItem('groupmenu', 'hide');
	});
	$(".caret_down_group").click(function(){
		$(".caret_up_group").show();
		$(".caret_down_group").hide();
		$("#chat_groupmenu").show();
		sessionStorage.setItem('groupmenu', 'show');
	});

	$("[class^=caret_up_grchat]").click(function(){
		initGroupPopup();
		var id = $(this).attr("rid");
		$(".caret_up_grchat_"+id).hide();
		$(".caret_down_grchat_"+id).show();
		setGroupActionsPopup(this,true);
		//$("#chat_groupmenu").hide();
		//sessionStorage.setItem('groupmenu', 'hide');
	});
	$("[class^=caret_down_grchat]").click(function(){
		initGroupPopup();
		var id = $(this).attr("rid");
		$(".caret_up_grchat_"+id).show();
		$(".caret_down_grchat_"+id).hide();
		setGroupActionsPopup(this,false);
		//$("#chat_groupmenu").show();
		//sessionStorage.setItem('groupmenu', 'show');
	});

	$("[class^=caret_up_grchat]").show();
	$("[class^=caret_down_grchat]").hide();

	if(sessionStorage.getItem('usermenu')!= "hide"){
		$(".caret_up_mess").show();
		$(".caret_down_mess").hide();
		$("#chat_usermenu").show();
	}
	else{
		$(".caret_up_mess").hide();
		$(".caret_down_mess").show();
		$("#chat_usermenu").hide()
	}
	if(sessionStorage.getItem('groupmenu')!= "hide"){
		$(".caret_up_group").show();
		$(".caret_down_group").hide();
		$("#chat_usermenu").show();
	}
	else{
		$(".caret_up_group").hide();
		$(".caret_down_group").show();
		$("#chat_groupmenu").hide()
	}
	setActionGroupMenu();
	setDeleteChat();
	setLeaveChat();
	setRenameChat();
}, 500);

if($("[data-itemid='expand_button']").is(":visible")){
	var w = $(".currUserNameDiv").width();
	$(".currUserNameDiv").css("width",w+180);
}
$("[data-itemid='expand_button']").find("a").bind("click", function(){
	var w = $(".currUserNameDiv").width();
	$(".currUserNameDiv").css("width",w-180);
});

$("[data-itemid='collapse_button']").find("a").bind("click", function(){
	var w = $(".currUserNameDiv").width();
	$(".currUserNameDiv").css("width",w+180);
});

$("#chat_messages").bind("dragenter", function(){
	setDropZone();
	$(".rnr-dragndrop-area").show();
});

$(".rnr-dragndrop-area").bind("dragleave", function(e){
	$(".rnr-dragndrop-area").hide();
});

$(".rnr-dragndrop-area").bind("drop", function(e){
	$(".rnr-dragndrop-area").hide();
});

window.chatMessageHeight = $("#chat_messages").height();

;
});

//	AJAX snippets

// fields events
/**
 * the context is to be edit control object
 * @param {object} pageObj
 * @param {string} pageid 	The page's or row's id
 */
Runner.pages.fieldsEvents["tmp_file_event"] = function( pageObj, pageid, row ) {
	if ( row ) {
		row = new Runner.AjaxRow( pageObj, row );
	}
	var ret, reqParams,
		ctrl = this,
		fieldsData = {},
		params = {},
		ajax = new Runner.form.Button({ id: 'tmp_file_event', btnName: 'tmp_file_event' }),
		before = function() {
			setTimeout(function(){
	$(".name").each(function(){
		if($(this).find("a")[0]!=undefined){
			var txt = $(this).find("a")[0].innerText;
			if(txt.length > 15){
				txt = txt.substr(0,12)+"...";
				$(this).find("a")[0].innerText = txt;
			}
		}
	});
	setChatHeight();
}, 500);
return false;

		},
		after = function( result ) {
			

// Smaple:
ctrl.setValue( result["upper"] );

		},
		submit = function() {
			params["table"] = "chat_history";
			params["field"] = ctrl.fieldName;
			params.page = pageObj.pageName;
			
			( Runner.controls.ControlStorage.byId( pageid ) || [] ).forEach( function( ctrl ) {
				if ( !( ctrl instanceof  Runner.controls.MultiUploadField ) && !( ctrl instanceof Runner.controls.FileControl ) ) {
					fieldsData[ ctrl.fieldName ] = ctrl.getStringValue();
				}
			});
			
			reqParams = {
				params: JSON.stringify( params ), 
				event: "tmp_file_event",
				pageType: pageObj.pageType,
				keys: JSON.stringify( pageObj.keys ? pageObj.keys : ( row && row.getKeys() ) ),
				fieldsData: JSON.stringify( fieldsData )
			};
			
			if ( pageObj.masterTable ) {
				reqParams.masterTable = pageObj.masterTable;
				reqParams = Runner.apply( reqParams, pageObj.masterKeys );
			}			
			
			$.post( Runner.getPageUrl("buttonhandler"), reqParams, function( result ) {
				var _result;
				try {
					_result = JSON.parse( result );
				} catch(e) {				
					Runner.displayGenericAjaxError( result );				
				}
				// execute EventAfter code
				after.call( ctrl, _result );				
			})
			.fail( function( jqXHR, textStatus, errorThrown ) {
				Runner.displayGenericAjaxError( jqXHR.responseText || textStatus + ' ' + errorThrown  );
			});			

			submit = function(){};
		};
	
	ajax.submitHandler = submit;
	ajax.submit = submit;
	// execute EventBefore code	
	ret = before.call( this );
	if ( ret === false ) {
		return;
	}

	submit();
};
