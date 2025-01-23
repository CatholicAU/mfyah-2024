<?php
/**
 * Template part for displaying the watch section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */
?>

<!-- weekly sponsors section  -->
<section id="section-watch" class="w-full flex items-center flex-col px-6 md:px-16">

  <!-- section wrapper -->
  <div class="w-full max-w-screen-xl mx-auto flex flex-col gap-10 lg:gap-8">
  
    <!-- section title -->
    <div class="w-full mt-4 lg:mt-6">
      <h3 class="uppercase text-lg font-bold tracking-widest my-4 pb-1 border-b border-stone-400/50">Our Weekly Sponsors</h3>
    </div>

    <!-- weekly sponsor grid layout -->
    <div class="w-full h-fit grid gap-8 grid-cols-12 transition duration-700">

      <!-- weekly sponsor -->
      <div class="col-span-12 lg:col-span-4 p-4 lg:p-8 saturate-50 hover:saturate-100 hover:-translate-y-2 transition duration-300 px-12 mt-6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cathnews.png" alt="viewer image" class="w-full max-w-[640px] mx-auto rounded-xl hover:brightness-110 transition duration-300">
      </div>
      <!-- weekly sponsor -->
      <div class="col-span-12 lg:col-span-4 p-4 lg:p-8 saturate-50 hover:saturate-100 hover:-translate-y-2 transition duration-300 px-12 mt-6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/catholic-directory.png" alt="viewer image" class="w-full max-w-[640px] mx-auto rounded-xl hover:brightness-110 transition duration-300">
      </div>

    </div>

  </div> <!-- section-wrapper -->

</section>