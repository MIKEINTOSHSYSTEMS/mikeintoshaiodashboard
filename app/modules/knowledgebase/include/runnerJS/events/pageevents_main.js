	

Runner.pages.PageSettings.addPageEvent('main', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	console.log(pageObj);;
});
	

Runner.pages.PageSettings.addPageEvent('main', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".yes,.no").on("click",function () {
    var request = { ArticleID: pageObj.keys[0] };
	 var button = $(this);
    $.get("", { ArticleID: pageObj.keys[0], incrimentColumn: $(this).data("column") },function(count){
		 
		 $(".thankyou").addClass("visible");
		 button.find("i").html(count);
		 button.addClass("active");
		 $(".yes,.no").addClass("justinfo");
		 $(".yes,.no").off();
	 });
});
$(".feedback").click(function () {

    var eventParams = {
        tName: "kbcomments",
        pageType: Runner.pages.constants.PAGE_ADD,
        pageId: -1,
        destroyOnClose: true,
        parentPage: pageObj,
        modal: true,
        editType: Runner.pages.constants.ADD_POPUP,
        baseParams: {
            parId: pageObj.id,
            table: pageObj.tName,
            editType: Runner.pages.constants.ADD_POPUP,
            mastertable: pageObj.tName,
            masterkey1: pageObj.keys[0]
        },
        afterSave: {
            fn: function (respObj, formObj, fieldControls, addPageObj) {
					 swal("comment awaiting approval").then(function(){
						location.reload();
					 });
                
            }
        },
        scope: pageObj
    }
    //Runner.Event.prototype.stopEvent(e);
    Runner.pages.PageManager.openPage(eventParams);

    return false;
});;
});
	

Runner.pages.PageSettings.addPageEvent('main', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
if(pageObj.pageName === "mainpage"){
	var surl = pageObj.searchController.srchForm.submitUrl;
	pageObj.searchController.srchForm.baseParams["page"] = "category";
}
pageObj.searchController.srchForm.on("beforeSubmit",function(form){
	var categoryval = $("[data-itemid='category_select'] select").val();
	if(categoryval != "" ){
		let f = "(Category~equals~" + categoryval + ")";
		form.addToForm('f', f);
		form.addToSearchForm('f', f);
	}
});;
});

//	AJAX snippets

// fields events
