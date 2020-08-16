<?php
function custom_post_movie() {

//    $labels = array(
//        'name' => __('Movies'),
//        'singular_name' => __('Movie'),
//        'add_new' => __('Add New Movie'),
//        'add_new_item' => __('Add New Movie'),
//        'edit_item' => __('Edit Movie'),
//        'new_item' => __('New Movie'),
//        'all_items' => __('All Movies'),
//        'view_item' => __('View Movie'),
//        'search_items' => __('Search Movies'),
//        'featured_image' => 'Poster',
//        'set_featured_image' => 'Add Poster'
//    );
//
//    $args = array(
//        'labels' => $labels,
//        'description' => 'Holds our movies and movie specific data',
//        'public' => true,
//        'menu_position' => 5,
//        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
//        'has_archive' => true,
//        'show_in_admin_bar' => true,
//        'show_in_nav_menus' => true,
//        'has_archive' => true,
//        'query_var' => 'film'
//    );
//
//    register_post_type('movie', $args);


    // Set the labels, this variable is used in the $args array
    $labels = array(
        'name' => __('Banners'),
        'singular_name' => __('Banner'),
        'add_new' => __('Adicionar Novo Banner'),
        'add_new_item' => __('Adicionar Novo Banner'),
        'edit_item' => __('Editar Banner'),
        'new_item' => __('Novo Banner'),
        'all_items' => __('Todos Banners'),
        'view_item' => __('Ver Banner'),
        'search_items' => __('Buscar Banners'),
        'featured_image' => 'Poster',
        'set_featured_image' => 'Add Poster'
    );

    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels' => $labels,
        'description' => 'Banners Principais',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'custom-fields'),
        'has_archive' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'query_var' => 'film'
    );

    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('banner', $args);


    // Set the labels, this variable is used in the $args array
    $labels = array(
        'name' => __('feedback'),
        'singular_name' => __('feedback'),
        'add_new' => __('Adicionar Novo Feedback'),
        'add_new_item' => __('Adicionar Novo Feedback'),
        'edit_item' => __('Editar Feedback'),
        'new_item' => __('Novo Feedback'),
        'all_items' => __('Todos Feedbacks'),
        'view_item' => __('Ver Feedback'),
        'search_items' => __('Buscar Feedbacks'),
        'featured_image' => 'Poster',
        'set_featured_image' => 'Add Poster'
    );

    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels' => $labels,
        'description' => 'Feedback dos Clientes',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'has_archive' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-megaphone',
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'query_var' => 'film'
    );

    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('categoria', $args);

    // Set the labels, this variable is used in the $args array
    $labels = array(
        'name' => __('Categoria de Imagens'),
        'singular_name' => __('Categoria'),
        'add_new' => __('Adicionar Nova Categoria'),
        'add_new_item' => __('Adicionar Nova Categoria'),
        'edit_item' => __('Editar Categoria'),
        'new_item' => __('Nova Categoria'),
        'all_items' => __('Todas Categorias'),
        'view_item' => __('Ver Categoria'),
        'search_items' => __('Buscar Categorias'),
        'featured_image' => 'Poster',
        'set_featured_image' => 'Add Poster'
    );

    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels' => $labels,
        'description' => 'Categorias',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'has_archive' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-images-alt',
        'show_in_nav_menus' => true,
        'has_archive' => true,
        'query_var' => 'film'
    );

    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('categoria', $args);
}
