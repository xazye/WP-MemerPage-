<?php

function phpayyyooo_theme_suppport()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function phpayyyoooo_menus()
{
    $locations = array(
        'primary' => 'Desktop Primary menu'
    );
    register_nav_menus($locations);
}

function phpayyyooo_widget_areas()
{
    register_sidebar(array(
        'name'          => 'Footer sidebar',
        'id'            => 'footer_1',
        'before_widget' => '<div >',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}


function phpayyyooo_register_styles()
{
    wp_enqueue_style('phpayyyooo-style', get_template_directory_uri() . "/style.css", ['phpayyyooo-style-font-awesome'], wp_get_theme()->get("Version"), "all");
    wp_enqueue_style('phpayyyooo-style-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css", [], '', "all");
}

function phpayyyooo_register_scripts()
{
    wp_enqueue_script('phpayyyooo-script', get_template_directory_uri() . "/assets/js/main.js", [], wp_get_theme()->get("Version"), true);
}

function phpayyyooo_custom_excerpt_length($length)
{
    return 30;
}

// add all the actions & filters
add_action('after_setup_theme', 'phpayyyooo_theme_suppport');
add_action('init', 'phpayyyoooo_menus');
add_action('wp_enqueue_scripts', 'phpayyyooo_register_styles');
add_action('wp_enqueue_scripts', 'phpayyyooo_register_scripts');
add_action('widgets_init', 'phpayyyooo_widget_areas');
add_filter('excerpt_length', 'phpayyyooo_custom_excerpt_length', 999);
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
