	

Runner.pages.PageSettings.addPageEvent('chat_settings', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("[id^=backToMenuButton]").hide();

$("[data-itemid^='Zoom_']").hide();
$("[data-itemid^='setvideo_']").hide();
ctrlv = Runner.getControl(pageid,"videoenable"); 
if(ctrlv.getValue() == "on"){
	$("[data-itemid^='Zoom_']").show();
	$("[data-itemid^='setvideo_']").show();
}

if(!$("[id^=filename_soundpath_]").val()){
	$("[data-itemid=sound_button]").find("a").attr("disabled",true);
}
else{
	$("#edit1_soundpath_0").css("margin-top","-10px");
	$("[data-itemid=sound_button]").find("a").attr("disabled",false);
}


;
});

//	AJAX snippets

// fields events
/**
 * the context is to be edit control object
 * @param {object} pageObj
 * @param {string} pageid 	The page's or row's id
 */
Runner.pages.fieldsEvents["select_provider"] = function( pageObj, pageid, row ) {
	if ( row ) {
		row = new Runner.AjaxRow( pageObj, row );
	}
	var ret, reqParams,
		ctrl = this,
		fieldsData = {},
		params = {},
		ajax = new Runner.form.Button({ id: 'select_provider', btnName: 'select_provider' }),
		before = function() {
			$("[data-itemid^='RingCentral_']").hide();
$("[data-itemid^='Zoom_']").hide();
$("[data-itemid^='MSGraph_']").hide();
$("[data-itemid^='GoogleMeet_']").hide();
$("[data-itemid^='WEBEX_']").hide();
var provider = this.getValue();
switch( provider ) {
  case "RingCentral":
    $("[data-itemid^='RingCentral_']").show();
    break;
  case "Zoom":
    $("[data-itemid^='Zoom_']").show();
    break;
  case "Microsoft Graph":
    $("[data-itemid^='MSGraph_']").show();
    break;
  case "Google Meet":
    $("[data-itemid^='GoogleMeet_']").show();
    break;
  case "WEBEX":
    $("[data-itemid^='WEBEX_']").show();
    break;
}
return false;
		},
		after = function( result ) {
			
		},
		submit = function() {
			params["table"] = "chat_settings";
			params["field"] = ctrl.fieldName;
			params.page = pageObj.pageName;
			
			( Runner.controls.ControlStorage.byId( pageid ) || [] ).forEach( function( ctrl ) {
				if ( !( ctrl instanceof  Runner.controls.MultiUploadField ) && !( ctrl instanceof Runner.controls.FileControl ) ) {
					fieldsData[ ctrl.fieldName ] = ctrl.getStringValue();
				}
			});
			
			reqParams = {
				params: JSON.stringify( params ), 
				event: "select_provider",
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
/**
 * the context is to be edit control object
 * @param {object} pageObj
 * @param {string} pageid 	The page's or row's id
 */
Runner.pages.fieldsEvents["check_video"] = function( pageObj, pageid, row ) {
	if ( row ) {
		row = new Runner.AjaxRow( pageObj, row );
	}
	var ret, reqParams,
		ctrl = this,
		fieldsData = {},
		params = {},
		ajax = new Runner.form.Button({ id: 'check_video', btnName: 'check_video' }),
		before = function() {
			$("[data-itemid^='Zoom_']").hide();
$("[data-itemid^='setvideo_']").hide();

if(this.getValue()){
   $("[data-itemid^='Zoom_']").show();
	$("[data-itemid^='setvideo_']").show();
}

	

return false;


		},
		after = function( result ) {
			

// Smaple:
ctrl.setValue( result["upper"] );

		},
		submit = function() {
			params["table"] = "chat_settings";
			params["field"] = ctrl.fieldName;
			params.page = pageObj.pageName;
			
			( Runner.controls.ControlStorage.byId( pageid ) || [] ).forEach( function( ctrl ) {
				if ( !( ctrl instanceof  Runner.controls.MultiUploadField ) && !( ctrl instanceof Runner.controls.FileControl ) ) {
					fieldsData[ ctrl.fieldName ] = ctrl.getStringValue();
				}
			});
			
			reqParams = {
				params: JSON.stringify( params ), 
				event: "check_video",
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
