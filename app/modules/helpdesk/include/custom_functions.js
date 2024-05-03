$(document).ready(function() {
   var originalInit = Runner.pages.RunnerPage.prototype.init;
   Runner.pages.RunnerPage.prototype.init = function() {
        originalInit.call(this);
		  var viewingPage = "-";
		  if(this.pageTable === "hd_messages" && typeof this.masterKeys !== "undefined")
				viewingPage = this.masterKeys.masterkey1;
		  $.get("",{viewingPage:viewingPage});
   }
	Runner.pages.RunnerPage.prototype.show_buttons = function(toggleParam) {
	 pageObj = this;
    pageObj.button_items_ids.forEach(item_id => pageObj.toggleItem(item_id, toggleParam));
    pageObj.toggleItem("More_button", !toggleParam);
	}
});
var myCSS = document.createElement( "link" );
myCSS.rel = "stylesheet";
myCSS.href = "styles/custom/helpdesk.css";
// insert it at the end of the head in a legacy-friendly manner
document.head.insertBefore( myCSS, document.head.childNodes[ document.head.childNodes.length - 1 ].nextSibling );

