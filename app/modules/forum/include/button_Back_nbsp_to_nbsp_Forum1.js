Runner.buttonEvents["Back_nbsp_to_nbsp_Forum1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Back_nbsp_to_nbsp_Forum1';
	
	if ( !pageObj.buttonEventBefore['Back_nbsp_to_nbsp_Forum1'] ) {
		pageObj.buttonEventBefore['Back_nbsp_to_nbsp_Forum1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
location.href="forumtopics_list.php";
		}
	}
	
	if ( !pageObj.buttonEventAfter['Back_nbsp_to_nbsp_Forum1'] ) {
		pageObj.buttonEventAfter['Back_nbsp_to_nbsp_Forum1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Back_nbsp_to_nbsp_Forum1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Back_nbsp_to_nbsp_Forum1" + "_" + Runner.genId();
		
		// create object
		var button_Back_nbsp_to_nbsp_Forum1 = new Runner.form.Button({
			id: this.id ,
			btnName: "Back_nbsp_to_nbsp_Forum1"
		});
		
		// init
		button_Back_nbsp_to_nbsp_Forum1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

