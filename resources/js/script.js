var colorCont = 1;
function changeColor() {
    switch (colorCont) {
        case 1:
            setActiveStyleSheet('light-red');
            break;
        case 2:
            setActiveStyleSheet('blue');
            break;
        case 3:
            setActiveStyleSheet('light-blue');
            break;
        case 4:
            setActiveStyleSheet('green');
            break;
        case 5:
            setActiveStyleSheet('light-green');
            break;
        case 6:
            setActiveStyleSheet('yellow');
            break;
        default:
            colorCont = 1;
            break;
    }
    colorCont++;
}


function loadModalProvider(idProvider) {   
    var params = {
        op: "infoProvider",
        idProvider: idProvider
    }
    $.ajax({
        url: "./web/admin/app/page/Page.php",
        data: params,
        dataType: 'json',
        type: 'post'
    }).done(function (data) {
        
        var template = "<div class='section-title text-center'>";
        template += "<h3>" + data.provider.nombre + "</h3>";
        template += "<p align='center'><img style='width: 150px' src='images/providers/" + data.provider.img + "' class='img-responsive img-rounded' alt='" + data.provider.imgAlt + "'/></p>";
        $.each(data.providerInfo, function (i, v) {
            template += "<p>" + v.contenido + "</p>";
        });
        template += "</div>";

        $("#egigiModalContent").html("").html(template);
        $("#egigiModal").modal();
    });


}
function loadModalBlog(idBlog) {
    
    var params = {
        op: "infoBlog",
        idBlog: idBlog
    }
    $.ajax({
        url: "./web/admin/app/page/Page.php",
        data: params,
        dataType: 'json',
        type: 'post'
    }).done(function (data) {
        
        var template = "<div class='section-title text-center'>";
        template += "<h3>" + data.blog.nombre + "</h3>";
        template += "<p align='center'><img style='width: 150px' src='resources/images/blog/" + data.blog.img + "' class='img-responsive img-rounded' alt='" + data.blog.imgAlt + "'/></p>";
        $.each(data.blogInfo, function (i, v) {
            template += "<p>" + v.contenido + "</p>";
        });
        template += "</div>";

        $("#egigiModalContent").html("").html(template);
        $("#egigiModal").modal();
    });


}


setInterval(changeColor, 3000);





var $ = jQuery.noConflict();


// Page Loader
$(window).load(function () {

    "use strict";
    $('#loader').fadeOut();
});



// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {

    "use strict";

    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 68
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});



// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 70

});



// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function () {
    "use strict";
    $('.navbar-toggle:visible').click();
});




/*----------------------------------------------------*/
/*	Css3 Transition
 /*----------------------------------------------------*/

$('*').each(function () {
    if ($(this).attr('data-animation')) {
        var $animationName = $(this).attr('data-animation'),
                $animationDelay = "delay-" + $(this).attr('data-animation-delay');
        $(this).appear(function () {
            $(this).addClass('animated').addClass($animationName);
            $(this).addClass('animated').addClass($animationDelay);
        });
    }
});




/*--------------------------------------------------*/
/* Counter*/
/*--------------------------------------------------*/


$('.timer').countTo();

$('.counter-item').appear(function () {
    $('.timer').countTo();
}, {accY: -100});





////------- Testimonials Carousel

var testimonial = $("#testimonial-carousel");

testimonial.owlCarousel({
    navigation: true,
    pagination: true,
    slideSpeed: 2500,
    stopOnHover: true,
    autoPlay: 3000,
    singleItem: true,
    transitionStyle: "fade",
    navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
});



////------- Pricing Table

$(document).ready(function () {

    $(".pricing").owlCarousel({
        pagination: true,
        navigation: false,
        slideSpeed: 2500,
        stopOnHover: true,
        autoPlay: 3000,
        singleItem: false,
        itemsMobile: [550, 1],
        itemsDesktopSmall: [991, 2],
        items: 4,
        transitionStyle: "fade",
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

});


////------- Latest News

$(document).ready(function () {

    $(".latest-news").owlCarousel({
        pagination: true,
        navigation: false,
        slideSpeed: 2500,
        stopOnHover: true,
        autoPlay: 4000,
        singleItem: false,
        itemsMobile: [550, 1],
        itemsDesktopSmall: [991, 2],
        items: 3,
        transitionStyle: "fade",
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

});




// Team Carousel

$(document).ready(function () {

    $(".our-team").owlCarousel({
        pagination: true,
        slideSpeed: 2500,
        stopOnHover: true,
        autoPlay: 3000,
        items: 4,
        //singleItem:true,
        itemsMobile: [550, 1],
        itemsDesktopSmall: [991, 2],
        transitionStyle: "fade",
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

});



////------- Partner/CLients

$(document).ready(function () {

    $(".clients").owlCarousel({
        pagination: false,
        navigation: true,
        slideSpeed: 2500,
        stopOnHover: true,
        autoPlay: 3000,
        singleItem: false,
        itemsMobile: [550, 1],
        itemsDesktopSmall: [991, 2],
        items: 5,
        transitionStyle: "fade",
        navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
    });

});




$(function () {

    $(".video").fitVids();

});





// Tab------------------------------


$('#team a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})




/*---------------------------------------------------*/
/* Progress Bar
 /*---------------------------------------------------*/
$(document).ready(function ($) {
    "use strict";

    $('.skill-shortcode').appear(function () {
        $('.progress').each(function () {
            $('.progress-bar').css('width', function () {
                return ($(this).attr('data-percentage') + '%')
            });
        });
    }, {accY: -100});


});


