Runner.buttonEvents["New_Ticket"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Ticket';
	
	if ( !pageObj.buttonEventBefore['New_Ticket'] ) {
		pageObj.buttonEventBefore['New_Ticket'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

var pageParams = Runner.pages.AddPage.prototype.getOpenPageParams.call( pageObj, [1], -1, null, "");  
console.log(pageParams);
pageParams.openMode = Runner.pages.constants.OPENMODE_POPUP;
pageParams.baseParams = {page: "add_mess"};
pageParams.tName = "hd_messages";
Runner.pages.PageManager.openPage(pageParams);
/*var win = Runner.displayPopup( {
   url: "hd_messages_add.php?page=add_mess",
   width: 800,
   height: 600,
   header: "<b>Add new message</b>",
	footer: "<a type='button' title='' class='btn btn-primary' id='saveTicket'>Save</a>&nbsp;&nbsp;<a type='button' title='' class='btn btn-default' id='closeTicket'>Close</a>",
	afterCreate: function(win) {
      window.win = win;
		$("#closeTicket").bind("click", function(){
			win.close();
		});
		$("#saveTicket").bind("click", function(){
			var iframe = $("[id^=popupIframe]").contents();
			$(iframe).find("[id^=saveButton]")[0].click();
		});
   }
});*/
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Ticket'] ) {
		pageObj.buttonEventAfter['New_Ticket'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Ticket"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Ticket" + "_" + Runner.genId();
		
		// create object
		var button_New_Ticket = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Ticket"
		});
		
		// init
		button_New_Ticket.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

