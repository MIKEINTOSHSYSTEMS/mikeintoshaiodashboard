/**
*
*/

function initRecType(RecVal, pageObj){
	if(RecVal == 'Never'){
		$('div[data-field=RecurOnValue]').hide();
		$('div[data-field=RecurAfterValue]').hide();
	}
	if(RecVal == 'On'){
		$('div[data-field=RecurOnValue]').show();
		$('div[data-field=RecurAfterValue]').hide();
		$('div[data-field=RecurOnValue]').css("padding-top","25px");
	}
	if(RecVal == 'After'){
		$('div[data-field=RecurOnValue]').hide();
		$('div[data-field=RecurAfterValue]').show();
		$('div[data-field=RecurAfterValue]').css("padding-top","25px");
	}
}
function initPeriod(periodVal, pageObj){

	if(periodVal == 'd')
	{
		$('div[data-field=PeriodDays]').show();
		//if (pageObj.win)
		//	pageObj.win.set('height', $(".fieldGrid").height()+124);
	}
	else
	{
		$('div[data-field=PeriodDays]').hide();
		//if (pageObj.win)
		//	pageObj.win.set('height', $(".fieldGrid").height()+124);
	}
};
/**
*
*/
function initRecurrence(recVal, ctrlPeriod, ctrlRecType, pageObj){
	
	if(recVal == '')
	{
		$('div[data-field=EndDate]').show();
		$('div[data-field=Period]').hide();
		$('div[data-field=PeriodDays]').hide();
		$('div[data-field=RecurType]').hide();
		$('div[data-field=RecurOnValue]').hide();
		$('div[data-field=RecurAfterValue]').hide();
		//if (pageObj.win){
		//	pageObj.win.set('height',  $(".fieldGrid").height()+124);
		//}
	}
	else
	{
		$('div[data-field=EndDate]').hide();
		$('div[data-field=Period]').show();
		$('div[data-field=RecurType]').show();
		if(ctrlRecType.getValue() == 'Never'){
			$('div[data-field=RecurOnValue]').hide();
			$('div[data-field=RecurAfterValue]').hide();
		}
		if(ctrlRecType.getValue() == 'On'){
			$('div[data-field=RecurOnValue]').show();
			$('div[data-field=RecurOnValue]').css("padding-top","25px");
			$('div[data-field=RecurAfterValue]').hide();
		}
		if(ctrlRecType.getValue() == 'After'){
			$('div[data-field=RecurOnValue]').hide();
			$('div[data-field=RecurAfterValue]').show();
			$('div[data-field=RecurAfterValue]').css("padding-top","25px");
		}
		if(ctrlPeriod && ctrlPeriod.getValue()=='d')
		{
			$('div[data-field=PeriodDays]').show();
			//if (pageObj.win) {
			//	pageObj.win.set('height', $(".fieldGrid").height()+124); 
			//}
		}
		//else {
			//if (pageObj.win){
			//	pageObj.win.set('height',  $(".fieldGrid").height()+124); 
			//}
		//}
		
	}
};
/**
*
*/
function initCategory(CategoryVal){
	if(CategoryVal == undefined){
		$("#categoryid").css("background-color","");
	}
	else
	{  
		$("#categoryid").css("background-color",CategoryVal);
	}
};
/**
*
*/
function initDayEvent(DayEventVal, pageid){
	if(DayEventVal == 'on')
	{
		$('#value_TimeField_'+pageid).prop( "disabled", true);
		$('#value_EndTime_'+pageid).prop( "disabled", true);
	}
	else
	{
		$('#value_TimeField_'+pageid).prop( "disabled",false);
		$('#value_EndTime_'+pageid).prop( "disabled",false);
	}
};
/**
*
*/
function initAddPage(pageid, ctrlDayEvent){
	//$('#EndDate').hide();
	//$('div[data-field=Period]').hide();
	//$('div[data-field=PeriodDays]').hide();
	
	if(ctrlDayEvent && ctrlDayEvent.getValue()=='on')
	{
		$('#value_TimeField_'+pageid).prop("disabled", true);
		$('#value_EndTime_'+pageid).prop("disabled", true);
	}
	else
	{
		$('#value_TimeField_'+pageid).prop("disabled", false);
		$('#value_EndTime_'+pageid).prop("disabled", false);
	}
}

