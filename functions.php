<?php

function devPortfolio_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','devPortfolio_theme_support');

function devPortfolio_menus(){

    $locations = array(
        'primary' => 'Primary Sidebar'
    );

    register_nav_menus($locations);
}

add_action('init', 'devPortfolio_menus');

function devPortfolio_register_styles(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('theme-css', get_template_directory_uri() . "/assets/css/theme-6.css", array('tiny-slider'), $version, 'all');
    wp_enqueue_style('tiny-slider', get_template_directory_uri() . "/assets/plugins/tiny-slider/tiny-slider.css", array(), '1.0', 'all');
    wp_enqueue_style('monokai-sublime', get_template_directory_uri() . "/assets/plugins/highlight/styles/monokai-sublime.css", array(), '1.0', 'all');
    
}

add_action('wp_enqueue_scripts', 'devPortfolio_register_styles');


function devPortfolio_register_scripts(){


    wp_enqueue_script('jquery-file', get_template_directory_uri() . "/assets/plugins/jquery-3.4.1.min.js", array(), '1.0', true);
    wp_enqueue_script('popper', get_template_directory_uri() . "/assets/plugins/popper.min.js", array(), '1.0', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/plugins/bootstrap/js/bootstrap.min.js", array(), '1.0', 'all');
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . "/assets/plugins/tiny-slider/min/tiny-slider.js", array(), '1.0', 'all');
    wp_enqueue_script('testimonials', get_template_directory_uri() . "/assets/js/testimonials.js", array(), '1.0', 'all');
    wp_enqueue_script('font-awesome', get_template_directory_uri() . "/assets/fontawesome/js/all.js", array(), '1.0', 'all');
    wp_enqueue_script('js-cookie', get_template_directory_uri() . "/assets/plugins/js-cookie.min.js", array(), '1.0', 'all');
    wp_enqueue_script('dark-mode', get_template_directory_uri() . "/assets/js/dark-mode.js", array('jquery'), '1.0', 'all');
    wp_enqueue_script('isotope-custom', get_template_directory_uri() . "/assets/js/isotope-custom.js", array('jquery'), '1.0', 'all');
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . "/assets/plugins/isotope.pkgd.min.js", array('jquery'), '1.0', 'all');
    wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri() . "/assets/plugins/imagesloaded.pkgd.min.js", array('jquery'), '1.0', 'all');
    wp_enqueue_script('highlight', get_template_directory_uri() . "/assets/plugins/highlight/highlight.pack.js", array('jquery'), '1.0', 'all');


}

add_action('wp_enqueue_scripts', 'devPortfolio_register_scripts');
 
function add_skills_post_type()
{
    $args = array(
        
        'labels' => array(
            'name' => 'Skills',
            'singular_name' => 'Skill'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'editor'),
        
    );

    register_post_type('skills', $args);

}

function add_testimonials_post_type()
{
    $args = array(
        
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor'),
        
    );

    register_post_type('testimonials', $args);

}

function add_projects_post_type()
{
    $args = array(
        
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'thumbnail'),
        
    );

    register_post_type('projects', $args);

}

add_action('init', 'add_skills_post_type');
add_action('init', 'add_testimonials_post_type');
add_action('init', 'add_projects_post_type');
