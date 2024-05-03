	

Runner.pages.PageSettings.addPageEvent('forumtopics', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if (proxy["menu"] == "show")
    $("[data-itemid=menu]").show();
if (proxy["search"] == "own")
    $("#ctlSearchFor" + pageid).attr("placeholder", "own topics");

pageObj.addNewRecordsToBottom = true;
var loginTName = Runner.pages.PageSettings.getGlobalData( "loginTName" ).replace(/(.*)\./,"");
$(".userprofile").each(function() {
    $(this).bind("click", function() {
        window.popup = Runner.displayPopup({
            url: Runner.pages.getUrl("profile","view")+"?editid1=" + $(this).data("username") + "&popup_mode=1",
            width: 850,
            height: 500,
            header: "<span style='font-size:16px'>View Profile: " + $(this).attr("displayname") + "</span>",
            afterCreate: function(win) {
                var iframe = $("#popupIframe" + pageid).contents();
                iframe.find(".r-left").attr("style", "display:none");
                iframe.find(".r-content-col").attr("style", "margin-left:0px !important");
                iframe.find(".navbar-default").attr("style", "display:none");
                iframe.find(".r-top").attr("style", "display:none");
                iframe.find(".r-below").attr("style", "display:none");
            }
        });
        return false;
    });
});
$("[data-itemid=menu]").attr("style", "");
$(".rnr-searchcontrol select[id^='value_categoryid'] option:first").html("all categories");

$(".rnr-searchcontrol select[id^='value_categoryid']").select2({
    width: "300px"
});
$(".forumcategories_select").select2({
    width: "300px"
});
$(".forumcategories_select").change(function() {
    window.location.href = $(this).val();

});

if (proxy["is_subscribe"] == 1) {
    $("[id^='Subscribe_on_Category']").html("Unsubscribe from category");
    $("[id^='Subscribe_on_Category']").addClass("unsubscribe");

}

$(".mobile_sort select").find("option[value='" + proxy["createdsort"] + "']").attr("selected", "selected");
var ordercreated = $('[id="order_' + Runner.goodFieldName("created") + '_' + pageObj.id + '"]');
if (proxy["createdsort"] === "dcreated") {
    ordercreated.find("span").attr("data-icon", "sortdesc");
} else {
    ordercreated.find("span").attr("data-icon", "sortasc");
}

ordercreated.off("click").on("click", function() {
    if (proxy["createdsort"] === "dcreated")
        var href = Runner.pages.getUrl("forumtopics", "list") + "?orderby=acreated"
    else
        var href = Runner.pages.getUrl("forumtopics", "list") + "?orderby=dcreated"
    var link = document.createElement("a");
    link.href = href;
    link.click();
});

$(".mobile_sort select").change(function() {
    var link = document.createElement("a");
    link.href = Runner.pages.getUrl("forumtopics", "list") + "?orderby=" + $(this).val();
    link.click();
});;
});
	

Runner.pages.PageSettings.addPageEvent('forumtopics', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	id = $("[id^=value_question_]").attr("id");
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
	//$("#"+id).text(marked(simplemde.value()));
});

;
});
	

Runner.pages.PageSettings.addPageEvent('forumtopics', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	id = $("[id^=value_question_]").attr("id");
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
});
var locked = Runner.getControl(pageid, "locked");
var autoLock = Runner.getCustomLabel("autoLock").replace("{days}",proxy["autoLockAfter"]);

locked.valueElem.append("<option value='autoLock'>"+autoLock+"</option>");
locked.valueElem.append("<option value='hand_lock'>"+Runner.getCustomLabel("hand_lock")+"</option>");
locked.valueElem.append("<option value='hand_unlock'>"+Runner.getCustomLabel("hand_unlock")+"</option>");
locked.valueElem.find("option[value='"+proxy["locked"]+"']").prop("selected",true);
;
});
	

Runner.pages.PageSettings.addPageEvent('forumtopics', Runner.pages.constants.PAGE_SEARCH, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	if(typeof proxy["categoryid"] !== "undefined")
	setLookupvalues("categoryid",proxy["categoryid"]);
if(typeof proxy["startedby"] !== "undefined")
	setLookupvalues("startedby",proxy["startedby"]);

function setLookupvalues(controlname,values) {
	Runner.getControl(pageid,controlname).clear();
	$.each(values,function(i,value) {
		console.log()
		if(value.islookup) Runner.getControl(pageid,controlname).setLookupValue(value.lookup_value,null,value.display_value,null);
			else Runner.getControl(pageid,controlname).setValue(value.display_value);
	});
};
});

//	AJAX snippets

// fields events
