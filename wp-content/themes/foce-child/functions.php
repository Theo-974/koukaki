<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style-css', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style-scss', get_stylesheet_directory_uri() . '/assets/css/custom.scss' );
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/assets/js/script.js',array('jquery') );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts' );
function theme_enqueue_styles_and_scripts() {
    // Enqueue parent and child styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style-css', get_stylesheet_directory_uri() . '/style.css' );
    
    // Enqueue Swiper JavaScript from CDN
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), null, true );
    
    // Enqueue Swiper CSS from CDN
    wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    
    // Enqueue your custom script
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery', 'swiper','swiper-style'), null, true );
}
