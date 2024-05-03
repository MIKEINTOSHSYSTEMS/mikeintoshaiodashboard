	

Runner.pages.PageSettings.addPageEvent('hd_status', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
pageObj.inlineAdd.on('afterSubmit', function(vals, fields, keys, rowId, newData) {
    setColorAfterSave(rowId, vals.statuscolor);
});
pageObj.inlineEdit.on('afterSubmit', function(vals, fields, keys, rowId, newData) {
    setColorAfterSave(rowId, vals.statuscolor);
});

function setColorAfterSave(rowId, color) {
    $("td[data-field='statuscolor'][data-record-id='" + rowId + "']").removeClass("rnr-style" + rowId + "-statuscolor");
    $("td[data-field='statuscolor'][data-record-id='" + rowId + "']").css("background", color);
};
});

//	AJAX snippets

// fields events
