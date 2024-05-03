Runner.buttonEvents["Add_Note"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Add_Note';
	
	if ( !pageObj.buttonEventBefore['Add_Note'] ) {
		pageObj.buttonEventBefore['Add_Note'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=saveLink]:visible").length==0){
	pageObj.inlineAdd.baseParams["add_note"]="true";
	pageObj.inlineAdd.inlineAdd();
	$("[data-record-id='"+pageObj.inlineAdd.rows[1].contextRowId+"']").addClass("add_note_inline");
}
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Add_Note'] ) {
		pageObj.buttonEventAfter['Add_Note'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Add_Note"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Add_Note" + "_" + Runner.genId();
		
		// create object
		var button_Add_Note = new Runner.form.Button({
			id: this.id ,
			btnName: "Add_Note"
		});
		
		// init
		button_Add_Note.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

