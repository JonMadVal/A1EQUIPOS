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
	line-height: 30px;
}
#primary .entry-content img{
	width: 100%;
	height: auto;
}
.type-post .entry-header .entry-title {
	line-height: 1 !important;
	padding: 3% !important;
	min-height: 5px !important;
}
.izquierda li{
background: url("/wp-content/themes/a1equipos/images/flecha.png") no-repeat scroll right center rgba(0, 0, 0, 0);	
border-bottom: 1px solid #f95d00;
list-style-type: none !important;
padding: 5% 0;
transition: background 1s ease 0s;

}
.izquierda li a{
color: #000;
text-decoration: none;
}
.izquierda li a:hover{
	color: #F95D00 !important;
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
/*.post-thumbnail img{
	width: 100%;
	height: auto;
}
*/
h1{
	font-weight: bold;
	font-size: 1.3em;
}
strong{
	font-weight: bold;
}
.post-thumbnail {
  max-height: 250px;
  overflow: hidden;
}
</style>
<div id="main-content" class="col-md-12">
		<div class="row main-content">
			<div class="izquierda col-md-3">
				<ul>
					<li><a href="sabias-que">¿Sabías qué?</a></li>
					<li><a href="noticias">Noticias</a></li>
				</ul>
			</div>
			<div id="primary" class="derecha col-md-9">
	
					<?php
						// Start the Loop.
				
						while ( have_posts()) : the_post();
							// Include the page content template.
							get_template_part( 'content', 'page' );
						 endwhile;
					?>
					<?php //if(function_exists(‘wp_pagenavi’)) { wp_pagenavi(); } ?>		
			
			</div><!-- #primary -->
		</div>
	
</div><!-- #main-content -->
<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
