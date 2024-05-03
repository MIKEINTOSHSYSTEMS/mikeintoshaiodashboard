Runner.buttonEvents["Add_files"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Add_files';
	
	if ( !pageObj.buttonEventBefore['Add_files'] ) {
		pageObj.buttonEventBefore['Add_files'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if ( Dropzone && !Dropzone.isBrowserSupported() ) {
	$('input[type="file"]', '.dz-browser-not-supported').trigger('click');
} else { 
	$('.dropzone').click();
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['Add_files'] ) {
		pageObj.buttonEventAfter['Add_files'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Add_files"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Add_files" + "_" + Runner.genId();
		
		// create object
		var button_Add_files = new Runner.form.Button({
			id: this.id ,
			btnName: "Add_files"
		});
		
		// init
		button_Add_files.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

