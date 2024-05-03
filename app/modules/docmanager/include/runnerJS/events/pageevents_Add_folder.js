	

Runner.pages.PageSettings.addPageEvent('Add folder', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("#value_name_"+pageid).keypress(function(e) {
    if(e.which == 13) {
		$("#saveButton"+pageid).click();
		e.preventDefault();
		return false;
}});


//$("#value_name_"+pageid).focus();
//var ctrl = Runner.getControl( pageid, "name");
//ctrl.setFocus();
//getControl
// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets

// fields events
