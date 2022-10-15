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


// ===============================================================================
// +----------------------------+ HEADER +---------------------------------------+
// ===============================================================================
function displayer_header_content(){

    // +------------------------------------------------+
    // +---------------+ REGULAR ONE +------------------+
    // +------------------------------------------------+
    
    get_template_part('template-parts/Navigation/navigation');
    
    // +---------------------------------------------+
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+

    if( is_front_page() && is_home() || is_home() ){

    };

}


// =============================================================================
// +----------------------------+ MAIN +---------------------------------------+
// =============================================================================
function displayer_main_content(){


    // +------------------------------------------------+
    // +---------------+ REGULAR ONE +------------------+
    // +------------------------------------------------+


    // +---------------------------------------------+
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+

    if( is_front_page() && is_home() || is_home() ){
        get_template_part('template-parts/Main/front');
    }

}


// ===============================================================================
// +----------------------------+ FOOTER +---------------------------------------+
// ===============================================================================
function displayer_footer_content(){

    // +---------------------------------------------+
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+
   
    if( is_front_page() && is_home() || is_home() ){
        get_template_part('template-parts/Footer/rounded-footer');
    } else {
        
    }



    // +-------------+ REGULAR ONE +-----------------+
}


