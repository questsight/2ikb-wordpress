<?php get_header(); ?>

  <?php
  while ( have_posts() ) : the_post();?>

<section id="post-<?php the_ID(); ?>" class="section single">
  <div class="section__header single__header">
    <div class="container text-center">
      <h1 class="section__title single__title"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="section__content single__content">
    <div class="container">
      <div class="breadcrumb"><?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?></div>
      <?php if( has_post_thumbnail() ): ?>
      <div class="single__thumb"><?php the_post_thumbnail( array() ); ?></div>
      <?php endif; ?>
      <?php the_content(); ?>
      <?php if(get_field('video')){echo '<div class="thumb-wrap">' . get_field('video') . '</div>';} ?>
      <?php if(get_field('video')){echo get_field('text');} ?>
      <?php if ( in_category('4') || in_category('15')) { ?>
      <div class="single__date"><?php the_date(); ?></div>
      <?php } ?>       
      <div class="single__tags"><?php the_tags('Метки: ', ', '); ?></div>
      
      <?php $slider_fields = CFS()->get( 'slider' );
        if( ! empty($slider_fields) ): ?>
	       <div class="carousel">
          <div id="carousel">
        <?php foreach ( $slider_fields as $site_slider ) { ?>
        <img src="<?php echo $site_slider['img']; ?>">
	     <?php } ?> 
          </div>          
	       </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="section__footer single__footer">
   <div class="container">
    <!------ Rambler.Likes script start ------>
<div class="rambler-share text-center"></div>
<script>
(function() {
var init = function() {
RamblerShare.init('.rambler-share', {
	"style": {
		"borderRadius": 50,
		"buttonBackground": "#e0435e"
	},
	"utm": "utm_medium=social",
	"counters": false,
	"buttons": [
		"vkontakte",
		"facebook",
		"odnoklassniki",
		"twitter",
		"pinterest"
	]
});
};
var script = document.createElement('script');
script.onload = init;
script.async = true;
script.src = 'https://developers.rambler.ru/likes/v1/widget.js';
document.head.appendChild(script);
})();
</script>
<!------   Rambler.Likes script end  ------>
     </div>
  </div>
</section>

<?php
  endwhile;
  ?>

<?php get_footer(); ?>