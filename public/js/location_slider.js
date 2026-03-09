$(document).ready(function () {
    $('#location-slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.slider-arrows-custom .left'),
        nextArrow: $('.slider-arrows-custom .right'),
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 586,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});