	

Runner.pages.PageSettings.addPageEvent('hd_users', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
pageObj.inlineEdit.on("createControls", function (row, ctrls) {
    var usertype = ctrls.find(ctrl => ctrl.fieldName === 'usertype');
	 var customerView = ctrls.find(ctrl => ctrl.fieldName === 'supporterView');
	 var password = ctrls.find(ctrl => ctrl.fieldName === 'password');
	 if(usertype.getValue() !== "user") $(customerView.spanContElem).hide();
	 password.removeValidation("IsRequired");
});
pageObj.inlineEdit.on("beforeProcessNewRow", function(row, data) {
    delete data["password"];
});


;
});

//	AJAX snippets

// fields events
