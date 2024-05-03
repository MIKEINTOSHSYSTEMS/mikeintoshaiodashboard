	

Runner.pages.PageSettings.addPageEvent('todocards', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("#closepopup").click(function(){
	$(".close",window.parent.document).click();
});
$.post("todoboards_list.php",{
	a:"getcolor",
	colorid:$("#value_categoryid_"+pageid).children("option:selected").val()
})
.done(function(res){
	$("#categoryid").css("background-color",res);
});

$("#value_categoryid_"+pageid).change(function(){
		$.post("todoboards_list.php",{
			a:"getcolor",
			colorid:$("#value_categoryid_"+pageid).children("option:selected").val()
		})
		.done(function(res){
			$("#categoryid").css("background-color",res);
		});
});

$(".modal-body",window.parent.document).css("height",$(".bs-ctrlspan").length*78+155+70+"px");
$(".modal-content",window.parent.document).css("height",$(".bs-ctrlspan").length*78+205+70+"px");


if(parent.window.$(".modal-header").length>0)
	parent.window.$(".modal-header").find("span:first").html("<b>Edit Card</b>");;
});
	

Runner.pages.PageSettings.addPageEvent('todocards', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("#closepopup").click(function(){
	$(".close",window.parent.document).click();
});
if(proxy["color"])
	$("#categoryid").css("background-color",proxy["color"]);
else
	$("#view1_categoryid").html("none");

if(proxy["assign"]==0)
	$("#view1_assign").html("none");

$(".modal-body",window.parent.document).css("height",$(".r-vertical-field").length*78+120+70+"px");
$(".modal-content",window.parent.document).css("height",$(".r-vertical-field").length*78+160+70+"px");
;
});

//	AJAX snippets

// fields events
