<?php

$error_reporting = true;

add_theme_support('soil-clean-up');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');

add_theme_support( 'align-wide' );
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'editor-color-palette',
	'#32653C', // Green
    '#204060', // Blue
    '#9C3229', // Red
    '#313132', // Gray
    '#9D9FA2', // Light Gray
    '#F4F4F5' // White
);

if($error_reporting) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

function is_in_front_page_tree() {

	global $post;
    $output = (is_page() && ($post->post_parent == get_option('page_on_front') || is_front_page()));
    wp_reset_query();
    return $output;
}