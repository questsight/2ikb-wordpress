<?php get_header(); ?>

<section class="section page">
  <div class="section__header page__header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1 class="section__title page__title">
            <?php the_title(); ?>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="section__content page__content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-justify">
          <?php while (have_posts()) : the_post();
            the_content();
            endwhile;
          ?>
        </div>
      </div>    
    </div>
  </div>
</section>

<?php get_footer(); ?>
