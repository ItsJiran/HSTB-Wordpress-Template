<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Simple;
if ( !defined( 'ABSPATH' ) ) exit;


// ==========================================================================================
// +------------------------------+ WP HEAD HOOKS +-----------------------------------------+
// ==========================================================================================
add_action('wp_head', 'Simple\wp_header_style_init');
add_action('wp_head', 'Simple\wp_header_script_init');

// ==========================================================================================
// +---------------------------+ NAVIGATION HOOKS +-----------------------------------------+
// ==========================================================================================
add_action('header_content','Simple\displayer_header_content');
add_action('main_content',  'Simple\displayer_main_content');
add_action('footer_content',  'Simple\displayer_footer_content');

// ==========================================================================================
// +------------------------------+ WP FOOTER HOOKS +-----------------------------------------+
// ==========================================================================================
add_action('wp_footer', 'Simple\wp_footer_script_init');
