<?php

/**
 * The template for displaying Sectores
 * Template Name: Sectores
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

$argsSectors = [
   'post_type'      => 'sectors',
   'post_status'    => 'publish',
   'posts_per_page' => -1,
   'order'          => 'ASC',
   'orderby'        => 'date'
];

$sectors = new WP_Query($argsSectors);

get_header();
?>

<main id="primary" class="site-main products">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="container my-4 my-5">
      <div class="row mb-4">
         <div class="col-12 text-primary text-center">
            <h2 class="fw-bold display-5">
               Dónde estamos hoy
            </h2>

            <p class="mt-4 mt-md-5">
               A lo largo de más de 50 años de existencia, RIDUCO se ha caracterizado por estar presente en sectores claves de la economía nacional e internacional, acompañando siempre las necesidades de los clientes y las tendencias del mercado.
               Nuestra visión estratégica nos orienta a buscar mercados en el exterior creando nuevas sinergias que nos permitan expandirnos con productos de calidad, confiables y seguros.
            </p>
         </div>
      </div>

      <div class="row justify-content-center">
         <?php if ($sectors->have_posts()):
            while ($sectors->have_posts()) : $sectors->the_post();
         ?>
               <div class="col-12 col-md-6 mb-4">
                  <section class="splide splide-sector" aria-label="Splide Basic HTML Example">
                     <div class="splide__track">
                        <ul class="splide__list">
                           <li class="splide__slide text-center">
                              <img src="https://placehold.co/300" alt="Imagen sector" class="img-fluid">
                           </li>
                           <li class="splide__slide text-center">
                              <img src="https://placehold.co/300" alt="Imagen sector" class="img-fluid">
                           </li>
                           <li class="splide__slide text-center">
                              <img src="https://placehold.co/300" alt="Imagen sector" class="img-fluid">
                           </li>
                        </ul>
                     </div>
                  </section>
                  <h3 class="fw-bold text-third text-center bg-secondary py-4"><?php echo the_title(); ?></h3>
               </div>
         <?php
            endwhile;
         endif; ?>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
