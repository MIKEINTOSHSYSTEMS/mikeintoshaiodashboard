	

Runner.pages.PageSettings.addPageEvent('calglobals', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrlTimeField = Runner.getControl(pageid, 'StartTime'), ctrlEndTime = Runner.getControl(pageid, 'EndTime');

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(i = 0; i < times.length; i++) {
		ctrlTimeField.addOption( times[i].display, times[i].value );
	}
	for(i = 0; i < timesEnd.length; i++) {
		ctrlEndTime.addOption( timesEnd[i].display, timesEnd[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTimeField;
	ctrlEndTime.valueElem[0].selectedIndex  =selectedEndTime;
}
;
});

//	AJAX snippets

// fields events
