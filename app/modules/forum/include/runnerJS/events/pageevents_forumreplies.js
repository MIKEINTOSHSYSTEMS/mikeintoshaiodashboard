	

Runner.pages.PageSettings.addPageEvent('forumreplies', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var el = $("[id^=value_reply_]:last");

id = el.attr("id");
if(window.reply_value==undefined)
	text = "";
else
	text = window.reply_value;
el.html(text);
var simplemde = new SimpleMDE({
	element: document.getElementById(id),
	forceSync: false,
	autofocus: true,
	spellChecker: false,
	styleSelectedText: false,
	toolbar: ["bold", "italic", "heading", "|", "quote", "code", "unordered-list", "ordered-list", "|","|", "preview", "side-by-side", "fullscreen", "|", "guide",
	{
		name:"link_paste",
		className: 'md-upload-img fa fa-link',
		action: function (el) {
			cm = el.codemirror;

			var popup = Runner.displayPopup( {
				html: "<form><div class='form-group'><label>Link text</label><input type='text' class='form-control linktextvalue'></div><div class='form-group'><label>URL</label><input value='https://' type='text' class='urlvalue form-control'></div></form>",
				header: 'Add Link',
				footer: "<span class='btn btn-primary add_link'>Add</span><span class='btn btn-primary closebut'>Close</span>",
				width: 500,
				height: 300,
				afterCreate: function(popup) {
					var selection = cm.getSelection();
					popup.body().find(".linktextvalue").val(selection);
					popup.footer().find(".closebut").click(function() {
						popup.close();
					});
					popup.footer().find(".add_link").click(function() {
						popup.body().find(".urlvalue").css("border","1px solid #ccc"); 
						popup.body().find(".linktextvalue").css("border","1px solid #ccc"); 
						if(popup.body().find(".urlvalue").val() === "" ) popup.body().find(".urlvalue").css("border","1px solid red"); 
						if(popup.body().find(".linktextvalue").val() === "" ) popup.body().find(".linktextvalue").css("border","1px solid red"); 
						if(popup.body().find(".urlvalue").val() === "" || popup.body().find(".linktextvalue").val() === "") return false;
						var linktext = popup.body().find(".linktextvalue").val();
						var url = popup.body().find(".urlvalue").val();
						var cursor = cm.getCursor(); 
						var line = cm.getLine(cursor.line);
						var pos = { 
							line: cursor.line,
							ch: line.length
						}
						var linkmark = "["+linktext+"]("+url+")";
							if(selection.length > 0) cm.replaceSelection(linkmark);
								else cm.replaceRange(linkmark, pos);
						popup.close();
						simplemde.codemirror.focus();

					});
				}
			});
			
		}
	},
	{
		name:"upload_img",
      className: 'md-upload-img fa fa-picture-o',
      action: function (el) {
		  console.log(el);
        let self = this
        // add custom class
        $(el.gui.toolbar).addClass('md-upload-img')
        // append input element
        let inputEle = document.createElement('input')
        inputEle.setAttribute('type', 'file')
        inputEle.setAttribute('multiple', true)
        inputEle.setAttribute('accept', 'image/*')
        $(el.gui.toolbar).append(inputEle)
		  $(inputEle).hide();
        inputEle.onchange = (evt) => {
				
          let imgs = evt.currentTarget.files
          if (imgs.length) {
            let xhr = new window.XMLHttpRequest()
            let formData = new window.FormData()
            for (let i = 0; i < imgs.length; i++) {
              formData.append('upload_img_' + i, imgs[i])
            }
            xhr.open('POST', Runner.getPageUrl("forumtopics",Runner.pages.constants.PAGE_LIST) + "?a=fileupload", true)
            xhr.onload = (event) => {
              if (xhr.status === 200) {
				
                let cm = el.codemirror
                let stat = el.getState()
                let options = el.options
                let res = JSON.parse(event.target.response);
                let urls = res

                urls.forEach((url) => {
						var cursor = cm.getCursor(); 
						var line = cm.getLine(cursor.line);
						var pos = { 
							line: cursor.line,
							ch: line.length - 1
						}
						cm.replaceRange("\n ![img alt](" + url + ") \n", pos);
                })
              } else {
                console.log('fail')
              }
            }
            xhr.send(formData)
          }
        }
			$(inputEle).click();
		  

        return el
      }
	}
	],
});
simplemde.codemirror.on("change", function(){
	$("#"+id).text(simplemde.value());
});

simplemde.codemirror.focus();
simplemde.codemirror.setCursor(simplemde.codemirror.lineCount(), 0);
;
});
	

