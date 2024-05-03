Runner.buttonEvents["Save___Edit"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Save___Edit';
	
	if ( !pageObj.buttonEventBefore['Save___Edit'] ) {
		pageObj.buttonEventBefore['Save___Edit'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
$("a[id^=saveButton]").click();
Runner.Calendar.overridePagesGetParamsMethods();
pageObj.on("afterSave", function(respObj, formObj, fieldControls, page) {
	Runner.Calendar.editButtonsClickHandler({ id: respObj.keys[0] }, pageObj) ;
} );
		}
	}
	
	if ( !pageObj.buttonEventAfter['Save___Edit'] ) {
		pageObj.buttonEventAfter['Save___Edit'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Save___Edit"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Save___Edit" + "_" + Runner.genId();
		
		// create object
		var button_Save___Edit = new Runner.form.Button({
			id: this.id ,
			btnName: "Save___Edit"
		});
		
		// init
		button_Save___Edit.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

