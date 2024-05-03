Runner.buttonEvents["Send"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Send';
	
	if ( !pageObj.buttonEventBefore['Send'] ) {
		pageObj.buttonEventBefore['Send'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var sarr = [];
$(".mupload-files").find("[id^=audiorec_]").each(function(){
	sarr.push($(this).find("source").attr("src"));
});

if($("#write_text").val() || $(".rnr-dragndrop-area").css("display")=="none" || sarr.length>0){
	$(".audioclose").remove();
	pageObj.on('beforeSave', function(formObj, fieldControlsArr, pageObj){
	  formObj.baseParams['soundRecord'] = JSON.stringify(sarr);
	});
	pageObj.form.submit();
	$("#write_text").val("");
	$("#audio_record").html("");
}
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Send'] ) {
		pageObj.buttonEventAfter['Send'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
//chatinfo("true");
//scrollBottom();

		}
	}
	
	$('a[id="Send"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Send" + "_" + Runner.genId();
		
		// create object
		var button_Send = new Runner.form.Button({
			id: this.id ,
			btnName: "Send"
		});
		
		// init
		button_Send.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

