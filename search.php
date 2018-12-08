<?php get_header(); ?>

<section class="section page">
  <div class="section__header page__header">
    <div class="wrapper text-center">
		  <?php if ( have_posts() ) : ?>
      <h1 class="section__title page__title"><?php printf( esc_html__( 'Результаты поиска по запросу: %s', 'palliative' ), get_search_query() ) ?></h1>
    </div>
  </div>
  <div class="section__content page__content">
    <div class="wrapper">
    <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'search' );
			endwhile;
    else :
      get_template_part( 'template-parts/content', 'none' );
    endif;
    ?>
    </div>
  </div>
  <div class="section-footer category-footer text-center">
    <?php if ( function_exists( 'wp_pagenavi' )) { wp_pagenavi(); } ?>
  </div>
</section>

<?php get_footer(); ?>
