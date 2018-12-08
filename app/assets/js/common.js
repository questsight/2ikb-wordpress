new WOW().init();
jQuery( document ).ready( function() {
    jQuery("#carousel").waterwheelCarousel({
      // include options like this:
      // (use quotes only for string values, and no trailing comma after last option)
      // option: value,
      // option: value
    });
});


jQuery( document ).ready( function() {
	jQuery( '#hamburger' ).click( function () {
		jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
	});
    jQuery( '.navigation__list li a' ).click( function() {
      jQuery( '.hamburger__item' ).removeClass( 'hamburger__item_open' );
  });  
});
jQuery(document).ready(function () {
  if (window.matchMedia('(min-width: 1199px)').matches) {
    jQuery('#navigation__list').removeClass('navigation__hidden');
  }
  jQuery('#hamburger, .navigation__hidden li a').click(function () {
      jQuery( '#navigation' ).fadeToggle(600);
      jQuery( '#navigation__box' ).toggleClass('col-lg-7 hidden-xs hidden-sm hidden-md');  
  });
  jQuery('#navigation__list .menu-item-type-custom > a', this).on('click', function(){
    return false;
  });  
});

jQuery( document ).ready( function() {
  jQuery( '#button__modal_section_main, #button__modal_section_service, #button__modal_section_corporate' ).click( function() {
    jQuery( '#modal' ).fadeIn( 600 );
  });
  jQuery( '#modal__shut' ).click( function() {
    jQuery( '.wpcf7-display-none' ).fadeOut( 600 );
    jQuery( '.wpcf7-not-valid-tip' ).fadeOut( 600 );
    jQuery( '#modal' ).fadeOut( 600 );
  });
});

jQuery( document ).ready( function() {
  if(jQuery(".news__name")){
    var h1 = jQuery(".news__name").eq(1).height();
    var h2 = jQuery(".news__name").eq(2).height();
    var h3 = jQuery(".news__name").eq(3).height();
    if(h1>h2 && h1>h3){
      jQuery(".news__name").height(h1);
    }
    else if(h2>h1 && h2>h3){
      jQuery(".news__name").height(h2);
    }
    else{
      jQuery(".news__name").height(h3);
    }
  }
});
jQuery(window).resize(function(){
  if(jQuery(".news__name")){
    jQuery('.news__name').css('height', 'auto'); 
    jQuery(".news__name").height();
    var h1 = jQuery(".news__name").eq(1).height();
    var h2 = jQuery(".news__name").eq(2).height();
    var h3 = jQuery(".news__name").eq(3).height();
    if(h1>h2 && h1>h3){
      jQuery(".news__name").height(h1);
    }
    else if(h2>h1 && h2>h3){
      jQuery(".news__name").height(h2);
    }
    else{
      jQuery(".news__name").height(h3);
    }
  }
});
 /*jQuery( document ).ready( function() {
  jQuery( '.other' ).hover( function () {
		jQuery('.other').addClass('animated flipOutY').one('animationend webkitAnimationEnd oAnimationEnd', function() {
    jQuery(".other").removeClass('animated flipOutY');
  });
})
});*/
jQuery( document ).ready( function() {
  jQuery( "a[rel='m_PageScroll2id']" ).mPageScroll2id({
      offset: 120
  });
});

jQuery( document ).ready( function() {
  jQuery( '.parallax-window' ).parallax({ imageSrc: ['assets/images/center/center_1.jpg', 'assets/images/center/center_2.jpg']});
});

jQuery(document).ready(function() {
  jQuery('#header__search').click(function() {
    jQuery('#search').fadeIn(600);
  });
  jQuery('#search__button, #search__shut').click(function() {
    jQuery('#search').fadeOut(600);
  });
});