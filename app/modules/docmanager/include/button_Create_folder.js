Runner.buttonEvents["Create_folder"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Create_folder';
	
	if ( !pageObj.buttonEventBefore['Create_folder'] ) {
		pageObj.buttonEventBefore['Create_folder'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Runner.docManager.createFolder();

		}
	}
	
	if ( !pageObj.buttonEventAfter['Create_folder'] ) {
		pageObj.buttonEventAfter['Create_folder'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Create_folder"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Create_folder" + "_" + Runner.genId();
		
		// create object
		var button_Create_folder = new Runner.form.Button({
			id: this.id ,
			btnName: "Create_folder"
		});
		
		// init
		button_Create_folder.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

