	

Runner.pages.PageSettings.addPageEvent('sv_surveys', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	url=window.location.href;
if(url.indexOf("loc=survey")>0) {
	$('#addButton'+pageid).click();
}

;
});
	

Runner.pages.PageSettings.addPageEvent('sv_surveys', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	// reload page after save

this.on('afterSave', function(respObj, formObj, fieldControlsArr, pageObj){
	window.location = 'sv_questions_list.php?mastertable=sv_surveys&masterkey1='+respObj.keys[0]+'&loc=survey';
}, this, {single: true});

;
});

//	AJAX snippets

// fields events
