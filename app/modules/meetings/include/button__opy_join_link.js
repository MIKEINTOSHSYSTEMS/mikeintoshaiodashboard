Runner.buttonEvents["_opy_join_link"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_opy_join_link';
	
	if ( !pageObj.buttonEventBefore['_opy_join_link'] ) {
		pageObj.buttonEventBefore['_opy_join_link'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['_opy_join_link'] ) {
		pageObj.buttonEventAfter['_opy_join_link'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var $temp = $("<input>");
$("body").append($temp);
$temp.val(result["link"]).select();
document.execCommand("copy");
$temp.remove();


		}
	}
	
	$('a[id="_opy_join_link"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_opy_join_link" + "_" + Runner.genId();
		
		// create object
		var button__opy_join_link = new Runner.form.Button({
			id: this.id ,
			btnName: "_opy_join_link"
		});
		
		// init
		button__opy_join_link.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

