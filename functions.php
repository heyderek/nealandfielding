<?php

function setup_theme_features(){
  register_nav_menus(array('primary' => 'Primary Menu'));
}

add_action('after_setup_theme', 'setup_theme_features');