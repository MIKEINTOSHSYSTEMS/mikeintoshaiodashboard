Runner.buttonEvents["Re_order_Groups"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Re_order_Groups';
	
	if ( !pageObj.buttonEventBefore['Re_order_Groups'] ) {
		pageObj.buttonEventBefore['Re_order_Groups'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Re_order_Groups'] ) {
		pageObj.buttonEventAfter['Re_order_Groups'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
showReorder("group",result["sid"]); 
return false;

		}
	}
	
	$('a[id="Re_order_Groups"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Re_order_Groups" + "_" + Runner.genId();
		
		// create object
		var button_Re_order_Groups = new Runner.form.Button({
			id: this.id ,
			btnName: "Re_order_Groups"
		});
		
		// init
		button_Re_order_Groups.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

