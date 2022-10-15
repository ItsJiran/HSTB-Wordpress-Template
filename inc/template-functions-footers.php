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

// ==================================================================================================
// +------------------------------+ WP_FOOTER INIT FUNCTIONS +--------------------------------------+
// ==================================================================================================

function wp_footer_script_init(){

    // +---------------------------------------------+
    // +-------------+ REGULAR ONE +-----------------+
    // +---------------------------------------------+

    include_script_file('owlcarousel',      'owl.carousel.min.js', '/assets/libraries/owlcarousel/');   
    include_script_file('navigation-script','navigation-script.js','/assets/scripts/');   

    // front is a section in the homepage that maybe can we use in other page
    include_script_file('front-script',      'front-script.js',      '/assets/scripts/');   

    // +---------------------------------------------+
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+
 
    if( is_front_page() && is_home() || is_home() ){
 
    };
}