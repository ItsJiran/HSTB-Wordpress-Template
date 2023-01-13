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

?>

<section id='fasilitas-page-section'  class='section purple-bg'>

  <div class='section-wrapper'>
    <h1 class='heading-1'>FASILITAS KAMI</h1>
  </div>

</section>

<section id='fasilitas-page-section-2'  class='section'>

  <div class='section-wrapper'>
    <div id='facilities-container' class='grid-4 block-wrapper'>
      <div class='card-container border'>
       <div class='facilities-icon-container'> </div> 
       <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
      </div>
      <div class='card-container border'>
       <div class='facilities-icon-container'> </div> 
       <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
      </div>
      <div class='card-container border'>
       <div class='facilities-icon-container'> </div> 
       <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
      </div>
      <div class='card-container border'>
       <div class='facilities-icon-container'> </div> 
       <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
      </div>
    </div>
  </div>

</section>

<section id='fasilitas-page-section-3'  class='section blue-bg'>

  <div class='section-wrapper'>
    <div id='fasilitas-carousel' class='owl-carousel'>

         <div id='program-3' class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
            </div>
          </div>

         <div id='program-2' class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
            </div>
        </div>

    </div>
  </div>

</section>

<section id='fasilitas-page-section-4'  class='section next-section-rounded'>

  <div class='section-wrapper'>
    <div class='facilities-description-container block-wrapper grid-2'>
      <div class='card-container row'>
        <div class='card-thumbnail-container'>
          <img src='#'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Lorem Ipsum</h2>
          <p class='paragraph-2'>Lorem ipsum dolor sit amet, consectetuer consectetuer Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
        </div>
      </div>
      <div class='card-container  row'>
        <div class='card-thumbnail-container'>
          <img src='#'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Lorem Ipsum</h2>
          <p class='paragraph-2' >Lorem ipsum dolor sit amet, consectetuer consectetuer Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
        </div>
      </div>
      <div class='card-container row'>
        <div class='card-thumbnail-container'>
          <img src='#'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Lorem Ipsum</h2>
          <p class='paragraph-2'>Lorem ipsum dolor sit amet, consectetuer consectetuer Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
        </div>
      </div>
      <div class='card-container row'>
        <div class='card-thumbnail-container'>
          <img src='#'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Lorem Ipsum</h2>
          <p class='paragraph-2'>Lorem ipsum dolor sit amet, consectetuer consectetuer Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
        </div>
      </div>
    </div>
  </div>

</section>

