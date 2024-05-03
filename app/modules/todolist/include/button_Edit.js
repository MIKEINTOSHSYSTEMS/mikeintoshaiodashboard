Runner.buttonEvents["Edit"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Edit';
	
	if ( !pageObj.buttonEventBefore['Edit'] ) {
		pageObj.buttonEventBefore['Edit'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href = "todocards_edit.php?editid1="+pageObj.keys[0];
return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Edit'] ) {
		pageObj.buttonEventAfter['Edit'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Edit"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Edit" + "_" + Runner.genId();
		
		// create object
		var button_Edit = new Runner.form.Button({
			id: this.id ,
			btnName: "Edit"
		});
		
		// init
		button_Edit.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

