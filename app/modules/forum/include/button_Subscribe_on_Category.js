Runner.buttonEvents["Subscribe_on_Category"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Subscribe_on_Category';
	
	if ( !pageObj.buttonEventBefore['Subscribe_on_Category'] ) {
		pageObj.buttonEventBefore['Subscribe_on_Category'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["unsubscribe"] = $(ctrl.elemsForEvent).hasClass("unsubscribe");

		}
	}
	
	if ( !pageObj.buttonEventAfter['Subscribe_on_Category'] ) {
		pageObj.buttonEventAfter['Subscribe_on_Category'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if( result["unsubscribe"] == true){
	$("[id^='Subscribe_on_Category']").html("Subscribe to Category");
	$("[id^='Subscribe_on_Category']").removeClass("unsubscribe");
}
else{
	$("[id^='Subscribe_on_Category']").html("Unsubscribe from category");
	$("[id^='Subscribe_on_Category']").addClass("unsubscribe");
}

ctrl.setMessage("<span style='color:blue'>List of subscriptions updated</span>");
		}
	}
	
	$('a[id="Subscribe_on_Category"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Subscribe_on_Category" + "_" + Runner.genId();
		
		// create object
		var button_Subscribe_on_Category = new Runner.form.Button({
			id: this.id ,
			btnName: "Subscribe_on_Category"
		});
		
		// init
		button_Subscribe_on_Category.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

