<?php

function setup_theme_features(){
  register_nav_menus(array('primary' => 'Primary Menu'));
}

add_action('after_setup_theme', 'setup_theme_features');

function create_secondary() {
  register_sidebar(array(
    'name' => __('Sidebar', ''),
    'id' => 'sidebar-1',
    'before_widget' => '<aside class="widget-area">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="ribbon"><strong class="ribbon-content">',
    'after_title' => '</strong></h3>'
  ));
}

add_action('init', 'create_secondary');