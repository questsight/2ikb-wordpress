<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
  </head>
  <body class="body">
    <div class="site">
      <header class="site__header header">
        <div class="container">
          <div class="row">
            <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
              <div class="header__col">
                <div class="header__logo">
                  <div class="logo logo_view_theme"><a href="#"><?php the_custom_logo(); ?></a></div>
                </div>
              </div>
            </div>
            <div id="navigation__box" class="hidden-xs hidden-sm hidden-md col-lg-7">
              <div class="header__col">
                <div class="header__navigation">
                  <nav class="navigation" id="navigation">
                    <?php
                      wp_nav_menu( array(
                        'theme_location' => 'header',
                        'container'      => false,
                        'menu_id'        => 'navigation__list',
                        'menu_class'     => 'navigation__list navigation__hidden',
                      ) );
                    ?>
                  </nav>
                </div>
              </div>
            </div>
            <div class="hidden-xs col-sm-3 col-sm-offset-3 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-0">
              <div class="header__col">
                <div class="header__phone text-center">
                  <div class="top-phone top-phone_view_theme"><i class="fa fa-mobile" aria-hidden="true"></i>+7 (495) 226-01-49</div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 col-sm-2 col-md-1 col-lg-1">
              <div class="header__col">
                <div class="header__search text-right" id="header__search"><i class="fa fa-search" aria-hidden="true"></i></div>
              </div>
            </div>
            <div id="hamburger__box" class="col-xs-3 col-sm-2 col-md-1 hidden-lg">
              <div class="header__col">
                <div class="header__hamburger text-right">
                  <div class="hamburger" id="hamburger">
                    <div class="hamburger__item"></div>
                    <div class="hamburger__item"></div>
                    <div class="hamburger__item"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="site__content content">