<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<?php
    $post = $wp_query->post;
    if ( in_category('88')) {
        include(TEMPLATEPATH . '/single-quienes.php'); }
  	elseif ( in_category('90')){
  		include(TEMPLATEPATH. '/single-factor.php');} 
  	elseif ( in_category('95')){
  		include(TEMPLATEPATH. '/single-portafolio.php');} 
  	elseif ( in_category('96')){
  		include(TEMPLATEPATH. '/single-zona.php');} 
  	elseif ( in_category('97')){
  		include(TEMPLATEPATH. '/single-zona.php');} 
    elseif ( in_category('100')){
      include(TEMPLATEPATH. '/single-contactanos.php');} 
    elseif ( in_category('105')){
       include(TEMPLATEPATH. '/single-zona.php');}
  
?>
<?php get_footer();?>
