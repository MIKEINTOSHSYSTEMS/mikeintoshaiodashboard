Runner.buttonEvents["Change_Status"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Change_Status';
	
	if ( !pageObj.buttonEventBefore['Change_Status'] ) {
		pageObj.buttonEventBefore['Change_Status'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=check1_]:checked").length==0 && ajax.pageObj.tName != "hd_messages"){
	swal(Runner.getCustomLabel("please_select"));
	return false;
}

$(".popupmenu").hide();
var w = "308px";
if(ajax.pageObj.tName == "hd_messages")
	w = "238px";
$("#popup_status").css("left",ctrl.elem.position().left).css("top","38px");
$("#popup_status").show();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Change_Status'] ) {
		pageObj.buttonEventAfter['Change_Status'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Change_Status"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Change_Status" + "_" + Runner.genId();
		
		// create object
		var button_Change_Status = new Runner.form.Button({
			id: this.id ,
			btnName: "Change_Status"
		});
		
		// init
		button_Change_Status.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

