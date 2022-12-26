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

<div id='sidebar-container' class="sidebar__container">

    <div class='sidebar__wrapper flex-center'>

        <div class='sidebar-header__container'>

            <!-- +---------------------------+ SIDEBAR LOGO +---------------------------+ -->
            <?php get_template_part('template-parts/Navigation/sidebar-logo'); ?>
        
            <!-- +---------------------------+ SIDEBAR CLOSE BTN +---------------------------+ -->
            <a class="sidebar-close-btn__container" href="javascript:classToggleById('sidebar-container')">
                <svg class="sidebar-close-btn__svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                </svg>
            </a>

        </div>

        <!-- +--------------------------+ SIDEBAR OPTION +--------------------------+ -->
        <?php get_template_part('template-parts/Navigation/sidebar-option', null, Array('options' => $args['options']) ); ?>

        <div class='sidebar-footer__container flex-center'>
            <?php get_template_part('template-parts/Navigation/sidebar-social', null, Array('options' => $args['options']) ); ?>
        </div>

    </div>


    <a class='sidebar__background' href="javascript:classToggleById('sidebar-container')">
    </a>

</div>