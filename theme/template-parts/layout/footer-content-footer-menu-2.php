<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<footer id="colophon" class="w-full mt-28 bg-teal-600 text-white">
	
	<div class="w-full max-w-screen-xl mx-auto px-6 md:px-16 py-12 lg:py-24 bg-primary-50 mt-20 bg-teal-600 text-white">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'mfyah-2024' ); ?>">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'mfyah-2024' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>

		<div id="copyright" class="pt-4 mt-12 border-t ">
			<?php
			$mfyah_2024_blog_info = get_bloginfo( 'name' );
			if ( ! empty( $mfyah_2024_blog_info ) ) :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
				<?php
			endif;

			/* translators: 1: WordPress link, 2: WordPress. */
			printf(
				'<a href="%1$s">proudly powered by %2$s</a>.',
				esc_url( __( 'https://wordpress.org/', 'mfyah-2024' ) ),
				'WordPress'
			);
			?>
		</div>
	</div>
</footer><!-- #colophon -->
