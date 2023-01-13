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

<section id='pendaftaran-page-section'  class='section blue-bg next-section-rounded'>

  <div class='section-wrapper'>

    <div class='block-wrapper'>
      <h1 class='pendaftaran-heading heading-1'>
        PENDAFTARAN PESERTA DIDIK BARU!
      </h1>
      <div class='block flex flex-center block-center pendaftaran-info-container'>
        <label class='heading-2'>Untuk TK, SD, SMP dan SMA</label>
        <div class='flex-column'>
          <a class='btn' href='#'>Daftar Sekarang!</a>
          <p class='paragraph-4'>*Button ini akan mengarah ke google form</p>
        </div>
      </div>
    </div> 

    <div class='block-wrapper flex pendaftaran-detail'>
      <div class='block'>
        <p class='heading-3'>" Karakter adalah setengah dari pendidikan "</p>
      </div>
      <div class='block'>
        <div class='alt-btn white-bg'>Karakter</div>
        <ul>
          <li class='paragraph-3'>Budi Pekerti</li>
          <li class='paragraph-3'>Rutinitas</li>
          <li class='paragraph-3'>Compass Of Life</li>
          <li class='paragraph-3'>Kultum Jumat</li>
        </ul>
      </div>   
      <div class='block'>
        <div class='alt-btn white-bg'>Keterampilan</div>
         <ul class='grid-2'>
          <li class='paragraph-3'>Angklung</li>
          <li class='paragraph-3'>Batik</li>
          <li class='paragraph-3'>Tanah Liat</li>
          <li class='paragraph-3'>Agrikultur</li>
        </ul>
      </div>
    </div>

  </div>

</section>
