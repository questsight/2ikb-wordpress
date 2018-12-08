jQuery(document).ready(function() {
  jQuery('#header__search').click(function() {
    jQuery('#search').fadeIn(600);
  });
  jQuery('#search__button, #search__shut').click(function() {
    jQuery('#search').fadeOut(600);
  });
});