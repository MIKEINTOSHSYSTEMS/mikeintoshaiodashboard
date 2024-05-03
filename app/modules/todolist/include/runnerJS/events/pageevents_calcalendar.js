	

Runner.pages.PageSettings.addPageEvent('calcalendar', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$(".alert-warning").css("display","none");
Runner.Calendar.overridePagesGetParamsMethods();

if ( proxy["userDefined"] ) {
	Runner.Calendar.basicCalendarData = {
		userDefined: true,
		tName: proxy["calendarTName"],
		dateF: proxy["calendarDateField"],
		dateEndF: proxy["calendarEndDate"],
		recurF: proxy["calendarRecurrence"],
		keyF: proxy["calendarKey"]
	};
}	

$(document).ready(function() {
	var today = new Date();
	var dd = ""+today.getDate();
	if(dd.length==1)
		dd = "0"+dd;
	var mm = ""+(today.getMonth()+1);
	if(mm.length==1)
		mm = "0"+mm;
	var yyyy = today.getFullYear();
	var events, minTime = "00:00:00", maxTime = "24:00:00";
	var defaultView = (localStorage.getItem("fcDefaultView") !== null ? localStorage.getItem("fcDefaultView") : "month");	
	var defaultDate = (localStorage.getItem("fcDefaultDate") !== null ? localStorage.getItem("fcDefaultDate") : yyyy+'-'+mm+'-'+dd);	
	var formatdate = (proxy["formatdate"] == "d" ? "ddd D/M" : "ddd M/D");
	var formattime = (proxy["formattime"] == "12" ? "h:mma" : "H:mm");
 	$.post("calcalendar_list.php",{
		a:'monthly',
		view: defaultView,
		defdate: defaultDate
	})
	.done(function(txt){
		var selectable = true;
		var isRun = false;
		if(proxy["userid"]=="Guest")
			selectable = false;
		events = JSON.parse(txt);
		 $('#calendar').fullCalendar({
			themeSystem: 'bootstrap3',
			lang: proxy["lang"],
			header: {
			  left: 'prev,next today',
			  center: 'title',
			  right: 'year,month,agendaWeek,agendaDay'
			},
			defaultView: defaultView,
			viewRender: function (view, element) {
				$(".alert-warning").css("display","none");
				$(".fc-day").not(".fc-today").css("backgroundColor",proxy["defaultColor"]);
				if(view.name!="year" || proxy["FirstDayOfWeek"]!=1){
					$(".fc-sat").not(".fc-today").css("backgroundColor",proxy["WeekendColor"]);
					$(".fc-sat").css("borderColor","#ddd");
					$(".fc-sun").not(".fc-today").css("backgroundColor",proxy["WeekendColor"]);
					$(".fc-sun").css("borderColor","#ddd");
				}
				else{
					$(".fc-sat").not(".fc-today").css("backgroundColor",proxy["WeekendColor"]);
					$(".fc-sat").css("borderColor","#ddd");
					$(".fc-sun").not(".fc-today").css("backgroundColor",proxy["WeekendColor"]);
					$(".fc-sun").css("borderColor","#ddd");
				}
				$(".fc-day-header").css("backgroundColor","#fff");
				$(".fc-week").each(function(key,val){
					if($(this).find("td.fc-other-month").length == 14){
						$(this).css("visibility","hidden");
						$(this).css("height","0px");
						$(this).css("max-height","0px");
						$(this).css("min-height","0px");
					}
				});

				localStorage.setItem("fcDefaultView", view.name);
				
				ddate = view.start.format();
				p = ddate.indexOf("T");
				if(p>-1)
					ddate = ddate.substr(0,p);
				arr = ddate.split("-");
				
				if(view.name=="month" || view.name=="year"){
					if(arr[2]!=1){
						arr[2]=1;
						arr[1]++;
						if(arr[1]>12){
							arr[1]=1;
							arr[0]++;
						}
					}		
				}
				if(parseInt(arr[0])<10)
					arr[0] = "0"+parseInt(arr[0]);
				if(parseInt(arr[1])<10)
					arr[1] = "0"+parseInt(arr[1]);
				if(parseInt(arr[2])<10)
					arr[2] = "0"+parseInt(arr[2]);
				localStorage.setItem("fcDefaultDate", arr[0]+"-"+arr[1]+"-"+arr[2]);
				if(isRun){
					$.post("calcalendar_list.php",{
						a:'monthly',
						view:localStorage.getItem("fcDefaultView") !== null ? localStorage.getItem("fcDefaultView") : "month",
						defdate: arr[0]+"-"+arr[1]+"-"+arr[2]
					})
					.done(function(txt){
						eventData = JSON.parse(txt);
						$('#calendar').fullCalendar('removeEvents');
						$('#calendar').fullCalendar( 'addEventSource', eventData )
					});
				}
				else
					isRun = true;

				if(view.name=="agendaDay" || view.name=="agendaWeek"){
					var options = $('#calendar').fullCalendar('getView').options;
					options.eventLimit = false;
					$('#calendar').fullCalendar(options);
					$('#calendar').fullCalendar('option', 'height', document.documentElement.clientHeight-200);
				}
				else
					$('#calendar').fullCalendar('option', 'height', document.documentElement.clientHeight-100);
				$('#calendar').fullCalendar('option', { minTime: "03:00:00" });

			},
			defaultDate: defaultDate,
			firstDay:proxy["FirstDayOfWeek"],
			navLinks: true, // can click day/week names to navigate views
			nextDayThreshold: "00:00:00",
			editable: true,
			selectHelper: true,
			height: document.documentElement.clientHeight-200,
			yearColumns: 3,
			selectable: selectable,
			allDaySlot: true,
			select: function(start, end, jsEvent) {
				//addEventinPopup(start, end, pageObj, proxy, jsEvent);
			},
			eventClick: function(calEvent, jsEvent, view) {
				editEventinPopup(calEvent, pageObj);
			},
			eventDrop: function(event, delta, revertFunc) {
				dropEvent(event,"move");
			},
			eventResize: function(event, delta, revertFunc) {
				dropEvent(event,"resize");
			},
			eventLimit: true,
			eventLimitClick: function(cellInfo, jsEvent){
				moreClicked(cellInfo, jsEvent);
			},
			timeFormat: formattime,
			columnFormat: {
            week: formatdate
			},
			minTime:proxy["minTime"],
			maxTime:proxy["maxTime"],
			events: events
		 });
	});
});
;
});
	

