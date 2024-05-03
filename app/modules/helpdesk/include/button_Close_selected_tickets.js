Runner.buttonEvents["Close_selected_tickets"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Close_selected_tickets';
	
	if ( !pageObj.buttonEventBefore['Close_selected_tickets'] ) {
		pageObj.buttonEventBefore['Close_selected_tickets'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=check1_]:checked").length==0 && ajax.pageObj.tName != "hd_messages"){
	swal(Runner.getCustomLabel("please_select"));
	return false;
}

if(ajax.pageObj.tName != "hd_messages"){
	if(! confirm(Runner.getCustomLabel("close_tickets_confirm")) ){
		return false;
	}
}
else{
	if( !confirm( Runner.getCustomLabel("close_confirm")) ){
		return false;
	}
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['Close_selected_tickets'] ) {
		pageObj.buttonEventAfter['Close_selected_tickets'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.reload();
		}
	}
	
	$('a[id="Close_selected_tickets"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Close_selected_tickets" + "_" + Runner.genId();
		
		// create object
		var button_Close_selected_tickets = new Runner.form.Button({
			id: this.id ,
			btnName: "Close_selected_tickets"
		});
		
		// init
		button_Close_selected_tickets.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

