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
<section id="section-watch" class="w-full flex items-center flex-col px-6 md:px-16 py-6 lg:py-8 mt-2 md:mt-12">

  <!-- section wrapper -->
  <div class="w-full max-w-screen-xl mx-auto flex flex-col gap-6 lg:gap-10">
  
    <!-- section title -->
    <div class="w-full flex flex-col gap-1 lg:gap-3">
      <!-- <p class="text-teal-500 text-xs lg:text-sm font-semibold tracking-wider uppercase">Latest Livestreams</p>
      <h2 class="text-heading text-4xl lg:text-5xl">View Latest Mass</h2> -->
      <h3 class="uppercase text-lg font-bold tracking-widest my-4 pb-1 border-b border-stone-400/50">View Latest Mass</h3>
    </div>

    <!-- main viewer grid layout -->
    <div id="featured-video-row" class="w-full h-fit grid gap-4 lg:gap-8 grid-cols-12 transition duration-700">

      <!-- main video screen -->
      <div class="group relative col-span-12 lg:col-span-8 w-full aspect-video hover:shadow-2xl transition duration-300 cursor-pointer">
        <a href="
        <?php
            // mfyah_2024_get_video_details_array filter is located in inc folder
            // second arg is the array key of required video, key 0 is the first item in array
            $video_item = apply_filters('mfyah_2024_get_latest_video', 0);
            echo 'https://www.youtube.com/watch?v=' . $video_item['id'];
            ?>
          " target="blank">
          
          <!-- red play button overlay -->
          <i class='absolute z-10 bx bx-play text-5xl text-red-700 group-hover:text-stone-200 bg-neutral-900/60 group-hover:bg-red-600 pl-5 pr-4 py-2 rounded-xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition duration-300'></i>
          
          <img id="featured-video-image" loading="lazy" src="<?php
            if ($video_item['thumbnail']) {
              echo $video_item['thumbnail']; 
            } else {
              echo "Error: Fetch video function (mfyah_2024_get_latest_video) returned nothing.";
            };
          ?>" alt="<?php
          if ($video_item['title']) {
            echo $video_item['title']; 
          } else {
            echo "Error: Fetch video function (mfyah_2024_get_latest_video) returned nothing.";
          };
        ?>" class="w-full object-cover aspect-video rounded-xl group-hover:brightness-50 saturate-75 group-hover:saturate-100 transition duration-300">
        </a>
      </div>

      <!-- episode info box -->
      <div id="featured-video-info" class="accordion-wrapper relative col-span-12 lg:col-span-4 overflow-auto w-full flex flex-col gap-2 bg-stone-200 rounded-xl px-4 lg:px-8 py-4 lg:py-8">
        <div class="accordion-header w-full flex flex-row justify-between items-center gap-4">
          <h3 class="z-20 text-base lg:text-xl font-semibold lg:font-bold"><?php echo $video_item['title']; ?></h3>
          <div class="accordion-toggle flex lg:hidden rotate-180"><i class='bx bx-chevron-up p-2 rounded-xl text-2xl text-black hover:text-white hover:bg-teal-600 transition duration-300'></i></div>
        </div>
        <div class="accordion-body hidden lg:flex flex-col gap-4 overflow-y-auto text-ellipsis py-4">
          <?php
            if ($video_item['description']) {
              $description_array = explode( '**', $video_item['description'] );
              foreach ( $description_array as $desc) {
                echo '<p>' . $desc . '</p>';
              }
            } else {
              echo "Error: Fetch video function (mfyah_2024_get_latest_video) returned nothing.";
            };
          ?>
        </div>

        <!-- gradient end covers -->
        <!-- <div class="hidden lg:flex absolute z-30 top-16 left-0 w-full h-8 bg-gradient-to-b from-stone-100 via-stone-100 to-transparent"></div> -->
        <div class="hidden lg:flex absolute z-30 bottom-0 left-0 w-full h-20 bg-gradient-to-t from-stone-200 via-stone-200 to-transparent"></div>
      </div> <!-- featured-video-info -->
    </div> <!-- featured-video-row -->

    <!-- section title -->
    <div class="w-full flex flex-col gap-1 lg:gap-3">
      <h3 class="uppercase text-lg font-bold tracking-widest mt-4 pb-1 border-b border-stone-400/50">Viewing Options</h3>
    </div>

    <div class="w-full max-w-screen-md">
      <p>Mass for You at Home airs on Channel 10 at 6am each Sunday, and also on Aurora (Foxtel Channel 173) at 10am. It can also be accessed on this website from 7am on Sunday.</p>
    </div>

    <div class="col-span-12 grid grid-cols-12 gap-4 my-4">
      <a href="https://www.youtube.com/massforyouathome" target="blank" class="col-span-12 md:col-span-4 flex justify-center items-center gap-8 text-xs lg:text-sm font-sans font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-red-500 text-black hover:text-teal-100 border border-black hover:border-teal-500 transition duration-300">Watch on Youtube<i class='bx bx-right-arrow-alt text-xl'></i></a>
      <a href="https://10play.com.au/mass-for-you-at-home" target="blank" class="col-span-12 md:col-span-4 flex justify-center items-center gap-8 text-xs lg:text-sm font-sans font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-blue-700 text-black hover:text-teal-100 border border-black hover:border-teal-500 transition duration-300">Watch on Ten Play<i class='bx bx-right-arrow-alt text-xl'></i></a>
      <a href="https://facebook.com/MassForYouAtHome" target="blank" class="col-span-12 md:col-span-4 flex justify-center items-center gap-8 text-xs lg:text-sm font-sans font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-blue-800 text-black hover:text-teal-100 border border-black hover:border-teal-500 transition duration-300">Watch on Facebook<i class='bx bx-right-arrow-alt text-xl'></i></a>
    </div>

  </div> <!-- section-wrapper -->

</section>