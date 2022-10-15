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

use include_style_file;
use include_script_file;

// ==================================================================================================
// +--------------------------------+ WP_HEAD INIT FUNCTIONS +--------------------------------------+
// ==================================================================================================

function wp_header_style_init(){
 
    // +---------------------------------------------+
    // +-------------+ REGULAR ONE +-----------------+
    // +---------------------------------------------+

    include_style_file('reset','reset.css','/assets/styles/');   
    include_style_file('main','style.css','/');  
    
    include_style_file('owlcarousel'      ,'owl.carousel.min.css','/assets//libraries/owlcarousel/assets/');   
    include_style_file('owlcarousel-theme','owl.theme.default.min.css','/assets//libraries/owlcarousel/assets/');   

    include_style_file('navigation','navigation.css','/assets/styles/');   
    include_style_file('responsive','responsive.css','/assets/styles/');   

    // front is a section in the homepage that maybe can we use in other page
    include_style_file('front',  'front.css',   '/assets/styles/');   
    include_style_file('front-responsive','front-responsive.css','/assets/styles/');   
    
    // +---------------------------------------------+
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+

    if( is_front_page() && is_home() || is_home() ){

    };

}

function wp_header_script_init(){


    // +---------------------------------------------+
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+
 
    if( is_front_page() && is_home() || is_home() ){

        // include_script_file('jquery', 'jquery-3.6.1.min.js', '/assets/scripts/' );

    };


}

