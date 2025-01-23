<?php
/**
 * Template part for displaying donation section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<!-- Donation section -->
<section id="donation-section" class="w-full flex justify-center items-end lg:items-center bg-white bg-gradient-to-bl md:bg-gradient-to-tr from-teal-300/70 via-teal-50 to-white/80 pt-32 xl:pt-32 px-6 md:px-16">
				
  <!-- hero inner container -->
  <div class="w-full max-w-screen-xl h-full grid grid-cols-12 md:gap-10">

    <!-- left panel -->
    <div class="col-span-12 md:col-span-6 lg:col-span-6 flex flex-col gap-4 lg:gap-4 justify-center items-end">
      
      <div class="h-full flex items-end">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/thankful-transparent.png" alt="" class="w-full">
      </div>
      

    </div>

    <!-- right panel -->
    <div class="col-span-12 md:col-span-6 lg:col-span-5 flex flex-col justify-center items-center gap-6 py-0 pb-12 lg:py-20">
      <div class="w-full flex justify-center">
        
        <?php
          get_template_part( 'template-parts/component/donate', 'widget' );
        ?>

      </div>

    </div>
  </div>
</section>