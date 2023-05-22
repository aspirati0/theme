<?php

function enqueue_my_styles() {
	wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'Gotham Pro', 'https://fonts.cdnfonts.com/css/gotham-pro', array(), '1.0.0', 'all', 'swap' );
	wp_enqueue_style( 'Gotham', 'https://fonts.cdnfonts.com/css/gotham', array(), '1.0.0', 'all', 'swap' );
	wp_enqueue_style( 'Azonix', 'https://db.onlinewebfonts.com/c/50cd2aad9c8f35800bb6beac3ad42f16?family=Azonix', array(), '1.0.0', 'all', 'swap' );
	wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat', array(), '1.0.0', 'all', 'swap' );
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles' );

function disable_mobile_css_cache() {
    wp_enqueue_style( 'my-style', get_stylesheet_uri(), false, filemtime( get_stylesheet_directory() . '/assets/css/style.css' ), 'all' );
    wp_style_add_data( 'my-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'disable_mobile_css_cache', 100 );


function cw_post_type_news() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('news', 'plural'),
'singular_name' => _x('news', 'singular'),
'menu_name' => _x('news', 'admin menu'),
'name_admin_bar' => _x('news', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New news'),
'new_item' => __('New news'),
'edit_item' => __('Edit news'),
'view_item' => __('View news'),
'all_items' => __('All news'),
'search_items' => __('Search news'),
'not_found' => __('No news found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'news'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('news', $args);
}
add_action('init', 'cw_post_type_news');

?>