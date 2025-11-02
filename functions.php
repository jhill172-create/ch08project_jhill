<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function jhill172_enqueue_assets() {
    wp_enqueue_style( 'jhill172-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jhill172_enqueue_assets' );

function jhill172_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ch08project_jhill172' ),
    ) );

    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'jhill172_theme_setup' );
