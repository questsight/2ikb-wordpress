      </div>
      <footer class="site__footer footer">
        <div class="wrapper">
          <div class="footer__cell">
            <div class="bottom-nav">
              <h3 class="bottom-nav__name">О центре</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-center',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </div>
          </div>
          <div class="footer__cell">
            <div class="bottom-nav">
              <h3 class="bottom-nav__name">Материалы</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-materials',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </div>
          </div>
          <div class="footer__cell">
            <div class="bottom-nav">
              <h3 class="bottom-nav__name">Полезные ссылки</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-link',
                  'container'      => false,
                  'menu_class'     => 'bottom-nav__list',
                ) );
              ?>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="footer__line"></div>
        </div>
        <div class="wrapper">
          <div class="corpinfo">Ресурсный центр паллиативной помощи ВИЧ-инфицированным Свято-Димитриевского сестричества Московской патриархии РПЦ, 2018 г.</div>
          <div class="copyright">При использовании материалов ссылка на <a class="copyright__link" href="https://palliative-2ikb.ru/">palliative-2ikb.ru</a> обязательна</div>
          <div class="webmikorn"><a href="https://webmikorn.ru/" target="_blank">Разработка сайта Микорн</a></div>
        </div>
      </footer>
      <div class="search" id="search">
        <form class="search__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <table class="search__table">
            <tbody>
              <tr>
                <td class="search__td">
                  <input class="search__input" type="search" value="<?php the_search_query(); ?>" name="s" placeholder="Поиск по сайту">
                </td>
                <td class="search__td text-center">
                  <button class="search__button" id="search__button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <div class="search__shut shut" id="search__shut"><i class="fa fa-times" aria-hidden="true"></i></div>
      </div>     
    </div>
    <?php wp_footer(); ?>
  </body>
</html>