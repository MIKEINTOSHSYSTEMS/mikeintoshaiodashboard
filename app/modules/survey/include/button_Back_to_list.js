Runner.buttonEvents["Back_to_list"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Back_to_list';
	
	if ( !pageObj.buttonEventBefore['Back_to_list'] ) {
		pageObj.buttonEventBefore['Back_to_list'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href='sv_surveys_list.php';
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Back_to_list'] ) {
		pageObj.buttonEventAfter['Back_to_list'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Back_to_list"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Back_to_list" + "_" + Runner.genId();
		
		// create object
		var button_Back_to_list = new Runner.form.Button({
			id: this.id ,
			btnName: "Back_to_list"
		});
		
		// init
		button_Back_to_list.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

