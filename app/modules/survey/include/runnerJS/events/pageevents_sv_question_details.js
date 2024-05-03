	

Runner.pages.PageSettings.addPageEvent('sv_question_details', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("a[name^=dp").hide();
pageObj.addNewRecordsToBottom = true;
// Place event code here.
// Use "Add Action" button to add code snippets.



this.on('afterInlineAdd', function( fieldsData ) {

	pageObj.reload({a:'reload'});

});

this.on('afterInlineEdit', function( fieldsData ) {

	pageObj.reload({a:'reload'});

});
;
});

//	AJAX snippets

// fields events
/**
 * the context is to be edit control object
 * @param {object} pageObj
 * @param {string} pageid 	The page's or row's id
 */
Runner.pages.fieldsEvents["sortorder_chane_answer_options1"] = function( pageObj, pageid, row ) {
	if ( row ) {
		row = new Runner.AjaxRow( pageObj, row );
	}
	var ret, reqParams,
		ctrl = this,
		fieldsData = {},
		params = {},
		ajax = new Runner.form.Button({ id: 'sortorder_chane_answer_options1', btnName: 'sortorder_chane_answer_options1' }),
		before = function() {
			params["value"] = this.getValue();
		},
		after = function( result ) {
			
		},
		submit = function() {
			params["table"] = "sv_question_details";
			params["field"] = ctrl.fieldName;
			params.page = pageObj.pageName;
			
			( Runner.controls.ControlStorage.byId( pageid ) || [] ).forEach( function( ctrl ) {
				if ( !( ctrl instanceof  Runner.controls.MultiUploadField ) && !( ctrl instanceof Runner.controls.FileControl ) ) {
					fieldsData[ ctrl.fieldName ] = ctrl.getStringValue();
				}
			});
			
			reqParams = {
				params: JSON.stringify( params ), 
				event: "sortorder_chane_answer_options1",
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
