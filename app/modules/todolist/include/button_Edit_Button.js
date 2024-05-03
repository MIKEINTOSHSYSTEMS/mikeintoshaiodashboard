Runner.buttonEvents["Edit_Button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Edit_Button';
	
	if ( !pageObj.buttonEventBefore['Edit_Button'] ) {
		pageObj.buttonEventBefore['Edit_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
pageObj.on("afterClose", function(){
	Runner.Calendar.editButtonsClickHandler({ id: pageObj.keys[0] }, pageObj) ;
});
$(".close").click();

		}
	}
	
	if ( !pageObj.buttonEventAfter['Edit_Button'] ) {
		pageObj.buttonEventAfter['Edit_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Edit_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Edit_Button" + "_" + Runner.genId();
		
		// create object
		var button_Edit_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "Edit_Button"
		});
		
		// init
		button_Edit_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