Runner.pages.PageSettings.addPageEvent('forumreplies', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	id = $("[id^=value_reply_]:last").attr("id");


var simplemde = new SimpleMDE({
	element: document.getElementById(id),
	forceSync: false,
	autofocus: true,
	spellChecker: false,
	styleSelectedText: false,
	toolbar: ["bold", "italic", "heading", "|", "quote", "code", "unordered-list", "ordered-list", "|","|", "preview", "side-by-side", "fullscreen", "|", "guide",
	{
		name:"link_paste",
		className: 'md-upload-img fa fa-link',
		action: function (el) {
			cm = el.codemirror;

			var popup = Runner.displayPopup( {
				html: "<form><div class='form-group'><label>Link text</label><input type='text' class='form-control linktextvalue'></div><div class='form-group'><label>URL</label><input value='https://' type='text' class='urlvalue form-control'></div></form>",
				header: 'Add Link',
				footer: "<span class='btn btn-primary add_link'>Add</span><span class='btn btn-primary closebut'>Close</span>",
				width: 500,
				height: 300,
				afterCreate: function(popup) {
					var selection = cm.getSelection();
					popup.body().find(".linktextvalue").val(selection);
					popup.footer().find(".closebut").click(function() {
						popup.close();
					});
					popup.footer().find(".add_link").click(function() {
						popup.body().find(".urlvalue").css("border","1px solid #ccc"); 
						popup.body().find(".linktextvalue").css("border","1px solid #ccc"); 
						if(popup.body().find(".urlvalue").val() === "" ) popup.body().find(".urlvalue").css("border","1px solid red"); 
						if(popup.body().find(".linktextvalue").val() === "" ) popup.body().find(".linktextvalue").css("border","1px solid red"); 
						if(popup.body().find(".urlvalue").val() === "" || popup.body().find(".linktextvalue").val() === "") return false;
						var linktext = popup.body().find(".linktextvalue").val();
						var url = popup.body().find(".urlvalue").val();
						var cursor = cm.getCursor(); 
						var line = cm.getLine(cursor.line);
						var pos = { 
							line: cursor.line,
							ch: line.length
						}
						var linkmark = "["+linktext+"]("+url+")";
							if(selection.length > 0) cm.replaceSelection(linkmark);
								else cm.replaceRange(linkmark, pos);
						popup.close();
						simplemde.codemirror.focus();

					});
				}
			});
			
		}
	},
	{
		name:"upload_img",
      className: 'md-upload-img fa fa-picture-o',
      action: function (el) {
		  console.log(el);
        let self = this
        // add custom class
        $(el.gui.toolbar).addClass('md-upload-img')
        // append input element
        let inputEle = document.createElement('input')
        inputEle.setAttribute('type', 'file')
        inputEle.setAttribute('multiple', true)
        inputEle.setAttribute('accept', 'image/*')
        $(el.gui.toolbar).append(inputEle)
		  $(inputEle).hide();
        inputEle.onchange = (evt) => {
				
          let imgs = evt.currentTarget.files
          if (imgs.length) {
            let xhr = new window.XMLHttpRequest()
            let formData = new window.FormData()
            for (let i = 0; i < imgs.length; i++) {
              formData.append('upload_img_' + i, imgs[i])
            }
            xhr.open('POST', Runner.getPageUrl("forumtopics",Runner.pages.constants.PAGE_LIST) + "?a=fileupload", true)
            xhr.onload = (event) => {
              if (xhr.status === 200) {
				
                let cm = el.codemirror
                let stat = el.getState()
                let options = el.options
                let res = JSON.parse(event.target.response);
					 console.log(event.target.response);
					 console.log(res);
                let urls = res

                urls.forEach((url) => {
						var cursor = cm.getCursor(); 
						var line = cm.getLine(cursor.line);
						var pos = { 
							line: cursor.line,
							ch: line.length - 1
						}
						cm.replaceRange("\n ![img alt](" + url + ") \n", pos);
                })
              } else {
                console.log('fail')
              }
            }
            xhr.send(formData)
          }
        }
			$(inputEle).click();
		  

        return el
      }
	}
	],
});
simplemde.codemirror.on("change", function(){
	$("#"+id).text(simplemde.value());
});;
});
	

