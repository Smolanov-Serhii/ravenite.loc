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

    if ($("#map").length){
        function initMap() {
            var element = document.getElementById('map');
            var options = {
                zoom: 12,
                mapId: "fe6c29d69dc8d295",
                center: {lat:  46.58499387932818, lng: 6.603990154721755},
            };

            var myMap = new google.maps.Map(element, options);

            var markers = [
                {
                    coordinates: {lat: 46.58499387932818, lng: 6.603990154721755},
                    // info: '<h3>Москва</h3><br><img src="https://placehold.it/200x150"><br><p>Описание</p>'
                },
                // {
                //     coordinates: {lat: 59.940208, lng: 30.328092},
                //     info: '<h3>Санкт-Петербург</h3><br> <img src="https://placehold.it/200x150"><br><p>Описание</p>'
                // },
                // {
                //     coordinates: {lat: 50.449973, lng: 30.524911},
                //     info: '<h3>Киев</h3><br><img src="https://placehold.it/200x150"><br><p>Описание</p>'
                // }
            ];

            for(var i = 0; i < markers.length; i++) {
                addMarker(markers[i]);
            }

            function addMarker(properties) {
                var IconImg = $('#map').data('marker');
                var marker = new google.maps.Marker({
                    position: properties.coordinates,
                    icon: IconImg,
                    map: myMap
                });

                if(properties.image) {
                    marker.setIcon(properties.image);
                }

                if(properties.info) {
                    var InfoWindow = new google.maps.InfoWindow({
                        content: properties.info
                    });

                    marker.addListener('click', function(){
                        InfoWindow.open(myMap, marker);
                    });
                }
            }
        }
        initMap();
    }

    if ($("section.team").length){
        $(".team__item-header").click(function () {
            $(this).closest('.team__item').toggleClass('active').find('.team__item-wrapper').fadeToggle(300);
        });
    }
    if ($(".header__burger").length){
        $(".header__burger").click(function () {
            $('body').toggleClass('locked');
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

    if ($(".reasons-main").length){
        $(".reasons-main__item").click(function () {
            $('.center-image').fadeOut(500);
            var CurrentElement = $(this).data('item');
            var ImageElement = $(this).data('image');
            $('.reasons-main__wrapper').removeClass('rotate-position-item1').removeClass('rotate-position-item2').removeClass('rotate-position-item3').removeClass('rotate-position-item4');
            $('.reasons-main__item').removeClass('active');
            $(this).addClass('active');
            $('.reasons-main__wrapper').addClass('rotate-position-' + CurrentElement + '');
            setTimeout(function() {
                $('.center-image').attr('src', '' + ImageElement + '');
                $('.center-image').fadeIn(500);
            }, 500);
        });
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
});