/**
*
*/
function initEditPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, ctrlRecType, pageObj){
	
	if(ctrlDayEvent && ctrlDayEvent.getValue()=='on')
	{
		$('#value_TimeField_'+pageid).prop("disabled", true);
		$('#value_EndTime_'+pageid).prop("disabled", true);
	}
	else
	{
		$('#value_TimeField_'+pageid).prop('disabled',false);
		$('#value_EndTime_'+pageid).prop('disabled',false);
	}
	if(!ctrlRecurrence || ctrlRecurrence.getValue()=='')
	{
		$('div[data-field=EndDate]').show();
		$('div[data-field=RecurType]').hide();
		$('div[data-field=RecurOnValue]').hide();
		$('div[data-field=RecurAfterValue]').hide();
		$('div[data-field=Period]').hide();
		$('div[data-field=PeriodDays]').hide();
		
	}
	else
	{
		$('div[data-field=EndDate]').hide();
		$('div[data-field=RecurType]').show();
		$('div[data-field=Period]').show();
		if(ctrlPeriod && ctrlPeriod.getValue()=='d')
		{
			$('div[data-field=PeriodDays]').show();
		}
		else {
			$('div[data-field=PeriodDays]').hide();
		}
		if(ctrlRecType.getValue() == 'Never'){
			$('div[data-field=RecurOnValue]').hide();
			$('div[data-field=RecurAfterValue]').hide();
		}
		if(ctrlRecType.getValue() == 'On'){
			$('div[data-field=RecurOnValue]').show();
			$('div[data-field=RecurAfterValue]').hide();
			$('div[data-field=RecurOnValue]').css("padding-top","25px");
		}
		if(ctrlRecType.getValue() == 'After'){
			$('div[data-field=RecurOnValue]').hide();
			$('div[data-field=RecurAfterValue]').show();
			$('div[data-field=RecurAfterValue]').css("padding-top","25px");
		}
	}
}

function initViewPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, ctrlRecType, pageObj){
	if(ctrlDayEvent && ctrlDayEvent.getValue()=='<img src="images/check_yes.gif" border="0">')
	{
		$("[data-field=TimeField]").parent("div").parent("td").hide();
		$("[data-field=EndTime]").parent("div").parent("td").hide();

	}
	if(!ctrlRecurrence || ctrlRecurrence.getValue()=='<img src="images/check_no.gif" border="0">')
	{
		$('div[data-field=RecurType]').hide();
		$('div[data-field=RecurOnValue]').hide();
		$('div[data-field=RecurAfterValue]').hide();
		$('div[data-field=Period]').hide();
		$('div[data-field=PeriodDays]').hide();
	}
	else
	{
		$('div[data-field=EndDate]').hide();
		$('div[data-field=RecurType]').show();
		$('div[data-field=Period]').show();
		if(ctrlPeriod && ctrlPeriod.getValue()=='Daily')
		{
			$('div[data-field=PeriodDays]').show();
		}
		else {
			$('div[data-field=PeriodDays]').hide();
		}
		if(ctrlRecType.getValue() == 'Never'){
			$('div[data-field=RecurOnValue]').hide();
			$('div[data-field=RecurAfterValue]').hide();
		}
		if(ctrlRecType.getValue() == 'On'){
			$('div[data-field=RecurOnValue]').show();
			$('div[data-field=RecurAfterValue]').remove();
		}
		if(ctrlRecType.getValue() == 'After'){
			$('div[data-field=RecurOnValue]').remove();
			$('div[data-field=RecurAfterValue]').show();
		}
	}
}

