$(document).ready(function () {

    var counter = 0;
    // $('#nav-top')
    var mark = true;
    $(window).on('scroll',function (e) {
        console.log($(window).scrollTop());
         if($(window).scrollTop() > 250){
             if(mark){
                 $('#nav-top').animate({ top: '-40px'},700);
                 $('#nav').animate({ opacity: 1, top: '0px'}, 700).addClass('bordered-bottom');

                 mark = false;
             }
         } else {
            if(!mark){
                $('#nav-top').animate({ top: '0px'},700);
                $('#nav').animate({ opacity: 0.95, top: '40px'}, 700).removeClass('bordered-bottom');
                mark = true;
            }
         }
    });

    var speed = 5000;

    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();


    //if user clicked on prev button

    $('#controls button').click(function (e) {
        //slide the item

        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }

        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }

        //cancel the link behavior
        return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });


    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }

    var testimoni;
    $.get('/testimoni.json',function (data) {
        testimoni = JSON.parse(data);
        console.log(testimoni);
    });

    $('.single-item').slick();
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })

});

function rotate() {
    $('#next').click();
}