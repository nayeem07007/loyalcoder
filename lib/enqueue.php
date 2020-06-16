<?php

//  Enqueue style

function loyalcoder_enqueue() {

    // Theme stylesheet.
    wp_enqueue_style( 'loyalcoder-style', get_stylesheet_uri() );

    wp_enqueue_style( 'loyalcoder-normalize', get_theme_file_uri( '/assets/css/normalize.css' ), array( 'loyalcoder-style', 'loyalcoder-main' ), VERSION );
    wp_enqueue_style( 'loyalcoder-icon.css', get_theme_file_uri( '/assets/css/icon.css' ), array( 'loyalcoder-style', 'loyalcoder-main' ), VERSION );
    wp_enqueue_style( 'loyalcoder-bootstrap.min.css', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array( 'loyalcoder-style', 'loyalcoder-main' ), VERSION );
    wp_enqueue_style( 'loyalcoder-base.css', get_theme_file_uri( '/assets/css/base.css' ), array( 'loyalcoder-style', 'loyalcoder-main' ), VERSION );
    wp_enqueue_style( 'loyalcoder-fonts', lc_google_font_url('Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i'), array( 'loyalcoder-style', 'loyalcoder-main' ), VERSION );
    wp_enqueue_style( 'loyalcoder-main', get_theme_file_uri( '/assets/css/main.css' ), array( 'loyalcoder-style' ), VERSION );

    // Script

    wp_enqueue_script( 'prism.js', get_theme_file_uri( '/assets/js/vendor/prism.js' ), array(), VERSION, true );
    wp_enqueue_script( 'modernizr-3.6.0.min.js', get_theme_file_uri( '/assets/js/vendor/modernizr-3.6.0.min.js' ), array(), VERSION, true );
    wp_enqueue_script( 'bootstrap.min.js', get_theme_file_uri( '/assets/js/vendor/bootstrap.min.js' ), array('jquery'), VERSION, true );
    wp_enqueue_script( 'main.js', get_theme_file_uri( '/assets/js/main.js' ), array('jquery'), VERSION, true );
}
add_action('wp_enqueue_scripts', 'loyalcoder_enqueue');