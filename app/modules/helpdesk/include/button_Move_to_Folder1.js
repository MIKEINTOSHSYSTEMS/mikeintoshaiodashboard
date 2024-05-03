Runner.buttonEvents["Move_to_Folder1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Move_to_Folder1';
	
	if ( !pageObj.buttonEventBefore['Move_to_Folder1'] ) {
		pageObj.buttonEventBefore['Move_to_Folder1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if($("[id^=check1_]:checked").length==0 && ajax.pageObj.tName != "hd_messages"){
	swal(Runner.getCustomLabel("please_select"));
	return false;
}

$(".popupmenu").hide();

var w = "628px";
if(ajax.pageObj.tName == "hd_messages")
	w = "558px";
$("#popup_folder").css("left",ctrl.elem.position().left).css("top","38px");
$("#popup_folder").show();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Move_to_Folder1'] ) {
		pageObj.buttonEventAfter['Move_to_Folder1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Move_to_Folder1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Move_to_Folder1" + "_" + Runner.genId();
		
		// create object
		var button_Move_to_Folder1 = new Runner.form.Button({
			id: this.id ,
			btnName: "Move_to_Folder1"
		});
		
		// init
		button_Move_to_Folder1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

