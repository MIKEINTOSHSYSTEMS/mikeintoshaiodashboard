Runner.buttonEvents["video_chat"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'video_chat';
	
	if ( !pageObj.buttonEventBefore['video_chat'] ) {
		pageObj.buttonEventBefore['video_chat'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
sound = new Howl({
	src: ["callVideo.mp3"],
	volume: 1
});

sound.play();
videosound = setInterval(function(){sound.play();},4000);

var current_user = $(".td_users_selected").find("[id^=menuusername]").html();
var current_icon = $(".td_users_selected").find("img").attr("src");
var header= "<div class='video_popup_img'><img src='"+current_icon+"'></div>";
header+= "<div style='text-align:center'>"+Runner.getCustomLabel("call_to")+"</div>";
header+= "<div class='video_popup_body'><b>"+current_user+"</b></div>";
header+= "<input type=hidden id='create_video_chat' value=''/>";

var popup = Runner.displayPopup( {
		width: "200px",
		height: "310px",
		html: header,
		footer: '<div style="text-align:center"><a href="#" class="btn btn-danger b_phone" onclick="cancelVideoChat();return false;"><span class="glyphicon glyphicon-remove"></span></a></div>',
		afterCreate: function(popup) {
			window.popup = popup;
			$(".modal-header").hide();
			$(".modal-content").css("height", "270px");
			$(".modal-body").css("padding-bottom", "0px");
		},
		beforeClose: function(){
			sound.stop();
			clearInterval( videosound );
		}
	});


return true;
		}
	}
	
	if ( !pageObj.buttonEventAfter['video_chat'] ) {
		pageObj.buttonEventAfter['video_chat'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
if(result["message"]){
	cancelVideoChat();
	swal(result["message"]);
	return false;
}
else
	$("#create_video_chat").val(result["createlink"]);
		}
	}
	
	$('a[id="video_chat"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "video_chat" + "_" + Runner.genId();
		
		// create object
		var button_video_chat = new Runner.form.Button({
			id: this.id ,
			btnName: "video_chat"
		});
		
		// init
		button_video_chat.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

