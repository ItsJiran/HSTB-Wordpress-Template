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

// NOTE WILL BE REFACTORED CAUSE THE CODE SO FREAKING DIRTY

namespace Simple;
if ( !defined( 'ABSPATH' ) ) exit;

if(isset($args['recursive'])) $recursive = '_' . strval( $args['recursive'] ) . '-';
else                          $recursive = '';

$class_container     = $recursive . 'sidebar-option__container-btn';
$class_container_btn = $recursive . 'sidebar-option__btn flex-center-between';

// Set up variable
$title = $args['title'];
if(!is_array( $args['link'] )) $link = $args['link'];
else                           $link = 'javascript:';

if(is_array($args['link'])) $class_container_btn .= ' sidebar-dropdown';

// Check if there'as already a recursive
if(isset($args['recursive'])) $args['recursive'] += 1;
else                          $args['recursive']  = 1;

?>

<li class="<?php echo $class_container; ?>">
    <a class="<?php echo $class_container_btn; ?>" href="<?php echo $link; ?>">
        
        <span>
            <?php echo $title; ?>
        </span>

        <?php if(is_array($args['link'])): ?>

            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
            </svg>

        <?php endif; ?>


    </a>

    <?php 
        // FOR DROPDOWN
        if(is_array( $args['link'] )) {
            get_template_part('template-parts/Navigation/sidebar-option',null,Array(
                'options'   => $args['link'],
                'recursive' => $args['recursive'],
            ));
        } 
    ?>

</li>

