Runner.buttonEvents["mark_is_not_solved"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'mark_is_not_solved';
	
	if ( !pageObj.buttonEventBefore['mark_is_not_solved'] ) {
		pageObj.buttonEventBefore['mark_is_not_solved'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["topic_id"] = pageObj.masterKeys.masterkey1;
		}
	}
	
	if ( !pageObj.buttonEventAfter['mark_is_not_solved'] ) {
		pageObj.buttonEventAfter['mark_is_not_solved'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
ctrl.elem.html("<i class='fa fa-check'></i> Not Solved");
		}
	}
	
	$('a[id="mark_is_not_solved"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "mark_is_not_solved" + "_" + Runner.genId();
		
		// create object
		var button_mark_is_not_solved = new Runner.form.Button({
			id: this.id ,
			btnName: "mark_is_not_solved"
		});
		
		// init
		button_mark_is_not_solved.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

