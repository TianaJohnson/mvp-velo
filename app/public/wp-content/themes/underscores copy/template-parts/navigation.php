<div class="menu-wrapper">

  <nav id="site-navigation" class="main-navigation">

    <div class="nav-menu">
      <div class="menu">
        <button class="menu-button" id="open-button">
          <span>
            <div></div>
            <div></div>
            <div></div>
          </span>
          Open Menu
        </button>
      </div>

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