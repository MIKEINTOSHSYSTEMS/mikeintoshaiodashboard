	

Runner.pages.PageSettings.addPageEvent('hd_tickets', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
if( parseInt(proxy["who_is_online"]) && proxy["usertype"] === "admin" || proxy["usertype"] === "user"){
	updateOnlineUsers();
	setInterval(updateOnlineUsers , 1000 * 15); 
	function updateOnlineUsers() {
		var keysRowId = new Object;
		$.each(pageObj.getAllRecords(),function(i,record){
			keysRowId[record.row.keys[0]] = record.row.id;
		});
		var tickets_keys = pageObj.getAllRecords().map(function(record) {
			return record.row.keys[0];
		});
		$.get("",{getOnlineUsers:1,tickets_keys:tickets_keys},function(response) {
			var responseInfo = JSON.parse(response);
			var users = responseInfo.user_online;
			if(users.length > 0 ){
				$(".user_online_block").show();
				$(".user_online_block .alert .users_list").html(users.join(", "));
				$(".user_online_block .alert .count").html(responseInfo.userOnlineCount);
			}
			else $(".user_online_block").hide();

			var replingTickets = responseInfo.replingTickets;
			$.each(replingTickets,function(ticketid,replier) {
					var actionContainer = $("#gridRow"+keysRowId[ticketid]+" [data-itemid='action_info']");
				if(replier != null) {actionContainer.show();actionContainer.addClass("repling");actionContainer.html(replier+" repling...");}
				else {actionContainer.hide();actionContainer.html("");actionContainer.removeClass("repling");}
			});
			var vewingTickets = responseInfo.vewingTickets;
			$.each(vewingTickets,function(ticketid,viewer) {
				var actionContainer = $("#gridRow"+keysRowId[ticketid]+" [data-itemid='action_info']");
				if(actionContainer.hasClass("repling")) return;
				if(viewer != null) {actionContainer.show();actionContainer.html(viewer+" viewing...");}
				else {actionContainer.hide();actionContainer.html("");}
			});
	});
}
}

var is_mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);					
					window.filter_by_status = function() {
    formData = new Runner.form.BasicForm({
        submitUrl: Runner.pages.getUrl(pageObj.tName, pageObj.pageType),
        standardSubmit: 1
    });
    formData.baseParams["fs_checkbox"] = [];
    if ($(".fs_checkbox:checked").size() == $(".fs_checkbox").size()) {
        formData.baseParams["fs_checkbox_all"] = 1;
    } else {
        $(".fs_checkbox:checked").each(function(i, checkbox) {
            formData.baseParams["fs_checkbox"].push($(checkbox).val());
        });
        formData.baseParams["fs_checkbox"] = formData.baseParams["fs_checkbox"].join();
    }

    formData.submit();
}
$("body").bind("click", function() {
    $("#popup_status").hide();
    $("#popup_priority").hide();
    $("#popup_assign").hide();
    $("#popup_folder").hide();
});

$(".subpopupmenu").each(function() {
    var id = $(this).attr("id");
    var fieldname = $(this).attr("fieldname");
    $(this).bind("click", function() {
        var ticketid = "";
        $("[id^=check1_]:checked").each(function() {
            if (ticketid != "")
                ticketid += ",";
            ticketid += $(this).val();
        });
console.log( {
                a: "popup_actions",
                tickets: ticketid,
                fieldname: fieldname,
                id: id
            });
        $.post(Runner.pages.getUrl("hd_tickets","list"), {
                a: "popup_actions",
                tickets: ticketid,
                fieldname: fieldname,
                id: id
            })
            .done(function(res) {
                location.reload();
            });
    });
});

