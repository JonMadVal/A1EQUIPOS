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

#primary{
	width: 92%;
	position: relative;
	height: auto;
	float: right;
}


.izquierda{
	position: absolute;
	left: -22%;
	z-index: 300;
	padding: 3%;
	top: 12px;

/* border-radius: 9px 9px 9px 9px; */
/* margin-left: 50px; */
}

.izquierda li{
	list-style-type: none !important;
	border-bottom: solid 1px #f95d00;
	line-height: 40px;
	-webkit-transition: background 1s,; 
    transition: background 1s;
    width: 85%;
}
.izquierda li a{
	color: #000;
	font-weight: bold;
	text-decoration: none;
}

.izquierda li a:hover{
	color: #F95D00;
}
.page-title{
	display: none;
}
.woocommerce > .products > li > a > img:hover{
	border: solid 3px #F95D00;
	opacity: 0.8;
}
.woocommerce > .products > li > a:nth-child(1)>h3{
	background: rgba(0, 0, 0, 0.6);
	border-bottom: solid 2px #F95D00;
	color: #fff;
	font-weight: bold;
	font-size: 0.8em;
	text-align: center;
}
.woocommerce > .products > li > a:nth-child(1)>h3:hover{
	background: #F95D00;
	color: #fff;
}
.woocommerce > .products > li > a:nth-child(2){
	background: #F95D00;
	color: #fff;
	font-weight: 100;
}
.woocommerce .products > li > a:nth-child(2):hover{
	background:#fff;
	color: #F95D00;
	font-weight: 100;
}
</style>


<script type="text/javascript">

$(document).ready(function(){
	$(".izquierda").on({
		click : function(){
			$(this).animate({"left":"-2%"}).after(function(){
				$("#primary").animate({"width":"70%"})
			})
		}, 

		mouseleave : function(){
			$(this).animate({"left":"-22%"}).after(function(){
				$("#primary").animate({"width":"92%"})
			})
		}
	})
})

</script>
<div id="main-content" class="col-md-12">
		<div class="row">
			<div class="izquierda col-md-3">
				<?php echo do_shortcode('[accordionmenu id="uniquebeed139" accordionmenu="383"]');?>
			</div>
			<div id="primary" class="derecha col-md-9">
				
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
get_sidebar();
get_footer();
