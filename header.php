<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<html>
  <head>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" title="stylesheet" type="text/css" media="screen" charset="utf-8">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js" charset="utf-8"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js" charset="utf-8"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/custom.js" charset="utf-8"></script>
  <title>
    <?php
          //Title based on page.
          global $page, $paged;
          wp_title( '|', true, 'right' );
          // Add the blog name.
          bloginfo( 'name' );
          // Add the blog description for the home/front page.
          $site_description = get_bloginfo( 'description', 'display' );
          if ( $site_description && ( is_home() || is_front_page() ) )
          	echo " | $site_description";
          // Add a page number if necessary:
          if ( $paged >= 2 || $page >= 2 )
          	echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) ); 
    ?></title>
  <?php wp_head(); ?>
  </head>
  <body>
    <div class="page">
      <section class="masthead">
        <div class="nav-wrap">
          <nav class="wrapper" role="select">
              <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
              <?php wp_nav_menu(array(
                'menu_class'=>'something',
                'container'=>'',
                'before'=>'<option>',
                'after'=>'</option',
                'items_wrap' => '<select>%3$s</select>'
                )); ?>
          </nav><!-- /.wrapper -->
        </div><!-- /.nav-wrap -->
        <header class="wrapper">
          <a class="logo" href="<?php home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
          <hgroup class="branding">
            <h1><span>The Law Offices of </span><?php bloginfo('name'); ?></h1>
            <h2>Attorneys at law</h2>
          </hgroup><!-- /.branding -->
          <div class="location">
            <address>1234 Anywhere Lane</address>
            <p class="phone">509-123-4567</p>
          </div><!-- /.location -->
        </header><!-- /.wrapper -->
      </section><!-- ./masthead -->