Runner.pages.PageSettings.addPageEvent('forumreplies', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if(typeof proxy["forumtopics_qs"] != "undefined"){
	$("[data-itemid='simple_search'] .form-control").val(proxy["forumtopics_qs"]);
	$("[data-itemid='simple_search'] .input-group").show();
	$("[data-itemid='simple_search'] .btn").show();

}
if( pageObj.getAllRecords().length == 0){
	pageObj.toggleItem("Mark_as_Solved1", false ); 
}
$("#reply").bind("click", function(){
	$("#inlineAdd"+pageid).trigger("click");
	return false;
});

$("#a_subscribe").bind("click", function(){
	$.get("forumreplies_list.php",{
		sub: $(this).attr("a"),
		topic_id:$(this).data("topic")
	})
	.done(function(res){
		if(res == "sub"){
			$("#submessage").html("List of subscriptions updated");
			$("#a_subscribe").html("Unsubscribe");
			$("#a_subscribe").attr("a","unsub");
		}
		if(res == "unsub"){
			$("#submessage").html("List of subscriptions updated");
			$("#a_subscribe").html("Subscribe");
			$("#a_subscribe").attr("a","sub");
		}
	});
	return false;
});
pageObj.inlineAdd.on("afterInit",function(){
	$("#inlineAdd"+pageid).hide();
	$("[data-itemid='snippet']").hide();
});
pageObj.inlineAdd.on('afterSubmit',function(){
	$("#inlineAdd"+pageid).show();
	$("[data-itemid='snippet']").show();
	ajaxreload();
});
this.inlineAdd.on('cancel',function(){
	$("#inlineAdd"+pageid).show();
	$("[data-itemid='snippet']").show();
});




pageObj.inlineEdit.on("afterInit",function(){
	$("#inlineAdd"+pageid).hide();
	$("[data-itemid='snippet']").hide();
});
pageObj.inlineEdit.on('afterSubmit',function(){
	$("#inlineAdd"+pageid).show();
	$("[data-itemid='snippet']").show();
	ajaxreload();
	
});
this.inlineEdit.on('cancel',function(){
	$("#inlineAdd"+pageid).show();
	$("[data-itemid='snippet']").show();
});

function ajaxreload(add = false) {
	Runner.runnerAJAX(Runner.pages.getUrl(pageObj.tName, pageObj.pageType) + "?mastertable=forumtopics&masterkey1=" + pageObj.masterKeys.masterkey1 + "&a=return", (typeof pageObj.ajaxBaseParams !== 'undefined') ? pageObj.ajaxBaseParams : pageObj.baseParams,
	     function(respObj) {
	        pageObj.pageReloadHn.call(pageObj, respObj);
	        if (add) window.scrollTo({ top: $(".r-record-body").last().get(0).offsetTop, left: 0, behavior: 'smooth' })
			});
}

var loginTName = Runner.pages.PageSettings.getGlobalData( "loginTName" ).replace(/(.*)\./,"");
$(".userprofile").each(function(){
	$(this).bind("click", function(){
		window.popup = Runner.displayPopup( {
			url: Runner.pages.getUrl("profile", "view")+"?editid1="+$(this).data("username")+"&popup_mode=1",
			width: 850,
			height: 500,
			header: "<span style='font-size:16px'>View Profile: "+$(this).attr("displayname")+"</span>",
			afterCreate: function(win) {
				var iframe = $("#popupIframe"+pageid).contents();
				iframe.find(".r-left").attr("style","display:none");
				iframe.find(".r-content-col").attr("style","margin-left:0px !important");
				iframe.find(".navbar-default").attr("style","display:none");
				iframe.find(".r-top").attr("style","display:none");
				iframe.find(".r-below").attr("style","display:none");
			}
		});
		return false;
	});
});

;
});

//	AJAX snippets

// fields events
