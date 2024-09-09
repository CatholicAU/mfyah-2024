<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<header id="masthead" class="flex flex-row justify-between items-center w-full bg-neutral-100">

	<div id="logo" class="py-6 px-6">
		<?php
		if ( is_front_page() ) :
			?>
			<div class="font-bold"><?php bloginfo( 'name' ); ?></div>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$mfyah_2024_description = get_bloginfo( 'description', 'display' );
		if ( $mfyah_2024_description || is_customize_preview() ) :
			?>
			<p><?php echo $mfyah_2024_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" class="flex flex-row justify-between items-between px-6 py-6 gap-4" aria-label="<?php esc_attr_e( 'Main Navigation', 'mfyah-2024' ); ?>">
		<button aria-controls="primary-menu" aria-expanded="false" class="flex p-2 justify-center items-center text-white bg-neutral-900 border-2 border-neutral-900 hover:text-neutral-900 hover:bg-transparent transition duration-300"><i class='bx bx-menu bx-sm'></i></button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s hidden flex-row justasify-between gap-4" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
