	

Runner.pages.PageSettings.addPageEvent('chat_groups', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrltype = Runner.getControl(pageid,'grouptype');
var ctrlusers = Runner.getControl(pageid,'targetid');


ctrltype.on("change", function(){
	if(ctrltype.getValue()==1)
		ctrlusers.hide();
	else
		ctrlusers.show();
});
if(ctrltype.getValue()==1)
	ctrlusers.hide();
else
	ctrlusers.show();

if(proxy["errors"]){
	swal(proxy["errors"]);
	return false;
}

if(proxy["saved"]){
	window.parent.location.href=Runner.pages.getUrl('chat_history','add')+'?userid=G'+proxy["saved"];
	return false;
}

;
});
	

Runner.pages.PageSettings.addPageEvent('chat_groups', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrltype = Runner.getControl(pageid,'grouptype');
var ctrlusers = Runner.getControl(pageid,'targetid');


ctrltype.on("change", function(){
	if(ctrltype.getValue()==1)
		ctrlusers.hide();
	else
		ctrlusers.show();
});
if(ctrltype.getValue()==1)
	ctrlusers.hide();
else
	ctrlusers.show();

if(proxy["errors"]){
	swal(proxy["errors"]);
	return false;
}

if(proxy["saved"]){
	window.parent.location.href=Runner.pages.getUrl('chat_history','add')+'?userid=G'+proxy["saved"];
	return false;
}

;
});

//	AJAX snippets

// fields events
