$(document).ready(function () {

    var $menu = $("#header");
    $(window).scroll(function() {
        var winScrollTop = $(this).scrollTop();
        if ( $(this).scrollTop() > 100 && $menu.hasClass("default")){
            $menu.removeClass("default").addClass("moved");
        } else if($(this).scrollTop() <= 100 && $menu.hasClass("moved")) {
            $menu.removeClass("moved").addClass("default");
        }
    });

    $("#header__nav, #footer__nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 70}, 1000);
    });


    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });


    if ($(".header__burger").length){
        $(".header__burger").click(function () {
            $('body').toggleClass('locked');
            $('header').toggleClass('mobile-menu');
            $('.header__mobile-menu').toggleClass('active');
        });
        $(".header__mobile-menu a").click(function () {
            $('body').toggleClass('locked');
            $('header').toggleClass('mobile-menu');
            $('.header__mobile-menu').toggleClass('active');
        });
        $(".header__mobile-menu .menu-item-has-children > a").click(function () {
            $(this).closest('.menu-item-has-children').find('.sub-menu').fadeToggle(300);
        });
        if (window.innerWidth < 1025) {
            $(".menu-footer-menu-container .menu-item-has-children > a").click(function () {
                event.preventDefault();
                $(this).toggleClass('shoved');
                $(this).closest('.menu-item-has-children').find('.sub-menu').fadeToggle(300);
            });
        }
    }


    if ($(".banner-photo").length){
        $(".banner-photo__img-click").click(function () {
            $('.banner-photo').addClass('started');
            setTimeout(function() {
                $('.banner-photo__img').fadeOut(1000);
                $('.animation-block').fadeIn(1000);
            }, 1500);
            setTimeout(function() {
                $('.animation-block__animate').removeClass('execute');
            }, 2300);
            setTimeout(function() {
                $('.animation-block__table').fadeIn(300);
            }, 3800);
            if (window.innerWidth < 501) {

            }
        });
    }

    if ($(".banner").length){
        var Bannerswiper = new Swiper(".banner .swiper-container", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".banner-next",
                prevEl: ".banner-prev",
            },
        });
    }

    if ($(".partners").length){
        var PartnersSwiper = new Swiper(".partners .swiper-container", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            allowTouchMove: false,
            autoplay: {
                delay: 3000,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
    }
});

