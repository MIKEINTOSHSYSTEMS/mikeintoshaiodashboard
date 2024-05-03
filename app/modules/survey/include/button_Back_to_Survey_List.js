Runner.buttonEvents["Back_to_Survey_List"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Back_to_Survey_List';
	
	if ( !pageObj.buttonEventBefore['Back_to_Survey_List'] ) {
		pageObj.buttonEventBefore['Back_to_Survey_List'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href="sv_surveys_list.php";
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Back_to_Survey_List'] ) {
		pageObj.buttonEventAfter['Back_to_Survey_List'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Back_to_Survey_List"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Back_to_Survey_List" + "_" + Runner.genId();
		
		// create object
		var button_Back_to_Survey_List = new Runner.form.Button({
			id: this.id ,
			btnName: "Back_to_Survey_List"
		});
		
		// init
		button_Back_to_Survey_List.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

