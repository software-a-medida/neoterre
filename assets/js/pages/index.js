$(document).ready(function () {
    $('.home-cover .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true
    })

    $(document).on('click', '#be_part_of_btn', function () {
        $('#be_part_of').toggleClass('d-none')

        if (!$("#be_part_of").hasClass("d-none"))
            $('#be_part_of_btn').text('Leer menos')
        else
            $('#be_part_of_btn').text('Leer más')
    });
});