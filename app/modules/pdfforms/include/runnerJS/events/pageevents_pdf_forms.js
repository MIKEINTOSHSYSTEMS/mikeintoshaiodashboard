	

Runner.pages.PageSettings.addPageEvent('pdf_forms', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("a#sql_query").fancybox({
			fitToView: false,
					autoSize: false,
					width : 800,
					height : 550,
					overlayShow: true
		});

$("#value_multifields_1").bind("click", function(){
	$("[id^=sqlfield_]").each(function(){
		$(this).attr("isOver","");
	});
});


$(".delete").bind("click", function(){
	$("#detailPreview2").hide();
	$("[data-fieldname='pdffile']").hide();
	$("[data-itemid='custom_button1']").hide();
	$("#detailPreview2").parent("div").html(Runner.getCustomLabel("save_record_message"));
});;
});

//	AJAX snippets

// fields events
/**
 * the context is to be edit control object
 * @param {object} pageObj
 * @param {string} pageid 	The page's or row's id
 */
Runner.pages.fieldsEvents["editing_sql_query"] = function( pageObj, pageid, row ) {
	if ( row ) {
		row = new Runner.AjaxRow( pageObj, row );
	}
	var ret, reqParams,
		ctrl = this,
		fieldsData = {},
		params = {},
		ajax = new Runner.form.Button({ id: 'editing_sql_query', btnName: 'editing_sql_query' }),
		before = function() {
			params["value"] = this.getValue();
params["id"] = pageObj.keys[0];
$(".glyphicon-remove").click();
		},
		after = function( result ) {
			if(result["fields"]){
	$("[id^=sqlfield_]").each(function(){
		$(this).attr("isOver","");
	});
}
		},
		submit = function() {
			params["table"] = "pdf_forms";
			params["field"] = ctrl.fieldName;
			params.page = pageObj.pageName;
			
			( Runner.controls.ControlStorage.byId( pageid ) || [] ).forEach( function( ctrl ) {
				if ( !( ctrl instanceof  Runner.controls.MultiUploadField ) && !( ctrl instanceof Runner.controls.FileControl ) ) {
					fieldsData[ ctrl.fieldName ] = ctrl.getStringValue();
				}
			});
			
			reqParams = {
				params: JSON.stringify( params ), 
				event: "editing_sql_query",
				pageType: pageObj.pageType,
				keys: JSON.stringify( pageObj.keys ? pageObj.keys : ( row && row.getKeys() ) ),
				fieldsData: JSON.stringify( fieldsData )
			};
			
			if ( pageObj.masterTable ) {
				reqParams.masterTable = pageObj.masterTable;
				reqParams = Runner.apply( reqParams, pageObj.masterKeys );
			}			
			
			$.post( Runner.getPageUrl("buttonhandler"), reqParams, function( result ) {
				var _result;
				try {
					_result = JSON.parse( result );
				} catch(e) {				
					Runner.displayGenericAjaxError( result );				
				}
				// execute EventAfter code
				after.call( ctrl, _result );				
			})
			.fail( function( jqXHR, textStatus, errorThrown ) {
				Runner.displayGenericAjaxError( jqXHR.responseText || textStatus + ' ' + errorThrown  );
			});			

			submit = function(){};
		};
	
	ajax.submitHandler = submit;
	ajax.submit = submit;
	// execute EventBefore code	
	ret = before.call( this );
	if ( ret === false ) {
		return;
	}

	submit();
};
