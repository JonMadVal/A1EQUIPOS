<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-4 postCont'); ?>>

	<header class="entry-header col-md-12">


		<?php if ( is_single() ) :
				 the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
	 
	 <? if (is_single() && is_category('diversion')): ?>
	
	<?php else :?>
			<div class="col-md-12 contThumb img-thumbnail">
				<?php twentyfourteen_post_thumbnail(); ?>
		    </div>		
	<?php endif ?>		
<!-- 		<?php //if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		  	<?php //if ( is_search() ) : ?>
				<?php //else : ?>
					<div class="entry-meta">
						<span class="cat-links"><?php //echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
					</div>
			<?php //endif ?>
		<?php //endif; ?>	 -->	
<!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if (is_category('noticias-construccion')) :?>
		
	 <? elseif (is_category('diversion')): ?>

    	<?php elseif (is_category('sabias-que')) :?>

        	<?php elseif ( is_search() ) : ?>
<!-- 	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div> --><!-- .entry-summary -->
	          <?php else : ?>


	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

       <?php endif ?>


	<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
 <?php //endif; ?>
</article><!-- #post-## -->