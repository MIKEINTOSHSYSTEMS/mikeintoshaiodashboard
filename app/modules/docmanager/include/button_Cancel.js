Runner.buttonEvents["Cancel"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Cancel';
	
	if ( !pageObj.buttonEventBefore['Cancel'] ) {
		pageObj.buttonEventBefore['Cancel'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

if ( Dropzone && Dropzone.isBrowserSupported() ) {
	Runner._dropzone.removeAllFiles();
	$('#docman-dropzone').hide();
	$('[id^=Save_]').hide();
	$('[id^=Cancel_]').hide();
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['Cancel'] ) {
		pageObj.buttonEventAfter['Cancel'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Cancel"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Cancel" + "_" + Runner.genId();
		
		// create object
		var button_Cancel = new Runner.form.Button({
			id: this.id ,
			btnName: "Cancel"
		});
		
		// init
		button_Cancel.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

