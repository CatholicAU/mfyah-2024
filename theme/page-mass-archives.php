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
// section wrapper
?>
<div class="pt-32 xl:pt-48 pb-20 px-6 lg:px-6">

  <?php
  get_template_part( 'template-parts/section/watch', 'list' );
  get_template_part( 'template-parts/section/section', 'divider' );
  ?>

</div>

<?php
get_footer();
