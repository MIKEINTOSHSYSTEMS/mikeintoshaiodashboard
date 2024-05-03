	

Runner.pages.PageSettings.addPageEvent('sv_questions', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	url=window.location.href;
if(url.indexOf("loc=survey")>0) {
	$('#addButton'+pageid).click();
}
if(proxy["hideB"]=="true"){
	$("span[data-itemid=add]").hide();
	$("span[data-itemid=delete]").hide();
	$("span[data-itemtype=grid_edit]").each(function(){$(this).hide();});
}







;
});
	

Runner.pages.PageSettings.addPageEvent('sv_questions', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
	assignHandlers(pageObj, pageid);

	var tabs = pageObj.getTabs();
	window.tabSettings = false;
	if (tabs.bodyElement(1).length!=0) 	
	{
		window.tabSettings = true;
		tabs.removeTab(1);;
	}
	pageObj.hideField('other');



$("select[id^=value_type]").change(function(){
	if($(this).val()=="A"){
		$("[data-itemid='details_preview']").show();
		$("[data-itemid='details_preview1']").show();
	}
	else if($(this).val()=="B" || $(this).val()=="C" || $(this).val()=="D" || $(this).val()=="M" || $(this).val()=="P" || $(this).val()=="R"){
		$("[data-itemid='details_preview']").show();
		$("[data-itemid='details_preview1']").hide();
	}
	else{
		$("[data-itemid='details_preview']").hide();
		$("[data-itemid='details_preview1']").hide();
	}
});

$("[data-itemid='details_preview']").hide();
$("[data-itemid='details_preview1']").hide();

//alert(1);

;
});
	

Runner.pages.PageSettings.addPageEvent('sv_questions', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
// reload page after save
this.on('afterSave', function(respObj, formObj, fieldControlsArr, pageObj){
window.location.reload();
}, this, {single: true});


assignHandlers(pageObj, pageid);
ctrlType = Runner.getControl(pageid, 'type');
var type=ctrlType.getValue();
showHideQuestionOptions(pageObj, type);


$("select[id^=value_type]").change(function(){
	if($(this).val()=="A"){
		$("[data-itemid='details_preview']").show();
		$("[data-itemid='details_preview1']").show();
	}
	else if($(this).val()=="B" || $(this).val()=="C" || $(this).val()=="D" || $(this).val()=="M" || $(this).val()=="P" || $(this).val()=="R"){
		$("[data-itemid='details_preview']").show();
		$("[data-itemid='details_preview1']").hide();
	}
	else{
		$("[data-itemid='details_preview']").hide();
		$("[data-itemid='details_preview1']").hide();
	}
});

if($("select[id^=value_type]").val()=="A"){
	$("[data-itemid='details_preview']").show();
	$("[data-itemid='details_preview1']").show();
}
else if($("select[id^=value_type]").val()=="B" || $("select[id^=value_type]").val()=="C" || $("select[id^=value_type]").val()=="D" || $("select[id^=value_type]").val()=="M" || $("select[id^=value_type]").val()=="P" || $("select[id^=value_type]").val()=="R"){
	$("[data-itemid='details_preview']").show();
	$("[data-itemid='details_preview1']").hide();
}
else{
	$("[data-itemid='details_preview']").hide();
	$("[data-itemid='details_preview1']").hide();
}




;
});
	

Runner.pages.PageSettings.addPageEvent('sv_questions', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	//alert(1);

// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets

// fields events
