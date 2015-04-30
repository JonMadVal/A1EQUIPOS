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

<div id="main-content" class="coll-md-12">

		<div class="row">
			<div class="izquierda col-md-4">
			</div>

			<?php
				if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
					// Include the featured content template.
					get_template_part( 'featured-content' );
				}
			?>
			<div id="primary" class="derecha col-md-8 col-md-4 col-lg-7">
				

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
