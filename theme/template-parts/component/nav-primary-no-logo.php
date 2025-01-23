<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<!-- Primary navigation -->
<div id="navbar" class="flex flex-row justify-between items-center w-full bg-teal-100">
		<div id="logo" class="py-6 px-6">
			<?php
			if ( is_front_page() ) :
				?>
				<h1><?php bloginfo( 'name' ); ?></h1>
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

		<!-- <nav id="site-navigation" class="flex flex-row justify-between items-between px-6 py-6 gap-4" aria-label="<?php esc_attr_e( 'Main Navigation', 'mfyah-2024' ); ?>"> -->
		<nav id="site-navigation" class="flex px-6 text-white lg:text-slate-900" aria-label="<?php esc_attr_e( 'Main Navigation', 'congress-2024' ); ?>">
			<!-- <button type="button" id="primary-menu-toggle" aria-controls="primary-menu" aria-expanded="false" class="flex p-2 justify-center items-center text-white bg-neutral-900 border-2 border-neutral-900 hover:text-neutral-900 hover:bg-transparent transition duration-300"><i class='bx bx-menu bx-sm'></i></button> -->
			<button id="primary-menu-toggle" class="z-50 flex flex-row justify-end p-2 bg-teal-600 hover:bg-orange-400 transition duration-300" title="primary menu toggle" aria-label="primary menu toggle" aria-controls="primary-menu" aria-expanded="false"><i class='bx bx-menu text-2xl text-white'></i></button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s hidden absolute top-0 right-0 z-40 min-w-60 h-full bg-teal-900 text-white flex-col gap-4 lg:gap-6 pt-28 text-sm lg:text-sm tracking-wider *:font-heading *:py-3 *:lg:py-2 *:px-6 *:lg:px-6 *:text-right *:tracking-widest" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
