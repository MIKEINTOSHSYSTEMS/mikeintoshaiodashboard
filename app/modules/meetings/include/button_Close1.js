Runner.buttonEvents["Close1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Close1';
	
	if ( !pageObj.buttonEventBefore['Close1'] ) {
		pageObj.buttonEventBefore['Close1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
$(".close",window.parent.document).click();
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Close1'] ) {
		pageObj.buttonEventAfter['Close1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Close1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Close1" + "_" + Runner.genId();
		
		// create object
		var button_Close1 = new Runner.form.Button({
			id: this.id ,
			btnName: "Close1"
		});
		
		// init
		button_Close1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

