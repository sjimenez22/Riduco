<?php

/**
 * The template for displaying Unidad de negocio - Moldes
 * Template Name: Unidad de negocio - Moldes
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main">
   <?php get_template_part('components/banner/banner', 'image'); ?>

   <div class="bg-secondary">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center aling-self-lg-start">
               <section class="splide splide-manufacturing" aria-label="Carrusel de Fabricación, mantenimiento y diseño">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/fabricacion-1.webp" alt="Trabajador en zona de fabricación" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/fabricacion-2.webp" alt="Fabricación - Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/fabricacion-3.webp" alt="Diseño - Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/fabricacion-4.webp" alt="Fabricación - Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/fabricacion-5.webp" alt="Trabajadores en zona de fabricación en Riduco" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>
            <div class="col-12 col-md-6 align-self-center py-md-4 py-lg-0">
               <h2 class="fw-bold text-third">Fabricación, mantenimiento y diseño</h2>

               <p class="text-white">
                  Disponemos de áreas de trabajo enfocadas en mecanizado CNC (Torno, fresado), electroerosión (erosión por penetración), ajuste y pulido (pulidos por ultrasonido) y el área de diseño de herramentales que cuenta con el software de última tecnología para programación CNC y diseño 3D.
               </p>

               <p class="text-white">
                  En nuestro taller contamos con personal especializado en diseño de moldes, programación para el proceso de mecanizado, electroerosión, ajuste, pulido y texturizado de moldes.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary mt-0 mt-md-4">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center order-2 order-md-1">
               <h2 class="fw-bold text-third">Pilotaje</h2>

               <p class="text-white">
                  Desarrollamos procesos productivos alineados a la especificación del producto y a su costo negociado, donde en conjunto con nuestro Taller diseñamos y fabricamos herramentales para su transformación.
               </p>

               <p class="text-white">
                  El control y seguimiento de los proyectos y cambios de productos es considerada una de nuestras mayores fortalezas.
               </p>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2 mb-3 mb-md-0">
               <section class="splide splide-piloting" aria-label="Carrusel de pilotaje">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/pilotaje-1.webp" alt="Diseño de productos en Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/pilotaje-2.webp" alt="Diseño de productos en Riduco" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-fourth mt-0 mt-md-4">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center aling-self-lg-start">
               <section class="splide splide-perifericos" aria-label="Carrusel de perifericos">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/texturizado-1.webp" alt="Moldes texturizados Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/texturizado-2.webp" alt="Moldes texturizados Riduco" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/texturizado-3.webp" alt="Moldes texturizados Riduco" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>

            <div class="col-12 col-md-6 align-self-center py-md-4">
               <h2 class="fw-bold text-primary">Texturizado</h2>

               <p class="text-primary">
                  Con el fin de atender las nuevas tecnologías incorporadas en los moldes, contamos con el área de texturizado, la cual tienen la capacidad de reparar o generar nuevos acabados superficiales para los moldes.<br>
                  Esta área nace de una alianza estratégica realizada con la empresa Brasilera TSP, la cual cuenta con más de 40 años de experiencia en texturizado de moldes, especializada en el desarrollo de nuevos patrones de textura, por medio de equipos de última tecnología capaces de crear cualquier patrón.
               </p>

               <p class="text-primary">
                  Contamos con la experiencia para fabricar y/o reparar cualquier tipo de textura para diferentes piezas del sector automotriz, motopartista, línea blanca, hogar, entre otras. Contamos también con la capacidad para crear nuevas texturas partiendo de muestras o de la imaginación del cliente y el personal especializado; formado directamente en Brasil.
               </p>
            </div>
         </div>
      </div>
   </div>

   <?php
   $data = [
      'title' => 'Trabajos externos',
      'color' => 'text-primary'
   ];
   get_template_part('components/sliders/slider', 'clients', $data);
   ?>
</main><!-- #main -->

<?php
get_footer();
