<section class="category__one one">
  <a class="category__link" href="<?php echo get_permalink(); ?>">
    <h3 class="category__name name"><?php the_title(); ?></h3>
  </a>
  <a class="category__link" href="<?php echo get_permalink(); ?>">
    <div class="category__description description">
      <?php the_excerpt(); ?>
    </div>
  </a>
  <a class="button button_bg_theme" href="<?php echo get_permalink(); ?>">Подробнее</a>
</section>