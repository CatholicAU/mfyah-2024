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
<section class="w-full flex flex-col justify-center items-end lg:items-center mb-20 pt-16 xl:pt-24 px-6 md:px-16">
  
  <!-- row wrapper -->
  <div class="w-full max-w-screen-xl grid grid-cols-12">
	
    <!-- left column wrapper -->
    <div class="col-span-12 lg:col-span-5 mb-12">

      <!-- sticky: section title block -->
      <div class="sticky top-32">
        <p class="text-teal-500 text-xs lg:text-sm font-semibold tracking-wider py-2 uppercase">Donors and Contributors</p>
        <h2 class="text-heading text-3xl lg:text-4xl text-black mb-6">We thank you for your donations and support</h2>
        <p class="mb-4 lg:mb-2">Don't see your name here? Call us to add, remove or update your name on this list.</p>
      
        <div class="py-4">
          <a href="<?php echo get_site_url(); ?>/contact" target="_self" class="w-fit flex justify-center items-center gap-8 text-xs lg:text-sm font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-teal-500 text-black hover:text-teal-100 border border-black hover:border-teal-500 transition duration-300 my-4">Contact us<i class='bx bx-right-arrow-alt text-xl'></i></a>
        </div>
      </div>
    
    </div>

    <!-- right column wrapper -->
    <div class="col-span-12 lg:col-span-6 lg:col-start-7 flex flex-col gap-12 md:gap-20">
  
      <!-- row wrapper - individual donors -->
      <div class="flex flex-col gap-8">

        <!-- section title -->
        <div class="w-full">
          <h3 class="uppercase text-lg font-bold tracking-widest pb-1 border-b border-stone-400/50">Individual Sponsors</h3>
        </div>

        <ul class="columns-2 sm:columns-3">
          <li>Oliver Thompson</li>
          <li>Sophia Jenkins</li>
          <li>Liam Scott</li>
          <li>Emma Perez</li>
          <li>Noah Carter</li>
          <li>Mia Ramirez</li>
          <li>Ethan Lewis</li>
          <li>Isabella Nguyen</li>
          <li>James Parker</li>
          <li>Charlotte Kelly</li>
          <li>Lucas Adams</li>
          <li>Amelia Brooks</li>
          <li>Mason Turner</li>
          <li>Ava Cooper</li>
          <li>Benjamin Mitchell</li>
          <li>Harper Lee</li>
          <li>Elijah Baker</li>
          <li>Lily Morgan</li>
          <li>Jackson Howard</li>
          <li>Grace Kim</li>
          <li>Henry Foster</li>
          <li>Zoey Reed</li>
          <li>Alexander Russell</li>
          <li>Chloe Hayes</li>
          <li>Samuel Bryant</li>
          <li>Scarlett Coleman</li>
          <li>Daniel Hill</li>
          <li>Layla Foster</li>
          <li>Michael Cruz</li>
          <li>Aria Sanders</li>
          <li>Jacob Wright</li>
          <li>Ellie Murphy</li>
          <li>Matthew Edwards</li>
          <li>Nora Powell</li>
          <li>Aiden Bell</li>
          <li>Mila Rivera</li>
          <li>William Stewart</li>
          <li>Madison Hughes</li>
          <li>Gabriel Ward</li>
          <li>Emily Butler</li>
          <li>Anthony Foster</li>
          <li>Violet Russell</li>
          <li>Carter Campbell</li>
          <li>Penelope Armstrong</li>
          <li>Dylan Torres</li>
          <li>Aurora Jenkins</li>
          <li>David Simmons</li>
          <li>Ellie Thompson</li>
          <li>Nathan Bennett</li>
          <li>Natalie Jordan</li>
        </ul>
      </div>

      <!-- row wrapper: principal sponsors -->
      <div class="flex flex-col gap-8">

        <!-- section title -->
        <div class="w-full">
          <h3 class="uppercase text-lg font-bold tracking-widest pb-1 border-b border-stone-400/50">Principal Sponsors</h3>
        </div>

        <!-- main sponsor logo -->
        <!-- <div class="w-full px-12 lg:px-16 py-4 lg:py-16 saturate-50 hover:saturate-100 hover:-translate-y-2 transition duration-300">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/catholic-mission.jpg" alt="viewer image" class="w-full max-w-[640px] ratio-video mx-auto rounded-xl hover:brightness-110 transition duration-300">
        </div> -->

        <!-- main sponsor writeup -->
        <div class="w-full flex flex-col gap-6">
          <!-- <p class="w-fit border border-teal-600 px-3 py-1 text-xs text-teal-800 bg-teal-200/50 font-normal rounded-full">Principal Sponsor</p> -->
          <p>Catholic Mission is the Pope&apos;s international Mission agency in Australia. An international organisation that partners with communities, helping them to flourish by supporting grassroots projects, including healthcare, education, and spiritual care.</p>
          <p>Catholic Mission's network of religious and lay missionaries operates in Africa, Asia, Europe, Oceania, the Americas. Catholic Mission&apos;s work supports children, communities, and future Church leaders across education, healthcare, and spiritual care. </p>
          <div class="col-span-12">
            <a href="https://www.catholicmission.org.au/" target="blank" class="hidden w-fit md:flex justify-center items-center gap-8 text-xs lg:text-sm font-bold uppercase tracking-wider py-2 hover:-translate-y-1 border-b hover:border-b-2 hover:border-teal-200 text-black hover:text-teal-600 transition duration-300 my-4">Go to CatholicMission.org.au<i class='bx bx-right-arrow-alt text-xl'></i></a>
          </div>
        </div>

      </div>
    
      <!-- row wrapper: weekly sponsors -->
      <div class="flex flex-col gap-8">

        <!-- section title -->
        <div class="w-full">
          <h3 class="uppercase text-lg font-bold tracking-widest pb-1 border-b border-stone-400/50">Weekly Sponsors</h3>
        </div>

        <!-- main sponsor logo -->
        <!-- <div class="w-full px-12 lg:px-16 py-4 lg:py-16 saturate-50 hover:saturate-100 hover:-translate-y-2 transition duration-300">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/catholic-mission.jpg" alt="viewer image" class="w-full max-w-[640px] ratio-video mx-auto rounded-xl hover:brightness-110 transition duration-300">
        </div> -->

        <!-- main sponsor writeup -->
        <div class="w-full flex flex-col gap-6">
          <!-- <p class="w-fit border border-teal-600 px-3 py-1 text-xs text-teal-800 bg-teal-200/50 font-normal rounded-full">Principal Sponsor</p> -->
          <p>Catholic Mission is the Pope&apos;s international Mission agency in Australia. An international organisation that partners with communities, helping them to flourish by supporting grassroots projects, including healthcare, education, and spiritual care.</p>
          <p>Catholic Mission's network of religious and lay missionaries operates in Africa, Asia, Europe, Oceania, the Americas. Catholic Mission&apos;s work supports children, communities, and future Church leaders across education, healthcare, and spiritual care. </p>
          <div class="col-span-12">
            <a href="https://www.catholicmission.org.au/" target="blank" class="hidden w-fit md:flex justify-center items-center gap-8 text-xs lg:text-sm font-bold uppercase tracking-wider py-2 hover:-translate-y-1 border-b hover:border-b-2 hover:border-teal-200 text-black hover:text-teal-600 transition duration-300 my-4">Go to CatholicMission.org.au<i class='bx bx-right-arrow-alt text-xl'></i></a>
          </div>
        </div>

      </div>
    
    </div>
  </div>

</section>