/**
 * Calendar buttons related functions
 */
Runner.Calendar = {

	basicCalendarData: {},
	
	/**
	 * @param {object} pageObj
	 * @param {object} oldPageObj
	 */	
	resizeAndMoveWindow: function( pageObj, oldPageObj ) {
		if ( pageObj.openMode !== Runner.pages.constants.OPENMODE_POPUP || !pageObj.win || !oldPageObj.win ) {
			return;
		}
		
		var widget = oldPageObj.win.get("boundingBox"),
			$widgetNode = $( widget.getDOMNode() ),
			actualHeight = $widgetNode.outerHeight(); 
		
		oldPageObj.win.syncXY();
		pageObj.minHeight = oldPageObj.minHeight;
		pageObj.win.show();

		pageObj.minHeight = Math.max( actualHeight, pageObj.minHeight);
		pageObj.setWindowPositionAndSize( $widgetNode.outerWidth(), pageObj.minHeight, oldPageObj.win.get("xy") );
		
		pageObj.winIsAutomaticallyCorrected = true;	
	},

	/**
	 * @param {DOMelem} link
	 * @param {object} pageObj
	 */
	
	mouseGetHandler: function(e) {
		e = e || window.event;

		if ( e.pageX == null && e.clientX != null ) { 
			var html = document.documentElement;
			var body = document.body;
		
			e.pageX = e.clientX + (html && html.scrollLeft || body && body.scrollLeft || 0) - (html.clientLeft || 0);
			e.pageY = e.clientY + (html && html.scrollTop || body && body.scrollTop || 0) - (html.clientTop || 0);
		}

		return {
			x: e.pageX,
			y: e.pageY
		};
	},
	
	viewButtonsClickHandler: function(calEvent, pageObj) {
		var pageParams = Runner.pages.ViewPage.prototype.getOpenPageParams.call( pageObj, [calEvent.id], -1, null, "");  
		pageParams["editable"] = calEvent.editable;
		Runner.pages.PageManager.openPage(pageParams);
		return false;
	},
	
	/**
	 * @param {jQuery Event object} e
	 */
	editButtonsClickHandler: function(calEvent, pageObj) {
		var pageParams = Runner.pages.EditPage.prototype.getOpenPageParams.call( pageObj, [calEvent.id], -1, "" );
		Runner.pages.PageManager.openPage( pageParams );
		return false;
	},

	/**
	 *
	 */
	moveMonthlyPopupWin: function( win, x, y ) {	
		if ( !win || !x || !y ) {
			return;
		}
		
		var curWindowSize = Runner.getWindowDimensions(),
			winHeight = win.get('height'),
			winWidth = win.get('width');
		
		x = x - win.get('width') / 2;	
		y =  y > winHeight ? y - winHeight - 10 : y + 10;

		
		if ( (y + winHeight) > curWindowSize.height ) {
			y = curWindowSize.height - winHeight - 10;
		}
		
		if ( ( x + winWidth ) > curWindowSize.width ) {
			x = curWindowSize.width - winWidth - 10;
		}
		
		x = x < 0 ? 0 : x;
	
		win.move( x, y );
	},
};

/**
 *
 */
