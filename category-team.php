<?php get_header(); ?>

<section class="section command category">
  <div class="section__header command__header category__header">
    <div class="wrapper text-center">
      <h1 class="section__title command__title category__title"><?php echo single_cat_title(); ?></h1>
    </div>
  </div>
  <div class="section__content command__content category__content">
    <div class="wrapper">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="command__cell_width_33">
        <div class="command__one">
          <div class="command__photo">
            <div class="command__square"></div>
            <div class="frame command__frame"><img src="<?php the_post_thumbnail_url( array() ); ?>"></div>
          </div>
          <h3 class="name command__name text-center"><?php the_title(); ?></h3>
          <div class="command__post text-center"><?php echo get_field('post');?></div>
          <div class="description command__description text-center">
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>