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

function testimoni($name, $label, $quote, $image){
  return array(
    'quote' => $quote,
    'name'  => $name,
    'label' => $label,
    'image' => $image,
  );
}

$testimonials = array(

  testimoni('Sutinem', 'Orangtua Murid', 'Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore', '#'),
  testimoni('Sutinem', 'Orangtua Murid', 'Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore', '#'),
  testimoni('Sutinem', 'Orangtua Murid', 'Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore', '#'),
  testimoni('Sutinem', 'Orangtua Murid', 'Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore', '#'),
  testimoni('Sutinem', 'Orangtua Murid', 'Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore', '#'),
  testimoni('Sutinem', 'Orangtua Murid', 'Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore', '#'),

);

?>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 1 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='testimonials-page-section'  class='section next-section-rounded'>
    <div class='section-wrapper'>
      <h1 class='heading-1'>Apa Kata Mereka?</h1>

      <div class='block-wrapper'>

        <div class='block-even-wrapper block-reverse-responsive block-even-responsive-800 testimonial-container testimonial-main-container'>
          <div class='block block-center testimonial-info-container'>
            <div class='testimonial-profile-container block-even-wrapper'>
              <div class='block testimonial-profile-image-container'>
                <img src='<?php get_template_directory_uri() . '/assets/images/testimonial-profile.png'; ?>'/>
              </div>
              <div class='block block-center testimonial-profile-info-container'>
                <h2>Sutinem</h2>
                <label>Orangtua Murid</label> 
              </div>
            </div> 
            <p class='testimonial-message-container paragraph-2'>Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincid- unt ut laoreet dolore</p>
          </div> 
          <div class='block testimonial-video-container'>          
            <iframe  type="text/html" src="https://www.youtube.com/embed/v6Fmaljtn9I?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0"></iframe>
          </div>
        </div>

        <div class='grid-3 testimonials-container'>

          <?php foreach( $testimonials as $testimoni ): ?>
            <div class='testimonial-info-container'>

              <div class='testimonial-message-container paragraph-2'>
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10,7L8,11H11V17H5V11L7,7H10M18,7L16,11H19V17H13V11L15,7H18Z" />
                </svg>
                <p> <?php echo $testimoni['quote']; ?> </p>
              </div>
              <div class='testimonial-profile-container block-even-wrapper'>
                <div class='block testimonial-profile-image-container'>
                  <img src='<?php echo $testimoni['image']; ?>'/>
                </div>
                <div class='block block-center testimonial-profile-info-container'>
                <h2> <?php echo $testimoni['name']; ?> </h2>
                  <label> <?php echo $testimoni['label']; ?> </label> 
                </div>
              </div> 
            </div> 
          <?php endforeach; ?>
        
        </div>

      </div>

    </div>
</section>





