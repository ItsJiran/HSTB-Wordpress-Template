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

// Array for navigation options
$options = Array(
    'Home'=>'/',
    'About'=>'/about',
    'Contact'=>'/contact',
    'Category'=>Array(
        'Kehidupan'=>'/home',
        'Kehidupan2'=>'/test'
    ),
    'Gallery'=>'/gallery',
    'Blogs'=>"/page",
    'Testimonials'=>'/about2',
    'Category'=>Array(
        'Kehidupan'=>'/home',
        'Kehidupan2'=>'/test'
    ),
);

?>


<!-- +---------------------------+ NAVIGATION DESKTOP BAR +---------------------------+ -->
<?php get_template_part('template-parts/Navigation/navigation-bar', null, Array('options'=>$options)); ?>

<!-- +-------------------------+ NAVIGATION SIDEBAR +---------------------------+ -->
<?php get_template_part('template-parts/Navigation/sidebar', null, Array('options'=>$options)); ?>
