<?php
/**
 * Template part for displaying donation section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */

?>

<!-- Other ways to donate section -->
<section class="relative w-full flex flex-col justify-center items-end bg-stone-200/40 bg-paper-grain lg:items-center py-12 lg:py-20 pb-16 px-6 md:px-16">
  
  <!-- row wrapper -->
  <div class="w-full max-w-screen-xl flex flex-col gap-6 md:gap-12 ">
  <!-- <div class="w-full max-w-screen-xl flex flex-col gap-6 md:gap-12 bg-stone-800 rounded-2xl px-8 md:px-12 py-8 md:py-12"> -->
    
    <div class="w-full pt-2 md:pt-0 pb-1 border-b-2 border-dotted border-neutral-900/40">
      <h3 class="uppercase text-lg font-bold tracking-widest">Quick Links</h3>
    </div>

    <!-- cards wrapper -->
    <div class="relative z-20 w-full grid grid-cols-12 gap-4">
	
      <!-- card 1 -->
      <a href="https://www.universalis.com/Australia/mass.htm" target="_blank" class="group w-full h-full hover:text-neutral-900 text-teal-50 hover:-translate-y-1 col-span-12 sm:col-span-6 lg:col-span-3 gap-4 hover:bg-teal-50 bg-teal-600 border border-teal-500/50 rounded-xl transition duration-300">
        <div class="flex flex-row md:flex-col gap-4 justify-between md:justify-center items-center px-6 md:px-8 py-8 md:py-12">
          <i class='bx bx-book-open text-4xl md:text-5xl p-2'></i>
          <div class="w-full flex flex-col gap-1 items-start md:items-center text-left md:text-center">
            <h4 class="text-2xl tracking-tight">Readings</h4>
            <p class="leading-snug">Go to <span class="font-bold">Universalis.com</span> to access mass readings</p>
          </div>
        </div>
      </a>
      <!-- card 2 -->
      <a href="<?php echo get_site_url(); ?>/donate" target="" class="group w-full h-full text-neutral-100 hover:text-teal-50 hover:-translate-y-1 col-span-12 sm:col-span-6 lg:col-span-3 gap-4 bg-neutral-900 hover:bg-teal-800 border border-teal-500/50 rounded-xl transition duration-300 ">
        <div class="flex flex-row md:flex-col gap-4 justify-between md:justify-center items-center px-6 md:px-8 py-8 md:py-12">
          <i class='bx bx-donate-heart text-4xl md:text-5xl p-2'></i>
          <div class="w-full flex flex-col gap-1 items-start md:items-center text-left md:text-center">
            <h4 class="text-2xl tracking-tight">Donate</h4>
            <p class="leading-snug">Donate to MFYAH using easy and secure payment</p>
          </div>
        </div>
      </a>

      <!-- card 3 -->
      <a href="<?php echo get_site_url(); ?>/about" target="" class="group w-full h-full hover:text-neutral-900 text-teal-50 hover:-translate-y-1 col-span-12 sm:col-span-6 lg:col-span-3 gap-4 hover:bg-teal-50 bg-teal-600 border border-teal-500/50 rounded-xl transition duration-300">
        <div class="flex flex-row md:flex-col gap-4 justify-between md:justify-center items-center px-6 md:px-8 py-8 md:py-12">
          <i class='bx bx-info-square text-4xl md:text-5xl p-2'></i>
          <div class="w-full flex flex-col gap-1 items-start md:items-center text-left md:text-center">
            <h4 class="text-2xl tracking-tight">About</h4>
            <p class="leading-snug">Learn more about Mass For You At Home </p>
          </div>
        </div>
      </a>
      
      <!-- card 4 -->
      <a href="<?php echo get_site_url(); ?>/faq" target="" class="group w-full h-full hover:text-neutral-900 text-teal-50 hover:-translate-y-1 col-span-12 sm:col-span-6 lg:col-span-3 gap-4 hover:bg-teal-50 bg-teal-600 border border-teal-500/50 rounded-xl transition duration-300">
        <div class="flex flex-row md:flex-col gap-4 justify-between md:justify-center items-center px-6 md:px-8 py-8 md:py-12">
          <i class='bx bx-list-ul text-4xl md:text-5xl p-2'></i>
          <div class="w-full flex flex-col gap-1 items-start md:items-center text-left md:text-center">
            <h4 class="text-2xl tracking-tight">FAQ</h4>
            <p class="leading-snug">Get answers to frequently asked questions.</p>
          </div>
        </div>
      </a>
  </div>

</section>