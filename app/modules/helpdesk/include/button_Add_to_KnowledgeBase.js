Runner.buttonEvents["Add_to_KnowledgeBase"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Add_to_KnowledgeBase';
	
	if ( !pageObj.buttonEventBefore['Add_to_KnowledgeBase'] ) {
		pageObj.buttonEventBefore['Add_to_KnowledgeBase'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
var url = Runner.pages.getUrl("kbarticles","add");
var win = Runner.displayPopup({
   url: url,
   width: 800,
   height: 600,
   header: "<b>"+Runner.getCustomLabel("add_new_article")+"</b>",
	afterCreate: function(win) {
      window.popup = win;
		//first message in ticket
      var problem_text = pageObj.getAllRecords().pop().getFieldValue("body");
		var solution_text = row.getFieldValue("body");
      var iframe = $("[id^=popupIframe]").contents();
		$(iframe).find("[name^=value_Problem]").val(problem_text);
		if( problem_text !== solution_text){
			$(iframe).find("[name^=value_Solution]").val(solution_text);
		}
      
		
   }
});
return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Add_to_KnowledgeBase'] ) {
		pageObj.buttonEventAfter['Add_to_KnowledgeBase'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="Add_to_KnowledgeBase"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Add_to_KnowledgeBase" + "_" + Runner.genId();
		
		// create object
		var button_Add_to_KnowledgeBase = new Runner.form.Button({
			id: this.id ,
			btnName: "Add_to_KnowledgeBase"
		});
		
		// init
		button_Add_to_KnowledgeBase.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

