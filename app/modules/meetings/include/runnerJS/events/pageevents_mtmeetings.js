	

Runner.pages.PageSettings.addPageEvent('mtmeetings', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".sendnoti").click(function(){
	var id = $(this).attr("recid");
	$.post("mtmeetings_view.php",{
		a: "noti",
		id: id
	})
	.done(function(txt){
		swal(txt);
	});
});

var ctrl = Runner.getControl(pageid,'schedule'); 
if(!ctrl.getValue())
	$("[data-itemid='noti1']").closest("tr").hide();
else
	$("[data-itemid='noti1']").closest("tr").show();

window.parent.$(".modal-content").css("height",proxy["h_popup"]+"px");
window.parent.$(".modal-body").css("height",(proxy["h_popup"]-50)+"px");
$("[data-itemid='create_link_control']").bind("click", function(e){
	pageObj.toggleItem("create_link_control", false ); 
	pageObj.toggleItem("real_clink", true );
	$("#input_clink").select();
});

$("body").bind("click", function(e){
	if($(e.target).attr("id")!="view1_clink" && $(e.target).attr("id")!="input_clink"){
		pageObj.toggleItem("create_link_control", true); 
		pageObj.toggleItem("real_clink", false);
	}
});;
});
	

Runner.pages.PageSettings.addPageEvent('mtmeetings', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if(!proxy["fillSettings"])
	$("#form_grid_"+pageid).hide();

$(".sendnoti").each(function(){
	$(this).click(function(){
		var id = $(this).attr("recid");
		$.post("mtmeetings_view.php",{
			a: "noti",
			id: id
		})
		.done(function(txt){
			swal(txt);
		});
	});
});;
});
	

Runner.pages.PageSettings.addPageEvent('mtmeetings', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  hours = hours < 10 ? '0'+hours : hours;
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}

$("[data-itemid='noti1']").closest("tr").hide();

var ctrl = Runner.getControl(pageid,'schedule'); 
ctrl.on("blur", function(){
	if(!ctrl.getValue())
		$("[data-itemid='noti1']").closest("tr").hide();
	else{
		var aDate = ctrl.getValue();
		var aDate = moment(aDate).subtract(10, 'minutes').toDate();
		newTime = formatAMPM(aDate);
		var ctrl2 = Runner.getControl(pageid,'notitime'); 
		ctrl2.setValue(newTime);
		$("[data-itemid='noti1']").closest("tr").show();
	}
});

console.log($(".input-group"));

$(".input-group").datetimepicker({
                 format: 'L'
             });;
});
	

Runner.pages.PageSettings.addPageEvent('mtmeetings', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrl = Runner.getControl(pageid,'schedule'); 
if(!ctrl.getValue())
	$("[data-itemid='noti1']").closest("tr").hide();
else
	$("[data-itemid='noti1']").closest("tr").show();

window.parent.$(".modal-header").find("span").eq(0).html("<b>Edit Meeting</b>");

window.parent.$(".modal-content").css("height","700px");
window.parent.$(".modal-body").css("height","650px");;
});

//	AJAX snippets

// fields events
