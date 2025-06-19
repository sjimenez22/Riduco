<?php

/**
 * The template for displaying Unidad de negocio - Extrusión y paletizado
 * Template Name: Unidad de negocio - Extrusión y paletizado
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main extrusion">
   <?php get_template_part('components/banner/banner', 'image'); ?>

   <div class="bg-secondary">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center align-self-lg-start">
               <section class="splide splide-extrusion-laminas" aria-label="Carrusel de Fabricación, mantenimiento y diseño">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-1.webp" alt="Proceso de Extrusión de láminas rígidas en Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-2.webp" alt="Proceso de Extrusión de láminas rígidas en Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-3.webp" alt="Proceso de Extrusión de láminas rígidas en Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-4.webp" alt="Proceso de Extrusión de láminas rígidas en Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-5.webp" alt="Proceso de Extrusión de láminas rígidas en Riduco" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>

            <div class="col-12 col-md-6 align-self-center ps-md-4 py-md-4">
               <h2 class="fw-bold text-third">Extrusión de láminas rígidas</h2>

               <div class="row mt-3 mt-md-5 extrusion-laminas">
                  <div class="col-6 col-md-7 text-white pb-4 border-lamina">
                     <h3 class="fs-6 fw-bold">Capacidad</h3>
                     <ul class="ps-0 ms-4">
                        <li>
                           Ancho máximo 1300 mm
                        </li>
                        <li>
                           Mínimo 600 mm
                        </li>
                     </ul>
                  </div>

                  <div class="col-6 col-md-5 text-white pb-4 border-lamina">
                     <h3 class="fs-6 fw-bold">Textura</h3>
                     <ul class="ps-0 ms-4">
                        <li>
                           Arena
                        </li>
                        <li>
                           Rombos
                        </li>
                     </ul>
                  </div>

                  <div class="col-6 col-md-7 text-white pt-4 border-lamina">
                     <h3 class="fs-6 fw-bold">Espesor</h3>
                     <ul class="ps-0 ms-4">
                        <li>
                           Máximo 3 mm
                        </li>
                        <li>
                           Mínimo 0.65 mm
                        </li>
                     </ul>
                  </div>

                  <div class="col-6 col-md-5 text-white pt-4 border-lamina">
                     <h3 class="fs-6 fw-bold">Capacidad</h3>
                     <ul class="ps-0 ms-4">
                        <li>
                           Polipropileno PP
                        </li>
                        <li>
                           Poliestireno PS
                        </li>
                        <li>
                           Polietileno PE
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container mb-4 mb-md-5">
      <div class="row my-4 my-md-5">
         <div class="col-12">
            <h2 class="text-primary text-center fw-bold display-5">Extrusión de plástico burbuja</h2>
         </div>
      </div>

      <div class="row justify-content-center px-3 px-md-0">
         <div class="col-12 col-md-9">
            <div class="row border-ext-plastico px-3 py-3">
               <div class="col-12 col-md-4 align-self-center text-center">
                  <img src="<?php echo site_url() ?>/wp-content/uploads/2025/06/extrusion-rollo-burbuja-pequena.webp" alt="Rollo burbuja pequeña" class="img-fluid">
               </div>
               <div class="col-12 col-md-8 align-self-center">
                  <h3 class="text-third fw-bold">Rollo burbuja pequeña</h3>

                  <p class="text-primary fs-5 mb-0">
                     <strong>Dimensiones</strong><br>
                     <span>150 cm de ancho x 100 m de largo</span><br>
                     <span>Diam burbuja 10 mm</span><br>
                     <strong>Material PE</strong><br>
                     <strong>Color Natural</strong>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-12 col-md-9 mt-3">
            <div class="row border-ext-plastico px-3 py-3">
               <div class="col-12 col-md-4 align-self-center text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-rollo-burbuja-grande.webp" alt="Rollo burbuja grande" class="img-fluid">
               </div>
               <div class="col-12 col-md-8 align-self-center">
                  <h3 class="text-third fw-bold">Rollo burbuja grande</h3>

                  <p class="text-primary fs-5 mb-0">
                     <strong>Dimensiones</strong><br>
                     <span>150 cm de ancho x 100 m de largo</span><br>
                     <span>Diam burbuja 18 mm</span><br>
                     <strong>Material PE</strong><br>
                     <strong>Color Natural</strong>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary py-4 py-md-5 px-3 px-md-0">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-md-9">
               <div class="row border-ext-plastico px-3 py-3">
                  <div class="col-12 col-md-4 align-self-center text-center">
                     <img src="<?php echo site_url() ?>/wp-content/uploads/2025/06/extrusion-rollo-burbuja-pequena.webp" alt="Bolsas en plástico burbuja grande" class="img-fluid">
                  </div>
                  <div class="col-12 col-md-8 align-self-center">
                     <h3 class="text-third fw-bold">Bolsas en plástico burbuja grande</h3>

                     <p class="text-white fs-5 mb-0">
                        <strong>Dimensiones</strong><br>
                        <span>30 cm de ancho x 300 cm de largo</span><br>
                        <span>Diam burbuja 10 mm</span><br>
                        <strong>Material Polietileno</strong><br>
                        <strong>Color Natural</strong>
                     </p>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-9 mt-3">
               <div class="row border-ext-plastico px-3 py-3">
                  <div class="col-12 col-md-4 align-self-center text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/extrusion-rollo-burbuja-grande.webp" alt="Bolsas en plástico burbuja pequeña" class="img-fluid">
                  </div>
                  <div class="col-12 col-md-8 align-self-center">
                     <h3 class="text-third fw-bold">Bolsas en plástico burbuja pequeña</h3>

                     <p class="text-white fs-5 mb-0">
                        <strong>Dimensiones</strong><br>
                        <span>30 cm de ancho x 100 cm de largo</span><br>
                        <span>Diam burbuja 18 mm</span><br>
                        <strong>Material Polietileno</strong><br>
                        <strong>Color Natural</strong>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
