Runner.buttonEvents["Copy_start_link"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Copy_start_link';
	
	if ( !pageObj.buttonEventBefore['Copy_start_link'] ) {
		pageObj.buttonEventBefore['Copy_start_link'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Copy_start_link'] ) {
		pageObj.buttonEventAfter['Copy_start_link'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var $temp = $("<input>");
$("body").append($temp);
$temp.val(result["link"]).select();
document.execCommand("copy");
$temp.remove();


		}
	}
	
	$('a[id="Copy_start_link"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Copy_start_link" + "_" + Runner.genId();
		
		// create object
		var button_Copy_start_link = new Runner.form.Button({
			id: this.id ,
			btnName: "Copy_start_link"
		});
		
		// init
		button_Copy_start_link.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

