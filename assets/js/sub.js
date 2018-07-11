(function($) {
    //  _ lnb 스크롤 고정 이벤트
    $(window).on("scroll", function() {
        if ($('body').width() > 1200) {
            if ( $(window).scrollTop() > 245 ) {
                $("body").addClass("scrolled");
            } else {
                $("body").removeClass("scrolled");
            }
        } else if ($('body').width() > 768) {
            if ( $(window).scrollTop() > 235 ) {
                $("body").addClass("scrolled");
            } else {
                $("body").removeClass("scrolled");
            }
        } else if ($('body').width() > 0) {
            if ( $(window).scrollTop() > 140 ) {
                $("body").addClass("scrolled");
            } else {
                $("body").removeClass("scrolled");
            }
        }
    });
})(jQuery);