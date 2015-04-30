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
h1.page-title{
	-webkit-box-shadow: 0 0 11px rgba(0, 0, 0, 0.2);
	-o-box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
	color: #f95d00 !important;
	padding: 3%;
	font-size: 1.5em;
	font-weight: bold;
	border-radius: 0 0 12px 12px;
	border-top: 3px solid #000;
}
h1.product_title{
border-radius: 0 0 12px 12px;
border-top: 3px solid #000;
color: #f95d00 !important;
font-size: 1.5em !important;
font-style: italic;
padding: 3% !important;
}
.enlace li{
	list-style-type: none;
}
.enlace li a{

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
.products > li > a > img:hover{
	border: solid 3px #F95D00;
	opacity: 0.8;
}
.products > li > a:nth-child(1)>h3{
	background: rgba(0, 0, 0, 0.6);
	color: #fff;
	font-weight: bold;
	font-size: 0.8em;
	text-align: center;
}
.products > li > a:nth-child(2){
background: none repeat scroll 0 0 #f95d00;
bottom: 0;
color: #fff;
font-weight: 100;
position: absolute;
text-align: center;
width: 100%;
}
.products > li > a:nth-child(2):hover{
	background:#fff;
	color: #F95D00;
	font-weight: 100;
}
.products > li > a:nth-child(1)>h3:hover{
	background: #F95D00;
	color: #fff;
}
.woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
  float: left;
  min-height: 255px;
  padding: 0;
}
</style>
<div id="main-content" class="coll-md-12">
		<div class="row main-content">
			<div class="izquierda col-md-3">
				<?php echo do_shortcode('[accordionmenu id="uniquebeed139" accordionmenu="383"]');?>
			</div>
			<div id="primary" class="derecha col-md-9 ">
<!-- 				<ul class="enlace">
					<li>
						<a href="/portafolio-de-servicios/">Portafolio de Servicios</a>
					</li>
				</ul> -->
				<?php woocommerce_content(); ?>
			</div><!-- #primary -->
		</div>
	
</div><!-- #main-content -->
<?php
get_sidebar();
get_footer();
