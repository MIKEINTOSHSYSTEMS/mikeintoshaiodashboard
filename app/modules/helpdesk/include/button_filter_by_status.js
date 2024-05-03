Runner.buttonEvents["filter_by_status"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'filter_by_status';
	
	if ( !pageObj.buttonEventBefore['filter_by_status'] ) {
		pageObj.buttonEventBefore['filter_by_status'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
$(".popupmenu").hide();
var w = "308px";
$("#popup_status_filter").css("left",ctrl.elem.position().left).css("top","38px");
$("#popup_status_filter").show();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['filter_by_status'] ) {
		pageObj.buttonEventAfter['filter_by_status'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="filter_by_status"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "filter_by_status" + "_" + Runner.genId();
		
		// create object
		var button_filter_by_status = new Runner.form.Button({
			id: this.id ,
			btnName: "filter_by_status"
		});
		
		// init
		button_filter_by_status.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

