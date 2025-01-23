<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<?php get_template_part( 'template-parts/section/cta', 'quicklinks' ); ?>

<footer id="colophon" class="w-full bg-teal-800 px-6 md:px-16 font-sans">
	
	<div class="w-full max-w-screen-xl mx-auto py-12 lg:py-24 flex flex-col text-white">

		<div class="grid grid-cols-12 gap-6">
			
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<aside class="col-span-12 sm:col-span-6 lg:col-span-3 flex flex-col my-6" role="complementary" aria-label="<?php esc_attr_e( 'Footer 1', 'mfyah-2024' ); ?>">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</aside>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<aside class="col-span-12 sm:col-span-6 lg:col-span-3 flex flex-col my-6" role="complementary" aria-label="<?php esc_attr_e( 'Footer 2', 'mfyah-2024' ); ?>">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</aside>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<aside class="col-span-12 sm:col-span-6 lg:col-span-3 flex flex-col my-6" role="complementary" aria-label="<?php esc_attr_e( 'Footer 3', 'mfyah-2024' ); ?>">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</aside>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				<aside class="col-span-12 sm:col-span-6 lg:col-span-3 flex flex-col my-6" role="complementary" aria-label="<?php esc_attr_e( 'Footer 4', 'mfyah-2024' ); ?>">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</aside>
			<?php endif; ?>

		</div>

		<div id="copyright" class="flex flex-col md:flex-row gap-4 justify-between items-center pt-4 mt-16 border-t border-dotted border-teal-500">
			
			<!-- copyright -->
			<div>
				<?php
					$mfyah_2024_blog_info = get_bloginfo( 'name' );
					if ( ! empty( $mfyah_2024_blog_info ) ) :
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php
					endif;
				?>
				<a href="https://catholic.au/">Custom WP Theme by the <strong>ACBC Media Team</strong></a>
			</div>

			<!-- platforms -->
			<div class="w-full md:w-fit flex flex-row gap-3 justify-start items-center opacity-90 saturate-50">
				<a href="https://facebook.com/MassForYouAtHome" target="blank">
					<img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/socials/facebook.svg" class="w-8 lg:w-8 hover:opacity-65 transition duration-300" alt="fb logo">
				</a>	
				<a href="https://youtube.com/MassForYouAtHome" target="blank">
					<img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/socials/youtube.svg" class="w-8 lg:w-8 hover:opacity-65 transition duration-300" alt="fb logo">
				</a>	
				<a href="https://10play.com.au/mass-for-you-at-home" target="blank">
					<img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/socials/ten.svg" class="w-8 lg:w-8 hover:opacity-65 transition duration-100" alt="fb logo">
				</a>	
			</div>
		</div>

	</div>
	
</div>
</footer><!-- #colophon -->

<div class="flex flex-col sm:flex-row gap-8 md:gap-12 justify-center items-center py-16 bg-black">
		<a href="https://catholic.au" target="blank">
			<img width="200" height="60" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/acbc-logo.png" class="w-full max-w-[220px] h-full object-contain hover:opacity-65 transition duration-100" alt="fb logo">
		</a>	
		<a href="https://www.dow.org.au/" target="blank">
			<img width="200" height="60" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/cdw-logo.png" class="w-full max-w-[220px] h-full object-contain hover:opacity-65 transition duration-100" alt="fb logo">
		</a>
</div>