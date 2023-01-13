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

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 1 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section class='section blue-bg section-rounded section-rounded-first next-section-rounded'>
    <div class='section-wrapper'>
        <div class='block-wrapper block-even-wrapper block-even-responsive-800 block-reverse-responsive block-section-wrapper'>
            <div class='block block-center'>
                <h1 class='heading-1'>Tentang HSTB</h1>
                <p class='paragraph-1'>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat 
                </p>
            </div>
            <div class='block block-center quote-wrapper'>
                <div class='quote-container'>
                    <svg class='quote-icon' viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14,17H17L19,13V7H13V13H16M6,17H9L11,13V7H5V13H8L6,17Z" />
                    </svg>
                    <h3>Tiada Hari Tanpa Berkarya Hidup Penuh Manfaat</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class='section-wrapper'>
        <div id='sejarah' class='block-wrapper block-even-wrapper block-even-responsive-800 block-section-wrapper'>
            <div class='block image-container'>
              <img src=' <?php echo "#" ?> '/>
            </div>
            <div class='block block-center'>
                <h2 class='heading-1'>Sejarah HSTB</h2>
                <p class='paragraph-1'>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat 
                </p>
            </div>
        </div>
    </div>

    <div class='section-wrapper'>
        <div id='idea' class='block-wrapper block-even-wrapper block-even-responsive-800 block-section-wrapper'>
            <div class='block'>
                <h2 class='heading-2'>Visi</h2>
                <div class='idea-wrapper'>
                  <div class='owl-carousel owl-theme idea-carousel'>
                    <div class='idea-notes-container'>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                    </div>
                    <div class='idea-notes-container'>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                    </div>
                    <div class='idea-notes-container'>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                    </div>
                  </div>
                </div>
            </div>
            <div class='block'>
                <h2 class='heading-2'>Misi</h2>
                <div class='idea-wrapper'>
                  <div class='owl-carousel owl-theme idea-carousel'>
                    <div class='idea-notes-container'>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                    </div>
                    <div class='idea-notes-container'>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                    </div>
                    <div class='idea-notes-container'>
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>


