	

Runner.pages.PageSettings.addPageEvent('sv_scenarios', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("a[name^=dp").hide();
//pageObj.addNewRecordsToBottom = true;;
});

//	AJAX snippets

// fields events
