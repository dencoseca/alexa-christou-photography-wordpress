<?php

// Load styles and scripts
function acp_files() {
  // Fonts
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/7f6d9cf277.js');
  // // Bootstrap
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), array('bootstrap') ); 
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '4.4.1', true );
  // Styles
  wp_enqueue_style('acp_main_styles', get_stylesheet_uri());
  // Javascript
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js');
  wp_enqueue_script('smooth-scrolling', get_template_directory_uri() . '/js/smooth-scrolling-polyfill.js');
  wp_enqueue_script('custom-javascript', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'acp_files');

// Create menus
function register_custom_menus() {
  register_nav_menu('headerMenuLocation', 'Fengaraki Moolamb Bro, Fenghay Moonah Gess Tavro');
}

add_action('after_setup_theme', 'register_custom_menus');

