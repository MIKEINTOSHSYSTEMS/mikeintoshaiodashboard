	

Runner.pages.PageSettings.addPageEvent('todoboards', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("#value_boardname_"+pageid).css("display","none").css("position","relative").css("margin-left","-20px");
$("#div_boardname").html($("#value_boardname_"+pageid).val());
$("body").addClass("todobody");

$(".home").click(function(){
	$("#backButton"+pageid).click();
});

init_Kanbam(proxy["id"]);

var ctrl = Runner.getControl(pageid, 'boardname');
ctrl.on("change", function(){
	$("#div_boardname").html($("#value_boardname_"+pageid).val());
	$("#value_boardname_"+pageid).css("display","none");
	$("#div_boardname").css("display","inherit");
	$.post("todoboards_list.php", {
		a: 'saveboardname',
		bid: proxy["id"],
		name: ctrl.getValue()
	})
	.done(function(res){
		$("#value_boardname_"+pageid).css("display","none");
		$("#div_boardname").css("display","inherit");
	});
});
if(proxy["permiss"] == "true"){
	$("#div_boardname").bind("click", function(){
		$("#value_boardname_"+pageid).css("display","inherit");
		$("#div_boardname").css("display","none");
	});
}



$("#ctlSearchFor").val(proxy["search"]);

if($("#ctlSearchFor").val())
	$("#showAll").show();
else
	$("#showAll").hide();


$("#searchButtTop").click(function(){
	location.href="todoboards_edit.php?editid1="+proxy["id"]+"&a=search&q="+$("#ctlSearchFor").val();
});

$("#showAll").click(function(){
	location.href="todoboards_edit.php?editid1="+proxy["id"]+"&a=showAll";
});

$("#ctlSearchFor").keydown(function(event){
	if(event.keyCode == 13)	
		$("#searchButtTop").click();
});;
});
	

Runner.pages.PageSettings.addPageEvent('todoboards', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".panel-default").each(function(){
	if($(this).find("[id^=delete_board]").length>0){
		var id = $(this).find("[id^=delete_board]").attr("boardid");
		$(this).click(function(ev){
			if($(ev.target).attr("boardid")==undefined)
				location.href="todoboards_edit.php?editid1="+id;
		});
	}
	$(this).mouseover(function(){
		var id = $(this).find("[id^=delete_board]").attr("boardid");
		$("#delete_board_"+id).css("display","");
		$("#delete_board_"+id).unbind().bind("click",function(){
			$("input[value="+id+"]").attr('checked', true);
			$("#delete_selected"+pageid).click();
		});
	});
	$(this).mouseout(function(){
		var id = $(this).find("[id^=delete_board]").attr("boardid");
		$("#delete_board_"+id).css("display","none");
	});
});

if(proxy["permissA"] == "true"){
	if($(".r-record-body").length>0)
		$("<div id='add_new_board' class='panel-default add_new_board'>+ Add new board</div>").insertAfter($(".r-record-body").last());
	else{
		$("<div id='add_new_board' class='panel-default add_new_board' style='margin-left:25px'>+ Add new board</div>").insertAfter($(".r-body"));
	}
}


$("#add_new_board").click(function(){
	$("#addButton"+pageid).click();
});

$(".home").click(function(){
	$("#backButton"+pageid).click();
});;
});

//	AJAX snippets

// fields events
