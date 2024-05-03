Runner.buttonEvents["Back_to_Folders"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Back_to_Folders';
	
	if ( !pageObj.buttonEventBefore['Back_to_Folders'] ) {
		pageObj.buttonEventBefore['Back_to_Folders'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
$(".popupmenu").hide();
$("#popup_go_to_folder").css("left",ctrl.elem.position().left).css("top","38px");
$("#popup_go_to_folder").show();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Back_to_Folders'] ) {
		pageObj.buttonEventAfter['Back_to_Folders'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Back_to_Folders"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Back_to_Folders" + "_" + Runner.genId();
		
		// create object
		var button_Back_to_Folders = new Runner.form.Button({
			id: this.id ,
			btnName: "Back_to_Folders"
		});
		
		// init
		button_Back_to_Folders.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