Runner.pages.PageSettings.addPageEvent('calcalendar', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	
var ctrlDayEvent = Runner.getControl(pageid, 'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid, 'TimeField'),
	ctrlEndTime = Runner.getControl(pageid, 'EndTime'),
	ctrlSubject = Runner.getControl(pageid, 'Subject');



if(ctrlSubject)
	ctrlSubject.setFocus();


if(ctrlTimeField && ctrlEndTime ){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(var i = 0; i < times.length; i++)
	{
		ctrlTimeField.addOption( times[i].display, times[i].value );
		ctrlEndTime.addOption( times[i].display, times[i].value );
	}

	var view = $('#calendar').fullCalendar('getView');
	if(view.name == "month" || view.name == "year")
		ctrlTimeField.valueElem[0].selectedIndex = selectedTime;
	else
		ctrlTimeField.valueElem[0].selectedIndex = selectedTime-1;
	if(selectedEndTime == 0)
		ctrlEndTime.valueElem[0].selectedIndex = $('#value_TimeField_' + pageid).prop('selectedIndex') + 1;
	else
		ctrlEndTime.valueElem[0].selectedIndex = selectedEndTime;
}

initAddPage(pageid, ctrlDayEvent);


this.on("afterSave", function(e) {	
	$.post("calcalendar_list.php",{
		a:'monthly',
		view:localStorage.getItem("fcDefaultView") !== null ? localStorage.getItem("fcDefaultView") : "month"
	})
	.done(function(txt){
		eventData = JSON.parse(txt);
		$("#calendar").fullCalendar('removeEvents');
		$("#calendar").fullCalendar('addEventSource', eventData )
	});
}, this);

/*this.on("afterClose", function(e) {	
	if( localStorage.getItem("fcDefaultView") == "year")
		location.reload();
}, this);*/

if(ctrlDayEvent){
	ctrlDayEvent.on('click', function(e){
		initDayEvent(ctrlDayEvent.getValue(), pageid);
	});
};
});
	

