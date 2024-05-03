Runner.buttonEvents["select_user_button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'select_user_button';
	
	if ( !pageObj.buttonEventBefore['select_user_button'] ) {
		pageObj.buttonEventBefore['select_user_button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
select_users_popup();
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['select_user_button'] ) {
		pageObj.buttonEventAfter['select_user_button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="select_user_button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "select_user_button" + "_" + Runner.genId();
		
		// create object
		var button_select_user_button = new Runner.form.Button({
			id: this.id ,
			btnName: "select_user_button"
		});
		
		// init
		button_select_user_button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

