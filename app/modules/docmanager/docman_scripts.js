/**
/**
 * Create docManager utils name space
 */
Runner.namespace("Runner.docManager");

/**
 * @param {object} params
 */
Runner.docManager.displayPopup = function( params ) {
	var pageid = 1,
		pageObj = Runner.pages.PageManager.getById( pageid ),
		args = {
			bodyContent: "<iframe frameborder='0' id='popupIframe" + pageid + "' style='width: 100%; height: 100%; border: 0;'></iframe>",
			footerContent:  params.footerContent ? params.footerContent : "<span>&nbsp;</span>",
			headerContent: params.headerContent,
			centered: true,
			render: true,
			width: params.width ? params.width : 450,
			height: params.height ? params.height : 300
		},
		afterCreateHandler = function( win ) {
			var $bodyNode = $( win._obj[0] ),
				$iframeNode = $("iframe#popupIframe" + pageid, $bodyNode);
					
			$iframeNode.load( function() {
				$bodyNode.css("overflow", "visible");
				Runner.pages.PageManager.correctBSWindowSize( win._obj, pageObj );	
				$(this).contents().find("input:visible").eq(0).focus();		
				if($("#footerSaveButton").length){
					$("#footerSaveButton").bind("click",function(){
						document.getElementById("popupIframe"+pageid).contentWindow.document.getElementById("saveButton"+pageid).click();
					});
				}
			}).attr("src", params.url); 
		},
		afterCloseHandler = params.afterClose;

	window.reloadPage = false;	
	Runner.pages.PageManager.createBSWin.call( pageObj, args, true, afterCreateHandler, afterCloseHandler );
}

/**
 * Show 'Create folder' dialog
 */
Runner.docManager.createFolder = function() {
	var params = {
		url: Runner.getPageUrl('Add_folder', 'add'),
		afterClose: function( win ) {
			win.destroy(true);
			if (window.reloadPage) {
				window.location.reload();
			}
		},
		height: 235,
		headerContent: '<span style="font-size: 150%;">'+Runner.getCustomLabel("create_folder")+'</span>',
		footerContent: '<a type="button" class="btn btn-primary" id="footerSaveButton">'+Runner.getCustomLabel("save")+'</a>'
		};
	Runner.docManager.displayPopup( params );
}

/**
 * @param {string} hash
 */
Runner.docManager.share = function( hash,id ) {
	var params = {
		url: Runner.getPageUrl('Share', 'edit', 'hash=' + hash+'&editid1='+id),
		afterClose: function(win) {
			win.destroy(true);
			location.reload();
		},
		headerContent: '<span style="font-size: 150%;">'+Runner.getCustomLabel("share")+'</span>',
		footerContent: '<a type="button" class="btn btn-primary" id="footerSaveButton">'+Runner.getCustomLabel("save")+'</a>',
		width: 700,
		height: 600
	};
	Runner.docManager.displayPopup( params );
};

Runner.docManager.sendfile = function( hash, fname ) {
	var body = "<table><tr><td style='padding:3px;'>"+Runner.getCustomLabel("to")+":</td><td style='padding:3px;'><input id='to' value='' class='form-control' placeholder='test@test.com'></td></tr>";
	body+= "<tr><td style='padding:3px;'>"+Runner.getCustomLabel("subj")+":&nbsp;</td><td style='padding:3px;'><input id='subj' value='"+fname+"' class='form-control'></td></tr>";
	body+= "<tr><td style='padding:3px;'>"+Runner.getCustomLabel("body")+":</td><td style='padding:3px;'><textarea id='body' value='' cols=100 rows=10 class='form-control'></textarea></td></tr></table>";
	var win = Runner.displayPopup( {
		html: body,
		header: Runner.getCustomLabel("send_file")+' <b>'+fname+'</b>',
		width: 700,
		height: 450,
		footer: "<a type='button' title='' class='btn btn-primary' id='sendfile' href='javascript:void(0)'>"+Runner.getCustomLabel("send")+"</a>&nbsp;<a type='button' title='' id=cancelfile class='btn btn-default' href='javascript:void(0)'>"+Runner.getCustomLabel("cancel")+"</a>",
		afterCreate: function(win) {
			window.win = win;
			$("#cancelfile").bind("click", function(){
				window.win.close();
			});
			$("#sendfile").bind("click", function(){
				var to = $("#to").val();
				var subj = $("#subj").val();
				var body = $("#body").val();
				if(!to){
					swal(Runner.getCustomLabel("recipient"));
					return false;
				}
				$.post("doc_files_list.php",{
					to: to,
					subj: subj,
					body: body,
					hash, hash,
					a: "sendfile"
				})
				.done(function(res){
					if(!res)
						parent.location.reload();
					else
						swal(res);
				});
			});
		}
	});
	return false;
};

/**
 * @param {string} id
 * @param {boolean} toggler
 */
Runner.docManager.toggleButtonEnabledState = function( id, toggler ) {
	var $button = $("[id^=" + id + "]");
	$button.toggleClass( 'disabled', !toggler );
};

function plus_download(obj){
	val = $(obj).closest("td").next("td").find("#download").html();
	$(obj).closest("td").next("td").find("#download").html(parseInt(val)+1);
	
}