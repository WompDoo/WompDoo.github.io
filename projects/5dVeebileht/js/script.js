$(document).ready(function () {

    initSlick();
//Projects filtering
    var $slider = $('.portfolio');
    var $slider_clone = $slider.clone(true, true); // add true, true to clone events too!

// When someone clicks on a filter
    $('ul.filter a').click(function () {
        var filter_name = $(this).text().toLowerCase().replace(' ', '-');
        console.log(filter_name);
        // Create a new clone for the slider items
        var $new_slider = $slider_clone.clone(true, true);

        // Clear current slider
        $slider.slick('unslick'); // Remove slick
        $slider.empty(); // Remove elements

        // Show only filtered items
        if (filter_name == "kõik") {
            $slider.append($new_slider.find('.kõik').fadeIn('slow'));
        } else {
            $slider.append($new_slider.find('.' + filter_name).fadeIn('slow'));
        }

        // Slick slider init or call your function that does it like I do
        initSlick();
    });

    /*$('.portfolio').slick('slickUnfilter');
     var filterVal = $(this).text().toLowerCase().replace(' ', '-');
     //$('.portfolio').slickFilter('.' + filterVal);
     console.log($('filterVal'));
     $('.portfolio').slick('slickFilter','.' + filterVal);*/


    //$('.portfolio').slick('GoTo');
    /*$('.portfolio').slick('slickUnfilter');
     //$(this).css('outline', 'none');
     $('ul.filter .current').removeClass('current');
     $(this).parent().addClass('current');

     var filterVal = $(this).text().toLowerCase().replace(' ', '-');

     if (filterVal == 'kõik') {
     $('ul.portfolio li.hidden').fadeIn('slow').removeClass('hidden');
     //$('.portfolio').slick('slickUnfilter');
     } else {
     $('ul.portfolio li').each(function () {
     if (!$(this).hasClass(filterVal)) {
     $(this).fadeOut('normal').addClass('hidden');
     } else {
     $(this).fadeIn('slow').removeClass('hidden');
     }
     });
     //console.log($('.portfolio:visible'))
     $('.portfolio').slick('slickFilter',':not(:hidden)');
     }




     return false;
     });*/


});
// Projects slider
function initSlick() {
    $('.portfolio').slick({
        infinite: false,
        speed: 300,
        rows: 2,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });
}

/*function destroySlick() {
 $('.portfolio').slick('unslick');
 }*/

//Active menu scrolling
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 77
        }, 500);
        event.preventDefault();
    });
});

//IE Placeholder fix
$('[placeholder]').focus(function () {
    var input = $(this);
    if (input.val() == input.attr('placeholder')) {
        input.val('');
        input.removeClass('placeholder');
    }
}).blur(function () {
    var input = $(this);
    if (input.val() == '' || input.val() == input.attr('placeholder')) {
        input.addClass('placeholder');
        input.val(input.attr('placeholder'));
    }
}).blur().parents('form').submit(function () {
    $(this).find('[placeholder]').each(function () {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
            input.val('');
        }
    })
});


if (navigator.userAgent.indexOf('MSIE') != -1)
    var detectIEregexp = /MSIE (\d+\.\d+);/ //test for MSIE x.x
else // if no "MSIE" string in userAgent
    var detectIEregexp = /Trident.*rv[ :]*(\d+\.\d+)/ //test for rv:x.x or rv x.x where Trident string exists

if (detectIEregexp.test(navigator.userAgent)) { //if some form of IE
    var ieversion = new Number(RegExp.$1) // capture x.x portion and store as a number
    if (ieversion >= 8 && ieversion <= 12)
        if (window.addEventListener) {
            window.addEventListener('DOMMouseScroll', wheel, false);
        }
    window.onmousewheel = document.onmousewheel = wheel;
}
var time = 200;
var distance = 300;

function wheel(event) {
    console.log(event);
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle();
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle() {

    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time);
}
if (ieversion == 8) {
    var vHeight = $(window).height(),
        vWidth = $(window).width(),
        cover = $('#index');
    cover.css({"height": vHeight, "width": vWidth});
}




if (!Modernizr.svg) {
    $('img[src$=".svg"]').each(function () {
        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
    });
}
