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

<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<!-- <script
				src="https://code.jquery.com/jquery-3.6.1.min.js"
				integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
				crossorigin="anonymous"></script> -->

    <title><?php echo format_web_title();  ?></title>
    <?php do_action('wp_head') ?>

    <!-- META TAG -->
    <meta content="<?php get_site_url() ?>" property="og:url">
    <meta content="wordpress" name="generator">
    <meta content="<?php echo format_web_description() ?>" name="description">
    <meta content="<?php echo format_web_description() ?>" property="og:description">
    <meta content="<?php echo format_web_title() ?>" name="keywords">
    <meta content="<?php echo format_web_title() ?>" property="og:title">
    <meta content="Home School Tunas Bangsa" property="og:site_name">
    <meta content="website" property="og:type" >
    <meta content="Indonesia" name="geo.placename"> 
    <meta content="id" name="geo.country"> 

	<script src='<?php echo get_template_directory_uri() . '/assets/scripts/jquery-3.6.1.min.js';  ?>'></script>
	
	<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100;300;400;500;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100;300;400;500;600&family=Inter:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

  </head>
    
	<body <?php body_class(); ?> >

		<?php 
	
			// ==========================================================================================
			// +------------------------------+ INCLUDE HOOKS +-----------------------------------------+
			// ==========================================================================================
			/**
			 * @hooks 
			 */ 
			wp_body_open();

			/**
			 * @hooks display_navigation_bar(); 
			 */ 
			do_action('header_content');

			/**
			 * @hooks 
			 */ 
			do_action('main_content');
			
			/**
			 * @hooks 
			 */ 
			do_action('footer_content');

			/**
			 * @hooks 
			 */ 
			wp_footer();

        ?>
        
	</body>

  <script>

    const loading_screen = document.getElementById('loading-screen');

    var clear_loading_screen = setInterval( function(){
      if(document.readyState !== 'complete') return;
      clearInterval(clear_loading_screen);
      loading_screen.classList.add('clear');
    }, 100);

  </script>

</html>
