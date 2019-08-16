(function($) {
  let $searchField = $('.search-field');
  let visible = false;
  $('.search-toggle').click(function() {
    if (!visible) {
      $searchField.toggleClass('search-field--active');
      visible = true;
      $searchField.focus();
    } else {
      $searchField.toggleClass('search-field--active');
      visible = false;
      $searchField.blur();
    }
  });
})(jQuery);
