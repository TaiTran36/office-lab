<?php
/**
 *
 */
function script_load()
{
    $my_ver  = "20221306400000";
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $my_ver);
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js ', array('jquery'), $my_ver);
    wp_enqueue_script('jquery-validate', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.js', array('jquery'), $my_ver);

    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/b65032f17a.js', array('jquery'));
    wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'));

    wp_enqueue_script('popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'));
    wp_enqueue_script('bootstrap-bundle', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'));
    wp_enqueue_script('plugin', get_stylesheet_directory_uri() . '/assets/js/plugin.js', array('jquery'));
    wp_enqueue_script('mCustomScrollbar', get_stylesheet_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'));
//    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'));
}

/**
 *
 */
function my_style_load()
{
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('owm-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null);
    wp_enqueue_style('mCustomScrollbar', get_stylesheet_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css', array(), null);

}

add_action('wp_enqueue_scripts', 'script_load');
add_action('wp_enqueue_scripts', 'my_style_load');


