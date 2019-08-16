(function($) {
  $(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
      $('.site-header').addClass('.reverse-header');
    }
  });
})(jQuery);
