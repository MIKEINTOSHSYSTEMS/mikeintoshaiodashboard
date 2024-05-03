Runner.buttonEvents["print_board"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'print_board';
	
	if ( !pageObj.buttonEventBefore['print_board'] ) {
		pageObj.buttonEventBefore['print_board'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
window.print();
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['print_board'] ) {
		pageObj.buttonEventAfter['print_board'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="print_board"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "print_board" + "_" + Runner.genId();
		
		// create object
		var button_print_board = new Runner.form.Button({
			id: this.id ,
			btnName: "print_board"
		});
		
		// init
		button_print_board.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

