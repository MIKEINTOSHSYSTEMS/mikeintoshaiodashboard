

	

Runner.pages.PageSettings.addPageEvent('<global>', Runner.pages.constants.PAGE_USERINFO, "afterInit", function(pageObj, proxy, pageid) {
	
var email = Runner.getControl(pageid,"username");
Runner.getControl(pageid,"id").setValue( email.getValue() );
// Place event code here.
// Use "Add Action" button to add code snippets.;
});


