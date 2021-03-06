<section class="section category">
  <div class="section__header category__header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1 class="section__title category__title"><?php echo single_cat_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="section__content category__content">
    <div class="container">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="category__one one">
        <div class="row">
         <?php if( has_post_thumbnail() ): ?>
          <div class="hidden-xs col-sm-3 col-md-2">
            <div class="category__frame frame"><a href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url( array() ); ?>"></a></div>
          </div>
          <?php endif; ?>
          <?php if( has_post_thumbnail() ): ?>
          <div class="col-sm-9 col-md-10">
          <?php else: ?>
          <div class="col-sm-12"> 
          <?php endif; ?>
          <a href="<?php echo get_permalink(); ?>">
            <h2 class="name category__name"><?php the_title(); ?></h2></a>
            <div class="category__date"><?php the_date(); ?></div>
            <div class="description category__description">
              <?php the_excerpt(); ?>
            </div>
            <div class="category__tags"><?php the_tags('Метки: ', ', '); ?></div>
            <a class="button button_bg_theme" href="<?php echo get_permalink(); ?>">Подробнее</a>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>