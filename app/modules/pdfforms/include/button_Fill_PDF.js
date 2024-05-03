Runner.buttonEvents["Fill_PDF"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Fill_PDF';
	
	if ( !pageObj.buttonEventBefore['Fill_PDF'] ) {
		pageObj.buttonEventBefore['Fill_PDF'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["id"] = pageObj.keys[0];
var ctrlSQL = Runner.getControl(1, 'sqlquery');
params["sqlquery"] = ctrlSQL.getValue();
params["stamp"] = $("#formStamp_formfile_1").val();

		}
	}
	
	if ( !pageObj.buttonEventAfter['Fill_PDF'] ) {
		pageObj.buttonEventAfter['Fill_PDF'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if(result["filename"]){
	$("#readonly_value_pdffile_1").html(result["filename"]);
	$("#value_pdffile_1").val(result["filename"]);
	$("[id^='Fill_PDF']").addClass("filled");
}

if(result["error"])
	$("[id^='Fill_PDF']").addClass("error");

		}
	}
	
	$('a[id="Fill_PDF"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Fill_PDF" + "_" + Runner.genId();
		
		// create object
		var button_Fill_PDF = new Runner.form.Button({
			id: this.id ,
			btnName: "Fill_PDF"
		});
		
		// init
		button_Fill_PDF.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

