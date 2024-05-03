	

Runner.pages.PageSettings.addPageEvent('sv_groups', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if ((proxy['saved']) && window.parent && window.parent.popup) {
   window.parent.location.reload();
}

$("#search_suggest1").next("p").remove();;
});

//	AJAX snippets

// fields events
