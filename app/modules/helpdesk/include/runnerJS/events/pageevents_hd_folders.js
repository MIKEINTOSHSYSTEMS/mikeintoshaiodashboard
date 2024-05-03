	

Runner.pages.PageSettings.addPageEvent('hd_folders', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	pageObj.on('afterInlineAdd', function( fieldsData ) {
  pageObj.reload({});
} );;
});

//	AJAX snippets

// fields events
