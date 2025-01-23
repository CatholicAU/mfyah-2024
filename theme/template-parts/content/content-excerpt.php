<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="listing-container">

		
		<?php

			if (has_post_thumbnail()) {
				mfyah_2024_post_thumbnail();
			}
		?>
	
		<div class="listing-content">
			<header>
				<?php
				if ( is_sticky() && is_home() && ! is_paged() ) {
					printf( '%s', esc_html_x( 'Featured', 'post', 'mfyah-2024' ) );
				}
				the_title( sprintf( '<h2 class="listing-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				?>
			</header><!-- .entry-header -->
		
			<div <?php mfyah_2024_content_class( 'listing-content' ); ?>>
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-${ID} -->
