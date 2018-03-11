$(document).ready(function () {

//window and animation items
    var animation_elements = $.find('.animation-element');
    var web_window = $(window);

//check to see if any animation containers are currently in view
    function check_if_in_view() {
        //get current window information
        var window_height = web_window.height();
        var window_top_position = web_window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        //iterate through elements to see if its in view
        $.each(animation_elements, function () {

            //get the element sinformation
            var element = $(this);
            var element_height = $(element).outerHeight();
            var element_top_position = $(element).offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                element.addClass('in-view');
            } else {
                element.removeClass('in-view');
            }
        });

    }

    function resize_heigth_fix() {
        var particles = $("#particles");

        if ($(window).width() < 769) {
            // height: 500px !important;
            //alert('Less than 960');
            //particles.style('height', '345px', 'important');
            particles.css('height', '345px');
        } else {
            particles.css('height', '500px');
            //particles.style('height', '500px', 'important');
        }
    }

//on or scroll, detect elements in view
    $(window).on('scroll resize', function () {
        check_if_in_view();
        resize_heigth_fix();
    });
//trigger our scroll event on initial load
    $(window).trigger('scroll');

});

document.addEventListener('DOMContentLoaded', function () {
    particleground(document.getElementById('particles'), {
        dotColor: 'rgb(0, 0, 255)',
        lineColor: 'rgba(16, 14, 61, 0.61)'
    });

    //var intro = document.getElementById('intro');
    //intro.style.marginTop = -intro.offsetHeight / 2 + 'px';
}, false);