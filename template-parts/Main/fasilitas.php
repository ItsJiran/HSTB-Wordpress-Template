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

      <div class="post-card-container fasilitas-top-card-container"> 
        <div class="post-card-thumbnail-container">
          <div class="post-card-thumbnail-image-container"> 
              <img src=" <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/ATAS_Gallery1.jpg' ?>  ">
          </div>
        </div>
        <div class="post-card-info-wrapper">
            <div class="post-card-info-container">
            <h2 title="" class="heading-3">Ruang Gallery</h2>
              <p itemprop="description" class="paragraph-3">Ruang galeri adalah tempat pajagan dari hasil karya-karya peserta didik, ada yang berbentuk lukisan, karya tanah liat, karya menjahit, karya print 3d dan makalah.</p> 
          </div>
        </div>
      </div>

      <div class="post-card-container fasilitas-top-card-container"> 
        <div title="" class="post-card-thumbnail-container">
          <div class="post-card-thumbnail-image-container"> 
              <img src="<?php echo get_template_directory_uri() . '/assets/images/Fasilitas/ATAS_Gallery2.jpg' ?>">
          </div>
        </div>
        <div class="post-card-info-wrapper">
            <div class="post-card-info-container">
            <h2 title="" class="heading-3">Ruang Gallery</h2>
              <p itemprop="description" class="paragraph-3">Ruang galeri adalah tempat pajagan dari hasil karya-karya peserta didik, ada yang berbentuk lukisan, karya tanah liat, karya menjahit, karya print 3d dan makalah.</p> 
          </div>
        </div>
      </div>

      <div class="post-card-container fasilitas-top-card-container"> 
        <div title="" class="post-card-thumbnail-container">
          <div class="post-card-thumbnail-image-container"> 
              <img src=" <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/ATAS_Perpustakaan.jpg' ?>  ">
          </div>
        </div>
        <div class="post-card-info-wrapper">
            <div class="post-card-info-container">
            <h2 title="" class="heading-3">Perpustakaan</h2>
              <p itemprop="description" class="paragraph-3">Perpustakaan sebagai sumber materi belajar baik di luar jam belajar ataupun pada saat pelajaran dan untuk kegiatan pinjam buku.</p> 
          </div>
        </div>
      </div>

      <div class="post-card-container fasilitas-top-card-container"> 
        <div title="" class="post-card-thumbnail-container">
          <div class="post-card-thumbnail-image-container"> 
              <img src="<?php echo get_template_directory_uri() . '/assets/images/Fasilitas/ATAS_Studio.jpg' ?>">
          </div>
        </div>
        <div class="post-card-info-wrapper">
            <div class="post-card-info-container">
            <h2 title="" class="heading-3">Studio</h2>
              <p itemprop="description" class="paragraph-3">Studio tempat untuk kegiatan belajar musik mulai dari gitar bass, piano ataupun pada saat pelajaran dan untuk kegiatan pinjam buku.</p> 
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

<section id='fasilitas-page-section-3'  class='section blue-bg'>

  <div class='section-wrapper'>
    <div id='fasilitas-carousel' class='owl-carousel'>

          <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Kebun.jpg' ?> '/>
            </div>
          </div>

          <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Kebun2.jpg' ?> '/>
            </div>
          </div>

         <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Kebun3.jpg' ?> '/>
            </div>
          </div>

          <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Studio.jpg' ?> '/>
            </div>
          </div>

          <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Studio2.jpg' ?> '/>
            </div>
          </div>

         <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Studio3.jpg' ?> '/>
            </div>
          </div>

         <div class='program-container block-even-responsive-800 block-even-wrapper'>
            <div class='program-image-container block'>
               <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/SCROLL_Loker.jpg' ?> '/>
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
          <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/BAWAH_Aula.jpg' ?>  ?>'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Aula</h2>
          <p class='paragraph-2'>Aula di lantai 2 adalah tempat serbaguna, biasanya digunakan untuk kegiatan belajar collosal, shalat Dzuhur berjama'ah, pelatiahn / meeting guru, acara Production ( Sharing Karya ), dan masih banyak lagi.</p>
        </div>
      </div>
      <div class='card-container  row'>
        <div class='card-thumbnail-container'>
          <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/BAWAH_Aula2.jpg' ?>  ?>'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Kebun & Green House</h2>
          <p class='paragraph-2' >Aula di lantai 2 adalah tempat serbaguna, biasanya digunakan untuk kegiatan belajar collosal, shalat Dzuhur berjama'ah, pelatiahn / meeting guru, acara Production ( Sharing Karya ), dan masih banyak lagi.</p>
        </div>
      </div>
      <div class='card-container row'>
        <div class='card-thumbnail-container'>
          <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/BAWAH_Kantin1.jpg' ?>  ?>'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>Kantin</h2>
          <p class='paragraph-2'>Kantin menyediakan berbagai snack makanan dan minuman, buka saat jam istirahat dan waktu pulang sekolah</p>
        </div>
      </div>
      <div class='card-container row'>
        <div class='card-thumbnail-container'>
          <img src=' <?php echo get_template_directory_uri() . '/assets/images/Fasilitas/BAWAH_Playground.jpg' ?>  ?>'> 
        </div>
        <div class='card-info-wrapper'>
          <h2 class='heading-3'>PlayGround</h2>
          <p class='paragraph-2'>Playground outdoor dengan ayunan dan perosotan digunakan anak murid mulai dari Paud-SD</p>
        </div>
      </div>
    </div>
  </div>

</section>