function addEventinPopup(start,end,pageObj,proxy,jsEvent){
	if(jsEvent.target){
		var str = ''+jsEvent.target;
		if(str.indexOf("http")>-1)
			return;
	} 
	var view = $('#calendar').fullCalendar('getView');
	userid = proxy["userid"];
	inPast = proxy["inPast"];
	if(userid=="Guest")
		return;
	if(inPast==0){
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!

		var yyyy = today.getFullYear();
		if(dd<10){
			dd='0'+dd;
		} 
		if(mm<10){
			mm='0'+mm;
		} 
		var today = yyyy+'-'+mm+'-'+dd;
		var currDate = Date.parse(today);
		var stDate = Date.parse(start.format());
		if(currDate>stDate)
			return false;
	}
		var strStart = start.format();
	var arr = strStart.split("T");
	var resStart = arr[0].split("-");
	var timeStart = arr[1];
	
	var strEnd = end.format();
	arr = strEnd.split("T");
	
	if(view.name == "month" || view.name == "year"){
		var resEnd = arr[0].split("-");
		var dt = new Date(resEnd[0],resEnd[1]-1,resEnd[2]);
		dt.setDate(dt.getDate() - 1);
		arr[0] = dt.getFullYear()+"-"+ ('0' + (dt.getMonth() + 1)).slice(-2)+"-"+('0' + dt.getDate()).slice(-2);
	}
	
	var resEnd = arr[0].split("-");
	var timeEnd = arr[1];
	
	
	var win = Runner.displayPopup( {
		url: "mtmeetings_add.php?pmode=window&start="+resStart[0]+"-"+resStart[1]+"-"+resStart[2],
		width: 900,
		height: 800,
		header: "<span style='font-size:18px'><b>Add Meeting</b></span>",
		afterCreate: function(win) {
			$(".modal-footer").hide();
		},
		afterClose: function(){
			if($('#calendar').length>0){
				$.post("calcalendar_list.php",{
					a:'monthly'
				})
				.done(function(txt){
					eventData = JSON.parse(txt);
					$('#calendar').fullCalendar('removeEvents');
					$('#calendar').fullCalendar( 'addEventSource', eventData )
				});
			}
		}
	});
	
	
	/*calendarData = {
		mon: resStart[1],
		yr: resStart[0],
		days: resStart[2],
		monEnd: resEnd[1],
		yrEnd: resEnd[0],
		daysEnd: resEnd[2],
		timeStart: timeStart,
		timeEnd: timeEnd
	};

	

	pageParams = Runner.pages.AddPage.prototype.getOpenPageParams.call( pageObj, pageObj.id, null, calendarData );
	Runner.pages.PageManager.openPage( pageParams );*/
}

function editEventinPopup(calEvent, pageObj){
	if(calEvent.className == "holidays")
		return;

//	if( calEvent.editable )
//		Runner.Calendar.editButtonsClickHandler(calEvent, pageObj);
//	else
		//Runner.Calendar.viewButtonsClickHandler(calEvent, pageObj);
	var win = Runner.displayPopup( {
			url: "mtmeetings_view.php?pmode=window&editid1="+calEvent.id,
			width: 900,
			height: 700,
			header: "<span style='font-size:18px'><b>View Meeting</b></span>",
			afterCreate: function(win) {
				$(".modal-footer").hide();
			},
			afterClose: function(){
				if($('#calendar').length>0){
					$.post("calcalendar_list.php",{
						a:'monthly'
					})
					.done(function(txt){
						eventData = JSON.parse(txt);
						$('#calendar').fullCalendar('removeEvents');
						$('#calendar').fullCalendar( 'addEventSource', eventData )
					});
				}
			}
		});
	
	return;
}

function dropEvent(event, mode){
	
	if(event.end && event.end != null)
		end = event.end.format();
	else
		end = moment(event.start).add(2, "h").format("YYYY-MM-DDTHH:mm:ss");
	if(event.allDay==true)
		end = moment(end).add(-1, "d").format();
	$.post("calcalendar_list.php",{
				a:'drop',
				id:event.id,
				start:event.start.format(),
				end: end,
				currDate: event.currDate,
				mode: mode,
				allDay: event.allDay
			})
			.done(function(txt){
				if(txt == "reload"){
					$.post("calcalendar_list.php",{
						a:'monthly',
						view:localStorage.getItem("fcDefaultView") !== null ? localStorage.getItem("fcDefaultView") : "month"
					})
					.done(function(txt){
						eventData = JSON.parse(txt);
						$("#calendar").fullCalendar('removeEvents');
						$('#calendar').fullCalendar( 'addEventSource', eventData )
					});
				}
			});
}

function moreClicked(cellInfo, jsEvent) {
	$("#calendar").fullCalendar( 'gotoDate', cellInfo.date.format());
	$('#calendar').fullCalendar('changeView','agendaDay');
}

function moveToDay(date){
	$('#calendar').fullCalendar( 'changeView', 'agendaDay' );
	$('#calendar').fullCalendar( 'gotoDate', date );
}