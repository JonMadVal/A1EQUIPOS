<?php
/**
 * The Template for displaying all single posts
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
	color: #fff !important;
	padding: 3%;
	font-size: 1.5em;
	font-weight: bold;
	/*border-radius: 0 0 12px 12px;*/
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
	color: #fff !important;
}
.izquierda li:hover{
	background: #f95d00;
	text-align: center;
	color: #fff !important
}
.enlace li{
	list-style-type: none;
}
.enlace li a{
	border: 2px solid #f95d00;
	padding: 0.6%;
	border-radius: 10px 10px 0 0;
	color: #f95d00;
	text-decoration: none;
	font-size: 1.5em;
}
.enlace li a:hover{
	background: #f95d00;
	border-radius: 10px 10px 0 0;
	color: #fff;
}
h2 {
  font-size: 1.2em;
  padding: 2% 0;
}
</style>
<div id="main-content" class="col-md-12">
		<div class="row main-content">
			<div class="izquierda col-md-2">
					<?php //echo do_shortcode('[mostrar_cat cat="100"]');?>
					  <?php wp_nav_menu(ARRAY('menu' => 'zona_ de_interes')); ?>
			</div>
			<div id="primary" class="derecha col-md-10">
								
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							// Include the page content template.
							get_template_part( 'content', 'page' );
						endwhile;
					?>
			
			</div><!-- #primary -->
		</div>
	
</div><!-- #main-content -->
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
