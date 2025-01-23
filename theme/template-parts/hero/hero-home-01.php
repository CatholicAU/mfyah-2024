<?php
/**
 * Template part for displaying page heros
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<div id="hero-home-01" class="relative z-0 w-full flex justify-center items-end lg:items-center pt-28 px-6 md:px-16">
				
  <!-- hero inner container -->
  <div class="relative z-20 w-full max-w-screen-xl grid grid-cols-12 gap-6 md:gap-10 h-fit">

    <!-- left panel -->
    <div class="h-full min-h-[60vh] md:min-h-fit col-span-12 md:col-span-6 lg:col-span-6 flex flex-col gap-4 lg:gap-4 justify-end md:justify-end pt-8 md:pt-16 pb-8">
      
      <!-- top -->
      <div class="flex flex-col gap-4 lg:gap-4 ">
        <p class="w-fit border border-orange-700/70 px-3 py-1 font-heading text-xs text-white bg-orange-700/70 font-normal rounded-full">Welcome to MFYAH</p>
        <h2 class="font-heading text-4xl lg:text-6xl xl:text-6xl text-balance text-black font-semibold tracking-tight">Australia's longest running Sunday Mass on television.</h2>
        <p class="text-base lg:text-base text-neutral-900 text-balance font-serif">Mass for You at Home has been broadcast since August 1971. It is believed to be the longest-running religious program on Australian commercial television.</p>
  
        <!-- buttons -->
        <div class="flex flex-row sm:flex-row w-full sm:w-fit gap-2 mt-4 md:mt-4">
          <a href="<?php echo get_site_url(); ?>/donate" class="flex justify-center items-center gap-1 text-xs lg:text-base font-heading font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-black hover:bg-teal-800 text-teal-50 border-2 border-black hover:border-teal-800 transition duration-300"><i class='bx bx-donate-heart text-xl'></i>Donate</a>
          <a href="#section-watch" class="flex justify-center items-center gap-1 text-xs lg:text-base font-heading font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-teal-500 text-black hover:text-white border border-black hover:border-teal-500 transition duration-300"><i class='bx bx-play-circle text-xl'></i>View Mass</a>
        </div>
      </div>

      <!-- bottom -->
      <div class="flex flex-col gap-2 mt-6 text-xs lg:text-sm font-sans opacity-80">

        <div>
          <p><i class='bx bxs-phone' ></i> For queries, call hotline: <strong>1800-MASS4U</strong></p>
        </div>

        <!-- socials -->
        <div class="flex flex-row gap-4 items-start border-t border-black border-dotted pt-4">
          <div>
            <p class="">Available on these platforms</p>
          </div>
          <div class="flex flex-row gap-3 justify-start items-center">
            <a href="https://facebook.com/MassForYouAtHome" target="blank">
              <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/socials/facebook.svg" class="w-8 lg:w-8 hover:opacity-65 transition duration-300" alt="fb logo">
            </a>	
            <a href="https://youtube.com/MassForYouAtHome" target="blank">
              <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/socials/youtube.svg" class="w-8 lg:w-8 hover:opacity-65 transition duration-300" alt="fb logo">
            </a>	
            <a href="https://10play.com.au/mass-for-you-at-home" target="blank">
              <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/socials/ten.svg" class="w-8 lg:w-8 hover:opacity-65 transition duration-100" alt="fb logo">
            </a>	
          </div>
        </div>

      </div>


    </div>

    <!-- right panel -->
    <div class="relative col-span-12 md:col-span-6 lg:col-span-6 flex flex-row justify-end items-end gap-6 overflow-visible">
      <div class="w-fit h-full flex justify-start items-end overflow-hidden">
        
        <!-- floating image -->
        <img width="800" height="700" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/hero/mfyah_home_05.png" class="hidden md:flex h-full w-full m-w-full object-cover hover:-translate-x-4 transition duration-1000 ease-out" alt="mfyah logo">

      </div>

    </div>
  </div>

  <!-- background gradient overlay -->
  <div class="absolute z-0 left-0 top-0 w-full h-full bg-transparent bg-gradient-to-tr from-teal-200 via-teal-100 md:via-teal-50 to-yellow-200/30 md:to-transparent opacity-90 md:opacity-95">
  <!-- <div class="absolute z-0 left-0 top-0 w-full h-full bg-transparent bg-gradient-to-tr from-teal-300 via-teal-100 md:via-teal-100/60 to-yellow-200/30 md:to-transparent opacity-90 md:opacity-95"> -->
  </div>
  <!-- background elements -->
  <div class="absolute -z-20 left-0 top-0 w-full h-full">
    <img width="800" height="700" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/hero/hero-bg-02-dark.jpg" class="w-full h-full object-cover" alt="mfyah logo">
  </div>

</div>