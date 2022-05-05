$(document).ready(function() {
    "use strict";

    //===== Preloader
    // $(window).on('load', function(event) {
        $('.proloader').delay(500).fadeOut(500);
    // });


    // sticky
    var wind = $(window);
    var sticky = $('.header-bar-area');
    wind.on('scroll', function() {
        var scroll = wind.scrollTop();
        if (scroll < 100) {
            sticky.removeClass('sticky');
        } else {
            sticky.addClass('sticky');
        }
    });
    

    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });


    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });



    // Smooth Scroll Effect
    $('.main-menu li a').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = '88';
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInSine');
        event.preventDefault();
    });


    // Smooth Scroll Effect
    $('.ofcavas-menu ul li a').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = '88';
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInSine');
        event.preventDefault();
    });


    $('.ofcavas-menu ul li a').on('click', function(e) {
        e.preventDefault();
        $('.ofcavas-menu').removeClass('current');
    });

    $('.ofcavas-menu ul li a').on('click', function(e) {
        e.preventDefault();
        $('.ofcavas-menu').removeClass('current');
    });


    // Hamburger-menu
    $('.hamburger-menu').on('click', function() {
        $('.hamburger-menu .line-top, .ofcavas-menu').toggleClass('current');
        $('.hamburger-menu .line-center').toggleClass('current');
        $('.hamburger-menu .line-bottom').toggleClass('current');
    });


    $('.ofcavas-menu ul li a').on('click', function() {
        $('.hamburger-menu .line-top, .ofcavas-menu').removeClass('current');
        $('.hamburger-menu .line-center').removeClass('current');
        $('.hamburger-menu .line-bottom').removeClass('current');
    });


    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 88)
                }, 1000);
                return false;
            }
        }
    });

    $('.menu-item a').on('click', function () {
        $('.menu-item a').removeClass('active');
        $(this).addClass('active');
    })

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 90
    });

    $('.read_more').on('click', function () {
        $(this).fadeOut();
    })

    // $(this).toggle(
    // function(){
    // $('body, html').addClass('stop-scrolling');
    // $('body, html').bind('touchmove', function(e){e.preventDefault(),$(this).addClass('stop-scrolling')});
    // alert("bir");
    // },
    // function(){
    // $('body, html').addClass('stop-scrolling');
    // $('body, html').bind('touchmove', function(e){e.preventDefault(),$(this).addClass('stop-scrolling')});
    // alert("iki");
    // });	
								   
			
		
	 

// var num_photos = 9;		
// $(document).ready(function(){
//     $.ajax({
//         url: 'https://www.instagram.com/zimmermanandy/?__a=1',
//         dataType: 'json',
//         type: 'GET',
//         success: function(data){
//             data.graphql.user.edge_owner_to_timeline_media.edges
//             if (!data || !data.graphql || !data.graphql.user || !data.graphql.user.edge_owner_to_timeline_media || !data.graphql.user.edge_owner_to_timeline_media.edges) {
//                 console.log("Instagram data not found");
//                 return;
//             }

//             var images = data.graphql.user.edge_owner_to_timeline_media.edges;
//             var maxLength = images.length > 9 ? 8 : images.length - 1;
//             for (let i = 0; i <= maxLength; i++) {
//                 var node = images[i].node;
//                 var html = `<div class="col-md-4 col-6">
//                 <div class="instagram_img mb-30">
//                     <a href="https://www.instagram.com/p/${node.shortcode}" target="_blank"><img src="${node.thumbnail_src}" alt="${node.accessibility_caption}"></a>
//                 </div>
//                 </div>`;
//                 $("#instgram_container").append(html);
//             }
//         },
//         error: function(data){ console.log(data)}
//     });	

// });
})
// (jQuery);
