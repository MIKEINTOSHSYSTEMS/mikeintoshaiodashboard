	

Runner.pages.PageSettings.addPageEvent('mtsettings', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var el = $("#value_provider_"+pageid);
function setProvider(el){
	var tr = el.closest("tr");
	if(el.val() == "Zoom"){
		tr.siblings("tr").eq(1).hide();
		tr.siblings("tr").eq(2).hide();
		tr.siblings("tr").eq(3).show();
		tr.siblings("tr").eq(4).show();
		tr.siblings("tr").eq(5).hide();
		tr.siblings("tr").eq(6).hide();
		tr.siblings("tr").eq(7).hide();
		tr.siblings("tr").eq(8).hide();
		tr.siblings("tr").eq(9).hide();
		tr.siblings("tr").eq(10).hide();
		$("#value_saveInCloud_1").show();
	}
	if(el.val() == "RingCentral"){
		tr.siblings("tr").eq(1).show();
		tr.siblings("tr").eq(2).show();
		tr.siblings("tr").eq(3).hide();
		tr.siblings("tr").eq(4).hide();
		tr.siblings("tr").eq(5).hide();
		tr.siblings("tr").eq(6).hide();
		tr.siblings("tr").eq(7).hide();
		tr.siblings("tr").eq(8).hide();
		tr.siblings("tr").eq(9).hide();
		tr.siblings("tr").eq(10).hide();

		$("#value_saveInCloud_1").show();
	}
	if(el.val() == "Microsoft Graph"){
		tr.siblings("tr").eq(1).hide();
		tr.siblings("tr").eq(2).hide();
		tr.siblings("tr").eq(3).hide();
		tr.siblings("tr").eq(4).hide();
		tr.siblings("tr").eq(5).show();
		tr.siblings("tr").eq(6).show();
		tr.siblings("tr").eq(7).hide();
		tr.siblings("tr").eq(8).hide();
		tr.siblings("tr").eq(9).hide();
		tr.siblings("tr").eq(10).hide();
		$("#value_saveInCloud_1").show();
	}
	if(el.val() == "Google Meet"){
		tr.siblings("tr").eq(1).hide();
		tr.siblings("tr").eq(2).hide();
		tr.siblings("tr").eq(3).hide();
		tr.siblings("tr").eq(4).hide();
		tr.siblings("tr").eq(5).hide();
		tr.siblings("tr").eq(6).hide();
		tr.siblings("tr").eq(7).hide();
		tr.siblings("tr").eq(8).show();
		tr.siblings("tr").eq(9).show();
		tr.siblings("tr").eq(10).hide();
		$("#value_saveInCloud_1").hide();
	}
	if(el.val() == "WEBEX"){
		tr.siblings("tr").eq(1).hide();
		tr.siblings("tr").eq(2).hide();
		tr.siblings("tr").eq(3).hide();
		tr.siblings("tr").eq(4).hide();
		tr.siblings("tr").eq(5).hide();
		tr.siblings("tr").eq(6).hide();
		tr.siblings("tr").eq(7).hide();
		tr.siblings("tr").eq(8).hide();
		tr.siblings("tr").eq(9).show();
		tr.siblings("tr").eq(10).show();
		$("#value_saveInCloud_1").show();
	}
}
setProvider(el);
el.change(function(){ setProvider(el) });

var tablefields = proxy["tables"];

$.each(tablefields, function(i,v){
	$('#value_userstable_'+pageid).append(new Option(i, i));
});
var fieldsvalue = proxy["fieldsvalue"];
var ctrl = ["namefield","emailfield","phonefield","idfield"];

$('#value_userstable_'+pageid).change(function(){
	var obj = this;
	$.each(ctrl, function(ind, ctrlname){
		$('#value_'+ctrlname+'_'+pageid).empty();
		$('#value_'+ctrlname+'_'+pageid).append(new Option("Please select",""));
		$.each(tablefields[$(obj).val()], function(i,v){
			var s = "";
			if(fieldsvalue[ctrlname] == v)
				s = "selected";
			$('#value_'+ctrlname+'_'+pageid).append("<option value='"+v+"' "+s+">"+v+"</option>"); 
		});
	});
});

$('#value_userstable_'+pageid).val(proxy["tablevalue"]);
$('#value_userstable_'+pageid).trigger( "change" );

$("#backToMenuButton1").hide();
$(".r-edit-label").each(function(){
	if($(this).attr("for")!= "value_saveInCloud_1" && $(this).attr("for")!= "value_emailfield_1" && $(this).attr("for")!= "value_phonefield_1" && $(this).attr("for")!= "value_mtpassword_1"){
		var content = $(this).html();
		$(this).html(content+"<span class='icon-required'></span>");
	}
});

;
});

//	AJAX snippets

// fields events
