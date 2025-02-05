<?php

/**
 * The template for displaying Trabaje con nosotros
 * Template Name: Trabaje con nosotros
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main trabaje-con-nosotros">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="container mt-4 mt-md-5">
      <div class="row justify-content-center">
         <div class="col-12 col-md-8">
            <p class="text-primary text-center">
               En RIDUCO estamos en búsqueda constante de nuevos colaboradores para hacer parte de nuestro equipo de trabajo o del equipo de nuestras empresas clientes. Si estás interesado en ser evaluado, envíanos tu hoja de vida ahora mismo a
               <a href="mailto:recepcion@riduco.com.co" class="text-secondary">recepcion@riduco.com.co</a>. No pierdas esta oportunidad de formar parte de nuestro éxito.
            </p>
         </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-1 g-md-3 mt-4 mt-md-5">
         <div class="col mb-4 mb-md-0">
            <div class="box-information bg-secondary py-4 py-md-5">
               <h2 class="fw-bold text-third text-center fs-1 mb-2">Nuestros beneficios:</h2>

               <ul class="text-white mt-1 mt-md-5 fs-5">
                  <li>
                     Flexibilidad horaria
                  </li>

                  <li>
                     Bonos de productividad
                  </li>

                  <li>
                     Convenio con el Centro Colombo Americano
                  </li>
               </ul>
            </div>
         </div>

         <div class="col">
            <div class="box-information bg-primary py-4 py-md-5">
               <h2 class="fw-bold text-third text-center fs-1 mb-2">Beneficios para nuestros trabajadores:</h2>

               <ul class="text-white fs-5">
                  <li>
                     Amplia oferta de cursos con convenio Confa.
                  </li>

                  <li>
                     Convenio con el SENA para formación y desarrollo de habilidades y destrezas.
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
