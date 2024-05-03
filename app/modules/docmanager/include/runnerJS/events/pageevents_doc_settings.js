	

Runner.pages.PageSettings.addPageEvent('doc_settings', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrl = Runner.getControl(pageid,"isStructure");
var vers = Runner.getControl(pageid,"isVersions");

if(ctrl.getValue()==1)
	pageObj.toggleItem("isVersions", false );
else
	pageObj.toggleItem("isVersions", true );

ctrl.on("click", function(event){
	if(!confirm(Runner.getCustomLabel("change_settings"))){
		event.preventDefault();
		event.stopPropagation();
	}
	else{
		if(ctrl.getValue()==0)
			pageObj.toggleItem("isVersions", false );
		else
			pageObj.toggleItem("isVersions", true );
	}
		
});

;
});

//	AJAX snippets

// fields events
