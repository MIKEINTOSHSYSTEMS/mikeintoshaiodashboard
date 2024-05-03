Runner.buttonEvents["Mark_as_Solved"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Mark_as_Solved';
	
	if ( !pageObj.buttonEventBefore['Mark_as_Solved'] ) {
		pageObj.buttonEventBefore['Mark_as_Solved'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["topic_id"] = pageObj.masterKeys.masterkey1;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Mark_as_Solved'] ) {
		pageObj.buttonEventAfter['Mark_as_Solved'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
ctrl.elem.html("<i class='fa fa-check'></i> Solved");
		}
	}
	
	$('a[id="Mark_as_Solved"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Mark_as_Solved" + "_" + Runner.genId();
		
		// create object
		var button_Mark_as_Solved = new Runner.form.Button({
			id: this.id ,
			btnName: "Mark_as_Solved"
		});
		
		// init
		button_Mark_as_Solved.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

