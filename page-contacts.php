<?php get_header(); ?>

<section class="section page contacts">
  <div class="section__header page__header contacts__header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1 class="section__title page__title contacts__title"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="section__content page__content contacts__content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contacts__one">
            <p><?php echo get_field('address');?></p>
          </div>
          <div class="contacts__one">
            <p><?php echo get_field('phone');?></p>
          </div>
          <div class="contacts__one"><a class="connect__email" href="mailto:<?php echo get_field('e-mail');?>" target="_blank"><?php echo get_field('e-mail');?></a></div>
          <div class="contacts__map">
            <?php while (have_posts()) : the_post();
              the_content();
              endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
