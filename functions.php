<?php
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('general', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('general');
}

add_action('wp_enqueue_scripts', 'load_stylesheets' );

function include_bootstrap() {
    wp_deregister_script('bootstrap-js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), 1, true);
    add_action('wp_enqueue_scripts', 'bootstrap-js');
}

add_action('wp_enqueue_scripts', 'include_bootstrap');

add_theme_support('custom-header');

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

