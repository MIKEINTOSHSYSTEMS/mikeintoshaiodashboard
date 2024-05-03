Runner.buttonEvents["More_button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'More_button';
	
	if ( !pageObj.buttonEventBefore['More_button'] ) {
		pageObj.buttonEventBefore['More_button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
pageObj.show_buttons(true);
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['More_button'] ) {
		pageObj.buttonEventAfter['More_button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="More_button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "More_button" + "_" + Runner.genId();
		
		// create object
		var button_More_button = new Runner.form.Button({
			id: this.id ,
			btnName: "More_button"
		});
		
		// init
		button_More_button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

