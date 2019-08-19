(function($) {
  $(window).scroll(function() {
    if ($(window).scrollTop() > $('.home-hero').height()) {
      $('.site-header').removeClass('reverse-header');
    } else {
      $('.site-header').addClass('reverse-header');
    }
  });
})(jQuery);
