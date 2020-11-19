<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <title>Universal</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
<?php wp_body_open(); ?>
<header class="header">
<div class="container">
  <div class="header-wrapper">
   <?php
    if (has_custom_logo( )) {
      the_custom_logo( );
    } else {
      echo 'Universal';
    }
   ?>
   <?php 
        wp_nav_menu( [
          'theme_location'  => 'header_menu',
          // 'menu'            => '', 
          'container'       => 'nav', 
          'container_class' => 'header-nav', 
          // 'container_id'    => '',
          'menu_class'      => 'header-menu', 
          // 'menu_id'         => 'header-menu',
          'echo'            => true,
          // 'fallback_cb'     => 'wp_page_menu',
          // 'before'          => '',
          // 'after'           => '',
          // 'link_before'     => '',
          // 'link_after'      => '',
          // 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          // 'depth'           => 0,
          // 'walker'          => '',
        ] );
   ?>
   <?php echo get_search_form(); ?>
  </div>
</div>
</header>
