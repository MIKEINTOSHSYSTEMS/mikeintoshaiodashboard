Runner.buttonEvents["Delete"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Delete';
	
	if ( !pageObj.buttonEventBefore['Delete'] ) {
		pageObj.buttonEventBefore['Delete'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if(confirm( Runner.getCustomLabel("deleteEvent") )){
	params["txt"] = pageObj.keys[0];
}
else
{
	return false;
}

		}
	}
	
	if ( !pageObj.buttonEventAfter['Delete'] ) {
		pageObj.buttonEventAfter['Delete'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
$('.close', window.parent.document).click();
$.post("calcalendar_list.php",{
	a:'monthly',
	view:localStorage.getItem("fcDefaultView") !== null ? localStorage.getItem("fcDefaultView") : "month"
})
.done(function(txt){
	eventData = JSON.parse(txt);
	$("#calendar", window.parent.document).fullCalendar('removeEvents');
	$('#calendar', window.parent.document).fullCalendar('addEventSource', eventData, true);
});
		}
	}
	
	$('a[id="Delete"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Delete" + "_" + Runner.genId();
		
		// create object
		var button_Delete = new Runner.form.Button({
			id: this.id ,
			btnName: "Delete"
		});
		
		// init
		button_Delete.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

