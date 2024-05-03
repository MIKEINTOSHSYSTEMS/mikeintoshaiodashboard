Runner.buttonEvents["New_Ticket1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Ticket1';
	
	if ( !pageObj.buttonEventBefore['New_Ticket1'] ) {
		pageObj.buttonEventBefore['New_Ticket1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var url = Runner.pages.getUrl("hd_messages","add")+"?new_ticket=1";
if( typeof proxy["folder_id"] !== "undefined" )
	url+= "&folder_id="+proxy["folder_id"];
window.location.href = url;
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Ticket1'] ) {
		pageObj.buttonEventAfter['New_Ticket1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Ticket1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Ticket1" + "_" + Runner.genId();
		
		// create object
		var button_New_Ticket1 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Ticket1"
		});
		
		// init
		button_New_Ticket1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

