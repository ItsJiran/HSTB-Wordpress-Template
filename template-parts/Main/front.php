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


// GETTING THE POSTS
$posts_query = array(
  'posts_per_page' => 3,
  'category_name' => 'post',
);
$posts_query_section = array(
  'posts_per_page' => 6,
  'category_name' => 'post',
);


// CREATING AN DYNAMIC ARRAY
$posts = get_posts($posts_query);
$posts_section = get_posts($posts_query_section);

?>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 1 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='section-1' class="section pb-150">
  
    <div class='section-wrapper'>
        <div class='block-wrapper block-even-wrapper block-even-responsive-800 block-reverse-responsive block-section-wrapper'>
            <div class='block block-center'>
                <h1 class='head-1 bold gluten'>Kurikulum Lifebook</h1>
                <p class='par-1 mt-5'>
                  Sekolah HomeSchool Tunas Bangsa, adalah sekolah dengan cara belajar aktif mandiri. Sekolah HSTB adalah wahana untuk mereka belajar dan berkembang, dengan para pembimbing yang akan memfasilitasi dan menemani mereka selama proses belajar. Melayani kebutuhan belajar para peserta didik.
                </p>
            </div>
            <div class='block block-center quote-wrapper'>
                <div id='section-1-image'>
                    
                </div>
            </div>
        </div>
    </div>
  
</section>


<section id='section-2' class="section pb-150">
  
    <div class='section-wrapper'>
        <div class='block-wrapper block-even-wrapper block-even-responsive-800 block-reverse-responsive block-section-wrapper'>
            <div class='block block-center'>
                <h1 class='head-1 bold gluten'>Kompetensi</h1>
            </div>
        </div>
    </div>
  
    <div class='section-wrapper'>
        <div class='block-wrapper block-even-wrapper block-even-responsive-800 block-reverse-responsive block-section-wrapper'>
            <div class='compe-grid block-center grid-3 mt-5 mb-50'>
                <div class='compe-cont'>
                  <div class='compe-inner-cont sub-head-4 gluten'>
                    WEBB APP <br>
                    MERDEKA BELAJAR <br>
                    MANDIRI <br>
                    PERPUS DIGITAL
                  </div>  
                  <label class='sub-head-1 gluten regular'>ILMU<label>
                </div>
                <div class='compe-cont'>
                  <div class='compe-inner-cont sub-head-4 gluten'>
                  POTTERY <br>
                  AGRICULTURE <br>
                  BATIK <br>
                  ANGKLUNG <br>
                  BODY DEVELOPMENT <br>
                  RELIGI KEBANGSAAN
                  </div>  
                  <label class='sub-head-1 gluten regular'>KARAKTER<label>
                </div>
                <div class='compe-cont'>
                  <div class='compe-inner-cont sub-head-4 gluten'>
                  JURNAL<br>
                  LIFEBOOK<br>
                  SOCIAL<br>
                  PERSONAL
                  </div>  
                  <label class='sub-head-1 gluten regular'>SPIRITUAL<label>
                </div>
            </div>
        </div>
    </div>
  

    <div class='section-wrapper'>
        <div class='block-wrapper block-even-wrapper block-even-responsive-800 block-reverse-responsive block-section-wrapper'>
        <div class='compe-grid compe-grid-2 block-center grid-3'>
                <div class='compe-cont'>
                  <img src=' <?php echo get_template_directory_uri() . '/assets/images/front-1.png' ?> '/>
                  <label class='sub-head-2 gluten regular'>NALAR FINANSIAL<label>
                </div>
                <div class='compe-cont'>
                  <img src=' <?php echo get_template_directory_uri() . '/assets/images/front-2.png' ?> '/>
                  <label class='sub-head-2 gluten regular'>NALAR SOSIAL<label>
                </div>
                <div class='compe-cont'>
                  <img src=' <?php echo get_template_directory_uri() . '/assets/images/front-3.png' ?> '/>
                  <label class='sub-head-2 gluten regular'>NALAR SPIRITUAL<label>
                </div>
            </div>
        </div>
    </div>
  

</section>
