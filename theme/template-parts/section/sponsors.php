<?php
/**
 * Template part for displaying sponsors section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */
?>

<!-- View section  -->
<section id="section-sponsors" class="w-full flex items-center flex-col px-6 md:px-16 py-6 lg:py-8">

  <!-- section wrapper -->
  <div class="w-full max-w-screen-xl mx-auto flex flex-col gap-6 lg:gap-10">
  
    <!-- section title -->
    <div class="w-full flex flex-col gap-1 lg:gap-3">
      <!-- <p class="text-teal-500 text-xs lg:text-sm font-semibold tracking-wider uppercase">Latest Livestreams</p>
      <h2 class="text-heading text-4xl lg:text-5xl">View Latest Mass</h2> -->
      <h3 class="uppercase text-lg font-bold tracking-widest my-4 pb-1 border-b border-stone-400/50">MFYAH Sponsors</h3>
    </div>

    <!-- sponsors gallery grid -->
    <div class="w-full grid grid-cols-12 gap-4">

      <div class="col-span-12 lg:col-span-3">
        <p>Mass for You at Home is also made possible our generous sponsors</p>
      </div>
      <!-- main sponsor -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-5 row-span-2 bg-stone-200/40 p-12 rounded-xl">
        <a href="<?php echo get_site_url(); ?>" class="w-full h-full flex justify-center items-center">
          <img width="280" height="120" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/catholic-mission.jpg" class="w-full py-8 mix-blend-multiply" alt="mfyah logo">
        </a>
      </div>
      <!-- other sponsors -->
      <div class="col-span-12 sm:col-span-6 lg:col-span-4 grid grid-cols-12 gap-4">
        <div class="col-span-12 row-span-1 bg-stone-200/40 p-12 rounded-xl">
          <a href="<?php echo get_site_url(); ?>" class="w-full h-full flex justify-center items-center">
            <img width="280" height="120" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cathnews.png" class="w-full py-8 mix-blend-multiply" alt="mfyah logo">
          </a>
        </div>
        <div class="col-span-12 row-span-1 bg-stone-200/40 p-12 rounded-xl">
          <a href="<?php echo get_site_url(); ?>" class="w-full h-full flex justify-center items-center">
            <img width="280" height="120" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/catholic-directory.png" class="w-full py-8 mix-blend-multiply" alt="mfyah logo">
          </a>
        </div>
      </div>

    </div>

  </div> <!-- section-wrapper -->

</section>