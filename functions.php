<?php
/*
	==============================
	Include Scripts
	==============================
*/
function bass_script_enqueue(){
	//css
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
   wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bass.css', array(), '1.0.0', 'all');
 
  //js
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bass.js', array(), '1.0.0', true);
  
}

add_action('wp_enqueue_scripts', 'bass_script_enqueue');

/*
	==============================
	Activate Menus
	==============================
*/
function bass_theme_setup() {

  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
  
}

add_action('init', 'bass_theme_setup');

/*
	==============================
	Theme support functions
	==============================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('gallery','image','quote','video'));

?>