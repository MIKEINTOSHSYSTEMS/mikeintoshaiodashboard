Runner.buttonEvents["stopAudio"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'stopAudio';
	
	if ( !pageObj.buttonEventBefore['stopAudio'] ) {
		pageObj.buttonEventBefore['stopAudio'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
pageObj.toggleItem("stop_audio", false );
pageObj.toggleItem("start_audio", true );

$("#write_text").prop("disabled",false);
$("#Send_4").removeClass("disabled");
$("#New_Button_5").removeClass("disabled");

stopRecording();

return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['stopAudio'] ) {
		pageObj.buttonEventAfter['stopAudio'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);

		}
	}
	
	$('a[id="stopAudio"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "stopAudio" + "_" + Runner.genId();
		
		// create object
		var button_stopAudio = new Runner.form.Button({
			id: this.id ,
			btnName: "stopAudio"
		});
		
		// init
		button_stopAudio.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

