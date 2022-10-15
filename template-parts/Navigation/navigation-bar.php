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

<nav class="navigation-nav__container">

    <div class='navigation-nav__wrapper flex-center-between wrapper'>

        <!-- +-------------------------+ NAVIGATION MOBILE BTN +---------------------------+ -->
        <a id='sidebar-show-btn' class="navigation-sidebar-btn__container" href="javascript:classToggleById('sidebar-container')">
            <svg class="navigation-sidebar-btn__svg" viewBox="0 0 24 24">
                <path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
            </svg>
        </a>

        <!-- +---------------------------+ NAVIGATION LOGO +---------------------------+ -->
        <?php get_template_part('template-parts/Navigation/navigation-bar-logo'); ?>
    
        <!-- +--------------------------+ NAVIGATION OPTION +--------------------------+ -->
        <?php get_template_part('template-parts/Navigation/navigation-option', null, Array('options' => $args['options']) ); ?>
        
        <!-- +--------------------------+ NAVIGATION SEARCH BUTTON +--------------------------+ -->
        <a class="navigation-search-btn__container btn-svg open-btn" href="javascript:classToggleById('navigation-search__container')">
            <svg class="navigation-search-btn__svg" viewBox="0 0 24 24">
                <path fill="currentcolor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
            </svg>
        </a>
        
        <!-- +--------------------------+ NAVIGATION SEARCH FORM +--------------------------+ -->
        <?php get_template_part('template-parts/Navigation/navigation-search-form'); ?>

    </div>

</nav>