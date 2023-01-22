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

// GETTING THE CURRENT NUM PAGE
if($_GET['pg'] == null || $_GET['pg'] <= 0) $paged = 1;
else                                        $paged = $_GET['pg'];

// GETTING THE CURRENT CATEGORY TARGET
if($_GET['ctg'] == null || $_GET['ctg'] == 'Gallery' || $_GET['ctg'] == 'Gallery') $category = 'post';
else                                                                               $category = $_GET['ctg'];

// GETTING THE CURRENT CATEGORY TARGET
if($_GET['srch'] == null) $search = null;
else                      $search = $_GET['srch'];

// GETTING THE POSTS
$posts_query = array(
  'posts_per_page' => 6,
  'category_name' => $category,
  'paged' => $paged,
  's' => $search,
);

// CREATING AN DYNAMIC ARRAY
$posts_object = array(
  'posts' => get_posts($posts_query),
  'category' => $category,
  'next_page' => $paged + 1,
  'next_page_url' => '/blogs/?' . 'pg=' . $paged + 1 . '&ctg=' . $category . '&srch=' . $search,
  'previous_page' => $paged - 1,
  'previous_page_url' => '/blogs/?' . 'pg=' . $paged - 1 . '&ctg=' . $category . '&srch=' . $search,
);

?>

<!-- ============================================================================== -->
<!-- +--------------------------+ SECTION 1 +-------------------------------------+  -->
<!-- ============================================================================== -->

<section id='blog-page-section'  class='section blue-bg section-rounded section-rounded-first next-section-rounded'>
    <div class='section-wrapper block-wrapper'>

      <h1 class='heading-1'>Artikel Terbaru</h1>
      <form class='search-container' method="get" role="search" action="/blogs/" >
        <label for="s"></label>
        <input class="search-input" type="text" placeholder="Cari disini.." name="srch" id="srch" value="">
        <div class="search-icon-container">
            <svg class="search-icon-svg" viewBox="0 0 24 24">
                <path fill="currentcolor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
            </svg>
        </div>
      </form>

      <?php if(count($posts_object['posts']) == 0): ?>
        <h2 class='heading-2'>No Posts Found</h2>
      <?php endif; ?>

      <?php if(count($posts_object['posts']) !== 0 ): ?>
        <div class='blog-container grid-4'>

          <?php foreach( $posts_object['posts'] as $post ): ?>
            <article itemscope='itemscope' itemprop='blogPost' itemtype='https://schema.org/BlogPosting' class='post-card-container'>
              <a class='post-card-thumbnail-container' title='<?php echo $post->post_title ?>' href='<?php echo get_permalink($post); ?>'  >

                <div class='post-card-thumbnail-image-container'?>
                    <img alt='<?php echo $post->post_title?>' src=' <?php echo get_first_image( $post ); ?> ' />
                </div>
                <div class='post-card-thumbnail-info-container'>
                  <h2 itemprop='headline' class='heading-3'><?php echo $post->post_title; ?></h2>
                </div>
              </a>
              <div class='post-card-info-wrapper'>
                <div itemprop='articleBody description' class='post-card-info-container'>
                    <p class='paragraph-3'> <?php echo get_summary_post($post);  ?> </p> 
                </div>
                <a href='<?php echo get_permalink($post); ?>' class='btn'>Read More</a>
              </div>
            </article>
          <?php endforeach; ?>
       
        </div>
      <?php endif; ?> 



    <div class='blog-pagination-container'>

      <?php // PREVIOUS PAGE BUTTON ?> 
      <?php if( $posts_object['previous_page'] <= 0 ): ?>
        <a href='javascript:' class='btn disabled'>Previous</a>
        <?php else: ?>
        <a href='<?php echo $posts_object['previous_page_url']; ?>' class='btn'>Previous</a>
      <?php endif; ?>

      <?php // NEXT PAGE BUTTON ?> 
      <?php $check_query = $posts_query; $check_query['paged'] += 1; ?> 
      <?php if( count( get_posts( $check_query ) ) == 0 ): ?>
        <a href='javascript:' class='btn disabled'>Next</a>
        <?php else: ?>
        <a href='<?php echo $posts_object['next_page_url']; ?>' class='btn'>Next</a>
     <?php endif; ?>

    </div>

    </div>
</section>


