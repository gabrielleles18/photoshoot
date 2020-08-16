<?php
/*Requires*/
require 'require/custom-posttype.php';
require_once __DIR__ . '/vendor/autoload.php';

/*Configs*/
add_theme_support('post-thumbnails');
add_action('wp_before_admin_bar_render', 'admin_bar_remove_logo', 0);

function admin_bar_remove_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}

add_filter('show_admin_bar', 'my_function_admin_bar');
function my_function_admin_bar() {
    return false;
}

/*Actions*/
add_action('init', 'custom_post_movie');


/*Load scrits e styles*/
add_action('wp_enqueue_scripts', 'scripts');
function scripts() {
    wp_register_style('style', get_template_directory_uri() . '/dist/style.css', [], 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('script', get_template_directory_uri() . '/dist/script.js', ['jquery'], 1, true);
    wp_enqueue_script('script');
}


/*Add menu*/
add_action('init', 'register_my_menu');
register_my_menu();
function register_my_menu() {
    register_nav_menu('additional-menu', __('Additional Menu'));
}






