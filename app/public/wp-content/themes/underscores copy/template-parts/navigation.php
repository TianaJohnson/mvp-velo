<div class="menu-wrap">

  <div class="nav-menu">
    <div class="menu-container">

      <nav id="site-navigation" class="main-navigation">

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
        ?>
        <button class="menu-close" aria-label="close menu">x</button>
      </nav><!-- #site-navigation -->
    </div>

  </div>
</div>