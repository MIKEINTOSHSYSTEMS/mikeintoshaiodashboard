Runner.buttonEvents["Create_chart"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Create_chart';
	
	if ( !pageObj.buttonEventBefore['Create_chart'] ) {
		pageObj.buttonEventBefore['Create_chart'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
//params["id"] = pageObj.keys[0];
location.href=Runner.pages.getUrl('chat_history','add')+"userid="+pageObj.keys[0];
return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Create_chart'] ) {
		pageObj.buttonEventAfter['Create_chart'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Create_chart"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Create_chart" + "_" + Runner.genId();
		
		// create object
		var button_Create_chart = new Runner.form.Button({
			id: this.id ,
			btnName: "Create_chart"
		});
		
		// init
		button_Create_chart.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

