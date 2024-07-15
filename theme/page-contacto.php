<?php

/**
 *
 * Template Name: Contacto Page
 *
 * @package La-nota
 */
get_header();
?>

<div class="w-full max-w-[1354px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] justify-items-center gap-y-5 gap-x-5 mt-24 mx-auto px-5">
  <div class="hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-10 bg-[#D6CCFF]"></div>
  <!--  -->
  <div class="order-2 w-full max-w-5xl">
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/img_11.png" alt="location" class="rounded-lg block w-full h-96 object-cover">
    </div>
    <!--  -->
    <div class="rounded-2xl w-full my-8 py-8 px-10 shadow-md">
      <div class="">
        <h4 class="text-xl-b lg:text-h4 text-blue-900 font-bold">Hola, ¿deseas contactarnos?</h4>
        <p class="">Los campos marcados con (<span class="text-red-500">*</span>) son obligatorios</p>
      </div>
      <form action="#" method="POST" class="mt-5">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <div>
            <label for="first-name" class="block text-base text-blue-900">Nombre:</label>
            <div class="mt-2.5">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" placeholder="¿Cuál es tu nombre?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-base text-blue-900">Apellido:</label>
            <div class="mt-2.5">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" placeholder="¿Cuál es tu apellido?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block text-base text-blue-900">Correo:</label>
            <div class="mt-2.5">
              <input type="email" name="email" id="email" autocomplete="email" placeholder="¿Cuál es tu correo electrónico?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-base text-blue-900">Message</label>
            <div class="mt-2.5">
              <textarea name="message" id="message" rows="4" placeholder="¿Cuál es tu mensaje?" class="rounded-md block w-full h-32 border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s resize-none"></textarea>
            </div>
          </div>
        </div>
        <div class="mt-10">
          <button type="submit" class="rounded-[40px] inline-block bg-orange-laNota px-8 py-4 text-center text-m-b lg:text-xl-b text-white drop-shadow-lg">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
get_footer();
