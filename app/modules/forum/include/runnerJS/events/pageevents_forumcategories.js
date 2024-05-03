	

Runner.pages.PageSettings.addPageEvent('forumcategories', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	pageObj.inlineAdd.on('afterSubmit',function(){
	setColor();
});
pageObj.inlineEdit.on('afterSubmit',function(){
    setColor();
});
setColor();
function setColor() {
	$("[data-field='color']").each(function(i,el) {
	var span = $(el).find("span");
	$(el).parents("td").css("background",span.html());
	});
};
});

//	AJAX snippets

// fields events
