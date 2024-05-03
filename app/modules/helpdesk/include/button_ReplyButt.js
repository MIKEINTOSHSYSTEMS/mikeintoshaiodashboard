Runner.buttonEvents["ReplyButt"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'ReplyButt';
	
	if ( !pageObj.buttonEventBefore['ReplyButt'] ) {
		pageObj.buttonEventBefore['ReplyButt'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=saveLink]:visible").length!=0)
	return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['ReplyButt'] ) {
		pageObj.buttonEventAfter['ReplyButt'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

if($("[id^=saveLink]:visible").length==0 && result["mid"]!=""){
	console.log(2);
	pageObj.inlineAdd.baseParams["reply_id"]=result["mid"];
	pageObj.inlineAdd.baseParams["add_note"]="false";
	pageObj.inlineAdd.inlineAdd();
	$(ctrl.elem).attr("disabled","disabled");
}
		}
	}
	
	$('a[id="ReplyButt"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "ReplyButt" + "_" + Runner.genId();
		
		// create object
		var button_ReplyButt = new Runner.form.Button({
			id: this.id ,
			btnName: "ReplyButt"
		});
		
		// init
		button_ReplyButt.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

