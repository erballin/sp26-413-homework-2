<?php

function my_simple_theme_enqueue_styles() {
  wp_enqueue_style('my-simple-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_simple_theme_enqueue_styles');

function my_simple_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus( array(
    'primary' => __('Primary Menu', 'my-simple-theme'),
  ) );
}
add_action('after_setup_theme', 'my_simple_theme_setup');

