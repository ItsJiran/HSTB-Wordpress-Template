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
// +------------------------------+ INCLUDE FUNCTIONS +-------------------------------------+
// ==========================================================================================

function include_style_file( String $unique_name, String $file_name, String $sub_path = '/' ){
    $file_path_uri = get_template_directory_uri() . $sub_path . $file_name;
    $file_path     = get_template_directory() . $sub_path . $file_name;

    if( file_exists($file_path) ) wp_enqueue_style( $unique_name, $file_path_uri);
    else echo '<h1 class="error-msg">' . 'Error PHP File Not Found : ' . $sub_path . $file_name . '</h1>';
}
function include_script_file( String $unique_name, String $file_name, String $sub_path = '/' ){
    $file_path_uri = get_template_directory_uri() . $sub_path . $file_name;
    $file_path     = get_template_directory() . $sub_path . $file_name;

    if( file_exists($file_path) ) wp_enqueue_script( $unique_name, $file_path_uri);
    else echo '<h1 class="error-msg">' . 'Error PHP File Not Found : ' . $sub_path . $file_name . '</h1>';
}
