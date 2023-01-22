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
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">

		<?php 
		// ==========================================================================================
		// +------------------------------+ INCLUDE HOOKS +-----------------------------------------+
		// ==========================================================================================
		/**
		 * @hooks wp_header_style_init();
		 */ 
		wp_head();
?>

    <style>

    /* ============ LOADING ============= */
    #loading-screen{
      position:fixed;
      z-index:999;
      width:100%;
      height:100%;
      background-color:white;
      transition:0.4s;
    }
    #loading-screen img{
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      width:50px;
      height:50px;
    }
    #loading-screen.clear{
      opacity:0;
      visibility: hidden;
    }

    </style>
  </head>
    
	<body <?php body_class(); ?> >

    <div id='loading-screen'><img id='loading-gif' src='https://media.tenor.com/On7kvXhzml4AAAAj/loading-gif.gif'></img></div>

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
