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

<section class=" owl-theme section section-1 next-section-rounded ">
  
    <div class='owl-carousel owl-carousel-section section-1__carousel wrapper'>

        <div class='block-reverse-responsive hero__container block-even'> 
        
            <div class='hero-1__container block block-center'>
                <div class='hero__header-container'>
                    <h1 class='hero__header-text header-text'>
                        <span>CARA BELAJAR</span> <br/> <span>AKTIF MANDIRI</span>
                    </h1>
                    <h3 class='description-text'>Penelitian - Pembelajaran - Production House</h3>
                    <div class='hero__btn-container flex-center'>
                        <a class='btn' href='/page'>Selengkapnya</a>
                        <a class='btn white-bg' href='/contact'>Kontak Kami</a>
                    </div>
                </div>
            </div>

            <div class='block block-center hero-1__content-wrapper'>
                <div class='hero__image-container'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-image-1.png' ?> ' />
                </div>
                <div class='hero__image-container'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-image-2.png' ?> ' />
                </div>
                <div class='hero__image-container'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-image-3.png' ?> ' />
                </div>
            </div>

        </div>
    
        <div class='block-reverse-responsive hero-2__container block-even'> 
        
            <div class='block block-center'>
                <div class='hero__header-container'>
                    <h2 class='hero__header-text header-text'>
                        <span>BACA ARTIKEL</span> <br/> <span>MANDIRI</span>
                    </h2>
                    <div class='hero__btn-container flex-center'>
                        <a class='btn' href='/page'>Buka Halaman</a>
                    </div>
                </div>
            </div>

            <div class='block block-center hero-2__content-wrapper'>
                <div class='post-card-thumbnail__container top-image'>
                    <div class='post-card-thumbnail__image-container'>
                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> ' />
                    </div>
                    <a href='#' class='post-card-thumbnail__info-container'>
                        <h2 class='post-card-thumbnail__title'>
                            Field Trip Napak Tilas Religi
                        </h2>
                        <p class='post-card-thumbnail__description'>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                    </a>
                </div>
                <div class='post-card-thumbnail__container center-image'>
                    <div class='post-card-thumbnail__image-container'>
                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> ' />
                    </div>
                    <a href='#' class='post-card-thumbnail__info-container'>
                        <h2 class='post-card-thumbnail__title'>
                            Field Trip Napak Tilas Religi
                        </h2>
                        <p class='post-card-thumbnail__description'>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                    </a>
                </div>
                <div class='post-card-thumbnail__container below-image'>
                    <div class='post-card-thumbnail__image-container'>
                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> ' />
                    </div>
                    <a href='#' class='post-card-thumbnail__info-container'>
                        <h2 class='post-card-thumbnail__title'>
                            Field Trip Napak Tilas Religi
                        </h2>
                        <p class='post-card-thumbnail__description'>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                    </a>
                </div>
            </div>

        </div>

    </div>

  
</section>


<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 2 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section class='section section-2 section-blue-bg section-rounded next-section-rounded'>
    <div class='block-even block-reverse-responsive wrapper'>
        <div class='block block-center'>
            <h2 class='header-text'>Tentang HSTB</h2>
            <p class='description-text'>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat 
            </p>
        </div>
        <div class='block block-center'>
            <div class="quote__wrapper">
                <div class='quote__container'>
                    <svg class='quote__icon' viewBox="0 0 24 24">
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

<section class='section section-rounded section-3'>
    <div class='block wrapper'>
        <h2 class='header-text text-center'>Program Belajar</h2>
        
        <div class='owl-carousel owl-carousel-section section-3__carousel'>

            <div class='program__container program-1 block-even'>
                <div class='block block-center program-image__container'>
                                        <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
                </div>
                <div class='block block-center program-info__container'>
                    <h3 class='program__title'>My Own Life Book</h3>
                    <p class='description-text'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <a href='#' class='alt-btn white-bg'>More</a>
                </div>
            </div>

            <div class='program__container program-2 block-even'>
                <div class='block block-center program-image__container'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
                </div>
                <div class='block block-center program-info__container'>
                    <h3 class='program__title'>My Own Life Book</h3>
                    <p class='description-text'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <a href='#' class='alt-btn white-bg'>More</a>
                </div>
            </div>

            <div class='program__container program-3 block-even'>
                <div class='block block-center program-image__container'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/hero-2-image-1.png' ?> '/>
                </div>
                <div class='block block-center program-info__container'>
                    <h3 class='program__title'>My Own Life Book</h3>
                    <p class='description-text'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    <a href='#' class='alt-btn white-bg'>More</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 4 +-------------------------------------+  -->
<!-- ============================================================================== -->


<section class='section section-4'>
    <div class='block wrapper'>
        <div class='section-header__container flex-column'>
            <h2 class='header-text text-center'>Guru - Guru</h2>
            <h3 class='label-text text-center'>Home School Tunas Bangsa</h3>
        </div>
        <div class='owl-carousel owl-carousel-section teacher__carousel wrapper'>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Ahmad Soebarjo</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
            <a href='#' class='teacher__container flex'>
                <div class='teacher-img__container flex-center'>
                    <img src=' <?php echo get_template_directory_uri() . '/assets/images/teacher-1.png' ?> '>
                </div>
                <div class='teacher-info__container'>
                    <h2 class='teacher__name'>Sito Sopiani Lubis</h2>
                    <p class='teacher__label'>Kepala Sekolah</p>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 5 +-------------------------------------+  -->
<!-- ============================================================================== -->


<section class='section section-5'>
    <div class='block wrapper'>
        <div class='section-header__container faq-header__container flex-center'>
            <svg class='icon1' viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z" />
            </svg>
            <svg class='icon2' viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z" />
            </svg>
            <h2 class='header-text text-center'>
                FAQ
            </h2>
            <svg class='icon3' viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3Z" />
            </svg>
        </div>
        <ul class='faq__container flex'>
            <li class='faq-question__container flex-column active'>
                <a href='javascript:' class='faq-question__btn flex-center-between'> 
                    <span>Siapa Itu HSTB ? </span> 
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                    </svg>
                </a>
                <div class='faq-answer__container'> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </div>
            </li>
            <li class='faq-question__container flex-column'>
                <a href='javascript:' class='faq-question__btn flex-center-between'> 
                    <span> Siapa Kita ? </span> 
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                    </svg>
                </a>
                <div class='faq-answer__container'> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </div>
            </li>
            <li class='faq-question__container flex-column'>
                <a href='javascript:' class='faq-question__btn flex-center-between'> 
                    <span> Siapa Kita ? </span> 
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                    </svg>
                </a>
                <div class='faq-answer__container'> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip </div>
            </li>
        </ul>
    </div>
</section>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 6 +-------------------------------------+  -->
<!-- ============================================================================== -->


<section class='section section-6 next-section-rounded'>
    <div class='block wrapper'>
        <div class='section-header__container flex-center'>
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
            </svg>
            <h2 class='header-text text-center'>
                Lokasi Kami
            </h2>
        </div>
        <div class='map__container'>
            <iframe class='map__iframe' src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl. Pd. Serut III No.69, Pd. Kacang Bar. Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15226&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
        </div>
    </div>
</section>

