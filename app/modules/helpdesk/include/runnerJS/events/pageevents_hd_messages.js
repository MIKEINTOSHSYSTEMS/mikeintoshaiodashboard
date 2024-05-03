	

Runner.pages.PageSettings.addPageEvent('hd_messages', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
if( parseInt(proxy["who_is_online"]) && proxy["usertype"] === "admin" || proxy["usertype"] === "user"){
	document.addEventListener('visibilitychange', updateViewingPage);
	updateViewingPage();
	setInterval(updateViewingPage , 1000 * 15);
	function updateViewingPage() {
		var viewingPage = pageObj.masterKeys.masterkey1;
		var is_open_reply = ($(".r-grid-columns[data-record-id]").size() > 0);
		if(!document.hidden) $.get("",{viewingPage:viewingPage,is_open_reply:is_open_reply},function(response) {
			var responseInfo = JSON.parse(response);
			var users = responseInfo.veiwingTickets;
			var replingUsers = responseInfo.replingInTicket.map(function(ruser){ return ruser+" repling..."; });
			users = users.concat(replingUsers);
			if(users.length > 0){
				$(".user_online_block").show();
				$(".user_online_block .alert .users_list").html(users.join(", "));
			}
			else $(".user_online_block").hide()
	});
	}
}


$("[data-itemid='master_info']").find(".r-gridrow").eq(1).css("background-color", proxy["mastercolor"]);


$("[id^=reply_]").unbind().bind("click", function () {
    if ($("[id^=saveLink]:visible").length == 0) {
        pageObj.inlineAdd.baseParams["reply_by_message"] = true;
        pageObj.inlineAdd.baseParams["reply_id"] = $(this).attr("replyid");
        pageObj.inlineAdd.baseParams["add_note"] = "false";
        pageObj.inlineAdd.inlineAdd();
    }
});

$("[id^=resend_]").unbind().bind("click", function () {
    var resendid = $(this).attr("resendid");
    if (confirm("Are you sure you want to resend this email?")) {
        $.post("hd_messages_list.php", {
            a: "resend",
            eid: resendid
        })
            .done(function (res) {
                if (res)
                    swal(res);
                else
                    swal("Email sent");
            });
    }
});

$(".delrecord").bind("click", function () {
    var eid = $(this).attr("recid");
    if (confirm(Runner.getCustomLabel("delete_confirm"))) {
        $.post("hd_messages_list.php", {
            a: "deleterec",
            eid: eid
        })
            .done(function (res) {
                location.reload();
            });
    }
});

$("body").bind("click", function () {
    $("#popup_status").hide();
    $("#popup_priority").hide();
    $("#popup_assign").hide();
    $("#popup_folder").hide();
});

$(".subpopupmenu").each(function () {
    var id = $(this).attr("id");
    var fieldname = $(this).attr("fieldname");
    var reload_to_url = $(this).attr("reload_to_url");
    $(this).bind("click", function () {
        var ticketid = pageObj.masterKeys["masterkey1"];
        $.post( Runner.pages.getUrl("hd_tickets","list"), {
            a: "popup_actions",
            tickets: ticketid,
            fieldname: fieldname,
            id: id
        })
            .done(function (res) {
                if (reload_to_url)
                    location.href = "hd_tickets_list.php?masterkey1=" + id + "&mastertable=hd_folders";
                else
                    location.reload();
            });
    });
});

$(".close_ticket_btn").click(function() {

	$.get(Runner.pages.getUrl("hd_tickets","list"),{a:"close_ticket",ticketid:pageObj.masterKeys["masterkey1"]},function() {
			//location.reload();
	});
	return false;

});


$("[data-itemtype='custom_button'][data-hidden]").remove();
pageObj.button_items_ids = ["change_status", "change_priority", "change_assigned", "move_to_folder", "close_tickets", "add_note", "delete"];
if (proxy["usertype"] === "customer") {
    pageObj.show_buttons(true);
} else {
    pageObj.show_buttons(false);
}



pageObj.inlineAdd.on('afterSubmit', function (vals, fields, keys, rowId, newData) {
    pageObj.getItemButton('Reply').removeAttr('disabled');
});
pageObj.inlineAdd.on('cancel', function (vals, fields, keys, rowId, newData) {
    pageObj.getItemButton('Reply').removeAttr('disabled');
});


pageObj.inlineAdd.on('beforeSubmit', function (row, pageObj, formObj) {
    var status_id = $("[data-record-id='" + row.id + "'] .status_select").val();
    //if status shanged manually
    if (status_id != proxy["master_statusid"]) {
        formObj.baseParams["master_statusid"] = $("[data-record-id='" + row.id + "'] .status_select").val();
    }
});


pageObj.inlineAdd.on("createControls", function (row, ctrls) {
    pageObj.toggleItem("enter_reply", true, row.id);
    if (proxy["usertype"] === "customer") {
        var hideObjectCustomer = ["from_label", "from_name", "from_email", "to_label", "to_name", "to_email", "subject_label", "subject_field"];
        hideObjectCustomer.forEach(objectid => pageObj.toggleItem(objectid, false, row.id));
    }
    pageObj.getItemButton('Reply').attr("disabled", "disabled");
    var body = Runner.getControl(row.id,"body");
    if (pageObj.inlineAdd.baseParams["add_note"] === "true") {
        pageObj.toggleItem("cc_label", false, row.id);
        pageObj.toggleItem("bcc_label", false, row.id);
        pageObj.toggleItem("cc_field", false, row.id);
        pageObj.toggleItem("bcc_field", false, row.id);
    } else {
        pageObj.toggleItem("show_cc_bcc", true, row.id);
	if (proxy["usertype"] == "customer") {
		$(body.elemsForEvent).on("paste", function(e){
			var attachment = Runner.getControl(row.id,"attachment");
			attachment.uploadForm.trigger(e);
		});
	}

        if (proxy["usertype"] !== "customer") {
				
            /*var reply_message;
            var all_messages = pageObj.getAllRecords();
            if(typeof pageObj.inlineAdd.baseParams["reply_by_message"] !== "undefined"){
                reply_message = all_messages.find(row => row.row.keys[0] == pageObj.inlineAdd.baseParams["reply_id"] );
                delete pageObj.inlineAdd.baseParams["reply_by_message"];
            }
            else{
                reply_message = all_messages.find(row => ["1","2"].includes(row.getFieldValue("directionid")) );
            }
            var bodyvalue = reply_message.getFieldValue("body").replaceAll("<br>>", "\n").replaceAll("<br>", "\n").replaceAll("\n", "\n>");
            if(bodyvalue.charAt(0) != '>') bodyvalue = ">" + bodyvalue;
            body.setValue(bodyvalue);
            body.elemsForEvent[0].selectionStart = 0;*/
        }


    }

    body.on("keyup", function (e) {
        var caretposition = body.elemsForEvent[0].selectionStart;
        if ((e.ctrlKey && e.keyCode === 32) || body.getValue().substring(caretposition - 3, caretposition) === "   ") {
            getTemplate(body);
        }
    });
    if ($(".add_to_reply.selected").size() > 0) {
        var solutiontext = $(".add_to_reply.selected").parents("td").find(".datasolution").html();
        var starter_name = "";
        if (typeof proxy["starter_name"] !== "undefined") starter_name = proxy["starter_name"] + ",\n";
        body.setValue(starter_name + solutiontext);
        $(".add_to_reply").removeClass("selected");
    }
});
pageObj.inlineAdd.on("afterInit", function (pageObj, proxy, id, row, inlineObject) {
    $("[data-itemid=Add_to_KnowledgeBase][data-record-id='" + id + "']").css("display", "none");
    $("[data-itemid='quicktemplates'][data-record-id='" + id + "']").css("display", "inline-flex");
    $("[data-itemid='quicktemplates'][data-record-id='" + id + "']").removeAttr("data-hidden");
});


function insertAtCursor(myField, myValue) {
    var selectionStart = myField.selectionStart;
    if (selectionStart && selectionStart != 0) {
        var startPos = myField.selectionStart;
        var endPos = myField.selectionEnd;
        var beforeCursor = myField.value.substring(0, startPos);
        var afterCursor = myField.value.substring(endPos, myField.value.length);
        /*if(beforeCursor[beforeCursor.length-1] !== "\n") myValue="\n"+myValue;
        if(afterCursor[0] !== "\n" ) myValue=myValue+"\n";*/
        myField.value = beforeCursor +
            myValue +
            afterCursor;

        myField.setSelectionRange(selectionStart + myValue.replace(/\n/g, "").length, selectionStart + myValue.replace(/\n/g, "").length);
    } else {
        //if(myField.value !== "" && myField.value[0] !== "\n") myValue=myValue+"\n";
        myField.value = myValue + myField.value;
        myField.setSelectionRange(myValue.length, myValue.replace(/\n/g, "").length);
    }
    $(myField).focus();

}
//quicktemplates select change
$("body").on("change", ".quicktemplates_select", function () {
    var qt_select = $(this);
    $.get(Runner.pages.getUrl("hd_messages", "list"), { quicktemplate: qt_select.val() }, function (templatecontent) {
        var message_textarea = $("[data-field='body'] textarea");
        if (templatecontent !== "") {
            insertAtCursor(message_textarea.get(0), templatecontent);
            qt_select.find("option").removeAttr("selected");
            qt_select.find("option:first").attr("selected", "selected");
        }
    });
});

function getTemplate(bodyCtrl) {
    var caretposition = bodyCtrl.elemsForEvent[0].selectionStart;
    var bodytext = bodyCtrl.getValue();
    if (bodytext.substring(caretposition - 3, caretposition) === "   ") {
        caretposition = caretposition - 3;
    }
    var textBeforeCaret = bodytext.substring(0, caretposition);
    var templateName = textBeforeCaret.match(/\b\w+\b/g).pop();
    var startposition = caretposition - templateName.length;
    //get text before templatename
    textBeforeCaret = bodytext.substring(0, startposition);
    var textAfterCaret = bodytext.substring(caretposition);

    if (textAfterCaret.substring(0, 3) === "   ") textAfterCaret = textAfterCaret.substring(3);



    $.get(Runner.pages.getUrl("hd_messages", "list"), { quicktemplate: templateName }, function (templatecontent) {
        if (templatecontent === "") return;

        var textBeforeCaretLenght = textBeforeCaret.length;
        var templatecontentLenght = templatecontent.replace(/\n/g, "").length;
        if (startposition != 0) {
            bodyCtrl.setValue(textBeforeCaret + templatecontent + textAfterCaret);
            var position = textBeforeCaretLenght + templatecontentLenght;
        } else {
            bodyCtrl.setValue(templatecontent + textAfterCaret);
            var position = templatecontentLenght;
        }
        $(".quicktemplates_select").focus();
        $("[data-field='body'] textarea").get(0).setSelectionRange(position, position);
        $("[data-field='body'] textarea").focus();

    })
};
//add new template
$("body").on("click", ".add_quicktemplate", function () {
    Runner.displayPopup({
        url: "hd_quicktemplates_add.php",
        width: 500,
        height: 550,
        header: 'Quick templates, Add new',
        afterCreate: function (popup) {
            window.popup = popup;
            window.quicktemplates_select = $(".quicktemplates_select");
        }
    });
    return false;
});



$(".add_to_reply").click(function () {
    $(".add_to_reply").removeClass("selected");
    $(this).addClass("selected");
    pageObj.getItemButton('Reply').click();
    return false;
});;

if (typeof (proxy["with_open_reply"]) !== "undefined") {
    pageObj.getItemButton('Reply').click();
}
if (proxy["usertype"] === "customer" && proxy["master_statusid"] == "5" )
	$(".hd_messages_list.customer .r-body").attr("style","display:table !important");
if (proxy["usertype"] === "customer" && proxy["master_statusid"] !== "5" ) {
    //for customer - open form onpage load
    if ($("[id^=saveLink]:visible").length == 0 && proxy["mid"] != "") {
        pageObj.inlineAdd.baseParams["reply_id"] = proxy["mid"];
        pageObj.inlineAdd.baseParams["add_note"] = "false";
        pageObj.inlineAdd.inlineAdd();
    }

    pageObj.inlineAdd.on("afterInit", function (pageObj, proxy, id, row, inlineObject) {
		$(".hd_messages_list.customer .r-body").attr("style","display:table !important");
        $("[data-record-id='" + id + "'] .rnr-dragtext").html("<span class='text_upload'>Drop files here to upload...</span><span class='button_upload'>" + Runner.getCustomLabel("browse_files") + "</span>");
        $("body").on("click", "[data-field='attachment'] .rnr-dragndrop-area", function () {
            $(".fileinput-button-input").click();
        });
    });

}

var is_mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
if (is_mobile) $("body").addClass("mobile");;
init_todoList(proxy["todolist"],pageObj.masterKeys.masterkey1);

;
});
	

