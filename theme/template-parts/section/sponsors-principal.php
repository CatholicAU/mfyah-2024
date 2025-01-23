<?php
/**
 * Template part for displaying the watch section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MFYAH_2024
 */
?>

<!-- principal sponsors section  -->
<section id="section-sponsors-principal" class="w-full flex items-center flex-col px-6 md:px-16">

  <!-- section wrapper -->
  <div class="w-full max-w-screen-xl mx-auto flex flex-col gap-10 lg:gap-8">
  
    <!-- section title -->
    <div class="w-full mt-4 lg:mt-6">
      <h3 class="uppercase text-lg font-bold tracking-widest my-4 pb-1 border-b border-stone-400/50">Our Principal Sponsor</h3>
    </div>

    <!-- main sponsor grid layout -->
    <div class="w-full h-fit grid gap-8 grid-cols-12 transition duration-700">

      <!-- main sponsor logo -->
      <div class="col-span-12 lg:col-span-6 px-12 lg:px-16 py-4 lg:py-16 saturate-50 hover:saturate-100 hover:-translate-y-2 transition duration-300">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/catholic-mission.jpg" alt="viewer image" class="w-full max-w-[640px] ratio-video mx-auto rounded-xl hover:brightness-110 transition duration-300">
      </div> 

      <!-- main sponsor writeup -->
      <div class="col-span-12 lg:col-span-6 flex flex-col gap-6 p-0 lg:p-12">
        <p class="w-fit border border-teal-600 px-3 py-1 text-xs text-teal-800 bg-teal-200/50 font-normal rounded-full">Principal Sponsor</p>
        <p>Catholic Mission is the Pope&apos;s international Mission agency in Australia. An international organisation that partners with communities, helping them to flourish by supporting grassroots projects, including healthcare, education, and spiritual care.</p>
        <p>Catholic Mission's network of religious and lay missionaries operates in Africa, Asia, Europe, Oceania, the Americas. Catholic Mission&apos;s work supports children, communities, and future Church leaders across education, healthcare, and spiritual care. </p>
        <div class="col-span-12">
          <a href="https://www.catholicmission.org.au/" target="blank" class="hidden w-fit md:flex justify-center items-center gap-8 text-xs lg:text-sm font-bold uppercase tracking-wider px-8 py-4 hover:-translate-y-1 bg-transparent hover:bg-teal-500 text-black hover:text-teal-100 border border-black hover:border-teal-500 transition duration-300 my-4">Go to CatholicMission.org.au<i class='bx bx-right-arrow-alt text-xl'></i></a>
        </div>
      </div>

    </div>

  </div> <!-- section-wrapper -->

</section>