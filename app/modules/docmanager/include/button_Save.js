Runner.buttonEvents["Save"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Save';
	
	if ( !pageObj.buttonEventBefore['Save'] ) {
		pageObj.buttonEventBefore['Save'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
if ( Runner._dropzone && (!Runner._dropzone.files || !Runner._dropzone.files.length) ) {
	$('#docman-dropzone').hide();
	$('[id^=Save_]').hide();
	$('[id^=Cancel_]').hide();
	$.post("doc_files_list.php", {
	}) 
}
var checkDublicate = function(param){
	$.get("doc_files_list.php",{
		a: "checkdublicate",
		link: param
	})
	.done(function(res){
		if(res){
			out = JSON.parse(res);
			client_w=document.body.clientWidth;
			client_h=document.body.clientHeight;
			var path = out["name"];
			var p = out["name"].lastIndexOf("_");
			path = out["name"].substr(0,p)+out["name"].substr(p+9);
			$("#popupfname").html("..."+path.substr(-47));
			$("#popupnewfname").html(out["newName"]);
			$("#renamefile").css("left",(client_w/2-175)+"px");
			$("#renamefile").css("top",(client_h/2-100)+"px");
			$("#renamefile").show();
			$("#popupskip").bind("click", function(){
				checkDublicate("cancel");
				return false;
			});
			$("#popupreplace").bind("click", function(){
				checkDublicate("replace");
				return false;
			});
			$("#popupnewname").bind("click", function(){
				checkDublicate("newname");
				return false;
			});

			return false;
		}
		ajax.submit();
	});
}

checkDublicate("");

return false;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Save'] ) {
		pageObj.buttonEventAfter['Save'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var currentLocation = location.href;
if(currentLocation.indexOf("rand=")!=-1){
	var p = currentLocation.indexOf("rand=");
	currentLocation = currentLocation.substr(0,p-1);
}
if(currentLocation.indexOf("?")!=-1)
	currentLocation+="&rand="+Math.random();
else
	currentLocation+="?rand="+Math.random();

location.href = currentLocation;

		}
	}
	
	$('a[id="Save"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Save" + "_" + Runner.genId();
		
		// create object
		var button_Save = new Runner.form.Button({
			id: this.id ,
			btnName: "Save"
		});
		
		// init
		button_Save.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