Runner.Calendar.overridePagesGetParamsMethods = function () {
	/**
	 * Override the ViewPage's getOpenPageParams using its original code
	 */
	Runner.pages.ViewPage.prototype.getOpenPageParams = ( function( _getOpenPageParams ) {
		return function( keys, rowId, pObj, calendarData ) {
			var pageObj = this, /* the context could be not only an view page instance */
				userDefined = Runner.Calendar.basicCalendarData.userDefined,
				inlineObj, params, i, j, keyFields, failed;

			calendarData = calendarData || {};	
			
			if ( !this.inlineObjectParams ) {
				this.inlineObjectParams = {
					getInlineObject: function() {
						// the context is a list page object
						return pageObj.inlineAdd;
					}
				}
			}
			
			inlineObj = this.inlineObjectParams.getInlineObject();

			if ( !userDefined && rowId === -1 || rowId === undefined ) {
				for ( i = 0; i < inlineObj.rows.length; i++ ) {
					failed = false;
					for ( j = 0; j < inlineObj.rows[ i ].keys.length; j++ ) {
						if ( keys[j] != inlineObj.rows[ i ].keys[j] ) {
							failed = true;
							break;
						}
					}
					if ( !failed ) {
						rowId = inlineObj.rows[ i ].id;
						keyFields = inlineObj.rows[ i ].keyFields;
						break;
					}
				}
			}
			
			this.inlineObjectParams.rowId = rowId;
			
			if ( userDefined )
				this.keyFields = [ Runner.Calendar.basicCalendarData.keyF ];

			params = _getOpenPageParams.apply( this, arguments );
			
			params.keyFields = params.keyFields || keyFields;
			params.baseParams = Runner.apply( params.baseParams, {
					mon: calendarData.mon,
					yr: calendarData.yr,
					days: calendarData.days			
				});
			
			if ( userDefined ) {
				params.tName = pageObj.tName;
				params.baseParams.table = Runner.Calendar.basicCalendarData.tName;
				params.keyFields = [ Runner.Calendar.basicCalendarData.keyF ];
			}
			
			params.afterCreateHn = function() {
				if ( pageObj.win ) {
					Runner.Calendar.resizeAndMoveWindow( this, pageObj );
					pageObj.win.destroy( true );
				}			
			};
			
			return params;	
		};
	}( Runner.pages.ViewPage.prototype.getOpenPageParams ));


	/**
	 * Override the EditPage's getOpenPageParams using its original code
	 */
	Runner.pages.EditPage.prototype.getOpenPageParams = ( function( _getOpenPageParams ) {
		return function( keys, rowId, message, inlineObj, calendarData ) { 
			var pageObj = this, /* the context could be not only an edit page instance */
				userDefined = Runner.Calendar.basicCalendarData.userDefined,
				inlineObj, params, failed, keyFields;

			calendarData = calendarData || {};	
			
			if ( !this.inlineObjectParams ) {
				/* the context is a list page instance */
				this.inlineObjectParams = {
					getInlineObject: function() {
						return pageObj.inlineEdit;
					}
				}
			}		

			var inlineObj = inlineObj || this.inlineObjectParams.getInlineObject();
			
			if ( !userDefined && rowId === -1 || rowId === undefined ) {
				for ( i = 0; i < inlineObj.rows.length; i++ ) {
					failed = false;
					for ( j = 0; j < inlineObj.rows[ i ].keys.length; j++ ) {
						if ( keys[j] != inlineObj.rows[ i ].keys[j] ) {
							failed = true;
							break;
						}
					}
					if ( !failed ) {
						rowId = inlineObj.rows[ i ].id;
						keyFields = inlineObj.rows[ i ].keyFields;
						break;
					}
				}		
			}
			
			if ( userDefined )
				this.keyFields = [ Runner.Calendar.basicCalendarData.keyF ];

			params = _getOpenPageParams.apply( this, arguments );	
					
			params.openMode = Runner.pages.constants.OPENMODE_POPUP;
			params.keyFields = params.keyFields || keyFields;
			params.baseParams = Runner.apply( params.baseParams, {
					mon: calendarData.mon,
					yr: calendarData.yr,
					days: calendarData.days,
					recur: calendarData.recur		
				});
			
			if ( userDefined ) {
				params.tName = pageObj.tName;
				params.baseParams.table = Runner.Calendar.basicCalendarData.tName;
				params.keyFields = [ Runner.Calendar.basicCalendarData.keyF ];
			}		
			
			
			params.afterCreateHn = function() {				
				if ( message ) {
					this.displayHalfPreparedMessage( message );
					this.showBrick('message');
				}
				
				if ( pageObj.win ) {
					Runner.Calendar.resizeAndMoveWindow( this, pageObj );			
					pageObj.keepLocking = true;	
					pageObj.win.destroy( true );
					this.close();
				}			
			};				
					
			return params;			
		};
	}( Runner.pages.EditPage.prototype.getOpenPageParams ));


	/**
	 * Add getOpenPageParams method to Runner.pages.AddPage instances
	 * AddPage version 8.2 has no own getOpenPageParams method.
	 * the context could be not only an add page instance
	 */
	Runner.pages.AddPage.prototype.getOpenPageParams = function( parId, afterCreateHn, calendarData ) {
		var userDefined = Runner.Calendar.basicCalendarData.userDefined, 
			pageObj = Runner.pages.PageManager.getAt( this.tName, parId || this.baseParams.parId ),
			inlineObj =	pageObj.inlineAdd || this.inlineObjectParams.getInlineObject(),
			pageParams = {
				modal: true, 
				tName: pageObj.tName, 
				pageType: Runner.pages.constants.PAGE_ADD, 
				editType: Runner.pages.constants.ADD_POPUP,
				baseParams: {
					parId: pageObj.id,
					table: pageObj.tName,
					editType: Runner.pages.constants.ADD_POPUP,
					mon: calendarData && calendarData.mon || this.baseParams.mon,
					yr: calendarData && calendarData.yr || this.baseParams.yr,
					days: calendarData && calendarData.days || this.baseParams.days,
					monEnd: calendarData && calendarData.monEnd || calendarData.mon || this.baseParams.monEnd,
					yrEnd: calendarData && calendarData.yrEnd || calendarData.yr || this.baseParams.yrEnd,
					daysEnd: calendarData && calendarData.daysEnd || calendarData.days || this.baseParams.daysEnd,
					timeStart: calendarData && calendarData.timeStart,
					timeEnd: calendarData && calendarData.timeEnd
				},
				inlineObjectParams: {
					getInlineObject: function() {
						return pageObj.inlineAdd;
					}
				},
				afterSave: {
					fn: function( respObj, formObj, fieldControls, page ) {
						if ( !respObj.success ) {
							pageObj.showBrick("message");
							
							$("div.rnr-message")
								.html( respObj.message );

							if ( !userDefined ) {
								$('#Period')
									.toggle( Runner.getControl(page.id, 'Recurrence').getValue() != '' );
							}
							
							return false;					
						}
						var addedRow = inlineObj.addRowToGrid( respObj, true );
						pageObj.initNewRowButtons( addedRow );
					},
					scope: pageObj
				}			
			};	
		return pageParams;
	};
}


