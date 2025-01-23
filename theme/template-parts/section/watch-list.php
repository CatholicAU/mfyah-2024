<?php
/**
 * Template part for displaying the watch section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */
?>

<!-- View section  -->
<section id="section-watch" class="w-full flex items-center flex-col px-6 md:px-16 py-16">

  <!-- section wrapper -->
  <div class="w-full max-w-screen-xl mx-auto flex flex-col gap-6 lg:gap-10">
  
    <!-- section title -->
    <div class="w-full flex flex-col gap-1 lg:gap-3">
      <p class="text-teal-500 text-xs lg:text-sm font-semibold tracking-wider uppercase">Latest Livestreams</p>
      <h2 class="text-heading text-4xl lg:text-5xl">View Mass</h2>
      <p>
        
      </p>
    </div>

    <!-- main viewer grid layout -->
    <div id="featured-video-row" class="w-full h-fit grid gap-4 lg:gap-8 grid-cols-12 transition duration-700">

      <!-- main video screen -->
      <div class="col-span-12 lg:col-span-8 w-full aspect-video">
        <img id="featured-video-image" src="<?php
          $video_item = apply_filters('mfyah_2024_get_thumbnail_url', 0);
          echo $video_item['thumbnail'];
        ?>" alt="viewer image" class="w-full object-cover aspect-video rounded-xl hover:brightness-50 hover:shadow-2xl hover:saturate-50 transition duration-300">
      </div>

      <!-- episode info box -->
      <div id="featured-video-info" class="accordion-wrapper relative col-span-12 lg:col-span-4 overflow-auto w-full flex flex-col gap-2 bg-stone-200 rounded-xl px-4 lg:px-8 py-4 lg:py-8">
        <div class="accordion-header w-full flex flex-row justify-between items-center">
          <h3 class="z-20 text-base lg:text-xl font-semibold lg:font-bold"><?php echo $video_item['title']; ?></h3>
          <div class="accordion-toggle flex lg:hidden rotate-180"><i class='bx bx-chevron-up p-2 rounded-xl text-2xl text-black hover:text-white hover:bg-teal-600 transition duration-300'></i></div>
        </div>
        <div class="accordion-body hidden lg:flex flex-col gap-4 overflow-y-auto text-ellipsis py-4">
          <p><?php echo $video_item['description']; ?></p>
        </div>

        <!-- gradient end covers -->
        <!-- <div class="hidden lg:flex absolute z-30 top-16 left-0 w-full h-8 bg-gradient-to-b from-stone-100 via-stone-100 to-transparent"></div> -->
        <div class="hidden lg:flex absolute z-30 bottom-0 left-0 w-full h-20 bg-gradient-to-t from-stone-200 via-stone-200 to-transparent"></div>
      </div> <!-- featured-video-info -->
    </div> <!-- featured-video-row -->

    <!-- previous episodes list -->
    <div class="w-full mt-4 lg:mt-6">
      <h3 class="uppercase text-lg font-bold tracking-widest my-4 pb-1 border-b border-stone-400/50">Previous Episodes</h3>
    </div>
    
    <div class="w-full grid grid-cols-12 gap-4 lg:gap-8">
      <div class="col-span-12 md:col-span-6 lg:col-span-4 w-full flex flex-col">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mass-image-01.jpg" alt="viewer image" class="ratio-video rounded-lg hover:brightness-50 hover:shadow-2xl hover:saturate-50 transition duration-300">
        <div>
          <h4 class="py-2">19th Sunday in Ordinary Time [Yr B]</h4>
        </div>
      </div>
      <div class="col-span-12 md:col-span-6 lg:col-span-4 w-full flex flex-col">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mass-image-01.jpg" alt="viewer image" class="ratio-video rounded-lg hover:brightness-50 hover:shadow-2xl hover:saturate-50 transition duration-300">
        <div>
          <h4 class="py-2">19th Sunday in Ordinary Time [Yr B]</h4>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-4 w-full flex flex-col">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mass-image-01.jpg" alt="viewer image" class="ratio-video rounded-lg hover:brightness-50 hover:shadow-2xl hover:saturate-50 transition duration-300">
        <div>
          <h4 class="py-2">19th Sunday in Ordinary Time [Yr B]</h4>
        </div>
      </div>

    </div>

    <div class="col-span-12">
      <a href="https://www.youtube.com/massforyouathome" target="blank" class="hidden w-fit md:flex justify-center items-center gap-8 text-xs lg:text-sm font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-teal-500 text-black hover:text-teal-100 border border-black hover:border-teal-500 transition duration-300 my-4">Visit our Youtube Channel<i class='bx bx-right-arrow-alt text-xl'></i></a>
    </div>

  </div> <!-- section-wrapper -->

</section>