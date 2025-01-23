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
<div id="navbar" class="fixed top-0 left-0 z-50 w-full bg-neutral-50">

	<div class="w-full max-w-screen-0xl mx-auto flex flex-row justify-between items-stretch">

		<!-- site logo -->
		<div id="logo" class="px-6 py-4 lg:py-6">
			<a href="<?php echo get_site_url(); ?>">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mfyah-logo-01.png" class="w-32 lg:w-44" alt="mfyah logo">
			</a>	
		</div>

		<div class="flex flex-row">

			<!-- donate button -->
			<div class="flex justify-center items-center text-white bg-black hover:bg-teal-600 transition duration-300">
				<a href="#" class="flex flex-col justify-center items-center gap-0 lg:gap-1 text-xs lg:text-xs font-semibold tracking-widest uppercase px-6 lg:px-10"><i class='bx bx-donate-heart text-2xl lg:text-3xl'></i><span class="hidden lg:flex">Donate</span></a>
			</div>
			<!-- menu button -->
			<nav id="site-navigation" class="flex justify-center items-stretch " aria-label="<?php esc_attr_e( 'Main Navigation', 'congress-2024' ); ?>">
				<!-- <button type="button" id="primary-menu-toggle" aria-controls="primary-menu" aria-expanded="false" class="flex p-2 justify-center items-center text-white bg-neutral-900 border-2 border-neutral-900 hover:text-neutral-900 hover:bg-transparent transition duration-300"><i class='bx bx-menu bx-sm'></i></button> -->
				<button id="primary-menu-toggle" class="z-50 text-white bg-teal-600 hover:bg-teal-300 transition duration-300 flex flex-col justify-center items-center gap-0 lg:gap-1 text-xs lg:text-xs font-semibold tracking-widest uppercase px-6 lg:px-10"><i class='bx bx-menu text-2xl lg:text-3xl'></i><span class="hidden lg:flex">Menu</span></button>
			
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s hidden absolute top-0 right-0 z-40 min-w-60 h-full min-h-dvh bg-teal-900 text-white flex-col gap-4 lg:gap-6 pt-28 text-sm lg:text-sm tracking-wider *:font-heading *:py-3 *:lg:py-2 *:px-6 *:lg:px-6 *:text-left *:tracking-widest" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->

		</div>
		
	</div>
		
</div>
