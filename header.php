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
  <title>The Law Offices of Fielding and Neal</title>
  <?php wp_head(); ?>
  </head>
  <body>
    <div class="page">
      <section class="masthead">
        <div class="nav-wrap">
          <nav class="wrapper" role="select">
              <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
              <select onchange="if (this.value) window.location.href = this.value;">
                <option Value="#">Option 1</option>
                <option Value="#">Option 1</option>
                <option Value="#">Option 1</option>
              </select>
          </nav><!-- /.wrapper -->
        </div><!-- /.nav-wrap -->
        <header class="wrapper">
          <a class="logo" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
          <hgroup class="branding">
            <h1><span>The Law Offices of </span>Fielding and Neal</h1>
            <h2>Attorneys at law</h2>
          </hgroup><!-- /.branding -->
          <div class="location">
            <address>1234 Anywhere Lane</address>
            <p class="phone">509-123-4567</p>
          </div><!-- /.location -->
        </header><!-- /.wrapper -->
      </section><!-- ./masthead -->
