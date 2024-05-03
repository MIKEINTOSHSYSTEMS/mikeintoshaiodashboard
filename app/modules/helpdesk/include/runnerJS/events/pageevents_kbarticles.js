	

Runner.pages.PageSettings.addPageEvent('kbarticles', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
if ((proxy['saved']) && window.parent && window.parent.popup){
   window.parent.popup.close();
};
});

//	AJAX snippets

// fields events
