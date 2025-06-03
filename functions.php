<?php
// Enqueue styles and scripts
function bring_your_child_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'bring-your-child-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
  
    
    // Enqueue main JavaScript file
    wp_enqueue_script(
        'bring-your-child-script',
        get_template_directory_uri() . 'main.js',
        array(),
        wp_get_theme()->get('Version'),
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'bring_your_child_enqueue_assets');

// Add theme support
function bring_your_child_theme_support() {
    // Add title tag support
    add_theme_support('title-tag');
    
    // Add post thumbnail support
    add_theme_support('post-thumbnails');
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
}
add_action('after_setup_theme', 'bring_your_child_theme_support');