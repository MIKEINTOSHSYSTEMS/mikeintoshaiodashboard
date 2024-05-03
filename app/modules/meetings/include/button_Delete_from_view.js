Runner.buttonEvents["Delete_from_view"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Delete_from_view';
	
	if ( !pageObj.buttonEventBefore['Delete_from_view'] ) {
		pageObj.buttonEventBefore['Delete_from_view'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if(confirm(Runner.getCustomLabel("deleteEvent"))){
	params["txt"] = pageObj.keys[0];
}
else
{
	return false;
}
		}
	}
	
	if ( !pageObj.buttonEventAfter['Delete_from_view'] ) {
		pageObj.buttonEventAfter['Delete_from_view'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
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
	
	$('a[id="Delete_from_view"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Delete_from_view" + "_" + Runner.genId();
		
		// create object
		var button_Delete_from_view = new Runner.form.Button({
			id: this.id ,
			btnName: "Delete_from_view"
		});
		
		// init
		button_Delete_from_view.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

