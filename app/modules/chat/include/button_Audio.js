Runner.buttonEvents["Audio"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Audio';
	
	if ( !pageObj.buttonEventBefore['Audio'] ) {
		pageObj.buttonEventBefore['Audio'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
pageObj.toggleItem("stop_audio", true );
pageObj.toggleItem("start_audio", false );
$("#write_text").prop("disabled",true);
$("#Send_4").addClass("disabled");
$("#New_Button_5").addClass("disabled");

startRecording();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Audio'] ) {
		pageObj.buttonEventAfter['Audio'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="Audio"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Audio" + "_" + Runner.genId();
		
		// create object
		var button_Audio = new Runner.form.Button({
			id: this.id ,
			btnName: "Audio"
		});
		
		// init
		button_Audio.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

