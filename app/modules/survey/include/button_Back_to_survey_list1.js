Runner.buttonEvents["Back_to_survey_list1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Back_to_survey_list1';
	
	if ( !pageObj.buttonEventBefore['Back_to_survey_list1'] ) {
		pageObj.buttonEventBefore['Back_to_survey_list1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Back_to_survey_list1'] ) {
		pageObj.buttonEventAfter['Back_to_survey_list1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
location.href = "sv_report_list.php?svid=" + result["txt"];

		}
	}
	
	$('a[id="Back_to_survey_list1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Back_to_survey_list1" + "_" + Runner.genId();
		
		// create object
		var button_Back_to_survey_list1 = new Runner.form.Button({
			id: this.id ,
			btnName: "Back_to_survey_list1"
		});
		
		// init
		button_Back_to_survey_list1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

