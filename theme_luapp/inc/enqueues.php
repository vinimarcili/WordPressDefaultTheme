<?php

/*
 * Include to enqueue scripts for WordPress Luapp Theme
 *
 *
 */

function theme_luapp_styles(){
    wp_enqueue_style( 'styles',  get_template_directory_uri() . '/public/css/main.min.css');
 }
 add_action( 'wp_enqueue_scripts', 'theme_luapp_styles' );

function theme_luapp_scripts(){
  wp_enqueue_script('main-js', get_template_directory_uri() . '/public/js/main.min.js', '', '',false);
}
add_action( 'wp_enqueue_scripts', 'theme_luapp_scripts' );
