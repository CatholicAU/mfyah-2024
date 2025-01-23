<?php
/**
 * Template part for displaying page heros
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<div id="hero-home-01" class="w-full h-full min-h-fit lg:min-h-[80vh] flex justify-center items-end lg:items-center bg-white bg-gradient-to-tr from-teal-300/70 via-teal-50 to-white/80 pt-28 px-6 md:px-16 pb-6 mb-16 lg:mb-20">
				
  <!-- hero inner container -->
  <div class="w-full max-w-screen-xl grid grid-cols-12 gap-6 md:gap-10 h-fit py-5 lg:py-20">

    <!-- left panel -->
    <div class="h-full min-h-[80vh] md:min-h-fit col-span-12 md:col-span-6 lg:col-span-7 flex flex-col gap-4 lg:gap-4 justify-between md:justify-between pt-16 pb-8 lg:py-8">
      
      <!-- top -->
      <div class="flex flex-col gap-4 lg:gap-4 ">
        <p class="w-fit border border-teal-600 px-3 py-1 font-mono text-xs text-teal-800 bg-teal-200/50 font-normal rounded-full">Donation Drive</p>
        <h2 class="font-heading text-5xl lg:text-6xl xl:text-7xl text-balance text-black font-semibold tracking-tight">Help us keep our Sunday Masses on air.</h2>
        <p class="text-base lg:text-base text-balance font-serif">Mass for You at Home continues to broadcast every Sunday thanks to the support and contributions of people like you.</p>
  
        <!-- buttons -->
        <div class="flex flex-row sm:flex-row w-full sm:w-fit gap-2 mt-4 md:mt-4">
          <a href="#donation-widget" class="flex justify-center items-center gap-1 text-xs lg:text-base font-heading font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-black hover:bg-teal-800 text-teal-50 border-2 border-black hover:border-teal-800 transition duration-300"><i class='bx bx-donate-heart text-xl'></i>Donate</a>
          <a href="#section-watch" class="flex justify-center items-center gap-1 text-xs lg:text-base font-heading font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-teal-500 text-black hover:text-white border border-black hover:border-teal-500 transition duration-300"><i class='bx bx-play-circle text-xl'></i>View Mass</a>
        </div>
      </div>

      <!-- bottom -->
      <div>

        <!-- socials -->
        <div class="flex flex-row gap-4 items-start mt-4 md:mt-6 text-black -translate-y-3 border-t border-black border-dotted pt-4">
          <div>
            <p class="text-xs lg:text-sm font-mono uppercase opacity-80">Available on these platforms</p>
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
    <div class="col-span-12 md:col-span-6 lg:col-span-5 flex flex-col gap-6">
      <div class="w-full flex justify-center items-center">
        
        <?php
          get_template_part( 'template-parts/component/donate', 'widget' );
        ?>

      </div>

    </div>
  </div>

</div>