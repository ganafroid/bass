<?php

function bass_script_enqueue(){
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bass.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bass.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'bass_script_enqueue');

function bass_theme_setup() {

  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
  
}

add_action('init', 'bass_theme_setup');

?>