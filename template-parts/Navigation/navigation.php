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


$categories = Array();
$categories_query = get_categories();

foreach( $categories_query as $category ){

  if( $category->name !== 'Post' && $category->name !== 'Gallery' )
    $categories[$category->name] = '/blogs/?ctg=' . $category->slug;

}

// Array for navigation options
$options = Array(
    'Home'=>'/',
    'About'=>'/about',
    'Pendaftaran'=>'/pendaftaran',
    'Fasilitas'=>'/fasilitas',
    'Gallery'=>'/gallery',
    'Blogs'=>"/blogs",
    'Testimonials'=>'/testimonials', 
);

?>


<!-- +---------------------------+ NAVIGATION DESKTOP BAR +---------------------------+ -->
<?php get_template_part('template-parts/Navigation/navigation-bar', null, Array('options'=>$options)); ?>

<!-- +-------------------------+ NAVIGATION SIDEBAR +---------------------------+ -->
<?php get_template_part('template-parts/Navigation/sidebar', null, Array('options'=>$options)); ?>