Runner.pages.PageSettings.addPageEvent('calcalendar', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	this.on("afterClose", function(e) {	
	//if( localStorage.getItem("fcDefaultView") == "year")
	//	location.reload();
	//else{
		$.post("calcalendar_list.php",{
			a:'monthly',
			view:localStorage.getItem("fcDefaultView") !== null ? localStorage.getItem("fcDefaultView") : "month"
		})
		.done(function(txt){
			eventData = JSON.parse(txt);
			$('#calendar').fullCalendar('removeEvents');
			$('#calendar').fullCalendar( 'addEventSource', eventData )
		});
	//}
}, this);


var ctrlDayEvent = Runner.getControl(pageid, 'DayEvent'),
	ctrlTimeField = Runner.getControl(pageid, 'TimeField'),
	ctrlEndTime = Runner.getControl(pageid, 'EndTime'),
	ctrlRecurrence = Runner.getControl(pageid, 'Recurrence'),
	ctrlCategory = Runner.getControl(pageid, 'Category'),
	ctrlSubject = Runner.getControl(pageid, 'Subject'),
	ctrlPeriod = Runner.getControl(pageid, 'Period'),
	ctrlRecType = Runner.getControl(pageid, 'RecurType'),
	ctrlDateField = Runner.getControl(pageid, 'DateField'),
	ctrlEndDate = Runner.getControl(pageid, 'EndDate'),
	i;

if(ctrlSubject)
	ctrlSubject.setFocus();

if(ctrlTimeField && ctrlEndTime){
	ctrlTimeField.removeOptions();
	ctrlEndTime.removeOptions();
	for(i = 0; i < times.length; i++) {
		ctrlTimeField.addOption( times[i].display, times[i].value );
	}
	for(i = 0; i < timesEnd.length; i++) {
		ctrlEndTime.addOption( timesEnd[i].display, timesEnd[i].value );
	}

	ctrlTimeField.valueElem[0].selectedIndex = selectedTimeField;
	ctrlEndTime.valueElem[0].selectedIndex  =selectedEndTime;
}

initEditPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, ctrlRecType, pageObj);

//pageObj.win.set('width', 620);
//pageObj.win.set('height', $(".fieldGrid").height()+ 124);

//Runner.Calendar.moveMonthlyPopupWin( this.win, this.x, this.y );

if(ctrlRecurrence){
	ctrlRecurrence.on('click',function(e){
		initRecurrence(ctrlRecurrence.getValue(), ctrlPeriod, ctrlRecType, pageObj);
	});
}

if(ctrlPeriod){
	ctrlPeriod.on('click',function(e){
		initPeriod(ctrlPeriod.getValue(), pageObj);
	});
}

if(ctrlCategory){
	$("#categoryid").css("background-color",catLookup[ ctrlCategory.getValue() ]);
	ctrlCategory.on('change',function(e){
		initCategory(catLookup[ctrlCategory.getValue()]);
	});
}

if(ctrlDayEvent){
	ctrlDayEvent.on('click', function(e){
		initDayEvent(ctrlDayEvent.getValue(), pageid);
	});
}

if(ctrlRecType){
	ctrlRecType.on('change', function(e){
		initRecType(ctrlRecType.getValue(), pageid);
	});
}

if(ctrlTimeField){
	ctrlTimeField.on('change', function(e){
		var d = ctrlDateField.getValue();
		var mm = d.getMonth() + 1;
		var dd = d.getDate();
		var res = d.getFullYear()+"-"+( (mm>9 ? '' : '0') + mm)+"-"+(dd>9 ? '' : '0') + dd+" "+ctrlTimeField.getValue();
		var newd = new Date(res);
		newd.setHours(newd.getHours() + 1);
		
		var hh = newd.getHours();
		var mm = newd.getMinutes();
		var res = ( (hh>9 ? '' : '0') + hh)+":"+(mm>9 ? '' : '0') + mm+":00";
		ctrlEndTime.setValue(res);
		
		var mm = newd.getMonth()+1;
		var dd = newd.getDate();
		var res = newd.getFullYear()+"-"+( (mm>9 ? '' : '0') + mm)+"-"+(dd>9 ? '' : '0') + dd;
		ctrlEndDate.setValue(res);
	});
}


$("#deleteButton").on("click", function(e){
	Runner.Calendar.deleteEventHandler(this, pageObj);
});
;
});
	

Runner.pages.PageSettings.addPageEvent('calcalendar', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var ctrlDayEvent = Runner.getControl(pageid, 'DayEvent'),
	ctrlRecurrence = Runner.getControl(pageid, 'Recurrence'),
	ctrlPeriod = Runner.getControl(pageid, 'Period'),
	ctrlRecType = Runner.getControl(pageid, 'RecurType');

//initViewPage(pageid, ctrlDayEvent, ctrlRecurrence, ctrlPeriod, ctrlRecType, pageObj);

//$("[data-fieldname='DayEvent']").hide();

if(proxy["color"])
	$("#categoryid").css("background-color",proxy["color"]);
;
});

//	AJAX snippets

// fields events
