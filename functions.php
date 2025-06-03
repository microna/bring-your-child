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

// Register Team Information Custom Post Type
function register_team_information_cpt() {
    $labels = array(
        'name'                  => 'Team Information',
        'singular_name'         => 'Team Member',
        'menu_name'             => 'Team Information',
        'name_admin_bar'        => 'Team Member',
        'archives'              => 'Team Archives',
        'attributes'            => 'Team Attributes',
        'parent_item_colon'     => 'Parent Team Member:',
        'all_items'             => 'All Team Members',
        'add_new_item'          => 'Add New Team Member',
        'add_new'               => 'Add New',
        'new_item'              => 'New Team Member',
        'edit_item'             => 'Edit Team Member',
        'update_item'           => 'Update Team Member',
        'view_item'             => 'View Team Member',
        'view_items'            => 'View Team Members',
        'search_items'          => 'Search Team Members',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
    );
    
    $args = array(
        'label'                 => 'Team Information',
        'description'           => 'Team member information and profiles',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    
    register_post_type('team_information', $args);
}
add_action('init', 'register_team_information_cpt');