$(".hd_tickets_list:not(.customer) tbody > .r-gridrow").contextmenu(function(event) {
	 $(".r-gridrow").removeClass("selectedrow");
    $(this).addClass("selectedrow");
    event.preventDefault();
    $(".context_menu").show();
    var rowid = $(this).find("td").data("record-id");
    var row = pageObj.getInlineRow(rowid);
    var ajax_row = new Runner.AjaxRow(pageObj, row);

	 $("[name='selection[]']").removeAttr('checked');
    $("[name='selection[]'][value=" + ajax_row.row.keys[0] + "]").prop('checked', true);
    $(".context_menu").attr("email", ajax_row.getFieldValue("ticketemail"));
    $(".context_menu").offset({ top: event.pageY, left: event.pageX });
    $(".context_menu").data("ticketid", row.keys[0]);
    $.each(proxy["ticket_info_" + row.keys[0]], function(key, value) {
        $(".context_menu ." + key + " span").removeClass("selected");
        $(".context_menu ." + key + " span[" + key + "=" + value + "]").addClass("selected");
    })
});

$(".short_info_popup").mouseleave(function() {
	$(this).hide();
});

var short_info_open_intervel;
$("body").append($(".short_info_popup"));
function onhover(e) {
    short_info_open_intervel = setTimeout(function() {
		  var target = $(e.target);
        var rowid = target.data("record-id");
        var row = pageObj.getInlineRow(rowid);
        var ajax_row = new Runner.AjaxRow(pageObj, row);
        $.get(Runner.pages.getUrl(pageObj.tName, pageObj.pageType), { getShortInfo: row.keys[0] }, function(response) {
            var popup_data = JSON.parse(response);
            var current_offset = target.position();
				var row_index = $("tbody .r-gridrow").index(target.parents(".r-gridrow"));
            $.each(popup_data, function(index, value) { $(".short_info_popup").find("." + index).html(value) });

				var offset_top = (row_index > 1)?current_offset.top - 165:current_offset.top+target.height();
            $(".short_info_popup").css("top",offset_top + "px");

				 $(".short_info_popup").css("left",current_offset.left - 350 + "px");
				$(".short_info_popup").show();
            $(".short_info_popup").data("ticketid", row.keys[0]);
            var href = Runner.pages.getUrl("hd_messages", "list") + "?masterkey1=" + row.keys[0] + "&mastertable=hd_tickets";
            $(".short_info_popup .view_link a").attr("href", href);
            $(".short_info_popup .view_link a.with_open_reply").attr("href", href + "&with_open_reply=1");
        });
    }, 500);
}

function onunhover(e) {
    clearTimeout(short_info_open_intervel);
    setTimeout(function() { if (!$(".short_info_popup").is(':hover')) { $(".short_info_popup").hide() } }, 200);
}
if (proxy["usertype"] !== "customer" && !is_mobile) {
    $("td[data-field='subject']").hover(onhover, onunhover);
}
$(".context_menu_action").click(function() {
    var ticketid = $(this).parents(".context_menu").data("ticketid");
    if ($(this).hasClass("delete")) {
        var result = confirm("Want to delete?");
        if (!result) return;
    }
    $.get($(this).data("url") + "&ticketid=" + ticketid, function() {
        window.location.reload();
    });
});
$(document).mouseup(function(e) {
    var div = $(".context_menu,.short_info_popup");
    if (!div.is(e.target) &&
        div.has(e.target).length === 0) {
        div.hide();
    }
});

$(".context_menu .filter").click(function() {
	window.location.href = Runner.getPageUrl("hd_tickets", "list") + "?qs="+$(".context_menu").attr("email") + "&f=(folderid~equals~" + proxy["folder_id"] + ")";
});

if (Runner.isPD()) {
    $paginationElem = pageObj.findItemType('pagination');
} else {
    $paginationElem = pageObj.getBrickElements('pagination');
}
$paginationElem.unbind("click");

