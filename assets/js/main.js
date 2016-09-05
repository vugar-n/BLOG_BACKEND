$(document).ready(function() {
    //Home Section
    $('.fadeIn').fadeIn(1000);

    //Preloader
    $(document).ready(function($) {
        $(window).load(function() {
            setTimeout(function() {
                $('#preloader').fadeOut('slow', function() {});
            }, 1000);

        });
    });

    //White Navbar while scrolling
    $(window).scroll(function() {
        if ($(window).scrollTop() > 200) {
            $('nav').css('background', 'white').css('box-shadow', '0px 1px 5px 0 #888888').addClass('navbar-fixed-top');
            $(".navbar-nav li a").css({
                color: "black"
            });
            $(".navbar-brand img").attr('src', 'assets/img/logo-inverted.png');
        }
        if ($(window).scrollTop() > 300) {
            $('li:nth-child(odd) img').css('transform', 'translateY(0px)'),
                $('li:nth-child(even) img').css('transform', 'translateY(0px)')
        } else {
            $("nav").removeClass('navbar-fixed-top').removeAttr('style');
            $(".navbar-nav li a").removeAttr('style');
            $(".navbar-brand img").attr('src', 'assets/img/logo.png');
        }
    });
});
