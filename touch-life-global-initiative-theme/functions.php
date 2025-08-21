<?php
// Theme functions will be added here.

function touchlife_scripts() {
    wp_enqueue_style( 'touchlife-style', get_stylesheet_uri() );
    wp_enqueue_script( 'touchlife-slideshow', get_template_directory_uri() . '/js/slideshow.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'touchlife_scripts' );

function create_project_post_type() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        )
    );
}
add_action( 'init', 'create_project_post_type' );

// Add theme support for title tag
add_theme_support( 'title-tag' );

// Register navigation menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
