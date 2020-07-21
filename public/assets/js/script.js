$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var widthh = $(window).width();
        if (scroll >= 100 && widthh >= 767) {

            $(".navbar.index").css({
                "transition": "all .3s",
                "height": "0",
                "opacity": "0"
            })
            $(".navbar.inner").css({
                "transition": "all .3s",
                "height": "0",
                "opacity": "0"
            })
            $(".social-media .social-media-inner a img.side-logo").css({
                "transition": "all .3s",
                "transition-delay": "0.1s",
                "width": "74",
                "opacity": "1"
            })
            $("a.toggle-link").css({
                "transition": "all .3s",
                "transition-delay": "0.1s",
                "width": "75px",
                "opacity": "1"
            })
        }
        if (scroll <= 100 && widthh >= 767) {
            // $(".navbar").addClass("fixed-top");
            $("a.toggle-link").css({
                "transition": "all .3s",
                "width": "0",
                "opacity": "0"
            })
            $(".navbar.index").css({
                "transition": "all .3s",
                "height": "144",
                "opacity": "1"
            })
            $(".navbar.inner").css({
                "transition": "all .3s",
                "height": "100",
                "opacity": "1"
            })
            $(".social-media .social-media-inner a img.side-logo").css({
                "transition": "all .3s",
                "transition-delay": "0.1s",
                "width": "0",
                "opacity": "0"
            })
        }
    });
    $(window).scroll(function () {
        var scrolll = $(window).scrollTop();
        var widthhh = $(window).width();
        if (scrolll >= 100 && widthhh <= 767) {
            $(".navbar.index").css({
                "box-shadow": "#8b8b8b45 1px 1px 5px 1px",
                "transition": "all .3s",
                "background": "#fff"
            })
            $(".navbar.index .navbar-brand").css({
                "background": "transparent",
                "transition": "all .3s"
            })
            $(".navbar.inner").css({
                "box-shadow": "#8b8b8b45 1px 1px 5px 1px",
                "transition": "all .3s",
                "background": "#fff"
            });
        }
        if (scrolll <= 100 && widthhh <= 767) {
            $(".navbar.index").css({
                "box-shadow": "none",
                "transition": "all .3s",
                "background": "transparent"
            });
            $(".navbar.inner").css({
                "box-shadow": "none",
                "transition": "all .3s",
                "background": "#fff"
            });
        }
    });
});
