Runner.buttonEvents["Change_Priority"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Change_Priority';
	
	if ( !pageObj.buttonEventBefore['Change_Priority'] ) {
		pageObj.buttonEventBefore['Change_Priority'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=check1_]:checked").length==0 && ajax.pageObj.tName != "hd_messages"){
	swal(Runner.getCustomLabel("please_select"));
	return false;
}

$(".popupmenu").hide();

var w = "432px";
if(ajax.pageObj.tName == "hd_messages")
	w = "362px";
$("#popup_priority").css("left",ctrl.elem.position().left).css("top","38px");
$("#popup_priority").show();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Change_Priority'] ) {
		pageObj.buttonEventAfter['Change_Priority'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Change_Priority"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Change_Priority" + "_" + Runner.genId();
		
		// create object
		var button_Change_Priority = new Runner.form.Button({
			id: this.id ,
			btnName: "Change_Priority"
		});
		
		// init
		button_Change_Priority.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

