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

    $labels2 = array(
        'name' => 'Parts',
        'singular_name' => 'Parts',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Parts',
        'edit_item' => 'Edit Parts',
        'new_item' => 'New Parts',
        'view_item' => 'View Parts',
        'search_items' => 'Search Parts',
        'not_found' => 'No Parts found',
        'not_found_in_trash' => 'No Parts found in Trash',
        'parent_item_colon' => '',
    );   

    $args2 = array(
        'label' => __('Parts'),
        'labels' => $labels2, // from array above
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-hammer', // from this list
        'hierarchical' => false,
        'rewrite' => array( "slug" => "parts" ), // defines URL base
        'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'event_category', 'post_tag'), // own categories
        
    );

    register_post_type('parts', $args2); // used as internal identifier

        $labels3 = array(
        'name' => 'About Sections',
        'singular_name' => 'About Section',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New About Section',
        'edit_item' => 'Edit About Section',
        'new_item' => 'New About Section',
        'view_item' => 'View About Section',
        'search_items' => 'Search About Section',
        'not_found' => 'No About Section found',
        'not_found_in_trash' => 'No About Section found in Trash',
        'parent_item_colon' => '',
    );   

    $args3 = array(
        'label' => __('About Section'),
        'labels' => $labels3, // from array above
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-info', // from this list
        'hierarchical' => false,
        'rewrite' => array( "slug" => "about" ), // defines URL base
        'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'event_category', 'post_tag'), // own categories
        
    );

    register_post_type('about', $args3); // used as internal identifier
}



?>