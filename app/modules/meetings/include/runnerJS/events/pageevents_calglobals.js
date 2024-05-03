	

Runner.pages.PageSettings.addPageEvent('calglobals', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrlTimeField = Runner.getControl(pageid, 'StartTime'), ctrlEndTime = Runner.getControl(pageid, 'EndTime');

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(i = 0; i < gtimes.length; i++) {
		ctrlTimeField.addOption( gtimes[i].display, gtimes[i].value );
		ctrlEndTime.addOption( gtimes[i].display, gtimes[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = gTimeField;
	ctrlEndTime.valueElem[0].selectedIndex  = gEndTime;
}
;
});

//	AJAX snippets

// fields events
