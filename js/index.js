 $(window).scroll(function() {
    var t;
    t = $(".main-header").length ? $(".main-header").height() - 160 : 60,
    $("#site-title").css({color:"#fff"}),$("#menu a").css({color:"#fff"})
    $(window).scrollTop() > t ? ($("#bar").removeClass("transparent"), 
    	$("#site-title").css({color:"#999"}),$("#menu a").css({color:"#999"}),
        $(".fab").addClass("fab-hid")) : ($("#bar").addClass("transparent"), 
        $(".fab").addClass("fab"), $(".fab").removeClass("fab-hid"))
});