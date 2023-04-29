$('.page-scroll').on('click', function (e) {

    var href = $(this).attr('href');
    var elemenHref = $(href);

    $('html, body').animate({
        scrollTop: elemenHref.offset().top - 68
    }, 1200, 'easeInOutQuint');

    e.preventDefault();
});

$(window).on('load', function () {
    $('.pleft').addClass('show');
    $('.pright').addClass('show');
})

$(window).scroll(function () {
    var wscroll = $(this).scrollTop();

    $('.jumbotron img').css({
        'transform': 'translate(0, ' + wscroll / 2.3 + '%)'
    });

    $('.jumbotron h1').css({
        'transform': 'translate(0, ' + wscroll / 1.2 + '%)'
    });

    $('.jumbotron h5').css({
        'transform': 'translate(0, ' + wscroll / 0.5 + '%)'
    });

    if (wscroll > $('.portfolio').offset().top - 250) {
        $('.portfolio .card-img-top').each(function (i) {
            setTimeout(function () {
                $('.portfolio .card-img-top').eq(i).addClass('show');
            }, 100 * (i + 1));
        })
    }
})