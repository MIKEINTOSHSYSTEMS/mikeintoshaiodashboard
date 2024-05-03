Runner.buttonEvents["Download"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Download';
	
	if ( !pageObj.buttonEventBefore['Download'] ) {
		pageObj.buttonEventBefore['Download'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Download'] ) {
		pageObj.buttonEventAfter['Download'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var n = $("input[name^='selection']:checked").length;
$('[name="selection[]"]').prop('checked', false);
$("#chooseAll_"+pageid).prop("checked",false);
Runner.docManager.toggleButtonEnabledState("delete", false);
Runner.docManager.toggleButtonEnabledState("Download", false);
if (n>0) {
	location.href='getzip.php';
}
		}
	}
	
	$('a[id="Download"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Download" + "_" + Runner.genId();
		
		// create object
		var button_Download = new Runner.form.Button({
			id: this.id ,
			btnName: "Download"
		});
		
		// init
		button_Download.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

