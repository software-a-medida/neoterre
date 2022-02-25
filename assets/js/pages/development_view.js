$(document).ready(function () {
    var owlSlideshowCover = $('.gallery-carousel .owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        dots: false,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 6000,
        rewind: true
    });

    $('.gallery-carousel .owl-controls .prev').on('click', function () {
        owlSlideshowCover.trigger('prev.owl.carousel');
    });

    $('.gallery-carousel .owl-controls .next').on('click', function () {
        owlSlideshowCover.trigger('next.owl.carousel');
    });
});