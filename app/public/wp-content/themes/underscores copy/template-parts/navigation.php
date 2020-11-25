
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
  </nav><!-- #site-navigation -->
  </div>
</div>

<button class="close-button" id="close-button">Close Menu</button>
<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
    <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
  </svg>
</div>
</div>