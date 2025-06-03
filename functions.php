<?php
/**
 * Bring Your Child Theme functions and definitions
 */

// Enqueue styles and scripts
function bring_your_child_enqueue_assets() {
    // Enqueue theme stylesheet
    wp_enqueue_style(
        'bring-your-child-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue custom JavaScript (if you have a js file)
    wp_enqueue_script(
        'bring-your-child-script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'bring_your_child_enqueue_assets');

// Theme setup
function bring_your_child_theme_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'bring-your-child'),
        'footer' => esc_html__('Footer Menu', 'bring-your-child'),
    ));
}
add_action('after_setup_theme', 'bring_your_child_theme_setup');