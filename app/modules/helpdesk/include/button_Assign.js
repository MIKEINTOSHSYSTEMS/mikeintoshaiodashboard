Runner.buttonEvents["Assign"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Assign';
	
	if ( !pageObj.buttonEventBefore['Assign'] ) {
		pageObj.buttonEventBefore['Assign'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=check1_]:checked").length==0 && ajax.pageObj.tName != "hd_messages"){
	swal( Runner.getCustomLabel("please_select") );
	return false;
}

$(".popupmenu").hide();

var w = "532px";
if(ajax.pageObj.tName == "hd_messages")
	w = "462px";
$("#popup_assign").css("left",ctrl.elem.position().left).css("top","38px");
$("#popup_assign").show();
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Assign'] ) {
		pageObj.buttonEventAfter['Assign'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Assign"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Assign" + "_" + Runner.genId();
		
		// create object
		var button_Assign = new Runner.form.Button({
			id: this.id ,
			btnName: "Assign"
		});
		
		// init
		button_Assign.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

