<?php

/**
 *
 * Template Name: Podcast Detalles
 *
 * @package La-nota
 */
get_header();
?>

<!--  -->
<?php get_template_part('template-parts/content/radio-overlay', 'radio-overlay'); ?>
<!--  -->

<div class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="rounded-lg hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="rounded-lg hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="w-full h-40 xl:h-[274px] mb-5 p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="rounded-lg border border-gray-700 flex flex-col md:flex-row gap-6 p-6">
      <img src="<?php echo get_template_directory_uri(); ?>/images/entn-logo-full.jpeg" alt="" class="rounded-lg w-full max-w-[500px] h-[300px]">
      <div>
        <h5 class="text-h5 text-lightBlue-900">Esto no Tiene Nombre</h5>
        <p class="mt-2 text-m">
          Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por La Nota
          Diferente 95.7FM y para Estados Unidos por TV QUISQUEY
        </p>
        <div class="mt-4">
          <span class="text-m-b text-lightBlue-900">Anfitriones:</span>
          <div class="mt-2 flex flex-row gap-2">
            <span class="rounded-lg py-1 px-2 text-s-b text-white bg-orange-laNota">Roberto Cavada</span>
            <span class="rounded-lg py-1 px-2 text-s-b text-white bg-orange-laNota">Miralba Ruíz</span>
            <span class="rounded-lg py-1 px-2 text-s-b text-white bg-orange-laNota">Angelo Mercedez </span>
          </div>
        </div>
        <button class="rounded-[32px] mt-10 pl-2.5 pr-6 py-1 flex flex-row items-center gap-x-4 text-white bg-[#FE4444]">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
          </svg>
          Escuchar podcast
        </button>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <h5 class="text-h5 text-gray-100">Lista de episodios</h5>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-[1fr_320px] gap-6">
        <div class="flex flex-col gap-y-6">
          <div class="rounded-lg border border-blue-100">
            <div class="flex flex-col lg:flex-row gap-x-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/entn-logo-full.jpeg" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px]">
              <div class="p-4 text-lightBlue-900">
                <h4 class="text-m-b">Colombia: Stéphane Chaumet cuenta el oscuro y espantoso mundo de la violencia</h4>
                <p class="mt-2 text-body">
                  Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                  La Nota Diferente 95.7FM y para Estados Unidos por TV
                  QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                  Angelo Mercedez . #RepublicaDominicana #Noticias
                </p>
                <span class="rounded-full w-8 h-8 mt-9 flex items-center justify-center self-end bg-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="rounded-lg border border-blue-100">
            <div class="flex flex-col lg:flex-row gap-x-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/entn-logo-full.jpeg" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px]">
              <div class="p-4 text-lightBlue-900">
                <h4 class="text-m-b">Colombia: Stéphane Chaumet cuenta el oscuro y espantoso mundo de la violencia</h4>
                <p class="mt-2 text-body">
                  Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                  La Nota Diferente 95.7FM y para Estados Unidos por TV
                  QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                  Angelo Mercedez . #RepublicaDominicana #Noticias
                </p>
                <span class="rounded-full w-8 h-8 mt-9 flex items-center justify-center self-end bg-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="rounded-lg border border-blue-100">
            <div class="flex flex-col lg:flex-row gap-x-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/entn-logo-full.jpeg" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px]">
              <div class="p-4 text-lightBlue-900">
                <h4 class="text-m-b">Colombia: Stéphane Chaumet cuenta el oscuro y espantoso mundo de la violencia</h4>
                <p class="mt-2 text-body">
                  Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                  La Nota Diferente 95.7FM y para Estados Unidos por TV
                  QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                  Angelo Mercedez . #RepublicaDominicana #Noticias
                </p>
                <span class="rounded-full w-8 h-8 mt-9 flex items-center justify-center self-end bg-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
          </div>

          <div class="rounded-lg border border-blue-100">
            <div class="flex flex-col lg:flex-row gap-x-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/entn-logo-full.jpeg" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px]">
              <div class="p-4 text-lightBlue-900">
                <h4 class="text-m-b">Colombia: Stéphane Chaumet cuenta el oscuro y espantoso mundo de la violencia</h4>
                <p class="mt-2 text-body">
                  Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                  La Nota Diferente 95.7FM y para Estados Unidos por TV
                  QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                  Angelo Mercedez . #RepublicaDominicana #Noticias
                </p>
                <span class="rounded-full w-8 h-8 mt-9 flex items-center justify-center self-end bg-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="rounded-lg w-full h-[300px] mb-5 p-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>

          <div class="w-full h-[600px]">
            <div class="rounded-lg w-full h-full bg-[#D6CCFF]"></div>
          </div>
        </div>
      </div>

      <div class="flex justify-center">
        <button class="rounded-lg mt-10 p-4 flex flex-row items-center justify-center gap-x-2 text-body-b lg:text-xl-b text-white bg-orange-laNota">
          Cargar más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 lg:h-5 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
          </svg>
        </button>
      </div>
    </section>
    <!-- ad -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <h5 class="text-h5 text-gray-100">Otros Programas</h5>
      <div class="mt-10 grid md:grid-cols-3 gap-y-10 gap-x-5 justify-center md:justify-start">
        <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <div class="drop-shadow-md rounded-lg py-2 px-4 absolute top-2.5 right-2.5 z-[2] text-sm font-extrabold font-lato text-white bg-[#FF0000]">En vivo</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/freites.jpeg" alt="Freites & Su Gente" class="absolute top-0 left-0 w-full h-full object-contain">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
        <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <div class="drop-shadow-md rounded-lg py-2 px-4 absolute top-2.5 right-2.5 z-[2] text-sm font-extrabold font-lato text-white bg-[#FF0000]">En vivo</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/la-republica.jpeg" alt="La Republica" class="absolute top-0 left-0 w-full h-full object-contain">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
        <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <div class="drop-shadow-md rounded-lg py-2 px-4 absolute top-2.5 right-2.5 z-[2] text-sm font-extrabold font-lato text-white bg-[#FF0000]">En vivo</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/freites.jpeg" alt="Freites & Su Gente" class="absolute top-0 left-0 w-full h-full object-contain">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
      </div>
    </section>

    <div class="rounded-lg w-full h-[274px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <!--  -->
    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-h5 text-gray-100">Actualidades</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-orange-laNota  ">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-laNota" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5">
        <div class="mt-5 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <article class="rounded-md border border-blue-100">
              <a href="" class="w-full h-max flex items-center lg:items-start">
                <div class="w-full pt-3 pl-3">
                  <span class="text-xs-b text-orange-laNota">Farándula</span>
                  <p class="lg:w-[16ch] mt-2 text-body-b text-lightBlue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_02.png" alt="" class="rounded-tr-md rounded-br-md max-w-36">
              </a>
            </article>

            <article class="rounded-md border border-blue-100">
              <a href="" class="w-full h-max flex items-center lg:items-start">
                <div class="w-full pt-3 pl-3">
                  <span class="text-xs-b text-orange-laNota">Farándula</span>
                  <p class="lg:w-[16ch] mt-2 text-body-b text-lightBlue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_02.png" alt="" class="rounded-tr-md rounded-br-md max-w-36">
              </a>
            </article>
          </div>

          <div class="relative h-[300px]">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <a href="#" class="relative block w-full h-full bg-white">
                <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                  <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_04.jpeg" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="w-fit rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Medios</span>
                  <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>

          <div class="mt-4 md:mt-0 grid md:grid-cols-2 lg:grid-cols-1 gap-x-5 gap-y-4 col-auto md:col-span-2 lg:col-auto">
            <article class="rounded-md border border-blue-100">
              <a href="" class="w-full h-max flex items-center lg:items-start">
                <div class="w-full pt-3 pl-3">
                  <span class="text-xs-b text-orange-laNota">Farándula</span>
                  <p class="lg:w-[16ch] mt-2 text-body-b text-lightBlue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_02.png" alt="" class="rounded-tr-md rounded-br-md max-w-36">
              </a>
            </article>

            <article class="rounded-md border border-blue-100">
              <a href="" class="w-full h-max flex items-center lg:items-start">
                <div class="w-full pt-3 pl-3">
                  <span class="text-xs-b text-orange-laNota">Farándula</span>
                  <p class="lg:w-[16ch] mt-2 text-body-b text-lightBlue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_02.png" alt="" class="rounded-tr-md rounded-br-md max-w-36">
              </a>
            </article>
          </div>

          <div class="relative h-[300px]">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <a href="#" class="relative block w-full h-full bg-white">
                <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                  <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_04.jpeg" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="w-fit rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Medios</span>
                  <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>
          <!-- add -->
          <div class="rounded-lg w-full h-[274px] m-auto px-3 py-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
          <!--  -->
          <div class="relative h-[300px]">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <a href="#" class="relative block w-full h-full bg-white">
                <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                  <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_04.jpeg" alt="Freites & Su Gente" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="w-fit rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Medios</span>
                  <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>
        </div>
      </div>
    </section>

    <div class="w-full max-w-[752px] h-[114px] mx-auto mt-10 mb-5 p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <h3 class="text-h5 text-gray-100">Horóscopo del día</h3>
      <div id="tarot-swiper" class="swiper mt-6">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Escorpion</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpion.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">aries</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/aries.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Sagitario</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sagitario.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Escorpion</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpion.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Escorpion</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpion.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Escorpion</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpion.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="rounded-lg p-4 bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-orange-laNota">Escorpion</span>
              <p class="mt-2 text-s text-gray-100">
                Las redes sociales están llenas de soluciones para problemas
                que no tenemos. O tal vez los tenemos, pero solo cuando nos
                inundamos de información sobre cómo lidiar con ellos comenzamos a
                preguntarnos si necesitamos tomar medidas para abordarlos.
                ¡Las arrugas y los productos milagrosos ......
              </p>
              <div class="mt-5 flex flex-row justify-between">
                <a href="#" class="self-end text-xs-b text-orange-laNota">Mostrar todo</a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpion.png" alt="" class="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full mt-6 flex justify-center">
        <div class="rounded-2xl !w-[114px] flex flex-row items-center justify-center px-2 py-1 bg-[#F1F1F1] swiper-pagination-fraction swiper-pagination-horizontal">
          <span class="tarot-swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-laNota" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
            </svg>
          </span>

          <div class="tarot-swiper-pagination text-center">
            <span class="swiper-pagination-current"></span>
            /
            <span class="swiper-pagination-total"></span>
          </div>

          <span class="tarot-swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-laNota" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </span>
        </div>
      </div>
    </section>
  </div>
</div>


<?php
get_footer();
