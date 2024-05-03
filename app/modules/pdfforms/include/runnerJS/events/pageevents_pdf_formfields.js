	

Runner.pages.PageSettings.addPageEvent('pdf_formfields', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	/*$("[id^=sqlfield_]").bind("change", function(){
	$.post("pdf_formfields_list.php",{
		a: 'savesqlfield',
		val: $(this).val(),
		fieldid: $(this).attr("fieldid")
	})
	.done(function(txt){
		$("[id^=sqlfield_]").each(function(){
			var obj = this;
			$.post("pdf_formfields_list.php",{
				a: "getselect",
				val: $(this).val(),
				fieldid: $(this).attr("fieldid")
			})
			.done(function(txt){
				$(obj).html(txt);
			});
		})
	});
});*/

$("[id^=sqlfield_]").bind("change", function(){
	$("[id^=sqlfield_]").each(function(){
		$(this).attr("isOver","");
	});
	$.post("pdf_formfields_list.php",{
		a: 'savesqlfield',
		val: $(this).val(),
		fieldid: $(this).attr("fieldid")
	})
});

$("[id^=sqlfield_]").bind("mouseover",function(){
	var obj = this;
	if($(this).attr("isOver"))
		return false;
	$(this).attr("isOver","true");
	$.post("pdf_formfields_list.php",{
		a: "getselect",
		val: $(this).val(),
		fieldid: $(this).attr("fieldid"),
		multifields: $("#value_multifields_1").prop("checked")
	})
	.done(function(txt){
		$(obj).html(txt);
		//$(obj).attr("size","6");
		//$(obj).find("option").height(100);
	});
})
;
});

//	AJAX snippets

// fields events
