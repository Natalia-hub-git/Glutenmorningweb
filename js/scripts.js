
/*** NAV BAR ***/

$(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
    $('.logo-opacity').toggleClass('scrolled', $(this).scrollTop() > 200);
});
