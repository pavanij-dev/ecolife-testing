var mirandaDoc;
!(function (e) {
    "use strict";
    (mirandaDoc = {
        init: function () {
             this.mianMenu(),
                 this.bannerSlider(),
                 this.roomSlider(),
                this.counterToUp(),
                this.instaFeedSlider(),
                this.gallery(),
                this.roomSliderTwo(),
                this.bannerImgSlider();
        },
        mianMenu() {
            var a = e(window),
                i = e(".nav-container"),
                s = e(".nav-pushed-item"),
                o = e(".nav-push-item"),
                t = o.html(),
                n = "",
                r = e(".navbar-toggler"),
                l = e(".nav-menu"),
                d = (e(".nav-menu ul li"), e(".navbar-close"));
            function c() {
                window.innerWidth <= 991 ? (i.addClass("breakpoint-on"), s.html(t), o.hide()) : (i.removeClass("breakpoint-on"), s.html(n), o.show());
            }
            r.on("click", function () {
                r.toggleClass("active"), l.toggleClass("menu-on");
            }),
                d.on("click", function () {
                    l.removeClass("menu-on"), r.removeClass("active");
                }),
                l.find("li a").each(function () {
                    e(this).next().length > 0 && e(this).parent("li").append('<span class="dd-trigger"><i class="fal fa-angle-down"></i></span>');
                }),
                l.find("li .dd-trigger").on("click", function (a) {
                    a.preventDefault(), e(this).parent("li").children("ul").stop(!0, !0).slideToggle(350), e(this).parent("li").toggleClass("active");
                }),
                c(),
                a.on("resize", function () {
                    c();
                });
        },
        bannerSlider() {
            var a = e("#bannerSlider");
            function i(a) {
                a.each(function () {
                    var a = e(this),
                        i = a.data("delay"),
                        s = "animated " + a.data("animation");
                    a.css({ "animation-delay": i, "-webkit-animation-delay": i }),
                        a.addClass(s).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                            a.removeClass(s);
                        });
                });
            }
            a.on("init", function (a, s) {
                i(e(".single-banner:first-child").find("[data-animation]"));
            }),
                a.on("beforeChange", function (a, s, o, t) {
                    i(e('.single-banner[data-slick-index="' + t + '"]').find("[data-animation]"));
                }),
                a.slick({
                    infinite: !0,
                    autoplay: !0,
                    autoplaySpeed: 5e3,
                    dots: !1,
                    fade: !0,
                    arrows: !1,
                    prevArrow: '<div class="slick-arrow prev-arrow"><i class="fa fa-arrow-left"></i></div>',
                    nextArrow: '<div class="slick-arrow next-arrow"><i class="fa fa-arrow-right"></i></div>',
                });
        },
        instaFeedSlider() {
            e(".instagram-slider").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                margin: 10,
                fade: !1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 4e3,
                arrows: !0,
                dots: !1,
                prevArrow: '<div class="slick-arrow prev-arrow"><i class="fa fa-arrow-left"></i></div>',
                nextArrow: '<div class="slick-arrow next-arrow"><i class="fa fa-arrow-right"></i></div>',
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 4 } },
                    { breakpoint: 768, settings: { slidesToShow: 3 } },
                    { breakpoint: 576, settings: { slidesToShow: 1.1 } },
                ],
            }),
                e(".instagram-slider").each(function () {
                    e(".image a.insta-popup")
                        .not(".slick-slide.slick-cloned a.insta-popup")
                        .magnificPopup({ type: "image", gallery: { enabled: !0 }, mainClass: "mfp-fade" });
                });
        },
        gallery() {
            e(".gallery-slider").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                fade: !1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 4e3,
                arrows: !1,
                dots: !1,
                responsive: [
                    { breakpoint: 768, settings: { slidesToShow: 2 } },
                    { breakpoint: 500, settings: { slidesToShow: 1 } },
                ],
            }),
                e(".gallery-slider").each(function () {
                    e(".slick-slide a.gallery-popup")
                        .not(".slick-slide.slick-cloned a.gallery-popup")
                        .magnificPopup({ type: "image", gallery: { enabled: !0 }, mainClass: "mfp-fade" });
                });
        },
        roomSlider() {
            var a = e(".rooms-slider-one"),
                i = e(".room-content-slider"),
                s = e(".slider-count"),
                o = e(".slider-count-big");
            a.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                fade: !1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 4e3,
                arrows: !1,
                dots: !1,
                centerMode: !0,
                centerPadding: "6%",
                asNavFor: i,
                responsive: [
                    { breakpoint: 1600, settings: { slidesToShow: 2 } },
                    { breakpoint: 992, settings: { slidesToShow: 1, centerPadding: "15%" } },
                ],
            }),
                i.slick({ slidesToShow: 1, slidesToScroll: 1, fade: !1, infinite: !0, autoplay: !0, autoplaySpeed: 4e3, arrows: !1, dots: !0, asNavFor: a }),
                i.on("init reInit afterChange", function (e, a, i, t) {
                    if (a.$dots) {
                        var n = (i || 0) + 1,
                            r = n > 10 ? n : "0" + n;
                        s.html('<span class="current">' + r + "</span>/" + a.$dots[0].children.length), o.html("<span >" + r + "</span> ");
                    }
                });
        },
        counterToUp() {
            e(".counter-box").bind("inview", function (a, i, s, o) {
                i &&
                    (e(this)
                        .find(".counter")
                        .each(function () {
                            var a = e(this);
                            e({ Counter: 0 }).animate(
                                { Counter: a.text() },
                                {
                                    duration: 2e3,
                                    easing: "swing",
                                    step: function () {
                                        a.text(Math.ceil(this.Counter));
                                    },
                                }
                            );
                        }),
                    e(this).unbind("inview"));
            });
        },
        roomSliderTwo() {
            e(".rooms-slider-two").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: !1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 4e3,
                arrows: !0,
                dots: !1,
                centerMode: !0,
                centerPadding: "28%",
                prevArrow: '<div class="slick-arrow prev-arrow"><i class="fa fa-arrow-left"></i></div>',
                nextArrow: '<div class="slick-arrow next-arrow"><i class="fa fa-arrow-right"></i></div>',
                responsive: [
                    { breakpoint: 1600, settings: { centerPadding: "20%" } },
                    { breakpoint: 992, settings: { centerPadding: "15%" } },
                    { breakpoint: 768, settings: { centerPadding: "10%" } },
                    { breakpoint: 576, settings: { centerPadding: "5%" } },
                ],
            });
        },
        bannerImgSlider() {
            e(".hero-slider-one").slick({ slidesToShow: 1, slidesToScroll: 1, fade: !0, infinite: !0, autoplay: !0, autoplaySpeed: 4e3, arrows: !1, dots: !1 });
        },
    }),
        e(document).ready(function () {
            mirandaDoc.init();
        }),
        e(window).on("load", function () {
            e(".preloader").fadeOut("slow", function () {
                e(this).remove();
            }),
                e("#backToTop").on("click", function (a) {
                    a.preventDefault(), e("html, body").animate({ scrollTop: "0" }, 1200);
                });
        }),
        e(window).on("scroll", function () {
            var a = e(window).scrollTop();
            a < 150 ? e(".sticky-header").removeClass("sticky-active") : e(".sticky-header").addClass("sticky-active"), a > 300 && e("#backToTop").addClass("active"), a < 300 && e("#backToTop").removeClass("active");
        }),
        e(".tabs-box").length &&
            e(".tabs-box .tab-buttons .tab-btn").on("click", function (a) {
                a.preventDefault();
                var i = e(e(this).attr("data-tab"));
                if (e(i).is(":visible")) return !1;
                i.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn"),
                    e(this).addClass("active-btn"),
                    i.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0),
                    i.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab animated fadeIn"),
                    e(i).fadeIn(300),
                    e(i).addClass("active-tab animated fadeIn");
            });
})(jQuery);