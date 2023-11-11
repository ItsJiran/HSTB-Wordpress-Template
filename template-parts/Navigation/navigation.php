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

<div class='nav-wrapper wrapper'>

  <ul class='nav-container'>

    <div class='nav-spacer'>
      <li class='nav-item'><a href='/'>Home</a></li>
      <li class='nav-item'><a href='/facilities'>Fasilitas</a></li>
      <li class='nav-item'><a href='/gallery'>Galeri</a></li>
    </div>

    <li class='nav-item-logo'><a href='/'><img src=' <?php echo get_template_directory_uri() . '/assets/images/logo.png' ?> '/></a></li>

    <div class='nav-spacer'>
      <li class='nav-item'><a href='/program'>Program</a></li>
      <li class='nav-item'><a href='/registration'>Pendaftaran</a></li>
      <li class='nav-item'><a href='/testimonies'>Testimoni</a></li>
    </div>

  </ul>

</div>