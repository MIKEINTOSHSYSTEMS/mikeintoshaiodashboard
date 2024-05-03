Runner.buttonEvents["Ticket_List"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Ticket_List';
	
	if ( !pageObj.buttonEventBefore['Ticket_List'] ) {
		pageObj.buttonEventBefore['Ticket_List'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href="hd_tickets_list.php?a=return";
		}
	}
	
	if ( !pageObj.buttonEventAfter['Ticket_List'] ) {
		pageObj.buttonEventAfter['Ticket_List'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Ticket_List"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Ticket_List" + "_" + Runner.genId();
		
		// create object
		var button_Ticket_List = new Runner.form.Button({
			id: this.id ,
			btnName: "Ticket_List"
		});
		
		// init
		button_Ticket_List.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

