<?php get_header(); ?>

        <main class="section main">
          <div class="main__slider">
            <?php 
              echo do_shortcode('[smartslider3 slider=3]');
            ?>
          </div>
            <div class="main__border"></div>
            <div class="main__header">
              <div class="main__triangle">
              </div>
              <h1 class="main__title"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </main>
        <section class="section center">
          <div class="section__header center__header">
            <div class="wrapper text-center">
              <h2 class="section__title center__title"><?php echo get_field('main-title-1');?></h2>
            </div>
          </div>
          <div class="section__content center__content">
            <div class="center__one">
              <div class="center__right"></div>
              <div class="wrapper">
                <div class="center__cell center__cell_float_left">
                  <div class="center__description center__description_position_left">
                    <p><?php echo get_field('center-description-left');?></p>
                  </div>
                </div>
                <div class="center__cell center__cell_float_left">
                  <div class="center__image parallax-window" data-parallax="scroll" data-image-src="<?php echo get_field('img-right');?>">
                    <div class="center__overlay">
                      <div class="center__border"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="center__one">
              <div class="center__left"></div>
              <div class="wrapper">
                <div class="center__cell center__cell_float_right">
                  <div class="center__description center__description_position_right">
                    <p><?php echo get_field('center-description-right');?></p>
                  </div>
                </div>
                <div class="center__cell center__cell_float_right">
                  <div class="center__image parallax-window" data-parallax="scroll" data-image-src="<?php echo get_field('img-left');?>">
                    <div class="center__overlay">
                      <div class="center__border"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section news">
          <div class="section__header news__header">
            <div class="wrapper text-center">
              <h2 class="section__title news__title"><?php echo get_field('main-title-2');?></h2>
            </div>
          </div>
          <div class="section__content news__content">
            <div class="wrapper">
            <?php	query_posts('cat=4&posts_per_page=3');
              while (have_posts()) : the_post();?>
              <div class="news__cell"><a class="news__link" href="<?php echo get_permalink(); ?>">
                  <div class="news__one">
                    <div class="frame news__frame"><?php the_post_thumbnail( array() ); ?></div>
                    <h3 class="name news__name text-center"><?php the_title(); ?></h3>
                    <div class="description news__description">
                      <?php the_excerpt(); ?>
                    </div>
                    <div class="button-group text-center"><a class="button button_bg_theme" href="<?php echo get_permalink(); ?>">Читать</a></div>
                  </div></a></div>
              <?php
	             endwhile;
               wp_reset_query();
	            ?>
              <?php
              $idObj = get_category_by_slug( 'news' );
              $id = $idObj->term_id;
              ?>
              <a class="other" href="<?php echo get_category_link( $id ); ?>">
                <div class="other__wrapper">
                  <div class="other__thumbnail"><i class="fa fa-file-text-o"></i></div>
                  <h3 class="name other__name">Другие новости</h3>
                </div>
              </a>
            </div>
          </div>
        </section>
        <section class="section command">
          <div class="section__header command__header">
            <div class="wrapper text-center">
              <h2 class="section__title command__title"><?php echo get_field('main-title-3');?></h2>
            </div>
          </div>
          <div class="section__content command__content">
            <div class="wrapper">
             <?php	query_posts('cat=12&posts_per_page=4');
              while (have_posts()) : the_post();?>
              <div class="command__cell">
                <div class="command__one">
                  <div class="command__photo">
                    <div class="command__square"></div>
                    <div class="frame command__frame"><img src="<?php the_post_thumbnail_url( array() ); ?>"></div>
                  </div>
                  <h3 class="name command__name text-center"><?php the_title(); ?></h3>
                  <div class="command__post text-center"><?php echo get_field('post');?></div>
                  <div class="description с text-center">
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
              </div>
              <?php
	             endwhile;
               wp_reset_query();
	            ?>
            </div>
          </div>
          <div class="section__footer command__footer">
            <div class="wrapper">
            <?php
              $idObj = get_category_by_slug( 'team' );
              $id = $idObj->term_id;
            ?>
              <div class="button-group text-center"><a class="button button_color_theme button_size_large" href="<?php echo get_category_link( $id ); ?>">Вся команда</a></div>
            </div>
          </div>          
        </section>
<?php get_footer(); ?>