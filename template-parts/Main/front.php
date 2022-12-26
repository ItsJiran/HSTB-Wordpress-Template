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

// CREATING AN DYNAMIC ARRAY
$posts = get_posts($posts_query);

?>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 1 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='section-1' class="section next-section-rounded">
  
    <div class='section-wrapper'>
        <div class='owl-carousel'>
            <div id='hero-1' class='hero-wrapper block-wrapper block-even-responsive-750 block-reverse-responsive block-even-wrapper block-section-wrapper'>
                
                <div class='block block-center hero-header-wrapper'>
                    <div class='hero-header-container'>
                        <h1 class='hero-heading heading-1'>
                            <span>CARA BELAJAR</span> <br/> <span>AKTIF MANDIRI</span>
                        </h1>
                        <h3 class='hero-paragraph paragraph-1'>Penelitian - Pembelajaran - Production House</h3>
                        <div class='hero-btn-container flex-center'>
                            <a class='btn' href='/page'>Selengkapnya</a>
                            <a class='btn white-bg' href='/contact'>Kontak Kami</a>
                        </div>
                    </div>
                </div>
                
                <div class='block block-section block-stretch hero-content-wrapper'>
                    <div class='hero-image-container'>
                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-image-1.png' ?> ' />
                    </div>
                    <div class='hero-image-container'>
                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-image-2.png' ?> ' />
                    </div>
                    <div class='hero-image-container'>
                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-image-3.png' ?> ' />
                    </div>
                </div>

            </div>

            <div id='hero-2' class='hero-wrapper block-wrapper block-even-wrapper block-even-responsive-750 block-reverse-responsive block-section-wrapper'>

                <div class='block block-center hero-header-wrapper'>
                    <div class='hero-header-container'>
                        <h2 class='hero-heading heading-1'>
                            <span>BACA ARTIKEL</span> <br/> <span>MANDIRI</span>
                        </h2>
                        <div class='hero-btn-container flex-center'>
                            <a class='btn' href='/page'>Buka Halaman</a>
                        </div>
                    </div>
                </div>
                
                <div class='block block-stretch hero-content-wrapper'>
                  <?php for( $i = 0; $i < 3; $i++ ): ?>

                    <?php if($i == 0): ?>
                      <div class='post-card-thumbnail-container center-image'>
                      <?php elseif($i == 1): ?>
                      <div class='post-card-thumbnail-container top-image'>
                      <?php elseif($i == 2): ?>
                      <div class='post-card-thumbnail-container below-image'>
                    <?php endif; ?>


                        <div class='post-card-thumbnail-image-container'>
                            <img src=' <?php echo get_first_image($posts[$i]); ?> ' />
                        </div>
                            <?php if( empty($posts[$i]) ): ?>
                              <a href='#' class='post-card-thumbnail-info-container'>
                                  <h2 class='heading-2'>No Post Found</h2>
                              </a>
                            <?php endif; ?>

                            <?php if( !empty($posts[$i]) ): ?>
                              <a href='<?php echo $posts[$i]->guid; ?>' class='post-card-thumbnail-info-container'>
                                  <h2 class='heading-2'><?php echo $posts[$i]->post_title; ?></h2>
                                  <p class='paragraph-3'><?php echo get_summary_post($posts[$i]) ?></p>
                              </a>
                            <?php endif; ?>
                      </div>
                  <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
  
</section>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 2 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='section-2' class='section blue-bg section-rounded next-section-rounded'>
    <div class='section-wrapper'>
        <div class='block-wrapper block-even-wrapper block-even-responsive-800 block-reverse-responsive block-section-wrapper'>
            <div class='block block-center'>
                <h2 class='heading-1'>Tentang HSTB</h2>
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
</section>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 3 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='section-3' class='section section-rounded'>
    <div class='section-wrapper'>
  			<h2 class='heading-1 section-center-heading'>Program Belajar</h2>
	
  	    <div class='owl-carousel'>
		
             <div id='program-1' class='program-container block-even-responsive-800 block-even-wrapper'>
                <div class='program-image-container block'>
                   <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
                </div>
                <div class='program-description-container block block-center'>
                    <h3 class='heading-2'>My Own Life Book</h3>
                    <p class='paragraph-2'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <a href='#' class='alt-btn white-bg'>More</a>
                </div>
              </div>
		
             <div id='program-2' class='program-container block-even-responsive-800 block-even-wrapper'>
                <div class='program-image-container block'>
                   <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
                </div>
                <div class='program-description-container block block-center'>
                    <h3 class='heading-2'>My Own Life Book</h3>
                    <p class='paragraph-2'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <a href='#' class='alt-btn white-bg'>More</a>
                </div>
            </div>

		
             <div id='program-3' class='program-container block-even-responsive-800 block-even-wrapper'>
                <div class='program-image-container block'>
                   <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
                </div>
                <div class='program-description-container block block-center'>
                    <h3 class='heading-2'>My Own Life Book</h3>
                    <p class='paragraph-2'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <a href='#' class='alt-btn white-bg'>More</a>
                </div>
            </div>

				</div>
    </div>
</section>


<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 4 +-------------------------------------+  -->
<!-- ============================================================================== -->


<section id='section-4' class='section'>
    <div class='section-wrapper'>
      	<h2 class='heading-1'>Guru-Guru</h2>
				<p class='sub-heading-1'>Home School Tunas Bangsa</p>
        <div class='owl-carousel'>
            <a href='#' class='teacher-container'>
                <div class='teacher-img-container'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Ahmad Soebarjo</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher-container '>
                <div class='teacher-img-container '>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info-container'>
                    <h2 class='teacher-name'>Sito Sopiani Lubis</h2>
                    <p class='teacher-label'>Kepala Sekolah</p>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 5 +-------------------------------------+  -->
<!-- ============================================================================== -->


<section id='section-5' class='section'>
    <div class='section-wrapper'>
        <h2 class='heading-1 faq-heading'>
                FAQ
							<svg class='icon1' viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z" />
							</svg>
							<svg class='icon2' viewBox="0 0 24 24">
									<path fill="currentColor" d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z" />
							</svg>
							<svg class='icon3' viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z" />
							</svg>
				</h2>
				<ul class='faq-container block-wrapper'>
						<li class='faq-question-container active'>
								<a href='javascript:' class='faq-question-btn'> 
										<span>Siapa Itu HSTB ? </span> 
										<svg viewBox="0 0 24 24">
												<path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
										</svg>
								</a>
								<div class='faq-answer-container paragraph-1'> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </div>
						</li>
            <li class='faq-question-container'>
                <a href='javascript:' class='faq-question-btn'> 
                    <span> Siapa Kita ? </span> 
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                    </svg>
                </a>
                <div class='faq-answer-container paragraph-1'> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </div>
            </li>
            <li class='faq-question-container'>
                <a href='javascript:' class='faq-question-btn'> 
                    <span> Siapa Kita ? </span> 
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                    </svg>
                </a>
                <div class='faq-answer-container paragraph-1'> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </div>
            </li>
        </ul>
    </div>
</section>


<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 6 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='section-6' class='section next-section-rounded'>
    <div class='section-wrapper'>
        <div class='section-heading-icon'>
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
            </svg>
            <h2 class='heading-1'>
							Lokasi Kami
            </h2>
        </div>
        <div class='map-container block-wrapper'>
            <iframe class='map-iframe' src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl. Pd. Serut III No.69, Pd. Kacang Bar. Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15226&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
        </div>
    </div>
</section>