Runner.pages.PageSettings.addPageEvent('hd_messages', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if( typeof pageObj.submitUrl !== "undefined" ){
	pageObj.submitUrl = pageObj.submitUrl.substr(0,pageObj.submitUrl.length - 1);
	if(typeof(proxy["new_ticket"]) !== "undefined"){
		pageObj.submitUrl+="&new_ticket=1";
	}
	if(typeof(proxy["folder_id"]) !== "undefined"){
		pageObj.submitUrl+="&folder_id="+proxy["folder_id"];
	}
}

pageObj.on('afterInlineAdd', function( fieldsData ) {
  pageObj.reload({});
} );
if(proxy["addnote"]=="true"){
	$("[data-itemid='grid_inline_save']:visible").find("[id^=saveLink]").html("<span class='glyphicon glyphicon-ok'></span>&nbsp;Add Note")
	$("[data-itemid='to_email']").closest("tr").hide();
	$(".r-grid-columns+[data-pageid='1']>.panel>.panel-body>table>tbody>tr:nth-child(2)").show();
}
else
	$("[data-itemid='to_email']").closest("tr").show();

ctrl = Runner.getControl(pageid,"body"); 
if( proxy["user_type"] === "customer" && proxy["new_ticket"] == 1 ){
	Runner.getControl(pageid,"categoryid").setFocus();
}
else 
	ctrl.setFocus();

$("body").on("change",".show_hide_checkbox",function() {
	var fieldrow = $(this).parents(".r-grid-columns").find("[data-field='" + $(this).attr("field") + "']").parents("td");
	if ($(this).prop('checked')) fieldrow.show();
		else fieldrow.hide();
});;
});

//	AJAX snippets

// fields events
