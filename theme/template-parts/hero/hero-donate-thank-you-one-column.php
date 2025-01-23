<?php
/**
 * Template part for displaying page heros
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<div id="hero-home-01" class="relative z-0 w-full h-full min-h-dvh flex justify-center items-center lg:items-center pt-24 md:pt-28 px-6 md:px-16">
				
  <!-- hero inner container -->
  <div class="relative z-20 w-full max-w-screen-md grid grid-cols-12 gap-0 md:gap-10 h-fit">

    <!-- left panel -->
    <div class="h-full md:min-h-fit col-span-12 flex flex-col gap-4 lg:gap-4 justify-start md:justify-center items-start md:items-center text-center pt-8 md:pt-16 pb-8 md:pb-16">
      
      <!-- top -->
      <div class="w-full lg:w-full lg:min-w-4/5 flex flex-col justify-center items-center gap-3 lg:gap-4 ">
        <p class="w-fit border border-green-700 px-3 py-1 font-heading text-xs text-white bg-green-600 font-normal rounded-full uppercase">Payment Success</p>
        <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl xl:text-6xl text-balance text-black font-semibold tracking-tight">Thank you for your
          <?php

            if ( !$_POST["donation_amount"] && !$_POST["donation_frequency"] ) {
              $url = get_site_url() . "/donate";
              echo ($url);
              header( "Location: " . $url );
              exit();
            } else {
              echo ("$" . $_POST["donation_amount"] . " ");
              echo $_POST["donation_frequency"];
            };
          ?>
            donation.</h2>
        <p class="text-sm lg:text-base text-neutral-900 text-balance font-serif">For questions and clarifications regarding your payment, please call our hotline.</p>
  
        <!-- buttons -->

      </div>

      <!-- bottom -->
      <div class="w-full flex md:flex flex-col gap-2 mt-6 text-xs lg:text-sm text-center font-sans opacity-80">

        <div>
          <p><i class='bx bxs-phone' ></i> For queries, call hotline: <strong>1800-MASS4U</strong></p>
        </div>

      </div>


    </div>
  </div>

  <!-- background gradient overlay -->
  <div class="absolute z-0 left-0 top-0 w-full h-full bg-transparent bg-gradient-to-tr from-teal-200 via-teal-100 md:via-teal-50 to-yellow-200/30 md:to-transparent opacity-90 md:opacity-95">
  <!-- <div class="absolute z-0 left-0 top-0 w-full h-full bg-transparent bg-gradient-to-tr from-teal-300 via-teal-100 md:via-teal-100/60 to-yellow-200/30 md:to-transparent opacity-90 md:opacity-95"> -->
  </div>
  <!-- background elements -->
  <div class="absolute -z-20 left-0 top-0 w-full h-full">
    <!-- <img width="800" height="700" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/hero/hero-bg-02-dark.jpg" class="w-full h-full object-cover" alt="mfyah logo"> -->
  </div>

</div>