function toogleClose_ticketsButton(status) {
    var close_tickets_button = pageObj.getItemButton('close_tickets');
    if (status) {
        close_tickets_button.removeAttr("disabled");
        close_tickets_button.removeClass("disabled");
    } else {
        close_tickets_button.attr("disabled", "disabled");
        close_tickets_button.addClass("disabled");
    }

}
toogleClose_ticketsButton(false);
$("[name='selection[]']").change(function() {
    if (pageObj.getSelectedRecords().length > 0) toogleClose_ticketsButton(true);
    else toogleClose_ticketsButton(false);
});

$("[data-itemtype='custom_button'][data-hidden]").remove();
pageObj.button_items_ids = ["delete", "close_tickets", "move_to_folder", "go_to_folder", "filter_by_status", "new_ticket","folder_select"];
if(proxy["usertype"] === "customer"){
	pageObj.show_buttons(true);
}
else{
	pageObj.show_buttons(false);
}
if (proxy["usertype"] !== "customer") {
	$("[id^=showAll]").off("click").on("click",function() {
				pageObj.searchController.srchForm.clearForm();
				pageObj.searchController.srchForm.addToForm('a', 'showall');
				pageObj.searchController.srchForm.addToForm('f', 'all');
				pageObj.searchController.prepareForShowAllSubmit();
				pageObj.searchController.srchForm.submit();
	});
}
if (proxy["usertype"] === "customer") {
	 /*var fstring = window.location.search;
	 var $filter_template = $('<li class="list-group-item filter-link"><a href=""> <span class="r-lookup-value"><span class="status_span close_status">/span></span></a></li>');
	 $(".filter-statusid-container .list-group").html("");
	 var status_arr = [{ href: "?f=(statusid~equals~3)(directionid~equals~2)", name: "Awaiting for response" }, { href: "?f=(statusid~equals~5)", name: "Close" }, { href: "?f=(statusid~equals~1)(directionid~equals~1)", name: "Open" }];
	 if (fstring.indexOf("f=") !== -1 && fstring.indexOf("f=all") === -1 ) status_arr = status_arr.filter(status => status.href.indexOf(fstring) != -1);
	 status_arr.forEach(function(status) {
	    var status_li = $filter_template.clone();
	    status_li.find("a").attr("href", Runner.pages.getUrl(pageObj.tName, pageObj.pageType) + status.href);
	    status_li.find(".status_span").html(status.name);
	    $(".filter-statusid-container .list-group").append(status_li);
	 });
	 $(".filter-statusid-container .filter-link a").on("click",function() {
			window.location.href = $(this).attr("a");
	 });*/
 
    $(".nav_list_arrow").click(function() {
        $("[data-itemtype='pagination']").toggleClass("open");
        setPrevNext();
    });
    setPrevNext();
    $("body").on("click", ".pag_next:not(.disabled)", function() {
        var link = document.createElement("a");
        link.href = $(".pagination li.active").next("li").find("a").attr("href");
        link.click();
    });
    $("body").on("click", ".pag_prev:not(.disabled)", function() {
        var link = document.createElement("a");
        link.href = $(".pagination li.active").prev("li").find("a").attr("href");
        link.click();
    });

	 function setPrevNext() {
		  if( $(".pagination").size() == 0 ) return;
	     if ($(".pagination li.active a").attr("pagenum") === "1")
	         $(".pag_prev").addClass("disabled");
	     if ($(".pagination li.active a").attr("pagenum") === $(".pag_next").data("max").toString())
	         $(".pag_next").addClass("disabled");

	 }
}

$(".folder_select_wrapper").change(function() {
	window.location.href = $(this).find("option:selected").data("url");
});
$(".folder_select_wrapper option[value="+proxy["folder_id"]+"]").attr("selected","selected");

if (is_mobile) {
    $("body").addClass("mobile");
    $("tbody .r-gridrow").on("click", "td:not([data-checkbox-cell])", function(event) {
        var link = document.createElement("a");
        link.href = $(event.delegateTarget).find("[data-field=subject]").find("a").attr("href");
        link.click();
    });
}
;
});

//	AJAX snippets

// fields events
