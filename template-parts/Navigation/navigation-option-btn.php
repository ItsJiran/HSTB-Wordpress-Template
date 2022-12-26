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

$class_container     = $recursive . 'navigation-option__container-btn';
$class_container_btn = $recursive . 'navigation-option__btn';

// Set up variable
$title = $args['title'];
if(!is_array( $args['link'] )) $link = $args['link'];
else                           $link = 'javascript:';

// Setup active class note: '' mean it active only for the first recursion
if($recursive == '' && !is_array( $args['link'] )){

    global $wp;

    // get the hook
    $hook        = explode('/',$args['link'])[1];
    $current_url = explode('/',$wp->request)[0]; 

    // special case for home cause there's 2 conditional
    if($title == 'Home' && $current_url == 'home') $class_container .= ' active';

    // If its already the same
    if($hook == $current_url) $class_container .= ' active';
}

// Check if there'as already a recursive
if(isset($args['recursive'])) $args['recursive'] += 1;
else                          $args['recursive']  = 1;

?>

<li class="<?php echo $class_container; ?>">
    <a class="<?php echo $class_container_btn; ?>" href="<?php echo $link; ?>">
        
        <span>
            <?php echo $title; ?>
        </span>

    </a>

    <?php 
        // FOR DROPDOWN
        if(is_array( $args['link'] )) {
            get_template_part('template-parts/Navigation/navigation-option',null,Array(
                'options'   => $args['link'],
                'recursive' => $args['recursive'],
            ));
        } 
    ?>

</li>

