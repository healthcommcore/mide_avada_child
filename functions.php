<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [] );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

function footer_logo_widgets_init() {
  register_sidebar( array(
    'name' => 'Footer logo',
    'id' => 'footer-logo-widget',
    'before_widget' => '<div id="%1$s" class="footer-logo">',
    'after_widget' => '</div>',
  ) );
}


add_action('widgets_init', 'footer_logo_widgets_init');
