	

Runner.pages.PageSettings.addPageEvent('Share', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var showOption = function(par){
	if(par==1){
		pageObj.hideField("hash");
		pageObj.hideField("share_sendto");
		pageObj.hideField("share_message");
		pageObj.showField("share_ro");
		pageObj.hideField("share_needDate");
		pageObj.hideField("share_date");
		pageObj.showField("share_users");
	}
	if(par==2){
		pageObj.hideField("hash");
		pageObj.hideField("share_sendto");
		pageObj.hideField("share_message");
		pageObj.showField("share_ro");
		pageObj.hideField("share_needDate");
		pageObj.hideField("share_date");
		pageObj.hideField("share_users");
	}
	if(par==3){
		pageObj.hideField("share_users");
		pageObj.showField("hash");
		pageObj.showField("share_sendto");
		pageObj.showField("share_message");
		pageObj.showField("share_ro");
		pageObj.showField("share_needDate");
		pageObj.showField("share_date");
	}
	if(par==4){
		pageObj.hideField("share_users");
		pageObj.hideField("hash");
		pageObj.hideField("share_sendto");
		pageObj.hideField("share_message");
		pageObj.hideField("share_needDate");
		pageObj.hideField("share_date");
		pageObj.hideField("share_ro");
	}
}

var ctrl = Runner.getControl(pageid, 'share_type');
ctrl.on('change',function(){
	showOption(ctrl.getValue());
})

var ctrl2 = $("#value_share_needDate_"+pageid);
var ctrl3 = Runner.getControl(pageid, 'share_date');
$(ctrl2).on('click',function(){
	if(ctrl2.prop('checked'))
		ctrl3.show();
	else
		ctrl3.hide();
});

if(ctrl2.prop('checked'))
	ctrl3.show();
else
	ctrl3.hide();

if(proxy["afterUpdate"])
	$(".close", window.parent.document).trigger("click");;
});

//	AJAX snippets

// fields events
