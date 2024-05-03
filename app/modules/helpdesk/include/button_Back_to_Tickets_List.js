Runner.buttonEvents["Back_to_Tickets_List"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Back_to_Tickets_List';
	
	if ( !pageObj.buttonEventBefore['Back_to_Tickets_List'] ) {
		pageObj.buttonEventBefore['Back_to_Tickets_List'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var a = document.createElement("a");
a.href = Runner.pages.getUrl("hd_tickets","list");
a.click();
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Back_to_Tickets_List'] ) {
		pageObj.buttonEventAfter['Back_to_Tickets_List'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Back_to_Tickets_List"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Back_to_Tickets_List" + "_" + Runner.genId();
		
		// create object
		var button_Back_to_Tickets_List = new Runner.form.Button({
			id: this.id ,
			btnName: "Back_to_Tickets_List"
		});
		
		// init
		button_Back_to_Tickets_List.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

