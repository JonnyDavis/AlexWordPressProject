<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('init','create_custom_post_type_event');
 // define event custom post type


function create_custom_post_type_event(){
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Products',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Products',
        'edit_item' => 'Edit Products',
        'new_item' => 'New Products',
        'view_item' => 'View Products',
        'search_items' => 'Search Products',
        'not_found' => 'No Products found',
        'not_found_in_trash' => 'No Products found in Trash',
        'parent_item_colon' => '',
    );   

    $args = array(
        'label' => __('Products'),
        'labels' => $labels, // from array above
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-tag', // from this list
        'hierarchical' => false,
        'rewrite' => array( "slug" => "products" ), // defines URL base
        'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'event_category', 'post_tag'), // own categories
        'has_archive' => true
    );

    register_post_type('products', $args); // used as internal identifier
}

?>