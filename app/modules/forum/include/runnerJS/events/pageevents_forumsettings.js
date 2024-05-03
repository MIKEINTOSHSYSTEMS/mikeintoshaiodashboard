	

Runner.pages.PageSettings.addPageEvent('forumsettings', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if(typeof proxy["notifynewtopic"] !== "undefined")
	startSending(proxy["notifynewtopic"]);;
});

//	AJAX snippets

// fields events
