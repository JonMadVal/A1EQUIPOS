<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="row">

	
	<div id="slideshow" class="col-md-12">
		<?php echo do_shortcode('[metaslider id=1387]');?>

	</div>
	<div class="clear"></div>
	<div id="titulo_servicios" class="col-md-12">

			<hgroup><h1>¡PRIMEROS EN SERVICIO!</h1></hgroup>
			<p>Consulta Nuestro <a href="http://a1equipos.com/categoria-producto/alquiler-de-equipos-para-construccion-medellin/">Portafolio</a></p>
	
	</div>
	<div>
	<div class="todos col-md-12">
		<div id="informacion" class="row">
			<div class="cuadro_principal col-md-4">
				<hgroup><h1><a href="/categoria-producto/alquiler-de-equipos-para-construccion-medellin/">ALQUILER</a></h1></hgroup>
				<p>Dedicada al alquiler de equipo para construcción.</p>
			</div>
			<div class="cuadro_principal col-md-4">
				<hgroup><h1><a href="/centro-de-servicio/">CENTRO DE SERVICIOS</a></h1></hgroup>
				<p>Mantenimiento y reparación de equipos electromecánicos y a combustión para todos nuestros socios de negocio.</p>
			</div>
			<div class="cuadro_principal col-md-4">
				<hgroup><h1><a href="/categoria-producto/alquiler-de-equipos-para-construccion-medellin/madera/">MADERA</a></h1></hgroup>
				<p>Venta y alquiler de teleras, casetones, canes, tablas y largueros.</p>
			</div>
<!-- 			<div class="cuadro_principal col-md-3">
				<hgroup><h1><a href="http://pruebas.newwebcolombia.com/categoria-producto/ferreteria-2/">FERRETERIA</a></h1></hgroup>
				<p>Venta y comercialización de artículos ferreteros nacionales e importados.</p>
			</div> -->
		</div>
		<div id="formulario_s" class="col-md-12">
			<div class="form_recuadro row">
				<div class="col-md-6">
					<p>Quieres estar siempre actualizado de nuevos productos y promociones...</p>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[contact-form-7 id="243" title="contact-form-7"]');?>
				</div>			
			<div>
		</div>
	</div>


</div><!-- #main-content -->

<?php get_footer();
