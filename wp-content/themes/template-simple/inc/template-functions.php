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

function get_first_image($post) {
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img =  get_template_directory_uri() . "/assets/images/blank-post.jpeg";
  }
  return $first_img;
}
function get_summary_post($post){
  if(strlen( $post->post_excerpt ) > 0 ) return $post->post_excerpt;

  $text = strip_shortcodes( $post->post_content );
  $text = apply_filters( 'the_content', $text );
  $text = str_replace(']]>', ']]&gt;', $text);
  $excerpt_length = apply_filters( 'excerpt_length', 55 );
  $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
  $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
  if(strlen($text) == 0){
    $text = 'No Post Description';
  }
  return $text;
}
