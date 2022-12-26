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

if(isset($args['recursive'])) $recursive = '_' . strval( $args['recursive'] ) . '-';
else                          $recursive = '';

$options = $args['options'];
$class_container = $recursive . 'navigation-option__container'; 
?>

<!-- +--------------------------+ NAVIGATION OPTION +--------------------------+ -->
<ul class="<?php echo $class_container; ?> flex-center-between">

    <?php 
    
        foreach($args['options'] as $title => $link) 
            get_template_part('template-parts/Navigation/navigation-option-btn',null,Array( 'title'=>$title, 'link'=>$link, 'recursive'=>$args['recursive'] ));

    ?>

</ul>