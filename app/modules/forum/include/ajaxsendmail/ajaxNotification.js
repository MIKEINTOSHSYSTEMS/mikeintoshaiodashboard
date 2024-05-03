window.curcount = 0;

function startSending(topicid) {
    if (window.curcount == 0) {
        $(".start").html("start...");
    }
    $.get("include/ajaxsendmail/ajaxNotification.php", { step: window.curcount, topicid: topicid }, function(response) {
        $(".current_step").html(window.curcount * 50);
        var json = JSON.parse(response);
        var sendingMessagesInstep = parseInt(json["count"]);
        if (sendingMessagesInstep == 50) {
            window.curcount++;
            startSending(topicid);
        } else {
            $(".alert-warning").hide();
            $(".alert-success").show();
            $(".start").hide();
        };



    });

}