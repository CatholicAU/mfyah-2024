<?php
/**
 * The template for displaying Home Page 01
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

get_header();

// sections
get_template_part( 'template-parts/hero/hero', 'donate-02' );
get_template_part( 'template-parts/section/donation', 'alternatives' );
// get_template_part( 'template-parts/section/section', 'divider' );

?>

	

<?php
get_footer();
