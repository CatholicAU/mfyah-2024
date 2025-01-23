<?php
/**
 * Template part for displaying a donation widget
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */
?>

<!-- donation widget wrapper -->
<div class="w-full flex flex-col gap-4">

  <!-- donation widget -->
  <!-- <form id="donation-widget" action="<?php echo get_stylesheet_directory_uri(); ?>/bin/handle-donation-widget-form.php" method="POST" class="w-full overflow-clip font-heading flex flex-col rounded-xl bg-white bg-gradient-to-tr from-stone-100 via-white to-white border-0 shadow-lg border-teal-500"> -->
  <form id="donation-widget" action="<?php echo get_site_url(); ?>/thank-you" method="POST" class="w-full overflow-clip font-heading flex flex-col rounded-xl bg-white bg-gradient-to-tr from-stone-100 via-white to-white border-0 shadow-lg border-teal-500">
    <div class="w-full flex flex-col gap-4 lg:gap-6">


      
      <!-- form title -->
      <div class="w-full flex flex-col gap-0 px-6 lg:px-10 pt-10 mb-1">
        <h3 class="relative text-xl uppercase font-bold text-black">
          Donate now
          <input type="reset" id="donation-reset" name="donation_reset" class="hidden">
          <label for="donation-reset" class="absolute top-0 right-0 cursor-pointer font-mono text-xs font-normal tracking-wider bg-neutral-200 hover:bg-black hover:text-white px-2 py-1 rounded-full transition duration-300"  title="Reset">RESET</label>
        </h3>
        <p class="flex flex-row items-center gap-1 text-xs opacity-60"><i class='bx bxs-lock-alt text-base'></i>Payments are securely processed by <a href="https://stripe.com/au" class="font-semibold text-indigo-800">Stripe</a></p>
      </div>
      
      <!-- form -->
      <div class="frequency-buttons-wrapper w-full flex flex-row gap-2 px-6 lg:px-10">
        
        <!-- once -->
        <input type="radio" id="once" name="donation_frequency" value="one-off" class="hidden">
        <label for="once" class="radio-label" aria-disabled='true'>One-off</label>
        
        <!-- monthly -->
        <input type="radio" id="monthly" name="donation_frequency" value="monthly" class="hidden">
        <label for="monthly" class="radio-label" aria-disabled='true'>Monthly</label>
        
        <!-- yearly -->
        <input type="radio" id="yearly" name="donation_frequency" value="yearly" class="hidden">
        <label for="yearly" class="radio-label" aria-disabled='true'>Yearly</label>
        
      
      </div>
      <div class="amount-buttons-wrapper flex flex-row gap-1 px-6 lg:px-10">

        <!-- 10 -->
        <input type="radio" id="ten" name="donation_amount" value="10" class="hidden" disabled>
        <label for="ten" class="radio-label" aria-disabled='true'>$10</label>
        
        <!-- 20 -->
        <input type="radio" id="twenty" name="donation_amount" value="20" class="hidden" disabled>
        <label for="twenty" class="radio-label" aria-disabled='true'>$20</label>
        
        <!-- 50 -->
        <input type="radio" id="fifty" name="donation_amount" value="50" class="hidden" disabled>
        <label for="fifty" class="radio-label" aria-disabled='true'>$50</label>
        
        <!-- 100 -->
        <input type="radio" id="one-hundred" name="donation_amount" value="100" class="hidden" disabled>
        <label for="one-hundred" class="radio-label" aria-disabled='true'>$100</label>
        
        <!-- 200 -->
        <input type="radio" id="two-hundred" name="donation_amount" value="200" class="hidden" disabled>
        <label for="two-hundred" class="radio-label" aria-disabled='true'>$200</label>
  
      </div>
      <div id="donation-error-message" class="flex items-center gap-2 text-sm text-red-600 px-6 lg:px-10">
       'Frequency and donation amount not specified.'
      </div>
      <!-- <div class="flex flex-col gap-2 bg-stone-200/50 px-6 py-6 lg:px-10"> -->
        <!-- specify amount -->
        <!-- <input type="radio" id="specify-amount" name="specify_amount" value="Specific Amount" class="hidden">
        <label for="specify-amount" class="radio-label">I want to specify one-off amount</label> -->
      <!-- </div> -->
    </div>
    <div class="">  
      <input id="donation-submit" type="submit" class="hidden" disabled aria-disabled="true">
      <label for="donation-submit" aria-disabled="true" class="group bg-teal-950 hover:bg-neutral-900 aria-disabled:bg-stone-300 aria-disabled:text-stone-700 cursor-pointer aria-disabled:cursor-default w-full h-full px-6 lg:px-10 py-4 mt-4 text-white font-semibold tracking-wide transition duration-200 flex flex-row justify-between items-center gap-2">
        <div class="flex flex-col">
          <p class="text-2xl font-normal tracking-wider">Submit payment</p>
          <p class="flex flex-row items-center gap-1 text-xs font-normal opacity-60"><i class='bx bx-check-shield text-base'></i>Redirects to <a href="https://stripe.com/au" class="font-semibold text-indigo-300">Stripe</a></p>
        </div>
        <i class='bx bx-right-arrow-alt text-2xl'></i>
      </label>
    </div>
    <a href="https://buy.stripe.com/14k28ogwV7e0fbG5km" target="blank" class="cursor-pointer w-full px-6 py-5 text-white text-center text-sm md:text-base bg-teal-600 hover:bg-teal-400 font-semibold transition duration-300">I want to specify one-off amount</a>
  </form>
  
  <!-- Stripe accepted payments -->
  <div class="w-full h-10 flex flex-row gap-4 justify-between items-center">
    <div class="w-full h-full flex flex-row gap-2 justify-start items-center overflow-hidden">
      <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stripe/visa.svg" class="object-contain w-10 h-full max-h-8 lg:w-10 hover:opacity-65 transition duration-100 px-2 py-2 rounded bg-white " alt="fb logo">
      <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stripe/mastercard.svg" class="object-contain w-10 h-full max-h-8 lg:w-10 hover:opacity-65 transition duration-100 px-2 py-2 rounded bg-white " alt="fb logo">
      <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stripe/google_pay.svg" class="object-contain w-10 h-full max-h-8 lg:w-10 hover:opacity-65 transition duration-100 px-2 py-2 rounded bg-white " alt="fb logo">
      <img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stripe/apple_pay.svg" class="object-contain w-10 h-full max-h-8 lg:w-fit hover:opacity-65 transition duration-100 px-2 py-2 rounded bg-white " alt="fb logo">
    </div>
    <div class="flex flex-row gap-2 justify-end items-center text-right">
      <a href="https://stripe.com/au" target="blank"><img width="32" height="32" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stripe/stripe-badge.svg" class="object-contain w-48 h-full max-h-8 mr-auto opacity-60 hover:opacity-80" alt="fb logo"></a>
    </div>
  
  </div>

</div>
