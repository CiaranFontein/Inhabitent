(function($) {
  $(function() {
    if ($('.hero-image-header').height() > 0 || $('.home-hero').height() > 0) {
      $('.site-header').addClass('reverse-header');
    }
    $(window).scroll(function() {
      if ($('.home-hero').height() > 0) {
        if ($(window).scrollTop() > $('.home-hero').height()) {
          $('.site-header').removeClass('reverse-header');
        } else {
          $('.site-header').addClass('reverse-header');
        }
      } else if ($('.hero-image-header').height() > 0) {
        if ($(window).scrollTop() > $('.hero-image-header').height()) {
          $('.site-header').removeClass('reverse-header');
        } else {
          $('.site-header').addClass('reverse-header');
        }
      }
    });
  }); // end of doc ready
})(jQuery);
