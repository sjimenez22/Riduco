<?php

/**
 * The template for displaying Direccionamiento estratégico
 * Template Name: Direccionamiento estratégico 
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main direccionamiento-estrategico">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="bg-secondary mt-lg-4 position-relative">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-5 py-3 py-lg-5 mision text-center text-lg-start order-2 order-lg-1">
               <h2 class="text-third fw-bold">Misión</h2>
               <p class="text-white">
                  Riduco S.A es una empresa manufacturera con conocimiento técnico, experiencia y tecnología de punta; dedicada a la fabricación y comercialización de productos plásticos inyectados y extruídos, que garantiza a sus clientes calidad, confidencialidad, entrega oportuna, apoyo técnico, un equipo humano competente, compromiso con el desarrollo sostenible y a sus accionistas el retorno de la inversión con crecimiento permanente, mejora continua, eficiencia y productividad.
               </p>
            </div>

            <div class="col-12 col-lg-2 img-mision-vision d-none d-lg-block order-lg-2" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/2025/06/mision-vision-direccionamiento.png);">
            </div>

            <div class="col-12 col-lg-2 img-mision-vision d-block d-lg-none order-1 order-lg-2" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/2025/01/mision-vision-mobile.png); height: 180px;">
            </div>

            <div class="col-12 col-lg-5 py-3 py-lg-5 text-center text-lg-start order-3">
               <h2 class="text-third fw-bold">Visión</h2>
               <p class="text-white">
                  Para el 2030, Riduco se mantendrá como una empresa de clase mundial, comprometida con el desarrollo sostenible, incrementando la rentabilidad y la participación en el mercado, como aliado estratégico de sus clientes, a través de la excelencia operacional y un equipo humano competente.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="container mt-4">
      <div class="row">
         <div class="col-12 text-center text-primary">
            <p class="px-md-5">
               Riduco S.A., empresa dedicada a la transformación de plástico, tiene las siguiente Políticas del Sistema de Gestión, que deben ser un marco de referencia para el establecimiento y revisión de objetivos y metas:
            </p>
         </div>
      </div>
   </div>

   <div class="container mt-4 mt-md-5">
      <div class="row">
         <div class="col-12 d-block d-md-flex justify-content-between mt-3">
            <div class="box-rse border-primary-3 text-primary me-3 py-3 py-md-5">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-politicas-generales.webp" alt="Políticas Generales" class="img-fluid mb-3" width="100">

                  <p class="fw-bold">
                     Políticas Generales
                  </p>

                  <p class="text-description">
                     - Satisfacer los requisitos del cliente, las necesidades de los accionistas y demás partes interesadas, cumpliendo con la legislación aplicable y otros requisitos que la empresa establezca.<br>
                     - Promover la cultura del mejoramiento continuo de los procesos de la empresa, desarrollando competencias laborales orientadas al logro de los objetivos. <br>
                     - Involucrar a nuestros proveedores con el cumplimiento de los requisitos de nuestro Sistema de Gestión.
                  </p>
               </div>
            </div>

            <div class="box-rse border-secondary-3 text-primary me-3 py-3 py-md-5">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-calidad.webp" alt="Calidad, Seguridad e Inocuidad" class="img-fluid mb-3" width="100">

                  <p class="fw-bold">
                     Calidad, Seguridad e Inocuidad
                  </p>

                  <p class="text-description">
                     Política para todas las líneas de productos:<br>
                     -Garantizar la conformidad del producto, con base en la prevención de defectos, la estabilidad de los procesos y optimización de los recursos.
                  </p>
               </div>
            </div>

            <div class="box-rse border-third-3 text-primary me-3 py-3 py-md-5">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-valores.webp" alt="Valores" class="img-fluid mb-3" width="100">

                  <p class="fw-bold">
                     Valores
                  </p>

                  <p class="text-description">
                     <strong>HONESTIDAD:</strong> Actuar con transparencia, honradez y rectitud.<br>
                     <strong>LEALTAD:</strong> Fidelidad con las creencias y principios de la Empresa.<br>
                     <strong>COMPROMISO:</strong> Responsabilidad en el cumplimiento de las funciones orientadas en el logro de las políticas de la Empresa.<br>
                     <strong>RESPETO:</strong> Aceptar y reconocer las diferencias de opiniones y de autoridad, con un trato digno.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary mt-4 mt-md-5">
      <div class="container-fluid">
         <div class="row position-relative">
            <div class="col-12">
               <div class="container">
                  <div class="row">
                     <div class="col-12 col-md-6 py-4 py-md-5 text-center text-md-start">
                        <h2 class="fw-bold text-third">Valores</h2>
                        <p class="text-white pe-4">
                           En Riduco, creemos que el verdadero éxito se construye sobre principios sólidos. Nuestros valores son más que palabras: son la esencia de cada decisión, cada producto y cada relación que forjamos. Nos guían en cada paso, impulsándonos a ofrecer lo mejor y a marcar la diferencia. <br>
                           Descubre lo que nos mueve y nos define.
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="bg-gestion-comunidad" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2025/06/valores-direccionamiento.webp);"></div>
         </div>
      </div>
   </div>

   <div class="bg-gradient-secondary-fifth ctn-comunidad">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-3 text-center bg-secondary py-4 text-white position-relative">
               <h2 class="fw-bold fs-3 mb-3">HONESTIDAD:</h2>
               <p>
                  Actuar con transparencia, honradez y rectitud.
               </p>

               <div class="triangle"></div>
            </div>
            <div class="col-12 col-md-3 text-center bg-third py-4 text-primary position-relative">
               <h2 class="fw-bold fs-3 mb-3">LEALTAD:</h2>
               <p class="px-md-2">
                  Fidelidad con las creencias y principios de la Empresa.
               </p>

               <div class="triangle third"></div>
            </div>

            <div class="col-12 col-md-3 text-center bg-fourth py-4 text-white position-relative">
               <h2 class="fw-bold fs-3 mb-3">COMPROMISO:</h2>
               <p class="ps-md-2">
                  Responsabilidad en el cumplimiento de las funciones orientadas en el logro de las políticas de la Empresa.
               </p>

               <div class="triangle fourth"></div>
            </div>

            <div class="col-12 col-md-3 text-center bg-additional py-4 text-white position-relative">
               <h2 class="fw-bold fs-3 mb-3">RESPETO:</h2>
               <p class="ps-md-2">
                  Aceptar y reconocer las diferencias de opiniones y de autoridad, con un trato digno.
               </p>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
