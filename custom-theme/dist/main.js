function smoothScrollTo(e) {
    var i = $(e).offset().top;
    $("html, body").animate({
        scrollTop: i
    }, 400, "easeInOutCubic")
}
$(document).ready(function() {
    $(window).on('load', function() {
        function e(e) {
            e.each(function() {
                var e = $(this)
                  , i = e.data("animation");
                e.addClass(i).one("webkitAnimationEnd animationend", function() {
                    e.removeClass(i)
                })
            })
        }
        AOS.init();
        var a = $("table");
        a && (a.wrap('<div class="table-responsive"></div>'),
        a.addClass("table")),
        $(".loader-overlay").fadeOut(200),
        $(".sidepanel").hasClass("sidepanel-out") || $(".close-sidemenu").hide(),
        $(".mobile-menu-btn").click(function() {
            $(".sidepanel").toggleClass("sidepanel-out", 1e3),
            $(this).toggleClass("toggle-mobile-menu", 1e3),
            $(".sidepanel").hasClass("sidepanel-out") ? $(".close-sidemenu").show() : $(".close-sidemenu").hide()
        }),
        $(".sidepanel .mobile-menu-btn").click(function() {
            $(".main-header .mobile-menu-btn").toggleClass("toggle-mobile-menu", 1e3)
        }),
        $(".close-sidemenu").click(function() {
            $(".sidepanel").toggleClass("sidepanel-out", 1e3),
            $(this).hide()
        }),
        $(".sidepanel li a").click(function() {
            $(this).find(".fa-plus").toggleClass("fa-minus")
        }),
        $(".back-to-top").hide(),
        $(window).scroll(function() {
            $(this).scrollTop() > 100 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
        }),
        $(".back-to-top a").click(function() {
            return $("body,html").animate({
                scrollTop: 0
            }, 800),
            !1
        })
    })
});
