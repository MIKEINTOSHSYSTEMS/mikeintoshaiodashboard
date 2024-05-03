	

Runner.pages.PageSettings.addPageEvent('doc_files', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
	var bcss = $("#delete_selected"+pageid).css("display");
if(bcss == 'none'){
	$("[id^=Download_]").css("display",bcss);
	$(".docman-select-span").css("display",bcss);
}
if($("input[name^='selection']:visible").length == 0){
	if($("[data-container=add_delete]").find("a:first").attr("id")==undefined)
		$("[data-container=add_delete]").find("a:first").css("display","none");
	$(".docman-select-span").css("display","none");
}
	$(function() {
		//create dropzone programmatically
		Runner._dropzone = new Dropzone( "div#dropzone", {
			url: Runner.getPageUrl("upload_files"),
			clickable: true,
			addRemoveLinks: true,
			dictRemoveFile: Runner.getCustomLabel("remove"),
			dictDefaultMessage: Runner.getCustomLabel("drop_file"),
			init: function() {
				this.on("drop", function() {
					if ( !this.files.length ) {
						$('#docman-dropzone').hide();
						$('[id^=Save_]').hide();
						$('[id^=Cancel_]').hide();
						$("#dz_mess").hide();
					}
				});			
				this.on("addedfile", function(file) { 
					$('#docman-dropzone').css('display','table'); 
					$('[id^=Save_]').show();
					$('[id^=Cancel_]').show();
					$('[data-itemid=custom_button]').show();
					$('[data-itemid=custom_button1]').show();
					Runner.docManager.toggleButtonEnabledState("Save", this.files.length > 0 );									
				});
				this.on("removedfile", function(file) { 
					$.ajax({
					  type: "POST",
					  url: Runner.getPageUrl("upload_files"),
					  data: { fileToDelete: file.name }
					});
					Runner.docManager.toggleButtonEnabledState("Save", this.files.length > 0 );					
				});
			},
			fallback: function() {
				var $dropzoneElem = Dropzone.prototype.defaultOptions.fallback.call( this ),
					$tempUploadFileName = $('#tempUploadFileName', '.dz-browser-not-supported'),
					$uploadForm = $('form', '.dz-browser-not-supported'),
					$saveButton = $("[id^=Save]"),
					$cancelButton = $("[id^=Cancel]"),
					$docmanBox = $('#docman-dropzone'),
					$fileInput;

				$("#fileBrowserMessage").hide();
				
				$docmanBox.css({
					display: "table",
					width: "auto",
					height: "auto"
				});
				$('id^="Add_files"').hide(); 
				
				$saveButton
					.on("click", function() {
						$tempUploadFileName.hide();
						$uploadForm.show();
						$fileInput.show();
					})
					.hide();
					
				$cancelButton
					.on("click", function() {
						$tempUploadFileName.hide();
						$uploadForm.show();					
						$fileInput.show();
						
						$saveButton.hide();
						$cancelButton.hide();
					})
					.hide();
					
				// the browser doesn't support  File, FileReader and other required API, use a fallback
				$fileInput = $('input[type="file"]', '.dz-browser-not-supported').on('change', function(e) {

					var $uploadFrame = $('<iframe name="tempUpload"></iframe>');
					
					$uploadFrame
						.css({
							border: "0", 
							height: "1px", 
							width: "1px"
						})
						.appendTo('body')
						.on('load', function() {
							$tempUploadFileName.text( $fileInput.val().split('\\').pop() ).show();
							$uploadForm.get(0).reset();

							$uploadFrame.remove();
							$fileInput.hide();
							$docmanBox.css({
								width: "auto",
								height: "auto"
							}); 
						
							$saveButton.show();
							$cancelButton.show();							
						});

					$uploadForm
						.hide()
						.attr("action", "upload_files.php")
						.attr("target", "tempUpload")
						.submit();		
				});		
				
				return $dropzoneElem;
			}
		});
		
		//remove autodiscover feature to not to create dropzone basing on this element twice
		Dropzone.autoDiscover = false;
		//add dropzone class to apply css correctly
		$("div#dropzone").addClass("dropzone");		
	});
	
	if ( Dropzone && !Dropzone.isBrowserSupported() ) {
		$('a[id^="Add_files"]').hide();
	}
	
	if ($("#visible_dropzone").css("display")!="none") {
		$(document.body).on('dragenter', function(event) {
			$('#docman-dropzone').css('display','table');
			$('[id^=Save_]').show();
			$('[id^=Cancel_]').show();
			$('[data-itemid=custom_button]').show();
			$('[data-itemid=custom_button1]').show();
			$('#dropzone').css('display','table');
			$("html, body").animate({ scrollTop: 0 }, "slow");
		});
	}
	
	Runner.docManager.toggleButtonEnabledState("delete", false);
	Runner.docManager.toggleButtonEnabledState("Download", false);


	$(".docman-select-span").on('click', function(event) {
		var checked = $(".chooseAll"+pageid).prop("checked");
		$("input[name^='selection']:visible").prop("checked", checked);
		var b_visible = false;	
		$("input[name^='selection']:checked").each(function(){
			if($(this).parent("span").parent("td").parent("tr").find("td").find("img").css("filter").indexOf("grayscale") == -1)
			b_visible = true;
		});
	
		Runner.docManager.toggleButtonEnabledState("delete", b_visible);
		Runner.docManager.toggleButtonEnabledState("Download", checked);
	});
	
	$("[name^='selection']").on('click', function(event) {
	
		var b_visible = false;	
		$("input[name^='selection']:checked").each(function(){
			if($(this).parent("span").parent("td").parent("tr").find("td").find("img").css("filter").indexOf("grayscale") == -1)
				b_visible = true;		
		});
		var n = $("input[name^='selection']:checked").length;
		var a = $("input[name^='selection']").length;

		$("#chooseAll_"+pageid).prop("checked", a == n);
		Runner.docManager.toggleButtonEnabledState("delete", (b_visible));
		Runner.docManager.toggleButtonEnabledState("Download", n > 0);
	});
	
	$("#fileBrowserLink").on('click', function() {
		if ( Dropzone && !Dropzone.isBrowserSupported() ) {
			return false;
		} else { 
			$(".dropzone").click();
		}
		return false;
	});	

	$("#dropzone").html("<span id='dz_mess'><font color=gray>"+Runner.getCustomLabel("drop_file")+"</font></span>");
	$("#dz_mess").css("position","absolute");
	$("#dz_mess").css("padding-left","290px");
	$("#dz_mess").css("padding-top","90px");

	var el = $("#menu_dd").position();
	if(el){
		$("#submenu_dd").css("top",el.top + 17);
		$("#submenu_dd").css("left",el.left);
	}
	$("#menu_dd").click(function(){
		if($("#submenu_dd").css("display")=='none')
			$("#submenu_dd").show();
		else
			$("#submenu_dd").hide();
		return false;
	});


$("[id^=fileversion_]").each(function(){
	$(this).unbind().bind("click", function(){
		var obj = this;
		var id = $(this).attr("id").replace("fileversion_","");
		$.post("doc_files_list.php", {
			a:"getversions",
			id: id
		})
		.done(function(res){
			if(res){
				$("#versionslist").html(res);
				scH = screen.height;
				var p = $(obj).position();
				var dleft = p.left;
				if(scH/2>p.top)
					var dtop = p.top-45;
				else{
					var h = $("#versionslist").css("height");
					h = h.replace("px","");
					var dtop = p.top-70-h;
				}
				$("#versionslist").css("left",dleft+"px");
				$("#versionslist").css("top",dtop+"px");
				$("#versionslist").show();
				$("[id^=popup_action]").each(function(){
					var obj = this;
					$(this).unbind().bind("click",function(){
						var icondownload = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-download' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'/>  <path fill-rule='evenodd' d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'/></svg>";
						var icondelete = "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/></svg>";
						var id = $(obj).attr("id").replace("popup_action","");
						var pp = $(this).position();
						$("#versionsaction").hide();
						$("#versionsaction").css("left",pp.left+dleft-120+"px");
						$("#versionsaction").css("top",pp.top+dtop+10+"px");
						
						var content = "<a class='a_popup_style' href='"+$("#popup_hidden"+id).val()+"'>&nbsp;&nbsp;"+icondownload+"&nbsp;&nbsp;&nbsp;&nbsp;"+Runner.getCustomLabel("download")+"&nbsp;&nbsp;</a>";
						$("#div_download_click").html(content);
						if($(obj).attr("current")!="yes"){
							var content = "<span class='a_popup_style' id='popup_delete'>&nbsp;&nbsp;"+icondelete+"&nbsp;&nbsp;&nbsp;&nbsp;"+Runner.getCustomLabel("delete")+"&nbsp;&nbsp;</span>";
							$("#div_delete_click").html(content);
							$("#div_delete_click").show();
							$("#popup_delete").unbind().bind("click", function(){
								if(confirm(Runner.getCustomLabel("want_to_delete"))){
									$.post("doc_files_list.php",{
										"delete_file_version": id
									})
									.done(function(){
										parent.location.reload();
										return false;
									});
								}
							});
						}
						else
							$("#div_delete_click").hide();
						$("#versionsaction").show();
					});
				});


			}
		});
		return false;
	});
});

$("body").bind("click", function(ev){
	var target = $(ev.target);
	$("#renamefile").hide();
	if(!target.is("path") && !target.is("svg") && target.attr("popup")!='yes'){
		$("#versionslist").hide();
		$("#versionsaction").hide();
	}
});;
});

//	AJAX snippets

// fields events
