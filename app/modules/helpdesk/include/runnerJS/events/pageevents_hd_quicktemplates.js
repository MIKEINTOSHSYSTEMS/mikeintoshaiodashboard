	

Runner.pages.PageSettings.addPageEvent('hd_quicktemplates', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	//new_template
if ((proxy['saved']) && window.parent && window.parent.popup) {
	window.parent.quicktemplates_select.append("<option value='"+proxy["new_template"].name+"'>"+proxy["new_template"].title+" ("+proxy["new_template"].name+")</option>");
   window.parent.popup.close();


};
});

//	AJAX snippets

// fields events
