var tombolUp = $('#top_section');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        tombolUp.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});