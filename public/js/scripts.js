/* ---------------------------------------------
 common scripts
 --------------------------------------------- */

;(function () {

    "use strict"; // use strict to start

    /* ---------------------------------------------
     tb preloader init
     --------------------------------------------- */
    $(window).on('load', function() {
        $("body").imagesLoaded(function(){
            $(".tb-preloader-wave").fadeOut();
            $("#tb-preloader").delay(200).fadeOut("slow").remove();
        });
    });

    /* ---------------------------------------------
     WOW init
     --------------------------------------------- */
    if (typeof WOW == "function")
    new WOW().init();

    $(document).ready(function () {
        
        /* ---------------------------------------------
         retina fix
         --------------------------------------------- */
         if (window.devicePixelRatio > 1){
            $(".retina").each(function(){
                var src = $(this).attr("src").replace(".","@2x.");
                var h = $(this).height();
                var w = $(this).width();
                $(this).attr("src",src).css({height:h,width:'auto'});
            });
         }


        /* ---------------------------------------------
         smooth scroll
         --------------------------------------------- */
         if( typeof smoothScroll == 'object'){
             smoothScroll.init();
         }



         /* ---------------------------------------------
         alternate menu appear
         --------------------------------------------- */

        $("#massive-menu-alt").html('<ul class="menuzord-menu">' + $("#menu-list").html() + "</ul>");


        /* ---------------------------------------------
         massive mega menu
         --------------------------------------------- */

        jQuery("#massive-menu, #massive-menu-alt").menuzord({
            indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
            indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
        });


        /* ---------------------------------------------
         menu highlight fix
         --------------------------------------------- */

        $(".op-nav li").on("click",function(){
            if($(".showhide").is(":visible")){
                $(".showhide").trigger("click");
            }
            $(".op-nav li").removeClass("active");
            $(this).addClass("active");
        });


        /* ---------------------------------------------
         nav sticky header
         --------------------------------------------- */

        var navBottom = $(".nav-bottom").offset();

        $(window).scroll(function () {
            var w = $(window).width();
            if ($(".nav-bottom").length == 0) {
                if (w > 768) {
                    if ($(this).scrollTop() > 1) {
                        $('header').addClass("sticky");
                    }
                    else {
                        $('header').removeClass("sticky");
                    }
                }
            } else {
                if (w > 768) {
                    if ($(this).scrollTop() > navBottom.top + 100) {
                        $('header').addClass("sticky");
                    }
                    else {
                        $('header').removeClass("sticky");
                    }
                }
            }
        });


        //left nav remove sticky class

        $(window).scroll(function () {
            var w = $(window).width();
            if (w > 768) {
                $('.left-nav-fixed header').removeClass("sticky");
            }
        });




        /* ---------------------------------------------
         sticky header alt
         --------------------------------------------- */

        $(window).scroll(function () {
            var w = $(window).width();
            if (w > 768) {
                if ($(this).scrollTop() > 1) {
                    $('.mainmenu').slideUp(function () {
                        $('.menu-appear-alt').css({position: "fixed", top: 0, left: 0, width: w, zIndex: 99999});
                        $('.menu-appear-alt').slideDown();
                    });

                }
                else {
                    $('.menu-appear-alt').slideUp(function () {
                        $('.menu-appear-alt').css({position: "relative", top: 0, left: 0, width: w, zIndex: 99999});
                        $('.mainmenu').slideDown();

                    });

                }
            }

            $(".nav-bottom").css("z-Index", 100000);

            if(navBottom) {
                if ($(window).scrollTop() > (navBottom.top)) {
                    $(".nav-bottom").css({"position": "fixed", "top": "0px", "left": "0px"});
                } else {
                    $(".nav-bottom").css({"position": "fixed", top: navBottom.top - $(window).scrollTop() + "px"});
                }
            }

        });


        /* ---------------------------------------------
         flex slider
         --------------------------------------------- */

        $(window).load(function () {
            $('.portfolio-slider').flexslider({
                animation: "slide",
                direction: "vertical",
                slideshowSpeed: 3000,
                start:function(){
                    imagesLoaded($(".portfolio"),function(){
                        setTimeout(function(){
                            $('.portfolio-filter li:eq(0) a').trigger("click");
                        },500);
                    });
                }
            });
        });

        $(window).load(function () {
            $('.portfolio-slider-alt').flexslider({
                animation: "slide",
                direction: "horizontal",
                slideshowSpeed: 4000,
                start:function(){
                    imagesLoaded($(".portfolio"),function(){
                        setTimeout(function(){
                            $('.portfolio-filter li:eq(0) a').trigger("click");
                        },500);
                    });
                }
            });
        });

        $(window).load(function () {
            $('.post-slider-thumb').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });

        $(window).load(function() {
            $('.post-slider').flexslider({
                animation: "slide"
            });
        });

        $(window).load(function() {
            $('.news-slider').flexslider({
                animation: "slide",
                slideshowSpeed: 3000
            });
        });



        /* ---------------------------------------------
         full screen banner
         --------------------------------------------- */

        $(window).bind('resizeEnd', function () {
            $("#fullscreen-banner").height($(window).height());
        });

        $(window).resize(function () {
            if (this.resizeTO) clearTimeout(this.resizeTO);
            this.resizeTO = setTimeout(function () {
                $(this).trigger('resizeEnd');
            }, 300);
        }).trigger("resize");



        /* ---------------------------------------------
         portfolio filter set active class
         --------------------------------------------- */

        $('.portfolio-filter li').click(function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });


        /* ---------------------------------------------
         isotope | init Isotope
         --------------------------------------------- */

        var $container = $(".portfolio:not(.portfolio-masonry)");
        if ($.fn.imagesLoaded && $container.length > 0) {
            imagesLoaded($container, function () {
                setTimeout(function(){
                    $container.isotope({
                        itemSelector: '.portfolio-item',
                        layoutMode: 'fitRows',
                        filter: '*'
                    });

                    $(window).trigger("resize");
                    // filter items on button click
                },500);

            });
        }

        /* ---------------------------------------------
         portfolio masonry
         --------------------------------------------- */

        $(window).load( function() {

            var $c = $('.portfolio-masonry');
            if(typeof imagesLoaded == 'function') {
                imagesLoaded($c, function () {

                    setTimeout(function () {
                        $c.isotope({
                            itemSelector: '.portfolio-item',
                            resizesContainer: false,
                            layoutMode: 'masonry',
                            filter: "*"
                        });
                    }, 500);

                });
            }

        });


        /* ---------------------------------------------
         portfolio individual gallery
         --------------------------------------------- */


        $('.portfolio-slider, .portfolio-slider-alt').each(function () { // the containers for all your galleries
            var _items = $(this).find("li > a");
            var items = [];
            for (var i = 0; i < _items.length; i++) {
                items.push({src: $(_items[i]).attr("href"), title: $(_items[i]).attr("title")});
            }
            $(this).parent().find(".action-btn").magnificPopup({
                items: items,
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
            $(this).parent().find(".portfolio-description").magnificPopup({
                items: items,
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });


        /* ---------------------------------------------
         portfolio gallery
         --------------------------------------------- */


        $('.portfolio-gallery').each(function () { // the containers for all your galleries
            $(this).find(".popup-gallery").magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
            $(this).find(".popup-gallery2").magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });


        /* ---------------------------------------------
         portfolio filtering
         --------------------------------------------- */

        $('.portfolio-filter').on('click', 'a', function () {
            $('#filters button').removeClass('current');
            $(this).addClass('current');
            var filterValue = $(this).attr('data-filter');
            $(this).parents(".text-center").next().isotope({filter: filterValue});
        });



        /* ---------------------------------------------
         Progress bars
         --------------------------------------------- */


        var progressBar = $(".progress-bar");
        progressBar.each(function(indx){
            $(this).data('animated',0);
            if($.fn.visible) {
                animateProgressbar(this);
            }
        });
        $(window).on("scroll",function(){
            if($.fn.visible){
                progressBar.each(function(){
                    animateProgressbar(this);
                })
            }
        });

        function animateProgressbar(pb){
            if($(pb).data('animated')==0){
                if($(pb).visible()){
                    $(pb).css("width", $(pb).attr("aria-valuenow") + "%");
                    $(pb).data('animated',1);
                }
            }
        }


        /* ---------------------------------------------
         popup link
         --------------------------------------------- */


        $('.popup-link').magnificPopup({
            type: 'image'
            // other options
        });


        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });


        /* ---------------------------------------------
         accordion
         --------------------------------------------- */


        var allPanels = $(".accordion > dd").hide();
        allPanels.first().slideDown("easeOutExpo");
        $(".accordion").each(function () {
            $(this).find("dt > a").first().addClass("active").parent().next().css({display: "block"});
        });

        $(".accordion > dt > a").click(function () {

            var current = $(this).parent().next("dd");
            $(this).parents(".accordion").find("dt > a").removeClass("active");
            $(this).addClass("active");
            $(this).parents(".accordion").find("dd").slideUp("easeInExpo");
            $(this).parent().next().slideDown("easeOutExpo");

            return false;

        });


        /* ---------------------------------------------
         toggle accordion
         --------------------------------------------- */

        var allToggles = $(".toggle > dd").hide();

        $(".toggle > dt > a").click(function () {

            if ($(this).hasClass("active")) {

                $(this).parent().next().slideUp("easeOutExpo");
                $(this).removeClass("active");

            }
            else {
                var current = $(this).parent().next("dd");
                $(this).addClass("active");
                $(this).parent().next().slideDown("easeOutExpo");
            }

            return false;
        });


        /* ---------------------------------------------
         career show details
         --------------------------------------------- */

        $(".show-detail").click(function(e){
            $(this).next().slideToggle();
            e.preventDefault();
            $(this).css({opacity:0})
        });

        $(".cancel-btn").click(function(e){
            var prnt = $(this).parents(".career-details-info");
            prnt.slideToggle();
            e.preventDefault();
            $(prnt).prev().css({opacity:1})
        });

        $(".career-details-info .apply-btn").on("click",function(){

        });



        /* ---------------------------------------------
         countTo
         --------------------------------------------- */
        var timers = $(".timer");
        if($.fn.countTo) {
            timers.each(function(){
                $(this).data('animated',0);
                animateTimer(this);
            });
        }

        $(window).on("scroll",function(){
            timers.each(function(){
                animateTimer(this);
            });
        });

        function animateTimer(timer){
            if($(timer).data('animated')==0){
                if($.fn.visible && $(timer).visible()) {
                    $(timer).data('animated', 1);
                    $(timer).countTo();
                }
            }
        }


        /* ---------------------------------------------
         carousel
         --------------------------------------------- */
        if($.fn.owlCarousel) {

            $("#clients-1").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 6,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]

            });

            $("#testimonial-2").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 1
            });

            $("#testimonial-3").owlCarousel({
                autoPlay: 4000, //Set AutoPlay to 3 seconds
                items : 1
            });

            $("#testimonial-4").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 1
            });

            $("#testimonial-5").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 1
            });

            $("#carousel-object").owlCarousel({
                autoPlay: 4000, //Set AutoPlay to 3 seconds
                items : 1
                //pagination : false
            });

            $("#owl-slider").owlCarousel({
                autoPlay: 4000, //Set AutoPlay to 3 seconds
                items : 1,
                navigation : true,
                //pagination : false,
                navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
            });


            $("#img-carousel").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]

            });

            $("#portfolio-carousel").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 3,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                navigation : true,
                pagination : false,
                navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]

            });

            $("#portfolio-carousel-alt").owlCarousel({
                autoPlay: false, //Set AutoPlay to 3 seconds
                items : 3,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                navigation : true,
                pagination : false,
                navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
            });
        }

        $(".portfolio-with-title").addClass("portfolio");

        /* ---------------------------------------------
         slider typist
         --------------------------------------------- */

        if(typeof Typist == 'function') {
            new Typist(document.querySelector('.typist-element'), {
                letterInterval: 60,
                textInterval: 3000
            });
        }


        /* ---------------------------------------------
         Back To Top
         --------------------------------------------- */

        $('body').append('<a id="tb-scroll-to-top" data-scroll class="tb-scroll-to-top-hide" href="#"><i class="fa fa-angle-up"></i></a>');

        var $tbScrollBack = $('#tb-scroll-to-top');
        $(window).on('scroll', function() {
            if($(this).scrollTop() > $(this).height()) {
                $tbScrollBack
                .addClass('tb-scroll-to-top-show')
                .removeClass('tb-scroll-to-top-hide');
            } else {
                $tbScrollBack
                .addClass('tb-scroll-to-top-hide')
                .removeClass('tb-scroll-to-top-show');
            }
        });



    });

})(jQuery);