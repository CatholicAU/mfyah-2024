<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<header id="masthead">

	<?php
		get_template_part( 'template-parts/component/nav', 'primary' );
		?>
	
	<?php
		if ( is_front_page() ) :
			get_template_part( 'template-parts/hero/hero', 'home-01' );
		endif; ?>

</header><!-- #masthead -->
