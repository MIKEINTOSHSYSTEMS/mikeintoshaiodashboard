	

Runner.pages.PageSettings.addPageEvent('response', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	initToolTips();
initScenarios(proxy["hash"]);
;
});

//	AJAX snippets

// fields events
