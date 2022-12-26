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

$logo_url = get_template_directory_uri() . '/assets/navigation-logo.png';

?>

<!-- +--------------------------+ NAVIGATION LOGO +--------------------------+ -->
<div class="navigation-logo__container">
    <a class="navigation-logo__wrapper" href=" <?php echo get_home_url(); ?> ">
        <img class="navigation-logo__img" data-src="<?php echo $logo_url; ?>" src=" <?php  echo $logo_url; ?> ">
    </a>
</div>