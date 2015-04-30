<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<style type="text/css">
#primary .entry-header .entry-title {
	-webkit-box-shadow: 0 0 11px rgba(0, 0, 0, 0.2);
	-o-box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
	color: #f95d00;
	padding: 3%;
	font-size: 1.5em;
	font-weight: bold;
	border-radius: 0 0 12px 12px;
	border-top: 3px solid #000;
}
#primary .entry-content{
	padding: 3%;
	text-align: justify;
}
.izquierda li{
	list-style-type: none !important;
	border-bottom: solid 1px #f95d00;
	line-height: 40px;
	-webkit-transition: background 1s,; 
    transition: background 1s;
}
.izquierda li a{
	color: #000;
	font-weight: bold;
	text-decoration: none;
}
.izquierda li a:hover{
	color: #F95D00 !important;
}
</style>
<div id="main-content" class="col-md-12">
		<div class="row">

			<div id="primary" class="derecha col-md-12 ">
	
			<?php echo do_shortcode('[flagallery gid=all]');?>
			</div><!-- #primary -->
		</div>
	
</div><!-- #main-content -->
<?php get_footer();?>
