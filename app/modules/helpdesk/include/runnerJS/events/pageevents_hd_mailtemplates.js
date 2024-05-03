	

Runner.pages.PageSettings.addPageEvent('hd_mailtemplates', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var macrocontrol = Runner.getControl(pageid, "id");
$(macrocontrol.elemsForEvent).find("option:not(:first)").each(function(i, option) {
    var value = $(option).val().split("|");
    $(option).html(value.shift());
    $(option).val(value.shift());
});
macrocontrol.on("change", function() {
    var template = Runner.getControl(pageid, "template");
    template.setValue(template.getValue() + "\n" + this.getValue());
});;
});

//	AJAX snippets

// fields events
