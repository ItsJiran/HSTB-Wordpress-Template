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

		<script src='<?php echo get_template_directory_uri() . '/assets/scripts/jquery-3.6.1.min.js';  ?>'></script>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">

		<?php 
		// ==========================================================================================
		// +------------------------------+ INCLUDE HOOKS +-----------------------------------------+
		// ==========================================================================================
		/**
		 * @hooks wp_header_style_init();
		 */ 
		wp_head();

?>
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

</html>
