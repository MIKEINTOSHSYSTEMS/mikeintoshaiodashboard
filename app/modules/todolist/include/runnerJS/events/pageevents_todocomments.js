	

Runner.pages.PageSettings.addPageEvent('todocomments', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".modal-content").css("width","550px");
$(".modal-content").css("height","296");
$(".modal-body").css("width","420px");
$(".modal-body").css("height","200");

$(".modal-header>[data-itemid='edit_header']").attr("style","display:inline-block!important");;
});
	

Runner.pages.PageSettings.addPageEvent('todocomments', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".modal-content").css("width","550px");
$(".modal-content").css("height","296");
$(".modal-body").css("width","420px");
$(".modal-body").css("height","200");;
});

//	AJAX snippets

// fields events
