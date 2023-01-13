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

    // +---------------+ REGULAR ONE +------------------+
    // +------------------------------------------------+
    
    get_template_part('template-parts/Navigation/navigation');
    
    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+

    if( is_front_page() && is_home() || is_home() ){

    };

}


// =============================================================================
// +----------------------------+ MAIN +---------------------------------------+
// =============================================================================
function displayer_main_content(){

    // +---------------+ HOMEPAGE +------------------+
    // +---------------------------------------------+
    if( is_front_page() && is_home() || is_home() )
      return get_template_part('template-parts/Main/front');

    // +---------------+ POST +------------------+
    // +------------------------------------------+
    if( is_single() )
      return get_template_part('template-parts/Main/post');

    // +---------------+ PAGE +------------------+
    // +------------------------------------------+ 
    if( is_page('about') )
      return get_template_part('template-parts/Main/about');

    if( is_page('contact') )
      return get_template_part('template-parts/Main/contact');

    if( is_page('blogs') )
      return get_template_part('template-parts/Main/blogs');

    if( is_page('testimonials') )
      return get_template_part('template-parts/Main/testimonials');

    if( is_page('fasilitas') )
      return get_template_part('template-parts/Main/fasilitas');

    if( is_page('pendaftaran') )
      return get_template_part('template-parts/Main/pendaftaran');

    if( is_page('gallery') )
      return get_template_part('template-parts/Main/gallery');

}


// ===============================================================================
// +----------------------------+ FOOTER +---------------------------------------+
// ===============================================================================
function displayer_footer_content(){

  if( is_page('about') || is_page('gallery') )
    return get_template_part('template-parts/Footer/yellow-rounded-footer');

  if( is_front_page() && is_home() || is_home() || is_single() || is_page() )
    return get_template_part('template-parts/Footer/rounded-footer');
  
  else 
    return get_template_part('template-parts/Footer/not-rounded-footer');
  
}


