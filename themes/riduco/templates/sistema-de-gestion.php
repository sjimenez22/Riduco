<?php

/**
 * The template for displaying Sistema de Gestión
 * Template Name: Sistema de Gestión
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main sistema-de-gestion">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="container mt-4 mt-md-5">
      <div class="row justify-content-center">
         <div class="col-12 col-md-7">
            <p class="text-primary text-center">
               RIDUCO trabaja de manera constante para alcanzar la excelencia, utilizando herramientas de mejora continua a lo largo de la cadena de valor. Esto permite una mayor producción, encontrar la causa raíz de los problemas y tener ambientes de trabajo más agradables. Además, nos posibilita satisfacer las necesidades de las partes interesadas, disminuir los desperdicios, optimizar el trabajo y aprender de las experiencias.
            </p>
         </div>

         <div class="col-12 text-center">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/sistema-de-gestion-mejora-continua.png" alt="Planear, mejora continua y hacer" class="img-fluid">
         </div>

         <div class="col-12 col-md-7">
            <p class="text-primary text-center">
               Para lograr el crecimiento sostenido de la empresa, RIDUCO se soporta en herramientas como gestión estratégica, trabajo estandarizado, solución de problemas y respuesta rápida. También se trabaja con instrumetos como 5S, lecciones aprendidas, entrenamiento estándar, auditorías escalonadas, control de producto no conforme y herramientas estadísticas básicas. Todo esto sin dejar de lado SMED, TPM, ANDON, HCCP Jerarquización de características de producto/proceso, estaciones de verificación, control de la contaminación y dispositivos a prueba de error. Adicionalmente, también se trabaja la gestión de la cadena de suministro, valor agregado y 7 desperdicios y Kaizen.
            </p>
         </div>
      </div>

      <div class="row mt-4 mt-md-5">
         <div class="col-12 d-flex justify-content-between mt-3">
            <div class="box-rse border-primary-3 text-primary me-3 py-3">
               <div class="text-center">
                  <div class="d-flex justify-content-center align-items-center">
                     <div class="title">
                        <h2 class="fw-bold fs-6">Gestión de calidad</h2>
                     </div>
                  </div>

                  <p class="text-description">
                     Con nuestras certificaciones en ISO 9001 / IATF 16949, tenemos la fortaleza de ofrecer a nuestros clientes altos estándares de calidad con base en la mejora continua generando cada vez mayores niveles de productividad. Aseguramos nuestra cadena de suministro para la tranquilidad de nuestros clientes, con el establecimiento del Plan de continuidad para garantizar la oportunidad de nuestras entregas, mediante una adecuada gestión de riesgos.
                  </p>
               </div>

               <div class="triangle"></div>
            </div>

            <div class="box-rse border-secondary-3 text-primary me-3 py-3">
               <div class="text-center">
                  <div class="d-flex justify-content-center align-items-center">
                     <div class="title secondary">
                        <h2 class="fw-bold fs-6">Seguridad y salud en el trabajo</h2>
                     </div>
                  </div>

                  <p class="text-description">
                     Con el cumplimiento de la normatividad en Seguridad y Salud en el Trabajo aseguramos la gestión de riesgos en nuestros procesos, propiciando la reducción permanente de lesiones de nuestros trabajadores que hacen parte de la cadena de valor, reforzando así la credibilidad ante nuestros clientes.
                  </p>
               </div>

               <div class="triangle secondary"></div>
            </div>

            <div class="box-rse border-third-3 text-primary me-3 py-3">
               <div class="text-center">
                  <div class="d-flex justify-content-center align-items-center">
                     <div class="title third">
                        <h2 class="fw-bold fs-6">Comercio seguro</h2>
                     </div>
                  </div>

                  <p class="text-description">
                     Nuestras prácticas seguras en toda la cadena de suministro, convierten a Riduco en un proveedor de confianza que posee operaciones comerciales ágiles, transparentes y con bajos niveles de riesgo.
                  </p>
               </div>

               <div class="triangle third"></div>
            </div>

            <div class="box-rse border-fourth-3 text-primary me-3 py-3">
               <div class="text-center">
                  <div class="d-flex justify-content-center align-items-center">
                     <div class="title fourth">
                        <h2 class="fw-bold fs-6">BPF (buenas prácticas de fabricaión)</h2>
                     </div>
                  </div>

                  <p class="text-description">
                     Contamos con un sistema de inocuidad para los productos destinados a estar en contacto con alimentos, bebidas y el cuerpo humano. Esto permite ofrecer a nuestros clientes la garantía de conformidad en el cumplimiento de los requisitos y de estándares nacionales e internacionales.
                  </p>
               </div>

               <div class="triangle fourth"></div>
            </div>

            <div class="box-rse border-primary-3 text-primary me-3 py-3">
               <div class="text-center">
                  <div class="d-flex justify-content-center align-items-center">
                     <div class="title">
                        <h2 class="fw-bold" style="font-size: 14px;">Responsabilidad social</h2>
                     </div>
                  </div>

                  <p class="text-description">
                     La fortaleza de ser responsable con nuestro capital humano, propiciar nuestro crecimiento económico y respetar las leyes ambientales permite a Riduco realizar negocios sostenibles basados en principios éticos y ofrecer a nuestros clientes una verdadera imagen corporativa.
                  </p>
               </div>

               <div class="triangle"></div>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-secondary mt-4 mt-md-5 py-3">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <p class="text-white text-center">
                  Apoyo en herramientas del sector automotriz (Core Tools): ANPQ (Planificación Avanzada de la Calidad), AMEF (Ánalisis de Modo y Efecto de fallos). Plan de Control, MSA (Ánalisis del sistema de Medición), SPC (Control Estadístico de Proceso)
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="container mt-4 mt-md-5">
      <div class="row">
         <div class="col-12">
            <h2 class="fs-1 text-center fw-bold text-primary">Certificaciones</h2>
         </div>
      </div>

      <div class="row">
         <div class="col-12 col-md-6 bg-primary d-flex flex-column justify-content-center">
            <h3 class="fw-bold text-third">ISO 9001</h3>
            <p class="text-white">
               Diseño, Fabricación y Comercialización de productos plásticos (inyectados, extruídos, manufacturados). Prestación del servicio de inyección, termoformado, extrusión y manufactura. Diseño, fabricación y comercialización de moldes para la industria del plástico.
            </p>
         </div>

         <div class="col-12 col-md-6 text-center">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/certificado-iso-9001.png" alt="ISO 9001" class="img-fluid">
         </div>
      </div>

      <div class="row">
         <div class="col-12 col-md-6 text-center">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/certificado-iatf-16949.png" alt="Certificado IATF 16949" class="img-fluid">
         </div>

         <div class="col-12 col-md-6 bg-secondary d-flex flex-column justify-content-center">
            <h3 class="fw-bold text-third">IATF 16949</h3>
            <p class="text-white">
               Fabricación de piezas plásticas internas y externas.
            </p>
         </div>
      </div>

      <div class="row">
         <div class="col-12 col-md-6 bg-third d-flex flex-column justify-content-center">
            <h3 class="fw-bold text-primary">CALIFICACIÓN OEA</h3>
            <p class="text-primary">
               CALIFICACIÓN DE OPERADOR ECONÓMICO AUTORIZADO para importar y exportar en la categoría de seguridad y facilitación.
            </p>
         </div>

         <div class="col-12 col-md-6 text-center">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/certificado-oea.png" alt="CALIFICACIÓN OEA" class="img-fluid">
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
