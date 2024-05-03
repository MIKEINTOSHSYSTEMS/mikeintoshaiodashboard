	

Runner.pages.PageSettings.addPageEvent('todogantt', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("#closepopup").click(function(){
	$(".close",window.parent.document).click();
});

$(".modal-body",window.parent.document).css("height",$(".r-vertical-field").length*60+110+"px");
$(".modal-content",window.parent.document).css("height",$(".r-vertical-field").length*60+160+"px");;
});
	

Runner.pages.PageSettings.addPageEvent('todogantt', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	$("[data-body-width='standard']").css("width","100%");

anychart.onDocumentReady(function () {    	
	$.post("todogantt_list.php",{
		a:"getdata",
		date: proxy["startdate"]
	})
	.done(function(res){
		var out = JSON.parse(res);
		var data = out["data"];
		
		var treeData = anychart.data.tree(data, "as-tree");  
		var chart = anychart.ganttProject();    
		anychart.licenseKey("uds-65e6fd8c-5f02c8d8");
		chart.data(treeData);

		chart.getTimeline().scale().minimum(out["start"]);
		chart.getTimeline().scale().maximum(out["end"]);

		chart.getTimeline().scale().zoomLevels([
		 [
			{unit: "day", count: 3},
			{unit: "month", count: 1},
			{unit: "year", count: 1}
		 ]
		]);
		chart.getTimeline().tooltip().format(
			"{%actualStart}{dateTimeFormat:dd MMM y} – " +
			"{%actualEnd}{dateTimeFormat:dd MMM y}"
		  );


		column_1 = chart.dataGrid().column(0);
		column_1.setColumnFormat("num", "text");
		column_1.title("Number");
		column_1.title().fontSize(12);
		column_1.width(70);
		column_1.labels().fontSize(12);
		column_1.labels().useHtml(true);

		column_2 = chart.dataGrid().column(1);
		column_2.setColumnFormat("name", "text");
		column_2.title("Card name");
		column_2.title().fontSize(12);
		column_2.labels().fontSize(12);

		column_3 = chart.dataGrid().column(2);
		column_3.setColumnFormat("category", "text");
		column_3.title("Category");
		column_3.title().fontSize(12);
		column_3.labels().fontSize(12);
		column_3.labels().useHtml(true);
		column_3.width(100);

		column_4 = chart.dataGrid().column(3);
		column_4.setColumnFormat("assign", "text");
		column_4.title("Assign to");
		column_4.title().fontSize(12);
		column_4.width(100);
		column_4.labels().fontSize(12);

		var header = chart.getTimeline().header();
		header.level(0).format("{%value}");
		header.level(1).format("{%value}");
		header.level(2).format("{%value}");
		
		header.level(0).fontSize(9);
		header.level(1).fontSize(12);
		header.level(2).fontSize(12);

		chart.listen("rowDblClick", function (e) {
		  var cid = e.item.get("cid");
		  if(cid!=undefined){
				var win = Runner.displayPopup( {
					url: "todocards_view.php?editid1="+cid,
					width: 500,
					height: 550,
					header: "<span style='font-size:18px'><b>View Card</b></span>",
					afterCreate: function(win) {
						$(".modal-footer").hide();
					},
					afterClose(){
						location.reload();
					}
				});
			}
		});


		chart.splitterPosition(450);
		chart.container("container");  
		chart.draw();
		chart.fitAll();
		chart.zoomTo("month", 5, "first-date");
	});  
});  ;
});

//	AJAX snippets

// fields events
