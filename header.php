<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <!-- site-navbar start -->
  <?php echo the_custom_logo(); ?>

      <nav class="site-navbar">
        <?php
            wp_nav_menu(array(
                'theme_location'    => 'headerMenuLocation',
                'sort_column'  => 'menu_order',
                'container'         => 'ul',
            ));
        ?> 
      <button class="nav-toggler">
              <span></span>
            </button>
      </nav>
  <!-- navbar-area end -->
</header>
    
    
